-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 03:06:50
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsistmeq`
--
CREATE DATABASE IF NOT EXISTS `dbsistmeq` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbsistmeq`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcategoria`
--

DROP TABLE IF EXISTS `tbcategoria`;
CREATE TABLE `tbcategoria` (
  `CatID` int(11) NOT NULL,
  `CatNombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbcategoria`
--

INSERT INTO `tbcategoria` (`CatID`, `CatNombre`) VALUES
(1, 'Biomedicos'),
(2, 'Electricos'),
(5, 'Electrónicos'),
(3, 'Industriales'),
(4, 'Mecanicos'),
(6, 'Neumáticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbequipos`
--

DROP TABLE IF EXISTS `tbequipos`;
CREATE TABLE `tbequipos` (
  `EquID` int(11) NOT NULL,
  `EquCodigoInv` varchar(30) NOT NULL,
  `EquNombre` varchar(50) NOT NULL,
  `EquModelo` varchar(50) NOT NULL,
  `EquSerial` varchar(50) NOT NULL,
  `EquInvima` varchar(50) NOT NULL,
  `EquRiego` varchar(10) NOT NULL,
  `EquArea` varchar(50) NOT NULL,
  `EquUbicacion` varchar(50) NOT NULL,
  `EquRegFecha` date NOT NULL,
  `EquRegHora` time NOT NULL,
  `EquUser` varchar(50) NOT NULL,
  `MarIdFK` int(11) NOT NULL,
  `CatIdFK` int(11) NOT NULL,
  `EstIdFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbequipos`
--

INSERT INTO `tbequipos` (`EquID`, `EquCodigoInv`, `EquNombre`, `EquModelo`, `EquSerial`, `EquInvima`, `EquRiego`, `EquArea`, `EquUbicacion`, `EquRegFecha`, `EquRegHora`, `EquUser`, `MarIdFK`, `CatIdFK`, `EstIdFK`) VALUES
(1, 'PMB8023', 'CAMA HOSPITALARIA', 'RMC2021', '12912681723', 'KUID23421', 'I', 'CONSULTORIO I', 'URGENCIA', '2023-10-17', '18:37:33', '1', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbestados`
--

DROP TABLE IF EXISTS `tbestados`;
CREATE TABLE `tbestados` (
  `EstID` int(11) NOT NULL,
  `EstNombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbestados`
--

INSERT INTO `tbestados` (`EstID`, `EstNombre`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmantenimientos`
--

DROP TABLE IF EXISTS `tbmantenimientos`;
CREATE TABLE `tbmantenimientos` (
  `ManID` int(11) NOT NULL,
  `MatOrden` varchar(30) NOT NULL,
  `MatObservacionTec` text NOT NULL,
  `MatObsFecha` date NOT NULL,
  `MatObsHora` time NOT NULL,
  `MatRegFecha` date NOT NULL,
  `MatRegHora` time NOT NULL,
  `MatRegUser` varchar(50) NOT NULL,
  `TipIdFK` int(11) NOT NULL,
  `EquIdFK` int(11) NOT NULL,
  `MatIdReponsableFK` int(11) NOT NULL,
  `EstIdFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmarca`
--

DROP TABLE IF EXISTS `tbmarca`;
CREATE TABLE `tbmarca` (
  `MarID` int(11) NOT NULL,
  `MarNombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbmarca`
--

INSERT INTO `tbmarca` (`MarID`, `MarNombre`) VALUES
(3, 'Drager'),
(6, 'General'),
(1, 'Los Pinos'),
(2, 'Mindray'),
(7, 'Seca'),
(4, 'Siemens'),
(5, 'Welch Allyn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipoman`
--

DROP TABLE IF EXISTS `tbtipoman`;
CREATE TABLE `tbtipoman` (
  `TipID` int(11) NOT NULL,
  `TipNombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE `tbusuario` (
  `UsuID` int(11) NOT NULL,
  `UsuUser` varchar(30) NOT NULL,
  `UsuPass` varchar(100) NOT NULL,
  `UsuNombres` varchar(100) NOT NULL,
  `UsuApellidos` varchar(100) NOT NULL,
  `UsuCorreo` varchar(100) NOT NULL,
  `UsuFoto` text NOT NULL,
  `UsuRegFecha` date NOT NULL,
  `UsuRegHora` time NOT NULL,
  `UsuRegUser` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`UsuID`, `UsuUser`, `UsuPass`, `UsuNombres`, `UsuApellidos`, `UsuCorreo`, `UsuFoto`, `UsuRegFecha`, `UsuRegHora`, `UsuRegUser`) VALUES
(1, 'Opinto', '81dc9bdb52d04dc20036dbd8313ed055', 'Oleidis Maria', 'Pinto Sanchez', 'olepintosan@gmail.com', '', '2023-09-20', '21:34:50', 'ADMIN'),
(2, 'JP', '81dc9bdb52d04dc20036dbd8313ed055', 'Jeninson', 'Peralta', 'jeninson@gmail.com', '', '2023-09-27', '20:09:10', 'ADMIN');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`CatID`),
  ADD UNIQUE KEY `CatNombre` (`CatNombre`);

--
-- Indices de la tabla `tbequipos`
--
ALTER TABLE `tbequipos`
  ADD PRIMARY KEY (`EquID`),
  ADD UNIQUE KEY `EquCodigoInv` (`EquCodigoInv`),
  ADD UNIQUE KEY `EquSerial` (`EquSerial`),
  ADD KEY `TbEquipos_fk0` (`MarIdFK`),
  ADD KEY `TbEquipos_fk1` (`CatIdFK`),
  ADD KEY `TbEquipos_fk2` (`EstIdFK`);

--
-- Indices de la tabla `tbestados`
--
ALTER TABLE `tbestados`
  ADD PRIMARY KEY (`EstID`),
  ADD UNIQUE KEY `EstNombre` (`EstNombre`);

--
-- Indices de la tabla `tbmantenimientos`
--
ALTER TABLE `tbmantenimientos`
  ADD PRIMARY KEY (`ManID`),
  ADD UNIQUE KEY `MatOrden` (`MatOrden`),
  ADD KEY `TbMantenimientos_fk0` (`TipIdFK`),
  ADD KEY `TbMantenimientos_fk1` (`EquIdFK`),
  ADD KEY `TbMantenimientos_fk2` (`MatIdReponsableFK`),
  ADD KEY `TbMantenimientos_fk3` (`EstIdFK`);

--
-- Indices de la tabla `tbmarca`
--
ALTER TABLE `tbmarca`
  ADD PRIMARY KEY (`MarID`),
  ADD UNIQUE KEY `MarNombre` (`MarNombre`);

--
-- Indices de la tabla `tbtipoman`
--
ALTER TABLE `tbtipoman`
  ADD PRIMARY KEY (`TipID`),
  ADD UNIQUE KEY `TipNombre` (`TipNombre`);

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`UsuID`),
  ADD UNIQUE KEY `UsuUser` (`UsuUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `CatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbequipos`
--
ALTER TABLE `tbequipos`
  MODIFY `EquID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbestados`
--
ALTER TABLE `tbestados`
  MODIFY `EstID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbmantenimientos`
--
ALTER TABLE `tbmantenimientos`
  MODIFY `ManID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbmarca`
--
ALTER TABLE `tbmarca`
  MODIFY `MarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbtipoman`
--
ALTER TABLE `tbtipoman`
  MODIFY `TipID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `UsuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbequipos`
--
ALTER TABLE `tbequipos`
  ADD CONSTRAINT `TbEquipos_fk0` FOREIGN KEY (`MarIdFK`) REFERENCES `tbmarca` (`MarID`),
  ADD CONSTRAINT `TbEquipos_fk1` FOREIGN KEY (`CatIdFK`) REFERENCES `tbcategoria` (`CatID`),
  ADD CONSTRAINT `TbEquipos_fk2` FOREIGN KEY (`EstIdFK`) REFERENCES `tbestados` (`EstID`);

--
-- Filtros para la tabla `tbmantenimientos`
--
ALTER TABLE `tbmantenimientos`
  ADD CONSTRAINT `TbMantenimientos_fk0` FOREIGN KEY (`TipIdFK`) REFERENCES `tbtipoman` (`TipID`),
  ADD CONSTRAINT `TbMantenimientos_fk1` FOREIGN KEY (`EquIdFK`) REFERENCES `tbequipos` (`EquID`),
  ADD CONSTRAINT `TbMantenimientos_fk2` FOREIGN KEY (`MatIdReponsableFK`) REFERENCES `tbusuario` (`UsuID`),
  ADD CONSTRAINT `TbMantenimientos_fk3` FOREIGN KEY (`EstIdFK`) REFERENCES `tbestados` (`EstID`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
