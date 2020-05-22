-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 05:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel7`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id_iklan` int(10) UNSIGNED NOT NULL,
  `nama_iklan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_iklan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_iklan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id_iklan`, `nama_iklan`, `deskripsi_iklan`, `biaya_iklan`) VALUES
(1234, 'Telkomsel', 'Penggunaan murah', 'Rp 10.000');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TTL` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `nama_pelanggan`, `TTL`, `Alamat`, `Email`) VALUES
(123, 'Ardi Kusuma', 'Surabaya, 2 Desember 1999', 'Surabaya', 'ardi@gmail.com'),
(124, 'Fachrul Crisna', 'Kediri, 28 Januari 2000', 'Surabaya', 'fahrul@gmail.com'),
(125, 'Dini Permata', 'Jombang, 16 Desember 1996', 'Surabaya', 'dini@gmail.com');

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
(3, '2020_05_17_134718_create_customers_table', 1),
(4, '2020_05_17_135204_create_users_table', 1),
(5, '2020_05_18_182948_create_musicians_table', 2),
(6, '2020_05_19_180530_create_advertisements_table', 3),
(7, '2020_05_20_125803_create_users_table', 4),
(8, '2020_05_20_141328_create_users_table', 5),
(9, '2020_05_20_144048_create_users_table', 6),
(10, '2020_05_20_174114_create_profils_table', 7),
(11, '2020_05_21_070435_create_offices_table', 8),
(12, '2020_05_21_130720_create_transactions_table', 9),
(13, '2020_05_21_133005_create_transactions_table', 10),
(14, '2020_05_21_133458_create_transactions_table', 11),
(15, '2020_05_21_144552_create_reports_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `musicians`
--

CREATE TABLE `musicians` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pemusik` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TTL` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `musicians`
--

INSERT INTO `musicians` (`id`, `nama_pemusik`, `TTL`, `Alamat`, `Email`) VALUES
(1, 'Haniv Dika', 'Yogyakarta, 5 Desember 1997', 'Surabaya', 'haniv@gmail.com'),
(2, 'Lutfi Chandra', 'Jakarta, 2 Januari 2000', 'Surabaya', 'lutfi@gmail.com'),
(3, 'Dara Sita', 'Mojokerto, 20 Maret 1996', 'Surabaya', 'dara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id_pemusik` int(10) UNSIGNED NOT NULL,
  `nama_pemusik` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TTL` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rekening` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id_pemusik`, `nama_pemusik`, `TTL`, `Alamat`, `Email`, `nomor_rekening`, `password`) VALUES
(1, 'Haniv Dika', 'Yogyakarta, 5 Desember 1997', 'Surabaya', 'haniv@gmail.com', '1342******', '596c09a4f61e459240a8e8c9ff7b7c0d');

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id_saya` int(10) UNSIGNED NOT NULL,
  `nama_saya` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TTL` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rekening` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id_saya`, `nama_saya`, `TTL`, `Alamat`, `Email`, `nomor_rekening`) VALUES
(124, 'Fahrul Crisna', 'Kediri, 28 Januari 2000', 'Surabaya', 'fahrul@gmail.com', '1234******');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id_laporan` int(10) UNSIGNED NOT NULL,
  `nama_laporan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_laporan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_laporan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_laporan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id_laporan`, `nama_laporan`, `jenis_laporan`, `status_laporan`, `total_laporan`) VALUES
(1, 'Haniv Dika', 'Pemusik', 'Sudah Terbayarkan', '10.000'),
(2, 'Lutfi Chandra', 'Pemusik', 'Sudah Terbayarkan', '10.000'),
(3, 'Dara Sita', 'Pemusik', 'Sudah Terbayarkan', '10.000'),
(123, 'Ardi Kusuma', 'Pelanggan', 'Sudah Membayar', '10.000'),
(124, 'Fahrul Crisna', 'Pelanggan', 'Sudah Membayar', '10.000'),
(125, 'Dini Permata', 'Pelanggan', 'Sudah Membayar', '10.000'),
(1234, 'Telkomsel', 'Iklan', 'Sudah Terbayarkan', '10.000');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id_transaksi` int(10) UNSIGNED NOT NULL,
  `nama_orang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_transaksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_transaksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_transaksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id_transaksi`, `nama_orang`, `jenis_transaksi`, `status_transaksi`, `total_transaksi`) VALUES
(1, 'Haniv Dika', 'Pemusik', 'Sudah Terbayarkan', '10.000'),
(2, 'Lutfi Chandra', 'Pemusik', 'Sudah Terbayarkan', '10.000'),
(3, 'Dara Sita', 'Pemusik', 'Sudah Terbayarkan', '10.000'),
(123, 'Ardi Kusuma', 'Pelanggan', 'Sudah Membayar', '10.000'),
(124, 'Fahrul Crisna', 'Pelanggan', 'Sudah Membayar', '10.000'),
(125, 'Dini Permata', 'Pelanggan', 'Sudah Membayar', '10.000'),
(1234, 'Telkomsel', 'Iklan', 'Sudah Terbayarkan', '10.000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `level`, `password`) VALUES
(1, 'Haniv Dika', 'Haniv', '3', '596c09a4f61e459240a8e8c9ff7b7c0d'),
(124, 'Fahrul Crisna', 'Fahrul', '2', '9b5317575f071bdccef2175b72191004'),
(321, 'Ravita', 'admin', '1', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musicians`
--
ALTER TABLE `musicians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id_pemusik`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id_saya`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id_iklan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `musicians`
--
ALTER TABLE `musicians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id_pemusik` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id_saya` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id_laporan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
