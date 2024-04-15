<!--Date and Time-->
<!--Buat file baru dengan nama date.php di dalam direktori dasarWeb, kemudian ketikkan kode berikut (soal 19)-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Date</title>
</head>
<body>
    <h3>Date</h3>
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    ?>
</body>
</html>
