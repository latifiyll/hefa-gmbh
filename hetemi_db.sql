-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table hetemi_db.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) DEFAULT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `subtext` text,
  `details` mediumtext,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table hetemi_db.categories: ~4 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id_category`, `cat_name`, `short_name`, `image`, `subtext`, `details`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'Qualität - Beständigkeit - Vertrauen', 'logo', 'logo.png', NULL, 'Dadurch unterscheiden wir uns ganz wesentlich von unserem Mitbewerber. Zuverlässigkeit, Sicherheit und Seriosität sind für uns mehr,als nur Schlagwörter.<br />\r\nAlle aspekte über Sonnen und- Wetterschutz Produkten, erfassen und übernehmen wir für Sie – massgeschneidert nach Ihren Wünschen und Bedürfnissen – alles von der planung über die Durchführung, den Einsatz der richtigen Produkten und Materialien, bis zur Kontrolle.<br />\r\n\r\nSo sorgen wir für ein angenehme Haus, angenehme Arbeitsplätze in Büros und wollen damit einen Beitrag zu Ihrem Erfolg leisten. um Ihr Geld\r\nkönnen sie etwas von uns erwarten.<br />\r\nWir bieten folgende Dienstleistungen an:<br />\r\nBeratung, Verkauf, Reparaturen und Montage von:<br />\r\n– Sonnenschutzprodukten (Lamellenstoren, Rollladen und Markisen).<br />\r\n– Hoch qualitative Fenster und Türen aus Kunsstoff und Aluminum.<br />\r\n– Alle Art aus Glasprodukten nach Ihren Bedürfnissen.<br />\r\nUnsere Arbeit wird Exakt , schnell und zuverlässig Ausgeführt.<br />\r\nInteressiert? nehmen sie kontakt mit uns auf!<br />\r\n', 1, NULL, NULL),
	(2, 'Sonnenschutz', 'sonnenschutz', 'sonnenschutz.jpg', 'Wir installieren verschiedene Arten von Sonnenschutzprodukten für Häuser, Gebäude, Gärten usw.', 'Wir installieren verschiedene Arten von Sonnenschutzprodukten für Häuser, Gebäude, Gärten usw.<br />', 1, NULL, NULL),
	(3, 'Glassprodukten', 'glassprodukten', 'glassprodukten.jpg', 'Wir bieten alle Glasproduktdienstleistungen an', 'Tight pants next level keffiyeh you probably haven\'t heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney\'s fixie sustainable quinoa 8-bit american apparel have a terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney\'s cleanse vegan chambray. A really ironic artisan dolem lorem whatever keytar, scenester farm-to-table banksy Austin twitter handle freegan cred raw denim single-origin coffee viral.', 1, NULL, NULL),
	(4, 'Fensten und Türen', 'fensten_turen', 'fensten_turen.jpg', 'Verschiedene hochwertige Modelle von Türen und Fenstern', 'Tight pants next level keffiyeh you probably haven\'t heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney\'s fixie sustainable quinoa 8-bit american apparel have a terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney\'s cleanse vegan chambray. A really ironic artisan dolem lorem whatever keytar, scenester farm-to-table banksy Austin twitter handle freegan cred raw denim single-origin coffee viral.', 1, NULL, NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.documents
CREATE TABLE IF NOT EXISTS `documents` (
  `id_document` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(50) DEFAULT NULL,
  `document_name` varchar(50) DEFAULT NULL,
  `document_text` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_document`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table hetemi_db.documents: ~10 rows (approximately)
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` (`id_document`, `file_name`, `document_name`, `document_text`) VALUES
	(1, 'Lamellenstoren-AV-70.pdf', 'Lamellenstoren AV 70', 'Aluminium-Verbundrafflamellenstoren'),
	(2, 'Lamellenstoren-AV-90.pdf', 'Lamellenstoren AV 90', 'Aluminium-Verbundrafflamellenstoren'),
	(3, 'Lamellenstoren-RV-80.pdf', 'Lamellenstoren RV-80', 'Aluminium-Verbundraffstoren '),
	(4, 'Reinigung-Lamellenstoren.pdf', 'Reinigung Lamellenstoren', 'Empfehlung fur die Reinigung'),
	(5, 'Innenjalousien.pdf', 'Innenjalousien', 'Aluminium-Lamellenstoren'),
	(6, 'Farbkarte-VSR.pdf', 'Standardfarben', 'VSR - Farbkarte'),
	(7, 'Anfrage-FAX-Formular.pdf', 'Anfrage FAX Formular', 'Bestellung \r\n/ Anfrage / Offerte'),
	(8, 'Schnee-und-Eis.pdf', 'Schnee und Eis', 'Schnee und Eis'),
	(9, 'Wind.pdf', 'Wind', 'Einfluss der Windgeschwindigkeiten auf Sonnen'),
	(10, 'agb.pdf', 'AGB', 'Allgemeine Geschäftsbedingungen');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.images
CREATE TABLE IF NOT EXISTS `images` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL DEFAULT '0',
  `image_name` varchar(50) DEFAULT NULL,
  `image_text` varchar(80) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- Dumping data for table hetemi_db.images: ~65 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id_image`, `id_type`, `image_name`, `image_text`, `active`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Hetemi-Lamelenstoren-av-90-1.jpg', 'Lamelenstoren 90 / 910', 1, NULL, '2018-10-06 19:48:13'),
	(2, 1, 'Hetemi-Lamelenstoren-av-90-2.jpg', 'Lamelenstoren 90 / 910', 1, NULL, NULL),
	(3, 1, 'Hetemi-Lamelenstoren-av-90-3.jpg', 'Lamelenstoren 90 / 910', 1, NULL, NULL),
	(4, 1, 'Hetemi-Lamelenstoren-av-90-4.jpg', 'Lamelenstoren 90 / 910', 1, NULL, NULL),
	(5, 1, 'Hetemi-Lamelenstoren-av-70-4.jpg', 'Lamelenstoren 70 / 710', 1, NULL, NULL),
	(6, 1, 'Hetemi-Lamelenstoren-av-70-3.jpg', 'Lamelenstoren 70 / 710', 1, NULL, NULL),
	(7, 1, 'Hetemi-Lamelenstoren-av-70-2.jpg', 'Lamelenstoren 70 / 710', 1, NULL, NULL),
	(8, 1, 'Hetemi-Lamelenstoren-av-70-6.jpg', 'Lamelenstoren 70 / 710', 1, NULL, NULL),
	(9, 1, 'Hetemi-Lamelenstoren-av-70-10.jpg', 'Lamelenstoren 70 / 710', 1, NULL, NULL),
	(10, 1, 'Hetemi-Lamelenstoren-av-70-1.jpg', 'Lamelenstoren 70 / 710', 1, NULL, NULL),
	(11, 1, 'Hetemi-Lamelenstoren-av-70-9.jpg', 'Lamelenstoren 70 / 710', 1, NULL, NULL),
	(12, 1, 'Hetemi-Lamelenstoren-av-70-5.jpg', 'Lamelenstoren 70 / 710', 1, NULL, NULL),
	(13, 1, 'Hetemi-Lamelenstoren-av-70-7.jpg', 'Lamelenstoren 70 / 710', 1, NULL, NULL),
	(14, 1, 'Hetemi-Lamelenstoren-av-70-8.jpg', 'Lamelenstoren 70 / 710', 1, NULL, NULL),
	(15, 2, 'Typ-JA-Soft-mit-Hysteresebremse-Hetemi.jpg', 'Typ JA Soft- mit Hysteresebremse', 1, NULL, NULL),
	(16, 2, 'Typ-JA-der-klassische-Hetemi1.jpg', 'Typ JA – Der Klassische', 1, NULL, NULL),
	(17, 6, 'Aussengeländer-HETEMI-1.jpg', 'Aussengeländer', 1, NULL, NULL),
	(18, 6, 'Aussengeländer-HETEMI-3.jpg', 'Aussengeländer', 1, NULL, NULL),
	(19, 6, 'Aussengeländer-HETEMI-5.jpg', 'Aussengeländer', 1, NULL, NULL),
	(20, 6, 'Aussengeländer-HETEMI-4.jpg', 'Aussengeländer', 1, NULL, NULL),
	(21, 6, 'Aussengeländer-HETEMI-2.jpg', 'Aussengeländer', 1, NULL, NULL),
	(22, 7, 'Duschkabinen-HETEMI-11.jpg', 'Duschkabinen', 1, NULL, NULL),
	(23, 7, 'Duschkabinen-HETEMI-10.jpg', 'Duschkabinen', 1, NULL, NULL),
	(24, 7, 'Duschkabinen-HETEMI-9.jpg', 'Duschkabinen', 1, NULL, NULL),
	(25, 7, 'Duschkabinen-HETEMI-2.jpg', 'Duschkabinen', 1, NULL, NULL),
	(26, 7, 'Duschkabinen-HETEMI-3.jpg', 'Duschkabinen', 1, NULL, NULL),
	(27, 7, 'Duschkabinen-HETEMI-4.jpg', 'Duschkabinen', 1, NULL, NULL),
	(28, 7, 'Duschkabinen-HETEMI-5.jpg', 'Duschkabinen', 1, NULL, NULL),
	(29, 7, 'Duschkabinen-HETEMI-6.jpg', 'Duschkabinen', 1, NULL, NULL),
	(30, 7, 'Duschkabinen-HETEMI-7.jpg', 'Duschkabinen', 1, NULL, NULL),
	(31, 7, 'Duschkabinen-HETEMI-8.jpg', 'Duschkabinen', 1, NULL, NULL),
	(32, 7, 'Duschkabinen-HETEMI-1.jpg', 'Duschkabinen', 1, NULL, NULL),
	(33, 8, 'Glasturen-HETEMI-1.jpg', 'Glasturen', 1, NULL, NULL),
	(34, 8, 'Glasturen-HETEMI-3.jpg', 'Glasturen', 1, NULL, NULL),
	(35, 8, 'Glasturen-HETEMI-4.jpg', 'Glasturen', 1, NULL, NULL),
	(36, 8, 'Glasturen-HETEMI-5.jpg', 'Glasturen', 1, NULL, NULL),
	(37, 8, 'Glasturen-HETEMI-6.jpg', 'Glasturen', 1, NULL, NULL),
	(38, 8, 'Glasturen-HETEMI-7.jpg', 'Glasturen', 1, NULL, NULL),
	(39, 9, 'Vordächer-HETEMI-1.jpg', 'Vordächer', 1, NULL, NULL),
	(40, 9, 'Vordächer-HETEMI-2.jpg', 'Vordächer', 1, NULL, NULL),
	(41, 9, 'Vordächer-HETEMI-3.jpg', 'Vordächer', 1, NULL, NULL),
	(42, 9, 'Vordächer-HETEMI-4.jpg', 'Vordächer', 1, NULL, NULL),
	(43, 9, 'Vordächer-HETEMI-5.jpg', 'Vordächer', 1, NULL, NULL),
	(44, 9, 'Vordächer-HETEMI-6.jpg', 'Vordächer', 1, NULL, NULL),
	(45, 9, 'Vordächer-hetemi.jpg', 'Vordächer', 1, NULL, NULL),
	(46, 10, 'Hetemi-Kunstofffenster-1.jpg', 'Kunststoff Fenster', 1, NULL, NULL),
	(47, 10, 'Hetemi-Kunstofffenster-2.jpg', 'Kunststoff Fenster', 1, NULL, NULL),
	(48, 10, 'Hetemi-Kunstofffenster-3.jpg', 'Kunststoff Fenster', 1, NULL, NULL),
	(49, 10, 'Hetemi-Kunstofffenster-2-1.jpg', 'Kunststoff Fenster', 1, NULL, NULL),
	(50, 10, 'Hetemi-Kunstofffenster-4.jpg', 'Kunststoff Fenster', 1, NULL, NULL),
	(51, 10, 'Hetemi-Kunstofffenster-5.jpg', 'Kunststoff Fenster', 1, NULL, NULL),
	(52, 11, 'HETEMI-Hebeschiebetuersystem-2.jpg', 'Glas-Schiebetüren aus Glas und Edelstahl-Beschlägen', 1, NULL, NULL),
	(53, 11, 'HETEMI-Hebeschiebetuersystem-3.jpg', 'Glas-Schiebetüren aus Glas und Edelstahl-Beschlägen', 1, NULL, NULL),
	(54, 14, 'eingangstüren-hetemi-1.jpg', 'Eingangstüren', 1, NULL, NULL),
	(55, 14, 'eingangstüren-hetemi-2.jpg', 'Eingangstüren', 1, NULL, NULL),
	(56, 14, 'eingangstüren-hetemi-3.jpg', 'Eingangstüren', 1, NULL, NULL),
	(57, 14, 'rehau_geneo_bejarati_ajto_3.jpg', 'Eingangstüren', 1, NULL, NULL),
	(58, 12, 'Parallelschiebe_Element_Metall.jpg', 'Parallelschiebekipptüren', 1, NULL, NULL),
	(59, 13, '5e68624c7a.jpg', 'Kunststoff Alu Fenster', 1, NULL, NULL),
	(60, 3, 'Elektrische-Antriebe-Hetemi-1.jpg', 'Elektrische Antriebe', 1, NULL, NULL),
	(61, 3, 'Elektrische-Antriebe-Hetemi-2.jpg', 'Elektrische Antriebe', 1, NULL, NULL),
	(62, 3, 'Elektrische-Antriebe-Hetemi-3.jpg', 'Elektrische Antriebe', 1, NULL, NULL),
	(63, 3, 'Elektrische-Antriebe-Hetemi-4.jpg', 'Elektrische Antriebe', 1, NULL, NULL),
	(64, 3, 'Elektrische-Antriebe-Hetemi-5.jpg', 'Elektrische Antriebe', 1, NULL, NULL),
	(65, 4, 'Markisen.jpg', 'Markisen', 1, NULL, NULL);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `head_msg` varchar(50) DEFAULT NULL,
  `body_msg` mediumtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table hetemi_db.messages: ~1 rows (approximately)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`id_message`, `sender`, `email`, `head_msg`, `body_msg`, `created_at`, `updated_at`) VALUES
	(1, 'Yll Latifi', 'latifiyll@gmail.com', 'asdasd', 'asdasd', '2018-07-20 20:55:30', '2018-07-20 20:55:30');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.message_onoffers
