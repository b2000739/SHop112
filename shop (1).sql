-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 13 2023 г., 20:04
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'iOS'),
(2, 'android');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`) VALUES
(3, 17, 2),
(4, 21, 2),
(5, 21, 2),
(6, 18, 2),
(7, 18, 2),
(8, 18, 2),
(9, 18, 12),
(10, 22, 12),
(11, 22, 12),
(12, 22, 12),
(13, 22, 12),
(14, 22, 11),
(15, 22, 11),
(16, 22, 11),
(17, 22, 11),
(18, 22, 11),
(19, 22, 11),
(20, 22, 11),
(21, 22, 11),
(22, 22, 11),
(23, 22, 11),
(24, 22, 11),
(25, 22, 11),
(26, 22, 11),
(27, 22, 11),
(28, 22, 11),
(29, 22, 11),
(30, 22, 11),
(31, 22, 11),
(32, 22, 2),
(33, 22, 11),
(34, 22, 12),
(35, 22, 12),
(36, 22, 12),
(37, 22, 12),
(38, 22, 13),
(39, 22, 13),
(40, 22, 13),
(41, 22, 13),
(42, 22, 13),
(43, 22, 13),
(44, 22, 13),
(45, 22, 13),
(46, 22, 13),
(47, 22, 13),
(48, 22, 13),
(49, 22, 13),
(50, 22, 13),
(51, 22, 13),
(52, 22, 13),
(53, 22, 13),
(54, 22, 13),
(55, 22, 13),
(56, 22, 13),
(57, 22, 13),
(58, 22, 13),
(59, 22, 13),
(60, 22, 13),
(61, 22, 13),
(62, 22, 13),
(63, 22, 13),
(64, 22, 13),
(65, 22, 13),
(66, 22, 13),
(67, 22, 13),
(68, 22, 12),
(69, 22, 12),
(70, 22, 12),
(71, 22, 11),
(72, 22, 11),
(73, 22, 11),
(74, 22, 11),
(75, 22, 11),
(76, 22, 11),
(77, 22, 11),
(78, 22, 11),
(79, 22, 11),
(80, 22, 11),
(81, 22, 11),
(82, 22, 11),
(83, 22, 11),
(84, 22, 11),
(85, 22, 11),
(86, 22, 11),
(87, 22, 11),
(88, 22, 11),
(89, 22, 11),
(90, 22, 11),
(91, 22, 11),
(92, 22, 11),
(93, 22, 11),
(94, 22, 11),
(95, 22, 11),
(96, 22, 11),
(97, 22, 11),
(98, 22, 13),
(99, 22, 13),
(100, 22, 11),
(101, 22, 13),
(102, 23, 11);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Ноутбук'),
(2, 'Планшет'),
(3, 'Телефон');

-- --------------------------------------------------------

--
-- Структура таблицы `coupon_1`
--

CREATE TABLE `coupon_1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coupon_1`
--

INSERT INTO `coupon_1` (`id`, `name`) VALUES
(1, '50% процентная скидка на бытовую технику'),
(2, '75% процентная скидка на электронику');

-- --------------------------------------------------------

--
-- Структура таблицы `favorite`
--

CREATE TABLE `favorite` (
  `id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `favorite`
--

