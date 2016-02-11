-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 192.168.137.2:3306
-- Время создания: Фев 08 2016 г., 22:07
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `lab-kvinto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `section_id`) VALUES
(1, 'Установка', 1),
(2, 'Руссификация', 1),
(3, 'Package Control', 1),
(4, 'Плагины', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `html-tags`
--

CREATE TABLE IF NOT EXISTS `html-tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tag_type` int(11) NOT NULL,
  `tag_attribute` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `tag_syntax` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `tag_closing` tinyint(1) NOT NULL,
  `tag_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `tag_specification` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `tag_example` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `tag_note` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `html_tags_browser`
--

CREATE TABLE IF NOT EXISTS `html_tags_browser` (
  `tag_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ie` float NOT NULL,
  `chrome` float NOT NULL,
  `opera` float NOT NULL,
  `safari` float NOT NULL,
  `firefox` float NOT NULL,
  `mobile_android` float NOT NULL,
  `mobile_firefox` float NOT NULL,
  `mobile_opera` float NOT NULL,
  `mobile_safari` float NOT NULL,
  PRIMARY KEY (`tag_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `section`
--

INSERT INTO `section` (`section_id`, `section_name`) VALUES
(1, 'Sublime Text 3');

-- --------------------------------------------------------

--
-- Структура таблицы `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `section_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `fast_tag` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `software`
--

INSERT INTO `software` (`section_id`, `category_id`, `description`, `fast_tag`, `id`) VALUES
(1, 1, '<h3>Файл установки доступен в локальной сети Kvinto:</h3>\n\n<a href="\\\\SCALASERVER\\Program\\Sublime Text 3 Build 3083 x64.exe">\\\\SCALASERVER\\Program\\Sublime Text 3 Build 3083 x64.exe</a>\n\n<h3>Файл установки Ex.ua:</h3>\n\n<a href="http://www.ex.ua/91090017">Sublime Text 3 Build 3083</a>\n\n<h3>Активация</h3>\n<p></p>\n<div class="code">----- BEGIN LICENSE -----<br>\nAndrew Weber<br>\nSingle User License<br>\nEA7E-855605<br>\n813A03DD 5E4AD9E6 6C0EEB94 BC99798F<br>\n942194A6 02396E98 E62C9979 4BB979FE<br>\n91424C9D A45400BF F6747D88 2FB88078<br>\n90F5CC94 1CDC92DC 8457107A F151657B<br>\n1D22E383 A997F016 42397640 33F41CFC<br>\nE1D0AE85 A0BBD039 0E9C8D55 E1B89D5D<br>\n5CDB7036 E56DE1C0 EFCC0840 650CD3A6<br>\nB98FC99C 8FAC73EE D2B95564 DF450523<br>\n------ END LICENSE ------</div>\n\n', 0, 1),
(1, 2, '<h3>Руссификация основного меню</h3>\n<p>Доступ в локальной сети Kvinto:\n<a href="\\\\SCALASERVER\\Program\\SublimeText3RussianMenu-master.zip">\\\\SCALASERVER\\Program\\SublimeText3RussianMenu-master.zip</a>\n</p>\n<p>Распаковать содержимое архива в папку <code>C:\\Users\\<имя_пользователя>\\AppData\\Roaming\\Sublime Text 3\\Packages\\Default</code></p>\n<ul><li>* Если папка Default отсутствует, создать вручную.</li><li>** Если не видна папка AppData, <code>Пуск - Панель управления - Свойства папок - Вторая вкладка - Отображать скрытые папки...</code></li></ul>', 0, 2),
(1, 3, '<h3>Control Package</h3>\n\n<p>Откройте консоль с помощью сочетания клавиш <code>ctrl+`</code> либо через основное меню <code>View > Show Console menu</code>. Затем введите заклинание:</p>\n\n<div class="code">\nimport urllib.request,os,hashlib; h = ''2915d1851351e5ee549c20394736b442'' + ''8bc59f460fa1548d1514676163dafc88''; pf = ''Package Control.sublime-package''; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); by = urllib.request.urlopen( ''http://packagecontrol.io/'' + pf.replace('' '', ''%20'')).read(); dh = hashlib.sha256(by).hexdigest(); print(''Error validating download (got %s instead of %s), please try manual install'' % (dh, h)) if dh != h else open(os.path.join( ipp, pf), ''wb'' ).write(by)\n</div>\n', 0, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
