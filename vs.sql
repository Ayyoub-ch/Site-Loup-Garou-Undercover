-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 15 juin 2025 à 21:05
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
-- Base de données : `vs`
--

-- --------------------------------------------------------

--
-- Structure de la table `loup_garou`
--

DROP TABLE IF EXISTS `loup_garou`;
CREATE TABLE IF NOT EXISTS `loup_garou` (
  `id_personne` int NOT NULL,
  `victoire` int NOT NULL,
  `defaite` int NOT NULL,
  `defaite_eclair` int NOT NULL,
  KEY `fk_id_personne` (`id_personne`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `loup_garou`
--

INSERT INTO `loup_garou` (`id_personne`, `victoire`, `defaite`, `defaite_eclair`) VALUES
(1, 3, 1, 0),
(2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `persos`
--

DROP TABLE IF EXISTS `persos`;
CREATE TABLE IF NOT EXISTS `persos` (
  `id` int NOT NULL,
  `prenom` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `persos`
--

INSERT INTO `persos` (`id`, `prenom`) VALUES
(1, 'Yamin'),
(2, 'Halima');

-- --------------------------------------------------------

--
-- Structure de la table `undercover`
--

DROP TABLE IF EXISTS `undercover`;
CREATE TABLE IF NOT EXISTS `undercover` (
  `id_personne` int NOT NULL,
  `victoire` int NOT NULL,
  `defaite` int NOT NULL,
  `defaite_eclair` int NOT NULL,
  KEY `fk_id_personne` (`id_personne`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `undercover`
--

INSERT INTO `undercover` (`id_personne`, `victoire`, `defaite`, `defaite_eclair`) VALUES
(1, 4, 2, 0),
(2, 2, 2, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
