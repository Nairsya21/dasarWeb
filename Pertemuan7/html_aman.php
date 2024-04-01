<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <form method="post" action="">
            <label for="input">Input:</label>
            <input type="text" name="input" id="input" required><br><br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    echo "Input: " . $input ."<br>";

    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email = htmlspecialchars($email, ENT_QUOTES, '');
        echo "Email: " . $email;
    } else{
        echo "Email tidak valid";
    }
    
}
?>
