<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box">
        <div class="atas"><h1>DATA DIRI</h1></div>
        <div class="kiri">
            <div class="gambar"></div>
        </div>
        <div class="kanan">
            <pre> Nama:     Salsabilla Putri Ranesti<hr></pre>
            <pre> Nit:      2223612<hr></pre>
            <pre> TTL:      09-Januari-2007<hr></pre>
            <pre> Jurusan:  RPL<hr></pre>
            <pre> Tgl Pengumpulan:  06 Februari<hr></pre>
            <pre> Alamat:   Kalijati Barat<hr></pre>
            </div>
</div>
<center>
<?php
/* Perulangan bersarang adalah istilah untuk menyebut perulangan di dalam perulangan. Dalam bahasa inggris, perulangan bersarang disebut nested loop. */
$i = 0;
while($i < 10){
    for($j = 0; $j < 10; $j++){
        echo "Ini perulangan ke ($i, $j)<br>";
    }

    $i++;
}
?>
</center>
</body>
<html>