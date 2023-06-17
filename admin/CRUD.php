<!DOCTYPE html>
<html>

<head>
    <title>CRUD Data AI</title>
    <link rel="stylesheet" href="../css/CRUDstyle.css">
</head>

<body>

    <h2>CRUD DATA AI</h2>
    <br />
    <a href="tambah.php">+ TAMBAH AI</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Pilihan</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from ai2");
        while($d = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td>
                <a href="full_desc.php?id=<?php echo $d['id']; ?>">Lihat</a>
                <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>

</html>