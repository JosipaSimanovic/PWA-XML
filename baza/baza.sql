-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 11:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `korisnicko_ime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `lozinka` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'josipa', 'simanovic', 'admin', '$2y$10$98p3IL/hnLkIOOX8WDZS1uZymoa31VyKeFaG7k91ffkyNOZ6YHkA2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `short` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `content` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `category` varchar(32) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `image` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `do_show` int(1) NOT NULL,
  `grade` int(11) NOT NULL,
  `date` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `title`, `short`, `content`, `category`, `image`, `do_show`, `grade`, `date`) VALUES
(2, 'testna', 'evo', 'ovo će biti neki veliki tekst', 'moda', 'JosipaSimanovicVJ3_1.jpg', 1, 4, '22-04-2020'),
(3, 'testna', 'evo', 'ovo će biti neki veliki tekst', 'moda', 'JosipaSimanovicVJ3_1.jpg', 1, 4, '22 04 2020'),
(4, 'testna', 'evo', 'ovo će biti neki veliki tekst', 'moda', 'JosipaSimanovicVJ3_1.jpg', 1, 4, '22.04.2020'),
(5, 'testna', 'evo', 'ovo će biti neki veliki tekst', 'moda', 'JosipaSimanovicVJ3_1.jpg', 1, 4, '22.04.2020'),
(6, 'connect', 'sdfg', 'sdsfghjkilč', 'vijesti', 'JosipaSimanovicVJ2_3_4.jpg', 1, 4, '22.04.2020'),
(8, 'sport', 'short sport', 'asdfghjkiolčpćasdfghjkl', 'sport', 'JosipaSimanovicVJ2_1_1.jpg', 1, 4, '22.04.2020'),
(9, 'sport', 'short sport', 'asdfghjkiolčpćasdfghjkl', 'sport', 'JosipaSimanovicVJ2_1_1.jpg', 1, 4, '22.04.2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
