-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2022 a las 04:20:05
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cetis64`
--
CREATE DATABASE cetis64;
USE cetis64;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_sesion`
--

CREATE TABLE `inicio_sesion` (
  `correo` varchar(255) DEFAULT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyect` varchar(10) NOT NULL,
  `carrera_proyect` varchar(100) DEFAULT NULL,
  `nombre_proyect` varchar(100) DEFAULT NULL,
  `descripcion_proyect` text DEFAULT NULL,
  `precio_proyect` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrate`
--

CREATE TABLE `registrate` (
  `nombre` varchar(100) DEFAULT NULL,
  `apellido_p` varchar(100) DEFAULT NULL,
  `apellido_m` varchar(100) DEFAULT NULL,
  `correo` varchar(255) NOT NULL,
  `pass` varchar(16) DEFAULT NULL,
  `nombre_de_usuario` varchar(50) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `tutor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  ADD KEY `correo` (`correo`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyect`),
  ADD UNIQUE KEY `id_proyect` (`id_proyect`),
  ADD KEY `id_proyect_2` (`id_proyect`);

--
-- Indices de la tabla `registrate`
--
ALTER TABLE `registrate`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `apellido_p` (`apellido_p`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  ADD CONSTRAINT `inicio_sesion_ibfk_1` FOREIGN KEY (`correo`) REFERENCES `registrate` (`correo`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
