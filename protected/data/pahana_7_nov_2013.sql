-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2013 at 11:12 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pahana`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paper` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `folder` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paper` (`paper`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `paper`, `name`, `folder`) VALUES
(54, 11, '3.pdf', 'uploads/2013/October/mid_monthly/'),
(55, 11, '1.pdf', 'uploads/2013/October/mid_monthly/'),
(56, 11, '2.pdf', 'uploads/2013/October/mid_monthly/'),
(57, 11, '4.pdf', 'uploads/2013/October/mid_monthly/'),
(58, 11, '5.pdf', 'uploads/2013/October/mid_monthly/'),
(59, 11, '6.pdf', 'uploads/2013/October/mid_monthly/'),
(60, 11, '7.pdf', 'uploads/2013/October/mid_monthly/'),
(61, 11, '8.pdf', 'uploads/2013/October/mid_monthly/'),
(62, 11, '9.pdf', 'uploads/2013/October/mid_monthly/'),
(63, 11, '10.pdf', 'uploads/2013/October/mid_monthly/'),
(64, 11, '11.pdf', 'uploads/2013/October/mid_monthly/'),
(65, 11, '12.pdf', 'uploads/2013/October/mid_monthly/'),
(66, 11, '13.pdf', 'uploads/2013/October/mid_monthly/'),
(67, 11, '14.pdf', 'uploads/2013/October/mid_monthly/'),
(68, 11, '15.pdf', 'uploads/2013/October/mid_monthly/'),
(69, 11, '16.pdf', 'uploads/2013/October/mid_monthly/'),
(70, 11, '17.pdf', 'uploads/2013/October/mid_monthly/'),
(71, 11, '18.pdf', 'uploads/2013/October/mid_monthly/'),
(72, 11, '19.pdf', 'uploads/2013/October/mid_monthly/'),
(73, 11, '20.pdf', 'uploads/2013/October/mid_monthly/'),
(74, 11, '21.pdf', 'uploads/2013/October/mid_monthly/'),
(75, 11, '22.pdf', 'uploads/2013/October/mid_monthly/'),
(76, 11, '23.pdf', 'uploads/2013/October/mid_monthly/'),
(77, 11, '24.pdf', 'uploads/2013/October/mid_monthly/'),
(78, 11, '25.pdf', 'uploads/2013/October/mid_monthly/'),
(79, 11, '26.pdf', 'uploads/2013/October/mid_monthly/'),
(80, 11, '27.pdf', 'uploads/2013/October/mid_monthly/'),
(81, 11, '28.pdf', 'uploads/2013/October/mid_monthly/'),
(82, 11, '29.pdf', 'uploads/2013/October/mid_monthly/'),
(83, 11, '30.pdf', 'uploads/2013/October/mid_monthly/'),
(84, 11, '31.pdf', 'uploads/2013/October/mid_monthly/'),
(86, 12, '2.pdf', 'uploads/2013/November/monthly/'),
(87, 12, '3.pdf', 'uploads/2013/November/monthly/'),
(88, 12, '1.pdf', 'uploads/2013/November/monthly/'),
(89, 12, '4.pdf', 'uploads/2013/November/monthly/'),
(90, 12, '5.pdf', 'uploads/2013/November/monthly/'),
(91, 12, '6.pdf', 'uploads/2013/November/monthly/'),
(92, 12, '8.pdf', 'uploads/2013/November/monthly/'),
(93, 12, '9.pdf', 'uploads/2013/November/monthly/'),
(94, 12, '7.pdf', 'uploads/2013/November/monthly/'),
(95, 12, '10.pdf', 'uploads/2013/November/monthly/'),
(96, 12, '11.pdf', 'uploads/2013/November/monthly/'),
(97, 12, '12.pdf', 'uploads/2013/November/monthly/'),
(98, 12, '13.pdf', 'uploads/2013/November/monthly/'),
(99, 12, '14.pdf', 'uploads/2013/November/monthly/'),
(100, 12, '15.pdf', 'uploads/2013/November/monthly/'),
(101, 12, '16.pdf', 'uploads/2013/November/monthly/'),
(102, 12, '18.pdf', 'uploads/2013/November/monthly/'),
(103, 12, '19.pdf', 'uploads/2013/November/monthly/'),
(104, 12, '20.pdf', 'uploads/2013/November/monthly/'),
(105, 12, '17.pdf', 'uploads/2013/November/monthly/'),
(106, 12, '21.pdf', 'uploads/2013/November/monthly/'),
(107, 12, '22.pdf', 'uploads/2013/November/monthly/'),
(108, 12, '23.pdf', 'uploads/2013/November/monthly/'),
(109, 12, '24.pdf', 'uploads/2013/November/monthly/'),
(110, 12, '25.pdf', 'uploads/2013/November/monthly/'),
(111, 12, '26.pdf', 'uploads/2013/November/monthly/'),
(112, 12, '27.pdf', 'uploads/2013/November/monthly/'),
(113, 12, '28.pdf', 'uploads/2013/November/monthly/'),
(114, 12, '30.pdf', 'uploads/2013/November/monthly/'),
(115, 12, '29.pdf', 'uploads/2013/November/monthly/'),
(116, 12, '31.pdf', 'uploads/2013/November/monthly/'),
(117, 12, '32.pdf', 'uploads/2013/November/monthly/'),
(118, 12, '33.pdf', 'uploads/2013/November/monthly/'),
(119, 12, '34.pdf', 'uploads/2013/November/monthly/'),
(120, 12, '35.pdf', 'uploads/2013/November/monthly/'),
(121, 12, '36.pdf', 'uploads/2013/November/monthly/'),
(122, 12, '37.pdf', 'uploads/2013/November/monthly/'),
(123, 12, '38.pdf', 'uploads/2013/November/monthly/'),
(124, 12, '39.pdf', 'uploads/2013/November/monthly/'),
(125, 12, '40.pdf', 'uploads/2013/November/monthly/'),
(126, 12, '41.pdf', 'uploads/2013/November/monthly/'),
(127, 12, '42.pdf', 'uploads/2013/November/monthly/'),
(128, 12, '43.pdf', 'uploads/2013/November/monthly/'),
(129, 12, '44.pdf', 'uploads/2013/November/monthly/'),
(130, 12, '45.pdf', 'uploads/2013/November/monthly/'),
(131, 12, '46.pdf', 'uploads/2013/November/monthly/'),
(132, 12, '47.pdf', 'uploads/2013/November/monthly/'),
(133, 12, '48.pdf', 'uploads/2013/November/monthly/'),
(134, 12, '49.pdf', 'uploads/2013/November/monthly/'),
(135, 12, '50.pdf', 'uploads/2013/November/monthly/'),
(136, 12, '51.pdf', 'uploads/2013/November/monthly/'),
(137, 12, '52.pdf', 'uploads/2013/November/monthly/'),
(138, 12, '53.pdf', 'uploads/2013/November/monthly/'),
(139, 12, '54.pdf', 'uploads/2013/November/monthly/'),
(140, 12, '55.pdf', 'uploads/2013/November/monthly/'),
(141, 12, '56.pdf', 'uploads/2013/November/monthly/'),
(142, 12, '57.pdf', 'uploads/2013/November/monthly/'),
(143, 12, '58.pdf', 'uploads/2013/November/monthly/'),
(144, 12, '59.pdf', 'uploads/2013/November/monthly/'),
(145, 12, '60.pdf', 'uploads/2013/November/monthly/'),
(146, 12, '61.pdf', 'uploads/2013/November/monthly/'),
(147, 12, '62.pdf', 'uploads/2013/November/monthly/'),
(148, 12, '64.pdf', 'uploads/2013/November/monthly/'),
(149, 12, '63.pdf', 'uploads/2013/November/monthly/');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE IF NOT EXISTS `paper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `page_count` int(11) NOT NULL,
  `entry_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`id`, `year`, `month`, `type`, `page_count`, `entry_date`, `status`) VALUES
(11, 2013, 10, 1, 31, '2013-11-07 00:00:00', 1),
(12, 2013, 11, 0, 64, '2013-11-07 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conf_password` varchar(50) NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `conf_password`, `user_type`, `status`) VALUES
(1, 'admin', 'system', 'emodels@gmail.com', 'admin', '123', '123', 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`paper`) REFERENCES `paper` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
