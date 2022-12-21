-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 07:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `blood_available` varchar(50) NOT NULL,
  `blood_number` int(4) NOT NULL,
  `donor_name` varchar(50) NOT NULL,
  `donor_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `blood_available`, `blood_number`, `donor_name`, `donor_number`) VALUES
(9, 'A+', 3, 'Adib', 1767739907),
(10, 'O+', 2, 'Protik', 1767739908),
(11, 'O+', 11, 'mim', 1767739907),
(12, 'A+', 7, 'Adib', 1767739909),
(13, 'O+', 1, 'forkan', 1767739908),
(15, 'B+', 2, 'rupom', 1767739908);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `num` bigint(15) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `blood_available` varchar(3) CHARACTER SET latin1 NOT NULL,
  `blood_number` int(4) NOT NULL,
  `donor_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `donor_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `num`, `password`, `blood_available`, `blood_number`, `donor_name`, `donor_number`) VALUES
(45, 'adib', 1767739907, '81dc9bdb52d04dc20036dbd8313ed055', '', 0, '', 0),
(46, 'rupom', 1767739907, '81dc9bdb52d04dc20036dbd8313ed055', '', 0, '', 0),
(47, 'adiba', 1767739900, '81dc9bdb52d04dc20036dbd8313ed055', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `num` bigint(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `username`, `num`, `password`) VALUES
(3, 'mim', 1767739901, '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'cc', 1767739900, '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'mim', 1767739902, '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'mim', 1767739900, '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'mim', 1767739900, '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'saitama', 1767739900, '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'dd', 1767739907, '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
