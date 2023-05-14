<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MOTOMIN - Product</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    
    

    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../../fontawesome/css/all.min.css">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Sabar...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="../index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa-solid fa-motorcycle"></i> MOTOMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Fahmi Alhafizh</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../index.php" class="nav-item nav-link"><i class="fas fa-home"></i> Dashboard</a>
                    <a href="produk.php" class="nav-item nav-link active"><i class="fa-solid fa-shop"></i> Product</a> <!--motor-->
                    <a href="merk.php" class="nav-item nav-link"><i class="fas fa-tags"></i> Merk</a> <!--merk-->
                    <a href="kategori.php" class="nav-item nav-link"><i class="fas fa-shopping-basket"></i> Category</a> <!--tipe_motor-->
                    <a href="pesanan.php" class="nav-item nav-link"><i class="fas fa-receipt"></i> Order List</a> <!--pesanan-->
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="../index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <a href="../../index.php" class="nav-link" data-bs-toggle="">
                    <i class="fas fa-tv"></i>
                        <span class="d-none d-lg-inline-flex">Web</span>
                    </a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Fahmi Alhafizh</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Main Content -->
            <div class="container-fluid pt-4 px-4">
            <nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="../index.php">Admin</a>
					</li>
					<li class="breadcrumb-item active">
						Product
					</li>
				</ol>
			</nav>
            <?php 
            require_once '../../database/dbkoneksi.php';
            ?>
            <?php 
            $sql = "SELECT * FROM motor";
            $rs = $dbh->query($sql);
            ?>
            <br>
            <a class="btn btn-primary" href="../pages/form/form_produk.php" role="button">Add Product <i class="fa fa-cart-plus" aria-hidden="true"></i></a><br><br>
            <table class="table table-hover table-striped" width="100%" border="1" cellspacing="2" cellpadding="2">
                <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Motor</th>
                            <th>Tenaga Mesin</th>
                            <th>Type Motor</th>
                            <th>Harga</th>
                            <th>Merk</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                </thead>
                <tbody>
                    <?php 
                    $nomor  =1 ;
                    foreach($rs as $row){
                    ?>
                            <tr >
                                <td><?=$row['id']?></td>
                                <td><?=$row['nama_motor']?></td>
                                <td><?=$row['cc']?></td>
                                <td><?=$row['tipe_motor_id']?></td>
                                <td><?=$row['harga']?></td>
                                <td><?=$row['merk_id']?></td>
                                <td><?=$row['stok']?></td>
                                <td>
                                <button type="button" class="btn btn-square btn-outline-success m-2"><a href="../progress/review/produk.php"?id=<?= $row['id'] ?>><i class="fa fa-eye" aria-hidden="true"></i></a></button>
                                <button type="button" class="btn btn-square btn-outline-secondary m-2"><a href="#?idedit=<?= $row['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></button>
                                <button type="button" class="btn btn-square btn-outline-danger m-2"><a href="../../backend/progress/delete/delete.php"
                                onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama_motor']?>?')) {return false}"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                                </td>
                             </tr>
                        <?php 
                        $nomor++;   
                        } 
                        ?>
                </tbody>
            </table>
            </div>
            <!-- End Content -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="../../index.php">MOTOBRADS</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                        <p class="m-0 small">Copyright &copy; Made with <i class="fa-solid fa-heart"></i> and <i class="fa-solid fa-mug-hot"></i> by <a href="https://www.linkedin.com/in/fahmi-muhammad-al-hafizh-297097259/" style="text-decoration: none;">FamSi</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/chart/chart.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>     
           