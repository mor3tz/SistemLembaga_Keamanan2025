<?php 

include "koneksi.php";

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = "UPDATE t_users SET username='$username', password='$password', role='$role' WHERE id_user=$id_user";

if (mysqli_query($koneksi, $query)) {
    header("Location: ../index.php?p=setuser");
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>