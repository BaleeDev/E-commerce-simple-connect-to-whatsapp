-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2020 at 04:09 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13888746_db_toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `dsc` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `nama_barang`, `harga`, `kategori`, `dsc`, `img`) VALUES
(1, 'baju kaos', 45000, 'Baju', 'aaa', 'baju.jpg'),
(2, 'Baju Distro', 45000, 'Baju', 'aaaa', 'bajublck.jpg'),
(3, 'Baju Distro Otsky', 45000, 'Baju', 'bbb', 'bajuotsky.jpg'),
(4, 'Jam Cowok', 45000, 'Aksesoris Lainnya', 'mmm', 'jam.jpeg'),
(5, 'Case Costum', 30000, 'Aksesoris Hp', 'bb', 'casehp.jpg'),
(6, 'Kaos Kaki', 10000, 'Aksesoris Lainnya', 'vvv', 'kaoskaki.jpeg'),
(7, 'NrGlow', 20000, 'MakeUp', 'lll', 'Nrglow.jpeg'),
(8, 'Baju Polos', 30000, 'Baju', 'aaa', 'bajupolos.jpeg'),
(9, 'Jam Cowok2', 30000, 'Aksesoris Lainnya', 'aa', 'jam.jpeg'),
(10, 'Baju6', 40000, 'Baju', 'Aaa', 'images.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Nama_Lengkap` varchar(100) NOT NULL,
  `level` enum('Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `Username`, `Password`, `Nama_Lengkap`, `level`) VALUES
(1, 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin Pertama', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
