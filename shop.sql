-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 11:12 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `suuid` int(4) NOT NULL,
  `sugender` varchar(6) COLLATE utf8_thai_520_w2 NOT NULL,
  `suname` varchar(50) COLLATE utf8_thai_520_w2 NOT NULL,
  `suprovince` varchar(20) COLLATE utf8_thai_520_w2 NOT NULL,
  `sufavcolor` char(7) COLLATE utf8_thai_520_w2 NOT NULL,
  `susize` char(2) COLLATE utf8_thai_520_w2 NOT NULL,
  `sumobile_number` char(10) COLLATE utf8_thai_520_w2 NOT NULL,
  `supwd` char(10) COLLATE utf8_thai_520_w2 NOT NULL,
  `suintro` text COLLATE utf8_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`suuid`, `sugender`, `suname`, `suprovince`, `sufavcolor`, `susize`, `sumobile_number`, `supwd`, `suintro`) VALUES
(12, 'male', 'สมศรี', 'กาญจนบุรี', '#00f00', '5', '12345', '9876543210', ''),
(13, 'male', 'สมศรี', 'กาญจนบุรี', '#00f00', '5', '12345', '9876543210', 'Hello'),
(15, '', '', '', '$#00f00', '$5', '$12345', '$987654321', ''),
(16, '', '', '', '', '', '', '200331', 'ข้อความ'),
(17, '', '', 'น่าน', '', '', '', '200331', 'Hello'),
(18, '', '', 'น่าน', '', '3', '0888868980', '200331', 'Hello'),
(19, 'male', 'Teddy', 'น่าน', '#0000ff', '3', '0888868980', '200331', 'Hello'),
(20, 'male', 'khathawut somrit', 'น่าน', '#0000ff', '3', '0888868980', '22222', 'Hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`suuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `suuid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
