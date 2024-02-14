-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 13 fév. 2024 à 15:17
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel_10`
--

-- --------------------------------------------------------

--
-- Structure de la table `actu`
--

DROP TABLE IF EXISTS `actu`;
CREATE TABLE IF NOT EXISTS `actu` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_publication` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actu`
--

INSERT INTO `actu` (`id`, `contenu`, `date_publication`, `created_at`, `updated_at`) VALUES
(1, 'Ouverture de notre nouveau restaurant', '2024-02-13 00:00:00', NULL, NULL),
(2, 'Voyager grâce à nos saveurs africains', '2024-01-08 16:16:35', NULL, NULL),
(3, 'Les bienfaits des épices sur la santé', '2024-01-04 00:00:00', NULL, NULL),
(4, 'Découvrez le nouveau menu', '2024-01-25 16:12:18', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
