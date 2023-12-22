<?php 

require 'functions.php';

 if ( isset($_POST["submit"]) ) {

    if ( tambah($_POST) > 0 ){
        echo"<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    }else{
        echo"<script>
                alert('data gagal ditambahkan!');
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
    <title>Tambah data Mahasiswa</title>
</head>
<body>

    <h1>Tambah data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="NIM">NIM</label>
                <input type="text" name="NIM" id="NIM" required>
            </li>
            <li>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" required>
            </li>
            <li>
                <label for="email">email</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="Prodi">Prodi</label>
                <input type="text" name="Prodi" id="Prodi" required>
            </li>
            <li>
                <button type="submit" name="submit">insert data!</button>
            </li>
            
        </ul>
    </form>

    <a href="index.php">Kembali Ke data Mahasiswa</a>
    
</body>
</html>