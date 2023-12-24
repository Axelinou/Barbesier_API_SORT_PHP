-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 24 déc. 2023 à 13:11
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `apisort`
--

-- --------------------------------------------------------

--
-- Structure de la table `sort`
--

DROP TABLE IF EXISTS `sort`;
CREATE TABLE IF NOT EXISTS `sort` (
  `Id_Sort` int NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) NOT NULL,
  `Tableau_non_trier` varchar(50) NOT NULL,
  `Tableau_trier` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Sort`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `sort`
--

INSERT INTO `sort` (`Id_Sort`, `Type`, `Tableau_non_trier`, `Tableau_trier`) VALUES
(1, 'InserSort', '[11,4,5,6,1]', '1,4,5,6,11'),
(2, 'QuickSort', '[111,40,5,76,881]', '5,40,76,111,881'),
(3, 'QuickSort', '[111,40,5,76,881]', '5,40,76,111,881'),
(4, 'InserSort', '[10,4,5,6,1]', '1,4,5,6,10'),
(5, 'InserSort', '[106,4,5,666,1]', '1,4,5,106,666');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
