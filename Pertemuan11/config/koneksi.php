<?php
// Mengatur zona waktu default menjadi Asia/Jakarta
date_default_timezone_set("Asia/Jakarta");

// Membuat koneksi ke database menggunakan fungsi mysqli_connect
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Memeriksa apakah koneksi berhasil dilakukan
if (mysqli_connect_errno()) {
    // Jika koneksi gagal, tampilkan pesan error dan hentikan eksekusi skrip
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>