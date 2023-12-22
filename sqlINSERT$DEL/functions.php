<?php 
$conn = mysqli_connect("localhost", "root", "", "mahasiswaphp");


function query($query){ 
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    } 
    return $rows;
}

function tambah($data){
    global $conn;
    $NIM = htmlspecialchars($data["NIM"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $email = htmlspecialchars($data["email"]);
    $Prodi = htmlspecialchars($data["Prodi"]);

    $query = "INSERT INTO mahasiswa 
                VALUES('', '$NIM', '$Nama', '$email', '$Prodi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

    return mysqli_affected_rows($conn);
}

?>