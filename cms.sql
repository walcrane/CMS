-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Wrz 2020, 18:05
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cms`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uri` varchar(255) NOT NULL DEFAULT 'UNIQUE',
  `content` mediumtext NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_desc` varchar(255) NOT NULL,
  `seo_robots` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `page`
--

INSERT INTO `page` (`id`, `name`, `uri`, `content`, `seo_title`, `seo_desc`, `seo_robots`) VALUES
(1, 'Strona główna', '/', '<div class=\"container-fluid py-5 bg-dark text-light\">\r\n        <div class=\"row welcome text-center\">\r\n            <div class=\"col-12\">\r\n                <h2>Lorem ipsum dolor sit.</h2>\r\n            </div>\r\n            <hr>\r\n            <div class=\"col-12\">\r\n                <p class=\"lead\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur cum fugiat mollitia aut. Commodi placeat facere ratione ipsa voluptates, eum corporis aliquid, adipisci reprehenderit praesentium nesciunt. Enim omnis consequatur sint!</p>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"container-fluid py-3 bg-light text-dark\">\r\n        <div class=\"row text-center padding\">\r\n            <div class=\"col-12 text-center pb-2\">\r\n                <h2><a href=\"\">Oferta</a></h2>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-6 col-md-4 zajawka\">\r\n                <img class=\"img-thumbnail\" src=\"img/zajawka.jpg\" alt=\"Jesień\">\r\n                <h3>Oferta 1</h3>\r\n                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur impedit quis, est asperiores\r\n                    quae quod.</p>\r\n            </div>\r\n            <div class=\"col-xs-12 col-sm-6 col-md-4 zajawka\">\r\n                <img class=\"img-thumbnail\" src=\"img/zajawka.jpg\" alt=\"Jesień\">\r\n                <h3>Oferta 2</h3>\r\n                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur impedit quis, est asperiores\r\n                    quae quod.</p>\r\n            </div>\r\n            <div class=\"col-sm-12 col-md-4 zajawka\">\r\n                <img class=\"img-thumbnail\" src=\"img/zajawka.jpg\" alt=\"Jesień\">\r\n                <h3>Oferta 3</h3>\r\n                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur impedit quis, est asperiores\r\n                    quae quod.</p>\r\n            </div>\r\n\r\n        </div>\r\n        <hr class=\"my-4 zaj-hr\">\r\n    </div>\r\n    <div class=\"container-fluid py-5\">\r\n        <div class=\"row py-5\">\r\n            <div class=\"col-md-12 col-lg-6\">\r\n                <h2>Zapraszam na bloga</h2>\r\n                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, consequuntur.</p>\r\n                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure unde saepe, in nam totam qui.</p>\r\n                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dignissimos temporibus corporis\r\n                    tempora. Facere odit, sint eaque ex minus numquam.</p>\r\n                <br>\r\n                <a href=\"#\" class=\"btn btn-outline-dark\">Sprawdź</a>\r\n            </div>\r\n            <div class=\"col-lg-6\">\r\n                <img src=\"img/desk.png\" class=\"img-fluid\" alt=\"Biurko\">\r\n            </div>\r\n        </div>\r\n    </div>', 'Super strona', 'Super opis strony', 'index, follow'),
(2, 'O nas', 'o-nas', 'Tutaj content strony o nas', 'O nas', 'DESC O NAS', 'noindex, follow');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UQ_uri` (`uri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
