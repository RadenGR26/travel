<?php
session_start();
include '../../koneksi.php';


$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM akun WHERE id=$id");

while($data = mysqli_fetch_array($result))
{
  $id = $data['id'];
  $nama = $data['nama'];
  $nik = $data['nik'];
  $username = $data['username'];
  $password = $data['password'];
  $ktp = $data['ktp'];
  $idakun = $data['idakun'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="../../images/img.png" rel="icon">
  <title>Travel Usik Rent Car</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <br>
      <!-- Sidebar - Brand -->
      <th><center><img src="../../images/img.png" width="150px" align="center"><br><h6 style="color: white;"><strong>TRAVEL USIK RENT CAR</strong></h6></th>
        <br>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="../Dashboard/index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">


          <!-- Heading -->
          <div class="sidebar-heading">
            Menu
          </div>

          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <i class="fas fa-tags"></i>
              <span>Data Pemesanan</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOnne" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item" href="../data-pemesanan/index.php">Input Data</a>
                <a class="collapse-item" href="../data-pemesanan/list.php">List Data</a>
              </div>
            </div>
          </li>

          <hr class="sidebar-divider">
          <!-- Heading -->
          <div class="sidebar-heading">
            Menu Akun
          </div>


          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-users"></i>
              <span>Data Akun</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item" href="../data-akun/list.php">List Data Akun</a>
                <a class="collapse-item active" href="#">Edit Data Akun</a>
              </div>
            </div>
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>

              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

               <div class="topbar-divider d-none d-sm-block"></div>
               <!-- Nav Item - User Information -->
               <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php
                  include '../../koneksi.php';
                  ?>
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang, 
                    <?php
                    if (isset($_SESSION['username'])) {
                      echo $_SESSION['username'];
                    }else{
                    }
                    ?>
                  </span>
                  <img class="img-profile rounded-circle" src="../../images/user.png">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800"><strong>EDIT DATA AKUN</strong></h1>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama" required="nama" value="<?php echo $nama ?>">
              </div>
              <div class="form-group">
                <label for="nik">Nomor Induk Pegawai :</label>
                <input type="number" class="form-control" id="nik" placeholder="Enter Nomor Induk Pegawai" name="nik" required="nik" value="<?php echo $nik ?>">
              </div>
              <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required="username" value="<?php echo $username ?>">
              </div>
              <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required="password" value="<?php echo $password ?>">
              </div>
              <div class="form-group">
                <label>Foto KTP :</label><br>
                <a href="../../file_upload/<?php echo $ktp?>"><img src="../../file_upload/<?php echo $ktp?>" width="300px"></a><br><br>
                <input class="form-control" type="file" name="ktp">
                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg &ensp; Size Max 2 MB</p>
              </div>
              <div class="form-group">
                <label for="idakun">ID idakun :</label>
                <select class="form-control" id="idakun" name="idakun" required="idakun" readonly>
                  <option value="<?php echo $idakun ?>"><?php echo $idakun ?></option>
                </select>
              </div>
              <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
            </form>
          </div>
          <!-- /.container-fluid -->

        </div>


        <!-- /.container-fluid -->
<!-- 
</div> -->
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>&copy; Copyright <strong><span>TRAVEL USIK RENT CAR</span></strong> 2020</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Siap untuk Keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="../../login.php">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../js/demo/chart-area-demo.js"></script>
<script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>

<?php

if(isset($_POST['update']))
{   
  $nama = $_POST['nama'];
  $nik = $_POST['nik'];
  $username = $_POST['username'];
  $password = $_POST['password'];


        // check bila file image mau di update
  if(file_exists($_FILES['ktp']['tmp_name'])){
    $ktp = date("YmdHis").$_FILES['ktp']['name'];
    $namaid_cardSementara = $_FILES['ktp']['tmp_name'];
    $dirUpload = "../../file_upload/";
    $terupload = move_uploaded_file($namaid_cardSementara, $dirUpload.$ktp);
    mysqli_query($conn, "UPDATE akun SET ktp='$ktp' WHERE id=$id");
  }

  $idakun = $_POST['idakun'];


  mysqli_query($conn, "UPDATE akun SET nama='$nama',nik='$nik',username='$username',password='$password',ktp='$ktp',idakun='$idakun' WHERE id=$id");


  ?>
  <script>
    alert('Success to update!');
    window.location.href = 'list.php';
  </script>
  
  <?php
}
?>