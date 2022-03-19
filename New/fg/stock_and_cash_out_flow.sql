-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2017 at 02:22 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stock_and_cash_out_flow`
--

-- --------------------------------------------------------

--
-- Table structure for table `creditors`
--

CREATE TABLE IF NOT EXISTS `creditors` (
  `idcreditos` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `date_taken` datetime NOT NULL,
  `person_idperson` int(11) NOT NULL,
  PRIMARY KEY (`idcreditos`),
  KEY `fk_creditos_person1_idx` (`person_idperson`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `creditors`
--

INSERT INTO `creditors` (`idcreditos`, `name`, `address`, `contact`, `amount`, `date_taken`, `person_idperson`) VALUES
(4, 'me', 'mbarara', '0759452768', '300000', '2017-06-09 09:22:43', 2);

-- --------------------------------------------------------

--
-- Table structure for table `debtors`
--

CREATE TABLE IF NOT EXISTS `debtors` (
  `iddebtors` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `date_taken` datetime NOT NULL,
  `person_idperson` int(11) NOT NULL,
  PRIMARY KEY (`iddebtors`),
  KEY `fk_debtors_person1_idx` (`person_idperson`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `debtors`
--

INSERT INTO `debtors` (`iddebtors`, `name`, `address`, `amount`, `contact`, `date_taken`, `person_idperson`) VALUES
(3, 'nobert', 'mbarara', '100000', '0759452768', '2017-06-09 09:21:58', 2);

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE IF NOT EXISTS `expenditure` (
  `idexpenditure` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) NOT NULL,
  `reason` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `person_idperson` int(11) NOT NULL,
  PRIMARY KEY (`idexpenditure`),
  KEY `fk_expenditure_person_idx` (`person_idperson`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`idexpenditure`, `amount`, `reason`, `date`, `person_idperson`) VALUES
(7, '3000', 'bfast', '2017-06-09 09:23:16', 2),
(8, '10000', 'fuel', '2017-06-09 02:22:26', 2),
(9, '3000', 'break fluid', '2017-06-09 02:38:38', 2),
(10, '1000', 'boda', '2017-06-10 09:23:42', 2),
(11, '5000', 'lunch', '2017-06-10 11:04:36', 2),
(12, '1000', 'airtime', '2017-06-10 06:57:12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `idperson` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `user_type` varchar(45) NOT NULL,
  PRIMARY KEY (`idperson`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`idperson`, `name`, `address`, `contact`, `username`, `password`, `user_type`) VALUES
(2, 'sarah', 'mbarara', '0701099347', 'sarah', 'bwanika', 'Administrator'),
(3, 'sadam', 'mbarara', '0701099347', 'sadam', 'bwanika', 'Administrator'),
(4, 'SADAT', 'MBARARA', '0779448833', 'SADAT', 'bwanika', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `idsales` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(45) NOT NULL,
  `price_sold` varchar(45) NOT NULL,
  `date_sold` datetime NOT NULL,
  `quantity` varchar(45) NOT NULL,
  `person_idperson` int(11) NOT NULL,
  PRIMARY KEY (`idsales`),
  KEY `fk_sales_person1_idx` (`person_idperson`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`idsales`, `item_name`, `price_sold`, `date_sold`, `quantity`, `person_idperson`) VALUES
(9, '4', '750000', '2017-06-09 09:14:15', '1', 2),
(10, '8', '40000', '2017-06-09 02:21:40', '1', 2),
(11, '9', '200000', '2017-06-09 02:37:48', '1', 2),
(12, '10', '80000', '2017-06-09 03:11:59', '2', 2),
(13, '11', '100000', '2017-06-10 08:59:43', '2', 2),
(14, '12', '2000', '2017-06-10 09:22:57', '1', 2),
(15, '13', '240000', '2017-06-10 10:37:41', '2', 2),
(16, '11', '120000', '2017-06-10 10:51:46', '1', 2),
(17, '5', '4000', '2017-06-10 11:03:55', '1', 2),
(18, '11', '240000', '2017-06-10 11:10:23', '2', 2),
(19, '6', '20000', '2017-06-10 11:22:20', '5', 2),
(20, '14', '1200000', '2017-06-10 06:56:39', '1', 2),
(21, '5', '30000', '2017-06-11 03:27:09', '20', 2),
(22, '4', '780000', '2017-06-12 12:18:35', '1', 2),
(23, '4', '780000', '2017-06-12 12:18:35', '1', 2),
(24, '9', '6000', '2017-06-13 05:19:47', '4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `side_income`
--

CREATE TABLE IF NOT EXISTS `side_income` (
  `idside_income` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) NOT NULL,
  `reason` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `person_idperson` int(11) NOT NULL,
  PRIMARY KEY (`idside_income`),
  KEY `fk_side_income_person1_idx` (`person_idperson`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `side_income`
--

INSERT INTO `side_income` (`idside_income`, `amount`, `reason`, `date`, `person_idperson`) VALUES
(6, '2000000', 'gift', '2017-06-08 07:30:41', 2),
(7, '70000', 'pid', '2017-06-09 08:01:46', 2),
(8, '3000000', 'rentals', '2017-06-09 02:23:23', 2),
(9, '2000000', 'taxi', '2017-06-09 02:39:58', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock_in`
--

