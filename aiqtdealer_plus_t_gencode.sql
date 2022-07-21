-- phpMyAdmin SQL Dump
-- version 4.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2022 at 03:14 AM
-- Server version: 5.5.40
-- PHP Version: 5.4.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aiqtdealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `gencode`
--

CREATE TABLE IF NOT EXISTS `gencode` (
  `codeid` int(11) NOT NULL,
  `codedate` date NOT NULL,
  `codegen` varchar(6) NOT NULL,
  `shopid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `shopid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `shopdetail` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shopid`, `userid`, `shopname`, `shopdetail`) VALUES
(7, 19, 'แก้', 'asdasd'),
(8, 19, 'ddd', 'as'),
(9, 19, 'test', 'test ส่งค่าผ่าน url'),
(10, 19, 'testasdasd', 'test ส่งค่าผ่าน urla'),
(14, 19, 'ลบปะวะ', 'เชี้ย');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telnum` varchar(255) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `email`, `telnum`, `password`) VALUES
(15, 'ภรศิษฐ์', 'เกิดบ้านชัน', 'pornrasit.k64@rsu.ac.th', '0610708708', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'Pornrasit1', 'kerdbanchan', 'k_rasit@kkumail.com1', '+66610708708', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'ภรศิษฐ์sad', 'เกิดบ้านชัน', 'pornrasit.k64@rsu.ac.thd', '0610708708', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'pradprad', 'pradprad', 'pradpradprad3@gmail.com', '0610708708', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'admin', 'admin', 'admin@test.com', '0610708708', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gencode`
--
ALTER TABLE `gencode`
  ADD PRIMARY KEY (`codeid`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shopid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gencode`
--
ALTER TABLE `gencode`
  MODIFY `codeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shopid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
