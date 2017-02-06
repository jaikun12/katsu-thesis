-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2017 at 04:06 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

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
-- Table structure for table `answers_table`
--

CREATE TABLE `answers_table` (
  `answer_id` int(15) NOT NULL,
  `question_id` int(15) NOT NULL,
  `victim_id` int(15) NOT NULL,
  `answer_content` varchar(999) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `login_log_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

CREATE TABLE `questions_table` (
  `question_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `question_content` varchar(1000) NOT NULL,
  `question_meta` varchar(1000) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `user_id` int(15) NOT NULL,
  `username` int(45) NOT NULL,
  `password` int(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `admin` int(1) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `victims_table`
--

CREATE TABLE `victims_table` (
  `victim_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `victim_firstname` varchar(45) NOT NULL,
  `victim_middlename` varchar(45) NOT NULL,
  `victim_lastname` varchar(45) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers_table`
--
ALTER TABLE `answers_table`
  MODIFY `answer_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `login_log_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions_table`
--
ALTER TABLE `questions_table`
  MODIFY `question_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `victims_table`
--
ALTER TABLE `victims_table`
  MODIFY `victim_id` int(15) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
