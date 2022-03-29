<?php

include "../koneksi1.php";

if (isset($_POST['submit'])) {
    $username   = $_POST['username'];
    $pw         = $_POST['password'];

    $sql    = "SELECT * FROM admin WHERE username = '$username' AND password = '$pw'";
    $result = mysqli_query($koneksi, $sql);
    $row    = $result->fetch_assoc();
    if (!empty($row)) {
        session_start();
        $_SESSION['user'] = $username;
        echo "<script>alert('Login berhasil');location='../homepage.php';</script>";
    } else {
        echo "<script>alert('Username atau Password salah');location='../login.php';</script>";
    }
}
