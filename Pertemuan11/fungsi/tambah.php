<?php
session_start();

// Memastikan sesi pengguna (username) tidak kosong, menandakan pengguna sudah login
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Memeriksa apakah parameter 'jabatan' tidak kosong dari permintaan GET
    if (!empty($_GET['jabatan'])) {
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);

        // Menyusun query SQL untuk menyisipkan data jabatan ke dalam database
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";

        // Eksekusi query SQL dan memeriksa apakah berhasil
        if (mysqli_query($koneksi, $query)) {
            // Jika berhasil, tampilkan pesan sukses
            pesan('success', "Jabatan Baru Ditambahkan.");
        } else {
            // Jika gagal, tampilkan pesan error beserta informasi dari mysqli_error
            pesan('danger', "Menambahkan Jabatan Gagal: " . mysqli_error($koneksi));
        }

        // Redirect pengguna kembali ke halaman jabatan setelah proses selesai
        header("Location: ../index.php?page=jabatan");
    }
} elseif (empty($_GET['anggota'])) {
    // Memproses tambah data anggota jika parameter 'anggota' kosong dari permintaan GET
    $username = antiinjection($koneksi, $_POST['username']);
    $password = antiinjection($koneksi, $_POST['password']);
    $level = antiinjection($koneksi, $_POST['LEVEL']);
    $jabatan = antiinjection($koneksi, $_POST['jabatan']);
    $nama = antiinjection($koneksi, $_POST['nama']);
    $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
    $alamat = antiinjection($koneksi, $_POST['alamat']);
    $no_telp = antiinjection($koneksi, $_POST['no_telp']);
    $salt = bin2hex(random_bytes(16)); // Membuat salt acak untuk keamanan kata sandi
    $combined_password = $salt . $password; // Menggabungkan salt dengan kata sandi
    $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT); // Melakukan hash pada kata sandi yang telah digabungkan dengan salt
    $query = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt', '$level')";
    if (mysqli_query($koneksi, $query)) {
        $last_id = mysqli_insert_id($koneksi); // Mendapatkan ID terakhir yang di-generate dalam database
        $query2 = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id', '$jabatan')";
        if (mysqli_query($koneksi, $query2)) {
            pesan('success', "Anggota Baru Ditambahkan.");
        } else {
            pesan('warning', "Gagal Menambahkan Anggota Tetapi Data Login Tersimpan Karena: " . mysqli_error($koneksi));
        }
    } else {
        pesan('danger', "Menambahkan Anggota Gagal Karena: " . mysqli_error($koneksi));
    }
    header("Location: ../index.php?page=anggota"); // Redirect pengguna kembali ke halaman anggota setelah proses selesai
}
?>