INSERT INTO `favorite` (`id`, `product_id`, `user_id`) VALUES
(58, 26, 22),
(59, 21, 22),
(60, 17, 22),
(62, 15, 22),
(63, 23, 22),
(94, 2, 22),
(96, 13, 22);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(4) NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `product_id`, `text`, `rating`, `date`) VALUES
(6, 22, 12, '12', 5, '2018'),
(8, 22, 12, '132123', 4, '2028'),
(9, 22, 12, 'qwer', 5, '2018'),
(10, 22, 12, 'yikljfg', 1, '2018'),
(11, 22, 12, '', 1, '2017'),
(12, 22, 12, '234234', 5, '2017'),
(13, 22, 11, '', 5, '2017'),
(14, 22, 12, 'dqweef', 5, '2017'),
(15, 22, 12, 'dqweef', 5, '2023-03-03'),
(16, 22, 12, 'wef', 5, '2023-03-03'),
(42, 22, 11, '3ц45е', 4, '2023-03-11'),
(43, 22, 11, '', 4, '2023-03-11'),
(44, 22, 11, '', 2, '2023-03-11'),
(45, 22, 11, '', 2, '2023-03-11'),
(46, 22, 11, '', 2, '2023-03-11'),
(47, 22, 11, '', 2, '2023-03-11'),
(48, 22, 11, '', 2, '2023-03-11'),
(49, 22, 11, '', 2, '2023-03-11'),
(50, 22, 11, '', 2, '2023-03-11'),
(51, 22, 11, '', 2, '2023-03-11'),
(52, 22, 11, '', 2, '2023-03-11'),
(53, 22, 11, '', 2, '2023-03-11'),
(54, 22, 11, '', 2, '2023-03-11'),
(55, 22, 11, '', 2, '2023-03-11'),
(56, 22, 11, '', 2, '2023-03-11'),
(57, 22, 11, '', 2, '2023-03-11'),
(58, 22, 11, '', 2, '2023-03-11'),
(59, 22, 11, '', 2, '2023-03-11'),
(60, 22, 11, '', 2, '2023-03-11'),
(61, 22, 11, '', 2, '2023-03-11'),
(62, 22, 11, '', 2, '2023-03-11'),
(63, 22, 11, '', 2, '2023-03-11'),
(64, 22, 11, '', 2, '2023-03-11'),
(65, 22, 11, '', 2, '2023-03-11'),
(66, 22, 11, '', 2, '2023-03-11'),
(67, 22, 11, '', 2, '2023-03-11'),
(68, 22, 11, '', 2, '2023-03-11'),
(69, 22, 11, '', 2, '2023-03-11'),
(70, 22, 11, '', 2, '2023-03-11'),
(71, 22, 2, 'Отзыв', 1, '2023-03-11'),
(72, 22, 2, 'Отзыв', 1, '2023-03-11'),
(73, 22, 2, 'Отзыв', 1, '2023-03-11'),
(74, 22, 2, 'Отзыв', 1, '2023-03-11'),
(75, 22, 2, 'Отзыв', 1, '2023-03-11'),
(76, 22, 2, 'Отзыв', 1, '2023-03-11'),
(77, 22, 2, 'Отзыв', 1, '2023-03-11'),
(78, 22, 2, 'Отзыв', 1, '2023-03-11'),
(79, 22, 2, 'Отзыв', 1, '2023-03-11'),
(80, 22, 2, 'Отзыв', 1, '2023-03-11'),
(81, 22, 2, 'Отзыв', 1, '2023-03-11'),
(82, 22, 2, 'Отзыв', 1, '2023-03-11'),
(83, 22, 2, 'Отзыв', 1, '2023-03-11'),
(84, 22, 2, 'Отзыв', 1, '2023-03-11'),
(85, 22, 2, 'Отзыв', 1, '2023-03-11'),
(86, 22, 2, 'Отзыв', 1, '2023-03-11'),
(87, 22, 2, 'Отзыв', 1, '2023-03-11'),
(88, 22, 2, 'Отзыв', 1, '2023-03-11'),
(89, 22, 2, 'Отзыв', 1, '2023-03-11'),
(90, 22, 2, 'Отзыв', 1, '2023-03-11'),
(91, 22, 2, 'Отзыв', 1, '2023-03-11'),
(92, 22, 2, 'Отзыв', 1, '2023-03-11'),
(93, 22, 2, 'Отзыв', 1, '2023-03-11'),
(94, 22, 2, 'Отзыв', 1, '2023-03-11'),
(95, 22, 2, 'Отзыв', 1, '2023-03-11'),
(96, 22, 2, 'Отзыв', 1, '2023-03-11'),
(97, 22, 2, 'Отзыв', 1, '2023-03-11'),
(98, 22, 2, 'Отзыв', 2, '2023-03-11'),
(99, 22, 2, 'Отзыв', 1, '2023-03-11'),
(100, 22, 2, 'Отзыв', 1, '2023-03-11'),
(101, 22, 2, 'Отзыв', 1, '2023-03-11'),
(102, 22, 2, 'Отзыв', 1, '2023-03-11'),
(103, 22, 2, 'Отзыв', 1, '2023-03-11'),
(104, 22, 2, 'Отзыв', 1, '2023-03-12'),
(105, 22, 2, 'Отзыв', 1, '2023-03-12'),
(106, 22, 2, 'Отзыв', 1, '2023-03-12'),
(107, 22, 2, 'Отзыв', 1, '2023-03-12'),
(108, 22, 2, 'Отзыв', 1, '2023-03-12'),
(109, 22, 2, 'Отзыв', 1, '2023-03-12'),
(110, 22, 2, 'Отзыв', 1, '2023-03-12'),
(111, 22, 2, 'Отзыв', 1, '2023-03-12'),
(112, 22, 2, 'Отзыв', 1, '2023-03-12'),
(113, 22, 2, 'Отзыв', 1, '2023-03-12'),
(114, 22, 2, 'Отзывфыа', 1, '2023-03-12'),
(115, 22, 2, 'Отзывфыа', 1, '2023-03-12'),
(116, 22, 13, 'Отзыв', 5, '2023-03-15'),
(117, 22, 13, 'Отзыв', 5, '2023-03-15'),
(118, 22, 13, 'Все плохо', 5, '2023-03-15'),
(119, 22, 13, 'уыпцужшщпрзцупргшщцук', 5, '2023-03-15'),
(120, 22, 11, 'Все хорошо', 5, '2023-03-15'),
(121, 22, 11, 'Все хорошо', 5, '2023-03-15'),
(122, 22, 11, 'Отзывwerth', 5, '2023-03-15'),
(123, 22, 11, 'Отзывwerth', 5, '2023-03-15'),
(124, 22, 11, 'Отзывwerth', 5, '2023-03-15'),
(125, 22, 11, 'Отзывwerth', 5, '2023-03-15'),
(126, 22, 11, 'a;slfh;oiyhqwerop', 5, '2023-03-15'),
(127, 22, 12, 'Отзыв', 5, '2023-03-15'),
(128, 22, 12, 'Отзыв', 5, '2023-03-15'),
(129, 22, 12, 'Отзыв', 5, '2023-03-15'),
(130, 22, 12, 'Отзыв', 5, '2023-03-15'),
(131, 22, 12, 'Отзыв', 5, '2023-03-15'),
(132, 22, 12, 'Отзыв', 5, '2023-03-15'),
(133, 22, 13, 'Ахуительно', 5, '2023-03-15'),
(134, 22, 13, 'Ахуительно', 5, '2023-03-15'),
(135, 22, 2, 'Отзывы', 5, '2023-03-15'),
(136, 22, 2, 'Отзывы', 5, '2023-03-15'),
(137, 22, 2, 'Отзыв132', 4, '2023-03-15'),
(138, 22, 2, 'Отзыв132', 4, '2023-03-15'),
(139, 22, 2, 'пкн123', 3, '2023-03-15'),
(140, 22, 2, 'пкн123', 3, '2023-03-15'),
(141, 22, 2, 'Отзывqwerty', 2, '2023-03-15'),
(142, 22, 2, 'Отзыв798', 1, '2023-03-15'),
(143, 22, 13, 'хуета\r\n', 1, '2023-03-17');

