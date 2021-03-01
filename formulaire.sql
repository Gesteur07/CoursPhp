-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 01 mars 2021 à 12:50
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `soneb`
--

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proprio` varchar(50) DEFAULT NULL,
  `permis` varchar(50) DEFAULT NULL,
  `immeuble` varchar(50) DEFAULT NULL,
  `departement` varchar(50) DEFAULT NULL,
  `agence` text,
  `calibre` varchar(50) DEFAULT NULL,
  `raison` text,
  `branche` text,
  `quartier` varchar(50) DEFAULT NULL,
  `illot` varchar(50) DEFAULT NULL,
  `parcelle` varchar(50) DEFAULT NULL,
  `rue` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`id`, `proprio`, `permis`, `immeuble`, `departement`, `agence`, `calibre`, `raison`, `branche`, `quartier`, `illot`, `parcelle`, `rue`, `ville`, `titre`, `prenom`, `nom`, `telephone`, `mail`) VALUES
(20, 'Oui', 'En cours', 'Oui', 'Atlantique-Littoral', 'Gbegamey', 'Calibre 15', 'Boss', 'Info', 'Glo', '17Mousse', '36 Sol', 'Geste', 'Calavi', 'M.', 'Moustapha', 'Hamadou', 97773776, 'mous@gmail.com'),
(26, 'Oui', 'Oui', 'Oui', 'Atlantique-Littoral', 'Dassa-ZoumÃ©', 'Calibre 15', 'xf,gh', 'dfjh', 'dfkjh', 'dfvb', 'dfkuvh', 'zegkvh', 'Â²dgkjbh', 'Mme', 'dgkuy', 'egkh', 3225662, 'efhvkfv@gmail.com'),
(27, 'Oui', 'Oui', 'Oui', 'Atlantique-Littoral', 'Dassa-ZoumÃ©', 'Calibre 15', 'xf,gh', 'dfjh', 'dfkjh', 'dfvb', 'dfkuvh', 'zegkvh', 'Â²dgkjbh', 'Mme', 'dgkuy', 'egkh', 3225662, 'efhvkfv@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
