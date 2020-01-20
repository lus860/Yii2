-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 20 2020 г., 10:44
-- Версия сервера: 5.6.43
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `surname`, `name`, `created_at`) VALUES
(1, 'Tumanyan', 'Huvhannes', '2020-01-19 08:13:47'),
(2, 'Sahyan', 'Hamo', '2020-01-19 08:13:56'),
(3, 'Dumas', 'Alexandre ', '2020-01-19 08:14:05'),
(4, 'Axayan', 'Xazaros', '2020-01-19 08:14:14'),
(5, 'Bronte', 'Charlotte ', '2020-01-19 08:14:22'),
(6, 'Isahakyan', 'Avetis', '2020-01-19 08:14:30'),
(7, 'Wilde', 'Oscar ', '2020-01-19 08:16:24'),
(8, 'Qristi', 'Agata ', '2020-01-19 08:16:24');

-- --------------------------------------------------------

--
-- Структура таблицы `authors_and_books`
--

CREATE TABLE `authors_and_books` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors_and_books`
--

INSERT INTO `authors_and_books` (`id`, `author_id`, `book_id`, `created_at`) VALUES
(1, 2, 3, NULL),
(2, 5, 3, NULL),
(3, 6, 4, NULL),
(4, 8, 4, NULL),
(5, 3, 6, NULL),
(6, 5, 6, NULL),
(7, 2, 5, NULL),
(8, 4, 7, NULL),
(9, 7, 7, NULL),
(10, 2, 8, NULL),
(11, 3, 8, NULL),
(12, 1, 10, NULL),
(13, 8, 10, NULL),
(14, 1, 12, NULL),
(15, 2, 12, NULL),
(16, 3, 11, NULL),
(17, 5, 11, NULL),
(18, 4, 9, NULL),
(19, 7, 9, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`, `created_at`) VALUES
(3, 'Dgvgvh', '2020-01-19 08:07:39'),
(4, 'Fvgvu', '2020-01-19 08:07:39'),
(5, 'Gghbilh', '2020-01-19 08:08:04'),
(6, 'Hbhbihb', '2020-01-19 08:08:04'),
(7, 'Efcfcvkg', '2020-01-19 08:08:21'),
(8, 'Uhbhbhj', '2020-01-19 08:08:21'),
(9, 'Cvgvhgb', '2020-01-19 08:08:53'),
(10, 'Rvgvhblhj', '2020-01-19 08:08:53'),
(11, 'Xvhbhbj', '2020-01-19 08:09:20'),
(12, 'Bgvuhbilhb', '2020-01-19 08:09:20');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1579382948),
('m191217_190754_create_books_table', 1579382986),
('m191217_190847_create_authors_table', 1579382986),
('m191217_190928_create_authors_and_books_table', 1579382986);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `authors_and_books`
--
ALTER TABLE `authors_and_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authors-author_id` (`author_id`),
  ADD KEY `books-book_id` (`book_id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `authors_and_books`
--
ALTER TABLE `authors_and_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `authors_and_books`
--
ALTER TABLE `authors_and_books`
  ADD CONSTRAINT `authors-author_id` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books-book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
