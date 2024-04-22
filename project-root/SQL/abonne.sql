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
-- Structure de la table `abonne`
--

DROP TABLE IF EXISTS `abonne`;
CREATE TABLE IF NOT EXISTS `abonne` (
  `matricule_abonne` int NOT NULL AUTO_INCREMENT,
  `nom_abonne` varchar(50) DEFAULT NULL,
  `date_naissance_abonne` date DEFAULT NULL,
  `date_adhesion_abonne` date DEFAULT NULL,
  `adresse_abonne` varchar(150) DEFAULT NULL,
  `telephone_abonne` char(10) DEFAULT NULL,
  `CSP_abonne` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`matricule_abonne`)
) ENGINE=MyISAM AUTO_INCREMENT=142 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `abonne`
--

INSERT INTO `abonne` (`matricule_abonne`, `nom_abonne`, `date_naissance_abonne`, `date_adhesion_abonne`, `adresse_abonne`, `telephone_abonne`, `CSP_abonne`) VALUES
(119, 'Petit', '1983-08-22', '2023-04-10', '4 rue du Chêne', '0666666666', 'Ouvrier'),
(120, 'Bernard', '1998-06-17', '2022-01-05', '20 rue des Ormes', '0123456789', 'Cadre'),
(121, 'Leroy', '1974-11-09', '2021-11-15', '3 avenue des Acacias', '0987654321', 'Employé'),
(122, 'Moreau', '1989-02-14', '2023-03-20', '18 boulevard des Alpes', '0666666666', 'Ouvrier'),
(123, 'Garcia', '1991-05-25', '2022-02-28', '6 rue des Violettes', '0123456789', 'Cadre'),
(124, 'Laurent', '1982-10-07', '2021-12-10', '11 avenue du Lac', '0987654321', 'Employé'),
(125, 'Pierre', '1979-04-01', '2023-05-15', '9 rue des Mimosas', '0666666666', 'Ouvrier'),
(126, 'Robert', '1996-08-08', '2022-01-20', '14 boulevard Victor Hugo', '0123456789', 'Cadre'),
(127, 'Simon', '1977-03-22', '2021-11-25', '2 avenue des Roses', '0987654321', 'Employé'),
(128, 'Dubois', '1993-09-19', '2023-04-05', '5 rue des Glycines', '0666666666', 'Ouvrier'),
(129, 'Martinez', '1988-12-11', '2022-02-10', '17 avenue du Printemps', '0123456789', 'Cadre'),
(130, 'Richard', '1990-06-28', '2021-12-15', '22 rue du Moulin', '0987654321', 'Employé'),
(131, 'Dupont', '1975-11-03', '2023-03-25', '16 avenue des Cerisiers', '0666666666', 'Ouvrier'),
(132, 'Girard', '1994-04-20', '2022-01-01', '19 rue des Coquelicots', '0123456789', 'Cadre'),
(133, 'Morel', '1981-07-13', '2021-11-05', '13 avenue des Champs', '0987654321', 'Employé'),
(134, 'Durand', '1997-02-09', '2023-05-10', '21 boulevard des Pins', '0666666666', 'Ouvrier'),
(135, 'Lefevre', '1978-05-16', '2022-01-15', '24 rue des Oliviers', '0123456789', 'Cadre'),
(136, 'Bonnet', '1986-10-23', '2021-12-20', '23 avenue des Lilas', '0987654321', 'Employé'),
(137, 'Denis', '1999-07-07', '2023-04-15', '26 boulevard des Roses', '0666666666', 'Ouvrier'),
(138, 'Caron', '1984-09-18', '2022-02-20', '27 rue des Tulipes', '0123456789', 'Cadre'),
(139, 'Leroux', '1973-03-25', '2021-11-10', '28 avenue des Violettes', '0987654321', 'Employé'),
(140, 'Renard', '1992-06-22', '2023-03-05', '29 boulevard des Acacias', '0666666666', 'Ouvrier'),
(141, 'Roussel', '1980-12-31', '2022-01-25', '30 rue des Chênes', '0123456789', 'Cadre'),
(118, 'Rousseau', '1992-01-30', '2021-12-01', '7 avenue du Soleil', '0987654321', 'Employé'),
(117, 'Dubois', '1980-07-18', '2022-02-15', '12 boulevard Voltaire', '0123456789', 'Cadre'),
(116, 'Martin', '1976-12-03', '2023-05-20', '25 rue de la Gare', '0666666666', 'Ouvrier'),
(115, 'Girard', '1995-04-28', '2021-11-05', '15 avenue de la Paix', '0987654321', 'Employé'),
(114, 'Lefevre', '1987-09-12', '2022-03-10', '8 rue des Lilas', '0123456789', 'Cadre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
