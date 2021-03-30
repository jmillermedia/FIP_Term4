-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2021 at 02:56 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

DROP TABLE IF EXISTS `tbl_clients`;
CREATE TABLE IF NOT EXISTS `tbl_clients` (
  `clients_id` int(11) NOT NULL AUTO_INCREMENT,
  `clients_image` varchar(50) NOT NULL,
  `clients_name` varchar(50) NOT NULL,
  `clients_role` varchar(50) NOT NULL,
  `clients_message` varchar(300) NOT NULL,
  PRIMARY KEY (`clients_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`clients_id`, `clients_image`, `clients_name`, `clients_role`, `clients_message`) VALUES
(1, 'testimonialProfilePic1.jpg', 'Melanie Alexander', 'Graduate', 'Refereeing has been a great way for me to stay connected to the game I love, long after the time I retired from playing at a high level.'),
(2, 'testimonialProfilePic2.jpg', 'Oliver Cohen', 'Venue Owner', 'London Referees Group officials have always been professional when refereeing games held at our center.'),
(3, 'testimonialProfilePic3.jpg', 'Emma Brookes', 'Parent', 'It\'s hard for our kids to play their best and learn when referees don\'t know the game very well. Whenever an LRG ref is refereeing the game we know that it\'s a safer and professional environment.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_engage`
--

DROP TABLE IF EXISTS `tbl_engage`;
CREATE TABLE IF NOT EXISTS `tbl_engage` (
  `engage_id` int(11) NOT NULL AUTO_INCREMENT,
  `engage_image` varchar(50) NOT NULL,
  `engage_title` varchar(50) NOT NULL,
  `engage_text` varchar(300) NOT NULL,
  PRIMARY KEY (`engage_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_engage`
--

INSERT INTO `tbl_engage` (`engage_id`, `engage_image`, `engage_title`, `engage_text`) VALUES
(1, 'engagement1.jpg', 'Skill Building', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam unde amet, delectus cum repudiandae labore.'),
(2, 'engagement2.jpg', 'Spring Training', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam unde amet, delectus cum repudiandae labore.'),
(3, 'engagement3.jpg', 'Youth Tournament', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam unde amet, delectus cum repudiandae labore.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

DROP TABLE IF EXISTS `tbl_events`;
CREATE TABLE IF NOT EXISTS `tbl_events` (
  `events_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_image` varchar(50) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `event_text` varchar(300) NOT NULL,
  `event_num` varchar(50) NOT NULL,
  `event_style` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`events_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`events_id`, `event_image`, `event_title`, `event_text`, `event_num`, `event_style`) VALUES
(1, 'events1.jpg', 'Event 1', 'Lorem ipsum dolor sit ametconsetetur sadipscing Lorem ipsum dolor', 'events__event one', 'background-image: url(../public/images/events1.jpg);\r\nbackdrop-filter: brightness(50%) blur(1px);'),
(2, 'events2.jpg', 'Event 2', 'Lorem ipsum dolor sit ametconsetetur sadipscing', 'events__event two', 'background-image: url(../public/images/events2.jpg);\r\nbackdrop-filter: brightness(50%) blur(1px);');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_execs`
--

DROP TABLE IF EXISTS `tbl_execs`;
CREATE TABLE IF NOT EXISTS `tbl_execs` (
  `execs_id` int(11) NOT NULL AUTO_INCREMENT,
  `execs_image` varchar(50) NOT NULL,
  `execs_name` varchar(50) NOT NULL,
  `execs_position` varchar(25) NOT NULL,
  PRIMARY KEY (`execs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_execs`
--

INSERT INTO `tbl_execs` (`execs_id`, `execs_image`, `execs_name`, `execs_position`) VALUES
(1, 'memberPic1.jpg', 'Josh Ackworth', 'President'),
(2, 'memberPic2.jpg', 'Joe Masse', 'Vice-President'),
(3, 'memberPic3.jpg', 'Mark Lemiuex', 'Secretary');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(30) NOT NULL,
  `user_lname` varchar(40) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_fname`, `user_lname`, `user_phone`, `user_email`, `user_username`, `user_password`) VALUES
(1, 'Banglanfeng', 'Pan', '111-111-1111', 'b_pan2@fanshaweonline.ca', 'PanUser', 'PanPassword');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
