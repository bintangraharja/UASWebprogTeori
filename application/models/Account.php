<?php

Class Account extends CI_Model{

    function __construct(){
        parent:: __construct();
    }
    public function regis($values){
        $this->db->insert('account', $values);
    }
    public function login($email, $password){
        $query = $this->db->query("Select * From account WHERE Email = '$email' AND Password = '$password' LIMIT 1");
        return $query->row_array();
    }
    public function getakun($email, $password){
        $query = $this->db->query("Select * From account WHERE Email = '$email' AND Password = '$password' LIMIT 1");
        return $query->row_array();
    }
}

?>