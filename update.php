<?php
session_start();
require "conn.php";
$id =$_GET['id'];
$section =$_GET['section'];
?>

<!DOCTYPE html>
<html lang="en">
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
                    <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">List Novel</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="light_novel.php">Light Novel</a></li>
                      <li><a class="dropdown-item" href="web_novel.php">Web Novel</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="create.php">Tambah Novel</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
    </header>

    <main class="flex-shrink-0 m-auto w-100" style="max-width: 550px; padding: 15px;">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-check">
            <h1 class="h3 mb-3 fw-normal text-center">Update Novel</h1>
            
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" required="" placeholder="Judul Novel" name="judul">
              <label for="floatingInput">Judul Novel</label>
            </div>
            <!-- <select class="form-select" aria-label="select example" required="" name="tipe">
              <option selected>Pilih Tipe Novel</option>
              <option value="light_novel">Light Novel</option>
              <option value="web_novel">Web Novel</option>
            </select> -->
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" required="" placeholder="Author Novel" name="author">
              <label for="floatingInput">Author Novel</label>
            </div>
            <!-- <div class="form-floating">
              <input type="date" class="form-control" id="floatingInput" required="" placeholder="Tanggal rilis" name="tanggal" value="">
              <label for="floatingInput">Tanggal Rilis</label>
            </div> -->
            <div class="form-floating">
              <input type="number" class="form-control" id="floatingInput" placeholder="Jumlah Volume" name="volume">
              <label for="floatingInput">Jumlah Volume</label>
            </div>
            <div class="form-floating">
              <input type="number" class="form-control" id="floatingInput" placeholder="Chapter Novel" name="chapter">
              <label for="floatingInput">Jumlah Chapter</label>
            </div>
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" required="" placeholder="Nama File" name="file">
              <label for="floatingInput">Nama File</label>
            </div>
            <div class="form-floating">
              <input type="file" class="form-control" id="floatingInput" placeholder="Cover Novel" name="cover">
              <label for="floatingInput">Novel Cover</label>
            </div>
            <div class="form-floating">
              <textarea class="form-control" id="floatingInput" required="Tulis Deskripsi Novel Disini..." placeholder="Deskripsi Novel" name="deskripsi"></textarea>
              <label for="floatingInput">Deskripsi</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" value="add" name="submit">Submit</button>
          </div>
          <?php
          if (isset($_POST['submit'])) {
            $judul = $_POST['judul'];
            $author = $_POST['author'];
            $volume = $_POST['volume'];
            $chapter = $_POST['chapter'];
            $nama = $_POST['file'];
            $cover = $_FILES['cover']['name'];
            $temp = $_FILES['cover']['tmp_name'];
            $x = explode('.', $cover);
            $ext = strtolower(end($x));
            $new_img = "$nama.$ext";
            $deskripsi = $_POST['deskripsi'];
            echo var_dump($section);
            if(move_uploaded_file($temp, $section.'/'.$new_img)){
              $query = mysqli_query($conn, "UPDATE $section
              SET judul='$judul', author='$author', jml_volume=$volume, jml_chapter=$chapter, cover='$new_img', deskripsi='$deskripsi'
              WHERE id=$id");
              if($query){
                echo "<script>alert('Novel Berhasil Di Update')
                document.location.href = 'admin.php';
                </script>";
              }else{
                echo error_log($query);
              }
            }else{
              echo "<script>alert('Terdapat Kesalahan Update Novel')
              </script>";
            }
          }
          ?>
        </form>
        </main>
        
    <footer class="footer mt-auto py-3 bg-dark">
      <div class="container">
        <span class="text-muted">@Copyright 2022 - Rizky Hardian</span>
      </div>
    </footer>
  <script src="bootstrap.bundle.min.js"></script>
  </body>
</html>