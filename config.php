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



?>