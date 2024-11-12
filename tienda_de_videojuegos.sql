-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-11-2024 a las 05:15:56
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_de_videojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorios`
--

CREATE TABLE `accesorios` (
  `accesorio_id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `proveedor_id` int DEFAULT NULL,
  `stock` int DEFAULT '0',
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `accesorios`
--

INSERT INTO `accesorios` (`accesorio_id`, `nombre`, `marca`, `modelo`, `precio`, `proveedor_id`, `stock`, `descripcion`) VALUES
(1, 'Computadora Portátil', 'Dell', 'Inspiron 15', 6500.00, 1, 10, NULL),
(2, 'Computadora de Escritorio', 'HP', 'Pavilion 24', 5200.00, 1, 15, NULL),
(3, 'Control de Xbox', 'Microsoft', 'Series X', 350.00, 2, 30, NULL),
(4, 'Control de PlayStation', 'Sony', 'DualShock 4', 380.00, 2, 25, NULL),
(5, 'Consola Xbox', 'Microsoft', 'Series S', 2800.00, 3, 8, NULL),
(6, 'Consola PlayStation', 'Sony', 'PlayStation 5', 5000.00, 3, 5, NULL),
(7, 'Audífonos Inalámbricos', 'Sony', 'WH-1000XM4', 1200.00, 4, 20, NULL),
(8, 'Audífonos Gamer', 'Logitech', 'G Pro X', 900.00, 4, 18, NULL),
(9, 'Teclado Mecánico', 'Razer', 'BlackWidow', 700.00, 5, 22, NULL),
(10, 'Ratón Gamer', 'Logitech', 'G502', 500.00, 5, 30, NULL),
(11, 'Monitor LED', 'Samsung', 'Odyssey G3', 1500.00, 6, 12, NULL),
(12, 'Laptop Gaming', 'Asus', 'ROG Strix', 8900.00, 1, 7, NULL),
(13, 'Volante para Juegos', 'Logitech', 'G923', 1100.00, 2, 10, NULL),
(14, 'Memoria USB', 'Kingston', 'DataTraveler 128GB', 150.00, 7, 50, NULL),
(15, 'Disco Duro Externo', 'Western Digital', 'My Passport 1TB', 500.00, 7, 40, NULL),
(16, 'Tarjeta de Video', 'NVIDIA', 'RTX 3060', 4000.00, 5, 10, NULL),
(17, 'Cámara Web', 'Logitech', 'C920', 350.00, 5, 25, NULL),
(18, 'Router WiFi', 'TP-Link', 'Archer AX10', 450.00, 9, 15, NULL),
(19, 'Adaptador Bluetooth', 'TP-Link', 'UB400', 100.00, 9, 35, NULL),
(20, 'Tablet', 'Samsung', 'Galaxy Tab A7', 1600.00, 1, 10, NULL),
(21, 'Altavoces', 'Bose', 'Companion 2 Series III', 900.00, 4, 18, NULL),
(22, 'Consola Nintendo Switch', 'Nintendo', 'Switch OLED', 3000.00, 3, 6, NULL),
(23, 'Estación de Carga', 'Sony', 'DualSense', 250.00, 2, 20, NULL),
(24, 'Laptop Ultraliviana', 'Apple', 'MacBook Air M1', 10500.00, 1, 8, NULL),
(25, 'Soporte para Monitor', 'AmazonBasics', 'Adjustable Stand', 100.00, 10, 25, NULL),
(26, 'Fuente de Poder', 'Corsair', 'RM750', 550.00, 5, 12, NULL),
(27, 'Memoria RAM', 'Corsair', 'Vengeance LPX 16GB', 450.00, 8, 22, NULL),
(28, 'Refrigeración Líquida', 'Cooler Master', 'ML240L', 600.00, 8, 10, NULL),
(29, 'Silla Gamer', 'DXRacer', 'Formula Series', 2000.00, 10, 5, NULL),
(30, 'Estuche para Consola', 'Nintendo', 'Switch Carrying Case', 150.00, 3, 30, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cliente_id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cliente_id`, `nombre`, `contacto`) VALUES
(3, 'Carlos López', 'carlos.lopez@example.com'),
(4, 'Ana Martínez', 'ana.martinez@example.com'),
(5, 'Luis González', 'luis.gonzalez@example.com'),
(6, 'María Pérez', 'maria.perez@example.com'),
(7, 'Juan Sánchez', 'juan.sanchez@example.com'),
(8, 'Laura Díaz', 'laura.diaz@example.com'),
(9, 'Pedro Romero', 'pedro.romero@example.com'),
(10, 'Sofía Torres', 'sofia.torres@example.com'),
(11, 'Ricardo Vargas', 'ricardo.vargas@example.com'),
(12, 'Elena Flores', 'elena.flores@example.com'),
(13, 'Andrés Morales', 'andres.morales@example.com'),
(14, 'Patricia Rivera', 'patricia.rivera@example.com'),
(15, 'Jorge Castillo', 'jorge.castillo@example.com'),
(16, 'Gabriela Herrera', 'gabriela.herrera@example.com'),
(17, 'Daniel Ríos', 'daniel.rios@example.com'),
(18, 'Carmen Cruz', 'carmen.cruz@example.com'),
(19, 'Miguel Mendoza', 'miguel.mendoza@example.com'),
(20, 'Isabel Soto', 'isabel.soto@example.com'),
(21, 'Raúl Ortega', 'raul.ortega@example.com'),
(22, 'Lucía Silva', 'lucia.silva@example.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `detalle_id` int NOT NULL,
  `venta_id` int DEFAULT NULL,
  `videojuego_id` int DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_ventas`
--

INSERT INTO `detalle_ventas` (`detalle_id`, `venta_id`, `videojuego_id`, `cantidad`, `precio_unitario`, `total`) VALUES
(1, 103, 4, 1, 650.00, 650.00),
(2, 147, 4, 1, 650.00, 650.00),
(3, 104, 5, 1, 450.00, 450.00),
(4, 148, 5, 1, 450.00, 450.00),
(5, 105, 6, 1, 500.00, 500.00),
(6, 149, 6, 1, 500.00, 500.00),
(7, 106, 7, 1, 480.00, 480.00),
(8, 150, 7, 1, 480.00, 480.00),
(9, 107, 8, 1, 540.00, 540.00),
(10, 151, 8, 1, 540.00, 540.00),
(11, 108, 9, 1, 470.00, 470.00),
(12, 152, 9, 1, 470.00, 470.00),
(13, 109, 10, 1, 520.00, 520.00),
(14, 110, 11, 1, 580.00, 580.00),
(15, 111, 12, 1, 0.00, 0.00),
(16, 112, 13, 1, 450.00, 450.00),
(17, 113, 14, 1, 400.00, 400.00),
(18, 114, 15, 1, 590.00, 590.00),
(19, 115, 16, 1, 600.00, 600.00),
(20, 116, 17, 1, 550.00, 550.00),
(21, 117, 18, 1, 620.00, 620.00),
(22, 118, 19, 1, 300.00, 300.00),
(23, 119, 20, 1, 320.00, 320.00),
(24, 120, 21, 1, 310.00, 310.00),
(25, 121, 22, 1, 650.00, 650.00),
(26, 122, 23, 1, 600.00, 600.00),
(27, 123, 24, 1, 480.00, 480.00),
(28, 124, 25, 1, 580.00, 580.00),
(29, 125, 26, 1, 250.00, 250.00),
(30, 126, 27, 1, 300.00, 300.00),
(31, 127, 28, 1, 650.00, 650.00),
(32, 128, 29, 1, 500.00, 500.00),
(33, 129, 30, 1, 450.00, 450.00),
(34, 130, 31, 1, 0.00, 0.00),
(35, 131, 32, 1, 300.00, 300.00),
(36, 132, 33, 1, 0.00, 0.00),
(37, 133, 34, 1, 300.00, 300.00),
(38, 134, 35, 1, 50.00, 50.00),
(39, 135, 36, 1, 450.00, 450.00),
(40, 136, 37, 1, 500.00, 500.00),
(41, 137, 38, 1, 250.00, 250.00),
(42, 138, 39, 1, 400.00, 400.00),
(43, 139, 40, 1, 350.00, 350.00),
(44, 140, 41, 1, 550.00, 550.00),
(45, 141, 42, 1, 100.00, 100.00),
(46, 142, 43, 1, 200.00, 200.00),
(47, 143, 44, 1, 480.00, 480.00),
(48, 144, 45, 1, 500.00, 500.00),
(49, 145, 46, 1, 430.00, 430.00),
(50, 146, 47, 1, 250.00, 250.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `inventario_id` int NOT NULL,
  `accesorio_id` int NOT NULL,
  `cantidad` int NOT NULL DEFAULT '0',
  `precio` decimal(10,2) NOT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `videojuego_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`inventario_id`, `accesorio_id`, `cantidad`, `precio`, `ubicacion`, `fecha_ingreso`, `videojuego_id`) VALUES
(1, 1, 10, 500.00, 'Estante 1', '2024-11-10', NULL),
(2, 2, 15, 350.00, 'Estante 2', '2024-11-10', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `proveedor_id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productos_suministrados` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`proveedor_id`, `nombre`, `contacto`, `productos_suministrados`) VALUES
(1, 'Proveedoras GameSoft', 'game@proveedor.com', 'Accesorios, Consolas, Juegos'),
(2, 'Distribuidora GamerMax', 'info@gamermax.com', 'Consolas, Juegos'),
(3, 'GameWorld S.A.', 'contacto@gameworld.com', 'Videojuegos, Consolas, Accesorios'),
(4, 'DigitalGaming Ltd.', 'ventas@digitalgaming.com', 'Videojuegos para PC y Consolas'),
(5, 'GamingPro', 'info@gamingpro.com', 'Accesorios para consolas, Tarjetas de regalo'),
(6, 'TechZone Distribuciones', 'soporte@techzone.com', 'Consolas y Videojuegos para Xbox y PlayStation'),
(7, 'PlayLand Corp.', 'ventas@playland.com', 'Videojuegos y Accesorios para Nintendo Switch'),
(8, 'ConsolaMax', 'contacto@consolamax.com', 'Consolas, Juegos de Realidad Virtual'),
(9, 'VirtualPlay', 'ventas@virtualplay.com', 'Juegos de Realidad Virtual, Accesorios VR'),
(10, 'GamerHouse', 'info@gamerhouse.com', 'Videojuegos, Controladores, Mandos y Volantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasenia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombre_usuario`, `contrasenia`) VALUES
(3, 'clopez', 'password123'),
(4, 'amartinez', 'password123'),
(5, 'lgonzalez', 'password123'),
(6, 'mperez', 'password123'),
(7, 'jsanchez', 'password123'),
(8, 'ldiaz', 'password123'),
(9, 'promero', 'password123'),
(10, 'storres', 'password123'),
(11, 'rvargas', 'password123'),
(12, 'eflores', 'password123'),
(13, 'amorales', 'password123'),
(14, 'privera', 'password123'),
(15, 'jcastillo', 'password123'),
(16, 'gherrera', 'password123'),
(17, 'drios', 'password123'),
(18, 'ccruz', 'password123'),
(19, 'mmendoza', 'password123'),
(20, 'isoto', 'password123'),
(21, 'rortega', 'password123'),
(44, 'mgomez', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `venta_id` int NOT NULL,
  `videojuego_id` int DEFAULT NULL,
  `fecha_venta` date DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`venta_id`, `videojuego_id`, `fecha_venta`, `cantidad`, `total`) VALUES
(103, 4, '2024-10-01', 1, NULL),
(104, 5, '2024-10-02', 1, NULL),
(105, 6, '2024-10-03', 1, NULL),
(106, 7, '2024-10-04', 1, NULL),
(107, 8, '2024-10-05', 1, NULL),
(108, 9, '2024-10-06', 1, NULL),
(109, 10, '2024-10-07', 1, NULL),
(110, 11, '2024-10-08', 1, NULL),
(111, 12, '2024-10-09', 1, NULL),
(112, 13, '2024-10-10', 1, NULL),
(113, 14, '2024-10-11', 1, NULL),
(114, 15, '2024-10-12', 1, NULL),
(115, 16, '2024-10-13', 1, NULL),
(116, 17, '2024-10-14', 1, NULL),
(117, 18, '2024-10-15', 1, NULL),
(118, 19, '2024-10-16', 1, NULL),
(119, 20, '2024-10-17', 1, NULL),
(120, 21, '2024-10-18', 1, NULL),
(121, 22, '2024-10-19', 1, NULL),
(122, 23, '2024-10-20', 1, NULL),
(123, 24, '2024-10-21', 1, NULL),
(124, 25, '2024-10-22', 1, NULL),
(125, 26, '2024-10-23', 1, NULL),
(126, 27, '2024-10-24', 1, NULL),
(127, 28, '2024-10-25', 1, NULL),
(128, 29, '2024-10-26', 1, NULL),
(129, 30, '2024-10-27', 1, NULL),
(130, 31, '2024-10-28', 1, NULL),
(131, 32, '2024-10-29', 1, NULL),
(132, 33, '2024-10-30', 1, NULL),
(133, 34, '2024-10-31', 1, NULL),
(134, 35, '2024-11-01', 1, NULL),
(135, 36, '2024-11-02', 1, NULL),
(136, 37, '2024-11-03', 1, NULL),
(137, 38, '2024-11-04', 1, NULL),
(138, 39, '2024-10-01', 1, NULL),
(139, 40, '2024-10-02', 1, NULL),
(140, 41, '2024-10-03', 1, NULL),
(141, 42, '2024-10-04', 1, NULL),
(142, 43, '2024-10-05', 1, NULL),
(143, 44, '2024-10-06', 1, NULL),
(144, 45, '2024-10-07', 1, NULL),
(145, 46, '2024-10-08', 1, NULL),
(146, 47, '2024-10-09', 1, NULL),
(147, 4, '2024-10-10', 1, NULL),
(148, 5, '2024-10-11', 1, NULL),
(149, 6, '2024-10-12', 1, NULL),
(150, 7, '2024-10-13', 1, NULL),
(151, 8, '2024-10-14', 1, NULL),
(152, 9, '2024-10-15', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `videojuego_id` int NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plataforma` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `cantidad` int NOT NULL,
  `proveedor_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`videojuego_id`, `titulo`, `plataforma`, `genero`, `precio`, `cantidad`, `proveedor_id`) VALUES
(1, 'The Last of Us', 'PlayStation', 'Acción', 59.99, 10, 1),
(2, 'Halo Infinite', 'Xbox', 'Shooter', 49.99, 15, 1),
(3, 'Super Mario Odyssey', 'Nintendo Switch', 'Aventura', 39.99, 20, 2),
(4, 'The Legend of Zelda: Breath of the Wild', 'Nintendo Switch', 'Aventura', 650.00, 15, 1),
(5, 'Super Mario Odyssey', 'Nintendo Switch', 'Plataformas', 450.00, 20, 1),
(6, 'Mario Kart 8 Deluxe', 'Nintendo Switch', 'Carreras', 500.00, 18, 2),
(7, 'Animal Crossing: New Horizons', 'Nintendo Switch', 'Simulación', 480.00, 10, 2),
(8, 'Pokémon Sword', 'Nintendo Switch', 'RPG', 540.00, 12, 3),
(9, 'Splatoon 2', 'Nintendo Switch', 'Acción', 470.00, 14, 3),
(10, 'Fire Emblem: Three Houses', 'Nintendo Switch', 'Estrategia', 520.00, 8, 4),
(11, 'Xenoblade Chronicles 2', 'Nintendo Switch', 'RPG', 580.00, 9, 4),
(12, 'Fortnite', 'Multiplataforma', 'Battle Royale', 0.00, 50, 5),
(13, 'Call of Duty: Modern Warfare', 'PlayStation 4', 'Shooter', 450.00, 25, 5),
(14, 'Spider-Man', 'PlayStation 4', 'Aventura', 400.00, 18, 6),
(15, 'The Last of Us Part II', 'PlayStation 4', 'Aventura', 590.00, 15, 6),
(16, 'God of War', 'PlayStation 4', 'Aventura', 600.00, 10, 7),
(17, 'Horizon Zero Dawn', 'PlayStation 4', 'Aventura', 550.00, 12, 7),
(18, 'Ghost of Tsushima', 'PlayStation 4', 'Aventura', 620.00, 14, 8),
(19, 'FIFA 21', 'Multiplataforma', 'Deportes', 300.00, 30, 1),
(20, 'NBA 2K21', 'Multiplataforma', 'Deportes', 320.00, 25, 1),
(21, 'Madden NFL 21', 'Multiplataforma', 'Deportes', 310.00, 20, 2),
(22, 'Cyberpunk 2077', 'Multiplataforma', 'RPG', 650.00, 8, 2),
(23, 'Assassin’s Creed Valhalla', 'Multiplataforma', 'Aventura', 600.00, 12, 3),
(24, 'Resident Evil 3', 'Multiplataforma', 'Horror', 480.00, 15, 3),
(25, 'Final Fantasy VII Remake', 'PlayStation 4', 'RPG', 580.00, 10, 4),
(26, 'Minecraft', 'Multiplataforma', 'Sandbox', 250.00, 50, 4),
(27, 'The Sims 4', 'Multiplataforma', 'Simulación', 300.00, 40, 5),
(28, 'Red Dead Redemption 2', 'Multiplataforma', 'Aventura', 650.00, 7, 5),
(29, 'GTA V', 'Multiplataforma', 'Aventura', 500.00, 22, 6),
(30, 'Overwatch', 'Multiplataforma', 'Shooter', 450.00, 30, 6),
(31, 'League of Legends', 'PC', 'MOBA', 0.00, 60, 7),
(32, 'World of Warcraft', 'PC', 'MMORPG', 300.00, 40, 7),
(33, 'Counter-Strike: Global Offensive', 'PC', 'Shooter', 0.00, 100, 8),
(34, 'PUBG', 'Multiplataforma', 'Battle Royale', 300.00, 28, 8),
(35, 'Among Us', 'Multiplataforma', 'Party', 50.00, 45, 1),
(36, 'Dark Souls III', 'Multiplataforma', 'RPG', 450.00, 14, 1),
(37, 'Sekiro: Shadows Die Twice', 'Multiplataforma', 'Acción', 500.00, 10, 2),
(38, 'Fortnite Deluxe Edition', 'Multiplataforma', 'Battle Royale', 250.00, 22, 2),
(39, 'Persona 5', 'PlayStation 4', 'RPG', 400.00, 9, 3),
(40, 'Bloodborne', 'PlayStation 4', 'Aventura', 350.00, 15, 3),
(41, 'Nioh 2', 'PlayStation 4', 'Acción', 550.00, 7, 4),
(42, 'Fall Guys', 'Multiplataforma', 'Party', 100.00, 35, 4),
(43, 'Cuphead', 'Multiplataforma', 'Plataformas', 200.00, 20, 5),
(44, 'DOOM Eternal', 'Multiplataforma', 'Shooter', 480.00, 18, 5),
(45, 'Monster Hunter: World', 'Multiplataforma', 'RPG', 500.00, 13, 6),
(46, 'Dragon Ball Z: Kakarot', 'Multiplataforma', 'Aventura', 430.00, 16, 6),
(47, 'Street Fighter V', 'Multiplataforma', 'Lucha', 250.00, 24, 7),
(48, 'Tekken 7', 'Multiplataforma', 'Lucha', 260.00, 25, 7),
(49, 'Mortal Kombat 11', 'Multiplataforma', 'Lucha', 270.00, 22, 8),
(50, 'FIFA 22', 'Multiplataforma', 'Deportes', 350.00, 30, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD PRIMARY KEY (`accesorio_id`),
  ADD KEY `proveedor_id` (`proveedor_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD PRIMARY KEY (`detalle_id`),
  ADD KEY `venta_id` (`venta_id`),
  ADD KEY `videojuego_id` (`videojuego_id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`inventario_id`),
  ADD KEY `accesorio_id` (`accesorio_id`),
  ADD KEY `fk_videojuego` (`videojuego_id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`proveedor_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`venta_id`),
  ADD KEY `videojuego_id` (`videojuego_id`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`videojuego_id`),
  ADD KEY `fk_proveedor` (`proveedor_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  MODIFY `accesorio_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cliente_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  MODIFY `detalle_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `inventario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `proveedor_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `venta_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `videojuego_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD CONSTRAINT `accesorios_ibfk_1` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedores` (`proveedor_id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD CONSTRAINT `detalle_ventas_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`venta_id`),
  ADD CONSTRAINT `detalle_ventas_ibfk_2` FOREIGN KEY (`videojuego_id`) REFERENCES `videojuegos` (`videojuego_id`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `fk_videojuego` FOREIGN KEY (`videojuego_id`) REFERENCES `videojuegos` (`videojuego_id`),
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`accesorio_id`) REFERENCES `accesorios` (`accesorio_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`videojuego_id`) REFERENCES `videojuegos` (`videojuego_id`);

--
-- Filtros para la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD CONSTRAINT `fk_proveedor` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedores` (`proveedor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
