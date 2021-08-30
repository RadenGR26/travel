<?php
session_start();
include '../../koneksi.php';


$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM pemesanan WHERE id=$id");

while($data = mysqli_fetch_array($result))
{
  $id = $data['id'];
  $username = $data['username'];
  $nama_paket = $data['nama_paket'];
  $nama_wisata1 = $data['nama_wisata1'];
  $gambar_wisata1 = $data['gambar_wisata1'];
  $nama_wisata2 = $data['nama_wisata2'];
  $gambar_wisata2 = $data['gambar_wisata2'];
  $nama_hotel = $data['nama_hotel'];
  $gambar_hotel = $data['gambar_hotel'];
  $nama_restoran = $data['nama_restoran'];
  $gambar_restoran = $data['gambar_restoran'];
  $nama_kendaraan = $data['nama_kendaraan'];
  $gambar_kendaraan = $data['gambar_kendaraan'];
  $keterangan = $data['keterangan'];
  $harga = $data['harga'];
  $tiket = $data['tiket'];
  $total = $data['total'];
  $dp = $data['dp'];
  $lunas = $data['lunas'];
  $tanggal_in = $data['tanggal_in'];
  $tanggal_out = $data['tanggal_out'];
  $status = $data['status'];
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

          <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <i class="fas fa-tags"></i>
              <span>Data Pemesanan</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOnne" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan :</h6>
                <a class="collapse-item" href="../data-pemesanan/index.php">Input Data</a>
                <a class="collapse-item" href="../data-pemesanan/list.php">List Data</a>
                <a class="collapse-item active" href="#">Edit Data</a>
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
              <h1 class="h3 mb-0 text-gray-800"><strong>EDIT PEMESANAN PAKET</strong></h1>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
             <div class="form-group">
              <label for="username">Nama Pemesan :</label>
              <input type="text" class="form-control" id="username" placeholder="Enter Nama Pemesan" name="username" required="username" value="<?php echo $username ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama_paket">Nama Paket :</label>
              <input type="text" class="form-control" id="nama_paket" placeholder="Enter Nama Paket" name="nama_paket" required="nama_paket" value="<?php echo $nama_paket ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama_wisata1">Nama Wisata 1 :</label>
              <input type="text" class="form-control" id="nama_wisata1" placeholder="Enter Nama Wisata 1" name="nama_wisata1" required="nama_wisata1" value="<?php echo $nama_wisata1 ?>" readonly>
            </div>
            <div class="form-group">
              <label for="gambar_wisata1">Gambar Wisata 1 :</label><br>
              <a href="../../file_upload/<?php echo $gambar_wisata1?>"><img src="../../file_upload/<?php echo $gambar_wisata1?>" width="200px"></a><br><br>
              <input type="text" class="form-control" id="gambar_wisata1" placeholder="Enter Gambar Wisata 1" name="gambar_wisata1" required="gambar_wisata1" value="<?php echo $gambar_wisata1 ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama_wisata2">Nama Wisata 2 :</label>
              <input type="text" class="form-control" id="nama_wisata2" placeholder="Enter Nama Wisata 2" name="nama_wisata2" required="nama_wisata2" value="<?php echo $nama_wisata2 ?>" readonly>
            </div>
            <div class="form-group">
              <label for="gambar_wisata2">Gambar Wisata 2 :</label><br>
              <a href="../../file_upload/<?php echo $gambar_wisata2?>"><img src="../../file_upload/<?php echo $gambar_wisata2?>" width="200px"></a><br><br>
              <input type="text" class="form-control" id="gambar_wisata2" placeholder="Enter Gambar Wisata 2" name="gambar_wisata2" required="gambar_wisata2" value="<?php echo $gambar_wisata2 ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama_hotel">Nama Hotel :</label>
              <input type="text" class="form-control" id="nama_hotel" placeholder="Enter Nama Hotel" name="nama_hotel" required="nama_hotel" value="<?php echo $nama_hotel ?>" readonly>
            </div>
            <div class="form-group">
              <label for="gambar_hotel">Gambar Hotel :</label><br>
              <a href="../../file_upload/<?php echo $gambar_hotel?>"><img src="../../file_upload/<?php echo $gambar_hotel?>" width="200px"></a><br><br>
              <input type="text" class="form-control" id="gambar_hotel" placeholder="Enter Gambar Hotel" name="gambar_hotel" required="gambar_hotel" value="<?php echo $gambar_hotel ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama_restoran">Nama Restoran :</label>
              <input type="text" class="form-control" id="nama_restoran" placeholder="Enter Nama Restoran" name="nama_restoran" required="nama_restoran" value="<?php echo $nama_restoran ?>" readonly>
            </div>
            <div class="form-group">
              <label for="gambar_restoran">Gambar Restoran :</label><br>
              <a href="../../file_upload/<?php echo $gambar_restoran?>"><img src="../../file_upload/<?php echo $gambar_restoran?>" width="200px"></a><br><br>
              <input type="text" class="form-control" id="gambar_restoran" placeholder="Enter Gambar Restoran" name="gambar_restoran" required="gambar_restoran" value="<?php echo $gambar_restoran ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama_kendaraan">Nama Kendaraan :</label>
              <input type="text" class="form-control" id="nama_kendaraan" placeholder="Enter Nama Kendaraan" name="nama_kendaraan" required="nama_kendaraan" value="<?php echo $nama_kendaraan ?>" readonly>
            </div>
            <div class="form-group">
              <label for="gambar_kendaraan">Gambar Kendaraan :</label><br>
              <a href="../../file_upload/<?php echo $gambar_kendaraan?>"><img src="../../file_upload/<?php echo $gambar_kendaraan?>" width="200px"></a><br><br>
              <input type="text" class="form-control" id="gambar_kendaraan" placeholder="Enter Gambar Kendaraan" name="gambar_kendaraan" required="gambar_kendaraan" value="<?php echo $gambar_kendaraan ?>" readonly>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea type="text" class="form-control" id="keterangan" name="keterangan" required="keterangan" readonly=""><?php echo $keterangan?></textarea>
            </div>
            <div class="form-group">
              <label for="harga">Harga :</label>
              <input type="number" class="form-control" id="harga" name="harga" required="harga" value="<?php echo $harga?>" readonly onkeyup="sum();">
            </div>
            <div class="form-group">
              <label for="tiket">Jumlah Tiket :</label>
              <input type="number" class="form-control" id="tiket" name="tiket" value="<?php echo $tiket ?>" required="tiket" onkeyup="sum();" readonly>
            </div>
            <div class="form-group">
              <label for="total">total Harga :</label>
              <input type="number" class="form-control" id="total" name="total" value="<?php echo $total ?>" required="total" readonly onkeyup="sum();">
            </div>
            <div class="form-group">
              <label>Bukti Pembayaran :</label><br>
              <a href="../../file_upload/<?php echo $dp?>"><img src="../../file_upload/<?php echo $dp?>" width="300px"></a><br><br>
              <input class="form-control" type="file" name="dp" readonly>
            </div>
            <div class="form-group">
              <label>Bukti Pembayaran :</label><br>
              <a href="../../file_upload/<?php echo $lunas?>"><img src="../../file_upload/<?php echo $lunas?>" width="300px"></a><br><br>
              <input class="form-control" type="file" name="lunas" readonly>
            </div>
            <div class="form-group">
              <label for="tanggal_in">Mulai Tanggal :</label>
              <input type="text" class="form-control" id="tanggal_in" placeholder="Enter Mulai Tanggal" name="tanggal_in" required="tanggal_in" value="<?php echo $tanggal_in ?>" readonly>
            </div>
            <div class="form-group">
              <label for="tanggal_out">Selesai Tanggal :</label>
              <input type="text" class="form-control" id="tanggal_out" placeholder="Enter Selesai Tanggal" name="tanggal_out" required="tanggal_out" value="<?php echo $tanggal_out ?>" readonly>
            </div>
            <div class="form-group">
              <label>Status :</label>
              <select class="form-control" name="status" id="status" required>
                <option value="<?php echo $status ?>"><?php echo $status ?></option>
                <option value="Mengajukan Pemesanan">Mengajukan Pemesanan</option>
                <option value="Belum Melakukan Pembayaran">Belum Melakukan Pembayaran</option>
                <option value="Pesanan Di Proses">Pesanan Di Proses</option>
                <option value="Transaksi Berhasil">Transaksi Berhasil</option>
              </select>
            </div>
            <button type="submit" name="update" class="btn btn-primary">UPDATE PESANAN</button>
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
if(isset($_POST['update'])){
  $username = $_POST['username'];
  $nama_paket = $_POST['nama_paket'];
  $nama_wisata1 = $_POST['nama_wisata1'];
  $gambar_wisata1 = $_POST['gambar_wisata1'];
  $nama_wisata2 = $_POST['nama_wisata2'];
  $gambar_wisata2 = $_POST['gambar_wisata2'];
  $nama_hotel = $_POST['nama_hotel'];
  $gambar_hotel = $_POST['gambar_hotel'];
  $nama_restoran = $_POST['nama_restoran'];
  $gambar_restoran = $_POST['gambar_restoran'];
  $nama_kendaraan = $_POST['nama_kendaraan'];
  $gambar_kendaraan = $_POST['gambar_kendaraan'];
  $keterangan = $_POST['keterangan'];
  $harga = $_POST['harga'];
  $tiket = $_POST['tiket'];
  $total = $_POST['total'];

  $dirUpload = "../../file_upload/";
  
  if(file_exists($_FILES['dp']['tmp_name'])){
    $dp = date("YmdHis").$_FILES['dp']['name'];
    $namaid_cardSementara = $_FILES['dp']['tmp_name'];
    $terupload = move_uploaded_file($namaid_cardSementara, $dirUpload.$dp);
    mysqli_query($conn, "UPDATE pemesanan SET dp='$dp' WHERE id=$id");
  }

        // check bila file image mau di update
  if(file_exists($_FILES['lunas']['tmp_name'])){
    $lunas = date("YmdHis").$_FILES['lunas']['name'];
    $namaid_cardSementara = $_FILES['lunas']['tmp_name'];
    $terupload = move_uploaded_file($namaid_cardSementara, $dirUpload.$lunas);
    mysqli_query($conn, "UPDATE pemesanan SET lunas='$lunas' WHERE id=$id");
  }
  
  $tanggal_in = $_POST['tanggal_in'];
  $tanggal_out = $_POST['tanggal_out'];
  $status = $_POST['status'];

    // Insert user data into table
  $result = mysqli_query($conn, "UPDATE pemesanan SET username='$username',nama_paket='$nama_paket',nama_wisata1='$nama_wisata1',gambar_wisata1='$gambar_wisata1',nama_wisata2='$nama_wisata2',gambar_wisata2='$gambar_wisata2',nama_hotel='$nama_hotel',gambar_hotel='$gambar_hotel',nama_restoran='$nama_restoran',gambar_restoran='$gambar_restoran',nama_kendaraan='$nama_kendaraan',gambar_kendaraan='$gambar_kendaraan',keterangan='$keterangan',harga='$harga',tiket='$tiket',total='$total',dp='$dp',lunas='$lunas',tanggal_in='$tanggal_in',tanggal_out='$tanggal_out',status='$status' WHERE id=$id");

  ?>
  <script>
    alert('Success insert!');
    window.location.href = 'list.php';
  </script>
  <?php
}
?>