-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2018 a las 04:43:38
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `csi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `backbone`
--

CREATE TABLE `backbone` (
  `id_back` int(11) NOT NULL,
  `puerto` varchar(200) NOT NULL,
  `equipo` varchar(200) NOT NULL,
  `id_equipoRegistro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `backbone`
--

INSERT INTO `backbone` (`id_back`, `puerto`, `equipo`, `id_equipoRegistro`) VALUES
(687, '27', ' FUS1R1', 0),
(690, '28', ' FURSDF', 107),
(691, '34', ' 4324', 107),
(693, '28', ' FUS1R1', 107),
(697, '15', ' FUS1R1', 121),
(698, '20', ' FUR1S11', 121),
(699, '', ' ', 121),
(700, '12', 'SGC1R1S3', 122),
(701, '23', 'SGC1R1S2', 122),
(702, '23', ' FUR1S1', 121),
(703, '34', 'DSAD', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edificio`
--

CREATE TABLE `edificio` (
  `id_edi` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `edificio`
--

INSERT INTO `edificio` (`id_edi`, `nombre`) VALUES
(1, 'CREAD'),
(2, 'TORRE ADMI (A)\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tipo` varchar(300) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `sistemaOpe` varchar(200) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `ubica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `nombre`, `tipo`, `marca`, `modelo`, `sistemaOpe`, `ip`, `ubica`) VALUES
(121, 'FUR1S1', 'switch', 'Cisco', 'FJSEI', 'linux ubuntu', '191232.31', 1),
(122, 'SGC1R1S3', 'switch', 'CISCO', '2960', 'linux ubuntu', '192.168.134.212', 1),
(123, 'FUS1R1', 'switch', 'CISCO', 'WERT1343', 'linux Ubuntu', '193.23.231.3123', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `id_mante` int(11) NOT NULL,
  `equipo` int(11) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `hora_inic` varchar(50) NOT NULL,
  `hora_f` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mantenimientos`
--

INSERT INTO `mantenimientos` (`id_mante`, `equipo`, `fecha`, `hora_inic`, `hora_f`, `descripcion`) VALUES
(14, 107, '08 June 2018', '1:12 am', '7:12 am', 'es un gran mantenimiento'),
(16, 121, '21 June 2018', '7:26 pm', '8:15 pm', 'SE HIZO MANTENIMIENTO  PREVENTIVO AL SWITCH '),
(17, 121, '14 June 2018', '3:10 pm', '3:10 pm', ''),
(18, 121, '23 June 2018', '7:31 pm', '9:00 pm', 'Se realizo un mantenimiento preventivo a los raks  para evitar inconveniente de funcionamiento a futuro .');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubi` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `id_edificio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubi`, `nombre`, `id_edificio`) VALUES
(1, 'PISO 2 / PEDAGOGÍA\n\n', 1),
(2, 'SOTANO\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uploads`
--

CREATE TABLE `uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pertenece` int(11) DEFAULT NULL,
  `momento` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `size` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uploads`
--

INSERT INTO `uploads` (`id`, `name`, `ruta`, `pertenece`, `momento`, `tipo`, `size`) VALUES
(287, 'img004.jpg', '/uploads/img004.jpg', 121, '', 'image/jpeg', '1,03 MB'),
(288, 'img003.jpg', '/uploads/img003.jpg', 121, '', 'image/jpeg', '2,05 MB'),
(291, 'img003.jpg', '/uploads/img003.jpg', 121, '', 'image/jpeg', '2,05 MB'),
(292, 'img004.jpg', '/uploads/img004.jpg', 121, '', 'image/jpeg', '1,03 MB'),
(293, 'img006.jpg', '/uploads/img006.jpg', 121, '', 'image/jpeg', '2,04 MB'),
(294, 'img005.jpg', '/uploads/img005.jpg', 121, '', 'image/jpeg', '2,43 MB'),
(295, 'cisco.3gp', '/uploads/cisco.3gp', 122, '', 'video/3gpp', '5,35 MB'),
(296, 'cisco.mp4', '/uploads/cisco.mp4', 122, '', 'video/mp4', '133,7 MB'),
(297, 'a4.docx', '/uploads/a4.docx', 121, '', 'application/vnd.openxmlformats-officedocument.word', '12,46 KB'),
(298, 'Anteproyecto  .docx', '/uploads/Anteproyecto  .docx', 121, '', 'application/vnd.openxmlformats-officedocument.word', '585,01 KB'),
(299, 'baner Final Modificado .jpg', '/uploads/baner Final Modificado .jpg', 121, '', 'image/jpeg', '77,9 KB'),
(300, 'baner principal.jpg', '/uploads/baner principal.jpg', 121, '', 'image/jpeg', '64,47 KB'),
(301, 'banner Final.jpg', '/uploads/banner Final.jpg', 121, '', 'image/jpeg', '79,74 KB'),
(302, 'base de datos del sistema de experiencias.png', '/uploads/base de datos del sistema de experiencias.png', 121, '', 'image/png', '104,89 KB'),
(303, 'cisco.3gp', '/uploads/cisco.3gp', 123, '', 'video/3gpp', '5,35 MB'),
(304, 'cisco.mp4', '/uploads/cisco.mp4', 123, '', 'video/mp4', '133,7 MB');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `backbone`
--
ALTER TABLE `backbone`
  ADD PRIMARY KEY (`id_back`);

--
-- Indices de la tabla `edificio`
--
ALTER TABLE `edificio`
  ADD PRIMARY KEY (`id_edi`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`id_mante`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubi`);

--
-- Indices de la tabla `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertenece` (`pertenece`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `backbone`
--
ALTER TABLE `backbone`
  MODIFY `id_back` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=704;
--
-- AUTO_INCREMENT de la tabla `edificio`
--
ALTER TABLE `edificio`
  MODIFY `id_edi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `id_mante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id_ubi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`pertenece`) REFERENCES `equipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
