<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    public function add_console(){
        $values = array(
            'ConsoleID' => $this->input->post('fname'),
            'ConsoleName' => $this->input->post('lname'),
            'Price' => $this->input->post('email'),
            'Qty' => md5($this->input->post('password')),
            'Description' => $this->input->post('address'),
            'extPict' => $this->input->post('phone')
        );
    }
}
?>