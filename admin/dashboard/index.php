<?php
session_start();
include '../../koneksi.php';

$result = mysqli_query($conn, "SELECT count(*) as jumlah_pemesanan FROM pemesanan");

while($data = mysqli_fetch_array($result))
{
  $jumlah_pemesanan = $data['jumlah_pemesanan'];
}

$result = mysqli_query($conn, "SELECT count(*) as jumlah_profil FROM profil");

while($data = mysqli_fetch_array($result))
{
  $jumlah_profil = $data['jumlah_profil'];
}

$result = mysqli_query($conn, "SELECT count(*) as jumlah_paket FROM paket");

while($data = mysqli_fetch_array($result))
{
  $jumlah_paket = $data['jumlah_paket'];
}

$result = mysqli_query($conn, "SELECT count(*) as jumlah_wisata FROM wisata");

while($data = mysqli_fetch_array($result))
{
  $jumlah_wisata = $data['jumlah_wisata'];
}

$result = mysqli_query($conn, "SELECT count(*) as jumlah_hotel FROM hotel");

while($data = mysqli_fetch_array($result))
{
  $jumlah_hotel = $data['jumlah_hotel'];
}

$result = mysqli_query($conn, "SELECT count(*) as jumlah_restoran FROM restoran");

while($data = mysqli_fetch_array($result))
{
  $jumlah_restoran = $data['jumlah_restoran'];
}

$result = mysqli_query($conn, "SELECT count(*) as jumlah_kendaraan FROM kendaraan");

while($data = mysqli_fetch_array($result))
{
  $jumlah_kendaraan = $data['jumlah_kendaraan'];
}

$result = mysqli_query($conn, "SELECT count(*) as jumlah_akun FROM akun");

while($data = mysqli_fetch_array($result))
{
  $jumlah_akun = $data['jumlah_akun'];
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
        <li class="nav-item active">
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


          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Users Interface
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-building"></i>
              <span>Data Profil</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingOnne" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item" href="../data-profil/index.php">Input Data</a>
                <a class="collapse-item" href="../data-profil/list.php">List Data</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              <i class="far fa-file-alt"></i>
              <span>Data Paket</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingOnne" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item" href="../data-paket/index.php">Input Data</a>
                <a class="collapse-item" href="../data-paket/list.php">List Data</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              <i class="fas fa-archway"></i>
              <span>Data Wisata</span>
            </a>
            <div id="collapseFour" class="collapse" aria-labelledby="headingOnne" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item" href="../data-wisata/index.php">Input Data</a>
                <a class="collapse-item" href="../data-wisata/list.php">List Data</a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
              <i class="fas fa-hotel"></i>
              <span>Data Hotel</span>
            </a>
            <div id="collapseFive" class="collapse" aria-labelledby="headingOnne" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item" href="../data-hotel/index.php">Input Data</a>
                <a class="collapse-item" href="../data-hotel/list.php">List Data</a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
              <i class="fas fa-hotel"></i>
              <span>Data Restoran</span>
            </a>
            <div id="collapse5" class="collapse" aria-labelledby="headingOnne" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item" href="../data-restoran/index.php">Input Data</a>
                <a class="collapse-item" href="../data-restoran/list.php">List Data</a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
              <i class="fas fa-fw fa-car"></i>
              <span>Data Kendaraan</span>
            </a>
            <div id="collapseSix" class="collapse" aria-labelledby="headingOnne" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item" href="../data-kendaraan/index.php">Input Data</a>
                <a class="collapse-item" href="../data-kendaraan/list.php">List Data</a>
              </div>
            </div>
          </li>

          <hr class="sidebar-divider">
          <!-- Heading -->
          <div class="sidebar-heading">
            Menu Akun
          </div>


          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-users"></i>
              <span>Data Akun</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item" href="../data-akun/index.php">Input Data Akun</a>
                <a class="collapse-item" href="../data-akun/list.php">List Data Akun</a>
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
              <h1 class="h3 mb-0 text-gray-800"><strong>DASHBOARD</strong></h1>
            </div>

            <!-- Content Row -->
            <div class="row">

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <a href="../data-pemesanan/list.php">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">DATA PEMESANAN</div>
                          <div class="h6 mb-0 font-weight-bold text-gray-800">JUMLAH DATA = <?php echo $jumlah_pemesanan ?></div></a>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-tags fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <a href="../data-profil/list.php">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">DATA PROFIL</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">JUMLAH DATA = <?php echo $jumlah_profil ?></div></a>
                          </div>
                          <div class="col-auto">
                            <i class="fas far fa-building fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <a href="../data-paket/list.php">
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">DATA PAKET</div>
                              <div class="h6 mb-0 font-weight-bold text-gray-800">JUMLAH DATA = <?php echo $jumlah_paket ?></div></a>
                            </div>
                            <div class="col-auto">
                              <i class="fas far fa-file-alt fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <a href="../data-wisata/list.php">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DATA WISATA</div>
                                <div class="h6 mb-0 font-weight-bold text-gray-800">JUMLAH DATA = <?php echo $jumlah_wisata ?></div></a>
                              </div>
                              <div class="col-auto">
                                <i class="fas far fa-archway fa-2x text-gray-300"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Earnings (Monthly) Card Example -->
                      <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-secondary shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <a href="../data-hotel/list.php">
                                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">DATA HOTEL</div>
                                  <div class="h6 mb-0 font-weight-bold text-gray-800">JUMLAH DATA = <?php echo $jumlah_hotel ?></div></a>
                                </div>
                                <div class="col-auto">
                                  <i class="fas far fa-hotel fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <a href="../data-kendaraan/list.php">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">DATA KENDARAAN</div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">JUMLAH DATA = <?php echo $jumlah_kendaraan ?></div>
                                  </div>
                                  <div class="col-auto">
                                    <i class="fas fa-car fa-2x text-gray-300"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Earnings (Monthly) Card Example -->
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                              <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                    <a href="../data-hotel/list.php">
                                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">DATA RESTORAN</div>
                                      <div class="h6 mb-0 font-weight-bold text-gray-800">JUMLAH DATA = <?php echo $jumlah_restoran ?></div></a>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas far fa-hotel fa-2x text-gray-300"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <a href="../data-akun/list.php">
                                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">DATA AKUN</div>
                                        <div class="h6 mb-0 font-weight-bold text-gray-800">JUMLAH DATA = <?php echo $jumlah_akun ?></div></a>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>


                          </div>

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
