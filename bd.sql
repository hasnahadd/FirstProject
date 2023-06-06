-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour testecommerce
CREATE DATABASE IF NOT EXISTS `testecommerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `testecommerce`;

-- Listage de la structure de table testecommerce. administrateur
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table testecommerce.administrateur : ~2 rows (environ)
INSERT INTO `administrateur` (`id`, `nom`, `pass`, `email`) VALUES
	(1, 'admin ', '202cb962ac59075b964b07152d234b70', 'haddoud@gmail.com'),
	(2, 'zak', '123', 'zak@gmail.com');

-- Listage de la structure de table testecommerce. avis
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `produits` int DEFAULT NULL,
  `visiteur` int DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `date_modification` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table testecommerce.avis : ~0 rows (environ)

-- Listage de la structure de table testecommerce. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `descrp` text,
  `createur` int DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `date_modification` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table testecommerce.categories : ~4 rows (environ)
INSERT INTO `categories` (`id`, `nom`, `descrp`, `createur`, `date_creation`, `date_modification`) VALUES
	(1, 'hasna', 'haddoud manel  ', 2, '2023-03-29', '2023-04-03'),
	(2, 'zak', ' 7777', 2, '2023-04-02', NULL),
	(90, 'oumnia', ' aaaa a', 2, '2023-04-29', '2023-04-29'),
	(93, 'fofa', ' aaa', 2, '2023-04-29', NULL);

-- Listage de la structure de table testecommerce. commande
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `produits` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `quantite` double DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `num` float DEFAULT NULL,
  `addr` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `wl` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table testecommerce.commande : ~6 rows (environ)
INSERT INTO `commande` (`id`, `produits`, `quantite`, `date_creation`, `nom`, `email`, `num`, `addr`, `wl`, `total`) VALUES
	(9, 'M13 TAB', 2, '2023-06-06', 'hasna', 'zak@gmail.com', 2.55556e18, 'ddddddddddddddddddd', '2', NULL),
	(10, 'M13 TAB', 22, '2023-06-06', 'mimi', 'aaaagm253@gmail.com', 7.77778e23, 'hhhhhhhhhhhhhhhhh', '3', NULL),
	(11, 'M13 TAB', 22, '2023-06-06', 'mimi', 'aaaagm253@gmail.com', 7.77778e23, 'hhhhhhhhhhhhhhhhh', '3', NULL),
	(12, 'M13 TAB', 22, '2023-06-06', 'mimi', 'aaaagm253@gmail.com', 7.77778e23, 'hhhhhhhhhhhhhhhhh', '3', NULL),
	(13, 'Nokia13', 152, '2023-06-06', 'mimi ', 'haddoud@gmail.com', 5.55556e15, 'aaaaaaaaaaaaaaa', '1', NULL),
	(14, 'oumnia', 2, '2023-06-06', 'mimi ', 'haddoud@gmail.com', 5.55556e15, 'aaaaaaaaaaaaaaa', '1', NULL);

-- Listage de la structure de table testecommerce. produits
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descrp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `prix` decimal(20,6) unsigned DEFAULT NULL,
  `categories` int DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `createur` int DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `date_modification` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table testecommerce.produits : ~6 rows (environ)
INSERT INTO `produits` (`id`, `nom`, `descrp`, `prix`, `categories`, `date_creation`, `createur`, `img`, `marque`, `date_modification`) VALUES
	(2, 'M13 TAB', 'hasnaaaaaa ', 1500.000000, 1, NULL, NULL, 'tab3.jpg', 'Nokia', '2023-04-24'),
	(5, 'Nokia13', 'aaaaaaaaaaa', 350.000000, 1, NULL, NULL, 'tv.jpg', 'samsung', '2023-04-24'),
	(11, 'hasna', ' zzzzzzz', 2000.000000, 2, '2023-04-24', 2, '271383141_462103708805667_7060284364737608084_n.gif', 'zzzz', NULL),
	(12, 'd', ' dddd', 3333.000000, 1, '2023-04-24', 2, '271383141_462103708805667_7060284364737608084_n.gif', 'zzzz', NULL),
	(13, 'oumnia', 'sdsfsdfdsf ', 100.000000, 1, '2023-04-29', 2, 'Capture d’écran (88).png', 'zzzz', '2023-04-29'),
	(14, 'hasnaa1', ' cxjdcjdhh', 15.000000, 90, '2023-05-08', 2, 'rain-artwork-women-earring-wallpaper-preview.jpg', 'nokia', NULL);

-- Listage de la structure de table testecommerce. stock
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int NOT NULL AUTO_INCREMENT,
  `produits` int DEFAULT NULL,
  `quntite` int DEFAULT NULL,
  `createur` int DEFAULT NULL,
  `date_creation` int DEFAULT NULL,
  `date_modification` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table testecommerce.stock : ~0 rows (environ)

-- Listage de la structure de table testecommerce. visiteur
CREATE TABLE IF NOT EXISTS `visiteur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` int DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table testecommerce.visiteur : ~0 rows (environ)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
