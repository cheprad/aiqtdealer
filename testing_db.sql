-- phpMyAdmin SQL Dump
-- version 4.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2022 at 08:02 PM
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
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `shopid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `shopdetail` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shopid`, `userid`, `shopname`, `shopdetail`) VALUES
(1, 1, 'test', 'test'),
(2, 3, '123', 'asdsadasdasd'),
(3, 1, 'asdasdasd', 'testtestt');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `email`, `telnum`, `password`) VALUES
(15, 'ภรศิษฐ์', 'เกิดบ้านชัน', 'pornrasit.k64@rsu.ac.th', '0610708708', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'Pornrasit1', 'kerdbanchan', 'k_rasit@kkumail.com1', '+66610708708', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'ภรศิษฐ์sad', 'เกิดบ้านชัน', 'pornrasit.k64@rsu.ac.thd', '0610708708', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'pradprad', 'pradprad', 'pradpradprad3@gmail.com', '0610708708', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shopid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;--
-- Database: `aiquanttech`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_slip`
--

CREATE TABLE IF NOT EXISTS `payment_slip` (
  `id` int(11) NOT NULL,
  `stampdt` datetime NOT NULL,
  `firstname` char(255) NOT NULL,
  `lastname` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `package` char(255) NOT NULL,
  `image` longtext NOT NULL,
  `flag` char(2) NOT NULL,
  `approvedt` datetime NOT NULL,
  `approveid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_slip`
--

INSERT INTO `payment_slip` (`id`, `stampdt`, `firstname`, `lastname`, `email`, `package`, `image`, `flag`, `approvedt`, `approveid`) VALUES
(1, '2022-03-10 00:00:00', 'asdasd', 'asdasdasd', 'asdasdasd@asdasd.com', 'asdasdasd', 'asdasdasdasdasd', 'N', '2022-03-30 00:00:00', 165),
(2, '2022-03-18 00:00:00', 'tesszxtr', 'tesszxtr', 'tesszxtr', 'tesszxtr', 'tesszxtr', 'N', '2022-03-18 00:59:00', 165);

-- --------------------------------------------------------

--
-- Table structure for table `useridt`
--

CREATE TABLE IF NOT EXISTS `useridt` (
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `uplineid` int(11) NOT NULL,
  `login_name` char(50) NOT NULL,
  `passwd` char(20) NOT NULL,
  `cusname` char(250) NOT NULL,
  `province` char(250) NOT NULL,
  `age` int(11) NOT NULL,
  `email` char(250) NOT NULL,
  `tel` char(50) NOT NULL,
  `access_level` char(2) NOT NULL,
  `allow_bot` longtext NOT NULL,
  `limit_stock_forecast` int(11) NOT NULL,
  `cpoint` double(10,2) NOT NULL,
  `applydate` date NOT NULL,
  `expiredate` date NOT NULL,
  `regip` char(100) NOT NULL,
  `remark` char(200) NOT NULL,
  `member_class` char(50) NOT NULL,
  `capital` char(250) NOT NULL,
  `flag` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_slip`
--
ALTER TABLE `payment_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useridt`
--
ALTER TABLE `useridt`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_slip`
--
ALTER TABLE `payment_slip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `useridt`
--
ALTER TABLE `useridt`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;--
-- Database: `register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, '$username', '$email', '$password'),
(5, 'data1234', 'pradpradprad3@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'admin', 'admin@test.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_ai_dealer`
--

CREATE TABLE IF NOT EXISTS `login_ai_dealer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_ai_dealer`
--
ALTER TABLE `login_ai_dealer`
  ADD PRIMARY KEY (`id`);
--
-- Database: `workshop_work_io`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE IF NOT EXISTS `tbl_emp` (
  `m_id` int(11) NOT NULL,
  `m_username` varchar(50) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_firstname` varchar(50) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_lastname` varchar(100) NOT NULL,
  `m_position` varchar(100) NOT NULL,
  `m_img` varchar(100) DEFAULT NULL,
  `m_phone` varchar(20) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_level` varchar(10) NOT NULL,
  `m_datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_emp`
--

INSERT INTO `tbl_emp` (`m_id`, `m_username`, `m_password`, `m_firstname`, `m_name`, `m_lastname`, `m_position`, `m_img`, `m_phone`, `m_email`, `m_level`, `m_datesave`) VALUES
(1, '111', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'นาย', 'ทดสอบ', 'ระบบ', 'โปรแกรมเมอร์', 'e1.png', '0948616709', 'devbanban@gmail.com', 'staff', '2020-03-24 04:00:33'),
(2, '222', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', 'นาย', 'พนง.', 'ในบริษัท', 'โปรแกรมเมอร์', 'e2.png', '0948616709', 'devbanban@gmail.com', 'staff', '2020-03-24 04:00:33'),
(3, '333', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', 'นางสาว', 'frontend', 'dd', 'frontend', 'e3.png', '0948616709', 'devbanban@gmail.com', 'staff', '2020-03-24 04:00:33'),
(4, '444', '9a3e61b6bcc8abec08f195526c3132d5a4a98cc0', 'นาย', 'admin', 'naja', 'admin', 'e1.png', '0948616709', 'devbanban@gmail.com', 'admin', '2020-03-24 04:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_io`
--

CREATE TABLE IF NOT EXISTS `tbl_work_io` (
  `id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL COMMENT 'ไอดี พนง.',
  `workdate` date NOT NULL,
  `workin` time NOT NULL,
  `workout` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tbl_work_io`
--

INSERT INTO `tbl_work_io` (`id`, `m_id`, `workdate`, `workin`, `workout`) VALUES
(1, 1, '2020-03-21', '11:55:34', '12:01:19'),
(2, 2, '2020-03-23', '12:07:05', '12:07:45'),
(3, 3, '2020-03-24', '12:19:03', NULL),
(4, 1, '2020-03-22', '13:14:23', '13:15:02'),
(5, 1, '2020-03-23', '13:27:14', '13:28:27'),
(6, 1, '2020-03-24', '13:32:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_work_io`
--
ALTER TABLE `tbl_work_io`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_work_io`
--
ALTER TABLE `tbl_work_io`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
