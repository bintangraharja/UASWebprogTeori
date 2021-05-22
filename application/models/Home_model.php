<?php


Class Home_model extends CI_Model{

    function construct(){
        parent::construct();
    }
    function get_product(){
        $query = $this->db->query("Select * From menu");

        return $query-> result_array();
    }
    function search_product($id){
        $query = $this->db->query("SELECT * FROM menu WHERE ConsoleName LIKE '%$id%'");
        return $query->result_array();
    }
}
?>