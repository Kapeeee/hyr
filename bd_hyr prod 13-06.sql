-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-06-2019 a las 16:33:06
-- Versión del servidor: 5.7.23-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chy18028_hyr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE `comuna` (
  `COMUNA_ID` int(5) NOT NULL DEFAULT '0',
  `COMUNA_NOMBRE` varchar(20) DEFAULT NULL,
  `COMUNA_PROVINCIA_ID` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`COMUNA_ID`, `COMUNA_NOMBRE`, `COMUNA_PROVINCIA_ID`) VALUES
(1101, 'Iquique', 11),
(1107, 'Alto Hospicio', 11),
(1401, 'Pozo Almonte', 14),
(1402, 'Camiña', 14),
(1403, 'Colchane', 14),
(1404, 'Huara', 14),
(1405, 'Pica', 14),
(2101, 'Antofagasta', 21),
(2102, 'Mejillones', 21),
(2103, 'Sierra Gorda', 21),
(2104, 'Taltal', 21),
(2201, 'Calama', 22),
(2202, 'Ollagüe', 22),
(2203, 'San Pedro de Atacama', 22),
(2301, 'Tocopilla', 23),
(2302, 'María Elena', 23),
(3101, 'Copiapó', 31),
(3102, 'Caldera', 31),
(3103, 'Tierra Amarilla', 31),
(3201, 'Chañaral', 32),
(3202, 'Diego de Almagro', 32),
(3301, 'Vallenar', 33),
(3302, 'Alto del Carmen', 33),
(3303, 'Freirina', 33),
(3304, 'Huasco', 33),
(4101, 'La Serena', 41),
(4102, 'Coquimbo', 41),
(4103, 'Andacollo', 41),
(4104, 'La Higuera', 41),
(4105, 'Paihuano', 41),
(4106, 'Vicuña', 41),
(4201, 'Illapel', 42),
(4202, 'Canela', 42),
(4203, 'Los Vilos', 42),
(4204, 'Salamanca', 42),
(4301, 'Ovalle', 43),
(4302, 'Combarbalá', 43),
(4303, 'Monte Patria', 43),
(4304, 'Punitaqui', 43),
(4305, 'Río Hurtado', 43),
(5101, 'Valparaíso', 51),
(5102, 'Casablanca', 51),
(5103, 'Concón', 51),
(5104, 'Juan Fernández', 51),
(5105, 'Puchuncaví', 51),
(5107, 'Quintero', 51),
(5109, 'Viña del Mar', 51),
(5201, 'Isla de Pascua', 52),
(5301, 'Los Andes', 53),
(5302, 'Calle Larga', 53),
(5303, 'Rinconada', 53),
(5304, 'San Esteban', 53),
(5401, 'La Ligua', 54),
(5402, 'Cabildo', 54),
(5403, 'Papudo', 54),
(5404, 'Petorca', 54),
(5405, 'Zapallar', 54),
(5501, 'Quillota', 55),
(5502, 'La Calera', 55),
(5503, 'Hijuelas', 55),
(5504, 'La Cruz', 55),
(5506, 'Nogales', 55),
(5601, 'San Antonio', 56),
(5602, 'Algarrobo', 56),
(5603, 'Cartagena', 56),
(5604, 'El Quisco', 56),
(5605, 'El Tabo', 56),
(5606, 'Santo Domingo', 56),
(5701, 'San Felipe', 57),
(5702, 'Catemu', 57),
(5703, 'Llay Llay', 57),
(5704, 'Panquehue', 57),
(5705, 'Putaendo', 57),
(5706, 'Santa María', 57),
(5801, 'Quilpué', 58),
(5802, 'Limache', 58),
(5803, 'Olmué', 58),
(5804, 'Villa Alemana', 58),
(6101, 'Rancagua', 61),
(6102, 'Codegua', 61),
(6103, 'Coinco', 61),
(6104, 'Coltauco', 61),
(6105, 'Doñihue', 61),
(6106, 'Graneros', 61),
(6107, 'Las Cabras', 61),
(6108, 'Machalí', 61),
(6109, 'Malloa', 61),
(6110, 'Mostazal', 61),
(6111, 'Olivar', 61),
(6112, 'Peumo', 61),
(6113, 'Pichidegua', 61),
(6114, 'Quinta de Tilcoco', 61),
(6115, 'Rengo', 61),
(6116, 'Requínoa', 61),
(6117, 'San Vicente', 61),
(6201, 'Pichilemu', 62),
(6202, 'La Estrella', 62),
(6203, 'Litueche', 62),
(6204, 'Marchihue', 62),
(6205, 'Navidad', 62),
(6206, 'Paredones', 62),
(6301, 'San Fernando', 63),
(6302, 'Chépica', 63),
(6303, 'Chimbarongo', 63),
(6304, 'Lolol', 63),
(6305, 'Nancagua', 63),
(6306, 'Palmilla', 63),
(6307, 'Peralillo', 63),
(6308, 'Placilla', 63),
(6309, 'Pumanque', 63),
(6310, 'Santa Cruz', 63),
(7101, 'Talca', 71),
(7102, 'Constitución', 71),
(7103, 'Curepto', 71),
(7104, 'Empedrado', 71),
(7105, 'Maule', 71),
(7106, 'Pelarco', 71),
(7107, 'Pencahue', 71),
(7108, 'Río Claro', 71),
(7109, 'San Clemente', 71),
(7110, 'San Rafael', 71),
(7201, 'Cauquenes', 72),
(7202, 'Chanco', 72),
(7203, 'Pelluhue', 72),
(7301, 'Curicó', 73),
(7302, 'Hualañé', 73),
(7303, 'Licantén', 73),
(7304, 'Molina', 73),
(7305, 'Rauco', 73),
(7306, 'Romeral', 73),
(7307, 'Sagrada Familia', 73),
(7308, 'Teno', 73),
(7309, 'Vichuquén', 73),
(7401, 'Linares', 74),
(7402, 'Colbún', 74),
(7403, 'Longaví', 74),
(7404, 'Parral', 74),
(7405, 'Retiro', 74),
(7406, 'San Javier', 74),
(7407, 'Villa Alegre', 74),
(7408, 'Yerbas Buenas', 74),
(8101, 'Concepción', 81),
(8102, 'Coronel', 81),
(8103, 'Chiguayante', 81),
(8104, 'Florida', 81),
(8105, 'Hualqui', 81),
(8106, 'Lota', 81),
(8107, 'Penco', 81),
(8108, 'San Pedro de la Paz', 81),
(8109, 'Santa Juana', 81),
(8110, 'Talcahuano', 81),
(8111, 'Tomé', 81),
(8112, 'Hualpén', 81),
(8201, 'Lebu', 82),
(8202, 'Arauco', 82),
(8203, 'Cañete', 82),
(8204, 'Contulmo', 82),
(8205, 'Curanilahue', 82),
(8206, 'Los Álamos', 82),
(8207, 'Tirúa', 82),
(8301, 'Los Ángeles', 83),
(8302, 'Antuco', 83),
(8303, 'Cabrero', 83),
(8304, 'Laja', 83),
(8305, 'Mulchén', 83),
(8306, 'Nacimiento', 83),
(8307, 'Negrete', 83),
(8308, 'Quilaco', 83),
(8309, 'Quilleco', 83),
(8310, 'San Rosendo', 83),
(8311, 'Santa Bárbara', 83),
(8312, 'Tucapel', 83),
(8313, 'Yumbel', 83),
(8314, 'Alto Biobío', 83),
(8401, 'Chillán', 163),
(8402, 'Bulnes', 163),
(8403, 'Cobquecura', 162),
(8404, 'Coelemu', 162),
(8405, 'Coihueco', 161),
(8406, 'Chillán Viejo', 163),
(8407, 'El Carmen', 163),
(8408, 'Ninhue', 162),
(8409, 'Ñiquén', 161),
(8410, 'Pemuco', 163),
(8411, 'Pinto', 163),
(8412, 'Portezuelo', 162),
(8413, 'Quillón', 163),
(8414, 'Quirihue', 162),
(8415, 'Ránquil', 162),
(8416, 'San Carlos', 161),
(8417, 'San Fabián', 161),
(8418, 'San Ignacio', 163),
(8419, 'San Nicolás', 161),
(8420, 'Treguaco', 162),
(8421, 'Yungay', 163),
(9101, 'Temuco', 91),
(9102, 'Carahue', 91),
(9103, 'Cunco', 91),
(9104, 'Curarrehue', 91),
(9105, 'Freire', 91),
(9106, 'Galvarino', 91),
(9107, 'Gorbea', 91),
(9108, 'Lautaro', 91),
(9109, 'Loncoche', 91),
(9110, 'Melipeuco', 91),
(9111, 'Nueva Imperial', 91),
(9112, 'Padre las Casas', 91),
(9113, 'Perquenco', 91),
(9114, 'Pitrufquén', 91),
(9115, 'Pucón', 91),
(9116, 'Saavedra', 91),
(9117, 'Teodoro Schmidt', 91),
(9118, 'Toltén', 91),
(9119, 'Vilcún', 91),
(9120, 'Villarrica', 91),
(9121, 'Cholchol', 91),
(9201, 'Angol', 92),
(9202, 'Collipulli', 92),
(9203, 'Curacautín', 92),
(9204, 'Ercilla', 92),
(9205, 'Lonquimay', 92),
(9206, 'Los Sauces', 92),
(9207, 'Lumaco', 92),
(9208, 'Purén', 92),
(9209, 'Renaico', 92),
(9210, 'Traiguén', 92),
(9211, 'Victoria', 92),
(10101, 'Puerto Montt', 101),
(10102, 'Calbuco', 101),
(10103, 'Cochamó', 101),
(10104, 'Fresia', 101),
(10105, 'Frutillar', 101),
(10106, 'Los Muermos', 101),
(10107, 'Llanquihue', 101),
(10108, 'Maullín', 101),
(10109, 'Puerto Varas', 101),
(10201, 'Castro', 102),
(10202, 'Ancud', 102),
(10203, 'Chonchi', 102),
(10204, 'Curaco de Vélez', 102),
(10205, 'Dalcahue', 102),
(10206, 'Puqueldón', 102),
(10207, 'Queilén', 102),
(10208, 'Quellón', 102),
(10209, 'Quemchi', 102),
(10210, 'Quinchao', 102),
(10301, 'Osorno', 103),
(10302, 'Puerto Octay', 103),
(10303, 'Purranque', 103),
(10304, 'Puyehue', 103),
(10305, 'Río Negro', 103),
(10306, 'San Juan de la Costa', 103),
(10307, 'San Pablo', 103),
(10401, 'Chaitén', 104),
(10402, 'Futaleufú', 104),
(10403, 'Hualaihué', 104),
(10404, 'Palena', 104),
(11101, 'Coyhaique', 111),
(11102, 'Lago Verde', 111),
(11201, 'Aysén', 112),
(11202, 'Cisnes', 112),
(11203, 'Guaitecas', 112),
(11301, 'Cochrane', 113),
(11302, 'O\'Higgins', 113),
(11303, 'Tortel', 113),
(11401, 'Chile Chico', 114),
(11402, 'Río Ibáñez', 114),
(12101, 'Punta Arenas', 121),
(12102, 'Laguna Blanca', 121),
(12103, 'Río Verde', 121),
(12104, 'San Gregorio', 121),
(12201, 'Cabo de Hornos', 122),
(12202, 'Antártica', 122),
(12301, 'Porvenir', 123),
(12302, 'Primavera', 123),
(12303, 'Timaukel', 123),
(12401, 'Natales', 124),
(12402, 'Torres del Paine', 124),
(13101, 'Santiago', 131),
(13102, 'Cerrillos', 131),
(13103, 'Cerro Navia', 131),
(13104, 'Conchalí', 131),
(13105, 'El Bosque', 131),
(13106, 'Estación Central', 131),
(13107, 'Huechuraba', 131),
(13108, 'Independencia', 131),
(13109, 'La Cisterna', 131),
(13110, 'La Florida', 131),
(13111, 'La Granja', 131),
(13112, 'La Pintana', 131),
(13113, 'La Reina', 131),
(13114, 'Las Condes', 131),
(13115, 'Lo Barnechea', 131),
(13116, 'Lo Espejo', 131),
(13117, 'Lo Prado', 131),
(13118, 'Macul', 131),
(13119, 'Maipú', 131),
(13120, 'Ñuñoa', 131),
(13121, 'Pedro Aguirre Cerda', 131),
(13122, 'Peñalolén', 131),
(13123, 'Providencia', 131),
(13124, 'Pudahuel', 131),
(13125, 'Quilicura', 131),
(13126, 'Quinta Normal', 131),
(13127, 'Recoleta', 131),
(13128, 'Renca', 131),
(13129, 'San Joaquín', 131),
(13130, 'San Miguel', 131),
(13131, 'San Ramón', 131),
(13132, 'Vitacura', 131),
(13201, 'Puente Alto', 132),
(13202, 'Pirque', 132),
(13203, 'San José de Maipo', 132),
(13301, 'Colina', 133),
(13302, 'Lampa', 133),
(13303, 'Tiltil', 133),
(13401, 'San Bernardo', 134),
(13402, 'Buin', 134),
(13403, 'Calera de Tango', 134),
(13404, 'Paine', 134),
(13501, 'Melipilla', 135),
(13502, 'Alhué', 135),
(13503, 'Curacaví', 135),
(13504, 'María Pinto', 135),
(13505, 'San Pedro', 135),
(13601, 'Talagante', 136),
(13602, 'El Monte', 136),
(13603, 'Isla de Maipo', 136),
(13604, 'Padre Hurtado', 136),
(13605, 'Peñaflor', 136),
(14101, 'Valdivia', 141),
(14102, 'Corral', 141),
(14103, 'Lanco', 141),
(14104, 'Los Lagos', 141),
(14105, 'Máfil', 141),
(14106, 'Mariquina', 141),
(14107, 'Paillaco', 141),
(14108, 'Panguipulli', 141),
(14201, 'La Unión', 142),
(14202, 'Futrono', 142),
(14203, 'Lago Ranco', 142),
(14204, 'Río Bueno', 142),
(15101, 'Arica', 151),
(15102, 'Camarones', 151),
(15201, 'Putre', 152),
(15202, 'General Lagos', 152);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_doc` int(11) NOT NULL,
  `nro_doc` int(11) NOT NULL,
  `monto_afecto_doc` int(11) DEFAULT NULL,
  `monto_exento_doc` int(11) DEFAULT NULL,
  `monto_iva_doc` int(11) DEFAULT NULL,
  `monto_total_doc` int(11) DEFAULT NULL,
  `fec_ven_doc` date DEFAULT NULL,
  `fec_emi_doc` date DEFAULT NULL,
  `tipo_doc` int(11) DEFAULT NULL,
  `est_doc` int(11) DEFAULT NULL,
  `fec_reg_doc` datetime DEFAULT NULL,
  `usu_reg_doc` int(11) DEFAULT NULL,
  `emp_doc` int(11) DEFAULT NULL,
  `periodo_doc` int(11) DEFAULT NULL,
  `obs_doc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_doc`, `nro_doc`, `monto_afecto_doc`, `monto_exento_doc`, `monto_iva_doc`, `monto_total_doc`, `fec_ven_doc`, `fec_emi_doc`, `tipo_doc`, `est_doc`, `fec_reg_doc`, `usu_reg_doc`, `emp_doc`, `periodo_doc`, `obs_doc`) VALUES
(1, 179, 87211, 0, 9690, 96901, '2019-06-20', '2019-05-30', 2, 1, '2019-06-05 08:06:50', 2, 57, NULL, 'mensualidad de mayo 2019'),
(2, 178, 30781, 0, 3420, 34201, '2019-06-20', '2019-05-30', 2, 2, '2019-06-05 09:06:37', 2, 76, NULL, ''),
(3, 177, 46171, 0, 5130, 51301, '0000-00-00', '2019-05-30', 2, 3, '2019-06-05 09:06:50', 2, 77, NULL, ''),
(4, 176, 54892, 0, 6099, 60991, '2019-06-20', '2019-05-30', 2, 1, '2019-06-05 09:06:27', 2, 45, NULL, ''),
(5, 175, 150000, 0, 16666, 166666, '2019-06-17', '2019-05-17', 2, 3, '2019-06-05 09:06:24', 2, 34, NULL, 'servicios de creacion de empresa en un dia y eleccion de regimen tributario'),
(6, 182, 108000, 0, 12000, 120000, '2019-06-20', '2019-05-30', 2, 1, '2019-06-05 09:06:23', 2, 73, NULL, ''),
(7, 181, 35911, 0, 3990, 39901, '2019-06-20', '2019-05-30', 2, 1, '2019-06-05 09:06:41', 2, 32, NULL, ''),
(8, 180, 117991, 0, 13110, 131101, '2019-06-20', '2019-05-30', 2, 1, '2019-06-05 09:06:31', 2, 21, NULL, ''),
(9, 2761, 0, 111050, 0, 111050, '2019-06-20', '2019-05-30', 1, 3, '2019-06-05 10:06:27', 2, 5, NULL, ''),
(10, 2759, 0, 115050, 0, 115050, '2019-05-30', '2019-05-27', 1, 3, '2019-06-05 10:06:23', 2, 4, NULL, ''),
(11, 2760, 0, 138813, 0, 138813, '2019-06-20', '2019-05-27', 1, 3, '2019-06-05 10:06:34', 2, 6, NULL, ''),
(12, 2762, 0, 160500, 0, 160500, '2019-06-20', '2019-05-30', 1, 1, '2019-06-05 10:06:22', 2, 23, NULL, ''),
(13, 2763, 0, 80000, 0, 80000, '2019-06-20', '2019-05-30', 1, 1, '2019-06-05 10:06:33', 2, 34, NULL, ''),
(14, 2764, 0, 83969, 0, 83969, '2019-06-20', '2019-05-30', 1, 3, '2019-06-05 10:06:51', 2, 9, NULL, ''),
(15, 2765, 0, 509000, 0, 509000, '2019-06-20', '2019-05-30', 1, 1, '2019-06-05 11:06:50', 2, 17, NULL, ''),
(16, 2767, 0, 61561, 0, 61561, '2019-06-20', '2019-05-30', 1, 3, '2019-06-06 08:06:09', 2, 74, NULL, 'mensualidad de mayo 2019'),
(17, 2766, 0, 54584, 0, 54584, '2019-06-20', '2019-05-30', 1, 3, '2019-06-06 08:06:27', 2, 2, NULL, 'mensualidad de MAYO 2019'),
(18, 2768, 0, 86247, 0, 86247, '2019-02-20', '2019-05-30', 1, 4, '2019-06-07 09:06:04', 2, 27, NULL, 'mensualidad de mayo 2019'),
(19, 2769, 0, 32351, 0, 32351, '2019-06-20', '2019-05-30', 1, 3, '2019-06-07 09:06:36', 2, 29, NULL, 'mensualidad de mayo 2019'),
(20, 2770, 0, 170037, 0, 170037, '2019-06-20', '2019-05-30', 1, 3, '2019-06-07 11:06:50', 2, 63, NULL, 'mensualidad de mayo 2019'),
(21, 2771, 0, 153900, 0, 153900, '2019-06-20', '2019-05-30', 1, 1, '2019-06-07 11:06:19', 2, 3, NULL, 'MENSUALIDAD DE MAYO 2019'),
(22, 2772, 0, 205200, 0, 205200, '0000-00-00', '2019-05-30', 1, 4, '2019-06-07 11:06:07', 2, 25, NULL, 'mensualidad de mayo 2019'),
(23, 2776, 0, 281920, 0, 281920, '2019-06-20', '2019-05-30', 1, 1, '2019-06-09 10:06:26', 2, 64, NULL, 'MENSUALIDAD DE MAYO 2019'),
(24, 2777, 0, 205200, 0, 205200, '2019-06-20', '2019-05-30', 1, 1, '2019-06-09 10:06:54', 2, 28, NULL, 'MENSUALIDAD DE MAYO 2019'),
(25, 2779, 0, 244000, 0, 244000, '2019-06-20', '2019-05-30', 1, 3, '2019-06-09 11:06:20', 2, 50, NULL, 'MENSUALIDAD DE MAYO 2019'),
(26, 2780, 0, 100000, 0, 100000, '2019-06-20', '2019-05-30', 1, 4, '2019-06-09 11:06:16', 2, 11, NULL, 'MENSUALIDAD DE MAYO 2019'),
(27, 2780, 0, 100000, 0, 100000, '2019-06-20', '2019-05-30', 1, 1, '2019-06-09 11:06:42', 2, 11, NULL, 'MENSUALIDAD DE MAYO 2019'),
(28, 2792, 0, 139947, 0, 139947, '2019-06-20', '2019-05-30', 1, 1, '2019-06-09 11:06:23', 2, 37, NULL, 'MENSUALIDAD DE MAYO 2019'),
(29, 2793, 0, 140000, 0, 140000, '2019-06-20', '2019-05-30', 1, 3, '2019-06-09 11:06:44', 2, 75, NULL, 'MENSUALIDAD DE MAYO 2019'),
(30, 2795, 0, 95624, 0, 95624, '0000-00-00', '2019-05-30', 1, 4, '2019-06-10 12:06:03', 2, 44, NULL, 'MENSUALIDAD MAYO 2019'),
(31, 2796, 0, 45145, 0, 45145, '2019-06-20', '2019-05-30', 1, 1, '2019-06-10 12:06:22', 2, 43, NULL, 'MENSUALIDAD DE MAYO 2019'),
(32, 2673, 0, 3500000, 0, 3500000, '2019-06-30', '2019-05-14', 1, 1, '2019-06-10 06:06:21', 2, 33, NULL, 'RENTA AT 2019    \r\nFACTURA N°2673 POR $ 4.720.000\r\nNOTA DE CREDITO N°102 POR $ 1.220.000  MOTIVO: DESCUENTO EXCEPCIONAL RTA AT 2019\r\n'),
(33, 2803, 0, 97382, 0, 97382, '2019-06-20', '2019-05-30', 1, 1, '2019-06-10 09:06:45', 2, 39, NULL, 'MENSUALIDAD DE MAYO 2019'),
(34, 2804, 0, 134117, 0, 134117, '2019-06-20', '2019-05-30', 1, 1, '2019-06-10 09:06:39', 2, 51, NULL, 'MENSUALIDAD DE MAYO 2019'),
(35, 2805, 0, 99728, 0, 99728, '2019-06-20', '2019-05-30', 1, 1, '2019-06-10 10:06:35', 2, 61, NULL, 'MENSUALIDAD DE MAYO 2019'),
(36, 2815, 0, 15391, 0, 15391, '2019-06-20', '2019-05-30', 1, 3, '2019-06-10 10:06:29', 2, 81, NULL, 'MAYO 2019'),
(37, 2773, 0, 78720, 0, 78720, '2019-06-20', '2019-05-30', 1, 3, '2019-06-10 10:06:55', 2, 10, NULL, ''),
(38, 2648, 0, 62980, 0, 62980, '2019-06-20', '2019-05-30', 1, 4, '2019-06-10 10:06:31', 2, 12, NULL, ''),
(39, 2774, 0, 62980, 0, 62980, '2019-06-20', '2019-05-30', 1, 3, '2019-06-10 10:06:50', 2, 12, NULL, ''),
(40, 2775, 0, 120705, 0, 120705, '2019-06-20', '2019-05-30', 1, 3, '2019-06-10 10:06:53', 2, 65, NULL, ''),
(41, 2768, 0, 86247, 0, 86247, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 05:06:44', 2, 27, NULL, 'MENSUALIDAD DE MAYO 2019'),
(42, 2772, 0, 205200, 0, 205200, '2019-06-20', '2019-05-30', 1, 1, '2019-06-11 05:06:28', 2, 25, NULL, 'MENSUALIDAD DE MAYO 2019'),
(43, 2795, 0, 95624, 0, 95624, '2019-06-20', '2019-05-30', 1, 1, '2019-06-11 05:06:10', 2, 44, NULL, 'MENSUALIDAD DE MAYO 2019'),
(44, 2782, 0, 0, 0, 0, '2019-06-20', '2019-05-30', 1, 4, '2019-06-11 08:06:18', 2, 7, NULL, 'MENSUALIDAD DE MAYO 2019  RMR'),
(45, 2782, 0, 36937, 0, 36937, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 09:06:13', 2, 7, NULL, 'MENSUALIDAD DE MAYO 2019'),
(46, 2781, 0, 26677, 0, 26677, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 09:06:21', 2, 82, NULL, ''),
(47, 2784, 0, 53353, 0, 53353, '2019-06-20', '2019-05-30', 1, 1, '2019-06-11 09:06:47', 2, 16, NULL, 'MENSUALIDAD DE MAYO 2019'),
(48, 2783, 0, 29915, 0, 29915, '2019-06-20', '2019-05-30', 1, 1, '2019-06-11 09:06:44', 2, 83, NULL, 'MENSUALIDAD DE MAYO 2019'),
(49, 2785, 0, 125955, 0, 125955, '2019-06-20', '2019-05-30', 1, 1, '2019-06-11 09:06:03', 2, 8, NULL, 'MENSUALIDAD DE MAYO 2019'),
(50, 2786, 0, 76889, 0, 76889, '2019-06-20', '2019-05-30', 1, 1, '2019-06-11 09:06:40', 2, 15, NULL, 'MENSUALIDAD DE MAYO  2019'),
(51, 2637, 0, 1026000, 0, 1026000, '2019-05-30', '2019-04-30', 1, 1, '2019-06-11 10:06:23', 2, 25, NULL, 'OPERACION RENTA AT 2019 EMPRESA FENIX'),
(52, 2638, 0, 205200, 0, 205200, '2019-05-20', '2019-04-30', 1, 1, '2019-06-11 10:06:59', 2, 25, NULL, 'MENSUALIDAD DE MARZO 2019'),
(53, 2639, 0, 205200, 0, 205200, '2019-05-20', '2019-04-30', 1, 1, '2019-06-11 10:06:14', 2, 25, NULL, 'MENSUALIDAD DE ABRIL 2019'),
(54, 2772, 0, 205200, 0, 205200, '2019-06-20', '2019-05-30', 1, 1, '2019-06-11 10:06:13', 2, 25, NULL, 'MENSUALIDAD DE MAYO 2019'),
(55, 2567, 0, 200000, 0, 200000, '2019-03-27', '2019-03-27', 1, 1, '2019-06-11 10:06:22', 2, 25, NULL, 'SERVICIO MODIFICACION DE SOCIEDAD INGENIERIA Y CONST. icFENIX LTDA'),
(56, 2640, 0, 365178, 0, 365178, '2019-05-20', '2019-04-30', 1, 1, '2019-06-11 10:06:15', 2, 84, NULL, 'OPERACION RENTA AT 2019\r\nT N INVERSIONES SOCIEDAD ANONIMA'),
(57, 2595, 0, 1000000, 0, 1000000, '2019-05-30', '2019-04-16', 1, 3, '2019-06-11 10:06:10', 2, 50, NULL, 'OPERACION RENTA AT 2019'),
(58, 2787, 0, 84931, 0, 84931, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 11:06:31', 2, 13, NULL, 'MENSUALIDAD DE MAYO 2019'),
(59, 2788, 0, 102338, 0, 102338, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 11:06:14', 2, 85, NULL, 'MENSUALIDAD DE MAYO 2019'),
(60, 2789, 0, 583333, 0, 583333, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 11:06:46', 2, 33, NULL, 'MENSUALIDAD DE MAYO 2019'),
(61, 2790, 0, 25076, 0, 25076, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 11:06:00', 2, 35, NULL, 'MENSUALIDAD DE MAYO 2019'),
(62, 2791, 0, 58312, 0, 58312, '2019-06-20', '2019-05-30', 1, 1, '2019-06-11 11:06:14', 2, 42, NULL, 'MENSUALIDAD DE MAYO 2019'),
(63, 2797, 0, 53353, 0, 53353, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 11:06:36', 2, 47, NULL, 'MENSUALIDAD DE MAYO 2019'),
(64, 2798, 0, 87468, 0, 87468, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 11:06:46', 2, 48, NULL, 'MENSUALIDAD DE MAYO 2019'),
(65, 2800, 0, 225000, 0, 225000, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 11:06:30', 2, 14, NULL, 'MENSUALIDAD DE MAYO 2019'),
(66, 2801, 0, 61561, 0, 61561, '2019-06-20', '2019-05-30', 1, 3, '2019-06-11 11:06:50', 2, 59, NULL, 'MENSUALIDAD DE MAYO 2019 '),
(67, 2659, 0, 1225000, 0, 1225000, '2019-05-30', '2019-04-30', 1, 1, '2019-06-12 08:06:12', 2, 30, NULL, 'OP. RENTA AT 2019'),
(68, 2658, 0, 350000, 0, 350000, '2019-05-20', '2019-04-30', 1, 1, '2019-06-12 08:06:03', 2, 30, NULL, 'mensualidad de abril 2019'),
(69, 2590, 0, 148000, 0, 148000, '2019-04-30', '2019-03-30', 1, 3, '2019-06-12 08:06:38', 2, 68, NULL, 'OPERACION RENTA AT 2019'),
(70, 2814, 0, 70282, 0, 70282, '2019-06-20', '2019-05-30', 1, 3, '2019-06-12 09:06:30', 2, 52, NULL, 'MENSUALIDAD DE MAYO 2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_emp` int(11) NOT NULL,
  `razon_social_emp` varchar(150) NOT NULL,
  `rut_emp` varchar(10) NOT NULL,
  `cons_soc_emp` int(11) DEFAULT NULL,
  `monto_mensual_emp` int(11) NOT NULL,
  `monto_renta_emp` int(11) NOT NULL,
  `ciudad_emp` int(11) DEFAULT NULL,
  `comuna_emp` int(11) DEFAULT NULL,
  `dir_emp` varchar(150) DEFAULT NULL,
  `reg_trib_emp` int(11) DEFAULT NULL,
  `fec_ini_act_emp` date NOT NULL,
  `mail_emp` varchar(100) DEFAULT NULL,
  `nom_contacto_emp` varchar(150) DEFAULT NULL,
  `patente_comer_emp` int(11) DEFAULT NULL,
  `evaluacion_emp` int(11) DEFAULT NULL,
  `vig_emp` int(11) NOT NULL,
  `fec_cre_emp` datetime DEFAULT NULL,
  `usu_cre_emp` int(11) DEFAULT NULL,
  `clave_previred_emp` varchar(45) DEFAULT NULL,
  `clave_sii_emp` varchar(45) DEFAULT NULL,
  `fac_rea_emp` float DEFAULT NULL,
  `rta_at_emp` int(11) DEFAULT NULL,
  `cod_emp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_emp`, `razon_social_emp`, `rut_emp`, `cons_soc_emp`, `monto_mensual_emp`, `monto_renta_emp`, `ciudad_emp`, `comuna_emp`, `dir_emp`, `reg_trib_emp`, `fec_ini_act_emp`, `mail_emp`, `nom_contacto_emp`, `patente_comer_emp`, `evaluacion_emp`, `vig_emp`, `fec_cre_emp`, `usu_cre_emp`, `clave_previred_emp`, `clave_sii_emp`, `fac_rea_emp`, `rta_at_emp`, `cod_emp`) VALUES
