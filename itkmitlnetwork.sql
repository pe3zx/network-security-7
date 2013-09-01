-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2013 at 05:29 PM
-- Server version: 5.0.51b-community-nt-log
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itkmitlnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `@dm1nja`
--

CREATE TABLE IF NOT EXISTS `@dm1nja` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `u23rn@m3` varchar(200) NOT NULL,
  `p@2sw0rd` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `@dm1nja`
--

INSERT INTO `@dm1nja` (`id`, `u23rn@m3`, `p@2sw0rd`) VALUES
(1, 'pe3z', '&lt;<Sp@M>!G@Y&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `keystore`
--

CREATE TABLE IF NOT EXISTS `keystore` (
  `id` int(11) NOT NULL auto_increment,
  `key` varchar(64) NOT NULL,
  `point` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `key` (`key`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `keystore`
--

INSERT INTO `keystore` (`id`, `key`, `point`) VALUES
(1, 'he11o_scr1pt_k1dd1e', 1),
(2, 'pwn1ng_w1th_y0ur_h4nd', 1),
(3, 'escap3_th3_m4ze', 1),
(4, 'h0w_fun_w1th_c00ki3z', 1),
(5, 'g0d_0f_n3tw0rkz', 1),
(6, 'just_th3_b4s1c_meh', 1),
(7, 'th3_1337_h4x0r_app34r', 1),
(8, 't3ln3t_1s_t00_e4sy', 1),
(9, 'br34k_th3_4uth', 1),
(10, 'att4ck1ng_th3_c1ph3rz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `fullname` varchar(250) character set utf8 NOT NULL,
  `score` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `fullname`, `score`) VALUES
(1, 'สมชาย รักเรียน', 10),
(2, 'สมหญิง ดียิ่ง', 5),
(3, 'เลิศศักดิ์ ขยันดี', 2),
(4, 'นายห่วย ศูนย์ตลอด', 0);

-- --------------------------------------------------------

--
-- Table structure for table `scoreboard`
--

CREATE TABLE IF NOT EXISTS `scoreboard` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(64) NOT NULL,
  `score` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(64) NOT NULL,
  `key` varchar(64) NOT NULL,
  `note` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'user', 'dummy'),
(2, 'ilove', 'itkmitl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
