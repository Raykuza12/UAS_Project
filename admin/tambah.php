<!DOCTYPE html>
<html>

<head>
    <title>Tambah AI</title>
    <link rel="stylesheet" href="../css/tambahstyle.css">
</head>

<body>
    <h2>Tambah AI</h2>
    <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="tipe">Tipe:</label>
        <input type="text" name="tipe" id="tipe" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi" id="deskripsi" rows="4" required></textarea><br><br>

        <label for="link">Link:</label>
        <input type="text" name="link" id="link" required><br><br>

        <label for="image">Gambar:</label>
        <input type="file" name="image" id="image" required><br><br>

        <input type="submit" value="Tambah">
    </form>
</body>

</html>