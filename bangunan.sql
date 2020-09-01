-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 07:58 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangunan`
--

CREATE TABLE `bangunan` (
  `bangunan_id` int(11) NOT NULL,
  `bangunan_nama` varchar(100) NOT NULL,
  `bangunan_long` float NOT NULL,
  `bangunan_lat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bangunan`
--

INSERT INTO `bangunan` (`bangunan_id`, `bangunan_nama`, `bangunan_long`, `bangunan_lat`) VALUES
(1, 'Masjid Jami Awwalulssalikin', -6.58708, 106.822),
(4, 'Masjid Raya Al-Muttaqin', -6.5851, 106.817),
(5, 'Masjid Raya Kota Bogor', -6.60691, 106.809),
(6, 'Masjid Nurul Maa\'i', -6.62075, 106.816),
(7, 'Masjid Jami Al Juman', -6.61153, 106.802),
(8, 'Masjid Jami Al Askariyyah', -6.61226, 106.801),
(9, 'Masjid Jenderal Besar Soedirman', -6.58481, 106.797),
(10, 'Masjid Baranangsiang 3', -6.6006, 106.81),
(11, 'Masjid Nur Al-Barru', -6.58654, 106.811),
(12, 'Masjid Jami Asy-syifaurrohmah Yonkes-1 Kostrad', -6.53302, 106.821),
(13, 'Masjid Ar-Rahman', -6.53888, 106.82),
(14, 'Masjid Empang Raya Bogor', -6.60762, 106.795),
(15, 'Masjid Kramat An Nur Empang Bogor', -6.60875, 106.796),
(16, 'Masjid Jami Nurun Najah', -6.63019, 106.807),
(17, 'Masjid Jami Al-Furqon', -6.64141, 106.808),
(18, 'Masjid Jami Nurul Muttaq\'i', -6.65587, 106.792),
(19, 'Masjid Al-Ikhlas', -6.58146, 106.822),
(20, 'Masjid Al-Barokah', -6.62221, 106.814),
(21, 'Masjid Al-Ikhlas', -6.59497, 106.794);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangunan`
--
ALTER TABLE `bangunan`
  ADD PRIMARY KEY (`bangunan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangunan`
--
ALTER TABLE `bangunan`
  MODIFY `bangunan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
