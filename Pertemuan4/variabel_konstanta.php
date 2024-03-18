<?php
/*PRAKTIKUM BAGIAN 2 : PENGGUNAAN TIPE DATA */

/*Buat satu file baru bernama tipe_data.php di dalam folder dasarWeb. Ketikkan kode pada langkah 2 di dalam tipe_data.php */
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);

/*Tambahkan isi dari file tipe_data.php (langkah 4) */
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;
echo "<br> Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";
var_dump($rataRata);

/*Tambahkan isi dari file tipe_data.php (langkah 7) */
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;
echo "<br> Siswa Lulus: ";
var_dump($apakahSiswaLulus);
echo "<br> Siswa Sudah Ujian: ";
var_dump($apakahSiswaSudahUjian);

/*Tambahkan isi dari file tipe_data.php (langkah 10) */
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';
$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan. ' '. $namaBelakang;

echo "<br> Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: '. $namaBelakang. '<br>';

echo $namaLengkap;

/*Tambahkan isi dari file tipe_data.php (langkah 13) */
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo "<br>" . $listMahasiswa[0];
?>