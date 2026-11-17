-- ========================================================
-- Database Clean Production Dump: SMPS IT RABBANI MUARA ENIM
-- Generated for cPanel / phpMyAdmin Import
-- Target Engine: MySQL 8.x / MariaDB 10.x
-- Date: 2026-11-17 07:29:46
-- ========================================================

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';

-- --------------------------------------------------------
-- Table structure for `users`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `users`
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `avatar`, `unit`) VALUES
(1, 'Administrator Yayasan Generasi Rabbani', 'admin@rabbanime.sch.id', NULL, '$2y$12$22Y7fnVnv95FkDSdsJJ7/eCPVknq1F1LghxCy59pNGGX/ggC6Pli6', NULL, '2026-11-17 07:29:39', '2026-11-17 07:29:39', 'super_admin', NULL, 'yayasan'),
(2, 'Admin TKS IT Rabbani Muara Enim', 'admin_tk@rabbanime.sch.id', NULL, '$2y$12$mS4r0v6l/.6CN97fjrFNNeMH.huJDkQFW7vsc7CPtLYchpkb0TSCa', NULL, '2026-11-17 07:29:39', '2026-11-17 07:29:39', 'admin', NULL, 'tk'),
(3, 'Admin SDS IT Rabbani Muara Enim', 'admin_sd@rabbanime.sch.id', NULL, '$2y$12$OK4b17qu0fT9KogjP6vuROWdcIZlNU8YvERDUFaA7jn2zY3N00kMW', NULL, '2026-11-17 07:29:39', '2026-11-17 07:29:39', 'admin', NULL, 'sd'),
(4, 'Admin SMPS IT Rabbani Muara Enim', 'admin_smp@rabbanime.sch.id', NULL, '$2y$12$EgONdW9oy051gvx3N2kbJ.YE/D5mgEbLcCMbJaMGhNMl26gQtlING', NULL, '2026-11-17 07:29:39', '2026-11-17 07:29:39', 'admin', NULL, 'smp'),
(5, 'Admin SMA IT Rabbani Muara Enim', 'admin_sma@rabbanime.sch.id', NULL, '$2y$12$rOjh70QS58Vmzj5.NjP8Se7I4.fxuK.WraF9eZrd3B2CreefEtG/u', NULL, '2026-11-17 07:29:39', '2026-11-17 07:29:39', 'admin', NULL, 'sma');

