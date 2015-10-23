-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-10-2015 a las 22:46:19
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iegresos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE IF NOT EXISTS `egresos` (
  `id_egreso` int(11) NOT NULL,
  `concepto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `egreso` decimal(6,2) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `egresos`
--

INSERT INTO `egresos` (`id_egreso`, `concepto`, `egreso`, `descripcion`, `fecha`, `id_usuario`) VALUES
(1, 'Gastos del día', '100.00', 'Gastos de estacionamiento y comida', '2015-10-05', 1),
(2, 'Estacionamiento', '20.00', 'Estacionamiento en la tapo', '2015-10-06', 1),
(3, 'Comida', '50.00', 'Comida en la semana del emprendedor', '2015-10-06', 1),
(4, 'Gasolina', '150.00', 'Gasolina para la tapo y plaza de la computación', '2015-10-07', 1),
(5, 'Estacionamiento ', '20.00', 'Estacionamiento en la tapo', '2015-10-07', 1),
(6, 'Estacionamiento', '50.00', 'Estacionamiento en la plaza de la computación', '2015-10-07', 1),
(7, 'Cigarros', '15.00', 'Cigarros del día', '2015-10-07', 1),
(8, 'Taxi', '80.00', 'Taxi del pedregal a oficinas de contadores en acoxpa', '2015-10-08', 1),
(9, 'Comida', '40.00', 'Comida del día', '2015-10-08', 1),
(10, 'Cigarros', '15.00', 'Cigarros del día', '2015-10-08', 1),
(11, 'Taxi', '20.00', 'Taxi de acoxpa a periférico ', '2015-10-08', 1),
(12, 'Transporte', '11.50', 'Gastos de transporte del día', '2015-10-08', 1),
(13, 'Taxi', '51.00', 'Taxi de Perisur a acoxpa', '2015-10-09', 1),
(14, 'Transporte', '27.50', 'Transporte del día', '2015-10-09', 1),
(15, 'Cigarros', '15.00', 'Cigarros del día', '2015-10-09', 1),
(16, 'Comida', '200.00', 'Comida familiar ', '2015-10-11', 1),
(17, 'Gasto Mama', '300.00', 'Gasto de la semana a mama', '2015-10-12', 1),
(18, 'Publicidad ', '100.00', 'Publicidad anuncio de desarrollo web en vivanuncios', '2015-10-12', 1),
(19, 'Publicidad', '50.00', 'Publicidad anuncio de freelance méxico', '2015-10-12', 1),
(20, 'Galletas', '10.00', 'Galletas emperador', '2015-10-12', 1),
(21, 'Desayuno', '22.00', 'Desayuno torta de tamal y jugo de zanahoria', '2015-10-13', 1),
(22, 'Prestamo', '200.00', 'Préstamo de 200 pesos a mi prima', '2015-10-09', 1),
(23, 'Estacionamiento', '100.00', 'Estacionamiento en la plaza de la computación', '2015-10-14', 1),
(24, 'Gasolina', '100.00', 'Gastos de gasolina a la plaza de la computación', '2015-10-14', 1),
(25, 'Gasolina', '100.00', 'Gastos de gasolina de casa a oficinas despacho contable', '2015-10-15', 1),
(26, 'Gastos varios', '219.00', 'Gastos varios', '2015-10-09', 1),
(27, 'Tóner Impresora', '100.00', 'Apoyo para compra de Tóner para la impresora SAMSUNG de la oficina', '2015-10-15', 1),
(33, 'Tanda dora', '100.00', 'Tanda para dora', '2015-10-16', 1),
(34, 'Cigarros', '10.00', 'cigarros del día', '2015-10-16', 1),
(35, 'Cervezas ', '100.00', 'Cervezas cumpleaños tania', '2015-10-17', 1),
(36, 'desayuno', '24.00', 'jugo de zanahoria, toronja y gelatina', '2015-10-17', 1),
(37, 'Tennis', '643.50', 'Tennis Ascis ', '2015-10-19', 1),
(38, 'Gastos varios', '150.00', 'Gastos varios cepillo de dientes, estacionamiento, etc.', '2015-10-18', 1),
(39, 'Gastos del día', '91.00', 'Transporte, cigarros, agua, etc.', '2015-10-19', 1),
(40, 'Tanda', '100.00', 'Tanda de la semana', '2015-10-20', 1),
(41, 'Funda celular', '40.00', 'Funda para celular', '2015-10-21', 1),
(42, 'Pasta termica', '70.00', 'Pasta disipadora de calor', '2015-10-21', 1),
(43, 'Gastos del día', '30.00', 'Gastos del día: transporte, jugo y cigarros', '2015-10-21', 1),
(44, 'Gasto ', '200.00', 'Gasto a mama', '2015-10-23', 1),
(45, 'Ahorro', '100.00', 'ahorro en banco azteca', '2015-10-23', 1),
(46, 'Gastos del día', '30.00', 'Gastos del día', '2015-10-23', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE IF NOT EXISTS `ingresos` (
  `id_ingreso` int(11) NOT NULL,
  `concepto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ingreso` decimal(6,2) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id_ingreso`, `concepto`, `ingreso`, `descripcion`, `fecha`, `id_usuario`) VALUES
(1, 'Servicios Soporte Técnico', '3250.00', 'Servicios de Soporte Técnico en las oficinas del despacho contable de acoxpa', '2015-10-09', 1),
(2, 'Instalación programa', '100.00', 'Instalación de un programa de audio ', '2015-10-12', 1),
(3, 'Excedente', '1000.00', 'Excedente del servicio de soporte técnico para oficinas de acoxpa', '2015-10-09', 1),
(4, 'Instalación de Windows 10', '400.00', 'Reinstalación de Sistema Operativo en Laptop ASUS ', '2015-10-15', 400),
(5, 'Venta Cable USB Impresora', '100.00', 'Venta de cable USB para impresora de oficinas de despacho contable', '2015-10-15', 1),
(6, 'Servicios de Soporte Técnico', '1500.00', 'Traslado, Consumibles, y Configuración de Impresoras para despacho contable', '2015-10-15', 1),
(7, 'Instalación y formateo de windows 7', '300.00', 'Se instalo y formateo windows 7 a hp mini', '2015-10-18', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `login` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `login`, `pass`) VALUES
(1, 'Omar Serrano', 'rather_79@hotmail.com', 'rather', '3aa48772f6bed449724edbd289b45846b629c505');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD PRIMARY KEY (`id_egreso`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id_ingreso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `egresos`
--
ALTER TABLE `egresos`
  MODIFY `id_egreso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
