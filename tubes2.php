<?php
include "koneksi1.php"; 
if( isset($_POST["submit"])) {
   
            // menyimpan data kedalam variabel
            $id_pembayaran = $_POST['id_pembayaran'];
            $nomor_invoce = $_POST['nomor_invoce']
            $waktu_pembayaran = $_POST['waktu_pembayaran']
            $ditransfer = $_POST['ditransfer'];
            $bank_asal = $_POST['bank_asal'];
            $nama_pemilik_rekening = $_POST['nama_pemilik_rekening'];
            $jumlah = $_POST['jumlah'];
            $bukti = $_POST['bukti'];
            $status_pembayaran = $_POST['status_pembayaran'];

            // query SQL untuk insert data
            $sql = "INSERT INTO `konfirmasi_pembayaran SET `nomor_invoce`='$nomor_invoce','waktu_pembayaran'='$waktu_pembayaran',`ditransfer`='$ditransfer' ,`bank_asal`='$bank_asal' ,`nama_pemilik_rekenig`='$nama_pemilik_rekenig',`jumlah`='$jumlah',`bukti`='$bukti',`status_prosses`='$status_prosses'WHERE id_pembayaran= $id_pembayaran";
             
            if ($conn->query($sql) === TRUE) {
                // redirect ke halaman tampil data
                
                echo "data berhasil di submit";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }




// $sql = "INSERT INTO pendaftaran (nama_depan, nama_belakang, no_telp,perusahaan,email,kota,tgl_lahir,event)
// VALUES ('".$nama_depan."','".$nama_belakang."','".$no_telp."','".$perusahaan."','".$email."','".$kota."','".$tgl_lahir."','PSYTALK 31')";


//if (mysqli_query($conn, $sql)) {
//  echo "New record created successfully";
//} else {
 // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

mysqli_close($conn);
?>

