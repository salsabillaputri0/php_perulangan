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
/* Perulangan while adalah perulangan yang termasuk dalam uncounted loop. Karena biasanya digunakan untuk mengulang sesuatu yang belum jelas jumlah pengulangannya.*/
$ulangi = 0;

while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

?>
</center>
</body>
</html>