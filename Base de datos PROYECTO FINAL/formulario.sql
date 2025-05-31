-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2023 a las 02:06:34
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `CodCat` int(11) NOT NULL,
  `NomCat` varchar(45) NOT NULL,
  `DesCat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`CodCat`, `NomCat`, `DesCat`) VALUES
(7, 'Iluminacion', 'Portalamparas,Linternas,Focos, etc'),
(8, 'Confort y Domotica', 'Termostatos, Timbres, etc'),
(9, 'Pilas', 'Alcalinas,Recargables,Cargadores,etc'),
(10, 'Mecanismos', 'Empotrar,superficie,estanco,etc'),
(11, 'Bombillas y tubos', 'Tubos led, tubos fluorescentes, etc'),
(12, 'Multimedia', 'Television,telefonia,informatica,etc'),
(13, 'Madera acabados', 'Liston cepillado,rodapies,etc'),
(14, 'Tableros y tablas', 'Tabique calado,tablero mobiliario, etc'),
(15, 'Revestimiento de suelo', 'Parquet,Tarimas,Estratificado ,etc'),
(16, 'Revestimiento de pared', 'Perfil acabado,madera pvc , etc'),
(17, 'Armarios interiores', 'Cajoneras,puertas de armario , etc'),
(18, 'Martillos', 'Madera,Melamina,etc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `CodCli` int(11) NOT NULL,
  `NomCli` varchar(100) NOT NULL,
  `DirCli` varchar(100) NOT NULL,
  `CiuCli` varchar(50) NOT NULL,
  `UsuCli` varchar(50) NOT NULL,
  `PasCli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`CodCli`, `NomCli`, `DirCli`, `CiuCli`, `UsuCli`, `PasCli`) VALUES
(1, 'Administrador', 'admin.3234@gmail.com', 'Lima', 'admin', 'admin'),
(2, 'Carlos Miguel', 'carlo_234_4@hotmail.com', 'Nazca', 'carlos23', '1234'),
(3, 'Julian Alvarez', 'Jr.Bosdlis #104-Kurps', 'Puppets', 'julio148', '12589');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confirmar`
--

CREATE TABLE `confirmar` (
  `codcon` int(11) NOT NULL,
  `cprocon` int(11) NOT NULL,
  `nomcon` varchar(100) NOT NULL,
  `unicon` varchar(100) NOT NULL,
  `precon` int(11) NOT NULL,
  `marcon` varchar(100) NOT NULL,
  `descon` varchar(100) NOT NULL,
  `ccatcon` int(11) NOT NULL,
  `CodCli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `confirmar`
--

INSERT INTO `confirmar` (`codcon`, `cprocon`, `nomcon`, `unicon`, `precon`, `marcon`, `descon`, `ccatcon`, `CodCli`) VALUES
(13, 30, 'Martillo', '24 x caja IRIS', 780, 'Premium', 'Martillo con mango muy comodo', 18, 1),
(15, 31, 'Radio', '1xppt Wats', 450, 'RapsBerry', 'Radio multiuso facil de llevar', 12, 1),
(16, 34, 'Parquet economico', '23xcmxcm', 140, 'Mipon', 'Parquet facil de instalar', 15, 1),
(21, 33, 'Tabla de madera', '1xcmxcm o 2xcmxcm', 840, 'Watson', 'Cedro o Melamina', 14, 1),
(22, 34, 'Parquet economico', '23xcmxcm', 140, 'Mipon', 'Parquet facil de instalar', 15, 1),
(23, 31, 'Radio', '1xppt Wats', 450, 'RapsBerry', 'Radio multiuso facil de llevar', 12, 2),
(24, 34, 'Parquet economico', '23xcmxcm', 140, 'Mipon', 'Parquet facil de instalar', 15, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detfactura`
--

CREATE TABLE `detfactura` (
  `coddfa` int(11) NOT NULL,
  `codfac` int(11) NOT NULL,
  `codpro` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `preciototal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detfactura`
--

INSERT INTO `detfactura` (`coddfa`, `codfac`, `codpro`, `cantidad`, `precio`, `preciototal`) VALUES
(2, 16, 30, 2, 780, 1560),
(3, 17, 31, 10, 450, 4500),
(4, 24, 34, 20, 140, 2800),
(5, 19, 34, 8, 140, 1120),
(6, 19, 31, 140, 20, 2800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `CodEmp` int(11) NOT NULL,
  `NomEmp` varchar(50) NOT NULL,
  `ApeEmp` varchar(50) NOT NULL,
  `FnaEmp` date NOT NULL,
  `CorEmp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`CodEmp`, `NomEmp`, `ApeEmp`, `FnaEmp`, `CorEmp`) VALUES