CREATE TABLE IF NOT EXISTS `message_onoffers` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) unsigned NOT NULL,
  `id_offer` int(11) unsigned NOT NULL,
  `text` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_message`),
  KEY `id_user` (`id_user`),
  KEY `id_offer` (`id_offer`),
  CONSTRAINT `id_offer_foreign` FOREIGN KEY (`id_offer`) REFERENCES `online_offers` (`id_offer`) ON DELETE CASCADE,
  CONSTRAINT `id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table hetemi_db.message_onoffers: ~0 rows (approximately)
/*!40000 ALTER TABLE `message_onoffers` DISABLE KEYS */;
/*!40000 ALTER TABLE `message_onoffers` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hetemi_db.migrations: ~9 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_07_02_224409_create_categories_table', 1),
	(4, '2018_07_02_225016_create_types_table', 1),
	(5, '2018_07_02_225228_create_posts_table', 1),
	(6, '2018_07_02_225256_create_post_items_table', 1),
	(7, '2018_07_02_225634_create_online_offers_table', 1),
	(8, '2018_07_08_154927_create_views_table', 1),
	(9, '2018_07_09_011814_create_messages_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.online_offers
CREATE TABLE IF NOT EXISTS `online_offers` (
  `id_offer` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_type` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `client_fullname` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `transmission` tinyint(4) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `details` mediumtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_offer`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table hetemi_db.online_offers: ~2 rows (approximately)
/*!40000 ALTER TABLE `online_offers` DISABLE KEYS */;
INSERT INTO `online_offers` (`id_offer`, `id_type`, `email`, `client_fullname`, `city`, `tel`, `transmission`, `color`, `details`, `created_at`, `updated_at`) VALUES
	(1, 4, 'latifiyll@gmail.com', 'Yll Latifi', 'Presevo', '631711737', 1, 'blue', 'hello hello', '2018-07-20 20:52:28', '2018-07-20 20:52:28'),
	(2, 4, 'latifiyll@gmail.com', 'Agon Latifi', 'Presevo', '631711737', 1, 'blue', 'hello hello', '2018-07-21 20:52:28', '2018-07-20 20:52:28');
