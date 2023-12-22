<?php 

$mahasiswa = [
    [
        "nama" => "syaafiudinm",
        "nim" => "D121221085",
        "prodi" => "TEKNIK INFORMATIKA",
        "email" => "altafpasallo12@gmail.com"
    ],
    [
        "nama" => "Farhan Rizki",
        "nim" => "D121221033",
        "prodi" => "TEKNIK INFORMATIKA",
        "email" => "farhanrixki12@gmail.com",
        "tugas" => [90, 80,100]
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET_POST</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs ["nim"]; ?>&prodi= <?= $mhs["prodi"]; ?>&email= <?= $mhs["email"]; ?>"><?= $mhs["nama"]; ?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
