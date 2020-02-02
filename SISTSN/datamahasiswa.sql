-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2020 at 04:22 PM
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
-- Database: `datamahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `alamat_sekarang` varchar(100) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `IPS1` varchar(11) DEFAULT NULL,
  `IPS2` varchar(11) DEFAULT NULL,
  `IPS3` varchar(11) DEFAULT NULL,
  `IPS4` varchar(11) DEFAULT NULL,
  `IPS5` varchar(11) DEFAULT NULL,
  `IPS6` varchar(11) DEFAULT NULL,
  `IPS7` varchar(11) DEFAULT NULL,
  `IPS8` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`ID`, `username`, `password`, `level`, `nim`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat_asal`, `alamat_sekarang`, `no_telepon`, `email`, `agama`, `fakultas`, `IPS1`, `IPS2`, `IPS3`, `IPS4`, `IPS5`, `IPS6`, `IPS7`, `IPS8`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', '17140023', 'Raden Rendi', 'Laki-Laki', 'Bandung', '1995-10-10', 'Bandung', 'Bandung', '081394034768', 'radenrendi@gmail.com', 'Islam', 'RSK', '3.62', '-', '-', '-', '-', '-', '-', '-'),
(2, 'dinna', 'c399440fe7440b7a33e8de0cdcd7f015', 'user', '17140024', 'Dinna Mariyana', 'Perempuan', 'Bandung', '1995-05-03', 'Bandung', 'Bandung', '08987805120', 'dinna@gmail.com', 'Islam', 'RKS', '3.25', '3.06', '2.97', '-', '-', '-', '-', '-'),
(5, 'yogiedika', 'e69bb9b83b55a0b1df71a50550362133', 'user', '17140025', 'Yogie Dika', 'Laki-Laki', 'Sumedang', '1995-05-09', 'Sumedang', 'Bandung', '08987805349', 'yogie@gmail.com', 'Islam', 'RPKK', '4.00', '3.73', '3.88', '3.31', '3.72', '-', '-', '-'),
(6, 'fredy', '9113207c1da37b6891004653f0d01da5', 'user', '17140026', 'Fredy Wijaya', 'Laki-Laki', 'Bandung', '1994-10-24', 'Bandung', 'Bandung', '081394037895', 'fredy@gmail.com', 'Islam', 'RSK', '3.42', '-', '-', '-', '-', '-', '-', '-'),
(7, 'yosep', '43759d1f86197328c32113e65cc3ad2c', 'user', '17140027', 'Yosep Maulana', 'Laki-Laki', 'Tasikmalaya', '1995-10-16', 'Tasikmalaya', 'Bandung', '08187684239', 'yosep@gmail.com', 'Islam', 'RPLK', '3.21', '3.52', '2.87', '-', '-', '-', '-', '-'),
(8, 'dinni', '7078aa86ed3254f034a8a3170ae8d597', 'user', '17140028', 'Dinni Mariyani', 'Perempuan', 'Sumatra', '1994-08-09', 'Sumatra', 'Banten', '08780234721', 'dinni@gmail.com', 'Islam', 'RPLK', '3.13', '3.21', '3.62', '-', '-', '-', '-', '-'),
(9, 'intan', '46a7357b0b816cb9dd56d70d2a385cfd', 'user', '17140029', 'Intan Putri', 'Perempuan', 'Bandung', '1994-03-05', 'Bandung', 'Bandung', '08780237456', 'intan@gmail.com', 'Kristen', 'RPKK', '3.41', '3.89', '3.22', '3.67', '2.97', '-', '-', '-'),
(10, 'Sinta', 'ad388556cdd6816279c1cc334c925a09', 'user', '17140030', 'Sinta Novita', 'Perempuan', 'Bandung', '1994-02-05', 'Bandung', 'Bandung', '081453728394', 'sinta@gmail.com', 'Kristen', 'RPLK', '2.78', '2.98', '3.62', '3.98', '4.00', '4.00', '4.00', '-'),
(11, 'fajar', '7bedc9fd30769590c992b8f7f23738f7', 'user', '17140031', 'Fajar Ramadan', 'Laki-Laki', 'Bandung', '1995-01-30', 'Bandung', 'Bandung', '08765738293', 'fajar@gmail.com', 'Islam', 'RKS', '2.54', '3.12', '3.56', '3.21', '2.93', '-', '-', '-'),
(13, 'darmooo', 'f62de90887c56e49ea8844b90c749c50', 'user', '17140050', 'Darmo', 'Laki-Laki', 'Jember', '2020-02-12', 'jember', 'jember', '081216976678', 'fikri@gmail.com', 'islam', 'RPLK', '3.21', '2.78', '3.41', '3.65', '4.00', '3.61', '3.48', '-'),
(14, 'fikri', '19da9ebef1ca88a6cb3ffcb997054199', 'user', '1716101330', 'Muchammad FIkri Afrizzi', 'Laki-Laki', 'Jember', '1998-09-11', 'jember', 'jember', '081216976678', 'fikri@gmail.com', 'islam', 'RPLK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
