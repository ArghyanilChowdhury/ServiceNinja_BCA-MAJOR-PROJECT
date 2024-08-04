-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 02:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serviceninja`
--

-- --------------------------------------------------------

--
-- Table structure for table `addservicedetails`
--

CREATE TABLE `addservicedetails` (
  `ServiceID` int(11) NOT NULL,
  `CategoryName` varchar(500) NOT NULL,
  `ServiceImage` varchar(500) NOT NULL,
  `ServiceName` varchar(500) NOT NULL,
  `Price` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addservicedetails`
--

INSERT INTO `addservicedetails` (`ServiceID`, `CategoryName`, `ServiceImage`, `ServiceName`, `Price`, `Description`) VALUES
(1, 'Repairing Services', '664181af65ea3.jpg', 'AC Repairing', 'Rs. 100', 'AC Repairing is one of our best services provided by our Company.'),
(2, 'Repairing Services', '664182982abe8.jpg', 'Fridge Repairing', 'Rs. 150', 'Fridge Repairing is one of our best services provided by our Company.'),
(3, 'Repairing Services', '6641831b5cdde.jpg', 'Washing Machine Repairing', 'Rs. 120', 'Washing Machine Repairing is one of our best services provided by our Company.'),
(4, 'Repairing Services', '664185a44a2e9.jpg', 'Microwave Repairing', 'Rs. 110', 'Microwave Repairing is one of our best services provided by our Company.'),
(5, 'Repairing Services', '66428320f3de0.jpg', 'Smartphone Repairing', 'Rs. 150', 'Smartphone Repairing is one of our best services provided by our Company. We have technicians who are proficient in both Android and iOS Smartphones.'),
(6, 'Repairing Services', '664283ed9f657.jpg', 'Laptop Repairing', 'Rs. 200', 'Laptop Repairing is one of our best services provided by our Company. Our Technicians are proficient in both Windows and Mac Laptops.'),
(7, 'Repairing Services', '6642846eeb877.jpg', 'Cooler Repairing', 'Rs. 180', 'Cooler Repairing is one of our best services provided by our Company. Our technicians are proficient in repairing both Water and Electrical Coolers.'),
(9, 'Repairing Services', '664287193be54.jpg', 'TV Repairing', 'Rs. 160', 'TV Repairing is one of our best services provided by our Company. '),
(10, 'Body Care Services', '66453f39ed337.jpeg', 'Spa for Women', 'Rs. 130', 'We provide the best body spa for women. Body Spa Professionals in our Company have minimum experience of 3 years.'),
(11, 'Body Care Services', '66453f549ef84.jpeg', 'Haircut for Women', 'Rs. 140', 'We provide the best Haircut for Women.'),
(12, 'Body Care Services', '66766f4f0f389.jpg', 'Spa for Men', 'Rs. 299', 'We provide the best spa services for men.'),
(13, 'Body Care Services', '668347d0ec7d8.jpg', 'Haircut For Men', 'Rs. 599', 'Our Hair Professionals provide the best and trendy haircuts to men.');

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `AdminID` int(11) NOT NULL,
  `AdminFirstName` varchar(500) NOT NULL,
  `AdminMiddleName` varchar(500) NOT NULL,
  `AdminLastName` varchar(500) NOT NULL,
  `AdminEmail` varchar(500) NOT NULL,
  `AdminAltEmail` varchar(500) NOT NULL,
  `AdminPhno` varchar(500) NOT NULL,
  `AdminAltPhno` varchar(500) NOT NULL,
  `AdminAccPass` varchar(500) NOT NULL,
  `AdminPhoto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`AdminID`, `AdminFirstName`, `AdminMiddleName`, `AdminLastName`, `AdminEmail`, `AdminAltEmail`, `AdminPhno`, `AdminAltPhno`, `AdminAccPass`, `AdminPhoto`) VALUES
(5, 'Admin', 'Singh', 'Kumar', 'admin123@gmail.com', '', '1234567890', '', '1234', '66766a2a42259.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categorydetails`
--

CREATE TABLE `categorydetails` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorydetails`
--

INSERT INTO `categorydetails` (`CategoryID`, `CategoryName`) VALUES
(1, 'Repairing Services'),
(2, 'Body Care Services');

-- --------------------------------------------------------

--
-- Table structure for table `jobreqs`
--

CREATE TABLE `jobreqs` (
  `AppID` int(11) NOT NULL,
  `AppFirstName` varchar(500) NOT NULL,
  `AppMiddleName` varchar(500) NOT NULL,
  `AppLastName` varchar(500) NOT NULL,
  `AppGender` varchar(500) NOT NULL,
  `AppCountry` varchar(500) NOT NULL,
  `AppState` varchar(500) NOT NULL,
  `AppEmail` varchar(500) NOT NULL,
  `AppEmailOTP` varchar(500) NOT NULL,
  `AppPhoto` varchar(500) NOT NULL,
  `AppCV` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_req`
