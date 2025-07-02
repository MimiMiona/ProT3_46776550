-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2025 a las 02:28:11
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
-- Base de datos: `dulces_caprichos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `descripcion`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'Jose', 'Gomez', 'Jose123', 'jose123@gmail.com', '$2y$10$bczCjVBtKNxXhGnNHShbMuDP2Tc/76Zmzzq06yxP9I.2hMXyAHuvS', 1, 'NO'),
(2, 'Victoria', 'Gon', 'vicky123', 'victoria124@gmail.com', '$2y$10$fR/oFkTXnVhDaw0MnEErseZhasbnAASXfDOE5raZ0THCcSrYV/AGO', 1, 'NO'),
(3, 'Sofia', 'Gomez', 'sofi1222', 'sofiasos@gmail.com', '$2y$10$L8OJZQW/OzVSws.x/YLOfeWpW.XAcMIJMQD0Baydmh611m/6.BrzS', 2, 'NO'),
(4, 'Ramona', 'Perez', 'ramona1233', 'ramonaperez@gmail.com', '$2y$10$Way3MuA1w.61izslM9OHkeiv/gdww15pw2ueTQOd.hfKKVIwRglRC', 2, 'NO'),
(5, 'Maria', 'Gonzalez', 'mari1222', 'maria123@gmail.com', '$2y$10$1jEF9nBMap/Yw1y6NID46uxO.hCQKNR2vh5xl0WW1ITtheMVvGgkq', 2, 'NO'),
(6, 'Sabrina', 'Ramirez', 'sabri333', 'sabrina123@gmail.com', '$2y$10$TrW4Xy.Jcqko0Ab9jZCuDuSwrt4f5aPAn6GBNinawTEu6pPbz1/gO', 1, 'NO'),
(7, 'Lourdes', 'Torres', 'lourdes123', 'lourdes123@gmail.com', '$2y$10$aHQR6lJJ2PYkeFTN3y8ZfOaXWDreo.gnmynwkMLtyZiJFOvJojZXW', 2, 'NO'),
(8, 'Juan', 'Torres', 'juan222', 'juan222@gmail.com', '$2y$10$btitSpoxsrBP7PZ9AYJDKO7ALe.XjoKhne1WP3A.CMjJHEUmUuZ1C', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuarios_ibfk_1` (`perfil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
