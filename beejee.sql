-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 05 2017 г., 07:56
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `beejee`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `img`, `name`, `email`, `text`, `status`) VALUES
(2, '\\upload\\images\\task2.png', 'Alex', 'akex@mail.ru', 'К задаче можно прикрепить картинку. Требования к изображениям - формат JPG/GIF/PNG, не более 320х240 пикселей. При попытке загрузить изображение большего размера, картинка должна быть пропорционально уменьшена до заданных размеров.', 1),
(3, '\\upload\\images\\task1.png', 'Sveta', 'sveta@gmail.com', 'Сделайте вход для администратора (логин "admin", пароль "123"). Администратор имеет возможность редактировать текст задачи и поставить галочку о выполнении. Выполненные задачи в общем списке выводятся с соответствующей отметкой.', 0),
(5, '\\upload\\images\\task2.png', 'valera1', 'valera@gmail.com', '\r\nВ приложении нужно с помощью чистого PHP реализовать модель MVC. Фреймворки PHP использовать нельзя, библиотеки - можно. Верстка на bootstrap. К дизайну особых требований нет, но должно выглядеть аккуратно.', 1),
(6, '\\upload\\images\\task1.png', 'valera2', 'valera@gmail.com', '\r\nВ приложении нужно с помощью чистого PHP реализовать модель MVC. Фреймворки PHP использовать нельзя, библиотеки - можно. Верстка на bootstrap. К дизайну особых требований нет, но должно выглядеть аккуратно.', 1),
(8, '\\upload\\images\\task2.png', 'valera3', 'valera@gmail.com', '\r\nВ приложении нужно с помощью чистого PHP реализовать модель MVC. Фреймворки PHP использовать нельзя, библиотеки - можно. Верстка на bootstrap. К дизайну особых требований нет, но должно выглядеть аккуратно.', 1),
(9, '\\upload\\images\\task1.png', 'valera4', 'valera@gmail.com', '\r\nВ приложении нужно с помощью чистого PHP реализовать модель MVC. Фреймворки PHP использовать нельзя, библиотеки - можно. Верстка на bootstrap. К дизайну особых требований нет, но должно выглядеть аккуратно.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `regdate`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin', '2017-09-04 20:17:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
