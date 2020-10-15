-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 05:37 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikeshowroom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `cid` int(9) NOT NULL,
  `cat_name` varchar(45) NOT NULL,
  `regdate` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cid`, `cat_name`, `regdate`, `status`) VALUES
(1, 'Bike', '2020-01-03', 0),
(2, 'Sport Bike', '2020-01-03', 1),
(3, 'Cruise Bike', '2020-01-03', 1),
(4, 'Bike', '2020-01-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(9) NOT NULL,
  `comment` varchar(900) NOT NULL,
  `comm_date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `mdid` int(9) NOT NULL,
  `uid` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `comment`, `comm_date`, `status`, `mdid`, `uid`) VALUES
(1, 'good', '2020-01-05', 2, 2, 1),
(2, 'good', '2020-01-05', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `mid` int(9) NOT NULL,
  `mname` varchar(45) NOT NULL,
  `regdate` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`mid`, `mname`, `regdate`, `status`) VALUES
(1, 'Bajaj', '2020-01-03', 0),
(2, 'Pulsar 150', '2020-01-03', 1),
(3, 'Pulsar 180', '2020-01-03', 1),
(4, 'Pulsar 220', '2020-01-03', 1),
(5, 'Discover', '2020-01-03', 1),
(6, 'Avenger', '2020-01-03', 0),
(7, 'CT 100', '2020-01-03', 1),
(8, 'Avenger-220', '2020-01-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_details`
--

CREATE TABLE `model_details` (
  `mdid` int(9) NOT NULL,
  `mdname` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `fuel_capacity` varchar(100) NOT NULL,
  `eng_type` varchar(100) NOT NULL,
  `eng_power` varchar(100) NOT NULL,
  `start_type` varchar(100) NOT NULL,
  `no_of_gear` varchar(100) NOT NULL,
  `max_speed` varchar(100) NOT NULL,
  `break_type` varchar(100) NOT NULL,
  `weel_type` varchar(100) NOT NULL,
  `headlamp` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `imgpath` varchar(90) NOT NULL,
  `regdate` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `suid` int(9) NOT NULL,
  `mid` int(9) NOT NULL,
  `cid` int(9) NOT NULL,
  `uid` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model_details`
--

INSERT INTO `model_details` (`mdid`, `mdname`, `color`, `weight`, `fuel_capacity`, `eng_type`, `eng_power`, `start_type`, `no_of_gear`, `max_speed`, `break_type`, `weel_type`, `headlamp`, `price`, `description`, `imgpath`, `regdate`, `status`, `suid`, `mid`, `cid`, `uid`) VALUES
(2, 'Pulsar 220', 'Black', '120 KG', '35 Ltr', '4 Strock', '220 CC', 'Cell', '6', '130 Km/h', 'Disc', 'Aloy', 'LED', '120000', 'None', 'uploads/1_20200105030240.png', '2020-01-05', 1, 1, 4, 2, 1),
(3, 'Pulsar 220', 'Black', '120 KG', '35 Ltr', '4 Strock', '220 CC', 'Cell', '6', '130 Km/h', 'Disc', 'Aloy', 'LED', '120000', 'None', 'uploads/1_20200105030319.png', '2020-01-05', 0, 1, 4, 2, 1),
(4, 'Pulsar 220', 'Black', '120 KG', '35 Ltr', '4 Strock', '220 CC', 'Cell', '6', '130 Km/h', 'Disc', 'Aloy', 'LED', '1200', 'asdsd', 'uploads/1_20200105030647.png', '2020-01-05', 0, 1, 4, 2, 1),
(5, 'Pulsar 150', 'Red', '100KG', '35 Ltr', '4 Strock', '220 CC', 'Cell', '6', '130 Km/h', 'Disc', 'Aloy', 'LED', '100000', 'Red Pulsar 150', 'uploads/1_20200105053151.jpg', '2020-01-05', 1, 1, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `oid` int(9) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `description` varchar(900) NOT NULL,
  `imgpath` varchar(90) NOT NULL,
  `regdate` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `mdid` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`oid`, `datefrom`, `dateto`, `description`, `imgpath`, `regdate`, `status`, `mdid`) VALUES
(1, '2020-01-11', '2020-01-16', 'dfgdf dfg rg', 'uploads/offers/1_20200105044346.jpg', '2020-01-05', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `showroom_user`
--

CREATE TABLE `showroom_user` (
  `suid` int(9) NOT NULL,
  `suname` varchar(45) NOT NULL,
  `supass` varchar(20) NOT NULL,
  `sumob` varchar(10) NOT NULL,
  `suemail` varchar(50) NOT NULL,
  `regdate` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showroom_user`
--

INSERT INTO `showroom_user` (`suid`, `suname`, `supass`, `sumob`, `suemail`, `regdate`, `status`) VALUES
(1, 'subhan', '111', '9975508577', 'subhan.shaikh.786@gmail.com', '2020-01-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(9) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `uregdate` datetime NOT NULL,
  `utype` int(9) NOT NULL,
  `ustatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `pass`, `uregdate`, `utype`, `ustatus`) VALUES
(1, 'admin', 'admin', '2019-02-25 00:00:00', 1, 1),
(2, 'jay', '123', '2019-02-25 15:35:52', 1, 1),
(3, 'subhan', 'jay', '2019-03-03 12:51:03', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `bid` (`mdid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `model_details`
--
ALTER TABLE `model_details`
  ADD PRIMARY KEY (`mdid`),
  ADD KEY `buid` (`suid`),
  ADD KEY `aid` (`mid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `bid` (`mdid`);

--
-- Indexes for table `showroom_user`
--
ALTER TABLE `showroom_user`
  ADD PRIMARY KEY (`suid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `cid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `mid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `model_details`
--
ALTER TABLE `model_details`
  MODIFY `mdid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `oid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `showroom_user`
--
ALTER TABLE `showroom_user`
  MODIFY `suid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`mdid`) REFERENCES `model_details` (`mdid`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `model_details`
--
ALTER TABLE `model_details`
  ADD CONSTRAINT `model_details_ibfk_1` FOREIGN KEY (`suid`) REFERENCES `showroom_user` (`suid`),
  ADD CONSTRAINT `model_details_ibfk_2` FOREIGN KEY (`mid`) REFERENCES `model` (`mid`),
  ADD CONSTRAINT `model_details_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `catagory` (`cid`),
  ADD CONSTRAINT `model_details_ibfk_4` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`mdid`) REFERENCES `model_details` (`mdid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
