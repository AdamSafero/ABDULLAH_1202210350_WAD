<?php
require 'function.php';

$mahasiswa = query("SELECT * FROM figure");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>

<h1>Daftar Figure</h1>

<a href="tambah.php">Tambah data figure</a>
<br></br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>stok</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>

    <?php $i=1;?>
    <?php foreach ($mahasiswa as $row) :?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="<?php echo $row ["Gambar"]; ?>" alt="" width="200"></td>
        <td><?= $row["Nama"]; ?></td>
        <td><?= $row["Stok"]; ?></td>
        <td><?= $row["Harga"]; ?></td>
        <td>
            <?= $row["Deskripsi"]; ?>
        </td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</body>
</html>