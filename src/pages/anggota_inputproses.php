<?php 

include "../koneksi.php";

$namaanggota = $_POST['namaanggota'];
$lembaga = $_POST['lembaga'];
$nohp = $_POST['nohp'];
$jeniskelamin = $_POST['gender'];
$status = $_POST['status'];

$query = "INSERT INTO anggota (nama_anggota, no_hp, lembaga, jenis_kelamin, status, aktif) VALUES ('$namaanggota', '$nohp', '$lembaga', '$jeniskelamin', '$status',1)";

if (mysqli_query($koneksi, $query)) {
    header ("location:../index.php?p=anggota");
} else {
    echo "<script>alert('Data gagal disimpan. silahkan cek ulang');</script>";
    header ("location:../index.php?p=anggota_input");
}

?>