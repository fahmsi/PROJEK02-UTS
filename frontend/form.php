<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MOTOBRADS MOTOSHOWROOM - FORM BUYING</title>
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
          <li><a href="produk.php">Product</a></li>
          <li>Form Buying</li>
        </ol>
        <h3 class="text-secondary"> Form Product Buying </h3>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
                <?php 
                require_once '../database/dbkoneksi.php';
                ?>
                <form method="POST" action="../backend/progress/process/proses.php">
                    <div class="form-group row">
                    <label for="nama_motor" class="col-4 col-form-label">Nama Motor</label> 
                        <div class="col-8">
                            <div class="input-group"> 
                                <input id="nama_motor" name="nama_motor" type="text" class="form-control" value="">
                            </div>
                        </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="cc" class="col-4 col-form-label">Tenaga Mesin</label> 
                        <div class="col-8">
                            <div class="input-group">
                                <input id="cc" name="cc" value="" type="text" class="form-control">
                            </div>
                        </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="tipe_motor_id" class="col-4 col-form-label">Type Motor</label> 
                        <div class="col-8">
                                <?php 
                                    $sqltipe= "SELECT * FROM tipe_motor";
                                    $rstipe = $dbh->query($sqltipe);
                                ?>
                            <select id="tipe_motor_id" name="tipe_motor_id" class="form-select">
                                <?php 
                                    foreach($rstipe as $rowtipe){
                                ?>
                                    <option value="<?=$rowtipe['id']?>"><?=$rowtipe['tipe_motor']?></option>
                                <?php
                                    }
                                ?>
                                <!--
                                <option value="1">Elektronik</option>
                                <option value="2">Furniture</option>
                                <option value="3">Makanan</option>-->

                            </select>
                        </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="harga" class="col-4 col-form-label">Harga</label> 
                        <div class="col-8">
                            <div class="input-group"> 
                                <input id="harga" name="harga" value="" type="number" class="form-control">
                            </div>
                        </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="merk_id" class="col-4 col-form-label">Merk</label> 
                        <div class="col-8">
                            <div class="input-group">
                                <?php 
                                    $sqlmerk= "SELECT * FROM merk";
                                    $rsmerk = $dbh->query($sqlmerk);
                                ?>
                                <select id="merk_id" name="merk_id" class="form-select">
                                    <?php 
                                        foreach($rsmerk as $rowmerk){
                                    ?>
                                        <option value="<?=$rowmerk['id']?>"><?=$rowmerk['nama_merk']?></option>
                                    <?php
                                        }
                                    ?>
                                    <!--
                                    <option value="1">Elektronik</option>
                                    <option value="2">Furniture</option>
                                    <option value="3">Makanan</option>-->

                                </select>
                            </div>
                        </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="stok" class="col-4 col-form-label">Stok</label> 
                        <div class="col-8">
                            <div class="input-group"> 
                                <input id="stok" name="stok" value="" type="number" class="form-control">
                            </div>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="submit" name="proses" type="submit" 
                            class="btn btn-outline-primary w-100 " value="<?php if (isset($_GET["idedit"])) {echo "Update";} else{echo "Simpan";} ?>"/>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="reset" name="" type="reset" 
                            class="btn btn-outline-danger w-100 " value="<?php echo "Reset"?>"/>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!-- End Portfolio Details Section -->

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