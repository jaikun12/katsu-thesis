-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2017 at 12:18 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: "katsudb"
--

-- --------------------------------------------------------

--
-- Table structure for table "katsu_answers_table"
--

CREATE TABLE "katsu_answers_table" ;

--
-- Truncate table before insert "katsu_answers_table"
--

TRUNCATE TABLE "katsu_answers_table";
--
-- Dumping data for table "katsu_answers_table"
--

SET IDENTITY_INSERT "katsu_answers_table" ON ;
INSERT INTO "katsu_answers_table" ("answer_id", "question_id", "victim_id", "user_id", "answer_content", "date_answered") VALUES
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

SET IDENTITY_INSERT "katsu_answers_table" OFF;

-- --------------------------------------------------------

--
-- Table structure for table "katsu_childs_table"
--

CREATE TABLE "katsu_childs_table" ;

--
-- Truncate table before insert "katsu_childs_table"
--

TRUNCATE TABLE "katsu_childs_table";
--
-- Dumping data for table "katsu_childs_table"
--

SET IDENTITY_INSERT "katsu_childs_table" ON ;
INSERT INTO "katsu_childs_table" ("child_id", "user_id", "child_fname", "child_mname", "child_lname", "child_age", "child_gender", "child_prov", "child_city", "child_pword", "time_created", "child_status") VALUES
(1, 18, 'Boaz Michael', 'Yutatco', 'Sze', 8, 'male', 'Manila', 'Manila', '$!zhnR4SAWYhE', '2017-03-03 05:26:10.808095', 'Pending'),
(2, 18, 'Kristine', 'Ancheta', 'Aquino', 10, 'female', 'Laguna', 'Calamba', '$!zhnR4SAWYhE', '2017-03-03 03:06:36.199776', 'Pending'),
(3, 18, 'John', 'Alvarez', 'Lim', 8, 'male', 'Cavite', 'Dasmarinas', '$!zhnR4SAWYhE', '2017-03-03 03:09:38.573788', 'Pending'),
(4, 18, 'John Robert', 'Tiongson', 'Sevilla', 15, 'male', 'Nueva Ecija', 'Sullano', '$!zhnR4SAWYhE', '2017-03-03 03:13:08.688437', 'Pending'),
(5, 18, 'Jhoebe', 'Kahit Ano', 'Lim', 8, 'female', 'Manila', 'Manila', '$!zhnR4SAWYhE', '2017-03-04 04:53:15.767916', 'Pending');

SET IDENTITY_INSERT "katsu_childs_table" OFF;

-- --------------------------------------------------------

--
-- Table structure for table "katsu_login_logs_table"
--

CREATE TABLE "katsu_login_logs_table" ;

--
-- Truncate table before insert "katsu_login_logs_table"
--

TRUNCATE TABLE "katsu_login_logs_table";
-- --------------------------------------------------------

--
-- Table structure for table "katsu_questions_table"
--

CREATE TABLE "katsu_questions_table" ;

--
-- Truncate table before insert "katsu_questions_table"
--

TRUNCATE TABLE "katsu_questions_table";
--
-- Dumping data for table "katsu_questions_table"
--

SET IDENTITY_INSERT "katsu_questions_table" ON ;
INSERT INTO "katsu_questions_table" ("question_id", "user_id", "question_content", "date_created") VALUES
(1, 0, 'Gumagamit ka ba ng computer?', '2017-02-20 10:52:10.373414'),
(2, 0, 'Meron ba kayong internet sa bahay?', '2017-02-20 10:52:10.375868'),
(3, 0, 'May humawak na ba sa maselang bahagi ng katawan mo maliban sa magulang mo?', '2017-02-20 10:54:53.922208'),
(4, 0, 'Alam mo ba itsura ng webcam?', '2017-02-20 10:52:10.380058'),
(5, 1, 'May nagpahubad na ba sayo sa harap ng webcam', '2017-02-20 10:52:10.382261');

SET IDENTITY_INSERT "katsu_questions_table" OFF;

-- --------------------------------------------------------

--
-- Table structure for table "katsu_users_table"
--

CREATE TABLE "katsu_users_table" ;

--
-- Truncate table before insert "katsu_users_table"
--

TRUNCATE TABLE "katsu_users_table";
--
-- Dumping data for table "katsu_users_table"
--

SET IDENTITY_INSERT "katsu_users_table" ON ;
INSERT INTO "katsu_users_table" ("user_id", "username", "password", "is_admin", "firstname", "middlename", "lastname", "contact_num", "email", "is_active", "time_created", "created_by") VALUES
(17, 'katsu_admin', '!@Fugcg161Fy6', 1, 'Bok Joo', 'NA', 'Kim', '123456789', 'sample@gmail.com', 1, '2017-03-03 02:38:54.930030', 'super admin'),
(18, 'katsu_user', '!@J4Q/0zUJamw', 0, 'Shi Jin', 'NA', 'Yoo', '091234567', 'sample@gmail.com', 1, '2017-03-03 02:38:54.976249', 'super admin'),
(19, 'katsu_inactive', '!@D5mroWvawd6', 1, 'Shi Jin', 'NA', 'Yoo', '092323231', 'sample@gmail.com', 0, '2017-03-03 02:38:54.993716', 'super admin'),
(20, 'boazcstrike', '$!RwKbHxrwnPw', 1, 'Boaz Sze', 'Yutatco', 'Sze', '09171231234', 'sample@gmail.com', 1, '2017-03-03 05:15:33.832610', '');

SET IDENTITY_INSERT "katsu_users_table" OFF;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
