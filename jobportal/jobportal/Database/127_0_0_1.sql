-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 10:47 AM
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
-- Database: `jobportal`
--
CREATE DATABASE IF NOT EXISTS `jobportal1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jobportal`;

-- --------------------------------------------------------

--
-- Table structure for table `appliedjob`
--

CREATE TABLE `appliedjob` (
  `aid` int(11) NOT NULL,
  `jid` int(11) DEFAULT NULL,
  `jseekerid` varchar(200) DEFAULT NULL,
  `adate` varchar(50) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appliedjob`
--

INSERT INTO `appliedjob` (`aid`, `jid`, `jseekerid`, `adate`, `STATUS`) VALUES
(1, 1, 'd@gmail.com', '2020-12-19', 'True'),
(2, 1, 'd@gmail.com', '2020-12-19', 'True'),
(3, 1, 'd@gmail.com', '2020-12-19', 'True'),
(4, 4, 'd@gmail.com', '2020-12-19', 'True'),
(5, 1, 'sharmashiv20020328@gmail.com', '2020-12-19', 'True'),
(6, 4, 'pragati@gmail.com', '2020-12-20', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cimage` varchar(100) DEFAULT NULL,
  `cdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cimage`, `cdate`) VALUES
(1, 'Software Developer', 'dev.png', '2020-12-17'),
(3, 'Accountant ', 'account.png', '2020-12-17'),
(4, 'Delivery Boy', 'Delivery-Boy-Clipart-Png.png', '2020-12-17'),
(11, 'HR MANAGER', 'hr.png', '2020-12-18'),
(12, 'Security', 'dev.png', '2020-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`, `date`) VALUES
('Divya Rai', 'd@gmail.com', 'bs u hi', 'Handle Level-1 Queries, Make Sales, Renewal or Collection Calls & Get Leads Automatically. Enable Hyper-Automation in Banking. Integrate with Existing CRMs or Digital Applications', '2020-12-18'),
('Shivam Sharma', 'sharmashiv20020328@gmail.com', 'mje ke liye', 'You may contact us by contact number or filling in this form any time you need professional support or have any question', '2020-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `jobdetails`
--

CREATE TABLE `jobdetails` (
  `jid` int(11) NOT NULL,
  `rid` varchar(100) NOT NULL,
  `jcategory` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `salary` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `jdesc` varchar(300) NOT NULL,
  `skill` varchar(300) NOT NULL,
  `location` varchar(100) NOT NULL,
  `post` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobdetails`
--

INSERT INTO `jobdetails` (`jid`, `rid`, `jcategory`, `title`, `salary`, `experience`, `jdesc`, `skill`, `location`, `post`, `date`, `status`) VALUES
(1, 'd@gmail.com', 'Software Developer', '.NET DEVELOPER', 200000, 2, 'With Over 200 Thousand Job Listings You Can Start & End Your Search With Adzuna. Looking For A Job? Find Your Perfect IT Job Online & Apply With Adzuna Today. View jobs in your', 'C# , HTML -5 , CSS-5, ASP.NET', 'Lucknow', 5, '2020-12-18', 'True'),
(4, 'm@gmail.com', 'Delivery Boy', 'Delivery Boy in Lucknow', 50000, 4, 'Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.', 'driving licence', 'Hyderabad', 5, '2020-12-18', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekerregister`
--

CREATE TABLE `jobseekerregister` (
  `name` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `cdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseekerregister`
--

INSERT INTO `jobseekerregister` (`name`, `date`, `mobno`, `email`, `pass`, `gender`, `qualification`, `skill`, `pic`, `cv`, `cdate`) VALUES
('Divya Rai', '2020-12-12', '123456', 'd@gmail.com', '12345', 'on', 'on', 'qwerstdfyjgkhl', 'IMG-20201112-WA0024.jpg', 'IMG-20200310-WA0006.jpg', '2020-12-17'),
('Pragati Nayak', '1998-12-12', '8090809080', 'pragati@gmail.com', '12', 'FEMALE', 'DIPLOMA', 'HTML - 5, JS, C, PHP', 'IMG-20201112-WA0008.jpg', 'IMG-20201112-WA0015.jpg', '2020-12-20'),
('Rahul Verma', '1990-03-28', '9628290216', 'r@gmail.com', '1', 'MALE', 'B.TECH', 'cvfbgfnhgdfsgdhsdf', 'IMG-20201112-WA0009.jpg', 'IMG-20201112-WA0015.jpg', '2020-12-19'),
('Shivam Sharma', '2000-03-28', '8081345349', 'sharmashiv20020328@gmail.com', '1', 'on', 'on', 'sdfghjkdsfghj', 'IMG-20200310-WA0006.jpg', 'IMG-20201112-WA0004.jpg', '2020-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `rregister`
--

CREATE TABLE `rregister` (
  `name` varchar(100) DEFAULT NULL,
  `mobno` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `clogo` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `ctype` varchar(100) DEFAULT NULL,
  `fileds` varchar(300) DEFAULT NULL,
  `rdate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rregister`
--

INSERT INTO `rregister` (`name`, `mobno`, `email`, `password`, `cname`, `clogo`, `location`, `ctype`, `fileds`, `rdate`) VALUES
('Amit Singh', '457867856', 'a@gmail.com', '1', 'Augurs India Pvt. Ltd.', 'download.png', 'Lucknow', 'PRIVATE', 'Development, Mobile Application', '2020-12-17'),
('Divya Rai', '123456789', 'd@gmail.com', '1', 'Techpile Technology Pvt. Ltd.', 'techpile.png', 'delhi', 'PRIVATE', 'software doveloper', '2020-12-18'),
('Sivam Sharma', '43765645', 'm@gmail.com', '1', 'Microsoft', 'microsoft.png', 'Hyderabad', 'PRIVATE', 'Development, Mobile Application', '2020-12-17'),
('Rahul Verma', '700347747', 'r@gmail.com', '1', 'Techpile Technology Pvt. Ltd.', 'techpile.png', 'Lucknow', 'PRIVATE', 'Development, Training', '2020-12-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliedjob`
--
ALTER TABLE `appliedjob`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `jobdetails`
--
ALTER TABLE `jobdetails`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `jobseekerregister`
--
ALTER TABLE `jobseekerregister`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rregister`
--
ALTER TABLE `rregister`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appliedjob`
--
ALTER TABLE `appliedjob`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobdetails`
--
ALTER TABLE `jobdetails`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
