-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2018 at 02:25 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steak`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Cus_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Cus_name` varchar(255) NOT NULL,
  `Cus_lname` varchar(255) NOT NULL,
  `Cus_Telephone` int(20) NOT NULL,
  `Cus_pass` varchar(20) NOT NULL,
  `Cus_email` varchar(100) NOT NULL,
  `Status` varchar(1) NOT NULL,
  `cus_address` varchar(300) NOT NULL,
  PRIMARY KEY (`Cus_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=518 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_ID`, `Cus_name`, `Cus_lname`, `Cus_Telephone`, `Cus_pass`, `Cus_email`, `Status`, `cus_address`) VALUES
(501, 'Hamemawan', 'Aetla', 939172980, 'p99', 'pink@gmail.com', 'u', '65/52 M.6 T.Kathu A.Kathu C.Phuket 83120'),
(502, 'Siripitar', 'Kaewboon', 693665412, 's49', 'siri@gmail.com', 'u', '15/106 M.2 T.Kathu A.Kathu C.Phuket 83120'),
(503, 'Chabu', 'Indy', 893699425, 'c69', 'chabu@gmail.com', 'u', '123/15 M.3 T.Kathu A.Kathu C.Phuket 83120'),
(504, 'Thanaporn', 'Saehu', 830614279, 'd59', 'dear@gmail.com', 'u', '138 M.1 T.Kathu A.Kathu C.Phuket 83120'),
(505, 'Waroot', 'Jairaksa', 968412378, 'w79', 'wa@gmail.com', 'u', '36 M.3 T.Kathu A.Kathu C.Phuket 83120'),
(510, 'admin', '', 0, '1234', 'admin@gmail.com', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `Menu_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Menu_name` varchar(300) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Menu_price` varchar(300) NOT NULL,
  `Type` int(1) NOT NULL,
  PRIMARY KEY (`Menu_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=521 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Menu_ID`, `Menu_name`, `Image`, `Menu_price`, `Type`) VALUES
(101, 'Black pepper pork steak with papaya slad and stream rice', '101.jpg', '199', 1),
(102, 'Black pepper pork steak', '102.jpg', '129', 1),
(103, 'Pork steak', '103.jpg', '119', 1),
(104, 'T-bone steak', '104.jpg', '169', 1),
(105, 'Sirloin steak', '105.jpg', '159', 1),
(106, 'Crispy fish steak', '106.jpg', '139', 1),
(107, 'Grilled salmon fillet steak', '107.jpg', '239', 1),
(108, 'Grilled dory fillet steak', '108.jpg', '159', 1),
(109, 'Black pepper chicken steak', '109.jpg', '159', 1),
(110, 'Black pepper chicken steak with papaya slad and stream rice', '110.jpg', '199', 1),
(111, 'Spicy chicken steak', '111.jpg', '159', 1),
(112, 'Salad', '112.jpg', '59', 1),
(113, 'Garlic Bread', '113.jpg', '59', 1),
(114, 'Nugget', '114.jpg', '59', 1),
(115, 'French fries', '115.jpg', '59', 1),
(310, 'T-bone steak+French fries', '310.jpg', '199', 2),
(311, 'Black pepper chicken steak+Salad', '311.jpg', '199', 2),
(312, 'Black pepper pork steak+Garlic', '312.jpg', '199', 2),
(313, 'Grilled dory fillet steak+Nugget', '313.jpg', '199', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Order_ID` int(100) NOT NULL,
  `Menu_ID` varchar(5) NOT NULL,
  `Cus_ID` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=659 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `Order_ID`, `Menu_ID`, `Cus_ID`) VALUES
