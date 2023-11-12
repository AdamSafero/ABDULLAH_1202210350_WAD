<?php
require 'function.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM figure WHERE id = '$id'")[0];


if (isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diupdate');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal diupdate');
            document.location.href = 'index.php';
        </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data Figure</title>
</head>
<body>
    <h1>Ubah data Figure</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"];?>">
        <ul>
            <li>
                <label for="Gambar">Gambar : </label>
                <input type="text" name="Gambar" id="Gambar" required value="<?= $mhs["Gambar"]?>">
            </li>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id="Nama" required value="<?= $mhs["Nama"]?>">
            </li>
            <li>
                <label for="Stok">Stok : </label>
                <input type="text" name="Stok" id="Stok" required value="<?= $mhs["Stok"]?>">
            </li>
            <li>
                <label for="Harga">Harga : </label>
                <input type="text" name="Harga" id="Harga" required value="<?= $mhs["Harga"]?>">
            </li>
            <li>
                <label for="Deskripsi">Deskripsi : </label>
                <input type="text" name="Deskripsi" id="Deskripsi" required value="<?= $mhs["Deskripsi"]?>">
            </li>
            <li>
                <button type="submit" name="submit">Update Data</button>
            </li>
        </ul>
    </form>
</body>
</html>