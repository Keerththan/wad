<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Order {
    private $order_id;
    private $product_name;
    private $quantity;
    private $shipping_address;
    private $delivery_days; 
    private $payment_method;

    public function __construct($product_name, $quantity, $shipping_address, $delivery_days, $payment_method) {
        $this->product_name = $product_name;
        $this->quantity = $quantity;
        $this->shipping_address = $shipping_address;
        $this->delivery_days = $delivery_days; 
        $this->payment_method = $payment_method;
    }

    public function save($db_connection) {
        $sql = "INSERT INTO orders (product_name, quantity, shipping_address, delivery_days, payment_method) VALUES (:product_name, :quantity, :shipping_address, :delivery_days, :payment_method);";
        try {
            $stmt = $db_connection->prepare($sql);
            $stmt->bindParam(":product_name", $this->product_name);
            $stmt->bindParam(":quantity", $this->quantity);
            $stmt->bindParam(":shipping_address", $this->shipping_address);
            $stmt->bindParam(":delivery_days", $this->delivery_days);
            $stmt->bindParam(":payment_method", $this->payment_method);
            $stmt->execute(); 
            return true;
        } catch (PDOException $ex) { 
            echo "Error: " . $ex->getMessage();
            return false;
        }
    }
}
