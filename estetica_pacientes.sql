-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2024 a las 07:15:37
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
-- Base de datos: `desarrollo_php_wordpress`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estetica_pacientes`
--

CREATE TABLE `estetica_pacientes` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estetica_pacientes`
--

INSERT INTO `estetica_pacientes` (`Id`, `nombre`, `apellido`, `correo`, `fecha`) VALUES
(1, 'Hanna', 'pastor', 'hpastor@frd.utn.edu.ar', '2024-07-06'),
(2, 'Pedro', 'Perez', 'pedroperez@hotmail.com', '2024-05-05'),
(3, 'Pedro', 'Perez', 'pedroperez@hotmail.com', '2024-05-05'),
(4, 'Perez', 'Marquez', 'perezmarquez@outlook.com', '2024-10-10'),
(5, 'Pedro', 'Pastor', 'pedroperez@hotmail.com', '2024-06-04'),
(6, 'Pedro', 'Perez', 'pedroperez@hotmail.com', '2024-07-06'),
(11, 'Pedro', 'pastor', 'pedroperez@hotmail.com', '2024-09-09'),
(12, 'Pedro', 'pastor', 'pedroperez@hotmail.com', '2024-09-09'),
(13, 'hola', 'hola', 'hola@gmail.com', '2024-03-31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estetica_pacientes`
--
ALTER TABLE `estetica_pacientes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estetica_pacientes`
--
ALTER TABLE `estetica_pacientes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
