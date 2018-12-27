-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2018 a las 22:27:02
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
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `promo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `titulo`, `promo`) VALUES
(1, 'prueba', 'Textro de prueba'),
(2, 'prueba 2', 'mas texto de prueba'),
(3, 'promo 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a metus orci. Nam leo quam, cursus eget nisi id, malesuada venenatis lorem. Curabitur fringilla lacinia nulla. Pellentesque vel iaculis nisi. Quisque odio felis, fringilla sollicitudin fringilla eget, pharetra sed est. Sed egestas, odio id aliquet interdum, nunc nulla tristique eros, eu laoreet neque purus a elit. Aenean sed rhoncus massa, id blandit lectus. Etiam in purus vel lorem porttitor luctus vel ut ante. Pellentesque ut placerat leo. Ut semper fermentum ex, a efficitur diam vulputate eget. Vivamus elementum sagittis ex ac pharetra. Ut id purus vel neque eleifend consequat ut at nisl. Aenean cursus enim enim, ut placerat tortor euismod nec. Quisque fermentum massa ullamcorper sodales tincidunt. Proin pulvinar justo et nisi sollicitudin mollis. Nulla et leo lectus.'),
(4, 'promo 4', 'Etiam mauris nunc, mattis varius lectus in, tincidunt commodo massa. Vivamus at semper massa. Donec pellentesque sagittis velit. Nulla facilisi. Cras tristique bibendum congue. Vivamus tempus consequat magna eget placerat. Fusce quis porttitor quam, sit amet dignissim magna.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
