-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2019 at 05:31 AM
-- Server version: 8.0.17
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
-- Database: `otakstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `handphone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pesan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `alamat`, `email`, `handphone`, `username`, `password`, `pesan`, `level`, `status`) VALUES
(1, '', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 0, 0),
(13, 'Randy Efan Jayaputra', 'Entrop', 'randyrandyrej8@gmail.com', '082222214905', 'randyefan', '345f321bfb7efa30ccd6d6fe043d0adc', 'cv kurang lengkap, kurang riwayat hidup', 1, 4),
(14, 'Randi Nasrullah', 'Kaliurang', 'randikamang@yahoo.com', '0811488119', 'kamang', '9c12761905d006da21292f566cbeadff', NULL, 1, 3),
(19, 'Amar Tukuwain', 'Jalan Kapten', 'amar@gmail.com', '089797997979', 'amar', '69b03793a01b14423c92c74e3a378d9a', NULL, 1, 3),
(20, 'Hendry Wibowo', 'Jalan Kaliurang', 'patok@gmail.com', '088888888', 'patok', '00015ca80b73907f6b20c253890a9a4f', NULL, 1, 1),
(21, 'kams', 'Jalan Kapten', 'kams@gmail.com', '082222222222222', 'kamangs', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_otakstudio`
--

CREATE TABLE `tb_otakstudio` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `peminatan` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `cv` longblob NOT NULL,
  `surat` longblob NOT NULL,
  `idpengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_otakstudio`
--

INSERT INTO `tb_otakstudio` (`id`, `tanggal`, `peminatan`, `keterangan`, `cv`, `surat`, `idpengguna`) VALUES
(29, '2019-11-20', 'Game', 'yayaya', 0x73757261745f616b7469662e706466, 0x73757261745f7065726e79617461616e5f70656d61696e2e706466, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_otakstudio`
--
ALTER TABLE `tb_otakstudio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpengguna` (`idpengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_otakstudio`
--
ALTER TABLE `tb_otakstudio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_otakstudio`
--
ALTER TABLE `tb_otakstudio`
  ADD CONSTRAINT `idpengguna` FOREIGN KEY (`idpengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
