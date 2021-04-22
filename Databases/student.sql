-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 06:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `c_id` int(10) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `marks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `c_id`, `Address`, `Mail`, `p_image`, `marks`) VALUES
(1, 'Prayosi Paul', 1, 'Madhyamgram', 'prayosi0409@gmail.com', 'e2d5add07ddca6980acaae0077cd1915.jpg', 95),
(2, 'Suparna Sen', 1, 'Barasat', 'suparna03@gmail.com', 'ca91a4c459aebe33c54901026d15e659.jpg', 92),
(3, 'Soumadeep Sarkar', 2, 'Garia', 'soumadeep06@gmail.com', 'a974af29a6134cd2449634df81801576.jpg', 90),
(4, 'Rima Roy', 3, 'Newtown', 'rima02@gmail.com', '16df63518f30a1ab6b5d54a318892eb9.jpg', 91);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
