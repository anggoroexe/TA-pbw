<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pengaduan = $_POST['id_pengaduan'];
    $tanggapan = $_POST['tanggapan'];

    $query = "UPDATE pengaduan SET tanggapan = '$tanggapan' WHERE id_pengaduan = '$id_pengaduan'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Tanggapan berhasil disimpan.";
        header("Refresh: 3; url=index.php");
    } else {
        echo "Terjadi kesalahan saat menyimpan tanggapan.";
    }
} else {
    echo "Metode permintaan tidak valid.";
}
?>
