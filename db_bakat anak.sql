-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for bakat
CREATE DATABASE IF NOT EXISTS `bakat` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bakat`;

-- Dumping structure for table bakat.bakats
CREATE TABLE IF NOT EXISTS `bakats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bakat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.bakats: ~8 rows (approximately)
DELETE FROM `bakats`;
/*!40000 ALTER TABLE `bakats` DISABLE KEYS */;
INSERT INTO `bakats` (`id`, `kode`, `bakat`, `ket`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'A1', 'Linguistik', 'Kemampuan menggunakan kata-kata secara efektif. Anak-anak berbakat dalam kemampuan linguistik mempunyai keterampilan pendengaran yang sangat berkembang dan sangat menikmati ketika bermain dengan bunyi bahasa.', 'linguistik.jpg', '2023-04-28 05:24:19', '2023-04-28 05:24:20'),
	(2, 'A2', 'Logika', 'Kemampuan yang berkaitan dengan penggunaan bilangan dan logika secara efektif, seperti yang dimiliki oleh matematikus, saintis, programmer, dan logikus. Termasuk dalam kecerdasan ini adalah kepekaan pada pola logika, abstraksi, kategorisasi, dan perhitungan', 'logika.jpg', '2023-04-28 05:24:21', '2023-04-28 05:24:22'),
	(3, 'A3', 'Visual Spasial', 'Kemampuan untuk memberikan gambar-gambar dan kemampuan dalam mentransformasikan dunia visual spasial, termasuk kemampuan menghasilkan imaji mental dan menciptakan representasi grafis, berpikir tiga dimensi, serta menciptakan ulang dunia visual', 'visual.jpg', '2023-04-28 05:24:22', '2023-04-28 05:24:23'),
	(4, 'A4', 'Kinestik', 'Mampu memahami sesuatu yang berkaitan dengan gerakan badan sebelum dia memperoleh latihan secara formal atau bisa memahami dan melakukan gerakan dengan tepat hanya dengan latihan yang relatif singkat', 'kinestik.jpg', '2023-04-28 05:24:24', '2023-04-28 05:24:25'),
	(5, 'A5', 'Musikal', 'Kemampuan untuk mengembangkan, mengekspresikan, dan menikmati bentuk-bentuk musik dan suara. Kecerdasan musik juga meliputi kemampuan untuk mengamati, membedakan, mengarang, dan membentuk bentuk-bentuk musik, kepekaan terhadap ritme, melodi, dan timbre dari musik yang didengar.', 'musikal.jpg', '2023-04-28 05:24:25', '2023-04-28 05:24:26'),
	(6, 'A6', 'Interpersonal', 'Kemampuan untuk mengerti dan menjadi peka terhadap perasaan, niat, motivasi, watak orang lain, dan kepekaan akan ekspresi wajah serta suara', 'intrapersonal.jpg', '2023-04-28 05:24:26', '2023-04-28 05:24:27'),
	(7, 'A7', 'Intrapersonal', 'Kemampuan yang berkaitan dengan pengetahuan akan diri sendiri dan kemampuan untuk bertindak secara adaptif berdasar pengenalan diri tersebut. Termasuk dalam kecerdasan ini adalah mampu mengambil keputusan pribadi, bisa mengatur perasaan serta emosi dirinya sendiri', 'interpersonal.jpg', '2023-04-28 05:24:28', '2023-04-28 05:24:28'),
	(8, 'A8', 'Naturalis', 'Kemampuan seseorang untuk dapat mengerti flora dan fauna dengan baik, memahami dan menikmati alam serta menggunakan kemampuan tersebut secara produktif dalam bertani, berburu, dan mengembangkan pengetahuan alam lainnya.', 'naturalis.jpg', '2023-04-28 05:24:29', '2023-04-28 05:24:30');
/*!40000 ALTER TABLE `bakats` ENABLE KEYS */;

-- Dumping structure for table bakat.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table bakat.kompetensi_dasars
CREATE TABLE IF NOT EXISTS `kompetensi_dasars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kriteria_id` bigint(20) unsigned NOT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_kompetensi_dasars_kriterias` (`kriteria_id`),
  CONSTRAINT `FK_kompetensi_dasars_kriterias` FOREIGN KEY (`kriteria_id`) REFERENCES `kriterias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.kompetensi_dasars: ~46 rows (approximately)
