-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 13 août 2020 à 10:00
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `voituresmaximerogues`
--

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(150) NOT NULL,
  `modele` varchar(150) NOT NULL,
  `energie` varchar(150) NOT NULL,
  `boiteAuto` tinyint(1) NOT NULL,
  `image` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `marque`, `modele`, `energie`, `boiteAuto`, `image`) VALUES
(1, 'Renault', 'Scenic ', 'Diesel', 1, NULL),
(2, 'Renault', 'Twingo', 'Essence', 0, ''),
(20, 'Renault', 'Twingo', 'Essence', 1, '5f3507b0045a2.jpg'),
(21, 'Renault', 'Twingo', 'Diesel', 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
