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
-- Database: `stpadmin_save_the_paws_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `event_id` int(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_id`, `name`, `location`, `type`, `description`, `start_date`, `end_date`, `start_time`, `end_time`, `thumb`, `banner`) VALUES
(55, 1, 'This is the first event of save the paws ', 'Mumbai ,bandra ', 'singleDay', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ipsum laudantium ullam velit nobis voluptatibus maiores eum facere asperiores cum?\r\n                                       ', '2020-08-16', '2020-08-16', '22:30', '12:30', 'events/1/8W3LQW9.jpg', 'events/1/R31ATO4.jpg'),
(59, 4, 'testing ', 'one', 'multipleDay', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ipsum laudantium ullam velit nobis voluptatibus maiores eum facere asperiores cum?\r\n                                       ', '2020-09-01', '2020-09-20', '20:45', '20:45', 'events/4/mac.jpg', 'events/4/sm_cahrger.jpeg'),
(57, 3, 'This is the Third event of save the paws ', 'Mumbai ', 'multipleDay', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ipsum laudantium ullam velit nobis voluptatibus maiores eum facere asperiores cum?\r\n                                       ', '2020-08-20', '2020-08-26', '21:35', '22:35', 'events/3/3cvBbso.jpg', 'events/3/3cvBbso.jpg'),
(61, 5, 'testing1', 'Mumbai', 'singleDay', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ipsum laudantium ullam velit nobis voluptatibus maiores eum facere asperiores cum?\r\n                                       ', '2020-09-06', '2020-09-06', '10:19', '17:19', 'events/5/activities.jpg', 'events/5/600x400 About Us.jpg'),
(62, 6, 'ADOPTION EVENT1', 'mumbai,bandra', 'singleDay', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ipsum laudantium ullam velit nobis voluptatibus maiores eum facere asperiores cum?\r\n                                       ', '2020-09-05', '2020-09-05', '17:24', '21:24', 'events/6/pexels-adam-kontor-333083.jpg', 'events/6/pexels-vladislav-351406.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
