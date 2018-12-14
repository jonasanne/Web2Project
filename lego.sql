-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2018 at 10:58 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lego`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(1) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `email`) VALUES
(10, 'jonas', '098f6bcd4621d373cade4e832627b4f6', 'jonasanne@outlook.com'),
(11, '', '098f6bcd4621d373cade4e832627b4f6', ''),
(12, 'jonasanne', '098f6bcd4621d373cade4e832627b4f6', 'jonasanne@outlook.com'),
(13, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@outlook.com'),
(14, 'lol', '9cdfb439c7876e703e307864c9167a15', 'lol@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_lijst`
--

CREATE TABLE `user_lijst` (
  `mijn_lijstID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `set_num` varchar(255) NOT NULL,
  `year` int(255) NOT NULL,
  `parts` int(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_lijst`
--

INSERT INTO `user_lijst` (`mijn_lijstID`, `userID`, `name`, `set_num`, `year`, `parts`, `img_url`) VALUES
(0, 13, 'Kessel Run Millennium Falcon', '75212-1', 2018, 1409, 'https://m.rebrickable.com/media/sets/75212-1.jpg'),
(0, 13, 'Orchestra', '3631-1', 1985, 32, 'https://m.rebrickable.com/media/sets/3631-1.jpg'),
(0, 14, 'T-Rex Transport', '5975-1', 2000, 330, 'https://m.rebrickable.com/media/sets/5975-1.jpg'),
(0, 13, '60117 Snow Plow Truck', 'MOC-20044', 2018, 101, 'https://m.rebrickable.com/media/mocs/moc-20044.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `verlanglijst`
--

CREATE TABLE `verlanglijst` (
  `verlanglijstID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `set_num` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `year` int(255) NOT NULL,
  `num_parts` int(255) NOT NULL,
  `img_url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verlanglijst`
--

INSERT INTO `verlanglijst` (`verlanglijstID`, `userID`, `set_num`, `name`, `year`, `num_parts`, `img_url`) VALUES
(1, 13, 'MOC-15292', 'Custom LEGO Luke Skywalker Return of the Jedi Lightsaber', 2018, 190, 'https://m.rebrickable.com/media/mocs/moc-15292.jpg'),
(2, 13, '1518-1', 'Race Car Repair', 1989, 82, 'https://m.rebrickable.com/media/sets/1518-1.jpg'),
(3, 13, 'MOC-1263', 'Speeder Bike 74-Z', 2014, 27, 'https://m.rebrickable.com/media/mocs/moc-1263.jpg'),
(4, 13, '75973-1', 'D.Va & Reinhardt', 2019, 0, 'https://m.rebrickable.com/media/sets/75973-1.jpg'),
(5, 13, 'MOC-20097', 'Luke\'s home on Tatooine (Lars Homestead)', 2018, 456, 'https://m.rebrickable.com/media/mocs/moc-20097.jpg'),
(6, 13, '3742-1', 'Tender Basis (without color trim elements)', 2001, 41, 'https://m.rebrickable.com/media/sets/3742-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verlanglijst`
--
ALTER TABLE `verlanglijst`
  ADD PRIMARY KEY (`verlanglijstID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `verlanglijst`
--
ALTER TABLE `verlanglijst`
  MODIFY `verlanglijstID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
