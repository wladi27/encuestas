-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2022 a las 21:17:58
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuestas_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `edad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `rsf` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `encuestas`
--

INSERT INTO `encuestas` (`id`, `name`, `email`, `edad`, `sexo`, `rsf`, `date`) VALUES
(88, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 14:46:30'),
(89, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 14:48:13'),
(92, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 14:53:05'),
(93, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:19:43'),
(94, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:21:22'),
(95, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:22:45'),
(96, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:24:08'),
(97, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:26:46'),
(98, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:27:50'),
(99, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:36:58'),
(100, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:38:28'),
(101, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:39:23'),
(102, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:50:44'),
(103, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:52:13'),
(104, '', '', '18-25', 'Hombre', 'Facebook', '2022-06-24 15:54:40'),
(105, 'Wladimir Figuera', 'figuerawladimir@gmail.com', '18-25', 'Hombre', 'WhatsApp', '2022-06-24 16:17:13'),
(106, 'Eliexer Figuera', 'elie@gmail.com', '18-25', 'Hombre', 'Instagram', '2022-06-24 16:21:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `face_edad`
--

CREATE TABLE `face_edad` (
  `id` int(11) NOT NULL,
  `edad` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `votos` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `face_edad`
--

INSERT INTO `face_edad` (`id`, `edad`, `votos`) VALUES
(1, '18-25', '33'),
(2, '26-33', '5'),
(3, '34-40', '3'),
(4, '40+', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ins_edad`
--

CREATE TABLE `ins_edad` (
  `id` int(11) NOT NULL,
  `edad` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `votos` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ins_edad`
--

INSERT INTO `ins_edad` (`id`, `edad`, `votos`) VALUES
(1, '18-25', '25'),
(2, '26-33', '11'),
(3, '34-40', '7'),
(4, '40+', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `votos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `redes_sociales`
--

INSERT INTO `redes_sociales` (`id`, `name`, `votos`, `color`) VALUES
(1, 'Facebook', '42', 'rgb(47, 0, 255)'),
(3, 'Tiktok', '9', 'rgb(7, 7, 7)'),
(4, 'WhatsApp', '16', 'rgb(0, 228, 102)'),
(5, 'Twitter', '4', 'rgb(0, 140, 255)'),
(6, 'Instagram', '18', 'rgb(233, 5, 62)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo_promedio`
--

CREATE TABLE `tiempo_promedio` (
  `id` int(11) NOT NULL,
  `red` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `tp` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tiempo_promedio`
--

INSERT INTO `tiempo_promedio` (`id`, `red`, `tp`) VALUES
(1, 'Facebook', '33'),
(2, 'WhatsApp', '24'),
(3, 'Twitter', '5'),
(4, 'Instagram', '17'),
(5, 'Tiktok', '13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tik_edad`
--

CREATE TABLE `tik_edad` (
  `id` int(11) NOT NULL,
  `edad` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `votos` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tik_edad`
--

INSERT INTO `tik_edad` (`id`, `edad`, `votos`) VALUES
(1, '18-25', '22'),
(2, '26-33', '8'),
(3, '34-40', '15'),
(4, '40+', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tw_edad`
--

CREATE TABLE `tw_edad` (
  `id` int(11) NOT NULL,
  `edad` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `votos` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tw_edad`
--

INSERT INTO `tw_edad` (`id`, `edad`, `votos`) VALUES
(1, '18-25', '11'),
(2, '26-33', '13'),
(3, '34-40', '15'),
(4, '40+', '17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wa_edad`
--

CREATE TABLE `wa_edad` (
  `id` int(11) NOT NULL,
  `edad` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `votos` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `wa_edad`
--

INSERT INTO `wa_edad` (`id`, `edad`, `votos`) VALUES
(1, '18-25', '8'),
(2, '26-33', '10'),
(3, '34-40', '7'),
(4, '40+', '6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `face_edad`
--
ALTER TABLE `face_edad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ins_edad`
--
ALTER TABLE `ins_edad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiempo_promedio`
--
ALTER TABLE `tiempo_promedio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tik_edad`
--
ALTER TABLE `tik_edad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tw_edad`
--
ALTER TABLE `tw_edad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `wa_edad`
--
ALTER TABLE `wa_edad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `face_edad`
--
ALTER TABLE `face_edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ins_edad`
--
ALTER TABLE `ins_edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tiempo_promedio`
--
ALTER TABLE `tiempo_promedio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tik_edad`
--
ALTER TABLE `tik_edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tw_edad`
--
ALTER TABLE `tw_edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `wa_edad`
--
ALTER TABLE `wa_edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
