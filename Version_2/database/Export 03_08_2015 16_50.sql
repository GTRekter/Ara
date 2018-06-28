-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 03, 2015 at 04:50 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `langNews`
--

INSERT INTO `langNews` (`idLangNews`, `idNewsL`, `title`, `subtitle`, `text`, `lang`) VALUES
(1, 1, 'Lo stile delle star in vacanza', 'Stelle sotto il sole', 'Manca poco meno di un mese a che il calendario dichiari ufficialmente iniziata l''estate. Ma non per questo non si può parlare di vacanze. E se anche noi sperimenteremo un assaggio di sole con il prossimo ponte del 2 giugno negli States è già summertime. Oltreoceano grazie al Memorial Day, festività che ufficialmente apre le porte della bella stagione, si dà il via ai primi sunbath.\r\n\r\nMiami Beach dove le celebrities hanno già affrontato la prova costume confermando che, almeno dai primi exit pool (nel senso della piscina), il bikini quest’anno sembra ancora il trend dominante. Prove di estate anche in Europa. Se volete saperne di più la keyword è: yacht.\r\n\r\nLeo di Caprio, Kendall Jenner, Cara Delevingne e Michelle Rodriguez: tra Cannes e Montecarlo la vacanza per le stelle si fa al largo, distesi sul pontile a prendere il sole, farsi i bagni in piscina o anche solo rilassandosi in attesa del cocktail serale. Oppure sulle coste italiane, come a Taormina dove Rupert Everett, in occasione del Film Festival, si è concesso un pranzo in compagnia di Francesco Scianna. E siamo solamente agli inizi…', 'it'),
(2, 1, '﻿Star style on vacation', '﻿Stars under the Sun', '﻿Missing less than a month in the calendar State officially started the summer. But that doesn''t mean you can''t talk about vacations. And if we experience a taste of Sun with the next bridge of 2 June in the States is already summertime. Overseas due to the Memorial Day holiday that officially opens its doors in the summer, we kick off in early sunbath.\r\n\r\nMiami Beach where the celebrities have already faced the costume test confirming that, at least from the early exit pool (in the pool), the bikini this year seems still the dominant trend. Summer tests in Europe. If you want to learn more about the keyword is: yacht.\r\n\r\nLeo di Caprio, Kendall Jenner, Cara Delevingne and Michelle Rodriguez: between Cannes and Monaco vacation for the stars is off, lying on the Jetty to sunbathe, get the toilets at the pool or just lounging waiting for evening cocktails. Or on the Italian coast, as in Taormina where Rupert Everett, on the occasion of the Film Festival, it was granted a lunch in the company of Francesco Scianna. And we are only at the beginning ...', 'en'),
(3, 1, '﻿Estilo de estrellas de vacaciones', '﻿Estrellas bajo el sol', '﻿Falta menos de un mes en el calendario estatal oficialmente había iniciado el verano. Pero eso no significa que no se puede hablar de vacaciones. Y si experimentamos un sabor del sol con el siguiente puente del 2 de junio en los Estados ya están verano. En el extranjero debido a la festividad del Memorial Day abre oficialmente sus puertas en el verano, iniciará en el sol temprano.\r\n\r\nMiami Beach donde las celebridades ya han enfrentado la prueba de traje confirma que, al menos desde la temprana salida piscina (la piscina), el bikini este año parece aún la tendencia dominante. Pruebas de verano en Europa. Si quieres aprender más sobre la palabra clave es: yate.\r\n\r\nLeo di Caprio, Kendall Jenner, Cara Delevingne y Michelle Rodriguez: entre Cannes y Mónaco vacaciones de las estrellas está apagado, mintiendo en el embarcadero para tomar el sol, los baños en la piscina o simplemente descansar a la espera de cócteles por la noche. O en la costa italiana, como en Taormina donde Rupert Everett, en ocasión del Festival de cine, se le concedió un almuerzo en compañía de Francesco Scianna. Y estamos sólo al principio...', 'es'),
(4, 1, '﻿Style Star en vacances', '﻿Étoiles sous le soleil', '﻿Manque de moins d''un mois dans le calendrier État officiellement commencé à l''été. Mais qui ne signifie pas que vous ne pouvez pas parler de vacances. Et si nous éprouvons un goût de soleil, avec le prochain pont du 2 juin, dans les États sont déjà l''été. Étranger en raison de la fête de Memorial Day qui ouvre officiellement ses portes à l''été, nous le coup d''envoi en bain de soleil au début.\r\n\r\nMiami Beach, où les célébrités ont déjà été confrontés à l''essai costume confirmant que, au moins depuis la piscine de sortie précoce (dans la piscine), le bikini cette année semble toujours la tendance dominante. Tests étés en Europe. Si vous voulez en savoir plus sur le mot clé est : yacht.\r\n\r\nLeo di Caprio, Kendall Jenner, Cara Delevingne et Michelle Rodriguez : entre Cannes et Monaco vacances pour les étoiles est éteint, couché sur la jetée pour bronzer, obtenir les toilettes à la piscine ou juste se prélasser en attente de cocktails en soirée. Ou sur les côtes italiennes, comme dans Taormina où Rupert Everett, à l''occasion du Festival, il a été accordé un déjeuner en compagnie de Francesco Scianna. Et nous sommes seulement au début...', 'fr'),
(5, 1, '﻿Звездный стиль на отдыхе', '﻿Звезды под солнцем', '﻿Отсутствует менее чем через месяц в календаре государство официально началась летом. Но это не значит, что вы не можете говорить о отдых. И если мы испытываем вкус солнца с следующий мост 2 июня в Штатах уже летом. За рубежом в связи с праздником День поминовения, официально открывает свои двери летом, мы стартует в начале загорать.\r\n\r\nМайами-Бич, где знаменитости уже столкнулись с костюм подтверждающий тест, что, по крайней мере от раннего выхода бассейн (в бассейне), бикини этот год представляется по-прежнему доминирующей тенденцией. Летних испытаний в Европе. Если вы хотите узнать больше о ключевое слово: яхта.\r\n\r\nЛео ди Каприо, Кендалл Дженнер, Кара Delevingne и Мишель Родригес: между Каннами и Монако отпуск для звезд выключен, лежа на причале загорать, получить туалеты в бассейне или просто отдыхая ожидания для вечерних коктейлей. Или на побережье Италии, как и Таормина где Руперт Эверетт, по случаю кинофестиваля, он был предоставлен ланч в компании Франческо другие. И мы находимся только в начале...', 'ru'),
(6, 2, 'I sandali da gladiatore', 'Per donne combattive e dal passo deciso', 'Si chiama Gladiator perché inevitabilmente riporta alla mente le calzature indossate nell''antica Roma, ma è a tutti gli effetti un best seller contemporaneo: i sandali con lacci, listini e fibbie, infatti, si riconfermano grande tendenza della stagione Primavera Estate 2015.\r\n\r\nIl tacco? Che sia altissimo o total flat non ha importanza, qui quel che conta è l''intreccio, che per le più audaci sale fino al ginocchio (vedi Casadei e Giuseppe Zanotti) mentre per le amanti dell''essenziale si ferma alla caviglia (come per Fendi e Isabel Marant).', 'it'),
(7, 2, '﻿The Gladiator sandals', '﻿To combat women and decided step', '﻿You call Gladiator because inevitably brings to mind the footwear worn in ancient Rome, but is in fact a contemporary best seller: sandals with laces, straps and Buckles, we reaffirm the great trend of the season spring summer 2015.\r\n\r\nThe heel? That is very high or total flat doesn''t matter, what matters here is the plot, which for the most daring climbs up to the knee (see Carlin and Giuseppe Zanotti) while for lovers of the essential ankle stops (like Fendi and Isabel Marant).', 'en'),
(8, 2, '﻿Las sandalias de Gladiador', '﻿A las mujeres combate y paso decidido', '﻿Se llama Gladiator porque inevitablemente trae a la mente el calzado usado en la antigua Roma, pero en realidad es un best seller contemporáneo: sandalias con cordones, correas y hebillas, reafirmamos la gran tendencia de la temporada primavera verano de 2015.\r\n\r\n¿El talón? Que es muy alta o total plana no importa, lo importante aquí es la trama, que para los más atrevidos sube hasta la rodilla (véase Carlin y Giuseppe Zanotti) mientras que para los amantes de las paradas de tobillo esencial (como Fendi y Isabel Marant).', 'es'),
(9, 2, '﻿Les sandales gladiateur', '﻿Femmes de combats et échelon a décidé', '﻿Vous appelez Gladiator car inévitablement nous rappelle les chaussures portées dans la Rome antique, mais est en fait un best-seller contemporain : sandales à lacets, bretelles et boucles, nous réaffirmons la grande tendance de la saison printemps été 2015.\r\n\r\nLe talon ? C''est très élevé ou total plat ne fait rien, ce qui ici est l''intrigue, ce qui, pour les plus audacieux, monte jusqu''au genou (voir Carlin et Giuseppe Zanotti) tandis que pour les amateurs des arrêts cheville essentielle (comme Fendi et Isabel Marant).', 'fr'),
(10, 2, '﻿Гладиатор сандалии', '﻿Для борьбы с женщин и решил шаг', '﻿Вы называете Гладиатор, потому что неизбежно наводит на мысль обувь, носить в древнем Риме, но на самом деле современный лучший продавец: сандалии с шнурки, ремни и пряжки, мы подтверждаем большое тренд сезона весна лето к 2015 году.\r\n\r\nПятки? Это очень высокий или Общая квартира не имеет значения, что вопросы здесь сюжет, который для самых смелых поднимается до колена (см. Карлин и Giuseppe Zanotti) в то время как для любителей основных лодыжки останавливается (как Fendi и Isabel Marant).', 'ru'),
(11, 3, 'Campus estivo: moda e abbigliamento sportivo per l’estate 2014', 'Sneakers, leggings in fibra tecnologica, giacche a vento', 'La città, o luogo di villeggiatura, si trasforma in un vero campus estivo: bisogna così attrezzarsi anche in gadget tecnologici per tenere il ritmo e segnare le pulsazioni, ascoltare la musica, e optare per tessuti tecnologici e performanti, volti a un comfort estremo anche sotto sforzo. Indispensabile: sacche o zaini di tendenza per riporre tutto il necessario.\r\n\r\nRun baby run. Legging multicolor, short in microfibra e bra sportivi, sono gli essenziali da portare con sé. Dal camouflage di Ultracor alla stampa water di The Upside o alla grafica astratta di Lucas Hugh: vi trasformerete in fiamme colorate che sfrecciano in città o sul lungo mare.\r\n\r\nTennis club. Le appassionate di racchetta e pallina, sicuramente possono trarre ispirazione dalla sfilata di Lacoste, dove i gonnellini plissettati prendono forma e colore in diverse varianti. A completare polo con colletti a contrasto, Ariat, e un paio di sneakers: non più total white ma colorate, come suggerisce la campionessa Serena Williams. In coordinato la visiera fluo di Onreal London.', 'it'),
(12, 3, '﻿Summer camps: fashion and sportswear for summer 2014', '﻿Sneakers, leggings, technological fibre Windbreakers', '﻿The city or resort town, turns into a real summer camp: so also must be prepared to keep the technological gadgets and mark the pulse rhythm, listen to music, and opt for technological and performance fabrics, designed to comfort even under stress. Indispensable: pockets or backpacks for storing everything you need.\r\n\r\nRun baby run. Multicolor leggings, Microfiber shorts and sports bra, are the essentials to take with you. By Ultracor printing camouflage water of The Upside or abstract graphics Lucas: transform you into Hugh colored flames darting into town or along the sea.\r\n\r\nTennis club. The ball-and-paddle enthusiasts, surely they can get inspiration by Lacoste fashion show, where the pleated skirts are formed and in different color variations. Complete with contrasting collar polo, Ariat, and a pair of sneakers: no more white colored, but as women''s champion Serena Williams. The matching visor fluo by Onreal London.', 'en'),
(13, 3, '﻿Campamentos de verano: moda y ropa deportiva para el verano 2014', '﻿Zapatillas de deporte, leggings, Cazadoras de fibra tecnológica', '﻿El pueblo ciudad o complejo, se convierte en un campamento de verano real: así también deben estar preparados para mantener los gadgets tecnológicos marcan el ritmo del pulso, escuchar música y optar por tecnológico y telas de rendimiento, diseñadas para la comodidad incluso bajo estrés. Indispensable: bolsillos o mochilas para guardar todo lo que necesitas.\r\n\r\nRun baby run. Leggins multicolores, microfibra sujetador de deportes y pantalones cortos, son los elementos esenciales para tomar con usted. Por Ultracor impresión de camuflaje de agua de la boca o Resumen gráficos Lucas: transformar a Hugh color llamas lanzando al pueblo o a orillas del mar.\r\n\r\nClub de tenis. Los entusiastas de la paleta y pelota, seguramente pueden conseguir inspiración por desfile de Lacoste, donde se forman las faldas plisadas y en variaciones de color diferentes. Con contraste cuello polo, Ariat y un par de zapatillas: no más blanco de color, pero como mujer campeona Serena Williams. La coincidencia del visera fluo por Onreal Londres.', 'es'),
(14, 3, '﻿Camps d''été : mode et sportswear pour l''été 2014', '﻿Chaussures de sport, caleçons, blousons fibre technologique', '﻿La ville de ville ou de la station, se transforme en un véritable camp : donc aussi doit être prêt à garder les gadgets technologiques et marquent le rythme du pouls, écouter de la musique et opter pour la technologie et des tissus de performance, conçus pour le confort même sous stress. Indispensable : poches ou sacs à dos pour ranger tout ce dont vous avez besoin.\r\n\r\nRun baby run. Jambières multicolores, microfibre soutien-gorge shorts et des sports, sont les éléments essentiels à prendre avec vous. Par Ultracor impression camouflage eau de The Upside ou graphiques Lucas et abstrait : transform dans Hugh couleur flammes dardant en ville ou au bord de la mer.\r\n\r\nClub de tennis. Les amateurs de boule-et-paddle, ils peuvent sûrement obtenir inspiration par défilé Lacoste, où se forment les jupes plissées et des variations de couleur différente. Complet avec contrastantes col polo, regroupait et une paire d''espadrilles : blanc couleur pas plus, mais comme féminines championne Serena Williams. La correspondance visière fluo de Londres Onreal.', 'fr'),
(15, 3, '﻿Летние лагеря: Мода и спортивная одежда для лета 2014', '﻿Кроссовки, леггинсы, технологическое волокно ветровки', '﻿Город или курорт город превращается в настоящий летний лагерь: так также должны быть готовы держать технологических гаджетов и Марк пульс ритм, слушать музыку и выбрать для технологических и производительности ткани, предназначенные для комфорта даже под стресс. Необходимым: карманы или рюкзаки для хранения всего, что вам нужно.\r\n\r\nЗапустите запустить ребенка. Многоцветная леггинсы, шорты и спортивный бюстгальтер из микрофибры, являются основы принять с вами. Ultracor печать камуфляж воды вверх или абстрактная графика Lucas: преобразование, вы в Хью цветные пламя бросаясь в город или вдоль моря.\r\n\r\nТеннисный клуб. Мяч и весло энтузиастов, конечно они могут получить вдохновение Lacoste показ мод, где формируются плиссированные юбки и в различных цветовых вариациях. Комплекте с контрастным воротником-поло, АРИАТ и пару кроссовки: не больше белого цвета, но как женщин чемпион Серена Уильямс. Соответствия fluo козырек Onreal в Лондоне.', 'ru');

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
(26, 6, 'Borsetta Pelle Rossa', 'Piccola borsetta in pelle. Disponibile in vari colori. Perfetta per sostituire, una volta tanto, le borse troppo grandi e pesanti.', 'it'),
(27, 6, '﻿Red Leather Handbag', '﻿Small leather handbag. Available in various colors. Perfect to replace, for once, the bags too large and heavy.', 'en'),
(28, 6, '﻿Bolso de cuero rojo', '﻿Bolso de cuero pequeño. Disponible en varios colores. Perfecto para reemplazar, por una vez, los bolsos demasiado grandes y pesados.', 'es'),
(29, 6, '﻿Sac à main en cuir rouge', '﻿Sac à main de petits articles en cuir. Disponible en différentes couleurs. Parfait pour remplacer, pour une fois, les sacs trop volumineux et lourds.', 'fr'),
(30, 6, 'Красная кожаная сумка', '﻿Небольшие кожаные сумки. Доступны в различных цветах. Идеально подходит для замены, на этот раз, сумки, слишком большие и тяжелые.', 'ru');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idNews`, `cover`, `createdOn`, `updatedOn`, `views`, `suspended`) VALUES
(1, 'slide1.jpg', '2015-08-03', '2015-08-03 14:13:18', 1, 0),
(2, 'slide2.jpg', '2015-08-03', '2015-08-03 14:15:28', 0, 0),
(3, 'slide3.jpg', '2014-08-03', '2015-08-03 14:23:59', 8, 0);

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
(1, 21, '0.png', 'prada', 120.4, '2015-08-02', '2015-08-03 11:54:29', 7, 0),
(2, 21, '1.png', 'gucci', 205.99, '2015-08-02', '2015-08-03 08:30:28', 2, 0),
(3, 21, '2.png', 'armani', 89.99, '2015-08-02', '2015-08-03 11:53:21', 2, 0),
(4, 21, '3.png', 'armani', 99.99, '2015-08-02', '2015-08-02 18:28:30', 0, 0),
(5, 21, '4.png', 'dolce & gabbana', 359.99, '2015-08-02', '2015-08-02 18:28:39', 0, 0),
(6, 21, '5.png', 'louis vuitton', 59.89, '2015-08-02', '2015-08-03 14:39:27', 4, 0);

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
