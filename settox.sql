-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-02-2019 a las 11:37:29
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `settox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erlazioa`
--

CREATE TABLE `erlazioa` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `idEskaintzak` int(10) UNSIGNED NOT NULL,
  `interes_Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `erlazioa`
--

INSERT INTO `erlazioa` (`email`, `idEskaintzak`, `interes_Data`) VALUES
('a@a.com', 1, '2019-02-07 07:46:05'),
('a@a.com', 2, '2019-02-07 07:46:23'),
('a@a.com', 3, '2019-02-07 07:46:32'),
('a@a.com', 4, '2019-02-07 07:46:14'),
('benjas@gmail.com', 1, '2019-02-07 07:46:40'),
('benjas@gmail.com', 2, '2019-02-07 07:47:00'),
('benjas@gmail.com', 3, '2019-02-07 07:47:08'),
('benjas@gmail.com', 4, '2019-02-07 07:46:51'),
('prueba@prueba.com', 1, '2019-02-07 07:47:45'),
('prueba@prueba.com', 2, '2019-02-07 07:48:02'),
('prueba@prueba.com', 4, '2019-02-07 07:47:54'),
('ruedaslocas@gmail.com', 3, '2019-02-07 07:48:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eskaintzak`
--

CREATE TABLE `eskaintzak` (
  `idEskaintzak` int(10) UNSIGNED NOT NULL,
  `enpresa_Izena` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `lan_Postua` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `hasierako_Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amaierako_Data` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deskripzioa` text COLLATE utf8_unicode_ci NOT NULL,
  `plaza_Hutsak` int(11) NOT NULL,
  `departamentua` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `eskaintzak`
--

INSERT INTO `eskaintzak` (`idEskaintzak`, `enpresa_Izena`, `lan_Postua`, `hasierako_Data`, `amaierako_Data`, `deskripzioa`, `plaza_Hutsak`, `departamentua`) VALUES
(1, 'accenture', 'software developer', '2019-02-07 07:37:37', '2019-02-13 23:00:00', 'jaaaaaaajajajajajajajajaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 3, 'informatika'),
(2, 'ibermatica', 'software developer', '2019-02-07 07:39:23', '2019-02-19 23:00:00', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 3, 'informatika'),
(3, 'vsdfgasfg', 'afsdgdfg', '2019-02-07 07:40:27', '2019-02-18 23:00:00', 'faddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 2, 'informatika'),
(4, 'dffffffffffffffffffagdf', 'afdgdafgadfgadf', '2019-02-07 07:41:11', '2019-02-17 23:00:00', 'dfgadfgadfgagdafgaergqergqerghwerhwqeyherqhwrthwrth', 4, 'informatika');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hizkuntza`
--

CREATE TABLE `hizkuntza` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `hizkuntza` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `maila` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interesko_Datuak`
--

CREATE TABLE `interesko_Datuak` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `lan_Esperientzia` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `gida_Baimena` tinyint(1) NOT NULL,
  `kotxea` tinyint(1) NOT NULL,
  `erabilgarritasuna` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `zure_Deskripzioa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_16_104210_create_eskaintzak_table', 1),
(4, '2019_01_16_123439_create_titulazioa_table', 2),
(5, '2019_01_16_123620_create_perfila_table', 2),
(6, '2019_01_16_124003_create_interesko__datuak_table', 2),
(7, '2019_01_16_124627_create_hizkuntza_table', 3),
(8, '2019_01_16_124816_create_erlazioa_ikasleak_eskaintzak_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ander.itza@txorierri.com', '$2y$10$pY9iB7SbBxUGhAl3mG0HduMZJHVh.uR0Z8uXnul/yGnv2YtARe7M6', '2019-02-06 11:22:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfila`
--

CREATE TABLE `perfila` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `izena` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `jaiotze_Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `helbidea` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `kontaktua` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulazioa`
--

CREATE TABLE `titulazioa` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `titulazio_Izena` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` int(11) NOT NULL DEFAULT '2',
  `egoera` tinyint(4) NOT NULL DEFAULT '1',
  `departamentua` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `rol`, `egoera`, `departamentua`) VALUES
(3, 'tumadre', 'a@a.com', NULL, '$2y$10$moAEKJ8/eCZPm89W0KkWreHstfIXd55bbsSh/hI6tFM3piVVcCTfa', 'J6Yf1S3X1QWeoO64tX38xKafzjBHFcYwpx7m67GWO5rsDA3Nw2mNkHfCTceY', NULL, NULL, 2, 1, 'Informatika'),
(4, 'tumadre', 'benjas@gmail.com', NULL, '$2y$10$vLskDo.VR7nzNB/c1j/W6e5B0xLb98tJ5yLI8FqCgdlmUAreIBb.i', NULL, NULL, NULL, 2, 1, 'Informatika'),
(5, 'tumadre', 'prueba@prueba.com', NULL, '$2y$10$ZLAMayqc3smoHHFQGKhFiOLt4oeUfR1KLkJnmcfOEbhdvUdOSq1.K', NULL, NULL, NULL, 2, 1, 'Informatika'),
(6, 'tumadre', 'ruedaslocas@gmail.com', NULL, '$2y$10$kK0ywLi4BQHb2ey42hRjLuJJ7O6hFtq8ZnpFEsB//su29ODZ8wRo6', NULL, NULL, NULL, 2, 1, 'Informatika'),
(7, 'tumadre', 'samuela@gmail.com', NULL, '$2y$10$FsbZ.N/shryrPLVMZSx4H.CXOvBesEkFt5cyDaEcf/0.buntjluCy', NULL, NULL, NULL, 2, 1, 'Informatika'),
(8, '', 'irakasle@irakasle.com', NULL, '$2y$10$SKzkm4PmYvy6t7U4/ccICuoZeNqZFacEoeFcW33sIV5fYoxuA3JUe', 'WmtLETIev7QulJizZgaV40a6YmnFd1Y2eRb7mWl0xl4eDzoYwk7FN3JzDkJJ', '2019-02-06 10:35:39', '2019-02-06 10:35:39', 1, 1, 'informatika'),
(9, '', 'admin@admin.com', NULL, '$2y$10$jJTj0eXRJn03J2oIZNfodOemUdUumGy4M2uJthIawTxAdSDpJ/YLC', 'QF8u0vUBGNvUQMj6TL28wl0vbdAUygbKjYV1WpnOqPc6ZCQw3Ixqdl4PrxXt', '2019-02-06 10:46:42', '2019-02-06 10:46:42', 0, 1, 'admin'),
(10, '', 'ander.itza@txorierri.com', NULL, '$2y$10$dbuObCy79M/sc5j7CTTrS.qs6BP/832YV6dgsmwDytsh2wTy9JBA.', NULL, '2019-02-06 11:18:48', '2019-02-06 11:18:48', 1, 1, 'informatika'),
(11, '', 'ramir@gmail.com', NULL, '$2y$10$Ny1Yse1wP/ub/Q/xNs/e.OfgGLTu0b/tk8XuGLaCRW4gTYkmFUysW', NULL, '2019-02-07 06:23:44', '2019-02-07 06:23:44', 1, 1, 'kimika'),
(12, '', 'sdafasf@gmail.com', NULL, '$2y$10$zvf7/530EPkNycsUgAy.gOdpVTUh3QGVdLuqSYOpVTSTW1X9mrJUC', NULL, '2019-02-07 06:24:28', '2019-02-07 06:24:28', 1, 1, 'comercio'),
(13, '', 'gotzon@gmail.com', NULL, '$2y$10$2UkJxN4jALvFt40uolZu9ulsWHWjx1E.cDzPDjpaC8rURveonc.yG', 'DcnQOtPl8n8UWpVD9EbtAzUirnSukRhF3hDtRq5Skpn22NOed0zIar7b5P56', '2019-02-07 06:25:57', '2019-02-07 06:25:57', 1, 1, 'ciencias'),
(14, '', 'aiotr@hotmail.com', NULL, '$2y$10$80bstGY56gAaczMrB6M5Nu4qnvcDhp5osCTbMfzb4rbZ5SPWfVgCi', NULL, '2019-02-07 06:26:52', '2019-02-07 06:26:52', 1, 1, 'electronica');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `erlazioa`
--
ALTER TABLE `erlazioa`
  ADD PRIMARY KEY (`email`,`idEskaintzak`),
  ADD KEY `erlazioa_ideskaintzak_foreign` (`idEskaintzak`);

--
-- Indices de la tabla `eskaintzak`
--
ALTER TABLE `eskaintzak`
  ADD PRIMARY KEY (`idEskaintzak`);

--
-- Indices de la tabla `hizkuntza`
--
ALTER TABLE `hizkuntza`
  ADD PRIMARY KEY (`email`,`hizkuntza`);

--
-- Indices de la tabla `interesko_Datuak`
--
ALTER TABLE `interesko_Datuak`
  ADD PRIMARY KEY (`email`);

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
-- Indices de la tabla `perfila`
--
ALTER TABLE `perfila`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `titulazioa`
--
ALTER TABLE `titulazioa`
  ADD PRIMARY KEY (`email`,`titulazio_Izena`);

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
-- AUTO_INCREMENT de la tabla `eskaintzak`
--
ALTER TABLE `eskaintzak`
  MODIFY `idEskaintzak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `erlazioa`
--
ALTER TABLE `erlazioa`
  ADD CONSTRAINT `erlazioa_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE,
  ADD CONSTRAINT `erlazioa_ideskaintzak_foreign` FOREIGN KEY (`idEskaintzak`) REFERENCES `eskaintzak` (`idEskaintzak`) ON DELETE CASCADE;

--
-- Filtros para la tabla `hizkuntza`
--
ALTER TABLE `hizkuntza`
  ADD CONSTRAINT `hizkuntza_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Filtros para la tabla `interesko_Datuak`
--
ALTER TABLE `interesko_Datuak`
  ADD CONSTRAINT `interesko_datuak_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Filtros para la tabla `perfila`
--
ALTER TABLE `perfila`
  ADD CONSTRAINT `perfila_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Filtros para la tabla `titulazioa`
--
ALTER TABLE `titulazioa`
  ADD CONSTRAINT `titulazioa_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
