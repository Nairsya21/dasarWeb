<?php
/*PRAKTIKUM BAGIAN 3 : PENGGUNAAN OPERATOR PHP */

$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

/*Ketikkan kode tambahan pada langkah 5 di dalam operator.php */
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

/* Ketikkan kode tambahan pada langkah 8 di dalam operator.php */
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

/* Ketikkan kode tambahan pada langkah 11 di dalam operator.php */
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

/* Ketikkan kode tambahan pada langkah 14 di dalam operator.php */
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";

/*melengkapi kode program soal (no 3.1) */
echo "<br> Hasil Penjumlahan: {$hasilTambah} <br>";
echo "Hasil Pengurangan: {$hasilKurang} <br>";
echo "Hasil Perkalian: {$hasilKali} <br>";
echo "Hasil Pembagian: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";

/*melengkapii kode program (soal no 3.2) */
echo "<br> Hasil Sama: {$hasilSama} <br>";
echo "Hasil Tidak Sama: {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama} <br>";

/*melengkapi kode program (soal no 3.3) */
echo "<br> Hasil AND: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B: " . ($hasilNotB ? 'true' : 'false') . "<br>";

/*melengkapi kode program (soal no 3.4) */
$a += $b;
echo "<br> Setelah operasi +=: $a<br>";
$a -= $b;
echo "Setelah operasi -=: $a<br>";
$a *= $b;
echo "Setelah operasi *=: $a<br>";
$a /= $b;
echo "Setelah operasi /=: $a<br>";
$a %= $b;
echo "Setelah operasi %=: $a<br>";

/*lengkapi kode program (soal no 3.5) */
$hasilIdentik = $a === $b;
echo "<br> Hasil Identik: " . ($hasilIdentik ? 'true' : 'false') . "<br>";

$hasilTidakIdentik = $a !== $b;
echo "Hasil Tidak Identik: " . ($hasilTidakIdentik ? 'true' : 'false')
?>