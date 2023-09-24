Nombres de los integrantes del grupo (emails): 

    --Lucia Magali Anta (magali_anta@hotmail.com / magaant18@gmail.com). 
    -- Bautista Menna (
    
Temática del TPE:
  El trabajo se basara en las Olimpiadas.
  
Breve descripción de la temática:
  En esta pagina mostraremos informacion y actividades sobre las Olimpiadas. Se hara una pagina en la cual implantaremos los sucesos ocurridos y que actividades competitivas, hay actualmente.
  
Diagrama de entidad relación (DER):

[Diagrama DER.olimpiadas.drawio.pdf](https://github.com/LuciaAnta/TPE-wed2/files/12707621/Diagrama.DER.olimpiadas.drawio.pdf)

El código SQL que genera la base de datos (exportado desde phpMyAdmin):

[Uploading tpe-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2023 a las 04:30:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipos` int(11) NOT NULL,
  `nombre del equipo` varchar(45) NOT NULL,
  `id_facultad` int(11) NOT NULL,
  `deportes` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultades`
--

CREATE TABLE `facultades` (
  `id_facultades` int(11) NOT NULL,
  `nombre de facultad` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `año de fundación` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipos`),
  ADD KEY `id_facultad` (`id_facultad`);

--
-- Indices de la tabla `facultades`
--
ALTER TABLE `facultades`
  ADD PRIMARY KEY (`id_facultades`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `facultades`
--
ALTER TABLE `facultades`
  MODIFY `id_facultades` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`id_facultad`) REFERENCES `facultades` (`id_facultades`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
_olimpiadas.sql…]()

