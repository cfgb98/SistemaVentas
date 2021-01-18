-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-12-2014 a las 16:57:16
-- Versión del servidor: 5.5.38-MariaDB-cll-lve
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hanselit_mysql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bd_pedidos`
--

CREATE TABLE IF NOT EXISTS `bd_pedidos` (
  `idpedido` int(100) NOT NULL AUTO_INCREMENT,
  `numpedido` int(10) NOT NULL,
  `fechapedido` date NOT NULL,
  `idcliente` int(10) NOT NULL,
  `cliente` varchar(60) NOT NULL,
  `idproducto` int(10) NOT NULL,
  `producto` varchar(60) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `importe` double NOT NULL,
  PRIMARY KEY (`idpedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `bd_pedidos`
--

INSERT INTO `bd_pedidos` (`idpedido`, `numpedido`, `fechapedido`, `idcliente`, `cliente`, `idproducto`, `producto`, `cantidad`, `importe`) VALUES
(1, 34523, '0000-00-00', 34134, 'Bimbo', 1234, 'Mesas', 542, 5425.54),
(2, 34523, '2014-12-14', 34134, 'Bimbo', 1234, 'Mesas', 542, 5425.54),
(3, 123, '2014-12-14', 343, 'Bimboooo', 324, 'Mesaaaas', 424, 5323),
(4, 123, '2014-12-12', 0, '231', 124, '2412', 424, 4214),
(5, 1111, '2014-12-13', 1111, '1111', 1111, '1111', 1111, 1111),
(6, 4306, '2014-12-16', 1234, 'Volaris', 5300, 'Refrescos', 600, 12980.34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `clave`) VALUES
(1, 'admin', 'admin'),
(2, 'hansolo', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
