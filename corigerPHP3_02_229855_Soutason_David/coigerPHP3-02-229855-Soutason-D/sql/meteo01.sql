-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 07 oct. 2022 à 08:34
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bulletin_meteo`
--

-- --------------------------------------------------------

--
-- Structure de la table `meteo01`
--

DROP TABLE IF EXISTS `meteo01`;
CREATE TABLE IF NOT EXISTS `meteo01` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dates` date NOT NULL,
  `jours` int(31) NOT NULL,
  `mois` int(12) NOT NULL,
  `annees` int(10) NOT NULL,
  `villes` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `periodes` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `resumes` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_resumes` int(25) NOT NULL,
  `max_temps` int(25) NOT NULL,
  `min_temps` int(25) NOT NULL,
  `commentaires` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
