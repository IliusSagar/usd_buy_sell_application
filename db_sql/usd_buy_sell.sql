-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 12:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usd_buy_sell`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$L1tIn0.VWrknZiysY.0GGu9a/2MFK/oBV.CFPDzpRlCD6F2dyYCtS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buy_sell_currencies`
--

CREATE TABLE `buy_sell_currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `currency_name` varchar(255) NOT NULL,
  `buy_amount` varchar(255) NOT NULL,
  `sell_amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buy_sell_currencies`
--

INSERT INTO `buy_sell_currencies` (`id`, `currency_id`, `img`, `currency_name`, `buy_amount`, `sell_amount`, `created_at`, `updated_at`) VALUES
(2, 9, '202304140349logo_421656109129.png', 'Tether Usdt (TRC20)', '112', '120', NULL, NULL),
(3, 19, '202304140356logo_481663785906.png', 'Litecoin USD', '112', '120', NULL, NULL),
(5, 30, '202304140832bch.png', 'BCH', '112', '120', NULL, NULL),
(6, 17, '202304140355logo_131663841672.png', 'Btc USD', '112', '120', NULL, NULL),
(7, 31, '202304140834eth.png', 'ETH', '112', '120', NULL, NULL),
(8, 15, '202304140353logo_51657179359.png', 'Smart Chain (BNB) USD', '112', '120', NULL, NULL),
(9, 23, '202304140359logo_631602506685.png', 'TRON (TRX) USD', '112', '120', NULL, NULL),
(10, 8, '202304140348PM.png', 'Perfect Money USD', '111', '117', NULL, NULL),
(11, 25, '202304140401WM.png', 'Webmoney USD', '102', '108', NULL, NULL),
(12, 20, '202304140357logo_381659189856.png', 'Pyypl USD', '109', '120', NULL, NULL),
(13, 24, '202304140400logo_551659263541.png', 'Payeer USD', '111', '118', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `currency_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `img`, `currency_name`, `created_at`, `updated_at`) VALUES
(7, '202304140347logo_861656108836.png', 'Nagad (পার্সোনাল) BDT', NULL, '2023-04-14 03:15:09'),
(8, '202304140348PM.png', 'Perfect Money USD', NULL, NULL),
(9, '202304140349logo_421656109129.png', 'Tether Usdt (TRC20)', NULL, NULL),
(10, '202304140350logo_771656155382.png', 'Coinbase LTC USD', NULL, NULL),
(11, '202304140350logo_471656156011.png', 'Coinbase BCH USD', NULL, NULL),
(12, '202304140351logo_551656107642.png', 'Coinbasse BTC USD', NULL, NULL),
(13, '202304140352logo_761657178883.png', 'Coinbase ETH USD', NULL, NULL),
(14, '202304140353logo_421656109129.png', 'Tether USDT (BEP20) USD', NULL, NULL),
(15, '202304140353logo_51657179359.png', 'Smart Chain (BNB) USD', NULL, NULL),
(16, '202304140354logo_61664040795.png', 'BUSD (BEP20) USD', NULL, NULL),
(17, '202304140355logo_131663841672.png', 'Btc USD', NULL, NULL),
(18, '202304140356logo_271663785839.png', 'Bitcoin Cash USD', NULL, NULL),
(19, '202304140356logo_481663785906.png', 'Litecoin USD', NULL, NULL),
(20, '202304140357logo_381659189856.png', 'Pyypl USD', NULL, NULL),
(21, '202304140358logo_81663785972.png', 'Ethereum USD', NULL, NULL),
(22, '202304140359logo_341663786049.png', 'Doge USD', NULL, NULL),
(23, '202304140359logo_631602506685.png', 'TRON (TRX) USD', NULL, NULL),
(24, '202304140400logo_551659263541.png', 'Payeer USD', NULL, NULL),
(25, '202304140401WM.png', 'Webmoney USD', NULL, NULL),
(26, '202304140402logo_961667992328.png', 'SHIB (BEP20) USD', NULL, NULL),
(27, '202304140403logo_21669283666.png', 'Local Pay BDT', NULL, NULL),
(28, '202304140404logo_641659469998.png', 'Nexus Pay BDT', NULL, NULL),
(29, '202304140405logo_931659469930.png', 'Rocket (পার্সোনাল) BDT', NULL, NULL),
(30, '202304140832bch.png', 'BCH', NULL, NULL),
(31, '202304140834eth.png', 'ETH', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exchange_rates`
--

CREATE TABLE `exchange_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_id_send` int(11) NOT NULL,
  `img_send` varchar(255) NOT NULL,
  `currency_name_send` varchar(255) NOT NULL,
  `currency_id_receive` int(11) NOT NULL,
  `img_receive` varchar(255) NOT NULL,
  `currency_name_receive` varchar(255) NOT NULL,
  `usd` varchar(255) NOT NULL,
  `bdt` varchar(255) NOT NULL,
  `researve` varchar(255) NOT NULL,
  `usdbdt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exchange_rates`
--

INSERT INTO `exchange_rates` (`id`, `currency_id_send`, `img_send`, `currency_name_send`, `currency_id_receive`, `img_receive`, `currency_name_receive`, `usd`, `bdt`, `researve`, `usdbdt`, `created_at`, `updated_at`) VALUES
(9, 8, '202304140348PM.png', 'Perfect Money USD', 27, '202304140403logo_21669283666.png', 'Local Pay BDT', '1 USD', '110', '90000.00', 'BDT', NULL, NULL),
(10, 8, '202304140348PM.png', 'Perfect Money USD', 7, '202304140347logo_861656108836.png', 'Nagad (পার্সোনাল) BDT', '1 USD', '110', '85929.50', 'BDT', NULL, NULL),
(11, 8, '202304140348PM.png', 'Perfect Money USD', 29, '202304140405logo_931659469930.png', 'Rocket (পার্সোনাল) BDT', '1 USD', '110', '90000.00', 'BDT', NULL, NULL),
(12, 8, '202304140348PM.png', 'Perfect Money USD', 28, '202304140404logo_641659469998.png', 'Nexus Pay BDT', '1 USD', '110', '0.01', 'BDT', NULL, NULL),
(13, 25, '202304140401WM.png', 'Webmoney USD', 27, '202304140403logo_21669283666.png', 'Local Pay BDT', '1 USD', '98', '90000.00', 'BDT', NULL, NULL),
(14, 25, '202304140401WM.png', 'Webmoney USD', 7, '202304140347logo_861656108836.png', 'Nagad (পার্সোনাল) BDT', '1 USD', '98', '85929.50', 'BDT', NULL, NULL),
(15, 25, '202304140401WM.png', 'Webmoney USD', 29, '202304140405logo_931659469930.png', 'Rocket (পার্সোনাল) BDT', '1 USD', '98', '90000.00', 'BDT', NULL, NULL),
(16, 25, '202304140401WM.png', 'Webmoney USD', 28, '202304140404logo_641659469998.png', 'Nexus Pay BDT', '1 USD', '98', '0.01', 'BDT', NULL, NULL),
(17, 23, '202304140359logo_631602506685.png', 'TRON (TRX) USD', 27, '202304140403logo_21669283666.png', 'Local Pay BDT', '1 USD', '111', '89902.00', 'BDT', NULL, NULL),
(18, 23, '202304140359logo_631602506685.png', 'TRON (TRX) USD', 7, '202304140347logo_861656108836.png', 'Nagad (পার্সোনাল) BDT', '1 USD', '111', '60849.50', 'BDT', NULL, NULL),
(19, 23, '202304140359logo_631602506685.png', 'TRON (TRX) USD', 29, '202304140405logo_931659469930.png', 'Rocket (পার্সোনাল) BDT', '1 USD', '111', '90000.00', 'BDT', NULL, NULL),
(20, 23, '202304140359logo_631602506685.png', 'TRON (TRX) USD', 28, '202304140404logo_641659469998.png', 'Nexus Pay BDT', '1 USD', '111', '0.01', 'BDT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_09_175153_create_admins_table', 1),
(6, '2023_04_12_170311_create_currencies_table', 2),
(7, '2023_04_14_054411_create_reaserve_currencies_table', 3),
(8, '2023_04_14_081128_create_buy_sell_currencies_table', 4),
(9, '2023_04_15_072506_create_exchange_rates_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reaserve_currencies`
--

CREATE TABLE `reaserve_currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `currency_name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `usdbdt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reaserve_currencies`
--

INSERT INTO `reaserve_currencies` (`id`, `currency_id`, `img`, `currency_name`, `amount`, `usdbdt`, `created_at`, `updated_at`) VALUES
(3, 8, '202304140348PM.png', 'Perfect Money USD', '1880.57', 'USD', NULL, NULL),
(4, 9, '202304140349logo_421656109129.png', 'Tether Usdt (TRC20)', '849.98', 'USD', NULL, NULL),
(5, 10, '202304140350logo_771656155382.png', 'Coinbase LTC USD', '893.33', 'USD', NULL, NULL),
(6, 11, '202304140350logo_471656156011.png', 'Coinbase BCH USD', '400.00', 'USD', NULL, NULL),
(7, 12, '202304140351logo_551656107642.png', 'Coinbasse BTC USD', '959.53', 'USD', NULL, NULL),
(8, 13, '202304140352logo_761657178883.png', 'Coinbase ETH USD', '500.00', 'USD', NULL, NULL),
(9, 9, '202304140349logo_421656109129.png', 'Tether Usdt (TRC20)', '900.00', 'USD', NULL, NULL),
(10, 15, '202304140353logo_51657179359.png', 'Smart Chain (BNB) USD', '800.00', 'USD', NULL, NULL),
(11, 16, '202304140354logo_61664040795.png', 'BUSD (BEP20) USD', '695.00', 'USD', NULL, NULL),
(12, 17, '202304140355logo_131663841672.png', 'Btc USD', '700.00', 'USD', NULL, NULL),
(13, 18, '202304140356logo_271663785839.png', 'Bitcoin Cash USD', '600.00', 'USD', NULL, NULL),
(14, 19, '202304140356logo_481663785906.png', 'Litecoin USD', '699.00', 'USD', NULL, NULL),
(15, 20, '202304140357logo_381659189856.png', 'Pyypl USD', '89.68', 'USD', NULL, NULL),
(16, 21, '202304140358logo_81663785972.png', 'Ethereum USD', '397.00', 'USD', NULL, NULL),
(17, 22, '202304140359logo_341663786049.png', 'Doge USD', '0.01', 'USD', NULL, NULL),
(18, 23, '202304140359logo_631602506685.png', 'TRON (TRX) USD', '691.00', 'USD', NULL, NULL),
(19, 24, '202304140400logo_551659263541.png', 'Payeer USD', '493.90', 'USD', NULL, NULL),
(20, 25, '202304140401WM.png', 'Webmoney USD', '99.62', 'USD', NULL, NULL),
(21, 26, '202304140402logo_961667992328.png', 'SHIB (BEP20) USD', '0.01', 'USD', NULL, NULL),
(22, 27, '202304140403logo_21669283666.png', 'Local Pay BDT', '80078.12', 'BDT', NULL, NULL),
(23, 28, '202304140404logo_641659469998.png', 'Nexus Pay BDT', '100000.00', 'BDT', NULL, NULL),
(24, 29, '202304140405logo_931659469930.png', 'Rocket (পার্সোনাল) BDT', '87556.00', 'BDT', NULL, NULL),
(25, 7, '202304140347logo_861656108836.png', 'Nagad (পার্সোনাল) BDT', '72415.57', 'BDT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'user1@gmail.com', NULL, '$2y$10$L1tIn0.VWrknZiysY.0GGu9a/2MFK/oBV.CFPDzpRlCD6F2dyYCtS', NULL, '2023-04-11 10:51:24', '2023-04-11 10:51:24'),
(2, 'user2', 'user2@gmail.com', NULL, '$2y$10$nY09rPByjqQc.hsLpaoikeykJDoUkUC8IacPR7VfGEEfcUU7uy2Ia', NULL, '2023-04-14 22:00:51', '2023-04-14 22:00:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `buy_sell_currencies`
--
ALTER TABLE `buy_sell_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_rates`
--
ALTER TABLE `exchange_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reaserve_currencies`
--
ALTER TABLE `reaserve_currencies`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buy_sell_currencies`
--
ALTER TABLE `buy_sell_currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `exchange_rates`
--
ALTER TABLE `exchange_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reaserve_currencies`
--
ALTER TABLE `reaserve_currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
