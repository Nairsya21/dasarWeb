<?php
// Membalik String menggunakan perintah strrev()
// Buat file string3.php di dalam direktori dasarWeb (soal no 11)

$pesan = "saya arek malang";
//untuk membalik string per kata, ketikkan kode program berikut (soal no 12)

# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerkata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(function($pesan) { return strrev($pesan); }, $pesanPerkata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan. "<br>";
?>
