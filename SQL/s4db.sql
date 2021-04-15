-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2021 at 12:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s4db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'please', '2021-04-02 14:47:55'),
(2, 'ishu', 'hi', '2021-02-26 11:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `amountneeded`
--

CREATE TABLE `amountneeded` (
  `id` int(11) NOT NULL,
  `AmountReq` int(20) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amountneeded`
--

INSERT INTO `amountneeded` (`id`, `AmountReq`, `PostingDate`) VALUES
(1, 2000, '2017-06-30 20:33:50'),
(2, 5000, '2017-06-30 20:34:00'),
(3, 10000, '2017-06-30 20:34:05'),
(4, 15000, '2017-06-30 20:34:10'),
(5, 20000, '2017-06-30 20:34:13'),
(6, 25000, '2017-06-30 20:34:18'),
(7, 30000, '2021-02-25 08:15:51'),
(8, 35000, '2021-02-25 08:16:14'),
(9, 40000, '2021-02-25 08:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'What is your name?', 'Hila'),
(2, 'Heyy!', 'Hey! How can I help you?'),
(3, 'Hola!', 'Hola! How you doing?'),
(4, 'How can I sponsor the education of a child?', 'Please click on the Search kids option or Sponsor kids option in the menu!');

-- --------------------------------------------------------

--
-- Table structure for table `enrollkid`
--

CREATE TABLE `enrollkid` (
  `id` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `GuardianName` varchar(100) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `AmountReq` int(11) NOT NULL,
  `School` varchar(255) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `proof` varchar(200) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollkid`
--

INSERT INTO `enrollkid` (`id`, `StudentName`, `MobileNumber`, `GuardianName`, `Gender`, `Age`, `AmountReq`, `School`, `Message`, `image`, `proof`, `PostingDate`, `status`) VALUES
(1, 'Ganesh', '897589752', 'Arun', 'Male', 12, 5000, 'ABC School', '', 'Ganesh.png', 'GaneshB.png', '2021-02-24 20:14:16', 1),
(2, 'Elena', '5252525252', 'Damon', 'Female', 8, 10000, 'PSG school', '', 'Elena.png', 'ElenaB.png', '2021-02-24 20:48:11', 1),
(3, 'Arun', '7894563210', 'Rukmani', 'Male', 12, 2000, 'AQS School', '', 'Arun.png', 'ArunB.png', '2017-07-01 07:21:21', 1),
(4, 'Tesla', '7418529630', 'Draco', 'Female', 8, 15000, 'POL School', '', 'Tesla.png', 'TeslaB.png', '2021-02-25 07:21:42', 1),
(5, 'Jacki', '1234569870', 'Julie', 'Male', 9, 25000, 'SED School', '', 'Jackie.png', 'JackieB.png', '2021-02-25 09:00:18', 1),
(6, 'Ishuu', '2569874512', 'Radha', 'Female', 6, 45000, 'SSM School', '', 'Ishu.png', 'IshuB.png', '2021-02-25 08:26:02', 1),
(7, 'Bruno', '7845691230', 'Theogu', 'Prefer not to say', 13, 40000, 'TRS School', 'Disabled kid', 'Bruno.png', 'BrunoB.png', '2021-02-25 08:26:43', 1),
(8, 'Jessie', '4569871230', 'Karthik', 'Female', 11, 30000, 'POL School', ' ', 'Jessi.png', 'JessieB.png', '2021-02-25 08:37:35', 1),
(9, 'Sou', '1456239087', 'Kala', 'Female', 10, 30000, 'IPS School', ' Kid interested in sports', 'Sou.png', 'SouB.png', '2021-02-25 08:47:33', 1),
(10, 'Rakshitaa', '7890564321', 'Rio', 'Female', 6, 35000, 'MOP School', ' ', 'd63380ba1ff5224fa4e98d35bcefe6321614407591.png', 'RakshitaB.png', '2021-02-27 06:33:11', 1),
(11, 'Balaa', '5647890321', 'Baskar', 'Male', 7, 15000, 'EST School', ' ', 'c015c0e588a6b1ae625919b9fed3db861614408496.png', 'BalaB.png', '2021-02-27 06:48:16', 1),
(12, 'Sakthii', '8906543210', 'Sheela', 'Male', 14, 40000, 'TYU School', ' ', '2788d309340f34480e27548ad51350801614408580.png', 'SakthiB.png', '2021-02-27 06:49:40', 1),
(13, 'Bonnie', '908456321', 'Rea', 'Female', 11, 5000, 'WSR School', ' ', 'a0486567feaa8d9a1c489c28248941491614408639.png', 'BonnieB.png', '2021-02-27 06:50:39', 1),
(14, 'Ashwin', '7890654321', 'Hari', 'Male', 10, 10000, '', ' ', '1c793358b1e85afd1a6e195339da77321614606718.png', '354c39ec834da293a9dc99aa4bed4b791614606718.png', '2021-03-01 13:51:58', 1),
(97, 'Shriya', '678236879', 'Jacob', 'Female', 10, 10000, 'Dhrishyam ', ' Disabled kid', 'f60db332503065d63d3beee90a1ae7451615490371.png', '1109f8552c60c98283d2f46588b88c5a1615490371.png', '2021-03-11 19:19:31', 1),
(98, 'Kanii', '9098823767', 'Gurukumar', 'Female', 8, 5000, 'YHJ School', ' ', '254db529ef9c3ef8b8677b5f19d889661616429987.png', 'e660839859d357f43557e89755418eb91616429987.png', '2021-03-22 16:19:47', 0),
(99, 'Arun', '0999999999', 'Karthi', 'Female', 10, 10000, '', ' ', 'e6e6a5bae24800cea0f92ba7f1f393931617374015docx', 'ee9cb83cf1649469fdca599bb44f0b161617374015.png', '2021-04-02 14:33:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Elena \r\nCEO - FUNDISA																							', 'contact@fundisa.com', '7412589689');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(21, 'Hii', 'jj@gmail.com', '898034809', 'ajndkma', '2021-03-11 12:26:57', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintb`
--
ALTER TABLE `admintb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amountneeded`
--
ALTER TABLE `amountneeded`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollkid`
--
ALTER TABLE `enrollkid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintb`
--
ALTER TABLE `admintb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `amountneeded`
--
ALTER TABLE `amountneeded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enrollkid`
--
ALTER TABLE `enrollkid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
