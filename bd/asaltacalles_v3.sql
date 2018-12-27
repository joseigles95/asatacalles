-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2018 a las 23:23:20
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asaltacalles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color-party`
--

CREATE TABLE `color-party` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `color-party`
--

INSERT INTO `color-party` (`id`, `ruta`) VALUES
(1, 'color-party.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discomovil`
--

CREATE TABLE `discomovil` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `discomovil`
--

INSERT INTO `discomovil` (`id`, `ruta`) VALUES
(1, 'flotador.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encierros`
--

CREATE TABLE `encierros` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encierros`
--

INSERT INTO `encierros` (`id`, `ruta`) VALUES
(1, 'flotador.png'),
(2, 'carreton.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fiesta-espuma`
--

CREATE TABLE `fiesta-espuma` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fiesta-espuma`
--

INSERT INTO `fiesta-espuma` (`id`, `ruta`) VALUES
(1, 'flotador.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hinchables_acuaticos`
--

CREATE TABLE `hinchables_acuaticos` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hinchables_acuaticos`
--

INSERT INTO `hinchables_acuaticos` (`id`, `ruta`) VALUES
(1, 'flotador.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ludoteca`
--

CREATE TABLE `ludoteca` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ludoteca`
--

INSERT INTO `ludoteca` (`id`, `ruta`) VALUES
(2, 'flotador.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `new`
--

INSERT INTO `new` (`id`, `ruta`) VALUES
(1, 'promociones.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades1`
--

CREATE TABLE `novedades1` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `new` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `novedades1`
--

INSERT INTO `novedades1` (`id`, `titulo`, `new`) VALUES
(1, 'Principal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula vel tellus ut pretium. Phasellus commodo elit id aliquam scelerisque. Suspendisse potenti. Pellentesque enim justo, tempor a porta non, mattis eu nulla. Curabitur blandit aliquet ante, tristique elementum leo suscipit vitae. Nullam rutrum quis justo id vulputate. Mauris eu faucibus risus. Etiam nulla ligula, sagittis at purus nec, luctus ultricies magna. Cras sagittis facilisis viverra. Sed pretium ut lacus quis facilisis. Pellentesque suscipit finibus condimentum. Integer quis nisl ut sem laoreet mollis. Aliquam semper purus sit amet libero placerat, tempus tempor velit venenatis. Nullam interdum convallis eleifend.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades2`
--

CREATE TABLE `novedades2` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `new` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `novedades2`
--

INSERT INTO `novedades2` (`id`, `titulo`, `new`) VALUES
(1, 'Prueba', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula vel tellus ut pretium. Phasellus commodo elit id aliquam scelerisque. Suspendisse potenti. Pellentesque enim justo, tempor a porta non, mattis eu nulla. Curabitur blandit aliquet ante, tristique elementum leo suscipit vitae. Nullam rutrum quis justo id vulputate. Mauris eu faucibus risus. Etiam nulla ligula, sagittis at purus nec, luctus ultricies magna. Cras sagittis facilisis viverra. Sed pretium ut lacus quis facilisis. Pellentesque suscipit finibus condimentum. Integer quis nisl ut sem laoreet mollis. Aliquam semper purus sit amet libero placerat, tempus tempor velit venenatis. Nullam interdum convallis eleifend.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parques`
--

CREATE TABLE `parques` (
  `id` int(11) NOT NULL,
  `ruta` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parques`
--

INSERT INTO `parques` (`id`, `ruta`) VALUES
(9, 'color-party.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pintacaras`
--

CREATE TABLE `pintacaras` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pintacaras`
--

INSERT INTO `pintacaras` (`id`, `ruta`) VALUES
(1, 'tobogan.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `promo` longtext NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `titulo`, `promo`, `ruta`) VALUES
(1, 'prueba df', 'Vivamus eu posuere ex, vel rutrum tellus. Proin a pellentesque justo. Nulla posuere at risus nec malesuada. Phasellus eleifend placerat ligula sed varius. Pellentesque ultrices dolor sit amet mi facilisis, in semper purus tempus. Sed a convallis velit. Nunc et quam quis nisl volutpat bibendum. Quisque et pretium tellus. Aenean placerat gravida ipsum, a dignissim est convallis quis. Maecenas maximus lacus vel lorem laoreet molestie. Proin mollis sem vitae ex aliquet pellentesque. Donec a laoreet turpis. Integer nec convallis arcu.', 'flotador.png'),
(3, 'Prueba', 'Prueba hkasdfh', 'pic03.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tobogan`
--

CREATE TABLE `tobogan` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tobogan`
--

INSERT INTO `tobogan` (`id`, `ruta`) VALUES
(1, 'tobogan.jpg'),
(2, 'tobogan.jpg'),
(3, 'castillo-agua.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `color-party`
--
ALTER TABLE `color-party`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `discomovil`
--
ALTER TABLE `discomovil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encierros`
--
ALTER TABLE `encierros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fiesta-espuma`
--
ALTER TABLE `fiesta-espuma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hinchables_acuaticos`
--
ALTER TABLE `hinchables_acuaticos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ludoteca`
--
ALTER TABLE `ludoteca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedades1`
--
ALTER TABLE `novedades1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedades2`
--
ALTER TABLE `novedades2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parques`
--
ALTER TABLE `parques`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pintacaras`
--
ALTER TABLE `pintacaras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tobogan`
--
ALTER TABLE `tobogan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `color-party`
--
ALTER TABLE `color-party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `discomovil`
--
ALTER TABLE `discomovil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `encierros`
--
ALTER TABLE `encierros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fiesta-espuma`
--
ALTER TABLE `fiesta-espuma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hinchables_acuaticos`
--
ALTER TABLE `hinchables_acuaticos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ludoteca`
--
ALTER TABLE `ludoteca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `novedades1`
--
ALTER TABLE `novedades1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `novedades2`
--
ALTER TABLE `novedades2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `parques`
--
ALTER TABLE `parques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pintacaras`
--
ALTER TABLE `pintacaras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tobogan`
--
ALTER TABLE `tobogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
