<?php

$conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040134");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $gambar = htmlspecialchars($data["gambar"]);
    $nama = htmlspecialchars($data["nama"]);
    $desk = htmlspecialchars($data["desk"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "INSERT INTO produk
                VALUES
               ('0', '$gambar', '$nama', '$desk', '$harga')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $gambar = htmlspecialchars($data["gambar"]);
    $nama = htmlspecialchars($data["nama"]);
    $desk = htmlspecialchars($data["desk"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "UPDATE produk SET 
                gambar = '$gambar',
                nama = '$nama',
                desk = '$desk',
                harga = '$harga'
              WHERE id = $id
    ";

    mysqli_query($conn,  $query);
    
    return mysqli_affected_rows($conn);

}

function cari($keyword){
    $query = "SELECT * FROM produk
                WHERE 
              nama LIKE '%$keyword%'  
    ";
    return query($query);
}
