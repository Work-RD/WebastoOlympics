-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 01:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inscrieri`
--

-- --------------------------------------------------------

--
-- Table structure for table `conturi`
--

CREATE TABLE `conturi` (
  `Cont` varchar(50) NOT NULL,
  `Parolă` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conturi`
--

INSERT INTO `conturi` (`Cont`, `Parolă`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `înscrieri`
--

CREATE TABLE `înscrieri` (
  `Id` int(6) UNSIGNED NOT NULL,
  `Nume` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `Prenume` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `Telefon` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Departament` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `Sport` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `Dată_Înregistrare` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `înscrieri`
--

INSERT INTO `înscrieri` (`Id`, `Nume`, `Prenume`, `Telefon`, `Email`, `Departament`, `Sport`, `Dată_Înregistrare`) VALUES
(1, 'Pop', 'Calin', '0742658912', 'pop.calin@yahoo.com', 'Quality internal and customer', 'Minifotbal Victoria ', '2021-02-26 12:32:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `înscrieri`
--
ALTER TABLE `înscrieri`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `înscrieri`
--
ALTER TABLE `înscrieri`
  MODIFY `Id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