-- --------------------------------------------------------
-- Table structure for `password_reset_tokens`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for `sessions`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for `cache`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint(20) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for `cache_locks`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint(20) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for `categories`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `categories`
INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Berita', 'berita', 'Kategori Berita', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(2, 'Prestasi Siswa', 'prestasi-siswa', 'Kategori Prestasi Siswa', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(3, 'Akademik & Riset', 'akademik-riset', 'Kategori Akademik & Riset', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(4, 'Tahfidz & Keislaman', 'tahfidz-keislaman', 'Kategori Tahfidz & Keislaman', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(5, 'Kesiswaan & Ekskul', 'kesiswaan-ekskul', 'Kategori Kesiswaan & Ekskul', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(6, 'Kabar Kampus', 'kabar-kampus', 'Kategori Kabar Kampus', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(7, 'Opini & Artikel', 'opini', 'Kategori Opini & Artikel', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(8, 'Berita TKS IT Rabbani', 'berita-tk', 'Kabar kegiatan, pembelajaran sentra, dan aktivitas anak TKS IT Rabbani Muara Enim.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(9, 'Berita SDS IT Rabbani', 'berita-sd', 'Kabar kegiatan, kurikulum terpadu, dan aktivitas siswa SDS IT Rabbani Muara Enim.', NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(10, 'Berita SMPS IT Rabbani', 'berita-smp', 'Kabar kegiatan, tahfidz, sains, dan aktivitas santri SMPS IT Rabbani Muara Enim.', NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(11, 'Berita SMA IT Rabbani', 'berita-sma', 'Kabar kegiatan, boarding school, bimbel SNBT, dan prestasi santri SMA IT Rabbani Muara Enim.', NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(12, 'Kabar Yayasan Generasi Rabbani', 'kabar-yayasan', 'Warta resmi perkembangan kampus terpadu dan kebijakan Yayasan Generasi Rabbani Muara Enim.', NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(13, 'Prestasi TKS IT', 'prestasi-tk', 'Capaian dan prestasi anak didik TKS IT Rabbani Muara Enim.', NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(14, 'Prestasi SDS IT', 'prestasi-sd', 'Capaian dan prestasi siswa SDS IT Rabbani Muara Enim.', NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(15, 'Prestasi SMPS IT', 'prestasi-smp', 'Capaian dan kejuaraan santri SMPS IT Rabbani Muara Enim.', NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(16, 'Prestasi SMA IT', 'prestasi-sma', 'Capaian kelulusan PTN, tahfidz, dan kejuaraan santri SMA IT Rabbani Muara Enim.', NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41');

-- --------------------------------------------------------
-- Table structure for `tags`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `tags`
INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'PPDB', 'ppdb', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(2, 'Tahfidz', 'tahfidz', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(3, 'Prestasi', 'prestasi', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(4, 'Juara', 'juara', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(5, 'JSIT', 'jsit', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(6, 'Boarding School', 'boarding', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(7, 'SNBT PTN', 'ptn', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(8, 'Muara Enim', 'muara-enim', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(9, 'Ekskul', 'ekskul', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(10, 'Rabbani', 'rabbani', '2026-11-17 07:29:40', '2026-11-17 07:29:40');

-- --------------------------------------------------------
-- Table structure for `posts`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `author_id` bigint(20) unsigned DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_author_id_foreign` (`author_id`),
  CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `posts`
INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `excerpt`, `status`, `type`, `featured_image`, `views_count`, `author_id`, `published_at`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Penerimaan Peserta Didik Baru (SPMB) SMA IT Rabbani Muara Enim TP 2025/2026 Resmi Dibuka', 'penerimaan-peserta-didik-baru-spmb-sma-it-rabbani-muara-enim-2025-2026', '<p>SMA IT Rabbani Muara Enim (Terakreditasi B) secara resmi membuka Penerimaan Peserta Didik Baru (SPMB) Tahun Pelajaran 2025/2026. Tersedia program <strong>Boarding School (Asrama)</strong> dan <strong>Full Day School</strong>.</p><p>SMA IT Rabbani memiliki keunggulan terbukti: <strong>88% Lulusan Hafal Al-Qur\'an minimal 1 Juz</strong>, <strong>88% Lulusan Masuk Perguruan Tinggi Negeri (PTN)</strong>, dan fasilitas <strong>Bimbel SNBT Gratis</strong> untuk seluruh siswa.</p><p>Dapatkan diskon khusus pendaftaran Gelombang 1: SPP hanya Rp 200.000, Registrasi Ulang Rp 1.000.000 (include seragam sekolah), serta Free Uang Pembangunan & Free Uang Kegiatan! Informasi lengkap silakan hubungi kontak panitia di <strong>0851-5929-3554</strong>.</p>', 'SPMB SMA IT Rabbani Muara Enim TP 2025/2026 resmi dibuka! Tersedia Boarding & Full Day, diskon khusus Gelombang 1, Bimbel SNBT gratis, dan target hafal Qur\'an.', 'publish', 'post', '/uploads/flyer-spmb-smait-rabbani.webp', 1450, NULL, NULL, NULL, NULL, NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(2, 'Komitmen Yayasan Generasi Rabbani Muara Enim Membina Generasi Robbani yang Unggul & Berkarakter', 'komitmen-yayasan-generasi-rabbani-muara-enim-membina-generasi-robbani', '<p>Yayasan Generasi Rabbani Muara Enim terus berkomitmen meningkatkan mutu layanan pendidikan Islam satu atap, mulai dari jenjang TKS IT, SDS IT, SMPS IT, hingga SMA IT Rabbani.</p><p>Dengan integrasi kurikulum nasional Kemendikbudristek dan kurikulum JSIT Indonesia, santri dibekali pondasi akidah yang kokoh, adab islami, tahfidzul Qur\'an mutqin, serta penguasaan sains dan teknologi untuk menyongsong masa depan gemilang.</p>', 'Perjalanan Yayasan Generasi Rabbani Muara Enim dalam menghadirkan ekosistem pendidikan Islam terpadu yang menyeluruh dan unggul di Kabupaten Muara Enim.', 'publish', 'post', '/uploads/banner-yayasan-rabbani.webp', 980, NULL, NULL, NULL, NULL, NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(3, 'Sambutan Pimpinan Yayasan Generasi Rabbani Muara Enim', 'sambutan-kepala-sekolah', '<p><strong>Bismillahirrohmanirrohim. Assalamu\'alaikum Warahmatullahi Wabarakatuh.</strong></p>\n<p>Segala puji dan syukur kita panjatkan ke hadirat Allah Subhanahu Wa Ta\'ala atas segala limpahan rahmat, hidayah, dan inayah-Nya. Sholawat beriring salam senantiasa tercurah kepada uswah hasanah kita, Baginda Nabi Muhammad SAW, beserta keluarga, sahabat, dan pengikutnya yang istiqomah hingga akhir zaman.</p>\n<p>Selamat datang di website resmi <strong>Yayasan Generasi Rabbani Muara Enim</strong> dan <strong>Sekolah Islam Terpadu (SIT) Rabbani</strong>. Di tengah era kemajuan teknologi informasi, portal ini hadir sebagai jembatan komunikasi, informasi, dan transparansi kegiatan pendidikan bagi seluruh orang tua, siswa, dan masyarakat luas.</p>\n<p>Yayasan Generasi Rabbani Muara Enim menaungi empat jenjang pendidikan terpadu satu atap: <strong>TKS IT Rabbani</strong>, <strong>SDS IT Rabbani</strong>, <strong>SMPS IT Rabbani</strong>, dan <strong>SMA IT Rabbani</strong>. Kami berikhtiar sungguh-sungguh menghadirkan ekosistem pembelajaran islami yang holistik, memadukan kurikulum nasional, kurikulum khas Jaringan Sekolah Islam Terpadu (JSIT) Indonesia, pembinaan tahfidz Al-Qur\'an mutqin, serta penguasaan sains dan teknologi.</p>\n<p>Kami menyampaikan penghargaan setinggi-tingginya kepada seluruh asatidz dan asatidzah, staf kependidikan, serta para wali murid yang senantiasa berkolaborasi membersamai langkah kami. Semoga Allah SWT memberkahi setiap langkah perjuangan kita dalam mencetak generasi Qur\'ani yang berkarakter Robbani.</p>\n<p><em>Wassalamu\'alaikum Warahmatullahi Wabarakatuh.</em></p>\n<p><strong>Ketua Yayasan Generasi Rabbani Muara Enim</strong><br>\n<strong>Drs. H. Basuki Wiwoho</strong></p>', 'Sambutan resmi Pimpinan Yayasan Generasi Rabbani Muara Enim, Drs. H. Basuki Wiwoho.', 'publish', 'page', '/uploads/dewan/ust-basuki-wiwoho.webp', 0, NULL, NULL, 'Sambutan Pimpinan Yayasan Generasi Rabbani Muara Enim', 'Sambutan resmi Pimpinan Yayasan Generasi Rabbani Muara Enim, Drs. H. Basuki Wiwoho.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(4, 'Visi dan Misi Yayasan Generasi Rabbani Muara Enim', 'visi-dan-misi', '<h3>VISI YAYASAN & SEKOLAH</h3>\n<blockquote class=\"text-xl font-bold text-school-primary my-4 p-4 border-l-4 border-school-primary bg-indigo-50/70 rounded-r-lg\">\n“MEWUJUDKAN GENERASI ROBBANI YANG CERDAS, BERAKHLAK MULIA, MANDIRI, BERPRESTASI, DAN BERWAWASAN GLOBAL BERLANDASKAN AL-QUR\'AN DAN AS-SUNNAH”\n</blockquote>\n\n<h3>MISI YAYASAN</h3>\n<ol class=\"list-decimal pl-6 space-y-2.5 text-gray-700\">\n    <li><strong>Aqidah & Akhlakul Karimah:</strong> Menanamkan aqidah yang lurus, ibadah yang benar, dan akhlak mulia dalam setiap aspek kehidupan siswa.</li>\n    <li><strong>Tahfidzul Qur\'an Mutqin:</strong> Menyelenggarakan pembelajaran Al-Qur\'an tartil bersanad dan tahfidz dengan target hafalan mutqin di setiap jenjang pendidikan.</li>\n    <li><strong>Keunggulan Akademik & SNBT PTN:</strong> Menghantarkan siswa meraih prestasi akademik unggul serta siap bersaing menembus Perguruan Tinggi Negeri favorit.</li>\n    <li><strong>Pengembangan Karakter Mandiri & Kepemimpinan:</strong> Membina kemandirian, kedisiplinan, dan jiwa kepemimpinan melalui kepanduan Pramuka SIT, Asrama Boarding School, dan organisasi kesiswaan.</li>\n    <li><strong>Sains, Teknologi & Bahasa:</strong> Membekali peserta didik dengan kecakapan literasi digital, eksperimen sains, serta kemampuan berbahasa asing (Arab dan Inggris).</li>\n</ol>\n\n<h3 class=\"mt-8\">TUJUAN PENDIDIKAN</h3>\n<ul class=\"list-disc pl-6 space-y-2 text-gray-700\">\n    <li>Mencetak santri/siswa yang tertib mendirikan sholat fardhu berjamaah dan membiasakan amalan sunnah.</li>\n    <li>Mencapai target hafalan Al-Qur\'an mutqin sesuai jenjang pendidikan.</li>\n    <li>Membekali lulusan SMA IT Rabbani agar sukses menembus PTN impian (terbukti 88% lulusan tembus PTN).</li>\n    <li>Membentuk pribadi pembelajar sepanjang hayat yang adaptif, inovatif, dan berjiwa sosial tinggi.</li>\n</ul>', 'Visi, Misi, dan Tujuan penyelenggaraan pendidikan SIT Rabbani Muara Enim.', 'publish', 'page', '/uploads/logo-rabbani.png', 0, NULL, NULL, 'Visi dan Misi Yayasan Generasi Rabbani Muara Enim', 'Visi, Misi, dan Tujuan penyelenggaraan pendidikan SIT Rabbani Muara Enim.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(5, 'Profil Yayasan Generasi Rabbani Muara Enim', 'tentang-kami', '<h3>Profil Singkat Lembaga</h3>\n<p><strong>Yayasan Generasi Rabbani Muara Enim</strong> adalah lembaga yayasan pendidikan Islam yang menaungi <strong>Sekolah Islam Terpadu (SIT) Rabbani</strong> di Kabupaten Muara Enim, Sumatera Selatan. Menyelenggarakan pendidikan satu atap dari jenjang Anak Usia Dini hingga Sekolah Menengah Atas:</p>\n<ul class=\"list-disc pl-6 space-y-1.5 my-3\">\n    <li><strong>TKS IT Rabbani Muara Enim</strong> (NPSN: 10647514) - Pembelajaran sentra usia dini & tahfidz cilik.</li>\n    <li><strong>SDS IT Rabbani Muara Enim</strong> (NPSN: 10648045) - Sekolah Dasar terpadu dengan target tahfidz mutqin dan 10 Muwashofat JSIT.</li>\n    <li><strong>SMPS IT Rabbani Muara Enim</strong> (NPSN: 69920340) - Sekolah Menengah Pertama Full Day School berkarakter Islami.</li>\n    <li><strong>SMA IT Rabbani Muara Enim</strong> (NPSN: 70010515) - Boarding School & Full Day School dengan fasilitas Bimbingan SNBT Gratis (88% Lulusan Hafal Qur\'an & Masuk PTN).</li>\n</ul>\n\n<h4 class=\"mt-6 font-bold text-gray-900\">Identitas Lembaga</h4>\n<table class=\"w-full text-left border-collapse my-4 text-sm\">\n    <tr class=\"border-b\"><td class=\"py-2.5 font-semibold w-1/3 text-gray-800\">Nama Yayasan</td><td class=\"py-2.5 text-gray-700\">YAYASAN GENERASI RABBANI MUARA ENIM</td></tr>\n    <tr class=\"border-b\"><td class=\"py-2.5 font-semibold text-gray-800\">Satuan Pendidikan</td><td class=\"py-2.5 text-gray-700\">TKS IT, SDS IT, SMPS IT, &amp; SMA IT Rabbani</td></tr>\n    <tr class=\"border-b\"><td class=\"py-2.5 font-semibold text-gray-800\">Ketua Yayasan</td><td class=\"py-2.5 text-gray-700\">Drs. H. Basuki Wiwoho</td></tr>\n    <tr class=\"border-b\"><td class=\"py-2.5 font-semibold text-gray-800\">Alamat Kampus</td><td class=\"py-2.5 text-gray-700\">Jl. Proklamasi No. 80, Kelurahan Air Lintang, Kec. Muara Enim, Kab. Muara Enim, Sumsel 31311</td></tr>\n    <tr class=\"border-b\"><td class=\"py-2.5 font-semibold text-gray-800\">Telepon / WhatsApp</td><td class=\"py-2.5 text-gray-700\">0851-5929-3554</td></tr>\n    <tr class=\"border-b\"><td class=\"py-2.5 font-semibold text-gray-800\">Email Resmi</td><td class=\"py-2.5 text-gray-700\">yayasangerabbani@gmail.com</td></tr>\n</table>', 'Profil resmi Yayasan Generasi Rabbani Muara Enim & Sekolah Islam Terpadu Rabbani.', 'publish', 'page', '/uploads/banner-yayasan-rabbani.webp', 0, NULL, NULL, 'Profil Yayasan Generasi Rabbani Muara Enim', 'Profil resmi Yayasan Generasi Rabbani Muara Enim & Sekolah Islam Terpadu Rabbani.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(6, 'Sejarah Berdirinya Yayasan Generasi Rabbani Muara Enim', 'sejarah', '<h3>Perjalanan & Latar Belakang Pendirian</h3>\n<p><strong>Yayasan Generasi Rabbani Muara Enim</strong> berawal dari tekad para tokoh dan pendidik muslim di Kabupaten Muara Enim untuk menghadirkan institusi pendidikan yang mampu melahirkan generasi penghafal Al-Qur\'an sekaligus unggul dalam sains dan teknologi.</p>\n<p>Langkah awal diawali dengan hadirnya unit pendidikan anak usia dini dan sekolah dasar. Sambutan hangat masyarakat yang mendambakan kelanjutan pendidikan islami terpadu mendorong lahirnya jenjang SMPS IT Rabbani dan SMA IT Rabbani Boarding School.</p>\n<p>Kini, dengan izin Allah SWT, SIT Rabbani Muara Enim telah berkembang pesat menjadi lembaga rujukan pendidikan Islam terpadu satu atap terkemuka di Kabupaten Muara Enim dengan ribuan alumni yang tersebar di berbagai perguruan tinggi negeri terkemuka di Indonesia.</p>', 'Napak tilas perjalanan dan sejarah perjuangan pendidikan SIT Rabbani di Kabupaten Muara Enim.', 'publish', 'page', '/uploads/campus-sit-rabbani.webp', 0, NULL, NULL, 'Sejarah Berdirinya Yayasan Generasi Rabbani Muara Enim', 'Napak tilas perjalanan dan sejarah perjuangan pendidikan SIT Rabbani di Kabupaten Muara Enim.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(7, 'Struktur Organisasi Yayasan Generasi Rabbani Muara Enim', 'struktur-organisasi', '<h3>Bagan Manajemen Yayasan & Satuan Pendidikan</h3>\n<ul class=\"space-y-3 text-gray-800\">\n    <li><strong>Ketua Yayasan Generasi Rabbani:</strong> Drs. H. Basuki Wiwoho</li>\n    <li><strong>Kepala SMA IT Rabbani Muara Enim:</strong> Pimpinan Satuan SMA IT</li>\n    <li><strong>Kepala SMPS IT Rabbani Muara Enim:</strong> Pimpinan Satuan SMPS IT</li>\n    <li><strong>Kepala SDS IT Rabbani Muara Enim:</strong> Pimpinan Satuan SDS IT</li>\n    <li><strong>Kepala TKS IT Rabbani Muara Enim:</strong> Pimpinan Satuan TKS IT</li>\n    <li><strong>Dewan Asatidz & GTK:</strong> Para pendidik profesional dan musyrif asrama berpengalaman.</li>\n</ul>', 'Bagan kepemimpinan yayasan dan para kepala satuan pendidikan SIT Rabbani.', 'publish', 'page', '/uploads/struktur-yayasan-rabbani.webp', 0, NULL, NULL, 'Struktur Organisasi Yayasan Generasi Rabbani Muara Enim', 'Bagan kepemimpinan yayasan dan para kepala satuan pendidikan SIT Rabbani.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(8, 'Infaq & Wakaf Pembangunan Yayasan Generasi Rabbani Muara Enim', 'donasi', '<h3>Investasi Akhirat Melalui Pendidikan Islam Terpadu</h3>\n<p>Yayasan Generasi Rabbani Muara Enim membuka kesempatan seluas-luasnya bagi kaum muslimin dan para muhsinin untuk mengalirkan amal jariyah melalui pembangunan sarana ruang kelas, masjid kampus terpadu, asrama santri, laboratorium komputer, serta beasiswa pendidikan santri yatim dan dhuafa berprestasi.</p>', 'Salurkan infaq dan wakaf terbaik Anda untuk sarana pendidikan Islam dan beasiswa tahfidz di Muara Enim.', 'publish', 'page', '/uploads/campus-sit-rabbani.webp', 0, NULL, NULL, 'Infaq & Wakaf Pembangunan Yayasan Generasi Rabbani Muara Enim', 'Salurkan infaq dan wakaf terbaik Anda untuk sarana pendidikan Islam dan beasiswa tahfidz di Muara Enim.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(9, 'E-Library & Modul Pembelajaran SIT Rabbani Muara Enim', 'e-book', '<h3>Pusat E-Library & Buku Digital Santri</h3>\n<p>Daftar koleksi buku panduan kurikulum tahfidz mutqin, pedoman karakter 10 Muwashofat JSIT, serta modul praktikum yang dapat diunduh civitas akademika SIT Rabbani Muara Enim.</p>', 'Kumpulan buku pelajaran, panduan kurikulum, dan modul e-library santri SIT Rabbani.', 'publish', 'page', '/uploads/campus-smait-rabbani.webp', 0, NULL, NULL, 'E-Library & Modul Pembelajaran SIT Rabbani Muara Enim', 'Kumpulan buku pelajaran, panduan kurikulum, dan modul e-library santri SIT Rabbani.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(10, 'Mars & Hymne Jaringan Sekolah Islam Terpadu (JSIT)', 'hymne-mars', '<h3>Mars JSIT Indonesia</h3>\n<p class=\"italic text-gray-600\">Membina tunas bangsa, beriman dan bertaqwa, cerdas berakhlak mulia...</p>', 'Lagu mars dan hymne kebanggaan Sekolah Islam Terpadu SIT Rabbani Muara Enim.', 'publish', 'page', '/uploads/logo-rabbani.png', 0, NULL, NULL, 'Mars & Hymne Jaringan Sekolah Islam Terpadu (JSIT)', 'Lagu mars dan hymne kebanggaan Sekolah Islam Terpadu SIT Rabbani Muara Enim.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(11, 'Makna Filosofis Logo Yayasan Generasi Rabbani Muara Enim', 'logo', '<h3>Filosofi Lambang Yayasan Generasi Rabbani Muara Enim</h3>\n<p>Logo Yayasan Generasi Rabbani Muara Enim didesain dengan bentuk bintang segi delapan berlatar kuning cerah yang melambangkan cahaya Islam, keluhuran budi pekerti, dan kejayaan ilmu pengetahuan. Tulisan arab \'Robbani\' di bagian tengah menegaskan komitmen mencetak generasi yang selalu terhubung dengan Allah SWT dan berpegang teguh pada Al-Qur\'an dan As-Sunnah.</p>', 'Makna lambang bintang bersegi delapan, lengkungan, dan nama Generasi Rabbani Muara Enim.', 'publish', 'page', '/uploads/logo-rabbani.png', 0, NULL, NULL, 'Makna Filosofis Logo Yayasan Generasi Rabbani Muara Enim', 'Makna lambang bintang bersegi delapan, lengkungan, dan nama Generasi Rabbani Muara Enim.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(12, 'Kontak & Sekretariat Yayasan Generasi Rabbani Muara Enim', 'hubungi', '<h3>Sekretariat Yayasan & Panitia SPMB</h3>\n<p>Kunjungi kampus kami atau hubungi panitia SPMB untuk informasi pendaftaran santri baru gelombang 1, program boarding school SMA IT, dan fasilitas beasiswa.</p>\n<p><strong>Alamat Kampus:</strong> Jl. Proklamasi No. 80, Kelurahan Air Lintang, Kec. Muara Enim, Kab. Muara Enim, Sumatera Selatan 31311.<br>\n<strong>WhatsApp / Hotline:</strong> 0851-5929-3554<br>\n<strong>Email:</strong> yayasangerabbani@gmail.com</p>', 'Alamat dan kontak resmi sekretariat Yayasan Generasi Rabbani dan Panitia SPMB.', 'publish', 'page', '/uploads/banner-yayasan-rabbani.webp', 0, NULL, NULL, 'Kontak & Sekretariat Yayasan Generasi Rabbani Muara Enim', 'Alamat dan kontak resmi sekretariat Yayasan Generasi Rabbani dan Panitia SPMB.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(13, 'Kebijakan Privasi Yayasan Generasi Rabbani Muara Enim', 'privacy-policy', '<h3>Kebijakan Privasi Yayasan Generasi Rabbani Muara Enim</h3>\n<p>Yayasan Generasi Rabbani Muara Enim berkomitmen melindungi privasi pengunjung dan calon peserta didik baru yang mengisi formulir SPMB melalui website resmi ini.</p>', 'Kebijakan privasi dan perlindungan data pengguna website resmi Yayasan Generasi Rabbani.', 'publish', 'page', '/uploads/logo-rabbani.png', 0, NULL, NULL, 'Kebijakan Privasi Yayasan Generasi Rabbani Muara Enim', 'Kebijakan privasi dan perlindungan data pengguna website resmi Yayasan Generasi Rabbani.', NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(14, 'Keluarga Besar Yayasan Generasi Rabbani Muara Enim', 'keluarga-besar-yayasan-generasi-rabbani-muara-enim-1', 'Keluarga Besar Yayasan Generasi Rabbani Muara Enim', NULL, 'publish', 'gallery', '/uploads/banner-yayasan-rabbani.webp', 0, 1, '2026-11-16 21:29:40', NULL, NULL, NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(15, 'Gedung Kampus Terpadu SIT Rabbani Muara Enim', 'gedung-kampus-terpadu-sit-rabbani-muara-enim-2', 'Gedung Kampus Terpadu SIT Rabbani Muara Enim', NULL, 'publish', 'gallery', '/uploads/campus-sit-rabbani.webp', 0, 1, '2026-11-16 22:29:40', NULL, NULL, NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(16, 'Kampus SMA IT Rabbani Muara Enim Boarding School', 'kampus-sma-it-rabbani-muara-enim-boarding-school-3', 'Kampus SMA IT Rabbani Muara Enim Boarding School', NULL, 'publish', 'gallery', '/uploads/campus-smait-rabbani.webp', 0, 1, '2026-11-16 23:29:40', NULL, NULL, NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(17, 'Kampus SMPS IT Rabbani Muara Enim', 'kampus-smps-it-rabbani-muara-enim-4', 'Kampus SMPS IT Rabbani Muara Enim', NULL, 'publish', 'gallery', '/uploads/campus-smpit-rabbani.webp', 0, 1, '2026-11-17 00:29:40', NULL, NULL, NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(18, 'Apresiasi Siswa Berprestasi SIT Rabbani Muara Enim', 'apresiasi-siswa-berprestasi-sit-rabbani-muara-enim-5', 'Apresiasi Siswa Berprestasi SIT Rabbani Muara Enim', NULL, 'publish', 'gallery', '/uploads/prestasi-sit-rabbani.webp', 0, 1, '2026-11-17 01:29:40', NULL, NULL, NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(19, 'Kegiatan Kepanduan Pramuka SIT Rabbani Muara Enim', 'kegiatan-kepanduan-pramuka-sit-rabbani-muara-enim-6', 'Kegiatan Kepanduan Pramuka SIT Rabbani Muara Enim', NULL, 'publish', 'gallery', '/uploads/kegiatan-pramuka-rabbani.webp', 0, 1, '2026-11-17 02:29:40', NULL, NULL, NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(20, 'Pembinaan Tahfidz Al-Qur\'an & Wisuda Santri Rabbani', 'pembinaan-tahfidz-al-quran-wisuda-santri-rabbani-7', 'Pembinaan Tahfidz Al-Qur\'an & Wisuda Santri Rabbani', NULL, 'publish', 'gallery', '/uploads/tahfidz-sit-rabbani.webp', 0, 1, '2026-11-17 03:29:40', NULL, NULL, NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(21, 'Informasi SPMB SMA IT Rabbani Muara Enim', 'informasi-spmb-sma-it-rabbani-muara-enim-8', 'Informasi SPMB SMA IT Rabbani Muara Enim', NULL, 'publish', 'gallery', '/uploads/flyer-spmb-smait-rabbani.webp', 0, 1, '2026-11-17 04:29:40', NULL, NULL, NULL, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(22, 'Keseruan Sentra Seni & Eksplorasi Motorik Anak TKS IT Rabbani Muara Enim', 'keseruan-sentra-seni-dan-eksplorasi-motorik-tks-it-rabbani', '<p>Suasana riang gembira mewarnai aktivitas belajar di TKS Islam Terpadu Rabbani Muara Enim pada Sentra Seni dan Kreativitas. Didampingi para bunda pendidik yang ramah, anak-anak diajak menuangkan ide cerita melalui media gambar dan aneka teknik kreasi.</p><p>Pendekatan sentra usia dini memberikan ruang seluas-luasnya bagi anak untuk bereksplorasi secara merdeka, mengasah motorik halus, sekaligus menumbuhkan rasa percaya diri dan adab islami.</p>', 'Anak-anak kelompok bermain TKS IT Rabbani antusias mengekspresikan imajinasi melalui jurnal gambar dan eksplorasi warna di sentra kreativitas.', 'publish', 'post', '/uploads/campus-sit-rabbani.webp', 636, NULL, '2026-11-12 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(23, 'Pentas Ekspresi & Manasik Haji Cilik TKS IT Rabbani: Mengenal Rukun Islam Sejak Dini', 'pentas-ekspresi-dan-manasik-haji-cilik-tks-it-rabbani', '<p>Ratusan ananda sholeh dan sholehah TKS IT Rabbani Muara Enim mengenakan pakaian ihram putih mengikuti peragaan <strong>Manasik Haji Cilik</strong> di halaman kampus terpadu Rabbani.</p><p>Kegiatan edukatif ini bertujuan mengenalkan tata cara ibadah haji, melatih kesabaran, serta menanamkan rasa cinta kepada baitullah sejak masa usia keemasan (golden age).</p>', 'Mengenalkan rukun Islam kelima dan adab tawaf sejak usia dini dalam peragaan Manasik Haji Cilik TKS IT Rabbani Muara Enim.', 'publish', 'post', '/uploads/prestasi-sit-rabbani.webp', 345, NULL, '2026-11-15 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(24, 'Pelaksanaan ANBK SDS IT Rabbani di Laboratorium Komputer Berlangsung Tertib & Lancar', 'pelaksanaan-anbk-sds-it-rabbani-berlangsung-sukses', '<p>Pelaksanaan Asesmen Nasional Berbasis Komputer (ANBK) di SDS Islam Terpadu Rabbani Muara Enim berjalan tertib, aman, dan tanpa kendala teknis. Siswa kelas 5 mengikuti seluruh sesi literasi membaca dan numerasi di ruang laboratorium komputer sekolah.</p><p>Dengan fasilitas komputer modern dan jaringan internet yang memadai, para siswa dapat mengerjakan instrumen asesmen dengan tenang dan penuh rasa percaya diri.</p>', 'Siswa kelas 5 SDS IT Rabbani Muara Enim sukses menyelesaikan Asesmen Nasional Berbasis Komputer (ANBK) dengan fasilitas laboratorium komputer modern.', 'publish', 'post', '/uploads/prestasi-sit-rabbani.webp', 512, NULL, '2026-11-10 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(25, 'Program Munaqosah Tahfidz 2 Juz Mutqin SDS IT Rabbani Cetak Generasi Penjaga Al-Qur\'an', 'program-munaqosah-tahfidz-2-juz-mutqin-sds-it-rabbani', '<p>SDS IT Rabbani menyelenggarakan agenda tahunan <strong>Munaqosah dan Uji Publik Tahfidz Al-Qur\'an</strong>. Di hadapan dewan penguji dan orang tua wali, puluhan santri cilik membuktikan kelancaran hafalan juz 30 dan 29 dengan bacaan tartil sesuai kaidah tajwid.</p>', 'Uji publik hafalan Al-Qur\'an Juz 30 dan 29 mutqin bersanad bagi siswa sekolah dasar di SDS IT Rabbani Muara Enim.', 'publish', 'post', '/uploads/tahfidz-sit-rabbani.webp', 542, NULL, '2026-11-05 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(26, 'Peringatan Hari Pramuka & Kemah Bakti Santri SMPS IT Rabbani Muara Enim', 'peringatan-hari-pramuka-dan-kemah-bakti-santri-smps-it-rabbani', '<p>Gugus Depan Satuan Komunitas Pramuka Sekolah Islam Terpadu SMPS IT Rabbani Muara Enim sukses menggelar Perkemahan Karakter dan Lomba Kepanduan. Santri dilatih keterampilan pioneering, navigasi kompas, sandi morse, serta pengabdian masyarakat sekitar kampus.</p>', 'Membangun karakter tangguh, disiplin, dan persaudaraan islami melalui perkemahan kepanduan SIT SMPS IT Rabbani Muara Enim.', 'publish', 'post', '/uploads/kegiatan-pramuka-rabbani.webp', 296, NULL, '2026-11-05 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(27, 'Eksplorasi Sains & Praktikum Laboratorium IPA Terpadu Santri SMPS IT Rabbani', 'eksplorasi-sains-dan-praktikum-laboratorium-ipa-smps-it-rabbani', '<p>Santri SMPS IT Rabbani secara antusias mempraktikkan pengamatan sel biologi dan pengukuran fisika di laboratorium terpadu. Pembelajaran berbasis inkuiri sains melatih siswa memecahkan masalah berbasis pembuktian empiris yang selaras dengan tadabbur alam semesta ciptaan Allah SWT.</p>', 'Mengasah nalar kritis dan kecintaan sains melalui kegiatan eksperimen mikroskopi dan reaksi kimia ramah lingkungan.', 'publish', 'post', '/uploads/campus-smpit-rabbani.webp', 561, NULL, '2026-11-07 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(28, 'Bangga! 88% Lulusan SMA IT Rabbani Sukses Menembus Perguruan Tinggi Negeri Favorit', 'bangga-88-persen-lulusan-sma-it-rabbani-tembus-ptn-favorit', '<p>Kabar membanggakan datang dari SMA IT Rabbani Muara Enim. Sebanyak <strong>88% alumni lulusan berhasil lolos seleksi masuk Perguruan Tinggi Negeri (PTN)</strong> favorit melalui berbagai jalur (SNBP, SNBT, dan Jalur Prestasi Mandiri).</p><p>Keberhasilan ini membuktikan efektivitas program Bimbingan Belajar SNBT Gratis yang terintegrasi langsung dalam kurikulum pembelajaran SMA IT Rabbani bersama program penguatan tahfidz Al-Qur\'an minimal 1 juz mutqin.</p>', 'Melalui bimbingan SNBT gratis dan pembinaan akademik intensif, mayoritas alumni angkatan SMA IT Rabbani diterima di berbagai PTN unggulan.', 'publish', 'post', '/uploads/flyer-spmb-smait-rabbani.webp', 669, NULL, '2026-11-10 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(29, 'Kultur Asrama Boarding School SMA IT Rabbani: Bentuk Kemandirian, Disiplin, & Ukhuwah', 'kultur-asrama-boarding-school-sma-it-rabbani-muara-enim', '<p>Kehidupan asrama di SMA IT Rabbani Muara Enim dirancang untuk mencetak generasi pemimpin masa depan yang kokoh imannya dan luas wawasannya. Di bawah bimbingan musyrif dan musyrifah 24 jam, santri membiasakan sholat berjamaah 5 waktu, qiyamul lail, dzikir pagi-petang, serta pendalaman kitab dan bahasa internasional.</p>', 'Mengenal keseharian santri asrama SMA IT Rabbani dari sholat tahajud, halaqah Qur\'an, hingga literasi digital modern.', 'publish', 'post', '/uploads/campus-smait-rabbani.webp', 932, NULL, '2026-11-06 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(30, 'Juara 1 Lomba Mewarnai Tingkat PAUD/TK se-Kabupaten Muara Enim', 'juara-1-lomba-mewarnai-paud-tk-kabupaten-muara-enim', '<p>Prestasi membanggakan ditorehkan oleh ananda <strong>Aisyah Humaira</strong>, siswi kelompok TK B TKS Islam Terpadu Rabbani Muara Enim yang sukses meraih <strong>Juara 1 Lomba Mewarnai</strong> pada Gebyar PAUD tingkat Kabupaten Muara Enim.</p>', 'Ananda Aisyah Humaira dari TKS IT Rabbani berhasil meraih Juara 1 dalam Lomba Mewarnai Tingkat Kabupaten Muara Enim.', 'publish', 'prestasi', '/uploads/campus-sit-rabbani.webp', 685, NULL, '2026-10-29 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(31, 'Juara 1 Lomba Tahfidz Cilik Surat Pendek Festival Anak Sholeh Muara Enim', 'juara-1-lomba-tahfidz-cilik-festival-anak-sholeh-muara-enim', '<p>Ananda <strong>M. Fatih Al-Farabi</strong> dari TKS IT Rabbani Muara Enim berhasil meraih <strong>Juara 1 Lomba Tahfidz Cilik</strong> dalam ajang Festival Anak Sholeh Kabupaten Muara Enim dengan kelancaran hafalan dan makhraj yang fasih.</p>', 'M. Fatih Al-Farabi mengharumkan nama TKS IT Rabbani dengan meraih Juara 1 Tahfidz Cilik Juz 30.', 'publish', 'prestasi', '/uploads/tahfidz-sit-rabbani.webp', 1049, NULL, '2026-10-10 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(32, 'Juara 1 Olimpiade Sains Nasional (OSN) Bidang IPA SD se-Kabupaten Muara Enim', 'juara-1-olimpiade-sains-nasional-ipa-sd-kabupaten-muara-enim', '<p>Prestasi gemilang kembali diraih oleh keluarga besar SDS Islam Terpadu Rabbani Muara Enim. Siswa atas nama <strong>Muhammad Rayhan</strong> sukses menyabet gelar <strong>Juara 1 Olimpiade Sains Nasional (OSN)</strong> bidang IPA tingkat Kabupaten Muara Enim.</p>', 'Siswa SDS IT Rabbani Muara Enim sukses menorehkan prestasi puncak sebagai Juara 1 OSN IPA Tingkat Kabupaten.', 'publish', 'prestasi', '/uploads/prestasi-sit-rabbani.webp', 709, NULL, '2026-10-24 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(33, 'Juara 1 Musabaqah Hifdzil Qur\'an (MHQ) 2 Juz Tingkat Pelajar Muara Enim', 'juara-1-mhq-2-juz-tingkat-pelajar-muara-enim', '<p>Santriwati SDS IT Rabbani Muara Enim, <strong>Khadijah Azzahra</strong>, sukses meraih predikat <strong>Juara 1 Musabaqah Hifdzil Qur\'an (MHQ) Cabang 2 Juz</strong> pada kejuaraan pelajar Kabupaten Muara Enim.</p>', 'Khadijah Azzahra membuktikan kualitas hafalan Qur\'an SDS IT Rabbani dengan meraih Juara 1 MHQ 2 Juz.', 'publish', 'prestasi', '/uploads/tahfidz-sit-rabbani.webp', 515, NULL, '2026-10-20 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(34, 'Juara 1 English Speech & Story Telling Tingkat SMP se-Kabupaten Muara Enim', 'juara-1-english-speech-story-telling-smp-muara-enim', '<p>Kemampuan berbahasa asing santri SMPS IT Rabbani kembali diakui. Santri SMPS IT Rabbani berhasil meraih <strong>Juara 1 English Speech Competition</strong> pada Festival Bahasa Pelajar Kabupaten Muara Enim.</p>', 'Santri SMPS IT Rabbani Muara Enim meraih Juara 1 Lomba Pidato Bahasa Inggris bergengsi tingkat kabupaten.', 'publish', 'prestasi', '/uploads/campus-smpit-rabbani.webp', 1474, NULL, '2026-10-09 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(35, 'Juara Umum Perkemahan Pramuka SIT se-Kabupaten Muara Enim', 'juara-umum-perkemahan-pramuka-sit-muara-enim', '<p>Regu Pandu SIT SMPS IT Rabbani Muara Enim berhasil mengukir sejarah dengan dinobatkan sebagai <strong>Juara Umum</strong> dalam Perkemahan Sekolah Islam Terpadu se-Kabupaten Muara Enim.</p>', 'Regu Pramuka SIT SMPS IT Rabbani memborong piala dan meraih trofi Juara Umum Kepanduan.', 'publish', 'prestasi', '/uploads/kegiatan-pramuka-rabbani.webp', 1384, NULL, '2026-10-03 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(36, 'Pencapaian Gemilang: 88% Lulusan SMA IT Rabbani Diterima di PTN & Kampus Unggulan', 'pencapaian-gemilang-88-persen-lulusan-sma-it-rabbani-diterima-ptn', '<p>Sebuah kebanggaan besar bagi civitas akademika SMA IT Rabbani Muara Enim karena <strong>88% lulusan angkatan terbukti sukses menembus Perguruan Tinggi Negeri (PTN)</strong> favorit, didukung program Bimbel SNBT gratis dan pembinaan karir siswa.</p>', 'Sebanyak 88% santri SMA IT Rabbani Muara Enim berhasil lolos menembus perguruan tinggi negeri favorit di Indonesia.', 'publish', 'prestasi', '/uploads/flyer-spmb-smait-rabbani.webp', 808, NULL, '2026-10-10 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(37, 'Juara 1 Kejuaraan Pencak Silat Tapak Suci Pelajar Tingkat Kabupaten Muara Enim', 'juara-1-kejuaraan-pencak-silat-tapak-suci-pelajar-muara-enim', '<p>Santri SMA IT Rabbani Muara Enim sukses memboyong <strong>Medali Emas Juara 1</strong> pada Kejuaraan Pencak Silat Tapak Suci antarpelajar se-Kabupaten Muara Enim pada kategori tanding putra.</p>', 'Santri SMA IT Rabbani menorehkan prestasi gemilang dengan menyabet Medali Emas Tapak Suci.', 'publish', 'prestasi', '/uploads/kegiatan-pramuka-rabbani.webp', 702, NULL, '2026-10-07 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(38, 'Juara 1 Turnamen Bola Voli Antar SMA/SMK se-Kabupaten Muara Enim', 'juara-1-turnamen-bola-voli-antar-sma-muara-enim', '<p>Kekompakan tim bola voli SMA IT Rabbani Muara Enim membuahkan hasil membanggakan dengan merebut gelar <strong>Juara 1</strong> setelah melalui babak final sengit di hadapan ratusan penonton.</p>', 'Tim Voli SMA IT Rabbani keluar sebagai Juara Pertama dalam turnamen olahraga pelajar tahunan.', 'publish', 'prestasi', '/uploads/campus-smait-rabbani.webp', 1062, NULL, '2026-10-25 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(39, 'Pramuka SIT (Sekolah Islam Terpadu)', 'pramuka-sit', '<p>Ekstrakurikuler Pramuka SIT (Satuan Komunitas Pramuka Sekolah Islam Terpadu) di SIT Rabbani Muara Enim merupakan wadah pembinaan karakter, kedisiplinan, kemandirian, dan kepemimpinan berlandaskan nilai-nilai Islam. Melalui kegiatan perkemahan, penjelajahan alam, tali temali, semaphore, dan bakti sosial, para santri dilatih untuk tangguh, siap menolong sesama, dan berjiwa ksatria.</p>', 'Kepanduan berkarakter Islam melatih kemandirian, kepemimpinan, tali temali, dan kecintaan pada alam terbuka.', 'publish', 'ekskul', '/uploads/kegiatan-pramuka-rabbani.webp', 0, 1, '2026-11-09 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(40, 'OSIS Rabbani (Organisasi Siswa Intra Sekolah)', 'osis-rabbani', '<p>OSIS Rabbani membina santri dalam tata kelola kepemimpinan, kepanitiaan acara, musyawarah, serta memfasilitasi aspirasi dan kreativitas siswa dalam berbagai event sekolah dan dakwah kepemudaan.</p>', 'Wadah pembentukan karakter kepemimpinan, manajemen organisasi, dan kreasi kegiatan santri.', 'publish', 'ekskul', '/uploads/prestasi-sit-rabbani.webp', 0, 1, '2026-11-10 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(41, 'Bola Voli & Olahraga Prestasi', 'bola-voli-dan-olahraga-prestasi', '<p>Melatih fisik yang kuat (Qowiyyul Jismi), ketahanan tubuh, kekompakan tim, dan sportivitas melalui latihan teknik passing, smash, block, serta partisipasi dalam turnamen antarpelajar se-Kabupaten Muara Enim.</p>', 'Pembinaan kebugaran jasmani, sportivitas, dan keterampilan teknik olahraga bola voli beregu.', 'publish', 'ekskul', '/uploads/campus-sit-rabbani.webp', 0, 1, '2026-11-11 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(42, 'PMR (Palang Merah Remaja)', 'pmr-palang-merah-remaja', '<p>Mendidik santri agar sigap dalam penanganan medis darurat, pertolongan pertama pada kecelakaan (P3K), donor darah, serta menumbuhkan jiwa kerelawanan dan kepedulian sosial tinggi.</p>', 'Keterampilan pertolongan pertama, kepedulian kemanusiaan, dan kesehatan lingkungan sekolah.', 'publish', 'ekskul', '/uploads/campus-smait-rabbani.webp', 0, 1, '2026-11-12 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(43, 'Marawis, Hadroh & Nasyid Islami', 'marawis-dan-hadroh-islami', '<p>Wadah apresiasi seni budaya Islam yang melatih ketukan rebana hadroh/marawis, olah vokal sholawat, dan pembawaan nasyid untuk mengisi berbagai haflah dan perlombaan seni islami.</p>', 'Seni musik perkusi islami, lantunan sholawat, dan pengasahan bakat seni religi santri.', 'publish', 'ekskul', '/uploads/banner-yayasan-rabbani.webp', 0, 1, '2026-11-13 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(44, 'Multimedia & Jurnalistik', 'multimedia-dan-jurnalistik', '<p>Membekali santri keterampilan kreatif abad 21 meliputi teknik fotografi, pembuatan video konten dakwah edukatif, editing digital, penulisan berita, dan manajemen publikasi sekolah.</p>', 'Pelatihan desain grafis, fotografi, sinematografi, liputan berita, dan pengelolaan media digital.', 'publish', 'ekskul', '/uploads/campus-smpit-rabbani.webp', 0, 1, '2026-11-14 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(45, 'Tapak Suci Putera Muhammadiyah (Bela Diri)', 'tapak-suci-bela-diri', '<p>Seni bela diri pencak silat Tapak Suci menanamkan keimanan, akhlak terpuji, keberanian, disiplin, dan penguasaan jurus-jurus pencak silat prestasi untuk kejuaraan tingkat daerah hingga nasional.</p>', 'Seni bela diri pencak silat berakhlak mulia untuk kebugaran, pertahanan diri, dan prestasi kejuaraan.', 'publish', 'ekskul', '/uploads/kegiatan-pramuka-rabbani.webp', 0, 1, '2026-11-15 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(46, 'TPA & Bimbingan Belajar SNBT Gratis', 'tpa-dan-bimbel-snbt-gratis', '<p>Program unggulan SMA IT Rabbani yang mengombinasikan pemantapan bacaan dan hafalan Al-Qur\'an bersama program Bimbel SNBT Gratis guna mengantarkan 88% lulusan sukses menembus PTN impian.</p>', 'Pendalaman Al-Qur\'an dan bimbingan intensif persiapan tembus Perguruan Tinggi Negeri (PTN) favorit.', 'publish', 'ekskul', '/uploads/tahfidz-sit-rabbani.webp', 0, 1, '2026-11-16 07:29:41', NULL, NULL, NULL, '2026-11-17 07:29:41', '2026-11-17 07:29:41');

-- --------------------------------------------------------
-- Table structure for `post_category`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `post_category`;
CREATE TABLE `post_category` (
  `post_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`post_id`,`category_id`),
  KEY `post_category_category_id_foreign` (`category_id`),
  CONSTRAINT `post_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `post_category_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `post_category`
INSERT INTO `post_category` (`post_id`, `category_id`) VALUES
(22, 8),
(23, 8),
(24, 9),
(25, 9),
(26, 10),
(27, 10),
(28, 11),
(29, 11),
(30, 13),
(31, 13),
(32, 14),
(33, 14),
(34, 15),
(35, 15),
(36, 16),
(37, 16),
(38, 16);

-- --------------------------------------------------------
-- Table structure for `post_tag`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `post_tag`;
CREATE TABLE `post_tag` (
  `post_id` bigint(20) unsigned NOT NULL,
  `tag_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`post_id`,`tag_id`),
  KEY `post_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `post_tag`
INSERT INTO `post_tag` (`post_id`, `tag_id`) VALUES
(1, 4),
(1, 5),
(1, 9),
(2, 1),
(2, 4),
(2, 8);

-- --------------------------------------------------------
-- Table structure for `agendas`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `agendas`;
CREATE TABLE `agendas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `agendas_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `agendas`
INSERT INTO `agendas` (`id`, `title`, `slug`, `content`, `location`, `event_date`, `status`, `featured_image`, `created_at`, `updated_at`, `file_attachment`) VALUES
(1, 'Sosialisasi & Orientasi Peserta Didik Baru SIT Rabbani Muara Enim', 'sosialisasi-dan-orientasi-peserta-didik-baru-sit-rabbani-muara-enim', 'Temu silaturahim orang tua/wali murid baru dan pengenalan program pembiasaan ibadah serta kurikulum terpadu SIT Rabbani Muara Enim.', 'Kompleks Kampus SIT Rabbani Muara Enim', '2026-07-15 08:00:00', 'publish', '/uploads/campus-sit-rabbani.webp', '2026-11-17 07:29:40', '2026-11-17 07:29:40', NULL);

-- --------------------------------------------------------
-- Table structure for `pengumumen`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `pengumumen`;
CREATE TABLE `pengumumen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `file_attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pengumumen_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `pengumumen`
INSERT INTO `pengumumen` (`id`, `title`, `slug`, `content`, `file_attachment`, `status`, `featured_image`, `created_at`, `updated_at`) VALUES
(1, 'Pengumuman Resmi SPMB Gelombang 1 SIT Rabbani Muara Enim', 'pengumuman-resmi-spmb-gelombang-1-sit-rabbani-muara-enim', 'Pendaftaran SPMB SIT Rabbani Muara Enim (TK IT, SD IT, SMP IT, dan SMA IT) telah dibuka. Pendaftaran online dapat diakses melalui website resmi atau hotline WhatsApp 0851-5929-3554.', '/uploads/flyer-spmb-smait-rabbani.webp', 'publish', '/uploads/flyer-spmb-smait-rabbani.webp', '2026-11-17 07:29:40', '2026-11-17 07:29:40');

-- --------------------------------------------------------
-- Table structure for `anggota_dewans`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `anggota_dewans`;
CREATE TABLE `anggota_dewans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fraction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Dewan Guru & GTK SMPS IT Rabbani',
  `profile_summary` text COLLATE utf8mb4_unicode_ci,
  `education` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `anggota_dewans_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `anggota_dewans`
INSERT INTO `anggota_dewans` (`id`, `name`, `slug`, `position`, `fraction`, `profile_summary`, `education`, `photo`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Drs. H. Basuki Wiwoho', 'drs-h-basuki-wiwoho', 'Ketua Yayasan Generasi Rabbani', 'Pengurus Yayasan', 'Ketua Yayasan Generasi Rabbani Muara Enim. Mengayomi dan membina pengembangan mutu pendidikan terpadu dari jenjang TK, SD, SMP, hingga SMA IT Rabbani.', 'S1 Pendidikan Islam & Manajemen Organisasi', '/uploads/dewan/ust-basuki-wiwoho.webp', 1, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(2, 'Ustadz Pembina SMA IT Rabbani', 'pembina-sma-it-rabbani', 'Kepala SMA IT Rabbani', 'Pimpinan Unit SMA', 'Kepala SMA IT Rabbani Muara Enim. Berkomitmen mencetak generasi pemimpin Qur\'ani, berdaya saing global, dengan target 88% lulusan hafal Al-Qur\'an dan tembus PTN favorit.', 'S1 Pendidikan, S2 Manajemen Pendidikan', '/uploads/dewan/avatar-default.svg', 2, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(3, 'Ustadz Pembina SMPS IT Rabbani', 'pembina-smps-it-rabbani', 'Kepala SMPS IT Rabbani', 'Pimpinan Unit SMP', 'Kepala SMPS IT Rabbani Muara Enim. Memadukan kurikulum terpadu nasional dengan pembiasaan adab Qur\'ani dan pembinaan tahfidz berkesinambungan.', 'S1 Pendidikan Sains, Gr', '/uploads/dewan/avatar-default.svg', 3, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(4, 'Ustadz Pembina SDS IT Rabbani', 'pembina-sds-it-rabbani', 'Kepala SDS IT Rabbani', 'Pimpinan Unit SD', 'Kepala SDS IT Rabbani Muara Enim. Mengembangkan pembelajaran joyful learning berakar pada 10 Muwashofat karakter JSIT.', 'S1 Pendidikan Guru Sekolah Dasar (PGSD)', '/uploads/dewan/avatar-default.svg', 4, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(5, 'Bunda Kepala TKS IT Rabbani', 'kepala-tks-it-rabbani', 'Kepala TKS IT Rabbani', 'Pimpinan Unit TK', 'Kepala TKS IT Rabbani Muara Enim. Menerapkan kurikulum sentra usia dini yang merangsang fitrah keimanan, kemandirian, dan motorik anak.', 'S1 Pendidikan Anak Usia Dini (PAUD)', '/uploads/dewan/avatar-default.svg', 5, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(6, 'Helen Lestari, S.Pd., Gr.', 'helen-lestari-spd-gr', 'Waka Kurikulum SMPS IT Rabbani', 'Dewan Guru SMP', 'Waka Kurikulum SMPS IT Rabbani Muara Enim. Mengintegrasikan Kurikulum Merdeka dan standar mutu kekhasan JSIT.', 'S1 Pendidikan, Gr', '/uploads/dewan/avatar-default.svg', 6, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(7, 'Yushamdalah, S.Pd.', 'yushamdalah-spd', 'Waka Kesiswaan & TTQ SMPS IT Rabbani', 'Dewan Guru SMP', 'Waka Kesiswaan dan Pembina TTQ SMPS IT Rabbani. Membimbing akhlak dan program tahfidz Qur\'an santri.', 'S1 Pendidikan Islam', '/uploads/dewan/avatar-default.svg', 7, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(8, 'Rudini, S.Pd., Gr.', 'rudini-spd-gr', 'Waka Sarana & Prasarana', 'Dewan Guru SMP', 'Waka Sarpras SMPS IT Rabbani. Mengelola laboratorium, sarana pembelajaran, dan fasilitas kampus.', 'S1 Pendidikan, Gr', '/uploads/dewan/avatar-default.svg', 8, '2026-11-17 07:29:40', '2026-11-17 07:29:40');

-- --------------------------------------------------------
-- Table structure for `bidangs`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `bidangs`;
CREATE TABLE `bidangs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bidangs_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `bidangs`
INSERT INTO `bidangs` (`id`, `name`, `slug`, `description`, `address`, `phone`, `email`, `website`, `icon`, `thumbnail`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Kampus Terpadu & Gedung Representatif', 'kampus-terpadu-gedung-representatif', 'Gedung belajar representatif, bersih, dan asri di lingkungan strategis Muara Enim untuk mendukung kegiatan belajar mengajar yang kondusif.', 'Kampus SIT Rabbani Muara Enim, Jl. Proklamasi No. 80 Air Lintang', '0851-5929-3554', 'yayasangerabbani@gmail.com', NULL, 'fa-solid fa-school', '/uploads/campus-sit-rabbani.webp', 1, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(2, 'Asrama Boarding School SMA IT Putra & Putri', 'asrama-boarding-school-putra-putri', 'Fasilitas asrama pesantren modern dengan pembinaan musyrif/musyrifah 24 jam untuk pembiasaan sholat berjamaah, tahfidz, dan kemandirian santri.', 'Kampus SIT Rabbani Muara Enim, Jl. Proklamasi No. 80 Air Lintang', '0851-5929-3554', 'yayasangerabbani@gmail.com', NULL, 'fa-solid fa-hotel', '/uploads/campus-smait-rabbani.webp', 2, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(3, 'Laboratorium Komputer & Multimedia', 'laboratorium-komputer-multimedia', 'Laboratorium komputer ber-AC dengan PC modern dan akses internet cepat untuk pembelajaran TIK, literasi digital, ANBK, dan Bimbel SNBT.', 'Kampus SIT Rabbani Muara Enim, Jl. Proklamasi No. 80 Air Lintang', '0851-5929-3554', 'yayasangerabbani@gmail.com', NULL, 'fa-solid fa-desktop', '/uploads/prestasi-sit-rabbani.webp', 3, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(4, 'Pusat Tahfidz Al-Qur\'an & Halaqah Keislaman', 'pusat-tahfidz-halaqah-keislaman', 'Ruang halaqah tahfidz dan mushalla terpadu untuk pembelajaran tilawah, tahsin bersanad, dan muraja\'ah harian santri.', 'Kampus SIT Rabbani Muara Enim, Jl. Proklamasi No. 80 Air Lintang', '0851-5929-3554', 'yayasangerabbani@gmail.com', NULL, 'fa-solid fa-quran', '/uploads/tahfidz-sit-rabbani.webp', 4, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(5, 'Lapangan Olahraga & Arena Kepanduan', 'lapangan-olahraga-arena-kepanduan', 'Lapangan multifungsi untuk kegiatan olahraga (voli, futsal, bulutangkis), latihan Tapak Suci, upacara, dan kegiatan Pramuka SIT.', 'Kampus SIT Rabbani Muara Enim, Jl. Proklamasi No. 80 Air Lintang', '0851-5929-3554', 'yayasangerabbani@gmail.com', NULL, 'fa-solid fa-volleyball', '/uploads/kegiatan-pramuka-rabbani.webp', 5, '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(6, 'Perpustakaan & Pojok Baca Digital', 'perpustakaan-pojok-baca-digital', 'Perpustakaan sekolah lengkap dengan koleksi buku kurikulum, referensi keislaman, sains, fiksi edukatif, dan sumber belajar digital.', 'Kampus SIT Rabbani Muara Enim, Jl. Proklamasi No. 80 Air Lintang', '0851-5929-3554', 'yayasangerabbani@gmail.com', NULL, 'fa-solid fa-book-open-reader', '/uploads/campus-smpit-rabbani.webp', 6, '2026-11-17 07:29:40', '2026-11-17 07:29:40');

-- --------------------------------------------------------
-- Table structure for `dpcs`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `dpcs`;
CREATE TABLE `dpcs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `head_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dpcs_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `dpcs`
INSERT INTO `dpcs` (`id`, `name`, `slug`, `description`, `head_name`, `address`, `order`, `created_at`, `updated_at`, `thumbnail`) VALUES
(1, 'Program Tahfidzul Qur\'an Mutqin & Bersanad', 'program-tahfidz-quran-mutqin', 'Bimbingan intensif membaca Al-Qur\'an dengan tartil, tahsin bersanad, dan hafalan mutqin berkesinambungan dari jenjang TK hingga SMA IT.', NULL, 'Kurikulum Khusus Keislaman', 1, '2026-11-17 07:29:40', '2026-11-17 07:29:40', NULL),
(2, 'Boarding School (Asrama Pesantren) SMA IT', 'boarding-school-asrama-sma-it', 'Asrama putra dan putri dengan pendampingan musyrif/ah 24 jam untuk pembiasaan sholat tahajud, halaqah Qur\'an, kajian kitab, dan kemandirian.', NULL, 'Pembinaan Intensif 24 Jam', 2, '2026-11-17 07:29:40', '2026-11-17 07:29:40', NULL),
(3, 'Bimbingan SNBT Masuk PTN Gratis', 'bimbingan-snbt-ptn-gratis', 'Program pendampingan akademik intensif untuk persiapan seleksi nasional berbasis tes (SNBT), terbukti mengantarkan 88% lulusan masuk PTN.', NULL, 'Sukses Karir Masa Depan', 3, '2026-11-17 07:29:40', '2026-11-17 07:29:40', NULL),
(4, 'Bina Pribadi Islam (BPI) & 10 Muwashofat JSIT', 'bina-pribadi-islam-dan-karakter-jsit', 'Halaqah pekanan pembinaan akidah yang lurus, ibadah yang benar, dan akhlaqul karimah berstandar Jaringan Sekolah Islam Terpadu.', NULL, 'Pembinaan Karakter Islami', 4, '2026-11-17 07:29:40', '2026-11-17 07:29:40', NULL),
(5, 'Sains Terpadu & Literasi Digital Abad 21', 'sains-terpadu-literasi-digital', 'Laboratorium komputer modern, bimbingan olimpiade sains (OSN), riset praktikum IPA, dan penguasaan bahasa asing (Arab & Inggris).', NULL, 'Pengembangan Nalar & Teknologi', 5, '2026-11-17 07:29:40', '2026-11-17 07:29:40', NULL),
(6, 'Kepanduan Pramuka SIT & Bela Diri Tapak Suci', 'pramuka-sit-tapak-suci', 'Pembinaan kedisiplinan dan keberanian santri melalui kepanduan alam terbuka dan seni bela diri pencak silat berprestasi.', NULL, 'Ketangkasan & Fisik Kuat (Qowiyyul Jismi)', 6, '2026-11-17 07:29:40', '2026-11-17 07:29:40', NULL);

-- --------------------------------------------------------
-- Table structure for `testimonials`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `testimonials`
INSERT INTO `testimonials` (`id`, `name`, `profession`, `content`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'H. Ahmad Fauzi, S.E.', 'Wali Murid SMA IT Rabbani', 'Alhamdulillah, putra kami menempuh pendidikan di SMA IT Rabbani program Boarding School. Hafalan Al-Qur\'an berkembang pesat, adab ibadah sangat terjaga, dan program Bimbel SNBT sangat membantu persiapan masuk PTN.', '/uploads/dewan/avatar-default.svg', 'publish', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(2, 'dr. Hj. Nurul Hidayah, Sp.A', 'Wali Murid SMPS IT Rabbani', 'SIT Rabbani Muara Enim adalah pilihan tepat. Lingkungannya islami, asatidz sangat membimbing dengan penuh keikhlasan, dan akademiknya unggul berstandar JSIT Indonesia.', '/uploads/dewan/avatar-default.svg', 'publish', '2026-11-17 07:29:40', '2026-11-17 07:29:40');

-- --------------------------------------------------------
-- Table structure for `videos`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `videos_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `videos`
INSERT INTO `videos` (`id`, `title`, `slug`, `youtube_url`, `youtube_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Profil Yayasan Generasi Rabbani Muara Enim', 'profil-yayasan-generasi-rabbani-muara-enim', 'https://www.youtube.com/watch?v=ULMekhqxvqU', 'ULMekhqxvqU', 'Profil resmi dan komitmen pendidikan Sekolah Islam Terpadu Rabbani Muara Enim: TKS IT, SDS IT, SMPS IT, dan SMA IT Rabbani.', '2026-11-17 07:29:40', '2026-11-17 07:29:40');

-- --------------------------------------------------------
-- Table structure for `downloads`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `downloads`;
CREATE TABLE `downloads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Dokumen',
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `downloads`
INSERT INTO `downloads` (`id`, `title`, `category_type`, `file_path`, `file_type`, `file_size`, `download_count`, `created_at`, `updated_at`, `description`, `cover_image`) VALUES
(1, 'Logo Resmi Yayasan Generasi Rabbani Muara Enim (Vector PNG Transparan)', 'Aset Visual', '/uploads/logo-rabbani.png', 'PNG', NULL, 640, '2026-11-17 07:29:41', '2026-11-17 07:29:41', NULL, NULL),
(2, 'Flyer & Brosur SPMB SMA IT Rabbani Muara Enim TP 2025/2026', 'Brosur', '/uploads/flyer-spmb-smait-rabbani.webp', 'WEBP', NULL, 890, '2026-11-17 07:29:41', '2026-11-17 07:29:41', NULL, NULL),
(3, 'Brosur SPMB SIT Rabbani Muara Enim (TK, SD, SMP, SMA)', 'Brosur', '/uploads/flyer-spmb-sit-rabbani.webp', 'WEBP', NULL, 720, '2026-11-17 07:29:41', '2026-11-17 07:29:41', NULL, NULL),
(4, 'Panduan Kurikulum Tahfidz Al-Qur\'an SIT Rabbani Muara Enim', 'E-Book', '/uploads/downloads/panduan-mutqin-tahfidz-rabbani.pdf', 'PDF', NULL, 540, '2026-11-17 07:29:41', '2026-11-17 07:29:41', NULL, NULL),
(5, 'Buku Saku Adab & Karakter Siswa Berstandar JSIT Indonesia', 'E-Book', '/uploads/downloads/buku-saku-adab-karakter-siswa.pdf', 'PDF', NULL, 460, '2026-11-17 07:29:41', '2026-11-17 07:29:41', NULL, NULL),
(6, 'Modul Praktikum Laboratorium Sains & Komputer Siswa Rabbani', 'E-Book', '/uploads/downloads/petunjuk-praktikum-sains-terpadu.pdf', 'PDF', NULL, 380, '2026-11-17 07:29:41', '2026-11-17 07:29:41', NULL, NULL);

-- --------------------------------------------------------
-- Table structure for `feedbacks`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE `feedbacks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for `settings`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `settings`
INSERT INTO `settings` (`id`, `key`, `value`, `group`, `created_at`, `updated_at`) VALUES
(1, 'site_domain', 'rabbanime.sch.id', 'general', NULL, '2026-11-17 07:29:37'),
(2, 'popup_active', 1, 'popup', NULL, '2026-11-17 07:29:37'),
(3, 'popup_image', '/uploads/flyer-spmb-smait-rabbani.webp', 'popup', NULL, '2026-11-17 07:29:38'),
(4, 'popup_title', 'Telah Dibuka SPMB SIT Rabbani Muara Enim', 'popup', NULL, '2026-11-17 07:29:38'),
(5, 'popup_subtitle', 'Sistem Penerimaan Murid Baru SIT Rabbani Muara Enim (TKIT, SDIT, SMPIT, SMAIT)', 'popup', NULL, '2026-11-17 07:29:38'),
(6, 'popup_link', '/ppdb', 'popup', NULL, '2026-11-17 07:29:38'),
(7, 'popup_button_text', 'Info & Syarat SPMB', 'popup', NULL, '2026-11-17 07:29:38'),
(8, 'popup_target', '_self', 'popup', NULL, '2026-11-17 07:29:38'),
(9, 'hero_slides', '[{\"active\":true,\"badge\":\"SMPS IT RABBANI MUARA ENIM \\u2022 TERAKREDITASI B\",\"title\":\"Selamat Datang di Website Resmi\",\"subtitle\":\"SMPS IT Rabbani Muara Enim\",\"image\":\"\\/uploads\\/campus-smpit-rabbani.webp\",\"btn_text\":\"Sambutan Kepala Sekolah\",\"btn_link\":\"\\/smp\\/sambutan\",\"btn_target\":\"_self\",\"btn2_active\":true,\"btn2_text\":\"Info SPMB\",\"btn2_link\":\"\\/smp\\/ppdb\",\"btn2_target\":\"_self\"},{\"active\":true,\"badge\":\"SMPS IT RABBANI MUARA ENIM \\u2022 FULL DAY SCHOOL\",\"title\":\"Membina Generasi Qur\'ani, Cerdas & Berakhlak Mulia\",\"subtitle\":\"Sekolah Menengah Pertama Islam Terpadu di Muara Enim dengan Kurikulum Terpadu JSIT, Tahfidz Al-Qur\'an, dan Bina Pribadi Islam.\",\"image\":\"\\/uploads\\/kegiatan-pramuka-rabbani.webp\",\"btn_text\":\"Profil Singkat\",\"btn_link\":\"\\/smp\\/tentang-kami\",\"btn_target\":\"_self\",\"btn2_active\":true,\"btn2_text\":\"Daftar SPMB\",\"btn2_link\":\"\\/smp\\/ppdb\",\"btn2_target\":\"_self\"}]', 'hero', '2026-11-17 07:29:38', '2026-11-17 07:29:40'),
(10, 'site_name', 'Yayasan Generasi Rabbani Muara Enim', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(11, 'site_tagline', 'Membina Generasi Qur\'ani, Mandiri, Berakhlak Mulia & Berprestasi Global', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(12, 'site_description', 'Official Website Yayasan Generasi Rabbani Muara Enim & Sekolah Islam Terpadu (SIT) Rabbani: TKS IT, SDS IT, SMPS IT, dan SMA IT Boarding School di Muara Enim, Sumatera Selatan.', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(13, 'contact_email', 'yayasangerabbani@gmail.com', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(14, 'contact_phone', '0851-5929-3554', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(15, 'contact_whatsapp', '0851-5929-3554', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(16, 'contact_phone_alt', '0851-5929-3554', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(17, 'contact_address', 'Jl. Proklamasi No. 80, Kelurahan Air Lintang, Kecamatan Muara Enim, Kabupaten Muara Enim, Sumatera Selatan 31311', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(18, 'social_facebook', 'https://web.facebook.com/YayasanGenerasiRabbaniMuaraEnim', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(19, 'social_instagram', 'https://www.instagram.com/smaitrabbanime/', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(20, 'social_youtube', 'https://www.youtube.com/@rabbanimuaraenim', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(21, 'social_tiktok', 'https://www.tiktok.com/@rabbanime', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(22, 'google_maps_url', 'https://maps.google.com/?q=Rabbani+Muara+Enim', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(23, 'banner_daftar_url', '/spmb', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(24, 'banner_donasi_url', '/donasi', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(25, 'site_logo', '/uploads/logo-rabbani.png', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(26, 'site_logo_square', '/uploads/logo-rabbani-square.webp', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(27, 'og_title', 'Yayasan Generasi Rabbani Muara Enim', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(28, 'og_description', 'Official Website Yayasan Generasi Rabbani Muara Enim & SIT Rabbani: TKS IT, SDS IT, SMPS IT, & SMA IT Rabbani. Informasi SPMB, Tahfidz, Prestasi, dan Profil Kampus.', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(29, 'og_image', '/uploads/banner-yayasan-rabbani.webp', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(30, 'meta_keywords', 'yayasan generasi rabbani muara enim, sit rabbani muara enim, tk it rabbani, sd it rabbani, smp it rabbani, sma it rabbani, boarding school muara enim, tahfidz muara enim, jsit muara enim', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(31, 'npsn', 70010515, 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(32, 'akreditasi', 'B (Terakreditasi BAN-SM)', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(33, 'no_sk_akreditasi', 'BAN-SM/ME/2023', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(34, 'sk_pendirian', 'Yayasan Generasi Rabbani', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(35, 'sk_izin', 'Dinas Pendidikan & Kebudayaan Kab. Muara Enim', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(36, 'kepala_sekolah', 'Drs. H. Basuki Wiwoho', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(37, 'spmb_promo_title', 'SPMB TP 2025/2026 Gelombang 1', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(38, 'spmb_promo_cashback', 'Diskon Khusus Gelombang 1', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(39, 'spmb_promo_quota', 'Boarding & Full Day School', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(40, 'spmb_promo_note', '*Free Uang Pembangunan, Free Uang Kegiatan, Free Buku untuk 20 Orang Pertama', 'general', '2026-11-17 07:29:39', '2026-11-17 07:29:39'),
(41, 'spmb_banner_badge', 'PENERIMAAN PESERTA DIDIK BARU SIT RABBANI MUARA ENIM', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(42, 'spmb_banner_title', 'SPMB TP 2025/2026 TKS IT, SDS IT, SMPS IT & SMA IT RABBANI', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(43, 'spmb_banner_year', '2025/2026', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(44, 'spmb_banner_description', 'Bergabunglah bersama keluarga besar SIT Rabbani Muara Enim. Memadukan kurikulum terpadu nasional dengan pembiasaan adab Qur\'ani, target tahfidz mutqin, serta bimbingan SNBT PTN Gratis.', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(45, 'spmb_banner_card1_title', 'SPP BULANAN', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(46, 'spmb_banner_card1_desc', 'Hanya Rp 200.000', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(47, 'spmb_banner_card2_title', 'REGISTRASI ULANG', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(48, 'spmb_banner_card2_desc', 'Rp 1.000.000 (Include Seragam)', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(49, 'spmb_banner_card3_title', 'BENEFIT KHUSUS', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(50, 'spmb_banner_card3_desc', 'Free Pembangunan & Kegiatan', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40');
INSERT INTO `settings` (`id`, `key`, `value`, `group`, `created_at`, `updated_at`) VALUES
(51, 'spmb_banner_flyer_image', '/uploads/flyer-spmb-smait-rabbani.webp', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(52, 'spmb_banner_flyer_label', 'Brosur Resmi SPMB SMA IT Rabbani', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(53, 'spmb_banner_btn_text', 'Daftar SPMB Online', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(54, 'spmb_banner_btn_url', '/ppdb', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(55, 'spmb_banner_contact_text', 'Hotline SPMB: 0851-5929-3554', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(56, 'spmb_banner_contact_phone', '0851-5929-3554', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(57, 'ppdb_image_1', '/uploads/campus-sit-rabbani.webp', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(58, 'ppdb_image_2', '/uploads/tahfidz-sit-rabbani.webp', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(59, 'ppdb_image_3', '/uploads/kegiatan-pramuka-rabbani.webp', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(60, 'donation_bank_1_name', 'Bank Syariah Indonesia (BSI)', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(61, 'donation_bank_1_code', 451, 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(62, 'donation_bank_1_rekening', '718-293-8401', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(63, 'donation_bank_1_holder', 'YAYASAN GENERASI RABBANI MUARA ENIM', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(64, 'donation_bank_2_name', 'Bank Sumsel Babel Syariah', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(65, 'donation_bank_2_code', 120, 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(66, 'donation_bank_2_rekening', '801-09-00123', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(67, 'donation_bank_2_holder', 'SIT RABBANI MUARA ENIM', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(68, 'donation_confirm_phone', '0851-5929-3554', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(69, 'donation_confirm_text', 'Assalamu\'alaikum Bendahara Yayasan Generasi Rabbani, saya telah menyalurkan infaq pembangunan.', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(70, 'donation_intro_text', 'Salurkan infaq pembangunan sarana pendidikan, beasiswa tahfidz Al-Qur\'an, dan pengembangan kampus SIT Rabbani Muara Enim.', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(71, 'hero_slides_yayasan', '[{\"active\":true,\"badge\":\"YAYASAN GENERASI RABBANI MUARA ENIM \\u2022 SUMATERA SELATAN\",\"title\":\"Mewujudkan Generasi Robbani yang Cerdas, Mandiri & Berakhlak Mulia\",\"subtitle\":\"Pendidikan Islam Terpadu Satu Atap Berbasis Al-Qur\'an, As-Sunnah, Sains, dan Teknologi Modern (TK, SD, SMP, SMA).\",\"image\":\"\\/uploads\\/hero-slide-yayasan-1.webp\",\"btn_text\":\"Pilih Unit Sekolah\",\"btn_link\":\"#unit-sekolah\",\"btn_target\":\"_self\",\"btn2_active\":true,\"btn2_text\":\"Daftar SPMB Online\",\"btn2_link\":\"\\/ppdb\",\"btn2_target\":\"_self\"},{\"active\":true,\"badge\":\"TAHFIDZ QUR\'AN MUTQIN & ADAB NABAWI\",\"title\":\"Pembinaan Karakter & Hafalan Al-Qur\'an Berkesinambungan\",\"subtitle\":\"Mulai dari tahfidz usia dini TKS IT, target juz mutqin di SDS IT, SMPS IT, hingga program Boarding School di SMA IT Rabbani.\",\"image\":\"\\/uploads\\/hero-slide-yayasan-2.webp\",\"btn_text\":\"Profil Singkat Yayasan\",\"btn_link\":\"\\/yayasan\\/tentang-kami\",\"btn_target\":\"_self\",\"btn2_active\":true,\"btn2_text\":\"Struktur Yayasan\",\"btn2_link\":\"\\/yayasan\\/struktur\",\"btn2_target\":\"_self\"},{\"active\":true,\"badge\":\"SUKSES TEMBUS PTN & BERDAYA SAING GLOBAL\",\"title\":\"88% Lulusan SMA IT Rabbani Hafal Qur\'an & Masuk PTN Favorit\",\"subtitle\":\"Didukung program Bimbingan SNBT Gratis, Laboratorium Komputer Modern, Bahasa Asing, dan 8 Ekstrakurikuler Pilihan.\",\"image\":\"\\/uploads\\/hero-slide-yayasan-3.webp\",\"btn_text\":\"Kunjungi SMA IT Rabbani\",\"btn_link\":\"\\/sma\",\"btn_target\":\"_self\",\"btn2_active\":true,\"btn2_text\":\"Kunjungi SMPS IT Rabbani\",\"btn2_link\":\"\\/smp\",\"btn2_target\":\"_self\"}]', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(72, 'hero_slides_tk', '[{\"active\":true,\"badge\":\"TKS IT RABBANI MUARA ENIM \\u2022 TERAKREDITASI B\",\"title\":\"Membentuk Generasi Cilik Qur\'ani yang Kreatif, Cerdas, dan Mandiri\",\"subtitle\":\"Pendidikan Anak Usia Dini berbasis fitrah keimanan, adab islami, tahfidz juz 30 cilik, dan pembelajaran sentra bermakna.\",\"image\":\"\\/uploads\\/campus-sit-rabbani.webp\",\"btn_text\":\"Profil TKS IT\",\"btn_link\":\"\\/tk\\/tentang-kami\",\"btn_target\":\"_self\",\"btn2_active\":true,\"btn2_text\":\"SPMB TKS IT\",\"btn2_link\":\"\\/tk\\/ppdb\",\"btn2_target\":\"_self\"}]', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(73, 'hero_slides_sd', '[{\"active\":true,\"badge\":\"SDS IT RABBANI MUARA ENIM \\u2022 TERAKREDITASI B\",\"title\":\"Membentuk Generasi Berprestasi, Sholeh, Inovatif & Berakhlak Mulia\",\"subtitle\":\"Sekolah Dasar Islam Terpadu unggulan di Muara Enim dengan target tahfidz mutqin, kurikulum terpadu JSIT, dan penguatan literasi numerasi.\",\"image\":\"\\/uploads\\/prestasi-sit-rabbani.webp\",\"btn_text\":\"Profil SDS IT\",\"btn_link\":\"\\/sd\\/tentang-kami\",\"btn_target\":\"_self\",\"btn2_active\":true,\"btn2_text\":\"SPMB SDS IT\",\"btn2_link\":\"\\/sd\\/ppdb\",\"btn2_target\":\"_self\"}]', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(74, 'hero_slides_sma', '[{\"active\":true,\"badge\":\"SMA IT RABBANI MUARA ENIM \\u2022 BOARDING & FULL DAY\",\"title\":\"Mencetak Pemimpin Masa Depan Berkarakter Qur\'ani & Berprestasi\",\"subtitle\":\"88% Lulusan Hafal Al-Qur\'an Minimal 1 Juz, 88% Lulusan Masuk PTN, dan Fasilitas Bimbingan SNBT Gratis.\",\"image\":\"\\/uploads\\/campus-smait-rabbani.webp\",\"btn_text\":\"Profil SMA IT\",\"btn_link\":\"\\/sma\\/tentang-kami\",\"btn_target\":\"_self\",\"btn2_active\":true,\"btn2_text\":\"Daftar SPMB SMA\",\"btn2_link\":\"\\/sma\\/ppdb\",\"btn2_target\":\"_self\"}]', 'general', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(75, 'ppdb_form_tracks', 'Jalur Diskon Gelombang 1 (30%)\nJalur Boarding School (SMA IT Asrama) (25%)\nJalur Tahfidz Al-Qur\'an (15%)\nJalur Prestasi Akademik & Non-Akademik (15%)\nJalur Alumni SIT Rabbani (10%)\nJalur Reguler (Full Day School) (5%)', 'ppdb', '2026-11-17 07:29:40', '2026-11-17 07:29:40'),
(76, 'ppdb_youtube_id', 'ULMekhqxvqU', 'general', '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(77, 'ppdb_video_title', 'Video Profil SIT Rabbani Muara Enim', 'general', '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(78, 'ppdb_video_desc', 'Saksikan profil resmi, haflah akbar, dan aktivitas belajar santri SIT Rabbani Muara Enim.', 'general', '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(79, 'ppdb_boarding', 'Tersedia Program Boarding School (Asrama Pesantren) untuk SMA IT Rabbani dan Full Day School untuk seluruh jenjang: TK IT, SD IT, SMP IT, dan SMA IT Rabbani Muara Enim dengan integrasi kurikulum nasional, kurikulum khas JSIT, sholat berjamaah, tahfidz bersanad, dan bimbingan SNBT Gratis.', 'general', '2026-11-17 07:29:41', '2026-11-17 07:29:41'),
(80, 'ppdb_form_programs', 'Boarding School (Asrama Pesantren)\nFull Day School (Sekolah Terpadu)\nReguler', 'general', '2026-11-17 07:29:41', '2026-11-17 07:29:41');

-- --------------------------------------------------------
-- Table structure for `migrations`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `migrations`
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_09_05_000001_create_posts_and_taxonomies_tables', 1),
(5, '2026_09_05_000002_create_cpt_tables', 1),
(6, '2026_09_05_000003_add_role_and_avatar_to_users_table', 1),
(7, '2026_09_05_000004_create_activity_logs_table', 1),
(8, '2026_09_05_000004_create_quick_menus_table', 1),
(9, '2026_09_05_000005_create_pages_table', 1),
(10, '2026_09_07_000001_create_visitor_logs_table', 1),
(11, '2026_09_12_071313_create_ppdb_registrations_table', 1),
(12, '2026_09_12_074211_add_cover_and_description_to_downloads_table', 1),
(13, '2026_09_12_090300_add_thumbnail_to_dpcs_table', 1),
(14, '2026_09_12_091700_add_track_and_program_to_ppdb_registrations_table', 1),
(15, '2026_09_12_093259_add_extra_fields_to_ppdb_registrations_table', 1),
(16, '2026_09_12_113129_create_service_submissions_table', 1),
(17, '2026_09_20_000001_create_ppdb_tracks_table', 1),
(18, '2026_09_20_050000_update_anggota_dewan_default_avatar', 1),
(19, '2026_09_20_054000_fix_download_cover_and_gallery_records', 1),
(20, '2026_09_20_061500_set_default_popup_banner_and_site_domain', 1),
(21, '2026_09_20_062000_initialize_hero_slides_settings', 1),
(22, '2026_10_01_070429_add_file_attachment_to_agendas_table', 1),
(23, '2026_11_01_124349_add_unit_to_users_table', 1);

SET FOREIGN_KEY_CHECKS = 1;
-- ========================================================
-- End of Dump
-- ========================================================
