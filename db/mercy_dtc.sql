-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 02:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mercy_dtc`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` enum('aktif','non-aktif') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `level` enum('admin','acc','student') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nik`, `nama`, `jk`, `username`, `password`, `status`, `pekerjaan`, `dept`, `level`) VALUES
(12, '101010', 'agus', 'L', 'agus', 'agus', 'aktif', 'operator', 'apc', 'student'),
(13, '10222', 'kiki', 'P', 'kiki', 'kiki', 'non-aktif', 'operator', 'apc', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` int(11) NOT NULL,
  `id_pelajaran` varchar(20) NOT NULL,
  `nama_pel` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `images` varchar(200) NOT NULL,
  `id_pengajar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `id_pelajaran`, `nama_pel`, `deskripsi`, `images`, `id_pengajar`) VALUES
(7, 'C1', 'I.O. Criteria', 'Course ini menjelaskan tentang I.O. Criteria pada lajur produksi\r\n', '', '1333'),
(8, 'C2', 'CGIS', 'Course ini menjelaskan tentang fungsi dasar CGIS\r\n', '', '1333'),
(11, 'C3', 'CS1 Guideline', 'Course ini menjelaskan tentang CS1 pada laju produksi\r\n', 'admin_login.jpg	', '15201029'),
(12, 'C4', 'Part Khusus (Special Parts)', 'Course ini menjelaskan tentang baut dan mur khusus ...\r\n', '', '1333'),
(13, 'C5', 'Mechanical Line', 'Operasional mechanical line\r\n', '', '15201029'),
(14, 'C6', 'Pengeleman', 'Kelas ini menjelaskan tentang operasi pengeleman dalam lajur produksi\r\n', '', '1333'),
(15, 'C7', 'a', 'C&', 'query.jpg', '1333');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id` int(11) NOT NULL,
  `id_pengajar` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','acc') NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `status` enum('aktif','non-aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id`, `id_pengajar`, `nik`, `nama`, `username`, `password`, `level`, `email`, `dept`, `status`) VALUES
(1, '1333', '13333', 'pengajar', 'pengajar', 'pengajar', 'acc', 'pengajar@gmail.com', 'apc', 'aktif'),
(2, '15201029', '15201029', 'uin', 'uin', 'uin', 'acc', 'masruhin15201029@gmail.com', 'apc', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` enum('aktif','non-aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_user`, `username`, `password`, `pekerjaan`, `status`) VALUES
(9, '1234567', 'uin', 'asd', ' assd', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
