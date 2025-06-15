<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lembaga Keamanan Sarijaya</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- css -->
  <link rel="stylesheet" href="assets/css/style-custom.css?v=<?php time(); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?php time(); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body class="with-welcome-text">
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="assets/images/logo-kutai.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="assets/images/logo-kutai.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item fw-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Welcome Back, <span class="text-black fw-bold">Admin</span></h1>
            <h3 class="welcome-sub-text">Mari Pantau Keamanan Saat Ini... </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <!-- <li class="nav-item dropdown d-none d-lg-block user-profile-dropdown">
            <a class="nav-link" id="UserProfileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="assets/images/user1.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserProfileDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="assets/images/user1.png" alt="Profile image" style="width: 80px; height: 80px;">
                <p class="mb-1 mt-3 fw-semibold">Admin</p>
              </div>
              <a href="logout.php" class="dropdown-item">
                <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Log Out
              </a>
            </div>
          </li> -->

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=dashboard">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=anggota">
              <i class="menu-icon mdi mdi-account-group"></i>
              <span class="menu-title">Anggota Keamanan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=absensi_petugas">
              <i class="menu-icon mdi mdi-format-list-bulleted"></i>
              <span class="menu-title">Absensi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=laporan_petugas">
              <i class="menu-icon mdi mdi-file-document-alert-outline"></i>
              <span class="menu-title">Laporan Kasus</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=setuser">
              <i class="menu-icon mdi mdi-account-cog-outline"></i>
              <span class="menu-title">Set User</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="menu-icon mdi mdi-power text-danger"></i>
              <span class="menu-title fw-bold">Log Out</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- ROUTING -->
      <div class="main-panel">
        <div class="col-lg-12">
        <?php
        $pages_dir = 'pages';
        if (!empty($_GET['p'])) {
          $pages = scandir($pages_dir, 0);
          unset($pages[0], $pages[1]);
          $p = $_GET['p'];
          if (in_array($p . '.php', $pages)) {
            include($pages_dir . '/' . $p . '.php');
          } else {
            echo 'Halaman Tidak ditemukan';
          }
        } else {
          include($pages_dir . '/dashboard.php');
        }
        ?>
      </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Lembaga Keamanan</a> Sarijaya  .</span>
            <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/chart.umd.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <!-- <script src="assets/js/chart.js"></script> -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- <script src="assets/js/dashboard.js"></script> -->
  <!-- js custom -->
  <script src="assets/js/main/grafik1.js"></script>
  <script src="assets/js/main/grafik2.js"></script>
  <!-- js main custom -->
  <script src="assets/js/main/script.js"></script>
  <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
</body>

</html>