DELETE FROM `kompetensi_dasars`;
/*!40000 ALTER TABLE `kompetensi_dasars` DISABLE KEYS */;
INSERT INTO `kompetensi_dasars` (`id`, `kriteria_id`, `no`, `ket`, `created_at`, `updated_at`) VALUES
	(1, 1, '(1.1)', 'Mepercayai adanya Tuhan melalui ciptaaanya', '2023-05-20 21:03:24', '2023-05-20 21:03:25'),
	(2, 1, '(1.2)', 'Menghargai diri sendiri, orang lain, dan lingkungan sekitar sebagai rasa syukur kepada Tuhan', '2023-05-20 21:03:50', '2023-05-20 21:03:51'),
	(3, 1, '(2.13)', 'Memiliki perilaku yang mencerminkan sikap jujur', '2023-05-20 21:04:08', '2023-05-20 21:04:09'),
	(4, 1, '(3.1)', 'Mengenal kegiatan beribadah sehari-hari', '2023-05-20 21:04:27', '2023-05-20 21:04:27'),
	(5, 1, '(3.2)', 'Mengenal perilaku baik sebagai cerminan akhlak mulia', '2023-05-20 21:04:45', '2023-05-20 21:04:45'),
	(6, 1, '(4.1)', 'Melakukan kegiatan beribadah seharihari dengan tuntunan orang dewasa', '2023-05-20 21:05:03', '2023-05-20 21:05:04'),
	(7, 1, '(4.2)', 'Menunjukkan perilaku santun sebagai cerminan akhlak mulia', '2023-05-20 21:05:21', '2023-05-20 21:05:21'),
	(8, 2, '(2.1)', 'Memiliki perilaku yang mencerminkan hidup sehat', '2023-04-12 11:08:50', '2023-04-12 11:08:51'),
	(9, 2, '(3.3)', 'Mengenal anggota tubuh, fungsi, dan gerakannya untuk pengembangan motorik kasar dan motorik halus', '2023-03-16 22:18:15', '2023-03-16 22:18:15'),
	(10, 2, '(4.3)', 'Menggunakan anggota tubuh untuk pengembangan motorik kasar dan halus', '2023-03-16 22:18:45', '2023-03-16 22:18:46'),
	(11, 2, '(3.4)', 'Mengetahui cara hidup sehat', '2023-03-16 22:19:03', '2023-03-16 22:19:04'),
	(12, 2, '(4.4)', 'Menolong diri sendiri untuk hidup sehat', '2023-03-16 22:19:36', '2023-03-16 22:19:36'),
	(13, 3, '(2.2)', 'Memiliki perilaku yang mencerminkan sikap ingin tahu', '2023-03-16 22:15:05', '2023-03-16 22:15:06'),
	(14, 3, '(2.3)', 'Memiliki perilaku yang mencerminkan sikap kreatif', '2023-04-12 11:08:52', '2023-04-12 11:08:54'),
	(15, 3, '(3.5)', 'Mengetahui cara memecahkan masalah sehari-hari dan berperilaku kreatif', '2023-03-16 22:15:27', '2023-03-16 22:15:28'),
	(16, 3, '(4.5)', 'Menyelesaikan masalah sehari-hari secara kreatif', '2023-03-16 22:15:54', '2023-03-16 22:15:55'),
	(17, 3, '(3.6)', 'Mengenal benda -benda disekitarnya (nama, warna, bentuk, ukuran, pola, sifat, suara, tekstur, fungsi, dan ciri-ciri lainnya)', '2023-03-16 22:16:16', '2023-03-16 22:16:16'),
	(18, 3, '(4.6)', 'Menyampaikan tentang apa dan bagaimana benda-benda disekitar yang dikenalnya (nama, warna, bentuk, ukuran, pola, sifat, suara, tekstur, fungsi, dan ciri-ciri lainnya) melalui berbagai hasil karya', '2023-03-16 22:16:28', '2023-03-16 22:16:29'),
	(19, 3, '(3.7)', 'Mengenal lingkungan sosial (keluarga, teman, tempat tinggal, tempat ibadah, budaya, transportasi)', '2023-03-16 22:16:59', '2023-03-16 22:17:00'),
	(20, 3, '(4.7)', 'Menyajikan berbagai karyanya dalam bentuk gambar, bercerita, bernyanyi, gerak tubuh, dll tentang lingkungan sosial (keluarga, teman, tempat tinggal, tempat ibadah, budaya, transportasi)', '2023-03-16 22:17:08', '2023-03-16 22:17:09'),
	(21, 3, '(3.8)', 'Mengenal lingkungan alam (hewan, tanaman, cuaca, tanah, air, batubatuan, dll)', '2023-03-16 22:17:31', '2023-03-16 22:17:32'),
	(22, 3, '(4.8)', 'Menyajikan berbagai karyanya dalam bentuk gambar, bercerita, bernyanyi, gerak tubuh, dll tentang lingkungan alam (hewan, tanaman, cuaca, tanah, air, batu-batuan, dll)', '2023-03-16 22:17:53', '2023-03-16 22:17:54'),
	(23, 3, '(3.9)', 'Mengenal teknologi sederhana (peralatan rumah tangga, peralatan bermain, peralatan pertukangan, dll)', '2023-04-12 11:08:55', '2023-04-12 11:08:56'),
	(24, 3, '(4.9)', 'Menggunakan teknologi sederhana untuk menyelesaikan tugas dan kegiatannya (peralatan rumah tangga, peralatan bermain, peralatan pertukangan, dll)', '2023-04-12 11:08:57', '2023-04-12 11:08:59'),
	(25, 4, '(3.10)', 'Memahami bahasa reseptif (menyimak dan membaca) ', '2023-03-16 22:13:06', '2023-03-16 22:13:07'),
	(26, 4, '(4.10)', 'Memahami  dan menunjukan berbahasa represif (menyimak dan membaca)', '2023-03-16 22:13:20', '2023-03-16 22:13:20'),
	(27, 4, '(3.11)', 'Memahami bahasa ekspresif (mengungkapkan bahasa secara verbal dan nonverbal)', '2023-03-16 22:13:40', '2023-03-16 22:13:40'),
	(28, 4, '(4.11)', 'Menunjukkan kemampuan berbahasa ekspresif (mengungkapkan bahasa secara verbal dan nonverbal)', '2023-03-16 22:14:07', '2023-03-16 22:14:07'),
	(29, 4, '(3.12)', 'Mengenal keaksaraan awal melalui bermain', '2023-03-16 22:14:22', '2023-03-16 22:14:22'),
	(30, 4, '(4.12)', 'Menunjukkan kemampuan keaksaraan awal dalam berbagai bentuk karya', '2023-03-16 22:14:48', '2023-03-16 22:14:49'),
	(31, 5, '(2.5)', 'Memiliki berperilaku yang mencerminkan sikap percaya diri', '2023-03-14 14:34:36', '2023-03-14 14:34:36'),
	(32, 5, '(2.6)', 'Memiliki perilaku yang mencerminkan sikap taat terhadap aturan sehari-hari untuk melatih kedisiplinan', '2023-03-16 22:08:05', '2023-03-16 22:08:06'),
	(33, 5, '(2.7)', 'Memiliki perilaku yang mencerminkan sikap sabar (mau menunggu giliran, mau mendengar ketika orang lain berbicara) untuk melatih kedisiplinan', '2023-03-16 22:08:37', '2023-03-16 22:08:37'),
	(34, 5, '(2.8)', 'Memiliki perilaku yang mencerminkan kemandirian', '2023-03-16 22:09:04', '2023-03-16 22:09:05'),
	(35, 5, '(2.9)', 'Memiliki perilaku yang mencerminkan sikap peduli dan mau membantu jika diminta bantuannya', '2023-03-16 22:09:24', '2023-03-16 22:09:25'),
	(36, 5, '(2.10)', 'Memiliki perilaku yang mencerminkan sikap menghargai dan toleran kepada orang lain', '2023-03-16 22:09:54', '2023-03-16 22:09:54'),
	(37, 5, '(2.11)', 'Memiliki perilaku menyesuaikan diri', '2023-03-16 22:10:20', '2023-03-16 22:10:20'),
	(38, 5, '(2.12)', 'Memiliki perilaku yang mencerminkan tanggungjawab', '2023-03-16 22:10:43', '2023-03-16 22:10:44'),
	(39, 5, '(2.14)', 'Memiliki perilaku yang mencerminkan sikap rendah hati dan santun kepada orang tua, pendidik, dan teman', '2023-03-16 22:12:36', '2023-03-16 22:12:37'),
	(40, 5, '(3.13)', 'Mengenal emosi diri dan orang lain', '2023-03-16 22:11:02', '2023-03-16 22:11:03'),
	(41, 5, '(4.13)', 'Menunjukkan reaksi emosi diri secara wajar', '2023-03-16 22:11:31', '2023-03-16 22:11:32'),
	(42, 5, '(3.14)', 'Mengenali kebutuhan, keinginan dan minat diri', '2023-03-16 22:11:52', '2023-03-16 22:11:52'),
	(43, 5, '(4.14)', 'Mengungkapkan kebutuhan, keinginan, dan minat diri dengan cara yang tepat', '2023-03-16 22:12:02', '2023-03-16 22:12:03'),
	(44, 6, '(2.4)', 'Memiliki perilaku yang mencerminkan sikap estetis', '2023-04-12 11:09:02', '2023-04-12 11:09:03'),
	(45, 6, '(3.15)', 'Mengenal berbagai karya dan aktivitas seni', '2023-03-16 22:20:05', '2023-03-16 22:20:05'),
	(46, 6, '(4.15)', 'Menunjukkan karya dan aktivitas seni dengan menggunakan berbagai media', '2023-03-16 22:20:28', '2023-03-16 22:20:29');
