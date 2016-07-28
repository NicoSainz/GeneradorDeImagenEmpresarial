-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-07-2016 a las 18:39:55
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes_NEAS`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `correo`, `telefono`, `updated_at`, `created_at`) VALUES
(1, 'OXXO', 'oxxo@hotmail.com', 6671123456, '2016-07-14 04:37:28', '0000-00-00 00:00:00'),
(2, 'JAPAC', 'japac@hotmail.com', 6671654321, '2016-07-14 04:37:28', '0000-00-00 00:00:00'),
(3, 'COPPEL', 'coppel@hotmail.com', 6671987654, '2016-07-14 04:40:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosempresa`
--

CREATE TABLE `datosempresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `domicilio` varchar(400) NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `eslogan` text NOT NULL,
  `correo` varchar(200) NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `nom_encargado1` varchar(200) NOT NULL,
  `nom_encargado2` varchar(200) NOT NULL,
  `nom_encargado3` varchar(200) NOT NULL,
  `dias_trabajados` varchar(100) NOT NULL,
  `dias_descanso` varchar(100) NOT NULL,
  `horario` varchar(150) NOT NULL,
  `articulo1` varchar(100) NOT NULL,
  `articulo2` varchar(100) NOT NULL,
  `articulo3` varchar(100) NOT NULL,
  `des_articulo1` text NOT NULL,
  `des_articulo2` text NOT NULL,
  `des_articulo3` text NOT NULL,
  `servicio1` varchar(100) NOT NULL,
  `servicio2` varchar(100) NOT NULL,
  `servicio3` varchar(100) NOT NULL,
  `des_servicio1` text NOT NULL,
  `des_servicio2` text NOT NULL,
  `des_servicio3` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosempresa`
--

INSERT INTO `datosempresa` (`id`, `nombre`, `domicilio`, `mision`, `vision`, `eslogan`, `correo`, `telefono`, `nom_encargado1`, `nom_encargado2`, `nom_encargado3`, `dias_trabajados`, `dias_descanso`, `horario`, `articulo1`, `articulo2`, `articulo3`, `des_articulo1`, `des_articulo2`, `des_articulo3`, `servicio1`, `servicio2`, `servicio3`, `des_servicio1`, `des_servicio2`, `des_servicio3`, `created_at`, `updated_at`) VALUES
(1, 'OXXO', 'cada esquina de tu ciudad', 'Ser la mejor Empresa', 'Tener muchos clientes', 'Cajas rapidas', 'oxxo@hotmail.com', 2147483647, '', '', '', '', '', '', 'clavo', 'Camion', 'Oso', 'Clavo Hola', 'Camion gola', 'OPso', 'servicio', '', '', 'es uno', '', '', '2016-07-26 17:30:30', '2016-07-27 00:30:30'),
(2, 'JAPAC', 'Col. Las Vegas', 'Mision', 'Vision', 'agua y salud para todos', 'japac@hotmail.com', 6671111111, 'Alan', '', '', 'Lunes a Viernes', 'Fin de semana', '10-18', 'articulo', '', '', 'Es un Articulo', '', '', 'servicio', '', '', 'Es un Servicio', '', '', '2016-07-28 16:25:35', '2016-07-28 22:25:35'),
(3, '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-07-14 07:08:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_cliente` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datosempresa`
--
ALTER TABLE `datosempresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
