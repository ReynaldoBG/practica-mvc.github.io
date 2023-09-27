-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2023 a las 04:33:45
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
-- Base de datos: `practica_mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `califica`
--

CREATE TABLE `califica` (
  `ID_Calif` int(11) NOT NULL,
  `Nombre_Alumno` varchar(150) NOT NULL,
  `Materia` varchar(50) NOT NULL,
  `Parcial` tinyint(4) NOT NULL,
  `Calificacion` double DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `califica`
--

INSERT INTO `califica` (`ID_Calif`, `Nombre_Alumno`, `Materia`, `Parcial`, `Calificacion`, `Fecha`) VALUES
(5, 'Tavo', 'Historia', 3, 10, '2023-09-26'),
(10, 'Reynaldo', 'Programacion I', 3, NULL, '2023-09-26'),
(11, 'Roberto', 'Matematicas', 3, NULL, NULL),
(12, 'Alicia', 'Programacion Orientada a Objetos', 3, NULL, NULL),
(13, 'Valentina', 'Estructuras de Datos', 3, NULL, NULL),
(14, 'Heriberto', 'Estructuras de Datos', 3, NULL, NULL),
(23, 'Juan Pérez', 'Matemáticas', 3, NULL, NULL),
(24, 'María Rodríguez', 'Historia', 3, NULL, NULL),
(25, 'Carlos López', 'Ciencias Naturales', 3, NULL, NULL),
(26, 'Ana González', 'Geografía', 3, NULL, NULL),
(27, 'Luis Sánchez', 'Arte', 3, NULL, NULL),
(28, 'Laura Martínez', 'Educación Física', 3, 8.5, '2023-09-29'),
(29, 'Roberto Fernández', 'Inglés', 3, 10, '2023-09-30'),
(30, 'Sofía Ramírez', 'Química', 3, NULL, '2023-10-01'),
(31, 'Maximiliano Favila', 'Programacion Orientada a Objetos', 3, 9.7, '2023-09-20'),
(32, 'Pedro González', 'Música', 3, NULL, NULL),
(33, 'María Rodríguez', 'Física', 3, NULL, NULL),
(34, 'Luisa Martínez', 'Economía', 3, 8, '2023-09-26'),
(35, 'Carlos López', 'Programación', 3, NULL, NULL),
(36, 'David Sánchez', 'Dibujo', 3, 8.7, '2023-10-02'),
(37, 'Laura González', 'Educación Cívica', 3, 9, '2023-09-26'),
(38, 'Sofía Ramírez', 'Química', 3, 7.9, '2023-10-04'),
(39, 'David Sánchez', 'Historia', 3, 5, '2023-09-26'),
(40, 'Roberto Martinez', 'Inteligencia Artificial', 3, NULL, '2023-09-26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `califica`
--
ALTER TABLE `califica`
  ADD PRIMARY KEY (`ID_Calif`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `califica`
--
ALTER TABLE `califica`
  MODIFY `ID_Calif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
