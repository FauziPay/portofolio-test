<?php
$servername = "sql6.freemysqlhosting.net";
$database = "sql6492932";
$username = "sql6492932";
$password = "qWa3NiK4it";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
