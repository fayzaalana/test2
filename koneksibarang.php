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
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM data_akun WHERE username = '$username' AND password ='$password'";
        $result = $this->conn->query($sql);
  
         if ($result->fetch_assoc() > 0 ){
             $_SESSION['username'] = $username;
             header("location: homepage.php");
        }else{
              echo "<script> alert('username atau password salah');</script>";
              echo "<script> location = 'login.php;/script>";
        }  
    
    }
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

    public function prosses_logout()
    {
        session_destroy();
        echo "<script> alert('Anda Telah Berhasil Log out!');</script>";
        echo "<script> location = 'login.php'; </script>";
    }
}
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

if (isset($_GET['prosses_logout'])) {
    $koneksi->prosses_logout($_GET['prosses_logout']);
}


?>