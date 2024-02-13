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
/* Perulangan foreach sama seperti perulangan for. Namun, ia lebih khusus digunakan untuk mecetak array. */
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";

?>
</center>
</body>
</html>