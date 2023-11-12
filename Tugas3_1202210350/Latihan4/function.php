<?php
$conn = mysqli_connect("localhost", "root", "", "popup parade");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);;
    $rows = [];
    while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;
    $Gambar = htmlspecialchars( $data["Gambar"]);
    $Nama = htmlspecialchars( $data["Nama"]);
    $Stok = htmlspecialchars($data["Stok"]);
    $Harga = htmlspecialchars($data["Harga"]);
    $Deskripsi = htmlspecialchars($data["Deskripsi"]);

    $query = "INSERT INTO figure
                VALUES 
                ('', '$Gambar', '$Nama', $Stok, '$Harga', '$Deskripsi')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $Gambar = htmlspecialchars( $data["Gambar"]);
    $Nama = htmlspecialchars( $data["Nama"]);
    $Stok = htmlspecialchars($data["Stok"]);
    $Harga = htmlspecialchars($data["Harga"]);
    $Deskripsi = htmlspecialchars($data["Deskripsi"]);

    $query = "UPDATE figure SET Gambar = '$Gambar', Nama = '$Nama', Stok = $Stok, Harga = '$Harga', Deskripsi = '$Deskripsi' WHERE id = $id";
                
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>