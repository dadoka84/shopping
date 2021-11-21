-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2021 at 12:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `ID` int(11) NOT NULL,
  `Vrsta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Boja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Velicina` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Karakteristike` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Slika` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cijena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`ID`, `Vrsta`, `Boja`, `Velicina`, `Karakteristike`, `Slika`, `Cijena`) VALUES
(1, 'majica', 'Crna', 'XL', 'Super crna xl majica', 'images/crna.jpg', 20),
(2, 'majica', 'Crna', 'L', 'Super crna l majica', 'images/crna.jpg', 18),
(3, 'majica', 'Crna', 'M', 'Super crna m majica', 'images/crna.jpg', 16),
(4, 'majica', 'Bijela', 'M', 'Super bijela m majica', 'images/bijela.jpg', 15),
(5, 'majica', 'Bijela', 'L', 'Super bijela l majica', 'images/bijela.jpg', 17),
(6, 'majica', 'Bijela', 'XL', 'Super bijela xl majica', 'images/bijela.jpg', 19),
(7, 'majica', 'Bijela', 'XXL', 'Super bijela xxl majica', 'images/bijela.jpg', 15),
(8, 'majica', 'Crvena', 'M', 'Super crvena m majica', 'images/crvena.jpg', 17),
(9, 'majica', 'Crvena', 'L', 'Super crvena l majica', 'images/crvena.jpg', 19),
(10, 'majica', 'Crvena', 'XL', 'Super crvena xl majica', 'images/crvena.jpg', 21),
(11, 'majica', 'Crvena', 'XXL', 'Super crvena xxl majica', 'images/crvena.jpg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `Ime` varchar(200) DEFAULT NULL,
  `Prezime` varchar(200) DEFAULT NULL,
  `Mobilni` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Adresa` mediumtext DEFAULT NULL,
  `slika` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `Ime`, `Prezime`, `Mobilni`, `Email`, `Adresa`, `slika`) VALUES
(1, 'damir', 'kadric', 61367639, 'dadoka@gmail.com', 'pijacna 94e', 'users/1.jpg'),
(2, 'Samir', 'kadic', 61222222, 'dadoka@gmail.com', 'pijacna 1', 'users/3.jpg'),
(3, 'azra', 'kadric', 61111222, 'azra.becirovic@stu.ibu.edu.ba', 'bojnicka 1', 'users/2.jpg'),
(4, 'john', 'simmons', 61222333, 'dadoka@gmail.com', 'bruklin 34', 'users/4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
