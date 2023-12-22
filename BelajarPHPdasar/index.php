<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>
<body>
    <?php $nama_depan = "syaafiudin"; ?>
    <?php $nama_belakang = "musafir"; ?>

    <h1><?php echo "nama saya adalah" . " " . $nama_depan ." " . $nama_belakang; ?></h1>
    
    <?php for( $i = 0; $i < 5; $i++ ){
        echo $nama_depan . " " . "<br>";
    } ?>

    <br>

    <?php
    $i = 0;
     while($i < 5) {
        echo $nama_belakang . " " . "<br>";
        $i++;
    } ?>

<div class="table">
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i=1; $i <= 5; $i++) : ?>
            <?php if ($i %2 == 1) : ?>
                <tr class="warna-baris">
            <?php else: ?>
                <tr>
            <?php endif; ?>
                <?php for ($j =1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>    
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</div>

<?php 
    $x = 10;
    if( $x < 8 ){
        echo "benar!";
    }elseif ( $x == 10){
        echo "bingo!";
    }else{
        echo "salah!";
    }
?>
</body>
</html>
