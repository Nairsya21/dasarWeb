<!--Buat file baru dengan nama time.php di dalam direktori dasarWeb, kemudian ketikkan kode berikut: (soal no 20)-->
<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <h3> Time </h3>
        <?php
        date_default_timezone_set("asia/jakarta");
        echo date ("h:i:sa");
        ?>
    </body>
</html>