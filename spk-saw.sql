-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 03:20 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat`, `no_hp`, `username`, `password`) VALUES
(2, 'Upi Mariani', 'Kuningan, Jawa Barat', '089765678767', 'upi', 'mariani');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_saw`
--

CREATE TABLE `hasil_saw` (
  `id_hasil` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `penghasilan` varchar(20) NOT NULL,
  `kondisi_rumah` varchar(15) NOT NULL,
  `hasil` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_saw`
--

INSERT INTO `hasil_saw` (`id_hasil`, `id_penduduk`, `id_admin`, `penghasilan`, `kondisi_rumah`, `hasil`) VALUES
(1, 1, 2, '2', '3', '12.625'),
(2, 2, 2, '1', '1', '5.375'),
(3, 3, 2, '3', '3', '17.125'),
(4, 4, 2, '2', '2', '13.75'),
(5, 5, 2, '1', '2', '8.25'),
(6, 6, 2, '2', '3', '12.625'),
(7, 7, 2, '2', '2', '12.75'),
(8, 8, 2, '2', '2', '10.75'),
(9, 9, 2, '1', '1', '7.375'),
(10, 10, 2, '2', '2', '12.75'),
(11, 11, 2, '2', '1', '9.875');

-- --------------------------------------------------------

--
-- Table structure for table `kependudukan`
--

CREATE TABLE `kependudukan` (
  `id_penduduk` int(11) NOT NULL,
  `no_kk` varchar(125) NOT NULL,
  `nama_kk` varchar(125) NOT NULL,
  `nama_ibu` varchar(125) NOT NULL,
  `jumlah_anak` int(20) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kependudukan`
--

INSERT INTO `kependudukan` (`id_penduduk`, `no_kk`, `nama_kk`, `nama_ibu`, `jumlah_anak`, `rt`, `rw`, `alamat`) VALUES
(1, '3209876778656787', 'Maman Darisman', 'Ela Kartika', 2, '03', '03', 'Link. Kramat Jaya'),
(2, '3203345532165454', 'Damar Ahmad', 'Mimin Asih', 1, '05', '04', 'Link Lingga Harapan'),
(3, '3208811144445675', 'Saheri Mamun', 'Munah ', 4, '08', '05', 'Link. Lingga Kamuning'),
(4, '3209887665455345', 'Waheru Salim', 'Eti Darmi', 6, '02', '01', 'Link. Lingga Harapan'),
(5, '3208986775434454', 'Didin Suheri', 'Siti Fatimah', 2, '03', '02', 'Link Lingga Harapan'),
(6, '3209876744567744', 'Dedi Juhari', 'Mimin', 2, '06', '04', 'Link. Lingga Kamuning'),
(7, '3208988773214565', 'Mahmud Junari', 'Eti', 4, '01', '01', 'Link. Lingga Kamuning'),
(8, '3209878988767856', 'Dani Maulana', 'Sholeha', 2, '06', '02', 'Link. Kramat Jaya'),
(9, '3209878990900989', 'Iman Maulana', 'Enjum', 3, '06', '03', 'Link Lingga Harapan'),
(10, '3208990987889090', 'Adit Fazriana', 'Fajri Heni', 4, '08', '05', 'Link. Lingga Kamuning'),
(11, '3209890098978654', 'Rozaqi', 'Eli ', 3, '08', '03', 'Link. Kramat Jaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `hasil_saw`
--
ALTER TABLE `hasil_saw`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `kependudukan`
--
ALTER TABLE `kependudukan`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hasil_saw`
--
ALTER TABLE `hasil_saw`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kependudukan`
--
ALTER TABLE `kependudukan`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
