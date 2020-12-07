-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-12-2020 a las 02:36:31
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15536677_novedades_sena`
--
CREATE DATABASE IF NOT EXISTS `id15536677_novedades_sena` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id15536677_novedades_sena`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activo`
--

CREATE TABLE `activo` (
  `ID_ACTIVO` bigint(20) NOT NULL,
  `SERIAL_A` varchar(30) NOT NULL,
  `MARCA` varchar(30) NOT NULL,
  `ESTADO` bit(1) NOT NULL,
  `EST_ASIG` char(1) NOT NULL,
  `CATEGORIA` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `activo`
--

INSERT INTO `activo` (`ID_ACTIVO`, `SERIAL_A`, `MARCA`, `ESTADO`, `EST_ASIG`, `CATEGORIA`) VALUES
(5, '6576788765', 'HP', b'1', '1', 4),
(6, '6541132', 'HP', b'1', '1', 4),
(7, '888888', 'hp', b'1', '1', 4),
(8, '456771651', 'WONKA', b'1', '1', 4),
(9, '3546842', 'HP', b'1', '1', 4),
(10, '100098852645', 'LENOVO', b'1', '1', 4),
(11, '100098852646', 'LENOVO', b'1', '1', 4),
(12, '100098852647', 'LENOVO', b'1', '0', 4),
(13, '10009356202', 'LENOVO', b'1', '1', 6),
(14, '10009356203', 'LENOVO', b'1', '1', 6),
(15, '10009356204', 'LENOVO', b'1', '1', 6),
(16, '10009356205', 'HP', b'1', '1', 6),
(17, '10009356207', 'HP', b'1', '1', 6),
(18, '100065234641', 'LENOVO', b'1', '1', 5),
(19, '100065234642', 'LENOVO', b'1', '1', 5),
(20, '100065234643', 'LENOVO', b'1', '1', 5),
(21, '1000968423', 'EASY', b'1', '1', 8),
(22, '1000968424', 'EASY', b'1', '1', 8),
(23, '1000968425', 'EASY', b'1', '1', 8),
(24, '231564', 'EPSON', b'1', '1', 4),
(25, 'A1B2C3D4', 'ACER', b'1', '0', 4),
(26, 'abcd1234', 'SAMSUNG', b'1', '0', 6),
(27, 'C4D32134', 'PC SMART', b'1', '1', 4),
(28, '11223344', 'LG', b'1', '0', 6),
(32, '45677', 'hp', b'1', '0', 11);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `activos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `activos` (
`ID_ACTIVO` bigint(20)
,`SERIAL_A` varchar(30)
,`MARCA` varchar(30)
,`ESTADO` bit(1)
,`EST_ASIG` char(1)
,`CATEGORIA` tinyint(4)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `activos_c`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `activos_c` (
`ID_ACTIVO` bigint(20)
,`SERIAL_A` varchar(30)
,`MARCA` varchar(30)
,`ID_CATEGORIA` tinyint(4)
,`NOMBRE_CATEGORIA` varchar(35)
,`ESTADO` bit(1)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE `ambiente` (
  `ID_AMBIENTE` smallint(6) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `ESTADO` bit(1) NOT NULL,
  `ID_SEDE` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`ID_AMBIENTE`, `NOMBRE`, `ESTADO`, `ID_SEDE`) VALUES
(10, 'AMBIENTE 409', b'1', 10),
(11, 'AMBIENTE 403', b'1', 1),
(12, 'AMBIENTE 405', b'1', 2),
(37, 'AMBIENTE 602', b'1', 1),
(49, 'AMBIENTE 803', b'0', 2),
(50, 'AUDIOVISUALES 1', b'1', 1),
(51, 'AMBIENTE 502', b'1', 2),
(52, 'AMBIENTE 901', b'1', 10),
(55, 'AMBIENTE 302', b'1', 10),
(56, 'AMBIENTE 505', b'1', 10),
(57, 'AMBIENTE 408', b'1', 1),
(58, 'AMBIENTE 301', b'1', 10),
(59, 'COORDINACION', b'1', 2),
(60, 'GIMNASIO', b'1', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `ambientes`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `ambientes` (
`ID_AMBIENTE` smallint(6)
,`NOMBRE_A` varchar(30)
,`ESTADO_A` bit(1)
,`ID_SEDE` tinyint(4)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `ambientes_c`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `ambientes_c` (
`ID_AMBIENTE` smallint(6)
,`NOMBRE_A` varchar(30)
,`ESTADO_A` bit(1)
,`NOMBRE_SEDE` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_CATEGORIA` tinyint(4) NOT NULL,
  `NOMBRE_CATEGORIA` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_CATEGORIA`, `NOMBRE_CATEGORIA`) VALUES
(4, 'COMPUTADOR'),
(5, 'MOUSE'),
(6, 'PANTALLA'),
(7, 'TECLADO'),
(8, 'SILLA'),
(9, 'MESA'),
(10, 'ESCRITORIO'),
(11, 'IMPRESORA'),
(12, 'TABLET');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `categorias`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `categorias` (
`ID_CATEGORIA` tinyint(4)
,`NOMBRE_CATEGORIA` varchar(35)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ambiente_activo`
--

CREATE TABLE `detalle_ambiente_activo` (
  `ID_DETALLE` bigint(20) NOT NULL,
  `ID_AMBIENTE` smallint(6) NOT NULL,
  `ID_ACTIVO` bigint(20) NOT NULL,
  `FECHA_ENTRADA` date NOT NULL,
  `FECHA_SALIDA` date DEFAULT NULL,
  `DISPONIBILIDAD` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_ambiente_activo`
--

INSERT INTO `detalle_ambiente_activo` (`ID_DETALLE`, `ID_AMBIENTE`, `ID_ACTIVO`, `FECHA_ENTRADA`, `FECHA_SALIDA`, `DISPONIBILIDAD`) VALUES
(5, 10, 5, '2020-10-16', NULL, b'1'),
(6, 10, 6, '2020-10-16', NULL, b'1'),
(7, 11, 7, '2020-10-16', '2020-11-29', b'1'),
(8, 11, 8, '2020-10-23', '2020-12-04', b'1'),
(9, 49, 21, '2020-10-30', NULL, b'1'),
(10, 49, 22, '2020-10-30', NULL, b'1'),
(11, 49, 23, '2020-10-30', NULL, b'1'),
(12, 37, 17, '2020-10-30', '2020-11-28', b'1'),
(13, 37, 14, '2020-10-30', NULL, b'1'),
(14, 37, 15, '2020-10-30', NULL, b'1'),
(15, 37, 13, '2020-10-30', NULL, b'1'),
(16, 12, 18, '2020-10-30', NULL, b'1'),
(17, 12, 10, '2020-11-06', NULL, b'1'),
(18, 12, 19, '2020-11-06', NULL, b'1'),
(19, 10, 20, '2020-11-06', NULL, b'1'),
(20, 52, 16, '2020-11-28', NULL, b'1'),
(21, 50, 16, '2020-11-28', '2020-11-29', b'1'),
(22, 10, 9, '2020-11-29', '2020-11-29', b'1'),
(23, 10, 9, '2020-11-29', NULL, b'1'),
(24, 10, 9, '2020-11-29', NULL, b'1'),
(25, 10, 9, '2020-11-29', NULL, b'1'),
(26, 10, 9, '2020-11-29', NULL, b'1'),
(27, 10, 27, '2020-12-04', NULL, b'1'),
(28, 59, 11, '2020-12-04', NULL, b'1'),
(30, 60, 24, '2020-12-07', NULL, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_control_ambiente`
--

CREATE TABLE `detalle_control_ambiente` (
  `ID_CONTROL` bigint(20) NOT NULL,
  `ID_AMBIENTE` smallint(6) NOT NULL,
  `ID_USUARIO` smallint(6) NOT NULL,
  `FECHA` datetime NOT NULL,
  `DESCRIPCION_AMBIENTE` varchar(8000) NOT NULL,
  `INCONSISTENCIA` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_control_ambiente`
--

INSERT INTO `detalle_control_ambiente` (`ID_CONTROL`, `ID_AMBIENTE`, `ID_USUARIO`, `FECHA`, `DESCRIPCION_AMBIENTE`, `INCONSISTENCIA`) VALUES
(17, 12, 10, '2020-10-30 12:05:59', 'vidrio roto', '1'),
(18, 49, 10, '2020-10-30 12:15:31', '', '0'),
(19, 12, 11, '2020-10-30 12:47:59', '', '0'),
(20, 11, 10, '2020-11-06 13:07:41', '', '0'),
(21, 10, 10, '2020-11-16 19:50:25', '', '0'),
(22, 37, 10, '2020-11-16 19:53:57', '', '0'),
(23, 37, 10, '2020-11-16 19:55:23', '', '0'),
(24, 50, 10, '2020-11-16 19:56:33', '', '0'),
(25, 49, 10, '2020-11-19 22:37:52', 'piso mojado ', '1'),
(26, 50, 10, '2020-11-26 19:59:49', 'reproductor dañado', '1'),
(27, 49, 10, '2020-11-26 20:02:10', 'jaja', '1'),
(28, 37, 10, '2020-11-26 20:04:26', '', '0'),
(29, 10, 10, '2020-11-26 20:04:51', '', '0'),
(30, 52, 10, '2020-11-26 20:06:05', 'esta feo', '1'),
(31, 11, 10, '2020-11-29 19:28:42', '', '0'),
(32, 52, 10, '2020-11-29 21:59:20', '', '0'),
(33, 50, 11, '2020-11-30 01:10:31', '', '0'),
(34, 50, 14, '2020-11-30 02:30:11', 'vidrio roto', '1'),
(35, 12, 10, '2020-12-01 17:28:42', '', '0'),
(36, 57, 11, '2020-12-03 04:01:12', '', '0'),
(37, 49, 11, '2020-12-03 04:02:48', '', '0'),
(38, 50, 10, '2020-12-03 06:08:40', '', '0'),
(39, 59, 11, '2020-12-04 03:43:53', 'NO SE REALIZO LIMPIEZA', '1'),
(40, 11, 10, '2020-12-04 17:57:38', 'VIDRIO ROTO', '1'),
(41, 10, 11, '2020-12-05 03:14:11', 'vidrio roto', '1'),
(42, 59, 10, '2020-12-06 23:58:15', '', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_ambiente`
--

CREATE TABLE `detalle_usuario_ambiente` (
  `ID_ASIGNACION` smallint(6) NOT NULL,
  `ID_USUARIO` smallint(6) NOT NULL,
  `ID_AMBIENTE` smallint(6) NOT NULL,
  `FECHA_ENTRADA` date NOT NULL,
  `FECHA_SALIDA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_usuario_ambiente`
--

INSERT INTO `detalle_usuario_ambiente` (`ID_ASIGNACION`, `ID_USUARIO`, `ID_AMBIENTE`, `FECHA_ENTRADA`, `FECHA_SALIDA`) VALUES
(10, 11, 10, '2020-10-16', '2020-10-16'),
(11, 13, 11, '2020-10-22', '2020-11-06'),
(13, 11, 37, '2020-10-30', '2020-10-30'),
(14, 11, 12, '2020-10-30', '2020-11-06'),
(15, 11, 50, '2020-11-06', '2020-11-06'),
(16, 11, 50, '2020-11-06', '2020-11-06'),
(17, 11, 49, '2020-11-06', '2020-11-29'),
(19, 11, 11, '2020-11-26', '2020-11-29'),
(20, 15, 50, '2020-11-29', '2020-11-29'),
(21, 15, 10, '2020-11-29', '2020-11-29'),
(22, 15, 10, '2020-11-29', NULL),
(23, 11, 57, '2020-11-29', NULL),
(24, 11, 49, '2020-12-03', NULL),
(25, 15, 11, '2020-12-04', '2020-12-04'),
(26, 21, 11, '2020-12-04', NULL),
(27, 15, 59, '2020-12-04', NULL),
(29, 21, 60, '2020-12-07', NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_activo_ambiente_c1`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_activo_ambiente_c1` (
`ID_DETALLE` bigint(20)
,`ID_ACTIVO` bigint(20)
,`SERIAL_A` varchar(30)
,`MARCA` varchar(30)
,`NOMBRE_CATEGORIA` varchar(35)
,`ID_AMBIENTE` smallint(6)
,`NOMBRE_A` varchar(30)
,`FECHA_ENTRADA` date
,`FECHA_SALIDA` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_ambiente_activo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_ambiente_activo` (
`ID_DETALLE` bigint(20)
,`ID_AMBIENTE` smallint(6)
,`ID_ACTIVO` bigint(20)
,`FECHA_ENTRADA` date
,`FECHA_SALIDA` date
,`DISPONIBILIDAD` bit(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_control_ambiente`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_control_ambiente` (
`ID_CONTROL` bigint(20)
,`ID_AMBIENTE` smallint(6)
,`ID_USUARIO` smallint(6)
,`FECHA` datetime
,`DESCRIPCION_AMBIENTE` varchar(8000)
,`INCONSISTENCIA` char(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_control_ambiente_c1`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_control_ambiente_c1` (
`ID_CONTROL` bigint(20)
,`ID_AMBIENTE` smallint(6)
,`NOMBRE_A` varchar(30)
,`IDENTIFICACION` varchar(12)
,`NOMBRE` varchar(100)
,`FECHA` datetime
,`DESCRIPCION_AMBIENTE` varchar(8000)
,`INCONSISTENCIA` char(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_control_ambiente_c2`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_control_ambiente_c2` (
`ID_AMBIENTE` smallint(6)
,`NOMBRE_A` varchar(30)
,`IDENTIFICACION` varchar(12)
,`NOMBRE` varchar(100)
,`FECHA` datetime
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_control_ambiente_c3`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_control_ambiente_c3` (
`ID_USUARIO` smallint(6)
,`IDENTIFICACION` varchar(12)
,`NOMBRE` varchar(100)
,`ID_AMBIENTE` smallint(6)
,`NOMBRE_A` varchar(30)
,`TIPO_NOVEDAD` varchar(30)
,`ID_NOVEDAD` bigint(20)
,`FECHA` datetime
,`ID_ACTIVO` bigint(20)
,`SERIAL_A` varchar(30)
,`DESCRIPCION` varchar(8000)
,`ID_CONTROL` bigint(20)
,`NOMBRE_CATEGORIA` varchar(35)
,`MARCA` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_control_ambiente_c4`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_control_ambiente_c4` (
`ID_ACTIVO` bigint(20)
,`SERIAL_A` varchar(30)
,`MARCA` varchar(30)
,`ID_NOVEDAD` bigint(20)
,`NOMBRE` varchar(30)
,`DESCRIPCION` varchar(8000)
,`ID_CONTROL` bigint(20)
,`FECHA` datetime
,`NOMBRE_CATEGORIA` varchar(35)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_control_ambiente_c5`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_control_ambiente_c5` (
`ID_CONTROL` bigint(20)
,`ID_AMBIENTE` smallint(6)
,`NOMBRE_A` varchar(30)
,`ID_USUARIO` smallint(6)
,`NOMBRE` varchar(100)
,`FECHA` datetime
,`DESCRIPCION_AMBIENTE` varchar(8000)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_control_ambiente_c6`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_control_ambiente_c6` (
`ID_AMBIENTE` smallint(6)
,`NOMBRE_A` varchar(30)
,`ID_ACTIVO` bigint(20)
,`SERIAL_A` varchar(30)
,`MARCA` varchar(30)
,`CATEGORIA` tinyint(4)
,`NOMBRE_CATEGORIA` varchar(35)
,`ESTADO` bit(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_usuario_ambiente`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_usuario_ambiente` (
`ID_ASIGNACION` smallint(6)
,`ID` smallint(6)
,`ID_A` smallint(6)
,`FECHA_ENTRADA` date
,`FECHA_SALIDA` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_usuario_ambiente_c`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_usuario_ambiente_c` (
`ID_ASIGNACION` smallint(6)
,`IDENTIFICACION` varchar(12)
,`NOMBRE` varchar(100)
,`ID_A` smallint(6)
,`NOMBRE_A` varchar(30)
,`FECHA_ENTRADA` date
,`FECHA_SALIDA` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `d_usuario_ambiente_c1`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `d_usuario_ambiente_c1` (
`ID_AMBIENTE` smallint(6)
,`NOMBRE_A` varchar(30)
,`ID_SEDE` tinyint(4)
,`NOMBRE` varchar(50)
,`ID_S` tinyint(4)
,`ID_A` smallint(6)
,`FECHA_SALIDA` date
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `ID_NOVEDAD` bigint(20) NOT NULL,
  `DESCRIPCION` varchar(8000) NOT NULL,
  `ID_ACTIVO` bigint(20) NOT NULL,
  `ID_TIPO` smallint(6) NOT NULL,
  `ID_CONTROL` bigint(20) NOT NULL,
  `NAM` bigint(2) NOT NULL,
  `CODIGO_NOVEDAD` bigint(10) NOT NULL,
  `FECHA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `novedad`
--

INSERT INTO `novedad` (`ID_NOVEDAD`, `DESCRIPCION`, `ID_ACTIVO`, `ID_TIPO`, `ID_CONTROL`, `NAM`, `CODIGO_NOVEDAD`, `FECHA`) VALUES
(24, 'TIENE UNA PATA ROTA', 22, 1, 18, 1, 77189, '2020-10-30 12:15:54'),
(25, 'TIENE UNA PATA ROTA', 21, 1, 18, 1, 41579, '2020-10-30 12:16:41'),
(26, 'ESPALDAR ', 22, 1, 18, 1, 5606, '2020-10-30 12:18:27'),
(27, 'TIENE DOS PATAS ROTAS', 22, 1, 18, 1, 45862, '2020-10-30 12:23:34'),
(28, 'esta chueca', 23, 1, 18, 0, 51076, '2020-10-30 12:23:55'),
(29, 'Clic roto', 18, 1, 19, 1, 13130, '2020-10-30 12:49:09'),
(30, 'pata rota', 21, 1, 18, 1, 987, '2020-10-30 13:07:21'),
(31, 'clic izquierdo defectuoso', 18, 1, 17, 1, 59612, '2020-10-30 13:24:09'),
(32, 'ingreso del activo luego de mesa de ayuda', 8, 1, 20, 1, 4543, '2020-11-06 13:08:27'),
(33, 'BFCXVB C', 7, 1, 20, 1, 12863, '2020-11-06 15:59:06'),
(35, 'silla con espaldar roto', 23, 1, 25, 1, 82285, '2020-11-19 23:32:11'),
(36, 'sin espaldar', 22, 2, 25, 1, 171, '2020-11-19 23:33:42'),
(37, 'Se recibe silla con pata nueva', 23, 3, 25, 1, 89380, '2020-11-20 00:17:27'),
(38, 'esta dañado', 8, 1, 31, 2, 55221, '2020-11-29 20:33:13'),
(39, 'no prende', 16, 2, 34, 1, 22648, '2020-11-30 02:30:59'),
(40, 'espaldar roto', 21, 1, 37, 1, 83346, '2020-12-03 04:03:12'),
(41, 'Se daño el SO', 11, 1, 39, 1, 49789, '2020-12-04 04:04:40'),
(42, 'SE RETIRA COMPUTADOR HP 8888888 PARA MESA DE AYUDA POR PRESENTAR FALLAS EN EL HARDWARE.', 7, 2, 40, 2, 610, '2020-12-04 17:58:42');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `novedades`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `novedades` (
`ID_NOVEDAD` bigint(20)
,`DESCRIPCION` varchar(8000)
,`ID_ACTIVO` bigint(20)
,`ID_TIPO` smallint(6)
,`ID_CONTROL` bigint(20)
,`NAM` bigint(2)
,`CODIGO_NOVEDAD` bigint(10)
,`FECHA` datetime
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `novedades_c`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `novedades_c` (
`ID_NOVEDAD` bigint(20)
,`ID_TIPO` smallint(6)
,`FECHA` datetime
,`NOMBRE` varchar(30)
,`ID_ACTIVO` bigint(20)
,`DESCRIPCION` varchar(8000)
,`ID_CONTROL` bigint(20)
,`NAM` bigint(2)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_ROL` tinyint(4) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_ROL`, `NOMBRE`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'CUENTADANTE'),
(3, 'DOCENTE'),
(4, 'PORASIGNAR');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `roles`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `roles` (
`ID_ROL` tinyint(4)
,`NOMBRE` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `ID_SEDE` tinyint(4) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DIRECCION` varchar(60) NOT NULL,
  `TELEFONO` varchar(7) NOT NULL,
  `ESTADO` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`ID_SEDE`, `NOMBRE`, `DIRECCION`, `TELEFONO`, `ESTADO`) VALUES
(1, 'FONTIBON', 'CALLE 19A # 96C - 40', '9632587', b'1'),
(2, 'SEDE PRINCIPAL', 'CALLE 52 # 13 - 65', '5941322', b'1'),
(4, 'patio bonito', 'cra 5 f 26e este', '9685232', b'0'),
(5, 'CALLE 45', 'calle 45 # 19-18', '9856321', b'0'),
(6, 'suba', 'av 114 #33-02', '7589635', b'0'),
(7, 'cra 10', 'cra 10 #83-04', '9638524', b'0'),
(8, 'prueba', 'cra 6 c fdgfcvbcb', '7877775', b'0'),
(9, 'fontibon3', 'fontibon', '9856241', b'0'),
(10, 'TEUSAQUILLO', 'Calle 44 No. 14 - 60 ', '3384974', b'1'),
(11, 'DIRECCIÓN GENERAL', 'CARRERA 7 # 54-23', '3214567', b'0'),
(12, 'a', 'a', '7597138', b'0'),
(13, 'Calle 100', 'Calle 100  15324', '4', b'0'),
(14, 'Calle 100', 'Calle 100 152', '7', b'0'),
(15, 'Calle 100', 'calle 13', '7', b'0'),
(16, 'Calle 100', 'Calle 100 # 10-20', '7', b'0'),
(17, 'Calle 100', 'Calle 100 # 100-100', '7', b'0'),
(18, 'Calle 130', 'Calle 100 # 100-100', '7005444', b'0');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `sedes`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `sedes` (
`ID_SEDE` tinyint(4)
,`NOMBRE` varchar(50)
,`DIRECCION` varchar(60)
,`TELEFONO` varchar(7)
,`ESTADO` bit(1)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_novedad`
--

CREATE TABLE `tipo_novedad` (
  `ID_TIPO` smallint(6) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_novedad`
--

INSERT INTO `tipo_novedad` (`ID_TIPO`, `NOMBRE`) VALUES
(1, 'DEFECTO'),
(2, 'SALIDA'),
(3, 'ARREGLO'),
(4, 'BAJA'),
(5, 'INGRESO DE ELEMENTO RETIRADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` smallint(6) NOT NULL,
  `IDENTIFICACION` varchar(12) NOT NULL,
  `CONTRASENA` varchar(255) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `CELULAR` varchar(10) NOT NULL,
  `TELEFONO` varchar(7) DEFAULT NULL,
  `DIRECCION` varchar(100) NOT NULL,
  `CORREO` varchar(100) NOT NULL,
  `ID_ROL` tinyint(4) NOT NULL,
  `ESTADO` bit(1) NOT NULL,
  `TOKEN` varchar(10) DEFAULT NULL,
  `EST_ASIG` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `IDENTIFICACION`, `CONTRASENA`, `NOMBRE`, `CELULAR`, `TELEFONO`, `DIRECCION`, `CORREO`, `ID_ROL`, `ESTADO`, `TOKEN`, `EST_ASIG`) VALUES
(10, '1000988526', '$2y$10$aiLjByI5K22MJXuG.jxhd.oRXt.Upvd58hSeS7MnFl.ep3pR9Eadi', 'Hector Andres Cardenas Riaño', '3213189492', '9845232', 'cra 6 c 97 b 25', 'hectrocade@gmail.com', 1, b'1', 'H0V4', b'0'),
(11, '1000320734', '$2y$10$k7KOlwCm98MMdJPgiHqBauNTuuZ.Xfy.SzsT1JmkKVIoOeYad/NVW', 'JAVIER ALEJANDRO SANCHEZ SALAMANCA', '3125851880', '4009774', 'Calle 138c # 152 - 25', 'jasanchez1003@gmail.com', 1, b'1', NULL, b'0'),
(13, '96314520', '$2y$10$KW7KqyhDkjgYE.YpbSbvqucsK7pryZpe0oZWhHyIFB55FkE.pL3kO', 'carolina ', '3256987417', '9685741', 'cra 6 c 97 b 24', 'hectrocade@gmail.com', 2, b'1', NULL, b'1'),
(14, '96857412', '$2y$10$ckqzqeKD2hRjmX7Kvpr1wOyj1RqbDx3ua2EyPgsIkz/P7aaxNsoQC', 'juana cardenas', '3125698574', '6352410', 'cra 6 c fdgfcvbcb', 'hectrocade@gmail.com', 3, b'1', 'KANS', b'0'),
(15, '963524853', '$2y$10$fE1ev.05lw9Yetxsevj7nuXFwgJwZKuqwOj7tRehub40UxV05shDG', 'juan rios', '3652541784', '9685747', 'cra 10 # 33-05', 'hectrocade@gmail.com', 2, b'1', NULL, b'0'),
(16, '5646526', '$2y$10$ymJdCGAUrKKff0NYirguJe7RBVo2wo70Uj/K7RFRlCt/jVbDgs.Km', 'juanito perez érezx', '3698521475', '6958324', 'cra 6 c fdgfcvbcbfbvds', 'hectrocade@gmail.com', 3, b'1', NULL, b'0'),
(18, '1000988527', '$2y$10$e6c/peX1aL4/MCUg.UzjmuoGBqvt8nM15Bh7ZImycBZ207qPAqh/q', 'hector dario rodriguez', '3213189494', '9856241', 'fontibon', 'hectrocade@gmail.com', 4, b'0', NULL, b'0'),
(19, '1023698542', '$2y$10$eFFI7qogTYmsKR65OgRFZOWqUetR8Zlk/rJycPbRzRcDSsgUc0YWC', 'carol maria perez', '3219685247', '6352417', 'cra 10 #33-07', 'hectrocade@gmail.com', 4, b'0', NULL, b'0'),
(20, '1011093170', '$2y$10$Ei7xkXzTsMDKwQrdvdOUb.Qsm8D1/WbvTVVgpJPRzDpV6SEao5lyS', 'SANTIAGO SANCHEZ SALAMANCA', '3142890250', '4009774', 'CALLE 138C # 152-25', 'jasanchez1003@gmail.com', 3, b'1', NULL, b'0'),
(21, '10311307054', '$2y$10$ECkQOjqTJVd.15KtqN9IAekX.7a3nlfjiR/lK1oQbXkYMowXx5xqK', 'Simon Salamanca Aza', '3214598270', '4009774', 'Calle 138c # 152 - 25', 'simonsalamanca113@gmail.com', 2, b'1', NULL, b'0'),
(22, '1000944247', '$2y$10$dNDHHf/zsxgorcgkNqT7WOxye9SwheUe3EdIwrGq8fpdGUQhC79.6', 'Santiago Vanegas Garcia ', '3222528992', '6624578', 'carrera 1 123 A BIS B # 123', 'Usuario@hotmail.com', 4, b'0', NULL, b'0'),
(23, '22222222', '$2y$10$2EPE4U.fSvBxmuGXxKxjBuSdNwVpiVgCa4sdGPPJY8/oYTrPdDsiS', 'firulais', '12345', '132131', 'bjhbhbb', 'ndknds@gmail', 4, b'0', NULL, b'0'),
(24, '254564hgcvn', '$2y$10$2ESUVYjd3pNjPedKg/63o.idhS/uvzmOUouTDNr2xmNy4X/92Nnxe', 'Hector Andres Cardenas Riaño', '3213189491', '6859423', 'cra 6 c fdgfcvbcbfbvds', 'hectrocade@gmail.com', 4, b'0', NULL, b'0');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `usuarios` (
`ID_USUARIO` smallint(6)
,`IDENTIFICACION` varchar(12)
,`CONTRASENA` varchar(255)
,`NOMBRE` varchar(100)
,`CELULAR` varchar(10)
,`TELEFONO` varchar(7)
,`DIRECCION` varchar(100)
,`CORREO` varchar(100)
,`ID_ROL` tinyint(4)
,`ESTADO` bit(1)
,`TOKEN` varchar(10)
,`EST_ASIG` bit(1)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `activos`
--
DROP TABLE IF EXISTS `activos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `activos`  AS  select `activo`.`ID_ACTIVO` AS `ID_ACTIVO`,`activo`.`SERIAL_A` AS `SERIAL_A`,`activo`.`MARCA` AS `MARCA`,`activo`.`ESTADO` AS `ESTADO`,`activo`.`EST_ASIG` AS `EST_ASIG`,`activo`.`CATEGORIA` AS `CATEGORIA` from `activo` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `activos_c`
--
DROP TABLE IF EXISTS `activos_c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `activos_c`  AS  select `a`.`ID_ACTIVO` AS `ID_ACTIVO`,`a`.`SERIAL_A` AS `SERIAL_A`,`a`.`MARCA` AS `MARCA`,`c`.`ID_CATEGORIA` AS `ID_CATEGORIA`,`c`.`NOMBRE_CATEGORIA` AS `NOMBRE_CATEGORIA`,`a`.`ESTADO` AS `ESTADO` from (`activos` `a` join `categorias` `c` on(`a`.`CATEGORIA` = `c`.`ID_CATEGORIA`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `ambientes`
--
DROP TABLE IF EXISTS `ambientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `ambientes`  AS  select `ambiente`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`ambiente`.`NOMBRE` AS `NOMBRE_A`,`ambiente`.`ESTADO` AS `ESTADO_A`,`ambiente`.`ID_SEDE` AS `ID_SEDE` from `ambiente` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `ambientes_c`
--
DROP TABLE IF EXISTS `ambientes_c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `ambientes_c`  AS  select `a`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`a`.`NOMBRE_A` AS `NOMBRE_A`,`a`.`ESTADO_A` AS `ESTADO_A`,`s`.`NOMBRE` AS `NOMBRE_SEDE` from (`ambientes` `a` join `sedes` `s` on(`a`.`ID_SEDE` = `s`.`ID_SEDE`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `categorias`
--
DROP TABLE IF EXISTS `categorias`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `categorias`  AS  select `categoria`.`ID_CATEGORIA` AS `ID_CATEGORIA`,`categoria`.`NOMBRE_CATEGORIA` AS `NOMBRE_CATEGORIA` from `categoria` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_activo_ambiente_c1`
--
DROP TABLE IF EXISTS `d_activo_ambiente_c1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_activo_ambiente_c1`  AS  select `d`.`ID_DETALLE` AS `ID_DETALLE`,`d`.`ID_ACTIVO` AS `ID_ACTIVO`,`a`.`SERIAL_A` AS `SERIAL_A`,`a`.`MARCA` AS `MARCA`,`c`.`NOMBRE_CATEGORIA` AS `NOMBRE_CATEGORIA`,`d`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`m`.`NOMBRE_A` AS `NOMBRE_A`,`d`.`FECHA_ENTRADA` AS `FECHA_ENTRADA`,`d`.`FECHA_SALIDA` AS `FECHA_SALIDA` from (((`d_ambiente_activo` `d` join `activos` `a` on(`d`.`ID_ACTIVO` = `a`.`ID_ACTIVO`)) join `categorias` `c` on(`a`.`CATEGORIA` = `c`.`ID_CATEGORIA`)) join `ambientes` `m` on(`d`.`ID_AMBIENTE` = `m`.`ID_AMBIENTE`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_ambiente_activo`
--
DROP TABLE IF EXISTS `d_ambiente_activo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_ambiente_activo`  AS  select `detalle_ambiente_activo`.`ID_DETALLE` AS `ID_DETALLE`,`detalle_ambiente_activo`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`detalle_ambiente_activo`.`ID_ACTIVO` AS `ID_ACTIVO`,`detalle_ambiente_activo`.`FECHA_ENTRADA` AS `FECHA_ENTRADA`,`detalle_ambiente_activo`.`FECHA_SALIDA` AS `FECHA_SALIDA`,`detalle_ambiente_activo`.`DISPONIBILIDAD` AS `DISPONIBILIDAD` from `detalle_ambiente_activo` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_control_ambiente`
--
DROP TABLE IF EXISTS `d_control_ambiente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_control_ambiente`  AS  select `detalle_control_ambiente`.`ID_CONTROL` AS `ID_CONTROL`,`detalle_control_ambiente`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`detalle_control_ambiente`.`ID_USUARIO` AS `ID_USUARIO`,`detalle_control_ambiente`.`FECHA` AS `FECHA`,`detalle_control_ambiente`.`DESCRIPCION_AMBIENTE` AS `DESCRIPCION_AMBIENTE`,`detalle_control_ambiente`.`INCONSISTENCIA` AS `INCONSISTENCIA` from `detalle_control_ambiente` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_control_ambiente_c1`
--
DROP TABLE IF EXISTS `d_control_ambiente_c1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_control_ambiente_c1`  AS  select `d`.`ID_CONTROL` AS `ID_CONTROL`,`d`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`a`.`NOMBRE_A` AS `NOMBRE_A`,`u`.`IDENTIFICACION` AS `IDENTIFICACION`,`u`.`NOMBRE` AS `NOMBRE`,`d`.`FECHA` AS `FECHA`,`d`.`DESCRIPCION_AMBIENTE` AS `DESCRIPCION_AMBIENTE`,`d`.`INCONSISTENCIA` AS `INCONSISTENCIA` from ((`d_control_ambiente` `d` join `ambientes` `a` on(`d`.`ID_AMBIENTE` = `a`.`ID_AMBIENTE`)) join `usuarios` `u` on(`d`.`ID_USUARIO` = `u`.`ID_USUARIO`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_control_ambiente_c2`
--
DROP TABLE IF EXISTS `d_control_ambiente_c2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_control_ambiente_c2`  AS  select `a`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`a`.`NOMBRE_A` AS `NOMBRE_A`,`u`.`IDENTIFICACION` AS `IDENTIFICACION`,`u`.`NOMBRE` AS `NOMBRE`,`d`.`FECHA` AS `FECHA` from ((`d_control_ambiente` `d` join `ambientes` `a` on(`d`.`ID_AMBIENTE` = `a`.`ID_AMBIENTE`)) join `usuarios` `u` on(`d`.`ID_USUARIO` = `u`.`ID_USUARIO`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_control_ambiente_c3`
--
DROP TABLE IF EXISTS `d_control_ambiente_c3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_control_ambiente_c3`  AS  select `d`.`ID_USUARIO` AS `ID_USUARIO`,`u`.`IDENTIFICACION` AS `IDENTIFICACION`,`u`.`NOMBRE` AS `NOMBRE`,`d`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`a`.`NOMBRE_A` AS `NOMBRE_A`,`t`.`NOMBRE` AS `TIPO_NOVEDAD`,`n`.`ID_NOVEDAD` AS `ID_NOVEDAD`,`d`.`FECHA` AS `FECHA`,`c`.`ID_ACTIVO` AS `ID_ACTIVO`,`c`.`SERIAL_A` AS `SERIAL_A`,`n`.`DESCRIPCION` AS `DESCRIPCION`,`d`.`ID_CONTROL` AS `ID_CONTROL`,`ca`.`NOMBRE_CATEGORIA` AS `NOMBRE_CATEGORIA`,`c`.`MARCA` AS `MARCA` from ((((((`d_control_ambiente` `d` join `usuarios` `u` on(`d`.`ID_USUARIO` = `u`.`ID_USUARIO`)) join `ambientes` `a` on(`d`.`ID_AMBIENTE` = `a`.`ID_AMBIENTE`)) join `novedades` `n` on(`n`.`ID_CONTROL` = `d`.`ID_CONTROL`)) join `tipo_novedad` `t` on(`n`.`ID_TIPO` = `t`.`ID_TIPO`)) join `activos` `c` on(`n`.`ID_ACTIVO` = `c`.`ID_ACTIVO`)) join `categoria` `ca` on(`ca`.`ID_CATEGORIA` = `c`.`CATEGORIA`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_control_ambiente_c4`
--
DROP TABLE IF EXISTS `d_control_ambiente_c4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_control_ambiente_c4`  AS  select `a`.`ID_ACTIVO` AS `ID_ACTIVO`,`a`.`SERIAL_A` AS `SERIAL_A`,`a`.`MARCA` AS `MARCA`,`n`.`ID_NOVEDAD` AS `ID_NOVEDAD`,`t`.`NOMBRE` AS `NOMBRE`,`n`.`DESCRIPCION` AS `DESCRIPCION`,`d`.`ID_CONTROL` AS `ID_CONTROL`,`n`.`FECHA` AS `FECHA`,`ca`.`NOMBRE_CATEGORIA` AS `NOMBRE_CATEGORIA` from ((((`d_control_ambiente` `d` join `novedades` `n` on(`n`.`ID_CONTROL` = `d`.`ID_CONTROL`)) join `activo` `a` on(`n`.`ID_ACTIVO` = `a`.`ID_ACTIVO`)) join `tipo_novedad` `t` on(`n`.`ID_TIPO` = `t`.`ID_TIPO`)) join `categoria` `ca` on(`ca`.`ID_CATEGORIA` = `a`.`CATEGORIA`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_control_ambiente_c5`
--
DROP TABLE IF EXISTS `d_control_ambiente_c5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_control_ambiente_c5`  AS  select `d`.`ID_CONTROL` AS `ID_CONTROL`,`d`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`a`.`NOMBRE_A` AS `NOMBRE_A`,`d`.`ID_USUARIO` AS `ID_USUARIO`,`u`.`NOMBRE` AS `NOMBRE`,`d`.`FECHA` AS `FECHA`,`d`.`DESCRIPCION_AMBIENTE` AS `DESCRIPCION_AMBIENTE` from ((`d_control_ambiente` `d` join `ambientes` `a` on(`d`.`ID_AMBIENTE` = `a`.`ID_AMBIENTE`)) join `usuarios` `u` on(`d`.`ID_USUARIO` = `u`.`ID_USUARIO`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_control_ambiente_c6`
--
DROP TABLE IF EXISTS `d_control_ambiente_c6`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_control_ambiente_c6`  AS  select distinct `i`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`i`.`NOMBRE_A` AS `NOMBRE_A`,`n`.`ID_ACTIVO` AS `ID_ACTIVO`,`a`.`SERIAL_A` AS `SERIAL_A`,`a`.`MARCA` AS `MARCA`,`a`.`CATEGORIA` AS `CATEGORIA`,`c`.`NOMBRE_CATEGORIA` AS `NOMBRE_CATEGORIA`,`a`.`ESTADO` AS `ESTADO` from (((((`d_control_ambiente` `d` join `novedades` `n` on(`d`.`ID_CONTROL` = `n`.`ID_CONTROL`)) join `activos` `a` on(`n`.`ID_ACTIVO` = `a`.`ID_ACTIVO`)) join `categorias` `c` on(`a`.`CATEGORIA` = `c`.`ID_CATEGORIA`)) join `d_ambiente_activo` `e` on(`n`.`ID_ACTIVO` = `e`.`ID_ACTIVO`)) join `ambientes` `i` on(`e`.`ID_AMBIENTE` = `i`.`ID_AMBIENTE`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_usuario_ambiente`
--
DROP TABLE IF EXISTS `d_usuario_ambiente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_usuario_ambiente`  AS  select `detalle_usuario_ambiente`.`ID_ASIGNACION` AS `ID_ASIGNACION`,`detalle_usuario_ambiente`.`ID_USUARIO` AS `ID`,`detalle_usuario_ambiente`.`ID_AMBIENTE` AS `ID_A`,`detalle_usuario_ambiente`.`FECHA_ENTRADA` AS `FECHA_ENTRADA`,`detalle_usuario_ambiente`.`FECHA_SALIDA` AS `FECHA_SALIDA` from `detalle_usuario_ambiente` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_usuario_ambiente_c`
--
DROP TABLE IF EXISTS `d_usuario_ambiente_c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_usuario_ambiente_c`  AS  select `d`.`ID_ASIGNACION` AS `ID_ASIGNACION`,`u`.`IDENTIFICACION` AS `IDENTIFICACION`,`u`.`NOMBRE` AS `NOMBRE`,`d`.`ID_A` AS `ID_A`,`a`.`NOMBRE_A` AS `NOMBRE_A`,`d`.`FECHA_ENTRADA` AS `FECHA_ENTRADA`,`d`.`FECHA_SALIDA` AS `FECHA_SALIDA` from ((`d_usuario_ambiente` `d` join `usuarios` `u` on(`d`.`ID` = `u`.`ID_USUARIO`)) join `ambientes` `a` on(`d`.`ID_A` = `a`.`ID_AMBIENTE`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `d_usuario_ambiente_c1`
--
DROP TABLE IF EXISTS `d_usuario_ambiente_c1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `d_usuario_ambiente_c1`  AS  select `a`.`ID_AMBIENTE` AS `ID_AMBIENTE`,`a`.`NOMBRE_A` AS `NOMBRE_A`,`a`.`ID_SEDE` AS `ID_SEDE`,`s`.`NOMBRE` AS `NOMBRE`,`s`.`ID_SEDE` AS `ID_S`,`d`.`ID_A` AS `ID_A`,`d`.`FECHA_SALIDA` AS `FECHA_SALIDA` from ((`ambientes` `a` join `sedes` `s` on(`a`.`ID_SEDE` = `s`.`ID_SEDE`)) join `d_usuario_ambiente` `d` on(`a`.`ID_AMBIENTE` = `d`.`ID_A`)) where `d`.`FECHA_SALIDA` is null ;

-- --------------------------------------------------------

--
-- Estructura para la vista `novedades`
--
DROP TABLE IF EXISTS `novedades`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `novedades`  AS  select `novedad`.`ID_NOVEDAD` AS `ID_NOVEDAD`,`novedad`.`DESCRIPCION` AS `DESCRIPCION`,`novedad`.`ID_ACTIVO` AS `ID_ACTIVO`,`novedad`.`ID_TIPO` AS `ID_TIPO`,`novedad`.`ID_CONTROL` AS `ID_CONTROL`,`novedad`.`NAM` AS `NAM`,`novedad`.`CODIGO_NOVEDAD` AS `CODIGO_NOVEDAD`,`novedad`.`FECHA` AS `FECHA` from `novedad` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `novedades_c`
--
DROP TABLE IF EXISTS `novedades_c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `novedades_c`  AS  select `n`.`ID_NOVEDAD` AS `ID_NOVEDAD`,`n`.`ID_TIPO` AS `ID_TIPO`,`c`.`FECHA` AS `FECHA`,`t`.`NOMBRE` AS `NOMBRE`,`n`.`ID_ACTIVO` AS `ID_ACTIVO`,`n`.`DESCRIPCION` AS `DESCRIPCION`,`n`.`ID_CONTROL` AS `ID_CONTROL`,`n`.`NAM` AS `NAM` from ((`novedades` `n` join `tipo_novedad` `t` on(`n`.`ID_TIPO` = `t`.`ID_TIPO`)) join `d_control_ambiente` `c` on(`n`.`ID_CONTROL` = `c`.`ID_CONTROL`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `roles`
--
DROP TABLE IF EXISTS `roles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `roles`  AS  select `rol`.`ID_ROL` AS `ID_ROL`,`rol`.`NOMBRE` AS `NOMBRE` from `rol` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `sedes`
--
DROP TABLE IF EXISTS `sedes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `sedes`  AS  select `sede`.`ID_SEDE` AS `ID_SEDE`,`sede`.`NOMBRE` AS `NOMBRE`,`sede`.`DIRECCION` AS `DIRECCION`,`sede`.`TELEFONO` AS `TELEFONO`,`sede`.`ESTADO` AS `ESTADO` from `sede` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios`
--
DROP TABLE IF EXISTS `usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id15536677_root`@`%` SQL SECURITY DEFINER VIEW `usuarios`  AS  select `usuario`.`ID_USUARIO` AS `ID_USUARIO`,`usuario`.`IDENTIFICACION` AS `IDENTIFICACION`,`usuario`.`CONTRASENA` AS `CONTRASENA`,`usuario`.`NOMBRE` AS `NOMBRE`,`usuario`.`CELULAR` AS `CELULAR`,`usuario`.`TELEFONO` AS `TELEFONO`,`usuario`.`DIRECCION` AS `DIRECCION`,`usuario`.`CORREO` AS `CORREO`,`usuario`.`ID_ROL` AS `ID_ROL`,`usuario`.`ESTADO` AS `ESTADO`,`usuario`.`TOKEN` AS `TOKEN`,`usuario`.`EST_ASIG` AS `EST_ASIG` from `usuario` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activo`
--
ALTER TABLE `activo`
  ADD PRIMARY KEY (`ID_ACTIVO`),
  ADD UNIQUE KEY `SERIAL_A` (`SERIAL_A`),
  ADD KEY `CATEGORIA` (`CATEGORIA`);

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`ID_AMBIENTE`),
  ADD KEY `ID_SEDE` (`ID_SEDE`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Indices de la tabla `detalle_ambiente_activo`
--
ALTER TABLE `detalle_ambiente_activo`
  ADD PRIMARY KEY (`ID_DETALLE`),
  ADD KEY `ID_AMBIENTE` (`ID_AMBIENTE`),
  ADD KEY `ID_ACTIVO` (`ID_ACTIVO`);

--
-- Indices de la tabla `detalle_control_ambiente`
--
ALTER TABLE `detalle_control_ambiente`
  ADD PRIMARY KEY (`ID_CONTROL`),
  ADD KEY `ID_AMBIENTE` (`ID_AMBIENTE`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- Indices de la tabla `detalle_usuario_ambiente`
--
ALTER TABLE `detalle_usuario_ambiente`
  ADD PRIMARY KEY (`ID_ASIGNACION`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`),
  ADD KEY `ID_AMBIENTE` (`ID_AMBIENTE`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`ID_NOVEDAD`),
  ADD KEY `ID_CONTROL` (`ID_CONTROL`),
  ADD KEY `ID_ACTIVO` (`ID_ACTIVO`),
  ADD KEY `ID_TIPO` (`ID_TIPO`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`ID_SEDE`);

--
-- Indices de la tabla `tipo_novedad`
--
ALTER TABLE `tipo_novedad`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD UNIQUE KEY `IDENTIFICACION` (`IDENTIFICACION`),
  ADD UNIQUE KEY `CELULAR` (`CELULAR`),
  ADD KEY `ID_ROL` (`ID_ROL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activo`
--
ALTER TABLE `activo`
  MODIFY `ID_ACTIVO` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `ID_AMBIENTE` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_CATEGORIA` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `detalle_ambiente_activo`
--
ALTER TABLE `detalle_ambiente_activo`
  MODIFY `ID_DETALLE` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `detalle_control_ambiente`
--
ALTER TABLE `detalle_control_ambiente`
  MODIFY `ID_CONTROL` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_ambiente`
--
ALTER TABLE `detalle_usuario_ambiente`
  MODIFY `ID_ASIGNACION` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `ID_NOVEDAD` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROL` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `ID_SEDE` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tipo_novedad`
--
ALTER TABLE `tipo_novedad`
  MODIFY `ID_TIPO` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activo`
--
ALTER TABLE `activo`
  ADD CONSTRAINT `activo_ibfk_1` FOREIGN KEY (`CATEGORIA`) REFERENCES `categoria` (`ID_CATEGORIA`);

--
-- Filtros para la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD CONSTRAINT `ambiente_ibfk_1` FOREIGN KEY (`ID_SEDE`) REFERENCES `sede` (`ID_SEDE`);

--
-- Filtros para la tabla `detalle_ambiente_activo`
--
ALTER TABLE `detalle_ambiente_activo`
  ADD CONSTRAINT `detalle_ambiente_activo_ibfk_1` FOREIGN KEY (`ID_AMBIENTE`) REFERENCES `ambiente` (`ID_AMBIENTE`),
  ADD CONSTRAINT `detalle_ambiente_activo_ibfk_2` FOREIGN KEY (`ID_ACTIVO`) REFERENCES `activo` (`ID_ACTIVO`);

--
-- Filtros para la tabla `detalle_control_ambiente`
--
ALTER TABLE `detalle_control_ambiente`
  ADD CONSTRAINT `detalle_control_ambiente_ibfk_1` FOREIGN KEY (`ID_AMBIENTE`) REFERENCES `ambiente` (`ID_AMBIENTE`),
  ADD CONSTRAINT `detalle_control_ambiente_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`);

--
-- Filtros para la tabla `detalle_usuario_ambiente`
--
ALTER TABLE `detalle_usuario_ambiente`
  ADD CONSTRAINT `detalle_usuario_ambiente_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`),
  ADD CONSTRAINT `detalle_usuario_ambiente_ibfk_2` FOREIGN KEY (`ID_AMBIENTE`) REFERENCES `ambiente` (`ID_AMBIENTE`);

--
-- Filtros para la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD CONSTRAINT `novedad_ibfk_1` FOREIGN KEY (`ID_CONTROL`) REFERENCES `detalle_control_ambiente` (`ID_CONTROL`),
  ADD CONSTRAINT `novedad_ibfk_2` FOREIGN KEY (`ID_ACTIVO`) REFERENCES `activo` (`ID_ACTIVO`),
  ADD CONSTRAINT `novedad_ibfk_3` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo_novedad` (`ID_TIPO`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `rol` (`ID_ROL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
