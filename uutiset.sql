-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 10:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `uutiset`
--

CREATE TABLE `uutiset` (
  `tunniste` int(11) NOT NULL,
  `aika` datetime NOT NULL,
  `otsikko` varchar(100) NOT NULL,
  `leipateksti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uutiset`
--

INSERT INTO `uutiset` (`tunniste`, `aika`, `otsikko`, `leipateksti`) VALUES
(1, '2022-09-08 10:57:32', 'Uusi terveydenhoitaja', 'Terveydenhoitaja Pekka Ilmanen jatkaa 5.9.2022 alkaen.'),
(2, '2022-09-07 08:58:49', 'Uusintakokeet', 'Ensi viikon uusinnat:\r\n\r\nMaanantai klo 14:00\r\nTorstai klo 11:00\r\nPerjantai klo 11:00'),
(3, '2022-08-24 14:29:21', 'Koulun palvelin pois käytöstä', 'Koulun palvelin sammutetaan 6.9.2022, muistakaa tallentaa työt!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uutiset`
--
ALTER TABLE `uutiset`
  ADD PRIMARY KEY (`tunniste`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uutiset`
--
ALTER TABLE `uutiset`
  MODIFY `tunniste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
