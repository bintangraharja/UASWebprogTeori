<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SignUp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Account');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->input->post('submit')){
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
            if($this->form_validation->run() != false){
                $account = array(
                    'Fname' => $this->input->post('fname'),
                    'Lname' => $this->input->post('lname'),
                    'Email' => $this->input->post('email'),
                    'Password' => md5($this->input->post('password')),
                    'Address' => $this->input->post('address'),
                    'Number' => $this->input->post('phone')
                );
               $this->Account->regis($account);
               redirect('Login');
            }
        }
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidebar.php', $data, TRUE);
        $this->load->view('page/Register',$data);
    }
}
?>