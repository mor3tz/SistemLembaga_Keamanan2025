<!DOCTYPE html>
<html lang="en">

<head>
  <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/style-custom.css?v=<?php time(); ?>">
  <link rel="stylesheet" href="../assets/css/anggota.css?v=<?php time(); ?>">
  <!-- =============== FONT AWESOME ================ -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 mx-auto grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title fs-4">Anggota Keamanan LINMAS</h4>
                  <p class="card-description"> Kelurahan Sarijaya
                  </p>

                  <!-- Button tambah Anggota -->

                  <!-- Tombol di kiri atas -->
                  <div class="tambah-anggota-wrapper">
                    <a href="index.php?p=anggota_input" class="btn-tambah-anggota" id="btnTambahAnggota" style="cursor: pointer; text-decoration: none;">
                      <i class="fa-solid fa-user-plus"></i> Tambah Anggota
                    </a>
                  </div>

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Anggota</th>
                          <th>Lembaga</th>
                          <th>No Handphone</th>
                          <th>Jenis Kelamin</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          include "koneksi.php";
                          $sql = "SELECT * FROM anggota where aktif=1";
                          $result = mysqli_query($koneksi, $sql);

                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              echo "<tr>";
                              echo "<td class='fw-light fs-6'>" . $row["nama_anggota"] . "</td>";
                              echo "<td class='fw-light fs-6'>" . $row["lembaga"] . "</td>";
                              echo "<td class='fw-light fs-6'>" . $row["no_hp"] . "</td>";
                              echo "<td class='fw-light fs-6'>" . $row["jenis_kelamin"] . "</td>";
                              $status = strtolower($row["status"]); // aktif atau tidak aktif

                              // Tentukan kelas badge berdasarkan status
                              $badgeClass = ($status == 'aktif') ? 'bg-success' : 'bg-danger';

                              echo "<td><span class='badge $badgeClass text-white fw-light px-2 py-1 rounded fs-6'>" . ucfirst($status) . "</span></td>";

                              echo "<td>";
                              $id_anggota = $row["id_anggota"];
                              echo "<a href='index.php?p=anggota_edit&id_anggota=" . $row["id_anggota"] . "' class='action-link text-info me-2 fs-6'>";
                              echo "<i class='mdi mdi-pencil'></i> Edit";
                              echo "</a>";

                              echo "<a href='index.php?p=anggota_hapus&id_anggota=" . $row["id_anggota"] . "' class='action-link text-danger fs-6'>";
                              echo "<i class='mdi mdi-delete'></i> Hapus";
                              echo "</a>";
                              echo "</td>";
                              echo "</tr>";
                            }
                          } else {
                            echo "<tr><td colspan='5'>Tidak ada data anggota.</td></tr>";
                          }
                        
                          mysqli_close($koneksi);
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>