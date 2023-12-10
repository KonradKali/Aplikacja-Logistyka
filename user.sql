-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Lut 2022, 17:49
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `user`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `addimg`
--

CREATE TABLE `addimg` (
  `id` int(11) NOT NULL,
  `rodzaj` varchar(225) DEFAULT NULL,
  `opis` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `addimg`
--

INSERT INTO `addimg` (`id`, `rodzaj`, `opis`, `image`) VALUES
(44, 'dsadad', 'dsada', 'image/1000_01_01__330ml__1szt__330_miniaturka_1.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `doc`
--

CREATE TABLE `doc` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Opis` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `doc`
--

INSERT INTO `doc` (`id`, `data`, `Opis`, `doc`) VALUES
(12, '2022-01-17 13:17:49', '', 'doc/cmrnad (4).docx'),
(14, '2022-01-18 18:12:43', 'siema', 'doc/cmrprze (2).docx');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Imie` varchar(50) NOT NULL,
  `Nazwisko` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `login`
--

INSERT INTO `login` (`id`, `Imie`, `Nazwisko`, `username`, `password`, `usertype`) VALUES
(1, '', '', 'admin', '1234', 'admin'),
(2, '', '', 'user', '1234', 'user'),
(3, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(4, 'Imie', 'Nazwisko]', 'username', 'password', 'usertype]'),
(5, 'dada', 'dada', 'dadada', 'dada', 'user'),
(6, 'dada', 'dada', 'dadada', 'dada', ''),
(7, 'dada', 'dada', 'dadada', 'dada', 'user'),
(8, 'dada', 'dada', 'dadada', 'dada', 'user'),
(9, 'Marek', 'Kowalski', 'Marek15', '1234', 'user'),
(10, 'Michał', 'Kowalski', 'Michal15', '1234', 'user'),
(11, 'Mateusz', 'Gołąb', 'Mati123', '1234', 'user'),
(12, 'michał', 'dawid', 'dada', 'dada', 'user'),
(13, 'michał', 'małac', 'michal14', '1234', 'user'),
(14, 'kacper', 'macper', 'kacper12', '1234', 'user'),
(15, 'hubert', 'hubert', 'hubert12', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`id`, `msg`, `username`, `date`) VALUES
(2, 'dsada', 'admin', '2022-01-25 17:15:05'),
(3, 'dsada', 'Marek15', '2022-01-25 17:15:38');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `addimg`
--
ALTER TABLE `addimg`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `addimg`
--
ALTER TABLE `addimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT dla tabeli `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
