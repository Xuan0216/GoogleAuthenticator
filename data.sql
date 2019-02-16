-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-12-27 15:42:20
-- 服务器版本： 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ysyy`
--
CREATE DATABASE IF NOT EXISTS `ysyy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ysyy`;

-- --------------------------------------------------------

--
-- 表的结构 `login_info`
--

DROP TABLE IF EXISTS `login_info`;
CREATE TABLE IF NOT EXISTS `login_info` (
  `login_username` varchar(8) NOT NULL,
  `login_password` varchar(50) NOT NULL,
  `login_secret` varchar(50) NOT NULL,
  UNIQUE KEY `login_username` (`login_username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 插入之前先把表清空（truncate） `login_info`
--

TRUNCATE TABLE `login_info`;
--
-- 转存表中的数据 `login_info`
--

INSERT INTO `login_info` (`login_username`, `login_password`, `login_secret`) VALUES
('abc', 'a9e5a655269aa3d295e5e951ce7915b8158aa2f4', 'MZLUGWVNK5IPGJXJ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
