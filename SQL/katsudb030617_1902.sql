-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2017 at 12:02 PM
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
-- Table structure for table `katsu_answers_table`
--

CREATE TABLE `katsu_answers_table` (
  `answer_id` int(15) NOT NULL,
  `question_id` int(15) NOT NULL,
  `victim_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `answer_content` varchar(1000) NOT NULL,
  `date_answered` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `katsu_answers_table`
--

INSERT INTO `katsu_answers_table` (`answer_id`, `question_id`, `victim_id`, `user_id`, `answer_content`, `date_answered`) VALUES
(1, 1, 1, 1, 'yes', '2017-03-03 04:41:01.443838'),
(2, 2, 1, 1, 'yes', '2017-03-03 04:41:01.519948'),
(3, 3, 1, 1, 'yes', '2017-03-03 04:41:01.522645'),
(4, 4, 1, 1, 'yes', '2017-03-03 04:41:01.525118'),
(5, 5, 1, 1, 'yes', '2017-03-03 04:41:01.527557'),
(6, 1, 2, 1, 'yes', '2017-03-03 04:41:01.530090'),
(7, 2, 2, 1, 'yes', '2017-03-03 04:41:01.532723'),
(8, 3, 2, 1, 'no', '2017-03-03 04:41:01.534380'),
(9, 4, 2, 1, 'yes', '2017-03-03 04:41:01.535799'),
(10, 5, 2, 1, 'no', '2017-03-03 04:41:01.572763'),
(11, 5, 2, 1, 'no', '2017-03-03 04:41:01.574595'),
(12, 1, 1, 18, 'no', '2017-03-03 04:59:16.933405'),
(13, 2, 1, 18, 'no', '2017-03-03 04:59:19.168304'),
(14, 3, 1, 18, 'no', '2017-03-03 05:06:40.815260'),
(15, 4, 1, 18, 'no', '2017-03-03 05:06:42.379016'),
(16, 5, 1, 18, 'no', '2017-03-03 05:06:43.963172'),
(17, 1, 5, 18, 'yes', '2017-03-04 04:54:00.374491'),
(18, 1, 5, 18, 'yes', '2017-03-06 02:36:38.582973'),
(19, 2, 5, 18, 'yes', '2017-03-06 02:36:41.970928'),
(20, 3, 5, 18, 'yes', '2017-03-06 02:36:43.148452'),
(21, 4, 5, 18, 'yes', '2017-03-06 02:36:44.275817'),
(22, 5, 5, 18, 'yes', '2017-03-06 02:36:45.673261');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katsu_answers_table`
--
ALTER TABLE `katsu_answers_table`
  MODIFY `answer_id` int(15) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
