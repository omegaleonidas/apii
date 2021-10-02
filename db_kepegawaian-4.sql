-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2021 at 05:54 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_06_29_045906_create_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\user', 2, 'token-name ', '197d7293859cebbfeba76b530602895d2956cd48b8658569a71175be54fd50cb', '[\"*\"]', NULL, '2021-07-04 01:04:29', '2021-07-04 01:04:29'),
(2, 'App\\Models\\user', 2, 'token-name ', 'f070fcc7f25867dcc82e532642f9d633a5edbbe5ddb2992332345d0899c0ce48', '[\"*\"]', NULL, '2021-07-04 01:04:48', '2021-07-04 01:04:48'),
(3, 'App\\Models\\user', 2, 'token-name ', '3ef4a45b7d5866ae85bbec39e140e5ca26db2d6608a345fce76855cfced2cafb', '[\"*\"]', NULL, '2021-07-04 01:54:48', '2021-07-04 01:54:48'),
(4, 'App\\Models\\user', 2, 'token', '42cea5c86c522e109f7413dcc07eaa2a03e2dca2884580751863269ea6040225', '[\"*\"]', NULL, '2021-07-04 02:02:52', '2021-07-04 02:02:52'),
(5, 'App\\Models\\user', 2, 'token', 'db7ff5daf7ba1656306c384bf3c69d2c8cc48f624b452bae80931d5397c52501', '[\"*\"]', NULL, '2021-07-04 02:05:17', '2021-07-04 02:05:17'),
(6, 'App\\Models\\user', 2, 'token', '683925efd2b6b791f24d49c276be571486dada9edd61e95922782a8f8a24d609', '[\"*\"]', NULL, '2021-07-04 02:06:03', '2021-07-04 02:06:03'),
(7, 'App\\Models\\user', 2, 'token', 'd1df6545d8fb0e25948832fb45ab9f3de2619d40243bde74da33239cc994c6a7', '[\"*\"]', NULL, '2021-07-04 02:11:02', '2021-07-04 02:11:02'),
(8, 'App\\Models\\user', 2, 'token', '57d4a8dadd37b69a1ea33a8091a4ec2846010034b0a0f81d3d6059392eabb677', '[\"*\"]', '2021-07-04 02:16:50', '2021-07-04 02:12:44', '2021-07-04 02:16:50'),
(10, 'App\\Models\\user', 2, 'token', '08e1d7ec08ac6098f18f86e4747b55284111c87c6b3e4e3ef7670876b0d56755', '[\"*\"]', '2021-08-11 03:42:56', '2021-07-04 04:59:00', '2021-08-11 03:42:56'),
(11, 'App\\Models\\user', 2, 'token', '1c828f94109001f7fe54ece184c4cc7c2a983d760e3dc0475d89ea06b8369f9b', '[\"*\"]', NULL, '2021-08-09 03:22:18', '2021-08-09 03:22:18'),
(12, 'App\\Models\\user', 2, 'token', '54a07386584561b3bfb35f478beee57ba5014b9322eeb8a76a4683d27e6138a4', '[\"*\"]', NULL, '2021-08-09 06:27:51', '2021-08-09 06:27:51'),
(13, 'App\\Models\\user', 2, 'token', '35d6873e1a896c6a2c3217cdc39369057cf01e503fa6739f4eeeaa4d7ed83ed9', '[\"*\"]', '2021-08-11 09:55:51', '2021-08-09 06:36:01', '2021-08-11 09:55:51'),
(14, 'App\\Models\\user', 2, 'token', '4302cc0b6a9e0a671f09e2ef9260725ac22d2097c753ed3cf187436faf97f5b0', '[\"*\"]', '2021-08-09 20:28:14', '2021-08-09 20:25:57', '2021-08-09 20:28:14'),
(15, 'App\\Models\\user', 2, 'token', '8f71da142582e691367f9a5fc5e0fb48a14847c081f150fdcafd2baaa14781b9', '[\"*\"]', '2021-08-09 22:03:55', '2021-08-09 20:29:47', '2021-08-09 22:03:55'),
(16, 'App\\Models\\user', 2, 'token', 'cf499d186bce0d00ea9f51923f9c31676915a508cb62f7e5dc689e2c11ad55a1', '[\"*\"]', '2021-08-10 07:00:12', '2021-08-09 22:04:47', '2021-08-10 07:00:12'),
(17, 'App\\Models\\user', 2, 'token', '1d7c65bb48dd0af3e5b3952bf167f26eb178ca95a5fe07db9dae9d97dbb2da7f', '[\"*\"]', '2021-08-10 08:30:46', '2021-08-10 07:04:40', '2021-08-10 08:30:46'),
(18, 'App\\Models\\user', 2, 'token', '4d6d78350062c54d8ec03bac1713d497be9f402f8a831de2d176a278caafbaf3', '[\"*\"]', '2021-08-10 08:34:24', '2021-08-10 08:31:11', '2021-08-10 08:34:24'),
(19, 'App\\Models\\user', 2, 'token', 'edee6d79c128bac8c910142210b3243b44faa47e70606419427b51a37d538659', '[\"*\"]', '2021-08-10 08:36:38', '2021-08-10 08:34:39', '2021-08-10 08:36:38'),
(20, 'App\\Models\\user', 2, 'token', 'd9f991c61b0bc96f3d6c629f76bbc7df0b2d747441bcc3de04a36765187652c8', '[\"*\"]', '2021-08-11 20:02:51', '2021-08-10 08:36:49', '2021-08-11 20:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `t_absensi`
--

CREATE TABLE `t_absensi` (
  `id_absensi` int(6) NOT NULL,
  `nip` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` text NOT NULL,
  `jam_selesai` text DEFAULT NULL,
  `alamat` text NOT NULL,
  `alamat_sore` text DEFAULT NULL,
  `keterangan` text NOT NULL,
  `keterangan_sore` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_absensi`
--

INSERT INTO `t_absensi` (`id_absensi`, `nip`, `tanggal`, `jam_masuk`, `jam_selesai`, `alamat`, `alamat_sore`, `keterangan`, `keterangan_sore`, `updated_at`, `created_at`) VALUES
(2, 1711082025, '2021-07-11', '13:2', '07:07', '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', 'secata b', 'alfa', 'hadir', '2021-08-11 09:05:31', '2021-08-11 09:05:31'),
(3, 1711082025, '2021-07-09', '07:07', '07:07', 'secata b', '', 'hadir', '0', '2021-08-11 09:30:25', '2021-08-11 09:30:25'),
(4, 1711082025, '2021-07-11', '13:51', '07:07', '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', 'secata b', 'alfa', 'hadir', '2021-08-11 09:55:12', '2021-08-11 09:55:12'),
(5, 1711082025, '2021-07-11', '14:17', NULL, 'null', NULL, 'alfa', NULL, '2021-08-11 10:20:34', '2021-08-11 10:20:34'),
(6, 1711082025, '2021-07-11', '14:37', '14:37', 'null', 'null', 'alfa', 'alfa', '2021-08-11 10:40:53', '2021-08-11 10:40:53'),
(7, 1711082025, '2021-07-11', '14:46', NULL, 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', NULL, 'alfa', NULL, '2021-08-11 10:50:05', '2021-08-11 10:50:05'),
(8, 1711082025, '2021-07-11', '14:46', NULL, 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', NULL, 'alfa', NULL, '2021-08-11 10:50:10', '2021-08-11 10:50:10'),
(9, 1711082025, '2021-07-11', '14:46', '14:46', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'alfa', 'alfa', '2021-08-11 10:50:13', '2021-08-11 10:50:13'),
(10, 1711082025, '2021-07-11', '14:49', '14:49', 'null', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'alfa', 'alfa', '2021-08-11 10:52:38', '2021-08-11 10:52:38'),
(11, 1711082025, '2021-07-11', '14:49', '14:49', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'alfa', 'alfa', '2021-08-11 10:53:38', '2021-08-11 10:53:38'),
(12, 1711082025, '2021-07-11', '14:49', '14:49', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'alfa', 'alfa', '2021-08-11 10:54:56', '2021-08-11 10:54:56'),
(13, 1711082025, '2021-07-11', '14:55', '14:55', 'null', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'alfa', 'alfa', '2021-08-11 10:58:36', '2021-08-11 10:58:36'),
(14, 1711082025, '2021-07-11', '14:55', NULL, 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', NULL, 'alfa', NULL, '2021-08-11 10:59:18', '2021-08-11 10:59:18'),
(15, 1711082025, '2021-07-11', '14:57', '14:57', 'null', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'alfa', 'alfa', '2021-08-11 11:01:34', '2021-08-11 11:01:34'),
(16, 1711082025, '2021-07-11', '14:57', NULL, 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', NULL, 'alfa', NULL, '2021-08-11 11:01:56', '2021-08-11 11:01:56'),
(17, 1711082025, '2021-07-11', '14:57', NULL, 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', NULL, 'alfa', NULL, '2021-08-11 20:00:06', '2021-08-11 20:00:06'),
(18, 1711082025, '2021-07-11', '14:57', '14:57', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'Jl. Khatib Sulaiman No.86, Ulak Karang Sel., Kec. Padang Utara, Kota Padang, Sumatera Barat 25173, Indonesia', 'alfa', 'alfa', '2021-08-11 20:00:40', '2021-08-11 20:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `t_agama`
--

CREATE TABLE `t_agama` (
  `id_agama` int(10) NOT NULL,
  `nama_agama` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_agama`
--

INSERT INTO `t_agama` (`id_agama`, `nama_agama`) VALUES
(1, 'islam'),
(2, 'kristen');

-- --------------------------------------------------------

--
-- Table structure for table `t_cuti`
--

CREATE TABLE `t_cuti` (
  `id_cuti` int(12) NOT NULL,
  `nip` int(6) NOT NULL,
  `lama_cuti` int(6) NOT NULL,
  `alasan_cuti` varchar(30) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `acc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_cuti`
--

INSERT INTO `t_cuti` (`id_cuti`, `nip`, `lama_cuti`, `alasan_cuti`, `tanggal_mulai`, `tanggal_akhir`, `tanggal`, `acc`) VALUES
(7, 3487, 2, 'hadir', '2021-07-17', '2021-07-10', 'tanggal', 'acc'),
(8, 3487, 2, 'hadir', '2021-07-17', '2021-07-10', 'tanggal', 'acc'),
(9, 1711082025, 2, 'Alfa', '2021-07-09', '2021-07-19', '2021-7-19', 'acc'),
(11, 0, 5, 'hair', '2021-08-19', '2021-08-12', '2021-08-12', 'acc'),
(12, 1711082025, 2, 'Alfa', '2021-07-09', '2021-07-19', '2021-7-19', 'acc'),
(13, 1711082025, 2, 'Alfa', '2021-07-09', '2021-07-19', '2021-7-19', 'acc'),
(14, 1711082025, 2, 'Alfa', '2021-07-09', '2021-07-19', '2021-7-19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_informasi`
--

CREATE TABLE `t_informasi` (
  `id_informasi` int(10) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `descripsi` text NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_informasi`
--

INSERT INTO `t_informasi` (`id_informasi`, `judul`, `descripsi`, `gambar`) VALUES
(1, 'kelulusan', 'lulus 100%', 'kelulusan.jpg'),
(2, 'menampilkan Data', 'mencari Data', 'menampilkan Data.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_jabatan`
--

CREATE TABLE `t_jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jabatan`
--

INSERT INTO `t_jabatan` (`id_jabatan`, `nama_jabatan`, `updated_at`, `created_at`) VALUES
(1, 'kepala sekolah', '2021-07-04 12:31:28', '2021-07-04 12:31:57'),
(2, 'admin', '2021-07-04 12:31:28', '2021-07-04 12:31:57'),
(3, 'bendahara', '2021-07-04 05:32:02', '2021-07-04 05:32:02'),
(4, 'seketaris', '2021-07-04 05:32:52', '2021-07-04 05:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `t_pegawai`
--

CREATE TABLE `t_pegawai` (
  `id_pegawai` int(12) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_pegawai` varchar(35) NOT NULL,
  `jabatan_id` int(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `id_agama` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pegawai`
--

INSERT INTO `t_pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `jabatan_id`, `email`, `no_tlp`, `alamat`, `tgl_masuk`, `tmp_lahir`, `id_agama`, `gender`, `pendidikan`, `password`, `foto`) VALUES
(1, '12', 'sidiq', 1, 'sidiq@gmail.com', '121212', 'secata b', '2020-12-02', 'padang panjang', 1, '', 's3', '12334', '1'),
(2, '1711082025', 'sidiq', 1, '1@gmail.com', 'sidiq', 'secata b', '2021-06-08', 'padang', 2, 'laki laki', 'sidiq', NULL, '1711082025.jpg'),
(3, '111', 'bbubu', 1, 'bubu@gmail.com', '082170911098', 'secata b', '2020-12-02', 'padang', 1, 'laki laki', 'sma', NULL, 'foto.jpg'),
(4, '111', 'bbubu', 1, 'bubu@gmail.com', '082170911098', 'secata b', '2020-12-02', 'padang', 1, 'laki laki', 'sma', NULL, 'foto.jpg'),
(5, '2222', 'fotoselah', 1, 'foto@gmail.com', '082170911098', 'secata b', '2021-02-02', 'padang panjang', 1, 'laki laki', 'sma', NULL, 'C:\\xampp\\tmp\\phpD6E7.tmp');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(6) NOT NULL,
  `level_id` int(2) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `last_login` int(6) NOT NULL,
  `fhoto` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nip` int(30) NOT NULL,
  `nohp` int(15) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `nip`, `nohp`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'sidiq', 'dicky@gmail.com', NULL, 0, 0, '$2y$10$o32i34Ml21/j6ADCFj9AsO8Vbxvq3edBd/TfiQGTTuUez9nKpyoNS', NULL, '2021-06-29 09:42:29', '2021-06-29 09:42:29', 2),
(2, 'admin', 'admin@gmail.com', NULL, 1711082025, 821791198, '$2y$10$56rLJTpkdMwLM7O1a4ioCOzKvSCVhzjItG.WI3qJx1RqnkoPcv9w2', NULL, '2021-06-29 19:26:51', '2021-06-29 19:26:51', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `t_absensi`
--
ALTER TABLE `t_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `t_agama`
--
ALTER TABLE `t_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `t_cuti`
--
ALTER TABLE `t_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `t_informasi`
--
ALTER TABLE `t_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `t_jabatan`
--
ALTER TABLE `t_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t_absensi`
--
ALTER TABLE `t_absensi`
  MODIFY `id_absensi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_agama`
--
ALTER TABLE `t_agama`
  MODIFY `id_agama` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_cuti`
--
ALTER TABLE `t_cuti`
  MODIFY `id_cuti` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_informasi`
--
ALTER TABLE `t_informasi`
  MODIFY `id_informasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_jabatan`
--
ALTER TABLE `t_jabatan`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  MODIFY `id_pegawai` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
