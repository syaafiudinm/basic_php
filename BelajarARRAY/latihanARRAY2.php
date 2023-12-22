<?php 

$mahasiswa = [
    ["Andi Dian Mustika Anugrah", "D121221085", "Kesehatan Masyarakat", "altafpasallo12@gmail.com"],
    ["Andi Syafiudin Musafr", "D121221086", "Kesehatan Masyarakat", "altafpasallo13@gmail.com"],
    ["Adatong", "D12122109", "Kesehatan Masyarakat", "asijfioffwefi"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        li{
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Dafar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>nama = <?= $mhs[0]; ?></li>
        <li>nim = <?= $mhs[1]; ?></li>
        <li>prodi = <?= $mhs[2]; ?></li>
        <li>email = <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>