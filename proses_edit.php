<?php
include("config.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hape = $_POST['no_hape'];

$edit = mysqli_query($host,"update user set nama='$nama', email='$email', no_hape='$no_hape' where id='$id'");

if($edit){
    ?>
    <script>
        alert("Data Berhasil Di Edit");
        window.location.href = "index.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Data tidak Berhasil Di Edit");
        window.location.href = "edit.php";
    </script>
    <?php
}