-- --------------------------------------------------------

--
-- Структура таблицы `News`
--

CREATE TABLE `News` (
  `id` int(11) NOT NULL,
  `Header` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `under_header` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(7) NOT NULL,
  `views` int(7) NOT NULL,
  `reads_count` int(10) NOT NULL,
  `likes` int(7) NOT NULL,
  `dislikes` int(7) NOT NULL,
  `key_words` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `News`
--

INSERT INTO `News` (`id`, `Header`, `under_header`, `author_id`, `views`, `reads_count`, `likes`, `dislikes`, `key_words`, `time`) VALUES
(1, 'Прямо в сердце: как шутер-блокбастер про роботов в СССР Atomic Heart покоряет мир', '   Игра Atomic Heart стартовала 21 февраля и сразу возглавила мировой чарт онлайн-площадки Steam   ', 2, 1000, 100, 50, 20, 'heart, game dave, nivamn', '02.11.22, 9:52'),
(3, 'КРИПТО-ГЕЙМИНГ: САМАЯ ПРАКТИЧНАЯ СТАТЬЯ', '  «Вам нужен крипто-гейминг. Вы ДУМАЕТЕ, что не нужен, но он вам нужен», — так выглядит распространенная позиция инвесторов.\r\n\r\n  ', 2, 100000, 20000, 12345, 2134, 'cripto,cripto-scam,NFT,dogecoin', '02.11.22, 9:57');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_product`) VALUES
(1, 23, 1),
(2, 23, 1),
(3, 23, 1),
(4, 23, 1),
(5, 23, 1),
(6, 23, 1),
(7, 23, 1),
(8, 23, 1),
(9, 23, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(20) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(3) NOT NULL,
  `brand` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `photos`, `category`, `brand`) VALUES
(2, 'HUAWEI MateBook 512GB Mystic Silver', 54999, '                 Ноутбук Huawei BoD-WDH9 53013ERR, серебристый разработан для работы в многооконном режиме, просмотра видеоконтента, интернет-серфинга. Прибор с предустановленной операционной системой Windows 11 функционирует на базе четырехъядерного процессора Core i5 1135G7 и графического контроллера Iris Xe Graphics от Intel. Объем оперативной DDR памяти составляет 8 Гб. Емкость жесткого диска SSD — 512 Гб. Встроенные модули Wi-Fi 6 и Bluetooth 5.1 поддерживают беспроводную связь с совместимыми устройствами.                 ', 'huawei_matebook.png', 1, 2),
(11, 'Apple iPhone 11 128 ГБ', 47990, 'Телефон эпл, будешь блатным', 'iphone_11.png', 3, 1),
(12, 'Xiaomi Redmi A1+ 32Gb Black', 4999, 'Телефон приобретал маме. Понравилась продолжительность работы смартфона в автономном режиме. Пара дней при умеренном использовании для него не проблема. Еще, что приятно удивило тут есть сканер отпечатка пальца, а также присутствует возможность разблокировки телефона по лицу. Мобильный интернет работает быстро, телефон не тупит, LTE ловит нормально. Динамики и микрофон хорошие, во время беседы маму слышно отлично, и она слышит меня отчетливо.', 'redmi_A1.png', 3, 2),
(13, ' Samsung Galaxy A13 4/128GB Black ', 14999, 'Смартфон удобно лежит в руке, им комфортно управлять. У смартфона чувствительный сенсор, поэтому команды задаются быстро, с минимальным временем по отклику. У смартфона большой экран с четким изображением. Передаваемая картинка яркая и насыщенная, как на телевизоре. Смартфон вообще не тормозит, не выдает никаких ошибок. У смартфона большой объем памяти, поэтому можно закачивать много разных приложений и не переживать, что место закончится.', 'galaxy_A13.png', 3, 2),
(14, 'Realme 9 Pro 5G 6/128GB Midnight Black', 18999, 'В черном цвете выглядит очень строго, прям то, что мне и надо было. Очень красиво смотрится задняя панель, даже чехол никакой не ношу. По работе самого смартфона никаких претензий. Камера нормальная, получаются хорошие фотки (фронталка не очень, но я ей и не пользуюсь). 128 гб вполне хватает, флешку ставить пока не планирую.', 'redmi_A9.png', 3, 2),
(15, 'Apple iPhone 14 Pro Max 128GB Deep Purple', 125999, 'iPhone 14 Pro Max — смартфон в корпусе цвета Deep Purple, выполненном из нержавеющей стали и противоударного стекла Ceramic Shield, обладает встроенной памятью 128 Гб. Благодаря классу защиты от воды и пыли IP68 устройство не пострадает при погружении на глубину до 6 м. Экран типа Super Retina XDR Pro Motion диагональю 6,7 дюйма сделан по технологии OLED.\r\nЭта модель оборудована тремя основными и одной фронтальной камерой. Основной объектив защищен от повреждений сапфировым стеклом. Модули позволяют записывать видео в качестве 4К, фотографировать с 15-кратным приближением и двукратным удалением. Питание обеспечивает литий-ионный аккумулятор, подпитывать его можно через компьютер, сетевой адаптер или при помощи док-станции MagSafe с функцией Qi. Ресурса батареи хватает на 29 часов просмотра видеоконтента и 95 часов прослушивания музыки.', 'iphone_14.png', 3, 1),
(16, 'Ноутбук Xiaomi RedmiBook 15 JYU4525RU', 34999, 'Универсальный ноутбук Xiaomi RedmiBook 15 JYU4525RU работает на базе предустановленной системы Windows 11 Home с функциями защиты информации. Основа его вычислительной производительности — двухъядерный процессор Core i3-1115G4 и модуль UHD Graphics от Intel. Размер оперативной памяти составляет 8 Гб, емкость SSD носителя — 256 Гб.', 'xiaomi_redmibook.png', 1, 2),
(17, 'Apple MacBook Air 18/256 Gold', 80999, 'Ноутбук Apple MacBook Air 13 M1 оборудован восьмиядерным процессором Apple M1, 8 Гб оперативной памяти и SSD-диском объемом 256 Гб. Корпус цвета Gold выполнен из алюминия. Экран типа Retina диагональю 13,3 дюйма сделан на основе матрицы IPS, передает изображение разрешением 2560x1600 пикселей. Для беспроводного обмена данными предназначены модули Bluetooth 5.0 и Wi-Fi. Лэптоп оснащен двумя динамиками Dolby Atmos, есть разъем для наушников и два порта Thunderbolt 3. От аккумулятора девайс работает до 18 часов. Габариты модели 16,1х30,4х21,2 см, вес — 1,29 кг.', 'apple_macbook.png', 1, 1),
(18, 'HUAWEI MateBook D 16+512 Space Grey', 86999, 'Ноутбук HUAWEI MateBook D 16 RLEF-X i7-12700H работает на базе четырехъядерного процессора Core i7 от Intel. Его частота достигает 2,4 ГГц, что обеспечивает бесперебойное функционирование без зависаний вне зависимости от интенсивности нагрузки. Объем оперативной памяти равен 16 Гб, а жесткого диска типа SSD — 512 Гб. Предустановлена ОС Windows 11.', 'huawei_matebookD16.png', 1, 2),
(19, 'MSI Katana GF76 ', 119999, 'Особенно понравилось, что на отдельном разделе жесткого диска уже есть все нужные драйвера! Очень удобно. Это существенно экономит время. Нет предустановленной операционки, благодаря чему вы за нее не платите. Корпус греется не сильно при играх в требовательные игры. На других машинах встречал такое, что можно было об клавиатуру руки обжечь, здесь все в норме. Во всяком случае пока. Угол видимости в дисплее очень приятный. Хоть под 179 градусов от него находитесь, будет все видно отчетливо.', 'msi_katana.png', 1, 2),
(20, 'Acer Aspire 3 A315-34 ', 34999, 'Ноутбук Acer Aspire 3 A315-34 весит 1,9 кг. Аккумулятор 4810 мАч обеспечивает до 6 часов автономной работы. В пластиковом корпусе толщиной 20 мм установлены четырехъядерный процессор Intel Pentium N5030, 8 Гб оперативной и 256 Гб постоянной памяти.', 'acer_aspire.png', 1, 2),
(21, 'Apple MacBook Air 13 M2 8/256GB Midnight', 105999, 'Ноутбук Apple MacBook Air 13 M2 Midnight — восьмиядерная модель с процессом Apple M2 и ОС macOS. 13,6-дюймовый экран (2560х1664 пикселей) работает на основе технологии IPS. Тип дисплея — Liquid Retina. Антибликовое покрытие гарантирует комфорт при разном уровне внешнего освещения. В качестве накопителя используется SSD объемом 256 Гб. Оперативная память — 8 Гб. Клавиши оснащены подсветкой. Трекпад поддерживает Force Touch и Multitouch.', 'macbook_air13.png', 1, 1),
(22, 'Samsung Galaxy Tab S8 128GB Pink Gold ', 49999, 'О товаре\r\nПланшет Samsung Galaxy Tab S8 разработан на базе ОС Android 12. За счет разрешения 11-дюймового экрана 1600х2560 пикселей можно с максимальным комфортом просматривать любой контент. Модель — оптимальный вариант для рисования в графических приложениях и создания эскизов, поскольку в комплекте поставляется специальный стилус. У устройства 128 Гб встроенной памяти, поддерживается установка карты типа microSD емкостью до 1 Тб.', 'galaxy_tab_s8.png', 2, 2),
(23, 'Apple iPad mini 64GB WiFi Space Grey ', 42299, 'Новый iPad mini. Дисплей Liquid Retina 8,3 дюйма на всю переднюю панель. Мощный чип A15 Bionic с системой Neural Engine. Сверхширокоугольная фронтальная камера 12 Мп с функцией «В центре внимания». Порт USB‑C. Сверхскоростная беспроводная связь. И возможность делать записи, вносить пометки в документы и быстро сохранять свои лучшие идеи с помощью Apple Pencil (2‑го поколения), который крепится к iPad на магнитах и заряжается без проводов.', 'apple_ipad_mini.png', 2, 1),
(25, 'Realme RMP2105 4/64Gb Gray', 15999, 'Планшет Realme RMP2105 в корпусе цвета Gray обладает оперативной памятью 4 Гб, объем встроенной — 64 Гб. Устройство поддерживает использование дополнительного накопителя microSDHX вместимостью 1 Тб и одной SIM-карты формата nano. Экран диагональю 8,67 дюйма выполнен по технологии LCD, передает изображение в разрешении 800х1340 пикселей. Частота обновления — 60 Гц. Производительность обеспечивает восьмиядерный процессор. Для выхода в интернет используются мобильные сети стандартов 3G и 4G LTE, есть модуль Bluetooth.', 'realme_rmp2105.png', 2, 2),
(26, 'Apple iPad Pro 11', 110499, 'Раскашелился и получил камеру с XR, зачем? почему?', 'apple_ipadpro_11.png', 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `shoper`
--

CREATE TABLE `shoper` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_temp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` int(12) NOT NULL,
  `mail` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupouns` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `shoper`
--

INSERT INTO `shoper` (`id`, `name`, `Id_temp`, `tel`, `mail`, `coupouns`) VALUES
(1, 'Петров Петр Пертвочич', '', 1234254, 'Dungeon_master 007@gmail.', ''),
(2, 'billy Haringthon', '', 1234254, 'Dungeon_master 007@gmail.', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `mail`, `r_name`, `surname`, `phone`, `adress`, `role`) VALUES
(1, 'Ilya', '$2y$10$myOrTbMPtUamEEIq0/VRSOSS/3kjfJAIOVbnSp0H4RxZOSR3F7aSy', 'ewrtwerture', '', '', '', '', 1),
(2, 'Ilya', '$2y$10$myOrTbMPtUamEEIq0/VRSOSS/3kjfJAIOVbnSp0H4RxZOSR3F7aSy', 'ewrtwerture', '', '', '', '', 1),
(10, 'Ilya', '$2y$10$myOrTbMPtUamEEIq0/VRSOSS/3kjfJAIOVbnSp0H4RxZOSR3F7aSy', 'ewrtwerture', '', '', '', '', 1),
(11, 'Ilya', '$2y$10$myOrTbMPtUamEEIq0/VRSOSS/3kjfJAIOVbnSp0H4RxZOSR3F7aSy', 'ewrtwerture', '', '', '', '', 1),
(12, 'Ilya', '$2y$10$myOrTbMPtUamEEIq0/VRSOSS/3kjfJAIOVbnSp0H4RxZOSR3F7aSy', 'ewrtwerture', '', '', '', '', 1),
(13, 'Ilya', '$2y$10$myOrTbMPtUamEEIq0/VRSOSS/3kjfJAIOVbnSp0H4RxZOSR3F7aSy', 'ewrtwerture', '', '', '', '', 1),
(14, 'Ilya', '$2y$10$myOrTbMPtUamEEIq0/VRSOSS/3kjfJAIOVbnSp0H4RxZOSR3F7aSy', 'ewrtwerture', '', '', '', '', 1),
(15, 'Ilya1', '$2y$10$myOrTbMPtUamEEIq0/VRSOSS/3kjfJAIOVbnSp0H4RxZOSR3F7aSy', 'ewrtwerture', '', '', '', '', 1),
(16, 'assassin_910', '$2y$10$H3F/SJFFC7eiYh//tG2Te.EYOIAz86Zr.mY7iTTnwRACeUX3jqpoq', 'Yailiya2008@gmail.co', '', '', '', '', 0),
(17, 'Ашот1', '$2y$10$fB08u0Y1bpUiHf4/qRO2T.lsprNqJ1MI6C6un5wo9OvbrC.rWAttS', 'Апельсины700', '', '', '', '', 0),
(18, 'Ilya189321', '$2y$10$79HtPtM9OiBpTnFieeHkuem5aUdbA.OMQY5lmMaoPT36a8etbTJ6O', 'fsadfasdfwaeq', '', '', '', '', 0),
(19, 'kolu4aya1', '$2y$10$hsSqtDWTshbHcg62PLxO2uGozXQQ1Tf9sABG.red6rWnDPEOv97Ea', '2345 6', '', '', '', '', 0),
(20, 'фываожд1', '$2y$10$NoIwtAmLJ7COAGq.dBbsNutmrLuHOsSN6w2Lsp7nNNSvGwaHRv2NC', 'fsadfasdfwaeq', '', '', '', '', 0),
(21, 'Илья12', '$2y$10$Xk3ao4KS.o5MrjSsczapNuM.wHo0MCZvJuihDrBAlyaTsgYrhhWAi', 'fsadfasdfwaeq', '', '', '', '', 0),
(22, 'Илья', '$2y$10$z7nQeqWRQiWwWC36BXWU0uyxGzZOeFyTrLH2tluzCusK6qSLjW.8e', 'Yailiya2008@gmail.com', '', '', '', '', 1),
(23, 'Nik03', '$2y$10$rvOu2eHHUIIqbcZnoVO4nugErAFOrGt5ZjoaQyLOtqInrOcWQqXq6', 'filato2869@gmail.com', 'asdfsadf', 'sadfasdf', 'asfasdf', 'awf', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coupon_1`
--
ALTER TABLE `coupon_1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shoper`
--
ALTER TABLE `shoper`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `coupon_1`
--
ALTER TABLE `coupon_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT для таблицы `News`
--
ALTER TABLE `News`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `shoper`
--
ALTER TABLE `shoper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
