-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2023 a las 00:47:28
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
-- Base de datos: `topshelf3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `StockID` int(11) NOT NULL,
  `Producto` varchar(255) DEFAULT NULL,
  `Upc` varchar(24) DEFAULT NULL,
  `Distribuidor` varchar(255) DEFAULT NULL,
  `Unidades` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Fecha` varchar(20) DEFAULT NULL,
  `Departamento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`StockID`, `Producto`, `Upc`, `Distribuidor`, `Unidades`, `Cantidad`, `Fecha`, `Departamento`) VALUES
(7, 'Nikini 24 pack 16.9 oz', '10801108110038', 'Nikini', 24, 10, '11/17/2022', 'Comestibles'),
(8, 'Suiza Leche (Grado) A Ent LD 28oz', '023198106149', 'Suiza', 20, 6, '11/08/2022', 'Lácteos'),
(13, 'Leche ', '6789387490', 'Suiza', 20, 5, '2/24/2023', 'Lácteos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suplidor`
--

CREATE TABLE `suplidor` (
  `IdSuplidor` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Compania` varchar(255) DEFAULT NULL,
  `Producto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `suplidor`
--

INSERT INTO `suplidor` (`IdSuplidor`, `Nombre`, `Telefono`, `Compania`, `Producto`) VALUES
(1, 'Nombre', '101-000-0101', 'Compania', 'Producto'),
(6, 'Nikini', '939-888-6666', 'Nikini', 'Nikini 24 pack 16.9 oz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `UserID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`UserID`, `Nombre`, `Telefono`, `password`, `username`) VALUES
(1, 'John', '787-666-5555', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`StockID`);

--
-- Indices de la tabla `suplidor`
--
ALTER TABLE `suplidor`
  ADD PRIMARY KEY (`IdSuplidor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `StockID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `suplidor`
--
ALTER TABLE `suplidor`
  MODIFY `IdSuplidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
