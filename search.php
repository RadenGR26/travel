<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrasi Travel Usik Rent Car</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/img.png"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
</head>
<body>

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="images/img.png" alt="IMG">
        </div>
        <form class="login100-form validate-form" action="reset.php" method="get" enctype="multipart/form-data">
          <span class="login100-form-title">
            Selamat Datang <br> Travel Usik Rent Car <br><p>Reset Password ...<p><br>
            </span>
            <?php 
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];

              echo "<b>Hasil pencarian : ".$cari."</b>";
            }
            ?>
            <?php
            include 'koneksi.php';
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              $result = mysqli_query($conn, "SELECT * from akun WHERE nik like '%".$cari."%'");       
            }else {
              $result = mysqli_query($conn, "SELECT * FROM akun");
            }
            $no=1;
            while($row = mysqli_fetch_assoc($result)) {
              ?>
              <div class="wrap-input100 validate-input">
                <input class="input100" type="text" name="nik" value="<?php echo $row['nik'];?>" readonly>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-address-card" aria-hidden="true"></i>
                </span>
              </div>
              <div class="wrap-input100 validate-input">
                <input class="input100" type="text" name="username" value="<?php echo $row['username'];?>" readonly>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </span>
              </div>
              <div class="container-login100-form-btn">
                <a href="edit_password.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">
                  Reset Password
                </a>
              </div>
            </form>
          <?php } ?>
          <div class="text-center p-t-12">
           <span class="txt1">
            Sudah Punya Akun ?
          </span>
          <a class="txt2" href="login.php">
            Silahkan Login
          </a><br>
          <span class="txt1">
            Belum Punya Akun ?
          </span>
          <a class="txt2" href="register.php">
            Registrasi Akun
          </a><br>
          <a class="txt2" href="home.php">
            Kembali Ke Home
          </a>
          </div>
        </div>
      </div>
    </div>




    <!--===============================================================================================-->  
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/tilt/tilt.jquery.min.js"></script>
    <script >
      $('.js-tilt').tilt({
        scale: 1.1
      })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

  </body>
  </html>