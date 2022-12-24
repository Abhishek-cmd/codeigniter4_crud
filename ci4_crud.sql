-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 12:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `isbn` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `isbn`, `author`, `created_at`) VALUES
(2, 'test2', 2147483647, 'test12345', '0000-00-00 00:00:00'),
(3, 'test3', 2147483647, 'newgdfgd', '0000-00-00 00:00:00'),
(4, 'test one added', 2147483647, 'Test one', '0000-00-00 00:00:00'),
(5, 'gfddgfg hgfgh', 2147483647, 'gfdfg', '0000-00-00 00:00:00'),
(6, 'added ', 2147483647, '8756746 yrytrt', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `retainer_fee` int(100) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `retainer_fee`, `updated_at`, `created_at`) VALUES
(1, 'Krystina Blick III', 'emma.mertz@hotmail.com', 5128706, NULL, '2022-12-23 23:10:40'),
(2, 'Estel Hermann', 'ernser.pascale@yahoo.com', 58450010, NULL, '2022-12-23 23:10:40'),
(3, 'Diego McGlynn DDS', 'predovic.norval@hotmail.com', 94158107, NULL, '2022-12-23 23:10:40'),
(4, 'Johan DuBuque', 'nienow.carey@gmail.com', 25843082, NULL, '2022-12-23 23:10:40'),
(5, 'Timothy Reichel', 'zackery.hudson@gmail.com', 87882441, NULL, '2022-12-23 23:10:40'),
(6, 'Pauline Kutch', 'cremin.benny@botsford.com', 66448557, NULL, '2022-12-23 23:10:40'),
(7, 'Vincent Runolfsson III', 'romaguera.adele@yahoo.com', 27825683, NULL, '2022-12-23 23:10:40'),
(8, 'Mrs. Gerda Lowe IV', 'ivory.rice@yahoo.com', 11584895, NULL, '2022-12-23 23:10:40'),
(9, 'Myrtie Pfeffer', 'lang.mckayla@gmail.com', 62792151, NULL, '2022-12-23 23:10:40'),
(10, 'Prof. Austen Breitenberg', 'spouros@yahoo.com', 16560039, NULL, '2022-12-23 23:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-12-23-134841', 'App\\Database\\Migrations\\AddClient', 'default', 'App', 1671808811, 1),
(2, '2022-12-23-134852', 'App\\Database\\Migrations\\AddUser', 'default', 'App', 1671808811, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `retainer_fee` (`retainer_fee`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
