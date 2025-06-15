<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- =============== FONT AWESOME ================ -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- STYLE -->
  <style>
    .btn-edit,
    .btn-hapus {
      padding: 6px 12px;
      font-size: 13px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 5px;
    }

    .btn-edit {
      background-color: #4CAF50;
      color: white;
    }

    .btn-hapus {
      background-color: #f44336;
      color: white;
    }

    .btn-edit:hover {
      background-color: #45a049;
    }

    .btn-hapus:hover {
      background-color: #d32f2f;
    }

    .btn-tambah {
      display: inline-block;
      margin-top: 10px;
      background-color: #007bff;
      color: white;
      padding: 8px 16px;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn-tambah:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row flex-grow">
            <div class="col-lg-13 col-md-12 grid-margin stretch-card">
              <div class="card card-rounded">
                <div class="card-body">

                  <!-- Judul dan Subjudul -->
                  <div class="mb-3">
                    <h4 class="card-title card-title-dash fs-4">Pengaturan Pengguna</h4>
                    <p class="card-subtitle card-subtitle-dash fw-normal">Kamu Bisa Tambah Petugas Baru</p>

                    <!-- Tombol Tambah Pengguna -->
                    <a href="index.php?p=setuser_input" class="btn-tambah" id="btnTambahAnggota" style="cursor: pointer; text-decoration: none;">
                      <i class="fa-solid fa-user-plus"></i> Tambah Pengguna
                    </a>
                  </div>


                  <!-- Tabel ABSEN -->
                  <div class="table-responsive mt-1">
                    <table class="table select-table">
                      <thead class="table-head">
                        <tr>
                          <th>No</th>
                          <th class="">Username</th>
                          <th class="">Password</th>
                          <th class="">Role</th>
                          <th class="">Option</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        include "koneksi.php";

                        // Query untuk ambil pengguna aktif
                        $query = "SELECT * FROM t_users WHERE aktif = 1";
                        $result = mysqli_query($koneksi, $query);
                        $no = 1;

                        if (mysqli_num_rows($result) == 0) {
                          // Jika tidak ada data pengguna aktif
                          echo "<tr><td colspan='5'>Tidak ada data pengguna.</td></tr>";
                        } else {
                          // Tampilkan semua pengguna aktif
                          while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td><h6>" . htmlspecialchars($row['username']) . "</h6></td>";
                            echo "<td><h6>" . htmlspecialchars($row['password']) . "</h6></td>";
                            echo "<td><p class='fw-bold'>" . htmlspecialchars($row['role']) . "</p></td>";
                            echo "<td>
              <a href='index.php?p=setuser_edit&id_user=" . urlencode($row['id_user']) . "' class='btn-edit' style='text-decoration: none;'>Edit</a>
              <a href='index.php?p=setuser_hapus&id_user=" . urlencode($row['id_user']) . "' class='btn-hapus' style='text-decoration: none;' onclick='return confirm(\"Hapus pengguna ini?\")'>Hapus</a>
            </td>";
                            echo "</tr>";
                            $no++;
                          }
                        }
                        ?>
                      </tbody>


                    </table>
                  </div>
                  <!-- End Table -->
                </div> <!-- card-body -->
              </div> <!-- card -->
            </div> <!-- col -->
          </div> <!-- row -->
        </div> <!-- content-wrapper -->
      </div> <!-- main-panel -->
    </div> <!-- page-body-wrapper -->
  </div> <!-- container-scroller -->
</body>

</html>