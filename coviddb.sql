-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2021 a las 02:14:14
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coviddb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprueba`
--

CREATE TABLE `tblprueba` (
  `idprueba` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `resultadoid` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblprueba`
--

INSERT INTO `tblprueba` (`idprueba`, `p1`, `p2`, `p3`, `resultadoid`, `iduser`) VALUES
(0, 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblresultado`
--

CREATE TABLE `tblresultado` (
  `idresultado` int(11) NOT NULL,
  `resultado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblterapia`
--

CREATE TABLE `tblterapia` (
  `terapiaid` int(11) NOT NULL,
  `terapianombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbluser`
--

CREATE TABLE `tbluser` (
  `iduser` int(11) NOT NULL,
  `dni` int(8) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `ciudad` varchar(200) DEFAULT NULL,
  `resultadoid` int(11) DEFAULT NULL,
  `terapiaid` int(11) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbluser`
--

INSERT INTO `tbluser` (`iduser`, `dni`, `nombre`, `apellido`, `telefono`, `email`, `ciudad`, `resultadoid`, `terapiaid`, `fechaInicio`, `fechaFin`) VALUES
(1, 75395162, 'Jhon', 'Armani', '951624846', 'loco@123.pe', 'huancayo', NULL, NULL, NULL, NULL),
(2, 65498732, 'Juan', 'Garay', '947392994', '654@321.pe', 'Huancayo', NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblprueba`
--
ALTER TABLE `tblprueba`
  ADD PRIMARY KEY (`idprueba`);

--
-- Indices de la tabla `tblresultado`
--
ALTER TABLE `tblresultado`
  ADD PRIMARY KEY (`idresultado`);

--
-- Indices de la tabla `tblterapia`
--
ALTER TABLE `tblterapia`
  ADD PRIMARY KEY (`terapiaid`);

--
-- Indices de la tabla `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
