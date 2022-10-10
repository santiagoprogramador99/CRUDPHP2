-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2021 a las 03:21:49
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas_colombianas`
--

CREATE TABLE `bebidas_colombianas` (
  `id` int(50) NOT NULL,
  `nombre_bebidas` varchar(60) NOT NULL,
  `precio` int(50) NOT NULL,
  `tipo_bebida` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bebidas_colombianas`
--

INSERT INTO `bebidas_colombianas` (`id`, `nombre_bebidas`, `precio`, `tipo_bebida`) VALUES
(2, 'aguardiente antioqueño*1000ml  ', 55000, 'alcohólica'),
(3, 'mazamorra', 5000, 'tipica'),
(4, 'borojo', 17000, 'bebida tropical'),
(5, 'cerveza', 3000, 'alcoholica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caramelos`
--

CREATE TABLE `caramelos` (
  `id` int(50) NOT NULL,
  `nombre_caramelo` varchar(60) NOT NULL,
  `precio` int(50) NOT NULL,
  `tipo_caramelo` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caramelos`
--

INSERT INTO `caramelos` (`id`, `nombre_caramelo`, `precio`, `tipo_caramelo`) VALUES
(1, 'bombón supercoco', 1000, 'bombón'),
(2, 'gelatina', 6000, 'postre'),
(3, 'solteritas', 7000, 'galleta'),
(4, 'bocadillo con queso', 2000, 'postre'),
(5, 'panelitas   ', 1500, 'postre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida_colombiana`
--

CREATE TABLE `comida_colombiana` (
  `id` int(50) NOT NULL,
  `nombre_comida` varchar(80) NOT NULL,
  `precio` int(50) NOT NULL,
  `tipo_comida` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comida_colombiana`
--

INSERT INTO `comida_colombiana` (`id`, `nombre_comida`, `precio`, `tipo_comida`) VALUES
(1, 'bandeja paisa ', 27000, 'tipica'),
(2, 'mondongo', 33000, 'sopa'),
(3, 'morcilla', 2000, 'embutido basico'),
(4, 'lechona tolimense  ', 6000, 'plato típico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida_mar_colombiana`
--

CREATE TABLE `comida_mar_colombiana` (
  `id` int(50) NOT NULL,
  `nombre_comida` varchar(60) NOT NULL,
  `precio` int(50) NOT NULL,
  `tipo_comida` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comida_mar_colombiana`
--

INSERT INTO `comida_mar_colombiana` (`id`, `nombre_comida`, `precio`, `tipo_comida`) VALUES
(1, 'sancocho_bagre ', 16000, 'sopa tipica'),
(2, 'trucha asada', 20000, 'seco'),
(3, 'filete de tilapia', 30000, 'seco'),
(4, 'cazuela de mariscos  ', 45000, 'sopa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(50) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `correo_electronico` varchar(80) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  `contrasena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `direccion`, `correo_electronico`, `telefono`, `contrasena`) VALUES
(1, 'santiago', 'calle16#20-13', 'santiago@gmail.com', '3117689056', '$2y$10$KTeKJE7HYd5eFL9uhPIt/urjAibHsyUnWdrWm63PwNQdzd6bDXeNm'),
(2, 'miguel', 'carrera8#567', 'miguel@gmail.com', '3262223456', '$2y$10$5TaZGsCI2U65WiOk5OsNrulAIDiioCi4XDhXXYybB6hWCamoi1f3e'),
(47, 'marcos', 'calle13#23-09', 'ossanaranjosantiago@gmail.com', '3136734567', '$2y$10$VGCpotww6GEzj2JXukS2M.SxfsNlyNx4vscTopnzzzbdDk2gqDHyO'),
(48, 'doris', 'calle13#23-09', 'fercho@gmail.com', '310456789', '$2y$10$Q6A2mXkB9AArANzLXfvb0eYaMJRE3laD2YwxatlSh.1pvHEf441uO'),
(51, 'nelson', 'sonson', 'ossanaranjo@gmail.com', '311732056', '$2y$10$oRkXQCfooi/R7khQRo2W9eaKLKXibfQy/ylyi8k8skN04GZbMnvI6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas_colombianas`
--
ALTER TABLE `bebidas_colombianas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `caramelos`
--
ALTER TABLE `caramelos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comida_colombiana`
--
ALTER TABLE `comida_colombiana`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comida_mar_colombiana`
--
ALTER TABLE `comida_mar_colombiana`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas_colombianas`
--
ALTER TABLE `bebidas_colombianas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `caramelos`
--
ALTER TABLE `caramelos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `comida_colombiana`
--
ALTER TABLE `comida_colombiana`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comida_mar_colombiana`
--
ALTER TABLE `comida_mar_colombiana`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
