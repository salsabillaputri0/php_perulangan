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
/* Perulangan Do/While sama seperti perulangan while. Ia juga tergolong dalam uncounted loop.

Perbedaan Do/While dengan while terletak pada cara iya memulai pengulangan.

Perulangan Do/While akan selalu melakukan pengulangan sebanyak 1 kali, kemudian melakukan pengecekan kondisi.

Sedangkan perulangan while akan mengecek kondisi terlebih dahulu, baru melakukan pengulangan. */
$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);

?>
</center>
</body>
</html>