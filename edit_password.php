<?php
session_start();
include 'koneksi.php';


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
        <form class="login100-form validate-form" action="" method="post" enctype="multipart/form-data">
          <span class="login100-form-title">
            Selamat Datang <br> Travel Usik Rent Car <br><p>Update Password ...<p><br>
            </span>
            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="nik" value="<?php echo $nik ?>" readonly>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-address-card" aria-hidden="true"></i>
              </span>
            </div>
            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="username" value="<?php echo $username ?>" readonly>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              </span>
            </div>
            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="password" value="<?php echo $password ?>">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>
            <div class="container-login100-form-btn">
            <button type="submit" name="update" class="btn btn-success">Update Password</button>
            </div>
          </form>
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

<?php

if(isset($_POST['update']))
{   
  $nik = $_POST['nik'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  mysqli_query($conn, "UPDATE akun SET nik='$nik',username='$username',password='$password' WHERE id=$id");


  ?>
  <script>
    alert('Success to update!');
    window.location.href = 'login.php';
  </script>
  
  <?php
}
?>