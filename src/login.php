<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="assets/images/logo.svg" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Sign in to continue.</h6>
                            <form action="ceklogin.php" method="POST" role="form" class="pt-3">

                                <!-- Dropdown Role -->
                                <!-- Custom Styled Dropdown with Icon -->
                                <div class="form-group dropdown-wrapper">
                                    <label for="roleSelect" class="form-label">Masuk sebagai</label>
                                    <div class="custom-select-wrapper">
                                        <select class="custom-select" id="roleSelect" name="role" required>
                                            <option value="" disabled selected hidden>Pilih Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="linmas">Linmas</option>
                                        </select>

                                        <i class="fa-solid fa-chevron-down select-icon"></i>
                                    </div>
                                </div>


                                <!-- Username -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="usrname" name="usrname" placeholder="Masukkan Username Anda">
                                </div>

                                <!-- Password -->
                                <div class="form-group password-wrapper">
                                    <input type="password" class="form-control form-control-lg" id="psw" name="psw" placeholder="Password">
                                    <i class="fa-solid fa-eye password-toggle" id="togglePassword" style="cursor: pointer;"></i>
                                </div>


                                <!-- Submit -->
                                <div class="mt-3 d-grid gap-2">
                                    <button class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">Masuk</button>
                                </div>
                                <!-- ke beranda -->
                                <div class="mt-3 d-grid gap-2">
                                    <button onclick="window.location.href = 'beranda.php';" class="btn btn-block btn-warning btn-lg fw-medium auth-form-btn">Kembali ke Beranda</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- password show -->
   <script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("psw");

    togglePassword.addEventListener("click", function () {
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);

        // Ganti ikon (mata terbuka ↔ mata tertutup)
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
    });
</script>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>