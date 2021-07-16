-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 01:19 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodcenter`
--

CREATE TABLE `bloodcenter` (
  `id` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `msgid` int(11) NOT NULL,
  `message` varchar(100) DEFAULT NULL,
  `s_email` varchar(35) DEFAULT NULL,
  `r_email` varchar(35) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `msg_read` int(5) NOT NULL DEFAULT 0,
  `conv_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`msgid`, `message`, `s_email`, `r_email`, `date`, `msg_read`, `conv_id`) VALUES
(1, 'hi', 'omer@gmail.com', 'princess@gmail.com', '2018-06-20 06:38:20', 1, 0),
(2, 'hello', 'princess@gmail.com', 'omer@gmail.com', '2018-06-20 06:46:57', 1, 0),
(3, 'how are you?', 'omer@gmail.com', 'princess@gmail.com', '2018-06-20 11:30:41', 1, 0),
(7, 'i am fine', 'princess@gmail.com', 'omer@gmail.com', '2018-06-20 13:39:22', 1, 0),
(11, 'hi', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-21 14:59:33', 1, 0),
(12, 'hey', 'mohsin@gmail.com', 'omer@gmail.com', '2018-06-21 14:59:48', 1, 0),
(14, 'how are you mohsin?', 'mohsin@gmail.com', 'omer@gmail.com', '2018-06-21 15:00:00', 1, 0),
(17, 'i am fine', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-22 02:14:10', 1, 0),
(18, 'o thats great', 'mohsin@gmail.com', 'omer@gmail.com', '2018-06-22 02:14:33', 1, 0),
(19, 'hmm', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-22 02:15:27', 1, 0),
(20, 'how was your day', 'mohsin@gmail.com', 'omer@gmail.com', '2018-06-22 02:15:59', 1, 0),
(21, 'it was good', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-22 02:16:11', 1, 0),
(23, 'hey i am interested in donating O+ blood', 'princess@gmail.com', 'omer@gmail.com', '2018-06-22 13:07:29', 1, 0),
(24, 'ok sure', 'omer@gmail.com', 'princess@gmail.com', '2018-06-22 13:08:30', 1, 0),
(25, 'bye', 'omer@gmail.com', 'princess@gmail.com', '2018-06-24 14:24:47', 1, 0),
(26, 'teydte', 'omer@gmail.com', 'princess@gmail.com', '2018-06-25 07:11:35', 1, 0),
(28, 'hello', 'omer@gmail.com', 'princess@gmail.com', '2018-06-25 07:44:48', 1, 0),
(30, 'hi', 'omer@gmail.com', 'princess@gmail.com', '2018-06-25 07:45:42', 1, 0),
(31, 'how are you', 'princess@gmail.com', 'omer@gmail.com', '2018-06-25 07:46:01', 1, 0),
(32, 'i am fine', 'omer@gmail.com', 'princess@gmail.com', '2018-06-25 12:15:09', 1, 0),
(33, 'ok', 'mohsin@gmail.com', 'omer@gmail.com', '2018-06-28 13:00:48', 1, 0),
(34, 'ok', 'omer@gmail.com', 'princess@gmail.com', '2018-06-28 13:12:35', 1, 0),
(35, 'hmm', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-28 13:13:01', 1, 0),
(36, 'testing', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-28 13:14:23', 1, 0),
(37, 'testing2', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-28 13:15:09', 1, 0),
(38, 'testing 3', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-28 13:15:35', 1, 0),
(39, 'are u mohsin', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-29 07:28:12', 1, 0),
(42, 'wefrs', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-29 07:28:22', 1, 0),
(44, 'srgdtfhj', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-29 07:29:01', 1, 0),
(45, 'yhb hb', 'mohsin@gmail.com', 'omer@gmail.com', '2018-06-29 07:30:07', 1, 0),
(47, 'qwerfg', 'mohsin@gmail.com', 'omer@gmail.com', '2018-06-29 07:30:18', 1, 0),
(49, ';ksdfpljv', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-29 07:30:31', 1, 0),
(51, 'seffrdtghf', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-29 07:30:37', 1, 0),
(52, 'dvko/l', 'mohsin@gmail.com', 'omer@gmail.com', '2018-06-29 07:31:02', 1, 0),
(54, 'fjvlkdfjv.', 'mohsin@gmail.com', 'omer@gmail.com', '2018-06-29 07:31:31', 1, 0),
(56, 'djhgfjd', 'omer@gmail.com', 'mohsin@gmail.com', '2018-06-29 08:46:38', 0, 0),
(57, 'ucgig', 'omer@gmail.com', 'mohsin@gmail.com', '2018-07-02 08:05:22', 0, NULL),
(58, '', 'omer@gmail.com', '', '2018-07-02 08:05:22', 0, NULL),
(59, '', 'princess@gmail.com', '', '2018-07-31 13:38:49', 0, NULL),
(60, 'hi', 'princess@gmail.com', 'omer@gmail.com', '2018-07-31 13:38:49', 1, NULL),
(61, '', 'princess@gmail.com', '', '2018-07-31 13:39:01', 0, NULL),
(62, 'bye', 'princess@gmail.com', 'omer@gmail.com', '2018-07-31 13:39:01', 1, NULL),
(63, 'e', 'princess@gmail.com', 'omer@gmail.com', '2018-07-31 13:43:07', 1, NULL),
(64, 'o', 'princess@gmail.com', 'omer@gmail.com', '2018-07-31 13:43:11', 1, NULL),
(65, 'dfa', 'princess@gmail.com', 'omer@gmail.com', '2018-07-31 13:43:21', 1, NULL),
(66, 'isksaklsji', 'princess@gmail.com', 'omer@gmail.com', '2018-07-31 13:49:59', 1, NULL),
(67, 'isuq', 'princess@gmail.com', 'omer@gmail.com', '2018-07-31 13:50:05', 1, NULL),
(68, 'suhkuoeu9p', 'princess@gmail.com', 'omer@gmail.com', '2018-07-31 13:50:09', 1, NULL),
(69, 'uyiku', 'princess@gmail.com', 'omer@gmail.com', '2018-07-31 13:50:15', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donateandinterested`
--

CREATE TABLE `donateandinterested` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `donate` int(5) NOT NULL DEFAULT 0,
  `interested` int(5) NOT NULL DEFAULT 0,
  `r_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donateandinterested`
--

INSERT INTO `donateandinterested` (`id`, `email`, `donate`, `interested`, `r_id`) VALUES
(10, 'omer@gmail.com', 1, 0, 52),
(11, 'omer@gmail.com', 1, 0, 53),
(14, 'omer3@gmail.com', 0, 1, 56),
(15, 'omer@gmail.com', 1, 0, 57),
(17, 'omer@gmail.com', 1, 0, 58),
(18, 'omer@gmail.com', 0, 1, 58),
(19, 'omer@gmail.com', 0, 1, 51),
(20, 'omer@gmail.com', 0, 1, 56),
(21, 'omer@gmail.com', 1, 0, 59);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `readbyme` int(11) NOT NULL DEFAULT 0,
  `email_sender` varchar(30) DEFAULT NULL,
  `request_id` int(11) DEFAULT NULL,
  `donate` int(10) NOT NULL DEFAULT 0,
  `interested` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `email`, `title`, `readbyme`, `email_sender`, `request_id`, `donate`, `interested`) VALUES
(1, 'omerkhanjadoon@outlook.com', 'i need B+ blood', 0, 'princess@gmail.com', 77, 0, 0),
(2, 'omer@gmail.com', 'i need B+ blood', 1, 'princess@gmail.com', 77, 0, 0),
(3, 'omerkhanjadoon@outlook.com', 'i wanna donate B+ blood', 0, 'mohsin@gmail.com', 78, 0, 0),
(4, 'omer@gmail.com', 'i wanna donate B+ blood', 1, 'mohsin@gmail.com', 78, 0, 0),
(5, 'princess@gmail.com', 'i need O+ Blood', 1, 'omer@gmail.com', 79, 0, 0),
(6, 'mohsin@gmail.com', 'i need O+ Blood', 1, 'omer@gmail.com', 79, 0, 0),
(7, 'omerkhanjadoon@outlook.com', 'ia wanna donate b+ blood', 0, 'princess@gmail.com', 81, 0, 0),
(8, 'omer@gmail.com', 'ia wanna donate b+ blood', 1, 'princess@gmail.com', 81, 0, 0),
(9, 'omerkhanjadoon@outlook.com', 'need b+ blood', 0, 'mohsin@gmail.com', 82, 0, 0),
(10, 'omer@gmail.com', 'need b+ blood', 1, 'mohsin@gmail.com', 82, 0, 0),
(11, 'omerkhanjadoon@outlook.com', 'need b+ blood', 0, 'princess@gmail.com', 84, 0, 0),
(12, 'omer@gmail.com', 'need b+ blood', 1, 'princess@gmail.com', 84, 0, 0),
(13, 'omerkhanjadoon@outlook.com', 'Need B+ Blood', 0, 'princess@gmail.com', 85, 0, 0),
(14, 'omer@gmail.com', 'Need B+ Blood', 1, 'princess@gmail.com', 85, 0, 0),
(15, 'omerkhanjadoon@outlook.com', 'Need B+ Blood', 0, 'princess@gmail.com', 86, 0, 0),
(16, 'omer@gmail.com', 'Need B+ Blood', 1, 'princess@gmail.com', 86, 0, 0),
(17, 'omerkhanjadoon@outlook.com', 'Need B+ Blood', 0, 'princess@gmail.com', 87, 0, 0),
(18, 'omer@gmail.com', 'Need B+ Blood', 1, 'princess@gmail.com', 87, 0, 0),
(19, 'omerkhanjadoon@outlook.com', 'need b+ blood', 0, 'princess@gmail.com', 88, 0, 0),
(20, 'omer@gmail.com', 'need b+ blood', 1, 'princess@gmail.com', 88, 0, 0),
(21, 'omerkhanjadoon@outlook.com', 'Need B+ Blood', 0, 'princess@gmail.com', 89, 0, 0),
(22, 'omer@gmail.com', 'Need B+ Blood', 1, 'princess@gmail.com', 89, 0, 0),
(23, 'princess@gmail.com', 'dgfdjfhsladhfsk', 1, 'omer@gmail.com', 90, 0, 0),
(24, 'mohsin@gmail.com', 'dgfdjfhsladhfsk', 0, 'omer@gmail.com', 90, 0, 0),
(25, 'omerkhanjadoon@outlook.com', 'dfdktdoe', 0, 'omer@gmail.com', 91, 0, 0),
(26, 'princess@gmail.com', 'sduiyfwerluf', 1, 'omer@gmail.com', 94, 0, 0),
(27, 'mohsin@gmail.com', 'sduiyfwerluf', 0, 'omer@gmail.com', 94, 0, 0),
(28, 'admin', '', 0, 'omer@gmail.com', 100, 0, 0),
(29, 'admin', '', 0, 'omer@gmail.com', 101, 0, 0),
(30, 'admin', '', 0, 'omer@gmail.com', 102, 0, 0),
(31, 'omerkhanjadoon@outlook.com', 'sjdfskdjjks', 0, 'princess@gmail.com', 103, 0, 0),
(32, 'princess@gmail.com', 'dhkfljfed djfhdhfgvned', 1, 'omer@gmail.com', 104, 0, 0),
(33, 'mohsin@gmail.com', 'dhkfljfed djfhdhfgvned', 0, 'omer@gmail.com', 104, 0, 0),
(34, 'princess@gmail.com', 'dhkfljfed djfhdhfgvned', 0, 'omer@gmail.com', 104, 0, 0),
(35, 'mohsin@gmail.com', 'dhkfljfed djfhdhfgvned', 0, 'omer@gmail.com', 104, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rdate` datetime DEFAULT current_timestamp(),
  `pic` varchar(80) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT 0,
  `typing` int(11) NOT NULL DEFAULT 0,
  `last_donated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `gender`, `bloodgroup`, `email`, `mobile`, `password`, `rdate`, `pic`, `online`, `typing`, `last_donated`) VALUES
(39, 'Omer', 'Khan Jadoon', 'male', 'B+', 'omerkhanjadoon@outlook.com', '03135805548', 'omer123', '2018-06-04 16:26:00', 'images/dp/omer.jpg', 0, 0, NULL),
(40, 'Omer', 'Khan', 'male', 'B+', 'omer@gmail.com', '123421332', 'omer123', '2018-06-04 17:35:11', 'images/dp/20228968_103596173658640_3849009834905423197_n.jpg', 1, 0, NULL),
(41, 'Princess', 'Doll', 'female', 'O+', 'princess@gmail.com', '7364734673', 'princess1', '2018-06-04 17:36:20', 'images/dp/female.png', 1, 0, NULL),
(43, 'Mohsin', 'Ali', 'male', 'O+', 'mohsin@gmail.com', '123456', 'mohsin1', '2018-06-06 09:59:24', 'images/dp/mohsin.jpg', 0, 0, NULL),
(44, 'admin', '', 'male', '', 'admin', '', 'admin123', '2018-07-28 11:39:32', NULL, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `bldgroup` varchar(10) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `email`, `title`, `body`, `date`, `bldgroup`, `status`, `role`) VALUES
(70, 'omer@gmail.com', 'Need O+ Blood in 24 hours', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-06-13 14:28:31', 'O+', 3, 0),
(71, 'omer@gmail.com', 'Need B+ Blood', 'need b+ blood if anyone interested to donate', '2018-06-15 10:32:33', 'B+', 2, 0),
(72, 'omer@gmail.com', 'need A+ blood', 'jxdhfkedfkejfl', '2018-06-15 12:48:43', 'A+', 3, 0),
(73, 'princess@gmail.com', 'i wanna donate B+ blood', 'jdhfkdhfdjf', '2018-06-15 15:07:57', 'B+', 2, 1),
(74, 'omer@gmail.com', 'I Need O positive Blood', 'i need o positive blood', '2018-06-15 19:53:01', 'O+', 2, 0),
(75, 'princess@gmail.com', 'i wanna need B+ blood', 'usdisdjsk', '2018-06-15 20:21:47', 'B+', 3, 0),
(76, 'princess@gmail.com', 'i need  B+ blood urgently', 'jshfeufefle jdfieufi neufieuf', '2018-06-16 11:34:38', 'B+', 1, 0),
(77, 'princess@gmail.com', 'i need B+ blood', 'ksdhfklerhflgkjsdfkjgerkfv sdjhfkerfuoerfrkjv', '2018-06-20 18:40:48', 'B+', 2, 0),
(78, 'mohsin@gmail.com', 'i wanna donate B+ blood', 'ekhrerelkfejf ejryeiu ejrfyeiufoeu', '2018-06-21 19:59:17', 'B+', 1, 1),
(79, 'omer@gmail.com', 'i need O+ Blood', 'i need o positive blood', '2018-06-22 18:05:37', 'O+', 2, 0),
(81, 'princess@gmail.com', 'ia wanna donate b+ blood', 'djkefhefjeskfjkjsk', '2018-06-23 11:34:51', 'B+', 2, 1),
(82, 'mohsin@gmail.com', 'need b+ blood', 'urgently need in dhq haripur', '2018-06-29 12:23:34', 'B+', 1, 0),
(83, 'omer@gmail.com', 'dgueyd', 'y7dtrfdurfyseui', '2018-07-02 13:04:11', 'A+', 1, 0),
(84, 'princess@gmail.com', 'need b+ blood', '', '2018-07-31 18:37:13', 'B+', 3, 0),
(85, 'princess@gmail.com', 'Need B+ Blood', '', '2018-07-31 18:48:54', 'B+', 3, 0),
(86, 'princess@gmail.com', 'Need B+ Blood', '', '2018-07-31 18:49:05', 'B+', 3, 0),
(87, 'princess@gmail.com', 'Need B+ Blood', '', '2018-07-31 18:49:19', 'B+', 3, 0),
(88, 'princess@gmail.com', 'need b+ blood', '', '2018-07-31 18:49:27', 'B+', 3, 0),
(89, 'princess@gmail.com', 'Need B+ Blood', '', '2018-07-31 18:49:39', 'B+', 3, 0),
(90, 'omer@gmail.com', 'dgfdjfhsladhfsk', 'dfsergerilguerlgjrk sdjfgioerugoerj', '2018-08-06 17:27:21', 'O+', 2, 0),
(91, 'omer@gmail.com', 'dfdktdoe', 'yeuteoe', '2018-08-06 17:48:26', 'B+', 3, 0),
(92, 'omer@gmail.com', 'duyfostulfwre', 'uidfsyotgu34lwtgwortgje4 rgeuitgyeroiterj', '2018-08-06 18:03:54', 'B-', 3, 0),
(93, 'omer@gmail.com', 'klsdhf;weifsDW', 'JKXDFHLKWERFF', '2018-08-06 18:05:16', 'A+', 3, 0),
(94, 'omer@gmail.com', 'sduiyfwerluf', 'sdkferutjerlgjrl drfguiherogjler', '2018-08-06 18:07:16', 'O+', 3, 0),
(95, 'omer@gmail.com', 'jhasgflwef', 'skefklwerpfgvoedd vdfjgheo;rfgkvjrnd eidfhgje;rk', '2018-08-06 18:21:08', 'AB-', 3, 0),
(96, 'omer@gmail.com', 'suadfwefc', 'weuirkw3idowhd', '2018-08-06 18:22:01', 'A+', 3, 0),
(97, 'omer@gmail.com', 'sdcfhasjcd', 'ekfedcfjlss', '2018-08-06 18:23:18', 'A+', 3, 0),
(98, 'omer@gmail.com', 'hfgjkj,hnkl', 'yukjhjhk,h', '2018-08-06 18:39:15', 'A+', 3, 1),
(99, 'omer@gmail.com', 'donate', 'sdkhfhcjkcn', '2018-08-06 18:51:04', 'AB+', 3, 1),
(100, 'princess@gmail.com', 'hello i need b+ blood if anyone interested', 'jdhfdjf fgjfhkgnf fjghfn gfjghdfn vfjgujfb vfjghfnv fghfn', '2018-08-06 20:19:57', 'B+', 3, 0),
(101, 'princess@gmail.com', 'jdfhernfgksdfv', 'djkgjerfvbsdvfd', '2018-08-06 20:31:14', 'B+', 3, 0),
(102, 'princess@gmail.com', 'jasrwefhedn', 'vbjkdfv,. bxc', '2018-08-06 20:32:49', 'B+', 3, 0),
(103, 'princess@gmail.com', 'sjdfskdjjks', 'jxfdkfjdkfjds', '2018-08-06 20:39:12', 'B+', 3, 0),
(104, 'omer@gmail.com', 'dhkfljfed djfhdhfgvned', 'ckhgvlcnv fcjkgdfklgv dklgdhlfgd', '2018-08-06 20:41:45', 'O+', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodcenter`
--
ALTER TABLE `bloodcenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `donateandinterested`
--
ALTER TABLE `donateandinterested`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey` (`request_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodcenter`
--
ALTER TABLE `bloodcenter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `donateandinterested`
--
ALTER TABLE `donateandinterested`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `reqid` FOREIGN KEY (`request_id`) REFERENCES `request` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
