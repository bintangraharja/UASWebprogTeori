<?php

Class Account extends CI_Model{

    function __construct(){
        parent:: __construct();
    }
    public function regis($values){
        $this->db->insert('account', $values);
    }
    public function login($email, $password){
        $email = $this->db->escape($email);
        $password = $this->db->escape($password);
        $query = $this->db->query("Select * From account WHERE Email = $email AND Password = $password LIMIT 1");
        return $query->row_array();
    }
    public function getakun($email, $password){
        $email = $this->db->escape($email);
        $password = $this->db->escape($password);
        $query = $this->db->query("Select * From account WHERE Email = $email AND Password = $password LIMIT 1");
        return $query->row_array();
    }
    public function order($id, $durasi, $total){
        $values = array(
            'UserID' => $id,
            'Duration' => $durasi,
            'TotalPrice' => $total,
            'Status' => 'On Delivery'
        );
        $this->db->insert("orders",$values);
        $orderID = $this->db->insert_id();

        $query = $this->db->query("SELECT * FROM temporder WHERE UserID = $id");
        $result = $query->result_array();
        
        foreach($result as $row){
            $values = array(
                'OrderID' => $orderID,
                'ConsoleID' => $row['ConsoleID']
            );
            $CId = $row['ConsoleID'];
            $this->db->query("UPDATE `menu` SET `Qty`= `Qty`-1 WHERE ConsoleID = '$CId'");
            $this->db->insert('details',$values);
        }

        $this->db->delete('temporder',['UserID' => $id]);
    }
    public function get_order($id){
        $id = $this->db->escape($id);
        $query = $this->db->query(
        "SELECT orders.OrderID, orders.Duration, orders.TotalPrice, orders.Status, details.ConsoleID, menu.ConsoleName , menu.Pict, menu.extPict
        FROM orders LEFT OUTER JOIN details ON details.OrderID = orders.OrderID
                    LEFT OUTER JOIN menu ON menu.ConsoleID = details.ConsoleID
                    WHERE orders.UserID = $id 
                    GROUP BY orders.OrderID");
        return $query->result_array();
    }
    public function rdy_to_pick($orderId){
        $orderId = $this->db->escape($orderId);
        $this->db->query("UPDATE `orders` SET `Status`='Ready to Pick-Up' WHERE OrderID = $orderId");
    }
    public function get_det($id){
        $id = $this->db->escape($id);
        $query = $this->db->query(
        "SELECT   menu.Pict, menu.extPict, menu.ConsoleID, menu.ConsoleName, orders.Duration
        From details 
        JOIN menu ON menu.ConsoleID = details.ConsoleID
        JOIN orders ON orders.OrderID = details.OrderID
        WHERE details.OrderID = $id");
        return $query->result_array();
    }
    public function get_stts($id){
        $id = $this->db->escape($id);
        $query = $this->db->query("Select Status From orders WHERE OrderID =$id");
        foreach($query->result_array() as $stts){
            $status = $stts['Status'];
        }
        return $status;
    }
}


?>