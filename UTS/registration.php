<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="style_registration.css">

</head>
<body>
  <header>
    <div class="overlay"></div>
    <h1>Registration Form</h1>
    
  </header>
  <form action="hasil_form.php" method="POST" id="registration-form">
    <label for="pilihan-paket">Pilihan Paket:</label>
    <select name="pilihan-paket" id="pilihan-paket">
      <option value="manual">Manual</option>
      <option value="automatic">Automatic</option>
      <option value="combination">Combination</option>
    </select>
    <br>
    <label for="pilih-level">Pilih Level:</label>
    <select name="pilih-level" id="pilih-level">
      <option value="beginners">Beginners</option>
      <option value="intermediate">Intermediate</option>
      <option value="expedite">Expedite</option>
    </select>
    <br>
    <label for="first-name">First Name:</label>
    <input type="text" name="first-name" id="first-name" required>
    <br>
    <label for="last-name">Last Name:</label>
    <input type="text" name="last-name" id="last-name" required>
    <br>
    <label for="tanggal-lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal-lahir" id="tanggal-lahir">
    <br>
    <label for="no-hp">No. HP:</label>
    <input type="text" name="no-hp" id="no-hp">
    <br>
    <label>Jenis Kelamin:</label>
    <input type="radio" name="jenis-kelamin" value="Laki-laki" id="laki-laki">
    <label for="laki-laki">Laki-laki</label>
    <input type="radio" name="jenis-kelamin" value="Perempuan" id="perempuan">
    <label for="perempuan">Perempuan</label>
    <br>
    <label for="alamat">Alamat:</label>
    <br>
    <textarea name="alamat" id="alamat" rows="4" cols="50"></textarea>
    <br>
    <div id="sesi-inputs"></div> <!-- Container untuk input tanggal sesi -->
    <br>
    <label for="total-pembayaran">Total Pembayaran:</label>
    <input type="text" name="total-pembayaran" id="total-pembayaran" readonly>
    <br>
    <input type="submit" value="Submit">
  </form>
  <script src="jquery-3.7.1.js"></script>
  <script>
    // Function untuk menampilkan input tanggal untuk setiap sesi
    function tampilkanInputSesi(jumlahSesi) {
      var container = document.getElementById('sesi-inputs');
      container.innerHTML = ''; // Kosongkan kontainer sebelum menambahkan input

      for (var i = 1; i <= jumlahSesi; i++) {
        var label = document.createElement('label');
        label.setAttribute('for', 'sesi-' + i);
        label.textContent = 'Sesi ' + i + ':';
        container.appendChild(label);

        var input = document.createElement('input');
        input.setAttribute('type', 'date');
        input.setAttribute('name', 'sesi-' + i);
        input.setAttribute('id', 'sesi-' + i);
        container.appendChild(input);

        var lineBreak = document.createElement('br');
        container.appendChild(lineBreak);
      }
    }

    // Panggil function tampilkanInputSesi saat halaman dimuat dan saat level berubah
    document.addEventListener('DOMContentLoaded', function() {
      var level = document.getElementById('pilih-level').value;
      updateInputSesi(level);
    });

    document.getElementById('pilih-level').addEventListener('change', function() {
      var level = this.value;
      updateInputSesi(level);
      hitungTotalPembayaran(level); // Hitung total pembayaran saat level berubah
    });

    // Function untuk memperbarui input sesi sesuai dengan level yang dipilih
    function updateInputSesi(level) {
      var jumlahSesi = 0;
      switch (level) {
        case 'beginners':
          jumlahSesi = 9;
          break;
        case 'intermediate':
          jumlahSesi = 6;
          break;
        case 'expedite':
          jumlahSesi = 4;
          break;
      }
      tampilkanInputSesi(jumlahSesi);
    }

    // Function untuk menghitung total pembayaran berdasarkan level yang dipilih
    function hitungTotalPembayaran(level) {
      var totalPembayaran = 0;
      switch (level) {
        case 'beginners':
          totalPembayaran = 900000;
          break;
        case 'intermediate':
          totalPembayaran = 600000;
          break;
        case 'expedite':
          totalPembayaran = 400000;
          break;
      }
      document.getElementById('total-pembayaran').value = totalPembayaran.toLocaleString('id-ID');
    }

    // Panggil function hitungTotalPembayaran saat halaman dimuat
    hitungTotalPembayaran(document.getElementById('pilih-level').value);
  </script>
</body>
</html>
