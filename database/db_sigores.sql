-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 07:17 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sigores`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(70) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `foto`) VALUES
(8, 'admin', '7488e331b8b64e5794da3fa4eb10ad5d', 'Profil.jpg'),
(9, 'staff', 'staff', ''),
(10, 'manager', '0795151defba7a4b5dfa89170de46277', 'Profil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grc`
--

CREATE TABLE `tb_grc` (
  `id` int(11) NOT NULL,
  `no_reg` varchar(20) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `rencana_kembali` varchar(50) NOT NULL,
  `pr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_grc`
--

INSERT INTO `tb_grc` (`id`, `no_reg`, `nm_barang`, `ukuran`, `jumlah`, `ket`, `alasan`, `tujuan`, `rencana_kembali`, `pr`) VALUES
(2, 'SRM-2001/GRC/2020', 'Fingerprint Hikvision. S/N : ABC', 'Unit', 5, 'Pergantian Unit Baru', 'Pergantian Unit Baru', 'Yogyakarta', '10 Januari 2020', 'Mr. Jeprys Siahaan'),
(4, 'SWH-002/GRC/2019', 'Toner Cartridge EP 303 Original', 'Unit', 250, 'Refill cartidges ke PT. Logika Baru', 'Refill cartidges ke PT. Logika Baru', 'Tebing Tinggi', '10 Januari 2020', 'Mr. Agung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grc_accept`
--

CREATE TABLE `tb_grc_accept` (
  `id` int(11) NOT NULL,
  `no_reg` varchar(20) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `rencana_kembali` varchar(50) NOT NULL,
  `pr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_grc_accept`
--

INSERT INTO `tb_grc_accept` (`id`, `no_reg`, `nm_barang`, `ukuran`, `jumlah`, `ket`, `alasan`, `tujuan`, `rencana_kembali`, `pr`) VALUES
(25, 'SIT-122/GRC/2019', 'Printer Cannon IP 2700. S/N : HSF', 'Unit', 1, 'Reset Printer and cleaning', 'Telah selesai diperbaiki', 'IPP-PAS', '-', 'Mr. Rizki Chairullah'),
(31, 'SMO-121390F9', 'Aluminium Alloy', 'Ton', 10, 'Distribusi', '', 'Surabaya', '-', 'Mr. Jeprys Siahaan'),
(33, 'SIT-117/GRC/2019', 'Notebook HP Pro Book 430 G5. S/N : XYZ', 'Unit', 1, 'Perbaikan ke service center HP Jakarta', 'Perbaikan Laptop', 'Services Center HP Jakarta', '16 September 2019', 'Mr. Agung'),
(34, 'SIT-104/GRC/2019', 'Brother Scanner', 'Unit', 1, 'Pemindahan Barang', 'Pemindahan Barang', 'IPP', '14 Desember 2019', 'Mr. Mawan Ermansyah'),
(35, 'SIT-100/GRC/2020', 'Printer Epson L3110. S/N : XZY', 'Unit', 3, 'Perbaikan ke PT. Logikreasi', 'Perbaikan ke PT. Logikreasi', 'Jakarta', '-', 'Mrs. Sri Devika P. Hrp'),
(36, 'SPO-122/GRC/2019', 'Epson mini printer serial TMU', 'Unit', 4, 'Perbaikan ke PT. Logikreasi', 'Perbaikan ke PT. Logikreasi', 'Medan', '02 Desember 2019', 'Mr. Rizki Chairullah'),
(37, 'SIT-231/GRC/2020', 'Fingerprint Hikvision. S/N : ASDF', 'Unit', 3, 'Pemasangan fingerprint di IJO', 'Pemasangan fingerprint di IJO', 'Perumahan Tanjung Gading', '-', 'Mrs. Sri Devika P. H'),
(38, 'SCA-920/GRC/2020', 'Vicon Logitech S/N:ZXC', 'Unit', 1, 'Perbaikan ke Service Center', 'Perbaikan ke Service Center', 'Jakarta', '10 Januari 2020', 'Mr. Mawan Ermansyah'),
(39, 'SIT-234/GRC/2020', 'Printer Epson L3110. S/N : QWERTY', 'Unit', 2, 'Request seksi PCD', 'Request seksi PCD ', 'PCD-IPP Paritohan', '-', 'Mrs. Sri Devika P. H'),
(40, 'SFN-332/GRC/2020', 'Brother Scanner', 'Unit', 1, 'Pemindahan Barang', 'Pemindahan Barang', 'IPP Paritohan', '-', 'Mr. Mawan Irwansyah'),
(41, 'SIT-222/GRC/2019', 'Fotocopy Cannon S/N:JKL', 'Unit', 1, 'Request dari IPP Paritohan', 'Request dari IPP Paritohan', 'IPP Paritohan', '-', 'Mr. Agung'),
(42, 'SMT-123/GRC/2019', 'Turbin Water', 'Unit', 1, 'Perbaikan Turbin', 'Perbaikan Turbin', 'Japan', '01 Agustus 2020', 'Mrs. Sri Devika P. H');

-- --------------------------------------------------------

--
-- Table structure for table `tb_manager`
--

CREATE TABLE `tb_manager` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ssc`
--

CREATE TABLE `tb_ssc` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id` int(11) NOT NULL,
  `nik` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(1, 'admin', 'admin', 'admin123', 'admin', 'man-icon-manager-symbol-in-flat-style-round-vector-9469689.jpg'),
(2, 'staff', 'staff', 'staff123', 'staff', 'profil.png'),
(3, 'manager', 'manager', 'manager123', 'manager', 'Profil.jpg'),
(4, 'security', 'ssc', 'ssc123', 'ssc', 'ssc.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_grc`
--
ALTER TABLE `tb_grc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_reg` (`no_reg`);

--
-- Indexes for table `tb_grc_accept`
--
ALTER TABLE `tb_grc_accept`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_reg` (`no_reg`);

--
-- Indexes for table `tb_manager`
--
ALTER TABLE `tb_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ssc`
--
ALTER TABLE `tb_ssc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_grc`
--
ALTER TABLE `tb_grc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_grc_accept`
--
ALTER TABLE `tb_grc_accept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_manager`
--
ALTER TABLE `tb_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ssc`
--
ALTER TABLE `tb_ssc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
