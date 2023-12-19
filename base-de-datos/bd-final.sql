-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2023 a las 21:28:00
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto-ex-alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `nombre_admin` varchar(200) NOT NULL,
  `email_admin` varchar(200) NOT NULL,
  `clave_admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`nombre_admin`, `email_admin`, `clave_admin`) VALUES
('doublas', 'doublas@gmail.com', '19d5bf05984d0a222e9d0e493a988376'),
('maglio', 'maglio@gmail.com', '9446089f648d9899f9d59f087c5aa429');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `nombre_usuario` varchar(200) NOT NULL,
  `fecha_egreso` date NOT NULL,
  `area_interes` varchar(200) NOT NULL,
  `trabajo_actual` varchar(200) NOT NULL,
  `email_usuario` varchar(200) NOT NULL,
  `direccion_imagen` varchar(2000) NOT NULL,
  `contacto` varchar(200) NOT NULL,
  `descripcion` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`nombre_usuario`, `fecha_egreso`, `area_interes`, `trabajo_actual`, `email_usuario`, `direccion_imagen`, `contacto`, `descripcion`) VALUES
('Alejandro Felipe Cerda Soto', '2020-11-11', 'DataMining', 'Sin trabajo', 'alejandro.cerda@alumnos.uda.cl', '', '+56 9 8231 2314', 'Alumno'),
('Álvaro Antonio Pereira Cortés', '2022-07-22', '', '', 'alvaro.pereira@alumnos.uda.cl', '', '', ''),
('Benjamín Daniel Rojas Aguirre', '2022-06-10', '', '', 'benjamin.rojas.14@alumnos.uda.cl', '', '', ''),
('Carlos Javier Moller Berríos', '2019-05-06', '', '', 'carlos.moller@alumnos.uda.cl', '', '', ''),
('Carlos Alberto Pizarro Romero', '2021-03-05', '', '', 'carlos.pizarro@alumnos.uda.cl', '', '', ''),
('Carlos Antonio Vernal Navarrete', '2021-01-06', '', '', 'carlos.vernal@alumnos.uda.cl', '', '', ''),
('Claudio Alexis Manzoliz Arias', '2019-01-22', '', '', 'claudio.mazoliz@alumnos.uda.cl', '', '', ''),
('Daniel Andres  Caminada Cortez', '2020-07-11', '', '', 'daniel.caminada@alumnos.uda.cl', '', '', ''),
('David Antonio Rojas Muñoz', '2021-01-07', '', '', 'david.rojas.14@alumnos.uda.cl', '', '', ''),
('Francisca Andrea Mercado Arancibia', '2023-01-18', 'Analisis de Datos', 'Sin trabajo', 'francisca.mercado@alumnos.uda.cl', '../img-ex-alumnos/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (1).png', '+56 9 5873 3824', 'alumna'),
('Gianina Amalia Madrigal López', '2023-11-07', 'Inteligencia Artificial', 'Sin trabajo', 'gianina.madrigal.17@alumnos.uda.cl', '../img-ex-alumnos/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (3).png', '+56 9 2184 5823', 'Alumna'),
('Giovano Stefano Carreño Alzamora ', '2019-06-18', '', '', 'giovano.carreno@alumnos.uda.cl', '', '', ''),
('Giselle Stephanie Santander Rojas', '2019-09-11', '', '', 'giselle.santander@alumnos.uda.cl', '', '', ''),
('Giusselle Tatiana Muñoz Rivera', '2023-08-31', '', '', 'giusselle.munoz.15@alumnos.uda.cl', '', '', ''),
('Gustavo Alejandro Finch Figueroa', '2021-08-18', '', '', 'gustavo.finch@alumnos.uda.cl', '', '', ''),
('Ignacio Jesús Garnica Vilches', '2022-06-14', '', '', 'ignacio.garnica.14@alumnos.uda.cl', '', '', ''),
('Ignacio Sebastián Pizarro Díaz', '2023-01-19', '', '', 'ignacio.pizarro.d@alumnos.uda.cl', '', '', ''),
('Jhon Alexis Angel Godoi', '2019-01-08', '', '', 'jhon.angel@alumnos.uda.cl', '', '', ''),
('Jorge Andrés Palma Villalón', '2021-09-08', '', '', 'jorge.palma@alumnos.uda.cl', '', '', ''),
('Juan Ramón Peña Ortiz', '2023-11-13', '', '', 'juan.pena@alumnos.uda.cl', '', '', ''),
('Karina Estefanía Páez Astudillo', '2021-04-20', '', '', 'karina.paez.13@alumnos.uda.cl', '', '', ''),
('Luis Gonzalo Espejo Tapia', '2022-06-14', '', '', 'luis.espejo.14@alumnos.uda.cl', '', '', ''),
('Maiquel Luis Guerrero Guerrero', '2023-10-02', '', '', 'maiquel.guerrero@alumnos.uda.cl', '', '', ''),
('Maximiliano Ian Frederick Bown Herrera', '2021-03-04', '', '', 'maximiliano.bown@alumnos.uda.cl', '', '', ''),
('Miguel Angel Araya Muñoz', '2023-06-05', '', '', 'miguel.araya@alumnos.uda.cl', '', '', ''),
('Patricia Andrea Quezada Olivares', '2022-06-23', '', '', 'patricia.quezada@alumnos.uda.cl', '', '', ''),
('Pedro Alberto Pérez Pons', '2022-09-27', '', '', 'pedro.perez@alumnos.uda.cl', '', '', ''),
('Rodolfo Manuel Barraza Campos', '2023-08-31', '', '', 'rodolfo.barraza.15@alumnos.uda.cl', '', '', ''),
('Rubén Leandro Hidalgo Álvarez', '2019-03-05', '', '', 'ruben.hidalgo@alumnos.uda.cl', '', '', ''),
('Sebastián Ignacio Toledo Rojas', '2022-10-19', '', '', 'sebastian.toledo.14@alumnos.uda.cl', '', '', ''),
('Sergio Daniel Torrealba Venegas', '2023-03-20', '', '', 'sergio.torrealba@alumnos.uda.cl', '', '', ''),
('Valentín Ernesto Vargas Saavedra', '0000-00-00', '', '', 'valentin.vargas.16@alumnos.uda.cl', '', '', ''),
('Víctor Iván Ortega Díaz', '2019-06-20', '', '', 'victor.ortega@alumnos.uda.cl', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleos`
--

