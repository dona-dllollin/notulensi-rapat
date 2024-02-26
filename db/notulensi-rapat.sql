-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 04:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notulensi-rapat`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemimpin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `notulen` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `nomor`, `type_id`, `name`, `pemimpin`, `user_id`, `tanggal`, `waktu`, `notulen`, `created_at`, `updated_at`) VALUES
(1, 'RPT/KSWR/001', 1, 'Rapat Bareng Pak Faqih', 'Pak Warsono', 1, '2024-02-23', '11:00:00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in mauris est. Aliquam erat volutpat. Phasellus commodo, lacus et lobortis iaculis, urna ligula sodales odio, et interdum ante massa nec enim. Nullam rutrum eros eu ex efficitur, at ultricies neque fermentum. Praesent gravida pellentesque nunc, quis lacinia metus. Etiam magna purus, dapibus id metus et, dictum commodo nisl. Vestibulum vel imperdiet enim. Cras sit amet diam a libero consequat commodo. Curabitur quis augue a dolor scelerisque vehicula sed vitae orci. Proin luctus et leo at auctor. Etiam sagittis et erat quis scelerisque. Nullam quis consectetur eros. Integer tincidunt purus viverra, rhoncus dui vitae, sagittis purus. Nunc sapien arcu, interdum non interdum rutrum, faucibus et dui. Etiam sed pharetra ante. Aenean eu massa non turpis facilisis accumsan at ut augue. Donec iaculis egestas nulla, ac placerat nunc viverra ut. Sed rutrum enim vel ante congue finibus id sit amet justo. Sed non lectus sagittis augue rhoncus consequat et eget quam. Nulla tempus pharetra risus at vulputate. Aenean vel suscipit nisi, eget accumsan arcu. Nunc blandit velit ex, sit amet condimentum felis sollicitudin ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec elit et elit tempus ornare. Fusce libero lacus, rutrum in mi vitae, sagittis venenatis odio. Nunc eleifend ex tellus, vel interdum enim euismod vestibulum. Nam at urna sit amet orci lobortis efficitur. Phasellus eget porta velit. Fusce sed felis nisl. Nullam vulputate in magna et luctus. Sed et ligula ac sem tincidunt placerat. Proin tincidunt tortor non lorem scelerisque, ut viverra arcu dapibus. Sed non feugiat lorem, eu finibus orci. Donec ultrices fringilla nisi, sagittis auctor augue pretium in. Morbi ac quam ligula. Proin porta, urna a aliquam commodo, libero risus hendrerit ante, eget tristique eros dui id nisl. Maecenas nec cursus ex, sed elementum lectus. Sed nec sem vitae tortor maximus tristique. Sed finibus, augue ac auctor volutpat, elit eros faucibus erat, vitae venenatis sapien sem eu ipsum. Suspendisse lorem tellus, mollis sed feugiat sed, ultrices vel sem. Suspendisse gravida tellus non libero sodales finibus. In id nulla porta, interdum erat vitae, euismod tellus. Mauris congue, urna et vestibulum congue, nisi elit cursus mi, vel scelerisque dolor eros at erat. Mauris dignissim libero ac efficitur egestas. Sed pharetra rhoncus eleifend. Donec imperdiet, urna non lacinia viverra, urna enim rhoncus lacus, nec dictum urna augue at diam.</p>', NULL, '2024-02-25 20:43:47'),
(2, '102210023', 2, 'Rapat Bersama OJK', 'Mbah Said Hanani', 1, '2024-02-25', '22:22:00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque viverra mollis neque ac hendrerit. Aliquam iaculis sodales orci, eget laoreet lectus convallis in. Curabitur mattis lorem lacinia quam ultricies consequat. Praesent vehicula nunc mauris, quis ornare erat pharetra vel. Mauris blandit turpis sit amet sem fringilla scelerisque. Cras feugiat elementum risus a porta. Mauris lobortis, ligula eu tristique faucibus, erat enim consectetur augue, ac pretium magna odio non mauris. Nunc fringilla varius metus in efficitur. Proin sollicitudin nibh nisl, ut blandit ligula porttitor eu. Fusce tristique ac velit laoreet tincidunt. Ut non blandit dui. Fusce eu orci lorem. Nam pharetra justo in malesuada posuere.</p><p>Duis sodales euismod elit sit amet dapibus. Ut efficitur justo id tortor congue congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non ipsum elementum, bibendum nulla nec, lobortis lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque orci purus, vestibulum ut risus nec, ultrices sagittis orci. Donec viverra felis augue, id tincidunt nisl ullamcorper et. Mauris tincidunt velit neque, id cursus eros vulputate pretium. Duis consectetur dolor id nunc elementum, id gravida magna cursus.</p><p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam ullamcorper maximus diam quis auctor. Etiam quis tellus elementum, auctor turpis sit amet, cursus mi. Nunc iaculis ex at eros eleifend, sed faucibus elit suscipit. In non pharetra nisi. Mauris ultrices elit ante. Morbi eget condimentum odio. Sed congue massa tortor, id accumsan metus euismod non. Proin tincidunt orci eu arcu cursus varius.</p><p>Duis quis luctus dolor, blandit vulputate enim. In hendrerit posuere ex, eget dictum diam sagittis at. Nunc erat ligula, tempus sed neque eget, sodales sodales ipsum. Proin enim urna, aliquet sit amet velit vehicula, dapibus ullamcorper nisi. Cras hendrerit ipsum id neque tempus, eget pulvinar urna congue. Donec sollicitudin feugiat libero aliquam euismod. Nunc ultrices leo metus, non porta erat feugiat vel.</p><p>Fusce ex nulla, vestibulum id laoreet eu, luctus ut mauris. Fusce ligula enim, vehicula quis est at, blandit efficitur augue. Ut lectus sem, vulputate vel fringilla eget, condimentum nec eros. Duis auctor, mi hendrerit ultrices porta, elit mi dignissim tellus, eget tincidunt tortor justo quis quam. Curabitur rutrum, dolor et varius pellentesque, elit libero vestibulum justo, at placerat urna risus ac orci. Etiam auctor, erat id laoreet iaculis, felis massa dictum nunc, rhoncus feugiat quam nisl vitae nunc. Donec iaculis congue eros eget elementum. Ut interdum nisl a tortor ultrices imperdiet. Integer semper ultricies justo, non laoreet orci dapibus a. Nulla consequat dui elementum lobortis laoreet. Vestibulum luctus mi eu lectus lobortis hendrerit ac id mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut vestibulum arcu, ut pretium nunc.</p>', NULL, '2024-02-26 07:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_22_152701_create_meetings_table', 1),
(6, '2024_02_22_152729_create_types_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rapat Internal', NULL, '2024-02-23 00:57:23'),
(2, 'Rapat Eksternal', NULL, NULL),
(3, 'Rapat Kerja Harian', NULL, NULL),
(4, 'Rapat Biasa Saja', '2024-02-22 21:02:43', '2024-02-22 21:02:43'),
(6, 'Rapat Rekonsiliasi', '2024-02-22 21:05:57', '2024-02-22 21:05:57'),
(8, 'ragsas', '2024-02-26 06:58:20', '2024-02-26 06:58:20'),
(9, 'asaddfef', '2024-02-26 06:58:29', '2024-02-26 06:58:29'),
(10, 'sasasasas', '2024-02-26 06:58:45', '2024-02-26 06:58:45'),
(11, 'mencoba', '2024-02-26 07:34:02', '2024-02-26 07:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','notulen','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nohp`, `email`, `email_verified_at`, `password`, `role`, `gambar`, `verify_key`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dona Dlollin', '089866562889', 'donadlollin@gmail.com', '2024-02-22 15:44:03', '$2y$12$9NGkZZJiD3Pdvl4YhuMcruOVZIytVp4Hlgla45OFwvoNWoIKzP93m', 'notulen', '240222041732.jpg', '', NULL, NULL, '2024-02-26 07:36:49'),
(2, 'Mirza', '0898989897', 'mirza@gmail.com', NULL, '$2y$12$LPqIalwPDhK221GvCWp5cO5Fpma8rCwnZcH/oiH97RWtYOlfoR6XG', 'user', 'user.png', 'Y0YkrxYVF6geCdHcKWfpC4069w97UGlVMUx3moTFC6JAvrnPrzTQ8WpR8tAiouihmDDeriIoaSaJzsBreVxTA2J4Bv86pD9qcnO5', NULL, '2024-02-23 01:02:14', '2024-02-23 01:02:14'),
(3, 'kok biso', '08767645635', 'donadlollin2@gmail.com', '2024-02-26 06:40:03', '$2y$12$lDkY7rbMnuBV/Y8YlBpRpusQrMhida3RkH1iXwODaYVyK/5tPn0S.', 'user', '240226024001.jpg', 'AZeT4U6jAarcWz0NuK4fSrStwzsLO0TP3m7MlLj3RveuTECYOehPcqo9p2q63fstB2jtvmX1hQi3cHPhLO3BTYY1o8hHommZkNjz', NULL, '2024-02-26 06:38:20', '2024-02-26 07:41:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
