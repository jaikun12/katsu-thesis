-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2017 at 10:22 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thehack8_katsudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers_table`
--

CREATE TABLE IF NOT EXISTS `answers_table` (
  `answer_id` int(15) NOT NULL,
  `question_id` int(15) NOT NULL,
  `victim_id` int(15) NOT NULL,
  `answer_content` varchar(1000) NOT NULL,
  `date_answered` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE IF NOT EXISTS `login_logs` (
  `login_log_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

CREATE TABLE IF NOT EXISTS `questions_table` (
  `question_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `question_content` varchar(1000) NOT NULL,
  `question_meta` varchar(1000) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_info_table`
--

CREATE TABLE IF NOT EXISTS `users_info_table` (
  `user_info_id` int(15) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `contact_num` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE IF NOT EXISTS `users_table` (
  `user_id` int(15) NOT NULL,
  `username` int(45) NOT NULL,
  `password` int(45) NOT NULL,
  `user_info_id` int(15) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_admin` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `victims_table`
--

CREATE TABLE IF NOT EXISTS `victims_table` (
  `victim_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `victim_firstname` varchar(45) NOT NULL,
  `victim_middlename` varchar(45) NOT NULL,
  `victim_lastname` int(45) NOT NULL,
  `victim_age` int(2) NOT NULL,
  `victim_gender` varchar(45) NOT NULL,
  `victim_city` varchar(45) NOT NULL,
  `victim_address` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_table`
--
ALTER TABLE `answers_table`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`login_log_id`);

--
-- Indexes for table `questions_table`
--
ALTER TABLE `questions_table`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `victims_table`
--
ALTER TABLE `victims_table`
  ADD PRIMARY KEY (`victim_id`);

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
