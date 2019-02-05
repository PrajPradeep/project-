-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 07:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Blood_group` varchar(3) NOT NULL,
  `Mobile_number` varchar(14) NOT NULL,
  `Location` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`First_Name`, `Last_Name`, `email`, `Gender`, `Blood_group`, `Mobile_number`, `Location`) VALUES
('pradeep', 'prajapati', 'prajapatipradeep56@gmail.com', 'male', 'A+', '9813825636', 'Bhaktapur'),
('pradeep', 'prajapati', 'prajapatipradeep56@gmail.com', 'male', 'A+', '9813825696', 'Bhaktapur'),
('Rashmina', 'Shrestha', 'Rashminashrestha@gmail.com', 'female', 'A+', '9847353798', 'Kathmandu'),
('Ashmin', 'Rai', 'asmirai7@gmail.com', 'Female', 'A+', '9841357989', 'Kathmandu'),
('jacika', 'paudel', 'JCKa@gmail.com', 'female', 'O+', '9860909599', 'Kathmandu'),
('sakuntala', 'napit', 'napit@gmail.com', 'female', 'A-', '9845632178', 'Palpa'),
('biki', 'maharjan', 'beekimrj@gmail.com', 'male', 'A+', '981255', 'Pokhara'),
('chulbul', 'pandey', 'sadfj@ljfj.sldfj', 'female', 'O-', '981248963478', 'Chitwan'),
('Manisha', 'Dhaubanjar', 'monsa@gmail.com', 'female', 'O+', '9843318359', 'Bhaktapur'),
('usha', 'stha', 'sta@gmail.com', 'femail', 'A+', '9852365478', 'Kathmandu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
