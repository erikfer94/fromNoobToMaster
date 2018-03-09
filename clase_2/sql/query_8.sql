-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2018 a las 05:22:33
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `curso_php`
--
CREATE DATABASE IF NOT EXISTS `curso_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `curso_php`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_puesto`
--

CREATE TABLE `c_puesto` (
  `c_puesto_id` tinyint(4) UNSIGNED NOT NULL,
  `c_puesto_name` varchar(25) NOT NULL,
  `c_puesto_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `c_puesto`
--

INSERT INTO `c_puesto` (`c_puesto_id`, `c_puesto_name`, `c_puesto_status`) VALUES
(1, 'Presidente', 1),
(2, 'Director Ejecutivo', 1),
(3, 'DIrector de Sistemas', 1),
(4, 'Sr. Developer', 1),
(5, 'Project Manager', 1),
(6, 'Jr. Developer', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_organigrama`
--

CREATE TABLE `f_organigrama` (
  `f_organigrama_id` smallint(5) UNSIGNED NOT NULL,
  `f_organigrama_puesto` tinyint(4) UNSIGNED NOT NULL,
  `f_organigrama_padre` smallint(5) UNSIGNED DEFAULT NULL,
  `f_organigrama_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `f_organigrama`
--

INSERT INTO `f_organigrama` (`f_organigrama_id`, `f_organigrama_puesto`, `f_organigrama_padre`, `f_organigrama_status`) VALUES
(1, 1, NULL, 1),
(2, 2, 1, 1),
(3, 3, 1, 1),
(4, 5, 2, 1),
(5, 4, 4, 1),
(6, 6, 5, 1),
(7, 6, 5, 1),
(8, 6, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_organigrama_empleado`
--

CREATE TABLE `f_organigrama_empleado` (
  `f_organigrama_empleado_id` smallint(5) UNSIGNED NOT NULL,
  `f_organigrama_empleado_organigrama` smallint(5) UNSIGNED NOT NULL,
  `f_organigrama_empleado_empleado` tinyint(3) UNSIGNED NOT NULL,
  `f_organigrama_empleado_inicio` date NOT NULL,
  `f_organigrama_empleado_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `f_organigrama_empleado`
--

INSERT INTO `f_organigrama_empleado` (`f_organigrama_empleado_id`, `f_organigrama_empleado_organigrama`, `f_organigrama_empleado_empleado`, `f_organigrama_empleado_inicio`, `f_organigrama_empleado_fin`) VALUES
(1, 1, 1, '2018-03-08', NULL),
(2, 2, 3, '2018-03-08', NULL),
(3, 4, 2, '2018-03-08', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `o_empleado`
--

CREATE TABLE `o_empleado` (
  `o_empleado_id` tinyint(3) UNSIGNED NOT NULL,
  `o_empleado_name` varchar(25) NOT NULL,
  `o_empleado_lastname` varchar(25) NOT NULL,
  `o_empleado_birth` date NOT NULL,
  `o_empleado_gender` varchar(1) NOT NULL,
  `o_empleado_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `o_empleado`
--

INSERT INTO `o_empleado` (`o_empleado_id`, `o_empleado_name`, `o_empleado_lastname`, `o_empleado_birth`, `o_empleado_gender`, `o_empleado_status`) VALUES
(1, 'Juan', 'Gonzalez', '1994-09-18', 'M', 1),
(2, 'Erik', 'Viveros', '1994-12-04', 'M', 1),
(3, 'José', 'Peréz', '1992-10-26', 'M', 1),
(4, 'Estrella', 'Cortes', '1994-11-30', 'F', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `c_puesto`
--
ALTER TABLE `c_puesto`
  ADD PRIMARY KEY (`c_puesto_id`);

--
-- Indices de la tabla `f_organigrama`
--
ALTER TABLE `f_organigrama`
  ADD PRIMARY KEY (`f_organigrama_id`),
  ADD KEY `puesto_prganigrama` (`f_organigrama_puesto`),
  ADD KEY `jefe_empleado` (`f_organigrama_padre`);

--
-- Indices de la tabla `f_organigrama_empleado`
--
ALTER TABLE `f_organigrama_empleado`
  ADD PRIMARY KEY (`f_organigrama_empleado_id`),
  ADD KEY `organigrama_empleado` (`f_organigrama_empleado_organigrama`),
  ADD KEY `empleado_organigrama` (`f_organigrama_empleado_empleado`);

--
-- Indices de la tabla `o_empleado`
--
ALTER TABLE `o_empleado`
  ADD PRIMARY KEY (`o_empleado_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `c_puesto`
--
ALTER TABLE `c_puesto`
  MODIFY `c_puesto_id` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `f_organigrama`
--
ALTER TABLE `f_organigrama`
  MODIFY `f_organigrama_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `f_organigrama_empleado`
--
ALTER TABLE `f_organigrama_empleado`
  MODIFY `f_organigrama_empleado_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `o_empleado`
--
ALTER TABLE `o_empleado`
  MODIFY `o_empleado_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `f_organigrama`
--
ALTER TABLE `f_organigrama`
  ADD CONSTRAINT `jefe_empleado` FOREIGN KEY (`f_organigrama_padre`) REFERENCES `f_organigrama` (`f_organigrama_id`),
  ADD CONSTRAINT `puesto_prganigrama` FOREIGN KEY (`f_organigrama_puesto`) REFERENCES `c_puesto` (`c_puesto_id`);

--
-- Filtros para la tabla `f_organigrama_empleado`
--
ALTER TABLE `f_organigrama_empleado`
  ADD CONSTRAINT `empleado_organigrama` FOREIGN KEY (`f_organigrama_empleado_empleado`) REFERENCES `o_empleado` (`o_empleado_id`),
  ADD CONSTRAINT `organigrama_empleado` FOREIGN KEY (`f_organigrama_empleado_organigrama`) REFERENCES `f_organigrama` (`f_organigrama_id`);
