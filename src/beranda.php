<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css -->
    <link rel="stylesheet" href="../src/assets/css/beranda.css" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Lembaga Keamanan Sarijaya</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Lembaga Keamanan</div>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="nav-menu">
            <li><a href="#"><i class="fa-solid fa-home">
                    </i>Beranda</a></li>
            <li><a href="login.php"><i class="fa-solid fa-user">
                    </i> Admin</a></li>
            <!-- --------------------- -->
            <?php if (isset($_SESSION['username'])): ?>
                <li class="nav-item logout">
                    <a href="logout.php">
                        <i class="fa-solid fa-user"></i>
                        <span class="fw-bold">Log Out</span>
                    </a>
                </li>

            <?php endif; ?>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Selamat Datang di Lembaga Keamanan Sarijaya</h1>
        <p>Silahkan Login untuk mengakses sistem</p>
        <!-- Hero Button -->
        <div class="hero-buttons">
            <!-- sembunyi ketika role masuk -->
            <?php if (!isset($_SESSION['role'])): ?>
                <button class="btn-linmas" onclick="window.location.href = 'login.php';">
                    Masuk sebagai Linmas <i class="fa-solid fa-arrow-right"></i>
                </button>
            <?php endif; ?>

            <!-- hanya tampil jika role linmas -->
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'linmas'): ?>
                <button class="btn-absen" id="modalAbsen">
                    Absen Linmas <i class="fa-solid fa-list-check"></i>
                </button>
                <button class="btn-lapor" id="modalLapor">
                    Lapor Kasus <i class="fa-solid fa-file"></i>
                </button>
            <?php endif; ?>
        </div>

    </section>

    <!-- JavaScript -->
    <script src="../src/assets/js/beranda.js"></script>

</body>

</html>