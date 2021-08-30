<?php
session_start();
include '../../koneksi.php';

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

          <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <i class="fas fa-tags"></i>
              <span>Data Pemesanan</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOnne" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item active" href="../data-pemesanan/index.php">Input Data</a>
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
              <h1 class="h3 mb-0 text-gray-800"><strong>LIST PAKET</strong></h1>
            </div>
            <form action="list.php" method="get">
              <label>Cari Nama Paket :</label>
              <input type="text" name="cari">
              <input type="submit" value="Cari">
            </form>
            <br>

            <?php 
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];

              echo "<b>Hasil pencarian : ".$cari."</b>";
            }
            ?>

            <div class="row">
              <?php
              include '../../koneksi.php';
              if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $result = mysqli_query($conn, "SELECT * from paket WHERE nama_paket like '%".$cari."%'");       
              }else {
               $result = mysqli_query($conn, "SELECT * FROM paket");
             }
             $no=1;
             while($row = mysqli_fetch_assoc($result)) {
              ?>
              <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="../../file_upload/<?php echo $row['gambar_wisata1'];?>" width="200" height="200">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $row['nama_paket'];?></h4>
                    <p class="card-text"><?php echo $row['keterangan'];?></p>
                     <p class="card-text">Rp. <?php echo $row['harga'];?> ,-</p>
                  </div>
                  <div class="card-footer">
                    <a href="detail.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm">LIHAT DETAIL</a>
                    <a href="pesan.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">PESAN PAKET</a>
                  </div>
                </div>
              </div>
            <?php } ?>
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

<script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: "nama_paket.php",
      cache: false, 
      success: function(msg){
        $("#nama_paket").html(msg);
      }
    });

    $("#nama_paket").change(function(){
      var nama_paket = $("#nama_paket").val();
      $.ajax({
        type: 'POST',
        url: "nama_wisata1.php",
        data: {nama_paket: nama_paket},
        cache: false,
        success: function(msg){
          $("#nama_wisata1").html(msg);
        }
      });
    });

    $("#nama_wisata1").change(function(){
      var nama_wisata1 = $("#nama_wisata1").val();
      $.ajax({
        type: 'POST',
        url: "nama_wisata2.php",
        data: {nama_wisata1: nama_wisata1},
        cache: false,
        success: function(msg){
          $("#nama_wisata2").html(msg);
        }
      });
    });

    $("#nama_wisata2").change(function(){
      var nama_wisata2 = $("#nama_wisata2").val();
      $.ajax({
        type: 'POST',
        url: "nama_hotel.php",
        data: {nama_wisata2: nama_wisata2},
        cache: false,
        success: function(msg){
          $("#nama_hotel").html(msg);
        }
      });
    });

    $("#nama_hotel").change(function(){
      var nama_hotel = $("#nama_hotel").val();
      $.ajax({
        type: 'POST',
        url: "nama_restoran.php",
        data: {nama_hotel: nama_hotel},
        cache: false,
        success: function(msg){
          $("#nama_restoran").html(msg);
        }
      });
    });

    $("#nama_restoran").change(function(){
      var nama_restoran = $("#nama_restoran").val();
      $.ajax({
        type: 'POST',
        url: "nama_kendaraan.php",
        data: {nama_restoran: nama_restoran},
        cache: false,
        success: function(msg){
          $("#nama_kendaraan").html(msg);
        }
      });
    });

    $("#nama_kendaraan").change(function(){
      var nama_kendaraan = $("#nama_kendaraan").val();
      $.ajax({
        type: 'POST',
        url: "harga.php",
        data: {nama_kendaraan: nama_kendaraan},
        cache: false,
        success: function(msg){
          $("#harga").html(msg);
        }
      });
    });
  });
</script>

<script>
  function sum() {
    var txtFirstNumberValue = document.getElementById('harga').value;
    var txtSecondNumberValue = document.getElementById('tiket').value;
    var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
    if (!isNaN(result)) {
     document.getElementById('total').value = result;
   }
 }
</script>

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
include '../../koneksi.php';
if(isset($_POST['insert'])){
  $username = $_POST['username'];
  $nama_paket = $_POST['nama_paket'];
  $nama_wisata1 = $_POST['nama_wisata1'];
  $nama_wisata2 = $_POST['nama_wisata2'];
  $nama_hotel = $_POST['nama_hotel'];
  $nama_restoran = $_POST['nama_restoran'];
  $nama_kendaraan = $_POST['nama_kendaraan'];
  $harga = $_POST['harga'];
  $tiket = $_POST['tiket'];
  $total = $_POST['total'];
  $status = $_POST['status'];

    // Insert user data into table
  $result = mysqli_query($conn, "INSERT INTO pemesanan(username,nama_paket,nama_wisata1,nama_wisata2,nama_hotel,nama_restoran,nama_kendaraan,harga,tiket,total,status) VALUES('$username','$nama_paket','$nama_wisata1','$nama_wisata2','$nama_hotel','$nama_restoran','$nama_kendaraan','$harga','$tiket','$total','$status')");

  ?>
  <script>
    alert('Success insert!');
    window.location.href = 'list.php';
  </script>
  <?php
}
?>