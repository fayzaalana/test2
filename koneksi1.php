<?php
/**
 * 
*/

class Koneksi
{
    var $conn;
    function __construct()
    {
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "rajasa_finishing";
        $this->conn = mysqli_connect($servername, $username, $password, $database);
    }

    public function select_data_login()
    {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $sql = "SELECT * FROM data_login WHERE username = '$username' AND password ='$password'";
      $result = $this->conn->query($sql);

       if ($result->fetch_assoc()> 0 ){
           $_SESSION['username'] = $username;
           header("location: homepage.php");
        }else{
            echo "<script> alert('username atau password');</script>";
            echo "<script> location = 'login.php;/script>";
        }  
    }

    public function Prosses_login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `data_akun` WHERE `username` = '$username'";
        $query = $this->conn->query($sql);
        $user = $query->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $user['id_kelas'];

            if($user['id_kelas'] == "customer") {
                header('location: homepage.php');
            } else if($user['id_kelas'] == "Admin1") {
                header("location: home_admin.php");
            }
        }else{
              echo "<script> alert('username atau password salah');</script>";
              echo "<script> location = 'login.php;/script>";
        }  
    
    }

    // list data akun
    public function insert_data_akun()
    {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $kelas = $_POST['id_kelas'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `data_akun`(`nama`, `username`, `email`, `alamat`,'id_kelas', `password`) VALUES ('$nama','$username','$email','$alamat','$kelas','$password')";
        $this->conn->query($sql);
        header("location: List_akunrajasafinishing.php"); 
    }

    public function select_kelas()
    {
        $sql = "SELECT * FROM kelas";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function select_data_akun()
    {
        $sql = "SELECT * FROM data_akun JOIN kelas ON data_akun.id_kelas = kelas.id_kelas";
        $result = $this->conn->query($sql);
        return $result;
    }


    public function update_data_akun()
    {
        $id_akun = $_POST['id_akun'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $kelas = $_POST['id_kelas'];
        $password = $_POST['password'];
        $sql = "UPDATE `data_akun` SET `nama`='$nama',`username`='$username',`email`='$email',`alamat`='$alamat','id_kelas'='$kelas'.`password`='$password' WHERE id_akun = $id_akun";
        $this->conn->query($sql);
        header("location: List_akunrajasafinishing.php"); 
    }

    public function delete_data_akun($id_akun = null)
    {
        $sql = "DELETE FROM `data_akun` WHERE id_akun = $id_akun";
        $this->conn->query($sql);
        header("location: List_akunrajasafinishing.php"); 
    }

    // list data barang
    public function select_data_barang()
    {
        $sql = "SELECT * FROM data_barang" ;
        $result = $this->conn->query($sql);
        return $result;
    }

    public function insert_data_barang()
    {
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $foto = $_POST['foto'];
        $keterangan = $_POST['keterangan'];
        $sql = "INSERT INTO `data_barang` SET `nama_barang`='$nama_barang','foto'='$foto'.`keterangan`='$keterangan' WHERE id_barang = $id_barang";
        $this->conn->query($sql);
        header("location: list_barang.php"); 
    }

    public function update_data_barang()
    {
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $foto = $_POST['foto'];
        $keterangan = $_POST['keterangan'];
        $sql = "UPDATE `data_barang` SET `nama_barang`='$nama_barang','foto'='$foto'.`keterangan`='$keterangan' WHERE id_barang = $id_barang";
        $this->conn->query($sql);
        header("location: list_barang.php"); 
    }

    public function delete_data_barang($id_barang = null)
    {
        $sql = "DELETE FROM `data_barang WHERE id_barang = $id_barang";
        $this->conn->query($sql);
        header("location: list_barang.php"); 
    }

    public function prosses_logout()
    {
        session_destroy();
        echo "<script> alert('Anda Telah Berhasil Log out!');</script>";
        echo "<script> location = 'login.php'; </script>";
    }
}
// list data pemesanan
// public function select_data_pemesanan()
//     {
//         $sql = "SELECT * FROM data_pemesanan" ;
//         $result = $this->conn->query($sql);
//         return $result;
    // }
// public function insert_data_pemesanan()
// {
//     $id_pemesanan = $_POST['id_pemesanan'];
//     $nomor_invoce = $_POST['nomor_invoce']
//     $tanggal_pemesanan = $_POST['tanggal_pemesanan']
//     $nama = $_POST['nama'];
//     $alamat = $_POST['alamat'];
//     $jenis_cetakan = $_POST['jenis_cetakan'];
//     $total_harga = $_POST['total_cetakan'];
//     $status_pembayaran = $_POST['status_pembayaran'];
//     $status_prosses = $_POST['status_prosses'];
//     $sql = "INSERT INTO `data_pemesanan SET `nomor_invoce`='$nomor_invoce','waktu_pembayaran'='$waktu_pembayaran',`nama`='$nama' ,`alamat`='$alamat' ,`jenis_cetakan`='$jenis_cetakan',`total_pembayaran`='$total_pembayaran',`Status_pembayaran,`='$status_pembayaran',`status_prosses`='$status_prosses'WHERE id_pemesanan= $id_pemesanan";
//     $this->conn->query($sql);
//     header("location: list_pemesanan.php"); 
// }

// public function update_data_pemesanan()
// {
//     $id_pemesanan = $_POST['id_pemesanan'];
//     $nomor_invoce = $_POST['nomor_invoce']
//     $tanggal_pemesanan = $_POST['tanggal_pemesanan']
//     $nama = $_POST['nama'];
//     $alamat = $_POST['alamat'];
//     $jenis_cetakan = $_POST['jenis_cetakan'];
//     $total_harga = $_POST['total_cetakan'];
//     $status_pembayaran = $_POST['status_pembayaran'];
//     $status_prosses = $_POST['status_prosses'];
//     $sql = "INSERT INTO `data_pemesanan SET `nomor_invoce`='$nomor_invoce','tanggal_pemesanan'='$tanggal_pemesanan',`nama`='$nama' ,`alamat`='$alamat' ,`jenis_cetakan`='$jenis_cetakan',`total_pembayaran`='$total_pembayaran',`Status_pembayaran,`='$status_pembayaran',`status_prosses`='$status_prosses'WHERE id_pemesanan= $id_pemesanan";
//     $this->conn->query($sql);
//     header("location: list_pemesanan.php"); 
// }

// list data konfirmasi pembayaran

// public function select_konfirmasi_pembayaran()
// {
//     $id_pembayaran = $_POST['id_pembayaran'];
//     $nomor_invoce = $_POST['nomor_invoce']
//     $waktu_pembayaran = $_POST['waktu_pembayaran']
//     $ditransfer = $_POST['ditransfer'];
//     $bank_asal = $_POST['bank_asal'];
//     $nama_pemilik_rekening = $_POST['nama_pemilik_rekening'];
//     $jumlah = $_POST['jumlah'];
//     $bukti = $_POST['bukti'];
//     $status_pembayaran = $_POST['status_pembayaran'];
//     $sql = "INSERT INTO `konfirmasi_pembayaran SET `nomor_invoce`='$nomor_invoce','waktu_pembayaran'='$waktu_pembayaran',`ditransfer`='$ditransfer' ,`bank_asal`='$bank_asal' ,`nama_pemilik_rekenig`='$nama_pemilik_rekenig',`jumlah`='$jumlah',`bukti`='$bukti',`status_prosses`='$status_prosses'WHERE id_pembayaran= $id_pembayaran";
//     $this->conn->query($sql);
//     header("location: list_pembayaran.php"); 
// }

// public function update_data_pemesanan()
// {
//     $id_pembayaran = $_POST['id_pembayaran'];
//     $nomor_invoce = $_POST['nomor_invoce']
//     $waktu_pembayaran = $_POST['waktu_pembayaran']
//     $ditransfer = $_POST['ditransfer'];
//     $bank_asal = $_POST['bank_asal'];
//     $nama_pemilik_rekening = $_POST['nama_pemilik_rekening'];
//     $jumlah = $_POST['jumlah'];
//     $bukti = $_POST['bukti'];
//     $status_pembayaran = $_POST['status_pembayaran'];
//     $sql = "INSERT INTO `konfirmasi_pembayaran SET `nomor_invoce`='$nomor_invoce','waktu_pembayaran'='$waktu_pembayaran',`ditransfer`='$ditransfer' ,`bank_asal`='$bank_asal' ,`nama_pemilik_rekenig`='$nama_pemilik_rekenig',`jumlah`='$jumlah',`bukti`='$bukti',`status_prosses`='$status_prosses'WHERE id_pembayaran= $id_pembayaran";
//     $this->conn->query($sql);
//     header("location: list_pembayaran.php"); 
// }

// public function delete_data_pemesanan($id_pemesanan = null)
// {
//     $sql = "DELETE FROM `konfirmasi_pembayaran WHERE id_pembayaran = $id_pembayaran";
//     $this->conn->query($sql);
//     header("location: list_pembayaran.php"); 
// }

// public function delete_konfirmasi_pembayaran($id_pembayaran = null)
// {
//     $sql = "DELETE FROM `konfirmasi_pembayaran WHERE id_pembayaran = $id_pembayaran";
//     $this->conn->query($sql);
//     header("location: list_pembayaran.php"); 
// }

// public function prosses_logout()
// {
//     session_destroy();
//     echo "<script> alert('Anda Telah Berhasil Log out!');</script>";
//     echo "<script> location = 'login.php'; </script>";
// }


$koneksi = new Koneksi();
if (isset($_GET['prosses_login'])) {
    $koneksi->prosses_login($_GET['prosses_login']);
}

if (isset($_GET['prosses_registrasi'])) {
    $koneksi->prosses_registrasi($_GET['prosses_registrasi']);
}

if (isset($_GET['delete_data_akun'])) {
    $koneksi->delete_data_akun($_GET['delete_data_akun']);
}

if (isset($_GET['insert_data_akun'])) {
    $koneksi->insert_data_akun();
}

if (isset($_GET['update_data_akun'])) {
    $koneksi->update_data_akun();
}
// barang
if (isset($_GET['delete_data_barang'])) {
    $koneksi->delete_data_barang($_GET['delete_data_barang']);
}

if (isset($_GET['insert_data_barang'])) {
    $koneksi->insert_data_barang();
}

if (isset($_GET['update_data_barang'])) {
    $koneksi->update_data_barang();
}

if (isset($_GET['prosses_logout'])) {
    $koneksi->prosses_logout($_GET['prosses_logout']);
}
// pemesanan
if (isset($_GET['delete_data_pemesanan'])) {
    $koneksi->delete_data_pemesanan($_GET['delete_data_pemesanan']);
}

if (isset($_GET['insert_data_pemesanan'])) {
    $koneksi->insert_data_pemesanan();
}

if (isset($_GET['update_data_pemesanan'])) {
    $koneksi->update_data_pemesanan();
}
// pembayaran
if (isset($_GET['delete_konfirmasi_pembayaran'])) {
    $koneksi->delete_konfirmasi_pembayaran($_GET['delete_konfirmasi_pembayaran']);
}

if (isset($_GET['select_konfirmasi_pembayaran'])) {
    $koneksi->select_konfirmasi_pembayaran();
}

if (isset($_GET['update_konfirmasi_pembayaran'])) {
    $koneksi->update_konfirmasi_pembayaran();
}
?>