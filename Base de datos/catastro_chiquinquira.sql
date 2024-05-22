-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2024 a las 09:29:47
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catastro_chiquinquira`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_pqrs`
--

CREATE TABLE `formulario_pqrs` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contacto` varchar(20) NOT NULL,
  `comentario` text NOT NULL,
  `archivo_path` varchar(255) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario_pqrs`
--

INSERT INTO `formulario_pqrs` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `correo`, `contacto`, `comentario`, `archivo_path`, `fecha_creacion`) VALUES
(18, 'felipe', 'siuuuu', '1002523954', '3167750391', 'diego.hola@gmail.com', 'correo', 'fsefsefdfsefdfsdfefdfesfdf', 'archivos_formulario_pqrs/11-14-23-23-32-54-Clase 8.pdf', '2023-11-14 22:32:54'),
(19, 'victor', 'Diaz', '10025229', '3142350241', 'andres.felipe.1999@gmail.com', 'telefono', 'fsebfusdbnfidnfubusdbfudsbfuds', 'archivos_formulario_pqrs/11-17-23-01-46-04-liquidacion_FelipeDiaz.pdf', '2023-11-17 00:46:04'),
(20, 'Laura', 'diaz', '1002522983', '3228761513', 'laura.diaz.1999@gmail.com', 'telefono', 'fiewhfidsnklfnelwhfuidsnjkfsd', 'archivos_formulario_pqrs/02-25-24-03-14-47-Andres Felipe Diaz Letrado.pdf', '2024-02-25 02:14:47'),
(21, 'Andres Felipe', 'Diaz Letrado', '1002522983', '3167750381', 'andres.felipe.1999@gmail.com', 'correo', 'diego es bien mk', 'archivos_formulario_pqrs/05-21-24_05-14-16-1 Estructura informe final.pdf', '2024-05-21 03:14:17'),
(22, 'Andres Felipe', 'Diaz Letrado', '10025229', '3167750381', 'andres.felipe.1999@gmail.com', 'whatsapp', 'gdrgdrgrdgrdgdrgdrg', 'archivos_formulario_pqrs/05-21-24_05-17-58-1 Estructura informe final.pdf', '2024-05-21 03:17:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_cc` bigint(20) NOT NULL,
  `tipo_identificacion` varchar(50) NOT NULL,
  `fecha_expedicion` date NOT NULL,
  `primer_nombre` varchar(255) NOT NULL,
  `segundo_nombre` varchar(255) DEFAULT NULL,
  `primer_apellido` varchar(255) NOT NULL,
  `segundo_apellido` varchar(255) DEFAULT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `direccion_domicilio` varchar(255) NOT NULL,
  `zona_rural` tinyint(1) DEFAULT 0,
  `vereda` varchar(255) DEFAULT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_cc`, `tipo_identificacion`, `fecha_expedicion`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `telefono`, `pais`, `departamento`, `municipio`, `direccion_domicilio`, `zona_rural`, `vereda`, `contraseña`) VALUES
(1002522983, 'cedula_ciudadania', '2024-05-08', 'felipe', 'Andres Felipe', 'Diaz', 'Letrado', 'andres.felipe.1999@gmail.com', '3167750381', 'Colombia', 'Boyacá', 'Chiquinquirá', 'carrera 9 # 17-72', 0, '', '$2y$10$5rbz7VDdywfzyLAdd9t3JulRfba.ylVq7ZBfESZFKoflbdveaKiwa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario_pqrs`
--
ALTER TABLE `formulario_pqrs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_cc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario_pqrs`
--
ALTER TABLE `formulario_pqrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
