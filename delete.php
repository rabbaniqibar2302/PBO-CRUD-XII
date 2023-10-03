<?php
include("config.php");

// ambil id dari form
$id = $_GET['id'];

// perintah untuk delete dimana id db sama dengan id form
$delete = mysqli_query($host,"delete from user where id=$id");
?>
<script>
    alert("Data Berhasil di Hapus");
    window.location.href="index.php";
</script>