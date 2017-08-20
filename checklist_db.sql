-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 aug 2017 om 00:27
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checklist`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `commentsID` int(11) NOT NULL,
  `tasksID` int(11) NOT NULL,
  `usersID` int(11) NOT NULL,
  `message` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `courses`
--

CREATE TABLE `courses` (
  `coursesid` int(11) NOT NULL,
  `coursename` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `courses`
--

INSERT INTO `courses` (`coursesid`, `coursename`) VALUES
(24, 'PHP 1'),
(25, 'Webtechnologie 2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `foreignlists`
--

CREATE TABLE `foreignlists` (
  `foreignID` int(11) NOT NULL,
  `usersID` int(11) NOT NULL,
  `listsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `foreignlists`
--

INSERT INTO `foreignlists` (`foreignID`, `usersID`, `listsID`) VALUES
(50, 1, 34);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lists`
--

CREATE TABLE `lists` (
  `listsID` int(11) NOT NULL,
  `listname` varchar(120) NOT NULL,
  `listowner` varchar(120) NOT NULL,
  `public` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `lists`
--

INSERT INTO `lists` (`listsID`, `listname`, `listowner`, `public`) VALUES
(23, 'Thomas More', '5', 1),
(27, 'PrivÃ©', '5', 0),
(31, 'AFT Leuven', '1', 1),
(33, 'IMD Work', '1', 1),
(34, 'Microsoft', '13', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tasks`
--

CREATE TABLE `tasks` (
  `tasksID` int(11) NOT NULL,
  `taskname` varchar(120) NOT NULL,
  `deadline` varchar(120) NOT NULL,
  `worktime` int(120) NOT NULL,
  `owner` varchar(120) NOT NULL,
  `parentlist` varchar(120) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `course` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tasks`
--

INSERT INTO `tasks` (`tasksID`, `taskname`, `deadline`, `worktime`, `owner`, `parentlist`, `state`, `course`) VALUES
(27, 'Lesmateriaal Verzamelen', '2017-09-22', 15, '5', 'Thomas More', 1, 'Webtechnologie 2'),
(34, 'Herexamens Quoteren', '2017-08-26', 235, '5', 'Thomas More', 1, 'PHP 1'),
(39, 'Meeting KPMG', '2017-08-31', 2, '1', 'AFT Leuven', 1, 'PHP 1'),
(40, 'Preparation Info Event', '2017-09-04', 5, '1', 'AFT Leuven', 0, 'PHP 1'),
(41, 'PHP Tweede Zit', '2017-08-21', 75, '1', 'IMD Work', 0, 'PHP 1'),
(43, 'Fund Checklist ', '2017-08-19', 0, '13', 'Microsoft', 0, 'Webtechnologie 2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `username` varchar(120) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `picture` varchar(120) NOT NULL,
  `type` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`usersID`, `username`, `email`, `picture`, `type`, `password`) VALUES
(1, 'Lorens Huculak', 'huculaklorens@yahoo.com', '12002863_10207868076203257_8465464068991167006_n.jpg', 'Admin', '$2y$10$NBPPHk5KA/sydqldqdE4G.MRZi1T2bevN9PAlU6Kzumj/PIu0fMfS'),
(5, 'Joris Hens', 'joris@thomasmore.be', 'jorispic.png', 'Admin', '$2y$10$n6d/PvdiNDj1/VGLYx/7yOzFq.IiBQz44glmcs5QhDSwPvxjcZ.CK'),
(13, 'Bill Gates', 'huculaklorens@yahoo.com', 'xVAFH9ZH_400x400.jpg', 'Student', '$2y$12$jr6jUFzVZJYOmtn/BEEWLeP3yYzmPdnuTCis/84zfqfF5e3l8wz3i');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentsID`);

--
-- Indexen voor tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`coursesid`);

--
-- Indexen voor tabel `foreignlists`
--
ALTER TABLE `foreignlists`
  ADD PRIMARY KEY (`foreignID`);

--
-- Indexen voor tabel `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`listsID`);

--
-- Indexen voor tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`tasksID`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `commentsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT voor een tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `coursesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT voor een tabel `foreignlists`
--
ALTER TABLE `foreignlists`
  MODIFY `foreignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT voor een tabel `lists`
--
ALTER TABLE `lists`
  MODIFY `listsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT voor een tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `tasksID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
