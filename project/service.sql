-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 03:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `providerregister`
--

CREATE TABLE `providerregister` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `service` text NOT NULL,
  `address` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `image` longblob NOT NULL,
  `about` varchar(200) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `providerregister`
--

INSERT INTO `providerregister` (`id`, `username`, `email`, `age`, `service`, `address`, `mobile`, `pass`, `image`, `about`, `status`) VALUES
(1, 'danso', 'obbysang51@gmail.com', 23, 'Plumber', '123343', 716787497, '$2y$10$0K/t7xU34UCxWHfZoSQizeP', 0x696d6167652f7361746563682e6a7067, 'wettweyWJUEAHh fehgwehwe', 'yes'),
(2, 'brayo', 'obbysang51@gmail.com', 23, 'Plumber', '1723', 716787497, '$2y$10$FND1WKS7Dr/rZUhx5HsAa.2', '', '', 'yes'),
(3, 'brayo', 'obbysang51@gmail.com', 23, 'Plumber', '1723', 716787497, '$2y$10$yo.Cm2uOnTwt/4.nE8EEkeM', '', '', 'yes'),
(4, 'micro33', 'obbysang51@gmail.com', 24, 'Health CheckUp', '1723', 702515358, '$2y$10$Jh.sj/VgLYf2zRAaMOKNg.6', '', '', 'yes'),
(6, 'joseph', 'obbysang251@gmail.com', 22, 'Electrician', '1723', 716787432, '$2y$10$icEnCF62efA9hifeFOLbcu/', '', '', 'yes'),
(7, 'jamal', 'jamal@gmail.com', 20, 'Tutor', '1723', 716783242, '$2y$10$rIGyeHe3bB182tnvIdGjQui', '', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `address`, `pass`, `mobile`) VALUES
(1, 'micro51', 'obbysang51@gmail.com', '5643', '5Ang2580/23!', 2147483647),
(2, 'mark', 'mark25@gmail.com', '34567', '5Mark1234/24!', 2147483647),
(3, 'john', 'john@gmail.com', '4343', '$2y$10$Kvpzuw1pYK7E8Biu9D7Ki.7', 2147483647),
(4, 'lyne', 'obbysang51@gmail.com', '1723', '$2y$10$Z594u2AI7P7ODrqgNoRASeE', 2147483647),
(5, 'mzungu', 'obbysang51@gmail.com', '1723', '$2y$10$2d1fU7tlZRKRg7Ay3j7QTe.', 2147483647),
(6, 'mala', 'obbysang51@gmail.com', '1723', '5Ang2580/23!', 2147483647),
(7, 'brian', 'brian@gmail.com', '4236437', '5Ang2580/25!', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `service` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `des` text DEFAULT NULL,
  `providerName` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `phone`, `service`, `date`, `time`, `payment`, `des`, `providerName`, `status`) VALUES
(1, 'micro51', '2147483647', 'Electrician', '2024-03-14', '21:08:00', 0.00, 'casvsgfdhgjkhkykg', 'joseph', 'Pending'),
(2, 'micro51', '2147483647', 'Tutor', '2024-03-21', '13:11:00', 0.00, 'etdshaeh', 'jamal', 'Pending'),
(3, 'brian', '2147483647', 'Electrician', '2024-03-12', '22:22:00', 0.00, 'ryewryeruti', 'joseph', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `providerregister`
--
ALTER TABLE `providerregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `providerregister`
--
ALTER TABLE `providerregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
