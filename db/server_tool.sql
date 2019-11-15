-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 04:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `serverlogindetail`
--

CREATE TABLE `serverlogindetail` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `servername` varchar(30) NOT NULL,
  `host` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serverlogindetail`
--

INSERT INTO `serverlogindetail` (`id`, `user_id`, `servername`, `host`, `user`, `pass`) VALUES
(21, 20, 'kid', '127.0.0.6', 'use', '123'),
(14, 19, 'Keny', '127.0.0.89', 'Tushar2', '123'),
(12, 20, 'Redix', '127.0.0.27', 'Tushar', '123'),
(16, 20, 'Newone', '127.0.0.56', 'Hexi', '123'),
(17, 20, 'swamisolar', 'ftp.swamisolar.com', 'tushar@test', 'Tushar@123'),
(20, 18, 'hy', '125.22.9.8', 'parthiv', '1233'),
(19, 19, 'krishna', '127.0.56.2', 'krishanainf', '1234'),
(24, 22, 'Miami', '127.02.03.2', 'user2', '123'),
(25, 5, 'mobi', '127.0.0.89', 'kera', '123'),
(26, 5, 'hexito', '127.0.56.8', 'keran', '123'),
(27, 5, 's1', 'ftp.swamisolar.com', 'tushar@test.swamisolar.com', 'Tushar@123'),
(28, 5, 's2', 'ftp.swamisolar.com', 'tushar@test2.swamisolar.com', 'Tushar@123');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact_No` bigint(20) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `Name`, `Email`, `Contact_No`, `Country`, `Username`, `Password`) VALUES
(15, 'pritesh', 'pritesh@gmail.com', 9898989898, 'india', 'pritesh', '123'),
(5, 'Kishan', 'Kishan@gmail.com', 7878787878, 'india', 'Kishan', '123'),
(6, 'ankit', 'ankit@gmail.com', 9898989898, 'india', 'ankit', 'ankit'),
(17, 'Tushar', 'tusharsakhiya08@gmail.com', 9898989898, 'india', 'Tushar', '123456'),
(16, 'Tushar', 'Tushar@gmail.com', 9898989898, 'india', 'Tushar', '123'),
(18, 'ankit', 'ankit@gmail.com', 9898989898, 'india', 'ankit@gmail.com', '123'),
(19, 'sagar', 'sagar@gmail.com', 989898989, 'india', 'sagar@gmail.com', '123'),
(20, 'jay', 'jay@gmail.com', 989898989, 'india', 'jay@gmail.com', '123'),
(21, 'parth', 'parth@gmail.com', 9898989898, 'india', 'parth@gmail.com', '123'),
(22, 'Amit', 'amit@gmail.com', 989898988, 'india', 'amit', '123'),
(33, 'Chirag', 'Chirag@gmail.com', 9898989898, 'india', 'Chirag@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serverlogindetail`
--
ALTER TABLE `serverlogindetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serverlogindetail`
--
ALTER TABLE `serverlogindetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
