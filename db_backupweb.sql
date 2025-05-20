-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: gpswox_web
-- ------------------------------------------------------
-- Server version	9.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alert_device`
--

DROP TABLE IF EXISTS `alert_device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alert_device` (
  `alert_id` int unsigned NOT NULL,
  `device_id` int unsigned NOT NULL,
  `started_at` datetime DEFAULT NULL,
  `fired_at` datetime DEFAULT NULL,
  `silenced_at` datetime DEFAULT NULL,
  `active_from` datetime DEFAULT NULL,
  `active_to` datetime DEFAULT NULL,
  KEY `alert_device_alert_id_index` (`alert_id`),
  KEY `alert_device_device_id_index` (`device_id`),
  KEY `alert_device_device_id_alert_id_index` (`device_id`,`alert_id`),
  CONSTRAINT `alert_device_alert_id_foreign` FOREIGN KEY (`alert_id`) REFERENCES `alerts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `alert_device_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `alert_driver_pivot`
--

DROP TABLE IF EXISTS `alert_driver_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alert_driver_pivot` (
  `alert_id` int unsigned NOT NULL,
  `driver_id` int unsigned NOT NULL,
  KEY `alert_driver_pivot_alert_id_index` (`alert_id`),
  KEY `alert_driver_pivot_driver_id_index` (`driver_id`),
  CONSTRAINT `alert_driver_pivot_alert_id_foreign` FOREIGN KEY (`alert_id`) REFERENCES `alerts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `alert_driver_pivot_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `user_drivers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `alert_event_pivot`
--

