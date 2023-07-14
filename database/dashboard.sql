-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2023 a las 01:01:06
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dashboard`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(75) NOT NULL,
  `descripcion_curso` varchar(500) NOT NULL,
  `imagen_curso` varchar(300) NOT NULL,
  `precio_curso` decimal(10,0) NOT NULL,
  `instructor` varchar(100) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `numParticipantes` int(11) NOT NULL,
  `comentariosCursos` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `descripcion_curso`, `imagen_curso`, `precio_curso`, `instructor`, `fechaInicio`, `fechaFinal`, `numParticipantes`, `comentariosCursos`) VALUES
(1, 'Liderazgo', 'Este curso de Liderazgo está pensado para todos aquellos que queremos desplegar nuestras potencialidades para servir más, llegar más lejos y, sobre todo, para llenarnos de colaboradores agradecidos en esa ruta. A lo largo del curso te iremos mostrando que significa ser un líder y cuáles son las herramientas más prácticas y eficaces para alcanzarlo.', 'https://media.istockphoto.com/id/160993363/es/foto/retrato-de-confianza-mujer-de-negocios-con-equipo-de-negocios-personas-en-el-fondo.jpg?s=1024x1024&w=is&k=20&c=o3LLcHdT5AzSB6ry8QiGVNzDiCBX5T9n6Mzdm1Zns2c=', 20, 'Instructor Juan López Rosario', '2023-07-03', '2023-07-06', 15, ''),
(2, 'Robótica', 'Este curso está diseñado para que cualquier estudiante con conocimientos básicos de electrónica pueda iniciarse en la programación de sistemas embebidos usando Arduino. El único requisito es ser curioso y tener ganas de aprender.', 'https://media.istockphoto.com/id/653876434/es/foto/hermosa-ni%C3%B1a-con-robot-en-la-escuela.jpg?s=1024x1024&w=is&k=20&c=WZeH9otqQ4y7vh6TXz2xirMCd_FnLmwBNFR6_hw94U4=', 15, 'Instrcutora Carmen Ávalos', '2023-06-13', '2023-06-16', 20, 'Se debe actualizar la descripción del curso respectivamente'),
(3, 'Programación Básica', 'Encuentra cursos en línea gratis sobre programación informática, centrados en los lenguajes de programación más importantes y sus aplicaciones en el mundo real (java, python, C y más), aprende sobre tecnologías emergentes como la inteligencia artificial y la inteligencia de negocios y conviértete en un experto de Android y desarrollo de aplicaciones y software.', 'https://media.istockphoto.com/id/1198565184/es/foto/desarrollo-de-programadores-desarrollo-dise%C3%B1o-de-sitios-web-y-tecnolog%C3%ADas-de-codificaci%C3%B3n.jpg?s=1024x1024&w=is&k=20&c=78POlop6MKqGQefXITGfgwZbwjJFaIpoV4rka7YKOOc=', 18, 'Instrcutora Rosario Jiménez', '2023-07-03', '2023-07-05', 10, ''),
(4, 'Asesoria en contabilidad', 'Descubre el curso de asesoría en contabilidad que te llevará al siguiente nivel profesional. Aprende las habilidades necesarias para brindar asesoramiento financiero experto y maximizar el éxito de los negocios. Únete a nuestro programa y obtén conocimientos prácticos, técnicas avanzadas y herramientas indispensables para destacar en el mundo de la contabilidad.', 'https://media.istockphoto.com/id/1161246760/es/vector/planificaci%C3%B3n-de-estrategias-de-la-empresa-an%C3%A1lisis-de-datos-empresariales-concepto.jpg?s=1024x1024&w=is&k=20&c=C0JfzEgVguiXPvtjRLE0OCiJ1vDoVg6Zqq5h0jBganM=', 10, 'Instrcutor Diego Pachecho', '2023-06-26', '2023-06-30', 0, 'Incluir una guía de temas del curso ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo`
--

