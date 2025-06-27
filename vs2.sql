-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 26 juin 2025 à 20:15
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vs2`
--

-- --------------------------------------------------------

--
-- Structure de la table `fiches`
--

DROP TABLE IF EXISTS `fiches`;
CREATE TABLE IF NOT EXISTS `fiches` (
  `nom` varchar(64) NOT NULL,
  `surnoms` varchar(64) NOT NULL,
  `style` varchar(535) NOT NULL,
  `strategie` varchar(535) NOT NULL,
  `cible` varchar(535) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `loup_garou2`
--

DROP TABLE IF EXISTS `loup_garou2`;
CREATE TABLE IF NOT EXISTS `loup_garou2` (
  `id_personne` int NOT NULL,
  `victoire` int NOT NULL,
  `defaite` int NOT NULL,
  `defaite_eclair` int NOT NULL,
  KEY `fk_id_personne` (`id_personne`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `loup_garou2`
--

INSERT INTO `loup_garou2` (`id_personne`, `victoire`, `defaite`, `defaite_eclair`) VALUES
(11, 8, 0, 0),
(5, 0, 0, 0),
(7, 2, 0, 0),
(4, 0, 0, 0),
(3, 0, 0, 0),
(2, 0, 0, 0),
(8, 0, 0, 0),
(10, 0, 0, 0),
(9, 0, 0, 0),
(6, 4, 0, 0),
(1, 12, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `persos`
--

DROP TABLE IF EXISTS `persos`;
CREATE TABLE IF NOT EXISTS `persos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `persos`
--

INSERT INTO `persos` (`id`, `prenom`) VALUES
(1, 'Yamin'),
(2, 'Halima'),
(3, 'Florine'),
(4, 'Erwan'),
(5, 'Carla'),
(6, 'Sara'),
(7, 'Emma'),
(8, 'Matthieu'),
(9, 'Salah'),
(10, 'Nicolas'),
(11, 'Ayyoub');

-- --------------------------------------------------------

--
-- Structure de la table `undercover2`
--

DROP TABLE IF EXISTS `undercover2`;
CREATE TABLE IF NOT EXISTS `undercover2` (
  `id_personne` int NOT NULL,
  `victoire` int NOT NULL,
  `defaite` int NOT NULL,
  `defaite_eclair` int NOT NULL,
  KEY `fk_id_personne` (`id_personne`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `undercover2`
--

INSERT INTO `undercover2` (`id_personne`, `victoire`, `defaite`, `defaite_eclair`) VALUES
(5, 2, 0, 0),
(7, 1, 1, 1),
(4, 2, 1, 1),
(3, 0, 2, 1),
(2, 1, 1, 1),
(8, 1, 1, 0),
(10, 1, 1, 0),
(9, 1, 0, 1),
(6, 1, 2, 1),
(1, 5, 2, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
