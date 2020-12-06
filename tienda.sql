-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2019 a las 23:42:26
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_proveedor`
--

CREATE TABLE `compras_proveedor` (
  `Folio` int(30) NOT NULL,
  `Cantidad_Articulos` int(30) NOT NULL,
  `Id_Proveedor` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `Id_Departamento` int(50) NOT NULL,
  `Nombre_Departamento` varchar(50) NOT NULL,
  `Id_Producto` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `Id_Det_Compra` int(50) NOT NULL,
  `Folio` int(50) NOT NULL,
  `Descuento` int(50) NOT NULL,
  `Subtotal` int(50) NOT NULL,
  `IVA` int(50) NOT NULL,
  `Total` int(50) NOT NULL,
  `Id_Proveedor` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `Id_Det_Venta` int(50) NOT NULL,
  `Id_Venta` int(50) NOT NULL,
  `Id_Producto` int(50) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_Empleado` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Turno` varchar(50) NOT NULL,
  `Sueldo` float NOT NULL,
  `Fecha Contratacion` date NOT NULL,
  `NSS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_Empleado`, `Nombre`, `Apellidos`, `Telefono`, `Direccion`, `Turno`, `Sueldo`, `Fecha Contratacion`, `NSS`) VALUES
(148355, 'Sandra Ivonne', 'Guerrero Davila', '4492604078', 'Parras', 'Vespertino', 4000, '2019-03-04', '1237894568'),
(234591, 'Bryan Pablo', 'Puerto Coronado', '3461139272', 'Teocaltiche', 'Domingo', 2000, '2019-06-09', '6754129875'),
(235732, 'Laura Cristina', 'Landeros Contreras', '4251115719', 'Calvillo', 'Matutino', 4000, '2019-04-01', '2143167275'),
(240708, 'Beatriz Jazmin', 'Romo Miranda', '4492765595', 'Morelos', 'Nocturno', 4000, '2019-11-04', '9876543210');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_Producto` int(50) NOT NULL,
  `Nombre_Producto` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Cantidad` int(50) NOT NULL,
  `Precio` int(50) NOT NULL,
  `Marca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_Proveedor` int(50) NOT NULL,
  `Nombre_Proveedor` varchar(50) NOT NULL,
  `Telefono_Proveedor` varchar(50) NOT NULL,
  `Compañia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Id_Proveedor`, `Nombre_Proveedor`, `Telefono_Proveedor`, `Compañia`) VALUES
(125697, 'Zoila Piña del Mar', '2471057755', 'Gamesa'),
(347898, 'Hugo Sanchez Montes', '4493684680', 'Coca Cola'),
(985670, 'Hector Pasillas Rangel', '5553668090', 'Sabritas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `Folio_Venta` int(50) NOT NULL,
  `Id_Producto` int(50) NOT NULL,
  `Cantidad` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras_proveedor`
--
ALTER TABLE `compras_proveedor`
  ADD PRIMARY KEY (`Folio`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Id_Departamento`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`Id_Det_Compra`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`Id_Det_Venta`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_Empleado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_Proveedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`Folio_Venta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
