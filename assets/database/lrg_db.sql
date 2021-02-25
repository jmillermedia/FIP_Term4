-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2021 at 11:52 PM
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
-- Table structure for table `tbl_about`
--

DROP TABLE IF EXISTS `tbl_about`;
CREATE TABLE IF NOT EXISTS `tbl_about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_image` varchar(50) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_image`, `about_title`) VALUES
(1, 'OHF_logo.svg', 'OHF Logo'),
(2, 'OMHA_logo.svg', 'OMHA Logo'),
(3, 'OWHA_logo.svg', 'OWHA Logo'),
(4, 'SportAbility_2_logo.png', 'Sportability Logo'),
(5, 'alliancehockey_logo.png', 'Alliance hockey Logo'),
(6, 'canada_hockey.svg', 'Canada hockey Logo'),
(7, 'hero_aboutus_desktop.jpg', 'Skates and hockey sticks'),
(8, 'hero_aboutus_mobile.jpg', 'Skates and hockey sticks'),
(9, 'ice-hockey-puck-svgrepo-com.svg', 'Hockey puck'),
(10, 'president_aboutus_desktop.png', 'LRG President'),
(11, 'president_aboutus_mobile.png', 'LRG President'),
(12, 'secretary_aboutus_desktop.png', 'LRG Secretary'),
(13, 'secretary_aboutus_mobile.png', 'LRG Secretary'),
(14, 'vicepresident_aboutus_desktop.png', 'LRG Vice President'),
(15, 'vicepresident_aboutus_mobile.png', 'LRG Vice President');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_image` varchar(50) NOT NULL,
  `contact_title` varchar(50) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_image`, `contact_title`) VALUES
(1, 'OHF_logo.svg', 'OHF Logo'),
(2, 'OMHA_logo.svg', 'OMHA Logo'),
(3, 'OWHA_logo.svg', 'OWHA Logo'),
(4, 'SportAbility_2_logo.png', 'Sportability Logo'),
(5, 'alliancehockey_logo.png', 'Alliance Hockey Logo'),
(6, 'canada_hockey.svg', 'Canada hockey Logo'),
(7, 'cell-phone.svg', 'Cell Phone'),
(8, 'envelope-line.svg', 'Envelope'),
(9, 'hero_contact_desktop.jpg', 'Puck drop'),
(10, 'hero_contact_mobile.jpg', 'Puck drop'),
(11, 'location-pin.svg', 'Location pin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

DROP TABLE IF EXISTS `tbl_home`;
CREATE TABLE IF NOT EXISTS `tbl_home` (
  `home_id` int(11) NOT NULL AUTO_INCREMENT,
  `home_image` varchar(50) NOT NULL,
  `home_title` varchar(50) NOT NULL,
  PRIMARY KEY (`home_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_image`, `home_title`) VALUES
(1, 'OHF_logo.svg', 'OHF Logo'),
(2, 'OMHA_logo.svg', 'OMHA Logo'),
(3, 'OWHA_logo.svg', 'OWHA Logo'),
(4, 'SportAbility_2_logo.png', 'Sportability logo'),
(5, 'alliancehockey_logo.png', 'Alliance Hockey Logo'),
(6, 'canada_hockey.svg', 'Canada Hockey Logo'),
(7, 'hero_home_desktop.jpg', 'Referee on ice'),
(8, 'hero_home_mobile.jpg', 'Referee on ice'),
(9, 'ice-hockey-puck-svgrepo-com.svg', 'Hockey puck'),
(10, 'placeholder_home_desktop.jpg', 'Whistle on striped background'),
(11, 'placeholder_home_mobile.jpg', 'Whistle on striped background'),
(12, 'test_home_desktop.png', 'Referee breaks up fight'),
(13, 'test_home_mobile.png', 'Referee breaks up fight'),
(14, 'whistle.svg', 'Whistle'),
(15, 'why_home_desktop.png', 'Referee close up'),
(16, 'why_home_mobile.png', 'Referee close up');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

DROP TABLE IF EXISTS `tbl_members`;
CREATE TABLE IF NOT EXISTS `tbl_members` (
  `members_id` int(11) NOT NULL AUTO_INCREMENT,
  `members_image` varchar(50) NOT NULL,
  `members_title` varchar(50) NOT NULL,
  PRIMARY KEY (`members_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_members`
--

INSERT INTO `tbl_members` (`members_id`, `members_image`, `members_title`) VALUES
(1, 'OHF_logo.svg', 'OHF Logo'),
(2, 'OMHA_logo.svg', 'OMHA Logo'),
(3, 'OWHA_logo.svg', 'OWHA Logo'),
(4, 'SportAbility_2_logo.png', 'Sportability Logo'),
(5, 'alliancehockey_logo.png', 'Alliance hockey Logo'),
(6, 'canada_hockey.svg', 'Canada hockey Logo'),
(7, 'become_member_desktop.png', 'Back of a referee'),
(8, 'become_member_mobile.png', 'Back of a referee'),
(9, 'engage_member_desktop.png', 'Hockey table game blurred'),
(10, 'engage_member_mobile.png', 'Hockey table game blurred'),
(11, 'hero_members_desktop.jpg', 'Hockey table game'),
(12, 'hero_members_mobile.jpg', 'Hockey table game'),
(13, 'ice-hockey-puck-svgrepo-com.svg', 'Hockey Puck');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_train`
--

DROP TABLE IF EXISTS `tbl_train`;
CREATE TABLE IF NOT EXISTS `tbl_train` (
  `train_id` int(11) NOT NULL AUTO_INCREMENT,
  `train_image` varchar(50) NOT NULL,
  `train_title` varchar(50) NOT NULL,
  PRIMARY KEY (`train_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_train`
--

INSERT INTO `tbl_train` (`train_id`, `train_image`, `train_title`) VALUES
(1, 'OHF_logo.svg', 'OHF Logo'),
(2, 'OMHA_logo.svg', 'OMHA Logo'),
(3, 'OWHA_logo.svg', 'OWHA Logo'),
(4, 'SportAbility_2_logo.png', 'Sportability Logo'),
(5, 'alliancehockey_logo.png', 'Alliance Hockey Logo'),
(6, 'canada_hockey.svg', 'Canada hockey Logo'),
(7, 'event1_train_desktop.png', 'Hockey game'),
(8, 'event1_train_mobile.png', 'Hockey Game'),
(9, 'event2_train_desktop.png', 'Skates and sticks'),
(10, 'event2_train_mobile.png', 'Skates and sticks'),
(11, 'helemt_icon.svg', 'Helmet'),
(12, 'hero_train_desktop.jpg', 'Skates close up'),
(13, 'hero_train_mobile.jpg', 'Skates close up'),
(14, 'ice-hockey-puck-svgrepo-com.svg', 'Hockey puck'),
(15, 'junior_train_desktop.png', 'Team close up'),
(16, 'junior_train_mobile.png', 'Team close up'),
(17, 'looking_train_desktop.jpg', 'Orange overhead'),
(18, 'looking_train_mobile.jpg', 'Orange overhead'),
(19, 'whistle.svg', 'Whistle');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
