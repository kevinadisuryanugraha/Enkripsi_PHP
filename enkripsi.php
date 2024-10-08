<?php

error_reporting(0);

// $pesan_rahasia = "Aku Sayang Kamu";
$kalimat_1 = $_POST['pesan_1'];
$kalimat_2 = $_POST['pesan_2'];

function enkripsi($kalimat_1)
{
    $isi = base64_encode($kalimat_1);
    return $isi;
}

function deskripsi($kalimat_2)
{
    $isi = base64_decode($kalimat_2);
    return $isi;
}

$hasil_enkripsi = enkripsi($kalimat_1);
$hasil_deskripsi = deskripsi($kalimat_2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form_1 {
            background-color: brown;
            width: 600px;
        }

        .form_2 {
            background-color: brown;
            width: 600px;
        }
    </style>
</head>
<body>
    <center>
    <form action="enkripsi.php" method="post" class="form_1">
        <h1>Text yang mau di enkripsi</h1>
        <input type="text" name="pesan_1" value="<?php echo $_POST['pesan_1']; ?>">

        <h1>Hasil Pesan yang mau di enkripsi</h1>
        <input type="text" name="hasil" value="<?php
            echo $hasil_enkripsi;
            ?>">

        <br>

        <input type="submit" name="button">
    </form>

    <br>
    <br>

    <form action="enkripsi.php" method="post" class="form_2">
        <h1>Text yang mau di deskripsi</h1>
        <input type="text" name="pesan_2" value="<?php echo $hasil_enkripsi; ?>">

        <h1>Hasil Pesan yang mau di deskripsi</h1>
        <input type="text" name="hasil" value="<?php
            echo $hasil_deskripsi;
            ?>">

        <br>

        <input type="submit" name="button">
    </form>
    </center>
</body>
</html>