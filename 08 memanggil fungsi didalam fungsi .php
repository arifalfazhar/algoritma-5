<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  // memanggil fungsi lain
  echo "Kita berusia ". hitungUmur(2007, 2024) ." tahun<br/>";
  echo "Senang berkenalan dengan kalian semua<br/>";
}
// memanggil fungsi perkenalan
perkenalan("arif");

echo "<p><i><strong>By:arif alfazhar</strong>";

?>