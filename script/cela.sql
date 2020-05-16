-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 16, 2020 at 12:19 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cela`
--

-- --------------------------------------------------------

--
-- Table structure for table `choose`
--

DROP TABLE IF EXISTS `choose`;
CREATE TABLE IF NOT EXISTS `choose` (
  `IdChoose` bigint(20) NOT NULL AUTO_INCREMENT,
  `NumberLA` int(11) NOT NULL,
  `IdU` bigint(20) NOT NULL,
  `IdC` bigint(20) NOT NULL,
  PRIMARY KEY (`IdChoose`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `choose`
--

INSERT INTO `choose` (`IdChoose`, `NumberLA`, `IdU`, `IdC`) VALUES
(103, 2, 1, 1),
(110, 2, 1, 5),
(121, 2, 1, 6),
(122, 2, 1, 4),
(123, 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `IdC` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` text,
  `ECTS` int(11) NOT NULL,
  `IdF` bigint(20) NOT NULL,
  PRIMARY KEY (`IdC`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`IdC`, `Name`, `Description`, `ECTS`, `IdF`) VALUES
(1, 'Web application', 'blabla', 2, 1),
(2, 'Advanced data', 'blabla', 5, 1),
(3, 'Data mining', 'blabla', 4, 1),
(4, 'SDS', 'blabla', 8, 1),
(5, 'Java Application', 'blabla', 4, 1),
(6, 'Scrum', 'blabla', 8, 1),
(7, 'English', 'blabla', 15, 3),
(8, 'Communication in company', 'blabla', 20, 3),
(9, 'English', 'blabla', 15, 7),
(10, 'Communication in company', 'blabla', 20, 7);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `IdF` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Coordinator` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `IdUnivers` bigint(20) NOT NULL,
  PRIMARY KEY (`IdF`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`IdF`, `Name`, `Coordinator`, `Email`, `Phone`, `IdUnivers`) VALUES
(1, 'Technologie', 'blabla', 'bla@bla.bla', '0123456789', 7),
(2, 'Spanish', 'blabla', 'bla@bla.bla', '0123456789', 7),
(3, 'Communication', 'blabla', 'bla@bla.bla', '0123456789', 7),
(4, 'Economy', 'blabla', 'bla@bla.bla', '0123456789', 7),
(5, 'Technologie', 'blabla', 'bla@bla.bla', '0123456789', 5),
(6, 'Spanish', 'blabla', 'bla@bla.bla', '0123456789', 5),
(7, 'Communication', 'blabla', 'bla@bla.bla', '0123456789', 8),
(8, 'Economy', 'blabla', 'bla@bla.bla', '0123456789', 8);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
CREATE TABLE IF NOT EXISTS `university` (
  `IdUnivers` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `ErasmusCode` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `ContactName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  PRIMARY KEY (`IdUnivers`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`IdUnivers`, `Name`, `ErasmusCode`, `Address`, `Country`, `ContactName`, `Email`, `Phone`) VALUES
(5, 'blabla of taratata', 'blabla', 'blabla', 'blabla', 'blabla', 'bla@bla.bla', '+33621421578'),
(7, 'University of blabla', 'blabla', 'blablaSomewhere', 'blablaCountry', 'blabla', 'blabla@mail.blabla', '0123456789'),
(8, 'blabla', 'blabla', 'blabla', 'blabla', 'blabla', 'blabla@blabla.blabla', '0123456789'),
(9, 'MLKJ', 'bla', 'blabla', 'somewhere', 'Antoine The great', 'blabla', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `IdU` bigint(20) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `StudyCycle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `FieldOfEducation` varchar(255) NOT NULL,
  `status` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(255) NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `DateArrival` date DEFAULT NULL,
  `DateDeparture` date DEFAULT NULL,
  `IdUnivers` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`IdU`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IdU`, `Username`, `FirstName`, `Surname`, `DateOfBirth`, `Nationality`, `Sex`, `StudyCycle`, `FieldOfEducation`, `status`, `Email`, `pwd`, `Phone`, `DateArrival`, `DateDeparture`, `IdUnivers`) VALUES
(3, 'test', 'test', 'test', '2020-05-03', 'test', 'M', 'test', 'test', '1', 'test@test.test', 'toto12', '0123456789', NULL, NULL, NULL),
(5, 'qesrfr', 'dfsdghfd', 'sfrdf', '2020-05-03', 'frzqdsfffss', 'F', 'Master', 'frzqdsfffss', '1', 'ezre@ef.dg', '$2y$10$keh1WJenC15Sk/yVer95SeZEZ0NgDp2lQZCNwhs.IFdBqWRKq19BC', '0123456789', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
