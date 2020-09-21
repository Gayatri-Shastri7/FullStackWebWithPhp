-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2020 at 07:50 AM
-- Server version: 10.3.22-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stpadmin_save_the_paws_team`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(7, 'Board Of Directors'),
(8, 'Core Teams'),
(9, 'Web Developers');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(100) NOT NULL,
  `member_id` int(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `facebook` varchar(255) DEFAULT 'javascript:void(0)',
  `twitter` varchar(255) DEFAULT 'javascript:void(0)',
  `instagram` varchar(255) DEFAULT 'javascript:void(0)',
  `linkedin` varchar(255) DEFAULT 'javascript:void(0)',
  `pic` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `member_id`, `name`, `designation`, `category`, `description`, `facebook`, `twitter`, `instagram`, `linkedin`, `pic`) VALUES
(23, 1, 'Manju Malhotra', 'Secretary', 'Board Of Directors', '', 'https://instagram.com', 'https://instagram.com', 'https://instagram.com', 'https://instagram.com', 'members/1/i3PwljY.jpg'),
(25, 3, 'Vinay Malhotra', 'Treasurer', 'Board Of Directors', '', 'https://instagram.com', 'https://instagram.com', 'https://instagram.com', 'https://instagram.com', 'members/3/mgInKnl.jpg'),
(27, 4, 'Sachin kumar', '', 'Web Developers', '', 'https://facebook.com/sachinsheraa', 'https://twitter.com/sachinsheraa', 'https://instagram.com/sachinsheraa', 'https://linkedin.com/sachinsheraa', 'members/4/sachin_pic.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
