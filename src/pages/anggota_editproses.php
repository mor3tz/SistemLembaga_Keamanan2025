<?php
include '../koneksi.php';

// Ambil ID anggota dari URL
$idedit = $_GET['id_anggota'];

// Ambil data dari form
$namaanggota = $_POST['namaanggota'];
$lembaga = $_POST['lembaga'];
$nohp = $_POST['nohp'];
$gender = $_POST['gender'];
$status = $_POST['status'];

// Query update ke tabel anggota
$sql = "UPDATE anggota SET
    nama_anggota = '$namaanggota',
    lembaga = '$lembaga',
    no_hp = '$nohp',
    jenis_kelamin = '$gender',
    status = '$status'
    WHERE id_anggota = $idedit";

if (mysqli_query($koneksi, $sql)) {
    // Redirect jika berhasil
    header("Location: ../index.php?p=anggota");
    exit;
} else {
    // Tampilkan error jika gagal
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>
