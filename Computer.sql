-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 19 2023 г., 03:20
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Computer`
--

CREATE TABLE `Computer` (
  `id` int NOT NULL,
  `NamePC` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `escription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `NamePicture` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Таблица с ПК, его ценой, описанием и названием картинки ';

--
-- Дамп данных таблицы `Computer`
--

INSERT INTO `Computer` (`id`, `NamePC`, `Category`, `price`, `escription`, `NamePicture`) VALUES
(1, '123', '123', 123, '123', 123),
(2, '123', '123', 123, '123', 123);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Computer`
--
ALTER TABLE `Computer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Computer`
--
ALTER TABLE `Computer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
