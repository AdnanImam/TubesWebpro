-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2017 at 04:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `televent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(35) NOT NULL,
  `pass_admin` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `pass_admin`) VALUES
(1, 'televent', 'televent');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(11) NOT NULL,
  `nama_cust` varchar(35) NOT NULL,
  `email_cust` varchar(35) NOT NULL,
  `notelp_cust` int(12) NOT NULL,
  `username_cust` varchar(35) NOT NULL,
  `pass_cust` varchar(35) NOT NULL,
  `pass_cust2` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_cust`, `email_cust`, `notelp_cust`, `username_cust`, `pass_cust`, `pass_cust2`) VALUES
(3, 'sf', 'ad', 123, 'aa', 'a', 'aaa'),
(4, 'aqsq', 'aS', 1, 'AA', 'AA', 'AA'),
(5, 'ada', 'as', 123, 'sayang', 'apa', 'apa'),
(6, 'khaeruzzahra', 'khaeruzzahra97@gmail.com', 2147483647, 'zahra', 'pamda', 'pamda');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(35) NOT NULL,
  `lokasi_event` varchar(35) NOT NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(7) NOT NULL,
  `pukul` time NOT NULL,
  `deskripsi` longtext NOT NULL,
  `cp` varchar(12) NOT NULL,
  `penyelenggara` varchar(35) NOT NULL,
  `gambar` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `lokasi_event`, `tanggal`, `hari`, `pukul`, `deskripsi`, `cp`, `penyelenggara`, `gambar`) VALUES
(2, 'Forum Perempuan', 'GSG, Telkom Unniversity', '2017-05-04', 'Kamis', '13:48:00', 'sebagai bentuk perayaan hari kartini dan apresiasi kepada wanita wanita tangguh yang ada di D3 Teknik Informatika', '082132123452', 'HIMADIF', ''),
(3, 'NI HON NO MATSURI', 'TUCH Telkom University', '2017-04-25', 'Selasa', '18:30:00', 'Acara Perhelatan kebudayaan Jepang', '081201082444', 'UKM JEPANG', ''),
(4, 'Dies Natalis Himadif', 'GSG, Telkom University', '2017-05-17', 'sabtu', '19:27:00', 'sebagai malm puncak perayaan Ulang tahun Himadif, Prodi D3 Teknik Infomatika', '081213456712', 'HIMADIF', '');

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `id_memesan` int(11) NOT NULL,
  `tgl_memesan` date NOT NULL,
  `id_cust` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
  ADD PRIMARY KEY (`id_memesan`),
  ADD KEY `id_cust` (`id_cust`),
  ADD KEY `id_event` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `memesan`
--
ALTER TABLE `memesan`
  MODIFY `id_memesan` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `memesan`
--
ALTER TABLE `memesan`
  ADD CONSTRAINT `memesan_ibfk_1` FOREIGN KEY (`id_cust`) REFERENCES `customer` (`id_cust`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memesan_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
