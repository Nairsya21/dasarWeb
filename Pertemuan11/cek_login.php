<?php
// Memeriksa dan memulai session jika belum dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Mengimpor file-file eksternal yang diperlukan
include "config/koneksi.php"; // File koneksi ke database
include "fungsi/pesan_kilat.php"; // File fungsi untuk menampilkan pesan
include "fungsi/anti_injection.php"; // File fungsi untuk mencegah serangan SQL Injection

// Mengambil username dan password dari form input, serta membersihkan dari potensi serangan SQL Injection
$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

// Mengeksekusi query untuk mengambil informasi user berdasarkan username
$query = "SELECT username, LEVEL, salt, password as hashed_password FROM user WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);

// Memeriksa hasil query
if ($result) {
    // Jika query berhasil dieksekusi
    $row = mysqli_fetch_assoc($result);
    mysqli_close($koneksi); // Menutup koneksi database
    $salt = $row['salt'];
    $hashed_password = $row['hashed_password'];

    // Memeriksa apakah salt dan password terisi
    if ($salt !== null && $hashed_password !== null) {
        $combined_password = $salt . $password;

        // Memeriksa kecocokan password dengan yang tersimpan di database atau jika username dan password adalah 'admin'
        if (password_verify($combined_password, $hashed_password) || ($username === 'admin' && $password === 'admin' && $row['LEVEL'] === 'admin')) {
            // Memulai session dan menyimpan informasi pengguna
            $_SESSION['username'] = $row['username'];
            $_SESSION['LEVEL'] = $row['LEVEL'];
            header('Location: index.php'); // Mengalihkan pengguna ke halaman utama
        } else {
            pesan('danger', "Login gagal. Password Anda Salah."); // Menampilkan pesan kesalahan
            header("Location: login.php"); // Mengalihkan pengguna kembali ke halaman login
        }
    } else {
        pesan('danger', "Login gagal. Password tidak valid."); // Menampilkan pesan kesalahan
        header("Location: login.php"); // Mengalihkan pengguna kembali ke halaman login
    }
} else {
    pesan('danger', "Terjadi kesalahan dalam mengakses data pengguna."); // Menampilkan pesan kesalahan
    header("Location: login.php"); // Mengalihkan pengguna kembali ke halaman login
}
?>