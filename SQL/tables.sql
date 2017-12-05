-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 05 dec 2017 kl 21:34
-- Serverversion: 5.6.35
-- PHP-version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databas: `BookDB`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `Author`
--

CREATE TABLE `Author` (
  `First name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Last name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `SSN` int(10) DEFAULT NULL,
  `Birthyear` int(4) DEFAULT NULL,
  `Homepage` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ID` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellstruktur `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `reserved` tinyint(1) DEFAULT NULL,
  `duedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `books`
--

INSERT INTO `books` (`bookid`, `title`, `author`, `reserved`, `duedate`) VALUES
(1, 'Mannen som sökte sin skugga', 'David Lagercratz', 0, NULL),
(2, 'Höstdåd', 'Ander De la Motte', 0, NULL),
(3, 'Tio svenskar måste dö', 'Marin Österdahl', 1, NULL),
(4, 'Höstsol', 'Lars Wilderäng', 0, NULL),
(5, '420 1337', 'Queen E', 0, NULL),
(6, 'Gänget', 'Katarina Wennstam', 1, NULL),
(7, 'Skuggan av tvivel', 'Peter Robinson', 0, NULL),
(8, 'Patrioterna', 'Pascal Engman', 1, NULL),
(9, 'Likspett', 'Björn Hellberg', 0, NULL),
(10, 'Coffin Road', 'Peter May', 0, NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('emmaradhall', '77ba9cd915c8e359d9733edcfe9c61e5aca92afb');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;