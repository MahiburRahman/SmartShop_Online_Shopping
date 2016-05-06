-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 08, 2014 at 03:09 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `shop36`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tblcontact`
-- 

CREATE TABLE `tblcontact` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tblcontact`
-- 

INSERT INTO `tblcontact` (`Name`, `Email`, `Comments`) VALUES 
('mr mra', 'dlbul@gmail.com', 'very bad design');

-- --------------------------------------------------------

-- 
-- Table structure for table `tblcustomer`
-- 

CREATE TABLE `tblcustomer` (
  `UserID` text NOT NULL,
  `Username` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tblcustomer`
-- 

INSERT INTO `tblcustomer` (`UserID`, `Username`, `Email`, `Password`) VALUES 
('', 'muhib', '@yahoo.com', 'fbf832bc8d7e746434993cec0061a682'),
('', 'abc', '@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
('', 'shakil', '@hotmail', '4567');

-- --------------------------------------------------------

-- 
-- Table structure for table `tblcustomer_order`
-- 

CREATE TABLE `tblcustomer_order` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `laptop` text NOT NULL,
  `Pro_ID` text NOT NULL,
  `Bill` text NOT NULL,
  `Bikash_mob` text NOT NULL,
  `Transaction_ID` text NOT NULL,
  `Date` text NOT NULL,
  `Time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tblcustomer_order`
-- 

INSERT INTO `tblcustomer_order` (`Name`, `Email`, `laptop`, `Pro_ID`, `Bill`, `Bikash_mob`, `Transaction_ID`, `Date`, `Time`) VALUES 
('muhib', '@yahoo.com', 'hp', 'hp003', '78000', '01945364755', '454 545 454', '2014-04-08', '20:59:39'),
('abc', '@gmail.com', 'apple', 'apple005', '566600', '015 777999', '447 574 474', '2014-04-08', '21:05:47'),
('shakil', '@hotmail', 'fujitsu', 'fujitsu006', '60000', '01199343456', '000 888 999', '2014-04-08', '21:07:36');
