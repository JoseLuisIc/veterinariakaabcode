-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 18-07-2023 a las 19:40:44
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdveterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCita` int(11) NOT NULL,
  `idVeterinarioCliente2` int(11) NOT NULL,
  `Asunto` varchar(300) NOT NULL,
  `fecha y hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombreDeUsuario2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `diagnósticos` varchar(500) NOT NULL,
  `tratamientos` varchar(500) NOT NULL,
  `vacunas` varchar(500) NOT NULL,
  `alergias` varchar(500) NOT NULL,
  `cirugias` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `numero de pago` int(11) NOT NULL,
  `idVeterinarioCliente3` int(11) NOT NULL,
  `total` double NOT NULL,
  `saldo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `nombreDeUsuario` varchar(30) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `primer apellido` varchar(30) NOT NULL,
  `segundo apellido` varchar(30) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo electronico` varchar(100) NOT NULL,
  `Redes sociales` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nombreDeUsuario`, `contrasena`, `nombres`, `primer apellido`, `segundo apellido`, `telefono`, `correo electronico`, `Redes sociales`) VALUES
('destructor', 'cOntrasena1&', '', '', '', 0, '', ''),
('hernesto132', '123xola', '', '', '', 0, '', ''),
('hernesto132a', 'abc$AB122', '', '', '', 0, '', ''),
('hernesto232', '123hola', '', '', '', 0, '', ''),
('Jose', '123', 'Jose', 'perez', 'lopez', 789123763, 'ninguno', 'facebook'),
('JoseLopez', '123', 'Jose martin', 'Lopez', 'Macdonals', 12345678, 'ninguno', 'ninguno'),
('R1ch4rd', 'abc$AB122', '', '', '', 0, '', ''),
('Richard', 'abc123', 'Richard A', 'Mejia', 'Ku', 123456789, 'richard@hotmail.com', 'ninguna'),
('Richard23', 'xd12', '', '', '', 0, '', ''),
('Richard5', 'abc$AB122', '', '', '', 0, '', ''),
('Richardv', 'czxczzcxR3#', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idRegistro` int(11) NOT NULL,
  `idVeterinarioCliente` int(11) NOT NULL,
  `fecha de creacion` date NOT NULL,
  `fecha de modificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinario`
--

CREATE TABLE `veterinario` (
  `idVeterinario` int(11) NOT NULL,
  `nombreDeUsuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinariocliente`
--

CREATE TABLE `veterinariocliente` (
  `idVeterinarioCliente` int(11) NOT NULL,
  `idVeterinario` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `idVeterinarioCliente2` (`idVeterinarioCliente2`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `nombreDeUsuario` (`nombreDeUsuario2`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`numero de pago`),
  ADD KEY `idVeterinarioCliente3` (`idVeterinarioCliente3`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`nombreDeUsuario`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `idVeterinarioCliente` (`idVeterinarioCliente`);

--
-- Indices de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`idVeterinario`),
  ADD KEY `nombreDeUsuario` (`nombreDeUsuario`) USING BTREE;

--
-- Indices de la tabla `veterinariocliente`
--
ALTER TABLE `veterinariocliente`
  ADD PRIMARY KEY (`idVeterinarioCliente`),
  ADD KEY `FK_Veterinario` (`idVeterinario`),
  ADD KEY `FK_Cliente` (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `numero de pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `idVeterinario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `veterinariocliente`
--
ALTER TABLE `veterinariocliente`
  MODIFY `idVeterinarioCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `idVeterinarioCliente2` FOREIGN KEY (`idVeterinarioCliente2`) REFERENCES `veterinariocliente` (`idVeterinarioCliente`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `nombreDeUsuario2` FOREIGN KEY (`nombreDeUsuario2`) REFERENCES `persona` (`nombreDeUsuario`);

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `idCliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `idVeterinarioCliente3` FOREIGN KEY (`idVeterinarioCliente3`) REFERENCES `veterinariocliente` (`idVeterinarioCliente`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `idVeterinarioCliente` FOREIGN KEY (`idVeterinarioCliente`) REFERENCES `veterinariocliente` (`idVeterinarioCliente`);

--
-- Filtros para la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD CONSTRAINT `nombreDeUsuario` FOREIGN KEY (`nombreDeUsuario`) REFERENCES `persona` (`nombreDeUsuario`);

--
-- Filtros para la tabla `veterinariocliente`
--
ALTER TABLE `veterinariocliente`
  ADD CONSTRAINT `veterinariocliente_ibfk_1` FOREIGN KEY (`idVeterinario`) REFERENCES `veterinario` (`idVeterinario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `veterinariocliente_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
