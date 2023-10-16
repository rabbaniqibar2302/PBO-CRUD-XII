<?php

class db{
    var $host = "localhost";
    var $name = "root";
    var $pass = null;
    var $db = "crud";

    function __construct(){
        mysqli_connect(
            $this->host,
            $this->name,
            $this->pass,
            $this->db
        );
    }

}

?>