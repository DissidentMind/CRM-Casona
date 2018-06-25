-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2018 at 07:13 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wc_russia2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `contest_wc`
--

DROP TABLE IF EXISTS `contest_wc`;
CREATE TABLE IF NOT EXISTS `contest_wc` (
  `n` int(2) NOT NULL AUTO_INCREMENT,
  `name_player` varchar(20) NOT NULL,
  `points_player` int(2) NOT NULL DEFAULT '0',
  `goals_player` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`n`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest_wc`
--

INSERT INTO `contest_wc` (`n`, `name_player`, `points_player`, `goals_player`) VALUES
(1, 'Estefanie', 0, 0),
(2, 'Hernan', 0, 0),
(3, 'Jorge', 0, 0),
(5, 'Carlos', 0, 0),
(6, 'Cesar', 0, 0),
(7, 'Jessie', 0, 0),
(8, 'Angie', 0, 0),
(9, 'Fabio', 0, 0),
(10, 'Vero', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `matches_wc`
--

DROP TABLE IF EXISTS `matches_wc`;
CREATE TABLE IF NOT EXISTS `matches_wc` (
  `n` int(2) NOT NULL AUTO_INCREMENT,
  `team_l` varchar(4) NOT NULL,
  `score_l` int(2) DEFAULT NULL,
  `score_v` int(2) DEFAULT NULL,
  `team_v` varchar(4) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches_wc`
--

INSERT INTO `matches_wc` (`n`, `team_l`, `score_l`, `score_v`, `team_v`) VALUES
(1, 'rus', 5, 0, 'ksa'),
(2, 'egy', 0, 1, 'uru'),
(3, 'mar', 0, 1, 'irn'),
(4, 'por', 3, 3, 'esp'),
(5, 'fra', 2, 1, 'aus'),
(6, 'arg', 1, 1, 'isl'),
(7, 'per', 0, 1, 'den'),
(8, 'cro', 2, 0, 'nga'),
(9, 'crc', 0, 1, 'srb'),
(10, 'ger', 0, 1, 'mex'),
(11, 'bra', 1, 1, 'sui'),
(12, 'swe', 1, 0, 'kor'),
(13, 'bel', 3, 0, 'pan'),
(14, 'tun', 1, 2, 'eng'),
(15, 'col', 1, 2, 'jpn'),
(16, 'pol', 1, 2, 'sen'),
(17, 'rus', 3, 1, 'egy'),
(18, 'por', NULL, NULL, 'mar'),
(19, 'uru', NULL, NULL, 'ksa'),
(20, 'irn', NULL, NULL, 'esp'),
(21, 'den', NULL, NULL, 'aus'),
(22, 'fra', NULL, NULL, 'per'),
(23, 'arg', NULL, NULL, 'cro'),
(24, 'bra', NULL, NULL, 'crc'),
(25, 'nga', NULL, NULL, 'isl'),
(26, 'srb', NULL, NULL, 'sui'),
(27, 'bel', NULL, NULL, 'tun'),
(28, 'kor', NULL, NULL, 'mex'),
(29, 'ger', NULL, NULL, 'swe'),
(30, 'eng', NULL, NULL, 'pan'),
(31, 'jpn', NULL, NULL, 'sen'),
(32, 'pol', NULL, NULL, 'col'),
(33, 'uru', NULL, NULL, 'rus'),
(34, 'ksa', NULL, NULL, 'egy'),
(35, 'esp', NULL, NULL, 'mar'),
(36, 'irn', NULL, NULL, 'por'),
(37, 'aus', NULL, NULL, 'per'),
(38, 'den', NULL, NULL, 'fra'),
(39, 'nga', NULL, NULL, 'arg'),
(40, 'isl', NULL, NULL, 'cro'),
(41, 'kor', NULL, NULL, 'ger'),
(42, 'mex', NULL, NULL, 'swe'),
(43, 'srb', NULL, NULL, 'bra'),
(44, 'sui', NULL, NULL, 'crc'),
(45, 'jpn', NULL, NULL, 'pol'),
(46, 'sen', NULL, NULL, 'col'),
(47, 'pan', NULL, NULL, 'tun'),
(48, 'eng', NULL, NULL, 'bel');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_wc`
--

DROP TABLE IF EXISTS `schedule_wc`;
CREATE TABLE IF NOT EXISTS `schedule_wc` (
  `match_day` date DEFAULT NULL,
  `team_l` int(2) DEFAULT NULL,
  `team_v` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `selections_wc`
--

DROP TABLE IF EXISTS `selections_wc`;
CREATE TABLE IF NOT EXISTS `selections_wc` (
  `n` int(2) NOT NULL,
  `match_n` int(2) NOT NULL,
  `score_l` int(2) NOT NULL,
  `score_v` int(2) NOT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT '0',
  KEY `match_n` (`match_n`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selections_wc`
--

INSERT INTO `selections_wc` (`n`, `match_n`, `score_l`, `score_v`, `correct`) VALUES
(1, 1, 2, 0, 1),
(1, 2, 1, 2, 1),
(1, 3, 1, 1, 0),
(1, 4, 1, 2, 0),
(1, 5, 3, 0, 1),
(1, 6, 2, 0, 0),
(1, 7, 0, 1, 0),
(1, 8, 2, 1, 0),
(1, 9, 1, 1, 0),
(1, 10, 3, 1, 0),
(1, 11, 2, 0, 0),
(1, 12, 0, 1, 0),
(1, 13, 2, 0, 0),
(1, 13, 0, 3, 0),
(1, 14, 1, 0, 0),
(1, 15, 0, 0, 0),
(1, 16, 1, 1, 0),
(1, 17, 2, 0, 0),
(1, 18, 2, 0, 0),
(1, 19, 0, 2, 0),
(1, 20, 1, 0, 0),
(1, 21, 2, 0, 0),
(1, 22, 1, 0, 0),
(1, 23, 2, 1, 0),
(1, 24, 0, 0, 0),
(1, 25, 0, 1, 0),
(1, 26, 2, 0, 0),
(1, 27, 1, 2, 0),
(1, 28, 2, 0, 0),
(1, 29, 3, 0, 0),
(1, 30, 2, 2, 0),
(1, 31, 2, 1, 0),
(1, 32, 0, 1, 0),
(1, 33, 0, 2, 0),
(1, 34, 3, 1, 0),
(1, 35, 0, 2, 0),
(1, 36, 0, 1, 0),
(1, 37, 0, 2, 0),
(1, 38, 1, 3, 0),
(1, 39, 1, 2, 0),
(1, 40, 1, 2, 0),
(1, 41, 2, 1, 0),
(1, 42, 1, 2, 0),
(1, 43, 1, 0, 0),
(1, 44, 1, 2, 0),
(1, 45, 0, 2, 0),
(1, 46, 0, 1, 0),
(1, 47, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teams_wc`
--

DROP TABLE IF EXISTS `teams_wc`;
CREATE TABLE IF NOT EXISTS `teams_wc` (
  `n` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(4) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
