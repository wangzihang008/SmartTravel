<!DOCTYPE html>
<?php
namespace database\Connection;

class Connection{
    protected $servername;
    protected $username;
    protected $password;
    protected $conn;

    function __constractor(){
        $this->servername = "192.168.64.2";
        $this->username = "Smart2-Travel0-Db18";
        $this->password = "Smart2-Travel0-Db18";
    }

    function connect(){
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        //echo "Connected successfully";
    }

    function getConn(){
        return $this->conn;
    }
}
    
