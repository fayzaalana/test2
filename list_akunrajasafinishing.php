<?php
include_once "Koneksi1.php";
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>List Data Akun Rajasa Finisihing</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Rajasa Finishing</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<header>
        <div class="text-center">
            <h1>Tabel Data Akun Rajasa Finisihing</h1>
                </div>

</header>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
                <ul class="nav ms-auto">
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fa fa-bell fa-lg py-2" aria-hidden="true"></i>
                            <span class="badge bg-danger">10</span>
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                                <i class="fa fa-bell me-3" aria-hidden="true"></i>
                                <span class="fw-bold lh-1">Notifikasi</span>
                            </div>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-envelope fa-lg dropdown-icons bg-primary text-white p-2 me-2"
                                        aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">Safna Prasetiono</p>
                                        <span class="content-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Quia sint laboriosam in architecto earum.</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-file fa-lg dropdown-icons bg-warning text-white p-2 me-2"
                                        aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">file informations</p>
                                        <span class="content-text">your file has exceeded the limit.</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-hdd-o fa-lg dropdown-icons bg-danger text-white p-2 me-2"
                                        aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">Storage</p>
                                        <span class="content-text">Your storage is full, delete some files.</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <img src="./images/user/user.png" alt="user" class="img-user">
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom mb-2">
                                <img src="./images/user/user.png" alt="user" class="img-user me-2">
                                <div class="d-block">
                                    <p class="fw-bold m-0 lh-1">YourName</p>
                                    <small>YourAccount@gmail.com</small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3">
                    <img src="./images/user/user.png" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white">YourName</p>
                    <small class="text-white">YourAccount@gmail.com</small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <a class="nav-link px-3 active" href="#">
                        <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                    </a>
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="list_akunrajasafinishing.php">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>List Akun
                    </a>
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-calendar fa-lg box-icon" aria-hidden="true"></i>Pleanning
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-bell fa-lg box-icon" aria-hidden="true"></i>Notifikasi
                    </a>
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-envelope fa-lg box-icon" aria-hidden="true"></i>Message
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-id-card fa-lg box-icon" aria-hidden="true"></i>License
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>
  <div class="container-fluid mt-5">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#shippingModal">
      Add Data Akun
    </button>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>  
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kelas </th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data_akun = $koneksi->SELECT_data_akun();
            $no = 1;
            ?>  
            <?php foreach ($data_akun as $row): ?>
                <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $row['nama'] ?></td> 
                    <td><?= $row['username'] ?></td> 
                    <td><?= $row['email'] ?></td> 
                    <td><?= $row['alamat'] ?></td> 
                    <td><?= $row['id_kelas']?></td>
                    <td><?= $row['password'] ?></td>
                    <td>
                    <a href="" class="badge badge-success" data-toggle="modal" data-target="#akun<?= $row['id_akun'] ?>">Edit</a>
                    <a href="Koneksi1.php?delete_data_akun=<?= $row['id_akun'] ?>" class="badge badge-danger">Delete</a></td> 
                </tr>
            <?php endforeach ?>
        </tbody>    
    </table>
  </div>
 
<?php foreach ($data_akun as $row): ?>
  <!-- Modal EDIT-->
  <div class="modal fade" id="akun<?= $row['id_akun'] ?>" tabindex="-1" aria-labelledby="akun_label<?= $row['id_akun'] ?>" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="akun_label<?= $row['id_akun'] ?>">Edit Data Akun</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="Koneksi1.php?update_data_akun" method="post">
          <input type="hidden" name="id_akun" value="<?= $row['id_akun'] ?>">
          <div class="modal-body">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?= $row['email'] ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $row['alamat'] ?>">
            </div>
            <div class="form-group">
                <label>kelas </label>
                <select class="form-control" name="id_kelas">
                    <option selected disabled>Pilih kelas</option>
                    <option value="customer">Customer</option>
                    <option value="admin1">Admin 1</option>
                    <option value="admin2">Admin 2</option>
                    <option value="Owner">Owner </option>
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control" value="<?= $row['password'] ?>">
              </div>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
					  </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach ?>


<!-- Modal -->
<div class="modal fade" id="shippingModal" tabindex="-1" aria-labelledby="shippingModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="shippingModalLabel">Add Data Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  
      </div>
      <form action="Koneksi1.php?insert_data_akun" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <!-- <input type="text" class="form-control" name="kelas" value="<?= $row['kelas'] ?>"> -->
                <select class="form-control" name="kelas" id="kelas">
                  <option select disabled>Pilih Kelas</option>
                  <?php 
                  $kelas = $koneksi->select_kelas();
                  foreach ($kelas as $row):?>
                      <?php if($row['id_kelas'] == $row['id_kelas']):?>
                          <option value="<?= $row['id_kelas']?>" selected ><?= $row['id_kelas']?></option>
                      <?php else: ?>
                          <option value="<?= $row['id_kelas']?>"><?= $row['id_kelas']?></option>
                      <?php endif ?>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control">
            </div>
        </div>       
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>