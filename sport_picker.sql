-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 10:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport_picker`
--

-- --------------------------------------------------------

--
-- Table structure for table `addplayer`
--

CREATE TABLE `addplayer` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addplayer`
--

INSERT INTO `addplayer` (`id`, `user_id`, `p_name`, `p_cost`) VALUES
(26, 0, 'hammad3', '1000000'),
(27, 0, 'hammad3', '1000000'),
(28, 0, 'hammad2', '12');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'hammad', 'hammad'),
(2, 'hammad1', '$2y$10$7YljyPE5Te5BTevnZYeQOOFzt750I4LJYqNXfqpgqzjGwC2hA932O'),
(3, 'hammad2', '$2y$10$PneXbqWOg4j61FfoF2gUD.DyvFpsPafw7PJnLD/QGKVoxNKJAvCXa'),
(4, 'hammad3', '$2y$10$iUqu/QqUmSW6NVB1ag62NOvo61Rm2CFe15xGT.3YJMuHnTsux0Uxe'),
(5, 'hammad4', '$2y$10$YvC/689xKt8mNzesemz/r.yQNFLu7c9utn7tM2g3HnDlnjO.CpJJm'),
(6, 'hammad5', '$2y$10$ryN9VcPnM.yEjLMxhj3wteP1KoVS8q8Jp8vgwnONA5nLO2ZIZ0Iw.'),
(7, 'hammad6', '$2y$10$EH2Se.GEUOWnLrsM.HH./.HrsB7GPloyzu2xpSeiyRAhwWxbOU736'),
(8, 'hammad9', '$2y$10$81O/5VrlvyQ0ZVIOygKQB.gZ53G.jMcXBl1RdkdBMDQjXSJ7LoU16'),
(9, 'hammad8', '$2y$10$/M6RkwnG2f6ElZhsMNY.h.26wEo9mvz3vr3ZR7A5VrX3/hmazvfxO'),
(10, 'hamma', '$2y$10$H/3j2lp4O7l5qkK9OqmjtOYILqm54z4RSV2ky87hGvJf/lMuavczq'),
(11, 'hamm', '$2y$10$vXPsWKpjYnB02zX217nVDuJb/9AIgcj1c1B0wlign1b8kc5U4YeKq'),
(12, '$username', '$pass'),
(91, '$username', '$pass'),
(92, 'ha', '$2y$10$sTPdIDDwoFr//cmIqHH1tOPOyB6FEs/XguV8x4.AN/HMHQJG5RR5.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addplayer`
--
ALTER TABLE `addplayer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addplayer`
--
ALTER TABLE `addplayer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
