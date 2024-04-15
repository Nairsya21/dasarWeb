<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }
    .header {
      background-image: url('header.png');
      background-size: cover;
      color: white;
      text-align: center;
      padding: 50px 0;
    }
    h2 {
      text-align: center;
      margin-top: 20px;
    }
    .container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    .result-table {
      border-collapse: collapse;
      width: 80%;
      max-width: 600px;
      border: 1px solid #ccc;
      background-color: white;
    }
    .result-table th,
    .result-table td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }
    .result-table th {
      background-color: #ff9900;
      color: white;
    }
    .result-table td {
      background-color: #f9f9f9;
    }
    .payment-info {
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Hasil Form Registrasi</h1>
  </div>
  <div class="container">
    <table class="result-table">
      <tr>
        <th colspan="2">Personal Information</th>
      </tr>
      <tr>
        <td>First Name</td>
        <td><?php echo $_POST['first-name']; ?></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td><?php echo $_POST['last-name']; ?></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td><?php echo $_POST['tanggal-lahir']; ?></td>
      </tr>
      <tr>
        <td>No. HP</td>
        <td><?php echo $_POST['no-hp']; ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $_POST['jenis-kelamin']; ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo $_POST['alamat']; ?></td>
      </tr>
      <tr>
        <th colspan="2">Sesi Training</th>
      </tr>
      <?php
        // Mencetak semua sesi yang diinput
        foreach ($_POST as $key => $value) {
          if (strpos($key, 'sesi-') === 0) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
          }
        }
      ?>
      <tr>
        <th colspan="2">Total Pembayaran</th>
      </tr>
      <tr>
        <td colspan="2">Rp <?php echo number_format($_POST['total-pembayaran']); ?></td>
      </tr>
    </table>
  </div>
  <div class="payment-info">
    <p>Silakan melakukan pembayaran biaya pelatihan ke rekening berikut:</p>
    <ul>
      <li>BCA a/n V. Ceruvindo Sejahtera, No. Rek. 421 2556 118</li>
      <li>BRI a/n CV. Ceruvindo Sejahtera, No. Rek. 0538 01 001905 30 7</li>
    </ul>
    
    <p>Silakan melakukan konfirmasi pembayaran dengan mengirimkan bukti transfer ke nomor Hotline RDC di <a href="wa.me/628229999873">wa.me/628229999873</a></p>
  </div>
</body>
</html>
