-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2021 at 01:59 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17322851_project602`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(64) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_agent` varchar(256) NOT NULL,
  `location` varchar(255) NOT NULL,
  `coordinates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `ip_address`, `date`, `user_agent`, `location`, `coordinates`) VALUES
(2, 'Ahmad Dahlan', 'ahmad@example.com', '127.0.0.1', '2021-07-08 15:50:01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'hi salam....', ''),
(3, 'Mohammad Hafiz Ismail', 'hafiz@example.com', '127.0.0.1', '2021-07-08 15:58:13', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'testing comments on home made web api', ''),
(7, 'Farid', 'faridbohari06@gmail.com', '14.1.252.215', '2021-07-28 16:25:47', 'Dalvik/2.1.0 (Linux; U; Android 11; YES Altitude 4 Build/R01005)', '3.4694654,101.6600642', ''),
(8, 'yed', 'yed@gmail', '203.106.82.199', '2021-07-29 07:42:18', 'Dalvik/2.1.0 (Linux; U; Android 11; Pixel 2 Build/RP1A.201005.004.A1)', 'batang kali pahang', ''),
(9, 'Muhammad Farid Bin Mohd Boharj', 'faridbohari06@gmail.com', '14.1.252.215', '2021-07-29 08:31:20', 'Dalvik/2.1.0 (Linux; U; Android 11; YES Altitude 4 Build/R01005)', '37, Jln Cengal 8, Desa Alam Ria, 44200 Batang Kali, Selangor, Malaysia', '3.4697978,101.6605971'),
(10, 'farid ayed', 'faridbohari06@gmail.com', '14.1.252.214', '2021-07-29 13:55:58', 'Dalvik/2.1.0 (Linux; U; Android 11; YES Altitude 4 Build/R01005)', '11, Jalan Semarak 1c, Pekan Batang Kali, 44300 Batang Kali, Selangor, Malaysia', '3.4648824,101.6509102');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
