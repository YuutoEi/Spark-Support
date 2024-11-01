-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2024 at 08:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `Email` text NOT NULL,
  `JenjangPendidikan` text NOT NULL,
  `JenisKelamin` text NOT NULL,
  `Menemukan1` text NOT NULL,
  `Menemukan2` text NOT NULL,
  `Menemukan3` text NOT NULL,
  `Menemukan4` text NOT NULL,
  `Pertanyaan1` text NOT NULL,
  `Pertanyaan2` text NOT NULL,
  `Pertanyaan3` text NOT NULL,
  `Pertanyaan4` text NOT NULL,
  `Saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `Nama`, `Email`, `JenjangPendidikan`, `JenisKelamin`, `Menemukan1`, `Menemukan2`, `Menemukan3`, `Menemukan4`, `Pertanyaan1`, `Pertanyaan2`, `Pertanyaan3`, `Pertanyaan4`, `Saran`) VALUES
(11, 'Ei', 'Ei@gmail.com', 'sd', 'laki-laki', '', 'Keluarga', '', '', 's-puas', 'b-aja', 'st-puas', 'st-puas', 'Halo kawan ayo kitasemua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
