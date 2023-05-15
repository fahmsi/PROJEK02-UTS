<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MOTOBRADS MOTOSHOWROOM - PRODUCT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../fontawesome/css/all.min.css">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="../index.php">MOTOBRADS</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="produk.php">product</a></li>
          <li><a class="nav-link scrollto" href="../backend/index.php">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index.php">Home</a></li>
          <li>Product</li>
        </ol>
        <h2>Product Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <?php 
        require_once '../database/dbkoneksi.php';
        ?>
        <?php 
        $sql = "SELECT * FROM motor";
        $rs = $dbh->query($sql);

        foreach ($rs as $row){
        ?>
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="img/cbr.jpeg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/nmax.jpeg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/ducati 2.jpeg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/ducati.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/multistrada.jpeg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/kawasaki.jpeg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/bmw.jpeg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?= $row ['nama_motor']?></h3>
              <ul>
                <li><strong>Category</strong>: <?= $row ['tipe_motor_id']?></li>
                <li><strong>Engine</strong>: <?= $row ['cc']?>cc</li>
                <li><strong>Merk</strong>: <?= $row ['merk_id']?></li>
                <li><strong>Price</strong>: Rp. <?= $row ['harga']?></li>
              </ul>
              <button type="button" class="btn btn-warning m-2"><a href="form.php">BUY NOW !</a></button>
            </div>
          </div>
        <?php
        }
        ?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MOTOBRADS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <p class="m-0 small">Made with <i class="fa-solid fa-heart"></i> and <i class="fa-solid fa-mug-hot"></i> 
        by <a href="https://www.linkedin.com/in/fahmi-muhammad-al-hafizh-297097259/" style="text-decoration: none;">FamSi</a></p>      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>