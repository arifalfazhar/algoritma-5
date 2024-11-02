<?php
// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan kalian semua<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("arif", "Hallo");

  echo "<hr>";

  $saya = "arif";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);

  echo "<p><i><strong>By:arif alfazhar</strong>";

?>