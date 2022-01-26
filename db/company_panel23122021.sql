-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for company_panel
CREATE DATABASE IF NOT EXISTS `company_panel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `company_panel`;

-- Dumping structure for table company_panel.company
CREATE TABLE IF NOT EXISTS `company` (
  `comId` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table company_panel.company: ~5 rows (approximately)
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` (`comId`, `company`, `email`, `address`) VALUES
	(1, 'CKM', 'admin@gmail.com', 'yangon'),
	(3, 'capital2', 'osaka@gamil.com', 'japan'),
	(4, 'myanmar', 'superadmin@gmail.com', 'mandalay'),
	(5, 'ckm2', 'admin@gmail.com', 'yangon'),
	(7, 'knowledge', 'ckm@gmail.com', 'yangon');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;

-- Dumping structure for table company_panel.employee
CREATE TABLE IF NOT EXISTS `employee` (
  `emId` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL DEFAULT '0',
  `lastName` varchar(255) NOT NULL DEFAULT '0',
  `staffID` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(50) NOT NULL DEFAULT '0',
  `companyId` int(11) NOT NULL DEFAULT '0',
  `department` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `address` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`emId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table company_panel.employee: ~5 rows (approximately)
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` (`emId`, `firstName`, `lastName`, `staffID`, `email`, `phone`, `companyId`, `department`, `password`, `address`) VALUES
	(1, 'khin', 'khins', 'ID-1', 'khin@gmail.com', '093232434343', 4, 'php team', '654321', 'yangon'),
	(3, 'aung', 'aung', 'ID-4', 'admin@gmail.com', '093232434343', 5, 'php team', '654321', 'yangon'),
	(4, 'myint', 'myint', 'ID-4', 'osaka@gamil.com', '0978638383', 4, 'php team', '654321', 'japan'),
	(5, 'wai', 'wai', 'ID-5', 'osaka@gamil.com', '09937490472', 5, 'IT', '654321', 'mandalay'),
	(6, 'aye', 'aye', 'ID-7', 'aye@gmail.com', '09 3232434343', 7, 'php', '54321', 'monywa');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;

-- Dumping structure for table company_panel.login
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table company_panel.login: ~1 rows (approximately)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`id`, `email`, `name`, `password`) VALUES
	(1, 'admin@gmail.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping structure for table company_panel.test
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '0',
  `name2` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table company_panel.test: ~2 rows (approximately)
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` (`id`, `name`, `name2`) VALUES
	(1, 'mgmg', 'mg'),
	(2, 'soesoe', 'soe');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
