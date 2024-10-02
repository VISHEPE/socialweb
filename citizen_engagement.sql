-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Oct 02, 2024 at 11:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citizen_engagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `feedback_text` text NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback_text`, `created_at`) VALUES
(1, 'no', '2024-09-25 15:58:59.882918'),
(2, 'yer', '2024-09-25 16:02:47.186975'),
(3, 'yer', '2024-09-25 16:02:51.160355'),
(4, 'yer', '2024-09-25 16:04:04.798691');

-- --------------------------------------------------------

--
-- Table structure for table `governance`
--

CREATE TABLE `governance` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `rating` decimal(3,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `projects` text NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `governance`
--

INSERT INTO `governance` (`id`, `name`, `county`, `rating`, `image`, `projects`, `created_at`) VALUES
(3, 'Peter Nyongo', 'Kisumu County', 4.50, 'tom_johnson.jpg', 'Agriculture Development, Clean Water Project, Infrastructure Upgrade', '2024-10-02 19:00:48.089175'),
(4, 'Susan Kihika', 'Nakuru County', 4.00, 'mary_mwangi.jpg', 'Youth Empowerment, Green Energy Project', '2024-10-02 19:00:48.089175'),
(5, 'Jonathan Bii', 'Eldoret County', 3.90, 'jonathan_bii.jpg', 'Job Creation, Technology Hub', '2024-10-02 19:00:48.089175'),
(6, 'Grace Wanjiru', 'Machakos County', 4.30, 'grace_wanjiru.jpg', 'Healthcare Expansion, Education Reform', '2024-10-02 19:00:48.089175'),
(7, 'James Karanja', 'Nyeri County', 3.70, 'james_karanja.jpg', 'Cultural Preservation, Road Construction', '2024-10-02 19:00:48.089175'),
(8, 'Alice Mutua', 'Meru County', 4.10, 'alice_mutua.jpg', 'Environment Conservation, Infrastructure Development', '2024-10-02 19:00:48.089175'),
(9, 'David Ndung?u', 'Embu County', 4.40, 'david_ndungu.jpg', 'Economic Development, Rural Electrification', '2024-10-02 19:00:48.089175'),
(10, 'Sophia Achieng', 'Trans Nzoia County', 3.50, 'sophia_achieng.jpg', 'Food Security Program, Youth Training', '2024-10-02 19:00:48.089175'),
(11, 'H.E. Hon. AbdullSwamad Shariff Nassir', 'MOMBASA COUNTY', 0.00, 'shariff.jpg', '', '2024-10-03 02:00:48.089175'),
(12, 'H.E Fatuma Mohamed Achani', 'KWALE COUNTY', 0.00, 'fatuma_mohamed_achani.jpg', '', '2024-10-03 02:00:48.089175'),
(13, 'H.E Gideon Maitha Mung\'aro, OGW', 'KILIFI COUNTY', 0.00, 'gideon_maitha_mungaro.jpg', '', '2024-10-03 02:00:48.089175'),
(14, 'H.E Maj. (Rtd) Dr. Dhadho Gaddae Godhana', 'TANA RIVER COUNTY', 0.00, 'dhadho_gaddae_godhana.jpg', '', '2024-10-03 02:00:48.089175'),
(15, 'H.E Issa Abdalla Timamy, EGH', 'LAMU COUNTY', 0.00, 'issa_abdalla_timamy.jpg', '', '2024-10-03 02:00:48.089175'),
(16, 'H.E  Dr. Andrew Mwadime', 'TAITA-TAVETA COUNTY', 0.00, 'andrew_mwadime.jpg', '', '2024-10-03 02:00:48.089175'),
(17, 'H.E Nathif Adam Jama, EGH', 'GARISSA COUNTY', 0.00, 'nathif_adam_jama.jpg', '', '2024-10-03 02:00:48.089175'),
(18, 'H.E FCPA Ahmed Abdullahi, EGH', 'WAJIR COUNTY', 0.00, 'ahmed_abdullahi.jpg', '', '2024-10-03 02:00:48.089175'),
(19, 'H.E Mohamed Adan Khalif,EGH', 'MANDERA COUNTY', 0.00, 'mohamed_adan_khalif.jpg', '', '2024-10-03 02:00:48.089175'),
(20, 'H.E Mohamud Mohamed Ali, EGH', 'MARSABIT COUNTY', 0.00, 'mohamud_mohamed_ali.jpg', '', '2024-10-03 02:00:48.089175'),
(21, 'H.E Abdi Ibrahim Hassan, EGH', 'ISIOLO COUNTY', 0.00, 'abdi_ibrahim_hassan.jpg', '', '2024-10-03 02:00:48.089175'),
(22, 'H.E Kawira Mwangaza', 'MERU COUNTY', 0.00, 'kawira_mwangaza.jpg', '', '2024-10-03 02:00:48.089175'),
(23, 'H.E Hon.Muthomi Njuki, EGH', 'THARAKA NITHI COUNTY', 0.00, 'muthomi_njuki.jpg', '', '2024-10-03 02:00:48.089175'),
(24, 'H.E Cecily Mutitu Mbarire, EGH, MGH', 'EMBU COUNTY', 0.00, 'cecily_mutitu_mbarire.jpg', '', '2024-10-03 02:00:48.089175'),
(25, 'H.E Dr. Julius Makau Malombe, EGH', 'KITUI COUNTY', 0.00, 'julius_makau_malombe.jpg', '', '2024-10-03 02:00:48.089175'),
(26, 'H.E Wavinya Ndeti, EGH', 'MACHAKOS COUNTY', 0.00, 'wavinya_ndeti.jpg', '', '2024-10-03 02:00:48.089175'),
(27, 'H.E Mutula Kilonzo JR, CBS', 'MAKUENI COUNTY', 0.00, 'mutula_kilonzo_jr.jpg', '', '2024-10-03 02:00:48.089175'),
(28, 'H.E Dr. Moses Ndirangu Kiarie Badilisha', ' NYANDARUA COUNTY', 0.00, 'moses_ndirangu_kiarie_badilisha.jpg', '', '2024-10-03 02:00:48.089175'),
(29, 'H.E Edward Mutahi Kahiga, EGH', 'NYERI COUNTY', 0.00, 'edward_mutahi_kahiga.jpg', '', '2024-10-03 02:00:48.089175'),
(30, 'H.E Anne Mumbi Waiguru, EGH, OGW', 'KIRINYAGA COUNTY', 0.00, 'anne.jpg', '', '2024-10-03 02:00:48.089175'),
(31, 'H.E Dr. Irungu Kangata, CBS', 'MURANGA COUNTY', 0.00, 'irungu_kangata.jpg', '', '2024-10-03 02:00:48.089175'),
(32, 'H.E Dr. Paul Kimani Wamatangi, EGH', 'KIAMBUI COUNTY', 0.00, 'kimani.jpg', '', '2024-10-03 02:00:48.089175'),
(33, 'H.E Jeremiah Ekamais Lomorukai', 'TURKANA COUNTY', 0.00, 'jeremiah_ekamais_lomorukai.jpg', '', '2024-10-03 02:00:48.089175'),
(34, 'H.E Simon Kachapin Kitalei, EGH, CBS', 'WEST POKOT COUNTY', 0.00, 'simon_kachapin_kitalei.jpg', '', '2024-10-03 02:00:48.089175'),
(35, 'H.E Jonathan Lelelit Lati', 'SAMBURU COUNTY', 0.00, 'jonathan_lelelit_lati.jpg', '', '2024-10-03 02:00:48.089175'),
(36, 'H.E Hon. George Natembeya MBS', 'TRANS-NZOIA COUNTY', 0.00, 'george_natembeya_mbs.jpg', '', '2024-10-03 02:00:48.089175'),
(37, 'H.E Jonathan Bii, EGH', 'ELGEYO-MARAKWET COUNTY', 0.00, 'jonathan_bii.jpg', '', '2024-10-03 02:00:48.089175'),
(38, 'H.E Wisley Rotich', 'NANDI COUNTY', 0.00, 'wisley_rotich.jpg', '', '2024-10-03 02:00:48.089175'),
(39, 'H.E Stephen Kipyego Sang, EGH', 'BARINGO COUNTY', 0.00, 'stephen_kipyego_sang.jpg', '', '2024-10-03 02:00:48.089175'),
(40, 'H.E Benjamin Chesire Cheboi, EGH, EBS', 'KEIYO-MARAKWET COUNTY', 0.00, 'benjamin_chesire_cheboi.jpg', '', '2024-10-03 02:00:48.089175'),
(41, 'H.E Joshua Wakahora Irungu, EGH', 'LAIKIPIA COUNTY', 0.00, 'joshua_wakahora_irungu.jpg', '', '2024-10-03 02:00:48.089175'),
(42, 'H.E Susan Wakarura Kihika, EGH', 'NAKURU COUNTY', 0.00, 'susan_wakarura_kihika.jpg', '', '2024-10-03 02:00:48.089175'),
(43, 'H.E Patrick Keturet Ole Ntutu', 'NAROK COUNTY', 0.00, 'patrick_keturet_ole_ntutu.jpg', '', '2024-10-03 02:00:48.089175'),
(44, 'H.E Joseph Jama Ole Lenku,EGH', 'KAJIADO COUNTY', 0.00, 'joseph_jama_ole_lenku.jpg', '', '2024-10-03 02:00:48.089175'),
(45, 'H.E Dr. Erick Kipkoech Mutai', 'KERICHO COUNTY', 0.00, 'erick_kipkoech_mutai.jpg', '', '2024-10-03 02:00:48.089175'),
(46, 'H.E Hon. Prof. Hillary K B archok, EGH', 'BOMET COUNTY', 0.00, 'hillary_k_barchok.jpg', '', '2024-10-03 02:00:48.089175'),
(47, 'H.E FCPA Fernandes Barasa, OGW', 'KAKAMEGA COUNTY', 0.00, 'fernandes_barasa.jpg', '', '2024-10-03 02:00:48.089175'),
(48, 'H.E Hon. Dr. Wilber Khasilwa Ottichilo, EGH', 'VIHIGA COUNTY', 0.00, 'wilber_khasilwa_ottichilo.jpg', '', '2024-10-03 02:00:48.089175'),
(49, 'H.E Kenneth Makelo Lusaka, EGH', 'BUNGOMA COUNTY', 0.00, 'kenneth_makelo_lusaka.jpg', '', '2024-10-03 02:00:48.089175'),
(50, 'H.E Dr. Paul Nyongesa Otuoma, EGH', 'BUSIA COUNTY', 0.00, 'paul.jpg', '', '2024-10-03 02:00:48.089175'),
(51, 'H.E James Orengo, EGH', 'SIAYA COUNTY', 0.00, 'james.jpg', '', '2024-10-03 02:00:48.089175'),
(52, 'H.E Hon. Prof. Peter Anyang? Nyong?o, EGH', 'KISUMU COUNTY', 0.00, 'peter_anyang_nyongo.jpg', '', '2024-10-03 02:00:48.089175'),
(53, 'H.E Gladys Atieno Nyasuna Wanga,EGH, CBS', 'HOMABAY COUNTY', 0.00, 'gladys_atieno_nyasuna_wanga.jpg', '', '2024-10-03 02:00:48.089175'),
(54, 'H.E Dr. George Ochilo M. Ayacko, EGH', 'MIGORI COUNTY', 0.00, 'george_ochilo_m_ayacko.jpg', '', '2024-10-03 02:00:48.089175'),
(55, 'H.E Hon. Paul Simba Arati', 'KISII COUNTY', 0.00, 'simba.jpg', '', '2024-10-03 02:00:48.089175'),
(56, 'H.E Amos Kimwomi Nyaribo', 'NYAMIRA COUNTY', 0.00, 'amos_kimwomi_nyaribo.jpg', '', '2024-10-03 02:00:48.089175'),
(57, 'H.E Sakaja Arthur Johnson, EGH , CBS', 'NAIROBI COUNTY', 0.00, 'sakaja.jpg', '', '2024-10-03 02:00:48.089175');

-- --------------------------------------------------------

--
-- Table structure for table `petitions`
--

CREATE TABLE `petitions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `signatures` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petitions`
--

INSERT INTO `petitions` (`id`, `title`, `description`, `signatures`, `created_at`) VALUES
(1, 'Improve Public Transportation', 'We need better bus routes and more frequent service.', 22, '2024-09-24 20:51:14'),
(2, 'Increase Funding for Education', 'Our schools need more resources to provide quality education.', 0, '2024-09-24 20:51:14'),
(3, 'Implement Recycling Program', 'Let\'s make our city greener with a comprehensive recycling program.', 0, '2024-09-24 20:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `petition_signatures`
--

CREATE TABLE `petition_signatures` (
  `id` int(255) NOT NULL,
  `petition_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `agreement` enum('yes','no','','') NOT NULL,
  `signed` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petition_signatures`
--

INSERT INTO `petition_signatures` (`id`, `petition_id`, `name`, `comment`, `agreement`, `signed`) VALUES
(1, 1, 'Victor ODHIAMBO', 'can you specify the exact problem?', 'yes', '2024-09-25 01:17:58.719441'),
(2, 1, 'Victor enm', 'Hello dev oops', 'yes', '2024-09-25 03:25:10.414159');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `question`, `created_at`) VALUES
(1, 'Should the city invest in more green spaces?', '2024-09-24 20:51:14'),
(2, 'What\'s the most important issue in our community?', '2024-09-24 20:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `polltally`
--

CREATE TABLE `polltally` (
  `id` int(255) NOT NULL,
  `poll_question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polltally`
--

INSERT INTO `polltally` (`id`, `poll_question`, `option1`, `option2`, `option3`, `time`, `slug`) VALUES
(1, 'Nakuru road', '8', '4', '9', '2024-10-02 21:15:04', NULL),
(2, 'nmmcmjvbjc', 'Yes', '1', '1', '2024-09-25 15:25:47', NULL),
(3, 'should the deputy president quit or no?', '2', 'No', 'Undecided', '2024-10-02 21:14:58', NULL),
(4, 'nakuru has bad roads ?', '1', 'No', 'Undecided', '2024-09-30 15:07:28', NULL),
(5, 'Nairobi is not the capital it should be ?', 'Yes', 'No', 'Undecided', '2024-09-25 15:34:45', NULL),
(6, 'Justice for the people who diaspearde ?', '1', 'No', 'Undecided', '2024-09-25 15:42:08', NULL),
(7, 'Nakuru road', 'Yes', 'No', 'Undecided', '2024-10-02 21:12:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `poll_options`
--

CREATE TABLE `poll_options` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) DEFAULT NULL,
  `option_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poll_options`
--

INSERT INTO `poll_options` (`id`, `poll_id`, `option_text`) VALUES
(1, 1, 'Yes'),
(2, 1, 'No'),
(3, 1, 'Undecided'),
(4, 2, 'Education'),
(5, 2, 'Healthcare'),
(6, 2, 'Environment'),
(7, 2, 'Economy');

-- --------------------------------------------------------

--
-- Table structure for table `poll_votes`
--

CREATE TABLE `poll_votes` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) DEFAULT NULL,
  `option_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `country`) VALUES
