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
    public function get_order($id){
        $query = $this->db->query(
        "SELECT orders.OrderID, orders.Duration, orders.TotalPrice, orders.Status, details.ConsoleID, menu.ConsoleName  
        FROM orders LEFT OUTER JOIN details ON details.OrderID = orders.OrderID
                    LEFT OUTER JOIN menu ON menu.ConsoleID = details.ConsoleID
                    WHERE orders.UserID = '$id' 
                    GROUP BY orders.OrderID");
        return $query->result_array();
    }
    public function rdy_to_pick($orderId){
        $this->db->query("UPDATE `orders` SET `Status`='Siap di Pick-Up' WHERE OrderID = '$orderId'");
    }
    public function get_det($id){
        $query = $this->db->query(
        "SELECT   menu.ConsoleID, menu.ConsoleName, orders.Duration
        From details 
        JOIN menu ON menu.ConsoleID = details.ConsoleID
        JOIN orders ON orders.OrderID = details.OrderID
        WHERE details.OrderID = '$id'");
        return $query->result_array();
    }
    public function get_stts($id){
        $query = $this->db->query("Select Status From orders WHERE OrderID ='$id' ");
        foreach($query->result_array() as $stts){
            $status = $stts['Status'];
        }
        return $status;
    }
}


?>