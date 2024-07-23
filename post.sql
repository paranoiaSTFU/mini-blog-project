-- Adminer 4.8.1 MySQL 8.0.29 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `mini_blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mini_blog`;

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `created_at` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `post` (`id`, `title`, `content`, `created_at`) VALUES
(1,	'Привет',	'Пожалуйсто работай',	'2024-07-23 14:17:00'),
(2,	'qweqwe',	'qweqwe',	'2024-07-23 14:45:42'),
(3,	'asd',	'asd',	'2024-07-23 14:47:37'),
(4,	'asd',	'asd',	'2024-07-23 14:47:39'),
(5,	'asdgfdgh',	'ertherh',	'2024-07-23 14:48:02'),
(6,	'hello',	'zxc',	'2024-07-23 14:48:18'),
(7,	'hrer',	'rethrfgbn',	'erbertbetb'),
(8,	'erbertb',	'ertbertb',	'erbetnyasedfgrwg'),
(9,	'sgdfhwtrhbser',	'wstbrtbhnstgwsg',	'saergwethwrsthr'),
(10,	'wthrryeh',	'sgbsrth',	'sdfgrtshjrtej'),
(11,	'',	'',	''),
(12,	'ропоп',	'оьрлр',	'2024-07-23 16:07:38');

-- 2024-07-23 13:10:25
