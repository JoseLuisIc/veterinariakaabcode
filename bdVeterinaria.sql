-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 08-08-2023 a las 18:07:44
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
  `idPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `idPersona`) VALUES
(1, 3),
(2, 5),
(3, 7),
(4, 12),
(5, 13),
(6, 14),
(7, 15),
(8, 16),
(9, 17),
(10, 18),
(11, 19),
(12, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `edad` int(10) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `diagnósticos` varchar(500) NOT NULL,
  `tratamientos` varchar(500) NOT NULL,
  `vacunas` varchar(500) NOT NULL,
  `alergias` varchar(500) NOT NULL,
  `cirugias` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idMascota`, `idCliente`, `nombre`, `raza`, `edad`, `especie`, `color`, `sexo`, `diagnósticos`, `tratamientos`, `vacunas`, `alergias`, `cirugias`) VALUES
(32, 1, 'Firulais2', '', 20, 'gato', '', 'Hembra', 'sdfs', 'lej jsdirsj sjfls', '', '', ''),
(33, 1, 'ElBrayan', 'sfds', 50, 'nutria', '', 'Macho', 'jhk jgjg jghj 4', '1. khjk hjgj', '', '', ''),
(34, 1, 'FirulaisV', 'desconocida', 5, 'perro', 'negro', 'Macho', 'esta enfermo', 'darle vitaminas cada 12 horas', 'sin vacunas', 'ninguna', 'no'),
(35, 1, 'dss', '', 1, 'leopardo', 'azul', 'Hembra', 'df', 'df', '', '', '23'),
(36, 1, 'pinto', 'malish', 20, 'gato', 'cafe', 'Hembra', 'pendiente', 'que tome agua', 'a', 'b', 'c'),
(37, 1, 'dingo', 'xd', 3, 'loro', '', 'Macho', 'asqw', 'sew', 'vbn', 'zxc', 'mnb'),
(38, 1, 'samurai', 'v', 5, 'perro', '', 'Macho', 'pendiente', 'pendiente', '', '', ''),
(39, 2, 'xd', '', 3, 'jirafa', '', 'Macho', 'no', 'si', '', '', ''),
(40, 1, 'xd2', 'a', 4, 'c', 'd', 'Hembra', 'f', 'g', '', '', ''),
(41, 1, 'dfds', 'dfs', 2, 'sdf', 'df', 'Macho', 'fd', 'd', '', '', ''),
(42, 1, 'Max', 'df', 4, 'b', '', 'Macho', 'f', 'f', '', '', ''),
(43, 1, 'abcdef', '', 1, 'd', 'd', 'Hembra', 'd', 'd', 'd', '', ''),
(44, 2, 'ds', 'd', 4, 'j', 'j', 'Macho', 'j', 'j', 'jj', '', ''),
(45, 3, 'xdxd', 'vvvvvv', 4, 'j', 'j', 'Macho', 'j', 'j', 'jj', '', ''),
(46, 1, 'a', 'b', 5, 'f', 'd', 'Hembra', 'd', 'f', 'f', '', ''),
(47, 3, 'f', 'df', 1, 'df', '', 'Macho', 'fd', 'fd', 'fd', 'a', 'b'),
(48, 4, 'pedigre', '', 2, 'v', 'gris', 'Macho', 'none', 'none', 'f', 'v', 'df'),
(49, 6, 'firulaisvi', '', 1, 'gato', '', 'Hembra', '212', '334', '', '', ''),
(50, 9, 'gtx', '', 5, 'bbbbnnnnn', '', 'Macho', 'ghre', 's', '', '', '');

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
  `idPersona` int(11) NOT NULL,
  `nombreDeUsuario` varchar(40) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `primerApellido` varchar(30) NOT NULL,
  `segundoApellido` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correoElectronico` varchar(100) NOT NULL,
  `redesSociales` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `nombreDeUsuario`, `contrasena`, `nombres`, `primerApellido`, `segundoApellido`, `telefono`, `correoElectronico`, `redesSociales`) VALUES
(1, '', '123xola', 'hernesto', '', '', '0', '', ''),
(2, '', 'abc$AB122', 'Maria', '', '', '0', '', ''),
(3, '', '123', 'Jose', 'perez', 'lopez', '789123763', 'ninguno', 'facebook'),
(4, '', '123', 'Jose martin', 'Lopez', 'Macdonals', '12345678', 'ninguno', 'ninguno'),
(5, '', 'Adsf2%sdR', 'Manuel Perez', 'martin ', 'chi', '0', '', ''),
(6, 'Richard', 'abc123', 'Richard A', 'Mejia', 'Ku', '123456789', 'richard@hotmail.com', 'ninguna'),
(7, '', '123abcA#', 'juan', 'Rodriges', 'pech', '0', '', ''),
(8, '', '', 'xd', 'xdxd', 'x', '0', '', ''),
(9, '', '', 'xd dos', 'xdxddos', 'xd', '786', '', ''),
(10, '', '', 'xdtre', 'x', 'xd', '0', '', ''),
(11, '', '', 'v', 'vd', 'vdt', '0', '', ''),
(12, '', '', 'jose', 'jo', 'se', '34567', '', ''),
(13, '', '', 'Richard', 'alexis', 'mejia', '123456789', 'richard@gmail.com', ''),
(14, '', '', 'Gaspar', 'marcelo', 'leon', '2147483647', '', ''),
(15, '', '', 'Cliente Siete', 'alias', 'seven', '2147483647', '', ''),
(16, '', '', 'sd', 'fsd', 'df', '123', '', ''),
(17, '', '', 's', 'd', 'd', '123456789', '', ''),
(18, '', '', 'dsf', 'df', 'df', '9899999999', 'xd@g.co', ''),
(19, '', '', 'Mario Martines', 'Bros', 'Dos', '987123465', '', ''),
(20, '', '', '  ', 'd', 'dfd', '', '', '');

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
  ADD KEY `idPersona` (`idPersona`);

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
  ADD PRIMARY KEY (`idPersona`);

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
  ADD KEY `FK_Veterinario` (`idVeterinario`);

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
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `numero de pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  ADD CONSTRAINT `idPersona` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

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
-- Filtros para la tabla `veterinariocliente`
--
ALTER TABLE `veterinariocliente`
  ADD CONSTRAINT `veterinariocliente_ibfk_1` FOREIGN KEY (`idVeterinario`) REFERENCES `veterinario` (`idVeterinario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
