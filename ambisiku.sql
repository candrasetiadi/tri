-- --------------------------------------------------------
-- Host:                         192.168.33.33
-- Versi server:                 5.7.11 - MySQL Community Server (GPL)
-- OS Server:                    Linux
-- HeidiSQL Versi:               8.3.0.4813
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ambisiku.cerita
CREATE TABLE IF NOT EXISTS `cerita` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `judul` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tagline` text COLLATE utf8_unicode_ci NOT NULL,
  `video_url` varchar(126) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique Slug` (`slug`),
  KEY `Index 3` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ambisiku.cerita: ~1 rows (approximately)
DELETE FROM `cerita`;
/*!40000 ALTER TABLE `cerita` DISABLE KEYS */;
INSERT INTO `cerita` (`id`, `slug`, `judul`, `tagline`, `video_url`, `thumbnail`, `twitter`, `instagram`, `facebook`, `status`, `created_at`, `updated_at`) VALUES
	(2, NULL, NULL, 'Merupakan serial video inspiratif yang bercerita tentang perjalanan para anak muda Indonesia dalam mewujudkan ambisinya. Dalam proses pembuatannya menggandeng para pelaku creative handal dibidangnya. Andien; penyanyi dan pengusaha, Leo Theosubrata; Product designer, pengajar dan pemilik creative workshop “Indoestri” serta Handoko Hendroyono; pembuat konten kreatif, aktivis penggerak industri kreatif dan juga produser film Filosofi Kopi.', 'indEu8OiGOA', 'https://i.ytimg.com/vi/indEu8OiGOA/mqdefault.jpg', NULL, NULL, NULL, 1, '2016-04-03 16:50:38', '2016-04-03 16:54:27');
/*!40000 ALTER TABLE `cerita` ENABLE KEYS */;


