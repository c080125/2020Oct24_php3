-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 29, 2020 at 01:18 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'ごんぎつね', 'Urashima', 'Taro', 1, 1),
(2, '金太郎', 'www', 'oooo', 0, 0),
(3, '田中角栄', 'Tanaka', 'Kakuei', 0, 0),
(4, '田中角栄', 'Tanaka', 'Kakuei', 0, 0),
(5, '田中角栄', 'Tanaka', 'Kakuei', 0, 0),
(6, '田中角栄', 'Tanaka', 'Kakuei', 0, 0),
(7, '田中角栄', 'Tanaka', 'Kakuei', 0, 0),
(8, '田中角栄', 'Tanaka', 'Kakuei', 0, 0),
(9, '田中角栄', 'Tanaka', 'Kakuei', 0, 0),
(10, '田中角栄', 'Tanaka', 'Kakuei', 0, 0),
(11, '田中角栄', 'Tanaka', 'Kakuei', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
