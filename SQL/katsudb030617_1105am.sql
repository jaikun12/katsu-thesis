-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2017 at 04:40 AM
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
-- Table structure for table `katsu_childs_table`
--

CREATE TABLE `katsu_childs_table` (
  `child_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `child_fname` varchar(45) NOT NULL,
  `child_mname` varchar(45) NOT NULL,
  `child_lname` varchar(45) NOT NULL,
  `child_age` int(5) NOT NULL,
  `child_gender` varchar(45) NOT NULL,
  `child_prov` varchar(45) NOT NULL,
  `child_city` varchar(45) NOT NULL,
  `child_pword` varchar(45) NOT NULL,
  `time_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `katsu_childs_table`
--

INSERT INTO `katsu_childs_table` (`child_id`, `user_id`, `child_fname`, `child_mname`, `child_lname`, `child_age`, `child_gender`, `child_prov`, `child_city`, `child_pword`, `time_created`, `child_status`) VALUES
(1, 18, 'Boaz Michael', 'Yutatco', 'Sze', 8, 'male', 'Manila', 'Manila', '$!zhnR4SAWYhE', '2017-03-03 05:26:10.808095', 'Pending'),
(2, 18, 'Kristine', 'Ancheta', 'Aquino', 10, 'female', 'Laguna', 'Calamba', '$!zhnR4SAWYhE', '2017-03-03 03:06:36.199776', 'Pending'),
(3, 18, 'John', 'Alvarez', 'Lim', 8, 'male', 'Cavite', 'Dasmarinas', '$!zhnR4SAWYhE', '2017-03-03 03:09:38.573788', 'Pending'),
(4, 18, 'John Robert', 'Tiongson', 'Sevilla', 15, 'male', 'Nueva Ecija', 'Sullano', '$!zhnR4SAWYhE', '2017-03-03 03:13:08.688437', 'Pending'),
(5, 18, 'Jhoebe', 'Kahit Ano', 'Lim', 8, 'female', 'Manila', 'Manila', '$!zhnR4SAWYhE', '2017-03-04 04:53:15.767916', 'Pending');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katsu_childs_table`
--
ALTER TABLE `katsu_childs_table`
  MODIFY `child_id` int(15) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
