-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Creato il: Lug 22, 2015 alle 10:43
-- Versione del server: 5.5.42
-- Versione PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ragss`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `access`
--

INSERT INTO `access` (`id`, `email`, `password`) VALUES
(1, 'info@ragssoutlet.it', '1e4e888ac66f8dd41e00c5a7ac36a32a9950d271');

-- --------------------------------------------------------

--
-- Struttura della tabella `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `nameCategory` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameCategory_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameCategory_es` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameCategory_fr` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameCategory_ru` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `category`
--

INSERT INTO `category` (`idCategory`, `nameCategory`, `nameCategory_en`, `nameCategory_es`, `nameCategory_fr`, `nameCategory_ru`) VALUES
(1, 'abbigliamento', 'clothing', 'ropa', 'vêtements', 'одежда'),
(2, 'scarpe', 'shoes', 'zapatos', 'chaussures', 'обувь'),
(3, 'borse', 'bags', 'bolsas', 'sacs', 'мешки'),
(4, 'accessori', 'accessories', 'accesorios', 'accessoires', 'аксессуары'),
(5, 'beauty', 'beauty', 'beauty', 'beauty', 'красота');

-- --------------------------------------------------------

--
-- Struttura della tabella `discount`
--

CREATE TABLE `discount` (
  `idDiscount` int(11) NOT NULL,
  `idProductD` int(11) NOT NULL,
  `percentage` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `discount`
--

INSERT INTO `discount` (`idDiscount`, `idProductD`, `percentage`) VALUES
(1, 1, 50),
(2, 3, 25);

-- --------------------------------------------------------

--
-- Struttura della tabella `langNews`
--

CREATE TABLE `langNews` (
  `idLangNews` int(11) NOT NULL,
  `idNewsL` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) NOT NULL COMMENT 'it, en, fr, es, ru'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `langNews`
--

INSERT INTO `langNews` (`idLangNews`, `idNewsL`, `title`, `subtitle`, `text`, `lang`) VALUES
(1, 1, 'We have a perfect reputation and great', 'Design taken very seriously', 'Praising those system born resultant give physical trivial resultant who it toil consequences it one not trivial occasionally one that procure idea will. Builder truth painful advantage enjoy, obtain procure ever advantage obtain happiness, resultant obtain right explain — it enjoy because but itself was denouncing the.\n\nConsequences was all: procure, builder chooses account pursue again idea was man or rationally, you pursue and encounter circumstances desires you happiness human desires. In, truth, occur pursues exercise of us pleasure, again toil itself — not the explain rejects not nor. Who with truth itself again, must how trivial extremely because anyone example undertakes system idea how no those painful but anyone system human of.\n\nBuilder truth painful advantage enjoy, obtain procure ever advantage obtain happiness, resultant obtain right explain — it enjoy because but itself was denouncing the. Consequences was all: procure, builder chooses account pursue again idea was man or rationally, you pursue and encounter circumstances desires you happiness human desires. In, truth, occur pursues exercise of us pleasure, again toil itself — not the explain rejects not nor. Who with truth itself again, must how trivial extremely because anyone example undertakes system idea how no those painful but anyone system human of.', 'en'),
(2, 2, 'Just another news title', 'Another cool subtitle', 'Praising those system born resultant give physical trivial resultant who it toil consequences it one not trivial occasionally one that procure idea will. Builder truth painful advantage enjoy, obtain procure ever advantage obtain happiness, resultant obtain right explain — it enjoy because but itself was denouncing the.\r\n\r\nConsequences was all: procure, builder chooses account pursue again idea was man or rationally, you pursue and encounter circumstances desires you happiness human desires. In, truth, occur pursues exercise of us pleasure, again toil itself — not the explain rejects not nor. Who with truth itself again, must how trivial extremely because anyone example undertakes system idea how no those painful but anyone system human of.\r\n\r\nBuilder truth painful advantage enjoy, obtain procure ever advantage obtain happiness, resultant obtain right explain — it enjoy because but itself was denouncing the. Consequences was all: procure, builder chooses account pursue again idea was man or rationally, you pursue and encounter circumstances desires you happiness human desires. In, truth, occur pursues exercise of us pleasure, again toil itself — not the explain rejects not nor. Who with truth itself again, must how trivial extremely because anyone example undertakes system idea how no those painful but anyone system human of.', 'en');

-- --------------------------------------------------------

--
-- Struttura della tabella `langProduct`
--

CREATE TABLE `langProduct` (
  `idLangProduct` int(11) NOT NULL,
  `idProductL` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) NOT NULL COMMENT 'it, en, es, fr, ru'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `langProduct`
--

INSERT INTO `langProduct` (`idLangProduct`, `idProductL`, `name`, `description`, `lang`) VALUES
(1, 1, 'Large Belted Hobo Handbags', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(2, 2, 'Vitalio Oversized Marcela', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(3, 3, 'Boyt Edge Designer Carpet', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(4, 4, 'Leather Top Buckled Tote', 'You know that our commodities are the perfect combination of the origi...', 'en'),
(5, 5, 'Large Belted Hobo Handbag', 'È universalmente riconosciuto che un lettore che osserva il layout di una pagina viene distratto dal contenuto testuale se questo è leggibile. Lo scopo dell’utilizzo del Lorem Ipsum è che offre una normale distribuzione delle lettere (al contrario di quanto avviene se si utilizzano brevi frasi ripetute, ad esempio “testo qui”), apparendo come un normale blocco di testo leggibile.\r\n\r\nMolti software di impaginazione e di web design utilizzano Lorem Ipsum come testo modello.Molte versioni del testo sono state prodotte negli anni, a volte casualmente, a volte di proposito (ad esempio inserendo passaggi ironici).', 'en'),
(20, 12, 'Borsa Pelle Fighissima', 'Bellissima borsa del marchio Prada, fatta in pelle pregiata e di prima scelta. Colori disponibili: rosso, verde, giallo, arancione.', 'it'),
(21, 12, 'Borsa Pelle Fighissima', '﻿Gorgeous Prada brand is prized and leather. Colors available: red, green, yellow, orange.', 'en'),
(22, 12, 'Borsa Pelle Fighissima', '﻿Magnífico cuero y Prada marca es muy apreciada. Colores disponibles: rojo, verde, amarillo, naranja.', 'es'),
(23, 12, 'Borsa Pelle Fighissima', '﻿Magnifique Prada marque est prisé et cuir. Couleurs disponibles : rouge, vert, jaune, orange.', 'fr');

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

CREATE TABLE `news` (
  `idNews` int(11) NOT NULL,
  `cover` text NOT NULL,
  `createdOn` date NOT NULL,
  `updatedOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0',
  `suspended` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `news`
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
-- Struttura della tabella `newsletter`
--

