<?php

class db{
    var $host = "localhost";
    var $name = "root";
    var $pass = null;
    var $db = "crud";

    function __construct($query = null){
        $query = mysqli_connect(
            $this->host,
            $this->name,
            $this->pass,
            $this->db
        );
    }

    function show_data($query){
        $show = mysqli_query($query,"select * from user");
        while($data = mysqli_fetch_array($show)){
            $hasil[] = $data;
        }
        return $hasil;

    }

    

}

?>