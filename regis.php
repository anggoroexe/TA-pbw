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

// Lakukan operasi penyimpanan pengguna ke basis data, misalnya menggunakan PDO atau mysqli

// Contoh penggunaan PDO
$host = 'localhost';
$db = 'final_0087';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;";
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Query untuk menyimpan pengguna ke tabel user
$sql = "INSERT INTO user (username, password, level) VALUES (:username, :password, '0')";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':username', $username, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);
$stmt->execute();

// Informasi pengguna berhasil terdaftar
echo "Registrasi pengguna berhasil. Silakan login.";
header("Location: index.php");
?>
