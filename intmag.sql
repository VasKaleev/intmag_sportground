-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 01 2024 г., 08:25
-- Версия сервера: 8.0.33
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `intmag`
--

-- --------------------------------------------------------

--
-- Структура таблицы `myzakaz`
--

CREATE TABLE `myzakaz` (
  `id` int NOT NULL,
  `fio` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tel` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `datazak` datetime NOT NULL,
  `pokup_tov` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `kol` int NOT NULL,
  `cena` int NOT NULL,
  `sposobdostav` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `nomerzak` int DEFAULT NULL,
  `adrdost` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `oplata` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `myzakaz`
--

INSERT INTO `myzakaz` (`id`, `fio`, `tel`, `email`, `datazak`, `pokup_tov`, `kol`, `cena`, `sposobdostav`, `nomerzak`, `adrdost`, `oplata`) VALUES
(83, 'Василий', '375293202086', 'vkaleev.fam@gmail.com', '2024-03-26 10:40:09', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '2', NULL),
(84, 'калеев', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:07:44', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(85, 'калеев', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:09:06', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(86, 'калеев', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:09:46', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(87, 'Василий', '375293202086', 'kaleev.fam@mail.ru', '2024-03-26 12:11:54', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(88, 'калеев', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:13:30', 'Футболка PSG', 1, 70, 'Почта', NULL, '1', NULL),
(89, 'калеев', '+37529320208', 'vkaleev.fam@gmail.com', '2024-03-26 12:15:09', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(90, 'Василий', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:16:32', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(91, 'калеев', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:17:23', 'Nike Nrg Swoosh Logo', 4, 320, 'Курьерская служба', NULL, 'афываы', NULL),
(92, 'Василий', '+375291675021', 'vkaleev.fam@gmail.com', '2024-03-27 09:36:34', 'Nike Nrg Swoosh Logo', 4, 320, 'Почта', NULL, '3', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `pokup`
--

CREATE TABLE `pokup` (
  `id` int NOT NULL,
  `fio` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tel` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `datazak` datetime NOT NULL,
  `pokup_tov` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `kol` int NOT NULL,
  `cena` int NOT NULL,
  `sposobdostav` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `nomerzak` int DEFAULT NULL,
  `adrdost` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `oplata` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `pokup`
--

INSERT INTO `pokup` (`id`, `fio`, `tel`, `email`, `datazak`, `pokup_tov`, `kol`, `cena`, `sposobdostav`, `nomerzak`, `adrdost`, `oplata`) VALUES
(83, 'Василий', '+37529320208', 'vkaleev.fam@gmail.com', '2024-03-26 10:40:09', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '2', NULL),
(84, 'калеев', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:07:44', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(85, 'калеев', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:09:06', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(86, 'калеев', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:09:46', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(87, 'Василий', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:11:54', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(88, 'калеев', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:13:30', 'Футболка PSG', 1, 70, 'Почта', NULL, '1', NULL),
(89, 'калеев', '+37529320208', 'vkaleev.fam@gmail.com', '2024-03-26 12:15:09', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(90, 'Василий', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:16:32', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Почта', NULL, '1', NULL),
(91, 'калеев', '+37529320208', 'kaleev.fam@mail.ru', '2024-03-26 12:17:23', 'Nike Nrg Swoosh Logo', 4, 320, 'Курьерская служба', NULL, 'афываы', NULL),
(92, 'Василий', '+375291675021', 'vkaleev.fam@gmail.com', '2024-03-27 09:36:34', 'Nike Nrg Swoosh Logo', 4, 320, 'Почта', NULL, '3', NULL),
(93, 'Василий', '+375291675021', 'vkaleev.fam@gmail.com', '2024-03-28 13:24:51', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 4, 320, 'Самовывоз', NULL, '1', NULL),
(94, 'калеев фыфы', '+375291675021', 'vkaleev.fam@gmail.com', '2024-03-28 13:38:07', 'Футболка PSG', 5, 350, 'Самовывоз', NULL, ' г Минск ул ', NULL),
(95, 'калеев', '+37529320208', 'vkaleev.fam@gmail.com', '2024-03-28 13:47:28', 'Футболка 3-stripes Adidas originals', 1, 65, 'Почта', NULL, 'asdfas', NULL),
(96, 'Василий', '+37529320208', 'vkaleev.fam@gmail.com', '2024-03-28 14:27:07', 'Майка Nike Matthew Williams NRG cotton T-SHIRT', 1, 80, 'Самовывоз', NULL, 'Г Минск', NULL),
(97, 'Василий', '+375291675021', 'vkaleev.fam@gmail.com', '2024-04-01 08:00:51', 'ADIDAS ADIBREAK PANT', 4, 440, 'Почта', NULL, 'cfdsf', NULL),
(98, 'Василий', '+375293202086', 'vkaleev.fam@gmail.com', '2024-04-01 08:02:48', 'Футболка PSG', 5, 350, 'Почта', NULL, 'yrtrey', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `user` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pasw` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `user`, `pasw`) VALUES
(1, '9071e0ca7e4964a5cc69201ba2743650', 'f5090d8160b2031c9e2c0a3ecc1bc17b');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `myzakaz`
--
ALTER TABLE `myzakaz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pokup`
--
ALTER TABLE `pokup`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `myzakaz`
--
ALTER TABLE `myzakaz`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT для таблицы `pokup`
--
ALTER TABLE `pokup`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
