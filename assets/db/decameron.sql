-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2024 a las 06:11:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `numeroboletos` int(50) NOT NULL,
  `Fechasalida` varchar(100) NOT NULL,
  `Nombre_completo` varchar(200) NOT NULL,
  `Apellido_paterno` varchar(100) NOT NULL,
  `Apellido_materno` varchar(100) NOT NULL,
  `Destino` varchar(100) NOT NULL,
  `Fecharegreso` varchar(50) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `horasalida` varchar(50) NOT NULL,
  `Discapacidad` varchar(100) NOT NULL,
  `Municipio` varchar(100) NOT NULL,
  `Colonia` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`numeroboletos`, `Fechasalida`, `Nombre_completo`, `Apellido_paterno`, `Apellido_materno`, `Destino`, `Fecharegreso`, `cedula`, `horasalida`, `Discapacidad`, `Municipio`, `Colonia`, `Telefono`) VALUES
(1, '2024-01-18', 'juan', 'garzon', 'garzon', 'd', '2024-01-18', 'otro', 'o+', 'no', 'bogota', 'bogota', '777'),
(8888, '2024-01-18', 'diego', 'pinzon', 'gonzalez', 'quito', '2024-01-18', '65564564', '12:10', 'no', 'bogota', 'bogota', '777'),
(99999999, '2024-01-18', 'sdasdfs', 'sdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsd', '2024-01-18', 'sdfsdfsfs', 'sdfsdfs', 'sdfsdfsd', 'sdfsdf', 'sdfsdf', 'sdfsdf'),
(2147483647, '2024-01-19', 'diego sebastian', 'pinzon', 'gonzalez', 'quito', '2024-01-19', '52752752', '12:10', 'no', 'bogota', 'bogota', '777');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numeroboletos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
