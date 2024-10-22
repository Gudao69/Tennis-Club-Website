-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 06:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tennisclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventsdetails`
--

CREATE TABLE `eventsdetails` (
  `id` int(8) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `campus` varchar(30) NOT NULL,
  `events` varchar(30) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventsdetails`
--

INSERT INTO `eventsdetails` (`id`, `firstname`, `lastname`, `email`, `campus`, `events`, `note`) VALUES
(1, 'Venti', 'Barbatos', 'ventithebard@gmail.com', 'United Kingdom Campus', 'Copa Davis', 'i am the anemo archon'),
(2, 'Wai Yan', 'Htein Lin', 'waiyanhteinlin@gmail.com', 'United Kingdom Campus', 'Christmas Cup', 'Just for fun'),
(3, 'rex', 'lapis', 'morax@gmail.com', 'Australia Campus', 'The Championship', 'Serious'),
(5, 'Raiden', 'Ei', 'raidenshogun@gmail.com', 'Australia Campus', 'The Championship', 'bored');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'academicbuc@gmail.com', 'admin123'),
(2, 'gudao', 'gudao69@gmail.com', 'gudao'),
(3, 'waiyan', 'wanyay@gmail.com', 'wanyay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventsdetails`
--
ALTER TABLE `eventsdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventsdetails`
--
ALTER TABLE `eventsdetails`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
