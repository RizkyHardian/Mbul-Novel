<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
require "conn.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png">
    <title>Mbul Baca Novel</title>
</head>
<body>
    <header>
        <div>
            <img src="img/logo.png" alt="logo" id="logo" class="mx-auto mt-5">
            <p class="text-center">Tempatnya Baca Light Novel dan Web Novel</p>
        </div>
    </header>
    <main class="form-signin w-100 m-auto">
      <form actiom="" method="POST">
          <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
      
          <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="Usename" required="" name="username">
              <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required="">
            <label for="floatingInput">Email Address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required="" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Konfirmasi Password" required="" name="cpassword">
            <label for="floatingPassword">Konfirmasi Password</label>
          </div>
          

          <?php
                if (isset($_POST['submit'])) {
                    $user = $_POST['username'];
                    $pass = $_POST['password'];
                    $cpass = $_POST['cpassword'];
                    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$user'");
                    if ($pass !== $cpass) {
                      echo("<p>Konfirmasi Password Salah!</p>");
                    } elseif (mysqli_fetch_assoc($result)){
                      echo("<p>Username Telah Digunakan!!</p>");
                    } else {
                      $pass = password_hash($pass, PASSWORD_DEFAULT);
                      $query = mysqli_query($conn, "INSERT INTO `user` VALUES (NULL,'$user','$pass','user')");
                      if (mysqli_affected_rows($conn) > 0) {
                        $_SESSION["priv"] = 'user';
                        echo 
                        "<script>
                            alert('Sign Up Success!')
                            document.location.href = 'user.php';
                        </script>";
                    }
                    }
                }
            ?>
            <div class="checkbox mb-3">
            <label><input type="checkbox" value="remember-me"> Remember me</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign Up</button>
            <p class="mt-5 mb-3 text-muted">&copy; Rizky Hardian</p>
      </form>
  </main>
  <script src="bootstrap.bundle.min.js"></script>
  </body>
</html>