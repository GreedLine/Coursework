-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 12 2020 г., 01:23
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `studia`
--

-- --------------------------------------------------------

--
-- Структура таблицы `callback`
--

CREATE TABLE `callback` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `callback`
--

INSERT INTO `callback` (`id`, `name`, `email`, `telephone`, `text`, `date`) VALUES
(30, 'Дмитрий', 'greedline74@gmail.com', '89127990049', 'Пожалуйста, напишите мне.', '2020-04-09'),
(40, '2222222', '2222222', '22222', '222222', '2020-04-09'),
(49, '123', '23', '232', '2323', '2020-04-13'),
(59, '123', '123123', '123123', '123123', '2020-05-05');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `text`, `image`) VALUES
(1, 'Дизайн кабинета', 'Представительксий кабинет директора компании \"СвязьКом\"', 'img/img1.jpg'),
(2, 'Дизайн квартиры', 'Небольшая уютная квартира в темных тонах', 'img/img2.jpg'),
(3, 'Дизайн кофейни', 'Кофейня \"Старая Италия\" в Итальянском стиле', 'img/img3.jpg'),
(4, 'Дизайн мероприятия ', 'Выставка \"Лучшии фотографии пейзажей\"', 'img/img4.jpg'),
(5, 'Двухкомнатная квартира', 'Небольшая уютная квартира в новостройке', 'img/img5.jpg'),
(6, 'Трехкомнатная квартира', 'Небольшая уютная квартира в новостройке', 'img/img6.jpg'),
(7, 'Деловой офис ', 'Офис для небольшой компании в современном стиле', 'img/img7.jpg'),
(8, 'Двухкомнатная квартира', 'Небольшая уютная квартира в новостройке', 'img/img8.jpg'),
(9, 'Двухкомнатная квартира', 'Небольшая уютная квартира в новостройке', 'img/img9.jpg'),
(10, 'Двухкомнатная квартира', 'Небольшая уютная квартира в новостройке', 'img/img10.jpg'),
(11, 'Тестовый дизайн', 'Концептуальный дизайн интерьера квартиры', 'img/img11.jpg'),
(12, 'Тестовый дизайн', 'Концептуальный дизайн интерьера квартиры', 'img/img12.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `servicename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `telephone`, `servicename`, `message`, `date`) VALUES
(1, 'Дмитрий', '89127990049', 'Дизайн комнаты', 'Свяжитесь со мной через два дня.', '2020-05-05'),
(3, 'Дмитрий', '89127990049', 'Дизайн комнаты', 'Интерьер по личному заказу.', '2020-05-05'),
(22, '33', '33', '44', '44', '2020-05-09'),
(23, '333', '333', '33', '33', '2020-05-09'),
(24, 'Тест', 'Тест', 'Тест', 'Тест', '2020-05-09');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `service`, `text`) VALUES
(7, 'Дмитрий', 'Дизайн комнаты', 'Достаточно приятные мастера. Спасибо за оформление!'),
(8, 'Алексей', 'Дизайн кухни', 'Очень быстро справились с поставленной задачей. \r\nВсем доволен.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `callback`
--
ALTER TABLE `callback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `callback`
--
ALTER TABLE `callback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
