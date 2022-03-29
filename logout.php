<?php
    include_once 'koneksi1.php';
    session_destroy();
    echo "<script> alert('Anda Telah Berhasil Log out!');</script>";
    echo "<script> location = 'login.php'; </script>";
?>