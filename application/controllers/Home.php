<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
    {
        $data['product'] = $this->home_model->get_product();
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        if($this->session->userdata('status') != 'login'){
        $data['sidebar'] = $this->load->view('sidebar/sidebar.php', $data, TRUE);
        }else{
        $data['sidebar'] = $this->load->view('sidebar/sidebarIn.php', $data, TRUE);
        }
        $this->load->view('page/HomePage.php',$data);
    }
    public function showImg(){
        $id = $this->uri->segment(3);
        $this->load->model('home_model');
        $this->home_model->get_image($id);
    }
    public function showDetail(){
        $id = $this->uri->segment(3);
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidebar.php', $data, TRUE);
        $this->load->view('page/DetailConsole.php',$data);
    }

}
?>