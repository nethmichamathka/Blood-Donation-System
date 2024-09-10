-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 08:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `ap`
--

CREATE TABLE `ap` (
  `AID` int(10) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Fullname` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Age` int(5) NOT NULL,
  `mobileNumber` int(12) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `nearestlocation` varchar(30) NOT NULL,
  `DonateDate` date NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Weight` varchar(10) NOT NULL,
  `Dob` date NOT NULL,
  `DonatedTimes` int(10) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `illness` varchar(10) NOT NULL,
  `If` varchar(10) NOT NULL,
  `pills` varchar(10) NOT NULL,
  `tattoos` varchar(10) NOT NULL,
  `unsafesex` varchar(10) NOT NULL,
  `abroad` varchar(10) NOT NULL,
  `earpiercing` varchar(10) NOT NULL,
  `symptoms` varchar(10) NOT NULL,
  `AIDS` varchar(10) NOT NULL,
  `needle` varchar(10) NOT NULL,
  `illnesses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ap`
--

INSERT INTO `ap` (`AID`, `Firstname`, `Fullname`, `Address`, `Age`, `mobileNumber`, `Email`, `nearestlocation`, `DonateDate`, `Sex`, `Weight`, `Dob`, `DonatedTimes`, `BloodGroup`, `illness`, `If`, `pills`, `tattoos`, `unsafesex`, `abroad`, `earpiercing`, `symptoms`, `AIDS`, `needle`, `illnesses`) VALUES
(1, '', 'vidura', 'fvdfv', 53, 2147483647, 'viduraruwantha2002@g', 'Location 1', '2023-10-10', 'Male', '53', '2023-10-01', 5, 'O-', 'No', 'fyu', 'No', 'No', 'No', 'No', 'No', 'Faint', 'Yes', 'No', 'Malaria');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `InquiryID` int(10) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`InquiryID`, `Firstname`, `Name`, `Email`, `Message`) VALUES
(1, 'akash', 'Vidura', 'viduraruwantha2002@gmail.com', 'hdkcbakbcak 123'),
(14, 'akash', 'vidura', 'akash.savi@gmail.com', 'dfsafsdfsdfds22222');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Userid` int(11) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `DateofBirth` date NOT NULL,
  `IDNumber` varchar(12) NOT NULL,
  `Emailaddress` varchar(20) NOT NULL,
  `Phonenumber` int(12) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Userid`, `Firstname`, `Lastname`, `DateofBirth`, `IDNumber`, `Emailaddress`, `Phonenumber`, `City`, `Password`) VALUES
(3, 'Vidura', 'Rathnayaka', '2002-05-14', '200213503995', 'viduraruwantha2002@g', 772909990, 'Malabe', '12345'),
(5, 'chanidu', 'banula', '2003-01-29', '20003225846', 'chanidu.b@gmail.com', 1216465, 'rajagiriya', 'Potti'),
(7, 'rumen', 'kalu', '2002-05-24', '15464632', 'rumen.klu@gmail.com', 1512135123, 'mallawapitiya', 'Tasha'),
(10, 'amma', 'priyanka', '2023-10-04', '545434676', 'prityankakumarage04@', 716025548, 'kurunegala', 'amma'),
(11, 'thanuja', 'ruwantha', '2023-01-31', '200200000000', 'viduraruwantha2002@g', 775462582, 'kurunegala', 'thanuja'),
(12, 'akash', 'savidu', '2023-10-11', '  4864651468', 'viduraruwantha2002@g', 775462582, 'kurunegala', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ap`
--
ALTER TABLE `ap`
  ADD PRIMARY KEY (`AID`),
  ADD UNIQUE KEY `Firstname` (`Firstname`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`InquiryID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Userid`),
  ADD UNIQUE KEY `Firstname` (`Firstname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ap`
--
ALTER TABLE `ap`
  MODIFY `AID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `InquiryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
