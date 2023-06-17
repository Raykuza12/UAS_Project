<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM ai2 WHERE id = '$id'");

if ($query) {
    echo "Data AI berhasil dihapus";
} else {
    echo "Gagal menghapus data AI";
}
?>