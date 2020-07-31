-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 31 2020 г., 06:44
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `username`, `date`, `comment`) VALUES
(16, 'Дмитрий', '2020-07-31 03:04:05', 'Неплохо бы работать программистом и получать хорошие деньги.\r\n'),
(17, 'Николай', '2020-07-31 03:05:32', 'Никола, Николай сиди дома не гуляй.'),
(18, 'Абдурашвили-Али-Бабаевич', '2020-07-31 03:06:34', 'Хорошо заработать деньги и привести их домой в семью.'),
(21, 'Колян', '2020-07-31 03:13:53', 'Колян курить кольян, ни о чем не думает и \r\nнеплохо живет.'),
(22, 'Ярослав', '2020-07-31 03:14:40', 'Здесь комментарии Ярослава, \r\nОн очень их любит собирать.'),
(23, 'Игорь', '2020-07-31 03:18:39', 'Я всю ночь не спал - программировал и программировал. Так можно допрограммироваться.'),
(24, 'Анонимус', '2020-07-31 03:19:54', 'Попробуем вставить теги &lt;br&gt;\r\nЧто из этого получится. '),
(25, 'Владимир', '2020-07-31 03:22:49', 'Добрый день, Владимир Владимирович!\r\nКогда в нашей стране станет хорошо?');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
