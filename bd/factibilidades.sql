-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2023 a las 05:11:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `factibilidades`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factibilidades`
--

CREATE TABLE `factibilidades` (
  `id` int(10) NOT NULL,
  `codigo_cad` varchar(40) NOT NULL,
  `departamento` varchar(60) NOT NULL,
  `nombre_cad` varchar(60) DEFAULT NULL,
  `opcion` varchar(10) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `barrio` varchar(60) DEFAULT NULL,
  `latitud` varchar(30) DEFAULT NULL,
  `longitud` varchar(30) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `estado` int(5) DEFAULT NULL,
  `canal_principal` varchar(30) DEFAULT NULL,
  `canal_backup` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factibilidades`
--

INSERT INTO `factibilidades` (`id`, `codigo_cad`, `departamento`, `nombre_cad`, `opcion`, `direccion`, `barrio`, `latitud`, `longitud`, `fecha`, `estado`, `canal_principal`, `canal_backup`) VALUES
(1, '32452', 'ANTIOQUIA', 'MEDELLIN CAD 1 /NORTE', '1', 'KR 29 # 102 - 20', 'Antioquia', '333535', '352462', '25/05/2023', 1, 'Ok', 'Ok');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `factibilidades`
--
ALTER TABLE `factibilidades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factibilidades`
--
ALTER TABLE `factibilidades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