/*!40000 ALTER TABLE `kompetensi_dasars` ENABLE KEYS */;

-- Dumping structure for table bakat.kriterias
CREATE TABLE IF NOT EXISTS `kriterias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kriteria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.kriterias: ~5 rows (approximately)
DELETE FROM `kriterias`;
/*!40000 ALTER TABLE `kriterias` DISABLE KEYS */;
INSERT INTO `kriterias` (`id`, `kode`, `kriteria`, `created_at`, `updated_at`) VALUES
	(1, 'K1', 'Nilai Agama dan Moral', '2023-03-14 07:27:11', '2023-03-14 07:51:55'),
	(2, 'K2', 'Fisik Motorik', '2023-03-14 11:57:35', '2023-03-14 11:57:35'),
	(3, 'K3', 'Kognitif', '2023-03-14 11:58:42', '2023-03-14 11:58:42'),
	(4, 'K4', 'Bahasa', '2023-03-14 11:59:24', '2023-03-14 11:59:24'),
	(5, 'K5', 'Sosional-emosional', '2023-03-14 12:01:04', '2023-03-14 12:01:04'),
	(6, 'K6', 'Seni', '2023-05-23 12:45:17', '2023-05-23 12:45:18');
/*!40000 ALTER TABLE `kriterias` ENABLE KEYS */;

-- Dumping structure for table bakat.level_penilaians
CREATE TABLE IF NOT EXISTS `level_penilaians` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.level_penilaians: ~4 rows (approximately)
DELETE FROM `level_penilaians`;
/*!40000 ALTER TABLE `level_penilaians` DISABLE KEYS */;
INSERT INTO `level_penilaians` (`id`, `level`, `ket_nilai`, `bobot`, `created_at`, `updated_at`) VALUES
	(1, 'BB', 'Belum Berkembang', '1', '2023-03-14 21:03:13', '2023-03-14 14:06:27'),
	(2, 'MB', 'Mulai Berkembang', '2', '2023-03-14 14:20:29', '2023-03-14 14:20:29'),
	(3, 'SB', 'Sedang Berkembang', '3', '2023-03-14 14:21:58', '2023-03-14 14:21:58'),
	(4, 'BSH', 'Berkembang Sesuai Harapan', '4', '2023-03-14 14:22:16', '2023-03-14 15:07:34'),
	(5, 'BSB', 'Berkembang Sangat Baik', '5', '2023-05-23 12:44:34', '2023-05-23 12:44:35');
/*!40000 ALTER TABLE `level_penilaians` ENABLE KEYS */;

-- Dumping structure for table bakat.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.migrations: ~13 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_03_06_130945_create_kriterias_table', 1),
	(6, '2023_03_06_133440_create_bakats_table', 1),
	(7, '2023_03_06_133518_create_level_penilaians_table', 1),
	(8, '2023_03_06_133543_create_siswas_table', 1),
	(9, '2023_03_06_133601_create_penggunas_table', 1),
	(10, '2023_03_06_133634_create_nilai_gaps_table', 1),
	(11, '2023_03_06_133714_create_kompetensi_dasars_table', 1),
	(12, '2023_03_06_133739_create_nilai_totals_table', 1),
	(13, '2023_03_06_133813_create_nilai_cfsfs_table', 1),
	(14, '2023_03_06_161338_create_rapors_table', 2),
	(15, '2023_03_06_095958_create_presentase_cfsfs_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table bakat.nilai_bobots
CREATE TABLE IF NOT EXISTS `nilai_bobots` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `selisih` varchar(50) DEFAULT NULL,
  `nilai_bobot` varchar(50) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table bakat.nilai_bobots: ~8 rows (approximately)
DELETE FROM `nilai_bobots`;
/*!40000 ALTER TABLE `nilai_bobots` DISABLE KEYS */;
INSERT INTO `nilai_bobots` (`id`, `selisih`, `nilai_bobot`, `ket`, `created_at`, `updated_at`) VALUES
	(1, '0', '5.0', 'Tidak ada selisih', '2023-03-22 23:44:30', '2023-03-22 23:44:31'),
	(2, '1', '4.5', 'Kelebihan 1 tingkat/level', '2023-03-22 23:44:32', '2023-03-22 23:44:33'),
	(3, '-1', '4.0', 'Kekurangan 1 tingkat/level', '2023-03-22 23:44:34', '2023-03-22 23:44:34'),
	(4, '2', '3.5', 'Kelebihan 2 tingkat/level', '2023-03-22 23:44:35', '2023-03-22 23:44:36'),
	(5, '-2', '3.0', 'Kekurangan 2 tingkat/level', '2023-03-22 23:44:36', '2023-03-22 23:44:37'),
	(6, '3', '2.5', 'Kelebihan 3 tingkat/level', '2023-03-22 23:44:38', '2023-03-22 23:44:39'),
	(7, '-3', '2.0', 'Kekurangan 3 tingkat/level', '2023-03-22 23:44:39', '2023-03-22 23:44:40'),
	(8, '4', '1.5', 'Kelebihan 4 tingkat/level', '2023-03-22 23:44:41', '2023-03-22 23:44:42'),
	(9, '-4', '1.0', 'Kekurangan 4 tingkat/level', '2023-03-22 23:44:43', '2023-03-22 23:44:43');
/*!40000 ALTER TABLE `nilai_bobots` ENABLE KEYS */;

-- Dumping structure for table bakat.nilai_cfsfs
CREATE TABLE IF NOT EXISTS `nilai_cfsfs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bakat_id` bigint(20) unsigned NOT NULL,
  `kriteria_id` bigint(20) unsigned NOT NULL,
  `level_id` bigint(20) unsigned NOT NULL,
  `jenis` enum('1','2') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1=CF;2=SF',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_nilai_cfsfs_bakats` (`bakat_id`),
  KEY `FK_nilai_cfsfs_kriterias` (`kriteria_id`),
  KEY `FK_nilai_cfsfs_level_penilaians` (`level_id`),
  CONSTRAINT `FK_nilai_cfsfs_bakats` FOREIGN KEY (`bakat_id`) REFERENCES `bakats` (`id`),
  CONSTRAINT `FK_nilai_cfsfs_kriterias` FOREIGN KEY (`kriteria_id`) REFERENCES `kriterias` (`id`),
  CONSTRAINT `FK_nilai_cfsfs_level_penilaians` FOREIGN KEY (`level_id`) REFERENCES `level_penilaians` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.nilai_cfsfs: ~48 rows (approximately)