-- Dumping structure for table ambisiku.cerita_images
CREATE TABLE IF NOT EXISTS `cerita_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cerita_id` int(10) unsigned NOT NULL,
  `filename` varchar(126) COLLATE utf8_unicode_ci NOT NULL,
  `small` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `large` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cerita_images_cerita_id_foreign` (`cerita_id`),
  CONSTRAINT `cerita_images_cerita_id_foreign` FOREIGN KEY (`cerita_id`) REFERENCES `cerita` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ambisiku.cerita_images: ~2 rows (approximately)
DELETE FROM `cerita_images`;
/*!40000 ALTER TABLE `cerita_images` DISABLE KEYS */;
INSERT INTO `cerita_images` (`id`, `cerita_id`, `filename`, `small`, `large`, `status`, `created_at`, `updated_at`) VALUES
	(4, 2, 'bossa.jpg', 'uploads/cerita/thumbnail/bossa.jpg', 'uploads/cerita/bossa.jpg', 2, NULL, NULL),
	(5, 2, 'goni.png', 'uploads/cerita/thumbnail/goni.png', 'uploads/cerita/goni.png', 2, NULL, NULL),
	(6, 2, 'slider-1.jpg', 'uploads/cerita/thumbnail/slider-1.jpg', 'uploads/cerita/slider-1.jpg', 2, NULL, NULL),
	(7, 2, 'slider-2.jpg', 'uploads/cerita/thumbnail/slider-2.jpg', 'uploads/cerita/slider-2.jpg', 2, NULL, NULL),
	(8, 2, 'slider-3.jpg', 'uploads/cerita/thumbnail/slider-3.jpg', 'uploads/cerita/slider-3.jpg', 2, NULL, NULL);
/*!40000 ALTER TABLE `cerita_images` ENABLE KEYS */;


-- Dumping structure for table ambisiku.home
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `video_url` varchar(126) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ambisiku.home: ~2 rows (approximately)
DELETE FROM `home`;
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
INSERT INTO `home` (`id`, `video_url`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'A0U6JReIumU', 1, '2016-03-21 18:14:31', '2016-03-24 16:46:25'),
	(2, 'GFlHbb1oTaE', 1, '2016-03-21 18:23:07', '2016-03-24 16:46:41');
/*!40000 ALTER TABLE `home` ENABLE KEYS */;


-- Dumping structure for table ambisiku.kelas_interview
CREATE TABLE IF NOT EXISTS `kelas_interview` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `video_url` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ambisiku.kelas_interview: ~5 rows (approximately)
DELETE FROM `kelas_interview`;
/*!40000 ALTER TABLE `kelas_interview` DISABLE KEYS */;
INSERT INTO `kelas_interview` (`id`, `judul`, `excerpt`, `video_url`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Tri - #UbahDenganBicara', 'Kapan terakhir kali kamu bicara dengan orang yang penting buatmu?', '4n5xsYddbFY', '', 2, '2016-03-28 13:06:56', '2016-04-03 15:13:34'),
	(2, 'Cerita #Ambisiku', 'aktivis penggerak industri kreatif dan juga produser film Filosofi Kopi.', 'indEu8OiGOA', 'https://i.ytimg.com/vi/indEu8OiGOA/mqdefault.jpg', 2, '2016-04-03 13:57:58', '2016-04-03 15:17:29'),
	(3, 'Cerita #Ambisiku', 'Merupakan serial video inspiratif yang bercerita tentang perjalanan para anak muda Indonesia dalam mewujudkan ambisinya.', 'indEu8OiGOA', 'https://i.ytimg.com/vi/indEu8OiGOA/mqdefault.jpg', 2, '2016-04-04 05:12:47', '2016-04-04 07:47:56'),
	(4, 'Tri - #UbahDenganBicara', 'Kapan terakhir kali kamu bicara dengan orang yang penting buatmu?', '4n5xsYddbFY', 'https://i.ytimg.com/vi/4n5xsYddbFY/mqdefault.jpg', 2, '2016-04-04 05:15:50', '2016-04-04 07:12:16'),
	(5, 'Tri - versi Ibu 30"', 'Kapan terakhir kali kamu bicara dengan orang yang penting buatmu?', 'OR3Xjaz_8jw', 'https://i.ytimg.com/vi/OR3Xjaz_8jw/mqdefault.jpg', 2, '2016-04-04 05:17:12', '2016-04-04 07:10:06');
/*!40000 ALTER TABLE `kelas_interview` ENABLE KEYS */;


-- Dumping structure for table ambisiku.kelas_tenant
CREATE TABLE IF NOT EXISTS `kelas_tenant` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `twitter` varchar(126) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(126) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_url` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `schedule` date DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ambisiku.kelas_tenant: ~6 rows (approximately)
DELETE FROM `kelas_tenant`;
/*!40000 ALTER TABLE `kelas_tenant` DISABLE KEYS */;
INSERT INTO `kelas_tenant` (`id`, `twitter`, `name`, `description`, `photo`, `photo_url`, `schedule`, `status`, `created_at`, `updated_at`) VALUES
	(5, '@PatrickWalujo', 'Patrick Walujo', 'Co-Founder Northstar; perusahan investasi lokal yang memegang saham PT. Hutchison 3 Indonesia dan Gojek.', 'uploads/thumbnail/Patrick_Walujo.jpg', 'uploads/mentor/patrick.jpg', NULL, 1, '2016-03-28 16:44:07', '2016-04-03 15:51:55'),
	(6, '@erickthohir', 'Erick Thohir', 'Pendiri Mahaka Group dan pemilik klub sepabola Inter Milan.', 'uploads/thumbnail/Erick_Thohir.png', 'uploads/mentor/erick.jpg', NULL, 1, '2016-03-28 16:44:46', '2016-04-03 11:55:27'),
	(7, '@pergijauh', 'Gofar Hilman', 'Penyiar radio dan pemilik Lawless; toko motorcyclothes di jakarta.', 'uploads/thumbnail/Gofar-thumb.jpg', 'uploads/mentor/gofar.jpg', '2016-04-15', 1, '2016-03-28 16:45:15', '2016-04-04 07:48:59'),
	(8, '@yudabustara', 'Yuda Bustara', 'Chef profesional, pembawa acara Urban Cook', 'uploads/thumbnail/yuda-thumb.jpg', 'uploads/mentor/yud.jpg', '2016-04-08', 1, '2016-03-28 16:45:40', '2016-04-04 07:48:18'),
	(9, '@aMrazing', 'Alexander Thian', 'Storygrapher yang passionate untuk menulis tentang keindahan dunia.', 'uploads/thumbnail/Alexander_Thian.jpg', 'uploads/mentor/thian.jpg', NULL, 1, '2016-03-28 16:46:08', '2016-04-04 07:48:53'),
	(10, '@ngungut_aja', 'Utomo Triputranto', 'Senior PHP Programmer Growinc', 'uploads/thumbnail/smile.jpg', 'uploads/mentor/smile_kecil.jpg', '2016-03-31', 2, '2016-03-31 12:28:22', '2016-04-03 15:08:30');
