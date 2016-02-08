-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Час створення: Лют 08 2016 р., 11:53
-- Версія сервера: 5.6.16
-- Версія PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `webmdb`
--

-- --------------------------------------------------------

--
-- Структура таблиці `ttags`
--

CREATE TABLE IF NOT EXISTS `ttags` (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cName` text CHARACTER SET latin1 NOT NULL,
  `cHidden` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Структура таблиці `ttagtowebm`
--

CREATE TABLE IF NOT EXISTS `ttagtowebm` (
  `cWebmid` int(11) NOT NULL,
  `cTagid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `twebm`
--

CREATE TABLE IF NOT EXISTS `twebm` (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cName` text CHARACTER SET latin1,
  `cDesk` text CHARACTER SET latin1,
  `cFilename` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`cId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17308 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
