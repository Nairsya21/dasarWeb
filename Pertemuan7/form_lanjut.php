<!--Praktikum 6 : Form Lanjut-->

<!--Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 6.1)-->
<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="form_lanjut.php">
        <label for="buah">Pilih Buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>
        <label>Pilih Warna Favorit: </label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>
        <label>Pilih Jenis Kelamin: </label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
// Jika metode permintaan adalah POST, proses data formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai buah yang dipilih
    $selectedBuah = $_POST['buah'];
    
    // Memeriksa apakah ada warna yang dipilih
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }
    
    // Mengambil jenis kelamin yang dipilih
    $selectedJenisKelamin = $_POST['jenis_kelamin'];
    
    // Menampilkan hasil pilihan pengguna
    echo "Anda memilih buah: " . $selectedBuah . "<br>";
    
    // Menampilkan warna favorit yang dipilih
    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }
    
    // Menampilkan jenis kelamin yang dipilih
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>
