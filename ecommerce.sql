-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-07-2018 a las 08:26:11
-- Versión del servidor: 5.6.37
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text,
  `ruta` text,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Estructura categoias';

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `ruta`, `fecha`) VALUES
(1, 'ROPA', 'ropa', '2018-07-30 01:38:31'),
(2, 'CALZADO', 'calzado', '2018-07-30 01:38:31'),
(3, 'ACCESORIOS', 'accesorios', '2018-07-30 01:38:31'),
(4, 'TECNOLOGÍA', 'tecnologia', '2018-07-30 01:38:31'),
(5, 'CURSOS', 'cursos', '2018-07-30 01:38:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantillas`
--

CREATE TABLE IF NOT EXISTS `plantillas` (
  `id` int(11) NOT NULL,
  `barra_superior` text,
  `texto_superior` text,
  `color_fondo` text,
  `color_texto` text,
  `logo` text,
  `icono` text,
  `redes_sociales` text,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Para diseno dinamico';

--
-- Volcado de datos para la tabla `plantillas`
--

INSERT INTO `plantillas` (`id`, `barra_superior`, `texto_superior`, `color_fondo`, `color_texto`, `logo`, `icono`, `redes_sociales`, `fecha`) VALUES
(1, '#000000', '#ffffff', '#47bac1', '#ffffff', 'vistas/img/plantilla/logo.png', 'vistas/img/plantilla/icono.png', '[{\r\n    "red": "fa-facebook",\r\n    "estilo": "facebookColor",\r\n    "url": "https://facebook.com/"\r\n  },\r\n  {\r\n    "red": "fa-youtube",\r\n    "estilo": "youtubeColor",\r\n    "url": "https://youtube.com/"\r\n  },\r\n  {\r\n    "red": "fa-instagram",\r\n    "estilo": "instagramColor",\r\n    "url": "https://instagram.com/"\r\n  }\r\n]', '2018-07-29 07:59:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categorias`
--

CREATE TABLE IF NOT EXISTS `sub_categorias` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `sub_categoria` text,
  `ruta` text,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sub_categorias`
--

INSERT INTO `sub_categorias` (`id`, `categoria_id`, `sub_categoria`, `ruta`, `fecha`) VALUES
(1, 1, 'Ropa para damas', 'ropa-para-damas', '2018-07-30 01:59:42'),
(2, 1, 'Ropa para hombres', 'ropa-para-hombres', '2018-07-30 03:05:57'),
(3, 1, 'Ropa deportiva', 'ropa-deportiva', '2018-07-30 03:05:57'),
(4, 1, 'Ropa infantil', 'ropa-infantil', '2018-07-30 03:05:57'),
(5, 2, 'Calzado para damas', 'calzado-para-damas', '2018-07-30 03:05:57'),
(6, 2, 'Calzado para hombres', 'calzado-para-hombres', '2018-07-30 03:05:57'),
(7, 2, 'Calzado deportivo', 'calzado-deportivo', '2018-07-30 03:05:57'),
(8, 2, 'Calzado infantil', 'calzado-infantil', '2018-07-30 03:05:57'),
(9, 3, 'Bolsos', 'bolsos', '2018-07-30 03:05:57'),
(10, 3, 'Pulseras', 'pulseras', '2018-07-30 03:05:57'),
(11, 3, 'Collares', 'collares', '2018-07-30 03:05:57'),
(12, 3, 'Gafa de sol', 'gafas-de-sol', '2018-07-30 03:05:57'),
(13, 4, 'Telefonos movil', 'telefonos-movil', '2018-07-30 03:05:57'),
(14, 4, 'Tableta electronica', 'tableta-electronica', '2018-07-30 03:05:57'),
(15, 4, 'Computadores', 'computadores', '2018-07-30 03:05:57'),
(16, 4, 'Auriculares', 'auriculares', '2018-07-30 03:05:57'),
(17, 5, 'Desarrollo web', 'desarrollo-web', '2018-07-30 03:05:57'),
(18, 5, 'Diseno grafico', 'diseno-grafico', '2018-07-30 03:05:57'),
(19, 5, 'Aplicaciones moviles', 'aplicaciones-moviles', '2018-07-30 03:05:57'),
(20, 5, 'Marketing digital', 'marketing-digital', '2018-07-30 03:05:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantillas`
--
ALTER TABLE `plantillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sub_categorias`
--
ALTER TABLE `sub_categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `plantillas`
--
ALTER TABLE `plantillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sub_categorias`
--
ALTER TABLE `sub_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sub_categorias`
--
ALTER TABLE `sub_categorias`
  ADD CONSTRAINT `sub_categorias_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
