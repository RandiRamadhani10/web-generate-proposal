-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 07:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwitansi`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `tanggalSurat` varchar(250) NOT NULL,
  `tanggalAwal` varchar(250) NOT NULL,
  `tanggalAkhir` varchar(250) NOT NULL,
  `jumlahHari` varchar(250) NOT NULL,
  `uangTransport` int(11) NOT NULL,
  `terbilangTransport` varchar(250) NOT NULL,
  `uangHarian` int(11) NOT NULL,
  `terbilangHarian` varchar(250) NOT NULL,
  `pegawaiPertama` varchar(250) NOT NULL,
  `pegawaiKedua` varchar(250) NOT NULL,
  `pegawaiKetiga` varchar(250) NOT NULL,
  `selisihHari` int(11) NOT NULL,
  `terbilangTotal` varchar(250) NOT NULL,
  `detailTujuan` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `tanggalSurat`, `tanggalAwal`, `tanggalAkhir`, `jumlahHari`, `uangTransport`, `terbilangTransport`, `uangHarian`, `terbilangHarian`, `pegawaiPertama`, `pegawaiKedua`, `pegawaiKetiga`, `selisihHari`, `terbilangTotal`, `detailTujuan`, `created_at`) VALUES
(11, '04 Juni 2022', '08 Juni 2022', '14 Juni 2022', 'satu', 123, '123', 123, '123', '3', '6', '7', 6, '123', '', '2022-06-04'),
(12, '04 Juni 2022', '04 Juni 2022', '03 Juni 2022', '123', 123, '123', 123, '123', 'Open this select menu', 'Open this select menu', 'Open this select menu', -1, '123', '', '2022-06-04'),
(13, '04 Juni 2022', '04 Juni 2022', '03 Juni 2022', '123', 123, '123', 123, '123', '4', '6', '4', -1, '123', '', '2022-06-04'),
(14, '04 Juni 2022', '11 Juni 2022', '14 Juni 2022', 'satu', 123, '123', 123, '123', '4', '4', '4', 3, '123', 'halo semua nya', '2022-06-04'),
(15, '04 Juni 2022', '11 Juni 2022', '14 Juni 2022', 'satu', 123, '123', 123, '123', '4', '6', '3', 3, '123', 'halo semua nya', '2022-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nip` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`) VALUES
(3, 'randi pandugo', '1414'),
(4, 'kevin sanjaya', '2222'),
(5, 'bagus salvadore', '4444'),
(6, 'martin madrazo', '6666'),
(7, 'monkey D luffy', '7777'),
(8, 'rangga harihari', '8787');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
