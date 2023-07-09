<?php
// Validasi input dan sanitasi data
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Periksa apakah password dan konfirmasi password sesuai
if ($password !== $confirm_password) {
  echo "Konfirmasi password tidak sesuai. Silakan coba lagi.";
  exit;
}

// Lakukan operasi penyimpanan pengguna ke basis data, menggunakan mysqli

$host = 'localhost';
$db = 'final_0087';
$user = 'root';
$pass = '';

// Buat koneksi mysqli
$mysqli = new mysqli($host, $user, $pass, $db);

// Periksa koneksi mysqli
if ($mysqli->connect_error) {
    die("Koneksi ke database gagal: " . $mysqli->connect_error);
}

// Query untuk menyimpan pengguna ke tabel user
$sql = "INSERT INTO user (username, password, level) VALUES (?, ?, '0')";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ss', $username, $password);
$stmt->execute();

// Informasi pengguna berhasil terdaftar
echo "Registrasi pengguna berhasil. Silakan login.";
header("Location: index.php");
?>