CREATE TABLE `empleos` (
  `id_empleo` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `sueldo` varchar(200) NOT NULL,
  `archivo` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleos`
--

INSERT INTO `empleos` (`id_empleo`, `titulo`, `empresa`, `ciudad`, `descripcion`, `sueldo`, `archivo`) VALUES
(2, 'Analista Soporte TI', 'SAMEX SPA.', 'Santiago, Región Metropolitana', 'FUNCIONES PRINCIPALES\r\n\r\nEjecutar trabajos de soporte computacional de hardware y software.\r\nManejo de plataformas corporativas.\r\nConocimiento en nuevas tecnologías.\r\nIdeal conocimiento en electricidad, electrónica y mecánica.\r\nSoporte informático en plataformas a nivel funcional, Windows, Linux, infraestructura, método de integración de sistemas', '1.000.001', '../archivos-empleos/manual-marca-v3.pdf'),
(9, 'Asistente Informático Desarrollo Software', 'Google', 'Copiapó, Región de Atacama', 'Este perfil es poco común dado que pocos se especializan en ambas partes del desarrollo. Tener conocimientos de programación frontend y backend en un mismo perfil es muy valorado en la industria TI, sin embargo, también hay empleadores que prefieren dividir estas áreas para tener mayor control de sus procesos.', '600.000', '../archivos-empleos/prueba.pdf'),
(10, 'Soporte Servidores', 'Conexión Digital SpA', 'Santiago, Región Metropolitana', 'Nos encontramos en la búsqueda de un/a Soporte Informático, para formar parte del área de TI y Transformación digital en nuestra planta de Maipu. Este cargo es responsable de realizar la instalación, configuración y puesta en funcionamiento de equipos nuevos; instalación de software, diagnóstico y reparación de hardware, configuración de redes. Además de asesorar y capacitar a los/las usuarios/as para maximizar los resultados que se obtengan de los medios informáticos.', '950.000', '../archivos-empleos/manual-marca-v3.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `nombre_evento` varchar(200) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `direccion_imagen` varchar(1000) NOT NULL,
  `inicio` datetime NOT NULL,
  `final` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `nombre_evento`, `ubicacion`, `direccion_imagen`, `inicio`, `final`) VALUES
(1, 'Charla CloudAzure', 'Lab-Olimpo', '../flyer/flayer.jpg', '2023-12-29 13:00:00', '2023-12-29 14:00:00'),
(2, 'Charla Google', 'Diic-2', '../flyer/flyer3.jpg', '2023-12-30 10:00:00', '2023-12-30 15:00:00'),
(3, 'Generacion 2018', 'Lab-Olimpo', '../flyer/flyer2.jpg', '2023-12-26 10:00:00', '2023-12-26 12:00:00'),
(44, 'Taller I.A', 'Lab-Melquiades', '../flyer/flayer5.png', '2023-12-30 12:00:00', '2023-12-30 15:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mentorias`
--

CREATE TABLE `mentorias` (
  `id_mentoria` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `inicio` date NOT NULL,
  `contacto` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `id_peticion` int(11) NOT NULL,
  `nombre_peticion` varchar(200) NOT NULL,
  `email_peticion` varchar(200) NOT NULL,
  `area_interes` varchar(200) NOT NULL,
  `trabajo_actual` varchar(200) NOT NULL,
  `contacto_peticion` varchar(200) NOT NULL,
  `descripcion_peticion` varchar(2000) NOT NULL,
  `direccion_imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id_peticion`, `nombre_peticion`, `email_peticion`, `area_interes`, `trabajo_actual`, `contacto_peticion`, `descripcion_peticion`, `direccion_imagen`) VALUES
(34, 'asd', 'alejandro.cerda@alumnos.uda.cl', 'Inteligencia Artificial', 'Sin trabajo', '+56 9 2184 5822', 'Alumno', '../img-ex-alumnos/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (2).png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulaciones`
--

CREATE TABLE `postulaciones` (
  `id_postulacion` int(11) NOT NULL,
  `email_alumno` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`email_admin`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`email_usuario`);

--
-- Indices de la tabla `empleos`
--
ALTER TABLE `empleos`
  ADD PRIMARY KEY (`id_empleo`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `mentorias`
--
ALTER TABLE `mentorias`
  ADD PRIMARY KEY (`id_mentoria`);

--
-- Indices de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD PRIMARY KEY (`id_peticion`);

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`id_postulacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleos`
--
ALTER TABLE `empleos`
  MODIFY `id_empleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `mentorias`
--
ALTER TABLE `mentorias`
  MODIFY `id_mentoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  MODIFY `id_peticion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  MODIFY `id_postulacion` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
