<?php

use ParagonIE\Sodium\Core\Curve25519\Ge\P2;

Class Home_model extends CI_Model{

    function __construct(){
        parent::__construct();
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