/*!40000 ALTER TABLE `online_offers` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.page_details
CREATE TABLE IF NOT EXISTS `page_details` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) DEFAULT NULL,
  `header_text` varchar(100) DEFAULT NULL,
  `text` mediumtext,
  `image_header` varchar(50) DEFAULT NULL,
  `clicks` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table hetemi_db.page_details: ~1 rows (approximately)
/*!40000 ALTER TABLE `page_details` DISABLE KEYS */;
INSERT INTO `page_details` (`id_page`, `id_type`, `header_text`, `text`, `image_header`, `clicks`) VALUES
	(1, NULL, NULL, '\r\n<h2>Zwei zeitlose Top-Qualitätsprodukte , speziell für Renovationen, aber auch für Neubauten, wo filigrane Lamellen gewünscht werden.</h2>\r\n\r\n<b>Die AV-70 und AV-710 Aluminium-Verbundraffstoren eignen sich besonders für Objekte mit Nischentiefen (Sturz) von minimal 100 mm. Das attraktive Erscheinungsbild der ca. 70 mm breiten Lamellen bietet dem Planer ein dezentes Element für die moderne Fassadengestaltung. Während AV-70-Lamellen konventionell wechselseitig geführt werden, sind die AV-710-Lamellen mit Führungsbolzen auf beiden Seiten ausgestattet. Bei unveränderter Pakethöhe werden dadurch Windgeräusche reduziert.<br />\r\n\r\nLamellendicke: 0.42 mm; mit Dämpfungslippe; <br />Standard 20 VSR-Farben; Zugband- lochstanzungen randgebördelt; <br />Nippel aus Zinkdruckguss; Chromstahlverbindungs- elemente mit Schlaufenkordel verbunden; Unterschiene und Führungsschiene natur eloxiert; Aufzugs- und Wendevorrichtungen OHNE Arbeitsstellung; Doppel-Endanschlag; Zugbänder 8 mm (hochreissfest); verzinkte Stahlblech-Oberschiene 56/58 mm; Kanalträger mit Schwenkbügel; Handkurbel komplett mit verstellbarem Kurbelhalter; Oberschienenöffnung nach unten.', NULL, 0);
