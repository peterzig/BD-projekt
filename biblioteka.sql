-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Sty 2018, 18:12
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL COMMENT 'Klucz główny przydzielony automatycznie',
  `login` varchar(50) COLLATE utf8_polish_ci NOT NULL COMMENT 'Nazwa administratora potrzebna przy logowaniu',
  `haslo` varchar(50) COLLATE utf8_polish_ci NOT NULL COMMENT 'Hasło niezaszyfrowane'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci COMMENT='Posiada informacje o administratorach zarejestrowanych w programie.';

--
-- Zrzut danych tabeli `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `haslo`) VALUES
(1, 'admin', 'admin'),
(2, 'jasiu', 'jasiu'),
(21, 'jurand', 'jurand');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bibliotekarz`
--

CREATE TABLE `bibliotekarz` (
  `id_bibliotekarz` int(11) NOT NULL COMMENT 'Klucz główny przydzielony automatycznie',
  `login` varchar(50) COLLATE utf8_polish_ci NOT NULL COMMENT 'Nazwa bibliotekarza potrzebna przy logowaniu',
  `haslo` varchar(50) COLLATE utf8_polish_ci NOT NULL COMMENT 'Hasło niezaszyfrowane'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci COMMENT='Posiada informacje o bibliotekarzach zarejestrowanych w programie.';

--
-- Zrzut danych tabeli `bibliotekarz`
--

INSERT INTO `bibliotekarz` (`id_bibliotekarz`, `login`, `haslo`) VALUES
(1, 'jaki', 'jaki'),
(3, 'jupi', 'jupi'),
(4, 'jurand', 'jurand'),
(5, 'jopek', 'jopek'),
(6, 'jasiu', 'jasiu'),
(7, 'lolek', 'lolek');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czytelnik`
--

CREATE TABLE `czytelnik` (
  `id_czytelnik` int(11) NOT NULL COMMENT 'Klucz główny przydzielony automatycznie',
  `login` varchar(50) COLLATE utf8_polish_ci NOT NULL COMMENT 'Nazwa czytelnika potrzeba przy logowaniu.',
  `haslo` varchar(45) COLLATE utf8_polish_ci NOT NULL COMMENT 'Hasło niezaszyfrowane',
  `imie` varchar(100) COLLATE utf8_polish_ci NOT NULL COMMENT 'Imię ',
  `nazwisko` varchar(100) COLLATE utf8_polish_ci NOT NULL COMMENT 'Nazwisko',
  `adres` varchar(200) COLLATE utf8_polish_ci NOT NULL COMMENT 'Adres zamieszkania np.: ul. Przykład 3/12',
  `miasto` varchar(45) COLLATE utf8_polish_ci NOT NULL COMMENT 'Miasto',
  `wojewodztwo` varchar(100) COLLATE utf8_polish_ci NOT NULL COMMENT 'Nazwa województwa',
  `telefon` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL COMMENT 'Telefony',
  `kod_pocztowy` varchar(45) COLLATE utf8_polish_ci NOT NULL COMMENT 'Kod pocztowy',
  `email` varchar(100) COLLATE utf8_polish_ci NOT NULL COMMENT 'Adres e-mail'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci COMMENT='Posiada informacje o czytelnikach zarejestrowanych w programie.';

--
-- Zrzut danych tabeli `czytelnik`
--

INSERT INTO `czytelnik` (`id_czytelnik`, `login`, `haslo`, `imie`, `nazwisko`, `adres`, `miasto`, `wojewodztwo`, `telefon`, `kod_pocztowy`, `email`) VALUES
(1, 'jasiu', 'jasiu', 'Jasiu', 'Kowalski', 'Jabłonowa 6/7', 'Katowice', 'śląskie', '123456789', '44-444', 'jasiu@jasiu.org'),
(2, 'hehe', 'heheh', 'eheheh', 'hehehe', 'hehehe', 'hehehe', 'hehehhe', '1231413431', 'hehehe', 'eheheheh');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategoria`
--

CREATE TABLE `kategoria` (
  `id_kategoria` int(11) NOT NULL COMMENT 'Klucz główny przydzielony automatycznie',
  `nazwa` varchar(200) COLLATE utf8_polish_ci NOT NULL COMMENT 'Nazwa kategorii'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci COMMENT='Tabela zawierająca wszystkie kategorie książek w systemie.';

--
-- Zrzut danych tabeli `kategoria`
--

INSERT INTO `kategoria` (`id_kategoria`, `nazwa`) VALUES
(1, 'Erotyka'),
(6, 'Fantasy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazka`
--

CREATE TABLE `ksiazka` (
  `id_ksiazka` int(11) NOT NULL COMMENT 'Klucz główny przydzielony automatycznie',
  `id_kategoria` int(11) NOT NULL COMMENT 'Klucz obcy z tabeli kategoria',
  `isbn` varchar(13) COLLATE utf8_polish_ci NOT NULL COMMENT 'Niepowtarzalny 13-cyfrowy identyfikator książki',
  `tytul` varchar(200) COLLATE utf8_polish_ci NOT NULL COMMENT 'Tytuł książki',
  `autor` varchar(70) COLLATE utf8_polish_ci NOT NULL COMMENT 'Imię i Nazwisko autora książki',
  `stron` int(4) NOT NULL COMMENT 'Liczba stron książki',
  `wydawnictwo` varchar(50) COLLATE utf8_polish_ci NOT NULL COMMENT 'Nazwa wydawnictwa, w którym wydano książkę',
  `rok_wydania` int(4) NOT NULL COMMENT 'Rok wydania książki',
  `opis` text COLLATE utf8_polish_ci COMMENT 'Opis książki'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci COMMENT='Wszystkie książki dodane do bazy danych.';

--
-- Zrzut danych tabeli `ksiazka`
--

INSERT INTO `ksiazka` (`id_ksiazka`, `id_kategoria`, `isbn`, `tytul`, `autor`, `stron`, `wydawnictwo`, `rok_wydania`, `opis`) VALUES
(1, 1, '69', 'Kamasutra', 'Vatsyayana', 69, 'Sex Books', 1999, 'Nie trzeba przedstawiać :)');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id_zamowienie` int(11) NOT NULL COMMENT 'Klucz główny przydzielony automatycznie',
  `id_czytelnik` int(11) NOT NULL COMMENT 'Klucz obcy z tabeli czytelnik',
  `id_ksiazka` int(11) NOT NULL COMMENT 'Klucz obcy z tabeli ksiazka',
  `data_zamowienia` datetime NOT NULL COMMENT 'Data złożenia zamówienia w bibliotece',
  `data_odbioru` datetime DEFAULT NULL COMMENT 'Data odbioru książki z biblioteki ',
  `data_zwrotu` datetime DEFAULT NULL COMMENT 'Data zwrotu książki do biblioteki'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci COMMENT='Posiada informacje o zamówionych, wypożyczonych czy oddanych książkach w bibliotece.';

--
-- Zrzut danych tabeli `zamowienie`
--

INSERT INTO `zamowienie` (`id_zamowienie`, `id_czytelnik`, `id_ksiazka`, `data_zamowienia`, `data_odbioru`, `data_zwrotu`) VALUES
(1, 1, 1, '2018-01-03 00:00:00', '2018-01-16 00:00:00', '2018-01-23 00:00:00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bibliotekarz`
--
ALTER TABLE `bibliotekarz`
  ADD PRIMARY KEY (`id_bibliotekarz`);

--
-- Indexes for table `czytelnik`
--
ALTER TABLE `czytelnik`
  ADD PRIMARY KEY (`id_czytelnik`);

--
-- Indexes for table `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`id_kategoria`);

--
-- Indexes for table `ksiazka`
--
ALTER TABLE `ksiazka`
  ADD PRIMARY KEY (`id_ksiazka`),
  ADD KEY `fk_ksiazka_kategoria1_idx` (`id_kategoria`);

--
-- Indexes for table `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`id_zamowienie`),
  ADD KEY `fk_zamowienie_czytelnik1_idx` (`id_czytelnik`),
  ADD KEY `fk_zamowienie_ksiazka1_idx` (`id_ksiazka`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Klucz główny przydzielony automatycznie', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `bibliotekarz`
--
ALTER TABLE `bibliotekarz`
  MODIFY `id_bibliotekarz` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Klucz główny przydzielony automatycznie', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `czytelnik`
--
ALTER TABLE `czytelnik`
  MODIFY `id_czytelnik` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Klucz główny przydzielony automatycznie', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `id_kategoria` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Klucz główny przydzielony automatycznie', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  MODIFY `id_ksiazka` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Klucz główny przydzielony automatycznie', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `id_zamowienie` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Klucz główny przydzielony automatycznie', AUTO_INCREMENT=2;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  ADD CONSTRAINT `fk_ksiazka_kategoria1` FOREIGN KEY (`id_kategoria`) REFERENCES `kategoria` (`id_kategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD CONSTRAINT `fk_zamowienie_czytelnik1` FOREIGN KEY (`id_czytelnik`) REFERENCES `czytelnik` (`id_czytelnik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_zamowienie_ksiazka1` FOREIGN KEY (`id_ksiazka`) REFERENCES `ksiazka` (`id_ksiazka`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
