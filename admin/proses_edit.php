<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$deskripsi = $_POST['deskripsi'];
$link = $_POST['link'];

$query = "UPDATE ai2 SET nama='$nama', tipe='$tipe', deskripsi='$deskripsi', link='$link' WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    echo "Data AI berhasil diperbarui";
} else {
    echo "Gagal memperbarui data AI: " . mysqli_error($koneksi);
}
?>