<?php
session_start();

//periksa apakah pengguna sudah login

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit();
}

//tampilkan konten halaman dashboard
echo "Selamat datang, ". $_SESSION["username"]. "!";

//logout link
echo '<br><a href="logout.php">Logout</a>';
?>