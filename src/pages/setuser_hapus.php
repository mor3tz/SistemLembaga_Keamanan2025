<?php
include "koneksi.php";

if (isset($_GET['id_user'])) {
    $id_user = intval($_GET['id_user']); // keamanan: ubah ke integer

    // Soft delete: update aktif = 0
    $query = "UPDATE t_users SET aktif = 0 WHERE id_user = $id_user";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Pengguna berhasil di-nonaktifkan.'); window.location.href='index.php?p=setuser';</script>";
    } else {
        echo "<script>alert('Gagal menghapus pengguna: " . mysqli_error($koneksi) . "'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('ID pengguna tidak ditemukan.'); window.history.back();</script>";
}
?>
