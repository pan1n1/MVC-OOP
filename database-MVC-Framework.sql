-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 25 mrt 2022 om 08:25
-- Serverversie: 5.7.31
-- PHP-versie: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcframework`
--
CREATE DATABASE IF NOT EXISTS `mvc-oop-toets` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mvc-oop-toets`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `country`
--

DROP TABLE IF EXISTS `RichestPeople`;
CREATE TABLE IF NOT EXISTS `RichestPeople` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `nettoWorth` varchar(200) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `company` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `country`
--

INSERT INTO `RichestPeople` (`id`, `name`, `nettoWorth`, `age`, `company`) VALUES
(1, 'Elonmusk', '261000000000', '50', 'Tesla'),
(2, 'Jeff Bezos', '183000000000', '58', 'Amazon'),
(3, 'Bernard Arnault', '142000000000', '73', 'Louis Vuitton Moet Hennessy'),
(4, 'Bill Gates', '130000000000', '66', 'Microsoft'),
(5, 'Warren Buffet', '126000000000', '91' , 'Berkshire Hathaway');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fruit`
--

DROP TABLE IF EXISTS `fruit`;
CREATE TABLE IF NOT EXISTS `fruit` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `color`, `price`) VALUES
(3, 'Paprikaatje', 'roodbruin', 2.45),
(4, 'Citroen', 'geel', 1.67),
(5, 'Aardbei', 'rood', 2.56),
(6, 'Peer', 'groen', 0.88);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `password`) VALUES
(1, 'rra', 'rra@mboutrecht.nl', 'Geheim!'),
(2, 'hsok', 'hsok@mboutrecht.nl', 'Geheim!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

use `mvc-oop-toets`;

select * from RichestPeople;
