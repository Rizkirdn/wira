<?php
    require 'functions.php';
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
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#"
            ><img
              src="./image/logo/Bbx-vG4D_400x400-removebg-preview.png"
              width="75px"
              alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Beranda</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Jurusan</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Struktur organisasi</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Galery Poto</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Kontak kami</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- navbar end -->
    <!-- carousel start -->
    <section class="hero" id="hero">
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-background">
              <img
                src="./image/slider/WhatsApp Image 2023-07-18 at 14.58.58.jpg"
                alt=""
              />
              <div class="carousel-container">
                <div class="carousel-content-container">
                  <h2>Selamat Datang Di Website SMK Wiraswasta Cimahi</h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cumque consequuntur sunt tempora iusto vel a dolor modi?
                    Perferendis saepe provident minima expedita. Temporibus
                    reiciendis, debitis reprehenderit cum ipsam magnam velit!
                  </p>
                  <div class="buttons">
                    <a href="" class="button1">Tentang</a>
                    <a href="" class="button1">Kontak kami</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-background">
              <img src="./image/slider/lapang.jpg" alt="" />
              <div class="carousel-container">
                <div class="carousel-content-container">
                  <h2>Self Preform Expertise</h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cumque consequuntur sunt tempora iusto vel a dolor modi?
                    Perferendis saepe provident minima expedita. Temporibus
                    reiciendis, debitis reprehenderit cum ipsam magnam velit!
                  </p>
                  <div class="buttons">
                    <a href="" class="button1">Lihat Jurusan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
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
                <i class="bi bi-wrench"></i>
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

    <section class="galeri mt-5 mb-5">
      <div class="container">
        <div class="row">
          <h2 class="text-center">Galeri</h2>
        </div>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./image/galeri/2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="./image/galeri/galeri wira_waifu2x_art_noise2.png"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="./image/galeri/3.jpeg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img src="./image/galeri/4.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="./image/galeri/5.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="./image/galeri/6_copy2_waifu2x_photo_noise3.png"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="./image/galeri/6_copy_waifu2x_photo_noise3.png"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="./image/galeri/8.jpeg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="./image/galeri/9.jpeg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img src="" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- end -->

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Terhubung dengan kami di jejaring sosial:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="https://www.facebook.com/smkwiraswasta" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          </a>
          <a href="https://www.instagram.com/smkwiraswasta/" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                SMK Wiraswasta Cimahi
              </h6>
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4"></h6>
              <p>
                <a href="#!" class="text-reset"><i class="fab fa-whatsapp"></i>Whatsapp</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                smkwiraswasta@gmail.com
              </p>
              <p><i class="fas fa-phone me-3"></i> 0226629336</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div
        class="text-center p-4"
        style="background-color: rgba(0, 0, 0, 0.05)"
      >
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/"
          >SMK Wiraswasta Cimahi All Right Reserved.</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
