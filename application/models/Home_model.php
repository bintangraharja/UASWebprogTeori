<?php
Class Home_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function get_product(){
        $query = $this->db->query("Select * From menu");

        return $query-> result_array();
    }
    function get_image($id){
        $query = $this->db->query("Select * From menu WHERE ConsoleID = '$id'");
        foreach($query->result_array() as $consol){
            $image = $consol['Pict'];
        }
        echo $image;
    }
}
?>