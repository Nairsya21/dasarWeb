<?php
session_start();

// Periksa apakah sesi username tidak kosong (artinya pengguna sudah login)
if (!empty($_SESSION['username'])) {
    // Sertakan file koneksi database
    require '../config/koneksi.php';
    // Sertakan file fungsi pesan kilat
    require '../fungsi/pesan_kilat.php';
    // Sertakan file fungsi anti injection
    require '../fungsi/anti_injection.php';
    
    // Periksa apakah parameter 'jabatan' tidak kosong dari request GET
    if (!empty($_GET['id'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        
        // Buat kueri SQL untuk menghapus jabatan dari database
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        
        // Eksekusi kueri SQL dan periksa apakah berhasil
        if (mysqli_query($koneksi, $query)) {
            // Jika berhasil, tampilkan pesan sukses
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            // Jika gagal, tampilkan pesan error beserta informasi dari mysqli_error
            pesan('danger', "Jabatan Tidak Terhapus: " . mysqli_error($koneksi));
        }
        
        // Redirect pengguna kembali ke halaman jabatan setelah proses selesai
        header("Location: ../index.php?page=jabatan");
    }
} elseif (!empty($_GET['anggota'])) {
    $id = antiinjection($koneksi, $_GET['id']);
    $query = "DELETE FROM user WHERE id = '$id'";
    if (mysqli_query($koneksi, $query)) {
        $query2 = "DELETE FROM anggota WHERE user_id = '$id'";
        if (mysqli_query($koneksi, $query2)) {
            pesan('success', "Anggota Telah Terhapus.");
        } else {
            pesan('warning', "Data Login Terhapus Tetapi Data Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
    } else {
        pesan('danger', "Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
    }
    header("Location: ../index.php?page=anggota");
}
?>
