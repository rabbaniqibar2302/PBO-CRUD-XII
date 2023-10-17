<?php

class db{
    var $connect;
    var $host = "localhost";
    var $name = "root";
    var $pass = null;
    var $db = "crud";

    function __construct(){
        $this->connect = mysqli_connect(
            $this->host,
            $this->name,
            $this->pass,
            $this->db
        );
    }

    function show_data(){
        $show = mysqli_query($this->connect,"select * from user");
        while($data = mysqli_fetch_array($show)){
            $hasil[] = $data;
        }
        return $hasil;
    }
    
    function detail_data($id){
        $show = mysqli_query($this->connect,"select * from user where = $id");
        while($data = mysqli_fetch_array($show)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function add_data($nama, $email, $no_hape){
        mysqli_query($this->connect,"insert into user
        values(
        null,
        '$nama',
        '$email',
        '$no_hape')");
    }

    function hapus_data($id){
        mysqli_query($this->connect,"delete from user where 
        id = '$id'");
    }

    function update_data($id,$nama,$email,$no_hape){
        mysqli_query($this->connect,"update user set
        nama = '$nama',
        email = '$email',
        no_hape = '$no_hape'
        where id = '$id'
        ");
    }

    

}

?>