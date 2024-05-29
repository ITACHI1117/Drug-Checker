-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 10:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drug_checker`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `expires_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `expires_at`) VALUES
('aj@mail.com', 'e03a4ecf', '2024-05-23 18:59:53.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `genotype` varchar(200) NOT NULL,
  `bloodType` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `age`, `genotype`, `bloodType`) VALUES
('664f668786c9afc82', 'aj@mail.com', 'Aj', '$2y$10$UEBBL88U1qiNjZ3QYzfaWO5iygprz4pXUmI0cDxCwROvq6d/YVMyS', '50', 'AC', 'AB'),
('664f678422c8f684f', 'ajogujoseph0317@gmail.com', 'AjItachi', '$2y$10$/LWXlYXevpD8ZjZsKxvr4uNri7hK3G/GC10rGXC2ht4P8U4GRV9Uu', '50', 'AS', 'A'),
('6657919bacc3ba68f', 'fadareoluwamoyosore@gmail.com', 'korede', '$2y$10$.EhPASHi6sQ5AFUk189Z2u5bonXVWD6/u97nu7/TXaQQZX5EvPINW', '70', 'AC', 'AB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
