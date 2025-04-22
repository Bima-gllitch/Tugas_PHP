<?php
$iphone = 10; 
$jumlah_sewa = 7;

echo ($jumlah_sewa <= $iphone) 
    ? "Kursi tersedia, $jumlah_sewa kursi berhasil dipinjam." 
    : "Stok tidak mencukupi, hanya tersedia $iphone kursi.";
?>
