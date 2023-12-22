<?php
require 'functions.php';
$mahasiswa = query("select * from mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Prodi</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach( $mahasiswa as $row ) : ?>
        <tr>
            <td><?php echo $i ?></td>
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