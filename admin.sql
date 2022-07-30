-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 08:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `cid` int(3) NOT NULL,
  `cname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`cid`, `cname`) VALUES
(5, 'nike'),
(6, 'Nike');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `Pid` int(11) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Pprice` int(5) NOT NULL,
  `Pdescription` varchar(25) NOT NULL,
  `Pcategory` varchar(15) NOT NULL,
  `Pimage` varchar(10) NOT NULL,
  `Pcompany` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`Pid`, `Pname`, `Pprice`, `Pdescription`, `Pcategory`, `Pimage`, `Pcompany`) VALUES
(2, 'vivo v12', 12000, 'fine ', 'mobile', 'xyz', 'vivo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`Pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `cid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
