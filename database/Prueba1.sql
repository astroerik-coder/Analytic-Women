-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2023 a las 14:15:40
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
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `ID_BLG` int(11) NOT NULL,
  `ID_CLT` int(11) DEFAULT NULL,
  `ID_COM` int(11) DEFAULT NULL,
  `ID_CAT` int(11) DEFAULT NULL,
  `TITULO_BLG` varchar(256) DEFAULT NULL,
  `VALORACION_BLG` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID_CAT` int(11) NOT NULL,
  `NOMBRE_CAT` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID_CAT`, `NOMBRE_CAT`, `created_at`, `updated_at`) VALUES
(1, 'Educación', '2023-07-17 02:20:07', '2023-07-17 02:20:07'),
(2, 'Física', '2023-07-17 02:34:47', '2023-07-17 02:34:47'),
(3, 'Mujeres', '2023-07-17 02:35:40', '2023-07-17 02:35:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `ID_CIU` int(11) NOT NULL,
  `ID_PRO` int(11) DEFAULT NULL,
  `NOMBRE_CIU` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`ID_CIU`, `ID_PRO`, `NOMBRE_CIU`, `updated_at`, `created_at`) VALUES
(1, 19, 'Quito', NULL, NULL),
(2, 10, 'Guayaquil', NULL, NULL),
(3, 1, 'Cuenca', NULL, NULL),
(4, 2, 'Guaranda', NULL, NULL),
(5, 3, 'Azogues', NULL, NULL),
(6, 4, 'Tulcán', NULL, NULL),
(7, 5, 'Riobamba', NULL, NULL),
(8, 6, 'Latacunga', NULL, NULL),
(9, 7, 'Machala', NULL, NULL),
(10, 8, 'Esmeraldas', NULL, NULL),
(11, 9, 'Puerto Ayora', NULL, NULL),
(12, 10, 'Guayaquil', NULL, NULL),
(13, 11, 'Ibarra', NULL, NULL),
(14, 12, 'Loja', NULL, NULL),
(15, 13, 'Babahoyo', NULL, NULL),
(16, 14, 'Portoviejo', NULL, NULL),
(17, 15, 'Macas', NULL, NULL),
(18, 16, 'Tena', NULL, NULL),
(19, 17, 'El Coca', NULL, NULL),
(20, 18, 'Puyo', NULL, NULL),
(21, 19, 'Quito', NULL, NULL),
(22, 20, 'Santa Elena', NULL, NULL),
(23, 21, 'Santo Domingo', NULL, NULL),
(24, 22, 'Nueva Loja', NULL, NULL),
(25, 23, 'Ambato', NULL, NULL),
(26, 24, 'Zamora', NULL, NULL),
(27, 19, 'Quito', NULL, NULL),
(28, 16, 'Archidona', NULL, NULL),
(29, 2, 'Caluma', NULL, NULL),
(30, 6, 'Salcedo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_CLT` int(11) NOT NULL,
  `ID_EMPR` int(11) DEFAULT NULL,
  `ID_GEN` int(11) DEFAULT NULL,
  `ID_PRO` int(11) DEFAULT NULL,
  `ID_EMP` int(11) DEFAULT NULL,
  `NOMBRE_CLT` varchar(100) DEFAULT NULL,
  `FECHA_NACIMIENTO_CLT` date DEFAULT NULL,
  `TELEFONO1_CLT` varchar(13) DEFAULT NULL,
  `TELEFONO2_CLT` varchar(13) DEFAULT NULL,
  `EMAIL_CLT` varchar(1024) DEFAULT NULL,
  `TITULO_CLT` varchar(1024) DEFAULT NULL,
  `ROL_CLT` varchar(1024) DEFAULT NULL,
  `EXPERIENCIA_CLT` varchar(1024) DEFAULT NULL,
  `FOTO_CLT` varchar(1023) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_CLT`, `ID_EMPR`, `ID_GEN`, `ID_PRO`, `ID_EMP`, `NOMBRE_CLT`, `FECHA_NACIMIENTO_CLT`, `TELEFONO1_CLT`, `TELEFONO2_CLT`, `EMAIL_CLT`, `TITULO_CLT`, `ROL_CLT`, `EXPERIENCIA_CLT`, `FOTO_CLT`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 1, 1, 'Juan Pérez', '1990-01-15', '123456789', '987654321', 'juan@example.com', 'Licenciado en Administración', 'Administrador', '5 años de experiencia en el campo de la administración', 'foto1.jpg', '2023-07-11 09:00:00', '2023-07-11 09:00:00'),
(2, 2, 2, 2, 2, 'María González', '1985-07-25', '111111111', '222222222', 'maria@example.com', 'Ingeniera de Sistemas', 'Desarrolladora', '10 años de experiencia en desarrollo de software', 'foto2.jpg', '2023-07-11 09:00:00', '2023-07-11 09:00:00'),
(3, 1, 2, 3, 3, 'Pedro Rodríguez', '1992-03-10', '333333333', '444444444', 'pedro@example.com', 'Arquitecto', 'Diseñador', '7 años de experiencia en diseño arquitectónico', 'foto3.jpg', '2023-07-11 09:00:00', '2023-07-11 09:00:00'),
(4, 3, 1, 2, 4, 'Ana López', '1988-11-08', '555555555', '666666666', 'ana@example.com', 'Contadora Pública', 'Contadora', '6 años de experiencia en el área de contabilidad', 'foto4.jpg', '2023-07-11 09:00:00', '2023-07-11 09:00:00'),
(5, 2, 2, 1, 5, 'Carlos Martínez', '1995-06-20', '777777777', '888888888', 'carlos@example.com', 'Ingeniero Civil', 'Ingeniero', '4 años de experiencia en proyectos de construcción', 'foto5.jpg', '2023-07-11 09:00:00', '2023-07-11 09:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `ID_COM` int(11) NOT NULL,
  `CONTENIDO_COM` varchar(1024) DEFAULT NULL,
  `FECHA_PUBLICACION_COM` date DEFAULT NULL,
  `REVISION_COM` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) NOT NULL,
  `apellidos` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `mensaje` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `ID_CONT` int(11) NOT NULL,
  `NOMBRE_CONT` varchar(256) DEFAULT NULL,
  `TELEFONO1_CONT` varchar(13) DEFAULT NULL,
  `TELEFONO2_CONT` varchar(13) DEFAULT NULL,
  `EMAIL1_CONT` varchar(256) DEFAULT NULL,
  `EMAIL2_CONT` varchar(256) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `ID_CUR` int(11) NOT NULL,
  `ID_CLT` int(11) DEFAULT NULL,
  `NOMBRE_CUR` varchar(100) DEFAULT NULL,
  `DESCRIPCION_CUR` varchar(1024) DEFAULT NULL,
  `PUBLICO_CUR` varchar(50) DEFAULT NULL,
  `EDAD_MINIMA_CUR` varchar(10) DEFAULT NULL,
  `EDAD_MAXIMA_CUR` varchar(10) DEFAULT NULL,
  `LINK_CUR` varchar(1024) DEFAULT NULL,
  `CUPOS_CUR` int(11) DEFAULT NULL,
  `COSTO_CUR` decimal(11,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`ID_CUR`, `ID_CLT`, `NOMBRE_CUR`, `DESCRIPCION_CUR`, `PUBLICO_CUR`, `EDAD_MINIMA_CUR`, `EDAD_MAXIMA_CUR`, `LINK_CUR`, `CUPOS_CUR`, `COSTO_CUR`, `created_at`, `updated_at`) VALUES
(1, 1, 'Curso de M', 'Aprende estrategias de marketing digital para promover tu negocio en línea', 'Público en general', '18', NULL, 'https://www.ejemplo.com/curso-marketing-digital', 30, 150, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(2, 2, 'Curso de I', 'Mejora tus habilidades de conversación y comprensión del idioma inglés', 'Público en general', '16', NULL, 'https://www.ejemplo.com/curso-ingles-avanzado', 25, 200, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(3, 1, 'Curso de P', 'Aprende a desarrollar aplicaciones web utilizando diferentes tecnologías', 'Público en general', '18', NULL, 'https://www.ejemplo.com/curso-programacion-web', 20, 180, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(4, 3, 'Curso de F', 'Domina las técnicas de la fotografía digital y crea imágenes impresionantes', 'Público en general', '16', NULL, 'https://www.ejemplo.com/curso-fotografia-digital', 15, 250, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(5, 4, 'Curso de C', 'Descubre los secretos de la cocina internacional y prepara deliciosos platos', 'Público en general', '3', NULL, 'https://www.ejemplo.com/curso-cocina-internacional', 20, 180, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(6, 5, 'Curso de M', 'Aprende a utilizar las redes sociales como herramienta de marketing efectiva', 'Público en general', '5', NULL, 'https://www.ejemplo.com/curso-marketing-redes-sociales', 25, 150, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(7, 5, 'Curso de Y', 'Practica yoga y aprende técnicas de meditación para mejorar tu bienestar', 'Público en general', '16', NULL, 'https://www.ejemplo.com/curso-yoga-meditacion', 30, 120, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(8, 1, 'Curso de F', 'Aprende a capturar la belleza de los paisajes en tus fotografías', 'Público en general', '16', NULL, 'https://www.ejemplo.com/curso-fotografia-paisajes', 20, 150, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(9, 2, 'Curso de M', 'Descubre cómo generar ingresos a través del marketing de afiliados', 'Público en general', '18', NULL, 'https://www.ejemplo.com/curso-marketing-afiliados', 25, 180, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(10, 3, 'Curso de R', 'Aprende a elaborar postres creativos y decorativos', 'Público en general', '16', NULL, 'https://www.ejemplo.com/curso-reposteria-creativa', 20, 200, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(11, 1, 'Curso de F', 'Aprende a capturar expresiones y emociones en fotografías de retratos', 'Público en general', '16', NULL, 'https://www.ejemplo.com/curso-fotografia-retratos', 15, 180, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(12, 2, 'Curso de D', 'Potencia tus habilidades personales y alcanza tus metas', 'Público en general', '18', NULL, 'https://www.ejemplo.com/curso-desarrollo-personal', 30, 150, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(13, 1, 'Curso de M', 'Aprende a utilizar Instagram para promover tu marca o negocio', 'Público en general', '18', NULL, 'https://www.ejemplo.com/curso-marketing-instagram', 25, 150, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(14, 3, 'Curso de A', 'Explora la creatividad a través del arte abstracto y desarrolla tu estilo propio', 'Público en general', '4', NULL, 'https://www.ejemplo.com/curso-arte-abstracto', 20, 180, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(15, 4, 'Curso de M', 'Aprende a crear y distribuir contenido de calidad para atraer audiencia', 'Público en general', '18', NULL, 'https://www.ejemplo.com/curso-marketing-contenidos', 25, 150, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(16, 3, 'Curso de F', 'Captura la belleza de la naturaleza a través de la fotografía', 'Público en general', '16', NULL, 'https://www.ejemplo.com/curso-fotografia-naturaleza', 20, 160, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(17, 3, 'Curso de D', 'Aprende a crear diseños de moda y desarrolla tu propio estilo', 'Público en general', '16', NULL, 'https://www.ejemplo.com/curso-diseno-moda', 25, 200, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(18, 2, 'Curso de M', 'Aprende a utilizar Facebook para promover tu negocio y llegar a más clientes', 'Público en general', '18', NULL, 'https://www.ejemplo.com/curso-marketing-facebook', 30, 150, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(19, 2, 'Curso de F', 'Aprende a capturar los momentos más especiales de una boda', 'Público en general', '18', NULL, 'https://www.ejemplo.com/curso-fotografia-bodas', 20, 180, '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(20, 1, 'Curso de D', 'Aprende a crear aplicaciones móviles para Android y iOS', 'Público en general', '18', NULL, 'https://www.ejemplo.com/curso-desarrollo-aplicaciones-moviles', 25, 200, '2023-07-11 14:00:00', '2023-07-11 14:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscontact`
--

CREATE TABLE `datoscontact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `direccion` varchar(191) NOT NULL,
  `telefono` varchar(191) NOT NULL,
  `mensaje` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleos`
--

CREATE TABLE `empleos` (
  `ID_EMP` int(11) NOT NULL,
  `NOMBRE_EMP` varchar(256) DEFAULT NULL,
  `DESCRIPCION_EMP` varchar(1024) DEFAULT NULL,
  `MODALIDAD_EMP` varchar(256) DEFAULT NULL,
  `HORARIO_EMP` time DEFAULT NULL,
  `FECHA_PUBLICACION_EMP` date DEFAULT NULL,
  `EXPERIENCIA_EMP` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleos`
--

INSERT INTO `empleos` (`ID_EMP`, `NOMBRE_EMP`, `DESCRIPCION_EMP`, `MODALIDAD_EMP`, `HORARIO_EMP`, `FECHA_PUBLICACION_EMP`, `EXPERIENCIA_EMP`, `created_at`, `updated_at`) VALUES
(1, 'Desarrollador Web', 'Responsable de desarrollar y mantener sitios web', 'Tiempo completo', '00:00:00', '2023-07-11', '2 años de experiencia en desarrollo web', '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(2, 'Asistente Administrativo', 'Encargado de apoyar en las tareas administrativas y de oficina', 'Medio tiempo', '00:00:00', '2023-07-11', 'Experiencia previa en labores administrativas', '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(3, 'Diseñador Gráfico', 'Encargado de crear diseños gráficos para materiales promocionales', 'Tiempo completo', '00:00:00', '2023-07-11', 'Experiencia en el uso de herramientas de diseño gráfico', '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(4, 'Contador', 'Responsable de llevar los registros contables de la empresa', 'Tiempo completo', '00:00:00', '2023-07-11', 'Experiencia en contabilidad y manejo de software contable', '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(5, 'Ejecutivo de Ventas', 'Encargado de gestionar y cerrar ventas de productos y servicios', 'Tiempo completo', '00:00:00', '2023-07-11', 'Experiencia en ventas y habilidades de negociación', '2023-07-11 14:00:00', '2023-07-11 14:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `ID_EMPR` int(11) NOT NULL,
  `NOMBRE_EMPR` varchar(256) DEFAULT NULL,
  `LOGO_EMPR` varchar(1023) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`ID_EMPR`, `NOMBRE_EMPR`, `LOGO_EMPR`, `created_at`, `updated_at`) VALUES
(1, 'Empresa 1', 'logo1.jpg', '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(2, 'Empresa 2', 'logo2.jpg', '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(3, 'Empresa 3', 'logo3.jpg', '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(4, 'Empresa 4', 'logo4.jpg', '2023-07-11 14:00:00', '2023-07-11 14:00:00'),
(5, 'Empresa 5', 'logo5.jpg', '2023-07-11 14:00:00', '2023-07-11 14:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `ID_EVT` int(11) NOT NULL,
  `NOMBRE_EVT` varchar(256) DEFAULT NULL,
  `DESCRIPCION_EVT` varchar(1024) DEFAULT NULL,
  `FECHA_EVT` date DEFAULT NULL,
  `HORA_EVT` time DEFAULT NULL,
  `OBSERVACIONES_EVT` varchar(1024) DEFAULT NULL,
  `UBICACION_EVT` varchar(1024) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`ID_EVT`, `NOMBRE_EVT`, `DESCRIPCION_EVT`, `FECHA_EVT`, `HORA_EVT`, `OBSERVACIONES_EVT`, `UBICACION_EVT`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'Conferencia de Marketing', 'Conferencia sobre estrategias de marketing digital', '2023-07-15', '14:00:00', 'Evento dirigido a profesionales de marketing y emprendedores', 'Centro de Convenciones', '2023-07-11 09:00:00', '2023-07-11 09:00:00', NULL),
(2, 'Concierto de Jazz', 'Concierto en vivo de música jazz', '2023-07-20', '19:30:00', 'Presentación de reconocidos músicos de jazz', 'Teatro Municipal', '2023-07-11 09:00:00', '2023-07-11 09:00:00', NULL),
(3, 'Exposición de Arte Moderno', 'Exposición de obras de artistas contemporáneos', '2023-07-25', '10:00:00', 'Muestra de arte moderno con enfoque en pintura y escultura', 'Galería de Arte Urbano', '2023-07-11 09:00:00', '2023-07-11 09:00:00', NULL),
(4, 'Seminario de Negocios', 'Seminario sobre estrategias empresariales', '2023-07-18', '16:00:00', 'Aprendizaje de técnicas de negocios y emprendimiento', 'Hotel Grand', '2023-07-11 09:00:00', '2023-07-11 09:00:00', NULL),
(5, 'Feria de Tecnología', 'Exposición de los últimos avances tecnológicos', '2023-07-22', '11:00:00', 'Demostración de productos y servicios tecnológicos', 'Centro de Convenciones', '2023-07-11 09:00:00', '2023-07-11 09:00:00', NULL),
(6, 'Taller de Fotografía', 'Taller práctico de fotografía digital', '2023-07-19', '15:30:00', 'Aprendizaje de técnicas de fotografía y composición', 'Estudio Fotográfico Creativo', '2023-07-11 09:00:00', '2023-07-11 09:00:00', NULL),
(7, 'Conferencia de Salud Mental', 'Charla sobre el cuidado de la salud mental', '2023-07-17', '18:00:00', 'Consejos para mantener una buena salud mental', 'Centro Comunitario de Salud', '2023-07-11 09:00:00', '2023-07-11 09:00:00', NULL),
(8, 'Festival Gastronómico', 'Degustación de platos de la cocina local', '2023-07-23', '19:00:00', 'Celebración de la diversidad culinaria de la región', 'Plaza Central', '2023-07-11 09:00:00', '2023-07-11 09:00:00', NULL),
(9, 'Feria de Empleo', 'Oportunidades laborales para diferentes perfiles', '2023-07-16', '10:00:00', 'Encuentra tu próximo empleo en la feria de empleo', 'Centro de Convenciones', '2023-07-11 09:00:00', '2023-07-11 09:00:00', NULL),
(10, 'Concierto de Rock', 'Concierto en vivo de bandas de rock', '2023-07-21', '20:00:00', 'Disfruta de la energía del rock en un concierto increíble', 'Estadio Municipal', '2023-07-11 09:00:00', '2023-07-11 09:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `ID_GEN` int(11) NOT NULL,
  `NOMBRE_GEN` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`ID_GEN`, `NOMBRE_GEN`, `created_at`, `updated_at`) VALUES
(1, 'Masculino', NULL, NULL),
(2, 'Femenino', NULL, NULL),
(3, 'No binario', NULL, NULL),
(4, 'Género fluido', NULL, NULL),
(5, 'Agénero', NULL, NULL),
(6, 'Bigénero', NULL, NULL),
(7, 'Pangénero', NULL, NULL),
(8, 'Transexual', NULL, NULL),
(9, 'Intersexo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informaciones`
--

CREATE TABLE `informaciones` (
  `ID_INF` int(11) NOT NULL,
  `ID_RDS` int(11) DEFAULT NULL,
  `ID_CONT` int(11) DEFAULT NULL,
  `MISION` varchar(1024) DEFAULT NULL,
  `VISION` varchar(1024) DEFAULT NULL,
  `CULTURA_ORGANIZACIONAL` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_10_031033_create_sessions_table', 1),
(7, '2023_06_22_021629_datoscontact', 1),
(8, '2023_07_14_011435_contactanos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagocursos`
--

CREATE TABLE `pagocursos` (
  `id_pagocurso` int(11) NOT NULL,
  `nombrePersona` varchar(100) NOT NULL,
  `cursoPagado` varchar(100) NOT NULL,
  `montoPagado` decimal(10,0) NOT NULL,
  `metodoPago` varchar(50) NOT NULL,
  `fechaPago` date NOT NULL,
  `estadoPago` varchar(20) NOT NULL,
  `comentariosPago` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagocursos`
--

INSERT INTO `pagocursos` (`id_pagocurso`, `nombrePersona`, `cursoPagado`, `montoPagado`, `metodoPago`, `fechaPago`, `estadoPago`, `comentariosPago`) VALUES
(1, 'Juan Pérez Ochoa', 'Liderazgo', 20, 'Efectivo', '2023-07-03', 'Cancelado', ''),
(2, 'Maria Lucia Segovia', 'Programación Básica', 18, 'Tarjeta de crédito', '2023-07-06', 'Pendiente', 'Se debe verificar el método de pago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `ID_EMP` int(11) DEFAULT NULL,
  `ID_CUR` int(11) DEFAULT NULL,
  `ID_PAG` int(11) NOT NULL,
  `NOMBRE_PAG` varchar(100) DEFAULT NULL,
  `METODO_PAG` varchar(100) DEFAULT NULL,
  `FECHA_PAG` date DEFAULT NULL,
  `MONTO_PAG` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `ID_PRO` int(11) NOT NULL,
  `NOMBRE_PRO` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`ID_PRO`, `NOMBRE_PRO`, `created_at`, `updated_at`) VALUES
(1, 'Azuay', NULL, NULL),
(2, 'Bolívar', NULL, NULL),
(3, 'Cañar', NULL, NULL),
(4, 'Carchi', NULL, NULL),
(5, 'Chimborazo', NULL, NULL),
(6, 'Cotopaxi', NULL, NULL),
(7, 'El Oro', NULL, NULL),
(8, 'Esmeraldas', NULL, NULL),
(9, 'Galápagos', NULL, NULL),
(10, 'Guayas', NULL, NULL),
(11, 'Imbabura', NULL, NULL),
(12, 'Loja', NULL, NULL),
(13, 'Los Ríos', NULL, NULL),
(14, 'Manabí', NULL, NULL),
(15, 'Morona Santiago', NULL, NULL),
(16, 'Napo', NULL, NULL),
(17, 'Orellana', NULL, NULL),
(18, 'Pastaza', NULL, NULL),
(19, 'Pichincha', NULL, NULL),
(20, 'Santa Elena', NULL, NULL),
(21, 'Santo Domingo de los Tsáchilas', NULL, NULL),
(22, 'Sucumbíos', NULL, NULL),
(23, 'Tungurahua', NULL, NULL),
(24, 'Zamora Chinchipe', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `ID_RDS` int(11) NOT NULL,
  `FACEBOOK` varchar(1024) DEFAULT NULL,
  `INSTAGRAM` varchar(1024) DEFAULT NULL,
  `LINKEDIN` varchar(1024) DEFAULT NULL,
  `TIKTOK` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`ID_RDS`, `FACEBOOK`, `INSTAGRAM`, `LINKEDIN`, `TIKTOK`, `created_at`, `updated_at`) VALUES
(1, 'facebook.com/usuario1', 'instagram.com/usuario1', 'linkedin.com/in/usuario1', 'tiktok.com/@usuario1', NULL, NULL),
(2, 'facebook.com/usuario2', 'instagram.com/usuario2', 'linkedin.com/in/usuario2', 'tiktok.com/@usuario2', NULL, NULL),
(3, 'facebook.com/usuario3', 'instagram.com/usuario3', 'linkedin.com/in/usuario3', 'tiktok.com/@usuario3', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `ID_SER` int(11) NOT NULL,
  `ID_CLT` int(11) DEFAULT NULL,
  `NOMBRE_SER` varchar(100) DEFAULT NULL,
  `DESCRIPCION_SER` varchar(1023) DEFAULT NULL,
  `OBSERVACIONES_SER` varchar(1023) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`ID_SER`, `ID_CLT`, `NOMBRE_SER`, `DESCRIPCION_SER`, `OBSERVACIONES_SER`) VALUES
(1, 1, 'Minería de datos', 'La minería de datos o exploración de datos es un campo de la estadística y las ciencias de la computación', 'https://images.pexels.com/photos/7788009/pexels-photo-7788009.jpeg'),
(2, 1, 'Criptografía', 'La criptografía es el desarrollo de un conjunto de técnicas que permiten alterar y modificar mensajes', 'https://images.pexels.com/photos/7319074/pexels-photo-7319074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(4, 1, 'Marketing', 'Marketing es una palabra anglosajona que significa en español mercadotecnia o técnicas de mercado.', 'https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(7, 1, 'Analítica de datos', 'La analítica de datos permite a las organizaciones analizar todos sus datos (en tiempo real, histórico)', 'https://images.pexels.com/photos/6476589/pexels-photo-6476589.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(8, 1, 'Toma de decisiones', 'El proceso de toma de decisiones, conocido como \"decision making\", es un método que consiste en reunir', 'https://img.freepik.com/free-photo/man-dressed-with-arrows-his-head_1134-485.jpg?w=740&t=st=1688774322~exp=1688774922~hmac=dffaeb9aa2a63ee648993b90f99dd7d382e7682434253132092d6b11c57f1d09'),
(9, 1, 'Reportes empresariales', 'Un informe empresarial es un documento que comunica el desempeño de la organización con el objetivo', 'https://images.pexels.com/photos/6476783/pexels-photo-6476783.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('r2f0kg6CwJvL1QferfoinEBweIzLgy23WN0MzEBw', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiS0JVQ0FXdEIyM1VMWHBnem12MkVnNVk1NEZ0aUkyY1RnQXRuNEJraCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaXVkYWRlcz9wYWdlPTIiO31zOjU6ImxvZ2luIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDVUQ3Y2UldRTzVyd1NXbUNnOUVBOU9zUTBpMDZXSjVxYnJIN0Q4aEVCVU82TXBBUDc5UEEuIjt9', 1689546255),
('rI0ZbdAlBM9itRCWCdgxJbZAYpQnUu9M6WDv17Ah', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiMmRhUHREOENlUU4zbzRXaG9LY2Z5eWtSeHBRZk8wQmhieG84MWFZUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvY2F0ZWdvcmlhcyI7fXM6NToibG9naW4iO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkNVRDdjZSV1FPNXJ3U1dtQ2c5RUE5T3NRMGkwNldKNXFickg3RDhoRUJVTzZNcEFQNzlQQS4iO30=', 1690210131);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ZEWRATwfOtE.0DjW29RiRePBt0tZPZ75ThDcnWMBk38czCzO1okB2', NULL, NULL, NULL, 'DAixipD8IiBOud10tUiWiiBYnqCmKRemI8nHfAsLld3exMf8tHTNy6uMOLLL', NULL, NULL, '2023-07-11 09:00:23', '2023-07-11 09:00:23'),
(2, 'erik', 'dani008molina@gmail.com', NULL, '$2y$10$5TCv6RWQO5rwSWmCg9EA9OsQ0i06WJ5qbrH7D8hEBUO6MpAP79PA.', 'eyJpdiI6Iit1eXZTdmVMWG50Z1BDWlR5NnZETUE9PSIsInZhbHVlIjoiUDR6c21ZaHFlTnhQbmI4T21aN2FxeVFtQWN0ek9XV3I0QmZrVDJBTE4yOD0iLCJtYWMiOiJjY2RiMDdlNzZjMGFjMWJlMjA2OTVjYTQ1MmIxMjM1MDc2NzU0MThkMTg2YTMzNDJlNGZkNDhiOGFlNDFjMGI2IiwidGFnIjoiIn0=', 'eyJpdiI6IllHUUlpcTZzRVBvZjVXdHlwVTFIZHc9PSIsInZhbHVlIjoiMm1FbCtHbTEyd3RURFJBak40RXR2VkRrRXRTNjM2Y2loczFTMXlaWGZoQmlBSHRCVnJlQ252a2I5dURpRHdKL3lXVWRTR1dIUVNpUmRXRHJnSXNtTGc0cFBxSGFwTHJ1QmpxVGVBNW94VXExdERsN3M3alNDMFVmKzA3T0xQUnU5RU5rK3BiUkxuL0trekRheDlBOUxzb3hnQ09PZkwwcUpRYXFXUWNaRjV6TTQ1eFRMRllhQVVudFhWcEpJd0o0Wk1kd3YvMzNkM0FnQjFvd1B6V3Y1YXlOMWpBR0FaRDZmZi9JUjdlcmM0Z0taUXBOcUdRdWxFZXc1SmhhYmtONVFJb29ERlFmNHg0cTFXU04xUmhSK3c9PSIsIm1hYyI6IjM0MWRmN2E5MWI3MjZmZWMxYTUwNjEyYmI0NWRhYzA1MTNkMjNkNTIzN2FkMzM4MGQyNTFmZGJhN2I5NWQ2MWIiLCJ0YWciOiIifQ==', '2023-07-14 03:59:07', 'p2bchX5u7nYQaYxjRs9sb1u8BBXmvvcR8viP909TxwVpR7sOe3fke0H8q1lN', NULL, NULL, '2023-07-14 03:22:37', '2023-07-14 03:59:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`ID_BLG`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_COM`),
  ADD KEY `FK_RELATIONSHIP_11` (`ID_CLT`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_CAT`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_CAT`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`ID_CIU`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_PRO`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_CLT`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_EMPR`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_GEN`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_PRO`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_EMP`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID_COM`);

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datoscontact`
--
ALTER TABLE `datoscontact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datoscontact`
--
ALTER TABLE `datoscontact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
