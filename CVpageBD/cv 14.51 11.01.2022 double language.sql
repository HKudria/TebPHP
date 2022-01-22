-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 11 2022 г., 14:51
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
  `site_url` varchar(100) NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `name`, `post`, `email`, `phone`, `git`, `linkedIn`, `site`, `site_url`, `lang`) VALUES
(1, 'Herman Kudria', 'software developer', 'herman.kudria@icloud.com', '+48 515-614-690', 'https://github.com/HKudria', 'https://www.linkedin.com/in/herman-kudria-10868b207/', 'cvhermankudria.000webhostapp.com', '/', 'en'),
(2, 'Herman Kudria', 'software developer', 'herman.kudria@icloud.com', '+48 515-614-690', 'https://github.com/HKudria', 'https://www.linkedin.com/in/herman-kudria-10868b207/', 'cvhermankudria.000webhostapp.com', '/', 'pl');

-- --------------------------------------------------------

--
-- Структура таблицы `aboutcareer`
--

CREATE TABLE `aboutcareer` (
  `about_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `aboutcareer`
--

INSERT INTO `aboutcareer` (`about_id`, `description`, `lang`) VALUES
(1, 'Hi, I’m from Ukraine and I moved to Poland five years ago. I graduated from the Cherkasy State Business College as Junior Software Specialist. I’ve been learning PHP at TEB school in Poznan from 2021. Actually I’m looking for a job or internship as PHP Developer. I will do clean_class best to get this job.', 'en'),
(2, 'Cześć, jestem z Ukrainy i przeprowadziłam się do Polski pięć lat temu. Ukończyłem Cherkasy State Business College jako młodszy specjalista ds. oprogramowania. Od 2021 roku uczę się PHP w szkole TEB w Poznaniu. Obecnie szukam pracy lub stażu jako PHP Developer. Zrobię wszystko co w mojej mocy, aby dostać tę pracę.', 'pl');

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
  `duty` varchar(150) NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `careers`
--

INSERT INTO `careers` (`career_id`, `post`, `years`, `place`, `company`, `duty`, `lang`) VALUES
(1, 'Elevator servisman', '11/2020 - current time', 'Poland - Poznan', 'R&S WIND', 'Elevator servisman', 'en'),
(2, 'Floor polisher', '04/2019 - 10/2020', 'All Poland', 'Novego Poland Piotr Kozieł', 'Application and develop different epoxy floors', 'en'),
(4, 'Driver', '06/2017 - 04/2020', 'Poland - Poznan', 'Uber & BOLT', 'Driving with the Uber and BOLT apps', 'en'),
(5, 'Supporter', '06/2015 - 09/2016', 'Ukraine - Cherkasy', 'UCOZ.com', 'Supporting users when creating web pages in that cms', 'en'),
(6, 'Konserwator dźwigów', '11/2020 - obecnie', 'Polska - Poznań', 'R&S WIND', 'Przegląd dźwigów', 'pl'),
(7, 'Posadzkarz', '04/2019 - 10/2020', 'Cala Polska', 'Novego Poland Piotr Kozieł', 'Wylanie i naprawa różnych posadzek epoksydowych', 'pl'),
(8, 'Kierowca', '06/2017 - 04/2020', 'Polska - Poznań', 'Uber & BOLT', 'Przewóz osób za pomocą aplikacji UBER & BOLT', 'pl'),
(9, 'Pracownik wsparcia technicznego', '06/2015 - 09/2016', 'Ukraina - Cherkasy', 'UCOZ.com', 'Wsparcie użytkowników w tworzeniu stron HTML za pomocy danego CMS\r\n\r\n', 'pl');

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
  `yearEnd` varchar(30) NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `educations`
--

INSERT INTO `educations` (`education_id`, `faculty`, `university`, `yearStart`, `yearEnd`, `lang`) VALUES
(1, 'Web-application developer', 'Teb school', 2021, 'current time', 'en'),
(2, 'IT technology', 'University of Poznan', 2018, '2019', 'en'),
(3, 'Software Engineer', 'Cherkasy state Technology University', 2014, ' 2017 - doesn\'t finished', 'en'),
(4, 'Junior Software Engineer', 'Cherkasy state Business College', 2010, '2014', 'en'),
(5, 'Programowanie aplikacji internetowych i moblinych', 'TEB Poznań', 2021, 'obecnie', 'pl'),
(6, 'Informatyka', 'Politechnika Poznanska', 2018, '2019', 'pl'),
(7, 'Informatyka', 'Cherkasy state Technology University', 2014, ' 2017 - przerwa akademiczna', 'pl'),
(8, 'Młodszy inżynier oprogramowania', 'Cherkasy state Business College', 2010, '2014', 'pl');

-- --------------------------------------------------------

--
-- Структура таблицы `interests`
--

CREATE TABLE `interests` (
  `interest_id` int(11) NOT NULL,
  `ineterest` varchar(100) NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `interests`
--

INSERT INTO `interests` (`interest_id`, `ineterest`, `lang`) VALUES
(1, 'Computer science', 'en'),
(2, 'Spend time withs clean_class friends and family', 'en'),
(3, 'Techlogii IT', 'pl'),
(4, 'Spędzać czas z kolegami i rodziną', 'pl');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `language_id` int(11) NOT NULL,
  `language` varchar(30) NOT NULL,
  `level` varchar(100) NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`language_id`, `language`, `level`, `lang`) VALUES
(1, 'English', 'A1 - still learning', 'en'),
(2, 'Polish', 'B1 - professional', 'en'),
(3, 'Ukrainian', 'C1 - native', 'en'),
(4, 'Russian', 'B2 - professional', 'en'),
(5, 'Angielski', 'A1 - w trakcie', 'pl'),
(6, 'Polski', 'B1', 'pl'),
(7, 'Ukrainski', 'C1 - ojczysty', 'pl'),
(8, 'Rosyjski', 'B2', 'pl');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descriprion` text NOT NULL,
  `ulr` varchar(100) NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`project_id`, `name`, `descriprion`, `ulr`, `lang`) VALUES
(1, 'Currently page', 'This page was created as page for introduce myself and show clean_class basic skill at PHP language.', '/', 'en'),
(2, 'Obecna strona', 'Ta strona została stworzona jako strona do przedstawienia się i pokazania moich podstawowych umiejętności w języku PHP.', '/', 'pl');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `aboutcareer`
--
ALTER TABLE `aboutcareer`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `careers`
--
ALTER TABLE `careers`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `educations`
--
ALTER TABLE `educations`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `interests`
--
ALTER TABLE `interests`
  MODIFY `interest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
