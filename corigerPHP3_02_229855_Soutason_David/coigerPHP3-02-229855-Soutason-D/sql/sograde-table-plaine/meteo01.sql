-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 07 oct. 2022 à 08:38
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `meteo01`
--

INSERT INTO `meteo01` (`id`, `dates`, `jours`, `mois`, `annees`, `villes`, `periodes`, `resumes`, `id_resumes`, `max_temps`, `min_temps`, `commentaires`) VALUES
(1, '2100-12-05', 5, 12, 2100, 'Paris', 'matin', 'ensoleillÃ©', 3, 8, 5, 'Temps ensoleillÃ© mais frais'),
(2, '2100-12-05', 5, 12, 2100, 'Paris', 'aprÃ¨s-midi', 'pluvieux', 1, 11, 9, 'Une pluie fine et attendue'),
(3, '2100-12-05', 5, 12, 2100, 'Paris', 'nuit', 'nuageux', 4, 11, 9, 'Temps couverts'),
(4, '2100-12-06', 6, 12, 2100, 'Paris', 'matin', 'brumeux', 1, 13, 12, 'Temps brumeux'),
(5, '2100-12-06', 6, 12, 2100, 'Paris', 'aprÃ¨s-midi', 'ensoleillÃ©', 1, 15, 14, 'Temps ensoleillÃ©'),
(6, '2100-12-06', 6, 12, 2100, 'Paris', 'nuit', 'nuageux', 4, 11, 9, 'Temps nuageux'),
(7, '2100-12-07', 7, 12, 2100, 'Paris', 'matin', 'brumeux', 1, 13, 12, 'Temps brumeux'),
(8, '2100-12-07', 7, 12, 2100, 'Paris', 'aprÃ¨s-midi', 'ensoleillÃ©', 2, 15, 14, 'Temps ensoleillÃ©'),
(9, '2100-12-07', 7, 12, 2100, 'Paris', 'nuit', 'nuageux', 4, 11, 9, 'Temps nuageux');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
