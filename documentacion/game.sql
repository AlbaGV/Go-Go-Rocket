-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2017 a las 19:24:00
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `game`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pass`
--

CREATE TABLE `pass` (
  `usuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `idusuario` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pass`
--

INSERT INTO `pass` (`usuario`, `password`, `idusuario`) VALUES
('admin', 'gundam', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking`
--

CREATE TABLE `ranking` (
  `id` int(4) NOT NULL,
  `nickname` varchar(30) COLLATE utf8_bin NOT NULL,
  `score` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ranking`
--

INSERT INTO `ranking` (`id`, `nickname`, `score`, `date`) VALUES
(1, 'zombie_wolf', 2000, '2017-05-03 18:44:28'),
(4, 'pepe', 5000, '2000-01-31 00:00:00'),
(6, 'pll', 100, '2000-01-01 00:00:00'),
(684, 'roll', 1000, '2017-05-19 19:26:54'),
(714, 'undefined', 9, '2017-05-21 18:15:16'),
(715, 'undefined', 6, '2017-05-21 18:17:18'),
(716, 'null', 6, '2017-05-21 18:57:36'),
(717, 'null', 12, '2017-05-21 18:58:12'),
(718, 'null', 10, '2017-05-21 19:05:46'),
(719, '<?php Print($nickname); ?>', 8, '2017-05-21 19:18:25'),
(720, '<?php Print($_GET[''nickname''])', 5, '2017-05-21 19:19:37'),
(721, 'undefined', 14, '2017-05-21 19:24:07'),
(722, 'ert', 12, '2017-05-21 19:30:42'),
(723, 'vru', 98, '2017-05-23 18:52:25'),
(724, 'pablo', 67, '2017-05-26 17:57:41'),
(725, 'fdgdf', 17, '2017-05-26 18:49:04'),
(726, 'huio', 14, '2017-05-27 15:42:34'),
(727, 'fdg', 25, '2017-05-27 15:45:55'),
(728, 'fdg', 25, '2017-05-27 15:47:05'),
(729, 'fdg', 9, '2017-05-27 15:47:58'),
(730, 'fdg', 24, '2017-05-27 15:51:53'),
(731, 'fire', 40, '2017-05-27 15:54:51'),
(732, 'fire', 18, '2017-05-27 15:57:41'),
(733, 'fire', 30, '2017-05-27 15:58:01'),
(734, 'fire', 14, '2017-05-27 15:58:18'),
(735, 'fire', 14, '2017-05-27 15:58:54'),
(817, 'fdg', 11, '2017-05-28 11:59:30'),
(818, 'fgd', 7, '2017-05-28 12:15:16'),
(819, 'edsf', 45, '2017-05-28 12:58:19'),
(820, 'edsf', 21, '2017-05-28 12:58:32'),
(821, 'pru', 17, '2017-05-28 13:01:34'),
(822, 'pru', 79, '2017-05-28 13:02:59'),
(823, 'pru', 26, '2017-05-28 13:03:17'),
(824, 'pru', 28, '2017-05-28 13:04:50'),
(825, 'pru', 299, '2017-05-28 13:07:56'),
(826, 'zombie_wolf', 57, '2017-05-28 18:06:51'),
(827, 'zombie_wolf', 89, '2017-05-28 18:07:39'),
(828, 'pru', 259, '2017-05-29 18:09:38'),
(829, 'pru', 1000000, '2222-12-01 00:00:00'),
(830, 'pru', 8, '2017-05-29 20:05:44'),
(831, 'pru', 7, '2017-05-29 20:05:56'),
(832, 'pru', 10, '2017-05-29 20:40:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pass`
--
ALTER TABLE `pass`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `usuario` (`usuario`,`password`);

--
-- Indices de la tabla `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pass`
--
ALTER TABLE `pass`
  MODIFY `idusuario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=833;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
