<?php
$conn = mysqli_connect("localhost", "root", "", "popup parade");


if (isset($_POST["submit"])){
    $Gambar = $_POST["Gambar"];
    $Nama = $_POST["Nama"];
    $Stok = $_POST["Stok"];
    $Harga = $_POST["Harga"];
    $Deskripsi = $_POST["Deskripsi"];

    $query = "INSERT INTO figure
                VALUES 
                ('', '$Gambar', '$Nama', $Stok, '$Harga', '$Deskripsi')
                ";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Figure</title>
</head>
<body>
    <h1>Tambah data Figure</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="Gambar">Gambar : </label>
                <input type="text" name="Gambar" id="Gambar">
            </li>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id="Nama">
            </li>
            <li>
                <label for="Stok">Stok : </label>
                <input type="text" name="Stok" id="Stok">
            </li>
            <li>
                <label for="Harga">Harga : </label>
                <input type="text" name="Harga" id="Harga">
            </li>
            <li>
                <label for="Deskripsi">Deskripsi : </label>
                <input type="text" name="Deskripsi" id="Deskripsi">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>