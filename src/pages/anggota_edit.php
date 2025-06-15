<?php
if (!isset($_GET['id_anggota'])) {
    echo "ID tidak ditemukan.";
    exit;
}

$id_anggota = $_GET['id_anggota'];

include 'koneksi.php';

$sql = "SELECT * FROM anggota WHERE id_anggota = '$id_anggota'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $nama_anggota = $row['nama_anggota'];
    $lembaga = $row['lembaga'];
    $no_hp = $row['no_hp']; // Pastikan konsisten
    $gender = $row['jenis_kelamin'];
    $status = $row['status'];
} else {
    echo "Data anggota tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Anggota</title>
  <link rel="stylesheet" href="assets/css/anggota.css?v=<?php time(); ?>">
</head>
<body>

  <div class="form-container">
    <h2>Edit Data Anggota</h2>
    <form action="pages/anggota_editproses.php?id_anggota=<?php echo $id_anggota; ?>" method="POST">
      <div class="form-group">
        <label for="namaanggota">Nama Anggota:</label>
        <input type="text" id="namaanggota" name="namaanggota" value="<?php echo htmlspecialchars($nama_anggota); ?>" required>
      </div>

      <div class="form-group">
        <label for="lembaga">Lembaga:</label>
        <input type="text" id="lembaga" name="lembaga" value="<?php echo htmlspecialchars($lembaga); ?>" required>
      </div>

      <div class="form-group">
        <label for="nohp">No. Telepon:</label>
        <input type="tel" id="nohp" name="nohp" value="<?php echo htmlspecialchars($no_hp); ?>" required>
      </div>

      <div class="form-group">
        <label for="gender">Jenis Kelamin</label>
        <div class="radio-group">
          <label>
            <input type="radio" name="gender" id="genderL" value="Laki-laki" <?php echo $gender == 'Laki-laki' ? 'checked' : ''; ?>>
            Laki-laki
          </label>
          <label>
            <input type="radio" name="gender" id="genderP" value="Perempuan" <?php echo $gender == 'Perempuan' ? 'checked' : ''; ?>>
            Perempuan
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="status">Status Keanggotaan:</label>
        <select id="status" name="status" required>
          <option value="aktif" <?php echo $status == 'aktif' ? 'selected' : ''; ?>>Aktif</option>
          <option value="tidak aktif" <?php echo $status == 'tidak aktif' ? 'selected' : ''; ?>>Tidak Aktif</option>
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

