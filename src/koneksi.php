<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// koneksi.php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lembaga_keamanan";

// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$koneksi) {
    die("Server tidak dapat terhubung: " . mysqli_connect_error());
}
?>