DELETE FROM `nilai_cfsfs`;
/*!40000 ALTER TABLE `nilai_cfsfs` DISABLE KEYS */;
INSERT INTO `nilai_cfsfs` (`id`, `bakat_id`, `kriteria_id`, `level_id`, `jenis`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, '2', '2023-03-23 14:50:19', '2023-03-23 14:50:20'),
	(2, 1, 2, 1, '2', '2023-03-23 14:52:25', '2023-03-23 14:52:26'),
	(3, 1, 3, 3, '2', '2023-03-23 14:52:42', '2023-03-23 14:52:43'),
	(4, 1, 4, 5, '1', '2023-03-23 14:53:06', '2023-03-23 14:53:07'),
	(5, 1, 5, 4, '1', '2023-03-23 14:53:20', '2023-03-23 14:53:21'),
	(6, 1, 6, 5, '1', '2023-05-23 12:46:29', '2023-05-23 12:46:30'),
	(7, 2, 1, 1, '2', '2023-03-23 14:53:46', '2023-03-23 14:53:47'),
	(8, 2, 2, 3, '2', '2023-03-23 14:53:57', '2023-03-23 14:53:58'),
	(9, 2, 3, 5, '1', '2023-03-23 14:53:57', '2023-03-23 14:53:58'),
	(10, 2, 4, 3, '2', '2023-03-23 14:54:56', '2023-03-23 14:54:56'),
	(11, 2, 5, 4, '1', '2023-03-23 14:55:33', '2023-03-23 14:55:34'),
	(12, 2, 6, 4, '1', '2023-05-23 12:47:14', '2023-05-23 12:47:14'),
	(13, 3, 1, 1, '2', '2023-03-23 14:55:54', '2023-03-23 14:55:55'),
	(14, 3, 2, 4, '1', '2023-03-23 14:56:05', '2023-03-23 14:56:06'),
	(15, 3, 3, 4, '1', '2023-03-23 14:56:19', '2023-03-23 14:56:20'),
	(16, 3, 4, 1, '2', '2023-03-23 14:56:33', '2023-03-23 14:56:33'),
	(17, 3, 5, 3, '2', '2023-03-23 14:56:45', '2023-03-23 14:56:45'),
	(18, 3, 6, 4, '1', '2023-05-23 12:47:45', '2023-05-23 12:47:46'),
	(19, 4, 1, 1, '2', '2023-03-23 14:57:06', '2023-03-23 14:57:07'),
	(20, 4, 2, 5, '1', '2023-03-23 14:57:24', '2023-03-23 14:57:24'),
	(21, 4, 3, 4, '1', '2023-03-23 14:57:24', '2023-03-23 14:57:24'),
	(22, 4, 4, 3, '2', '2023-03-23 14:57:24', '2023-03-23 14:57:24'),
	(23, 4, 5, 3, '2', '2023-03-23 14:57:24', '2023-03-23 14:57:24'),
	(24, 4, 6, 5, '1', '2023-05-23 12:48:02', '2023-05-23 12:48:03'),
	(25, 5, 1, 1, '2', '2023-03-23 14:58:15', '2023-03-23 14:58:16'),
	(26, 5, 2, 3, '2', '2023-03-23 14:58:15', '2023-03-23 14:58:16'),
	(27, 5, 3, 3, '2', '2023-03-23 14:58:15', '2023-03-23 14:58:16'),
	(28, 5, 4, 4, '1', '2023-03-23 14:58:15', '2023-03-23 14:58:16'),
	(29, 5, 5, 4, '1', '2023-03-23 14:58:15', '2023-03-23 14:58:16'),
	(30, 5, 6, 4, '1', '2023-05-23 12:48:19', '2023-05-23 12:48:20'),
	(31, 6, 1, 1, '2', '2023-03-23 14:59:23', '2023-03-23 14:59:24'),
	(32, 6, 2, 1, '2', '2023-03-23 14:59:23', '2023-03-23 14:59:24'),
	(33, 6, 3, 4, '1', '2023-03-23 14:59:23', '2023-03-23 14:59:24'),
	(34, 6, 4, 4, '1', '2023-03-23 14:59:23', '2023-03-23 14:59:24'),
	(35, 6, 5, 5, '1', '2023-03-23 14:59:23', '2023-03-23 14:59:24'),
	(36, 6, 6, 1, '2', '2023-05-23 12:48:40', '2023-05-23 12:48:41'),
	(37, 7, 1, 1, '2', '2023-03-23 15:00:15', '2023-03-23 15:00:17'),
	(38, 7, 2, 4, '1', '2023-03-23 15:00:15', '2023-03-23 15:00:17'),
	(39, 7, 3, 5, '1', '2023-03-23 15:00:15', '2023-03-23 15:00:17'),
	(40, 7, 4, 1, '2', '2023-03-23 15:00:15', '2023-03-23 15:00:17'),
	(41, 7, 5, 5, '1', '2023-03-23 15:00:15', '2023-03-23 15:00:17'),
	(42, 7, 6, 1, '2', '2023-05-23 12:48:56', '2023-05-23 12:48:57'),
	(43, 8, 1, 1, '2', '2023-03-23 15:02:21', '2023-03-23 15:02:22'),
	(44, 8, 2, 5, '1', '2023-03-23 15:02:21', '2023-03-23 15:02:22'),
	(45, 8, 3, 4, '1', '2023-03-23 15:02:21', '2023-03-23 15:02:22'),
	(46, 8, 4, 1, '2', '2023-03-23 15:02:21', '2023-03-23 15:02:22'),
	(47, 8, 5, 5, '1', '2023-03-23 15:02:21', '2023-03-23 15:02:22'),
	(48, 8, 6, 3, '2', '2023-05-23 12:49:16', '2023-05-23 12:49:17');
