<?php

Class Admin_model extends CI_Model{
    function __construct(){
        parent:: __construct();
    }
    public function add_console($values){
        $this->db->insert('menu', $values);
    }
    public function get_list_order(){
        $query = $this->db->query(
            "SELECT OrderID, TotalPrice, Status, CONCAT(Fname,' ',Lname) AS FullName
             FROM orders 
             JOIN account ON orders.UserID = account.UserID
            ");
        return $query->result_array();
    }
    public function delete_console($ConsoleID){
        $this->db->delete('menu',['ConsoleID' =>$ConsoleID]);
    }
    public function get_con($id){
        $query = $this->db->query("SELECT * FROM menu WHERE ConsoleID = '$id'");
        return $query->result_array();
    }
    public function edit_console(){
        $ConsoleID = $this->input->post('consoleID');
        $ConsoleName = $this->input->post('consoleName');
        $Price = $this->input->post('price');
        $Qty = $this->input->post('qty');
        $Desc = $this->input->post('description');
        if(!$this->upload->do_upload('imageMenu')){
        $this->db->query(
                "UPDATE `menu` SET `ConsoleName`= '$ConsoleName',
                `Price`= $Price,`Qty`= $Qty,`Description`='$Desc' WHERE ConsoleID = '$ConsoleID'
                ");
        }else{
            $image_data = $this->upload->data();
            $imgdata = file_get_contents($image_data['full_path']);
            $file_encode = base64_encode($imgdata);
            $this->db->delete('menu',['ConsoleID' => $ConsoleID]);
            $values = array(
                'Pict' => $file_encode,
                'ConsoleID' => $ConsoleID,
                'ConsoleName' => $ConsoleName,
                'Price' => $Price,
                'Qty'=> $Qty,
                'Description' => $Desc,
                'extPict' => $this->upload->data('file_type')
            );
            $this->db->delete('menu',['ConsoleID' => $ConsoleID]);
            $this->db->insert('menu',$values);
            unlink($image_data['full_path']);
        }
        redirect('admin');
    }
}
?>