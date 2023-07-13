-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 08:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(6) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`ID`, `Date`, `Time`, `Location`, `Description`) VALUES
(22, '2022-10-06', '08:00', 'Kegalle Hospital', 'OPD'),
(23, '2022-12-08', '09:00', 'Kurunagala', 'OPD'),
(24, '2022-12-08', '10:00', 'Ruwanwella', 'sadadasd'),
(25, '2022-12-09', '07:05', 'bulathkohupitiya', 'OPD'),
(26, '2023-05-01', '09:00', 'dummalasoriya', 'morris garage'),
(27, '2023-06-01', '23:00', 'beligala', 'temple');

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Tp1` varchar(50) NOT NULL,
  `Tp2` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Bages` int(10) NOT NULL,
  `LastDate` date NOT NULL,
  `a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`ID`, `Name`, `Gender`, `DOB`, `Address`, `Tp1`, `Tp2`, `Type`, `Bages`, `LastDate`, `a`) VALUES
('121212', '2323', 'Male', '2022-12-08', '1212', '121', '`112', 'AB+', 0, '0000-00-00', 0),
('199919001817', 'Shanika jayasinha', 'Male', '1999-07-08', 'Molagoda,kegalle', '0779156980', '0365646555', 'O+', 3, '2022-12-21', 0),
('200082003305', 'sewmini sanjana', 'FeMale', '2000-11-15', 'yattogoda , kegalla', '0755544860', '', 'O+', 1, '2023-06-01', 0),
('690562325v', 'Sarath Jayasinha', 'Male', '1969-06-03', 'No 3;Molagoda;Kegalla', '0775645123', '', 'B+', 2, '2022-12-01', 0),
('990321833v', 'Haritha Manahara', 'Male', '1999-02-01', 'kosthanna thalewela,hettimulla', '0783005112', '', 'B+', 3, '2022-10-01', 0),
('990630125v', 'Namal Kumara', 'Male', '1999-01-02', 'No 5;Kegalle', '0779150652', '', 'A-', 2, '0000-00-00', 0),
('990630925v', 'Nishen Sasanka', 'Male', '1999-03-03', 'Panapitiya;Ampagala', '0779156980', '', 'A+', 1, '2022-12-01', 0),
('991090169V', 'Isuruy', 'Male', '1999-04-18', 'panapitiya', '0715625151', '', 'A+', 2, '2022-12-25', 0);

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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `position` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ID` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `NIC` varchar(50) DEFAULT NULL,
  `DOB` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `c1` int(50) NOT NULL,
  `c2` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`position`, `user`, `password`, `ID`, `name`, `NIC`, `DOB`, `Gender`, `Address`, `c1`, `c2`) VALUES
('Administrator', 'sasa', 'sasa', '4545', 'Nishen Sasanka', '990630925v', '1999-03-03', 'Male', 'panapitiya', 779156980, 0),
('Employee', 'Sasanka', 'sasa', '57', 'Abdul', '3424234234', '1999-07-13', 'Male', 'hatharaliyadda', 2147483647, 0);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Number` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `cause` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Number`, `name`, `id`, `address`, `phone`, `dob`, `gender`, `type`, `amount`, `cause`) VALUES
(2, 'sasa', '', '', '', '0000-00-00', '', '', '', ''),
(3, 'sasa212', '2323', '', '', '0000-00-00', '', '', '', ''),
(4, 'sasa2121212', '2323', '121', '', '0000-00-00', '', '', '', ''),
(5, 'sasa2121212', '2323', '121', '232', '0000-00-00', '', '', '', ''),
(6, 'sasa212121232323', '2323', '121', '232', '2022-11-01', '', '', '', ''),
(7, 'sasa2121212323232323', '2323', '121', '232', '2022-11-01', '', '', '', ''),
(8, 'qwdddd', 'ddd', '', '', '0000-00-00', '', '', '', ''),
(9, 'dddd', 'ddwdw', 'wd', 'wdwd', '2022-11-01', '', '', '', ''),
(10, 'dddd', 'ddwdw', 'wd', 'wdwd', '2022-11-01', 'on', '', '', ''),
(11, 'dddd', 'ddwdw', 'wd', 'wdwd', '2022-11-01', 'on', '', '', ''),
(12, 'dddd3232', 'ddwdw', 'wd', 'wdwd', '2022-11-01', 'on', '', '', ''),
(13, 'dddd3232', 'ddwdw', 'wd', 'wdwd', '2022-11-01', 'on', '', '', ''),
(14, '1212121212', '', '', '', '0000-00-00', 'Female', '', '', ''),
(15, 'ddddddddddd', 'sdsd', '', '', '0000-00-00', 'Female', 'B-', '', ''),
(16, ' xcxcxcxc', 'xcxc', '3', 'xcxc', '2022-11-07', 'Female', 'AB+', '3', 'xcxcxcc'),
(17, 'sasa1', 'qwe', '1213', '12212', '2022-11-02', 'Male', 'A+', '1213', '12313123'),
(18, 'sasa12323', 'qwe', '1213', '12212', '2022-11-02', 'Male', 'A+', '1213', '12313123'),
(19, 'sasa12323.333.', 'qwe', '1213', '12212', '2022-11-02', 'Male', 'A+', '1213', '12313123'),
(20, 'sasa12323.333.', '12', '1213', '12212', '2022-11-02', 'Male', 'A+', '1213', '12313123'),
(21, 'sasa12323.333.', '12', '1213', '12212', '2022-11-02', 'Male', 'A+', '1213', '12313123'),
(22, 'sasa12323.333.', '12', '1213', '12212', '2022-11-02', 'Male', 'A+', '1213', '12313123'),
(23, 'gfg', '2323', '2', '2323', '2022-12-13', 'Female', 'AB-', '2', '2323'),
(24, '123', '123', '213', '23123', '0000-00-00', 'Male', 'A+', '213', '213'),
(25, '', '', '', '', '0000-00-00', '', '', '', ''),
(26, '', '', '', '', '0000-00-00', '', '', '', ''),
(27, '', '', '', '', '0000-00-00', '', '', '', '');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Number`);

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
-- AUTO_INCREMENT for table `camps`
--
ALTER TABLE `camps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
