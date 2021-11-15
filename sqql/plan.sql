-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Lis 2021, 14:27
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `chuj`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plan`
--

CREATE TABLE `plan` (
  `ID` int(11) NOT NULL,
  `dzien` int(11) NOT NULL,
  `nr` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `sala` varchar(30) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `plan`
--

INSERT INTO `plan` (`ID`, `dzien`, `nr`, `nazwa`, `sala`) VALUES
(2, 1, 4, 'Matematyka', '304'),
(3, 1, 5, 'Matematyka', '304'),
(4, 1, 6, 'Pracownia programowania', '229'),
(5, 1, 7, 'Pracownia programowania', '229'),
(6, 1, 8, 'Pracownia programowania', '229'),
(7, 1, 9, 'Pracownia programowania', '229'),
(9, 2, 2, 'Matematyka', '322'),
(10, 2, 3, 'WF', 'wf'),
(11, 2, 4, 'Systemy baz', '230'),
(12, 2, 5, 'Jezyk polski', '311'),
(13, 2, 6, 'Jezyk polski', '311'),
(14, 2, 7, 'Witryny', '230'),
(15, 2, 8, 'Witryny', '230'),
(16, 3, 2, 'Wychowawcza', '311'),
(17, 3, 3, 'Informatyka', '230'),
(18, 3, 4, 'Systemy baz', '230'),
(19, 3, 5, 'Historia', '314'),
(20, 3, 6, 'Administracja bazami', '231'),
(21, 3, 7, 'Administracja bazami', '231'),
(22, 3, 8, 'Administracja bazami', '231'),
(25, 4, 3, 'Religia', 'rel'),
(26, 4, 4, 'Przedsiebiorstwo', '114'),
(27, 4, 5, 'Jezyk angielski', '320'),
(29, 5, 1, 'Systemy baz', '230'),
(30, 5, 2, 'Systemy baz', '230'),
(31, 5, 3, 'Witryny', '230'),
(32, 5, 4, 'Witryny', '230'),
(33, 5, 5, 'Historia', '314'),
(34, 5, 6, 'Pracownia programowania', '229'),
(35, 5, 7, 'Pracownia programowania', '229'),
(36, 5, 8, 'Pracownia programowania', '229'),
(37, 5, 9, 'Pracownia programowania', '229');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `plan`
--
ALTER TABLE `plan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
