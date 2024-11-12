<?php
session_start();

//hapus session
session_unset();
session_destroy();

//rediect ke halaman login
header("location: login.php");
?>