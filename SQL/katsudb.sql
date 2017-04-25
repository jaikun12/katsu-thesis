-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 07:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katsudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `katsu_question_sets_table`
--

CREATE TABLE `katsu_question_sets_table` (
  `set_id` int(100) NOT NULL,
  `set_name` varchar(400) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katsu_question_sets_table`
--

INSERT INTO `katsu_question_sets_table` (`set_id`, `set_name`, `is_active`) VALUES
(1, 'Basic Information about the child and computer/internet use', 1),
(2, 'Computer and internet risks and dangers.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `katsu_question_sets_table`
--
ALTER TABLE `katsu_question_sets_table`
  ADD PRIMARY KEY (`set_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katsu_question_sets_table`
--
ALTER TABLE `katsu_question_sets_table`
  MODIFY `set_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
