<?php
include "koneksi.php"; 
if( isset($_POST["submit"])) {
   
            // menyimpan data kedalam variabel
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $password = $_POST['password'];

            // query SQL untuk insert data
             $sql="INSERT INTO data_akun set nama='$nama', username='$username',alamat='$alamat', email='$email', password='$password'";
             
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