/*!40000 ALTER TABLE `page_details` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.page_images
CREATE TABLE IF NOT EXISTS `page_images` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `id_cateogry` int(11) NOT NULL DEFAULT '0',
  `id_image` int(11) DEFAULT '0',
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table hetemi_db.page_images: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `page_images` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hetemi_db.password_resets: ~1 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('latifiyll@gmail.com', '$2y$10$uNCKPh8eMhQLRFek7HknW.5uZTgssowtqGWYvKckewySI.NowduFO', '2018-07-12 14:50:10');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.slider_images
CREATE TABLE IF NOT EXISTS `slider_images` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `head_text` varchar(50) DEFAULT NULL,
  `small_text` varchar(200) DEFAULT NULL,
  `header_img` varchar(50) DEFAULT NULL,
  `rotation_effect` varchar(50) DEFAULT NULL,
  `active` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table hetemi_db.slider_images: ~8 rows (approximately)
/*!40000 ALTER TABLE `slider_images` DISABLE KEYS */;
INSERT INTO `slider_images` (`id_slider`, `head_text`, `small_text`, `header_img`, `rotation_effect`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'Hetemi - Montage - Service', 'Qualität - Beständigkeit - Vertrauen', 'SSiV8bKuJ2CAdFhhXKQLxM0CD8SqgefHyuI4WQaK.jpeg', 'rs-caption slide-caption2 slide-caption-left', 1, NULL, '2018-10-06 19:45:17'),
	(2, 'Sonnenstchuz', 'Lamellenstoren<br />Lamellenstoren Elektrisch <br />Elektrische Antriebe<br /> Markisen <br />Knickarm Markisen', 'slider1.jpg', 'rs-caption slide-caption2 slide-caption-left', 1, NULL, '2018-10-06 19:39:25'),
	(3, 'Glassprodukten', 'Aussengeländer<br />Duschkabinen<br />Glastüren<br />Vordächer', 'slider2.jpg', 'rs-caption slide-caption2 slide-caption-left', 1, NULL, NULL),
	(4, 'Fensten und Türen', 'Kunststoff Fenster<br />Hebeschiebetüren<br />Parallelschiebekipptüren<br />Kunststoff Alu Fenster<br />Eingangstüren', 'slider3.jpg', 'rs-caption slide-caption2 slide-caption-left', 1, NULL, NULL),
	(5, 'Lamellenstoren', '', 'slider4.jpg', 'rs-caption slide-caption2', 1, NULL, NULL),
	(6, 'Kunstoff Fenster', '', 'slider5.jpg', 'rs-caption slide-caption2', 1, NULL, NULL),
	(7, 'Hebeschiebetüren', '', 'slider6.jpg', 'rs-caption slide-caption2', 1, NULL, NULL),
	(8, 'Eingangstüren', '', 'slider7.jpg', 'rs-caption slide-caption2', 1, NULL, NULL);
