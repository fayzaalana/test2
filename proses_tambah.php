<?php

include "../koneksi.php";

if (isset($_POST['tambah'])) {

    $nama_barang = $_POST['nama_barang'];
    $tanggal_input = $_POST['tanggal_input'];
    $nama_file = $_FILES['foto']['name'];

    if (!empty($nama_file)) {
        //baca lokasi file sementara dan nama file
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $nama_barang . "." . $tipe_file;

        //tentukan folder untuk menyimpan file
        $folder =  "../images/$file_foto";
        move_uploaded_file($lokasi_file, "$folder");
    } else {
        $file_foto = "-";
    }


    if (!$nama_barang || !$tanggal_input) {
        echo "<script>alert('Silahkan lengkapi form');location='../tambah_barang.php';</script>";
    } else {
        $sql = "INSERT INTO barang (nama_barang, tanggal_input, foto) 
        VALUES ('$nama_barang', '$tanggal_input', '$file_foto')";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            echo "<script>alert('Input data berhasil');location='../index.php';</script>";
        } else {
            echo "<script>alert('Input data gagal');location='../tambah_barang.php';</script>";
        }
    }
}
