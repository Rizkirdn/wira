<?php
    require 'functions.php';
    require 'lib.function.php';
    $data1 = query("SELECT * FROM jurusan");
    $data2 = query("SELECT * FROM tentang");
    $data3 = query("SELECT * FROM staf");
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!--Bootstrap Icons-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css"
    />
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
      crossorigin="anonymous"
    ></script>

    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css" />
    <title>SMK Wirswasta Cimahi</title>
  </head>

  <body>
    <!-- navbar start -->
    <?= tpl_nav(); ?>
    <!-- navbar end -->
    <!-- carousel start -->
   <?= tpl_content(); ?>
    <!-- carousel end -->

    <!-- feature info start -->
    <section class="feature mt-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="judul text-center">
            <h1>Program Keahlian</h1>
          </div>
          <?php foreach($data1 as $jur): ?>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="main-feature-box">
              <div class="icon">
              <i class="bi bi-gear-wide-connected"></i>
              </div>
              <h3><?= $jur["nama_jurusan"]; ?></h3>
              <p>
                  <?= $jur["keterangan"]; ?>
              </p>
              <div class="buttons">
                <a href="" class="button3"
                  >Lebih Lanjut <i class="bi bi-arrow-right-circle-fill"></i
                ></a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- feature info end -->

    <!-- about start -->
    <section class="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 d-none d-lg-flex">
            <img src="./image/about/about.jpg" alt="" class="img-fluid" />
          </div>
          <?php foreach($data2 as $about): ?>
          <div class="col-md-6">
            <div class="about-content">
              <span>Tentang</span>
              <h2><?= $about["sekola"]; ?></h2>
              <p>
                <?= $about["about"]; ?>
              </p>
              <div class="buttons">
                <a href="" class="button3"
                  >Lebih Lanjut <i class="bi bi-arrow-right-circle-fill"></i
                ></a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- about end -->

    <!-- staff/guru  -->
    <section class="guru mt-5 mb-5">
      <div class="container">
        <h2 class="text-center">Struktur organisasi</h2>
      </div>
      <div class="row mt-5">
      <?php foreach($data3 as $staf): ?>
        <div class="col-lg-4">
          <div class="single-guru-box border">
            <div class="icon">
              <img
                src="./image/courses/civil.png"
                class="img-fluid"
                width="110px"
                alt=""
              />
            </div>
            <h3><?= $staf["nama"]; ?></h3>
            <p><?= $staf["jabatan"]; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- staff/guru -->

    <!-- galeri-poto -->

    <?= tpl_galeri(); ?>
    <!-- end -->

    <!-- Footer -->
    <?= tpl_footer(); ?>
    <!-- Footer -->
    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
