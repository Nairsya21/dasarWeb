<!--Praktikum 5. Folder Module – Bagian Anggota-->

<html>
    <body>

    <!-- Container fluid untuk layout -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sertakan file menu.php untuk tampilan menu -->
            <?php
            require 'webprograming2023/admin/module/menu.php';
            
            // Ambil nilai 'id' dari parameter GET untuk mengidentifikasi anggota yang akan diubah
            $id = $_GET['id'];
            
            // Buat kueri SQL untuk mengambil data anggota berdasarkan ID
            $query = "SELECT * FROM anggota, jabatan, user WHERE anggota.jabatan_id = jabatan.id AND anggota.user_id = user.id AND anggota.user_id = '$id'";
            
            // Eksekusi kueri SQL
            $result = mysqli_query($koneksi, $query);
            
            // Ambil satu baris hasil dari kueri sebagai array asosiatif
            $row = mysqli_fetch_assoc($result);
            ?>
        
            <!-- Bagian utama dengan kolom 9 untuk menampilkan form edit anggota -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Judul halaman -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Anggota</h1>
                </div>
                <!-- Form untuk mengedit data anggota -->
                <form action="fungsi/edit.php?anggota=edit" method="post">
                    <div class="row">
                        <!-- Kolom pertama untuk input data anggota -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    Form Edit Anggota
                                </div>
                                <div class="card-body">
                                    <!-- Input tersembunyi untuk menyimpan ID anggota -->
                                    <input type="hidden" name="id" value="<?= $row['user_id'] ?>">
                                    <!-- Input untuk mengedit nama anggota -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama</label>
                                        <input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control" id="recipient-name">
                                    </div>
                                    <!-- Dropdown untuk memilih jabatan anggota -->
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Jabatan</label>
                                        <select name="jabatan" class="form-select">
                                            <option>Pilih Jabatan</option>
                                            <?php
                                            // Ambil daftar jabatan dari database dan tampilkan dalam dropdown
                                            $query2 = "SELECT * FROM jabatan ORDER BY jabatan ASC";
                                            $result2 = mysqli_query($koneksi, $query2);
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                            ?>
                                                <!-- Pilihan jabatan dengan opsi terpilih berdasarkan data anggota -->
                                                <option value="<?= $row2['id'] ?>" <?= ($row['jabatan_id'] == $row2['id']) ? 'selected' : '' ?>><?= $row2['jabatan'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <!-- Input untuk mengedit jenis kelamin anggota -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Jenis Kelamin</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" <?= ($row['jenis_kelamin'] === 'L') ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" <?= ($row['jenis_kelamin'] === 'P') ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                        </div>
                                    </div>
                                    <!-- Input untuk mengedit alamat anggota -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?= $row['alamat'] ?>" id="recipient-name">
                                    </div>
                                    <!-- Input untuk mengedit nomor telepon anggota -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">No Telepon</label>
                                        <input type="text" name="no_telp" class="form-control" value="<?= $row['no_telp'] ?>" id="recipient-name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Kolom kedua untuk input data login anggota -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    Form Edit Login Anggota
                                </div>
                                <div class="card-body">
                                    <!-- Input untuk mengedit username anggota -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Username</label>
                                        <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>" id="recipient-name">
                                    </div>
                                    <!-- Input untuk mengedit password anggota -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="recipient-name">
                                        <!-- Petunjuk untuk mengosongkan password jika tidak ingin menggantinya -->
                                        <div class="form-text">Kosongkan password jika tidak ingin menggantinya.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Tombol untuk menyimpan perubahan atau membatalkan proses -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>Ubah</button>
                                    <a href="index.php?page=anggota" class="btn btn-secondary"><i class="fa fa-times"></i>Batal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
    </body>
</html>