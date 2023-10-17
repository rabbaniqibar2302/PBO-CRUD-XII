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
}
?>