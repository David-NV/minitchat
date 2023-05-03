-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 04 déc. 2022 à 11:33
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Admin` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `Pseudo`, `Password`, `Status`, `Admin`) VALUES
(1, 'David', '@Dm1n123', 'OFFLINE', 1),
(2, 'papy NV', 'Bibi3456', 'OFFLINE', 0),
(3, 'logan', 'loglog11', 'OFFLINE', 0),
(4, 'Nico', 'Nico4567', 'OFFLINE', 0);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Messages` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `heure` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `Pseudo`, `Messages`, `heure`) VALUES
(1, 'david', 'bonjour', '2022-11-29 21:19:45'),
(2, 'nico', 'hello', '2022-11-29 21:20:31'),
(3, 'logan', 'bonjour', '2022-12-03 16:40:57'),
(4, 'logan', 'nouvel essai', '2022-12-03 16:45:23'),
(5, 'logan', 'encore un autre mesage', '2022-12-03 16:47:22'),
(6, 'papy NV', 'bonjour', '2022-12-04 12:09:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
