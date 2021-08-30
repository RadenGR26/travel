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
  <link rel="stylesheet" href="../../plugin/jquery-ui/jquery-ui.min.css" /> <!-- Load file css jquery-ui -->
 <!-- Load file jquery -->


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
                <a class="collapse-item active" href="../data-pemesanan/list.php">List Data</a>
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
              <h1 class="h3 mb-0 text-gray-800"><strong>LIST DATA PEMESANAN</strong></h1>
            </div>

            <form method="get" action="">
              <label>Filter Berdasarkan</label><br>
              <select name="filter" id="filter">
                <option value="">Pilih</option>
                <option value="1">Per Tanggal</option>
                <option value="2">Per Bulan</option>
                <option value="3">Per Tahun</option>
              </select>
              <br>
              <div id="form-tanggal">
                <label>Tanggal</label><br>
                <!-- <input type="date" name="tanggal" class="input-tanggal" id="date_input" /> -->
                 <select name="tanggal">
                  <?php
                  for($idx = 0; $idx < 31; $idx++){
                    ?>
                    <option value="<?php echo $idx+1; ?>"><?php echo $idx+1; ?></option>
                    <?php
                  }
                  ?>
                </select>
              </div>
              <div id="form-bulan">
                <label>Bulan</label><br>
                <select name="bulan" id="month_input">
                  <option value="">Pilih</option>
                  <option value="1">Januari</option>
                  <option value="2">Februari</option>
                  <option value="3">Maret</option>
                  <option value="4">April</option>
                  <option value="5">Mei</option>
                  <option value="6">Juni</option>
                  <option value="7">Juli</option>
                  <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
                <br>
              </div>
              <div id="form-tahun">
                <label>Tahun</label><br>
                <select name="tahun" id="year_input">
                  <option value="">Pilih</option>
              <?php
                $result = "SELECT YEAR(tanggal_dibuat) AS tahun FROM pemesanan GROUP BY YEAR(tanggal_dibuat)"; // Tampilkan tahun sesuai di tabel pemesanan
                $sql = mysqli_query($conn, $result); // Eksekusi/Jalankan query dari variabel $query
                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                  echo '<option value="'.$data['tahun'].'">'.$data['tahun'].'</option>';
                }
                ?>
              </select>
              <br>
            </div>
            <br>
            <button type="submit">Tampilkan</button>
            <a href="list.php">Reset Filter</a>
          </form>

          <?php
          // print_r($_GET);
          // return;
    if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
        $filter = $_GET['filter']; // Ambil data filder yang dipilih user
        if($filter == '1'){ // Jika filter nya 1 (per tanggal)
          // $tanggal_dibuat = date('d-m-y', strtotime($_GET['tanggal']));
          $tgl = $_GET['tanggal']."-".$_GET['bulan']."-".$_GET['tahun'];
          // $tanggal_dibuat = date('d-m-y', $_GET['tanggal']."-".$_GET['bulan']."-".$_GET['tahun']);
          // print_r($tgl);
          // return;
          echo '<b>Data pemesanan Tanggal '.$tgl.'</b><br /><br />';
          echo '<a href="print.php?filter=1&tanggal='.$_GET['tanggal'].'" class="btn btn-danger btn-sm"><i class="fas fa-print"> Cetak Laporan Data</i></a> <a href="../data-pemesanan/index.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data Pemesanan</a><br /><br />';
            $result = "SELECT * FROM pemesanan WHERE DATE(tanggal_dibuat) LIKE '%".$_GET['tanggal']."%'"; // Tampilkan data pemesanan sesuai tanggal yang diinput oleh user pada filter
        }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
          $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
          echo '<b>Data pemesanan Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';
         echo '<a href="print.php?filter=2&bulan='.$_GET['bulan'].'" class="btn btn-danger btn-sm"><i class="fas fa-print"> Cetak Laporan Data</i></a> <a href="../data-pemesanan/index.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data Pemesanan</a><br /><br />';
            $result = "SELECT * FROM pemesanan WHERE MONTH(tanggal_dibuat)='".$_GET['bulan']."' AND YEAR(tanggal_dibuat)='".$_GET['tahun']."'"; // Tampilkan data pemesanan sesuai bulan dan tahun yang diinput oleh user pada filter
        }else{ // Jika filter nya 3 (per tahun)
          echo '<b>Data pemesanan Tahun '.$_GET['tahun'].'</b><br /><br />';
           echo '<a href="print.php?filter=3&tahun='.$_GET['tahun'].'" class="btn btn-danger btn-sm"><i class="fas fa-print"> Cetak Laporan Data</i></a> <a href="../data-pemesanan/index.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data Pemesanan</a><br /><br />';
            $result = "SELECT * FROM pemesanan WHERE YEAR(tanggal_dibuat)='".$_GET['tahun']."'"; // Tampilkan data pemesanan sesuai tahun yang diinput oleh user pada filter
          }
    }else{ // Jika user tidak mengklik tombol tampilkan
      echo '<br />';
      echo '<a href="print.php" class="btn btn-danger btn-sm"><i class="fas fa-print"> Cetak Laporan Data</i></a> <a href="../data-pemesanan/index.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data Pemesanan</a>
      <br />';
        $result = "SELECT * FROM pemesanan ORDER BY tanggal_dibuat"; // Tampilkan semua data pemesanan diurutkan berdasarkan tanggal
      }
      ?>

      <br>
      
      <form action="list.php" method="get">
        <label>Cari Username :</label>
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
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Nama Paket</th>
                  <th>Nama Wisata 1</th>
                  <th>Gambar Wisata 1</th>
                  <th>Nama Wisata 2</th>
                  <th>Gambar Wisata 2</th>
                  <th>Nama Hotel</th>
                  <th>Gambar Hotel</th>
                  <th>Nama Restoran</th>
                  <th>Gambar Restoran</th>
                  <th>Nama Kendaraan</th>
                  <th>Gambar Kendaraan</th>
                  <th>Keterangan</th>
                  <th>Harga</th>
                  <th>Jumlah Tiket</th>
                  <th>Total Harga</th>
                  <th>Pembayaran DP</th>
                  <th>Pembayaran Pelunasan</th>
                  <th>Mulai Tanggal</th>
                  <th>Selesai Tanggal</th>
                  <th>Status</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               <?php
               include '../../koneksi.php';
               if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $result = mysqli_query($conn, "SELECT * from pemesanan WHERE username like '%".$cari."%'");       
              }else {
               $result = mysqli_query($conn, "SELECT * FROM pemesanan");
             }
             $no=1;
             while($row = mysqli_fetch_assoc($result)) {
              ?>
              <tr class="">
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['nama_paket'];?></td>
                <td><?php echo $row['nama_wisata1'];?></td>
                <td><a href="../../file_upload/<?php echo $row['gambar_wisata1'];?>"><img src="../../file_upload/<?php echo $row['gambar_wisata1'];?>" width="100px"></a></td>
                <td><?php echo $row['nama_wisata2'];?></td>
                <td><a href="../../file_upload/<?php echo $row['gambar_wisata2'];?>"><img src="../../file_upload/<?php echo $row['gambar_wisata2'];?>" width="100px"></a></td>
                <td><?php echo $row['nama_hotel'];?></td>
                <td><a href="../../file_upload/<?php echo $row['gambar_hotel'];?>"><img src="../../file_upload/<?php echo $row['gambar_hotel'];?>" width="100px"></a></td>
                <td><?php echo $row['nama_restoran'];?></td>
                <td><a href="../../file_upload/<?php echo $row['gambar_restoran'];?>"><img src="../../file_upload/<?php echo $row['gambar_restoran'];?>" width="100px"></a></td>
                <td><?php echo $row['nama_kendaraan'];?></td>
                <td><a href="../../file_upload/<?php echo $row['gambar_kendaraan'];?>"><img src="../../file_upload/<?php echo $row['gambar_kendaraan'];?>" width="100px"></a></td>
                <td><?php echo $row['keterangan'];?></td>
                <td><?php echo $row['harga'];?></td>
                <td><?php echo $row['tiket'];?></td>
                <td><?php echo $row['total'];?></td>
                <td><a href="../../file_upload/<?php echo $row['dp'];?>"><img src="../../file_upload/<?php echo $row['dp'];?>" width="100px"></a></td>
                <td><a href="../../file_upload/<?php echo $row['lunas'];?>"><img src="../../file_upload/<?php echo $row['lunas'];?>" width="100px"></a></td>
                <td><?php echo $row['tanggal_in'];?></td>
                <td><?php echo $row['tanggal_out'];?></td>
                <td><?php echo $row['status'];?></td>
                <td><?php echo $row['tanggal_dibuat'];?></td>
                <td>
                <?php

                  $status = $row['status'];

                  if ($status == "Transaksi Berhasil") {
                    echo "
                    <a href='cetak.php?id=$row[id]' target='_blank' class='btn btn-primary btn-sm'>Cetak Invoice</a>
                    <br><br>
                    <a href='edit.php?id=$row[id]' class='btn btn-success btn-sm'>Edit Pesanan</a>
                    ";
                  } elseif ($status == "Pesanan Di Proses") {
                    echo "
                    <a href='edit.php?id=$row[id]' class='btn btn-success btn-sm'>Edit Pesanan</a>
                    ";
                  } elseif ($status == "Belum Melakukan Pembayaran") {
                    echo "<a href='delete.php?id=$row[id]' class='btn btn-danger btn-sm'>Hapus Pesanan</a>
                    <br><br>
                    <a href='edit.php?id=$row[id]' class='btn btn-success btn-sm'>Edit Pesanan</i>
                    </a>";
                  } elseif ($status == "Mengajukan Pemesanan") {
                    echo "<a href='delete.php?id=$row[id]' class='btn btn-danger btn-sm'>Hapus Pesanan</a>
                    <br><br>
                    <a href='edit.php?id=$row[id]' class='btn btn-success btn-sm'>Edit Pesanan</i>
                    </a>";
                  } 
                  ?>
                  <!--         <a href='index.php?id=<?php echo $row['id'];?>' class='btn btn-primary btn-sm'><i class='fas fa-eye'></i> Detail</a> -->
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
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

  <script src="../../js/jquery.min.js"></script>
  <!-- <script src="../vendor/jquery/jquery.min.js"></script> -->
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
  // console.log('asdasas')
    $(document).ready(function(){ // Ketika halaman selesai di load
      $('#form-tanggal').hide();
      $('#form-bulan').hide();
      $('#form-tahun').hide();

        $('#filter').on('change', function(e){
          let _this = this;
          // console.log(e.target.value)
          if(e.target.value === '1'){
            $('#form-tanggal').show();
            $('#form-bulan').hide();
            $('#form-tahun').hide();
          }else if(e.target.value === '2'){
            $('#form-bulan').show();
            $('#form-tanggal').hide();
            $('#form-tahun').hide();
          }else{
            $('#form-tahun').show();
            $('#form-tanggal').hide();
            $('#form-bulan').hide();
          }
          // console.log(_this)
        })
      })
    </script>
    <script src="plugin/jquery-ui/jquery-ui.min.js"></script>

    <!-- Bootstrap core JavaScript-->

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