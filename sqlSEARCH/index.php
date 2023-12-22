<?php
require 'functions.php';

$mahasiswa = query("select * from mahasiswa");

if ( isset($_POST["keyword"]) > 0 ){
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
    <a href="order.php">Sortir datanya berdasarkan NIM!</a>
    <br>
    <br>

    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword anda" autocomplete="off">
        <button type="submit" name="cari" >terawang!</button>
        <br>
        <br>
        <br>

    </form>
    
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Prodi</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach( $mahasiswa as $row ) : ?>
        <tr>
            <td><?php echo $i ?></td>
            <td>
                <a href="ubah.php?NIM=<?= $row["NIM"]; ?>">Ubah</a> |
                <a href="delete.php?NIM=<?= $row["NIM"]; ?>" onclick="return confirm('apakah ingin menghapus data?');">Hapus </a>
            </td>
            <td><?php echo $row["NIM"] ?></td>
            <td><?php echo $row["Nama"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["Prodi"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>
</html>