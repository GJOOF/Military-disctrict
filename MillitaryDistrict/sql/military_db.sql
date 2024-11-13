-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 13 2024 г., 21:01
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
-- База данных: `military_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `base`
--

CREATE TABLE `base` (
  `base_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `buildings` int DEFAULT NULL,
  `units` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `base`
--

INSERT INTO `base` (`base_id`, `name`, `buildings`, `units`) VALUES
(1, 'Владикавказ', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Building`
--

CREATE TABLE `Building` (
  `id` int NOT NULL,
  `building_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Building`
--

INSERT INTO `Building` (`id`, `building_type`) VALUES
(1, 'Штаб'),
(2, 'Казарма'),
(3, 'Склад боеприпасов'),
(4, 'Командный пункт'),
(5, 'Учебный корпус');

-- --------------------------------------------------------

--
-- Структура таблицы `Soldier`
--

CREATE TABLE `Soldier` (
  `soldier_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `military_rank` varchar(255) NOT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `unit_id` int DEFAULT NULL,
  `commander` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Soldier`
--

INSERT INTO `Soldier` (`soldier_id`, `name`, `military_rank`, `speciality`, `unit_id`, `commander`) VALUES
(1, 'Иван Петров', 'Полковник', 'Пехота', 1, NULL),
(2, 'Алексей Смирнов', 'Майор', 'Инженер', 1, 1),
(3, 'Дмитрий Иванов', 'Лейтенант', 'Разведка', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Unit`
--

CREATE TABLE `Unit` (
  `unit_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `soldier_id` int DEFAULT NULL,
  `vehicle_id` int DEFAULT NULL,
  `weapon_id` int DEFAULT NULL,
  `base_id` int DEFAULT NULL,
  `unit_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Unit`
--

INSERT INTO `Unit` (`unit_id`, `name`, `soldier_id`, `vehicle_id`, `weapon_id`, `base_id`, `unit_type`) VALUES
(1, '19-я мотострелковая дивизия', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Vehicle`
--

CREATE TABLE `Vehicle` (
  `vehicle_id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Vehicle`
--

INSERT INTO `Vehicle` (`vehicle_id`, `name`, `vehicle_type`) VALUES
(1, 'Танк Т-90', 'Бронетехника'),
(2, 'Боевой вертолет Ми-24', 'Воздушное');

-- --------------------------------------------------------

--
-- Структура таблицы `Weapon`
--

CREATE TABLE `Weapon` (
  `weapon_id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `weapon_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Weapon`
--

INSERT INTO `Weapon` (`weapon_id`, `name`, `weapon_type`) VALUES
(1, 'АК-74М', 'Автомат'),
(2, 'СВ-98', 'Снайперская винтовка'),
(3, 'МП-433', 'Пистолет'),
(4, 'РПК-74М', 'Пулемет'),
(5, 'Вал', 'Автомат'),
(6, 'АК-12', 'Автомат'),
(7, 'РШГ-1', 'Реактивные штурмовые гранаты'),
(8, 'РШГ-2', 'Реактивные штурмовые гранаты'),
(9, 'РПК-16', 'Пулемет'),
(10, 'ГП-34', 'Противопехотные гранатомёты');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`base_id`);

--
-- Индексы таблицы `Building`
--
ALTER TABLE `Building`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Soldier`
--
ALTER TABLE `Soldier`
  ADD PRIMARY KEY (`soldier_id`);

--
-- Индексы таблицы `Unit`
--
ALTER TABLE `Unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Индексы таблицы `Vehicle`
--
ALTER TABLE `Vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Индексы таблицы `Weapon`
--
ALTER TABLE `Weapon`
  ADD PRIMARY KEY (`weapon_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `base`
--
ALTER TABLE `base`
  MODIFY `base_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Building`
--
ALTER TABLE `Building`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Soldier`
--
ALTER TABLE `Soldier`
  MODIFY `soldier_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Unit`
--
ALTER TABLE `Unit`
  MODIFY `unit_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Vehicle`
--
ALTER TABLE `Vehicle`
  MODIFY `vehicle_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Weapon`
--
ALTER TABLE `Weapon`
  MODIFY `weapon_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
