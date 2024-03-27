-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Mar 2024, 11:48
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kuchnia1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kuchnia1`
--

CREATE TABLE `kuchnia1` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(36) DEFAULT NULL,
  `kategoria` varchar(12) DEFAULT NULL,
  `kuchnie` varchar(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `ocena` varchar(5) DEFAULT NULL,
  `instrukcje` varchar(26) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kuchnia1`
--

INSERT INTO `kuchnia1` (`id`, `nazwa`, `kategoria`, `kuchnie`, `data`, `ocena`, `instrukcje`) VALUES
(1, 'Pierogi z mięsem', 'deser', 'włoska', '2024-01-02', '8/10', 'Posyp startym serem'),
(2, 'Kotlet schabowy z ziemniakami', 'zupa', 'włoska', '2023-06-01', '6/10', 'Dopraw solą i pieprzem'),
(3, 'Sałatka grecka', 'deser', 'francuska', '2023-05-30', '7/10', 'Odstaw do ostygnięcia'),
(4, 'Kurczak curry z ryżem', 'danie główne', 'meksykańska', '2024-03-03', '5/10', 'Posyp startym serem'),
(5, 'Spaghetti bolognese', 'zupa', 'hiszpańska', '2023-03-19', '10/10', 'Wymieszaj składniki'),
(6, 'Krem z dyni', 'zupa', 'turecka', '2023-04-19', '5/10', 'Dopraw solą i pieprzem'),
(7, 'Kanapki z łososiem', 'deser', 'grecka', '2023-09-15', '5/10', 'Podgrzej piekarnik'),
(8, 'Kotlet mielony z puree ziemniaczanym', 'danie główne', 'indyjska', '2023-10-18', '3/10', 'Odstaw do ostygnięcia'),
(9, 'Zupa pomidorowa z makaronem', 'zupa', 'grecka', '2023-08-18', '8/10', 'Podgrzej piekarnik'),
(10, 'Pieczone warzywa z kurczakiem', 'deser', 'japońska', '2023-04-03', '3/10', 'Gotuj na wolnym ogniu'),
(11, 'gibibgfjbfi', 'zupa', '', '2000-02-20', '', '12414'),
(12, 'gibibgfjbfi', 'zupa', '', '2000-02-20', '', '12414'),
(13, 'kanpka', 'zupa', '', '2000-02-20', '', 'QSFQ'),
(14, 'kanpka', 'zupa', '', '2000-02-20', '', 'QSFQ'),
(15, 'kanpka', 'zupa', '', '2000-02-20', '', 'QSFQ'),
(16, 'kanapka', 'danie-glowne', '', '2111-03-20', '5/10', '42eaffasdf'),
(17, 'qwfqwfqwfqwfw', 'zupa', '', '2344-05-31', '8/10', 'fasfaffa'),
(18, 'pieczony orzel', 'danie-glowne', 'kuchnia_pol', '2024-03-20', '10/10', 'upiec orla'),
(29, 'fd bzb', 'deser', 'kuchnia_wło', '8888-03-04', '10/10', 'eyreyr');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kuchnia1`
--
ALTER TABLE `kuchnia1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kuchnia1`
--
ALTER TABLE `kuchnia1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
