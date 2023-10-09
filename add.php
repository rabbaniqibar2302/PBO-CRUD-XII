<html>

<head>
    <title>Tambah Data</title>
</head>

<body>
    <a href="index.php">Back To Home</a>
    <h2>Tambah Data</h2>
    <form action="config.php" method="post">
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
            <!-- trigger -->
            <input type="submit" value="tambah" name="tambah">
        </div>
    </form>
</body>

</html>