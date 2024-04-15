<!--Praktikum 2. Multi Upload File-->

<!--Buat seperti langkah 3 dengan multi upload khusus gambar. Catat di sini apa yang anda amati dari kode program di atas. (soal no 2.2)-->
<?php
// Lokasi penyimpanan file gambar yang diunggah
$targetDirectory = "images/";
// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}
// Periksa apakah ada file gambar yang diunggah
if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    // Loop melalui semua file gambar yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        // Pindahkan file gambar yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File gambar $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file gambar $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada file gambar yang diunggah.";
}
?>
