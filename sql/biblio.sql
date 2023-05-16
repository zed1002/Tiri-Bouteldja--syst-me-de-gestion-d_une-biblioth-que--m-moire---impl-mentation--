-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 05, 2020 at 10:41 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonne`
--

DROP TABLE IF EXISTS `abonne`;
CREATE TABLE IF NOT EXISTS `abonne` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `prenom` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `tel` bigint(20) NOT NULL,
  `email` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nbremp` int(1) NOT NULL DEFAULT 0,
  `points` int(3) NOT NULL DEFAULT 100,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5555555556 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `abonne`
--

INSERT INTO `abonne` (`id`, `nom`, `prenom`, `tel`, `email`, `nbremp`, `points`) VALUES
(9, 'tiri', 'chahrazad', 42563568, 'tirizahrachahra@gmail.com', 0, 0),
(5, 'fer', 'iel', 42525365, 'kalibilli6969@gmail.com', 0, 100),
(3, 'oceane', 'oak', 5264254265, 'oceaneoak@gmail.com', 3, 100),
(1, 'Bouteldja', 'Feriel', 44444444444, 'bouteldjaferiel@gmail.com', 1, 100),
(2, 'tiri', 'zahra', 614824234, 'tirizahra@gmail.com', 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `bibliothecaire`
--

DROP TABLE IF EXISTS `bibliothecaire`;
CREATE TABLE IF NOT EXISTS `bibliothecaire` (
  `username` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `bibliothecaire`
--

INSERT INTO `bibliothecaire` (`username`, `pass`) VALUES
('user', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `msg`, `date`) VALUES
(14, 'adnan', 'hiiiiii', '2018-04-03 11:20:38'),
(15, 'atiqa', 'helow', '2018-04-03 11:20:47'),
(16, 'atiqa', 'whats up', '2018-04-03 11:20:56'),
(0, 'tiri', 'zù', '2020-08-11 22:13:38'),
(0, 'tiri', 'gy', '2020-08-11 22:14:00'),
(0, 'tiri', 'guyes', '2020-08-11 22:14:06'),
(0, 'tiri', ';)', '2020-08-11 22:14:13'),
(0, 'tiri', ':', '2020-08-11 22:14:19'),
(0, 'tiri', ':)', '2020-08-11 22:14:24'),
(0, 'tiri', 'whats happend?', '2020-08-11 22:14:35'),
(0, 'feriel', 'hey', '2020-08-11 22:17:29'),
(0, 'feriel', 'hey', '2020-08-11 22:17:37'),
(0, 'feriel', 'i am ', '2020-08-11 22:18:07'),
(0, 'tiri', 'feriel', '2020-08-11 22:19:47'),
(0, 'rima', 'zahra', '2020-08-11 22:36:15'),
(0, 'tiri', 'hey', '2020-08-11 22:46:30'),
(0, 'feriel', 'guys', '2020-08-11 22:47:03'),
(0, 'tiri', 'h', '2020-08-11 22:59:02'),
(0, 'tiri', 'tiri', '2020-08-11 23:15:32'),
(0, 'tiri', 'h', '2020-08-11 23:24:20'),
(0, 'tiri', 'ghj', '2020-08-11 23:53:33'),
(0, 'tiri', 'zahra', '2020-08-12 00:17:16'),
(0, 'feriel', 'hey', '2020-08-12 00:18:20'),
(0, 'tiri', 'slm', '2020-08-18 20:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `dp` date NOT NULL,
  `dr` date NOT NULL,
  `answer` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `genre` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `idu` bigint(12) NOT NULL,
  `ref_expe` bigint(20) NOT NULL,
  `ref_fk` bigint(12) NOT NULL,
  `id_pr` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_pr`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `emprunt`
--

INSERT INTO `emprunt` (`dp`, `dr`, `answer`, `genre`, `idu`, `ref_expe`, `ref_fk`, `id_pr`) VALUES
('2020-09-05', '2020-09-20', 'good', 'livre', 2, 778, 285, 70),
('2020-09-05', '2020-09-20', 'good', 'livre', 1, 1, 1, 69),
('2020-09-05', '2020-09-20', 'good', 'livre', 3, 4469, 285, 66),
('2020-09-05', '2020-09-20', 'good', 'memoire', 3, 474, 224, 67),
('2020-09-05', '2020-09-20', 'good', 'revue', 3, 15, 111, 68);

-- --------------------------------------------------------

--
-- Table structure for table `exemplaire`
--

DROP TABLE IF EXISTS `exemplaire`;
CREATE TABLE IF NOT EXISTS `exemplaire` (
  `ref_exp` bigint(12) NOT NULL,
  `titre` varchar(70) COLLATE utf8_general_mysql500_ci NOT NULL,
  `auteur` varchar(70) COLLATE utf8_general_mysql500_ci NOT NULL,
  `edi` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `emp` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `annee` int(5) NOT NULL,
  `ref_fk` int(12) NOT NULL,
  `etat` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'available',
  PRIMARY KEY (`ref_exp`),
  KEY `ref_fk` (`ref_fk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `exemplaire`
--

INSERT INTO `exemplaire` (`ref_exp`, `titre`, `auteur`, `edi`, `emp`, `annee`, `ref_fk`, `etat`) VALUES
(1, 'A Whirlwind Tour of Python', 'OReilly Media,', 'e2', 'a2', 2017, 1, 'borrowed'),
(5, 'A Whirlwind Tour of Python', 'OReilly Media, Inc.', 'e1', 'a2', 2017, 1, 'available'),
(4469, '	Python Data Science Handbook', ' OReilly Media, Inc.', 'Creative Commons Attribution-NonCommercial-NoDerivs 3.0 United States', 'a1', 2020, 285, 'borrowed'),
(778, '	Python Data Science Handbook', ' OReilly Media, Inc.', 'Creative Commons Attribution-NonCommercial-NoDerivs 3.0 United States', 'a1', 2020, 285, 'borrowed');

-- --------------------------------------------------------

--
-- Table structure for table `exemplairej`
--

DROP TABLE IF EXISTS `exemplairej`;
CREATE TABLE IF NOT EXISTS `exemplairej` (
  `refr_exp` bigint(12) NOT NULL,
  `titre` varchar(70) COLLATE utf8_general_mysql500_ci NOT NULL,
  `annee` varchar(4) COLLATE utf8_general_mysql500_ci NOT NULL,
  `emp` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `ref_fk` bigint(12) NOT NULL,
  `etat` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'available',
  PRIMARY KEY (`refr_exp`),
  KEY `ref_fk` (`ref_fk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `exemplairej`
--

INSERT INTO `exemplairej` (`refr_exp`, `titre`, `annee`, `emp`, `ref_fk`, `etat`) VALUES
(15, 'Computer Science Review 2', '2020', 'e6', 111, 'borrowed'),
(4, 'MIT Technology Review', '2020', '5', 2, 'available'),
(11, 'Computer Science journal', '2020', 'e55', 111, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `exemplaireth`
--

DROP TABLE IF EXISTS `exemplaireth`;
CREATE TABLE IF NOT EXISTS `exemplaireth` (
  `refm_exp` int(12) NOT NULL,
  `titre` varchar(70) COLLATE utf8_general_mysql500_ci NOT NULL,
  `specialite` varchar(4) COLLATE utf8_general_mysql500_ci NOT NULL,
  `realiser_par` varchar(80) COLLATE utf8_general_mysql500_ci NOT NULL,
  `annee` int(4) NOT NULL,
  `emp` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `ref_fk` int(12) NOT NULL,
  `etat` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'available',
  PRIMARY KEY (`refm_exp`),
  KEY `ref_fk` (`ref_fk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `exemplaireth`
--

INSERT INTO `exemplaireth` (`refm_exp`, `titre`, `specialite`, `realiser_par`, `annee`, `emp`, `ref_fk`, `etat`) VALUES
(10, 'Identification of Bio markers and non-coding RNAs by Computational Int', 'GL', ' Anouar Boucheham', 2016, 'klk', 110, 'available'),
(7, 'Management of Quality of Service in Multimedia Applications based on u', 'GL', 'BETTOU Farida', 2017, '1', 34, 'available'),
(130, 'Identification of Bio markers and non-coding RNAs by Computational ', 'GL', ' Anouar Boucheham', 2016, 'c8', 110, 'available'),
(474, 'A New Formalism for Representation and Reasoning on a Hybrid Ontology', 'TI', 'Souad Bouaicha', 2019, 'A5', 224, 'borrowed');

-- --------------------------------------------------------

--
-- Table structure for table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `titre` varchar(70) COLLATE utf8_general_mysql500_ci NOT NULL,
  `auteur` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `edi` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `ref` bigint(20) NOT NULL,
  `annee` int(4) NOT NULL,
  `nbrexp` int(100) NOT NULL,
  `emp` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `prix` float NOT NULL,
  `img` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `dis` text COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `livre`
--

INSERT INTO `livre` (`titre`, `auteur`, `edi`, `ref`, `annee`, `nbrexp`, `emp`, `prix`, `img`, `dis`) VALUES
('A Whirlwind Tour of Python', 'OReilly Media, Inc.', 'e1', 1, 2017, 1, 'a2', 2000, 'python.jpg', 'A Whirlwind Tour of Python is a fast-paced introduction to essential features of the Python language, aimed at researchers and developers who are already familiar with programming in another language.'),
('	Python Data Science Handbook', ' OReilly Media, Inc.', 'Creative Commons Attribution-NonCommercial-NoDerivs 3.0 United States', 285, 2020, 0, 'a1', 2000, 'b2.png', 'The book introduces the core libraries essential for working with data in Python: particularly IPython, NumPy, Pandas, Matplotlib, Scikit-Learn, and related packages. Familiarity with Python as a language is assumed.'),
('	\r\nDon\'t Panic: Mobile Developer\'s Guide to The Galaxy, 17th Edition', 'Open-Xchange (OX)', ' Creative Commons Attribution 2.5 Generic', 420, 2017, 0, 'A2', 1000, 'b4.jpg', 'More than 20 writers from the mobile community share their know-how in dealing with topics such as accessibility in mobile apps, UX design, mobile analytics, prototyping, cross-platform development, native development, mobile web and app marketing.'),
('	\r\nLinux Appliance Design: A Hands-On Guide to Building Linux Applianc', 'No Starch Press', '2017', 562, 2017, 0, 'a3', 1700, 'b5.jpg', 'This book is for Linux programmers who want to build a custom Linux Appliance and support multiple user interfaces. Topics include appliance architecture, security, and how to build simple, yet responsive user interfaces.');

-- --------------------------------------------------------

--
-- Table structure for table `memoire`
--

DROP TABLE IF EXISTS `memoire`;
CREATE TABLE IF NOT EXISTS `memoire` (
  `ref_m` bigint(12) NOT NULL,
  `titre_m` varchar(1000) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nbrexp_m` int(100) NOT NULL,
  `specialite` varchar(3) COLLATE utf8_general_mysql500_ci NOT NULL,
  `type` varchar(1000) COLLATE utf8_general_mysql500_ci NOT NULL,
  `realiser_par` varchar(80) COLLATE utf8_general_mysql500_ci NOT NULL,
  `annee_m` int(4) NOT NULL,
  `emp_m` text COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`ref_m`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `memoire`
--

INSERT INTO `memoire` (`ref_m`, `titre_m`, `nbrexp_m`, `specialite`, `type`, `realiser_par`, `annee_m`, `emp_m`) VALUES
(110, 'Identification of Bio markers and non-coding RNAs by Computational Int', 2, 'GL', 'Doc', ' Anouar Boucheham', 2016, 'klk'),
(224, 'A New Formalism for Representation and Reasoning on a Hybrid Ontology', 0, 'TI', 'LMD', 'Souad Bouaicha', 2019, 'A5'),
(34, 'Management of Quality of Service in Multimedia Applications based on u', 1, 'GL', 'LMD', 'BETTOU Farida', 2017, '1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `Titre` varchar(200) NOT NULL,
  `dis` text NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  `idarticle` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idarticle`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Titre`, `dis`, `img`, `url`, `idarticle`) VALUES
('Technology', 'the production of the National Office for University Publications (OPU) as a free trial', 'ba.jpg', 'http://www.bibliouniv.cerist.dz/index.php?p=1&id=307', 1),
('event', '6th National Library Seminar', 'bi.png', 'http://www.bibliouniv.cerist.dz/index.php?p=1&id=291', 2),
('Event', 'International Book Fair of Algiers (SILA) 19th edition', 'edu.jpg', 'http://www.bibliouniv.cerist.dz/index.php?p=1&id=195', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reserver`
--

DROP TABLE IF EXISTS `reserver`;
CREATE TABLE IF NOT EXISTS `reserver` (
  `id` bigint(12) NOT NULL,
  `ref` bigint(12) NOT NULL,
  `drs` date NOT NULL,
  `genre` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_general_mysql500_ci NOT NULL,
  `idreservation` int(11) NOT NULL AUTO_INCREMENT,
  `not_status` int(1) NOT NULL DEFAULT 0,
  `emailsentdate` date DEFAULT NULL,
  PRIMARY KEY (`idreservation`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `reserver`
--

INSERT INTO `reserver` (`id`, `ref`, `drs`, `genre`, `email`, `idreservation`, `not_status`, `emailsentdate`) VALUES
(1, 285, '2020-09-05', 'livre', 'bouteldjaferiel@gmail.com', 55, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `retourner`
--

DROP TABLE IF EXISTS `retourner`;
CREATE TABLE IF NOT EXISTS `retourner` (
  `id` bigint(12) NOT NULL,
  `ref` bigint(12) NOT NULL,
  `dr` date NOT NULL,
  `etat` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `genre` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `id_rt` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_rt`)
) ENGINE=MyISAM AUTO_INCREMENT=143 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `retourner`
--

INSERT INTO `retourner` (`id`, `ref`, `dr`, `etat`, `genre`, `id_rt`) VALUES
(3, 7, '2020-09-05', 'good', 'memoire', 142),
(3, 14, '2020-09-05', 'good', 'livre', 141),
(1, 10, '2020-09-05', 'good', 'memoire', 140),
(3, 1, '2020-09-05', 'good', 'revue', 139),
(1, 1, '2020-09-04', 'good', 'livre', 138),
(2, 11, '2020-09-04', 'medium', 'revue', 137),
(1, 1, '2020-09-04', 'good', 'memoire', 136),
(2, 1, '2020-09-04', 'good', 'livre', 135),
(2, 1, '2020-09-03', 'good', 'livre', 134),
(2, 1, '2020-09-03', 'good', 'livre', 133),
(2, 1, '2020-09-03', 'good', 'livre', 132),
(2, 1, '2020-09-03', 'good', 'livre', 131),
(2, 1, '2020-09-03', 'good', 'livre', 130),
(2, 1, '2020-09-02', 'good', 'livre', 129),
(1, 1, '2020-09-02', 'good', 'livre', 128),
(1, 1, '2020-09-02', 'good', 'livre', 127),
(1, 1, '2020-09-02', 'good', 'livre', 126),
(1, 1, '2020-09-02', 'good', 'livre', 125),
(2, 1, '2020-09-02', 'good', 'livre', 124),
(1, 1, '2020-09-02', 'good', 'livre', 123),
(1, 1, '2020-09-02', 'good', 'livre', 122),
(1, 1, '2020-09-02', 'good', 'livre', 121),
(1, 1, '2020-09-02', 'good', 'livre', 120),
(1, 1, '2020-09-02', 'good', 'livre', 119),
(1, 1, '2020-09-02', 'good', 'livre', 118),
(1, 1, '2020-09-02', 'good', 'livre', 117),
(1, 1, '2020-09-02', 'good', 'livre', 116),
(1, 1, '2020-09-02', 'good', 'livre', 115),
(1, 1, '2020-09-02', 'good', 'livre', 114),
(1, 1, '2020-09-02', 'good', 'livre', 113),
(1, 1, '2020-09-02', 'good', 'livre', 112),
(1, 1, '2020-09-02', 'good', 'livre', 111),
(1, 1, '2020-09-02', 'good', 'livre', 110),
(1, 1, '2020-08-31', 'good', 'livre', 109),
(1, 1, '2020-08-31', 'good', 'memoire', 108),
(1, 1, '2020-08-31', 'good', 'livre', 107),
(1, 1, '2020-08-31', 'good', 'livre', 106),
(1, 1, '2020-08-28', 'good', 'livre', 105),
(1, 1, '2020-08-28', 'good', 'livre', 104),
(1, 1, '2020-08-28', 'good', 'livre', 103),
(1, 1, '2020-08-28', 'good', 'livre', 102),
(1, 1, '2020-08-28', 'good', 'memoire', 101),
(1, 1, '2020-08-28', 'good', 'livre', 100),
(1, 1, '2020-08-28', 'good', 'livre', 99),
(1, 1, '2020-08-28', 'good', 'memoire', 98),
(1, 1, '2020-08-28', 'good', 'revue', 96),
(1, 1, '2020-08-28', 'good', 'livre', 95),
(1, 1, '2020-08-27', 'good', 'livre', 94),
(1, 1, '2020-08-27', 'good', 'revue', 93),
(1, 1, '2020-08-27', 'good', 'memoire', 92),
(1, 1, '2020-08-27', 'good', 'memoire', 91),
(1, 1, '2020-08-27', 'good', 'livre', 90),
(1, 1, '2020-08-27', 'good', 'livre', 89),
(1, 1, '2020-08-27', 'good', 'livre', 88),
(1, 1, '2020-08-27', 'good', 'livre', 87),
(1, 1, '2020-08-24', 'good', 'memoire', 86),
(1, 1, '2020-08-24', 'good', 'memoire', 85),
(1, 1, '2020-08-24', 'good', 'livre', 84),
(1, 1, '2020-08-24', 'good', 'memoire', 83),
(1, 1, '2020-08-24', 'good', 'memoire', 82),
(1, 1, '2020-08-24', 'good', 'memoire', 81),
(1, 1, '2020-08-24', 'good', 'livre', 80),
(1, 1, '2020-08-28', 'good', 'memoire', 97),
(2, 1, '2020-08-24', 'good', 'memoire', 78),
(3, 1, '2020-08-24', 'good', 'revue', 79),
(1, 1, '2020-08-24', 'good', 'livre', 77);

-- --------------------------------------------------------

--
-- Table structure for table `revue`
--

DROP TABLE IF EXISTS `revue`;
CREATE TABLE IF NOT EXISTS `revue` (
  `ref_r` int(12) NOT NULL,
  `titre_r` varchar(70) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nbrexp_r` int(100) NOT NULL,
  `annee_r` int(4) NOT NULL,
  `emp` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `prix` float NOT NULL,
  `img` text COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`ref_r`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `revue`
--

INSERT INTO `revue` (`ref_r`, `titre_r`, `nbrexp_r`, `annee_r`, `emp`, `prix`, `img`) VALUES
(111, 'Computer Science journal', 1, 2020, 'e55', 2100, 'b1.jpg\r\n'),
(2, 'MIT Technology Review', 1, 2020, '5', 2000, 'b2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user` int(12) NOT NULL,
  `password` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `password`, `email`, `status`) VALUES
(2, '', 'tirizahra@gmail.com', 0),
(3, '', 'oceaneoak@gmail.com', 0),
(1, '', 'bouteldjaferiel@gmail.com', 0),
(5, '', 'kalibilli6969@gmail.com', 0),
(9, '', 'tirizahrachahra@gmail.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
