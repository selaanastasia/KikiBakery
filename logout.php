<?php
session_start();
session_destroy(); // Menghancurkan sesi
header('Location: sign.php'); // Kembali ke halaman login
exit();
?>