CREATE TABLE IF NOT EXISTS `stock_in` (
  `idstock_in` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) NOT NULL,
  `minimum_price` varchar(45) NOT NULL,
  `date_brought` datetime NOT NULL,
  `quantity` varchar(45) NOT NULL,
  `qty_sold` int(11) NOT NULL,
  `person_idperson` int(11) NOT NULL,
  PRIMARY KEY (`idstock_in`),
  KEY `fk_stock_in_person1_idx` (`person_idperson`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `stock_in`
--

INSERT INTO `stock_in` (`idstock_in`, `product_name`, `minimum_price`, `date_brought`, `quantity`, `qty_sold`, `person_idperson`) VALUES
(8, 'fuel filter', '30000', '2017-06-09 02:20:41', '69', 1, 2),
(9, 'side mirror', '150000', '2017-06-09 02:36:19', '25', 5, 2),
(10, 'shoes', '40000', '2017-06-09 03:10:52', '48', 2, 2),
(11, 'woofers', '40000', '2017-06-10 08:58:56', '73', 5, 2),
(12, 'rwenzori big', '1000', '2017-06-10 09:21:24', '29', 1, 2),
(13, 'screen itel 1407', '100000', '2017-06-10 10:37:10', '2998', 2, 2),
(14, 'fridge', '1000000', '2017-06-10 06:55:34', '29', 1, 2),
(18, 'shirts', '5000', '2017-06-13 09:31:29', '300', 0, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `creditors`
--
ALTER TABLE `creditors`
  ADD CONSTRAINT `fk_creditos_person1` FOREIGN KEY (`person_idperson`) REFERENCES `person` (`idperson`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `debtors`
--
ALTER TABLE `debtors`
  ADD CONSTRAINT `fk_debtors_person1` FOREIGN KEY (`person_idperson`) REFERENCES `person` (`idperson`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD CONSTRAINT `fk_expenditure_person` FOREIGN KEY (`person_idperson`) REFERENCES `person` (`idperson`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `fk_sales_person1` FOREIGN KEY (`person_idperson`) REFERENCES `person` (`idperson`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `side_income`
--
ALTER TABLE `side_income`
  ADD CONSTRAINT `fk_side_income_person1` FOREIGN KEY (`person_idperson`) REFERENCES `person` (`idperson`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stock_in`
--
ALTER TABLE `stock_in`
  ADD CONSTRAINT `fk_stock_in_person1` FOREIGN KEY (`person_idperson`) REFERENCES `person` (`idperson`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
