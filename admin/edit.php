<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM ai2 WHERE id = '$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit AI</title>
    <link rel="stylesheet" href="../css/editstyle.css">
</head>

<body>
    <h2>Edit AI</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required><br><br>

        <label for="tipe">Tipe:</label>
        <input type="text" name="tipe" id="tipe" value="<?php echo $data['tipe']; ?>" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi" id="deskripsi" rows="4" required><?php echo $data['deskripsi']; ?></textarea><br><br>

        <label for="link">Link:</label>
        <input type="text" name="link" id="link" value="<?php echo $data['link']; ?>" required><br><br>

        <input type="submit" value="Update">
    </form>
</body>

</html>