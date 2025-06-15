<?php 

include "../koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = "INSERT INTO t_users (username, password, role, aktif) VALUES ('$username', '$password', '$role', 1)";

if (mysqli_query($koneksi, $query)) {
    header("Location: ../index.php?p=setuser");
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

?>