-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 07:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `std_id` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `std_id`, `age`, `user_name`, `email`, `password`) VALUES
(1, 'Jahid', '171-15-1499', '27', 'jahid24', 'jahid15-1499@diu.edu.bd', '112233'),
(9, 'Md. Yeasin arafat', '171-15-1203', '24', 'yeasin15', 'yeasin15-1203@diu.edu.bd', '123456'),
(10, 'Kanak Chandra', '173-15-1663', '23', 'kanak63', 'kanak15-1663@diu.edu.bd', '164634'),
(11, 'Quasha akter', '173-15-1657', '22', 'quasha73', 'quasha15-1657@diu.edu bd', '46464466'),
(12, 'Hasinur Rahman', '173-15-1703', '23', 'hasinur03', 'hasinur15-1703@diu.edu.bd', '6546464'),
(13, 'Md. Fahad Amin', '172-15-9739', '24', 'fahad72', 'fahad15-9739@diu.edu.bd', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
