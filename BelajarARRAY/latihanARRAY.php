<?php 

$angka = [3,4,6,44,2,23,5,7,10,4,5,32,4];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            color: salmon;
            border: solid;
            float: left;
            margin: 5px;
        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for( $i = 0; $i < count($angka); $i++){ ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach ?>
</body>
</html>