(601, 421, '101', 501),
(602, 421, '102', 501),
(603, 422, '110', 501),
(604, 423, '313', 501),
(605, 424, '312', 501),
(606, 425, '108', 501),
(607, 426, '103', 502),
(608, 427, '101', 502),
(609, 428, '102', 502),
(610, 427, '313', 502),
(611, 430, '312', 502),
(612, 431, '310', 502),
(613, 432, '106', 503),
(614, 433, '104', 503),
(615, 434, '102', 503),
(616, 435, '311', 503),
(617, 436, '312', 503),
(618, 437, '109', 503),
(619, 438, '109', 504),
(620, 439, '102', 504),
(621, 440, '105', 504),
(622, 442, '113', 504),
(623, 442, '114', 504),
(624, 443, '115', 504),
(625, 444, '102', 505),
(626, 445, '101', 505),
(627, 446, '106', 505),
(628, 447, '109', 505),
(629, 448, '113', 505),
(630, 449, '311', 505),
(631, 449, '313', 505);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `Pay_ID` int(100) NOT NULL AUTO_INCREMENT,
  `Cus_ID` int(100) NOT NULL,
  `Order_ID` int(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `datepayment` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Status` int(1) NOT NULL,
  PRIMARY KEY (`Pay_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_ID`, `Cus_ID`, `Order_ID`, `bank`, `amount`, `datepayment`, `address`, `Status`) VALUES
(2, 501, 420, 'Siam Commercial Bank Public Company Limited (SCB)', 199, '10-05-2018 15:14', '65/52 M.6 T.Kathu A.Kathu C.Phuket 83120', 1),
(3, 501, 421, 'Krung Thai Bank Public Company Limited (KTB)', 129, '05-05-2018 18:00', '65/52 M.6 T.Kathu A.Kathu C.Phuket 83120', 1),
(8, 502, 426, 'Krung Thai Bank Public Company Limited (KTB)', 119, '11-05-2018 12:30', '15/106 M.2 T.Kathu A.Kathu C.Phuket 83120', 0),
(11, 502, 431, 'KASIKORNBANK Public Company Limited (KBANK)', 199, '06-05-2018 14:50', '15/106 M.2 T.Kathu A.Kathu C.Phuket 83120', 0),
(12, 503, 433, 'Siam Commercial Bank Public Company Limited (SCB)', 169, '12-05-2018 14:55', '123/15 M.3 T.Kathu A.Kathu C.Phuket 83120', 1),
(14, 503, 432, 'Krung Thai Bank Public Company Limited (KTB)', 139, '18-05-2018 08:50', '123/15 M.3 T.Kathu A.Kathu C.Phuket 83120', 0),
(15, 504, 438, 'Siam Commercial Bank Public Company Limited (SCB)', 159, '25-05-2018 10:40 ', '138 M.1 T.Kathu A.Kathu C.Phuket 83120', 0),
(16, 504, 440, 'KASIKORNBANK Public Company Limited (KBANK)', 159, '06-05-2018 17:36', '138 M.1 T.Kathu A.Kathu C.Phuket 83120', 1),
(18, 505, 446, 'Siam Commercial Bank Public Company Limited (SCB)', 139, '04-05-2018 13:58', '36 M.3 T.Kathu A.Kathu C.Phuket 83120', 0);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Menu_ID` int(10) NOT NULL,
  `Menu_name` varchar(1000) NOT NULL,
  `Order_ID` int(100) NOT NULL,
  `Date_report` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `Menu_ID`, `Menu_name`, `Order_ID`, `Date_report`) VALUES
(50, 101, 'Black pepper pork steak with papaya slad and stream rice', 420, '2018-05-10 15:14:55'),
(51, 102, 'Black pepper pork steak', 421, '2018-05-05 18:00:53'),
(52, 103, 'Pork steak', 426, '2018-05-11 12:30:51'),
(53, 310, 'T-bone steak+French fries', 431, '2018-05-06 14:50:07'),
(54, 104, 'T-bone steak', 433, '2018-05-12 14:55:09'),
(55, 106, 'Crispy fish steak', 432, '2018-05-18 08:50:11'),
(56, 109, 'Black pepper chicken steak', 438, '2018-05-25 10:40:13'),
(57, 106, 'Crispy fish steak', 446, '2018-05-06 13:58:04'),
(58, 105, 'Sirloin steak', 440, '2018-05-04 17:36:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
