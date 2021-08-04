-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 07:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `UserName`, `Password`) VALUES
(1, 'Admin', 'Admin123'),
(2, 'Akash', '123');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `ID` int(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`ID`, `UserName`, `Date`, `Time`) VALUES
(10, 'Admin', '2021-05-20', '06:38:36'),
(11, 'Akash', '2021-05-20', '08:23:54'),
(12, 'Akash', '2021-05-20', '08:27:01'),
(13, 'Akash', '2021-05-20', '08:27:34'),
(14, 'Admin', '2021-05-20', '08:32:07'),
(15, 'Akash', '2021-05-20', '10:10:13'),
(16, 'Admin', '2021-05-20', '12:56:26'),
(17, 'Admin', '2021-05-21', '07:00:05'),
(18, 'Admin', '2021-05-21', '07:46:03'),
(24, 'Admin', '2021-05-21', '09:07:42'),
(25, 'Admin', '2021-05-21', '09:08:21'),
(26, 'Admin', '2021-05-21', '09:11:25'),
(27, 'Admin', '2021-05-21', '13:27:21'),
(28, 'Admin', '2021-05-22', '06:37:10'),
(29, 'Admin', '2021-05-22', '09:23:28'),
(30, 'Admin', '2021-05-22', '10:03:29'),
(31, 'Admin', '2021-05-22', '10:13:17'),
(32, 'Admin', '2021-05-22', '11:02:21'),
(33, 'Admin', '2021-05-24', '10:25:11'),
(34, 'Admin', '2021-06-17', '11:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `adminogout`
--

CREATE TABLE `adminogout` (
  `ID` int(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminogout`
--

INSERT INTO `adminogout` (`ID`, `UserName`, `Date`, `Time`) VALUES
(1, 'Admin', '2021-05-21', '09:08:23'),
(2, 'Admin', '2021-05-21', '09:11:28'),
(3, 'Admin', '2021-05-21', '14:00:46'),
(4, 'Admin', '2021-05-22', '06:37:58'),
(5, 'Admin', '2021-05-22', '09:24:45'),
(6, 'Admin', '2021-05-22', '10:04:51'),
(7, 'Admin', '2021-05-22', '10:14:33'),
(8, 'Admin', '2021-05-22', '11:04:01'),
(9, 'Admin', '2021-06-17', '11:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MobileNo` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `MobileNo`, `Message`) VALUES
(1, 'aksj', 'asa@gmail.com', '09574919445', 'fisrt'),
(2, 'Akash', 'asa@gmail.com', '9574919446', 'This is A First Message'),
(3, 'Ansh', 'agravatakash44@gmail.com', '6354192565', 'You can Book A Tour Also'),
(4, 'Karan', 'karan@gmail.com', '68123129312123', 'adasdsadasd'),
(5, 'Akash Agravat', 'agravatakash4@gmail.com', '9574919445', 'Helllo\r\n\r\nthis is a first message'),
(6, 'Ansh', 'ansh12@gmail.com', '7255819445', 'This is a first message'),
(7, 'Jay', 'jay@gmail.com', '9574971925', 'This is a First Message'),
(8, 'Jaydeep', 'jaydip123@gmail.com', '6354119445', 'This is a First Message'),
(9, 'Mayur', 'mayur@gmail.com', '1234567890', 'Hi I am Mayur'),
(10, 'Ashok', 'ashok@gmail.com', '5432112345', 'Hi I am Ashok\r\n\r\nthis is my first message'),
(11, 'Sumit', 'sumit123@gmail.com', '5678919245', 'Hi \r\n\r\nthis is my first message'),
(12, 'Ashish', 'ashish@gmail.com', '1312321312', 'This is a first message');

-- --------------------------------------------------------

--
-- Table structure for table `psglogout`
--

CREATE TABLE `psglogout` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psglogout`
--

INSERT INTO `psglogout` (`ID`, `UserName`, `Date`, `Time`) VALUES
(1, 'asa@gmail.com', '2021-05-21', '11:35:14'),
(2, 'agravatakash44@gmail.com', '2021-05-21', '12:17:17'),
(3, 'agravatakash44@gmail.com', '2021-05-21', '12:25:49'),
(4, 'agravatakash44@gmail.com', '2021-05-21', '13:25:17'),
(5, 'agravatakash44@gmail.com', '2021-05-22', '06:31:07'),
(6, 'agravatakash4@gmail.com', '2021-05-22', '09:23:13'),
(7, 'jay123@gmail.com', '2021-05-22', '10:03:14'),
(8, 'jaydip123@gmail.com', '2021-05-22', '10:13:05'),
(9, 'ashok12@gmail.com', '2021-05-22', '11:02:07'),
(10, 'agravatakash44@gmail.com', '2021-05-24', '10:23:58'),
(11, 'ashok12@gmail.com', '2021-06-17', '11:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `ID` int(11) NOT NULL,
  `Origin` varchar(100) NOT NULL,
  `Destination` varchar(100) NOT NULL,
  `Route` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`ID`, `Origin`, `Destination`, `Route`) VALUES
(1, 'Jamnagar', 'Mumbai', 'Mumbai'),
(2, 'Jamnagar', 'Bangalore', 'Jamnagar'),
(3, 'Jamnagar', 'Hyderabad', 'Hyderabad'),
(4, 'Jamnagar', 'Vishakhapatnam', 'Vishakhapatnam'),
(5, 'Jamnagar', 'Chennai', 'Chennai'),
(6, 'Jamnagar', 'Delhi', 'Bangalore'),
(7, 'Jamnagar', 'Cochin', 'Delhi'),
(8, 'Jamnagar', 'Coimbatore', 'Cochin'),
(9, 'Jamnagar', 'Nagpur', 'Coimbatore'),
(10, 'Jamnagar', 'Goa', 'Nagpur'),
(11, 'Jamnagar', 'Dubai', 'Goa'),
(12, 'Mumbai', 'Jamnagar', 'Dubai'),
(13, 'Bangalore', 'Jamnagar', ''),
(14, 'Hyderabad', 'Jamnagar', ''),
(15, 'Vishakhapatnam', 'Jamnagar', ''),
(16, 'Chennai', 'Jamnagar', ''),
(17, 'Delhi\r\n', 'Jamnagar', ''),
(18, 'Cochin\r\n', 'Jamnagar', ''),
(19, 'Coimbatore\r\n', 'Jamnagar', ''),
(20, 'Nagpur', 'Jamnagar', ''),
(21, 'Goa', 'Jamnagar', ''),
(22, 'Dubai', 'Jamnagar', ''),
(23, 'Ahemdabad', 'Porbandar', ''),
(24, 'Ahemdabad', 'Jamnagar', ''),
(25, 'Rajkot', 'Jamnagar', ''),
(26, 'Ahemdabad', 'Goa', ''),
(27, 'Rajkot', 'Porbandar', ''),
(28, 'Ahemdabad', 'Jamnagar', ''),
(29, 'Jamnagar', 'Rajkot', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_book`
--

CREATE TABLE `ticket_book` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `AltMobileNo` varchar(200) NOT NULL,
  `Origin` varchar(200) NOT NULL,
  `Destination` varchar(200) NOT NULL,
  `Passengers` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `RegDate` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_book`
--

INSERT INTO `ticket_book` (`Id`, `UserName`, `AltMobileNo`, `Origin`, `Destination`, `Passengers`, `Date`, `RegDate`) VALUES
(4, 'asa@gmail.com', '2132131313132', 'Coimbatore', 'Chennai', '9574919445', '2021-05-29', '2021-05-20'),
(5, 'asa@gmail.com', '543234234234', 'Goa', 'Chennai', '12', '2021-05-21', '2021-05-20'),
(6, 'asa@gmail.com', '21312321312321', 'Mumbai', 'Nagpur', '11', '2021-05-11', '2021-05-21 09:20:39'),
(7, 'asa@gmail.com', '2312312312', 'Chennai', 'Cochin', '1', '2021-05-28', '2021-05-21 09:21:12'),
(8, 'asa@gmail.com', '+916354192565', 'Chennai', 'Cochin', '1', '2021-05-24', '2021-05-21 09:25:00'),
(9, 'asa@gmail.com', '31311321323', 'Jamnagar', 'Hyderabad', '2', '2021-05-14', '2021-05-21 09:26:49'),
(10, 'asa@gmail.com', '23123', 'Cochin', 'Goa', '2', '2021-06-01', '2021-05-21 09:35:22'),
(11, 'asa@gmail.com', '3123', 'Goa', 'Coimbatore', '3', '2021-05-26', '2021-05-21 09:44:58'),
(12, 'asa@gmail.com', '4323', 'Nagpur', 'Hyderabad', '2', '2021-05-18', '2021-05-21 09:50:38'),
(13, 'asa@gmail.com', '1231231231231312312', 'Vishakhapatnam', 'Chennai', '0', '2021-05-19', '2021-05-21 10:04:52'),
(14, 'asa@gmail.com', '12312312', 'Goa', 'Bangalore', '0', '2021-06-02', '2021-05-21 10:06:49'),
(15, 'asa@gmail.com', '2131', 'Jamnagar', 'Coimbatore', '2', '2021-06-04', '2021-05-21 10:13:00'),
(16, 'asa@gmail.com', '2131', 'Goa', 'Chennai', '2', '2021-06-03', '2021-05-21 10:13:21'),
(17, 'asa@gmail.com', '23', 'Coimbatore', 'Delhi', '21', '2021-05-29', '2021-05-21 10:14:11'),
(18, 'asa@gmail.com', '2132313123', 'Hyderabad', 'Chennai', '21', '2021-05-19', '2021-05-21 10:14:58'),
(19, 'asa@gmail.com', '2313123', 'Goa', 'Mumbai', '1', '', '2021-05-21 10:19:17'),
(20, 'asa@gmail.com', '9925978454', 'Delhi', 'Chennai', '2', '2021-05-21', '2021-05-21 10:25:53'),
(21, 'asa@gmail.com', '3213123213', 'Cochin', 'Vishakhapatnam', '10', '2021-06-05', '2021-05-21 10:27:22'),
(22, 'asa@gmail.com', '1231312', 'Coimbatore', 'Bangalore', '1', '2021-05-29', '2021-05-21 10:29:13'),
(23, 'asa@gmail.com', '23213123', 'Goa', 'Coimbatore', '1', '2021-05-29', '2021-05-21 10:30:00'),
(24, 'asa@gmail.com', '21312312', 'Dubai', 'Jamnagar', '12', '2021-06-05', '2021-05-21 10:31:30'),
(25, 'asa@gmail.com', '213213213213', 'Nagpur', 'Vishakhapatnam', '2', '2021-06-23', '2021-05-21 10:35:16'),
(26, 'agravatakash44@gmail.com', '6354192565', 'Jamnagar', 'Goa', '1', '2021-06-05', '2021-05-21 11:38:27'),
(27, 'agravatakash4@gmail.com', '9925978454', 'Goa', 'Nagpur', '2', '2021-05-29', '2021-05-22 09:22:39'),
(28, 'jay123@gmail.com', '9925978758', 'Jamnagar', 'Goa', '3', '2021-06-05', '2021-05-22 10:02:20'),
(29, 'jaydip123@gmail.com', '1234512345', 'Coimbatore', 'Dubai', '3', '2021-06-04', '2021-05-22 10:12:48'),
(30, 'ashok12@gmail.com', '1234567891', 'Goa', 'Dubai', '1', '2021-06-05', '2021-05-22 11:01:19'),
(31, 'ashok12@gmail.com', '', 'Mumbai', 'Delhi', '1', '2021-06-26', '2021-06-17 11:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Birthdate` varchar(100) NOT NULL,
  `MobileNo` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Pincode` varchar(10) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FirstName`, `MiddleName`, `LastName`, `Email`, `Birthdate`, `MobileNo`, `Address`, `City`, `Country`, `Pincode`, `Password`) VALUES
(1, 'Akash', 'Shaileshbhai', 'Agravat', 'agravataksh4@gmail.com', '18/06/2001', '9574919445', '', '', '', '0', 'Akash123'),
(21, 'Akashkumar', 'Shaileshbhai', 'Agravat', 'asa@gmail.com', '2001-06-18', '9574919445', 'BHARVADVAS HADIYANA BERAJA ', 'JAMNAGAR', 'India', '361011', 'Akash123'),
(22, 'Karan', 'S', 'Agravat', 'akash@gmail.com', '2021-05-11', '9574919445', '', '', '', '0', 'Karan123'),
(23, 'Ansh', 'sasa', 'RAJPUT', 'ansh@gmail.com', '2021-05-11', '9574919445', '', '', '', '0', '1234'),
(24, 'Mayur', 'M', 'Bhimani', 'mayur@gmail.com', '2021-05-03', '7265871925', '', '', '', '0', 'Mayur123'),
(25, 'Jaydip', 'M', 'Bhetariya', 'jaydip@gmail.com', '2021-05-11', '9999999999', '', '', '', '0', '12345'),
(26, 'Ansh', 'a', 'RAJPUT', 'ansh1@gmail.com', '2021-05-17', '6354192565', '', '', '', '0', 'Ansh@123'),
(27, 'sa', 'AS', 'AS', 'asas@gamil.com', '2021-05-09', '4123414124213123213213', '', '', '', '0', '1234'),
(28, 'sdas', 'ASa', 'Sasa', 'jett@gmail.com', '2021-05-25', '2312312312312312', '', '', '', '0', '12345'),
(29, 'Akash', 'Shaileshbhai', 'Agravat', 'agravatakash44@gmail.com', '2001-06-18', '9574919445', 'BHARVADVAS HADIYANA BERAJA JAMNAGAR', 'JAMNAGAR', 'India', '361011', 'Akash123'),
(30, 'Akash', 'Shaileshbhai', 'Agravat', 'agravatakash4@gmail.com', '2001-06-18', '9574919445', 'BHARVADVAS HADIYANA BERAJA JAMNAGAR', 'JAMNAGAR', 'India', '361011', 'Akash9263@'),
(31, 'Ansh', 'Keyurbhai', 'Rajput', 'ansh@gmail.com', '2009-07-07', '7265819445', '', '', '', '', 'Ansh123'),
(32, 'Jay', 'Maheshbhai', 'Parmar', 'jay123@gmail.com', '2001-06-20', '9574971925', 'Bharvadvas hadiyana Beraja Jamnagar', 'Jamnagar', 'India', '361011', 'Jay123@'),
(33, 'jaydip', 'savjibhai', 'parmar', 'jaydip123@gmail.com', '2000-09-28', '9529919256', 'Porbandar', 'Porbandar', 'India', '361011', 'Jaydip123'),
(34, 'Mayur', 'Jayantbhai', 'Parmar', 'mayur@gmail.com', '2001-06-20', '7265273451', '', '', '', '', 'Mayur@123'),
(35, 'Sumit', 'Rajendrabhai', 'Parmar', 'sumit123@gmail.com', '2001-06-19', '7324573245', '', '', '', '', 'Sumit@123'),
(36, 'Ashok', 'Maheshbhai', 'Parmar', 'ashok12@gmail.com', '2001-10-22', '6789119876', 'Jamnagar', 'Jamnagaar', 'India', '3601011', 'Ashok1233');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `ID` int(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`ID`, `UserName`, `Date`, `Time`) VALUES
(4, 'asa@gmail.com', '2021-05-15', '09:42:24'),
(5, 'asa@gmail.com', '2021-05-15', '10:03:18'),
(6, 'asa@gmail.com', '2021-05-15', '11:53:12'),
(7, 'asa@gmail.com', '2021-05-15', '12:04:01'),
(8, 'asa@gmail.com', '2021-05-15', '12:09:46'),
(9, 'asa@gmail.com', '2021-05-15', '12:12:05'),
(10, 'asa@gmail.com', '2021-05-15', '12:12:30'),
(11, 'asa@gmail.com', '2021-05-15', '12:13:42'),
(12, 'asa@gmail.com', '2021-05-15', '12:17:10'),
(13, 'asa@gmail.com', '2021-05-15', '12:21:31'),
(14, 'asa@gmail.com', '2021-05-16', '05:18:42'),
(15, 'asa@gmail.com', '2021-05-16', '07:27:00'),
(16, 'asa@gmail.com', '2021-05-19', '07:37:52'),
(17, 'asa@gmail.com', '2021-05-20', '05:12:48'),
(18, 'akash@gmail.com', '2021-05-20', '08:14:22'),
(19, 'asa@gmail.com', '2021-05-20', '10:19:08'),
(20, 'asa@gmail.com', '2021-05-21', '07:45:45'),
(21, 'asa@gmail.com', '2021-05-21', '09:20:13'),
(22, 'agravatakash44@gmail.com', '2021-05-21', '11:37:10'),
(23, 'agravatakash44@gmail.com', '2021-05-21', '12:15:44'),
(24, 'agravatakash44@gmail.com', '2021-05-21', '12:17:31'),
(25, 'agravatakash44@gmail.com', '2021-05-21', '12:25:59'),
(26, 'agravatakash44@gmail.com', '2021-05-22', '06:26:25'),
(27, 'agravatakash4@gmail.com', '2021-05-22', '09:20:53'),
(28, 'ansh@gmail.com', '2021-05-22', '09:52:39'),
(29, 'jay123@gmail.com', '2021-05-22', '10:00:43'),
(30, 'jaydip123@gmail.com', '2021-05-22', '10:10:57'),
(31, 'mayur@gmail.com', '2021-05-22', '10:50:58'),
(32, 'ashok12@gmail.com', '2021-05-22', '10:59:49'),
(33, 'agravatakash44@gmail.com', '2021-05-24', '10:13:04'),
(34, 'ashok12@gmail.com', '2021-06-17', '11:53:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `adminogout`
--
ALTER TABLE `adminogout`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psglogout`
--
ALTER TABLE `psglogout`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ticket_book`
--
ALTER TABLE `ticket_book`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `adminogout`
--
ALTER TABLE `adminogout`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `psglogout`
--
ALTER TABLE `psglogout`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ticket_book`
--
ALTER TABLE `ticket_book`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
