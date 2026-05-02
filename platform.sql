-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 02 2026 г., 18:51
-- Версия сервера: 8.4.7
-- Версия PHP: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `platform`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id_answer` int NOT NULL AUTO_INCREMENT,
  `test_solution_id` int NOT NULL,
  `question_id` int NOT NULL,
  `answer_choice_id` int DEFAULT NULL,
  `point` int NOT NULL,
  `text_answer` text COLLATE utf8mb4_general_ci,
  `try` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_answer`),
  KEY `test_solution_id` (`test_solution_id`),
  KEY `question_id` (`question_id`),
  KEY `answer_choice_id` (`answer_choice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `answer_choice`
--

DROP TABLE IF EXISTS `answer_choice`;
CREATE TABLE IF NOT EXISTS `answer_choice` (
  `id_answer_choice` int NOT NULL AUTO_INCREMENT,
  `question_id` int NOT NULL,
  `text_answer_choice` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `point` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_answer_choice`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `answer_choice`
--

INSERT INTO `answer_choice` (`id_answer_choice`, `question_id`, `text_answer_choice`, `point`) VALUES
(1, 3, 'deer', 1),
(2, 3, 'feer', 0),
(3, 3, 'geer', 2),
(4, 4, 'один', 1),
(5, 4, 'два', 2),
(6, 4, 'три', 3),
(7, 5, 'один-один', 1),
(8, 5, 'два-two', 2),
(9, 5, 'три-3', 3),
(10, 7, 'far', 3),
(11, 7, 'away', 2),
(12, 8, 'скрип', 1),
(13, 8, 'баста', 0),
(14, 9, 'скрипа', 1),
(15, 9, 'трувер', 0),
(16, 10, 'deer', 1),
(17, 10, 'fear', 4),
(18, 11, 'столько', 1),
(19, 11, 'или столько', 0),
(20, 12, 'столько', 1),
(21, 12, 'или столько', 0),
(22, 14, 'в', 1),
(23, 14, 'а', 0),
(24, 15, 'в', 1),
(25, 15, 'а', 0),
(26, 16, 'в111', 1),
(27, 16, 'а111', 0),
(28, 17, 'в222', 1),
(29, 17, 'а222', 0),
(30, 18, 'в222', 1),
(31, 18, 'а222', 0),
(32, 19, 'в222', 1),
(33, 19, 'а222', 0),
(34, 20, 'в222', 1),
(35, 20, 'а222', 0),
(36, 21, 'в222', 1),
(37, 21, 'а222', 0),
(38, 22, 'в222', 1),
(39, 22, 'а222', 0),
(40, 23, 'в222', 1),
(41, 23, 'а222', 0),
(42, 24, 'в222', 1),
(43, 24, 'а222', 0),
(44, 25, 'в222', 1),
(45, 25, 'а222', 0),
(46, 26, 'в222', 1),
(47, 26, 'а222', 0),
(48, 27, 'в222', 1),
(49, 27, 'а222', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(1, 'Образовательные'),
(2, 'Развлекательные');

-- --------------------------------------------------------

--
-- Структура таблицы `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id_question` int NOT NULL AUTO_INCREMENT,
  `test_id` int NOT NULL,
  `text_question` text COLLATE utf8mb4_general_ci NOT NULL,
  `type_answer` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_question`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `question`
--

INSERT INTO `question` (`id_question`, `test_id`, `text_question`, `type_answer`) VALUES
(1, 51, 'pervi', 0),
(2, 51, 'pervi', 0),
(3, 51, 'pervi', 0),
(4, 50, 'Второй вопрос так', 0),
(5, 50, 'Третий вопрос такой', 0),
(6, 52, 'how', 0),
(7, 52, 'wow', 0),
(8, 52, 'Я первый я сааам', 0),
(9, 52, 'ты хочешь быть как', 0),
(10, 53, 'dfsg,dfg', 0),
(11, 54, 'сколько влезет файлов', 0),
(12, 54, 'сколько влезет файлов', 0),
(13, 54, 'сколкьо', 0),
(14, 54, 'сколько', 0),
(15, 54, 'сколько', 0),
(16, 54, 'сколько111', 0),
(17, 54, 'сколько222', 0),
(18, 54, 'сколько222', 0),
(19, 54, 'сколько222', 0),
(20, 54, 'сколько222', 0),
(21, 54, 'сколько222', 0),
(22, 54, 'сколько222', 0),
(23, 54, 'сколько222', 0),
(24, 54, 'сколько222', 0),
(25, 54, 'сколько222', 0),
(26, 54, 'сколько222', 0),
(27, 54, 'сколько222', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `question_file`
--

DROP TABLE IF EXISTS `question_file`;
CREATE TABLE IF NOT EXISTS `question_file` (
  `id_question_file` int NOT NULL AUTO_INCREMENT,
  `question_id` int NOT NULL,
  `question_file` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_question_file`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id_test` int NOT NULL AUTO_INCREMENT,
  `name_test` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int NOT NULL,
  `timer` time DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '/assets/images/test_default.png',
  `anon` tinyint(1) NOT NULL DEFAULT '0',
  `auto_mark` tinyint(1) NOT NULL DEFAULT '0',
  `try` int NOT NULL DEFAULT '1',
  `end_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_test`),
  KEY `user_id` (`user_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id_test`, `name_test`, `user_id`, `create_at`, `category_id`, `timer`, `image`, `anon`, `auto_mark`, `try`, `end_at`) VALUES
(29, 'sec', 1, '2026-01-19 13:25:00', 1, NULL, '/assets/images/test_default.png', 0, 0, 0, NULL),
(30, 'фёрст', 1, '2026-01-19 13:25:00', 1, NULL, '/assets/images/test_default.png', 0, 0, 0, NULL),
(31, 'фёрст', 1, '2026-01-19 13:25:00', 1, NULL, '/assets/images/test_default.png', 0, 0, 0, NULL),
(32, 'фёрст', 1, '2026-01-19 13:25:00', 1, NULL, '/assets/images/test_default.png', 0, 0, 0, NULL),
(33, 'rer', 1, '2026-01-19 13:25:00', 1, NULL, '/assets/images/test_default.png', 0, 0, 0, NULL),
(34, 'ded', 1, '2026-01-19 13:25:00', 1, '11:11:00', '/assets/images/test_default.png', 0, 0, 0, NULL),
(35, 'ded', 1, '2026-01-19 13:25:00', 1, NULL, '/assets/images/test_default.png', 0, 0, 0, NULL),
(36, 'фйы', 1, '2026-01-19 13:25:00', 1, NULL, '/assets/images/test_default.png', 0, 0, 0, NULL),
(37, 'фыв', 1, '2026-01-19 13:25:00', 1, '00:00:12', '/assets/images/test_default.png', 0, 0, 0, NULL),
(38, 'фыв', 1, '2026-01-19 13:25:00', 1, NULL, '/assets/images/test_default.png', 0, 0, 0, NULL),
(39, 'pip', 1, '2026-02-16 20:37:44', 1, NULL, '', 0, 0, 0, NULL),
(40, 'pip', 1, '2026-02-16 20:39:01', 1, NULL, '', 0, 0, 0, NULL),
(41, 'pip', 1, '2026-02-16 20:39:12', 1, NULL, '', 0, 0, 0, '0000-00-00 00:00:00'),
(42, 'pip', 1, '2026-02-16 20:39:52', 1, '12:12:09', '', 0, 0, 0, '2026-01-19 13:25:00'),
(43, 'фёрст', 1, '2026-02-16 20:41:34', 1, '11:11:00', '', 0, 0, 0, '2026-01-19 13:25:00'),
(44, 'фёрст', 1, '2026-02-16 20:41:48', 1, '12:12:09', '', 0, 0, 0, NULL),
(45, 'фёрст', 1, '2026-02-16 20:42:01', 1, NULL, '', 0, 0, 0, NULL),
(46, 'sec', 1, '2026-02-16 20:43:40', 1, NULL, '', 0, 0, 0, NULL),
(47, 'big', 1, '2026-02-21 19:13:01', 1, NULL, '', 1, 1, 1, NULL),
(48, 'big2', 1, '2026-02-21 19:13:55', 1, NULL, '', 0, 1, 1, NULL),
(49, 'smalls', 1, '2026-02-21 19:41:08', 1, '12:12:09', '/assets/test_main_image/t0o_cwmsuQ7GfCt1SudbGmVgPyXAXFsDrUbbhze8GdVSR4P_Am.png', 1, 0, 1, NULL),
(50, 'beef', 1, '2026-02-21 20:45:39', 1, NULL, '/assets/test_main_image/nqTzd_skl0a7QI7k8i2RrG5lIZjiv_NAPdrnr1EWXfu6-kxxia.png', 1, 1, 1, NULL),
(51, 'defer', 1, '2026-02-21 22:55:26', 1, NULL, '/assets/test_main_image/oCHI3SmAF7w30bw4oxQi8cZOvMFG0Y47j9xl2w2zQUgwQIIBae.png', 0, 0, 1, NULL),
(52, 'tree', 1, '2026-02-22 12:07:11', 1, NULL, '/assets/test_main_image/xD9rn5sm2VC9J23a_OxWW-8Prt0O4C1oxJiicOr_6-zD08tbRX.png', 1, 0, 7, NULL),
(53, 'pepe', 1, '2026-02-24 17:45:48', 2, NULL, '/assets/test_main_image/fr5cys65MXOOMq1eQzZQvWmtuE2KZQ4VYJ-AxyRN7W_FHBLH-3.png', 0, 1, 1, NULL),
(54, 'vot', 1, '2026-03-07 20:14:00', 1, NULL, '/assets/test_main_image/rLpGIWLMBBc6kJmGopIAOCjN6F5dw_vKfDuxa5he2arkZTp1Dv.png', 0, 0, 1, NULL),
(55, 'фёрст', 1, '2026-05-02 13:37:23', 1, '12:12:09', '/assets/test_main_image/HPvN84ZO5pGQcTNjnTOinV2j79qsV58A5yIDDclxJikxv48w9p.jpg', 1, 1, 1, '2026-01-19 13:25:00'),
(56, 'sec', 1, '2026-05-02 17:29:29', 2, NULL, '/assets/test_main_image/71ME9eURc62hkW_8jmkhgfJQEpaPMN68UdwZWDMPJJ97jK11U8.jpg', 0, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `test_solution`
--

DROP TABLE IF EXISTS `test_solution`;
CREATE TABLE IF NOT EXISTS `test_solution` (
  `id_test_solution` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `test_id` int NOT NULL,
  `begin_at` timestamp NOT NULL,
  `point` int DEFAULT NULL,
  `end_at` timestamp NOT NULL,
  `try` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_test_solution`),
  KEY `user_id` (`user_id`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `name`, `avatar`, `password`) VALUES
(1, 'first', 'post@post.po', 'Юрий', 'fok', 'ddd');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`answer_choice_id`) REFERENCES `answer_choice` (`id_answer_choice`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_ibfk_3` FOREIGN KEY (`test_solution_id`) REFERENCES `test_solution` (`id_test_solution`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `answer_choice`
--
ALTER TABLE `answer_choice`
  ADD CONSTRAINT `answer_choice_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`id_test`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `question_file`
--
ALTER TABLE `question_file`
  ADD CONSTRAINT `question_file_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `test_solution`
--
ALTER TABLE `test_solution`
  ADD CONSTRAINT `test_solution_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`id_test`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test_solution_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
