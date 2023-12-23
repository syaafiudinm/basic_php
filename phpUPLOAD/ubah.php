<?php 

require 'functions.php';

$NIM = $_GET['NIM'];

$mhs = query("SELECT * FROM mahasiswa WHERE NIM = '$NIM'")[0];

 if ( isset($_POST["submit"]) ) {

    if ( ubah($_POST) > 0 ){
        echo"<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    }else{
        echo"<script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>";
    }

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data Mahasiswa</title>
</head>
<body>

    <h1>ubah data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="NIM">NIM</label>
                <input type="text" name="NIM" id="NIM" required value="<?= $mhs ["NIM"]; ?>">
            </li>
            <li>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" required value="<?= $mhs ["Nama"]; ?>">
            </li>
            <li>
                <label for="email">email</label>
                <input type="text" name="email" id="email" required value="<?= $mhs ["email"]; ?>">
            </li>
            <li>
                <label for="Prodi">Prodi</label>
                <input type="text" name="Prodi" id="Prodi" required value="<?= $mhs ["Prodi"]; ?>">
            </li>
            <li>
                <label for="gambar">gambar</label> <br>
                <img src="img/<?= $mhs["gambar"] ?>" width="50" > <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">update data!</button>
            </li>
            
        </ul>
    </form>

    <a href="index.php">Kembali Ke data Mahasiswa</a>
    
</body>
</html>