<!--Variabel $_POST (soal no 24)-->
<html>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Mengumpulkan nilai dari input field
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
</body>
</html>
