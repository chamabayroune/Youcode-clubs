-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 nov. 2022 à 15:31
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
-- Base de données : `youcodeclubs`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

DROP TABLE IF EXISTS `apprenant`;
CREATE TABLE IF NOT EXISTS `apprenant` (
  `Nom` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(500) NOT NULL,
  `Role` varchar(255) DEFAULT NULL,
  `id_club` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_club` (`id_club`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`Nom`, `Class`, `Age`, `id`, `logo`, `Role`, `id_club`) VALUES
('Aayne Alhayate Yassine', 'ADA LOVELACE', 22, 3, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/471-1664881329.JPG', NULL, NULL),
('Abdallah Bouzhar', 'ADA LOVELACE', 22, 4, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/421-1664881339.JPG', NULL, NULL),
('Abdelaziz Elbarbouchi', 'ADA LOVELACE', 24, 5, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/428-1664881348.JPG', NULL, NULL),
('Abdelghani Jelouani', 'ADA LOVELACE', 22, 6, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/494-1664881360.JPG', NULL, NULL),
('Abdelillah Elasri', 'ADA LOVELACE', 22, 7, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/507-1664881372.JPG', NULL, NULL),
('Achchaimae Khalaf', 'ADA LOVELACE', 20, 8, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/474-1664881385.JPG', NULL, NULL),
('Amina El Hakik', 'ADA LOVELACE', 29, 9, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/432-1664881394.JPG', NULL, NULL),
('Aymane Belassiria', 'ADA LOVELACE', 22, 10, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/467-1664881404.JPG', NULL, NULL),
('Ayoub Elgountari', 'ADA LOVELACE', 20, 11, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/484-1664881412.JPG', NULL, NULL),
('Bayroune Chaima', 'ADA LOVELACE', 22, 12, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/477-1664881423.JPG', NULL, NULL),
('Cherraoui Karim', 'ADA LOVELACE', 26, 13, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/466-1664881432.JPG', NULL, NULL),
('Elhjoujy Elmahdi', 'ADA LOVELACE', 23, 14, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/456-1664881441.JPG', NULL, NULL),
('Imad Eddine Zaoui', 'ADA LOVELACE', 20, 15, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/493-1664881451.JPG', NULL, NULL),
('Ismail Houssni', 'ADA LOVELACE', 20, 16, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/478-1664881466.JPG', NULL, NULL),
('Marouane Ait Elhaj', 'ADA LOVELACE', 18, 17, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/486-1664881477.JPG', NULL, NULL),
('Mohamed Amine Majidi', 'ADA LOVELACE', 20, 18, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/482-1664881491.JPG', NULL, NULL),
('Mohcine Khribech', 'ADA LOVELACE', 19, 19, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/443-1664881501.JPG', NULL, NULL),
('Nakhli Anas', 'ADA LOVELACE', 19, 20, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/496-1664881515.JPG', NULL, NULL),
('Nouhaila Laaouina', 'ADA LOVELACE', 22, 21, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/476-1664881526.JPG', NULL, NULL),
('Ousama Lasri', 'ADA LOVELACE', 21, 22, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/480-1664881540.JPG', NULL, NULL),
('Oussama Ouafidi', 'ADA LOVELACE', 22, 23, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/481-1664881563.JPG', NULL, NULL),
('Oussama Haddi', 'ADA LOVELACE', 24, 24, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/489-1664881553.JPG', NULL, NULL),
('Rabie Ouallaf', 'ADA LOVELACE', 18, 25, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/492-1664896392.JPG', NULL, NULL),
('Yassine Jaouad', 'ADA LOVELACE', 21, 26, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/472-1664881573.JPG', NULL, NULL),
('Zafer Kenza', 'ADA LOVELACE', 22, 27, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/464-1664881583.JPG', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `logo` varchar(500) NOT NULL,
  `Categorie` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
