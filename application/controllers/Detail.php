<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('detail_model');
    }
    function _remap($id){
        if($this->input->post('submit')){
            redirect('home');
        }
        $this->index($id);
    }

    public function index($id){
        $this->load->model('detail_model');
        $data['product'] = $this->detail_model->get_product($id);
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        if($this->session->userdata('status') != 'login'){
            $data['sidebar'] = $this->load->view('sidebar/sidebar.php', $data, TRUE);
            }else{
            $data['sidebar'] = $this->load->view('sidebar/sidebarIn.php', $data, TRUE);
            }
        $this->load->view('page/DetailConsole.php',$data);
    }
    
}
?>