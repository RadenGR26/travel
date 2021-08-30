<?php
require('koneksi.php');
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
    $username = mysqli_real_escape_string($conn,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn,$password);
    //Checking is user existing in the database or not
    $query = mysqli_query($conn, "SELECT * FROM akun WHERE username='$username' and password='".($password)."'");
    $result = mysqli_num_rows($query);
    
    if($result>0){
        $data = mysqli_fetch_assoc($query);
        if ($data ['idakun'] == "user") {

            session_start();

            $_SESSION['id'] = $data['id'];
            $_SESSION['username']= $username;
            $_SESSION['idakun'] = "users";

            header("Location:user/dashboard");

        }elseif ($data['idakun'] == "pegawai") {
            session_start();

            $_SESSION['username'] = $username;
            $_SESSION['idakun'] = "pegawai";
            
            $_SESSION['username'];

            header("Location:pegawai/dashboard");
        }elseif ($data['idakun'] == "admin") {
            session_start();

            $_SESSION['username'] = $username;
            $_SESSION['idakun'] = "admin";
            
            $_SESSION['username'];

            header("Location:admin/dashboard");
        }
    }  

    else{
        echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>";
    }
      // }else{
    ?>
    <!-- <div class="form"> -->
        <!-- <h1>REGISTER</h1> -->
        <!-- <form name ="register" action="" method="POST"> -->
            <!-- <input type="text" name="username" placeholder="username" required /> -->
            <!-- <input type="email" name="email" placeholder="email" required /> -->
            <!-- <input type="password" name="password" placeholder="password" required /> -->
            <!-- <input type="submit" name="submit" value="Login" /> -->
            <!-- </form> -->
            <!-- </div> -->

            <?php } ?>