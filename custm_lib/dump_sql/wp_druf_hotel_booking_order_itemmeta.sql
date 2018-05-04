-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-05-2018 a las 01:34:11
-- Versión del servidor: 5.6.32-78.1
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- mysql> select * from wp_druf_hotel_booking_order_itemmeta where hotel_booking_order_item_id = 18;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lacason4_ss_dbnamec0a`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_druf_hotel_booking_order_itemmeta`
--

CREATE TABLE `wp_druf_hotel_booking_order_itemmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_booking_order_item_id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `wp_druf_hotel_booking_order_itemmeta`
--

INSERT INTO `wp_druf_hotel_booking_order_itemmeta` (`meta_id`, `hotel_booking_order_item_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'product_id', '4132'),
(2, 1, 'qty', '1'),
(3, 1, 'check_in_date', '1518825600'),
(4, 1, 'check_out_date', '1518998400'),
(5, 1, 'subtotal', '5500'),
(6, 1, 'total', '6380'),
(7, 1, 'tax_total', '880'),
(8, 2, 'product_id', '4132'),
(9, 2, 'qty', '1'),
(10, 2, 'check_in_date', '1519430400'),
(11, 2, 'check_out_date', '1519603200'),
(12, 2, 'subtotal', '5500'),
(13, 2, 'total', '6380'),
(14, 2, 'tax_total', '880'),
(15, 3, 'product_id', '4154'),
(16, 3, 'qty', '2'),
(17, 3, 'check_in_date', '1519171200'),
(18, 3, 'check_out_date', '1519430400'),
(19, 3, 'subtotal', '22140'),
(20, 3, 'total', '25682.4'),
(21, 3, 'tax_total', '3542.4'),
(22, 4, 'product_id', '4154'),
(23, 4, 'qty', '1'),
(24, 4, 'check_in_date', '1519171200'),
(25, 4, 'check_out_date', '1519257600'),
(26, 4, 'subtotal', '3690'),
(27, 4, 'total', '4280.4'),
(28, 4, 'tax_total', '590.4'),
(29, 5, 'product_id', '4132'),
(30, 5, 'qty', '1'),
(31, 5, 'check_in_date', '1519430400'),
(32, 5, 'check_out_date', '1519516800'),
(33, 5, 'subtotal', '2750'),
(34, 5, 'total', '3190'),
(35, 5, 'tax_total', '440'),
(36, 6, 'product_id', '4132'),
(37, 6, 'qty', '1'),
(38, 6, 'check_in_date', '1521244800'),
(39, 6, 'check_out_date', '1521417600'),
(40, 6, 'subtotal', '5500'),
(41, 6, 'total', '6380'),
(42, 6, 'tax_total', '880'),
(43, 7, 'product_id', '4132'),
(44, 7, 'qty', '1'),
(45, 7, 'check_in_date', '1520467200'),
(46, 7, 'check_out_date', '1520726400'),
(47, 7, 'subtotal', '8250'),
(48, 7, 'total', '9570'),
(49, 7, 'tax_total', '1320'),
(50, 8, 'product_id', '4154'),
(51, 8, 'qty', '2'),
(52, 8, 'check_in_date', '1521590400'),
(53, 8, 'check_out_date', '1521763200'),
(54, 8, 'subtotal', '14760'),
(55, 8, 'total', '17564.4'),
(56, 8, 'tax_total', '2804.4'),
(57, 9, 'product_id', '4151'),
(58, 9, 'qty', '1'),
(59, 9, 'check_in_date', '1523059200'),
(60, 9, 'check_out_date', '1523145600'),
(61, 9, 'subtotal', '3200'),
(62, 9, 'total', '3808'),
(63, 9, 'tax_total', '608'),
(64, 10, 'product_id', '4132'),
(65, 10, 'qty', '1'),
(66, 10, 'check_in_date', '1522972800'),
(67, 10, 'check_out_date', '1523145600'),
(68, 10, 'subtotal', '5500'),
(69, 10, 'total', '6545'),
(70, 10, 'tax_total', '1045'),
(71, 11, 'product_id', '4132'),
(72, 11, 'qty', '2'),
(73, 11, 'check_in_date', '1522972800'),
(74, 11, 'check_out_date', '1523145600'),
(75, 11, 'subtotal', '11000'),
(76, 11, 'total', '13090'),
(77, 11, 'tax_total', '2090'),
(78, 12, 'product_id', '4158'),
(79, 12, 'qty', '2'),
(80, 12, 'check_in_date', '1522195200'),
(81, 12, 'check_out_date', '1522281600'),
(82, 12, 'subtotal', '7780'),
(83, 12, 'total', '9258.2'),
(84, 12, 'tax_total', '1478.2'),
(85, 13, 'product_id', '4160'),
(86, 13, 'qty', '3'),
(87, 13, 'check_in_date', '1522540800'),
(88, 13, 'check_out_date', '1525046400'),
(89, 13, 'subtotal', '338430'),
(90, 13, 'total', '402731.7'),
(91, 13, 'tax_total', '64301.7'),
(92, 14, 'product_id', '4132'),
(93, 14, 'qty', '2'),
(94, 14, 'check_in_date', '1522454400'),
(95, 14, 'check_out_date', '1524096000'),
(96, 14, 'subtotal', '104500'),
(97, 14, 'total', '124355'),
(98, 14, 'tax_total', '19855'),
(99, 15, 'product_id', '4156'),
(100, 15, 'qty', '1'),
(101, 15, 'check_in_date', '1522281600'),
(102, 15, 'check_out_date', '1522368000'),
(103, 15, 'subtotal', '3690'),
(104, 15, 'total', '4391.1'),
(105, 15, 'tax_total', '701.1'),
(106, 16, 'product_id', '4132'),
(107, 16, 'qty', '1'),
(108, 16, 'check_in_date', '1522281600'),
(109, 16, 'check_out_date', '1522454400'),
(110, 16, 'subtotal', '5500'),
(111, 16, 'total', '6545'),
(112, 16, 'tax_total', '1045'),
(113, 17, 'product_id', '4158'),
(114, 17, 'qty', '1'),
(115, 17, 'check_in_date', '1522368000'),
(116, 17, 'check_out_date', '1522540800'),
(117, 17, 'subtotal', '7780'),
(118, 17, 'total', '9258.2'),
(119, 17, 'tax_total', '1478.2'),
(120, 18, 'product_id', '4156'),
(121, 18, 'qty', '1'),
(122, 18, 'check_in_date', '1522368000'),
(123, 18, 'check_out_date', '1522454400'),
(124, 18, 'subtotal', '3690'),
(125, 18, 'total', '4391.1'),
(126, 18, 'tax_total', '701.1'),
(127, 19, 'product_id', '4151'),
(128, 19, 'qty', '1'),
(129, 19, 'check_in_date', '1522800000'),
(130, 19, 'check_out_date', '1522886400'),
(131, 19, 'subtotal', '3200'),
(132, 19, 'total', '3808'),
(133, 19, 'tax_total', '608'),
(134, 20, 'product_id', '4154'),
(135, 20, 'qty', '4'),
(136, 20, 'check_in_date', '1531440000'),
(137, 20, 'check_out_date', '1531612800'),
(138, 20, 'subtotal', '29520'),
(139, 20, 'total', '35128.8'),
(140, 20, 'tax_total', '5608.8'),
(141, 21, 'product_id', '4158'),
(142, 21, 'qty', '2'),
(143, 21, 'check_in_date', '1531440000'),
(144, 21, 'check_out_date', '1531612800'),
(145, 21, 'subtotal', '15560'),
(146, 21, 'total', '18516.4'),
(147, 21, 'tax_total', '2956.4'),
(148, 22, 'product_id', '4132'),
(149, 22, 'qty', '1'),
(150, 22, 'check_in_date', '1535068800'),
(151, 22, 'check_out_date', '1535241600'),
(152, 22, 'subtotal', '5500'),
(153, 22, 'total', '6545'),
(154, 22, 'tax_total', '1045'),
(155, 23, 'product_id', '4154'),
(156, 23, 'qty', '1'),
(157, 23, 'check_in_date', '1530835200'),
(158, 23, 'check_out_date', '1531008000'),
(159, 23, 'subtotal', '7380'),
(160, 23, 'total', '8782.2'),
(161, 23, 'tax_total', '1402.2'),
(162, 24, 'product_id', '4132'),
(163, 24, 'qty', '1'),
(164, 24, 'check_in_date', '1523577600'),
(165, 24, 'check_out_date', '1523750400'),
(166, 24, 'subtotal', '5500'),
(167, 24, 'total', '6545'),
(168, 24, 'tax_total', '1045'),
(169, 25, 'product_id', '4132'),
(170, 25, 'qty', '1'),
(171, 25, 'check_in_date', '1523664000'),
(172, 25, 'check_out_date', '1523750400'),
(173, 25, 'subtotal', '2750'),
(174, 25, 'total', '3272.5'),
(175, 25, 'tax_total', '522.5'),
(176, 26, 'product_id', '4160'),
(177, 26, 'qty', '1'),
(178, 26, 'check_in_date', '1523577600'),
(179, 26, 'check_out_date', '1523664000'),
(180, 26, 'subtotal', '3890'),
(181, 26, 'total', '4629.1'),
(182, 26, 'tax_total', '739.1'),
(183, 27, 'product_id', '4132'),
(184, 27, 'qty', '5'),
(185, 27, 'check_in_date', '1524182400'),
(186, 27, 'check_out_date', '1524528000'),
(187, 27, 'subtotal', '55000'),
(188, 27, 'total', '65450'),
(189, 27, 'tax_total', '10450'),
(190, 28, 'product_id', '4132'),
(191, 28, 'qty', '1'),
(192, 28, 'check_in_date', '1524873600'),
(193, 28, 'check_out_date', '1524960000'),
(194, 28, 'subtotal', '2750'),
(195, 28, 'total', '3272.5'),
(196, 28, 'tax_total', '522.5'),
(197, 29, 'product_id', '4158'),
(198, 29, 'qty', '1'),
(199, 29, 'check_in_date', '1524528000'),
(200, 29, 'check_out_date', '1524700800'),
(201, 29, 'subtotal', '7780'),
(202, 29, 'total', '9258.2'),
(203, 29, 'tax_total', '1478.2'),
(204, 30, 'product_id', '4158'),
(205, 30, 'qty', '1'),
(206, 30, 'check_in_date', '1525478400'),
(207, 30, 'check_out_date', '1525564800'),
(208, 30, 'subtotal', '3890'),
(209, 30, 'total', '4629.1'),
(210, 30, 'tax_total', '739.1'),
(211, 31, 'product_id', '4158'),
(212, 31, 'qty', '1'),
(213, 31, 'check_in_date', '1524873600'),
(214, 31, 'check_out_date', '1524960000'),
(215, 31, 'subtotal', '3890'),
(216, 31, 'total', '4629.1'),
(217, 31, 'tax_total', '739.1'),
(218, 32, 'product_id', '4132'),
(219, 32, 'qty', '1'),
(220, 32, 'check_in_date', '1524960000'),
(221, 32, 'check_out_date', '1525046400'),
(222, 32, 'subtotal', '2750'),
(223, 32, 'total', '3272.5'),
(224, 32, 'tax_total', '522.5'),
(225, 33, 'product_id', '4132'),
(226, 33, 'qty', '1'),
(227, 33, 'check_in_date', '1525305600'),
(228, 33, 'check_out_date', '1525392000'),
(229, 33, 'subtotal', '2750'),
(230, 33, 'total', '3272.5'),
(231, 33, 'tax_total', '522.5'),
(232, 34, 'product_id', '4132'),
(233, 34, 'qty', '1'),
(234, 34, 'check_in_date', '1525392000'),
(235, 34, 'check_out_date', '1525478400'),
(236, 34, 'subtotal', '2750'),
(237, 34, 'total', '3272.5'),
(238, 34, 'tax_total', '522.5'),
(239, 35, 'product_id', '4132'),
(240, 35, 'qty', '1'),
(241, 35, 'check_in_date', '1525737600'),
(242, 35, 'check_out_date', '1525824000'),
(243, 35, 'subtotal', '2750'),
(244, 35, 'total', '3272.5'),
(245, 35, 'tax_total', '522.5'),
(246, 36, 'product_id', '4132'),
(247, 36, 'qty', '3'),
(248, 36, 'check_in_date', '1527206400'),
(249, 36, 'check_out_date', '1527379200'),
(250, 36, 'subtotal', '16500'),
(251, 36, 'total', '19635'),
(252, 36, 'tax_total', '3135'),
(253, 37, 'product_id', '4132'),
(254, 37, 'qty', '1'),
(255, 37, 'check_in_date', '1525478400'),
(256, 37, 'check_out_date', '1525564800'),
(257, 37, 'subtotal', '2750'),
(258, 37, 'total', '3272.5'),
(259, 37, 'tax_total', '522.5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wp_druf_hotel_booking_order_itemmeta`
--
ALTER TABLE `wp_druf_hotel_booking_order_itemmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD UNIQUE KEY `meta_id` (`meta_id`),
  ADD KEY `hotel_booking_order_item_id` (`hotel_booking_order_item_id`),
  ADD KEY `meta_key` (`meta_key`(250));

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `wp_druf_hotel_booking_order_itemmeta`
--
ALTER TABLE `wp_druf_hotel_booking_order_itemmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
