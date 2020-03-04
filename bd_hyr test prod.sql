-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-05-2019 a las 23:21:03
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_hyr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

DROP TABLE IF EXISTS `comuna`;
CREATE TABLE IF NOT EXISTS `comuna` (
  `COMUNA_ID` int(5) NOT NULL DEFAULT '0',
  `COMUNA_NOMBRE` varchar(20) DEFAULT NULL,
  `COMUNA_PROVINCIA_ID` int(3) DEFAULT NULL,
  PRIMARY KEY (`COMUNA_ID`),
  KEY `COMUNA_PROVINCIA_ID` (`COMUNA_PROVINCIA_ID`)
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

DROP TABLE IF EXISTS `documento`;
CREATE TABLE IF NOT EXISTS `documento` (
  `id_doc` int(11) NOT NULL AUTO_INCREMENT,
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
  `obs_doc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_doc`),
  KEY `fk_usu_doc_idx` (`usu_reg_doc`),
  KEY `fk_emp_doc_idx` (`emp_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_doc`, `nro_doc`, `monto_afecto_doc`, `monto_exento_doc`, `monto_iva_doc`, `monto_total_doc`, `fec_ven_doc`, `fec_emi_doc`, `tipo_doc`, `est_doc`, `fec_reg_doc`, `usu_reg_doc`, `emp_doc`, `periodo_doc`, `obs_doc`) VALUES
(1, 123, 10000, 2000, 1900, 13900, '2019-03-31', '2019-05-03', 1, 1, '2019-05-03 06:05:25', 2, 1, NULL, 'test ingreso doc'),
(2, 1234, 100, 5000, 19, 5119, '2019-06-05', '2019-05-03', 1, 2, '2019-05-03 06:05:03', 2, 1, NULL, ''),
(3, 1234, 100, 5000, 19, 5119, '2019-06-05', '2019-05-03', 1, 3, '2019-05-03 06:05:27', 2, 1, NULL, ''),
(4, 1455, 2000, 3222, 380, 5602, '2020-02-01', '2019-05-03', 1, 1, '2019-05-03 06:05:29', 2, 1, NULL, ''),
(5, 1448, 120, 200, 22, 342, '2019-08-03', '2019-05-03', NULL, 3, '2019-05-03 06:05:24', 2, 1, NULL, ''),
(6, 101, 200, 300, 38, 538, '2019-08-06', '2019-05-03', 1, 3, '2019-05-03 06:05:36', 2, 1, NULL, 'test\r\n'),
(7, 1448, 100, 100, 19, 219, '2019-05-04', '2019-04-03', 1, 4, '2019-05-04 01:05:32', 2, 1, NULL, ''),
(8, 99, 1000, 1222, 190, 2412, '2019-04-30', '2019-04-01', 1, 2, '2019-05-06 05:05:38', 2, 1, NULL, 'prueba de ingreso doc 99'),
(9, 1414, 10000, 0, 1900, 11900, '2019-05-30', '2019-05-19', 1, 4, '2019-05-19 08:05:45', 2, 1, NULL, ''),
(10, 177889, 1000, 0, 100, 1100, '2019-05-21', '2019-05-19', 2, 1, '2019-05-19 09:05:27', 2, 1, NULL, 'prueba boleta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id_emp`),
  KEY `fk_usu_emp_idx` (`usu_cre_emp`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_emp`, `razon_social_emp`, `rut_emp`, `cons_soc_emp`, `monto_mensual_emp`, `monto_renta_emp`, `ciudad_emp`, `comuna_emp`, `dir_emp`, `reg_trib_emp`, `fec_ini_act_emp`, `mail_emp`, `nom_contacto_emp`, `patente_comer_emp`, `evaluacion_emp`, `vig_emp`, `fec_cre_emp`, `usu_cre_emp`, `clave_previred_emp`, `clave_sii_emp`, `fac_rea_emp`, `rta_at_emp`) VALUES
(1, 'empresa prueba', '99556236-4', 0, 250000, 500000, 53, 5302, 'Calle la unión 474', 1, '2019-05-02', 'pablo.vicencio@clinicarioblanco.cl', 'pablo', 1, 1, 1, '2019-05-02 15:33:22', 1, '123456', '123789', 100, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

DROP TABLE IF EXISTS `forma_pago`;
CREATE TABLE IF NOT EXISTS `forma_pago` (
  `id_formapago` int(11) NOT NULL AUTO_INCREMENT,
  `desc_formapago` varchar(50) NOT NULL,
  `vig_formapago` int(11) NOT NULL,
  PRIMARY KEY (`id_formapago`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`id_formapago`, `desc_formapago`, `vig_formapago`) VALUES
(1, 'EFECTIVO', 1),
(2, 'TRNASFERENCIA BANCARIA', 2),
(3, 'TRANSFERENCIA BANCARIA', 1),
(4, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `giro`
--

DROP TABLE IF EXISTS `giro`;
CREATE TABLE IF NOT EXISTS `giro` (
  `id_giro` int(11) NOT NULL AUTO_INCREMENT,
  `desc_giro` varchar(150) DEFAULT NULL,
  `id_emp_giro` int(11) DEFAULT NULL,
  `vig_giro` int(11) DEFAULT NULL,
  `fec_cre_giro` datetime DEFAULT NULL,
  `usu_cre_giro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_giro`),
  KEY `fk_emp_giro_idx` (`id_emp_giro`),
  KEY `fk_usu_giro_idx` (`usu_cre_giro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_cambio`
--

DROP TABLE IF EXISTS `log_cambio`;
CREATE TABLE IF NOT EXISTS `log_cambio` (
  `id_cambio` int(11) NOT NULL AUTO_INCREMENT,
  `tabla_cambio` varchar(50) NOT NULL,
  `columna_cambio` varchar(50) NOT NULL,
  `valor_ant` varchar(100) NOT NULL,
  `valor_nuevo` varchar(100) NOT NULL,
  `fec_cambio` datetime NOT NULL,
  `usu_cambio` int(11) NOT NULL,
  PRIMARY KEY (`id_cambio`),
  KEY `fk_usu_cambio_idx` (`usu_cambio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov_documento`
--

DROP TABLE IF EXISTS `mov_documento`;
CREATE TABLE IF NOT EXISTS `mov_documento` (
  `id_mov` int(11) NOT NULL AUTO_INCREMENT,
  `monto_mov` int(11) NOT NULL,
  `obs_mov` varchar(200) DEFAULT NULL,
  `fec_reg_mov` datetime NOT NULL,
  `usu_reg_mov` int(11) DEFAULT NULL,
  `id_doc_mov` int(11) DEFAULT NULL,
  `cod_formapago_mov` int(11) DEFAULT NULL,
  `est_doc_mov` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mov`),
  KEY `fk_usu_mov_idx` (`usu_reg_mov`),
  KEY `fk_doc_mov_idx` (`id_doc_mov`),
  KEY `fk_formapago_mov_idx` (`cod_formapago_mov`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mov_documento`
--

INSERT INTO `mov_documento` (`id_mov`, `monto_mov`, `obs_mov`, `fec_reg_mov`, `usu_reg_mov`, `id_doc_mov`, `cod_formapago_mov`, `est_doc_mov`) VALUES
(1, 12000, 'test pago parcial', '2019-05-04 08:05:15', 2, 1, 1, 2),
(2, 5119, 'test pago completo', '2019-05-04 08:05:08', 2, 2, 3, 3),
(3, 5119, 'test pago completo', '2019-05-04 08:05:08', 2, 2, 3, 3),
(4, 5602, 'test pago completo', '2019-05-04 08:05:45', 2, 4, 1, 3),
(5, 1000, 'test pago parcial', '2019-05-04 09:05:09', 2, 3, 1, 2),
(6, 342, '', '2019-05-04 09:05:31', 2, 5, 1, 3),
(7, 583, 'test', '2019-05-04 09:05:04', 2, 6, 1, 3),
(8, 15000, 'test', '2019-05-04 09:05:07', 2, 1, 1, 3),
(9, 1000, 'test pago 2 1000', '2019-05-04 09:05:10', 2, 3, 1, 2),
(10, 1000, 'pago 3 1000', '2019-05-04 09:05:15', 2, 3, 1, 2),
(11, 1000, 'pago 4 1000', '2019-05-04 09:05:40', 2, 3, 3, 2),
(12, 1000, 'pago 5 1000', '2019-05-04 09:05:51', 2, 3, 3, 2),
(13, 119, 'pago completo', '2019-05-04 09:05:01', 2, 3, 3, 3),
(14, 1000, 'pago 1', '2019-05-06 05:05:40', 2, 8, 1, 2),
(15, 1000, '', '2019-05-06 05:05:19', 2, 8, 3, 2),
(16, 412, 'pago 3', '2019-05-06 05:05:58', 2, 8, 1, 3),
(19, 0, 'test anulacion', '2019-05-16 09:05:27', 2, 7, 4, 4),
(20, 0, 'test', '2019-05-19 08:05:12', 2, 9, 4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto_social`
--

DROP TABLE IF EXISTS `objeto_social`;
CREATE TABLE IF NOT EXISTS `objeto_social` (
  `id_obj` int(11) NOT NULL AUTO_INCREMENT,
  `desc_obj` varchar(150) NOT NULL,
  `id_emp_obj` int(11) DEFAULT NULL,
  `vig_obj` int(11) DEFAULT NULL,
  `fec_cre_obj` datetime DEFAULT NULL,
  `usu_cre_obj` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_obj`),
  KEY `fk_emp_obj_idx` (`id_emp_obj`),
  KEY `fk_usu_obj_idx` (`usu_cre_obj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `id_per` int(11) NOT NULL AUTO_INCREMENT,
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
  `clave_sii_per` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_per`),
  KEY `fk_usu_per_idx` (`usu_cre_per`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE IF NOT EXISTS `provincia` (
  `PROVINCIA_ID` int(3) NOT NULL DEFAULT '0',
  `PROVINCIA_NOMBRE` varchar(23) DEFAULT NULL,
  `PROVINCIA_REGION_ID` int(2) DEFAULT NULL,
  PRIMARY KEY (`PROVINCIA_ID`),
  KEY `PROVINCIA_REGION_ID` (`PROVINCIA_REGION_ID`)
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

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `REGION_ID` int(2) NOT NULL DEFAULT '0',
  `REGION_NOMBRE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`REGION_ID`)
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

DROP TABLE IF EXISTS `sociedad`;
CREATE TABLE IF NOT EXISTS `sociedad` (
  `id_soc` int(11) NOT NULL AUTO_INCREMENT,
  `porc_part_soc` int(11) DEFAULT NULL,
  `monto_part_soc` int(11) DEFAULT NULL,
  `id_per_soc` int(11) DEFAULT NULL,
  `id_emp_soc` int(11) DEFAULT NULL,
  `vig_soc` int(11) DEFAULT NULL,
  `fec_cre_soc` datetime DEFAULT NULL,
  `usu_cre_soc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_soc`),
  KEY `fk_emp_soc_idx` (`id_emp_soc`),
  KEY `fk_per_soc_idx` (`id_per_soc`),
  KEY `fk_usu_soc_idx` (`usu_cre_soc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

DROP TABLE IF EXISTS `sucursales`;
CREATE TABLE IF NOT EXISTS `sucursales` (
  `id_suc` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad_suc` int(11) NOT NULL,
  `comuna_suc` int(11) NOT NULL,
  `dir_suc` varchar(150) NOT NULL,
  `id_emp_suc` int(11) DEFAULT NULL,
  `vig_suc` int(11) DEFAULT NULL,
  `fec_cre_suc` datetime DEFAULT NULL,
  `usu_cre_suc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_suc`),
  KEY `fk_emp_suc_idx` (`id_emp_suc`),
  KEY `fk_usu_suc_idx` (`usu_cre_suc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_param`
--

DROP TABLE IF EXISTS `tab_param`;
CREATE TABLE IF NOT EXISTS `tab_param` (
  `id_param` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cod_grupo` varchar(45) DEFAULT NULL,
  `cod_item` varchar(45) DEFAULT NULL,
  `desc_item` varchar(100) DEFAULT NULL,
  `vig_item` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_param`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
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
  `nick_usu` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nom_usu`, `apepat_usu`, `apemat_usu`, `rut_usu`, `mail_usu`, `id_perfil`, `fec_cre_usu`, `cargo_usu`, `pass_usu`, `vig_usu`, `nick_usu`) VALUES
(1, 'patrik', 'pimentel', 'carvacho', '17164970-6', 'ppimentel@andescode.cl', 1, '2019-04-01 00:00:00', 1, '9407c826d8e3c07ad37cb2d13d1cb641', 1, 'ppimentel'),
(2, 'Pablo', 'Vicencio', 'Contreras', '18385191-8', 'pvicencioc@hotmail.cl', 1, '2019-05-02 15:16:04', 1, 'e10adc3949ba59abbe56e057f20f883e', 1, 'pvicencio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_anual`
--

DROP TABLE IF EXISTS `venta_anual`;
CREATE TABLE IF NOT EXISTS `venta_anual` (
  `id_venta` int(11) NOT NULL,
  `monto_venta` int(11) NOT NULL,
  `anio_venta` int(11) NOT NULL,
  `id_emp_venta` int(11) DEFAULT NULL,
  `vig_venta` int(11) DEFAULT NULL,
  `fec_cre_venta` datetime DEFAULT NULL,
  `usu_cre_venta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `fk_emp_venta_idx` (`id_emp_venta`),
  KEY `fk_usu_venta_idx` (`usu_cre_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
