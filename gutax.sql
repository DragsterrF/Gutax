-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 07 2023 г., 05:49
-- Версия сервера: 5.7.36
-- Версия PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gutax`
--

-- --------------------------------------------------------

--
-- Структура таблицы `obrsvaz`
--

DROP TABLE IF EXISTS `obrsvaz`;
CREATE TABLE IF NOT EXISTS `obrsvaz` (
  `Id_svaz` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `question` varchar(35) NOT NULL,
  `otvet` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `otzyv` varchar(500) NOT NULL,
  PRIMARY KEY (`Id_svaz`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_kl` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `pass` varchar(2500) CHARACTER SET utf8mb4 NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_kl`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
