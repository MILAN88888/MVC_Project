<?php

class db
{
    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "smart";

        $this->conn = mysqli_connect($servername, $username, $password,$database);
    }
    function getConnection()
    {
        return $this->conn;
    }
}

?>