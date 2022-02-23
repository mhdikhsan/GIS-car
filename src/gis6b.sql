-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 03:33 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis6b`
--

-- --------------------------------------------------------

--
-- Table structure for table `obyek`
--

CREATE TABLE `obyek` (
  `obyek_id` int(11) NOT NULL,
  `obyek_nama` varchar(50) NOT NULL,
  `obyek_telp` varchar(20) NOT NULL,
  `obyek_alamat` varchar(100) NOT NULL,
  `obyek_latitude` decimal(8,6) NOT NULL,
  `obyek_longitude` decimal(9,6) NOT NULL,
  `obyek_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obyek`
--

INSERT INTO `obyek` (`obyek_id`, `obyek_nama`, `obyek_telp`, `obyek_alamat`, `obyek_latitude`, `obyek_longitude`, `obyek_foto`) VALUES
(3, 'Kursus Stir Mobil Kembar Sentosa', '0813 6568 8921', 'JL. HR. Soebrantas Panam No.365, Tuah Karya, Tampan, Kota Pekanbaru, Riau 28293 ', '0.464177', '101.373563', '989421.jpg'),
(4, 'Kursus Mengemudi DUTA', '0812 7606 8908', 'JL. HR. Soebrantas Panam, Delima, Pekanbaru, Kota Pekanbaru, Riau 28293', '0.464220', '101.400814', '523640.jpg'),
(5, 'Kursus Stir Mobil Duta', '0761 41329', 'Jl. Cempaka, No. 118, Sukajadi, Padang Bulan, Senapelan, Kota Pekanbaru, Riau 28156', '0.528609', '101.438338', '917198.jpg'),
(6, 'Kursus Mengemudi Nasionak', '0853 5510 6777', 'Jl. Jend. Ahmad Yani no. 75a, Tanah Daftar, Pekanbaru Kota, Kota Pekanbaru, Riau 28156', '0.521400', '101.442973', '280414.jpg'),
(7, 'Deha', '0812 7513 002', 'Jl. Durian, Kedungsari Sukajadi, Kota Pekanbaru, Riau 28122', '0.516937', '101.431729', '785432.jpg'),
(8, 'Kursus Stir Mobil Saudara', '0761 7049658', 'Jl. HR. Soebrantas Panam, Sidomulyo Bar, Tampan, Kota Pekanbaru, Riau 28294', '0.463907', '101.400628', '769579.jpg'),
(9, 'Kursus Stir Mobil Riau Jaya', '0812 6886 7894', 'Mahartu, Marpoyan Damai, Kota Pekanbaru, Riau 28288', '0.461177', '101.451744', '579858.jpg'),
(10, 'Eka Jaya Kursus Stir Mobil', '0812 8989 2118', 'Jl. Arifin Ahmad No.90 , Tengkerang Tengah, Marpoyan Damai, Kota Pekanbaru, Riau 28125', '0.481523', '101.437901', '738787.jpg'),
(11, 'Belajar Mengemudi Smart', '0813 7855 7878', 'Jl. Kaharuddin Nst, Simpang Tiga, Bukit Raya, Kota Pekanbaru, Riau 28288', '0.450665', '101.452299', '751256.jpg'),
(12, 'Kursus Stir Mobil Mandiri', '0761 8333359', 'Jl. Hangtuah Ujung, Rintis, LimaPuluhm Kota Pekanbaru , Riau 28156', '0.525381', '101.458443', '346540.jpg'),
(13, 'Kembar Sentosa', '0813 6542 9303', 'JL. H. Imam Munandar, No. 15, Tangkerang Tim, Tenayan Raya, Kota Pekanbaru, Riau 28131', '0.495708', '101.499850', '734854.jpg'),
(14, 'Riau Jaya', '0761 7786371', 'Jl. Kaharuddin Nst No.91 , Maharatu, Marpoyan Damai, Kota Pekanbaru, Riau 28284', '0.446096', '101.450210', '712812.jpg'),
(15, 'Kursus Stir Mobil', '0761 45933', 'J. KH. Ahmad Dahlan No. 111, Sukajadi, Kota Pekanbaru, Riau 28156', '0.518524', '101.437767', '729671.jpg'),
(16, 'Saudara', '0813 6572  2332', 'Jl. Riau No.76, Kp. Bandar, Senapelanm Kota Pekanbaru, Riau 28155', '0.535489', '101.438266', '553730.jpg'),
(17, 'Kursus Stir Mobil', '0813 7608 2198', 'Jl. Kapling , Tengkerang Utara, Bukit Raya, Kota Pekanbaru, Riau 28126', '0.500861', '101.462253', '50785.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obyek`
--
ALTER TABLE `obyek`
  ADD PRIMARY KEY (`obyek_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obyek`
--
ALTER TABLE `obyek`
  MODIFY `obyek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
