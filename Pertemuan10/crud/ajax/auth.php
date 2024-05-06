<?php
// Membuat Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])){
    $_SESSION['crsf_token'] = bin2hex(random_bytes(32));
}

?>