<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrderList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account');  
        $this->load->model('detail_model');
    }
    public function index(){
        if($this->session->userdata('status') == 'login'){
            $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
            $id = $this->session->userdata('userID');
            $data['order'] = $this->account->get_order($id);
            $data['orders'] = $this->detail_model->get_temp($this->session->userdata('userID'));
            $data['sidebar'] = $this->load->view('sidebar/sidebarIn.php', $data, TRUE);
            $this->load->view('page/OrderList.php',$data);
        }else{
            redirect('Login');
        }
    }
    public function update(){
        $orderId = $this->uri->segment(3);
        $this->account->rdy_to_pick($orderId);
        redirect('OrderList');
    }
}
?>