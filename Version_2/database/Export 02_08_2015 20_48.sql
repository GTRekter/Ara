-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2015 at 08:48 PM
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
(1, 'info@ragssoutlet.it', '1e4e888ac66f8dd41e00c5a7ac36a32a9950d271');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL AUTO_INCREMENT,
  `nameCategory` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameCategory_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameCategory_es` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameCategory_fr` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameCategory_ru` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idCategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `nameCategory`, `nameCategory_en`, `nameCategory_es`, `nameCategory_fr`, `nameCategory_ru`) VALUES
(1, 'abbigliamento', 'clothing', 'ropa', 'vêtements', 'одежда'),
(2, 'scarpe', 'shoes', 'zapatos', 'chaussures', 'обувь'),
(3, 'borse', 'bags', 'bolsas', 'sacs', 'мешки'),
(4, 'accessori', 'accessories', 'accesorios', 'accessoires', 'аксессуары'),
(5, 'beauty', 'beauty', 'beauty', 'beauty', 'красота');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `idDiscount` int(11) NOT NULL AUTO_INCREMENT,
  `idProductD` int(11) NOT NULL,
  `percentage` int(3) NOT NULL,
  PRIMARY KEY (`idDiscount`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `langNews`
--

CREATE TABLE `langNews` (
  `idLangNews` int(11) NOT NULL AUTO_INCREMENT,
  `idNewsL` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) NOT NULL COMMENT 'it, en, es, fr, ru',
  PRIMARY KEY (`idLangProduct`),
  FULLTEXT KEY `name` (`name`),
  FULLTEXT KEY `description` (`description`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `langProduct`
--

INSERT INTO `langProduct` (`idLangProduct`, `idProductL`, `name`, `description`, `lang`) VALUES
(1, 1, 'Borsa Vintage Pelle', 'Borsa in stile vintage con disegno a linee bianche nere e rosse e maniglia in pelle nera. Leggera ed elegante, ma moderna allo stesso tempo.', 'it'),
(2, 1, 'Vintage Leather Bag', 'Bag in a vintage style design with white lines in black and red and black leather handle. Light and elegant, but modern at the same time.\n', 'en'),
(3, 1, '﻿Bolso de cuero vintage', '﻿Bolso estilo vintage con líneas blancas negras y rojas y manija de cuero negro. Ligero y elegante, pero moderno al mismo tiempo.', 'es'),
(4, 1, '﻿Sac en cuir Vintage', '﻿Sac de style vintage avec des lignes blanches noires et rouges et poignée en cuir noir. Léger et élégant, mais moderne en même temps.', 'fr'),
(5, 1, '﻿Винтаж кожаный мешок', '﻿Винтажный стиль сумка с красные и черные линии белые и черные кожаные ручки. Легкий и элегантный, но современные в то же время.', 'ru'),
(6, 2, 'Borsa Casual Nera', 'Borsa nera con lacci e maniglie bianche. Fatta a mano e interamente in pelle. Un oggetto non troppo impegnativo, da usare tutti i giorni.', 'it'),
(7, 2, 'Casual Black Bag', 'Black bag with laces and white handles. Handmade and full leather. An object is not too demanding, to be used every day.', 'en'),
(8, 2, '﻿Bolso Casual negro', '﻿Negro bolso con cordones y tiradores blancos. Cuero hecho a mano. Un objeto que no es demasiado difícil para el uso diario.', 'es'),
(9, 2, '﻿Sac sport noir', '﻿Sac avec lacets et poignées blanches de noir. En cuir fabriqués à la main. Un objet qui n''est pas trop difficile pour un usage quotidien.', 'fr'),
(10, 2, '﻿Черная сумка случайных', '﻿Черная сумка с кружевами и белые маркеры. Ручной работы из кожи. Объект, который не является слишком сложным для повседневного использования.', 'ru'),
(11, 3, 'Borsa Viaggio Estiva', 'Borsa di colore rosso accesso. Leggera e comoda da portare e resistente agli urti. Rinforzata sui bordi. Perfetto compagno da viaggio.', 'it'),
(12, 3, 'Travel Bag Summer', 'Bag of red access. Lightweight and comfortable to wear and impact resistant. Reinforced edges. Perfect traveling companion.', 'en'),
(13, 3, '﻿Bolsa de viaje de verano', '﻿Cuota de bolso rojo. Ligero y cómodo de llevar y resistente al impacto. Bordes reforzados. Compañero de viaje perfecto.', 'es'),
(14, 3, '﻿Sac de voyage été', '﻿Taxe de sac rouge. Léger et confortable à porter et résistant aux chocs. Bords renforcés. Compagnon de voyage idéal.', 'fr'),
(15, 3, '﻿Летняя сумка', '﻿Плата за красный мешок. Легкие и удобные для ношения и ударопрочный. Усиленные края. Идеальным спутником.', 'ru'),
(16, 4, 'Borsa Viaggio Invernale', 'Borsa di colore marrone classico. Leggera e comoda da portare e resistente agli urti. Rinforzata sui bordi. Perfetto compagno da viaggio.', 'it'),
(17, 4, 'Travel Bag Winter', 'Bag brown classic. Lightweight and comfortable to wear and impact resistant. Reinforced edges. Perfect traveling companion.', 'en'),
(18, 4, '﻿Bolsa de viaje de invierno', '﻿Bolsa marrón clásico. Ligero y cómodo de llevar y resistente al impacto. Bordes reforzados. Compañero de viaje perfecto.', 'es'),
(19, 4, '﻿Sac de voyage d''hiver', '﻿Sac marron classique. Léger et confortable à porter et résistant aux chocs. Bords renforcés. Compagnon de voyage idéal.', 'fr'),
(20, 4, '﻿Зимние путешествия сумка', '﻿Классический коричневый мешок. Легкие и удобные для ношения и ударопрочный. Усиленные края. Идеальным спутником.', 'ru'),
(21, 5, 'Borsa Bianca Passione', 'Elegante e raffinata borsa bianca. Stile sobrio e classico ma allo stesso inconfondibile. Classico di uno dei marchi italiani più rinomati al mondo.', 'it'),
(22, 5, 'White Passion Bag', 'Elegant and refined white purse. Sober and classic yet unique. Classic of one of the most renowned Italian brands in the world.', 'en'),
(23, 5, '﻿Bolso blanco de la pasión', '﻿Bolsa blanca elegante y refinado. Estilo clásico pero el mismo inconfundible. Uno de los clásicos italianos marcas en el mundo.', 'es'),
(24, 5, '﻿Sac à main blanc Passion', '﻿Sac blanc élégant et raffiné. Style classique mais la même caractéristique. L''un de l''italien classique marques dans le monde.', 'fr'),
(25, 5, '﻿Белая страсть сумочка', '﻿Элегантный и изысканный белый мешок. Классический стиль, но то же безошибочно. Одна из классических итальянских брендов в мире.', 'ru'),
(26, 6, 'Borsetta Pelle', 'Piccola borsetta in pelle. Disponibile in vari colori. Perfetta per sostituire, una volta tanto, le borse troppo grandi e pesanti.', 'it'),
(27, 6, '﻿Leather Handbag', '﻿Small leather handbag. Available in various colors. Perfect to replace, for once, the bags too large and heavy.', 'en'),
(28, 6, '﻿Bolso de cuero', '﻿Bolso de cuero pequeño. Disponible en varios colores. Perfecto para reemplazar, por una vez, los bolsos demasiado grandes y pesados.', 'es'),
(29, 6, '﻿Sac à main en cuir', '﻿Sac à main de petits articles en cuir. Disponible en différentes couleurs. Parfait pour remplacer, pour une fois, les sacs trop volumineux et lourds.', 'fr'),
(30, 6, 'Кожаная сумка', 'Малый кожаная сумка. Доступный в различных цветах. Идеальное решение для замены, на этот раз, мешки слишком большой и тяжелый.', 'ru');

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
(2, 'slide2.jpg', '2014-07-01', '2015-08-02 13:08:00', 0, 0),
(3, 'test', '0000-00-00', '2015-06-30 14:23:34', 0, 1),
(4, 'test', '1970-01-01', '2015-08-02 13:07:20', 0, 0),
(5, 'test', '1970-01-01', '2015-08-02 13:07:23', 0, 0),
(6, 'test', '2015-06-30', '2015-08-02 13:07:28', 0, 0);

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
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `idPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `idProductP` int(11) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL AUTO_INCREMENT,
  `idSubcategoryP` int(11) NOT NULL,
  `cover` text NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `createdOn` date NOT NULL,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0',
  `suspended` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idProduct`),
  FULLTEXT KEY `brand` (`brand`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `idSubcategoryP`, `cover`, `brand`, `price`, `createdOn`, `updatedOn`, `views`, `suspended`) VALUES
(1, 21, '0.png', 'prada', 120.4, '2015-08-02', '2015-08-02 18:27:59', 0, 0),
(2, 21, '1.png', 'gucci', 205.99, '2015-08-02', '2015-08-02 18:28:13', 0, 0),
(3, 21, '2.png', 'armani', 89.99, '2015-08-02', '2015-08-02 18:28:21', 0, 0),
(4, 21, '3.png', 'armani', 99.99, '2015-08-02', '2015-08-02 18:28:30', 0, 0),
(5, 21, '4.png', 'dolce & gabbana', 359.99, '2015-08-02', '2015-08-02 18:28:39', 0, 0),
(6, 21, '5.png', 'louis vuitton', 59.89, '2015-08-02', '2015-08-02 18:31:43', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `idSubcategory` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoryS` int(11) NOT NULL,
  `nameSubcategory` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameSubcategory_en` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameSubcategory_es` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameSubcategory_fr` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameSubcategory_ru` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idSubcategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `subcategory`
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
(20, 5, 'labbra', 'lips', 'labios', 'lèvres', 'губы'),
(21, 3, 'borse', 'handbags', 'bolsas', 'sacs', 'мешки');
