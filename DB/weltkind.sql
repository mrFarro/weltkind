-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 30 2017 г., 01:55
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `weltkind`
--

-- --------------------------------------------------------

--
-- Структура таблицы `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `name_image` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `descr_image` varchar(255) NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `album`
--

INSERT INTO `album` (`id`, `name_image`, `data`, `descr_image`, `counter`) VALUES
(48, 'album1', '2017-05-01', 'album1                        ', 0),
(49, 'album2       ', '2017-05-02', 'album1                        ', 0),
(50, 'album3       ', '2017-05-03', 'album3                        ', 0),
(51, 'album4', '2017-05-04', ' album4                       ', 0),
(52, 'album5', '2017-05-05', 'album5                        ', 0),
(53, 'album6', '2017-05-06', 'album6                        ', 0),
(54, 'album7', '2017-05-07', 'album7                        ', 0),
(55, 'album8', '2017-05-08', 'album8                        ', 0),
(56, 'album9', '2017-05-09', 'album9                        ', 0),
(57, 'album10', '2017-05-10', 'album10                        ', 0),
(58, 'album11', '2017-05-11', 'album11                   ', 0),
(59, 'album12', '2017-05-12', 'album12                        ', 0),
(60, 'album13', '2017-05-13', 'album13                     ', 0),
(63, 'test', '2017-05-22', 'test																															', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `title`, `path`, `album_id`) VALUES
(18, '', 'Image+1.jpg', 48),
(19, '', 'Image+2.jpg', 49),
(21, '', 'Image+3.jpg', 50),
(22, '', 'Image+4.jpg', 51),
(23, '', 'Image+5.jpg', 52),
(24, '', 'Image+6.jpg', 53),
(25, '', 'Image+7.jpg', 54),
(26, '', 'Image+8.jpg', 55),
(27, '', 'Image+9.jpg', 56),
(36, '', 'germany2.jpg', 35),
(37, '', 'germany3.jpg', 63);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin@weltkind.kg', '123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
