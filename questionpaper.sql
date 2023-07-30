-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 06:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionpaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(100) NOT NULL,
  `subject_ids` varchar(100) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `mark` varchar(100) NOT NULL,
  `staff_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `subject_ids`, `question`, `mark`, `staff_id`) VALUES
(1, '2', '5+3=?', '1', '2'),
(2, '2', '5*3=?', '1', '2'),
(3, '2', 'x ?', '1', '2'),
(4, '2', 'y ?', '1', '2'),
(5, '2', 'Z ?', '1', '2'),
(6, '2', 'Select the most appropriate ANTONYM of the given word. Perilous ?', '2', '2'),
(7, '2', 'xx ?', '2', '2'),
(8, '2', 'eewf ?', '2', '2'),
(9, '2', 'Select the most appropriate synonym of the given word. Hasty ?', '2', '2'),
(10, '2', 'csksk ?', '2', '2'),
(11, '2', 'sdfsf ?', '5', '2'),
(12, '2', 'dsfsdf ?', '5', '2'),
(13, '2', 'Select the most appropriate ANTONYM of the given word. Perilous ?', '5', '2'),
(14, '2', 'sfsds ?', '5', '2'),
(15, '2', 'ffdsfsv ?', '5', '2'),
(16, '2', 'dfsdfs ?', '5', '2'),
(17, '2', 'dfsfsfs ?', '10', '2'),
(18, '2', 'dsfsfs ?', '10', '2'),
(19, '2', 'kckvdsk ? ', '10', '2'),
(20, '2', 'sfsfsf ?', '10', '2'),
(21, '2', 'dfsfsfs ?', '10', '2'),
(22, '2', 'dssd ?', '1', '2'),
(23, '2', 'sfslflsf ?', '2', '2'),
(24, '2', 'sdasfsfdsg ?', '5', '2'),
(25, '2', 'dsfdsfsf ?', '10', '2'),
(26, '2', ' Select the most appropriate ANTONYM of the bracketed word in the given sentence. It is irrelevance, at least to me, whether the grant was (improvident) or no.', '10', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(100) NOT NULL,
  `subject_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
(2, 'Maths'),
(3, 'English'),
(4, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `subject_request`
--

CREATE TABLE `subject_request` (
  `id` int(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `staff_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_request`
--

INSERT INTO `subject_request` (`id`, `subject_name`, `staff_id`, `status`) VALUES
(1, 'Science', '2', 'Added');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `username`, `password`, `dept`, `doj`, `city`, `address`) VALUES
(2, 'Test', 'test@gmail.com', '9876543210', 'test', 'test', 'BSc (IT)', '', 'Tiruppur', '1/343,Samynathan Illam\r\nSaravana Nagar, A.Kumrumbalayam, Cheyur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `subject_request`
--
ALTER TABLE `subject_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject_request`
--
ALTER TABLE `subject_request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
