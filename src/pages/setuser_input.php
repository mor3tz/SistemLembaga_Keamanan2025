<!-- Form Input Tambah Pengguna -->
<div class="card card-rounded mt-4" id="formTambahUser">
  <div class="card-body">
    <h5 class="mb-3">Form Tambah Pengguna</h5>
    <form action="pages/setuser_inputproses.php" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" name="username" id="username" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="role" class="form-label">Role:</label>
        <select name="role" id="role" class="form-control" required>
          <option value="">-- Pilih Role --</option>
          <option value="admin">Admin</option>
          <option value="linmas">Linmas</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
  </div>
</div>
