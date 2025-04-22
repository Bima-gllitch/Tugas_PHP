<?php
$stok_handphone = 15;
$saldo = 240000;
$harga_handphone =20000;
$jumlah_beli = 3;

$total_harga = $harga_handphone * $jumlah_beli;

if ($jumlah_beli <= $stok_handphone) {
    echo "Stok tersedia: $stok_handphone handphone";

    if ($saldo >= $total_harga) {
        echo " dan saldo cukup, $jumlah_beli barang berhasil dibeli";
    } else {
        echo " tapi saldo tidak cukup untuk membeli $jumlah_beli barang (butuh Rp$total_harga)";
    }
} else {
    echo "Stok tidak cukup, hanya tersedia $stok_handphone barang";
}
?>
