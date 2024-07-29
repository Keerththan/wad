<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
class Dbconnector{
    private  $host = "localhost";
    private  $dbname = "my_shop";
    private  $dbuser = "root";
    private  $dbpw = "";
    
    public function getConnection(){
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        try{
            $conn = new PDO($dsn, $this->dbuser, $this->dbpw);
            return $conn;
        } catch (PDOException $ex) {
            echo $ex;
            return null;
        }
    }
}
