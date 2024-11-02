
<?php
// mmbuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan kalian semua<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("arif", "Hallo");

echo "<hr>";

$kita = "arif";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($kita);

echo "<p><i><strong>By:arif alfazhar</strong>";

?>
