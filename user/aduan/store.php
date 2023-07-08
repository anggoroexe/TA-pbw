<?php
// Mendapatkan nilai dari form
$id_pengaduan = $_POST['id_pengaduan'];
$judul = $_POST['judul_pengaduan'];
$deskripsi = $_POST['deskripsi'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];

// Mengatur lokasi penyimpanan file gambar
$target_dir = "../../admin/assets/img/pengaduan/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

// Memeriksa ukuran file gambar
if ($_FILES["image"]["size"] > 1000000) { // 1MB
    echo "Ukuran file gambar terlalu besar. Mohon unggah file dengan ukuran maksimal 1MB.";
    exit;
}

// Memeriksa apakah file gambar berhasil diunggah
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $nama_file = basename($_FILES["image"]["name"]);
    $koneksi = mysqli_connect("localhost", "root", "", "hmjpoll");
    $query = "INSERT INTO pengaduan (id_pengaduan, judul, image, deskripsi, tgl_pengaduan, tanggapan) VALUES ('$id_pengaduan', '$judul', '$nama_file', '$deskripsi', '$tgl_pengaduan', NULL)";
    mysqli_query($koneksi, $query);
    
    echo "Data pengaduan berhasil disimpan.";
    header("Refresh: 3; url=create.php");
} else {
    echo "Terjadi kesalahan saat mengunggah file gambar.";
}
?>
