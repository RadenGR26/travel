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
            Selamat Datang <br> Travel Usik Rent Car <br><p>Registrasi Akun ...<p><br>
            </span>

            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="nama" placeholder="Nama" required="nama">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input">
              <input class="input100" type="number" name="nik" placeholder="Nomor Induk Kependudukan" required="nik">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-address-card" aria-hidden="true"></i>
              </span>
            </div>


            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="username" placeholder="Username" required="username">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input">
              <input class="input100" type="password" name="password" placeholder="Password" required="password">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div class="form-group">
              <p style="color: black; text-align: right;">Upload Foto KTP</p>
              <input type="file" class="form-control" id="ktp" placeholder="Enter Foto KTP" name="ktp" required="ktp" >
              <p style="color: red;">Ekstensi yang diperbolehkan .png | .jpg | .jpeg Size Max 2 MB</p>
            </div>
            <div class="container-login100-form-btn">
              <button class="login100-form-btn" type="submit" name="insert">
                Registrasi
              </button>
            </div>
              <span class="txt1">
                Sudah Punya Akun ?
              </span>
              <a class="txt2" href="login.php">
                Silahkan Login
              </a><br>
              <span class="txt1">
                Lupa Password ?
              </span>
              <a class="txt2" href="reset.php">
                Ganti Password
              </a><br>
              <a class="txt2" href="home.php">
                Kembali Ke Home
              </a>
            </div>
          </form>
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
  include 'koneksi.php';
  if(isset($_POST['insert'])){
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ambil data file
    $ktp = date("YmdHis").$_FILES['ktp']['name'];
    $namaSementara = $_FILES['ktp']['tmp_name'];

    // tentukan lokasi ktp akan dipindahkan
    $dirUpload = "file_upload/";

    // pindahkan ktp
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$ktp);


    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO akun(nama,nik,username,password,ktp) VALUES('$nama','$nik','$username','$password','".$ktp."')");

    ?>
    <script>
      alert('Success insert!');
      window.location.href = 'login.php';
    </script>

    <?php
  }
  ?>