DROP TABLE IF EXISTS `alert_event_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alert_event_pivot` (
  `alert_id` int unsigned NOT NULL,
  `event_id` int unsigned NOT NULL,
  KEY `alert_event_pivot_alert_id_index` (`alert_id`),
  KEY `alert_event_pivot_event_id_index` (`event_id`),
  CONSTRAINT `alert_event_pivot_alert_id_foreign` FOREIGN KEY (`alert_id`) REFERENCES `alerts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `alert_event_pivot_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events_custom` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `alert_fuel_consumption`
--

DROP TABLE IF EXISTS `alert_fuel_consumption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alert_fuel_consumption` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `alert_id` int unsigned DEFAULT NULL,
  `quantity` int NOT NULL,
  `fuel_type` tinyint NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `done` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alert_fuel_consumption_alert_id_foreign` (`alert_id`),
  CONSTRAINT `alert_fuel_consumption_alert_id_foreign` FOREIGN KEY (`alert_id`) REFERENCES `alerts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `alert_geofence`
--

DROP TABLE IF EXISTS `alert_geofence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alert_geofence` (
  `alert_id` int unsigned NOT NULL,
  `geofence_id` int unsigned NOT NULL,
  KEY `alert_geofence_alert_id_index` (`alert_id`),
  KEY `alert_geofence_geofence_id_index` (`geofence_id`),
  CONSTRAINT `alert_geofence_alert_id_foreign` FOREIGN KEY (`alert_id`) REFERENCES `alerts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `alert_geofence_geofence_id_foreign` FOREIGN KEY (`geofence_id`) REFERENCES `geofences` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `alert_poi`
--

DROP TABLE IF EXISTS `alert_poi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alert_poi` (
  `alert_id` int unsigned NOT NULL,
  `poi_id` int unsigned NOT NULL,
  KEY `alert_poi_alert_id_index` (`alert_id`),
  KEY `alert_poi_poi_id_index` (`poi_id`),
  CONSTRAINT `alert_poi_alert_id_foreign` FOREIGN KEY (`alert_id`) REFERENCES `alerts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `alert_poi_poi_id_foreign` FOREIGN KEY (`poi_id`) REFERENCES `user_map_icons` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `alert_user`
--

DROP TABLE IF EXISTS `alert_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alert_user` (
  `user_id` int unsigned NOT NULL,
  `alert_id` int unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`alert_id`),
  KEY `alert_user_user_id_index` (`user_id`),
  KEY `alert_user_alert_id_index` (`alert_id`),
  CONSTRAINT `alert_user_alert_id_foreign` FOREIGN KEY (`alert_id`) REFERENCES `alerts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `alert_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `alert_zone`
--

DROP TABLE IF EXISTS `alert_zone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alert_zone` (
  `alert_id` int unsigned NOT NULL,
  `geofence_id` int unsigned NOT NULL,
  KEY `alert_zone_alert_id_index` (`alert_id`),
  KEY `alert_zone_geofence_id_index` (`geofence_id`),
  CONSTRAINT `alert_zone_alert_id_foreign` FOREIGN KEY (`alert_id`) REFERENCES `alerts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `alert_zone_geofence_id_foreign` FOREIGN KEY (`geofence_id`) REFERENCES `geofences` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `alerts`
--

DROP TABLE IF EXISTS `alerts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alerts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` varchar(64) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `schedules` text COLLATE utf8mb3_unicode_ci,
  `notifications` text COLLATE utf8mb3_unicode_ci,
  `data` text COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alerts_user_id_foreign` (`user_id`),
  KEY `alerts_active_index` (`active`),
  KEY `alerts_type_index` (`type`),
  CONSTRAINT `alerts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `apn_config`
--

DROP TABLE IF EXISTS `apn_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `apn_config` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `apn_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `apn_username` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `apn_password` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `edited` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `apn_config_edited_index` (`edited`),
  KEY `apn_config_active_index` (`active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `backup_processes`
--

DROP TABLE IF EXISTS `backup_processes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `backup_processes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `backup_id` bigint unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_item_id` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `processed` bigint unsigned NOT NULL DEFAULT '0',
  `total` bigint unsigned NOT NULL DEFAULT '0',
  `duration_active` int unsigned NOT NULL,
  `attempt` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reserved_at` timestamp NULL DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `failed_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `backup_processes_backup_id_foreign` (`backup_id`),
  CONSTRAINT `backup_processes_backup_id_foreign` FOREIGN KEY (`backup_id`) REFERENCES `backups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `backups`
--

DROP TABLE IF EXISTS `backups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `backups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `launcher` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `backups_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `billing_plan_permissions`
--

DROP TABLE IF EXISTS `billing_plan_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `billing_plan_permissions` (
  `plan_id` int unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '0',
  `edit` tinyint(1) NOT NULL DEFAULT '0',
  `remove` tinyint(1) NOT NULL DEFAULT '0',
  KEY `billing_plan_permissions_plan_id_index` (`plan_id`),
  CONSTRAINT `billing_plan_permissions_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `billing_plans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `billing_plans`
--

DROP TABLE IF EXISTS `billing_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `billing_plans` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` double(8,2) unsigned NOT NULL,
  `objects` int unsigned NOT NULL,
  `duration_type` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `duration_value` int unsigned NOT NULL,
  `visible` tinyint(1) DEFAULT '1',
  `template` text COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `call_actions`
--

DROP TABLE IF EXISTS `call_actions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `call_actions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int unsigned DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `event_id` int unsigned DEFAULT NULL,
  `alert_id` int unsigned DEFAULT NULL,
  `called_at` datetime DEFAULT NULL,
  `response_type` text COLLATE utf8mb3_unicode_ci,
  `remarks` text COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `call_actions_device_id_foreign` (`device_id`),
  KEY `call_actions_user_id_foreign` (`user_id`),
  KEY `call_actions_event_id_foreign` (`event_id`),
  KEY `call_actions_alert_id_foreign` (`alert_id`),
  CONSTRAINT `call_actions_alert_id_foreign` FOREIGN KEY (`alert_id`) REFERENCES `alerts` (`id`) ON DELETE SET NULL,
  CONSTRAINT `call_actions_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `call_actions_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE SET NULL,
  CONSTRAINT `call_actions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `chat_messages`
--

DROP TABLE IF EXISTS `chat_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat_messages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `chat_id` int NOT NULL,
  `sender_id` int NOT NULL,
  `content` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `chat_messages_to_user`
--

DROP TABLE IF EXISTS `chat_messages_to_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat_messages_to_user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `message_id` int NOT NULL,
  `read_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `chat_participants`
--

DROP TABLE IF EXISTS `chat_participants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat_participants` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `chat_id` int NOT NULL,
  `chattable_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `chattable_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `read_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `chat_participants_chattable_type_chattable_id_index` (`chattable_type`,`chattable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chats` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `checklist`
--

DROP TABLE IF EXISTS `checklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `checklist` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `template_id` int unsigned DEFAULT NULL,
  `service_id` int unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `signature` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `notes` text COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `checklist_template_id_foreign` (`template_id`),
  KEY `checklist_service_id_foreign` (`service_id`),
  CONSTRAINT `checklist_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `device_services` (`id`) ON DELETE SET NULL,
  CONSTRAINT `checklist_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `checklist_template` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `checklist_history`
--

DROP TABLE IF EXISTS `checklist_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `checklist_history` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `template_id` int unsigned DEFAULT NULL,
  `checklist_id` int unsigned DEFAULT NULL,
  `service_id` int unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `signature` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `notes` text COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `checklist_history_template_id_foreign` (`template_id`),
  KEY `checklist_history_checklist_id_foreign` (`checklist_id`),
  KEY `checklist_history_service_id_foreign` (`service_id`),
  CONSTRAINT `checklist_history_checklist_id_foreign` FOREIGN KEY (`checklist_id`) REFERENCES `checklist` (`id`) ON DELETE SET NULL,
  CONSTRAINT `checklist_history_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `device_services` (`id`) ON DELETE SET NULL,
  CONSTRAINT `checklist_history_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `checklist_template` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `checklist_images`
--

DROP TABLE IF EXISTS `checklist_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `checklist_images` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `checklist_id` int unsigned NOT NULL,
  `row_id` int unsigned NOT NULL,
  `checklist_history_id` int unsigned DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `checklist_images_checklist_id_index` (`checklist_id`),
  KEY `checklist_images_row_id_index` (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `checklist_row`
--

DROP TABLE IF EXISTS `checklist_row`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `checklist_row` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `checklist_id` int unsigned NOT NULL,
  `template_row_id` int unsigned DEFAULT NULL,
  `activity` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` datetime DEFAULT NULL,
  `outcome` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `checklist_row_checklist_id_foreign` (`checklist_id`),
  KEY `checklist_row_template_row_id_foreign` (`template_row_id`),
  CONSTRAINT `checklist_row_checklist_id_foreign` FOREIGN KEY (`checklist_id`) REFERENCES `checklist` (`id`) ON DELETE CASCADE,
  CONSTRAINT `checklist_row_template_row_id_foreign` FOREIGN KEY (`template_row_id`) REFERENCES `checklist_template_row` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `checklist_row_history`
--

DROP TABLE IF EXISTS `checklist_row_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `checklist_row_history` (
  `checklist_history_id` int unsigned NOT NULL,
  `checklist_id` int unsigned DEFAULT NULL,
  `checklist_row_id` int unsigned DEFAULT NULL,
  `template_row_id` int unsigned DEFAULT NULL,
  `activity` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` datetime DEFAULT NULL,
  `outcome` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  KEY `checklist_row_history_checklist_history_id_foreign` (`checklist_history_id`),
  KEY `checklist_row_history_checklist_id_foreign` (`checklist_id`),
  KEY `checklist_row_history_checklist_row_id_foreign` (`checklist_row_id`),
  KEY `checklist_row_history_template_row_id_foreign` (`template_row_id`),
  CONSTRAINT `checklist_row_history_checklist_history_id_foreign` FOREIGN KEY (`checklist_history_id`) REFERENCES `checklist_history` (`id`) ON DELETE CASCADE,
  CONSTRAINT `checklist_row_history_checklist_id_foreign` FOREIGN KEY (`checklist_id`) REFERENCES `checklist` (`id`) ON DELETE SET NULL,
  CONSTRAINT `checklist_row_history_checklist_row_id_foreign` FOREIGN KEY (`checklist_row_id`) REFERENCES `checklist_row` (`id`) ON DELETE SET NULL,
  CONSTRAINT `checklist_row_history_template_row_id_foreign` FOREIGN KEY (`template_row_id`) REFERENCES `checklist_template_row` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `checklist_template`
--

DROP TABLE IF EXISTS `checklist_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `checklist_template` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `checklist_template_user_id_index` (`user_id`),
  CONSTRAINT `checklist_template_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `checklist_template_row`
--

DROP TABLE IF EXISTS `checklist_template_row`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `checklist_template_row` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `template_id` int unsigned NOT NULL,
  `activity` text COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `checklist_template_row_template_id_foreign` (`template_id`),
  CONSTRAINT `checklist_template_row_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `checklist_template` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `personal_code` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `command_schedule_device`
--

DROP TABLE IF EXISTS `command_schedule_device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `command_schedule_device` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `command_schedule_id` int unsigned NOT NULL,
  `device_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `command_schedule_device_command_schedule_id_foreign` (`command_schedule_id`),
  KEY `command_schedule_device_device_id_foreign` (`device_id`),
  CONSTRAINT `command_schedule_device_command_schedule_id_foreign` FOREIGN KEY (`command_schedule_id`) REFERENCES `command_schedules` (`id`) ON DELETE CASCADE,
  CONSTRAINT `command_schedule_device_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `command_schedules`
--

DROP TABLE IF EXISTS `command_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `command_schedules` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `connection` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `command` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `parameters` text COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `command_schedules_user_id_foreign` (`user_id`),
  CONSTRAINT `command_schedules_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `command_template_device_types`
--

DROP TABLE IF EXISTS `command_template_device_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `command_template_device_types` (
  `device_type_id` int unsigned NOT NULL,
  `command_template_id` int unsigned NOT NULL,
  PRIMARY KEY (`device_type_id`,`command_template_id`),
  KEY `command_template_device_types_device_type_id_index` (`device_type_id`),
  KEY `command_template_device_types_command_template_id_index` (`command_template_id`),
  CONSTRAINT `command_template_device_types_command_template_id_foreign` FOREIGN KEY (`command_template_id`) REFERENCES `command_templates` (`id`) ON DELETE CASCADE,
  CONSTRAINT `command_template_device_types_device_type_id_foreign` FOREIGN KEY (`device_type_id`) REFERENCES `device_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `command_template_devices`
--

DROP TABLE IF EXISTS `command_template_devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `command_template_devices` (
  `device_id` int unsigned NOT NULL,
  `command_template_id` int unsigned NOT NULL,
  PRIMARY KEY (`device_id`,`command_template_id`),
  KEY `command_template_devices_device_id_index` (`device_id`),
  KEY `command_template_devices_command_template_id_index` (`command_template_id`),
  CONSTRAINT `command_template_devices_command_template_id_foreign` FOREIGN KEY (`command_template_id`) REFERENCES `command_templates` (`id`) ON DELETE CASCADE,
  CONSTRAINT `command_template_devices_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `command_templates`
--

DROP TABLE IF EXISTS `command_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `command_templates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(32) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `adapted` varchar(64) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb3_unicode_ci,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `command_templates_type_index` (`type`),
  KEY `command_templates_user_id_index` (`user_id`),
  KEY `command_templates_adapted_index` (`adapted`),
  CONSTRAINT `command_templates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `companies` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `vat_number` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `registration_code` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `companies_user_id_index` (`user_id`),
  CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `configs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `custom_fields`
--

DROP TABLE IF EXISTS `custom_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `custom_fields` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `data_type` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8mb3_unicode_ci,
  `default` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `validation` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `custom_values`
--

DROP TABLE IF EXISTS `custom_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `custom_values` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `custom_field_id` int unsigned NOT NULL,
  `customizable_id` int unsigned NOT NULL,
  `customizable_type` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `custom_values_custom_field_id_foreign` (`custom_field_id`),
  CONSTRAINT `custom_values_custom_field_id_foreign` FOREIGN KEY (`custom_field_id`) REFERENCES `custom_fields` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `databases`
--

DROP TABLE IF EXISTS `databases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `databases` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `driver` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `host` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `port` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `username` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `database` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `size` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_cameras`
--

DROP TABLE IF EXISTS `device_cameras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_cameras` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `show_widget` tinyint(1) NOT NULL DEFAULT '0',
  `ftp_username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `ftp_password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `device_cameras_device_id_index` (`device_id`),
  CONSTRAINT `device_cameras_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_config`
--

DROP TABLE IF EXISTS `device_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_config` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `commands` text COLLATE utf8mb3_unicode_ci,
  `edited` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `device_config_edited_index` (`edited`),
  KEY `device_config_active_index` (`active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_current_beacons_pivot`
--

DROP TABLE IF EXISTS `device_current_beacons_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_current_beacons_pivot` (
  `device_id` int unsigned NOT NULL,
  `beacon_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `device_current_beacons_pivot_device_id_index` (`device_id`),
  KEY `device_current_beacons_pivot_beacon_id_index` (`beacon_id`),
  CONSTRAINT `device_current_beacons_pivot_beacon_id_foreign` FOREIGN KEY (`beacon_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `device_current_beacons_pivot_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_device_plan`
--

DROP TABLE IF EXISTS `device_device_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_device_plan` (
  `device_id` int unsigned NOT NULL,
  `plan_id` int unsigned NOT NULL,
  KEY `device_device_plan_device_id_foreign` (`device_id`),
  KEY `device_device_plan_plan_id_foreign` (`plan_id`),
  CONSTRAINT `device_device_plan_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `device_device_plan_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `device_plans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_expense_types`
--

DROP TABLE IF EXISTS `device_expense_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_expense_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_expenses`
--

DROP TABLE IF EXISTS `device_expenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_expenses` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `device_id` int unsigned NOT NULL,
  `type_id` int unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `quantity` decimal(10,2) DEFAULT NULL,
  `unit_cost` double(8,2) NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `buyer` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `additional` text COLLATE utf8mb3_unicode_ci,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `device_expenses_user_id_index` (`user_id`),
  KEY `device_expenses_device_id_index` (`device_id`),
  KEY `device_expenses_type_id_index` (`type_id`),
  CONSTRAINT `device_expenses_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `device_expenses_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `device_expense_types` (`id`) ON DELETE SET NULL,
  CONSTRAINT `device_expenses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_forward`
--

DROP TABLE IF EXISTS `device_forward`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_forward` (
  `device_id` int unsigned NOT NULL,
  `forward_id` int unsigned NOT NULL,
  KEY `device_forward_device_id_index` (`device_id`),
  KEY `device_forward_forward_id_index` (`forward_id`),
  CONSTRAINT `device_forward_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `device_forward_forward_id_foreign` FOREIGN KEY (`forward_id`) REFERENCES `forwards` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_fuel_measurements`
--

DROP TABLE IF EXISTS `device_fuel_measurements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_fuel_measurements` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `fuel_title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `distance_title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `lang` char(255) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `device_fuel_measurements_lang_index` (`lang`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_group_forward`
--

DROP TABLE IF EXISTS `device_group_forward`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_group_forward` (
  `group_id` int unsigned NOT NULL,
  `forward_id` int unsigned NOT NULL,
  KEY `device_group_forward_group_id_index` (`group_id`),
  KEY `device_group_forward_forward_id_index` (`forward_id`),
  CONSTRAINT `device_group_forward_forward_id_foreign` FOREIGN KEY (`forward_id`) REFERENCES `forwards` (`id`) ON DELETE CASCADE,
  CONSTRAINT `device_group_forward_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `device_groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_groups`
--

DROP TABLE IF EXISTS `device_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_groups` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `open` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `device_groups_user_id_index` (`user_id`),
  CONSTRAINT `device_groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_history_beacons_pivot`
--

DROP TABLE IF EXISTS `device_history_beacons_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_history_beacons_pivot` (
  `device_id` int unsigned NOT NULL,
  `beacon_id` int unsigned NOT NULL,
  `date` datetime DEFAULT NULL,
  `action` tinyint unsigned NOT NULL,
  KEY `device_history_beacons_pivot_device_id_index` (`device_id`),
  KEY `device_history_beacons_pivot_beacon_id_index` (`beacon_id`),
  CONSTRAINT `device_history_beacons_pivot_beacon_id_foreign` FOREIGN KEY (`beacon_id`) REFERENCES `devices` (`id`),
  CONSTRAINT `device_history_beacons_pivot_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_icons`
--

DROP TABLE IF EXISTS `device_icons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_icons` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'icon',
  `order` tinyint DEFAULT NULL,
  `width` double(8,2) NOT NULL,
  `height` double(8,2) NOT NULL,
  `path` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `by_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `device_icons_user_id_index` (`user_id`),
  CONSTRAINT `device_icons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_models`
--

DROP TABLE IF EXISTS `device_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `protocol` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_plan_device_type`
--

DROP TABLE IF EXISTS `device_plan_device_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_plan_device_type` (
  `device_plan_id` int unsigned NOT NULL,
  `device_type_id` int unsigned NOT NULL,
  KEY `device_plan_device_type_device_plan_id_index` (`device_plan_id`),
  KEY `device_plan_device_type_device_type_id_index` (`device_type_id`),
  CONSTRAINT `device_plan_device_type_device_plan_id_foreign` FOREIGN KEY (`device_plan_id`) REFERENCES `device_plans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `device_plan_device_type_device_type_id_foreign` FOREIGN KEY (`device_type_id`) REFERENCES `device_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_plans`
--

DROP TABLE IF EXISTS `device_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_plans` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `duration_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `duration_value` int NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb3_unicode_ci,
  `template` text COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_route_types`
--

DROP TABLE IF EXISTS `device_route_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_route_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `device_id` int unsigned DEFAULT NULL,
  `started_at` datetime DEFAULT NULL,
  `ended_at` datetime DEFAULT NULL,
  `type` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `device_route_types_user_id_foreign` (`user_id`),
  KEY `device_route_types_device_id_foreign` (`device_id`),
  KEY `device_route_types_started_at_index` (`started_at`),
  KEY `device_route_types_ended_at_index` (`ended_at`),
  KEY `device_route_types_type_index` (`type`),
  CONSTRAINT `device_route_types_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `device_route_types_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_sensors`
--

DROP TABLE IF EXISTS `device_sensors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_sensors` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `device_id` int unsigned DEFAULT NULL,
  `icon_id` int unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `add_to_history` tinyint(1) NOT NULL DEFAULT '0',
  `add_to_graph` tinyint(1) DEFAULT NULL,
  `on_value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `off_value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `shown_value_by` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `fuel_tank_name` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `full_tank` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `full_tank_value` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `min_value` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `max_value` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `formula` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `odometer_value_by` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `odometer_value` double(13,2) unsigned DEFAULT NULL,
  `odometer_value_unit` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'km',
  `value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT '-',
  `value_formula` int NOT NULL DEFAULT '0',
  `show_in_popup` tinyint(1) NOT NULL DEFAULT '0',
  `unit_of_measurement` varchar(32) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `on_tag_value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `off_tag_value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `on_type` tinyint DEFAULT NULL,
  `off_type` tinyint DEFAULT NULL,
  `data` text COLLATE utf8mb3_unicode_ci,
  `calibrations` mediumtext COLLATE utf8mb3_unicode_ci,
  `skip_calibration` tinyint(1) DEFAULT NULL,
  `skip_empty` tinyint(1) DEFAULT NULL,
  `decbin` tinyint(1) DEFAULT NULL,
  `hexbin` tinyint(1) DEFAULT NULL,
  `bitcut` text COLLATE utf8mb3_unicode_ci,
  `ascii` tinyint(1) DEFAULT NULL,
  `mappings` text COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `device_sensors_user_id_index` (`user_id`),
  KEY `device_sensors_device_id_index` (`device_id`),
  KEY `device_sensors_type_index` (`type`),
  KEY `device_sensors_tag_name_index` (`tag_name`),
  KEY `device_sensors_add_to_history_index` (`add_to_history`),
  KEY `device_sensors_show_in_popup_index` (`show_in_popup`),
  KEY `device_sensors_icon_id_index` (`icon_id`),
  CONSTRAINT `device_sensors_icon_id_foreign` FOREIGN KEY (`icon_id`) REFERENCES `sensor_icons` (`id`) ON DELETE SET NULL,
  CONSTRAINT `device_sensors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_services`
--

DROP TABLE IF EXISTS `device_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_services` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `device_id` int unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `expiration_by` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `interval` int NOT NULL DEFAULT '1',
  `last_service` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `trigger_event_left` int unsigned NOT NULL DEFAULT '0',
  `renew_after_expiration` tinyint(1) NOT NULL DEFAULT '0',
  `expires` double unsigned NOT NULL DEFAULT '0',
  `expires_date` date DEFAULT NULL,
  `remind` double unsigned NOT NULL DEFAULT '0',
  `remind_date` date DEFAULT NULL,
  `event_sent` tinyint(1) NOT NULL DEFAULT '0',
  `expired` tinyint(1) NOT NULL DEFAULT '0',
  `email` text COLLATE utf8mb3_unicode_ci,
  `mobile_phone` text COLLATE utf8mb3_unicode_ci,
  `description` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `device_services_user_id_index` (`user_id`),
  KEY `device_services_device_id_index` (`device_id`),
  KEY `device_services_event_sent_index` (`event_sent`),
  KEY `device_services_expired_index` (`expired`),
  CONSTRAINT `device_services_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `device_services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_type_imeis`
--

DROP TABLE IF EXISTS `device_type_imeis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_type_imeis` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `device_type_id` int unsigned DEFAULT NULL,
  `imei` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `msisdn` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `device_type_imeis_device_type_id_foreign` (`device_type_id`),
  CONSTRAINT `device_type_imeis_device_type_id_foreign` FOREIGN KEY (`device_type_id`) REFERENCES `device_types` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `device_types`
--

DROP TABLE IF EXISTS `device_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `device_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sensor_group_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `device_types_sensor_group_id_foreign` (`sensor_group_id`),
  CONSTRAINT `device_types_sensor_group_id_foreign` FOREIGN KEY (`sensor_group_id`) REFERENCES `sensor_groups` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `devices` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `current_driver_id` int unsigned DEFAULT NULL,
  `timezone_id` int unsigned DEFAULT NULL,
  `traccar_device_id` bigint NOT NULL,
  `icon_id` int unsigned DEFAULT NULL,
  `model_id` bigint unsigned DEFAULT NULL,
  `icon_colors` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '{"moving":"green","stopped":"yellow","offline":"red","engine":"yellow"}',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `kind` tinyint unsigned NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `imei` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `fuel_measurement_id` int unsigned DEFAULT NULL,
  `fuel_quantity` decimal(8,2) NOT NULL,
  `fuel_price` decimal(8,2) NOT NULL,
  `fuel_per_km` decimal(10,4) DEFAULT NULL,
  `fuel_per_h` decimal(10,4) NOT NULL,
  `sim_number` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `msisdn` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `device_model` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `plate_number` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `vin` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `registration_number` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `object_owner` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `additional_notes` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `authentication` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `expiration_date` datetime DEFAULT '0000-00-00 00:00:00',
  `sim_expiration_date` date NOT NULL DEFAULT '0000-00-00',
  `sim_activation_date` date NOT NULL DEFAULT '0000-00-00',
  `installation_date` date NOT NULL DEFAULT '0000-00-00',
  `tail_color` char(7) COLLATE utf8mb3_unicode_ci DEFAULT '#33CC33',
  `tail_length` int DEFAULT '5',
  `engine_hours` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT 'gps',
  `detect_engine` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT 'gps',
  `detect_speed` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `detect_distance` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `min_moving_speed` int unsigned DEFAULT '6',
  `min_fuel_fillings` int unsigned DEFAULT '10',
  `min_fuel_thefts` int unsigned DEFAULT '10',
  `snap_to_road` tinyint(1) NOT NULL DEFAULT '0',
  `gprs_templates_only` tinyint(1) NOT NULL DEFAULT '0',
  `valid_by_avg_speed` tinyint(1) DEFAULT '1',
  `parameters` text COLLATE utf8mb3_unicode_ci,
  `currents` text COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `forward` text COLLATE utf8mb3_unicode_ci,
  `device_type_id` int unsigned DEFAULT NULL,
  `app_uuid` varchar(64) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `app_tracker_login` tinyint(1) NOT NULL DEFAULT '0',
  `fuel_detect_sec_after_stop` smallint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `devices_imei_unique` (`imei`),
  KEY `devices_user_id_foreign` (`user_id`),
  KEY `devices_icon_id_foreign` (`icon_id`),
  KEY `devices_fuel_measurement_id_foreign` (`fuel_measurement_id`),
  KEY `devices_traccar_device_id_index` (`traccar_device_id`),
  KEY `devices_active_index` (`active`),
  KEY `devices_deleted_index` (`deleted`),
  KEY `devices_timezone_id_index` (`timezone_id`),
  KEY `devices_current_driver_id_index` (`current_driver_id`),
  KEY `devices_device_type_id_foreign` (`device_type_id`),
  KEY `devices_kind_index` (`kind`),
  KEY `devices_model_id_foreign` (`model_id`),
  CONSTRAINT `devices_current_driver_id_foreign` FOREIGN KEY (`current_driver_id`) REFERENCES `user_drivers` (`id`) ON DELETE SET NULL,
  CONSTRAINT `devices_device_type_id_foreign` FOREIGN KEY (`device_type_id`) REFERENCES `device_types` (`id`) ON DELETE SET NULL,
  CONSTRAINT `devices_fuel_measurement_id_foreign` FOREIGN KEY (`fuel_measurement_id`) REFERENCES `device_fuel_measurements` (`id`) ON DELETE SET NULL,
  CONSTRAINT `devices_icon_id_foreign` FOREIGN KEY (`icon_id`) REFERENCES `device_icons` (`id`) ON DELETE SET NULL,
  CONSTRAINT `devices_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `device_models` (`id`) ON DELETE SET NULL,
  CONSTRAINT `devices_timezone_id_foreign` FOREIGN KEY (`timezone_id`) REFERENCES `timezones` (`id`) ON DELETE SET NULL,
  CONSTRAINT `devices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `diem_rates`
--

DROP TABLE IF EXISTS `diem_rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diem_rates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rates` text COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `email_templates`
--

DROP TABLE IF EXISTS `email_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `email_templates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email_templates_user_id_index` (`user_id`),
  CONSTRAINT `email_templates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `event_custom_tags`
--

DROP TABLE IF EXISTS `event_custom_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_custom_tags` (
  `event_custom_id` int unsigned NOT NULL,
  `tag` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  KEY `event_custom_tags_event_custom_id_index` (`event_custom_id`),
  KEY `event_custom_tags_tag_index` (`tag`),
  CONSTRAINT `event_custom_tags_event_custom_id_foreign` FOREIGN KEY (`event_custom_id`) REFERENCES `events_custom` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `device_id` int unsigned DEFAULT NULL,
  `geofence_id` int unsigned DEFAULT NULL,
  `poi_id` int unsigned DEFAULT NULL,
  `position_id` int unsigned DEFAULT NULL,
  `alert_id` int unsigned DEFAULT NULL,
  `type` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `power` double DEFAULT NULL,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `additional` text COLLATE utf8mb3_unicode_ci,
  `silent` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_user_id_foreign` (`user_id`),
  KEY `events_device_id_foreign` (`device_id`),
  KEY `events_geofence_id_foreign` (`geofence_id`),
  KEY `events_alert_id_foreign` (`alert_id`),
  KEY `events_deleted_index` (`deleted`),
  KEY `events_created_at_index` (`created_at`),
  KEY `events_poi_id_foreign` (`poi_id`),
  KEY `events_silent_index` (`silent`),
  CONSTRAINT `events_alert_id_foreign` FOREIGN KEY (`alert_id`) REFERENCES `alerts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `events_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `events_geofence_id_foreign` FOREIGN KEY (`geofence_id`) REFERENCES `geofences` (`id`) ON DELETE SET NULL,
  CONSTRAINT `events_poi_id_foreign` FOREIGN KEY (`poi_id`) REFERENCES `user_map_icons` (`id`) ON DELETE CASCADE,
  CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28867 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `events_custom`
--

DROP TABLE IF EXISTS `events_custom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events_custom` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `conditions` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `always` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `events_custom_always_index` (`always`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `events_log`
--

DROP TABLE IF EXISTS `events_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events_log` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `object_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `object_id` bigint unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `events_log_object_type_object_id_index` (`object_type`,`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `events_queue`
--

DROP TABLE IF EXISTS `events_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events_queue` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `device_id` int unsigned NOT NULL,
  `data` text COLLATE utf8mb3_unicode_ci,
  `type` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_queue_user_id_index` (`user_id`),
  KEY `events_queue_device_id_index` (`device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `fcm_tokens`
--

DROP TABLE IF EXISTS `fcm_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fcm_tokens` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int unsigned NOT NULL,
  `owner_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fcm_tokens_user_id_index` (`owner_id`),
  KEY `fcm_tokens_owner_id_index` (`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `forwards`
--

DROP TABLE IF EXISTS `forwards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `forwards` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `shareable` tinyint(1) NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forwards_user_id_index` (`user_id`),
  KEY `forwards_active_index` (`active`),
  CONSTRAINT `forwards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `geofence_groups`
--

DROP TABLE IF EXISTS `geofence_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `geofence_groups` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `open` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `geofence_groups_user_id_index` (`user_id`),
  CONSTRAINT `geofence_groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `geofences`
--

DROP TABLE IF EXISTS `geofences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `geofences` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `group_id` int unsigned DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `coordinates` mediumtext COLLATE utf8mb3_unicode_ci,
  `polygon` polygon DEFAULT NULL,
  `polygon_color` varchar(7) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(16) COLLATE utf8mb3_unicode_ci DEFAULT 'polygon',
  `radius` double(8,2) DEFAULT NULL,
  `center` text COLLATE utf8mb3_unicode_ci,
  `device_id` int unsigned DEFAULT NULL,
  `speed_limit` double(8,2) DEFAULT NULL,
  `diem_rate_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `geofences_user_id_index` (`user_id`),
  KEY `geofences_group_id_index` (`group_id`),
  KEY `geofences_active_index` (`active`),
  KEY `geofences_device_id_foreign` (`device_id`),
  KEY `geofences_diem_rate_id_index` (`diem_rate_id`),
  CONSTRAINT `geofences_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE SET NULL,
  CONSTRAINT `geofences_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `geofence_groups` (`id`) ON DELETE SET NULL,
  CONSTRAINT `geofences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jobs_failed`
--

DROP TABLE IF EXISTS `jobs_failed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs_failed` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `connection` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `jobs_failed_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `map_icons`
--

DROP TABLE IF EXISTS `map_icons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `map_icons` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `width` double(8,2) NOT NULL,
  `height` double(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `media_categories`
--

DROP TABLE IF EXISTS `media_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_categories_user_id_index` (`user_id`),
  CONSTRAINT `media_categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=286 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `model_change_logs`
--

DROP TABLE IF EXISTS `model_change_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_change_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `subject_id` bigint unsigned DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `causer_id` bigint unsigned DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb3_unicode_ci,
  `ip` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `model_change_logs_log_name_index` (`log_name`),
  KEY `model_change_logs_ip_index` (`ip`),
  KEY `subject` (`subject_id`,`subject_type`),
  KEY `causer` (`causer_id`,`causer_type`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `plan_id` int unsigned DEFAULT NULL,
  `plan_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `entity_id` int unsigned DEFAULT NULL,
  `entity_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `paid_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`),
  UNIQUE KEY `pages_title_unique` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `password_reminders`
--

DROP TABLE IF EXISTS `password_reminders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reminders` (
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `password_reset_codes`
--

DROP TABLE IF EXISTS `password_reset_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_codes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `password_reset_codes_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `poi_groups`
--

DROP TABLE IF EXISTS `poi_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poi_groups` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `open` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `poi_groups_user_id_index` (`user_id`),
  CONSTRAINT `poi_groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `popup_rules`
--

DROP TABLE IF EXISTS `popup_rules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `popup_rules` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `popup_id` int DEFAULT NULL,
  `rule_name` text COLLATE utf8mb3_unicode_ci,
  `field_name` text COLLATE utf8mb3_unicode_ci,
  `field_value` text COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `popups`
--

DROP TABLE IF EXISTS `popups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `popups` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb3_unicode_ci,
  `content` longtext COLLATE utf8mb3_unicode_ci,
  `position` text COLLATE utf8mb3_unicode_ci,
  `show_every_days` int DEFAULT NULL,
  `active` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `popups_user_id_index` (`user_id`),
  CONSTRAINT `popups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `position_geofence`
--

DROP TABLE IF EXISTS `position_geofence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `position_geofence` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `position_id` int unsigned NOT NULL,
  `geofence_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `position_geofence_position_id_index` (`position_id`),
  KEY `position_geofence_geofence_id_index` (`geofence_id`),
  CONSTRAINT `position_geofence_geofence_id_foreign` FOREIGN KEY (`geofence_id`) REFERENCES `geofences` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `report_device_pivot`
--

DROP TABLE IF EXISTS `report_device_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `report_device_pivot` (
  `report_id` int unsigned NOT NULL,
  `device_id` int unsigned NOT NULL,
  KEY `report_device_pivot_report_id_index` (`report_id`),
  KEY `report_device_pivot_device_id_index` (`device_id`),
  CONSTRAINT `report_device_pivot_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `report_device_pivot_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `report_geofence_pivot`
--

DROP TABLE IF EXISTS `report_geofence_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `report_geofence_pivot` (
  `report_id` int unsigned NOT NULL,
  `geofence_id` int unsigned NOT NULL,
  KEY `report_geofence_pivot_report_id_index` (`report_id`),
  KEY `report_geofence_pivot_geofence_id_index` (`geofence_id`),
  CONSTRAINT `report_geofence_pivot_geofence_id_foreign` FOREIGN KEY (`geofence_id`) REFERENCES `geofences` (`id`) ON DELETE CASCADE,
  CONSTRAINT `report_geofence_pivot_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `report_logs`
--

DROP TABLE IF EXISTS `report_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `report_logs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` tinyint NOT NULL,
  `format` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `size` int unsigned NOT NULL,
  `is_send` tinyint(1) NOT NULL DEFAULT '0',
  `error` text COLLATE utf8mb3_unicode_ci,
  `data` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `report_logs_user_id_foreign` (`user_id`),
  CONSTRAINT `report_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `report_poi_pivot`
--

DROP TABLE IF EXISTS `report_poi_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `report_poi_pivot` (
  `report_id` int unsigned NOT NULL,
  `poi_id` int unsigned NOT NULL,
  KEY `report_poi_pivot_report_id_index` (`report_id`),
  KEY `report_poi_pivot_poi_id_index` (`poi_id`),
  CONSTRAINT `report_poi_pivot_poi_id_foreign` FOREIGN KEY (`poi_id`) REFERENCES `user_map_icons` (`id`) ON DELETE CASCADE,
  CONSTRAINT `report_poi_pivot_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reports` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `type` tinyint unsigned DEFAULT NULL,
  `format` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `show_addresses` tinyint(1) DEFAULT NULL,
  `zones_instead` tinyint(1) DEFAULT NULL,
  `stops` int unsigned DEFAULT NULL,
  `speed_limit` double(8,2) unsigned DEFAULT NULL,
  `daily` tinyint(1) DEFAULT NULL,
  `daily_time` varchar(5) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '00:00',
  `weekly` tinyint(1) DEFAULT NULL,
  `weekly_time` varchar(5) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '00:00',
  `email` text COLLATE utf8mb3_unicode_ci,
  `weekly_email_sent` datetime DEFAULT NULL,
  `daily_email_sent` datetime DEFAULT NULL,
  `period` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `from_format` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `to_format` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb3_unicode_ci,
  `metas` text COLLATE utf8mb3_unicode_ci,
  `attempts` tinyint DEFAULT NULL,
  `monthly` tinyint(1) DEFAULT NULL,
  `monthly_time` varchar(5) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '00:00',
  `monthly_email_sent` datetime DEFAULT NULL,
  `skip_blank_results` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reports_user_id_index` (`user_id`),
  KEY `reports_daily_index` (`daily`),
  KEY `reports_weekly_index` (`weekly`),
  KEY `reports_weekly_email_sent_index` (`weekly_email_sent`),
  KEY `reports_daily_email_sent_index` (`daily_email_sent`),
  KEY `reports_monthly_index` (`monthly`),
  KEY `reports_monthly_email_sent_index` (`monthly_email_sent`),
  CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `route_groups`
--

DROP TABLE IF EXISTS `route_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `route_groups` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `open` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `route_groups_user_id_index` (`user_id`),
  CONSTRAINT `route_groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `routes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `group_id` int unsigned DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `coordinates` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `polyline` linestring DEFAULT NULL,
  `color` varchar(7) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `routes_user_id_foreign` (`user_id`),
  KEY `routes_active_index` (`active`),
  KEY `routes_group_id_index` (`group_id`),
  CONSTRAINT `routes_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `route_groups` (`id`) ON DELETE SET NULL,
  CONSTRAINT `routes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedules` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `subject_id` bigint unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `parameters` text COLLATE utf8mb3_unicode_ci,
  `schedule_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_run_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `schedules_subject_type_subject_id_index` (`subject_type`,`subject_id`),
  KEY `schedules_user_id_foreign` (`user_id`),
  KEY `schedules_schedule_at_index` (`schedule_at`),
  CONSTRAINT `schedules_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `send_queue`
--

DROP TABLE IF EXISTS `send_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `send_queue` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `type` varchar(32) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sender` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb3_unicode_ci,
  `data_type` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `channels` text COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `send_queue_user_id_index` (`user_id`),
  CONSTRAINT `send_queue_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28867 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sensor_group_sensors`
--

DROP TABLE IF EXISTS `sensor_group_sensors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sensor_group_sensors` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int unsigned NOT NULL,
  `icon_id` int unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `add_to_history` tinyint(1) NOT NULL DEFAULT '0',
  `add_to_graph` tinyint(1) DEFAULT NULL,
  `on_value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `off_value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `shown_value_by` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `fuel_tank_name` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `full_tank` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `full_tank_value` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `min_value` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `max_value` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `formula` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `odometer_value_by` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `odometer_value` double(8,2) unsigned DEFAULT NULL,
  `odometer_value_unit` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'km',
  `value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT '-',
  `value_formula` int NOT NULL DEFAULT '0',
  `show_in_popup` tinyint(1) NOT NULL DEFAULT '0',
  `unit_of_measurement` varchar(32) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `on_tag_value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `off_tag_value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `on_type` tinyint DEFAULT NULL,
  `off_type` tinyint DEFAULT NULL,
  `calibrations` mediumtext COLLATE utf8mb3_unicode_ci,
  `skip_calibration` tinyint(1) DEFAULT NULL,
  `skip_empty` tinyint(1) DEFAULT NULL,
  `decbin` tinyint(1) DEFAULT NULL,
  `hexbin` tinyint(1) DEFAULT NULL,
  `bitcut` text COLLATE utf8mb3_unicode_ci,
  `ascii` tinyint(1) DEFAULT NULL,
  `mappings` text COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `sensor_group_sensors_group_id_index` (`group_id`),
  KEY `sensor_group_sensors_type_index` (`type`),
  KEY `sensor_group_sensors_tag_name_index` (`tag_name`),
  KEY `sensor_group_sensors_add_to_history_index` (`add_to_history`),
  KEY `sensor_group_sensors_show_in_popup_index` (`show_in_popup`),
  KEY `sensor_group_sensors_icon_id_index` (`icon_id`),
  CONSTRAINT `sensor_group_sensors_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `sensor_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sensor_group_sensors_icon_id_foreign` FOREIGN KEY (`icon_id`) REFERENCES `sensor_icons` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sensor_groups`
--

DROP TABLE IF EXISTS `sensor_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sensor_groups` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `count` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sensor_groups_title_index` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sensor_icons`
--

DROP TABLE IF EXISTS `sensor_icons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sensor_icons` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `order` tinyint unsigned DEFAULT NULL,
  `width` double(8,2) DEFAULT NULL,
  `height` double(8,2) DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sensor_icons_user_id_foreign` (`user_id`),
  CONSTRAINT `sensor_icons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sent_commands`
--

DROP TABLE IF EXISTS `sent_commands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sent_commands` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `template_id` int unsigned DEFAULT NULL,
  `device_imei` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `actor_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `actor_id` bigint unsigned NOT NULL,
  `connection` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `command` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `parameters` text COLLATE utf8mb3_unicode_ci,
  `response` text COLLATE utf8mb3_unicode_ci,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sent_commands_actor_type_actor_id_index` (`actor_type`,`actor_id`),
  KEY `sent_commands_user_id_index` (`user_id`),
  KEY `sent_commands_device_imei_index` (`device_imei`),
  CONSTRAINT `sent_commands_device_imei_foreign` FOREIGN KEY (`device_imei`) REFERENCES `devices` (`imei`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sent_commands_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sharing`
--

DROP TABLE IF EXISTS `sharing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sharing` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `hash` varchar(32) COLLATE utf8mb3_unicode_ci NOT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delete_after_expiration` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sharing_user_id_index` (`user_id`),
  KEY `sharing_hash_index` (`hash`),
  CONSTRAINT `sharing_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sharing_device_pivot`
--

DROP TABLE IF EXISTS `sharing_device_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sharing_device_pivot` (
  `sharing_id` int unsigned NOT NULL,
  `device_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  KEY `sharing_device_pivot_sharing_id_index` (`sharing_id`),
  KEY `sharing_device_pivot_device_id_index` (`device_id`),
  KEY `sharing_device_pivot_user_id_index` (`user_id`),
  CONSTRAINT `sharing_device_pivot_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sharing_device_pivot_sharing_id_foreign` FOREIGN KEY (`sharing_id`) REFERENCES `sharing` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sharing_device_pivot_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sms_events_queue`
--

DROP TABLE IF EXISTS `sms_events_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sms_events_queue` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `phone` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sms_events_queue_user_id_index` (`user_id`),
  KEY `created_at` (`created_at`),
  CONSTRAINT `sms_events_queue_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sms_templates`
--

DROP TABLE IF EXISTS `sms_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sms_templates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sms_templates_user_id_index` (`user_id`),
  CONSTRAINT `sms_templates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `gateway` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `gateway_id` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `order_id` int unsigned DEFAULT NULL,
  `expiration_date` date NOT NULL DEFAULT '0000-00-00',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_user_id_foreign` (`user_id`),
  KEY `subscriptions_order_id_foreign` (`order_id`),
  CONSTRAINT `subscriptions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
  CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `task_sets`
--

DROP TABLE IF EXISTS `task_sets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `task_sets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `task_sets_user_id_index` (`user_id`),
  CONSTRAINT `task_sets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `task_status`
--

DROP TABLE IF EXISTS `task_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `task_status` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `task_id` int unsigned NOT NULL,
  `status` int NOT NULL,
  `comment` longtext COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `task_status_task_id_foreign` (`task_id`),
  CONSTRAINT `task_status_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tasks` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `task_set_id` bigint unsigned DEFAULT NULL,
  `title` text COLLATE utf8mb3_unicode_ci,
  `comment` longtext COLLATE utf8mb3_unicode_ci,
  `priority` tinyint NOT NULL DEFAULT '2',
  `status` int NOT NULL DEFAULT '1',
  `invoice_number` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `pickup_address` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `pickup_address_lat` double NOT NULL,
  `pickup_address_lng` double NOT NULL,
  `pickup_time_from` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pickup_time_to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delivery_address` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `delivery_address_lat` double NOT NULL,
  `delivery_address_lng` double NOT NULL,
  `delivery_time_from` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delivery_time_to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_user_id_foreign` (`user_id`),
  KEY `tasks_device_id_foreign` (`device_id`),
  KEY `tasks_task_set_id_foreign` (`task_set_id`),
  CONSTRAINT `tasks_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tasks_task_set_id_foreign` FOREIGN KEY (`task_set_id`) REFERENCES `task_sets` (`id`) ON DELETE SET NULL,
  CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `timezones`
--

DROP TABLE IF EXISTS `timezones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timezones` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `order` double(8,2) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `zone` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `prefix` varchar(5) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `time` varchar(5) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `timezones_order_index` (`order`)
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `timezones_dst`
--

DROP TABLE IF EXISTS `timezones_dst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timezones_dst` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `from_period` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `from_time` varchar(5) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `to_period` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `to_time` varchar(5) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `traccar_devices`
--

DROP TABLE IF EXISTS `traccar_devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `traccar_devices` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `uniqueId` varchar(255) DEFAULT NULL,
  `latestPosition_id` bigint DEFAULT NULL,
  `lastValidLatitude` double DEFAULT NULL,
  `lastValidLongitude` double DEFAULT NULL,
  `other` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `speed` decimal(8,2) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `ack_time` datetime DEFAULT NULL,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `power` double DEFAULT NULL,
  `address` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `protocol` varchar(20) DEFAULT NULL,
  `latest_positions` varchar(500) DEFAULT NULL,
  `moved_at` datetime DEFAULT NULL,
  `stoped_at` datetime DEFAULT NULL,
  `move_begin_at` datetime DEFAULT NULL,
  `stop_begin_at` datetime DEFAULT NULL,
  `parked_end_at` datetime DEFAULT NULL,
  `engine_on_at` datetime DEFAULT NULL,
  `engine_off_at` datetime DEFAULT NULL,
  `engine_changed_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `database_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniqueId` (`uniqueId`),
  KEY `time` (`time`),
  KEY `FK5CF8ACDD7C6208C3` (`latestPosition_id`),
  KEY `server_time` (`server_time`),
  KEY `ack_time` (`ack_time`),
  KEY `devices_updated_at_index` (`updated_at`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tracker_ports`
--

DROP TABLE IF EXISTS `tracker_ports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tracker_ports` (
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `port` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `extra` text COLLATE utf8mb3_unicode_ci NOT NULL,
  UNIQUE KEY `tracker_ports_port_unique` (`port`),
  UNIQUE KEY `tracker_ports_name_unique` (`name`),
  KEY `tracker_ports_active_index` (`active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `unregistered_devices_log`
--

DROP TABLE IF EXISTS `unregistered_devices_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `unregistered_devices_log` (
  `imei` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `port` int DEFAULT NULL,
  `ip` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `times` int unsigned NOT NULL DEFAULT '1',
  UNIQUE KEY `unregistered_devices_log_imei_unique` (`imei`),
  KEY `unregistered_devices_log_date_index` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_database_pivot`
--

DROP TABLE IF EXISTS `user_database_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_database_pivot` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `database_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_database_pivot_user_id_index` (`user_id`),
  KEY `user_database_pivot_database_id_index` (`database_id`),
  CONSTRAINT `user_database_pivot_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_device_pivot`
--

DROP TABLE IF EXISTS `user_device_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_device_pivot` (
  `user_id` int unsigned NOT NULL,
  `device_id` int unsigned NOT NULL,
  `group_id` int unsigned DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  KEY `user_device_pivot_user_id_index` (`user_id`),
  KEY `user_device_pivot_device_id_index` (`device_id`),
  KEY `user_device_pivot_group_id_index` (`group_id`),
  KEY `user_device_pivot_user_id_active_index` (`user_id`,`active`),
  KEY `user_device_pivot_user_id_group_id_index` (`user_id`,`group_id`),
  KEY `user_device_pivot_device_id_group_id_index` (`device_id`,`group_id`),
  KEY `user_device_pivot_user_id_device_id_index` (`user_id`,`device_id`),
  KEY `user_device_pivot_user_id_device_id_group_id_index` (`user_id`,`device_id`,`group_id`),
  KEY `user_device_pivot_user_id_device_id_group_id_active_index` (`user_id`,`device_id`,`group_id`,`active`),
  CONSTRAINT `user_device_pivot_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_device_pivot_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_driver_devices`
--

DROP TABLE IF EXISTS `user_driver_devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_driver_devices` (
  `device_id` int unsigned NOT NULL,
  `driver_id` int unsigned NOT NULL,
  KEY `user_driver_devices_device_id_index` (`device_id`),
  KEY `user_driver_devices_driver_id_index` (`driver_id`),
  CONSTRAINT `user_driver_devices_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_driver_devices_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `user_drivers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_driver_position_pivot`
--

DROP TABLE IF EXISTS `user_driver_position_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_driver_position_pivot` (
  `device_id` int unsigned DEFAULT NULL,
  `driver_id` int unsigned DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  KEY `user_driver_position_pivot_device_id_index` (`device_id`),
  KEY `user_driver_position_pivot_driver_id_index` (`driver_id`),
  CONSTRAINT `user_driver_position_pivot_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_driver_position_pivot_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `user_drivers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_drivers`
--

DROP TABLE IF EXISTS `user_drivers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_drivers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `device_id` int unsigned DEFAULT NULL,
  `device_port` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `rfid` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_drivers_user_id_index` (`user_id`),
  KEY `user_drivers_device_id_index` (`device_id`),
  CONSTRAINT `user_drivers_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE SET NULL,
  CONSTRAINT `user_drivers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_forward`
--

DROP TABLE IF EXISTS `user_forward`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_forward` (
  `user_id` int unsigned NOT NULL,
  `forward_id` int unsigned NOT NULL,
  KEY `user_forward_user_id_index` (`user_id`),
  KEY `user_forward_forward_id_index` (`forward_id`),
  CONSTRAINT `user_forward_forward_id_foreign` FOREIGN KEY (`forward_id`) REFERENCES `forwards` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_forward_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_login_methods`
--

DROP TABLE IF EXISTS `user_login_methods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_login_methods` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_login_methods_type_user_id_unique` (`type`,`user_id`),
  KEY `user_login_methods_user_id_index` (`user_id`),
  CONSTRAINT `user_login_methods_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_map_icons`
--

DROP TABLE IF EXISTS `user_map_icons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_map_icons` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `group_id` int unsigned DEFAULT NULL,
  `map_icon_id` int unsigned NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `coordinates` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_map_icons_user_id_foreign` (`user_id`),
  KEY `user_map_icons_map_icon_id_foreign` (`map_icon_id`),
  KEY `user_map_icons_active_index` (`active`),
  KEY `user_map_icons_group_id_index` (`group_id`),
  CONSTRAINT `user_map_icons_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `poi_groups` (`id`) ON DELETE SET NULL,
  CONSTRAINT `user_map_icons_map_icon_id_foreign` FOREIGN KEY (`map_icon_id`) REFERENCES `map_icons` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_map_icons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_permissions`
--

DROP TABLE IF EXISTS `user_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_permissions` (
  `user_id` int unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '0',
  `edit` tinyint(1) NOT NULL DEFAULT '0',
  `remove` tinyint(1) NOT NULL DEFAULT '0',
  KEY `user_permissions_user_id_index` (`user_id`),
  CONSTRAINT `user_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_report_type_pivot`
--

DROP TABLE IF EXISTS `user_report_type_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_report_type_pivot` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `report_type_id` smallint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_report_type_pivot_user_id_index` (`user_id`),
  KEY `user_report_type_pivot_report_type_id_index` (`report_type_id`),
  CONSTRAINT `user_report_type_pivot_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_secondary_credentials`
--

DROP TABLE IF EXISTS `user_secondary_credentials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_secondary_credentials` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `api_hash` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_secondary_credentials_email_unique` (`email`),
  UNIQUE KEY `user_secondary_credentials_api_hash_unique` (`api_hash`),
  KEY `user_secondary_credentials_user_id_index` (`user_id`),
  CONSTRAINT `user_secondary_credentials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `group_id` int unsigned DEFAULT NULL,
  `manager_id` int unsigned DEFAULT NULL,
  `billing_plan_id` int unsigned DEFAULT NULL,
  `map_id` int unsigned DEFAULT NULL,
  `devices_limit` int unsigned DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `remember_token` varchar(64) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `subscription_expiration` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loged_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `api_hash` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `api_hash_expire` datetime DEFAULT NULL,
  `available_maps` text COLLATE utf8mb3_unicode_ci,
  `sms_gateway_app_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sms_gateway_params` text COLLATE utf8mb3_unicode_ci,
  `ungrouped_open` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `week_start_day` tinyint NOT NULL DEFAULT '1',
  `top_toolbar_open` tinyint NOT NULL DEFAULT '1',
  `map_controls` varchar(500) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '{}',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unit_of_altitude` char(2) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'mt',
  `lang` char(2) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'en',
  `unit_of_distance` char(2) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'km',
  `unit_of_capacity` char(2) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'lt',
  `duration_format` varchar(32) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `timezone_id` int unsigned NOT NULL DEFAULT '57',
  `sms_gateway` tinyint(1) NOT NULL DEFAULT '0',
  `sms_gateway_url` varchar(500) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb3_unicode_ci,
  `login_periods` text COLLATE utf8mb3_unicode_ci,
  `email_verified_at` datetime DEFAULT NULL,
  `client_id` int unsigned DEFAULT NULL,
  `company_id` int unsigned DEFAULT NULL,
  `login_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `only_one_session` tinyint(1) NOT NULL DEFAULT '0',
  `untouchable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_hash_unique` (`api_hash`),
  UNIQUE KEY `users_login_token_unique` (`login_token`),
  KEY `users_active_index` (`active`),
  KEY `users_group_id_index` (`group_id`),
  KEY `users_manager_id_index` (`manager_id`),
  KEY `users_billing_plan_id_index` (`billing_plan_id`),
  KEY `users_devices_limit_index` (`devices_limit`),
  KEY `users_loged_at_index` (`loged_at`),
  KEY `users_timezone_id_index` (`timezone_id`),
  KEY `users_sms_gateway_index` (`sms_gateway`),
  KEY `users_client_id_index` (`client_id`),
  KEY `users_company_id_index` (`company_id`),
  CONSTRAINT `users_billing_plan_id_foreign` FOREIGN KEY (`billing_plan_id`) REFERENCES `billing_plans` (`id`) ON DELETE SET NULL,
  CONSTRAINT `users_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE SET NULL,
  CONSTRAINT `users_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE SET NULL,
  CONSTRAINT `users_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users_dst`
--

DROP TABLE IF EXISTS `users_dst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_dst` (
  `user_id` int unsigned NOT NULL,
  `country_id` int unsigned DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `date_from` varchar(11) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `date_to` varchar(11) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `month_from` varchar(15) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `week_pos_from` varchar(15) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `week_day_from` varchar(15) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `time_from` varchar(5) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `month_to` varchar(15) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `week_pos_to` varchar(15) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `week_day_to` varchar(15) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `time_to` varchar(5) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`,`type`),
  KEY `users_dst_user_id_index` (`user_id`),
  KEY `users_dst_country_id_index` (`country_id`),
  KEY `users_dst_type_index` (`type`),
  CONSTRAINT `users_dst_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-20  8:15:58