(1, 'Victor ODHIAMBO', 'emmanuelv428@gmail.com', '$2y$10$9hpGgMf5Nf/Rd.YzYrnkVuAQJrPgAPlMUzpot36WLqZ/dyf2K.7Pm', 'Kenya'),
(2, 'shee', 'emmheuelv428@gmail.com', '$2y$10$RaDYhM340N9rWas.vFh15OkBoziMOk8kKX7WZEflnr9TtgCM1qBGi', 'Tanzania'),
(3, 'Mark', 'emanuelv428@gmail.com', '$2y$10$iNf3Gx6YDvz8GcytGfTrE.46LQRYhqA2uVZ0buEYojgtnLj3ZnpVW', 'uganda'),
(5, 'VictoODHIAMBO', 'emm428@gmail.com', '$2y$10$B.kouRd.XvIEv5k9RswKT.tiuRm7/w7SloVHoQfTriHQoHH1XujdK', 'Kenya'),
(6, 'peter', 'petre@gmail.com', '$2y$10$u9d8JpehoYV4DLMp7ecPLOiZo6udQhLgBOzdQ.A.wvf.1uPL0RJgi', 'uganda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `governance`
--
ALTER TABLE `governance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petitions`
--
ALTER TABLE `petitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petition_signatures`
--
ALTER TABLE `petition_signatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polltally`
--
ALTER TABLE `polltally`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_id` (`poll_id`);

--
-- Indexes for table `poll_votes`
--
ALTER TABLE `poll_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_id` (`poll_id`),
  ADD KEY `option_id` (`option_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `governance`
--
ALTER TABLE `governance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `petitions`
--
ALTER TABLE `petitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petition_signatures`
--
ALTER TABLE `petition_signatures`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `polltally`
--
ALTER TABLE `polltally`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `poll_options`
--
ALTER TABLE `poll_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `poll_votes`
--
ALTER TABLE `poll_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD CONSTRAINT `poll_options_ibfk_1` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`);

--
-- Constraints for table `poll_votes`
--
ALTER TABLE `poll_votes`
  ADD CONSTRAINT `poll_votes_ibfk_1` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`),
  ADD CONSTRAINT `poll_votes_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `poll_options` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
