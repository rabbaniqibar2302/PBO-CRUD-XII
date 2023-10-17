<html>
    <head>
        <title>Tambah Data | CRUD OOP</title>
    </head>
    <body>
        <h1>tambah data</h1>
        <a href="index.php">Back</a>
        <form action="proses.php?aksi=tambah" method="post">
            <div>
                <label>Nama</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>No Hape</label>
                <input type="number" name="no_hape">
            </div>
            <div>
                <input type="submit" value="Add">
            </div>
        </form>
    </body>
</html>