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
    public function order($id, $durasi, $total){
        $values = array(
            'UserID' => $id,
            'Duration' => $durasi,
            'TotalPrice' => $total,
            'Status' => 'Sedang Dikirim'
        );
        $this->db->insert("orders",$values);
        $orderID = $this->db->insert_id();

        $query = $this->db->query("SELECT * FROM temporder WHERE UserID = '$id'");
        $result = $query->result_array();
        
        foreach($result as $row){
            $values = array(
                'OrderID' => $orderID,
                'ConsoleID' => $row['ConsoleID']
            );
            $this->db->insert('details',$values);
        }
        $this->db->delete('temporder',['UserID' => $id]);
    }
}

?>