-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 02:25 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `count`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_caleg`
--

CREATE TABLE `tb_caleg` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_partai` int(10) NOT NULL,
  `earned_vote` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_caleg`
--

INSERT INTO `tb_caleg` (`id`, `name`, `id_partai`, `earned_vote`) VALUES
(1, 'sera', 2, '100'),
(2, 'Dobleh', 1, '99');

-- --------------------------------------------------------

--
-- Table structure for table `tb_partai`
--

CREATE TABLE `tb_partai` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_partai`
--

INSERT INTO `tb_partai` (`id`, `Name`) VALUES
(1, 'Cilacap Santai'),
(2, 'Cilacap Sejahtera'),
(3, 'Cilacap Aman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_caleg`
--
ALTER TABLE `tb_caleg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_partai` (`id_partai`);

--
-- Indexes for table `tb_partai`
--
ALTER TABLE `tb_partai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_caleg`
--
ALTER TABLE `tb_caleg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_caleg`
--
ALTER TABLE `tb_caleg`
  ADD CONSTRAINT `tb_caleg_ibfk_1` FOREIGN KEY (`id_partai`) REFERENCES `tb_partai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
