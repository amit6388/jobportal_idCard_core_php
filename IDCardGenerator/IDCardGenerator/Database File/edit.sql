-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 12:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` text DEFAULT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('Akash', 'akashdc2017@gmail.com', '123'),
('Akash', 'akashdc2017@gmail.com', '1234'),
('Akash1', '1@1', '1'),
('Sid', '1@1', 'aaa'),
('Akash', '1@1', '1'),
('1', '2@2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(50) NOT NULL,
  `profile` text NOT NULL,
  `name` text NOT NULL,
  `f_name` text NOT NULL,
  `m_name` text NOT NULL,
  `dob` date NOT NULL,
  `n` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `class` text NOT NULL,
  `u_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `profile`, `name`, `f_name`, `m_name`, `dob`, `n`, `mobile`, `class`, `u_id`) VALUES
(78, '617e17da90790.jpeg', 'Dhanish Yadav', 'Ram Ashish Yadav', 'Meera Devi', '2004-01-01', 'E19273735500016', '8303730327', 'Computer Science Eng.3rd Y', 98),
(79, '617e187c92d93.jpeg', 'Shivam Kumar', 'Ajay Pal Singh', 'Mamta Devi', '2003-02-26', 'E19273732800045', '8756374298', 'Electrical Eng. 3rd Y', 70),
(80, '617e1a5d6ab27.jpg', 'Amit Chauhan', 'Anil Kumar', 'Geniya Devi', '2002-04-09', 'E19273735500008', ' 638824671', 'Computer Science Eng.3rd Y', 56),
(81, '617e1c2aa0a6d.jpg', 'Saurabh Chauhan', 'Saroj Chauhan', 'Bindu Devi', '2002-05-03', 'E19273732200039', '9452945212', 'Civil Eng. 3rd Y', 30),
(82, '617e1d10e2969.jpg', 'Neeraj sahani', 'Sitaram Sahani', 'Dhanwati Devi', '1998-07-05', 'E19273732200027', '7388104472', 'Civil Eng. 3rd Y', 28),
(83, '617e1d92b2b8c.jpg', 'Ashish Yadav', 'Ravindra Yadav', 'Jankee Devi', '2003-08-05', 'E19273732200011', '8577947186', 'Civil Eng. 3rd Y', 20),
(84, '617f22eee992f.jpg', 'AMIT SINGH', 'ANIL KUMAR', ' GENIYA DEVI', '2002-04-09', 'E19273735500008', '6388246712', 'Computer Science Eng.3rd Y', 33),
(85, '617f5878958c6.jpg', 'Mohini chor', '  Mishra', 'Sandhya Mishra', '2003-07-14', 'E20273735500032', '6307006787', 'Computer Science Eng. 2nd Y', 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