CREATE TABLE `newsletter` (
  `idNewsletter` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `newsletter`
--

INSERT INTO `newsletter` (`idNewsletter`, `email`, `createdOn`) VALUES
(1, 'i.porta@hotmail.it', '2015-07-07 22:00:00'),
(2, 'nikolaykolev88@gmail.com', '2015-07-07 22:00:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `idSubcategoryP` int(11) NOT NULL,
  `cover` text NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `createdOn` date NOT NULL,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0',
  `suspended` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `product`
--

INSERT INTO `product` (`idProduct`, `idSubcategoryP`, `cover`, `brand`, `price`, `createdOn`, `updatedOn`, `views`, `suspended`) VALUES
(1, 3, '0.png', 'gucci', 102.32, '2015-08-08', '2015-07-21 09:35:45', 20, 0),
(2, 5, '1.png', 'louis vuitton', 96.98, '2015-06-10', '2015-07-21 09:36:08', 12, 0),
(3, 7, '2.png', 'armani', 56.7, '2015-04-13', '2015-07-21 09:36:19', 7, 0),
(4, 9, '3.png', 'dolce & gabbana', 25.99, '0000-00-00', '2015-07-21 09:36:31', 0, 0),
(5, 4, 'file_24.png', 'prada', 100.32, '2015-07-07', '2015-07-20 08:03:25', 0, 0),
(12, 7, '1115.png', 'prada', 120.4, '2015-07-20', '2015-07-20 10:38:09', 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `subcategory`
--

CREATE TABLE `subcategory` (
  `idSubcategory` int(11) NOT NULL,
  `idCategoryS` int(11) NOT NULL,
  `nameSubcategory` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameSubcategory_en` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameSubcategory_es` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameSubcategory_fr` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameSubcategory_ru` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `subcategory`
--

INSERT INTO `subcategory` (`idSubcategory`, `idCategoryS`, `nameSubcategory`, `nameSubcategory_en`, `nameSubcategory_es`, `nameSubcategory_fr`, `nameSubcategory_ru`) VALUES
(2, 1, 'abiti', 'clothes', 'ropa', 'vêtements', 'одежда'),
(3, 1, 'giacche', 'jacket', 'chaquetas', 'vestes', 'жакеты'),
(4, 1, 'jeans', 'jeans', 'jeans', 'jeans', 'джинсы'),
(5, 1, 'shorts', 'shorts', 'shorts', 'shorts', 'шорты '),
(6, 1, 'gonne', 'skirt', 'faldas', 'jupes', 'юбки'),
(7, 1, 'leggins', 'leggins', 'leggins', 'leggins', 'леггинсы'),
(8, 1, 'costumi', 'swim wear', 'polainas', 'costumi', 'нравы'),
(9, 1, 'knit wear', 'knit wear', 'moralidad', 'tricots', 'трикотаж'),
(10, 2, 'stivali', 'boots', 'botas', 'bottes', 'ботинки'),
(11, 2, 'flats', 'flats', 'flats', 'flats', 'Квартиры'),
(12, 2, 'sandali', 'sandals', 'sandalias', 'sandales', 'сандалии'),
(13, 2, 'sneakers', 'sneaker', 'sneaker', 'sneaker', 'кроссовки'),
(14, 4, 'cinture', 'belts', 'cinturones', 'ceintures', 'ремни'),
(15, 4, 'cappelli', 'hats', 'sombreros', 'chapeaux', 'шляпы'),
(16, 4, 'gioielli', 'jewelry', 'joyas', 'bijoux', 'ювелирные изделия'),
(17, 4, 'purses', 'purses', 'monederos', 'sacs à main', 'кошельки'),
(18, 5, 'occhi', 'eyes', 'ojos', 'yeux', 'глаза'),
(19, 5, 'faccia', 'face', 'cara', 'visage', 'лицо'),
(20, 5, 'labbra', 'lips', 'labios', 'lèvres', 'губы');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indici per le tabelle `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`idDiscount`);

--
-- Indici per le tabelle `langNews`
--
ALTER TABLE `langNews`
  ADD PRIMARY KEY (`idLangNews`);

--
-- Indici per le tabelle `langProduct`
--
ALTER TABLE `langProduct`
  ADD PRIMARY KEY (`idLangProduct`);

--
-- Indici per le tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idNews`);

--
-- Indici per le tabelle `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`idNewsletter`);

--
-- Indici per le tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indici per le tabelle `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`idSubcategory`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT per la tabella `discount`
--
ALTER TABLE `discount`
  MODIFY `idDiscount` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `langNews`
--
ALTER TABLE `langNews`
  MODIFY `idLangNews` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `langProduct`
--
ALTER TABLE `langProduct`
  MODIFY `idLangProduct` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `idNews` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT per la tabella `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `idNewsletter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT per la tabella `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `idSubcategory` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
