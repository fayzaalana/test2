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
<div>
    <div class="text-center">
    <h3>Konfirmasi Pembayaran</h3></div>
</div>
    <div class="container">
        <form action="tubes2.php" method="GET">
            <div class="form-group">
                <label>Nomor Invoice</label>
                <input type="number" class="form-control" id="nomor_invoice" name="nomor_invoice" placehoder="nomor_invoice">
             </div>
            <div class="form-group">
                <label>Waktu Pembayaran</label>
                <input type="date" class="form-control" id="waktu_pembayaran" name="waktu_pembayaran" placehoder="Tgl/Bln/Thn">
            </div>
            <div class="form-group">
                <label>Ditransfer ke </label>
                <select class="form-control">
                    <option selected disabled>-Pilih-</option>
                    <option value="lunas">Mandiri</option>
                    <option value="dp1">BCA</option>
                    <option value="dp2">BRI</option>
                    <option value="dp2">BNI</option>
                    <option value="dp2">BNI</option>
                </select>
            </div>
            <div class="form-group">
                <label >Bank Asal</label>
                <select class="form-control">
                    <option selected disabled>-Pilih-</option>
                    <option value="lunas">Mandiri</option>
                    <option value="dp1">BCA</option>
                    <option value="dp2">BRI</option>
                    <option value="dp2">BNI</option>
                    <option value="dp2">BNI</option>
                </select>
            </div>
            <div class="form-group">
                <label >Nama Pemilik Rekening</label>
                <input type="text" class="form-control" name="nama" placehoder="Wijaya">
            </div>
            <div class="form-group">
                <label >Jumlah</label>
                <input type="text" class="form-control" name="jumlah" placehoder="Rp.123.000">
            </div>
            <div class="form-group">
                <label>status Pembayaran</label>
                <select class="form-control">
                    <option selected disabled>-Pilih status Pembayaran-</option>
                    <option value="lunas">Lunas</option>
                    <option value="dp1">DP 1</option>
                    <option value="dp2">Dp 2</option>
                </select>
              </div><br>
            <div class="mb-3">
                        <label for="">Bukti Transfer</label>
                        <input type="file" class="form-control" name="uploas_bukti">
                </div>
                <button type="submit" class="btn btn-outline-primary">Konfirmasi</button>
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
</div>

  </body>
</html>