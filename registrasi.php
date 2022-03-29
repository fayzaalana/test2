<?php 
   include_once 'koneksi.php';
   if(isset($_POST['username'])){
     echo "<script> alert('Akun Berhasil Tersimpan!Silakan Log in');</script>";
     echo "<script> location = 'login.php;/script>";
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

    <title>Formulir rajasa finishing</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Rajasa Finishing</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
  </head>

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
                    <li><a href="home.php" >Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="text-center">
        <h1>Registrasi Rajasa Finishing</h1>
                </div>
<div class="container">
    <!-- form -->
          <form action="tubes1.php" method="POST">
              <div class="form-group">
                  <label>Nama :</label>
                  <input type="text" class="form-control" name="nama" for="nama" placeholder="Nama Lengkap">
              </div>

              <div class="form-group">
                  <label>Username :</label>
                  <input type="username" class="form-control" for="username" name="username" placeholder="username">
              </div>

              <div class="form-group">
                  <label>Email :</label>
                  <input type="email" class="form-control" for="email" name="email" placeholder="username@examp.com">
              </div>

              <div class="form-group">
                  <label>Alamat :</label>
                  <input type="text" class="form-control" name="alamat" for="alamat" placeholder="Alamat Lengkap">
              </div>

              <div class="form-group">
                  <label>kelas :</label>
                  <select class="form-control" name="kelas">
                    <option disable selected>Pilih kelas</option>
                    <option value="customer">Customer</option>
                    <option value="admin1">Admin 1</option>
                    <option value="admin2">Admin 2</option>
                </select>
              </div>

              <div class="form-group">
              <label>Password :</label>
                  <input type="password" class="form-control" for="password" name="password" placeholder="masukan password">
              </div>
            
              <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
          </form>
      </div>
    </div>
<div>
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
                &copy; 2021 <b>RahajasaFinishing.</b> All Rights Reserved.
            </div>
        </div>
    </div>
</div>
  </body>
</html>