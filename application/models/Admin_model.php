<?php

Class Admin_model extends CI_Model{
    function __construct(){
        parent:: __construct();
    }
    public function add_console($values){
        $this->db->insert('menu', $values);
    }
}
?>