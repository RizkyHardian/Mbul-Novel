<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require "conn.php";

if(isset($_GET['cari'])){
    $keyword = $_GET['search'];
    $section =$_GET['section'];
    $type =$_GET['novel'];
    $result = mysqli_query($conn, "SELECT * FROM $section WHERE judul LIKE '%$keyword%'");
}else{
     $result = mysqli_query($conn, "SELECT * FROM $section");
 }
$novel = [];
while($row = mysqli_fetch_assoc($result)){
    $novel[] = $row;
 }
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
                  <form class="d-flex" role="search" action="search.php?section=<?php echo $section;?>" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Cari Novel" aria-label="Cari Novel" name="search" autocomplete="off">
                    <input type="hidden" name="section" value="<?php echo $section?>">
                    <input type="hidden" name="novel" value="<?php echo $type?>">
                    <button class="btn btn-outline-secondary" type="submit" name="cari">Cari</button>
                  </form>
                </ul>
              </div>
            </div>
          </nav>
        </div>
    </header>

    <main class="flex-shrink-0 m-auto w-100">
    <h1 class="h2 mt-3 mb-4 fw-normal text-center">List <?php echo $type?> Novel</h1>
        <table class="table">
            <tr class="table-dark">
                <th>No</th>
                <th>Judul</th>
                <th>Author</th>
                <th>Jumlah Volume</th>
                <th>Jumlah Chapter</th>
                <th>Cover</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; foreach($novel as $nvl):?>
            <tr class="table-striped border-dark">
                <td><?php echo $i;?></td>
                <td><?php echo $nvl["judul"];?></td>
                <td><?php echo $nvl["author"];?></td>
                <td><?php echo $nvl["jml_volume"];?></td>
                <td><?php echo $nvl["jml_chapter"];?></td>
                <td><img src="<?php echo $section;?>/<?=$nvl['cover']?>" width="55" height="80"><br><?php echo $nvl["cover"];?></td>
                <td><?php echo $nvl["deskripsi"];?></td>
                <td><a href="update.php?id=<?php echo $nvl['id'];?>&section=<?php echo $section;?>">Edit</a> | 
                <a href="pop.php?id=<?php echo $nvl['id'];?>&section=<?php echo $section;?>" onclick = "return confirm('And yakin ingin menghapus novel ini ?')">Hapus</a></td>
            </tr>
            <?php $i++; endforeach;?>
        </table>
    </main>
        
    <footer class="footer mt-auto py-3 bg-dark">
      <div class="container">
        <span class="text-muted">@Copyright 2022 - Rizky Hardian</span>
      </div>
    </footer>
  <script src="bootstrap.bundle.min.js"></script>
  </body>
</html>