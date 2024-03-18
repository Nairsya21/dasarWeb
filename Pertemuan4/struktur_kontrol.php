<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

/*Ketikkan kode tambahan pada langkah 6 di dalam struktur_kontrol.php dan melengkapi
kode program sehingga hasilnya rapi */
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br> Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

/*Ketikkan kode tambahan pada langkah 9 di dalam struktur_kontrol.php */
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "<br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

/*Ketikkan kode tambahan pada langkah 14 di dalam struktur_kontrol.php */
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) { $totalSkor += $skor;
}
echo "<br> Total skor ujian adalah: $totalSkor";

/*Ketikkan kode tambahan pada langkah 18 di dalam struktur_kontrol.php */
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
if ($nilai < 60) {
echo "Nilai: $nilai (Tidak lulus) <br>";
continue;
}
echo "Nilai: $nilai (Lulus) <br>";
}


/*SOAL CERITA
Ada soal cerita : Ada seorang guru ingin menghitung total nilai dari 10
siswa dalam ujian matematika. Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai
terendah. Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai
rata-rata setelah mengabaikan nilai tertinggi dan terendah. Berikut daftar nilai dari 10 siswa
(85, 92, 78, 64, 90, 75, 88, 79, 70, 96)*/
// Daftar nilai dari 10 siswa
$nilaiSiswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

// Mengurutkan nilai dari terendah ke tertinggi
sort($nilaiSiswa);

// Menghapus dua nilai terendah dan dua nilai tertinggi
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

// Menghitung total nilai
$totalNilai = array_sum($nilaiSiswa);

// Menghitung jumlah siswa setelah mengabaikan nilai terendah dan tertinggi
$jumlahSiswa = count($nilaiSiswa);

// Menghitung rata-rata nilai
$rataRataNilai = $totalNilai / $jumlahSiswa;

// Menampilkan hasil
echo "<br> Daftar nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi: $totalNilai <br>";
echo "Rata-rata nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi: " . number_format($rataRataNilai, 2) . "<br>";


/*SOAL CERITA
Ada soal cerita : Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000.
Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. Bantu pelanggan ini untuk
menghitung harga yang harus dibayar setelah mendapatkan diskon.*/
// Harga produk sebelum diskon
$hargaProduk = 120000;

// Nilai batas untuk mendapatkan diskon
$batasDiskon = 100000;

// Persentase diskon
$persentaseDiskon = 20;

// Menghitung harga setelah diskon
if ($hargaProduk > $batasDiskon) {
    // Menghitung jumlah diskon
    $diskon = ($persentaseDiskon / 100) * $hargaProduk;

    // Harga setelah diskon
    $hargaSetelahDiskon = $hargaProduk - $diskon;

    echo "<br> Harga produk sebelum diskon: Rp $hargaProduk <br>";
    echo "Diskon $persentaseDiskon%: Rp $diskon <br>";
    echo "Harga setelah diskon: Rp $hargaSetelahDiskon <br>";
} else {
    echo "Harga produk: Rp $hargaProduk <br>";
    echo "Anda tidak memenuhi syarat untuk mendapatkan diskon.<br>";
}


/*SOAL CERITA
Ada soal cerita : Seorang pemain game ingin menghitung total skor mereka dalam permainan.
Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki lebih
dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama
“Total skor pemain adalah: (poin)”. Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)” */

// Poin yang dikumpulkan oleh pemain
$poin = 600; // Ganti dengan jumlah poin yang dimiliki pemain

// Hadiah tambahan diberikan jika poin lebih dari 500
$mendapatkanHadiahTambahan = $poin > 500 ? "YA" : "TIDAK";

// Menampilkan informasi total skor pemain
echo "<br> Total skor pemain adalah: $poin<br>";

// Menampilkan informasi apakah pemain mendapatkan hadiah tambahan
echo "Apakah pemain mendapatkan hadiah tambahan? $mendapatkanHadiahTambahan<br>";

?>