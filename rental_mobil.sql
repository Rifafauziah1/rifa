-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 04:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `nopol` varchar(20) NOT NULL,
  `merk_mobil` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(20) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` int(20) NOT NULL,
  `nopol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_admin` int(20) NOT NULL,
  `id_pelanggan` int(20) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `tgl_sewa` int(20) NOT NULL,
  `tgl_kembali` int(20) NOT NULL,
  `lama_pinjam` int(20) NOT NULL,
  `denda` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`nopol`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `nopol` (`nopol`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `nopol` (`nopol`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`nopol`) REFERENCES `mobil` (`nopol`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`nopol`) REFERENCES `mobil` (`nopol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
