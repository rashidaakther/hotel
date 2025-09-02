/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.32-MariaDB : Database - hotel_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hotel_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `hotel_db`;

/*Table structure for table `banners` */

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `banners` */

insert  into `banners`(`id`,`title`,`sub_title`,`image`,`is_active`,`created_at`,`updated_at`) values (1,'Welcome To','i-Suites Residence & Restaurant','documents/banner/202.jpg',1,NULL,'2024-11-09 16:54:42'),(2,'Enjoy','The Best Food','documents/banner/5011.jpg',1,NULL,'2024-11-09 16:56:02'),(3,'Perfect Place For Dining','RoofTop Restaurant','documents/banner/5011.jpg',1,NULL,'2024-11-09 16:56:59');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_11_09_111550_create_rooms_table',2),(6,'2024_11_09_164131_create_banners_table',3);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `rooms` */

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `features` text DEFAULT NULL,
  `bdt_price` double(20,2) DEFAULT 0.00,
  `usd_price` double(20,2) DEFAULT 0.00,
  `thumbnail` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1 COMMENT '1=active,2=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `rooms` */

insert  into `rooms`(`id`,`name`,`room_type`,`floor`,`features`,`bdt_price`,`usd_price`,`thumbnail`,`image1`,`image2`,`image3`,`image4`,`image5`,`is_active`,`created_at`,`updated_at`) values (1,'Premium Suites','type','501','Free WIFI,View City',25000.00,250.00,'documents/room/202411/hotel room.jpg','documents/room/202411/1731175292_1.jpg',NULL,NULL,NULL,NULL,1,'2024-11-09 13:38:41','2024-11-10 00:01:32'),(2,'Dr. Helal','type2','503','VIew CIty,Wifi',35000.00,350.00,'documents/room/202411/5023.jpg','documents/room/202411/202.jpg','documents/room/202411/501.jpg','documents/room/202411/503.jpg','documents/room/202411/505.jpg','documents/room/202411/506.jpg',1,'2024-11-09 14:32:34','2024-11-09 15:11:10');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(4) DEFAULT 1 COMMENT '1=active,2=inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`is_active`,`remember_token`,`created_at`,`updated_at`) values (1,'Admin','admin@gmail.com',NULL,'$2y$10$yCxr/7EY4U0gO8NsFUd1c.U8mmMFJMob77jZdhMoJV00bpN7z5e2u',1,NULL,'2024-11-07 00:57:28','2024-11-07 00:57:30');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
