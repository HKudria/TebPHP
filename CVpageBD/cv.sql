-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 09 2022 г., 11:57
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cv`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `post` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `git` varchar(100) DEFAULT NULL,
  `linkedIn` varchar(100) DEFAULT NULL,
  `site` varchar(100) DEFAULT NULL,
  `site_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `name`, `post`, `email`, `phone`, `git`, `linkedIn`, `site`, `site_url`) VALUES
(1, 'Herman Kudria', 'softvare developer', 'herman.kudria@icloud.com', '+48 515-614-690', 'https://github.com/HKudria', 'https://www.linkedin.com/in/herman-kudria-10868b207/', 'Currently page', '');

-- --------------------------------------------------------

--
-- Структура таблицы `aboutcareer`
--

CREATE TABLE `aboutcareer` (
  `about_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `aboutcareer`
--

INSERT INTO `aboutcareer` (`about_id`, `description`) VALUES
(1, 'Hi, I’m from Ukraine and I moved to Poland five years ago. I graduated from the Cherkasy State Business College as Junior Software Specialist. I’ve been learning PHP at TEB school in Poznan from 2021. Actually I’m looking for a job or internship as PHP Developer. I will do clean_class best to get this job.');

-- --------------------------------------------------------

--
-- Структура таблицы `careers`
--

CREATE TABLE `careers` (
  `career_id` int(11) NOT NULL,
  `post` varchar(50) NOT NULL,
  `years` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `duty` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `careers`
--

INSERT INTO `careers` (`career_id`, `post`, `years`, `place`, `company`, `duty`) VALUES
(1, 'Elevator servisman', '11/2020 - current time', 'Poland - Poznan', 'R&S WIND', 'Elevator servisman'),
(2, 'Floor polisher', '04/2019 - 10/2020', 'All Poland', 'Novego Poland Piotr Kozieł', 'Application and develop different epoxy floors'),
(4, 'Driver', '06/2017 - 04/2020', 'Poland - Poznan', 'Uber & BOLT', 'Driving with the Uber and BOLT apps'),
(5, 'Supporter', '06/2015 - 09/2016', 'Ukraine - Cherkasy', 'UCOZ.com', 'Supporting users when creating web pages in that cms');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `time_added` datetime DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `company`, `email`, `time_added`) VALUES
(10, 'It\'s my own comments for test database', 'MySelf', 'herman.kudria@icloud.com', '2022-01-09 11:43:04');

-- --------------------------------------------------------

--
-- Структура таблицы `educations`
--

CREATE TABLE `educations` (
  `education_id` int(11) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `yearStart` int(11) NOT NULL,
  `yearEnd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `educations`
--

INSERT INTO `educations` (`education_id`, `faculty`, `university`, `yearStart`, `yearEnd`) VALUES
(1, 'Web-application developer', 'Teb school', 2021, 'current time'),
(2, 'IT technology', 'University of Poznan', 2018, '2019'),
(3, 'Software Engineer', 'Cherkasy state Technology University', 2014, ' 2017 - doesn\'t finished'),
(4, 'Junior Software Engineer', 'Cherkasy state Business College', 2010, '2014');

-- --------------------------------------------------------

--
-- Структура таблицы `interests`
--

CREATE TABLE `interests` (
  `interest_id` int(11) NOT NULL,
  `ineterest` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `interests`
--

INSERT INTO `interests` (`interest_id`, `ineterest`) VALUES
(1, 'Computer science'),
(2, 'Spend time withs clean_class friends and family');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `language_id` int(11) NOT NULL,
  `language` varchar(30) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`language_id`, `language`, `level`) VALUES
(1, 'English', 'A1 - still learning'),
(2, 'Polish', 'B1 - professional'),
(3, 'Ukrainian', 'C1 - native'),
(4, 'Russian', 'B2 - professional');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descriprion` text NOT NULL,
  `ulr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`project_id`, `name`, `descriprion`, `ulr`) VALUES
(1, 'Currently page', 'This page was created as page for introduce myself and show clean_class basic skill at PHP language.', '/');

-- --------------------------------------------------------

--
-- Структура таблицы `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `skills`
--

INSERT INTO `skills` (`skill_id`, `name`, `level`) VALUES
(1, 'PHP', 50),
(2, 'Laravel', 20),
(3, 'HTML & CSS', 60),
(4, 'Photoshop', 60),
(5, 'Java', 50);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `aboutcareer`
--
ALTER TABLE `aboutcareer`
  ADD PRIMARY KEY (`about_id`);

--
-- Индексы таблицы `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`career_id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Индексы таблицы `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`education_id`);

--
-- Индексы таблицы `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`interest_id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`language_id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Индексы таблицы `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `aboutcareer`
--
ALTER TABLE `aboutcareer`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `careers`
--
ALTER TABLE `careers`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `educations`
--
ALTER TABLE `educations`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `interests`
--
ALTER TABLE `interests`
  MODIFY `interest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
