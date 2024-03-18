<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: ". implode(',', $nilaiLulus);

/*Ketikkan kode tambahan pada langkah 6 di dalam array.php  */
$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
    ];
    $karyawanPengalamanLimaTahun = [];
    foreach ($daftarkaryawan as $karyawan) {
    if ($karyawan [1] > 5) {
    $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
    }
    echo "<br> Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun : " . implode(', ', $karyawanPengalamanLimaTahun);

/*Ketikkan kode tambahan pada langkah 10 di dalam array.php */
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';
echo "<br> Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
foreach ($daftarNilai[$mataKuliah] as $nilai) {
echo "Nama: {$nilai[0]}, Nilai: {$nilai [1]} <br>";
}

/* Ada soal cerita : Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika.
Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai. Bantu guru ini mencetak
daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. Dengan ketentuan nama dan nilai
siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90 */
// Data nilai siswa
$nilaiSiswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90,
];
// Menghitung rata-rata nilai kelas
$rataRataKelas = array_sum($nilaiSiswa) / count($nilaiSiswa);
echo "<br> Daftar nilai siswa di atas rata-rata kelas ($rataRataKelas): <br>";
// Mencetak daftar nilai siswa di atas rata-rata kelas
foreach ($nilaiSiswa as $siswa => $nilai) {
    if ($nilai > $rataRataKelas) {
        echo "Nama: $siswa, Nilai: $nilai <br>";
    }
}
?>