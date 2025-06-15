<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- css -->
  <link rel="stylesheet" href="assets/css/beranda.css?v=<?php time(); ?>" />

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
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
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
  <!-- FORM Modal Absen -->
  <div id="absenModal" class="custom-modal">
    <div class="custom-modal-content">
      <span class="custom-close" id="closeModalLogin">&times;</span>
      <h2 class="modal-title">Formulir Absen</h2>
      <p class="modal-description">Silakan isi data di bawah ini.</p>
      <p><i class="fa-solid fa-user icon-spacing"></i>LINMAS</p>
      <form id="absenForm" action="pages/absen_inputproses.php" method="POST">
        <div class="form-option">
          <label for="keterangan">Keterangan :</label>
          <select id="keterangan" required>
            <option value="" disabled selected>Pilih keterangan</option>
            <option value="Hadir">Hadir</option>
            <option value="Izin">Izin</option>
          </select>
        </div>
        <div class="form-buttons">
          <button type="submit" class="btn-primary">Kirim</button>
          <button type="button" class="btn-secondary" id="cancelModalAbsen">Batal</button>
        </div>
      </form>
    </div>
  </div>

  <!-- FORM Modal Lapor -->
  <div id="laporModal" class="modal">
    <div class="lapor-modal-content">
      <span class="lapor-close" id="closeModalLapor">&times;</span>
      <h2 class="lapor-title">Lapor Kejadian</h2>
      <form id="laporForm">
        <div class="lapor-form-group">
          <label for="lokasi">Lokasi Kejadian RT:</label>
          <select id="lokasi" required>
            <option value="" disabled selected>Pilih RT</option>
            <option value="RT 01">RT 01</option>
            <option value="RT 02">RT 02</option>
            <option value="RT 03">RT 03</option>
            <option value="RT 04">RT 04</option>
            <option value="RT 05">RT 05</option>
            <option value="RT 06">RT 06</option>
            <option value="RT 07">RT 07</option>
            <option value="RT 08">RT 08</option>
            <option value="RT 09">RT 09</option>
            <option value="RT 10">RT 10</option>
          </select>
        </div>

        <div class="lapor-form-group">
          <label for="kasus">kasus:</label>
          <input id="kasus" placeholder="kasus" rows="4" required></input>
        </div>
        <div class="lapor-form-option">
          <label for="kategori">Kategori:</label>
          <select id="kategori" required>
            <option value="" disabled selected>Pilih kategori</option>
            <option value="Kriminal">Kriminal</option>
            <option value="Bencana">Bencana</option>
          </select>
        </div>
        <div class="lapor-form-actions">
          <button type="submit" class="lapor-btn-submit">Kirim Laporan</button>
          <button type="button" class="lapor-btn-cancel" id="cancelModalLapor">Batal</button>
        </div>
      </form>
    </div>
  </div>


  <!-- JavaScript -->
  <script src="../src/assets/js/beranda.js"></script>
</body>

</html>