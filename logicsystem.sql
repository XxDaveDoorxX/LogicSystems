-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2017 a las 00:23:24
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logicsystem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alianzas`
--

CREATE TABLE `alianzas` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL,
  `rating` varchar(25) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alianzas`
--

INSERT INTO `alianzas` (`id`, `title`, `comment`, `rating`, `create_at`) VALUES
(1, 'SUSTAINABLE CONSTRUCTION', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis pellentesque commodo. Nullam sed diam sit amet quam vestibulum tincidunt. Curabitur posuere lectus nisl, quis congue nunc mattis eu. Proin id vulputate eros. Ut nulla lacus, dapibus a facilisis vulputate, sollicitudin eget dui. Nullam rhoncus lacus tortor, nec semper ipsum suscipit at. Curabitur purus turpis, auctor eget tristique vitae, euismod vel elit. Quisque tempor elementum augue, eu vestibulum lacus pellentesque in. Nulla quis nulla vitae dolor ornare mollis. Mauris faucibus nisi metus, eget aliquam tellus bibendum nec.', '4', '2017-05-26'),
(2, 'SUSTAINABLE CONSTRUCTION', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis pellentesque commodo. Nullam sed diam sit amet quam vestibulum tincidunt. Curabitur posuere lectus nisl, quis congue nunc mattis eu. Proin id vulputate eros. Ut nulla lacus, dapibus a facilisis vulputate, sollicitudin eget dui. Nullam rhoncus lacus tortor, nec semper ipsum suscipit at. Curabitur purus turpis, auctor eget tristique vitae, euismod vel elit. Quisque tempor elementum augue, eu vestibulum lacus pellentesque in. Nulla quis nulla vitae dolor ornare mollis. Mauris faucibus nisi metus, eget aliquam tellus bibendum nec. ', '5', '2017-05-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_descarga`
--

CREATE TABLE `archivos_descarga` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `id_c` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos_descarga`
--

INSERT INTO `archivos_descarga` (`id`, `titulo`, `archivo`, `id_c`) VALUES
(1, 'page_1_1495824890.pdf', 'page_1_1495824890.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `title`) VALUES
(1, 'Banner inicio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL,
  `rating` varchar(25) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `title`, `comment`, `rating`, `create_at`) VALUES
(1, ' SUSTAINABLE CONSTRUCTION', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis pellentesque commodo. Nullam sed diam sit amet quam vestibulum tincidunt. Curabitur posuere lectus nisl, quis congue nunc mattis eu. Proin id vulputate eros. Ut nulla lacus, dapibus a facilisis vulputate, sollicitudin eget dui. Nullam rhoncus lacus tortor, nec semper ipsum suscipit at. Curabitur purus turpis, auctor eget tristique vitae, euismod vel elit. Quisque tempor elementum augue, eu vestibulum lacus pellentesque in. Nulla quis nulla vitae dolor ornare mollis. Mauris faucibus nisi metus, eget aliquam tellus bibendum nec. ', '5', '2017-05-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`id`, `title`, `description`) VALUES
(1, '5 CLAVES PARA MEJORAR LA GESTI&Oacute;N EN TU NOTARIA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mi et lacus rhoncus varius. Curabitur ultricies erat ligula, eget tempor urna volutpat id. Aliquam placerat lacus ut tortor sollicitudin rhoncus. '),
(2, '6 RECOMENDACIONES PARA MEJORAR EL MANEJO DE TU CARTERA DE CLIENTES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mi et lacus rhoncus varius. Curabitur ultricies erat ligula, eget tempor urna volutpat id. Aliquam placerat lacus ut tortor sollicitudin rhoncus. '),
(3, 'INSTRUCTIVO PARA REMITIR EL INFORME DE AUDITOR&Iacute;A EN MATERIA DE PLD/FT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mi et lacus rhoncus varius. Curabitur ultricies erat ligula, eget tempor urna volutpat id. Aliquam placerat lacus ut tortor sollicitudin rhoncus. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` date NOT NULL,
  `description` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `create_at`, `description`) VALUES
(1, 'Nombre del evento', '2017-05-26', 'In quam vitae turpis convallis viverra.Phasellus sed in magna.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `id_product`) VALUES
(1, 'Galer&iacute;a', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_alianzas`
--

CREATE TABLE `imagenes_alianzas` (
  `id_img` int(11) NOT NULL,
  `lynd_img` varchar(255) NOT NULL,
  `arch_img` varchar(255) NOT NULL,
  `id_c` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_alianzas`
--

INSERT INTO `imagenes_alianzas` (`id_img`, `lynd_img`, `arch_img`, `id_c`, `orden`) VALUES
(1, 'alianza_comercial1496086327.jpg', 'alianza_comercial1496086327.jpg', 2, 1),
(2, 'alianza_comercial1496090778.jpg', 'alianza_comercial1496090778.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_banner`
--

CREATE TABLE `imagenes_banner` (
  `id_img` int(11) NOT NULL,
  `lynd_img` varchar(255) NOT NULL,
  `arch_img` varchar(255) NOT NULL,
  `id_c` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_banner`
--

INSERT INTO `imagenes_banner` (`id_img`, `lynd_img`, `arch_img`, `id_c`, `orden`) VALUES
(1, 'slider1495834689.jpg', 'slider1495834689.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_clientes`
--

CREATE TABLE `imagenes_clientes` (
  `id_img` int(11) NOT NULL,
  `lynd_img` varchar(255) NOT NULL,
  `arch_img` varchar(255) NOT NULL,
  `id_c` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_clientes`
--

INSERT INTO `imagenes_clientes` (`id_img`, `lynd_img`, `arch_img`, `id_c`, `orden`) VALUES
(1, 'alianza_comercial1496089948.jpg', 'alianza_comercial1496089948.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_descargas`
--

CREATE TABLE `imagenes_descargas` (
  `id_img` int(11) NOT NULL,
  `lynd_img` varchar(255) NOT NULL,
  `arch_img` varchar(255) NOT NULL,
  `id_c` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_descargas`
--

INSERT INTO `imagenes_descargas` (`id_img`, `lynd_img`, `arch_img`, `id_c`, `orden`) VALUES
(1, 'claves1496092127.jpg', 'claves1496092127.jpg', 1, 1),
(2, 'recomendaciones1496094058.jpg', 'recomendaciones1496094058.jpg', 2, 1),
(3, 'instructivo1496094085.jpg', 'instructivo1496094085.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_eventos`
--

CREATE TABLE `imagenes_eventos` (
  `id_img` int(11) NOT NULL,
  `lynd_img` varchar(255) NOT NULL,
  `arch_img` varchar(255) NOT NULL,
  `id_c` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_eventos`
--

INSERT INTO `imagenes_eventos` (`id_img`, `lynd_img`, `arch_img`, `id_c`, `orden`) VALUES
(1, 'event_11496096540.jpg', 'event_11496096540.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_gallery`
--

CREATE TABLE `imagenes_gallery` (
  `id_img` int(11) NOT NULL,
  `lynd_img` varchar(255) NOT NULL,
  `arch_img` varchar(255) NOT NULL,
  `id_c` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_gallery`
--

INSERT INTO `imagenes_gallery` (`id_img`, `lynd_img`, `arch_img`, `id_c`, `orden`) VALUES
(1, 'gallery_11496079531.jpg', 'gallery_11496079531.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_productos`
--

CREATE TABLE `imagenes_productos` (
  `id_img` int(11) NOT NULL,
  `lynd_img` varchar(255) NOT NULL,
  `arch_img` varchar(255) NOT NULL,
  `id_c` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_productos`
--

INSERT INTO `imagenes_productos` (`id_img`, `lynd_img`, `arch_img`, `id_c`, `orden`) VALUES
(1, 'team_11495835898.jpg', 'team_11495835898.jpg', 1, 1),
(2, 'product1495835924.png', 'product1495835924.png', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_thumbs`
--

CREATE TABLE `imagenes_thumbs` (
  `id_img` int(11) NOT NULL,
  `lynd_img` varchar(255) NOT NULL,
  `arch_img` varchar(255) NOT NULL,
  `id_c` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_thumbs`
--

INSERT INTO `imagenes_thumbs` (`id_img`, `lynd_img`, `arch_img`, `id_c`, `orden`) VALUES
(1, 'thumb_11496067353.jpg', 'thumb_11496067353.jpg', 1, 1),
(2, 'thumb_21496067353.jpg', 'thumb_21496067353.jpg', 1, 2),
(3, 'thumb_31496067353.jpg', 'thumb_31496067353.jpg', 1, 3),
(4, 'thumb_41496067354.jpg', 'thumb_41496067354.jpg', 1, 4),
(5, 'thumb_51496067354.jpg', 'thumb_51496067354.jpg', 1, 5),
(7, 'thumb_61496068349.jpg', 'thumb_61496068349.jpg', 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `f_video` varchar(255) NOT NULL,
  `description_first` varchar(30) NOT NULL,
  `description_second` mediumtext NOT NULL,
  `characteristics` longtext NOT NULL,
  `functionalities` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `subtitle`, `code`, `f_video`, `description_first`, `description_second`, `characteristics`, `functionalities`) VALUES
(1, 'CIB - FINANCIERA', 'Operaci&oacute;n de financieras', 'xxxxxxx', '', 'Ideal para financieras y SOFOM', 'Es el software de control y operaci&oacute;n para financieras/SOFOMS m&aacute;s completo y f&aacute;cil de operar. En &eacute;l se reflejan m&aacute;s de 10 a&ntilde;os de experiencia y mejores pr&aacute;cticas de operaci&oacute;n de este giro. Toma el control total y obt&eacute;n una visi&oacute;n global de tu negocio que te permitir&aacute; enfocar tus esfuerzos a donde m&aacute;s se necesiten.', '&lt;ul&gt;\n	&lt;li&gt;Multi-Empresa&lt;/li&gt;\n	&lt;li&gt;Multi-Sucursal&lt;/li&gt;\n	&lt;li&gt;Multi-Caja&lt;/li&gt;\n	&lt;li&gt;Multi-Almacen&lt;/li&gt;\n	&lt;li&gt;Multi-Divisas&lt;/li&gt;\n	&lt;li&gt;100% personalizable&lt;/li&gt;\n&lt;/ul&gt;\n', '&lt;table border=&quot;0&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; style=&quot;height:auto; width:100%&quot;&gt;\n	&lt;tbody&gt;\n		&lt;tr&gt;\n			&lt;td&gt;\n			&lt;ul&gt;\n				&lt;li&gt;Empe&amp;ntilde;os, Refrendos, Abonos&lt;/li&gt;\n				&lt;li&gt;Oro, Plata y Art&amp;iacute;culos Varios&lt;/li&gt;\n				&lt;li&gt;Desempe&amp;ntilde;os&lt;/li&gt;\n				&lt;li&gt;Adjudicaciones&lt;/li&gt;\n				&lt;li&gt;Inventario para Venta&lt;/li&gt;\n				&lt;li&gt;Supervisi&amp;oacute;n y Control&lt;/li&gt;\n				&lt;li&gt;Compra de Oro y Divisas&lt;/li&gt;\n				&lt;li&gt;Manejo de promociones, Tarjetas de&lt;/li&gt;\n				&lt;li&gt;Cliente Frecuente, Competencia, etc.&lt;/li&gt;\n				&lt;li&gt;Actualizaci&amp;oacute;n Diaria de precios de Oro y Plata.&lt;/li&gt;\n				&lt;li&gt;M&amp;aacute;s de 40 Reportes de Operaci&amp;oacute;n&lt;/li&gt;\n				&lt;li&gt;Indicadores de Desempe&amp;ntilde;o&lt;/li&gt;\n				&lt;li&gt;Control de B&amp;oacute;vedas&lt;/li&gt;\n			&lt;/ul&gt;\n			&lt;/td&gt;\n			&lt;td&gt;\n			&lt;ul&gt;\n				&lt;li&gt;Manejo de efectivo y valores&lt;/li&gt;\n				&lt;li&gt;Control de Incidencias de N&amp;oacute;mina&lt;/li&gt;\n				&lt;li&gt;Control de Pago de Incentivos&lt;/li&gt;\n				&lt;li&gt;Control de errores, malos avaluos, faltantes, descuentos.&lt;/li&gt;\n				&lt;li&gt;Minutas&lt;/li&gt;\n				&lt;li&gt;Acuerdos&lt;/li&gt;\n				&lt;li&gt;Normatividad&lt;/li&gt;\n				&lt;li&gt;Control de Acceso&lt;/li&gt;\n				&lt;li&gt;Capacitaci&amp;oacute;n&lt;/li&gt;\n				&lt;li&gt;Interfaz contable&lt;/li&gt;\n				&lt;li&gt;Control de Lavado de Dinero&lt;/li&gt;\n				&lt;li&gt;Generaci&amp;oacute;n de archivos a la CNBV&lt;/li&gt;\n				&lt;li&gt;Actualizaci&amp;oacute;n diaria del T.C. del d&amp;oacute;lar y UDIS&lt;/li&gt;\n			&lt;/ul&gt;\n			&lt;/td&gt;\n		&lt;/tr&gt;\n	&lt;/tbody&gt;\n&lt;/table&gt;\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `thumbs`
--

CREATE TABLE `thumbs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `thumbs`
--

INSERT INTO `thumbs` (`id`, `title`, `id_product`) VALUES
(1, 'thumbs', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'test', '9cfdae3f7657f82f8db9e685800f44f6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alianzas`
--
ALTER TABLE `alianzas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `archivos_descarga`
--
ALTER TABLE `archivos_descarga`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes_alianzas`
--
ALTER TABLE `imagenes_alianzas`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `imagenes_banner`
--
ALTER TABLE `imagenes_banner`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `imagenes_clientes`
--
ALTER TABLE `imagenes_clientes`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `imagenes_descargas`
--
ALTER TABLE `imagenes_descargas`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `imagenes_eventos`
--
ALTER TABLE `imagenes_eventos`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `imagenes_gallery`
--
ALTER TABLE `imagenes_gallery`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `imagenes_productos`
--
ALTER TABLE `imagenes_productos`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `imagenes_thumbs`
--
ALTER TABLE `imagenes_thumbs`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `thumbs`
--
ALTER TABLE `thumbs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alianzas`
--
ALTER TABLE `alianzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `archivos_descarga`
--
ALTER TABLE `archivos_descarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `imagenes_alianzas`
--
ALTER TABLE `imagenes_alianzas`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `imagenes_banner`
--
ALTER TABLE `imagenes_banner`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `imagenes_clientes`
--
ALTER TABLE `imagenes_clientes`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `imagenes_descargas`
--
ALTER TABLE `imagenes_descargas`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `imagenes_eventos`
--
ALTER TABLE `imagenes_eventos`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `imagenes_gallery`
--
ALTER TABLE `imagenes_gallery`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `imagenes_productos`
--
ALTER TABLE `imagenes_productos`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `imagenes_thumbs`
--
ALTER TABLE `imagenes_thumbs`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `thumbs`
--
ALTER TABLE `thumbs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
