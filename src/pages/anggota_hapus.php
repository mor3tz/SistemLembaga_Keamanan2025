<?php 

include 'koneksi.php';

$id_anggota = $_GET['id_anggota'];
$sql = "UPDATE anggota SET aktif = 0 WHERE id_anggota = $id_anggota";

if (mysqli_query($koneksi, $sql)) {
    header ("location:index.php?p=anggota");
} else {
    echo "<script>alert('Data gagal dihapus. silahkan cek ulang');</script>";
    header ("location:../index.php?p=anggota");
}

?>