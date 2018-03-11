<?php

namespace database\CreateTable;
use databse\Connection;

class CreateTable{
    protected $sql;
    protected $_connection;
    
    function __construct(
            Connection $connection) {
        $this->_connection = $connection;
        $this->sql = "";
    }
    
    function setSQL($tableName, $json_elements = []){
        $this->sql = "CREATE TABLE " + $tableName + " ( ";
        $characters = json_decode($json_elements);
        foreach($characters as $element){
            $this->sql += $element->name + " ";
            $this->sql += $element->type + " ";
            $this->sql += $element->attr + " ";
            $this->sql += $element->isNull + " ";
            $this->sql += $element->comment + ",";
        }
    }
    
    function createTable($tableName, $json_elements = []){
        $this->_connection->connect();
        $conn = $this->_connection->getConn();
        $this->setSQL($tableName, $json_elements);
        if (mysqli_query($conn, $this->sql)) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }
    }
}

    