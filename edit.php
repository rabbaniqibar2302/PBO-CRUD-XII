<?php
include("config.php");
$id = $_GET['id'];
$cek = mysqli_query($host,"select * from user where id=$id");
while ($user = mysqli_fetch_array($cek)){
    $nama = $user['nama'];
    $email = $user['email'];
    $no_hape = $user['no_hape'];
}
?>

<html>

<head>
    <title>Edit</title>
</head>

<body>
    <a href="index.php">Back To Home</a>
    <h2>Edit Data</h2>

    <form action="config.php" method="post">
        <div>
            <input type="hidden" name="id" value="<?php echo $id?>">
        </div>
        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="<?php echo $nama?>">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email?>">
        </div>
        <div>
            <label>No Hape</label>
            <input type="number" name="no_hape" value="<?php echo $no_hape?>">
        </div>
        <div>
            <input type="submit" value="Edit" name="edit">
        </div>
    </form>

</body>

</html>