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
    public function add_console($values){
        $this->db->insert('menu',$values);
    }
}
?>