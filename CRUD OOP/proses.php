<?php
// connect to database
include "config.php";

// panggil class di dalam file config
$db = new db();

// jika aksi kepencet
$aksi = $_GET['aksi'];

// tambah, hapus, update
if ($aksi == "tambah"){
    $db->add_data($_POST['nama'], $_POST['email'], $_POST['no_hape']);
    header("location:index.php");

}elseif($aksi == "hapus"){
    $db->hapus_data($_GET['id']);
    header("location:index.php");

}elseif($aksi == "update"){
    $db->update_data($_POST['id'], $_POST['nama'], $_POST['email'], $_POST['no_hape']);
    header("location:index.php");

}
