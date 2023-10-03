<?php
include("config.php");
$tabel = mysqli_query($host, "select * from user");
$i = 1;
?>

<html>

<head>
    <title>CRUD 1</title>
</head>

<body>
    <h2>Data User</h2>
    <a href="add.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Hape</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        while ($user = mysqli_fetch_array($tabel)) {
            echo "<tr>";
            echo "<td>" . $i++ . "</td>";
            echo "<td>" . $user['nama'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "<td>" . $user['no_hape'] . "</td>";
            echo "<td>" . "<a href='edit.php?id=$user[id]'>edit</a>" . "</td>";
            echo "<td>" . "<a href='delete.php?id=$user[id]'>delete</a>" . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>