--

CREATE TABLE `order_req` (
  `sl_no` int(11) NOT NULL,
  `order_id` varchar(500) NOT NULL,
  `order_stat` varchar(500) NOT NULL,
  `order_SCN` varchar(500) NOT NULL,
  `order_SEN` varchar(500) NOT NULL,
  `order_SEP` varchar(500) NOT NULL,
  `order_UFN` varchar(500) NOT NULL,
  `order_ULN` varchar(500) NOT NULL,
  `order_UST` varchar(500) NOT NULL,
  `order_UADR` varchar(500) NOT NULL,
  `order_UEM` varchar(500) NOT NULL,
  `order_UPHNO` varchar(500) NOT NULL,
  `order_UPHNOTP` varchar(500) NOT NULL,
  `order_SDAY` varchar(500) NOT NULL,
  `order_STIME` varchar(500) NOT NULL,
  `order_MSSG` varchar(500) NOT NULL,
  `asgn_tech` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `user_username` varchar(500) NOT NULL,
  `user_rating` tinyint(4) NOT NULL,
  `user_review` varchar(500) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_username`, `user_rating`, `user_review`, `datetime`) VALUES
(35, 'User Tripathi', 'user_777', 5, 'Very Good Service', '2024-07-02 05:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `techniciandetails`
--

CREATE TABLE `techniciandetails` (
  `TechnicianID` int(11) NOT NULL,
  `TechnicianPhoto` varchar(500) NOT NULL,
  `TechnicianFirstName` varchar(500) NOT NULL,
  `TechnicianMiddleName` varchar(500) NOT NULL,
  `TechnicianLastName` varchar(500) NOT NULL,
  `TechnicianEmail` varchar(500) NOT NULL,
  `TechnicianAltEmail` varchar(500) NOT NULL,
  `TechnicianPhno` varchar(500) NOT NULL,
  `TechnicianAltPhno` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `techniciandetails`
--

INSERT INTO `techniciandetails` (`TechnicianID`, `TechnicianPhoto`, `TechnicianFirstName`, `TechnicianMiddleName`, `TechnicianLastName`, `TechnicianEmail`, `TechnicianAltEmail`, `TechnicianPhno`, `TechnicianAltPhno`) VALUES
(3, '66766cc7906c3.jpg', 'Technician', '', 'Chowdhury', 'techc123@gmail.com', '', '2136549870', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `UserID` int(11) NOT NULL,
  `User_Firstname` varchar(500) NOT NULL,
  `User_Middlename` varchar(500) NOT NULL,
  `User_Lastname` varchar(500) NOT NULL,
  `User_Gender` varchar(500) NOT NULL,
  `User_Country` varchar(500) NOT NULL,
  `User_State` varchar(500) NOT NULL,
  `User_Email` varchar(500) NOT NULL,
  `User_EmailOTP` varchar(500) NOT NULL,
  `User_Image` varchar(500) NOT NULL,
  `User_Username` varchar(500) NOT NULL,
  `User_Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`UserID`, `User_Firstname`, `User_Middlename`, `User_Lastname`, `User_Gender`, `User_Country`, `User_State`, `User_Email`, `User_EmailOTP`, `User_Image`, `User_Username`, `User_Password`) VALUES
(7, 'User', '', 'Tripathi', 'Male', 'India', 'Uttar Pradesh', 'user123@gmail.com', '', '66766baee31d1.jpg', 'user_777', '2468');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addservicedetails`
--
ALTER TABLE `addservicedetails`
  ADD PRIMARY KEY (`ServiceID`);

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `categorydetails`
--
ALTER TABLE `categorydetails`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `jobreqs`
--
ALTER TABLE `jobreqs`
  ADD PRIMARY KEY (`AppID`);

--
-- Indexes for table `order_req`
--
ALTER TABLE `order_req`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `techniciandetails`
--
ALTER TABLE `techniciandetails`
  ADD PRIMARY KEY (`TechnicianID`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addservicedetails`
--
ALTER TABLE `addservicedetails`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admindetails`
--
ALTER TABLE `admindetails`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categorydetails`
--
ALTER TABLE `categorydetails`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobreqs`
--
ALTER TABLE `jobreqs`
  MODIFY `AppID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_req`
--
ALTER TABLE `order_req`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `techniciandetails`
--
ALTER TABLE `techniciandetails`
  MODIFY `TechnicianID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
