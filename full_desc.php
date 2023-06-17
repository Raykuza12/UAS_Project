<?php
include 'koneksi.php';

// Periksa apakah parameter 'id' telah dikirimkan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data dari tabel berdasarkan id
    $query = "SELECT * FROM ai2 WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AI Tool Detail</title>
    <link rel="stylesheet" type="text/css" href="css/style_desc.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;1,700&display=swap"
        rel="stylesheet" />

</head>

<body>
    <section id="tool-detail" class="tool-detail">
        <a href="index.php" class="back-button">&larr; Back</a>
        <h2><span>Ai</span> Tool Detail</h2>
        <div class="container">
            <?php
                $imageData = $data['img'];
                // Mendekode data gambar dari BLOB ke string base64
                $imageDataEncoded = base64_encode($imageData);
                // Menghasilkan tautan data URL untuk gambar (format JPEG)
                $imageSrc = "data:image/jpeg;base64,$imageDataEncoded";
                // Menampilkan gambar
                echo '<img src="' . $imageSrc . '" class="logo-web">';
                ?>
            <p class="nama-tools"><?php echo $data['nama']; ?></p>
            <p class="tipe-tools"><?php echo $data['tipe']; ?></p>
            <hr class="garis-horizontal">
            <p class="deskripsi"><?php echo $data['deskripsi']; ?></p>
            <hr class="garis-horizontal">
            <a href="<?php echo $data['link']; ?>" class="link">Visit</a>
        </div>
    </section>
</body>

</html>
<?php
    } else {
        echo "Data not found.";
    }
} else {
    echo "Invalid request.";
}
?>