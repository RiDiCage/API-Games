-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 jan 2022 om 12:35
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Creative', '2021-09-30 15:10:08', '2021-09-30 15:10:10'),
(2, 'Open World', '2021-09-10 12:47:18', '2021-09-10 13:12:32'),
(3, 'Race', '2021-09-10 12:47:21', '2021-09-10 12:47:30'),
(4, 'Sport', '2021-09-10 06:05:09', '2021-09-10 13:04:34'),
(5, 'Adventure', '2021-09-10 06:19:07', '2021-09-10 13:12:47'),
(6, 'Sandbox', '2021-09-10 10:46:15', '2021-09-10 10:48:22'),
(7, 'Role Play (RPG)', '2021-09-10 12:57:04', '2021-09-10 13:11:28'),
(8, 'Actie', '2021-09-10 13:02:53', '2021-09-10 13:06:19'),
(9, 'Simulation', '2021-09-10 13:03:45', '2021-09-10 13:13:05'),
(10, 'Strategy', '2021-09-10 13:04:03', '2021-09-10 13:13:15'),
(11, 'Puzzle', '2021-09-10 13:06:39', '2021-09-10 13:13:40'),
(12, 'Idle', '2021-09-10 13:06:46', '2021-09-10 13:06:46'),
(13, 'Shooter', '2021-09-10 13:07:32', '2021-09-10 13:07:32'),
(14, 'Fighter', '2021-09-10 13:07:58', '2021-09-10 13:07:58'),
(15, 'Beam up', '2021-09-10 13:08:11', '2021-09-10 13:08:11'),
(16, 'Stealth', '2021-09-10 13:08:20', '2021-09-10 13:08:20'),
(17, 'Survival', '2021-09-10 13:08:43', '2021-09-10 13:08:43'),
(18, 'Rhythm', '2021-09-10 13:09:04', '2021-09-10 13:09:04'),
(19, 'Metroidvania', '2021-09-10 13:09:30', '2021-09-10 13:09:30'),
(20, 'Text based', '2021-09-10 13:09:45', '2021-09-10 13:09:45'),
(21, 'Realtime', '2021-09-10 13:10:32', '2021-09-10 13:16:21'),
(22, 'Massive Multiplayer Online (MMO)', '2021-09-10 13:11:08', '2021-09-10 13:11:08'),
(23, 'Visual Novels', '2021-09-10 13:14:38', '2021-09-10 13:14:38'),
(24, 'Interactive', '2021-09-10 13:14:51', '2021-09-10 13:14:51'),
(25, 'Tactical', '2021-09-10 13:15:16', '2021-09-10 13:15:16'),
(26, 'First person', '2021-09-10 13:15:34', '2021-09-10 13:15:34'),
(27, 'Party based', '2021-09-10 13:15:44', '2021-09-10 13:15:44'),
(28, '3D based', '2021-09-10 13:16:42', '2021-09-10 13:17:13'),
(29, '2D based', '2021-09-10 13:17:21', '2021-09-10 13:17:21'),
(30, 'Multiplayer online battle arena (MOBA)', '2021-09-10 13:18:10', '2021-09-10 13:18:10'),
(31, 'War', '2021-09-10 13:18:28', '2021-09-10 13:18:28'),
(32, 'Horror', '2021-09-10 13:18:36', '2021-09-10 13:18:36'),
(33, 'Team Sport', '2021-09-10 13:18:59', '2021-09-10 13:18:59'),
(34, 'Competitive', '2021-09-10 13:19:14', '2021-09-10 13:19:14'),
(35, 'Logic', '2021-09-10 13:19:24', '2021-09-10 13:19:24'),
(36, 'Trivia', '2021-09-10 13:19:32', '2021-09-10 13:19:32'),
(37, 'Board', '2021-09-10 13:19:52', '2021-09-10 13:19:52'),
(38, 'Card', '2021-09-10 13:19:57', '2021-09-10 13:19:57'),
(39, 'Programming', '2021-09-10 13:20:09', '2021-09-10 13:20:09'),
(40, 'Adver', '2021-09-10 13:20:32', '2021-09-10 13:20:32'),
(41, 'Educational', '2021-09-10 13:20:58', '2021-09-20 07:53:01');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories_game`
--

CREATE TABLE `categories_game` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `categories_game`
--

INSERT INTO `categories_game` (`id`, `category_id`, `game_id`) VALUES
(2, 4, 36),
(3, 7, 36),
(5, 8, 37),
(6, 11, 37),
(7, 14, 37),
(8, 21, 37),
(9, 20, 37),
(10, 22, 37),
(11, 24, 37),
(12, 26, 37),
(17, 6, 1),
(18, 10, 1),
(19, 17, 1),
(20, 28, 1),
(22, 6, 2),
(23, 10, 2),
(24, 17, 2),
(25, 28, 2),
(26, 2, 3),
(27, 3, 3),
(28, 9, 3),
(29, 10, 3),
(30, 24, 3),
(31, 25, 3),
(32, 26, 3),
(33, 28, 3),
(34, 34, 3),
(36, 2, 4),
(37, 5, 4),
(38, 6, 4),
(39, 10, 4),
(40, 11, 4),
(41, 16, 4),
(42, 17, 4),
(43, 21, 4),
(44, 22, 4),
(45, 26, 4),
(46, 28, 4),
(47, 30, 4),
(48, 34, 4),
(49, 35, 4),
(50, 39, 4),
(51, 2, 5),
(52, 3, 5),
(53, 4, 5),
(54, 5, 5),
(55, 6, 5),
(56, 7, 5),
(57, 8, 5),
(58, 10, 5),
(59, 13, 5),
(60, 14, 5),
(61, 16, 5),
(62, 17, 5),
(63, 21, 5),
(64, 22, 5),
(65, 24, 5),
(66, 25, 5),
(67, 26, 5),
(68, 27, 5),
(69, 28, 5),
(70, 30, 5),
(71, 34, 5),
(73, 2, 6),
(74, 5, 6),
(75, 6, 6),
(76, 10, 6),
(77, 11, 6),
(78, 16, 6),
(79, 17, 6),
(80, 28, 6),
(81, 34, 6),
(82, 41, 6),
(84, 5, 7),
(85, 6, 7),
(86, 10, 7),
(87, 17, 7),
(88, 24, 7),
(89, 25, 7),
(90, 28, 7),
(91, 34, 7),
(93, 5, 8),
(94, 6, 8),
(95, 9, 8),
(96, 10, 8),
(97, 17, 8),
(98, 24, 8),
(99, 25, 8),
(100, 28, 8),
(101, 34, 8),
(103, 2, 15),
(104, 5, 15),
(105, 6, 15),
(106, 7, 15),
(107, 10, 15),
(108, 16, 15),
(109, 17, 15),
(110, 25, 15),
(111, 26, 15),
(112, 28, 15),
(114, 2, 14),
(115, 6, 14),
(116, 10, 14),
(117, 11, 14),
(118, 17, 14),
(119, 24, 14),
(120, 25, 14),
(121, 28, 14),
(122, 34, 14),
(123, 35, 14),
(124, 2, 13),
(125, 5, 13),
(126, 10, 13),
(127, 17, 13),
(128, 21, 13),
(129, 22, 13),
(130, 24, 13),
(131, 25, 13),
(132, 27, 13),
(133, 29, 13),
(134, 34, 13),
(136, 6, 12),
(137, 9, 12),
(138, 20, 12),
(139, 25, 12),
(140, 28, 12),
(141, 35, 12),
(142, 3, 11),
(143, 8, 11),
(144, 9, 11),
(145, 10, 11),
(146, 20, 11),
(147, 24, 11),
(148, 25, 11),
(149, 29, 11),
(150, 34, 11),
(151, 2, 9),
(152, 5, 9),
(153, 10, 9),
(154, 14, 9),
(155, 17, 9),
(156, 21, 9),
(157, 22, 9),
(158, 24, 9),
(159, 25, 9),
(160, 28, 9),
(161, 30, 9),
(162, 31, 9),
(163, 34, 9);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`id`, `name`, `description`, `release_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cities Skylines', 'Build Cities', '2015-03-10', '2021-09-07 09:18:39', '2021-09-09 05:14:11', NULL),
(2, 'Planet Coaster', 'Build Parks', '2016-11-16', '2021-09-07 09:18:54', '2021-09-07 09:46:59', NULL),
(3, 'The Crew 2', 'Race with planes, cars or boat\'s', '2018-06-29', '2021-09-07 09:33:31', '2021-09-07 09:47:38', NULL),
(4, 'Minecraft', 'Sandbox game', '2021-11-18', '2021-09-07 11:08:05', '2021-09-07 09:48:03', NULL),
(5, 'Grand Theft Auto 5', 'Open World Game', '2021-09-17', '2021-09-07 11:08:53', '2021-09-07 11:08:56', NULL),
(6, 'Planet Zoo', 'Build Zoo\'s', '2019-11-05', '2021-09-07 11:11:02', '2021-09-07 11:11:04', NULL),
(7, 'Anno 1404', 'Build and Conquer', '2009-06-23', '2021-09-07 11:13:03', '2021-09-07 11:13:04', NULL),
(8, 'Anno 1800', 'Build and Conquer', '2019-04-16', '2021-09-07 11:13:47', '2021-09-07 11:13:50', NULL),
(9, 'The Pirate: Plague of the dead', 'Sandbox game', '2017-10-13', '2021-09-09 09:23:02', '2021-09-09 10:20:06', NULL),
(10, '911 Operator', 'Become a control room operator', '2017-02-24', '2021-09-09 10:25:51', '2021-09-09 10:25:51', NULL),
(11, '112 Operator', 'Become a control room operator', '2020-04-23', '2021-09-09 12:53:36', '2021-09-09 11:04:15', NULL),
(12, 'House Flipper', 'Rebuild old houses', '2018-05-17', '2021-09-09 11:21:18', '2021-09-09 11:21:18', NULL),
(13, 'Terraria', 'Adventure game', '2011-05-16', '2021-09-09 11:22:29', '2021-09-09 11:22:29', NULL),
(14, 'Builders of Egypt', 'Build your own Egyptian city', '2020-03-02', '2021-09-09 11:24:05', '2021-09-09 11:24:05', NULL),
(15, 'Medieval Dynasty', 'Survival game', '2020-09-17', '2021-09-09 11:26:30', '2021-09-14 05:55:38', NULL),
(16, 'API Test', 'API', '2022-11-16', '2021-09-16 09:50:12', '2021-10-04 05:11:09', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `game_user`
--

CREATE TABLE `game_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `game_user`
--

INSERT INTO `game_user` (`id`, `game_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 16, 1, '2021-09-17 06:27:19', '2021-09-17 06:27:19'),
(3, 1, 1, '2021-09-21 06:28:23', '2021-09-21 06:28:23'),
(4, 2, 1, '2021-09-21 06:44:51', '2021-09-21 06:44:51'),
(5, 6, 1, '2021-12-20 14:58:25', '2021-12-20 14:58:25'),
(6, 9, 1, '2021-12-20 14:58:29', '2021-12-20 14:58:29');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_06_103157_create_games_table', 2),
(5, '2021_09_06_122442_create_game_user_table', 3),
(6, '2021_09_09_142457_create_categories_table', 4),
(7, '2021_10_09_165202_create_categories_game_table', 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Richard', 'rvdkooij@live.nl', NULL, '$2y$10$DRw//Z0X/JdMxab.7RFjYeCLEWQ1jyARo52YtMXmsdEBb8wCEzozu', NULL, '2021-09-06 08:06:23', '2021-09-24 12:41:31', NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `categories_game`
--
ALTER TABLE `categories_game`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `game_user`
--
ALTER TABLE `game_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT voor een tabel `categories_game`
--
ALTER TABLE `categories_game`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `game_user`
--
ALTER TABLE `game_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
