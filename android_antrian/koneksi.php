<?php
$servername = "localhost";
$database = "android_antrian";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$con = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//mysqli_close($conn);
?>