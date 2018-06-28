-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2015 at 11:04 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ragss`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `email`, `password`) VALUES
(1, 'info@ragssoutlet.it', 'c8eb74c531034db42ae05cab8582636e8e89d36c');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `idDiscount` int(11) NOT NULL AUTO_INCREMENT,
  `idProductD` int(11) NOT NULL,
  `percentage` int(3) NOT NULL,
  PRIMARY KEY (`idDiscount`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`idDiscount`, `idProductD`, `percentage`) VALUES
(1, 1, 50),
(2, 3, 25);

-- --------------------------------------------------------

--
-- Table structure for table `langNews`
--

CREATE TABLE `langNews` (
  `idLangNews` int(11) NOT NULL AUTO_INCREMENT,
  `idNewsL` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text NOT NULL,
  `text` text NOT NULL,
  `lang` varchar(2) NOT NULL COMMENT 'it, en, fr, es, ru',
  PRIMARY KEY (`idLangNews`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `langProduct`
--

CREATE TABLE `langProduct` (
  `idLangProduct` int(11) NOT NULL AUTO_INCREMENT,
  `idProductL` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `lang` varchar(2) NOT NULL COMMENT 'it, en, es, fr, ru',
  PRIMARY KEY (`idLangProduct`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `langProduct`
--

INSERT INTO `langProduct` (`idLangProduct`, `idProductL`, `name`, `description`, `lang`) VALUES
(1, 1, 'Large Belted Hobo Handbags', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(2, 2, 'Vitalio Oversized Marcela', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(3, 3, 'Boyt Edge Designer Carpet', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(4, 4, 'Leather Top Buckled Tote', 'You know that our commodities are the perfect combination of the origi...', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `idNews` int(11) NOT NULL AUTO_INCREMENT,
  `cover` text NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0',
  `suspended` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idNews`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `idNewsletter` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`idNewsletter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL AUTO_INCREMENT,
  `cover` text NOT NULL,
  `price` double NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `suspended` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idProduct`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `cover`, `price`, `views`, `suspended`) VALUES
(1, '0.png', 102.32, 0, 0),
(2, '1.png', 96.98, 0, 0),
(3, '2.png', 56.7, 0, 0),
(4, '3.png', 25.99, 0, 0);