/*!40000 ALTER TABLE `nilai_cfsfs` ENABLE KEYS */;

-- Dumping structure for table bakat.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Dumping structure for table bakat.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table bakat.rapors
CREATE TABLE IF NOT EXISTS `rapors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `siswa_id` bigint(20) unsigned NOT NULL,
  `nilai_nam` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nilai_fm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_k` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_se` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_s` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rapors_siswa_id_foreign` (`siswa_id`),
  CONSTRAINT `rapors_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.rapors: ~1 rows (approximately)
DELETE FROM `rapors`;
/*!40000 ALTER TABLE `rapors` DISABLE KEYS */;
INSERT INTO `rapors` (`id`, `siswa_id`, `nilai_nam`, `nilai_fm`, `nilai_k`, `nilai_b`, `nilai_se`, `nilai_s`, `created_at`, `updated_at`) VALUES
	(11, 6, '5', '4', '4', '5', '4', '4', '2023-04-06 04:35:53', '2023-05-23 07:01:00'),
	(16, 7, '5', '4', '5', '4', '4', '4', '2023-06-13 04:24:45', '2023-06-13 04:25:05'),
	(17, 41, '5', '5', '5', '5', '5', '5', '2023-07-05 10:05:20', '2023-07-05 10:05:45');
/*!40000 ALTER TABLE `rapors` ENABLE KEYS */;

