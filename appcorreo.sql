-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2015 a las 14:58:52
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `appcorreo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
`id` int(11) NOT NULL,
  `destinatario` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `mensaje` text NOT NULL,
  `asunto` text NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `emails`
--

INSERT INTO `emails` (`id`, `destinatario`, `iduser`, `mensaje`, `asunto`, `estado`) VALUES
(1, 'bryan103@hotmail.com', 60, 'asdasd    ', 'asdas', 'Enviado'),
(2, 'bryan103@hotmail.com', 60, 'Sirve??    ', 'Prueba', 'Enviado'),
(5, 'cesalazars@est.utn.ac.cr', 60, 'hola    ', 'prueba', 'Enviado'),
(19, 'css_1307@hotmail.com', 56, 'od    ', 'Prueba', 'Enviado'),
(20, 'cesalazars@est.utn.ac.cr', 61, 'Prueba de puertos&nbsp;    ', 'Prueba', 'Enviado'),
(21, 'css_1307@hotmail.com', 64, 'Verificar nombre    ', 'Verificar', 'Enviado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `password`, `estado`, `code`, `email`) VALUES
(56, 'Carlos', 'root', '58d65bdd8944dc8375c30b2ba10ae699', 1, 7061, 'carlossalazar1307@gmail.com'),
(60, 'carlos', 'prueba', '81dc9bdb52d04dc20036dbd8313ed055', 1, 6908, 'carlos94salazar@gmail.com'),
(61, 'Carlos', 'carlos', '81dc9bdb52d04dc20036dbd8313ed055', 1, 4735, 'css_1307@hotmail.com'),
(64, 'pepe', 'pepe', '81dc9bdb52d04dc20036dbd8313ed055', 1, 5942, 'cesalazars@est.utn.ac.cr');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `emails`
--
ALTER TABLE `emails`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `emails`
--
ALTER TABLE `emails`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
