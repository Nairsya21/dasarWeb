<!DOCTYPE html>
<html lang="en">
<body>
<div class="container-fluid">
    <div class="row">
        <?php
        // Menginclude file menu.php yang berisi kode untuk menu navigasi
        include "menu.php";

        // Query untuk mengambil jumlah anggota dari database
        $query_anggota = "SELECT count(id) as jml FROM anggota";
        $result_anggota = mysqli_query($koneksi, $query_anggota);
        
        // Memeriksa apakah query berhasil dieksekusi
        if (!$result_anggota) {
            die("Query anggota gagal: " . mysqli_error($koneksi));
        }
        
        // Mengambil baris hasil query untuk jumlah anggota
        $row_anggota = mysqli_fetch_assoc($result_anggota);
        
        // Query untuk mengambil jumlah jabatan dari database
        $query_jabatan = "SELECT count(id) as jml FROM jabatan";
        $result_jabatan = mysqli_query($koneksi, $query_jabatan);
        
        // Memeriksa apakah query berhasil dieksekusi
        if (!$result_jabatan) {
            die("Query jabatan gagal: " . mysqli_error($koneksi));
        }
        
        // Mengambil baris hasil query untuk jumlah jabatan
        $row_jabatan = mysqli_fetch_assoc($result_jabatan);
        ?>

        <!-- Bagian utama konten dashboard -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <!-- Baris untuk menampilkan informasi anggota dan jabatan -->
            <div class="row">
                <!-- Kolom untuk informasi jumlah anggota -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ANGGOTA</h5>
                            <p class="card-text">Total anggota sejumlah <?= $row_anggota['jml'] ?> orang.</p>
                            <a href="index.php?page=anggota" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Kelola</a>
                        </div>
                    </div>
                </div>

                <!-- Kolom untuk informasi jumlah jabatan -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">JABATAN</h5>
                            <p class="card-text">Total jabatan sejumlah <?= $row_jabatan['jml'] ?>.</p>
                            <a href="index.php?page=jabatan" class="btn btn-primary"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Kelola</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>