-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 09:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolioproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bedrijfsnaam` varchar(30) NOT NULL,
  `plaats` varchar(30) NOT NULL,
  `adres` varchar(40) NOT NULL,
  `postcode` varchar(30) NOT NULL,
  `telefoonnumber` int(30) NOT NULL,
  `onderwerp` varchar(50) NOT NULL,
  `beschrijving` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `naam`, `email`, `bedrijfsnaam`, `plaats`, `adres`, `postcode`, `telefoonnumber`, `onderwerp`, `beschrijving`) VALUES
(1, 'HlaHla', 'hlahlathein@gmail.com', 'Microsoft', 'Haarlem', 'Teylerstraat', '2032SR', 2147483647, 'sadgfds', 'fhdgfj'),
(2, 'HlaHla', 'hlahlathein@gmail.com', 'Microsoft', 'Haarlem', 'Teylerstraat', '2032SR', 2147483647, 'sadgfds', 'fhdgfj'),
(3, 'simone', 'simone@gmail.com', 'Nova', 'Haarlem', 'Teylerstraat 22', '2032SR', 2147483647, 'dsagdf', 'cvnbkvbopinkmp[');

-- --------------------------------------------------------

--
-- Table structure for table `opleidingen`
--

CREATE TABLE `opleidingen` (
  `ID` int(11) NOT NULL,
  `images` varchar(70) NOT NULL,
  `opleidingnaam` varchar(50) NOT NULL,
  `plaatsnaam` varchar(90) NOT NULL,
  `datumn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opleidingen`
--

INSERT INTO `opleidingen` (`ID`, `images`, `opleidingnaam`, `plaatsnaam`, `datumn`) VALUES
(1, 'images/NovaColledge.png', 'Software Developer', 'Nova College Haarlem', '2020 Aug - heden'),
(2, 'images/Azure.png', 'Azure Administrator', 'Microsoft', '2019 Juli - 2019 Okt'),
(3, 'images/Ms.net.jpg', 'MS.Net Programming', 'IMCEITS, in Myanmar', '2011 - 2012'),
(4, 'images/computer science2.jpg', 'Computer Science:Basis', 'Universiteit van Computer Studies UCSY, Yangon, Myanmar', '2006 - 2009'),
(5, 'images/computer science1.jpg', 'Computer Science:Gevorderd', 'Universiteit van Computer Studies UCSY, Yangon, Myanmar', '2009 - 2010');

-- --------------------------------------------------------

--
-- Table structure for table `projecten`
--

CREATE TABLE `projecten` (
  `ID` int(11) NOT NULL,
  `projecticon` varchar(30) NOT NULL,
  `projectnaam` varchar(30) NOT NULL,
  `beschrijving` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projecten`
--

INSERT INTO `projecten` (`ID`, `projecticon`, `projectnaam`, `beschrijving`) VALUES
(1, 'fas fa-paint-brush', 'PHP EN SQL', 'Voor PHP heb ik registeren pagina, login pagina en het dashboard met SQL database gemaakt. En testen ook.'),
(2, 'fas fa-chart-line', 'C#', 'Voor C# heb ik ganzenboard, Hangman, vier op een rij, tic tac toe, memory, bingo, ect gemaakt.'),
(3, 'fas fa-code', 'HTML/CSS', 'Ik heb de projecten met html / CSS gedaan zoals portfolio en Haarlem-promotie.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `ID` int(11) NOT NULL,
  `skillnaam` varchar(30) NOT NULL,
  `percentages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`ID`, `skillnaam`, `percentages`) VALUES
(1, 'HTML', 70),
(2, 'CSS', 40),
(3, 'C#', 55),
(4, 'PHP', 30),
(5, 'Python', 25),
(6, 'MySQL', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `opleidingen`
--
ALTER TABLE `opleidingen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `opleidingen`
--
ALTER TABLE `opleidingen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projecten`
--
ALTER TABLE `projecten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
