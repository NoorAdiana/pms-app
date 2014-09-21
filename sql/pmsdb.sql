-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2014 at 01:26 AM
-- Server version: 5.6.19-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `masterBranch`
--

CREATE TABLE IF NOT EXISTS `masterBranch` (
  `branchId` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `branchCode` varchar(3) NOT NULL,
  `branchFullName` varchar(255) NOT NULL,
  `userUpdate` varchar(100) NOT NULL,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`branchId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `masterBranch`
--

INSERT INTO `masterBranch` (`branchId`, `branchCode`, `branchFullName`, `userUpdate`, `updateDate`) VALUES
(00001, '999', 'KPNO', 'root', '2014-09-22 00:00:00'),
(00002, '406', 'KELAPA GADING MOBIL', 'root', '2014-09-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `masterGroup`
--

CREATE TABLE IF NOT EXISTS `masterGroup` (
  `groupId` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `groupName` varchar(45) NOT NULL,
  `userUpdate` varchar(100) NOT NULL,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`groupId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `masterGroup`
--

INSERT INTO `masterGroup` (`groupId`, `groupName`, `userUpdate`, `updateDate`) VALUES
(00001, 'BACKDESK', 'root', '2014-09-22 00:00:00'),
(00002, 'FRONTDESK', 'root', '2014-09-22 00:00:00'),
(00003, 'USER', 'root', '2014-09-22 00:00:00'),
(00004, 'ADMIN', 'root', '2014-09-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `masterMenu`
--

CREATE TABLE IF NOT EXISTS `masterMenu` (
  `menuId` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `seqNo` varchar(45) NOT NULL,
  `menuName` varchar(100) NOT NULL,
  `menuURL` varchar(255) NOT NULL,
  `parentMenuId` varchar(2) NOT NULL,
  `userUpdate` varchar(100) NOT NULL,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`menuId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `masterPosition`
--

CREATE TABLE IF NOT EXISTS `masterPosition` (
  `positionId` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `positionName` varchar(45) NOT NULL,
  `userUpdate` varchar(100) NOT NULL,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`positionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `masterPosition`
--

INSERT INTO `masterPosition` (`positionId`, `positionName`, `userUpdate`, `updateDate`) VALUES
(00001, 'BACK OFFICE', 'root', '2014-09-22 00:00:00'),
(00002, 'FRONT OFFICE', 'root', '2014-09-22 00:00:00'),
(00003, 'IT HELPDESK', 'root', '2014-09-22 00:00:00'),
(00004, 'IT SUPPORT', 'root', '2014-09-22 00:00:00'),
(00005, 'SYSPRO', 'root', '2014-09-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `masterStatus`
--

CREATE TABLE IF NOT EXISTS `masterStatus` (
  `statusId` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `statusName` varchar(45) NOT NULL,
  `userUpdate` varchar(100) NOT NULL,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`statusId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `masterStatus`
--

INSERT INTO `masterStatus` (`statusId`, `statusName`, `userUpdate`, `updateDate`) VALUES
(00001, 'OPEN', 'root', '2014-09-22 00:00:00'),
(00002, 'CLOSE', 'root', '2014-09-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `masterUser`
--

CREATE TABLE IF NOT EXISTS `masterUser` (
  `userId` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `userFullName` varchar(255) NOT NULL,
  `userPosition` varchar(100) NOT NULL,
  `userBranch` varchar(100) NOT NULL,
  `userGroup` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isActive` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`userId`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `masterUser`
--

INSERT INTO `masterUser` (`userId`, `userFullName`, `userPosition`, `userBranch`, `userGroup`, `username`, `password`, `isActive`) VALUES
(00001, 'Administrator', 'IT SUPPORT', 'KPNO', 'ADMIN', 'Admin', 'b59c67bf196a4758191e42f76670ceba', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `replyId` int(5) unsigned zerofill NOT NULL,
  `seqNo` varchar(45) NOT NULL,
  `ticketId` int(5) NOT NULL,
  `replyMessage` text NOT NULL,
  `userInput` varchar(45) NOT NULL,
  `createDate` datetime NOT NULL,
  PRIMARY KEY (`replyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ticketId` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `ticketNumber` varchar(19) NOT NULL,
  `ticketSubject` varchar(255) NOT NULL,
  `ticketType` varchar(45) NOT NULL,
  `ipAddress` varchar(15) DEFAULT NULL,
  `contactNumber` varchar(12) DEFAULT NULL,
  `ticketMessage` text NOT NULL,
  `ticketAttachment` varchar(45) NOT NULL,
  `userInput` varchar(45) NOT NULL,
  `createDate` datetime NOT NULL,
  `ticketStatus` varchar(45) NOT NULL,
  `assignGroup` varchar(45) NOT NULL,
  `assignUser` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ticketId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ticketLogGroupAssign`
--

CREATE TABLE IF NOT EXISTS `ticketLogGroupAssign` (
  `seqNo` int(2) NOT NULL,
  `tikcetNumber` varchar(19) NOT NULL,
  `groupAssign` varchar(45) NOT NULL,
  `userUpdate` varchar(100) NOT NULL,
  `updateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticketLogStatus`
--

CREATE TABLE IF NOT EXISTS `ticketLogStatus` (
  `seqNo` int(2) NOT NULL,
  `tikcetNumber` varchar(19) NOT NULL,
  `ticketStatus` varchar(45) NOT NULL,
  `userUpdate` varchar(100) NOT NULL,
  `updateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticketLogUserAssign`
--

CREATE TABLE IF NOT EXISTS `ticketLogUserAssign` (
  `seqNo` int(2) NOT NULL,
  `ticketNumber` varchar(19) NOT NULL,
  `userAssign` varchar(100) NOT NULL,
  `userUpdate` varchar(100) NOT NULL,
  `updateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userMenu`
--

CREATE TABLE IF NOT EXISTS `userMenu` (
  `username` varchar(100) NOT NULL,
  `menuId` int(5) unsigned zerofill NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
