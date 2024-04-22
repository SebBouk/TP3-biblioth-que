-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 19 avr. 2024 à 12:09
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
-- Base de données : `esicad_tp3_bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `code_catalogue` char(13) NOT NULL,
  `titre_livre` varchar(100) NOT NULL,
  `theme_livre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`code_catalogue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`code_catalogue`, `titre_livre`, `theme_livre`) VALUES
('9782070612361', 'Le Petit Prince', 'Fiction'),
('9782070414323', 'L\'Étranger', 'Roman'),
('9782070305515', '1984', 'Science-fiction'),
('9782253004223', 'Orgueil et Préjugés', 'Romance'),
('9782070643051', 'Harry Potter à l\'école des sorciers', 'Fantasy'),
('9782266283472', 'Le Seigneur des Anneaux', 'Fantasy'),
('9782253004834', 'Les Misérables', 'Classique'),
('9782070322703', 'La Peste', 'Roman'),
('9782253170660', 'Cinquante nuances de Grey', 'Romance'),
('9782070376829', 'Fondation', 'Science-fiction'),
('9782266287593', 'Le Hobbit', 'Fantasy'),
('9782080705559', 'Les Fleurs du mal', 'Poésie'),
('9782070419175', 'Guerre et Paix', 'Classique'),
('9782070368220', 'Le Rouge et le Noir', 'Classique'),
('9782070413494', 'Les Trois Mousquetaires', 'Aventure'),
('9782253004308', 'Les Hauts de Hurlevent', 'Romance'),
('9782070347014', 'La Métamorphose', 'Roman'),
('9782080705597', 'Crime et Châtiment', 'Classique'),
('9782221083682', 'Le Nom de la rose', 'Mystère'),
('9782253005428', 'Le Comte de Monte-Cristo', 'Aventure'),
('9782253010699', 'La Divine Comédie', 'Poésie'),
('9782070413647', 'Moby Dick', 'Aventure'),
('9782070414514', 'Les Raisins de la colère', 'Roman'),
('9782012006286', 'Les Enfants du capitaine Grant', 'Aventure'),
('9782011833467', 'Voyage au centre de la Terre', 'Aventure'),
('9782010101854', 'Vingt mille lieues sous les mers', 'Aventure'),
('9782253004292', 'Dracula', 'Horreur'),
('9782070376828', 'Les Aventures de Sherlock Holmes', 'Mystère'),
('9782011867127', 'Le Tour du monde en quatre-vingts jours', 'Aventure');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
