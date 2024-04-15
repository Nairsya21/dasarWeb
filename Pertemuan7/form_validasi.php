<!--Praktikum 7 : Validasi Form-->

<!--Kembangkan file bernama form_validasi.php di dalam folder dasarWeb. Ketikkan kode pada langkah 6 di dalam form_validasi.php (soal no 7.1)-->
<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        
        <input type="submit" value="Submit">
    </form>
    
    <script>
        //Soal 7.4: Tambahkan validasi untuk password dengan ketentuan minimal 8 karakter dengan menggunakan jQuery dan PHP tambahkan pada langkah 9.(soal no 7.4)
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;
                
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }
                
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }
                
                if (!valid) {
                    event.preventDefault();
                    // Menghentikan pengiriman form jika validasi gagal
                } else {
                    //Soal 7.3: Buatlah script langkah 6 dengan menggunakan ajax.(soal no 7.3)
                    // Kirim data form ke server dengan Ajax
                    $.ajax({
                        url: "proses_validasi.php", // Ganti dengan nama file PHP yang sesuai
                        type: "POST",
                        data: $("#myForm").serialize(), // Mengambil data form
                        success: function(response) {
                            // Tampilkan pesan balasan dari server
                            $("#nama-error").text(response.nama);
                            $("#email-error").text(response.email);
                            $("#password-error").text(response.password);
                        }
                    });
                    event.preventDefault(); // Menghentikan pengiriman form secara default
                }
            });
        });
    </script>
</body>
</html>