(2, 'Carla Miranda', 'Ramirez Pardo', '1978-07-18', 'deborita.323@gmail.com'),
(6, 'Percy Diego', 'Ramirez Jimenez', '1986-06-05', 'cloter_23_324@yahoo.es'),
(7, 'Daniel Ivans', 'Chemo Solar', '1756-06-08', 'sae_23_324@yahoo.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `CodFac` int(11) NOT NULL,
  `CodCli` int(11) NOT NULL,
  `CodEmp` int(11) NOT NULL,
  `FecFac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`CodFac`, `CodCli`, `CodEmp`, `FecFac`) VALUES
(16, 1, 7, '1326-05-04'),
(17, 1, 7, '1658-02-05'),
(19, 2, 2, '1989-05-04'),
(23, 1, 6, '1986-05-04'),
(24, 2, 6, '1996-05-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codpro` int(11) NOT NULL,
  `nompro` text NOT NULL,
  `unipro` text NOT NULL,
  `prepro` int(11) NOT NULL,
  `marcpro` text NOT NULL,
  `despro` text NOT NULL,
  `CodCat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codpro`, `nompro`, `unipro`, `prepro`, `marcpro`, `despro`, `CodCat`) VALUES
(30, 'Martillo', '24 x caja IRIS', 780, 'Premium', 'Martillo con mango muy comodo', 18),
(31, 'Radio', '1xppt Wats', 450, 'RapsBerry', 'Radio multiuso facil de llevar', 12),
(33, 'Tabla de madera', '1xcmxcm o 2xcmxcm', 840, 'Watson', 'Cedro o Melamina', 14),
(34, 'Parquet economico', '23xcmxcm', 140, 'Mipon', 'Parquet facil de instalar', 15),
(36, 'Armario', '1xcmx2cmx3xm', 450, 'Bonflex', 'Puertas de armario color caoba', 17),
(37, 'Timbre Phillips', '1xCm o 10xCm', 120, 'Phillips', 'Timbres resistentes a la humedad 50W', 8),
(38, 'Pilas autorecargables', '1x2 par ', 6, 'Panasonic', 'Pilas ultimo modelo', 9),
(39, 'Piso Vinilico', '45x45 2.23cm', 80, 'Celiparx', 'Mayolica resistente', 10),
(40, 'Fluorescente', '4-6-8 W', 740, 'HE-DEX', 'Resistentes a la luz solar', 11),
(41, 'Plasma LED', '1x5x9x2cm', 2500, 'Adibas', 'Ultimo modelo 3D y 3DX', 12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CodCat`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CodCli`);

--
-- Indices de la tabla `confirmar`
--
ALTER TABLE `confirmar`
  ADD PRIMARY KEY (`codcon`),
  ADD KEY `CodCli` (`CodCli`);

--
-- Indices de la tabla `detfactura`
--
ALTER TABLE `detfactura`
  ADD PRIMARY KEY (`coddfa`),
  ADD KEY `codfac` (`codfac`),
  ADD KEY `codpro` (`codpro`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`CodEmp`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`CodFac`),
  ADD KEY `CodCli` (`CodCli`),
  ADD KEY `CodEmp` (`CodEmp`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codpro`),
  ADD KEY `CodCat` (`CodCat`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CodCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CodCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `confirmar`
--
ALTER TABLE `confirmar`
  MODIFY `codcon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `detfactura`
--
ALTER TABLE `detfactura`
  MODIFY `coddfa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `CodEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `CodFac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `confirmar`
--
ALTER TABLE `confirmar`
  ADD CONSTRAINT `confirmar_ibfk_1` FOREIGN KEY (`CodCli`) REFERENCES `cliente` (`CodCli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detfactura`
--
ALTER TABLE `detfactura`
  ADD CONSTRAINT `detfactura_ibfk_1` FOREIGN KEY (`codfac`) REFERENCES `factura` (`CodFac`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detfactura_ibfk_2` FOREIGN KEY (`codpro`) REFERENCES `productos` (`codpro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`CodCli`) REFERENCES `cliente` (`CodCli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`CodEmp`) REFERENCES `empleados` (`CodEmp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`CodCat`) REFERENCES `categorias` (`CodCat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
