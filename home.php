<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Travel Usik Rent Car</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="images/img.png"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v3.0.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Travel Usik Rent Car</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#why-us">Paket</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="login.php" class="get-started-btn scrollto">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Ayo Nikmati Perjalanan Liburan Anda Bersama Kami !</h1>
          <h2>Liburan Menarik Bersama Kami di tempat Wisata Kabupaten Karawang ...</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="images/img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>TENTANG KAMI</h2>
        </div>

        <div class="row content">
          <?php
          include 'koneksi.php';
          $no=0;
          $result = mysqli_query($conn, "SELECT * FROM profil ORDER BY id ASC");
          while($row = mysqli_fetch_assoc($result)) {
            $no++
            ?>
            <div class="col-lg-6">
              <td><a href="file_upload/<?php echo $row['gambar'];?>"><img src="file_upload/<?php echo $row['gambar'];?>" width="300px"></a></td>
           </div>
           <div class="col-lg-6 pt-4 pt-lg-0">
            <h1><?php echo $row['judul'];?></h1>
            <td><?php echo $row['keterangan'];?></td>
          </div>
        <?php } ?>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">
      <div class="section-title">
        <h2>PAKET</h2>
      </div>
        <form action="home.php" method="get">
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
              include 'koneksi.php';
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
                    <img class="card-img-top" src="file_upload/<?php echo $row['gambar_wisata1'];?>" width="200" height="200">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $row['nama_paket'];?></h4>
                    <p class="card-text"><?php echo $row['keterangan'];?></p>
                     <p class="card-text">Rp. <?php echo $row['harga'];?> ,-</p>
                  </div>
                  <div class="card-footer">
                    <a href="login.php" class="btn btn-primary btn-sm">LIHAT DETAIL</a>
                    <a href="login.php" class="btn btn-success btn-sm">PESAN PAKET</a>
                  </div>
                </div>
              </div>
            <?php } ?>
            </div>


    </div>
  </section><!-- End Why Us Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
      </div>

      <div class="row">

        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Jl. Citra Kebun MAS, Blok M2 No. 32, Bengle, Kec. Majalaya, Kabupaten Karawang, Jawa Barat 41371</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>0821-2572-0589</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4915088658454!2d107.3469439143113!3d-6.330304163701222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6976fad21d3567%3A0xb73ace6637895bbb!2sJl.%20Perum%20Citra%20Kebun%20Mas%2C%20Kabupaten%20Karawang%2C%20Jawa%20Barat%2041371!5e0!3m2!1sid!2sid!4v1608410302826!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright <strong><span>Travel Usik Rent Car</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>