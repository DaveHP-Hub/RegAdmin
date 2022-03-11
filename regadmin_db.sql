-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2022 a las 17:33:52
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `regadmin_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE `dependencia` (
  `idDependencia` int(11) NOT NULL,
  `nombreDependencia` int(11) NOT NULL,
  `FKUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idMunicipio` int(11) NOT NULL,
  `nombreMunicipio` int(11) NOT NULL,
  `FKUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroadministrativo`
--

CREATE TABLE `registroadministrativo` (
  `idRegAdmin` int(11) NOT NULL,
  `nombreReg` varchar(100) DEFAULT NULL,
  `objetivoReg` varchar(500) DEFAULT NULL,
  `regJuridico` tinyint(1) DEFAULT NULL,
  `respJuri` varchar(500) DEFAULT NULL,
  `tipoInfo` varchar(20) DEFAULT NULL,
  `geoReg` tinyint(1) DEFAULT NULL,
  `temaReg` int(11) DEFAULT NULL,
  `otroTema` varchar(100) DEFAULT NULL,
  `variablesReg` varchar(500) DEFAULT NULL,
  `unidadMedida` int(11) DEFAULT NULL,
  `otroUnidad` varchar(100) DEFAULT NULL,
  `datosPer` tinyint(1) DEFAULT NULL,
  `tipoDatosP` int(11) DEFAULT NULL,
  `otroDPer` varchar(100) DEFAULT NULL,
  `nivelRegistro` varchar(15) DEFAULT NULL,
  `otroNivel` varchar(100) DEFAULT NULL,
  `anioEmision` int(11) DEFAULT NULL,
  `periodicidad` int(11) DEFAULT NULL,
  `otroPerio` varchar(50) DEFAULT NULL,
  `temporalidad` date DEFAULT NULL,
  `refTempo` tinyint(1) DEFAULT NULL,
  `otroRefT` varchar(100) DEFAULT NULL,
  `formatoReg` tinyint(1) DEFAULT NULL,
  `otroFormato` varchar(100) DEFAULT NULL,
  `tipoMedio` varchar(50) DEFAULT NULL,
  `especiMedio` varchar(100) DEFAULT NULL,
  `metodologiaRec` tinyint(1) DEFAULT NULL,
  `metodoloiaEsp` varchar(100) DEFAULT NULL,
  `publicI` tinyint(1) DEFAULT NULL,
  `publicOpc` varchar(500) DEFAULT NULL,
  `fuenteSirve` tinyint(1) DEFAULT NULL,
  `insumoFuente` varchar(100) DEFAULT NULL,
  `docInsumo` varchar(500) DEFAULT NULL,
  `infoReg` tinyint(1) DEFAULT NULL,
  `infoApro` varchar(500) DEFAULT NULL,
  `utilSoft` tinyint(1) DEFAULT NULL,
  `softwareI` varchar(100) DEFAULT NULL,
  `InfoProce` tinyint(1) DEFAULT NULL,
  `formatoInfo` int(11) DEFAULT NULL,
  `otroFInfo` varchar(100) DEFAULT NULL,
  `analisisReg` tinyint(1) DEFAULT NULL,
  `tipoAna` varchar(15) DEFAULT NULL,
  `objetivoAna` varchar(500) DEFAULT NULL,
  `periodicidadAna` int(11) DEFAULT NULL,
  `otraPerioA` varchar(100) DEFAULT NULL,
  `docAnaalisis` tinyint(1) DEFAULT NULL,
  `respDocAna` varchar(500) DEFAULT NULL,
  `difusionAna` varchar(50) DEFAULT NULL,
  `otroDifusion` varchar(50) DEFAULT NULL,
  `necesidadI` tinyint(1) DEFAULT NULL,
  `necesidadNS` tinyint(1) DEFAULT NULL,
  `necesidadS` tinyint(1) DEFAULT NULL,
  `fechaRegistro` date DEFAULT NULL,
  `fechaUpdate` date DEFAULT NULL,
  `FKUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `sector` varchar(10) NOT NULL,
  `areaAdscripcion` varchar(200) NOT NULL,
  `cargo` int(11) NOT NULL,
  `otroCargo` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `extension` varchar(5) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `respAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  ADD PRIMARY KEY (`idDependencia`),
  ADD KEY `FKUsuario` (`FKUsuario`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`idMunicipio`),
  ADD KEY `FKUsuario` (`FKUsuario`);

--
-- Indices de la tabla `registroadministrativo`
--
ALTER TABLE `registroadministrativo`
  ADD PRIMARY KEY (`idRegAdmin`),
  ADD KEY `FKUsuario` (`FKUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  MODIFY `idDependencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registroadministrativo`
--
ALTER TABLE `registroadministrativo`
  MODIFY `idRegAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dependencia`
--
ALTER TABLE `dependencia`
  ADD CONSTRAINT `dependencia_ibfk_1` FOREIGN KEY (`FKUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`FKUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `registroadministrativo`
--
ALTER TABLE `registroadministrativo`
  ADD CONSTRAINT `registroadministrativo_ibfk_1` FOREIGN KEY (`FKUsuario`) REFERENCES `usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
