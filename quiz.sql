-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 04:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `quiz`
--
-- --------------------------------------------------------
--
-- Table structure for table `admin`
--
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `admin`
--
INSERT INTO
  `admin` (`admin_id`, `admin_email`, `password`)
VALUES
  (1, 'uzair39@gmail.com', 'uzair123'),
  (2, 'admin@admin.com', 'admin123'),
  (4, 'Taha@.com', '123'),
  (
    5,
    'uzair39@gmail.com',
    '$2y$10$UF2gvlIYB7WDL7aJAbuBguBi6LrwkJs76G/Bb8AlLBT1Jo9idGTBG'
  ),
  (
    6,
    'uzair39@gmail.com',
    '$2y$10$lYpNJn90movYgQKGzSEh5OTmr29vgoBlN1HctRyTfuuekhPcNOr52'
  ),
  (
    7,
    'uzair39@gmail.com',
    '$2y$10$L5Axj5GFjxY7u2XX1vovU.B4ffrKB.Y21Dux3SQ7Fj0sGfuQsGRHm'
  ),
  (
    8,
    'uzair39@gmail.com',
    '$2y$10$p.smJAEEQXcdOwDj4pZH5ed/baYIYapF6avcmwkhZQUw07l.Izb9a'
  ),
  (
    9,
    'admin@admin.com',
    '$2y$10$S9s.iiCF1C3NuoBvo7iePedakdBVmBscgrCoibWaP7lMrJ4QfmUee'
  ),
  (
    10,
    'admin@admin.com',
    '$2y$10$AuI1QpO4g3IRySKCuNUsz.6/cYGhJwfNRNchhK0yXf7XsbIraYUl.'
  ),
  (
    11,
    'uzair39@gmail.com',
    '$2y$10$CEcuay7XfbcYZyYx7woKf.489/3wa6fySu/I7zDLrQNThxQt90Ane'
  ),
  (
    12,
    'uzair39@gmail.com',
    '$2y$10$kU/ARU4OPnL7RQkwDRW3JeVAQQgnNFGjCUd03196JxJzpOflzC7IW'
  );

-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `users`
--
INSERT INTO
  `users` (
    `username`,
    `email`,
    `gender`,
    `mobile`,
    `institute`,
    `password`
  )
VALUES
  ('', '', 'male', 0, '', ''),
  (
    'M.Taha',
    'taha1@gmail.com',
    'Male',
    3127768525,
    'FAST',
    '123'
  ),
  (
    'M.Uzair',
    'uzairmian395@gmail.com',
    'Male',
    3077768525,
    'GCUF',
    '123456'
  ),
  (
    'nalain e muhammad',
    'nalain12@gmail.com',
    'male',
    3007633258,
    'AUF',
    '$2y$10$EStN6xwSqQlBHFF6U7XOUuNVZC5cBSPgSTkU.C2GXXJwfTnojBEii'
  ),
  (
    'zainab',
    'zainab@gmail.com',
    'female',
    3007614714,
    'NTU',
    '$2y$10$0b8QyX3ahdVWKi1KZphFSOUz3ximbdX5a3Y4XKVKfot/CNgNX6EMK'
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `admin`
--
ALTER TABLE
  `admin`
ADD
  PRIMARY KEY (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE
  `users`
ADD
  PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE
  `admin`
MODIFY
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 13;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;