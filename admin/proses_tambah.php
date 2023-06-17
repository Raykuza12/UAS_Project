<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$deskripsi = $_POST['deskripsi'];
$link = $_POST['link'];
$image = $_FILES['image']['tmp_name'];

// Mengubah gambar menjadi data blob
$imageData = addslashes(file_get_contents($image));

$query = "INSERT INTO ai2 (nama, tipe, deskripsi, link, img) VALUES ('$nama', '$tipe', '$deskripsi', '$link', '$imageData')";

if (mysqli_query($koneksi, $query)) {
    echo "Data AI berhasil ditambahkan";
} else {
    echo "Gagal menambahkan data AI: " . mysqli_error($koneksi);
}
?>