<?php
// Definisi fungsi perkenalan
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Hertin";

// Memanggil fungsi perkenalan tanpa mengisi parameter salam
perkenalan($saya);

// Mendefinisikan fungsi untuk menghitung umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Mendefinisikan kembali fungsi perkenalan dengan parameter yang berbeda
function perkenalanUmur($nama, $salam = "Assalamualaikum") {
    echo $salam . ",";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";

    // Memanggil fungsi hitungUmur untuk menghitung umur
    echo "Saya berusia " . hitungUmur(2004, 2024) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi perkenalanUmur
perkenalanUmur("Hertin");
?>
