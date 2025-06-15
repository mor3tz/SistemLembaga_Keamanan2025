<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/anggota.css?v=<?php echo time(); ?>">
  
</head>
<body>

  <div class="form-container">
    <h2>Form Input Data Anggota</h2>
    <form action="pages/anggota_inputproses.php" method="POST">
      <div class="form-group">
        <label for="namaanggota">Nama Anggota</label>
        <input type="text" id="namaanggota" name="namaanggota" required>
      </div>

      <div class="form-group">
        <label for="lembaga">Lembaga</label>
        <input type="text" id="lembaga" name="lembaga">
      </div>

      <div class="form-group">
        <label for="nohp">No. Telepon</label>
        <input type="tel" id="nohp" name="nohp">
      </div>

      <div class="form-group">
        <label for="gender">Jenis Kelamin</label>
        <div class="radio-group">
          <label>
            <input type="radio" name="gender" id="genderL" value="Laki-laki">
            Laki-laki
          </label>
          <label>
            <input type="radio" name="gender" id="genderP" value="Perempuan">
            Perempuan
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="status">Status Keanggotaan</label>
        <select id="status" name="status">
          <option value="aktif">Aktif</option>
          <option value="tidak aktif">Tidak Aktif</option>
        </select>
      </div>

      <div class="form-actions">
        <button type="submit">Simpan</button>
        <button type="reset">Batal</button>
      </div>
    </form>
  </div>

</body>
</html>
