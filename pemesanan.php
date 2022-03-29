<?php 
    if(isset($_POST['submit'])){
        echo "data berhasil di submit";
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

<body>
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

<div class="wrapper">
    <form action="#" method="GET">
        <section id="deskripsi">
            <img src="image/kalender.jfif"/>
                <div class="kolom2">
                    <h3>Kalender Meja Ukuran 24x17 </h3>
                        <div class="form-group">
                            <h5>Ukuran kertas:</h5>
                                <select class="form-control">
                                    <option disabled selected> Pilih Ukuran</option>
                                    <option value="A3(30*42)">A3(30*42)</option>
                                    <option value="38*53">38*53</option>
                                    <option value="42*62">42*62)</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <h5>pilih Jenis kertas:</h5>
                            <select class="form-control">
                                <option disabled selected> Pilih Jenis Kertas</option>
                                <option value="art paper 120 grm">art paper 120 grm</option>
                                <option value="art paper 150 grm">art paper 150 grm</option>
                                <option value="art cartoon 190 grm">art cartoon 190 grm)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h5>Isi</h5>
                            <select class="form-control">
                                <option disabled selected> Jumlah isian</option>
                                <option value="art paper 120 grm">7 Lembar</option>
                                <option value="art paper 150 grm">13 Lembar</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label >Upload Design</label>
                            <input type="file" class="form-control" name="uploas_design">
                        </div>
                    </div>
            </section>
                        <button type="submit" class="tbl-biru" name = "submit">Pesan Sekarang</button>
                        <button type="submit" class="tbl-biru" name = "submit">Massukan Keranjang</button>
</div>

    <div class="container">
    <div class="kolom2">
        <div class="keterangan">
            <h3>Keterangan:</h3>
            <h6>Ukuran : 24x17</h6><br>
            <h6>isi: 6 Lembar + Cover 1 Lembar / 12 Lembar + Cover 1 Lembar</h6><br>
            <h6>Cetakan: 2 Sisi (4/4)</h6><br>
            <h6>Tatakan : Handboard dengan linen hitam</h6><br>
            <h6>jilid : spiral / O ring Full</h6><br>
            <h6>Finishing : Tahapan Laminasi / Laminasi</h6><br>
        </div>
    </form>
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
  </body>
</html>