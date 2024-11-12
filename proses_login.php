<?php

include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; // password yang di masukkan oleh pengguna

    //ambil data pengguna dari database
    //........

    $sql = "SELECT password FROM user Where username = '$username'";
    $result = $mysqli->query($sql);
    $hashed_password_from_database = $result->fetch_assoc()["password"];

    //periksa password
    if (password_verify($password, $hashed_password_from_database)) {
        //password cocok, inisialisasi session
        session_start();
        $_SESSION["username"] = $username;

        //redirect ke halaman utama atau dashboard
        header("location: dashboard.php");
    } else {
        //password tidak cocok, tampilkan pesan kesalahan
        echo "Username atau Password salah. Coba lagi.";
    }
}
?>