-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2017 at 04:11 PM
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
CREATE DATABASE IF NOT EXISTS `katsudb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `katsudb`;

-- --------------------------------------------------------

--
-- Table structure for table `answers_table`
--

CREATE TABLE `answers_table` (
  `answer_id` int(15) NOT NULL,
  `question_id` int(15) NOT NULL,
  `victim_id` int(15) NOT NULL,
  `answer_content` varchar(1000) NOT NULL,
  `date_answered` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `childs_table`
--

CREATE TABLE `childs_table` (
  `child_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `child_fname` varchar(45) NOT NULL,
  `child_mname` varchar(45) NOT NULL,
  `child_lname` varchar(45) NOT NULL,
  `child_age` int(5) NOT NULL,
  `child_gender` varchar(45) NOT NULL,
  `child_prov` varchar(45) NOT NULL,
  `child_city` varchar(45) NOT NULL,
  `child_pword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `login_log_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

CREATE TABLE `questions_table` (
  `question_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `question_content` varchar(1000) NOT NULL,
  `question_weight` varchar(100) NOT NULL,
  `question_category` varchar(50) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_table`
--

INSERT INTO `questions_table` (`question_id`, `user_id`, `question_content`, `question_weight`, `question_category`, `date_created`) VALUES
(1, 0, 'Gumagamit ka ba ng computer?', 'neutral_question', 'general', '2017-02-20 10:52:10.373414'),
(2, 0, 'Meron ba kayong internet sa bahay?', 'neutral_question', 'general', '2017-02-20 10:52:10.375868'),
(3, 0, 'May humawak na ba sa maselang bahagi ng katawan mo maliban sa magulang mo?', 'heavy_negative', 'child abuse', '2017-02-20 10:54:53.922208'),
(4, 0, 'Alam mo ba itsura ng webcam?', 'neutral_question', 'child porn', '2017-02-20 10:52:10.380058'),
(5, 1, 'May nagpahubad na ba sayo sa harap ng webcam', 'heavy_negative', 'child porn', '2017-02-20 10:52:10.382261');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `user_id` int(15) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(75) NOT NULL,
  `is_admin` int(2) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `is_active` int(2) NOT NULL,
  `time_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `created_by` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_id`, `username`, `password`, `is_admin`, `firstname`, `middlename`, `lastname`, `contact_num`, `email`, `is_active`, `time_created`, `created_by`) VALUES
(14, 'katsu_admin', 'admin', 1, 'Bok Joo', 'NA', 'Kim', '123456789', 'sample@gmail.com', 1, '2017-02-26 15:08:21.618483', 'super admin'),
(15, 'katsu_user', 'user', 0, 'Shi Jin', 'NA', 'Yoo', '091234567', 'sample@gmail.com', 1, '2017-02-26 15:08:21.642785', 'super admin'),
(16, 'katsu_inactive', 'inactive', 1, 'Shi Jin', 'NA', 'Yoo', '092323231', 'sample@gmail.com', 0, '2017-02-26 15:08:21.674467', 'super admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_table`
--
ALTER TABLE `answers_table`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `childs_table`
--
ALTER TABLE `childs_table`
  ADD PRIMARY KEY (`child_id`);

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
  MODIFY `question_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
