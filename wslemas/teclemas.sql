-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2024 a las 04:07:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `teclemas`
--
CREATE DATABASE IF NOT EXISTS `teclemas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `teclemas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_producto`
--

DROP TABLE IF EXISTS `info_producto`;
CREATE TABLE `info_producto` (
  `idProducto` int(11) NOT NULL COMMENT 'Id de la tabla',
  `marca` varchar(127) NOT NULL,
  `modelo` varchar(127) NOT NULL,
  `descripcion` varchar(254) NOT NULL,
  `precio` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `imagen` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla para almacenar los productos';

--
-- Truncar tablas antes de insertar `info_producto`
--

TRUNCATE TABLE `info_producto`;
--
-- Volcado de datos para la tabla `info_producto`
--

INSERT INTO `info_producto` (`idProducto`, `marca`, `modelo`, `descripcion`, `precio`, `estado`, `imagen`) VALUES
(1, 'lenovo', 'Thinkpad v2', 'Laptop Thinkpad', '1630', 'Activo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5zHPaYhabS0UzSrgaSNGBHbErevloUq-a6g&s'),
(2, 'Mac', 'Notebook', 'laptop i7', '1580', 'Activo', 'colocarImagenAqui'),
(3, 'chevrolet', 'sail', 'carro para taxi', '16000', 'Activo', 'colarlaImagenAqui'),
(4, 'Hyundai', 'Accent', 'Carro para taxi', '19000', 'Activo', 'aquidebeponerlaurl');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info_producto`
--
ALTER TABLE `info_producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info_producto`
--
ALTER TABLE `info_producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la tabla', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
