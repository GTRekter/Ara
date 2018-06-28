-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2015 at 11:08 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `langNews`
--

INSERT INTO `langNews` (`idLangNews`, `idNewsL`, `title`, `subtitle`, `text`, `lang`) VALUES
(1, 1, 'We have a perfect reputation and great', 'Design taken very seriously', 'Praising those system born resultant give physical trivial resultant who it toil consequences it one not trivial occasionally one that procure idea will. Builder truth painful advantage enjoy, obtain procure ever advantage obtain happiness, resultant obtain right explain — it enjoy because but itself was denouncing the.\n\nConsequences was all: procure, builder chooses account pursue again idea was man or rationally, you pursue and encounter circumstances desires you happiness human desires. In, truth, occur pursues exercise of us pleasure, again toil itself — not the explain rejects not nor. Who with truth itself again, must how trivial extremely because anyone example undertakes system idea how no those painful but anyone system human of.\n\nBuilder truth painful advantage enjoy, obtain procure ever advantage obtain happiness, resultant obtain right explain — it enjoy because but itself was denouncing the. Consequences was all: procure, builder chooses account pursue again idea was man or rationally, you pursue and encounter circumstances desires you happiness human desires. In, truth, occur pursues exercise of us pleasure, again toil itself — not the explain rejects not nor. Who with truth itself again, must how trivial extremely because anyone example undertakes system idea how no those painful but anyone system human of.', 'en'),
(2, 2, 'Just another news title', 'Another cool subtitle', 'Praising those system born resultant give physical trivial resultant who it toil consequences it one not trivial occasionally one that procure idea will. Builder truth painful advantage enjoy, obtain procure ever advantage obtain happiness, resultant obtain right explain — it enjoy because but itself was denouncing the.\r\n\r\nConsequences was all: procure, builder chooses account pursue again idea was man or rationally, you pursue and encounter circumstances desires you happiness human desires. In, truth, occur pursues exercise of us pleasure, again toil itself — not the explain rejects not nor. Who with truth itself again, must how trivial extremely because anyone example undertakes system idea how no those painful but anyone system human of.\r\n\r\nBuilder truth painful advantage enjoy, obtain procure ever advantage obtain happiness, resultant obtain right explain — it enjoy because but itself was denouncing the. Consequences was all: procure, builder chooses account pursue again idea was man or rationally, you pursue and encounter circumstances desires you happiness human desires. In, truth, occur pursues exercise of us pleasure, again toil itself — not the explain rejects not nor. Who with truth itself again, must how trivial extremely because anyone example undertakes system idea how no those painful but anyone system human of.', 'en');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `langProduct`
--

INSERT INTO `langProduct` (`idLangProduct`, `idProductL`, `name`, `description`, `lang`) VALUES
(1, 1, 'Large Belted Hobo Handbags', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(2, 2, 'Vitalio Oversized Marcela', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(3, 3, 'Boyt Edge Designer Carpet', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(4, 4, 'Leather Top Buckled Tote', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(5, 5, 'Large Belted Hobo Handbag', 'We have a perfect reputation and great experience in this sphere and', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `idNews` int(11) NOT NULL AUTO_INCREMENT,
  `cover` text NOT NULL,
  `createdOn` date NOT NULL,
  `updatedOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0',
  `suspended` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idNews`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idNews`, `cover`, `createdOn`, `updatedOn`, `views`, `suspended`) VALUES
(1, 'slide1.jpg', '2015-06-17', '2015-07-02 09:25:29', 0, 0),
(2, 'slide2.jpg', '2015-07-01', '2015-07-08 08:49:12', 0, 0),
(3, 'test', '0000-00-00', '2015-06-30 14:23:34', 0, 1),
(4, 'test', '1970-01-01', '2015-06-30 14:28:01', 0, 1),
(5, 'test', '1970-01-01', '2015-06-30 14:28:48', 0, 1),
(6, 'test', '2015-06-30', '2015-06-30 14:29:15', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `idNewsletter` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idNewsletter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`idNewsletter`, `email`, `createdOn`) VALUES
(1, 'i.porta@hotmail.it', '2015-07-07 22:00:00'),
(2, 'nikolaykolev88@gmail.com', '2015-07-07 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL AUTO_INCREMENT,
  `cover` text NOT NULL,
  `price` double NOT NULL,
  `createdOn` date NOT NULL,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0',
  `suspended` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idProduct`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `cover`, `price`, `createdOn`, `updatedOn`, `views`, `suspended`) VALUES
(1, '0.png', 102.32, '2015-08-08', '2015-07-02 10:37:39', 20, 0),
(2, '1.png', 96.98, '2015-06-10', '2015-07-02 10:37:39', 12, 0),
(3, '2.png', 56.7, '2015-04-13', '2015-07-02 10:37:39', 7, 0),
(4, '3.png', 25.99, '0000-00-00', '2015-07-07 15:21:38', 0, 0),
(5, 'file_24.png', 100.32, '2015-07-07', '2015-07-08 08:50:19', 0, 0);
