<?php

class db{
    var $query;
    var $host = "localhost";
    var $name = "root";
    var $pass = null;
    var $db = "crud";

    function __construct(){
        $this->query = mysqli_connect(
            $this->host,
            $this->name,
            $this->pass,
            $this->db
        );
    }

    function show_data(){
        $query = self::$query;;
        $show = mysqli_query($query,"select * from user_oop");
        while($data = mysqli_fetch_array($show)){
            $hasil[] = $data;
        }
        return $hasil;

    }

    

}

?>