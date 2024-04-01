<?php
$pesan = "Saya arek malang";
# ubah varibel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan); //Fungsi explode(" ", $pesan) memecah string tersebut menjadi array, dengan spasi sebagai pemisah. Jadi, setiap kata akan menjadi elemen dalam array.
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan)=> strrev($pesan), $pesanPerKata); //setiap kata dalam array $pesanPerKata akan dibalikkan urutan karakternya.
# gabungkan kembali array menjadi sttring
$pesan = implode(" ", $pesanPerKata); //menggabungkan elemen-elemen array dalam $pesanPerKata menjadi sebuah string. Setiap elemen array akan dipisahkan oleh spasi (" ").

echo $pesan. "<br>";
?>