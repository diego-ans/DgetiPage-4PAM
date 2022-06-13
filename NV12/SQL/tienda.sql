-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2022 a las 20:15:11
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
-- Base de datos: `tienda`
--

CREATE DATABASE tienda;
USE tienda;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(29,0) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Proyecto Programación', '10000', 'Proyecto de la carrera de programacion', 'https://img.freepik.com/vector-gratis/lenguajes-programacion-establecen-iconos_24877-761.jpg'),
(2, 'Proyecto Trabajo social', '5000', 'Proyecto de la carrera de trabajo social', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfKR2Fnl8OiBf9c7J_HdT4SBOfqQboaavLVA&usqp=CAU'),
(3, 'Proyecto Mecánica Industrial', '10000', 'Proyecto de la carrera Mecanica Industrial', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7mTBh091rXG76w6-7idkLrT4KbssSjsJicQ&usqp=CAU'),
(4, 'Proyecto Construcción', '15000', 'Proyecto de la carreara de construccion', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLUoSsWHK611tfNCmaxaNZ7khhybza2KU5SA&usqp=CAU');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
