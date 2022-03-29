<?php
if (isset($_SESSION['login'])) {
  echo "<script> alert('Sesi Anda Sudah Habis Silakan Login!');</script>";
  echo "<script> location = 'home.php;/script>";
}

  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Rajasa Finishing</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='homepage.php'>RjFinishing</a></div>
            <div class="menu">
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="daftar_produk.php">Katalog</a></li>
                    <li><a href="contactus.php">Contact</a></li>
                    <li><a href="#keranjang">Keranjang</a></li>
                    <li><a href="konfirmasi_pembayaran.php">Konfirmasi Pembayaran</a></li>
                    <li><a href="home.php" >Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <!-- untuk home -->
<div class="wrapper">
    <section id="home">
        <img src="https://image.freepik.com/free-vector/organic-flat-printing-industry-illustration_23-2148898851.jpg"/>
        <div class="kolom">
            <h2>Mau Cetak Buku, Undangan pernikahan atau Kalender</h2>
            <p class="deskripsi">Rajasa Finishing aja!</p>
            <p><a href="daftar_produk.php" class="tbl-pink">Cetak Sekarang</a></p>
        </div>
    </section>
</div>

<div id="instruksi">
        <img class="intruksi" src="image/capture.jpg" >
</div>
<div class="kolom">
    <div class="container">
        <h2>promo</h2>
            <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="card border-dark">
                                <img src="image/promo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="pemesanan.php" class="btn btn-primary btn-sm">Lihat Detil</a>
                            </div>
                        </div>
                    </div>
            </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="card border-dark">
                                <img src="image/promo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="pemesanan.php" class="btn btn-primary btn-sm">Lihat Detil</a>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
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
                &copy; 2021 <b>RahajasaFinishing.</b> All Rights Reserved.
            </div>
        </div>
    </div>
</div>

                

</body>
</html> 