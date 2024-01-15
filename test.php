<?php
function rupiah($harga) {
    $hasil_rupiah = "Rp " . number_format($harga, 2, ',', '.');
    return $hasil_rupiah;
}

$harga = $produk["harga"];
$hasil = rupiah($harga);
echo $hasil
?>
