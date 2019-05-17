-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 03:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(9) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `formerEmployer` varchar(255) NOT NULL,
  `resume` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `firstname`, `lastname`, `email`, `phone`, `degree`, `institution`, `formerEmployer`, `resume`) VALUES
(7, 'Lawrence', 'Tillson', 'ltillson7@gmail.com', '4166712798', 'R3', 'R3', 'R3', '1557769815-4166712798.'),
(8, 'Lawrence', 'Tillson', 'ltillson7@gmail.com', '4166712798', 'R3', 'R3', 'R3', '1557769920-4166712798.pdf'),
(10, 'Lawrence', 'Tillson', 'ltillson7@gmail.com', '4166712798', 'R4', 'R4', 'R4', '1557770422-4166712798.pdf'),
(11, 'test', 'test', 'email@email.ca', '4166712798', 'test', 'test', 'test', '1557770720-4166712798.pdf'),
(12, 'test', 'test', 'ltillson7@gmail.com', '4166712798', 'test', 'test', 'test', '1557770813-4166712798.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(9) NOT NULL,
  `names` varchar(255) NOT NULL,
  `phones` varchar(255) NOT NULL,
  `emails` varchar(255) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `names`, `phones`, `emails`, `comments`) VALUES
(1, 'Lawrence Tillson', '4166712798', 'ltillson7@gmail.com', '        comment'),
(2, 'Another Name_Updated', '4166712798_Updated', 'ltillson7@gmail.com_updated', 'A different comment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
