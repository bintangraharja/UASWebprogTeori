<?php
Class Detail_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function get_product($id){
        $id = $this->db->escape($id);
        $query = $this->db->query("Select * From menu Where ConsoleID =$id");

        return $query-> result_array();
    }
    function add_temp($value){
        $cek = $this->db->insert('temporder', $value);
    }
    function check_product($id, $userid){
        $id = $this->db->escape($id);
        $userid = $this->db->escape($userid);
        $query = $this->db->query("Select * From temporder Where ConsoleID =$id AND UserID = $userid");
        if($query->num_rows() == 1){
            return 'true';
        }else{
            return 'false';
        }
    }

    function get_temp($userid){
        $userid = $this->db->escape($userid);
        $query = $this->db->query("SELECT temporder.ConsoleID, temporder.UserID, menu.ConsoleName, menu.Price, menu.Pict, menu.extPict
        FROM temporder
        LEFT OUTER JOIN menu ON menu.ConsoleID = temporder.ConsoleID
        WHERE temporder.UserID = $userid");
        return $query->result_array();
    }

    function del_temp($where){
        return $this->db->delete('temporder',$where);
    }
}
?>