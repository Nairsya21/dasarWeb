<?php

function tampilkanAngka (int$jumlah, int$indeks = 1){
    echo "Perulangan ke-{$indeks} <br>";

    //panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah){
        tampilkanAngka($jumlah, $indeks+1); // nilai indeks akan bertambah 1 setiap kali perulangan terjadi sehingga perulangan akan berhenti saat indeks =20
    }
}
tampilkanAngka(20);

?>