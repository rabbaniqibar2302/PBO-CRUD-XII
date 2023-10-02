<?php

include("config.php");

$name = $_POST['nama'];
$email = $_POST['email'];
$no_hape = $_POST['no_hape'];

// insert ke dalam tabel
$tambah = mysqli_query($host,"insert into user values(
    null,
    '$name',
    '$email',
    '$no_hape'
    )");

if ($tambah){
    echo "Data Berhasil Di Tambahkan";
}else{
    echo "Data Tidak berhasil di Tambahkan";
}
