-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2022 at 10:18 AM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `fve`
--

-- --------------------------------------------------------

--
-- Table structure for table `wattrouter_stat_day`
--

CREATE TABLE `wattrouter_stat_day` (
  `id` bigint(20) NOT NULL,
  `datum` date NOT NULL,
  `cas` time NOT NULL,
  `sds1` decimal(10,2) NOT NULL,
  `sdh1` decimal(10,2) NOT NULL,
  `sdl1` decimal(10,2) NOT NULL,
  `sdp1` decimal(10,2) NOT NULL,
  `sds2` decimal(10,2) NOT NULL,
  `sdh2` decimal(10,2) NOT NULL,
  `sdl2` decimal(10,2) NOT NULL,
  `sdp2` decimal(10,2) NOT NULL,
  `sds3` decimal(10,2) NOT NULL,
  `sdh3` decimal(10,2) NOT NULL,
  `sdl3` decimal(10,2) NOT NULL,
  `sdp3` decimal(10,2) NOT NULL,
  `sds4` decimal(10,2) NOT NULL,
  `sdh4` decimal(10,2) NOT NULL,
  `sdl4` decimal(10,2) NOT NULL,
  `sdp4` decimal(10,2) NOT NULL,
  `sdo1` decimal(10,2) NOT NULL,
  `sdo2` decimal(10,2) NOT NULL,
  `sdo3` decimal(10,2) NOT NULL,
  `sdo4` decimal(10,2) NOT NULL,
  `sdo5` decimal(10,2) NOT NULL,
  `sdo6` decimal(10,2) NOT NULL,
  `sdo7` decimal(10,2) NOT NULL,
  `sdo8` decimal(10,2) NOT NULL,
  `sdo9` decimal(10,2) NOT NULL,
  `sdo10` decimal(10,2) NOT NULL,
  `sdo11` decimal(10,2) NOT NULL,
  `sdo12` decimal(10,2) NOT NULL,
  `sdo13` decimal(10,2) NOT NULL,
  `sdo14` decimal(10,2) NOT NULL,
  `sdi1` decimal(10,2) NOT NULL,
  `sdi2` decimal(10,2) NOT NULL,
  `sdi3` decimal(10,2) NOT NULL,
  `sdi4` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data for table `wattrouter_stat_day`
--

INSERT INTO `wattrouter_stat_day` (`id`, `datum`, `cas`, `sds1`, `sdh1`, `sdl1`, `sdp1`, `sds2`, `sdh2`, `sdl2`, `sdp2`, `sds3`, `sdh3`, `sdl3`, `sdp3`, `sds4`, `sdh4`, `sdl4`, `sdp4`, `sdo1`, `sdo2`, `sdo3`, `sdo4`, `sdo5`, `sdo6`, `sdo7`, `sdo8`, `sdo9`, `sdo10`, `sdo11`, `sdo12`, `sdo13`, `sdo14`, `sdi1`, `sdi2`, `sdi3`, `sdi4`) VALUES
(1, '2022-09-28', '10:30:05', '0.15', '0.00', '0.49', '2.60', '0.15', '0.00', '1.67', '2.68', '0.13', '0.00', '3.38', '2.68', '0.42', '0.00', '5.54', '7.96', '1.38', '1.15', '0.48', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2.60', '2.68', '2.68', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wattrouter_stat_day`
--
ALTER TABLE `wattrouter_stat_day`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wattrouter_stat_day`
--
ALTER TABLE `wattrouter_stat_day`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;
