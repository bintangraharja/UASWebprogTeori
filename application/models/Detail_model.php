<?php
Class Detail_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function get_product($id){
        $query = $this->db->query("Select * From menu Where ConsoleID ='$id'");

        return $query-> result_array();
    }
    function add_temp($value){
        $this->db->insert('temporder', $value);
    }
    function check_product($id, $userid){
        $query = $this->db->query("Select * From temporder Where ConsoleID ='$id' AND UserID = '$userid'");
        if($query->num_rows() == 1){
            return 'true';
        }else{
            return 'false';
        }
    }

    function get_temp($userid){
        $query = $this->db->query("SELECT temporder.ConsoleID, temporder.UserID, menu.ConsoleName, menu.Price
        FROM temporder
        LEFT OUTER JOIN menu ON menu.ConsoleID = temporder.ConsoleID
        WHERE temporder.UserID = '2'
        GROUP BY temporder.UserID");
        return $query->result_array();
    }
}
?>