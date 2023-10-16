<html>

<head>
    <title>CRUD OOP</title>
</head>

<body>
    <h1>Data User</h1>
    <a href="">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Usia</th>
        </tr>
        <?php
        include 'config.php';
        $db = new db();
        $no = 1;
        foreach($db->show_data() as $data){
            echo "
            <tr>
            <td>".$no++."</td>
            <td>{$data['nama']}</td>
            <td>{$data['email']}</td>
            <td>{$data['no_hape']}</td>
            </tr>
            ";
        }
        ?>
    </table>
</body>

</html>