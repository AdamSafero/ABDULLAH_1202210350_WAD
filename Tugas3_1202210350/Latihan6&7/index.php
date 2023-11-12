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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- As a heading -->
<nav class="navbar navbar-light bg-light p-2">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
        <h1>Data Figure</h1>
    </span>
  </div>
</nav>


<div class="d-grid gap-2 col-4 mx-auto p-4">
  <button class="btn btn-primary" type="button"><a href="tambah.php">Tambah data figure</a></button>
</div>
<br></br>

<table class="table table-striped" border="1" cellpadding="10" cellspacing="0">

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
        <td >
            <button type="button" class="btn btn-success"><a href="ubah.php?id=<?php echo $row ["id"]; ?>">Ubah</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="hapus.php?id=<?php echo $row ["id"]; ?>" onclick="return confirm('yakin mau menghapus data?')">Hapus</a></button>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>