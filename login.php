<?php

session_start();
if (isset($_SESSION['user'])) {
    header("location: koneksi1.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Formulir rajasa finishing</title>
  </head>
  <style media="screen">
  body {
    background-image: url(img/back4.png);
    background-repeat: no-repeat;
    background-size: cover;
  }

  #backlogin {
    background: white;
    width: 35%;
    height: 350px;
    border: 1px solid #d2d2d2;
    border-radius: 5px;
    margin-top: 150px;
  }

  @font-face {
    src: url('font/Product Sans Regular.ttf');
    font-family: Product Sans;
  }

  @font-face {
    src: url('font/OpenSans-Light.ttf');
    font-family: OpenSans-Light;
  }

  #backlogin form {
    margin-top: 5px;
    float: left;
    padding: 5px;
  }

  #backlogin .inputa {
    width: 90%;
    margin-top: 1px;
    height: 50px;
    border: 0px;
    border-bottom: 1px solid #6a82fb;
    font-size: 16px;
    font-family: OpenSans-Light;
    background: transparent;
  }

  #backlogin .wed {
    margin-top: 40px;
    width: 45%;
    height: 40px;
    background: #6a82fb;
    border: none;
    color: white;
    font-family: product sans;
    font-size: 20px;
    border-radius: 5px;
  }

  #backlogin h1 {
    text-align: center;
    padding: 5px;
    color: #6a82fb;
    font-family: Product Sans;
  }

  #backlogin hr {
    width: 50%;
    height: 1px;
    border: none;
    background: #6a82fb;
  }
  
</style>

<body >
  <nav>
    <div class="wrapper">
        <div class="logo"><a href='homepage.php'>RjFinishing</a></div>
        <div class="menu">
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="daftar_produk.php">Katalog</a></li>
                <li><a href="#partners">Contact</a></li>
                <li><a href="#keranjang">Keranjang</a></li>
                <li><a href="konfirmasi_pembayaran.php">Konfirmasi Pembayaran</a></li>
                <li><a href="home.php" >Log In</a></li>
            </ul>
        </div>
    </div>
</nav>
      <center>
        <div id="backlogin">
          <h1>Login</h1>
              <form action="koneksi1.php?prosses_login" method="POST">
                  <input type="username" class="inputa" for="username" name="username" placeholder="Username">
                  <input type="password" class="inputa" for="password" name="password" placeholder="Masukan Password">
                  <button type="submit" class="wed" name = "submit">Submit</button>
                  <a href="forget_password.php"> <p>forget Password</p></a>
                  <a href="registrasi.php"> <p>Dont have an account?Register </p></a>
              </form>
        </center>
          </div>
<!-- untuk footer -->
<div class="footer">
    <div class="footer-section">
        <h3>RajasaFinishing</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, culpa!</p>
    </div>

    <div class="footer-section">
        <h3>Contact</h3>
        <p>(021) 91542391</p>
        <div class="icon-contact">
            <label class="font-weight-bold">Follow Us </label>
            <a href="#"><img src="image/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
            <a href="#"><img src="image/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
            <a href="#"><img src="image/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
    </div>

    <div class="footer-section">
        <h3>Alamat</h3>
        <p>Alamat Mega Mall Ciputat, Jl. Ir H. Juanda Blok F No.2, Cemp. Putih, Kec. Ciputat Tim., Kota Tangerang Selatan, Banten 15419, Indonesia</p>
    </div>

    <div class="footer-section">
        <h3>JasaPengiriman</h3>
        <p><b></b></p>
    </div>

        <div id="copyright">
            <div class="wrapper">
                &copy; 2021 <b>RajasaFinishing.</b> All Rights Reserved.
            </div>
        </div>
    </div>
</div>
  </body>
</html>
