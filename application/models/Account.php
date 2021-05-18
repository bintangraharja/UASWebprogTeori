<?php

Class Account extends CI_Model{

    function __construct(){
        parent:: __construct();
    }
    public function regis($values){
        $this->db->insert('account', $values);
    }
}

?>