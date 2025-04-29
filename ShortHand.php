<?php
$iphone = 10; 
$jumlah_sewa = 7;

echo ($jumlah_sewa <= $iphone) 
    ? "iphone tersedia, $jumlah_sewa iphone berhasil disewa." 
    : "Stok tidak mencukupi, hanya tersedia $iphone iphone.";
?>
