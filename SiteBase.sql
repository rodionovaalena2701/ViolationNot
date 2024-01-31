-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 29 2024 г., 17:00
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
-- База данных: `SiteBase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `application`
--

CREATE TABLE `application` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_status` int NOT NULL,
  `id_employee` int NOT NULL,
  `regional_auto_number` varchar(15) NOT NULL,
  `description_of_offence` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `application`
--

INSERT INTO `application` (`id`, `id_user`, `id_status`, `id_employee`, `regional_auto_number`, `description_of_offence`) VALUES
(1, 1, 3, 4, 'ф130ма (78 RUS)', 'Поцарапали машину хулиганы.'),
(2, 4, 2, 5, 'ф464ма (78 RUS)', 'Чуть свинку не сбили.'),
(3, 1, 1, 1, 'ф130ма (78 RUS)', 'На парковке врезались в мою машину.'),
(4, 2, 3, 1, 'а478не(150 RUS)', 'Врезалась сзади легковушка, пока стояли на красный свет.'),
(5, 4, 1, 4, 'ф464ма (78 RUS)', 'Свинку мою на дороге сбили((('),
(6, 5, 3, 5, 'а478не (20 RUS)', 'На дорогу выбежала собака, и я ее случайно сбил.'),
(7, 3, 2, 3, 'у184ук(150 RUS)', 'Другая машина врезалась в мою.'),
(8, 6, 1, 7, 'в293гк(150 RUS)', 'Вылетела чужая машина со встречной полосы, подрезала меня, и я врезался в дерево.'),
(9, 7, 2, 6, 'щ180вц (78 RUS)', 'Отказали тормоза, из-за этого попала в ДТП.'),
(10, 8, 3, 1, 'у184ук(150 RUS)', 'Кто-то врезался в мою машину.');

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `id` int NOT NULL,
  `admin_surname` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `admin_first_name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `admin_middle_name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `employee`
--

INSERT INTO `employee` (`id`, `admin_surname`, `admin_first_name`, `admin_middle_name`, `login`, `password`) VALUES
(1, 'Хорошеев', 'Михаил', 'Иванович', 'copp', 'password'),
(2, 'Серго', 'Александр', 'Викторович', 'logadm', 'thebestadmin'),
(3, 'Роза', 'Надежда', NULL, 'roselogin', 'beautyplant'),
(4, 'Админин', 'Алексей', 'Алексеевич', 'admiadmi', 'passwordadmin'),
(5, 'Лев', 'Наталья', 'Марьевна', 'addddmin', 'passadd'),
(6, 'Родионова', 'Алёна', 'Александровна', 'bossnumber1', 'superpsswrdnmb1'),
(7, 'Антюхова', 'Татьяна', '', 'loginadmin7', 'passwordnmbr284');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Ожидание'),
(2, 'В работе'),
(3, 'Завершено');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `surname` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `first_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `middle_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `surname`, `first_name`, `middle_name`, `phone_number`, `email`, `login`, `password`) VALUES
(1, 'Иванов', 'Иван', 'Иванович', '+7 (800) 555 35-35', 'ivanemail@mail.ru', 'ivanovlogin', 'super_password'),
(2, 'Петров', 'Петр', 'Петрович', '+7 (925) 383 23-23', 'superemail@mail.ru', 'petrovalogin', 'passwordnomer2'),
(3, 'Вонвак', 'Михаил', 'Сергеевич', '+7 (915) 525 35-35', 'vonvakplanet@mail.ru', 'vonvonlog', 'vonvonpass'),
(4, 'Кузнецова', 'Топаз', '', '+7 (915) 125 67-35', 'topaztrotter@mail.ru', 'topazgem', 'gem12piggy'),
(5, 'Гагарка', 'Галина', 'Сергеевна', '+7 (925) 390 23-45', 'superbirdl@mail.ru', 'gagarochka', 'passbird_2'),
(6, 'Зернов', 'Илья', 'Александрович', '7(915)222 34-56', 'zernov@mail.ru', 'zerzernov', 'parolzazernil'),
(7, 'Морозова', 'Пелагея', 'Сергеевна', '7(345)679 20-35', 'belobog@gmail.com', 'ilovereading', 'Sneznaya23'),
(8, 'Родионова', 'Алёна', 'Александровна', '+7 (915) 221-37-80', 'aluxacheburek@mail.ru', 'aluxacheburek@mail.ru', 'mamaemae'),
(9, 'Зубахина', 'Тамара', 'Сергеевна', '+7 (915) 221-37-80', 'mailmail@bk.ru', 'mailmail@bk.ru', 'toma12340'),
(10, 'Вахотская', 'Александра', 'Николаевна', '+7 (915) 221-37-80', 'mailmail@gmail.ru', 'mailmail@gmail.ru', 'sasha12340'),
(11, 'Доббиев', 'Добби', 'Доббиевич', '+7 (915) 221-37-80', 'dobmail.@mail.ru', 'dobmail.@mail.ru', 'Dobbi'),
(12, 'Доббиева', 'Масяня', 'Масяньевна', '+7 (915) 221-37-80', 'masmail.@mail.ru', 'masmail.@mail.ru', 'Masia');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_employee` (`id_employee`),
  ADD KEY `id_status` (`id_status`);

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT для таблицы `application`
--
ALTER TABLE `application`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `application_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
