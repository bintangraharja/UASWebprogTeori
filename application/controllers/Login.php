<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
<<<<<<< HEAD
        $this->load->model('Account');
        $this->load->helper("file");
=======
        $this->load->model('');
>>>>>>> aa67dd5 (test)
    }

    public function index()
    {
        if ($this->input->post('submit')) {
            print_r("test");exit;
            $captcha_insert = $this->input->post('captcha');
            $contain_sess_captcha = $this->session->userdata('valuecaptchaCode');
            if ($captcha_insert === $contain_sess_captcha) {
<<<<<<< HEAD
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
                // $where = array(
                //     'Email' => $email,
                //     'Password' => md5($password)
                // );
                $cek = $this->Account->login($email,$password);
                if($cek > 0){
                    delete_files("image_for_captcha");
                    $akun = $this->Account->getakun($email, $password);
                    
                    $data_session = array(
                        'name' => $akun['FName'] ,
                        'status' => "login"
                    );
                    $this->session->set_userdata($data_session);
                    if($akun['FName'] == "Admin"){
                        redirect('home/admin');
                    }else{
                        redirect('home');
                    }
                }else{
                    $this->session->sess_destroy();
                    $data['failInfo'] = "Email/Password are wrong";
                }
            
=======
                print_r('Success');exit;
>>>>>>> aa67dd5 (test)
            } else {
                $data['failInfo'] = "Captcha didn't match!";
            }
        }
        $config = array(
            'word' => '',
            'img_url' => base_url() . 'image_for_captcha/',
            'img_path' => 'image_for_captcha/',
            'img_height' => 45,
            'word_length' => 5,
            'img_width' => '150',
            'font_size' => 16
        );
        $captcha = create_captcha($config);
        $this->session->unset_userdata('valuecaptchaCode');
        $this->session->set_userdata('valuecaptchaCode', $captcha['word']);
        $data['captchaImg'] = $captcha['image'];
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidebar.php', $data, TRUE);
        $this->load->view('page/Login.php',$data);
    }
    public function refresh()
    {
        $config = array(
            'word' => '',
            'img_url' => base_url() . 'image_for_captcha/',
            'img_path' => 'image_for_captcha/',
            'img_height' => 45,
            'word_length' => 5,
            'img_width' => '150',
            'font_size' => 16
        );
        $captcha = create_captcha($config);
        $this->session->unset_userdata('valuecaptchaCode');
        $this->session->set_userdata('valuecaptchaCode', $captcha['word']);
        echo $captcha['image'];
    }
<<<<<<< HEAD
    public function logout(){
        $this->session->sess_destroy();
        redirect();
    }
=======
>>>>>>> aa67dd5 (test)
}
?>