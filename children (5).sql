-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 02:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `children`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message`, `user_id`, `subject`, `status`) VALUES
(1, 'solve my this problem asasasasa', 2, 'problem solving', 0),
(2, 'hello please solve m', 2, 'problem', 1),
(4, 'hello uzair', 2, 'good', 0);

-- --------------------------------------------------------

--
-- Table structure for table `missing_child`
--

CREATE TABLE IF NOT EXISTS `missing_child` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(100) NOT NULL,
  `m_age` int(11) NOT NULL,
  `m_identification` varchar(100) NOT NULL,
  `m_location` varchar(500) NOT NULL,
  `m_getup` varchar(500) NOT NULL,
  `m_phone` varchar(11) NOT NULL,
  `m_child_image` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `province` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `missing_child`
--

INSERT INTO `missing_child` (`m_id`, `m_name`, `m_age`, `m_identification`, `m_location`, `m_getup`, `m_phone`, `m_child_image`, `user_id`, `status`, `province`, `year`) VALUES
(7, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2011),
(17, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2012),
(18, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2013),
(19, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2013),
(20, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2013),
(21, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2013),
(22, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2013),
(23, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2013),
(24, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2013),
(25, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2013),
(26, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2013),
(27, 'amin', 10, 'black dot', 'dhoraji', 'white shirt', '03212323232', 'one.jpg', 2, 1, 'Sindh', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `p_gender` varchar(10) NOT NULL,
  `p_phone` varchar(11) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `p_lname` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `province` varchar(25) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`p_id`, `p_name`, `p_gender`, `p_phone`, `p_address`, `p_email`, `password`, `p_lname`, `city`, `province`, `status`) VALUES
(2, 'uzair', 'Male', '03212121212', 'dhoraji', 'uzair@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'kamdar', 'karachi', 'Sindh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `useremail` varchar(25) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `useremail`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0'),
(4, 'hameed', '81dc9bdb52d04dc20036dbd8313ed055', 'hameed@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
