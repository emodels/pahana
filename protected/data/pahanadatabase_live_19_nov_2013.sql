-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 118.139.168.6
-- Generation Time: Nov 18, 2013 at 10:43 PM
-- Server version: 5.0.96
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pahanadatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL auto_increment,
  `paper` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `folder` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `paper` (`paper`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=203 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` VALUES(54, 11, '3.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(55, 11, '1.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(56, 11, '2.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(57, 11, '4.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(58, 11, '5.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(59, 11, '6.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(60, 11, '7.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(61, 11, '8.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(62, 11, '9.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(63, 11, '10.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(64, 11, '11.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(65, 11, '12.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(66, 11, '13.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(67, 11, '14.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(68, 11, '15.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(69, 11, '16.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(70, 11, '17.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(71, 11, '18.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(72, 11, '19.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(73, 11, '20.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(74, 11, '21.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(75, 11, '22.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(76, 11, '23.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(77, 11, '24.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(78, 11, '25.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(79, 11, '26.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(80, 11, '27.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(81, 11, '28.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(82, 11, '29.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(83, 11, '30.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(84, 11, '31.pdf', 'uploads/2013/October/mid_monthly/');
INSERT INTO `pages` VALUES(86, 12, '2.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(87, 12, '3.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(88, 12, '1.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(89, 12, '4.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(90, 12, '5.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(91, 12, '6.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(92, 12, '8.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(93, 12, '9.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(94, 12, '7.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(95, 12, '10.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(96, 12, '11.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(97, 12, '12.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(98, 12, '13.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(99, 12, '14.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(100, 12, '15.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(101, 12, '16.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(102, 12, '18.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(103, 12, '19.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(104, 12, '20.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(105, 12, '17.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(106, 12, '21.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(107, 12, '22.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(108, 12, '23.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(109, 12, '24.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(110, 12, '25.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(111, 12, '26.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(112, 12, '27.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(113, 12, '28.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(114, 12, '30.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(115, 12, '29.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(116, 12, '31.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(117, 12, '32.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(118, 12, '33.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(119, 12, '34.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(120, 12, '35.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(121, 12, '36.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(122, 12, '37.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(123, 12, '38.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(124, 12, '39.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(125, 12, '40.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(126, 12, '41.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(127, 12, '42.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(128, 12, '43.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(129, 12, '44.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(130, 12, '45.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(131, 12, '46.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(132, 12, '47.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(133, 12, '48.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(134, 12, '49.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(135, 12, '50.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(136, 12, '51.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(137, 12, '52.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(138, 12, '53.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(139, 12, '54.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(140, 12, '55.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(141, 12, '56.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(142, 12, '57.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(143, 12, '58.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(144, 12, '59.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(145, 12, '60.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(146, 12, '61.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(147, 12, '62.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(148, 12, '64.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(149, 12, '63.pdf', 'uploads/2013/November/monthly/');
INSERT INTO `pages` VALUES(171, 16, '3.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(172, 16, '4.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(173, 16, '1.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(174, 16, '2.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(175, 16, '5.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(176, 16, '6.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(177, 16, '8.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(178, 16, '7.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(179, 16, '10.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(180, 16, '9.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(181, 16, '11.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(182, 16, '13.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(183, 16, '14.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(184, 16, '12.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(185, 16, '15.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(186, 16, '18.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(187, 16, '19.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(188, 16, '16.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(189, 16, '20.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(190, 16, '17.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(191, 16, '23.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(192, 16, '22.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(193, 16, '24.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(194, 16, '21.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(195, 16, '26.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(196, 16, '25.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(197, 16, '27.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(198, 16, '29.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(199, 16, '28.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(200, 16, '30.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(201, 16, '31.pdf', 'uploads/2013/November/mid_monthly/');
INSERT INTO `pages` VALUES(202, 16, '32.pdf', 'uploads/2013/November/mid_monthly/');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL auto_increment,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `page_count` int(11) NOT NULL,
  `entry_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` VALUES(11, 2013, 10, 1, 31, '2013-11-07 00:00:00', 1);
INSERT INTO `paper` VALUES(12, 2013, 11, 0, 64, '2013-11-07 00:00:00', 1);
INSERT INTO `paper` VALUES(16, 2013, 11, 1, 32, '2013-11-12 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conf_password` varchar(50) NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` VALUES(1, 'admin', 'system', 'info@snt3.com', 'admin', 'admin@pahana@123', 'admin@pahana@123', 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`paper`) REFERENCES `paper` (`id`) ON DELETE CASCADE;
