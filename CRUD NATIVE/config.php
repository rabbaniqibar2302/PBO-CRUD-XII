<?php
// Connect To Database
$host = mysqli_connect("localhost", "root", null, "crud");

if (isset($_POST['tambah'])) {
    // Variabel
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $no_hape = $_POST['no_hape'];

    // Perintah ke dalam tabel
    $tambah = mysqli_query($host, "insert into user values(
    null,
    '$name',
    '$email',
    '$no_hape'
    )");

    // Notifikasi
    if ($tambah) {
    ?>
        <script>
            alert("Data Berhasil Di Tambahkan");
            window.location.href = "index.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Data Tidak Berhasil Di Tambahkan");
            window.location.href = "add.php";
        </script>
    <?php
    }
}

if(isset($_POST['edit'])){
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
}

?>