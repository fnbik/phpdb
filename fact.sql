-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 23 2019 г., 22:16
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `fact`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users_info`
--

CREATE TABLE IF NOT EXISTS `users_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `users_info`
--

INSERT INTO `users_info` (`id`, `username`, `password`, `email`) VALUES
(1, 'Paula', 'Cnee9l3L', 'paula.chang@gmail.com'),
(2, 'Rolanda', 'r09!JF7Z', 'rolanda.horton@gmail.com'),
(3, 'Ricky', 'jLTN93xX', 'ricky.chacon@ramoz.com'),
(4, 'Rebeca', 'X8RAwEpg', 'rebeca.byrd@gmail.com'),
(5, 'Moses', 'Jr5JEOyy', 'moses.todd@ew.net');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
