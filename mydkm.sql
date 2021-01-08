-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 10:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nominal` int(255) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `bulan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`id`, `keterangan`, `nominal`, `tanggal`, `bulan`) VALUES
(20, 'Kotak amal', 600000, '2020/11/29', 'November'),
(21, 'Zakat maal', 200000, '2020/11/29', 'November'),
(22, 'Zakat fitrah', 560000, '2020/11/29', 'November'),
(23, 'Zakat pribadi', 550000, '09/10/2020', 'Oktober');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nominal` int(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `bulan` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `keterangan`, `nominal`, `tanggal`, `bulan`) VALUES
(1, 'fakir', 400000, '2020/11/29', 'November'),
(2, 'Konsumsi maulid', 230000, '2020/11/29', 'November'),
(3, 'Yatim', 350000, '2020/10/13', 'Oktober');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` enum('dkm','jemaah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `email`, `password`, `level`) VALUES
(4, 'DKM Masjid At-taqwa', 'dkm', 'dkm@gmail.com', 'dkm123', 'dkm'),
(5, 'Jemaah Masjid At-taqwa', 'jemaah', 'jemaah@gmail.com', 'jemaah123', 'jemaah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
