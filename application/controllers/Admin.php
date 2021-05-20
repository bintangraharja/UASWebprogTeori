<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('home_model');
    }
    public function index(){
        if($this->session->userdata('userID') != '1'){
            $this->session->sess_destroy();
            redirect('home');
        }
        $data['product'] = $this->home_model->get_product();
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidebarAdmin.php',NULL,TRUE);
        $this->load->view('page/HomeAdmin.php',$data);
    }
    public function orderList(){
        if($this->session->userdata('userID') != '1'){
            $this->session->sess_destroy();
            redirect('home');
        }
        $data['orders'] = $this->admin_model->get_list_order();
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidebarAdmin.php',NULL,TRUE);
        $this->load->view('page/OrderListAdmin.php', $data);
    }
    public function statusAdmin(){
        if($this->session->userdata('userID') != '1'){
            $this->session->sess_destroy();
            redirect('home');
        }
        $id = $this->uri->segment(3);
        $data['orders'] = $this->admin_model->get_details_edit($id);
        $data['OrderID'] = $id;
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidebarAdmin.php',NULL,TRUE);
        $this->load->view('page/StatusAdmin.php', $data);
    }
    public function updateStatus(){
        if(!$this->input->post('Status')){
            redirect('Forbidden');
        }else{
            $Status = $this->input->post('Status');
            $OrderID = $this->input->post('OrderID');
            $this->admin_model->update_status($Status,$OrderID);
            redirect('admin/orderList');
        }
    }
    public function editConsole(){
        if($this->session->userdata('userID') != '1'){
            $this->session->sess_destroy();
            redirect('home');
        }
        $id = $this->uri->segment(3);
        $data['detCon'] = $this->admin_model->get_con($id);
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidebarAdmin.php',NULL,TRUE);
        $this->load->view('page/EditConsoleAdmin.php', $data);
    }
    public function edit_console(){
        $config['upload_path'] = './image_for_captcha/';
        $config['allowed_types'] = 'jpeg|png|jpg';
        $config['max_size'] = 10240;
        $config['max_width'] = 5000;
        $config['max_height'] = 5000;
        $this->load->library('upload',$config);
        $this->admin_model->edit_console();
        redirect('admin');
    }
    public function deleteConsole(){
        $id = $this->uri->segment(3);
        $this->admin_model->delete_console($id);
        redirect('admin');
    }
    public function addConsole(){
        $config['upload_path'] = './image_for_captcha/';
        $config['allowed_types'] = 'jpeg|png|jpg';
        $config['max_size'] = 10240;
        $config['max_width'] = 5000;
        $config['max_height'] = 5000;
        $this->load->library('upload',$config);
        if(! $this->upload->do_upload('imageMenu')){
        redirect('admin');
        }else{
            $image_data = $this->upload->data();
            $imgdata = file_get_contents($image_data['full_path']);
            $file_encode = base64_encode($imgdata);
            $values = array(
                'Pict' => $file_encode,
                'ConsoleID' => $this->input->post('consoleID'),
                'ConsoleName' => $this->input->post('consoleName'),
                'Price' => $this->input->post('price'),
                'Qty'=> $this->input->post('qty'),
                'Description' =>$this->input->post('description'),
                'extPict' => $this->upload->data('file_type')
            );
            $this->admin_model->add_console($values);
            unlink($image_data['full_path']);
            redirect('admin');
        }
    }
}
?>