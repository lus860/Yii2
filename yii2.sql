-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 08 2020 г., 09:57
-- Версия сервера: 5.7.25
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
  `surname` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `surname`, `name`, `created_at`) VALUES
(10, 'Sahyan', 'Hamo', '2019-12-19 11:43:33'),
(11, 'Kaputikyan', 'Silva', '2019-12-19 11:43:33'),
(12, 'Shiraz', 'Hovhannes', '2019-12-19 11:44:46'),
(13, 'Matevosyan', 'Hrant', '2019-12-19 11:44:46'),
(14, 'Tumanyan', 'Hovhannes', '2019-12-19 19:29:24'),
(15, 'Axayan', 'Xazaros', '2019-12-24 13:13:52'),
(16, 'Wilde ', 'Oscar', '2019-12-25 09:31:22'),
(17, 'Bronte ', 'Charlotte', '2019-12-25 09:32:54'),
(18, 'Duma', 'Aleksandr ', '2019-12-25 09:33:59'),
(19, 'Austen', 'Jane ', '2019-12-25 09:38:27');

-- --------------------------------------------------------

--
-- Структура таблицы `authors_and_books`
--

CREATE TABLE `authors_and_books` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors_and_books`
--

INSERT INTO `authors_and_books` (`id`, `author_id`, `book_id`, `created_at`) VALUES
(35, 10, 129, '2020-01-06 18:34:42'),
(36, 13, 129, '2020-01-06 18:34:42'),
(37, 13, 130, '2020-01-06 18:35:04'),
(38, 15, 130, '2020-01-06 18:35:04'),
(39, 12, 131, '2020-01-06 18:35:17'),
(40, 15, 132, '2020-01-06 18:35:31'),
(41, 11, 133, '2020-01-06 18:35:52'),
(42, 19, 133, '2020-01-06 18:35:52'),
(43, 17, 134, '2020-01-06 18:36:35'),
(44, 18, 134, '2020-01-06 18:36:35'),
(45, 16, 135, '2020-01-06 18:36:52'),
(46, 12, 136, '2020-01-06 18:37:03'),
(47, 14, 137, '2020-01-06 18:37:23'),
(48, 11, 138, '2020-01-06 18:37:34'),
(49, 13, 139, '2020-01-06 18:37:45'),
(50, 12, 141, '2020-01-06 18:38:26'),
(51, 15, 141, '2020-01-06 18:38:26'),
(52, 11, 140, '2020-01-06 18:38:44'),
(53, 13, 142, '2020-01-06 18:39:03'),
(54, 10, 146, '2020-01-06 18:39:22'),
(55, 11, 146, '2020-01-06 18:39:22'),
(56, 18, 143, '2020-01-06 18:39:45'),
(57, 15, 144, '2020-01-06 18:40:00'),
(58, 12, 145, '2020-01-06 18:40:23'),
(59, 14, 145, '2020-01-06 18:40:23'),
(60, 12, 130, '2020-01-08 06:40:22');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`, `created_at`) VALUES
(129, 'Gguhijhoi', '2020-01-06 18:31:29'),
(130, 'Vhsbxjskn', '2020-01-06 18:31:29'),
(131, 'Gguhijhoi', '2020-01-06 18:31:34'),
(132, 'Vhsbxjskn', '2020-01-06 18:31:34'),
(133, 'Fnjnj', '2020-01-06 18:32:00'),
(134, 'Hbvjknv', '2020-01-06 18:32:00'),
(135, 'Fnjnj', '2020-01-06 18:32:03'),
(136, 'Hbvjknv', '2020-01-06 18:32:03'),
(137, 'Msdvjdnf', '2020-01-06 18:32:18'),
(138, 'Ocndjvnef', '2020-01-06 18:32:18'),
(139, 'Msdvjdnf', '2020-01-06 18:32:21'),
(140, 'Ocndjvnef', '2020-01-06 18:32:21'),
(141, 'Pnsdklvnd', '2020-01-06 18:32:48'),
(142, 'Khgtrjgn', '2020-01-06 18:32:48'),
(143, 'Ybjbjhn', '2020-01-06 18:33:09'),
(144, 'Rvhb', '2020-01-06 18:33:09'),
(145, 'Ybjbjhn', '2020-01-06 18:33:15'),
(146, 'Rvhb', '2020-01-06 18:33:15');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1576580809),
('m191217_190754_create_books_table', 1576614274),
('m191217_190847_create_authors_table', 1576614274),
('m191217_190928_create_authors_and_books_table', 1576614274);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `authors_and_books`
--
ALTER TABLE `authors_and_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

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
