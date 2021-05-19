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
    public function orderList(){
        $data['orders'] = $this->admin_model->get_list_order();
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidebarAdmin.php',NULL,TRUE);
        $this->load->view('page/OrderListAdmin.php', $data);
    }
    public function editConsole(){
        $id = $this->uri->segment(3);
        $data['style'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidebarAdmin.php',NULL,TRUE);
        $this->load->view('page/EditConsoleAdmin.php', $data);
    }
    public function deleteConsole(){
        $id = $this->uri->segment(3);
        $this->admin_model->delete_console($id);
        redirect('home');
    }
}
?>