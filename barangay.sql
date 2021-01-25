-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 06:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_requested` datetime NOT NULL,
  `action` varchar(255) NOT NULL,
  `date_action` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `request_id`, `name`, `address`, `contact`, `request`, `purpose`, `date_requested`, `action`, `date_action`) VALUES
(2, 1, 'Manuel Perez', 'Forth Street', '09976623755', 'Indigency', 'School awkehjkawhejkawhejkawhjkea', '2021-01-24 00:00:00', 'Approved', '2021-01-24 05:02:40'),
(3, 6, 'Pamelle Ragmac', 'El Salvador', '09121212', 'Indigency', 'Theoretical Driving Course', '2021-01-24 05:26:44', 'Approved', '2021-01-24 05:28:41'),
(4, 5, 'Pamelle Ragmac', 'CDO', '09121212', 'Barangay Clearance', 'try', '2021-01-24 05:05:24', 'Delete', '2021-01-24 13:36:50'),
(5, 7, 'Kent Baculio', 'El Salvador', '09112231212', 'Quarantine Pass', 'Travel to Iligan', '2021-01-24 05:44:07', 'Approved', '2021-01-24 05:45:00'),
(6, 4, 'Reyniel', 'CDO', '091212121', 'Indigency', 'School', '2021-01-24 00:00:00', 'Delete', '2021-01-24 05:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`) VALUES
(1, 'pam', 'pam');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_requested` datetime NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `name`, `address`, `contact`, `request`, `purpose`, `date_requested`, `active`) VALUES
(1, 'Manuel Perez', 'Forth Street', '09976623755', 'Indigency', 'School awkehjkawhejkawhejkawhjkea', '2021-01-24 00:00:00', 0),
(6, 'Pamelle Ragmac', 'El Salvador', '09121212', 'Indigency', 'Theoretical Driving Course', '2021-01-24 05:26:44', 0),
(7, 'Kent Baculio', 'El Salvador', '09112231212', 'Quarantine Pass', 'Travel to Iligan', '2021-01-24 05:44:07', 0);

--
-- Triggers `request`
--
DELIMITER $$
CREATE TRIGGER `approved` BEFORE UPDATE ON `request` FOR EACH ROW INSERT INTO history VALUES (null,old.request_id, old.name, old.address, old.contact, old.request, old.purpose,old.date_requested,"Approved",NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_trigger` BEFORE DELETE ON `request` FOR EACH ROW INSERT INTO history VALUES (null,old.request_id, old.name, old.address, old.contact, old.request, old.purpose,old.date_requested,"Delete",NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
