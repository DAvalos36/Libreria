-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2022 a las 03:02:29
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreriacum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creadores_libro`
--

CREATE TABLE `creadores_libro` (
  `id` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `nombre_persona` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `link_google` varchar(200) COLLATE utf8_bin NOT NULL,
  `link_imagen` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `link_google`, `link_imagen`, `fecha`) VALUES
(4, 'Uso de los medios informÃ¡ticos en las aulas por parte de maestros y alumnos del itp', 'https://drive.google.com/file/d/17oQmyEuZp6CaxDPj0iIKDRUtS0GVkoaf/view?usp=sharing', 'img/6f14149bc2b7b8eb105ea64fef486edc.PNG', '2010-08-01'),
(5, 'MACOPRE TEC 2009', 'https://drive.google.com/file/d/1kV2KeSbnJ3dROHfa0Cl_Z-wZXbeKN4Rx/view', 'img/ce822e3747e25e9e2f34da8855385af7.PNG', '2009-12-02'),
(6, 'La Computadora en la EducaciÃ³n', 'https://drive.google.com/file/d/1WzpI4xNn6nEv4HUKb4OWNMPrmuGTu8iz/view', 'img/1e53223b991c8984c1bf183cf04bc2bc.PNG', '2008-11-02'),
(7, 'DESARROLLO DE PÃGINA WEB EN EL CENTRO DE INFORMACION', 'https://drive.google.com/file/d/1HT_HXAElmmHP5T9INFghVIMqaluPNEeD/view', 'img/d3a9f09a335d7b60a26ca49bffa4cfae.PNG', '2006-12-06'),
(8, 'Sistema de CafeterÃ­a', 'https://drive.google.com/file/d/1pmAaQgeWs26xJAUXNrz4THOQiJD3Czal/view', 'img/3188d143feda061cab6f3cfe687d9195.PNG', '2007-06-02'),
(9, 'Memoria TÃ©cnica de Red y Software de Inventario', 'https://drive.google.com/file/d/1TlUYd0VpfMDGMwdGqVLIbyXc3CykDALV/view', 'img/ad6538569ef5dcc92317ff51dcd9563b.PNG', '2009-06-02'),
(10, 'SITIO WEB DEL DEPARTAMENTO DE SISTEMAS Y COMPUTACIÃ“N DEL INSTITUTO TECNOLÃ“GICO DE PARRAL', 'https://drive.google.com/file/d/1DyzQD0Y78b1lFKxRG8MliD2EEW-XcJxd/view', 'img/050cc3416a55691df76bb280378f2cd8.PNG', '2014-08-02'),
(11, 'FESTIVAL CLUB PIWY KID\'S FASE CINCO', 'https://drive.google.com/file/d/1VomPWJ6MaNRCX8aYDkHHJ0x3S6xeCh1v/view', 'img/10e0ff2d538dbb2fc6e1fb639f18570f.PNG', '2014-11-02'),
(12, 'HELP ME', 'https://drive.google.com/file/d/1uzLX3I5Rm3fbV4b51OEkub5E7yfwm6sE/view', 'img/c44afad3eea9414cf72ffa8fad348dc1.PNG', '2014-08-02'),
(13, 'INNOVANDO LA EDUCACIÃ“N INFANTIL: WIKY PIWY SEGUNDA FASE', 'https://drive.google.com/file/d/1f5dwyjB1_5Qs_qoIOrbkJjoSV9R8Z7mn/view', 'img/9e70673ad2b117723c298f1ba9972f72.PNG', '2014-10-17'),
(14, 'PROYECTO LESIONES RUTINARIAS Y NUTRICION EN EL LEVANTAMIENTO DE PESAS SYSGYM', 'https://drive.google.com/file/d/1rnjAtGzXmwMjOUaj6OxGSax9shzeGEJk/view?usp=sharing', 'img/96255fb2e6149dcd9e00b1c554868322.PNG', '2008-01-02'),
(15, 'System Molduras', 'https://drive.google.com/file/d/1qoRxLKjiA-csB_Z4W86wBpemqIZl__hq/view', 'img/9d67196f5c80f8fc2c818ecd3637435d.PNG', '2008-01-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos`
--

CREATE TABLE `rangos` (
  `id` tinyint(11) NOT NULL,
  `nombre` varchar(13) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rangos`
--

INSERT INTO `rangos` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Normal'),
(3, 'Creador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nom_usuario` varchar(15) COLLATE utf8_bin NOT NULL,
  `pass` varchar(60) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(30) COLLATE utf8_bin NOT NULL,
  `rango` tinyint(11) NOT NULL DEFAULT 1,
  `puede_entrar` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nom_usuario`, `pass`, `nombre`, `apellido`, `rango`, `puede_entrar`) VALUES
(30, 'Administrador', '$2y$10$l3Ld2sKjvAX7oWMicDzMFeUv.29J7AjCWKx2m1.mT69m1rfwVlEh.', 'Administrador', 'Chido!', 3, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `creadores_libro`
--
ALTER TABLE `creadores_libro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rangos`
--
ALTER TABLE `rangos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom_usuario` (`nom_usuario`),
  ADD KEY `usuario_rango` (`rango`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `rangos`
--
ALTER TABLE `rangos`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `creadores_libro`
--
ALTER TABLE `creadores_libro`
  ADD CONSTRAINT `id_libro` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuario_rango` FOREIGN KEY (`rango`) REFERENCES `rangos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
