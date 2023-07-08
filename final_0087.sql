-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2023 pada 23.41
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmjpoll`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(15) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl_pengaduan` date DEFAULT NULL,
  `tanggapan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `judul`, `image`, `deskripsi`, `tgl_pengaduan`, `tanggapan`) VALUES
(7080421, 'Pencemaran Udara', 'gambar1.jpg', 'Kota ini mengalami masalah pencemaran udara akibat emisi industri dan transportasi yang tinggi.', '2020-07-01', NULL),
(7080436, 'Limbah Bahan Berbahaya', 'gambar2.jpg', 'Masalah limbah bahan berbahaya seperti pestisida dan bahan kimia berbahaya yang tidak terkelola dengan baik.', '2020-07-02', NULL),
(7080458, 'Krisis Air Bersih', 'gambar3.jpg', 'Kota ini menghadapi krisis air bersih karena sumber air yang tercemar dan berkurangnya pasokan air yang memadai.', '2020-07-03', NULL),
(7080506, 'Deforestasi', 'gambar4.jpg', 'Banyak hutan di sekitar kota ini mengalami deforestasi yang mengakibatkan kerusakan ekosistem dan hilangnya habitat satwa liar.', '2020-07-04', NULL),
(7080512, 'Banjir', 'gambar5.jpg', 'Banjir sering terjadi di kota ini akibat aliran sungai yang tersumbat oleh sampah dan kurangnya sistem drainase yang memadai.', '2020-07-05', NULL),
(7080519, 'Pengurangan Lahan Hijau', 'gambar6.jpg', 'Lahan hijau di kota ini semakin berkurang akibat urbanisasi dan pembangunan infrastruktur tanpa mempertimbangkan keberlanjutan lingkungan.', '2020-07-06', NULL),
(7080525, 'Polusi Suara', 'gambar7.jpg', 'Kota ini mengalami polusi suara yang tinggi akibat aktivitas industri, transportasi, dan kebisingan perkotaan yang tidak terkontrol.', '2020-07-07', NULL),
(7080532, 'Pengurangan Keanekaragaman Hayati', 'gambar8.jpg', 'Keanekaragaman hayati di sekitar kota ini semakin berkurang karena hilangnya habitat alami dan aktivitas manusia yang merusak ekosistem.', '2020-07-08', NULL),
(7080538, 'Penggunaan Bahan Bakar Fosil', 'gambar9.jpg', 'Penggunaan bahan bakar fosil yang tinggi di kota ini menghasilkan emisi gas rumah kaca dan berkontribusi pada perubahan iklim global.', '2020-07-09', NULL),
(7080545, 'Sampah Plastik', 'gambar10.jpg', 'Masalah sampah plastik menjadi permasalahan serius di kota ini dengan jumlah limbah plastik yang sulit terurai dan mencemari lingkungan.', '2020-07-10', NULL),
(7080554, 'Pencemaran Sungai', 'gambar11.jpg', 'Sungai-sungai di kota ini mengalami pencemaran akibat pembuangan limbah industri, domestik, dan pertanian tanpa pengolahan yang memadai.', '2020-07-11', NULL),
(7080600, 'Kerusakan Rawa', 'gambar12.jpg', 'Banyak rawa-rawa di sekitar kota ini mengalami kerusakan akibat perubahan penggunaan lahan dan pembuatan saluran drainase yang tidak memperhatikan ekosistem rawa.', '2020-07-12', NULL),
(7080605, 'Penggunaan Pestisida', 'gambar13.jpg', 'Penggunaan pestisida secara berlebihan dan tidak bijak di sektor pertanian di kota ini mengakibatkan pencemaran tanah dan air.', '2020-07-13', NULL),
(7080610, 'Pencemaran Tanah', 'gambar14.jpg', 'Pencemaran tanah terjadi di kota ini akibat limbah industri, pembuangan sampah, dan penggunaan bahan kimia berbahaya yang merusak kualitas tanah.', '2020-07-14', NULL),
(708231442, 'aakwoakwowakowa', 'download.jpg', 'ok', '2023-07-21', NULL),
(708233233, 'test 2', 'image.png', 'test2', '2023-07-02', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', 'admin', '1'),
('user', 'user', '0'),
('bocchi', '123', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
