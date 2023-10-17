<?php
include 'config.php';
$db = new db();
foreach($db->detail_data($_GET['id']) as $data);
?>
<html>
    <head>
        <title>UPDATE DATA | CRUD OOP</title>
    </head>
    <body>
        <h1>Update Data</h1>
        <form action="proses.php?aksi=update" method="post">
            <div>
                <input type="hidden" name="id" value="<?php echo $data['id']?>">
            </div>
            <div>
                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $data['nama']?>">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $data['email']?>">
            </div>
            <div>
                <label>No Hape</label>
                <input type="number" name="no_hape" value="<?php echo $data['no_hape']?>">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </body>
</html>