<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    
    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"];?></li>
        <li><?= $_GET["prodi"];?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>


    <a href="latihan1.php">Kembali kedaftar Mahasiswa</a>
</body>
</html>