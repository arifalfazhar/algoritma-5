<?php
$tanggalAwal = strtotime("1 January 2007");
$tanggalAkhir = strtotime("1 January 2008");
$selisihHari = ($tanggalAkhir - $tanggalAwal) / 60 / 60 / 24;
echo "Selisih hari: " . $selisihHari; // Menampilkan selisih hari antara dua tanggal

echo "<p><strong>by arif alfazhar</strong>";
?>