-- Dumping structure for table bakat.siswas
CREATE TABLE IF NOT EXISTS `siswas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `th_masuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_siswas_penggunas` (`user_id`),
  CONSTRAINT `FK_siswas_penggunas` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.siswas: ~37 rows (approximately)
DELETE FROM `siswas`;
/*!40000 ALTER TABLE `siswas` DISABLE KEYS */;
INSERT INTO `siswas` (`id`, `user_id`, `nama`, `jk`, `alamat`, `th_masuk`, `lahir`, `tb`, `bb`, `wali`, `created_at`, `updated_at`) VALUES
	(6, 5, 'Andhika', 'Laki-Laki', 'ghj', '2019', NULL, '100.5', '20', 'Abdurrahman', '2023-03-30 16:30:32', '2023-06-13 04:24:10'),
	(7, 7, 'Azarah Musdalifah', 'Perempuan', NULL, '2018', NULL, '111.5', '15', NULL, '2023-04-09 02:58:32', '2023-04-09 02:58:32'),
	(8, 8, 'M. Aruman Ibrahim Sulaiman', 'Laki-Laki', NULL, '2018', NULL, '109', '17', NULL, '2023-04-09 02:59:52', '2023-04-09 02:59:52'),
	(9, 9, 'Alief Adha Pratama', 'Laki-Laki', NULL, '2020', NULL, '117', '28', NULL, '2023-04-09 03:01:39', '2023-04-09 03:01:39'),
	(10, 10, 'Rizqi Bagus Ervian', 'Laki-Laki', NULL, '2018', NULL, '109', '17', NULL, '2023-04-09 03:05:02', '2023-04-09 03:05:02'),
	(11, 11, 'Muhammad Salman Alfarisi', 'Laki-Laki', NULL, '2018', NULL, '119.5', '19', NULL, '2023-04-09 03:05:53', '2023-04-09 03:05:53'),
	(12, 12, 'Moza Salsabilla Adriana', 'Perempuan', NULL, '2020', NULL, '103', '14', NULL, '2023-04-09 03:06:58', '2023-04-09 03:06:58'),
	(13, 13, 'Muh. Al Havis Verdiansyah', 'Laki-Laki', NULL, '2019', NULL, '110', '16', NULL, '2023-04-09 03:08:18', '2023-04-09 03:08:18'),
	(14, 14, 'Nabila Hasna Amira', 'Perempuan', NULL, '2018', NULL, '118', '18.5', NULL, '2023-04-09 03:09:12', '2023-04-09 03:09:12'),
	(15, 15, 'Zaneta Syakhila Putrianiaz', 'Perempuan', NULL, '2018', NULL, '112', '17', NULL, '2023-04-09 03:10:01', '2023-04-09 03:10:01'),
	(16, 16, 'Fathir Ahmad Azzami Sugiarto', 'Laki-Laki', NULL, '2018', NULL, '114', '19.5', NULL, '2023-04-09 03:11:02', '2023-04-09 03:11:02'),
	(17, 17, 'Rifki Akbar Fabiano Rosyid', 'Laki-Laki', NULL, '2018', NULL, '117', '24', NULL, '2023-04-09 03:11:58', '2023-04-09 03:11:58'),
	(18, 18, 'Kaila Dwi Ashifa', 'Perempuan', NULL, '2018', NULL, '117', '20', NULL, '2023-04-09 03:12:59', '2023-04-09 03:12:59'),
	(19, 19, 'Putri Endah Khoirun Zakia', 'Perempuan', NULL, '2018', NULL, '115', '23', NULL, '2023-04-09 03:19:04', '2023-04-09 03:19:04'),
	(20, 20, 'Daffa Adrian Putra Pratama', 'Laki-Laki', NULL, '2018', NULL, '114', '21', NULL, '2023-04-09 03:23:31', '2023-04-09 03:23:31'),
	(21, 21, 'Putri Chelsi A Anggraini', 'Perempuan', NULL, '2020', NULL, '105', '19', NULL, '2023-04-09 03:31:01', '2023-04-09 03:31:01'),
	(22, 22, 'Shafa Ali Nur Risqi', 'Perempuan', NULL, '2020', NULL, '109', '15', NULL, '2023-04-09 03:32:05', '2023-04-09 03:32:05'),
	(23, 23, 'Zhycko Alfiano Febrian', 'Laki-Laki', NULL, '2020', NULL, '114', '26', NULL, '2023-04-09 03:32:57', '2023-04-09 03:32:57'),
	(24, 24, 'Fiyan Maulana', 'Laki-Laki', NULL, '2020', NULL, '109', '15', NULL, '2023-04-09 03:33:35', '2023-04-09 03:33:35'),
	(25, 25, 'Alvaro Virendra Kara', 'Laki-Laki', NULL, '2019', NULL, '100.5', '13', NULL, '2023-04-09 03:34:49', '2023-04-09 03:34:49'),
	(26, 26, 'Haidar Alif', 'Laki-Laki', NULL, '2019', NULL, '97', '12', NULL, '2023-04-09 03:35:25', '2023-04-09 03:35:25'),
	(27, 27, 'Mochammad Zafran Al-Hafidzi', 'Laki-Laki', NULL, '2020', NULL, '115', '20', NULL, '2023-04-09 03:36:20', '2023-04-09 03:36:20'),
	(28, 28, 'M. Akhdan Aqil Nashifi', 'Laki-Laki', NULL, '2018', NULL, '110', '19', NULL, '2023-04-09 03:38:54', '2023-04-09 03:38:54'),
	(29, 29, 'Fadya Maisyarra Salsabila', 'Perempuan', NULL, '2018', NULL, '116', '20', NULL, '2023-04-09 03:39:50', '2023-04-09 03:39:50'),
	(30, 30, 'Citra Putri Andini', 'Perempuan', NULL, '2018', NULL, '122', '19', NULL, '2023-04-09 03:43:22', '2023-04-09 03:43:22'),
	(31, 31, 'Putri Agustina Musjaini', 'Perempuan', NULL, '2019', NULL, '114', '18', NULL, '2023-04-09 03:44:32', '2023-04-09 03:44:32'),
	(32, 32, 'Muhammad Al Fahrurozy', 'Laki-Laki', NULL, '2019', NULL, NULL, NULL, NULL, '2023-04-09 03:45:27', '2023-04-09 03:45:27'),
	(33, 33, 'Dzaky Biansa Fadhil', 'Laki-Laki', NULL, '2019', NULL, NULL, NULL, NULL, '2023-04-09 03:47:58', '2023-04-09 03:47:58'),
	(34, 34, 'Aisyah Azzalfa Sugiarto', 'Perempuan', NULL, '2021', NULL, '96', '13.5', NULL, '2023-04-09 03:49:01', '2023-04-09 03:49:01'),
	(35, 35, 'Aska Azfar Rabbani', 'Laki-Laki', NULL, '2021', NULL, '99', '15', NULL, '2023-04-09 03:49:54', '2023-04-09 03:49:54'),
	(36, 36, 'Muhammad Azkal Azkiyak', 'Laki-Laki', NULL, '2021', NULL, '110.5', '18', NULL, '2023-04-09 03:51:21', '2023-04-09 03:51:21'),
	(37, 37, 'Muhammad Nazril Putra N.', 'Laki-Laki', NULL, '2021', NULL, NULL, NULL, NULL, '2023-04-09 03:52:08', '2023-04-09 03:52:08'),
	(38, 38, 'Vallen Santya Febrianita  B.', 'Perempuan', NULL, '2021', NULL, '100', '14', NULL, '2023-04-09 03:52:50', '2023-04-09 03:52:50'),
	(39, 39, 'Ahmad Daffa Ramadhan', 'Laki-Laki', NULL, '2020', NULL, '117', '20', NULL, '2023-04-09 03:53:51', '2023-04-09 03:53:51'),
	(40, 40, 'Keysha Zianka A.', 'Laki-Laki', NULL, '2020', NULL, NULL, NULL, NULL, '2023-04-09 03:55:14', '2023-04-09 03:55:14'),
	(41, 42, 'wdsdsdasd', 'Laki-Laki', 'asdasd', 'asd', '1111-11-11', '111.5', '12', 'asd', '2023-07-05 09:58:41', '2023-07-05 10:04:48');
/*!40000 ALTER TABLE `siswas` ENABLE KEYS */;

-- Dumping structure for table bakat.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bakat.users: ~38 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
	(5, '456', '$2y$10$8sIkODguPwT/P8wk5vv99.PP22kE3XcmutJDUhV2etA5JNKBU2fle', 'Siswa', '2023-03-30 16:30:32', '2023-03-30 16:30:32'),
	(6, 'admin', '$2y$10$CowdPSGATYBPsPouDcdAk.AhtZgXxIrY/DhdwUdfHvLW2cTierUBi', 'Admin', '2023-04-05 13:32:04', '2023-04-05 13:32:04'),
	(7, '330', '$2y$10$wZEhycPJYv7cganKm.REFeXT6beFxsd4x5b0wA4QRSBNLJ58eTfNa', 'Siswa', '2023-04-09 02:58:32', '2023-04-09 02:58:32'),
	(8, '348', '$2y$10$IZu6Q9KwPq8BX2lQzKIGceeCIGbAQ29IqTPMKsYUi6hl8Fy8H7J2q', 'Siswa', '2023-04-09 02:59:52', '2023-04-09 02:59:52'),
	(9, '363', '$2y$10$goCekqT3nK.9Zm.6NLy/5euaQu7Z6m9prgFfLpXhTxrpVEenujRGy', 'Siswa', '2023-04-09 03:01:39', '2023-04-09 04:52:45'),
	(10, '343', '$2y$10$1OuS/sOPpIqQeTKS.2dRlOLFIYBJKGKy6eytXYw4TUDspR4swPbGm', 'Siswa', '2023-04-09 03:05:02', '2023-04-09 03:05:02'),
	(11, '345', '$2y$10$R7MWYCjJIFDMc6vAsQsgFOF59/UPW.ewa6wRqx5DoDHvCHgC9LCtG', 'Siswa', '2023-04-09 03:05:53', '2023-04-09 03:05:53'),
	(12, '370', '$2y$10$Iea6G/nsZjapj1FAKOumdu0Rp3D74usIo3pQeEaky4PkdSpJWk/kG', 'Siswa', '2023-04-09 03:06:58', '2023-04-09 03:06:58'),
	(13, '353', '$2y$10$.ufTgHtFGtHFx788/5w9vOdtSBBdQ5UpQiqzk1oTkjmp7Gv2B1FNK', 'Siswa', '2023-04-09 03:08:18', '2023-04-09 03:08:18'),
	(14, '331', '$2y$10$NwjHWq/0yS.b7xtsyjkqbeWiVHkD8gc.ceYTtuDrD8LgBYOrOAI4.', 'Siswa', '2023-04-09 03:09:11', '2023-04-09 03:09:11'),
	(15, '319', '$2y$10$yW8s7NAaUDHQzIcZSB8.RuJmrY1iYDiPjmFqV7lTRAtpmpx0vg9s2', 'Siswa', '2023-04-09 03:10:01', '2023-04-09 03:10:01'),
	(16, '328', '$2y$10$yWWZ6e23FptEuNhNNsv6M.vdub3niQRQ3cH7qZIueYWkfMT0lQwPa', 'Siswa', '2023-04-09 03:11:02', '2023-04-09 03:11:02'),
	(17, '339', '$2y$10$iAwCsKibkZVw5MlI5kj2lurUUoamsJORXZuwF1pqiDNdRCj78Pz3G', 'Siswa', '2023-04-09 03:11:58', '2023-04-09 03:11:58'),
	(18, '337', '$2y$10$dm9FM0Qu6jw8Qix3i02ALukR5GyAe1tX.RIn8dnp/U.4YcoH.6GmO', 'Siswa', '2023-04-09 03:12:59', '2023-04-09 03:12:59'),
	(19, '342', '$2y$10$jozyGGdJrdOJcatF2UlibOqs7UGgSlhKJ.kpURWheloNeW3lM1vqa', 'Siswa', '2023-04-09 03:19:04', '2023-04-09 03:19:04'),
	(20, '332', '$2y$10$euKQUX7bQ8fY/5US10kHwuucVC308W259b5do0i08nfZ1ktxyhtAu', 'Siswa', '2023-04-09 03:23:31', '2023-04-09 03:23:31'),
	(21, '368', '$2y$10$Aox7ntZ0.E3lMkVtedP8kOcrGESNb39K1W6xOnRXiCUq/pB82icbK', 'Siswa', '2023-04-09 03:31:01', '2023-04-09 03:31:01'),
	(22, '374', '$2y$10$KF/ILuSafflAnAUHr7pdMOz0QUp.5Nu9hJi1bxYKoz0cc7OST/j6y', 'Siswa', '2023-04-09 03:32:05', '2023-04-09 03:32:05'),
	(23, '359', '$2y$10$vUmBgTsEX0TVyhXF74d8FOp1Y.TBJSeegrEVulRD0jgCTlYw3Y6Q.', 'Siswa', '2023-04-09 03:32:57', '2023-04-09 03:32:57'),
	(24, '377', '$2y$10$v09S66pfkMMbNUVjWMDXROh2acPIc7s4UO22FadNlanRk/aDREMTO', 'Siswa', '2023-04-09 03:33:35', '2023-04-09 03:33:35'),
	(25, '354', '$2y$10$/CoLUHgX12Kn3wKDK8vb/OIrF/tdCfDpigWjKjB4cCj7GM5wzdhXi', 'Siswa', '2023-04-09 03:34:49', '2023-04-09 03:34:49'),
	(26, '355', '$2y$10$fb7zrcJNnlhTCrU5W.li2uIyJqnrg4D1jP6XczTPTlFxf.pT7kmX.', 'Siswa', '2023-04-09 03:35:25', '2023-04-09 03:35:25'),
	(27, '351', '$2y$10$qWCDoJFzbh0y3yY7oFY4COXvZWAGgJgmPL9b7JlRgPTXxHXEVEbca', 'Siswa', '2023-04-09 03:36:19', '2023-04-09 03:36:19'),
	(28, '327', '$2y$10$GwKXSC34vaodIm..nsadwu.8/o3pCOHKtOCnyCHsrnOJZ6rFeSxIq', 'Siswa', '2023-04-09 03:38:54', '2023-04-09 03:38:54'),
	(29, '333', '$2y$10$4EOX.3SeNxf2as/7poytkud1qGpJdZzje9PGWDk12szZgCaNh.jiu', 'Siswa', '2023-04-09 03:39:50', '2023-04-09 03:39:50'),
	(30, '326', '$2y$10$QU2oTq1Wu5C/JFnjLMn/w.1EQQR0uPhZtEhIyLJGbXYHGF5Qb1g4m', 'Siswa', '2023-04-09 03:43:22', '2023-04-09 03:43:22'),
	(31, '360', '$2y$10$2J/F.tXEOELJxmxgxLPEUeSfNaZLJtHJ8uO.mRVoQRKVhGbRJnY8C', 'Siswa', '2023-04-09 03:44:32', '2023-04-09 03:44:32'),
	(32, '338', '$2y$10$PHFAnWbRM7jSimQOmpql.u9ano7cb1RPTcPOIDBTSHgJf99hnI0IK', 'Siswa', '2023-04-09 03:45:27', '2023-04-09 03:45:27'),
	(33, '362', '$2y$10$kmywMvJJFLu0UxV0rAu1xuwANYOKSSALVSw0yzmEMD39wGXdwzOvO', 'Siswa', '2023-04-09 03:47:58', '2023-04-09 03:47:58'),
	(34, '395', '$2y$10$K/4Jb1YJ2M8/9BW/T4o61OLaY7V84GZaq9nDEj7JNOqJQczh3NcTu', 'Siswa', '2023-04-09 03:49:01', '2023-04-09 03:49:01'),
	(35, '376', '$2y$10$PTf3ahUoUJYjWCzg1cRZxuclN1Ra8P7fjd0zt7LsSg/lE1UsPsDlO', 'Siswa', '2023-04-09 03:49:54', '2023-04-09 03:49:54'),
	(36, '384', '$2y$10$0Lu5LzOmz4lkJlqYhiu/heeEzG/09pvhFBWPC3pL4X33UVkg7u7h2', 'Siswa', '2023-04-09 03:51:21', '2023-04-09 03:51:21'),
	(37, '391', '$2y$10$ryNg9rs1SWlz8cgX319qHu1SFhjM0PKnkqrMMVMqc9SMUySZYhy6y', 'Siswa', '2023-04-09 03:52:08', '2023-04-09 03:52:08'),
	(38, '394', '$2y$10$0GRnahkFYmAVcbpF3u2lE.kKMgFQxmDcyuCbxEFbVhADQJj.8Oyra', 'Siswa', '2023-04-09 03:52:50', '2023-04-09 03:52:50'),
	(39, '375', '$2y$10$Z9RLo8.PyIIsL5o1xqZic.2cPrtx5it8ISW/QFtxLzdL9IXReiAYq', 'Siswa', '2023-04-09 03:53:51', '2023-04-09 03:53:51'),
	(40, '373', '$2y$10$1fI1GT58PUzgTGjsnjj3tOPEtFFH13yK4B5VqK3wTxv.XaYr64onu', 'Siswa', '2023-04-09 03:55:14', '2023-04-09 03:55:14'),
	(41, '122', '$2y$10$b4n9BTGmtDi6TAcZ.lrDzuR2UV5lmZwn6BTj6iCMk1.QG5HTxLsku', 'Siswa', '2023-04-09 04:02:28', '2023-04-09 04:02:28'),
	(42, '123', '$2y$10$YT04lRzKAH4Ry6p3HD0k9uu//rrN0St0kom/pSA7NMp0PE0dmtPVm', 'Siswa', '2023-07-05 09:58:41', '2023-07-05 09:58:41');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
