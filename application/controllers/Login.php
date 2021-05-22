<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Account');
        $this->load->helper("file");
    }

    public function index()
    {
        if($this->session->userdata('status')){
            redirect('home');
        }
        if ($this->input->post('submit')) {
            $captcha_insert = $this->input->post('captcha');
            $contain_sess_captcha = $this->session->userdata('valuecaptchaCode');
            if ($captcha_insert === $contain_sess_captcha) {
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
                delete_files("image_for_captcha");
                $cek = $this->Account->login($email,$password);
                if($cek > 0){
                    
                    $akun = $this->Account->getakun($email, $password);
                    
                    $data_session = array(
                        'name' => $akun['FName'] ,
                        'userID' =>$akun['UserID'],
                        'status' => "login"
                    );
                    $this->session->set_userdata($data_session);
                    if($akun['UserID']== "1"){
                        redirect('admin');
                    }else{
                        redirect('home');
                    }
                }else{
                    $this->session->sess_destroy();
                    $data['failInfo'] = "Email/Password are wrong";
                }
            
            } else {
                $data['failInfo'] = "Captcha didn't match!";
            }
        }
        delete_files("image_for_captcha");
        $config = array(
            'word' => '',
            'img_url' => base_url() . 'image_for_captcha/',
            'font_path' => FCPATH .'/assets/Font/verdana.ttf',
            'img_path' => 'image_for_captcha/',
            'img_height' => 45,
            'word_length' => 5,
            'img_width' => '150',
            'font_size' => 20
        );
        $captcha = create_captcha($config);
        $this->session->unset_userdata('valuecaptchaCode');
        $this->session->set_userdata('valuecaptchaCode', $captcha['word']);
        $data['captchaImg'] = $captcha['image'];
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidebar.php', $data, TRUE);
        $this->load->view('page/Login.php',$data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect();
    }
}
?>