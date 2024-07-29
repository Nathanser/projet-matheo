-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `panier`;
CREATE TABLE `panier` (
  `Image` varchar(5000) NOT NULL,
  `NomP` varchar(50) NOT NULL,
  `Prix` int(3) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `ID` int(2) NOT NULL,
  KEY `ID` (`ID`),
  CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `produits` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `panier` (`Image`, `NomP`, `Prix`, `Description`, `ID`) VALUES
('/img/enceinte2.jpg',	'Enceinte avec socle',	69,	'Les enceintes sur socle au design élégant allient performance audio et esthétique moderne. Avec leur base distinctive, elles offrent une présence visuelle raffinée tout en fournissant un son de haute qualité. Ces enceintes sont conçues pour compléter harmonieusement votre espace, alliant forme et fonction pour une expérience auditive immersive avec une touche design.',	2),
('/img/enceinte3.jpg',	'Enceinte avec tourne disque',	499,	'Les enceintes avec tourne-disque offrent une expérience vintage en combinant la lecture de vinyles avec des fonctionnalités modernes comme le Bluetooth. Idéales pour ceux qui recherchent le charme rétro avec une touche contemporaine.',	3),
('/img/enceinte1.jpg',	'Enceinte mini portable',	39,	'Les enceintes mini portables au design élégant allient esthétique et fonctionnalité. Leur format compact les rend facilement transportables, tandis que leur design soigné ajoute une touche de style à votre expérience auditive. Avec une connectivité sans fil Bluetooth, ces enceintes offrent non seulement un son de qualité, mais aussi une esthétique moderne et chic pour accompagner votre vie quotidienne avec élégance.',	1);

DROP TABLE IF EXISTS `produits`;
CREATE TABLE `produits` (
  `Image` varchar(300) NOT NULL,
  `NomP` varchar(50) NOT NULL,
  `Prix` int(3) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `LP` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `produits` (`Image`, `NomP`, `Prix`, `Description`, `ID`, `LP`) VALUES
('/img/enceinte1.jpg',	'Enceinte mini portable',	39,	'Les enceintes mini portables au design élégant allient esthétique et fonctionnalité. Leur format compact les rend facilement transportables, tandis que leur design soigné ajoute une touche de style à votre expérience auditive. Avec une connectivité sans fil Bluetooth, ces enceintes offrent non seulement un son de qualité, mais aussi une esthétique moderne et chic pour accompagner votre vie quotidienne avec élégance.',	1,	''),
('/img/enceinte2.jpg',	'Enceinte avec socle',	69,	'Les enceintes sur socle au design élégant allient performance audio et esthétique moderne. Avec leur base distinctive, elles offrent une présence visuelle raffinée tout en fournissant un son de haute qualité. Ces enceintes sont conçues pour compléter harmonieusement votre espace, alliant forme et fonction pour une expérience auditive immersive avec une touche design.',	2,	''),
('/img/enceinte3.jpg',	'Enceinte avec tourne disque',	499,	'Les enceintes avec tourne-disque offrent une expérience vintage en combinant la lecture de vinyles avec des fonctionnalités modernes comme le Bluetooth. Idéales pour ceux qui recherchent le charme rétro avec une touche contemporaine.',	3,	'');

DROP TABLE IF EXISTS `tbl_log`;
CREATE TABLE `tbl_log` (
  `Id` int(11) DEFAULT NULL,
  `DateDebut` datetime DEFAULT NULL,
  `DateFin` datetime DEFAULT NULL,
  `IdUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('cc',	'e0323a9039add2978bf5b49550572c7c',	'cc@gmail.com');

-- 2024-03-19 12:13:38