/*!40000 ALTER TABLE `slider_images` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.types
CREATE TABLE IF NOT EXISTS `types` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `image_name` varchar(50) DEFAULT NULL,
  `type_name` varchar(50) DEFAULT NULL,
  `type_text` mediumtext,
  `type_text2` mediumtext,
  `clicks` bigint(20) DEFAULT '0',
  `active` tinyint(4) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table hetemi_db.types: ~14 rows (approximately)
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` (`id_type`, `id_category`, `image_name`, `type_name`, `type_text`, `type_text2`, `clicks`, `active`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Hetemi-Lamelenstoren-av-90-1.jpg', 'Lamellenstoren', '<h3>Zwei zeitlose Top-Qualit&auml;tsprodukte , speziell f&uuml;r Renovationen, aber auch f&uuml;r Neubauten, wo filigrane Lamellen gew&uuml;nscht werden.</h3>\r\n<p><strong>Die AV-70 und AV-710 Aluminium-Verbundraffstoren eignen sich besonders f&uuml;r Objekte mit Nischentiefen (Sturz) von minimal 100 mm. Das attraktive Erscheinungsbild der ca. 70 mm breiten Lamellen bietet dem Planer ein dezentes Element f&uuml;r die moderne Fassadengestaltung. W&auml;hrend AV-70-Lamellen konventionell wechselseitig gef&uuml;hrt werden, sind die AV-710-Lamellen mit F&uuml;hrungsbolzen auf beiden Seiten ausgestattet. Bei unver&auml;nderter Paketh&ouml;he werden dadurch Windger&auml;usche reduziert.<br />Lamellendicke: 0.42 mm; mit D&auml;mpfungslippe; <br />Standard 20 VSR-Farben; Zugband- lochstanzungen randgeb&ouml;rdelt; <br />Nippel aus Zinkdruckguss; Chromstahlverbindungs- elemente mit Schlaufenkordel verbunden; Unterschiene und F&uuml;hrungsschiene natur eloxiert; Aufzugs- und Wendevorrichtungen OHNE Arbeitsstellung; Doppel-Endanschlag; Zugb&auml;nder 8 mm (hochreissfest); verzinkte Stahlblech-Oberschiene 56/58 mm; Kanaltr&auml;ger mit Schwenkb&uuml;gel; Handkurbel komplett mit verstellbarem Kurbelhalter; Oberschienen&ouml;ffnung nach unten.</strong></p>', '<h3>Zwei zeitlose Top-Qualit&auml;tsprodukte ,speziell f&uuml;r Renovationen.</h3>\r\n<p><strong>Die AV-90 und AV-910 Aluminium-Verbundraffstoren eignen sich besonders f&uuml;r Objekte, wo gute Abdunklung gew&uuml;nscht wird und Nischentiefen (Sturz) von minimal 125 mm vorhanden sind. Das elegante Lamellenprofil sorgt f&uuml;r &auml;sthetische Fassaden und ist f&uuml;r ein breites Einsatzgebiet geeignet. W&auml;hrend AV-90-Lamellen konventionell wechselseitig gef&uuml;hrt werden, sind die AV-910-Lamellen mit Metall-F&uuml;hrungsbolzen auf beiden Seiten ausgestattet.<br />Lamellendicke: 0.42 mm; mit D&auml;mpfungslippe; Standard 20 VSR-Farben; Zugband- lochstanzungen randgeb&ouml;rdelt; Nippel aus Zinkdruckguss; Chromstahlverbindungs- elemente mit Schlaufenkordel verbunden; Unterschiene und F&uuml;hrungsschiene natur eloxiert; Aufzugs- und Wendevorrichtungen OHNE Arbeitsstellung; Doppel-Endanschlag; Zugb&auml;nder 8 mm (hochreissfest); verzinkte Stahlblech-Oberschiene 56/58 mm; Kanaltr&auml;ger mit Schwenkb&uuml;gel; Handkurbel komplett mit verstellbarem Kurbelhalter; Oberschienen&ouml;ffnung nach unten.</strong></p>', 25, 1, '2018-09-19 00:09:49', '2018-10-06 19:53:53'),
	(2, 2, NULL, 'Lamellenstoren Elektrisch', '<h3>Typ JA Soft- mit Hysteresebremse</h3>\r\n\r\n<b>J A Soft mit 6 + 9 Nm Drehmoment erhältlich\r\nVerschleissfreie, geräuschlose Softbremse\r\nRastbare, einstellbare Endschalter oben und unten\r\nSicherheitsendschalter\r\nSchraubloses Befestigungssystem\r\nMit Stecker Hirschmann Stak+Stas 3</b>', '<h3>Typ JA – Der Klassische</h3>\r\n\r\n<b>JA mit 20 Nm Drehmoment oder als JA 06 e mit einseitigem Antrieb erhältlich\r\n<br />Mit Flachbremse\r\n<br />Rastbare, einstellbare Endschalter oben und unten\r\n<br />Sicherheitsendschalter\r\n<br />Schraubloses Befestigungssystem\r\n<br />Mit Stecker Hirschmann Stak+Stas 3\r\n</b>', 78, 1, '2018-09-19 00:09:50', '2018-09-19 00:09:51'),
	(3, 2, NULL, 'Elektrisch Anbriebe', '<h3>Mehr Komfort durch elektrische Antriebe</h3><br />\r\nDie Elektrifizierung von Rollläden, Lamellenstoren und textilen Sonnenschutzanlagen ist in den letzten Jahren zum Standard geworden. \r\n<br />Lamellenstorenantriebe im Tragkanal oder Rohrmotoren die einfach in die Wickelwelle geschoben und per Schalter, Fernbedienung oder Zeitschaltuhr betätigt werden, bewegen vielseitige Anwendungen bequem, leise und materialschonend.\r\n<br />\r\n<br />\r\n\r\n<h3>Lösungen für jeden Bedarf</h3>\r\n\r\n<br />\r\n<b>Bei der Entwicklung der Antriebe wurde besonders darauf geachtet, die Antriebe optimal auf die jeweilige Einbausituation abzustimmen. Die Antriebstypen gibt es in einer Vielzahl von Drehmomenten und Ausführungen mit entsprechenden Adaptern für den Trägerprodukte neutralen Einbau. In der Produkte Palette von elero findet sich immer ein passender Antrieb, der innovative Eigenschaften mit einfacher Montage und Langlebigkeit kombiniert\r\n\r\noll im Trend – motorisierte Lamellen- und Raffstoren\r\nLuftig und Transparent – so wird heute gebaut. Nicht nur im Objektbereich sondern auch im Wohnbereich. Motorisierte und automatische Lamellen- + Raffstoren erhalten die Transparenz und regeln das Licht im Raum.Die Antriebe gibt es in vielen Ausführungen. Für eine schnellere Montage und Einstellungen haben die Jalousieantriebe rastbare Endschalter die gut zugänglich sind.\r\n\r\nMarkisenantriebe gibt es passend für alle Arten von textilem Sonnenschutz\r\nMarkisen sind als funktionaler und dekorativer Sonnenschutz für Balkon oder Terrasse weit verbreitet. Textile Beschattungen benötigen im Vergleich zu anderen Anwendungen besonders sensible Antriebe. Die Markisenantriebe gibt es in vielen Ausführungen und Stärken. Sämtliche Antriebe haben steckbare Kabel; Kupplungen und Lager sind zum “Einstecken und Einklicken”. Das vereinfacht den Einbau und die Installation.\r\n\r\nFür jeden Rollladen den richtigen Antrieb\r\nModerne Antriebe erfüllen eine Vielzahl von Anforderungen. Die Antriebe sollen robust, langlebig und zuverlässig sein, zugleich aber auch leise und wartungsfrei arbeiten.Rollladenantriebe vereinfachen die Bedienung und bringen Komfort ins Haus. Sie sind schnell zu montieren und können einfach in Betrieb genommen werden.\r\n</b>\r\n', NULL, 66, 1, '2018-09-19 00:09:52', '2018-09-19 00:10:12'),
	(4, 2, NULL, 'Markisen', '<h3>Die Markise – Attraktiver Sonnenschutz für Ihr Heim</h3>\r\n<b>\r\nMit einer Markise haben Sie den schönsten Sonnenschutz und schaffen sich eine mediterrane Atmosphäre. Egal ob auf Ihrer Terrasse oder Balkon, mit einer Markise haben Sie den besten Schutz vor Sonne und Hitze.<br />\r\nEs gibt viele Markisenmodelle – aber achten Sie auf Qualität! Bei uns bekommen Sie Schweizerischen Spitzenprodukte in jeder Ausführung. Wir finden für jedes Budget eine Lösung.<br />\r\nMan fühlt sich wohl und behaglich unter einer Markise. Die Designs der Markisenbespannungen lassen keine Wünsche offen. Auch wenn Sie meinen, es sei schwierig eine Markise bei Ihnen anzubringen, lassen Sie sich von uns an Ort und Stelle beraten – Wenn es eine Möglichkeit gibt, finden wir Diese und Sie sind im Nachhinein glücklich.<br />\r\nBei einem Kaffeeplausch unter der Markise mit Ihren Gästen, herrscht eine angenehme Stimmung und bei einem kleinen Regenschauer springt keiner auf und davon.<br />\r\nDie Sonne wird in Zukunft bedingt durch den Klimawechsel noch mehr scheinen. Bitte denken Sie auch an Ihre Gesundheit: Unter einer Markise können Sie auch Ihr Sonnenbad nehmen und braun werden!<br />\r\nZudem: Kinder spielen auch besser unter einer Markise, anstatt unter der prallen Sonne!<br />\r\nDie Markisen von heute sind robust, ästhetisch und preiswert in der Anschaffung.<br />\r\n</b>', NULL, 20, 1, '2018-09-19 00:09:53', '2018-09-19 00:10:12'),
	(5, 2, NULL, 'Knickarm Markissen', 'Knickarm Markissen', NULL, 500, 1, '2018-09-19 00:09:54', '2018-09-19 00:10:11'),
	(6, 3, NULL, 'Aussengeländer', 'Aussengeländer', NULL, 127, 1, '2018-09-19 00:09:55', '2018-09-19 00:10:10'),
	(7, 3, NULL, 'Duschkabinen', 'Duschkabinen', NULL, 200, 1, '2018-09-19 00:09:55', '2018-09-19 00:10:09'),
	(8, 3, NULL, 'Glastüren', 'Glastüren', NULL, 100, 1, '2018-09-19 00:09:56', '2018-09-19 00:10:08'),
	(9, 3, NULL, 'Vordächer', 'Vordächer', NULL, 638, 1, '2018-09-19 00:09:57', '2018-09-19 00:10:07'),
	(10, 4, NULL, 'Kunststoff Fenster', 'Kunststoff Fenster', NULL, 60, 1, '2018-09-19 00:09:58', '2018-09-19 00:10:06'),
	(11, 4, NULL, 'Hebeschiebetüren', 'Hebeschiebetüren', NULL, 90, 1, '2018-09-19 00:10:00', '2018-09-19 00:10:05'),
	(12, 4, NULL, 'Parallelschiebekipptüren', 'Parallelschiebekipptüren', NULL, 42, 1, '2018-09-19 00:09:59', '2018-09-19 00:10:05'),
	(13, 4, NULL, 'Kunststoff Alu Fenster', 'Kunststoff Alu Fenster', NULL, 71, 1, '2018-09-19 00:10:01', '2018-09-19 00:10:04'),
	(14, 4, NULL, 'Eingangstüren', 'Eingangstüren', NULL, 36, 1, '2018-09-19 00:10:02', '2018-09-19 00:10:03');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','manager','controller') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'controller',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hetemi_db.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `city`, `p_code`, `country`, `phone`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(12, 'test', 'test-test@test.com', '$2y$10$HmmhAcbTDoE7WO8qXRi9A.7i7XTGgjl8dfZhlFaRGqLIeo8d0vuKG', 'test', 'Test', '12345', 'Test', '063112457', 'admin', 'aJc3URa5d4u3hrZDKYoDQTkTzWcmzpP9mxn6wXk4O7vz2n8oU3IaJzNUAjQE', '2018-10-16 11:33:21', '2018-10-16 11:33:21');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table hetemi_db.visits
CREATE TABLE IF NOT EXISTS `visits` (
  `id_visit` int(11) NOT NULL AUTO_INCREMENT,
  `unique_visits` int(11) DEFAULT '0',
  `page_clicks` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_visit`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table hetemi_db.visits: ~3 rows (approximately)
/*!40000 ALTER TABLE `visits` DISABLE KEYS */;
INSERT INTO `visits` (`id_visit`, `unique_visits`, `page_clicks`, `created_at`, `updated_at`) VALUES
	(1, 0, 4, '2018-09-17 17:48:32', '2018-09-17 17:48:33'),
	(2, 0, 10, '2018-10-17 17:48:34', '2018-09-17 17:48:36'),
	(3, 0, 20, '2018-09-16 17:48:37', '2018-09-16 17:48:38');
/*!40000 ALTER TABLE `visits` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
