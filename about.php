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
        <div class="sticky-top">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" aria-label="Tenth navbar example">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="login.php">Sign In</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="register.php">Sign Up</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
    </header>

    <main class="flex-shrink-0">
    <h1 class="h2 mt-3 mb-4 fw-normal text-center">About Us</h1>
    <div class="container-sm align-items-center">
        <div>
          <img src="img/me.jpg" alt="Foto Saya" class="img">
        </div>
        <div>
          <div class="border-dark mb-5 mt-3">
            <h3>Hi, Saya Rizky Hardian Nor dengan NIM 2109106059. Saya dari program studi informatika angkatan 2021 di fakultas teknik universitas Mulawarman. Terkadang saya hobi untuk mengerjakan berbagai hal-hal yang pada akhirnya tidak saya kerjakan. Sekian biodata singkat dari saya, Semoga yang membaca ini saya doakan keluarga saya selalu diberi keberkahan dan kesehatan amin...</h3>
          </div>
        </div>
    </div>
    </main>

    <footer class="footer mt-auto py-3 bg-dark">
      <div class="container">
        <span class="text-muted">@Copyright 2022 - Rizky Hardian</span>
      </div>
    </footer>
  <script src="bootstrap.bundle.min.js"></script>
  </body>
</html>