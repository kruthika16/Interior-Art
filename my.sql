-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2014 at 05:55 AM
-- Server version: 5.0.41-community-nt
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `customer_ID` varchar(50) NOT NULL,
  `product_ID` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `unitprice` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`customer_ID`, `product_ID`, `quantity`, `unitprice`) VALUES
('30', '', 1, 18999),
('30', '', 1, 18999),
('30', 's4', 4, 3499),
('30', 's4', 4, 3499),
('30', 'b5', 1, 3999),
('30', 'b5', 1, 3999),
('30', 'w4', 2, 4599),
('30', 'w4', 2, 4599),
('30', 't4', 1, 17999),
('30', 't4', 1, 17999);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `customer_ID` int(11) NOT NULL,
  `product_ID` varchar(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitprice` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`customer_ID`, `product_ID`, `quantity`, `unitprice`) VALUES
(19, 't4', 1, 17999),
(19, 'b1', 4, 7999),
(19, 's6', 2, 74999),
(19, 's3', 1, 37999),
(27, 's1', 2, 7499),
(27, 'b3', 1, 29999),
(28, 'w4', 2, 4599);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_ID` int(11) NOT NULL auto_increment,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) default NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_ID`, `first_name`, `middle_name`, `last_name`, `username`, `password`) VALUES
(15, 'KRUTHIKA', '', 'ff', 'kuki.nath@yahoo.com', 'aa'),
(18, 'll', 'fhgf', 'hgfhj', 'kk@gh.com', 'hhh'),
(19, 'manjunath', 'h', 's', 'hsm.nath@yahoo.co.in', '1244'),
(20, 'KRUTHIKA', 'f', 'MANJUNATH', 'kruthika.manjunath16@gmail.com', 'aaa'),
(21, 'kj', '', 'ss', 'kuki.nath@yahoo.com', 'aaa'),
(23, 'khu', '', 'v', 'khu@gm.com', 'khu'),
(24, 'Lavanya', '', 'V', 'lava@gmail.com', 'secret123'),
(27, 'kruthika', '', 'm', 'kruthika@gmail.com', 'aaaa'),
(28, 'indira', '', 'ms', 'indira.ms@orientalinsurance.co.in', 'kuki'),
(29, 'kuki', '', 'mam', 'kkk@gh.com', 'sss'),
(30, 'KRUTHIKA', '', 'MANJUNATH', 'pammiswamy@gmail.com', 'PASSWORD');

-- --------------------------------------------------------

--
-- Table structure for table `designer_contact_details`
--

CREATE TABLE IF NOT EXISTS `designer_contact_details` (
  `designer_id` int(20) NOT NULL,
  `d_pri_email` varchar(25) NOT NULL,
  `specialization` varchar(25) NOT NULL,
  `d_pri_no` int(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  KEY `designer_id` (`designer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designer_contact_details`
--

INSERT INTO `designer_contact_details` (`designer_id`, `d_pri_email`, `specialization`, `d_pri_no`, `location`) VALUES
(1, 'savio@gmail.com', 'contemporary&urban design', 987654321, 'bangalore'),
(2, 'cozynest@gmail.com', 'residential interiors', 876543219, 'whitefield,bangalore'),
(3, 'ashwin@gmail.com', 'home office spaces', 765432198, 'bangalore'),
(4, 'aishwarya@gmail.com', 'modular kitchen', 654321987, 'delhi'),
(5, 'kuvio@gmail.com', 'commercial spaces', 543219876, 'mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `interior_designer`
--

CREATE TABLE IF NOT EXISTS `interior_designer` (
  `designer_id` int(20) NOT NULL,
  `d_first_name` varchar(25) NOT NULL,
  `d_midlle_name` varchar(20) default NULL,
  `d_last_name` varchar(25) NOT NULL,
  `years_of_experience` int(20) NOT NULL,
  `no_of_projects` int(20) NOT NULL,
  PRIMARY KEY  (`designer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interior_designer`
--

INSERT INTO `interior_designer` (`designer_id`, `d_first_name`, `d_midlle_name`, `d_last_name`, `years_of_experience`, `no_of_projects`) VALUES
(1, 'savio', '&', 'rupa', 12, 10),
(2, 'cozynest', NULL, 'interiors', 7, 13),
(3, 'ashwin', NULL, 'architects', 15, 25),
(4, 'aishwarya', NULL, 'interiors', 8, 14),
(5, 'kuvio', NULL, 'studios', 15, 30);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `customer_ID` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `login_time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`customer_ID`, `username`, `password`, `login_time`) VALUES
(21, 'kuki.nath@yahoo.com', 'aaa', '2014-11-27 10:10:09'),
(19, 'hsm.nath@yahoo.co.in', '1244', '2014-11-26 21:18:55'),
(21, 'kuki.nath@yahoo.com', 'aaa', '2014-11-27 10:10:09'),
(19, 'hsm.nath@yahoo.co.in', '1244', '2014-11-26 21:18:55'),
(30, 'pammiswamy@gmail.com', 'PASSWORD', '2014-11-26 19:53:50'),
(30, 'pammiswamy@gmail.com', 'PASSWORD', '2014-11-26 19:53:50'),
(30, 'pammiswamy@gmail.com', 'PASSWORD', '2014-11-26 19:53:50'),
(30, 'pammiswamy@gmail.com', 'PASSWORD', '2014-11-26 19:53:50'),
(30, 'pammiswamy@gmail.com', 'PASSWORD', '2014-11-26 19:53:50'),
(30, 'pammiswamy@gmail.com', 'PASSWORD', '2014-11-26 19:53:50'),
(30, 'pammiswamy@gmail.com', 'password', '2014-11-26 19:53:50'),
(21, 'kuki.nath@yahoo.com', 'aaa', '2014-11-27 10:10:09'),
(21, 'kuki.nath@yahoo.com', 'aaa', '2014-11-27 10:10:09'),
(21, 'kuki.nath@yahoo.com', 'aaa', '2014-11-27 10:10:09'),
(21, 'kuki.nath@yahoo.com', 'aaa', '2014-11-27 10:10:09'),
(19, 'hsm.nath@yahoo.co.in', '1244', '2014-11-26 21:18:55'),
(30, 'pammiswamy@gmail.com', 'PASSWORD', '2014-11-26 19:53:50'),
(21, 'kuki.nath@yahoo.com', 'aaa', '2014-11-27 10:10:09'),
(19, 'hsm.nath@yahoo.co.in', '1244', '2014-11-26 21:18:55'),
(19, 'hsm.nath@yahoo.co.in', '1244', '2014-11-26 21:18:55'),
(23, 'khu@gm.com', 'khu', '2014-11-27 06:45:04'),
(21, 'kuki.nath@yahoo.com', 'aaa', '2014-11-27 10:10:09'),
(21, 'kuki.nath@yahoo.com', 'aaa', '2014-11-27 10:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_ID` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `unitprice` int(2) NOT NULL,
  `quantity` int(1) NOT NULL,
  `description` varchar(50) default NULL,
  PRIMARY KEY  (`product_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_ID`, `name`, `unitprice`, `quantity`, `description`) VALUES
('b1', 'Queen Size Double Bed ', 7999, 11, 'metal'),
('b2', 'Cinnamon Four Poster King Size Bed ', 26999, 10, 'Cinnamon'),
('b3', 'Sailor Single Kids Bed with Storage', 29999, 10, 'Red'),
('b4', 'Rio Bedside Table', 3999, 10, NULL),
('b5', 'Alegria Bed Side Table', 3999, 10, 'Walnut'),
('b6', 'Red Cherry Bedside Table', 13999, 10, 'Red Cherry'),
('s1', 'Robins Lounge Chair', 7499, 11, 'Aquamarine'),
('s2', 'Milo Wing chair', 18999, 10, 'Olive'),
('s3', 'Appolo letherette sofa ', 37999, 10, 'Chocolate'),
('s4', 'Howe Chair', 3499, 10, 'mahagony'),
('s5', 'Recliner la-Z boy ', 59999, 10, 'Chestnut'),
('s6', 'Elicca Leather sofa ', 74999, 10, 'cappuchino'),
('t1', 'Bayley Dining Set', 55999, 10, 'Walnut'),
('t2', 'Gurupi Dining Set', 30999, 4, 'Multi color'),
('t3', 'Napier Dining Set', 102999, 10, 'Walnut'),
('t4', 'Cartagena Two Seater', 17999, 10, 'Colonial Maple finish'),
('t5', 'Vitoria Dining Set', 44999, 7, 'Colonial maple'),
('w1', 'Templeton Wardrobe', 36999, 12, NULL),
('w2', 'Ivory Four Door Wardrobe', 32999, 10, NULL),
('w3', 'Addison Four Door Wardrobe', 57999, 10, NULL),
('w4', 'Sliding Shoe Rack', 4599, 10, 'dark walnut'),
('w5', 'Zig Zag Book Shelf', 8499, 10, NULL),
('w6', 'Glass Door Crockery Cabinet', 26999, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(20) NOT NULL,
  `designer_id` int(20) NOT NULL,
  `cost` int(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `designer_id`, `cost`, `location`, `description`) VALUES
(1, 1, 10000500, 'kerela', 'stylish, contemporary and urban designed munnar vi'),
(2, 1, 7500000, 'pune', 'grand luxury apartment design in sobha althea'),
(3, 2, 8000000, 'bangalore', 'ferns habitat,elegant and luxurious residential de'),
(4, 2, 3400000, 'bangalore', 'adarsh palm retreat,high end apartment.'),
(5, 3, 102000, 'bangalore', 'ranganatha''s residence,luxurious apartment.'),
(6, 3, 95000, 'bangalore', 'shweta''s residence,contemprary office-house apartm'),
(7, 4, 60000, 'ahmedabad', 'nicely spaced modular kitchen'),
(8, 4, 34000, 'kolkata', 'modern urban kitchen'),
(9, 5, 25000, 'bangalore', 'affordable , well spaced apartments on hosur road'),
(10, 5, 89000, 'bangalore', 'high end luxurious interiors on sarjapur road');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `designer_contact_details`
--
ALTER TABLE `designer_contact_details`
  ADD CONSTRAINT `designer_contact_details_ibfk_1` FOREIGN KEY (`designer_id`) REFERENCES `interior_designer` (`designer_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
