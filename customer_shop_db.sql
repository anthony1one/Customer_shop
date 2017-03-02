-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 02 2017 г., 20:22
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `customer_shop_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods_info`
--

CREATE TABLE `goods_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods_info`
--

INSERT INTO `goods_info` (`id`, `name`, `quantity`, `price`, `image`) VALUES
(1, 'Iphone SE 16 GB', 10, 35000, 'uploads/iphone_se_16_gb.png'),
(2, 'Iphone 7 64 GB', 28, 60000, 'uploads/iphone_7_64_gb.png'),
(3, 'HTC Desire 626G', 45, 8900, 'uploads/htc_desire_626g.png'),
(4, 'Samsung S7 Edge', 27, 52000, 'uploads/samsung_s7_edge.png'),
(5, 'Vertu touch', 5, 420000, 'uploads/vertu_touch.png');

-- --------------------------------------------------------

--
-- Структура таблицы `purchases_info`
--

CREATE TABLE `purchases_info` (
  `id` int(11) NOT NULL,
  `consumer` varchar(50) NOT NULL,
  `good_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `purchases_info`
--

INSERT INTO `purchases_info` (`id`, `consumer`, `good_id`) VALUES
(1, 'h0d1vb1u27s2450sj0b6k98441', 2),
(2, 'h0d1vb1u27s2450sj0b6k98441', 3),
(12, 'rr4rpbpe0jneqh84abtqcbd7h0', 5),
(13, 'rr4rpbpe0jneqh84abtqcbd7h0', 2),
(14, 'a364d3jeqmeiivu9j2fp4tqbf4', 2),
(15, 'a364d3jeqmeiivu9j2fp4tqbf4', 5),
(16, 'l0nr7ck57m78s4larkdoombk22', 2),
(17, 'l0nr7ck57m78s4larkdoombk22', 3),
(18, 'g7ku71rik2asrkjvgcg68eanq7', 1),
(22, 'msv33hteg27m796oqrraerdka5', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods_info`
--
ALTER TABLE `goods_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `purchases_info`
--
ALTER TABLE `purchases_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `good_id` (`good_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods_info`
--
ALTER TABLE `goods_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `purchases_info`
--
ALTER TABLE `purchases_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
