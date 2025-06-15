<?php

$id_user = $_GET['id_user'];
include "koneksi.php";

$sql = "SELECT * FROM t_users WHERE id_user = $id_user";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $username = $row['username'];
  $password = $row['password'];
  $role = $row['role'];
} else {
  echo "Data pengguna tidak ditemukan.";
  exit;
}
?>


<!-- Form Input Tambah Pengguna -->
<div class="card card-rounded mt-4" id="formTambahUser">
  <div class="card-body">
    <h5 class="mb-3">Form Tambah Pengguna</h5>
    <form action="pages/setuser_inputproses.php?id_user=<?php echo $id_user; ?>" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
      </div>

      <div class="mb-3">
        <label for="role" class="form-label">Role:</label>
        <select name="role" id="role" class="form-control" value="">
          <option value="">-- Pilih Role --</option>
          <option value="admin" <?php if ($role == 'admin') echo 'selected'; ?>>Admin</option>
          <option value="linmas" <?php if ($role == 'linmas') echo 'selected'; ?>>Linmas</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
  </div>
</div>