/*!40000 ALTER TABLE `kelas_tenant` ENABLE KEYS */;


-- Dumping structure for table ambisiku.sebarkan
CREATE TABLE IF NOT EXISTS `sebarkan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(126) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(126) COLLATE utf8_unicode_ci NOT NULL,
  `tagline` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `website` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `thumbnail` text COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 3` (`slug`),
  KEY `Index 2` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ambisiku.sebarkan: ~5 rows (approximately)
DELETE FROM `sebarkan`;
/*!40000 ALTER TABLE `sebarkan` DISABLE KEYS */;
INSERT INTO `sebarkan` (`id`, `judul`, `slug`, `tagline`, `excerpt`, `website`, `twitter`, `instagram`, `facebook`, `image`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Lacrou Patisserie', 'lacrou-patisserie', 'Artisanal French Patisserie', 'Lacrou percaya bahwa makanan dapat menghadirkan kebahagiaan dan kami berambisi untuk menyebarkan kebahagiaan sederhana bagi para pencinta kue tanah air, dengan menghadirkan aneka kue khas Perancis yang terbuat dari bahan-bahan berkualitas dari dalam dan luar negeri.\r\nSetiap jenis kue lacrou dibuat terbatas dengan mengkombinasikan tehnik pembuatan kue modern dan traditional.', 'www.lacrou.co', NULL, 'Lacrou.co', NULL, 'uploads/sebarkan/lacrou.jpg', 'uploads/sebarkan/thumbnail/lacrou.jpg', 1, '2016-03-29 04:39:54', '2016-03-29 04:39:56'),
	(2, 'Goni Coffee', 'goni-coffee', 'Ambisi tanpa henti untuk melayani', 'Ambisi tanpa henti untuk melayani, mencintai apa yang kami lakukan dan melakukan apa yang kami cintai. Itulah kami, Goni.\r\nNamun perjalanan ini  bukan tentang kami, karena kami hanya orang-orang biasa yg berbagi semangat dan terobsesi tentang kopi.\r\n\r\nKami lebih dari sekedar kedai kopi.  Inilah cara kami memberikan kontribusi kepada masyarakat serta membantu memajuakan usaha para petani kopi di Indonesia.', 'www.gonicoffee.com', NULL, 'gonicoffee', NULL, 'uploads/sebarkan/goni.png', 'uploads/sebarkan/thumbnail/goni.jpg', 1, '2016-03-29 04:43:04', '2016-03-29 04:43:05'),
	(3, 'Bossa Design', 'bossa-design', 'Architecture and Interior Design', 'Bossa Design berbeda dengan Konsultan Arsitektur dan Interior pada umumnya, kami percaya bahwa setiap bangunan seharusnya memiliki karakternya masing-masing. Karakter tiap bangunan ditentukan oleh asal-usul pemiliknya, kebutuhannya, kebiasaannya dan juga impiannya. \r\n\r\nBossa Design selalu berusaha untuk melibatkan para klien dalam setiap proses desain, sehingga setiap hasil desain dapat memiliki karakter tersendiri merupakan cerminan dari pribadi pemiliknya dan sekaligus  jawaban atas segala kebutuhan pemiliknya. \r\n\r\nBossa Design berambisi untuk dapat terus menghasilkan produk arsitektur dan interior yang bukan hanya sekedar indah dan nyaman, tetapi juga memiliki karakter yang dapat menggambarkan pemiliknya atau penggunanya. Karena untuk kami, Bangunan yang indah adalah bangunan yang dapat bercerita.', NULL, NULL, NULL, NULL, 'uploads/sebarkan/bossa.jpg', 'uploads/sebarkan/thumbnail/bossa.jpg', 1, '2016-03-29 13:34:56', '2016-03-29 13:34:58'),
	(4, 'Saya', 'saya', 'Made in Indonesia', 'Bermula dari kecintaan dengan dunia fashion, kami semakin berambisi membuat setiap orang Indonesia merasa bangga dengan pakaian yang dikenakannya.\r\nBagi kami pakaian adalah makhluk yang menyelimuti badan kita, memberikan nyawa lebih di diri kita, mempengaruhi perasaan saat kita memakainya, menambah percaya diri kita, dan membentuk karakter kita.\r\nItulah sebabnya produk kami dinamakan SAYA, karena kami ingin setiap pakaian yang kami buat mencerminkan SAYA, si pemakainya.', NULL, NULL, 'saya_collections', NULL, 'uploads/sebarkan/saya.jpg', 'uploads/sebarkan/thumbnail/saya.jpg', 1, '2016-03-29 17:10:47', '2016-03-29 17:10:49'),
	(5, 'Itsmycoffee', 'itsmycoffee', 'Experience & taste it', 'Kami tahu bahwa kopi Indonesia sangat kaya akan jenis dan rasa, karenanya kami berambisi mengenalkan kekayaan kopi Indonesia ke masyarakat Indonesia sendiri yang sudah mulai terlena dengan kopi dari luar. Seperti namanya, “ini kopi gue”, Itsmycoffee mengajak masyarakat untuk memilih sendiri 30 jenis single origin kopi Indonesia yang tersedia sehingga mereka semakin kenal aneka bentuk dan aroma kopi pilihan, mengajarkan bagaimana metode menyeduhnya , karena setiap kopi Indonesia memiliki keistimewaan sendiri untuk mengeluarkan cita rasanya, yang terakhir mereka bisa membuat racikan kopi mereka sendiri untuk memenuhi rasa kopi yang sesuai dengan karakter peminumnya.\n\nItulah itsmycoffee, karena setiap secangkir kopi yang kami hidangkan dibuat dengan hati dan jiwa pecinta kopi Indonesia.', '', '@coffeeandgrains', 'itsmycoffeee', '', 'uploads/sebarkan/itsmycoffee.jpg', 'uploads/sebarkan/thumbnail/itsmycoffee.jpg', 1, '2016-03-29 22:07:59', '2016-04-03 16:21:43');
/*!40000 ALTER TABLE `sebarkan` ENABLE KEYS */;


-- Dumping structure for table ambisiku.setting
CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `global_title` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer` text COLLATE utf8_unicode_ci,
  `copyright` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_url_new` int(11) DEFAULT NULL,
  `facebook_url` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_url_new` int(11) DEFAULT NULL,
  `instagram_url` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram_url_new` int(11) DEFAULT NULL,
  `def_og_title` text COLLATE utf8_unicode_ci,
  `def_og_description` text COLLATE utf8_unicode_ci,
  `def_og_image` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ambisiku.setting: ~1 rows (approximately)
DELETE FROM `setting`;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` (`id`, `global_title`, `logo`, `footer`, `copyright`, `twitter_url`, `twitter_url_new`, `facebook_url`, `facebook_url_new`, `instagram_url`, `instagram_url_new`, `def_og_title`, `def_og_description`, `def_og_image`) VALUES
	(1, 'Festival #Ambisiku', NULL, 'Festival #Ambisiku merupakan wujud dedikasi Tri pada generasi muda Indonesia melalui sebuah rangkaian program yang merangkul beragam ambisi dan saling menginspirasi untuk Indonesia yang lebih baik.', NULL, 'https://twitter.com/triindonesia', 1, 'https://www.facebook.com/triindonesia', 1, 'https://www.instagram.com/triindonesia/', 1, 'Festival #Ambisiku', 'Festival #Ambisiku merupakan wujud dedikasi Tri pada generasi muda Indonesia melalui sebuah rangkaian program yang merangkul beragam ambisi dan saling menginspirasi untuk Indonesia yang lebih baik.', 'uploads/fb-og1.jpg');
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;


-- Dumping structure for table ambisiku.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `Index 3` (`password`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ambisiku.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
	(3, 'Utomo Triputranto', 'utomo@growinc.id', '22ca8686bfa31a2ae5f55a7f60009e14', 1, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
