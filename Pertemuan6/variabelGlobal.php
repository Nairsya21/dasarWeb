<!--Variabel $_GLOBAL (soal no 26)-->
<?php
// Mendefinisikan variabel $x dan $y
$x = 75;
$y = 25;

// Mendefinisikan fungsi addition untuk menambahkan nilai $x dan $y menggunakan variabel superglobal $GLOBALS
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // Menyimpan hasil penambahan dalam variabel global $z
}

// Memanggil fungsi addition untuk melakukan penambahan
addition();

// Menampilkan hasil penambahan yang disimpan dalam variabel global $z
echo $z;
?>
