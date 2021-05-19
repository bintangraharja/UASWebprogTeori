<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrderDetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('detail_model');
        $this->load->model('account');
    }
    function _remap($id){
        $this->index($id);
    }

    public function index($id){
        if($this->session->userdata('status') == 'login'){
            $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
            $data['Oid'] = $id;
            $data['orderDet'] = $this->account->get_det($id);
            $data['Status'] = $this->account->get_stts($id);
            $data['orders'] = $this->detail_model->get_temp($this->session->userdata('userID'));
            $data['sidebar'] = $this->load->view('sidebar/sidebarIn.php', $data, TRUE);
            $this->load->view('page/OrderDetails.php',$data);
            }else{
            redirect('Login');
            }  
        
    }
    
}
?>