CREATE TABLE `empleo` (
  `id_empleo` int(11) NOT NULL,
  `nombre_empleo` varchar(100) NOT NULL,
  `descripcion_empleo` varchar(500) NOT NULL,
  `modalidad_empleo` varchar(30) NOT NULL,
  `requisitos_empleo` varchar(200) NOT NULL,
  `salario_empleo` decimal(10,0) NOT NULL,
  `fechaInicio_empleo` date NOT NULL,
  `fechaFinal_empleo` date NOT NULL,
  `disponibilidad_empleo` varchar(40) NOT NULL,
  `comentarios_empleo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleo`
--

INSERT INTO `empleo` (`id_empleo`, `nombre_empleo`, `descripcion_empleo`, `modalidad_empleo`, `requisitos_empleo`, `salario_empleo`, `fechaInicio_empleo`, `fechaFinal_empleo`, `disponibilidad_empleo`, `comentarios_empleo`) VALUES
(1, 'Desarrollador web', 'Desarrollo de aplicaciones web y mantenimiento', 'Tiempo completo', 'Licenciatura en Ciencias de la Computación o similares ', 150, '2023-07-03', '2023-07-05', 'Abierto', 'Se valora la capacidad de trabajo en equipo y la pasión por estar al día con las últimas tecnologías en desarrollo web.'),
(2, 'Asistente administrativo', 'Apoyo en tareas administrativas y atención al cliente', 'Tiempo parcial', 'Estudios secundarios completos y conocimientos en administración ', 100, '2023-06-13', '2023-06-20', 'Cerrado', ''),
(3, 'Ingeniero de software', 'Desarrollo y mantenimiento de sistemas de software', 'Tiempo completo', 'Licenciatura en Ingeniería de Software', 120, '2023-07-07', '2023-07-10', 'Abierto', 'Gran oportunidad para un ingeniero de software experimentado que desea desafíos técnicos y participar en el desarrollo de sistemas de software de última generación.');

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
(5, '2023_06_14_224815_create_sessions_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 2);

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
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_ser` int(11) NOT NULL,
  `nombre_ser` varchar(30) NOT NULL,
  `descripcion_ser` varchar(200) NOT NULL,
  `imagen_ser` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_ser`, `nombre_ser`, `descripcion_ser`, `imagen_ser`) VALUES
(1, 'Mineria de datos', 'La minería de datos o exploración de datos es un campo de la estadística y las ciencias de la computacion', 'https://images.pexels.com/photos/7788009/pexels-photo-7788009.jpeg'),
(2, 'Criptografía', 'La criptografía es el desarrollo de un conjunto de técnicas que permiten alterar y modificar mensaje', 'https://images.pexels.com/photos/7319074/pexels-photo-7319074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(4, 'Marketing', 'Marketing es una palabra anglosajona que quiere decir en español mercadotecnia o técnicas de mercado.', 'https://images.pexels.com/photos/905163/pexels-photo-905163.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(7, 'Analítica de datos ', 'Lanalítica de datos permite a las organizaciones analizar todos sus datos (en tiempo real, histórico)', 'https://images.pexels.com/photos/6476589/pexels-photo-6476589.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(8, 'Toma de decisiones', 'El proceso de toma de decisiones, conocido como ‘decision making’, es un método que consiste en reun', 'https://img.freepik.com/free-photo/man-dressed-with-arrows-his-head_1134-485.jpg?w=740&t=st=1688774322~exp=1688774922~hmac=dffaeb9aa2a63ee648993b90f99dd7d382e7682434253132092d6b11c57f1d09'),
(9, 'Reportes empresariales', 'Un informe empresarial es un documento que comunica el desempeño de la organización con el objetivo ', 'https://images.pexels.com/photos/6476783/pexels-photo-6476783.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');

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
('DK5k6mE9wNIWcfcaDZfplMFbcjDhdjRGxwhMZF06', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVkzTjh5Zmk4R2c5S1lSVndJMVlZYndkbmp4ejRDSlJZTTN0UThSbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXJ2aWNpb3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1689285710),
('ORi9KDAkAPoR8NF1NffJ1fLjKIxP4qLjgBoAKtRQ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQVozOWRXNUR1bVJnYUxleFJuTEIxczlpRjNOUHhsSnpXQ1BoUWVnMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXJ2aWNpb3MiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGVSS1FTUk04ZWJEcnMuN1hHb3FsWE9OMWV0cmNTY0psWHU4RjBsb2lyRmZrREJXZUE2NTdHIjt9', 1689289250);

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$QaaZM2AJJzu4y.3RSvurl.hgMAIS2MnHH.qJOHyc9mjigH40nQoCC', NULL, NULL, NULL, 'Bdcnwhs66Nk522WeUMFYCnjQyIHDkk4FDEtd6bbRrdl8GA6jzk7bbT1ZYTr1', NULL, NULL, '2023-06-15 03:56:48', '2023-06-15 03:56:48'),
(2, 'Esteban', 'pavonesteban15@gmail.com', NULL, '$2y$10$eRKQSRM8ebDrs.7XGoqlXON1etrcScJlXu8F0loirFfkDBWeA657G', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-24 04:29:04', '2023-06-24 04:29:04'),
(3, 'Juan', 'pavonesteban20@gmail.com', NULL, '$2y$10$MyF/.kky5RhBQawHUGF.HOhp7X4m3DxJ3WjAAVlxyN2QTqFP/V1Ii', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-14 03:58:36', '2023-07-14 03:58:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `empleo`
--
ALTER TABLE `empleo`
  ADD PRIMARY KEY (`id_empleo`);

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
-- Indices de la tabla `pagocursos`
--
ALTER TABLE `pagocursos`
  ADD PRIMARY KEY (`id_pagocurso`);

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
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_ser`);

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
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleo`
--
ALTER TABLE `empleo`
  MODIFY `id_empleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pagocursos`
--
ALTER TABLE `pagocursos`
  MODIFY `id_pagocurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_ser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
