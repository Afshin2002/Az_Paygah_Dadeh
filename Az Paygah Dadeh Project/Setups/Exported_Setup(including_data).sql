-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2024 at 09:10 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `az_db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `aquatic_animal`
--

DROP TABLE IF EXISTS `aquatic_animal`;
CREATE TABLE IF NOT EXISTS `aquatic_animal` (
  `AA_ID` int NOT NULL AUTO_INCREMENT,
  `AA_Species` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `AA_Available_Quantity` int NOT NULL DEFAULT '0',
  `AA_Price` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `Deleted` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`AA_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `aquatic_animal`
--

INSERT INTO `aquatic_animal` (`AA_ID`, `AA_Species`, `AA_Available_Quantity`, `AA_Price`, `Deleted`) VALUES
(29, 'Guppies', 380, '9000', 0),
(27, 'Mickey Mouse Platy', 250, '10000', 0),
(30, 'Zebrafish', 400, '3000', 0),
(32, 'Neon Tetra', 150, '7000', 0),
(34, 'White Cloud Mountain Minnow', 150, '7000', 0),
(36, 'Harlequin Rasbora', 130, '12000', 0),
(38, 'Serpae Tetra', 80, '15000', 0),
(40, 'Panda Corydoras', 70, '14000', 0),
(42, 'Glowlight Tetra', 65, '18000', 0),
(44, 'Tiger Barb', 70, '20000', 0),
(46, 'Swordtail', 300, '12000', 0),
(48, 'German Blue Ram', 150, '20000', 0),
(51, 'Dwarf Gourami', 130, '25000', 0),
(53, 'Betta Fish', 85, '30000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emploees`
--

DROP TABLE IF EXISTS `emploees`;
CREATE TABLE IF NOT EXISTS `emploees` (
  `Employee_ID` int NOT NULL AUTO_INCREMENT,
  `Emploee_Forename` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `Emploee_Surname` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `Emploee_Job_Title` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `Emploee_Email` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `Emploee_Phone_Number` int NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Employee_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `emploees`
--

INSERT INTO `emploees` (`Employee_ID`, `Emploee_Forename`, `Emploee_Surname`, `Emploee_Job_Title`, `Emploee_Email`, `Emploee_Phone_Number`, `Deleted`) VALUES
(3, 'John', 'Smith', 'Sales Representative', 'johnsmith@gmail.com', 2147483647, 0),
(5, 'Sarah', 'Smith', 'Sales Representative ', 'sarahsmith@gmail.com', 2147483647, 0),
(7, 'Camron', 'Johnson', 'Sales Representative ', 'camronjohnson@gmail.com', 2147483647, 0),
(9, 'Mary', 'Williams', 'Sales Representative ', 'marywilliams@gmail.com', 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `Message_ID` int NOT NULL AUTO_INCREMENT,
  `User_ID` int NOT NULL,
  `User_Forename` varchar(15) COLLATE utf8mb4_persian_ci NOT NULL,
  `User_Surname` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Message_Text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Message_Date` date NOT NULL,
  `Message_Time` time NOT NULL,
  `Message_Type` enum('Regular','Urgent') COLLATE utf8mb4_persian_ci NOT NULL,
  `Message_Delivery` enum('Delivered','Not Delivered') COLLATE utf8mb4_persian_ci NOT NULL,
  `Message_Attachment` varchar(700) COLLATE utf8mb4_persian_ci NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Message_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Message_ID`, `User_ID`, `User_Forename`, `User_Surname`, `Message_Text`, `Message_Date`, `Message_Time`, `Message_Type`, `Message_Delivery`, `Message_Attachment`, `Deleted`) VALUES
(1, 0, 'Frank', 'Garcia', 'سلام و خسته نباشید. من یک مشکل موقع وارد شدن به وبسایت دارم. ممنون میشم اگه لطفا کمکم کنید.', '2014-07-04', '18:23:46', 'Regular', 'Delivered', 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_light_color_272x92dp.png', 0),
(3, 0, 'Emma', 'Jones', 'سلام و خسته نباشید. من یک مشکل موقع وارد شدن به وبسایت دارم. لطفا کمکم کنید', '2016-08-10', '14:37:45', 'Regular', 'Delivered', 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_light_color_272x92dp.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Order_ID` int NOT NULL AUTO_INCREMENT,
  `User_ID` int NOT NULL,
  `User_Forename` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `User_Surname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Order_Payment_Date` date NOT NULL,
  `Order_Shipping_Fee` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `Order_Shipping_Date` date NOT NULL,
  `Order_Shipping_Address` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `Order_Shipping_City` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `Order_Shipping_Country` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Order_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `User_ID`, `User_Forename`, `User_Surname`, `Order_Payment_Date`, `Order_Shipping_Fee`, `Order_Shipping_Date`, `Order_Shipping_Address`, `Order_Shipping_City`, `Order_Shipping_Country`, `Deleted`) VALUES
(1, 0, 'Clara', 'Davis', '2018-06-15', '10000', '2018-06-16', ' Georgia Street', 'California', 'United States', 0),
(3, 0, 'Minnie', 'Brown', '2018-06-15', '10000', '2018-06-16', ' Georgia Street', 'California', 'United States', 0),
(5, 0, 'Robert', 'Anderson', '2018-06-15', '10000', '2018-06-16', ' Georgia Street', 'California', 'United States', 0),
(14, 0, 'David', 'Simpsons', '2024-01-02', '10000', '2024-01-03', 'Manhattan, Upper East Side', 'New York', 'United States', 0),
(10, 0, 'Thomas', 'Martin', '2018-06-15', '10000', '2018-06-16', ' Georgia Street', 'California', 'United States', 0),
(12, 0, 'Ida', 'Moore', '2018-06-15', '10000', '2018-06-16', ' Georgia Street', 'California', 'United States', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `Order_ID` int NOT NULL AUTO_INCREMENT,
  `AA_ID` int NOT NULL,
  `AA_Price` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `Quantity` int NOT NULL,
  `Order_Total_Price` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Order_ID`),
  KEY `AA_Price` (`AA_Price`),
  KEY `AA_ID` (`AA_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`Order_ID`, `AA_ID`, `AA_Price`, `Quantity`, `Order_Total_Price`, `Deleted`) VALUES
(7, 0, '', 0, '', 0),
(3, 40, '14000', 2, '28000', 0),
(6, 0, '', 0, '', 0),
(5, 51, '25000', 4, '100000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_ID` int NOT NULL AUTO_INCREMENT,
  `User_Forename` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `User_Surname` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `User_Email` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `User_Password` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `User_Phone_Number` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `User_Verification_Code` int NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `User_Forename`, `User_Surname`, `User_Email`, `User_Password`, `User_Phone_Number`, `User_Verification_Code`, `Deleted`) VALUES
(1, 'Clara', 'Davis', 'claradavis@gmail.com', 'ctwertcwert4895154156', '9871359364', 325, 0),
(3, 'Thomas', 'Martin', 'thomasmartin@gmail.com', 'jghjjhk456dgf', '3461678264', 469, 0),
(5, 'Ida', 'Moore', 'idamoore@gmail.com', 'njfkfkfdofdk654', '9161365489', 327, 0),
(7, 'Minnie', 'Brown', 'minnebrown@gmail.com', '54dfgdfgdfas546', '9345961298', 138, 0),
(9, 'Robert', 'Anderson', 'robrtanderson@gmail.com', '655hhkbncvgdf', '9165498267', 194, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
