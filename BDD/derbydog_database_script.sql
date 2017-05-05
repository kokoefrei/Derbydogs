-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 02 mai 2017 à 04:20
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `derbydog`
--

-- --------------------------------------------------------

--
-- Structure de la table `breed`
--

CREATE TABLE `breed` (
  `BreedId` int(11) NOT NULL COMMENT 'breed identifiant',
  `Description` varchar(512) NOT NULL COMMENT 'breed''s description'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `breed`
--

INSERT INTO `breed` (`BreedId`, `Description`) VALUES
(2, 'Le bichon maltais est une race de chien méditerranéenne dont il est impossible de reconstituer l\'origine du fait de sa grande ancienneté, il était connu dans la Rome antique. En France, il fait partie de la famille des bichons (5 variétés) et, en dehors de France, il est une race à part entière. Suivant les pays, un maltais est appelé : maltese, malteser, maltezer, etc.'),
(1, 'Le caniche est une race de chien. C\'était autrefois un chien adapté à la chasse dans l\'eau, ce qui explique le toilettage « en lion » qui lui est souvent appliqué, et qui était fort à la mode à la Belle Époque, il descend du barbet1,2. Régulièrement utilisé comme animal de cirque, il est classé parmi les 3 races canines les plus intelligentes (the Intelligence of Dogs (en)).\r\nSa durée de vie varie entre 12 et 19 ans.'),
(3, 'Le rottweiler est une race de chien originaire d\'Allemagne, utilisée historiquement pour garder les troupeaux et effectuer des missions de défense de son maître.'),
(4, 'Le retriever du Labrador, plus communément appelé labrador ou labrador retriever est une race de chiens originaire du Royaume-Uni. C\'est un chien de taille moyenne, à l\'allure ronde et robuste, de couleur entièrement sable, chocolat ou noir. Issu du chien de Saint-John, la race a été importée puis développée au Royaume-Uni et au Canada à partir de très longtemps[pas clair]. Le labrador est actuellement l\'une des pures races les plus répandues dans le monde.'),
(5, 'Le carlin (vient du nom du comédien Carlo Antonio Bertinazzi) est une race de chien provenant de Chine1 et existant en Europe depuis au moins le xvie siècle. Il est connu sous l\'appellation de Pug (carlin) aux États-Unis, au Brésil en Australie et en Angleterre (du fait de son profil en poing) et de Mops (fâché) en Allemagne et en Russie. Il appartient à la catégorie des chiens de compagnie et des molossoïdes ou molosses.');

-- --------------------------------------------------------

--
-- Structure de la table `colour`
--

CREATE TABLE `colour` (
  `ColourId` int(11) NOT NULL COMMENT 'colour identifiant',
  `Description` varchar(512) NOT NULL COMMENT 'colour''s description'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `colour`
--

INSERT INTO `colour` (`ColourId`, `Description`) VALUES
(1, 'Black colour'),
(2, 'White colour'),
(3, 'Orange colour'),
(4, 'Gray colour'),
(5, 'Black and White');

-- --------------------------------------------------------

--
-- Structure de la table `dog`
--

CREATE TABLE `dog` (
  `DogId` int(11) NOT NULL COMMENT 'dog''s identifiant',
  `Name` varchar(32) NOT NULL DEFAULT 'dogname' COMMENT 'dog''s name',
  `age` int(11) NOT NULL COMMENT 'dog''s age',
  `Colour` int(11) NOT NULL COMMENT 'dog''s colour',
  `Breed` int(11) NOT NULL COMMENT 'dog''s breed',
  `Gender` char(1) NOT NULL COMMENT 'dog''s gender',
  `LikesOD` tinyint(1) NOT NULL COMMENT 'if likes other dogs',
  `LikesTP` tinyint(1) NOT NULL COMMENT 'if likes to play',
  `Description` varchar(32) NOT NULL COMMENT 'dog''s description',
  `Adopted` tinyint(1) NOT NULL COMMENT 'if adopted'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dog`
--

INSERT INTO `dog` (`DogId`, `Name`, `age`, `Colour`, `Breed`, `Gender`, `LikesOD`, `LikesTP`, `Description`, `Adopted`) VALUES
(1, 'Torr', 1, 1, 1, 'M', 1, 1, '', 1),
(2, 'Mika', 2, 2, 2, 'F', 0, 0, '', 1),
(3, 'Scar', 3, 3, 3, 'M', 1, 0, '', 0),
(4, 'Fiona', 4, 4, 4, 'F', 0, 1, '', 0),
(5, 'Jackson', 5, 5, 5, 'M', 0, 0, '', 0),
(6, 'Paul', 5, 5, 1, 'M', 0, 0, '', 0),
(7, 'Morgan', 3, 2, 4, 'F', 1, 1, '', 0),
(8, 'Flair', 2, 3, 1, 'F', 1, 0, '', 0),
(9, 'Samson', 4, 5, 3, 'M', 1, 1, '', 0),
(10, 'Miky', 12, 1, 4, 'F', 0, 1, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `NewsId` int(11) NOT NULL COMMENT 'new''s identifiant',
  `Picture` varchar(512) DEFAULT NULL COMMENT 'picture''s url',
  `Headline` varchar(32) DEFAULT NULL COMMENT 'new''s headline',
  `DateOfPub` date NOT NULL COMMENT 'date of publication',
  `BriefText` varchar(256) DEFAULT NULL COMMENT 'new''s brief description'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`NewsId`, `Picture`, `Headline`, `DateOfPub`, `BriefText`) VALUES
(1, 'https://static.wamiz.fr/images/animaux/chiens/medium/carlin-980.jpg', 'Discover Our new Carlin', '2017-04-18', 'The pug (comes from the name of comedian Carlo Antonio Bertinazzi) is a dog breed from China1 and has existed in Europe since at least the sixteenth century.'),
(2, 'https://upload.wikimedia.org/wikipedia/commons/2/26/YellowLabradorLooking_new.jpg', 'Discover Our new Labrador ', '2017-03-15', 'The Labrador Retriever, more commonly known as the Labrador Retriever or Labrador Retriever, is a breed of dogs originally from the United Kingdom. It is a medium-sized dog, with a round and robust appearance, entirely colored sand, chocolate or black.'),
(3, 'https://static.wamiz.fr/images/animaux/chiens/large/rottweiler.jpg', 'Discover Our new rottweiler', '2017-04-20', 'The Rottweiler is a breed of dog originating in Germany, used historically to guard herds and carry out defense missions of its master.'),
(4, 'https://static.wamiz.fr/images/animaux/chiens/large/caniche.jpg', 'Discover Our new Caniche', '2017-04-06', 'The poodle is a dog breed. It was once a dog adapted to hunting in water, which explains the \"lion\" grooming that is often applied to it, and which was very fashionable in the Belle Époque, it descends from the barbet.'),
(5, 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Maltais.jpg/170px-Maltais.jpg', 'Discover Our new Bichon Maltais', '2017-04-30', 'The Maltese Bichon is a breed of Mediterranean dog whose origins it is impossible to reconstitute because of its great antiquity, it was known in ancient Rome.'),
(6, 'http://www.la-spa.fr/sites/default/files/articles/principales/ban_pomai2017_chien_0_1_0_0.jpg', 'Derby Dogs Open Doors Scheduled!', '2017-04-05', 'Derby Dog, dog protection company in Derby offers you two days to meet these beautiful hairballs.');

-- --------------------------------------------------------

--
-- Structure de la table `sponsordog`
--

CREATE TABLE `sponsordog` (
  `UserId` int(11) NOT NULL,
  `DogId` int(11) NOT NULL,
  `Date` varchar(32) NOT NULL DEFAULT 'En Attente',
  `Amount` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='L''association SponsorDog devient une table';

--
-- Déchargement des données de la table `sponsordog`
--

INSERT INTO `sponsordog` (`UserId`, `DogId`, `Date`, `Amount`) VALUES
(2, 1, '01-05-2017', '20'),
(3, 1, '16-09-1995', '15'),
(1, 4, '02-12-1994', '100'),
(2, 4, '30-08-1992', '10'),
(2, 6, '20-03-1970', '30'),
(5, 2, '21-03-1987', '25'),
(5, 10, '27-03-2000', '10'),
(5, 3, '08-04-1995', '15'),
(5, 9, '08-04-1995', '80'),
(5, 7, '20-07-1957', '45');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL COMMENT 'user identifiant',
  `firstname` varchar(32) NOT NULL DEFAULT 'userfirstname' COMMENT 'user''s first name',
  `lastname` varchar(32) NOT NULL DEFAULT 'userlastname' COMMENT 'user last name',
  `datelastpaid` date NOT NULL COMMENT 'user''s date of last paid',
  `address1` varchar(32) NOT NULL DEFAULT 'useraddr1' COMMENT 'user''s first part of address',
  `address2` varchar(32) NOT NULL DEFAULT 'useraddr2' COMMENT 'second part of user''s address',
  `postcode` int(5) NOT NULL COMMENT 'user''s postcode'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `datelastpaid`, `address1`, `address2`, `postcode`) VALUES
(1, 'koko', 'Jack', '2017-04-30', '1 rue picault', 'Paris', 75005),
(2, 'Hakim', 'Assous', '2017-02-08', '180 roosvelt street', 'Stoke-On-Trent', 426),
(3, 'Abdoulaye', 'Sacko', '2017-04-05', '1 bird square', 'Derby', 29876),
(4, 'Marc', 'Renier', '2017-05-01', 'Manathan Garden', 'Derby', 29876),
(5, 'Andy', 'Richard', '2016-11-23', 'Manathan Garden', 'Derby', 29876);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`BreedId`);

--
-- Index pour la table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`ColourId`);

--
-- Index pour la table `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`DogId`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsId`);

--
-- Index pour la table `sponsordog`
--
ALTER TABLE `sponsordog`
  ADD PRIMARY KEY (`UserId`,`DogId`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `colour`
--
ALTER TABLE `colour`
  MODIFY `ColourId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'colour identifiant', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `dog`
--
ALTER TABLE `dog`
  MODIFY `DogId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'dog''s identifiant', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `NewsId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'new''s identifiant', AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user identifiant', AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
