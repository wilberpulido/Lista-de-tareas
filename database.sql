-- Adminer 4.8.0 MySQL 8.0.23 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `taskList` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `taskList`;

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `idTask` int NOT NULL AUTO_INCREMENT,
  `idUser` int NOT NULL,
  `task` varchar(255) NOT NULL,
  `state` varchar(150) NOT NULL,
  `priority` varchar(150) NOT NULL,
  `deadline` varchar(150) NOT NULL,
  PRIMARY KEY (`idTask`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


-- 2021-02-14 20:16:51


--Con usuarios
-- Adminer 4.8.0 MySQL 8.0.23 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `taskList` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `taskList`;

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `idTask` int NOT NULL AUTO_INCREMENT,
  `idUser` int NOT NULL,
  `task` varchar(255) NOT NULL,
  `state` varchar(150) NOT NULL,
  `priority` varchar(150) NOT NULL,
  `deadline` varchar(150) NOT NULL,
  PRIMARY KEY (`idTask`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `tasks` (`idTask`, `idUser`, `task`, `state`, `priority`, `deadline`) VALUES
(1,	1,	'Editado con exito',	'At risk',	'High',	'2021-03-10'),
(3,	1,	'Otra prueba',	'Delayed',	'Medium',	'2021-02-03');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `users` (`idUser`, `firstName`, `lastName`, `username`, `password`, `mail`) VALUES
(1,	'Wilber',	'Pulido',	'tyrlgs',	'$2y$12$YuNks2la9QllX3tNLsNBOepx3B6dXQmLgBedCAcKwjUhZedRACshq',	'pulidowilber@gmail.com');

-- 2021-02-14 20:21:36