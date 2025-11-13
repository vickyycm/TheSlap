-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2025 a las 23:33:24
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
-- Base de datos: `theslap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `tipo_estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `tipo_estado`) VALUES
(1, 'Notban'),
(2, 'Ban');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_eventos` int(11) NOT NULL,
  `titulo_evento` varchar(45) NOT NULL,
  `participantes` varchar(45) NOT NULL,
  `info_evento` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `foto_evento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_eventos`, `titulo_evento`, `participantes`, `info_evento`, `fecha`, `foto_evento`) VALUES
(1, 'Acústico Bajo Las Estrellas', 'Tori Vega & André Harris', 'Una noche íntima de música en vivo en el patio de Hollywood Arts. ¡Llevá una manta y preparate para los temazos! ', '2025-06-14', 'acustico.png'),
(2, '¡Impro-Manía Extrema!', 'Cat Valentine & Robbie Shapiro', 'Una hora sin guión, sin filtro, y probablemente sin sentido. Comedia improvisada con los más impredecibles del estudio. ', '2025-07-16', 'impromania.png'),
(3, '“Pizza... El Musical\"', 'Jade West, Beck Oliver, Trina Vega (a la fuer', 'Jade escribe, Beck dirige, Trina canta (lamentablemente). Un musical absurdo con mucho queso y aún más drama.', '2025-06-18', 'musical.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historias`
--

CREATE TABLE `historias` (
  `id_historias` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `texto` varchar(800) NOT NULL,
  `comentario1` varchar(60) DEFAULT NULL,
  `comentario2` varchar(60) DEFAULT NULL,
  `posteo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `historias`
--

INSERT INTO `historias` (`id_historias`, `nombre`, `texto`, `comentario1`, `comentario2`, `posteo`) VALUES
(1, 'Tory Vega', 'Después de que Tori subió ese post diciendo que su día era AWESOME y que amaba su nuevo teléfono, Jade estalló. Resulta que el teléfono se lo había regalado Beck para animarla después de un mal ensayo… lo que Jade no sabía. Cuando vio el post, pensó que Tori lo estaba haciendo público a propósito. Conclusión: Jade le borró a Tori todos sus contactos del PearPhone mientras estaba distraída en clase de teatro. Drama desbloqueado.', '@Toryvega: Tranquilos, ya recupere todo :))))', '@Beck: Jade perdoname porfavor, ya no se por donde hablar', 'tory_post.png'),
(2, 'Andre Harris', 'Después de que André publicara eso, todos asumieron que se refería al documental experimental de Sinjin que los profesores obligaron a ver para la clase de Cine. Pero en realidad, Trina le había rogado que viera su nuevo “video artístico” de 8 horas donde solo camina en círculos bajo la lluvia.\r\nAndré no tuvo el corazón de decirle que ya lo había intentado... y se quedó dormido en el minuto 3.\r\nRumor: Trina le dejó un mensaje de voz llorando en mandarín (y no habla mandarín).', '@catvalentine: Yo vi 5 minutos y me dio vértigo.', '@rex: Dormirse fue lo mejor que hiciste, bro.', 'andre_post.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenias`
--

CREATE TABLE `resenias` (
  `id_resenias` int(11) NOT NULL,
  `resenia_texto` varchar(45) NOT NULL,
  `img` varchar(45) DEFAULT NULL,
  `fecha` date NOT NULL,
  `fk_eventos` int(11) NOT NULL,
  `fk_usuarios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `resenias`
--

INSERT INTO `resenias` (`id_resenias`, `resenia_texto`, `img`, `fecha`, `fk_eventos`, `fk_usuarios`) VALUES
(8, 'Fe-no-me-nal, son un gran dueto!!', NULL, '2025-06-14', 1, NULL),
(12, 'Se lucieron!!', NULL, '2025-06-14', 1, NULL),
(13, 'robbie no eres gracioso', NULL, '2025-06-14', 2, NULL),
(14, 'el comentario anterior no fue de rex ()', NULL, '2025-06-14', 2, NULL),
(23, 'Estuvo super intenso!!', '1750779511.jpg', '2025-06-24', 3, NULL),
(37, 'Estuvo super!!', '1752861636.jpg', '2025-07-18', 2, 1),
(46, 'JAJAJAJAJAJ', '1752862489.jpg', '2025-07-18', 3, 1),
(49, 'que chistoso', '1753984128.jpg', '2025-07-31', 1, 11),
(50, 'malisimo\r\n', '1753984263.jpg', '2025-07-31', 2, 12),
(51, 'hola', '1754262613.jpg', '2025-08-04', 1, 1),
(52, 'holqa\r\n', '1754262695.jpg', '2025-08-04', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `tipo_rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_roles`, `tipo_rol`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `mail` varchar(55) NOT NULL,
  `contrasenia` varchar(45) NOT NULL,
  `avatar` varchar(55) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fk_role` int(11) NOT NULL,
  `fk_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `mail`, `contrasenia`, `avatar`, `fecha_nacimiento`, `fecha_creacion`, `fk_role`, `fk_estado`) VALUES
(1, 'vicky.cm', 'victoria@gmail.com', '6c4024655d4a6e7aec9c2487456fdd2b', '', '2006-05-11', '2025-07-18', 2, 1),
(3, 'admin', 'admin@gmail.com', 'dcca2ed1630582435afa9d42ce361eb4', '', '2001-10-10', '2025-07-18', 1, 1),
(4, 'user_baneado', 'ban@davinci.edu.ar', '4317652e7e08e3edc6d6e607122d7500', '', '2000-01-01', '2025-07-18', 2, 2),
(11, 'Alma', 'alma@davinci.edu.ar', '06803d8f9679e22ea90dd18c8e2df59b', '', '2005-08-12', '2025-07-25', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_eventos`);

--
-- Indices de la tabla `historias`
--
ALTER TABLE `historias`
  ADD PRIMARY KEY (`id_historias`);

--
-- Indices de la tabla `resenias`
--
ALTER TABLE `resenias`
  ADD PRIMARY KEY (`id_resenias`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`),
  ADD UNIQUE KEY `tipo_rol_UNIQUE` (`tipo_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD UNIQUE KEY `mail_UNIQUE` (`mail`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_eventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `historias`
--
ALTER TABLE `historias`
  MODIFY `id_historias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `resenias`
--
ALTER TABLE `resenias`
  MODIFY `id_resenias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
