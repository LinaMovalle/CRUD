-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2022 a las 04:34:31
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bodega`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe`
--

CREATE TABLE `jefe` (
  `id_jefes` int(32) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `bodega` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefe`
--

INSERT INTO `jefe` (`id_jefes`, `usuario`, `clave`, `bodega`) VALUES
(1, 'Lina', '12345', 2),
(5, 'Luis', '12345', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(32) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `precio` int(255) NOT NULL,
  `peso` int(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `stock` int(32) NOT NULL,
  `fecha` date NOT NULL,
  `ventas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha`, `ventas`) VALUES
(5, 'aromatica', 'J8765', 3000, 10, 'bebidas', 36, '2022-08-10', 2),
(6, 'Cafe', 'B01R456', 5000, 25, 'bebidas', 10, '2022-08-10', 5),
(7, 'limonada', 'F56874', 50000, 40, 'bebidas', 16, '2022-08-10', 6),
(8, 'cupcake', 'L9786S', 4000, 25, 'panaderia', 0, '2022-08-10', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jefe`
--
ALTER TABLE `jefe`
  ADD PRIMARY KEY (`id_jefes`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jefe`
--
ALTER TABLE `jefe`
  MODIFY `id_jefes` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
