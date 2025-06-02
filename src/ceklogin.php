<?php
include 'koneksi.php';

$username = $_POST['usrname'];
$password = $_POST['psw'];
$role = $_POST['role'];

// Query mencocokkan username, password, role secara langsung
$sql = "SELECT * FROM t_users WHERE username = '$username' AND password = '$password' AND role = '$role'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    if ($data['role'] == 'admin') {
        header("Location: index.php");
    } elseif ($data['role'] == 'linmas') {
        header("Location: beranda.php");
    }
    exit;
} else {
    echo "<script>alert('Username atau Password salah!'); window.location.href='login.php';</script>";
}

mysqli_close($koneksi);
?>
