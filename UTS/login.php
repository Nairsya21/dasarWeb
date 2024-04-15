<?php
session_start();
$_SESSION["userName"] = "nana";
$_SESSION["password"] = 978;

if (isset($_POST["submit"])) {
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    if ($userName == $_SESSION["userName"] && $password == $_SESSION["password"]) {
        header("location:index.html");
    } else {
        $error = "Username atau password salah";
    }
}
$email = isset($_POST['email']) ? $_POST['email'] : '';

// Mengatur cookie
if (isset($userName)) {
    setcookie("user", $userName, time() + (86400 * 30), "/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>
    <link rel="stylesheet" type="text/css" href="style_login.css">
</head>
<body>>
    <div class="content_login">
        <h2>LOGIN DRIVING COURSE</h2>
        <?php if(isset($error)) { 
              echo $error; 
             } ?>
        <form method="post">
        <input type="text" name="userName" class="userName" placeholder="Username" required/> <br> <br>
        <input type="email" name="email" class="email" placeholder="Email" required/> <br> <br>
        <input type="password" name="password" class="password" placeholder="Password" required/> <br> <br>
        
        <button type="submit" name="submit" id="login_button" class="button">Login</button>
    </form>
    </div>
    
</body>
</html>