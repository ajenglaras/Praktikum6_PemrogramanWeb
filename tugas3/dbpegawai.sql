-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 12:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `departemen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nama`, `no_telp`, `alamat`, `departemen`) VALUES
(101, 'Ajeng Laras Wangi', '082257364033', 'Lamongan', 'Marketing'),
(102, 'Nathania Neysa', '082256341907', 'Sidoarjo', 'Produktion'),
(103, 'Nindy Ayu Nuryuniaida', '083145769087', 'Lampung', 'Promotion'),
(104, 'Kadek Dwi Natasya Pradnyani', '087614569255', 'Bali', 'Distribution'),
(105, 'Tri Diana Rimadhani', '087542539008', 'Tuban', 'Marketing'),
(106, 'Anggi Anggraeni Nugraha', '082267859910', 'Kediri', 'Distribution');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
