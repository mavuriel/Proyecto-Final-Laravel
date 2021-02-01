-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-01-2021 a las 20:00:40
-- Versión del servidor: 8.0.22-0ubuntu0.20.04.3
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jetstream`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_foraneos`
--

CREATE TABLE `dato_foraneos` (
  `id` bigint UNSIGNED NOT NULL,
  `bascula` double(10,5) NOT NULL,
  `agencia` double(10,5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dato_foraneos`
--

INSERT INTO `dato_foraneos` (`id`, `bascula`, `agencia`, `created_at`, `updated_at`) VALUES
(1, 1233.56000, 1234.65000, '2021-01-27 10:22:11', '2021-01-27 10:22:11'),
(2, 5165.51560, 2165.05600, '2021-01-27 10:24:21', '2021-01-27 10:24:21'),
(3, 561.51200, 15.65290, '2021-01-27 10:25:06', '2021-01-27 10:25:06'),
(4, 1515.00000, 151.00000, '2021-01-27 10:27:36', '2021-01-27 10:27:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercancias`
--

CREATE TABLE `mercancias` (
  `id` bigint UNSIGNED NOT NULL,
  `matricula` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conductor` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destino` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tara` double(10,5) NOT NULL,
  `bascula` double(10,5) NOT NULL,
  `pesototal` double(10,5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mercancias`
--

INSERT INTO `mercancias` (`id`, `matricula`, `conductor`, `destino`, `tara`, `bascula`, `pesototal`, `created_at`, `updated_at`) VALUES
(1, 'szs-907-i', 'Rex', 'centro', 4.14315, 4.41987, 4.72631, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(2, 'qxw-961-k', 'Major', 'centro', 6.53761, 7.03548, 2.34355, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(3, 'qyl-749-w', 'Aidan', 'centro', 2.51477, 5.99471, 1.39156, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(4, 'jbs-589-i', 'Sonny', 'centro', 5.29388, 3.97993, 2.96997, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(5, 'ndx-029-t', 'Xzavier', 'centro', 9.90095, 0.81055, 4.02602, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(6, 'uxd-994-j', 'Mason', 'centro', 6.13998, 4.41354, 0.40976, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(7, 'ccy-102-z', 'Moises', 'centro', 2.46019, 4.63514, 7.77867, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(8, 'yqk-595-m', 'Rhiannon', 'norte', 9.53486, 5.10174, 2.46542, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(9, 'pqi-327-d', 'Doug', 'norte', 4.46830, 5.12198, 2.69219, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(10, 'prv-506-u', 'Dejon', 'norte', 7.95351, 2.97196, 8.47582, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(11, 'rzi-266-r', 'Boris', 'norte', 3.45321, 1.10515, 8.37086, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(12, 'euj-138-x', 'Ignacio', 'norte', 1.28283, 4.17389, 3.75795, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(13, 'whd-150-a', 'August', 'norte', 1.72194, 7.55320, 5.92114, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(14, 'mpz-435-d', 'Gust', 'norte', 3.97145, 8.86566, 3.82140, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(15, 'rgt-798-z', 'Robert', 'sur', 6.65299, 7.70725, 7.00599, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(16, 'uea-638-k', 'Frederic', 'sur', 8.72147, 9.50066, 1.26320, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(17, 'zra-618-p', 'Jamey', 'este', 3.70035, 7.31723, 4.18382, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(18, 'art-659-i', 'Andres', 'este', 2.96776, 6.04777, 4.54312, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(19, 'wrr-959-o', 'Dorcas', 'oeste', 6.52300, 3.98798, 8.60237, '2021-01-27 10:15:02', '2021-01-27 10:15:02'),
(21, 'dfsdfsf', 'fdsfs', 'centro', 2615.63000, 156.65000, 1561.65000, '2021-01-27 10:28:02', '2021-01-27 10:28:02'),
(22, 'sdfsdfds', 'sdfsfsd', 'norte', 1325.56500, 516.54100, 1146.56000, '2021-01-27 10:31:07', '2021-01-27 10:31:07'),
(23, 'frk-928-g', 'Gordon', 'este', 4.63618, 9.91182, 2.19407, '2021-01-27 19:25:06', '2021-01-27 19:25:06'),
(24, 'srq-293-h', 'Mikel', 'este', 9.39439, 5.41112, 7.99729, '2021-01-27 19:25:06', '2021-01-27 19:25:06'),
(25, 'rxe-332-g', 'Nathanael', 'centro', 5.93271, 6.95920, 9.18348, '2021-01-27 19:25:06', '2021-01-27 19:25:06'),
(26, 'ifn-986-v', 'Edwin', 'centro', 7.17822, 4.65287, 8.22910, '2021-01-27 19:25:06', '2021-01-27 19:25:06'),
(27, 'mdi-981-i', 'Durward', 'oeste', 1.08520, 6.73934, 5.84752, '2021-01-27 19:25:06', '2021-01-27 19:25:06'),
(28, 'toa-583-v', 'Melany', 'centro', 6.86226, 6.83292, 4.44314, '2021-01-27 19:25:06', '2021-01-27 19:25:06'),
(29, 'bje-055-x', 'Brant', 'norte', 8.84131, 6.42553, 0.15017, '2021-01-27 19:25:06', '2021-01-27 19:25:06'),
(30, 'nah-292-p', 'Edgar', 'oeste', 9.68462, 4.61963, 3.07442, '2021-01-27 19:25:06', '2021-01-27 19:25:06'),
(31, 'ima-082-a', 'Roberto', 'este', 8.47158, 2.58429, 7.84023, '2021-01-27 19:25:06', '2021-01-27 19:25:06'),
(32, 'svd-691-b', 'Brycen', 'norte', 2.70513, 9.08974, 5.44206, '2021-01-27 19:25:06', '2021-01-27 19:25:06'),
(33, 'psf-744-m', 'Sammy', 'norte', 1.99724, 6.36807, 7.69510, '2021-01-27 19:25:07', '2021-01-27 19:25:07'),
(34, 'spf-614-j', 'Nikolas', 'norte', 6.61959, 7.08442, 7.31692, '2021-01-27 19:25:07', '2021-01-27 19:25:07'),
(35, 'xwy-175-c', 'Elliot', 'sur', 5.30877, 0.06519, 8.26794, '2021-01-27 19:25:07', '2021-01-27 19:25:07'),
(36, 'tws-008-c', 'Mohammed', 'norte', 9.12689, 7.65897, 5.09577, '2021-01-27 19:25:07', '2021-01-27 19:25:07'),
(37, 'chx-673-p', 'Elton', 'oeste', 7.31032, 1.25407, 1.53738, '2021-01-27 19:25:07', '2021-01-27 19:25:07'),
(38, 'ugq-775-q', 'Juston', 'sur', 1.70848, 6.84246, 2.83881, '2021-01-27 19:25:07', '2021-01-27 19:25:07'),
(39, 'xno-487-i', 'Adan', 'este', 4.22783, 9.89401, 4.17933, '2021-01-27 19:25:07', '2021-01-27 19:25:07'),
(40, 'xxn-814-b', 'Clifton', 'sur', 2.11195, 6.92056, 2.98098, '2021-01-27 19:25:07', '2021-01-27 19:25:07'),
(41, 'qmk-217-v', 'Willard', 'oeste', 6.54406, 5.12236, 5.85178, '2021-01-27 19:25:07', '2021-01-27 19:25:07'),
(42, 'ier-700-c', 'Denis', 'oeste', 7.74697, 5.79877, 6.96256, '2021-01-27 19:25:07', '2021-01-27 19:25:07'),
(43, 'sdfsdfdsf', 'fdsfs', 'centro', 15.65650, 546.56400, 5000.54500, '2021-01-27 19:26:46', '2021-01-27 19:26:46'),
(44, 'sadadas', 'sadada', 'este', 1232.65000, 156.65000, 564.65000, '2021-01-27 19:36:08', '2021-01-27 19:36:08'),
(46, 'sdasda', 'sdada', 'centro', 15.65000, 41.56000, 156.66000, '2021-02-01 01:50:59', '2021-02-01 01:50:59'),
(47, 'sadfada', 'dasdasd', 'sur', 5000.15600, 156.15000, 5000.54500, '2021-02-01 01:52:35', '2021-02-01 02:26:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(32, '2019_08_19_000000_create_failed_jobs_table', 1),
(33, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(34, '2021_01_24_005058_create_sessions_table', 1),
(35, '2021_01_24_232951_create_roles_table', 1),
(36, '2021_01_24_233002_create_user_roles_table', 1),
(37, '2021_01_24_233136_create_mercancias_table', 1),
(38, '2021_01_27_024415_create_dato_foraneos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `key`, `name`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'administrador', 'acceso completo', NULL, NULL),
(2, 'Empleado', 'empleado', 'acceso medio', NULL, NULL),
(3, 'Cliente', 'cliente', 'restringido', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2Hz7jlikZU1HaBZ4Dkn5fPk2VsBywmnJjgwE0Fn2', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:86.0) Gecko/20100101 Firefox/86.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV1NXa3VWWlFGQVA5S2VuUkxuZG11akdpM1o0U1RlNFBrM2RxVTluQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fX0=', 1612143188);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `rol_id`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1', 'test@google.com', NULL, '$2y$10$MfMo3oYM.97UOmo.kDD6HOL35KZ/LMr0SSWbz.Oy1aUH.r5QFMgou', NULL, NULL, NULL, NULL, NULL, '2021-01-27 10:15:47', '2021-01-27 10:15:47'),
(2, 'Empleado', '2', 'test2@gugul.com', NULL, '$2y$10$DMnXH0TOjj8YsUaKLatseOvi/vu9zl24ortfe4et9F3f5FycSDk2.', NULL, NULL, NULL, NULL, NULL, '2021-01-27 10:18:11', '2021-01-27 10:18:11'),
(3, 'Cliente', '3', 'test3@m.com', NULL, '$2y$10$hNgLmkWE7iuC9Y0iJiqriuBCd1fQdP.OpUvtKYkCDPCvc8a03mZLC', NULL, NULL, NULL, NULL, NULL, '2021-01-27 10:18:24', '2021-01-27 10:18:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dato_foraneos`
--
ALTER TABLE `dato_foraneos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `mercancias`
--
ALTER TABLE `mercancias`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `dato_foraneos`
--
ALTER TABLE `dato_foraneos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mercancias`
--
ALTER TABLE `mercancias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