(1, 'ACEVEDO MARTA E. ', '7286259-7', NULL, 0, 0, 61, 6108, 'LA VINILLA 142, MACHALI', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 64),
(2, 'AGRICOLA Y TRANSPORTE OSCAR MIGUEL OLGUIN E.I.R.L', '76475060-8', 12, 51581, 350000, 61, 6103, 'LIBERTADOR BERNARDO  O´HIGGINS OSCAR GONZALEZ OLGUIN', 14, '2018-01-01', 'rolguin@mfdo.cl', 'Sra Lidia Olguin', 0, 0, 1, '2019-06-05 00:00:00', 1, 'gg', 'jj', 0, 14, 103),
(3, 'ANICH HERMANOS Y CIA LTDA ', '85188300-2', 12, 153900, 1200000, 61, 6101, 'ANDRES DE ALCAZAR #411 NICOLAS ENRIQUE ANICH ESPOZ', 1, '2018-01-01', 'comercialanich@gmail.com', 'Nicolás Anich ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'U', 'YYY', 1, 1, 61),
(4, 'ASOC CANAL LUCANO', '70584300-7', 1012018, 111050, 150000, 131, 13101, 'INDEPENDENCIA # 333 JOSE EDGARDO RAMON MEZA BANADOS', 77, '0000-00-00', 'canal_lucano@hotmail.com', 'NICOLAS', 0, 0, 1, '2019-06-05 00:00:00', 1, 'cccc', 'lucano70', 155, 44, 162),
(5, 'ASOC. DE CANALISTAS SAN PEDRO POBL ', '70400000-6', 442018, 111050, 0, 61, 6101, 'GAMERO Nº 367 Gerardo Butron Weiffenbach', 14, '2017-01-13', 'canalsanpedro@gmail.com', 'Sra Marlene', 0, 0, 1, '2019-06-05 00:00:00', 1, 'vvvv', '70400000sp', 165, 14, 15),
(6, 'ASOC.DE CANAL DE CACHAPOAL ', '70539300-1', 1012018, 138000, 138000, 61, 6101, 'gamero 367 SERGIO RAMON TRONCOSO VERGARA', 14, '0000-00-00', 'canalcachapoal@gmail.com', 'Sr. Rafael Dueñas', 0, 0, 1, '2019-06-05 00:00:00', 1, 'jj', 'kkk', 0, 9898, 165),
(7, 'BERRIOS LUIS GUILLERMO', '12366006-4', 22, 36937, 150000, 61, 6106, 'H-15 NUEVOS CAMPOS N°8820, INT.', 14, '2018-01-01', 'luis.guillermobc73@gmail.com', 'LUIS GUILLERMO BERRIOS CAMILO', 0, 0, 1, '2019-06-05 00:00:00', 1, '55', 'ss', 11, 14, 104),
(8, 'CERON NUNEZ OSCAR ARMANDO incluye transportes os eirl y os agricola eirl', '8165283-K', 14, 125955, 500000, 62, 6204, 'SAN JOSÉ DE MARCHIGUE S/N , LA', 14, '2018-01-01', 'o.ceron2011@hotmail.com', 'CERON NUNEZ OSCAR ARMANDO', 0, 0, 1, '2019-06-05 00:00:00', 1, '12', 'S', 14, 14, 70),
(9, 'CLINICA DENTAL DOÑIHUE LTDA. ', '76198896-4', 12, 83900, 300000, 61, 6105, 'AVDA RANCAGUA 058 GASPAR FERNANDEZ ORELLANA', 14, '0000-00-00', 'grfernan@uc.cl', 'DR GASPAR FERNANDEZ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'tt', '76198896sp', 12, 14, 13),
(10, 'CLINICA INTEGRAL EUDENT LTDA.', '76263914-9', 22, 78720, 300000, 131, 13114, 'APOQUINDO 4100 313 ANDRES ROSALES', 14, '2018-10-10', 'andres.rosales.c@gmail.com', 'DR ROSALES ROSALES ', 0, 0, 1, '2019-06-05 00:00:00', 1, '555', 'FF', 11, 14, 9),
(11, 'CLINICA ODONTOLOGICA RIO CLARO SPA ', '76786965-7', 22, 100000, 500000, 73, 7301, 'CARMEN #775 BASTIAN ALONSO HANTSCH ROA', 12, '2019-01-01', 'bastian.hantsch@gmail.com', 'Bastian Hantsch ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'FF', '3333', 12, 2, 150),
(12, 'COMERCIAL MELBAR Y ASOCIADOS LTDA. ', '76377215-2', 14, 62980, 500000, 61, 6101, 'AVDA. CACHAPOAL 382 BARRENA ORTIGOSA MARIA LUISA', 14, '2018-10-10', 'barrenaml@hotmail.com', 'Maria Luisa Barrena ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'F', 'FF', 1, 1, 43),
(13, 'REYES CONTRERAS ARTURO ', '8147274-2', NULL, 0, 0, 61, 6101, 'SOTO GRANDE 0583, JORGE', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 71),
(14, 'CORPORACION EDUCACIONAL SAN LORENZO DE MACHALI', '65094862-9', 14, 225000, 500000, 61, 6108, 'POB. CENTRAL EDIF. #34 COYA JOCELYN MACARENA ARIAS ORTEGA', 14, '2019-01-10', 'colegiosanlorenzo2258@gmail.com', 'rodrigo cavieres', 88, 77, 1, '2019-06-05 00:00:00', 1, '77', '122', 14, 14, 158),
(15, 'CORREA JOSÉ LUIS incluye CORREA Y CIA ', '6653577-0', 14, 76889, 150000, 61, 6102, 'MIRAFLORES 1400, CODEGUA', 14, '2019-01-01', 'joseluisford@hotmail.com', 'CORREA JOSÉ LUIS', 0, 111, 1, '2019-06-05 00:00:00', 1, '11', 'S', 14, 14, 72),
(16, 'AUDOLINA NUÑEZ OLGUIN', '4070927-4', 11, 53353, 150000, 61, 6113, 'PARCELA 3 SAN JOSE MARCHIGUE', 14, '2018-10-10', 'salasceron420@gmail.com ', 'MARTA CERON ', 0, 11, 1, '2019-06-05 00:00:00', 1, '11', 'II', 1, 14, 85),
(17, 'FARMACEUTICA CRUZ DE ORO Y COMPANIA LTDA', '77697910-4', 12, 509000, 1781500, 73, 7301, 'PEÑA 851 CARLOS  HANTSCH STUARDO', 14, '0000-00-00', 'chantsch@gmail.com', 'Carlos Hanchs Stuardo ', 0, 0, 1, '2019-06-05 00:00:00', 1, '11935940x', '77697910sp', 111, 14, 38),
(18, 'FRANCO RAVERA ZUNINO INMOBILIARIA E.I.R.L', '76500063-7', NULL, 0, 0, 61, 6111, 'ANGEL CRUCHAGA, SANTA MARÍA 007 FRANCO RAVERA ZUNINO', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 146),
(19, 'FUENZALIDA UNDURRAGA MARIA C.', '10782067-1', NULL, 0, 0, 61, 6116, 'CONDOMINIO GOLF #C 20 CAM LA', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 129),
(20, 'FUNDACIÓN LA FAMILIA DE MARÍA ', '65099266-0', NULL, 0, 0, 61, 6101, 'GUILLERMO SAAVEDRA N° 125 VILLA ISABEL ECHEVERRIA RICHARD', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 101),
(21, 'GEOCONSULTORES SPA', '76377753-7', 442010, 131101, 600000, 61, 6101, 'PASAJE BUDY N° 646 - VILLA JOSE DOMINGO ZULETA FLORES', 14, '0000-00-00', 'gerencia@geoconsultor.cl', 'Sra Soledad', 0, 0, 1, '2019-06-05 00:00:00', 1, 'jjj', '251202', 0, 14, 125),
(22, 'GONZALEZ OSCAR MIGUEL', '11171964-0', NULL, 0, 0, 61, 6103, 'LIBERTADOR BERNARDO O´HIGGINS N°', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 76),
(23, 'HC ALIMENTOS SPA', '76858606-3', 1072018, 80000, 500000, 134, 13404, 'KM 40 PANAMERICANA SUR PA #96 HECTOR PERALTA PIZARRO', 14, '2019-06-05', 'hperaltap@gmail.com', 'HECTOR PERALTA PEREZ', 0, 0, 1, '2019-06-05 00:00:00', 1, '11935940x', '76858606sp', 888, 777, 157),
(24, 'IMPORTADORA GANESH LIMITADA', '76378432-0', NULL, 0, 0, 61, 6101, 'BRASIL 1036, LOCAL 5 - RGUA CHANDRA KUMAR RELWANI', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 115),
(25, 'INGENIERIA Y CONSTRUCCION  FENIX LTDA', '76134977-5', 111, 205200, 1000000, 61, 6101, 'GABRIELA MISTRAL #610 EDUARDO BAEZA TERRAZAS', 1, '2012-01-01', 'ebaezat@icfenix.cl', 'Eduardo Baeza Terrazas ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'iii', '76134977sp', 1, 1, 4),
(26, 'INMOBILIARIA E INVERSIONES LOS ACACIOS LTDA', '76300999-8', NULL, 0, 0, 61, 6101, 'FREIRE 815 CARLOS  HANTSCH STUARDO', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 29),
(27, 'INMOBILIARIA E INVERSIONES H LOBOS Y COMPANIA LTDA', '78758660-0', 89, 86247, 450000, 134, 13402, 'VILLASECA 825 HECTOR MARIO LOBOS LOBOS', 124, '2018-01-01', 'judedilo@gmail.com', 'Don Juan Lobos', 0, 0, 1, '2019-06-05 00:00:00', 1, 'hh', '78758660sp', 22, 14, 22),
(28, 'INMOBILIARIA PORVENIR LIMITADA ', '79753730-6', 1212, 205200, 1000000, 61, 6101, 'GERMAN RIESCO N°302 EDUARDO ANICH ESPOZ', 222, '2018-01-01', 'eanich@gmail.com', 'Eduardo Anich ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'SS', 'SS', 232, 22, 57),
(29, 'INVERSIONES LOBOS PALOMINOS LTDA. ', '76150999-3', 12, 32351, 350000, 134, 13402, 'CAMINOS BAJOS DEL MATE S/N LOTE 4 JUAN LOBOS LOBOS', 1, '0019-12-10', 'judedilo@gmail.com', 'Juan de Dios Lobos', 0, 0, 1, '2019-06-05 00:00:00', 1, 'iii', '761150999sp', 1, 1, 14),
(30, 'INVERSIONES VICTOR MANUEL LIMITADA ', '76277941-2', 11111, 350000, 1000000, 61, 6101, 'DIEGO DE ALMAGRO N° 2855 VICTOR ZUÑIGA', 13, '2018-01-01', 'alejandromaz75@gmail.com', 'VICTOR ZUÑIGA', 0, 0, 1, '2019-06-05 00:00:00', 1, 'x', '76277941sp', 11, 11, 156),
(31, 'INVERSIONES, INMOVILIARIA Y COMERCIALIZADORA GANESH LTDA', '76380572-7', NULL, 0, 0, 61, 6101, 'SANTA MARÍA 391 - RGUA CHANDRA KUMAR RELWANI', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 116),
(32, 'JMI  SPA', '76571079-0', 442018, 39901, 600000, 61, 6101, 'PASAJE BUDY N°646 - VILLA SOLEDAD NUÑEZ VALENZUELA', 14, '0000-00-00', 'gerencia@geoconsultor.cl', 'Sra Soledad', 0, 0, 1, '2019-06-05 00:00:00', 1, 'hhhhh', 'jaelita10', 454, 45454, 126),
(33, 'KUMAR RELWANI CHANDRA', '9910387-6', 11, 583333, 3500000, 61, 6101, 'BRASIL 1059, RCGUA CHANDRA KUMAR RELWANI', 14, '2018-12-10', 'importadoraganeshrancagua@gmail.com', 'CHANDRA KUMAR ', 0, 7, 1, '2019-06-05 00:00:00', 1, '77', '7', 11, 14, 89),
(34, 'LABOR TRAINING SPA ', '77015998-9', 10102018, 80000, 500000, 61, 6101, 'PACHECO ALTAMIRANO N°02906 VILLA HECTOR PERALTA PIZARRO', 14, '0000-00-00', 'hperaltap@gmail.com', 'Sr Hector Peralta', 0, 0, 1, '2019-06-05 00:00:00', 1, 'jjj', '77015998sp', 999, 88, 167),
(35, 'LIZAMA VARGAS EFRAIN', '4531227-5', NULL, 0, 0, 61, 6101, 'SAN PEDRO PJE. 3, DEPTO 907, RGUA', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 77),
(36, 'ASOCIACION CANAL LUCANO', '70584300-7', NULL, 0, 0, 131, 13101, '', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 164),
(37, 'MADRID ACEITUNO CLAUDIA', '11185407-6', 666, 139947, 500000, 61, 6101, 'ASTORGA 360 L - 4 RGUA CLAUDIA ELENA MADRID ACEITUNO', 11, '2018-01-01', 'madrid.cla@gmail.com', 'claudia madrid ', 0, 0, 1, '2019-06-05 00:00:00', 1, '666', '55', 11, 1, 78),
(38, 'MANUEL MORALES JURE Y CIA. LTDA. ', '77232920-2', NULL, 0, 0, 61, 6111, 'MANUEL RODRIGUEZ N°904, OLIVAR MANUEL ALEJANDRO MORALES JURE', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 12),
(39, 'MARIA CAROLINA FUENZALIDA UNDURRAGA E.I.R.L', '76230451-1', 11, 97382, 700000, 61, 6101, 'RUTA 5 SUR, KM 92- OLIVAR MARÍA CAROLINA FUENZALIDA', 14, '2018-01-01', 'ventasr@ssautos.cl', 'Maria Carolina Fuenzalida Undurraga ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'ss', 'ii', 11, 14, 102),
(40, 'MARÍA PAZ MORENO URZÚA E.I.R.L. ', '76326164-6', NULL, 0, 0, 61, 6101, 'CALLE LOS OLIVOS #1683 SANTA MARIA PAZ MORENO URZUA', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 154),
(41, 'MARIN LABRAÑA ALDO', '15730999-4', NULL, 0, 0, 61, 6101, 'SARAGOZA N° 450, FELIPE MARTINEZ', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 83),
(42, 'MARTINEZ OYENEDER JORGE', '7976458-2', 14, 58312, 500000, 61, 6101, 'MADRID 1398, POBLACIÓN LOS ALPES,', 14, '2019-01-01', 'martinezelectricidad@yahoo.com.ar', 'MARTINEZ OYENEDER JORGE', 0, 0, 1, '2019-06-05 00:00:00', 1, 'YY', 'HH', 14, 14, 80),
(43, 'MELLA RAMIREZ ALVARO', '6816314-5', 11, 45145, 500000, 61, 6108, 'AV. SAN JUAN PARADERO 14, LAS', 12, '2019-01-01', 'ALVARO MELLA', 'amella@rosario.cl', 0, 0, 1, '2019-06-05 00:00:00', 1, 'EE', 'SS', 11, 1, 81),
(44, 'MIRANDA REYES FREDDY', '10717765-5', 11, 95624, 500000, 61, 6101, 'MILLAN ESQ. CALVO 1181, RGUA', 11, '2015-01-01', 'covex.rgua@gmail.com', 'FREDDY MIRANDA ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'DD', 'D', 1, 1, 82),
(45, 'MIRANDA PONCE IVAN', '7452194-0', NULL, 0, 0, 61, 6101, 'DIEGO PORTALES 0349, DEPTO. 34 IVAN MIRANDA PONCE', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 130),
(46, 'NORCAN HYDRAULIC TURBINE SPA', '76161324-3', NULL, 0, 0, 61, 6108, 'Paseo de Las Artes 097 P del Valle RONNY ARIEL ZIMERMAN MANES', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 6),
(47, 'NUÑEZ SANCHEZ LUIS DAMASO', '5423895-9', 14, 53353, 5000000, 61, 6101, 'LAS CARMELITAS 2532, LA CAPILLA', 14, '2019-01-01', 'lunesaire@gmail.com', 'NUÑEZ SANCHEZ LUIS DAMASO', 0, 0, 1, '2019-06-05 00:00:00', 1, 'DD', 'DDD', 14, 14, 84),
(48, 'OLGUIN PINTO PATRICIA DEL CARMEN', '8266498-K', 14, 0, 0, 61, 6103, 'COPEQUEN S/N COINCO', 14, '2019-01-01', 'mro.elpantanal@gmail.com', 'OLGUIN PINTO PATRICIA DEL CARMEN', 0, 14, 1, '2019-06-05 00:00:00', 1, '1221', '121', 14, 14, 91),
(49, 'PANADERIA Y PASTELERIA LA DULCE TENTACION SPA', '76973444-9', NULL, 0, 0, 61, 6101, 'AV. JUAN MARTINEZ DE ROZA #01208 RODRIGO ALEJANDRO ORELLANA ORTIZ', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 163),
(50, 'NOLASCO SALUSTIO PEREZ CALDERON', '12691650-7', 1212, 200000, 1000000, 61, 6101, 'SANTIAGO 0969 VILLA ARCOIRIS NOLASCO PEREZ', 22, '2018-01-01', 'nolasco197315@gmail.com', 'Nolasco Pérez', 0, 0, 1, '2019-06-05 00:00:00', 1, 'XX', 'ARCOIRIS', 22, 2, 160),
(51, 'SANCHEZ AUTOMOVILES SPA ', '76447817-7', 101, 134117, 500000, 61, 6111, 'LONGITUDINAL SUR, LOTE D - KM 90 MARÍA CAROLINA FUENZALIDA', 24, '2019-01-01', 'ventasr@ssautos.cl', 'Maria Carolina Fuenzalida Undurraga ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'SS', 'GG', 11, 14, 124),
(52, 'SERVICIO DE SALUD ALMATEA LIMITADA', '76680995-2', 14, 70282, 500000, 61, 6101, 'MANUEL MONTT N° 025, VILLA JOSE MIGUEL MULLER RIQUELME', 14, '2018-01-01', 'jmmullerr@gmail.com', 'DR MULLER', 0, 0, 1, '2019-06-05 00:00:00', 1, 'D', 'DD', 1, 14, 127),
(53, 'SOC COMERCIAL Y FARMACEUTICA H Y R LTDA', '77583240-1', NULL, 0, 0, 61, 6101, 'REPUBLICA DE CHILE 391 4 CARLOS  HANTSCH STUARDO', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 37),
(54, 'SOC. AGRÍCOLA LA ESPERANZA AGRÍCOLA LTDA', '77393970-5', NULL, 0, 0, 61, 6116, 'PARCELA 10, EL VATICANO - REQUINOA LUIS RETAMALES', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 109),
(55, 'SOC. COMERCIAL RAFAEL GARCIA E HIJOS LTDA.', '78049810-2', NULL, 0, 0, 61, 6108, 'TARAPACA 275, MACHALI MARIO GRACÍA DÍAZ', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 119),
(56, 'SOC. CORREA Y COMPAÑIA LIMITADA ', '76099702-1', NULL, 0, 0, 61, 6102, 'MIRAFLORES 1400 CODEGUA JOSÉ CORREA LORCA', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 112),
(57, 'SOCIEDAD DE INVERSIONES `PERLA ORIENTAL LTDA', '76285147-4', NULL, 0, 0, 61, 6101, 'INDEPENDENCIA N°470 - LOCAL 2 RGUA JIANFANG RUAN', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 128),
(58, 'SOC. EDUCACIONAL SAN LORENZO ESTABLECIMIENTO DE ENSEÑANZA', '77142720-0', NULL, 0, 0, 61, 6101, 'EDIFICIO 34. POBL. CENTRAL COYA YOLANDA ORTEGA E.', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 114),
(59, 'SOC. EUROINGENERIA LTDA. ', '76027760-6', 14, 61561, 500, 61, 6108, 'ARTURO PRAT 148, MACHALI SHAMUEL COVALIO', 14, '2019-01-01', 'covalio@hotmail.com', 'OOOOO', 77, 11, 1, '2019-06-05 00:00:00', 1, '11', '1', 14, 14, 110),
(60, 'SOC. FRUTICOLA Y GANADERA RODRIGO A. ORELLANA ORTIZ E.I.R.L.', '76104698-5', NULL, 0, 0, 61, 6111, 'HIJUELA B, EL ALMENDRAL. OLIVAR RODRIGO ALEJANDRO ORELLANA ORTIZ', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 105),
(61, 'SOC. JAIME A. MORALES FIGUEROA E.I.R.L', '76103809-5', 101, 99728, 500000, 61, 6103, 'BOSQUE O´HIGGINS. COINCO JAIME MORALES FIGUEROA', 1, '2018-01-01', 'viverosantaeugenia@gmail.com', 'JAIME MORALES ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'GG', 'GGG', 11, 1, 113),
(62, 'ORELLANA GONZALEZ CLAUDIO ELECTO Y OTROS', '53301159-4', NULL, 0, 0, 61, 6111, 'AV. EL BOSQUE 130 POTRERO MANUEL CLAUDIO ELECTO ORELLANA GONZALEZ', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 111),
(63, 'SOC.COM.NEUROMOR LTDA ', '76693414-5', 11212, 170037, 500000, 61, 6101, 'GERMAN RIESCO 177 OF.12 MANUEL ALEJANDRO MORALES JURE', 1, '2018-01-10', 'manuelmoralesjure@gmail.com', 'Manuel Morales Jure ', 0, 0, 1, '2019-06-05 00:00:00', 1, '111', '76691414Ssp', 1, 1, 62),
(64, 'SOCIEDAD ANTUCO LTDA incluye RAYENCO LTDA', '78964650-3', 11111, 209920, 1000000, 61, 6101, 'SEBASTIAN EL CANO N°81 POB.SAN CRISTIAN MAURICIO URBINA LINAN', 14, '2018-01-01', 'cristianurbina@antucoltda.cl', 'Cristian Urbina Liñan ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'S', 'S', 0, 14, 49),
(65, 'SOCIEDAD COMERCIAL Y FARMACEUTICA SANTA CRUZ LTDA', '76000076-0', 14, 120705, 500000, 63, 6310, 'INDEPENDENCIA 481 ETNA GUZMAN MEZA', 14, '2018-01-01', 'farmaciasantacruz2@hotmail.es', 'Etna Guzman Meza ', 0, 0, 1, '2019-06-05 00:00:00', 1, '11', 'SS', 11, 14, 39),
(66, 'SOTO PEREZ ISMAEL', '5791097-6', NULL, 0, 0, 61, 6101, 'VOLCÁN OSORNO 1638, TUNICHE RGUA', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 93),
(67, 'SUC. RAMON CARO CACERES ', '53290520-6', NULL, 0, 0, 61, 6101, 'LA LLAVERÍA 100, PUNTA DE CORTEZ JOSÉ CARO GONZALEZ', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 143),
(68, 'SUCESIÓN JUAN FERNANDO TAPIA ARCE ', '53303036-K', NULL, 0, 0, 61, 6109, 'PARCELA 9 SITIO N°18 PROY. PARC. MARÍA TERESA VELIZ MELO', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 142),
(69, 'SUCESION RAFAEL GARCIA REY', '53251980-2', NULL, 0, 0, 61, 6108, 'TARAPACA 275, MACHALÍ MARIO GRACÍA DÍAZ', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 140),
(70, 'SERGIO ENRIQUE TAPIA VELIS', '6770126-7', NULL, 0, 0, 61, 6115, 'PARCELA 27 SAN LUIS PELEQUEN,', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 95),
(71, 'LOPEZ TORO RENE', '9207741-1', NULL, 0, 0, 61, 6103, 'EL RULO 1808, COINCO', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 94),
(72, 'TRANSPORTES HANTSCH LIMITADA ', '76081753-8', NULL, 0, 0, 61, 6108, 'LOS ACACIOS 20 CARLOS  HANTSCH STUARDO', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 40),
(73, 'TRANSPORTES KETRU SPA ', '76929387-6', 7, 120000, 500000, 61, 6101, 'SEBASTIAN ELCANO 81 ROMINA ESPINOSA FERNANDEZ', 14, '2019-01-01', 'lurbina30@hotmail.com', 'LUIS URBINA LIÑAN', 0, 0, 1, '2019-06-05 00:00:00', 1, 'Y', '1', 11, 11, 159),
(74, 'TRANSPORTES LIDIA OLGUIN SPA ', '76539357-4', 4545, 61000, 500000, 61, 6103, 'LIBERTADOR BERNARDO O´HIGGINS LIDIA INES OLGUIN PINTO', 14, '2018-01-01', 'rolguin@mfdo.cl', 'Sra Lidia Olguin', 0, 0, 1, '2019-06-05 00:00:00', 1, 'ii', 'i', 22, 14, 120),
(75, 'TRANSPORTES PASCUAL SPA ', '77002418-8', 11, 140000, 500000, 61, 6108, 'DULCE SILENCIO #404 VISTA AL VALLE CLAUDIA ELENA MADRID ACEITUNO', 1, '2019-01-01', 'madrid.cla@gmail.com', 'claudia madrid ', 0, 0, 1, '2019-06-05 00:00:00', 1, 'S', 'SS', 1, 1, 166),
(76, 'VALLEJOS CELIS AUGUSTO', '4617827-0', 666, 78000, 350000, 61, 6101, 'RECREO 198, RGUA AUGUSTO VALLEJOS', 14, '2019-01-01', 'willy-vallejos@hotmail.com', 'GUILLERMO VALLEJOS', 0, 0, 1, '2019-06-05 00:00:00', 1, 'TTT', 'UU', 88, 66, 97),
(77, 'VALLEJOS CAMPOS GUILLERMO', '10171849-2', 44, 78000, 350000, 61, 6101, '1 Y 2 DE OCTUBRE N°366, RGUA GUILLERMO VALLEJOS', 14, '2019-01-01', 'willy-vallejos@hotmail.com', 'GUILLERMO VALLEJOS', 0, 0, 1, '2019-06-05 00:00:00', 1, '555', 'FFF', 1, 11, 98),
(78, 'VASQUEZ LABARCA ALEJANDRO', '4862394-8', NULL, 0, 0, 61, 6101, 'BAQUEDANO 3039, DEPTO. 14 PAB', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 100),
(79, 'ZUÑIGA VICTOR', '12293432-2', NULL, 0, 0, 61, 6101, 'DIEGO DE ALMAGRO #2519 SALON VICTOR ZUÑIGA', NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1, '2019-06-05 00:00:00', 1, NULL, NULL, NULL, NULL, 151),
(80, 'RAUL MUÑOZ RIQUELME', '125168817', 878, 0, 1, 61, 6101, 'CAMPOS 363 PISO 4 OF 46', 1, '2019-01-10', 'rmunozhyr@gmail.com', 'RAUL MUÑOZ', 0, 0, 1, '2019-06-05 00:00:00', 2, '666', 'UU', 1, 1, NULL),
(81, 'SIND DE TRABAJ INDEPEN TAXIS COLECTD PORTALES N 2 ', '72793100-7', 14, 15391, 1, 61, 6101, 'gamero 367', 21, '2018-01-10', 'rosa.gonzalez155@gmail.com', 'SRA ROSA GONZALEZ ', 0, 0, 1, '2019-06-10 00:00:00', 2, 'FF', 'B', 1, 21, NULL),
(82, 'JOSE MANUEL CARO GONZALEZ', '9534576-k', 14, 26677, 150000, 61, 6101, 'PTA. DE CORTES PC.9 ST.17 100', 14, '2018-01-01', 'NO TIENE@NO TIENE.CL', 'JOSE MANUEL CARO GONZALEZ', 0, 11, 1, '2019-06-11 00:00:00', 2, '11', 'FF', 11, 14, NULL),
(83, 'LUIS HERNAN CERON HERRERA ', '3906249-6', 14, 29915, 150000, 61, 6113, 'SAN JOSE DE MARCHIGUE PC. 3', 12, '2018-01-01', 'salasceron420@gmail.com ', 'LUIS HERNAN CERON HERRERA ', 0, 222, 1, '2019-06-11 00:00:00', 2, '22', 'DD', 11, 1, NULL),
(84, 'T N INVERSIONES SOCIEDAD ANONIMA', '77127530-3', 66, 0, 365178, 61, 6116, 'ALEDANO CLUB DE CAMPO PC 13', 14, '2019-01-01', 'ebaezat@icfenix.cl', 'Eduardo Baeza Terrazas ', 0, 0, 1, '2019-06-11 00:00:00', 2, '66', 'G', 14, 14, NULL),
(85, 'MARIO FERNANDO GARCIA DIAZ', '4822720-1', 11, 102338, 500000, 61, 6108, 'TARAPACA 275', 14, '2019-01-10', 'anagarciagola@gmail.com', 'MARIO FERNANDO GARCIA DIAZ', 0, 77, 1, '2019-06-11 00:00:00', 2, '77', 'D', 12, 14, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE `forma_pago` (
  `id_formapago` int(11) NOT NULL,
  `desc_formapago` varchar(50) NOT NULL,
  `vig_formapago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`id_formapago`, `desc_formapago`, `vig_formapago`) VALUES
(1, 'EFECTIVO', 1),
(2, 'TRNASFERENCIA BANCARIA', 2),
(3, 'TRANSFERENCIA BANCARIA', 1),
(4, '', 1),
(5, 'CHEQUE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `giro`
--

CREATE TABLE `giro` (
  `id_giro` int(11) NOT NULL,
  `desc_giro` varchar(150) DEFAULT NULL,
  `id_emp_giro` int(11) DEFAULT NULL,
  `vig_giro` int(11) DEFAULT NULL,
  `fec_cre_giro` datetime DEFAULT NULL,
  `usu_cre_giro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_cambio`
--

CREATE TABLE `log_cambio` (
  `id_cambio` int(11) NOT NULL,
  `tabla_cambio` varchar(50) NOT NULL,
  `columna_cambio` varchar(50) NOT NULL,
  `valor_ant` varchar(100) NOT NULL,
  `valor_nuevo` varchar(100) NOT NULL,
  `fec_cambio` datetime NOT NULL,
  `usu_cambio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov_documento`
--

CREATE TABLE `mov_documento` (
  `id_mov` int(11) NOT NULL,
  `monto_mov` int(11) NOT NULL,
  `obs_mov` varchar(200) DEFAULT NULL,
  `fec_reg_mov` datetime NOT NULL,
  `usu_reg_mov` int(11) DEFAULT NULL,
  `id_doc_mov` int(11) DEFAULT NULL,
  `cod_formapago_mov` int(11) DEFAULT NULL,
  `est_doc_mov` int(11) DEFAULT NULL,
  `fec_mov` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mov_documento`
--

INSERT INTO `mov_documento` (`id_mov`, `monto_mov`, `obs_mov`, `fec_reg_mov`, `usu_reg_mov`, `id_doc_mov`, `cod_formapago_mov`, `est_doc_mov`, `fec_mov`) VALUES
(1, 46171, '', '2019-06-05 09:06:03', 3, 3, 1, 3, '0000-00-00'),
(2, 28829, 'Saldo pendiente $ 1.952 \r\nFecha de Abono 05-06-2019', '2019-06-06 05:06:55', 3, 2, 1, 2, '0000-00-00'),
(3, 111050, 'Pago Total ', '2019-06-07 02:06:15', 3, 9, 5, 3, '0000-00-00'),
(4, 83969, 'Pago Total \r\nFecha 06-06-2019', '2019-06-07 02:06:48', 3, 14, 3, 3, '0000-00-00'),
(5, 111050, 'Pago realizado el día 29-05-2019. \r\n', '2019-06-07 02:06:07', 3, 10, 3, 2, '0000-00-00'),
(6, 138813, 'Pago se realizó el 31 de Mayo de 2019.', '2019-06-07 02:06:05', 3, 11, 5, 3, '0000-00-00'),
(7, 0, 'FALTO INGRESAR EMAIL DEL CLIENTE', '2019-06-09 11:06:23', 2, 26, 4, 4, '0000-00-00'),
(8, 150000, 'GRACIAS POR EL PAGO DE LA BOLETA 175', '2019-06-10 05:06:14', 2, 5, 3, 3, '0000-00-00'),
(9, 0, 'NUMERO DE FACTURA ERRONEO', '2019-06-10 10:06:33', 2, 38, 4, 4, '0000-00-00'),
(10, 4000, 'MONTO FACTURA $ 115.050.-\r\nMONTO PAGO $ 111.050\r\nDIFERENCIA DE $ 4.000.- CORRESPONDE A ERROR EN INGRESO DE MONTO EN SISTEMA DE COBRANZA. RMR\r\nREGULARIZO CON ESTE INGRESO SALDO ERRONEO', '2019-06-11 04:06:00', 2, 10, 1, 3, '0000-00-00'),
(11, 0, 'ERROR EN LA FECHA DE VENCIMIENTO RMR', '2019-06-11 05:06:30', 2, 18, 4, 4, '0000-00-00'),
(12, 0, 'ERROR EN FECHA DE VENCIMIENTO  RMR', '2019-06-11 05:06:54', 2, 22, 4, 4, '0000-00-00'),
(13, 0, 'ERROR EN INGRESO DE FECHA DE VENCIMIENTO RMR', '2019-06-11 05:06:34', 2, 30, 4, 4, '0000-00-00'),
(14, 0, 'PC FALLO Y NO GUARDARON MONTO', '2019-06-11 09:06:14', 2, 44, 4, 4, '0000-00-00'),
(15, 62980, 'OPERACION BCO SANTANDER 20190611160107924990', '2019-06-11 09:06:50', 2, 39, 3, 3, '0000-00-00'),
(16, 244000, 'CHEQUE N°2028433 BANCO ESTADO', '2019-06-11 10:06:05', 2, 25, 5, 3, '0000-00-00'),
(17, 1000000, 'CHEQUE N°2028433 BANCO ESTADO', '2019-06-11 10:06:46', 2, 57, 5, 3, '0000-00-00'),
(18, 61561, 'CHEQUE N°7408300   POR $61.600,.    LO CUANDRE AL MONTO DE LA FACTURA PARA EVITAR DIF  RMR', '2019-06-11 11:06:56', 2, 66, 5, 3, '0000-00-00'),
(19, 78720, 'Pago Total ', '2019-06-12 01:06:40', 3, 37, 3, 3, '0000-00-00'),
(20, 120705, 'Pago Total', '2019-06-12 02:06:22', 3, 40, 3, 3, '0000-00-00'),
(21, 170037, 'Pago Total ', '2019-06-12 02:06:42', 3, 20, 3, 3, '0000-00-00'),
(22, 54584, 'Pago Total ', '2019-06-12 02:06:14', 3, 17, 3, 3, '0000-00-00'),
(23, 225000, 'Pago Total ', '2019-06-12 02:06:33', 3, 65, 3, 3, '0000-00-00'),
(24, 53353, 'Pago Total', '2019-06-12 02:06:39', 3, 63, 3, 3, '0000-00-00'),
(25, 26677, 'Pago Total ', '2019-06-12 02:06:40', 3, 46, 1, 3, '0000-00-00'),
(26, 15391, 'Pago Total ', '2019-06-12 02:06:29', 3, 36, 1, 3, '0000-00-00'),
(27, 25076, 'Pago Total ', '2019-06-12 02:06:22', 3, 61, 1, 3, '0000-00-00'),
(28, 84931, 'Pago Total', '2019-06-12 02:06:57', 3, 58, 1, 3, '0000-00-00'),
(29, 583333, 'Pago Total ', '2019-06-12 02:06:34', 3, 60, 5, 3, '0000-00-00'),
(30, 102338, 'Pago Total', '2019-06-12 02:06:37', 3, 59, 5, 3, '0000-00-00'),
(31, 86247, 'Pago Total', '2019-06-12 02:06:46', 3, 41, 5, 3, '0000-00-00'),
(32, 32351, 'Pago Total', '2019-06-12 02:06:36', 3, 19, 5, 3, '0000-00-00'),
(33, 87468, 'Pago Total', '2019-06-12 02:06:51', 3, 64, 1, 3, '0000-00-00'),
(34, 36937, 'Pago Total ', '2019-06-12 02:06:34', 3, 45, 1, 3, '0000-00-00'),
(35, 140000, 'Pago Total ', '2019-06-12 04:06:16', 3, 29, 3, 3, '0000-00-00'),
(36, 148000, 'pago en efectivo a carolina perez', '2019-06-12 08:06:52', 2, 69, 1, 3, '0000-00-00'),
(37, 70282, 'PAGO MENSUALIDAD MAYO 2019', '2019-06-12 09:06:19', 2, 70, 3, 3, '0000-00-00'),
(38, 61561, 'PAGO TOTAL ', '2019-06-13 01:06:00', 3, 16, 3, 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto_social`
--

CREATE TABLE `objeto_social` (
  `id_obj` int(11) NOT NULL,
  `desc_obj` varchar(150) NOT NULL,
  `id_emp_obj` int(11) DEFAULT NULL,
  `vig_obj` int(11) DEFAULT NULL,
  `fec_cre_obj` datetime DEFAULT NULL,
  `usu_cre_obj` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_per` int(11) NOT NULL,
  `rut_per` varchar(10) NOT NULL,
  `nom_per` varchar(150) NOT NULL,
  `fec_nac_per` date DEFAULT NULL,
  `mail_per` varchar(100) DEFAULT NULL,
  `ciudad_per` int(11) DEFAULT NULL,
  `comuna_per` int(11) DEFAULT NULL,
  `dir_per` varchar(100) DEFAULT NULL,
  `fec_cre_per` datetime NOT NULL,
  `usu_cre_per` int(11) DEFAULT NULL,
  `pass_per` varchar(32) NOT NULL,
  `personacol` varchar(45) DEFAULT NULL,
  `vig_per` int(11) DEFAULT NULL,
  `clave_previred_per` varchar(45) DEFAULT NULL,
  `clave_sii_per` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `PROVINCIA_ID` int(3) NOT NULL DEFAULT '0',
  `PROVINCIA_NOMBRE` varchar(23) DEFAULT NULL,
  `PROVINCIA_REGION_ID` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`PROVINCIA_ID`, `PROVINCIA_NOMBRE`, `PROVINCIA_REGION_ID`) VALUES
(11, 'Iquique', 1),
(14, 'Tamarugal', 1),
(21, 'Antofagasta', 2),
(22, 'El Loa', 2),
(23, 'Tocopilla', 2),
(31, 'Copiapó', 3),
(32, 'Chañaral', 3),
(33, 'Huasco', 3),
(41, 'Elqui', 4),
(42, 'Choapa', 4),
(43, 'Limarí', 4),
(51, 'Valparaíso', 5),
(52, 'Isla de Pascua', 5),
(53, 'Los Andes', 5),
(54, 'Petorca', 5),
(55, 'Quillota', 5),
(56, 'San Antonio', 5),
(57, 'San Felipe de Aconcagua', 5),
(58, 'Marga Marga', 5),
(61, 'Cachapoal', 6),
(62, 'Cardenal Caro', 6),
(63, 'Colchagua', 6),
(71, 'Talca', 7),
(72, 'Cauquenes', 7),
(73, 'Curicó', 7),
(74, 'Linares', 7),
(81, 'Concepción', 8),
(82, 'Arauco', 8),
(83, 'Biobío', 8),
(91, 'Cautín', 9),
(92, 'Malleco', 9),
(101, 'Llanquihue', 10),
(102, 'Chiloé', 10),
(103, 'Osorno', 10),
(104, 'Palena', 10),
(111, 'Coihaique', 11),
(112, 'Aisén', 11),
(113, 'Capitán Prat', 11),
(114, 'General Carrera', 11),
(121, 'Magallanes', 12),
(122, 'Antártica Chilena', 12),
(123, 'Tierra del Fuego', 12),
(124, 'Última Esperanza', 12),
(131, 'Santiago', 13),
(132, 'Cordillera', 13),
(133, 'Chacabuco', 13),
(134, 'Maipo', 13),
(135, 'Melipilla', 13),
(136, 'Talagante', 13),
(141, 'Valdivia', 14),
(142, 'Ranco', 14),
(151, 'Arica', 15),
(152, 'Parinacota', 15),
(161, 'Punilla', 16),
(162, 'Itata', 16),
(163, 'Diguillín', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `REGION_ID` int(2) NOT NULL DEFAULT '0',
  `REGION_NOMBRE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`REGION_ID`, `REGION_NOMBRE`) VALUES
(1, 'Tarapacá'),
(2, 'Antofagasta'),
(3, 'Atacama'),
(4, 'Coquimbo'),
(5, 'Valparaíso'),
(6, 'Región del Libertador Gral. Bernardo O\'Higgins'),
(7, 'Región del Maule'),
(8, 'Región del Biobío'),
(9, 'Región de la Araucanía'),
(10, 'Región de Los Lagos'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo'),
(12, 'Región de Magallanes y de la Antártica Chilena'),
(13, 'Región Metropolitana de Santiago'),
(14, 'Región de Los Ríos'),
(15, 'Arica y Parinacota'),
(16, 'Región de Ñuble');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sociedad`
--

CREATE TABLE `sociedad` (
  `id_soc` int(11) NOT NULL,
  `porc_part_soc` int(11) DEFAULT NULL,
  `monto_part_soc` int(11) DEFAULT NULL,
  `id_per_soc` int(11) DEFAULT NULL,
  `id_emp_soc` int(11) DEFAULT NULL,
  `vig_soc` int(11) DEFAULT NULL,
  `fec_cre_soc` datetime DEFAULT NULL,
  `usu_cre_soc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id_suc` int(11) NOT NULL,
  `ciudad_suc` int(11) NOT NULL,
  `comuna_suc` int(11) NOT NULL,
  `dir_suc` varchar(150) NOT NULL,
  `id_emp_suc` int(11) DEFAULT NULL,
  `vig_suc` int(11) DEFAULT NULL,
  `fec_cre_suc` datetime DEFAULT NULL,
  `usu_cre_suc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_param`
--

CREATE TABLE `tab_param` (
  `id_param` int(10) UNSIGNED NOT NULL,
  `cod_grupo` varchar(45) DEFAULT NULL,
  `cod_item` varchar(45) DEFAULT NULL,
  `desc_item` varchar(100) DEFAULT NULL,
  `vig_item` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab_param`
--

INSERT INTO `tab_param` (`id_param`, `cod_grupo`, `cod_item`, `desc_item`, `vig_item`) VALUES
(1, '1', '0', 'TIPOS DE DOCUMENTOS', '1'),
(2, '1', '1', 'FACTURA', '1'),
(3, '1', '2', 'BOLETA', '1'),
(4, '2', '0', 'ESTADO DOCUMENTOS', '1'),
(5, '2', '1', 'PENDIENTE', '1'),
(6, '2', '2', 'PAGO PARCIAL', '1'),
(7, '2', '3', 'PAGADO', '1'),
(8, '3', '0', 'PERFILES USUARIOS', '1'),
(9, '3', '1', 'ADMIN', '1'),
(10, '3', '2', 'EJECUTIVO', '1'),
(11, '4', '0', 'CARGOS', '1'),
(12, '4', '1', 'FINANCIERO', '1'),
(13, '4', '2', 'ADMINISTRATIVO', '1'),
(14, '2', '4', 'ANULADO', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nom_usu` varchar(50) NOT NULL,
  `apepat_usu` varchar(50) NOT NULL,
  `apemat_usu` varchar(50) NOT NULL,
  `rut_usu` varchar(10) NOT NULL,
  `mail_usu` varchar(100) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `fec_cre_usu` datetime NOT NULL,
  `cargo_usu` int(11) NOT NULL,
  `pass_usu` varchar(32) NOT NULL,
  `vig_usu` int(11) NOT NULL,
  `nick_usu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nom_usu`, `apepat_usu`, `apemat_usu`, `rut_usu`, `mail_usu`, `id_perfil`, `fec_cre_usu`, `cargo_usu`, `pass_usu`, `vig_usu`, `nick_usu`) VALUES
(1, 'Pablo', 'Vicencio', 'Contreras', '18385191-8', 'pvicencioc@hotmail.cl', 1, '2019-05-24 00:00:00', 1, 'cf2f25ae2fc9f738986ff0449513a6a5', 1, 'pvicencio'),
(2, 'RAUL ', 'MUÑOZ ', 'RIQUELME ', '12516881-7', 'rmunoz@hyrconsultora.com', 1, '2019-06-03 00:00:00', 2, '1f3f1e095c95ebe19576761d1d50fd62', 1, 'Rmunoz'),
(3, 'CAROLINA ', 'PEREZ ', 'BERRIOS', '18043078-4', 'cperez@hyrconsultora.com', 2, '2019-06-03 00:00:00', 2, '9b3cc49b0816c17e9d18558ee5fbb796', 1, 'Cperez'),
(4, 'JOHANA ', 'SALGADO ', 'GALVEZ ', '15992924-8', 'jsalgado@hyrconsultora.com', 2, '2019-06-03 00:00:00', 2, 'd5cc3a6ba7e86b30126d796810ef94da', 1, 'Jsalgado'),
(5, 'PATRICIA ERCILIA', 'SALGADO', 'GALVEZ ', '15526009-2', 'psalgado@hyrconsultora.com', 2, '2019-06-03 00:00:00', 2, 'ca8e7ede91fb9523e8731bf17de71ca1', 1, 'Psalgado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_anual`
--

CREATE TABLE `venta_anual` (
  `id_venta` int(11) NOT NULL,
  `monto_venta` int(11) NOT NULL,
  `anio_venta` int(11) NOT NULL,
  `id_emp_venta` int(11) DEFAULT NULL,
  `vig_venta` int(11) DEFAULT NULL,
  `fec_cre_venta` datetime DEFAULT NULL,
  `usu_cre_venta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD PRIMARY KEY (`COMUNA_ID`),
  ADD KEY `COMUNA_PROVINCIA_ID` (`COMUNA_PROVINCIA_ID`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_doc`),
  ADD KEY `fk_usu_doc_idx` (`usu_reg_doc`),
  ADD KEY `fk_emp_doc_idx` (`emp_doc`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_emp`),
  ADD KEY `fk_usu_emp_idx` (`usu_cre_emp`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  ADD PRIMARY KEY (`id_formapago`);

--
-- Indices de la tabla `giro`
--
ALTER TABLE `giro`
  ADD PRIMARY KEY (`id_giro`),
  ADD KEY `fk_emp_giro_idx` (`id_emp_giro`),
  ADD KEY `fk_usu_giro_idx` (`usu_cre_giro`);

--
-- Indices de la tabla `log_cambio`
--
ALTER TABLE `log_cambio`
  ADD PRIMARY KEY (`id_cambio`),
  ADD KEY `fk_usu_cambio_idx` (`usu_cambio`);

--
-- Indices de la tabla `mov_documento`
--
ALTER TABLE `mov_documento`
  ADD PRIMARY KEY (`id_mov`),
  ADD KEY `fk_usu_mov_idx` (`usu_reg_mov`),
  ADD KEY `fk_doc_mov_idx` (`id_doc_mov`),
  ADD KEY `fk_formapago_mov_idx` (`cod_formapago_mov`);

--
-- Indices de la tabla `objeto_social`
--
ALTER TABLE `objeto_social`
  ADD PRIMARY KEY (`id_obj`),
  ADD KEY `fk_emp_obj_idx` (`id_emp_obj`),
  ADD KEY `fk_usu_obj_idx` (`usu_cre_obj`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_per`),
  ADD KEY `fk_usu_per_idx` (`usu_cre_per`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`PROVINCIA_ID`),
  ADD KEY `PROVINCIA_REGION_ID` (`PROVINCIA_REGION_ID`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`REGION_ID`);

--
-- Indices de la tabla `sociedad`
--
ALTER TABLE `sociedad`
  ADD PRIMARY KEY (`id_soc`),
  ADD KEY `fk_emp_soc_idx` (`id_emp_soc`),
  ADD KEY `fk_per_soc_idx` (`id_per_soc`),
  ADD KEY `fk_usu_soc_idx` (`usu_cre_soc`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_suc`),
  ADD KEY `fk_emp_suc_idx` (`id_emp_suc`),
  ADD KEY `fk_usu_suc_idx` (`usu_cre_suc`);

--
-- Indices de la tabla `tab_param`
--
ALTER TABLE `tab_param`
  ADD PRIMARY KEY (`id_param`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- Indices de la tabla `venta_anual`
--
ALTER TABLE `venta_anual`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fk_emp_venta_idx` (`id_emp_venta`),
  ADD KEY `fk_usu_venta_idx` (`usu_cre_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  MODIFY `id_formapago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `giro`
--
ALTER TABLE `giro`
  MODIFY `id_giro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log_cambio`
--
ALTER TABLE `log_cambio`
  MODIFY `id_cambio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mov_documento`
--
ALTER TABLE `mov_documento`
  MODIFY `id_mov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `objeto_social`
--
ALTER TABLE `objeto_social`
  MODIFY `id_obj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sociedad`
--
ALTER TABLE `sociedad`
  MODIFY `id_soc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id_suc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_param`
--
ALTER TABLE `tab_param`
  MODIFY `id_param` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD CONSTRAINT `comuna_COMUNA_PROVINCIA_ID_fkey` FOREIGN KEY (`COMUNA_PROVINCIA_ID`) REFERENCES `provincia` (`PROVINCIA_ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `fk_emp_doc` FOREIGN KEY (`emp_doc`) REFERENCES `empresa` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usu_doc` FOREIGN KEY (`usu_reg_doc`) REFERENCES `usuarios` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_usu_emp` FOREIGN KEY (`usu_cre_emp`) REFERENCES `usuarios` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `giro`
--
ALTER TABLE `giro`
  ADD CONSTRAINT `fk_emp_giro` FOREIGN KEY (`id_emp_giro`) REFERENCES `empresa` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usu_giro` FOREIGN KEY (`usu_cre_giro`) REFERENCES `usuarios` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `log_cambio`
--
ALTER TABLE `log_cambio`
  ADD CONSTRAINT `fk_usu_cambio` FOREIGN KEY (`usu_cambio`) REFERENCES `usuarios` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mov_documento`
--
ALTER TABLE `mov_documento`
  ADD CONSTRAINT `fk_doc_mov` FOREIGN KEY (`id_doc_mov`) REFERENCES `documento` (`id_doc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_formapago_mov` FOREIGN KEY (`cod_formapago_mov`) REFERENCES `forma_pago` (`id_formapago`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usu_mov` FOREIGN KEY (`usu_reg_mov`) REFERENCES `usuarios` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `objeto_social`
--
ALTER TABLE `objeto_social`
  ADD CONSTRAINT `fk_emp_obj` FOREIGN KEY (`id_emp_obj`) REFERENCES `empresa` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usu_obj` FOREIGN KEY (`usu_cre_obj`) REFERENCES `usuarios` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_usu_per` FOREIGN KEY (`usu_cre_per`) REFERENCES `usuarios` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `provincia_PROVINCIA_REGION_ID_fkey` FOREIGN KEY (`PROVINCIA_REGION_ID`) REFERENCES `region` (`REGION_ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sociedad`
--
ALTER TABLE `sociedad`
  ADD CONSTRAINT `fk_emp_soc` FOREIGN KEY (`id_emp_soc`) REFERENCES `empresa` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_per_soc` FOREIGN KEY (`id_per_soc`) REFERENCES `persona` (`id_per`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usu_soc` FOREIGN KEY (`usu_cre_soc`) REFERENCES `usuarios` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD CONSTRAINT `fk_emp_suc` FOREIGN KEY (`id_emp_suc`) REFERENCES `empresa` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usu_suc` FOREIGN KEY (`usu_cre_suc`) REFERENCES `usuarios` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta_anual`
--
ALTER TABLE `venta_anual`
  ADD CONSTRAINT `fk_emp_venta` FOREIGN KEY (`id_emp_venta`) REFERENCES `empresa` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usu_venta` FOREIGN KEY (`usu_cre_venta`) REFERENCES `usuarios` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
