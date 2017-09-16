-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 15 2017 г., 07:49
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `testlogdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `testlog`
--

CREATE TABLE IF NOT EXISTS `testlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_uri` varchar(255) NOT NULL,
  `blocked_host` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `testlog`
--

INSERT INTO `testlog` (`id`, `document_uri`, `blocked_host`) VALUES
(1, 'http://diag.i-exam.ru/', 'dl.metabar.ru'),
(2, 'http://diag.i-exam.ru/', 'adblockers.opera-mini.net'),
(3, 'http://diag.i-exam.ru/', 'adblockers.opera-mini.net'),
(4, 'http://diag.i-exam.ru/', 'siteheart.net'),
(5, '', 'siteheart.net'),
(6, 'http://diag.i-exam.ru/', ''),
(7, '', ''),
(8, 'http://diag.i-exam.ru/', 'www.googletagmanager.com'),
(9, 'http://diag.i-exam.ru/', 'callbackhunter.com'),
(10, 'http://diag.i-exam.ru/#remodal-test', 'csi.gstatic.com'),
(11, 'http://diag.i-exam.ru/', 's3.amazonaws.com'),
(12, '', 'ocsearch.net'),
(13, '', 'profitkode.com'),
(14, 'http://diag.i-exam.ru/', 'adblockers.opera-mini.net');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
