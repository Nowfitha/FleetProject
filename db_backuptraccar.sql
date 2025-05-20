-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: gpswox_traccar
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
-- Table structure for table `positions_1`
--

DROP TABLE IF EXISTS `positions_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_1` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_1_speed_index` (`speed`),
  KEY `positions_1_time_index` (`time`),
  KEY `positions_1_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=136974 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_10`
--

DROP TABLE IF EXISTS `positions_10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_10` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_10_speed_index` (`speed`),
  KEY `positions_10_time_index` (`time`),
  KEY `positions_10_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=50178 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_11`
--

DROP TABLE IF EXISTS `positions_11`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_11` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_11_speed_index` (`speed`),
  KEY `positions_11_time_index` (`time`),
  KEY `positions_11_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=22602 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_12`
--

DROP TABLE IF EXISTS `positions_12`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_12` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_12_speed_index` (`speed`),
  KEY `positions_12_time_index` (`time`),
  KEY `positions_12_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=85152 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_13`
--

DROP TABLE IF EXISTS `positions_13`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_13` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_13_speed_index` (`speed`),
  KEY `positions_13_time_index` (`time`),
  KEY `positions_13_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=28191 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_14`
--

DROP TABLE IF EXISTS `positions_14`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_14` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_14_speed_index` (`speed`),
  KEY `positions_14_time_index` (`time`),
  KEY `positions_14_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=50554 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_15`
--

DROP TABLE IF EXISTS `positions_15`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_15` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_15_speed_index` (`speed`),
  KEY `positions_15_time_index` (`time`),
  KEY `positions_15_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=18959 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_16`
--

DROP TABLE IF EXISTS `positions_16`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_16` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_16_speed_index` (`speed`),
  KEY `positions_16_time_index` (`time`),
  KEY `positions_16_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=7397 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_17`
--

DROP TABLE IF EXISTS `positions_17`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_17` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_17_speed_index` (`speed`),
  KEY `positions_17_time_index` (`time`),
  KEY `positions_17_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=4738 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_18`
--

DROP TABLE IF EXISTS `positions_18`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_18` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_18_speed_index` (`speed`),
  KEY `positions_18_time_index` (`time`),
  KEY `positions_18_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=10219 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_19`
--

DROP TABLE IF EXISTS `positions_19`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_19` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_19_speed_index` (`speed`),
  KEY `positions_19_time_index` (`time`),
  KEY `positions_19_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=34473 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_2`
--

DROP TABLE IF EXISTS `positions_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_2` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_2_speed_index` (`speed`),
  KEY `positions_2_time_index` (`time`),
  KEY `positions_2_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=12242 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_20`
--

DROP TABLE IF EXISTS `positions_20`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_20` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_20_speed_index` (`speed`),
  KEY `positions_20_time_index` (`time`),
  KEY `positions_20_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=83757 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_21`
--

DROP TABLE IF EXISTS `positions_21`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_21` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_21_speed_index` (`speed`),
  KEY `positions_21_time_index` (`time`),
  KEY `positions_21_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=11187 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_22`
--

DROP TABLE IF EXISTS `positions_22`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_22` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_22_speed_index` (`speed`),
  KEY `positions_22_time_index` (`time`),
  KEY `positions_22_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=476 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_23`
--

DROP TABLE IF EXISTS `positions_23`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_23` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_23_speed_index` (`speed`),
  KEY `positions_23_time_index` (`time`),
  KEY `positions_23_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=31464 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_3`
--

DROP TABLE IF EXISTS `positions_3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_3` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_3_speed_index` (`speed`),
  KEY `positions_3_time_index` (`time`),
  KEY `positions_3_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=36861 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_4`
--

DROP TABLE IF EXISTS `positions_4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_4` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_4_speed_index` (`speed`),
  KEY `positions_4_time_index` (`time`),
  KEY `positions_4_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=58262 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_5`
--

DROP TABLE IF EXISTS `positions_5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_5` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_5_speed_index` (`speed`),
  KEY `positions_5_time_index` (`time`),
  KEY `positions_5_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=67472 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_6`
--

DROP TABLE IF EXISTS `positions_6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_6` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_6_speed_index` (`speed`),
  KEY `positions_6_time_index` (`time`),
  KEY `positions_6_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=40270 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_7`
--

DROP TABLE IF EXISTS `positions_7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_7` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_7_speed_index` (`speed`),
  KEY `positions_7_time_index` (`time`),
  KEY `positions_7_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=21735 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_8`
--

DROP TABLE IF EXISTS `positions_8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_8` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_8_speed_index` (`speed`),
  KEY `positions_8_time_index` (`time`),
  KEY `positions_8_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=11816 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions_9`
--

DROP TABLE IF EXISTS `positions_9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `positions_9` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `altitude` double DEFAULT NULL,
  `course` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `other` text COLLATE utf8mb3_unicode_ci,
  `speed` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device_time` datetime DEFAULT NULL,
  `server_time` datetime DEFAULT NULL,
  `sensors_values` text COLLATE utf8mb3_unicode_ci,
  `valid` tinyint DEFAULT NULL,
  `distance` double DEFAULT NULL,
  `protocol` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_9_speed_index` (`speed`),
  KEY `positions_9_time_index` (`time`),
  KEY `positions_9_server_time_index` (`server_time`)
) ENGINE=InnoDB AUTO_INCREMENT=3027 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-20  8:13:46
