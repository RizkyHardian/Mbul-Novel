<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    require "conn.php";
    if($_SESSION["priv"] == 'user'){
        header("Location: user.php");
    }
    elseif ($_SESSION["priv"] != 'admin'){
        header('Location: login.php');
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
                </ul>
              </div>
            </div>
          </nav>
        </div>
    </header>

    <main class="flex-shrink-0">
      <div class="container text-center">
        <h1 class="mt-5 mb-5">Update Novel Mbul</h1>
        <div class="row align-items-start">
          <div class="col">
            <img src="img/Gimai-Seikatsu-vol-6.jpeg" class="img">
            <h2>Gimai Seikatsu</h2>
            <p>Dari teman sekelas hingga kakak dan adik, tinggal di bawah satu atap. Setelah ayahnya menikah kembali, Asamura Yuuta akhirnya mendapatkan saudara tiri baru, kebetulan cantik nomor satu tahun ajaran, Ayase Saki. Setelah mempelajari nilai-nilai penting dalam hubungan pria-wanita melalui orang tua mereka sebelumnya, mereka berjanji satu sama lain untuk tidak terlalu dekat, tidak terlalu menentang, dan hanya menjaga jarak yang samar dan nyaman. Di satu sisi, Saki, yang telah bekerja sendirian demi keluarganya, tidak tahu bagaimana mengandalkan orang lain dengan benar, sedangkan Yuta tidak yakin bagaimana memperlakukannya dengan benar. Berdiri di tanah yang cukup setara, keduanya perlahan mempelajari sensasi nyaman hidup bersama. Hubungan mereka perlahan berkembang dari menjadi orang asing semakin hari berlalu. Akhirnya, ini bisa berakhir dengan cerita tentang cinta untuk semua yang kita tahu.</p>
          </div>
          <div class="col">
            <img src="img/re-zero-starting-life-in-another-world-vol-19-light-novel.jpeg" class="img">
            <h2>Re:ZERO - Starting Life In Another World</h2>
            <p>Tiba-tiba seorang siswa SMA Subaru Natsuki dipanggil ke dunia lain dalam perjalanan kembali dari toko serba ada. Dengan krisis terbesar dalam hidupnya dipanggil ke dunia lain dan tidak ada tanda-tanda orang yang memanggilnya, keadaan menjadi lebih buruk ketika dia diserang. Tapi ketika dia diselamatkan oleh gadis misterius berambut perak dengan kucing peri, Subaru bekerja sama dengan gadis itu untuk membalas budi. Ketika mereka akhirnya berhasil mendapatkan petunjuk, Subaru dan gadis itu diserang dan dibunuh oleh seseorang. Subaru kemudian terbangun di tempat dia dipanggil dan menyadari kemampuan yang dia peroleh "Returns by Death" seorang bocah tak berdaya yang hanya memiliki kemampuan untuk memundurkan waktu dengan sekarat. Dan di luar keputusasaan dia bisa menyelamatkan gadis itu dari nasib kematian!</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col">
            <img src="img/yashiro-kun-s-guide-to-going-solo.jpeg" class="img">
            <h2>Yashiro Kun's Guide To Going Solo</h2>
            <p>Shigeaki Yashiro bangga menjadi penyendiri, melakukan hal sendiri tanpa terlibat dengan orang lain. Dari belajar sendirian di ruang karaoke hingga bersantai sendiri di sumber air panas terbuka, Yashiro ahli dalam menemukan keuntungan melakukan sesuatu sendirian. Tapi keberadaannya yang menyendiri mulai terurai ketika Kanon Hanamizawa, salah satu gadis populer di sekolah, memintanya untuk mengajarinya caranya. Dia tahu betapa melelahkannya mengikuti semua tren terbaru, terutama karena dia takut membicarakan hobinya yang tidak keren. Yashiro menjadi guru enggan Hanamizawa, tetapi segera menemukan dirinya terjerat dalam kejenakaan teman-teman populer muridnya.</p>
          </div>
          <div class="col">
            <img src="img/sword-art-online-25-light-novel.jpeg" class="img">
            <h2>Sword Art Online</h2>
            <p>Pada tahun 2022, para gamer bersukacita karena Sword Art Online – sebuah VRMMORPG (Virtual Reality Massively Multiplayer Online Role Playing Game) yang tidak ada duanya – debut, memungkinkan pemain untuk memanfaatkan sepenuhnya teknologi permainan terbaik: NerveGear, sebuah sistem yang memungkinkan pengguna untuk benar-benar membenamkan diri dalam pengalaman bermain game yang sepenuhnya realistis. Namun saat game ditayangkan, kegembiraan para pemain dengan cepat berubah menjadi horor saat mereka menemukan bahwa, untuk semua fiturnya yang luar biasa, SAO kehilangan salah satu fungsi paling dasar dari MMORPG manapun – tombol log-out. Sekarang terjebak di dunia virtual Aincrad, tubuh mereka ditawan oleh NerveGear di dunia nyata, pengguna diberi ultimatum mengerikan: taklukkan semua seratus lantai Aincrad untuk mendapatkan kembali kebebasan Anda. Tapi di dunia SAO yang menyesatkan, “game over” berarti kematian - baik virtual maupun nyata…</p>
          </div>
        </div>
        <div class="row align-items-end">
          <div class="col">
            <img src="img/re-re-reincarnator-executioner-volume-1.jpeg" class="img">
            <h2>Re:Re - Reincarnator Executioner</h2>
            <p>Dill Steel-Link selalu memainkan pahlawan di atas panggung, tetapi dia tidak pernah ingin menjadi pahlawan. Seorang veteran Perang Suci yang dilancarkan antara Kekaisaran Terean dan para Titan, dia mendapati dirinya terlempar ke dalam konflik yang bahkan lebih sengit. Reinkarnator dunia lain, yang menggunakan Keterampilan supernatural, memiliki tubuh orang mati dan membawa pembantaian ke tanah Redguard.</p>
          </div>
          <div class="col">
            <img src="img/dungeon-dive-aim-for-the-deepest-level-volume-1.jpeg" class="img">
            <h2>DUNGEON DIVE: Aim For Deepest Level</h2>
            <p>Seorang anak laki-laki dengan kualitas luar biasa Status, menaklukkan labirin di dunia yang berbeda.Saya pasti akan membantu Anda, Oleh karena itu, saya akanー !!」Kanami Aikawa terbangun di koridor tanpa mengetahui apa-apa. Dia bertemu dengan seorang gadis bernama Lastiara yang membantunya mengobati luka-lukanya. Kanami Aikawa mendapatkan lukanya dari pertempuran dengan monster, di tempat seperti -game bertema dunia yang berbeda.</p>
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