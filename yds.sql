-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2020 at 10:49 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yds`
--

-- --------------------------------------------------------

--
-- Table structure for table `convert_airtime`
--

DROP TABLE IF EXISTS `convert_airtime`;
CREATE TABLE IF NOT EXISTS `convert_airtime` (
  `userid` int(10) DEFAULT NULL,
  `txref` varchar(30) DEFAULT NULL,
  `network` varchar(10) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `convert_airtime`
--

INSERT INTO `convert_airtime` (`userid`, `txref`, `network`, `phone_number`, `amount`, `date`) VALUES
(1013, 'tx-X4ECLiT', 'mtn', '08054454545', '10000', '2020-05-25 22:16:04'),
(1013, 'tx-QYq618e', 'mtn', '08054454545', '10000', '2020-05-25 22:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `data_orders`
--

DROP TABLE IF EXISTS `data_orders`;
CREATE TABLE IF NOT EXISTS `data_orders` (
  `userid` int(10) DEFAULT NULL,
  `txref` varchar(30) NOT NULL,
  `price` varchar(30) DEFAULT NULL,
  `mobile_data` varchar(30) DEFAULT NULL,
  `mobile_data_type` varchar(30) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_orders`
--

INSERT INTO `data_orders` (`userid`, `txref`, `price`, `mobile_data`, `mobile_data_type`, `phone`, `status`, `date`) VALUES
(1013, 'tx-L7mQUSx', '330', 'MTN SME', 'MTN 1GB', '08160841875', 'pending', '2020-05-24 17:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `wallet` float DEFAULT NULL,
  `bankname` varchar(30) DEFAULT NULL,
  `account_name` varchar(30) DEFAULT NULL,
  `account_number` int(11) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=1015 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fullname`, `email`, `phone_number`, `password`, `wallet`, `bankname`, `account_name`, `account_number`, `reg_date`) VALUES
(1014, 'aladejobi alagbede', 'admin3@admin.com', '01234567891', '$2y$10$HPpUvDfPtqvsmyG5sSW5HOjOdsDrdMiV5ShAZI1sEF5Kpk2cNB1sy', 0, NULL, NULL, NULL, '2020-05-23 14:16:32'),
(1013, 'ade leye', 'admin@admin.com', '01234567891', '$2y$10$pDTnKMIj6MxYV22lWYKOi.gt8Vwgx2AkHNrjwq9GkieCOinZYjGcu', 1420, 'GT bank', 'chukwu emeka', 987656543, '2020-05-23 13:51:32'),
(1012, 'de leye', 'admin1@admin.com', '01234567891', '$2y$10$hEGWnvS9Xk86hSSzcIM5dOvXoOqlB9RvX3hrxrYuFH44nqURV5k0O', 0, NULL, NULL, NULL, '2020-05-23 13:49:35'),
(1011, 'crave crave', 'admins@admin.com', '01234567891', '$2y$10$Syja7qoGuG7U.Pd/IwC23escoc6rEOnH2G.OV1Ln2gZWpqsSs6OTe', 0, NULL, NULL, NULL, '2020-05-22 22:16:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
