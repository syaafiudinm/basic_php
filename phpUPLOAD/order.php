<?php 

require 'functions.php';

$NIM = $_GET["NIM"];

if ( order($NIM) > 0 ){
    echo"<script>
                alert('data berhasil disortir!');
                document.location.href = 'index.php';
        </script>";
}else{
    echo"<script>
                alert('data gagal disortir!');
                document.location.href = 'index.php';
        </script>";
}

?>