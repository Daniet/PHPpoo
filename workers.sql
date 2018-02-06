-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-02-2018 a las 09:52:32
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `workers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL,
  `e_name` varchar(25) DEFAULT NULL,
  `e_lastname` varchar(25) DEFAULT NULL,
  `e_document` int(11) DEFAULT NULL,
  `e_email` varchar(50) DEFAULT NULL,
  `e_salary` int(11) DEFAULT NULL,
  `id_type_document` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`id_employee`, `e_name`, `e_lastname`, `e_document`, `e_email`, `e_salary`, `id_type_document`) VALUES
(1, 'Daniel', 'Andres', 0, 'dapinto7@misena.edu.co', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee_phone`
--

CREATE TABLE `employee_phone` (
  `id_employee_phone` int(11) NOT NULL,
  `number_phone` bigint(11) DEFAULT NULL,
  `id_employee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employee_phone`
--

INSERT INTO `employee_phone` (`id_employee_phone`, `number_phone`, `id_employee`) VALUES
(1, 3208022760, 1),
(2, 5555555555, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history_pay`
--

CREATE TABLE `history_pay` (
  `id_history_pay` int(11) NOT NULL,
  `date_pay` date DEFAULT NULL,
  `pay` bigint(20) DEFAULT NULL,
  `id_employee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `history_pay`
--

INSERT INTO `history_pay` (`id_history_pay`, `date_pay`, `pay`, `id_employee`) VALUES
(1, '2018-02-05', 0, 1),
(2, '2018-01-01', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_document`
--

CREATE TABLE `type_document` (
  `id_type_document` int(11) NOT NULL,
  `td_name_type_document` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `type_document`
--

INSERT INTO `type_document` (`id_type_document`, `td_name_type_document`) VALUES
(1, 'CC'),
(2, 'CE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indices de la tabla `employee_phone`
--
ALTER TABLE `employee_phone`
  ADD PRIMARY KEY (`id_employee_phone`);

--
-- Indices de la tabla `history_pay`
--
ALTER TABLE `history_pay`
  ADD PRIMARY KEY (`id_history_pay`);

--
-- Indices de la tabla `type_document`
--
ALTER TABLE `type_document`
  ADD PRIMARY KEY (`id_type_document`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `employee_phone`
--
ALTER TABLE `employee_phone`
  MODIFY `id_employee_phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `history_pay`
--
ALTER TABLE `history_pay`
  MODIFY `id_history_pay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `type_document`
--
ALTER TABLE `type_document`
  MODIFY `id_type_document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
