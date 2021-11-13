-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2021 at 11:19 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `sr` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` mediumtext NOT NULL,
  PRIMARY KEY (`sr`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sr`, `name`, `email`, `message`) VALUES
(1, 'Ayush Raghuwanshi', 'duyhud@ga.com', 'jj'),
(2, 'sheyas', 'duyhud@g.com', 'php'),
(3, 'Prakash', 'prakash@gmail.com', 'Hello Ayush I am prakash');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `sr` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(10) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`sr`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sr`, `sender`, `receiver`, `amount`, `status`) VALUES
(25, '8574961536', '856143143', 1000, 'succeed'),
(26, '8574961536', 'yyy', 45, 'succeed'),
(27, '5859722581', '', 78, 'failed'),
(28, '5859722581', '4001286186', 10, 'failed'),
(30, '5859722581', '4001286186', 100, 'failed'),
(31, '7517869156', '8691473258', 1900, 'succeed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `sr` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `accno` varchar(10) NOT NULL,
  `blc` bigint(20) NOT NULL,
  PRIMARY KEY (`sr`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr`, `name`, `email`, `accno`, `blc`) VALUES
(3, 'Ayush Raghuwanshi', 'ayush@gmail.com', '8574961536', 405845),
(4, 'Aniket Dixit', 'aniket@gmail.com', '8574961536', 99155),
(5, 'Aman Verma', 'aman@gmail.com', '8691473258', 51900),
(6, 'Kunal Baghel', 'kunal@gmail.com', '7856917388', 905280),
(7, 'Soumya Shakya', 'soumya@gmail.com', '7517869156', 701778),
(8, 'Shashank Tomar', 'shashank@gmail.com', '8539471869', 407500),
(9, 'Vaibhav Khute', 'vaibhav@gmail.com', '9358458899', 860710),
(10, 'Ankit Joshi', 'ankit@gmail.com', '7536894486', 700080),
(11, 'Parab Mishra', 'parab@gmail.com', '8865479865', 220330),
(12, 'Neelima Manglani', 'neelima@gmail.com', '856143143', 891050),
(13, 'Ankita Sahu', 'ankita@gmail.com', '7599668836', 966230),
(14, 'Mahima Goswami', 'mahima@gmail.com', '8955575557', 565680);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
