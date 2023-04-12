-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2023 a las 22:27:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infotec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Lubricantes'),
(2, 'Aditivos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` varchar(10) NOT NULL,
  `identificacion_cliente` varchar(10) NOT NULL,
  `nombre_cliente` varchar(45) DEFAULT NULL,
  `apellido_cliente` varchar(45) DEFAULT NULL,
  `telefono_cliente` varchar(45) DEFAULT NULL,
  `correo_cliente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `identificacion_cliente`, `nombre_cliente`, `apellido_cliente`, `telefono_cliente`, `correo_cliente`) VALUES
('2', '987546', 'Mateo', 'Enzo', '3145698745', 'Enzo@gmail.com'),
('3', '2313344', 'Carla', 'Gomez', '3146589785', 'carla@gmail.com'),
('4', '123894561', 'Jose', 'Cortes', '3118542689', 'jose@gmail.com'),
('5', '985465612', 'Andrea', 'Martinez', '3125986594', 'andre12@hotmail.com'),
('6', '1324135', 'ana', 'mendoza', '1332412', '\"SKxmzk@gmail.com\"'),
('7', '1233359871', 'Juan', 'Cardona', '875165', 'asdiohias@gmail.com'),
('8', '12389431', 'Andrea', 'barragan', '31689754821', 'andrea@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compras` varchar(10) NOT NULL,
  `fecha_compra` date NOT NULL,
  `total_precio_compra` decimal(10,2) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factuta` int(11) NOT NULL,
  `id_usuarios` varchar(10) NOT NULL,
  `identificacion_cliente` varchar(10) NOT NULL,
  `placa_vehiculo` varchar(10) DEFAULT NULL,
  `fecha_factura` date NOT NULL,
  `total_antesiva_prod` decimal(10,2) NOT NULL,
  `iva_pedido` decimal(10,2) NOT NULL,
  `total_pedido` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_productos_c`
--

CREATE TABLE `lista_productos_c` (
  `id_compras` varchar(10) NOT NULL,
  `id_productos` varchar(10) NOT NULL,
  `precio_producto_compra` decimal(10,2) NOT NULL,
  `cantidad_productos_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_productos_f`
--

CREATE TABLE `lista_productos_f` (
  `id_factura` int(11) NOT NULL,
  `id_producto` varchar(10) NOT NULL,
  `cantidad_productos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_servicios_f`
--

CREATE TABLE `lista_servicios_f` (
  `id_servicios` varchar(10) NOT NULL,
  `id_factura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_categoria` int(11) NOT NULL,
  `id_producto` varchar(10) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `precio_producto` decimal(10,2) NOT NULL,
  `exist_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`) VALUES
(1, 'LUBCEN S.A.'),
(2, 'QUAKER STATE '),
(3, 'POCHTECA ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'admin'),
(2, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` varchar(10) NOT NULL,
  `nombre_servicio` varchar(50) NOT NULL,
  `precio_servicio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_rol` int(11) NOT NULL,
  `id_usuario` varchar(10) NOT NULL,
  `nombres_usuario` varchar(50) NOT NULL,
  `apellidos_usuario` varchar(50) NOT NULL,
  `correo_usuario` varchar(100) NOT NULL,
  `telefono_usuario` varchar(15) NOT NULL,
  `pass_usuario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_rol`, `id_usuario`, `nombres_usuario`, `apellidos_usuario`, `correo_usuario`, `telefono_usuario`, `pass_usuario`) VALUES
(1, '123', 'sadasd23', 'sadfas', 'sad@gmail', '68441546', 'sdnas'),
(1, '12321', 'asdas', 'sadasd', 'weqqw', '12312', 'xzczxc'),
(2, '123432', 'qweqwe', '1wEQWQE', 'QWSEQWE', '123123', 'SDCWD'),
(1, '8945231', 'tufvuv', 'ygbuk', 'bgjkb', '8465', 'uygbjk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `placa_vehiculo` varchar(10) NOT NULL,
  `id_cliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`placa_vehiculo`, `id_cliente`) VALUES
('VCX147', '2'),
('ASD125', '3'),
('QSC854', '3'),
('NGR852', '4'),
('YUI895', '4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`,`identificacion_cliente`),
  ADD KEY `ind_cliente_personas` (`identificacion_cliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compras`),
  ADD KEY `ind_compras_proveedores` (`id_proveedor`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factuta`),
  ADD KEY `ind_factura_usurario` (`id_usuarios`),
  ADD KEY `ind_factura_vehiculo` (`placa_vehiculo`),
  ADD KEY `fk_factura_cliente_idx` (`identificacion_cliente`);

--
-- Indices de la tabla `lista_productos_c`
--
ALTER TABLE `lista_productos_c`
  ADD KEY `ind_lista_productos_c_compras` (`id_compras`),
  ADD KEY `ind_lista_productos_c_productos` (`id_productos`);

--
-- Indices de la tabla `lista_productos_f`
--
ALTER TABLE `lista_productos_f`
  ADD KEY `ind_lista_productos_f_productos` (`id_producto`),
  ADD KEY `ind_lista_productos_f_factura` (`id_factura`);

--
-- Indices de la tabla `lista_servicios_f`
--
ALTER TABLE `lista_servicios_f`
  ADD KEY `ind_lista_servicio_f_servicio` (`id_servicios`),
  ADD KEY `ind_lista_servicio_f_factura` (`id_factura`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `ind_producto_categoria` (`id_categoria`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo_persona_UNIQUE` (`correo_usuario`),
  ADD KEY `ind_personas_rol` (`id_rol`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`placa_vehiculo`),
  ADD UNIQUE KEY `placa_vehiculo_UNIQUE` (`placa_vehiculo`),
  ADD KEY `ind_vehiculos_clientes` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factuta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_compras_proveedores` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_factura_cliente` FOREIGN KEY (`identificacion_cliente`) REFERENCES `clientes` (`identificacion_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_factura_usuario` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_factura_vehiculo` FOREIGN KEY (`placa_vehiculo`) REFERENCES `vehiculos` (`placa_vehiculo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lista_productos_c`
--
ALTER TABLE `lista_productos_c`
  ADD CONSTRAINT `fk_lista_productos_c_compras` FOREIGN KEY (`id_compras`) REFERENCES `compras` (`id_compras`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lista_productos_c_productos` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lista_productos_f`
--
ALTER TABLE `lista_productos_f`
  ADD CONSTRAINT `fk_lista_productos_f` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lista_productos_f_factura` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factuta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lista_servicios_f`
--
ALTER TABLE `lista_servicios_f`
  ADD CONSTRAINT `fk_lista_servicio_f_factura` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factuta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lista_servicio_f_servicio` FOREIGN KEY (`id_servicios`) REFERENCES `servicios` (`id_servicios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_personas_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `fk_vehiculo_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
