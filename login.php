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
      <form action="" method="POST">
        <h1 class="h3 mb-3 fw-normal">Sign In</h1>
      
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Username" required="" name="username">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required="" name="password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; Rizky Hardian</p>
          <?php
            if (isset($_POST['login'])) {
              $user = $_POST['username'];
              $pass = $_POST['password'];
              $sql = mysqli_query($conn, "SELECT id, username, pass, priv FROM user WHERE username = '$user'");
              list($id, $username, $passw, $priv) = mysqli_fetch_array($sql);
              if (mysqli_num_rows($sql) > 0){
                if (password_verify($pass, $passw)){
                  $_SESSION["username"] = $username;
                  $_SESSION["priv"] = $priv;
                  header("Location: admin.php");
                }
                else {
                    echo "<script type='text/JavaScript'>
                    alert('Username dan Password anda salah!!');
                  </script>";
                }
                // $_SESSION["username"] = $username;
                // $_SESSION["priv"] = $priv;
                // echo "<script type='text/JavaScript'>
                //   alert('Username dan Password anda benar!!');
                // </script>";
                // header("Location: admin.php");
                // die();
              }
              else {
                  echo "<script type='text/JavaScript'>
                  alert('Username dan Password anda salah!!');
                </script>";
              }
            }
            elseif (isset($_SESSION['username'])){
                header("Location: .");
            }
          ?> 
        </form>
  </main>
  <script src="bootstrap.bundle.min.js"></script>
  </body>
</html>