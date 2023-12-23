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
    
    $gambar = upload();
    if ( !$gambar ){
        return false;
    }


    $query = "INSERT INTO mahasiswa (NIM, Nama, email, Prodi, gambar) VALUES('$NIM', '$Nama', '$email', '$Prodi', '$gambar')";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ( $error == 4 ){
        echo "<script>
                alert('pilih gambar terlebih dahulu');
              </script>";
              return false;
    }


    $ekstensiValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if ( !in_array($ekstensiGambar, $ekstensiValid) ){
        echo "<script>
                alert('masukkan tipe gambar yang valid!');
              </script>";
      return false;
    }

    if ( $ukuranFile > 3000000 ){
        echo "<script>
                alert('file terlalu besar!');
              </script>";
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;

    

}

function hapus($NIM) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE NIM='$NIM'");

    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;

    $NIM = htmlspecialchars($data["NIM"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $email = htmlspecialchars($data["email"]);
    $Prodi = htmlspecialchars($data["Prodi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    if( $_FILES['gambar']['error'] === 4 ){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }

    $sql = "UPDATE mahasiswa SET
                NIM = '$NIM',
                Nama = '$Nama',
                email = '$email',
                Prodi = '$Prodi',
                gambar = '$gambar'
              WHERE 
                NIM = '$NIM'";

        mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}



function order($NIM){
    global $conn;
    mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY NIM DESC");

    return mysqli_affected_rows($conn);
}

function cari($keyword){
   $query = "SELECT * FROM mahasiswa 
            WHERE 
            Nama LIKE '%$keyword%' OR
            NIM LIKE '%$keyword%' OR
            email LIKE '%$keyword%'OR
            Prodi LIKE '%$keyword%'
             ";

            return query($query);
}


?>