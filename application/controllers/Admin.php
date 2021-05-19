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
    public function addConsole(){
        $config['upload_path'] = './image_for_captcha/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = 500;
        $config['max_width'] = 1920;
        $config['max_height'] = 1080;
        $this->load->library('upload',$config);
        if(! $this->upload->do_upload('imageMenu')){
        redirect('home');
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
            redirect('home');
        }
    }
}
?>