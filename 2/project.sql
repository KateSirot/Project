-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.0
-- Время создания: Окт 30 2024 г., 13:56
-- Версия сервера: 8.0.35
-- Версия PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Articles`
--

CREATE TABLE `Articles` (
  `ID` int NOT NULL COMMENT 'Номер статьи',
  `Topic_subject` varchar(250) NOT NULL COMMENT 'Заголовок статьи',
  `Excerpt` text NOT NULL COMMENT 'Анонсовое описание статьи',
  `Content` text NOT NULL COMMENT 'Детальное описание статьи',
  `Created_at` date NOT NULL COMMENT 'Дата создания',
  `Updated_at` date NOT NULL COMMENT 'Дата обновления'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Articles`
--

INSERT INTO `Articles` (`ID`, `Topic_subject`, `Excerpt`, `Content`, `Created_at`, `Updated_at`) VALUES
(1, 'jhik', 'njmb', 'bhnvj', '2011-10-20', '2015-02-20'),
(2, 'jhillk', 'njljmb', 'b9hnvj', '2011-12-20', '2021-01-20');

-- --------------------------------------------------------

--
-- Структура таблицы `Article_authors`
--

CREATE TABLE `Article_authors` (
  `Article_id` int NOT NULL COMMENT 'Ссылка на публикацию',
  `Author_id` int NOT NULL COMMENT 'Ссылка на автора'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Таблица помогает упорядочить связи между авторами и статьями';

--
-- Дамп данных таблицы `Article_authors`
--

INSERT INTO `Article_authors` (`Article_id`, `Author_id`) VALUES
(1, 123),
(2, 133);

-- --------------------------------------------------------

--
-- Структура таблицы `Article_sections`
--

CREATE TABLE `Article_sections` (
  `Article_id` int NOT NULL COMMENT 'Ссылка на публикацию',
  `Section_id` int NOT NULL COMMENT 'Ссылка на подраздел'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Таблица помогает упорядочить связи между публ и подразделами';

-- --------------------------------------------------------

--
-- Структура таблицы `Article_tags`
--

CREATE TABLE `Article_tags` (
  `Article_ID` int NOT NULL COMMENT 'Ссылка на публикацию',
  `Tag_ID` int NOT NULL COMMENT 'Ссылка на тег'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Теги нужны для группировки публикаций по темам';

-- --------------------------------------------------------

--
-- Структура таблицы `Authors`
--

CREATE TABLE `Authors` (
  `ID` int NOT NULL COMMENT 'Уникальный идентификатор автора',
  `Name` varchar(250) NOT NULL COMMENT 'Имя автора',
  `Email` varchar(250) NOT NULL COMMENT 'Электронная почта автора ',
  `Text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Authors`
--

INSERT INTO `Authors` (`ID`, `Name`, `Email`, `Text`) VALUES
(123, 'John', 'test@test.com', 'art1'),
(163, 'Brown', 'te2st@test.com', 'art2');

-- --------------------------------------------------------

--
-- Структура таблицы `Comments`
--

CREATE TABLE `Comments` (
  `ID` int NOT NULL COMMENT 'Идентификатор комментария',
  `Visitor_name` varchar(250) NOT NULL COMMENT 'Имя комментатора',
  `Content` text NOT NULL COMMENT 'Текст комментария',
  `Created_at` date NOT NULL COMMENT 'Дата добавления комментария',
  `Article_id` int NOT NULL COMMENT 'Идентификатор статьи, к которой написан комментарий'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Ratings`
--

CREATE TABLE `Ratings` (
  `ID` int NOT NULL,
  `Article_id` int NOT NULL COMMENT 'Ссылка на статью',
  `Visitor_id` int NOT NULL COMMENT 'Ссылка на посетителя, который оставил оценку',
  `Comment_id` int NOT NULL,
  `Rating` int NOT NULL COMMENT 'Оценка, например от 1 до 5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Sections`
--

CREATE TABLE `Sections` (
  `ID` int NOT NULL COMMENT 'Идентификатор подраздела',
  `Name` varchar(250) NOT NULL COMMENT 'Название подраздела'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Tags`
--

CREATE TABLE `Tags` (
  `ID` int NOT NULL COMMENT 'Уникальный идентификатор тега',
  `Name` varchar(250) NOT NULL COMMENT 'Название тега'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Visitors`
--

CREATE TABLE `Visitors` (
  `ID` int NOT NULL,
  `Name` int NOT NULL COMMENT 'Имя посетителя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Articles`
--
ALTER TABLE `Articles`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT 'Номер статьи', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
