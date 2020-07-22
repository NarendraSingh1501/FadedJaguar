-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 23, 2020 at 06:22 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Mighty Morphin Power Ranger', 599),
(2, 'Mighty Morphin Alien Rangers', 599),
(3, 'Power Rangers Zeo', 609),
(4, 'Power Rangers Turbo', 619),
(5, 'Power Rangers in Space', 629),
(6, 'Power Rangers Lost Galaxy', 629),
(7, 'Power Rangers Lightspeed Rescue', 639),
(8, 'Power Rangers Time Force', 649),
(9, 'Power Rangers Wild Force', 650),
(10, 'Power Rangers Ninja Storm', 659),
(11, 'Power Rangers Dino Thunder', 669),
(12, 'Power Rangers S.P.D.', 679),
(13, 'Power Rangers Mystic Force', 689),
(14, 'Power Rangers Operation Overdrive', 659),
(15, 'Power Rangers Jungle Fury', 699),
(16, 'Power Rangers RPM', 649),
(17, 'Power Rangers Samurai', 709),
(18, 'Power Rangers Super Samurai', 709),
(19, 'Power Rangers Megaforce', 729),
(20, 'Power Rangers Super Megaforce', 729),
(21, 'Power Rangers Dino Charge', 739),
(22, 'Power Rangers Dino Super Charge', 739),
(23, 'Power Rangers Ninja Steel', 749),
(24, 'Power Rangers: Super Ninja Steel', 749),
(25, 'Power Rangers Beast Morphers', 749),
(26, 'Mighty Morphin Power Rangers: The Movie', 799),
(27, 'Turbo: A Power Rangers Movie', 899),
(28, 'Power Rangers', 999),
(29, 'Harry Potter and the Philosopher\'s Stone', 499),
(30, 'Harry Potter and the Chamber of Secrets', 549),
(31, 'Harry Potter and the Prisoner of Azkaban', 599),
(32, 'Harry Potter and the Goblet of Fire', 649),
(33, 'Harry Potter and the Order of the Phoenix', 699),
(34, 'Harry Potter and the Half-Blood Prince', 749),
(35, 'Harry Potter and the Deathly Hallows – Part 1', 799),
(36, 'Harry Potter and the Deathly Hallows – Part 2', 799);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(4, 'Narendra', 'test@xyz.com', '14e1b600b1fd579f47433b88e8d85291', '123456', 'jaipur', 'kalwar');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`) USING BTREE,
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(26, 4, 1, 'Confirmed'),
(27, 4, 3, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
