<?php
session_start();
if (!isset($_SESSION["id_admin"])) {
    header("location:login.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assetss/img/favicon.png" rel="icon">
    <link href="assetss/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assetss/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetss/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetss/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assetss/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assetss/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assetss/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assetss/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assetss/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assetss/img/logo.png" alt="">
                <span class="d-none d-lg-block">Kasir KU</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <!-- End Search Icon-->

                <!-- End Notification Icon -->

                <!-- End Notification Dropdown Items -->

                <!-- End Notification Nav -->

                <!-- End Messages Icon -->

                <!-- End Messages Dropdown Items -->

                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="logout.php"
                        data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Log Out?</span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="home.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="penjualan.php">
                            <i class="bi bi-circle"></i><span>Data Penjualan</span>
                        </a>
                    </li>
                    <li>
                        <a href="detailpenjualan.php">
                            <i class="bi bi-circle"></i><span>Data Detail Penjualan</span>
                        </a>
                    </li>
                    <li>
                        <a href="produk.php">
                            <i class="bi bi-circle"></i><span>Data Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="formpenjualan.php">
                            <i class="bi bi-circle"></i><span>Form Penjualan</span>
                        </a>
                    </li>
                    <li>
                        <a href="formproduk.php">
                            <i class="bi bi-circle"></i><span>Form Produk</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <!-- End Forms Nav -->

            <!-- End Tables Nav -->

            <!-- End Charts Nav -->

            <!-- End Icons Nav -->

            <!-- End Profile Page Nav -->

            <!-- End F.A.Q Page Nav -->

            <!-- End Contact Page Nav -->

            <!-- End Register Page Nav -->

            <!-- End Login Page Nav -->

            <!-- End Error 404 Page Nav -->

            <!-- End Blank Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Penjualan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Back</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Input Penjualan</h5>

                    <?php
                    include "koneksi.php";
                    if (isset($_POST["ok"])){
                        $PenjualanID=$_POST['PenjualanID'];
                        $ProdukID=$_POST['ProdukID'];
                        $DetailID=$_POST['DetailID'];
                        $TanggalPenjualan=$_POST['TanggalPenjualan'];
                        $JumlahProduk=$_POST['JumlahProduk'];
                        $Harga=$_POST['Harga'];

                        $total=$Harga*$JumlahProduk;

                        $simpan=mysqli_query($koneksi,"insert into penjualan set 
                        PenjualanID='$PenjualanID',
                        TanggalPenjualan='$TanggalPenjualan',
                        TotalHarga='$total'");

                        $simpan=mysqli_query($koneksi,"insert into detail_penjualan set 
                        DetailID='$DetailID',
                        PenjualanID='$PenjualanID',
                        ProdukID='$ProdukID',
                        JumlahProduk='$JumlahProduk',
                        SubTotal='$total'");

                        if ($simpan){
                            echo "<div class='alert alert-success'>Sukses menambah data baru</div>";
                        }else{
                            echo "<div class='alert alert-danger'>Gagal menambah data baru</div>";
                        }
                    }
                    ?>
                    <form method="POST" action="">
                        <div class="form-grup">
                            <label><b>Penjualan ID</b></label>
                            <input type="text" class="form-control" placeholder="..." name="PenjualanID">
                        </div>
                        <br>
                        <div class="form-grup">
                            <label><b>Detail ID</b></label>
                            <input type="text" class="form-control" placeholder="..." name="DetailID">
                        </div>
                        <br>
                        <label><b>Produk ID</b></label>
                        <select name="ProdukID" class="form-control">
                            <?php
                            $t_produk = mysqli_query($koneksi, "select ProdukID, NamaProduk from produk");
                            foreach ($t_produk as $produk){
                            echo "<option value=$produk[ProdukID]>$produk[ProdukID]--$produk[NamaProduk]</option>";
                            }
                            ?>
                        </select>
                        <br>
                        <div class="form-group">
                            <label><b>Harga</b></label>
                            <select name="Harga" class="form-control">
                                <?php
                            $t_produk = mysqli_query($koneksi, "select ProdukID, Harga from produk");
                            foreach ($t_produk as $produk){
                            echo "<option value=$produk[ProdukID]>$produk[Harga]</option>";
                            }
                            ?>
                            </select>
                            <br>
                            <div class="form-grup">
                                <label><b>Jumlah Produk</b></label>
                                <input type="text" class="form-control" placeholder="..." name="JumlahProduk">
                            </div>
                            <br>
                            <div class="form-grup">
                                <label><b>Tanggal Penjualan</b></label>
                                <input type="date" class="form-control" placeholder="..." name="TanggalPenjualan">
                            </div>
                            <br>
                            <button type="submit" name="ok" class="btn btn-success btn-sm">SIMPAN</button>
                    </form>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assetss/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assetss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetss/vendor/chart.js/chart.umd.js"></script>
    <script src="assetss/vendor/echarts/echarts.min.js"></script>
    <script src="assetss/vendor/quill/quill.min.js"></script>
    <script src="assetss/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assetss/vendor/tinymce/tinymce.min.js"></script>
    <script src="assetss/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assetss/js/main.js"></script>

</body>

</html>
<?php 
}
?>