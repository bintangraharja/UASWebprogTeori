<?php
Class Detail_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function get_product($id){
        $query = $this->db->query("Select * From menu Where ConsoleID ='$id'");

        return $query-> result_array();
    }
}
?>