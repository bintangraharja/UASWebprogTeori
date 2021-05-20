<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forbidden extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        if($this->session->userdata('status')){
            $this->session->sess_destroy();
        }
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $this->load->view('page/Forbidden.php',$data);
    }
}
?>