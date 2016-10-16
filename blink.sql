-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-10-2016 a las 01:41:29
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blink`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET latin1 NOT NULL,
  `password` varchar(11) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'brenrychter', 'beta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `idGroup` int(11) NOT NULL,
  `groupName` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`idGroup`, `groupName`, `picture`, `datetime`) VALUES
(1, 'Nefetz', '', '2016-08-22 01:16:51'),
(2, 'P13N', '', '2016-08-22 15:20:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE `home` (
  `value_id` int(11) NOT NULL,
  `value` text NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Landing page en español';

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`value_id`, `value`, `spanish`, `english`) VALUES
(5, 'title', 'Tus grupos en un mismo lugar', 'Your groups in one place'),
(7, 'subtitle', 'Una &uacute;nica aplicaci&oacute;n. Todo lo que necesitas.', 'A single application. Everything you need.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modules`
--

CREATE TABLE `modules` (
  `idModule` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idGroup` int(11) NOT NULL,
  `idType` int(11) NOT NULL,
  `text` varchar(100) CHARACTER SET latin1 NOT NULL,
  `datetime` datetime NOT NULL,
  `isEnabled` tinyint(1) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `idNotification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modules`
--

INSERT INTO `modules` (`idModule`, `idUser`, `idGroup`, `idType`, `text`, `datetime`, `isEnabled`, `isAdmin`, `idNotification`) VALUES
(3, 1, 1, 1, 'Primera publicacion', '0000-00-00 00:00:00', 0, 0, 0),
(5, 1, 2, 1, '', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `idNotification` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `text` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types`
--

CREATE TABLE `types` (
  `idType` int(11) NOT NULL,
  `typeName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `types`
--

INSERT INTO `types` (`idType`, `typeName`) VALUES
(1, 'muro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET latin1 NOT NULL,
  `password` varchar(15) CHARACTER SET latin1 NOT NULL,
  `phoneNumber` int(8) NOT NULL,
  `mail` varchar(25) CHARACTER SET latin1 NOT NULL,
  `picture` varchar(50) CHARACTER SET latin1 NOT NULL,
  `signInDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `timezone` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `phoneNumber`, `mail`, `picture`, `signInDate`, `timezone`) VALUES
(1, 'brenda', '1234', 65220951, 'brenda@gmail.com', 'brenda.jpg', '2016-09-12 04:04:50', '0000-00-00 00:00:00'),
(89, 'juanma', '123', 0, '', '', '2016-10-02 19:35:29', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`idGroup`);

--
-- Indices de la tabla `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`value_id`),
  ADD KEY `value_id` (`value_id`);

--
-- Indices de la tabla `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`idModule`),
  ADD KEY `idGroup` (`idGroup`),
  ADD KEY `idNotification` (`idNotification`),
  ADD KEY `idType` (`idType`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`idNotification`);

--
-- Indices de la tabla `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`idType`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `home`
--
ALTER TABLE `home`
  MODIFY `value_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `modules`
--
ALTER TABLE `modules`
  MODIFY `idModule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `idNotification` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `types`
--
ALTER TABLE `types`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`idGroup`) REFERENCES `groups` (`idGroup`),
  ADD CONSTRAINT `modules_ibfk_3` FOREIGN KEY (`idType`) REFERENCES `types` (`idType`),
  ADD CONSTRAINT `modules_ibfk_4` FOREIGN KEY (`idUser`) REFERENCES `users` (`userID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
