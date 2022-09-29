-- MySQL dump 10.13  Distrib 5.7.33, for Win64 (x86_64)
--
-- Host: localhost    Database: schoolmanagement
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `absences`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `absences` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `motif` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `justificatif` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seance_matiere_id` bigint unsigned NOT NULL,
  `eleve_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nbre_heure_absence` int DEFAULT NULL,
  `absence_state` tinyint(1) NOT NULL DEFAULT '0',
  `periode_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `absences_seance_matiere_id_foreign` (`seance_matiere_id`),
  KEY `absences_eleve_id_foreign` (`eleve_id`),
  KEY `absences_periode_id_foreign` (`periode_id`),
  CONSTRAINT `absences_eleve_id_foreign` FOREIGN KEY (`eleve_id`) REFERENCES `eleves` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `absences_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periodes` (`id`),
  CONSTRAINT `absences_seance_matiere_id_foreign` FOREIGN KEY (`seance_matiere_id`) REFERENCES `seance_matieres` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absences`
--

LOCK TABLES `absences` WRITE;
/*!40000 ALTER TABLE `absences` DISABLE KEYS */;
INSERT INTO `absences` VALUES (1,NULL,NULL,1,5,NULL,NULL,2,0,1);
INSERT INTO `absences` VALUES (2,NULL,NULL,2,5,NULL,NULL,4,0,1);
INSERT INTO `absences` VALUES (3,NULL,NULL,6,4,NULL,NULL,2,0,1);
INSERT INTO `absences` VALUES (4,NULL,NULL,3,4,NULL,NULL,2,0,1);
INSERT INTO `absences` VALUES (5,NULL,NULL,19,5,NULL,NULL,2,1,1);
INSERT INTO `absences` VALUES (6,NULL,NULL,20,5,NULL,NULL,2,1,1);
INSERT INTO `absences` VALUES (7,NULL,NULL,15,2,NULL,NULL,2,0,1);
INSERT INTO `absences` VALUES (8,NULL,NULL,15,2,NULL,NULL,4,1,1);
INSERT INTO `absences` VALUES (9,NULL,NULL,5,3,NULL,NULL,2,0,1);
INSERT INTO `absences` VALUES (10,NULL,NULL,6,3,NULL,NULL,2,0,1);
INSERT INTO `absences` VALUES (11,NULL,NULL,1,6,NULL,NULL,2,0,1);
INSERT INTO `absences` VALUES (12,NULL,NULL,2,6,NULL,NULL,2,0,1);
INSERT INTO `absences` VALUES (13,NULL,NULL,19,6,NULL,NULL,2,0,1);
INSERT INTO `absences` VALUES (14,NULL,NULL,20,6,NULL,NULL,2,0,1);
INSERT INTO `absences` VALUES (15,NULL,NULL,25,5,NULL,NULL,2,0,2);
INSERT INTO `absences` VALUES (16,NULL,NULL,26,5,NULL,NULL,4,0,2);
INSERT INTO `absences` VALUES (17,NULL,NULL,30,4,NULL,NULL,2,0,2);
INSERT INTO `absences` VALUES (18,NULL,NULL,27,4,NULL,NULL,2,0,2);
INSERT INTO `absences` VALUES (19,NULL,NULL,43,5,NULL,NULL,2,1,2);
INSERT INTO `absences` VALUES (20,NULL,NULL,44,5,NULL,NULL,2,1,2);
INSERT INTO `absences` VALUES (21,NULL,NULL,39,2,NULL,NULL,2,0,2);
INSERT INTO `absences` VALUES (22,NULL,NULL,39,2,NULL,NULL,4,1,2);
INSERT INTO `absences` VALUES (23,NULL,NULL,29,3,NULL,NULL,2,0,2);
INSERT INTO `absences` VALUES (24,NULL,NULL,30,3,NULL,NULL,2,0,2);
INSERT INTO `absences` VALUES (25,NULL,NULL,25,6,NULL,NULL,2,0,2);
INSERT INTO `absences` VALUES (26,NULL,NULL,26,6,NULL,NULL,2,0,2);
INSERT INTO `absences` VALUES (27,NULL,NULL,43,6,NULL,NULL,2,0,2);
INSERT INTO `absences` VALUES (28,NULL,NULL,44,6,NULL,NULL,2,0,2);
INSERT INTO `absences` VALUES (29,NULL,NULL,49,5,NULL,NULL,2,0,3);
INSERT INTO `absences` VALUES (30,NULL,NULL,50,5,NULL,NULL,4,0,3);
INSERT INTO `absences` VALUES (31,NULL,NULL,54,4,NULL,NULL,2,0,3);
INSERT INTO `absences` VALUES (32,NULL,NULL,51,4,NULL,NULL,2,0,3);
INSERT INTO `absences` VALUES (33,NULL,NULL,67,5,NULL,NULL,2,1,3);
INSERT INTO `absences` VALUES (34,NULL,NULL,48,5,NULL,NULL,2,1,3);
INSERT INTO `absences` VALUES (35,NULL,NULL,63,2,NULL,NULL,2,0,3);
INSERT INTO `absences` VALUES (36,NULL,NULL,63,2,NULL,NULL,4,1,3);
INSERT INTO `absences` VALUES (37,NULL,NULL,53,3,NULL,NULL,2,0,3);
INSERT INTO `absences` VALUES (38,NULL,NULL,54,3,NULL,NULL,2,0,3);
INSERT INTO `absences` VALUES (39,NULL,NULL,49,6,NULL,NULL,2,0,3);
INSERT INTO `absences` VALUES (40,NULL,NULL,50,6,NULL,NULL,2,0,3);
INSERT INTO `absences` VALUES (41,NULL,NULL,67,6,NULL,NULL,2,0,3);
INSERT INTO `absences` VALUES (42,NULL,NULL,68,6,NULL,NULL,2,0,3);
/*!40000 ALTER TABLE `absences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administrations`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fonction` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `administrations_user_id_foreign` (`user_id`),
  CONSTRAINT `administrations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrations`
--

LOCK TABLES `administrations` WRITE;
/*!40000 ALTER TABLE `administrations` DISABLE KEYS */;
INSERT INTO `administrations` VALUES (1,'1',9,NULL,NULL);
/*!40000 ALTER TABLE `administrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `annee_scolaires`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `annee_scolaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `libelle_as` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `annee_scolaires`
--

LOCK TABLES `annee_scolaires` WRITE;
/*!40000 ALTER TABLE `annee_scolaires` DISABLE KEYS */;
INSERT INTO `annee_scolaires` VALUES (1,'2022-2023',NULL,NULL);
/*!40000 ALTER TABLE `annee_scolaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avoir_profils`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avoir_profils` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `profil_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `avoir_profils_profil_id_foreign` (`profil_id`),
  KEY `avoir_profils_user_id_foreign` (`user_id`),
  CONSTRAINT `avoir_profils_profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `avoir_profils_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avoir_profils`
--

LOCK TABLES `avoir_profils` WRITE;
/*!40000 ALTER TABLE `avoir_profils` DISABLE KEYS */;
INSERT INTO `avoir_profils` VALUES (1,1,1,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (2,2,2,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (3,3,3,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (4,4,4,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (5,1,6,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (6,2,7,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (7,3,10,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (9,4,8,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (10,5,9,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (11,4,11,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (12,3,12,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (13,2,17,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (14,3,17,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (15,4,19,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (16,4,20,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (17,4,21,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (18,4,22,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (19,4,23,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (20,3,24,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (21,3,25,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (22,2,24,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (23,1,25,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (24,2,26,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (25,2,27,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (26,1,28,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (27,2,29,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (28,2,30,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (29,8,31,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (30,7,32,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (31,9,33,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (32,2,35,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (33,2,36,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (34,4,37,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (35,4,38,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (36,4,39,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (37,4,40,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (38,4,41,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (39,4,42,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (40,4,43,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (41,4,44,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (42,4,45,NULL,NULL);
INSERT INTO `avoir_profils` VALUES (43,4,46,NULL,NULL);
/*!40000 ALTER TABLE `avoir_profils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classe_primaires`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classe_primaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `annee` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instituteur_id` bigint unsigned NOT NULL,
  `classe_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `classe_primaires_instituteur_id_foreign` (`instituteur_id`),
  KEY `classe_primaires_classe_id_foreign` (`classe_id`),
  CONSTRAINT `classe_primaires_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `classe_primaires_instituteur_id_foreign` FOREIGN KEY (`instituteur_id`) REFERENCES `instituteurs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classe_primaires`
--

LOCK TABLES `classe_primaires` WRITE;
/*!40000 ALTER TABLE `classe_primaires` DISABLE KEYS */;
INSERT INTO `classe_primaires` VALUES (7,'2022',1,14,NULL,NULL);
INSERT INTO `classe_primaires` VALUES (8,'2022',2,18,NULL,NULL);
INSERT INTO `classe_primaires` VALUES (9,'2022',3,19,NULL,NULL);
INSERT INTO `classe_primaires` VALUES (10,'2022',5,26,NULL,NULL);
INSERT INTO `classe_primaires` VALUES (11,'2022',6,37,NULL,NULL);
/*!40000 ALTER TABLE `classe_primaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classe_secondaires`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classe_secondaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `classe_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `classe_secondaires_classe_id_foreign` (`classe_id`),
  CONSTRAINT `classe_secondaires_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classe_secondaires`
--

LOCK TABLES `classe_secondaires` WRITE;
/*!40000 ALTER TABLE `classe_secondaires` DISABLE KEYS */;
INSERT INTO `classe_secondaires` VALUES (15,20,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (16,21,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (17,22,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (18,23,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (19,24,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (20,25,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (21,38,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (22,39,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (23,40,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (24,41,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (25,42,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (26,43,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (27,44,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (28,45,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (29,46,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (30,47,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (31,48,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (32,49,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (33,50,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (34,51,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (35,52,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (36,53,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (37,54,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (38,55,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (39,56,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (40,57,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (41,59,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (42,60,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (43,61,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (44,62,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (45,63,NULL,NULL);
INSERT INTO `classe_secondaires` VALUES (46,64,NULL,NULL);
/*!40000 ALTER TABLE `classe_secondaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `libelle_classe` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `classes_libelle_classe_unique` (`libelle_classe`),
  KEY `classes_niveau_id_foreign` (`niveau_id`),
  CONSTRAINT `classes_niveau_id_foreign` FOREIGN KEY (`niveau_id`) REFERENCES `niveaux` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (14,'CP1A',1,NULL,NULL);
INSERT INTO `classes` VALUES (15,'CP2B',2,NULL,NULL);
INSERT INTO `classes` VALUES (16,'CE1B',3,NULL,NULL);
INSERT INTO `classes` VALUES (17,'CE2A',4,NULL,NULL);
INSERT INTO `classes` VALUES (18,'CM1A',5,NULL,NULL);
INSERT INTO `classes` VALUES (19,'CM2B',6,NULL,NULL);
INSERT INTO `classes` VALUES (20,'6ème1',7,NULL,NULL);
INSERT INTO `classes` VALUES (21,'5ème2',8,NULL,NULL);
INSERT INTO `classes` VALUES (22,'4ème1',9,NULL,NULL);
INSERT INTO `classes` VALUES (23,'2nd C1',10,NULL,NULL);
INSERT INTO `classes` VALUES (24,'1ere D2',11,NULL,NULL);
INSERT INTO `classes` VALUES (25,'TLE D2',12,NULL,NULL);
INSERT INTO `classes` VALUES (26,'CP1 B',1,NULL,NULL);
INSERT INTO `classes` VALUES (27,'CP1 C',1,NULL,NULL);
INSERT INTO `classes` VALUES (28,'CP2 A',2,NULL,NULL);
INSERT INTO `classes` VALUES (29,'CP2 C',2,NULL,NULL);
INSERT INTO `classes` VALUES (30,'CE1 A',3,NULL,NULL);
INSERT INTO `classes` VALUES (31,'CE1 C',3,NULL,NULL);
INSERT INTO `classes` VALUES (32,'CE2 B',4,NULL,NULL);
INSERT INTO `classes` VALUES (33,'CE2 C',4,NULL,NULL);
INSERT INTO `classes` VALUES (34,'CM1 B',5,NULL,NULL);
INSERT INTO `classes` VALUES (35,'CM1 C',5,NULL,NULL);
INSERT INTO `classes` VALUES (36,'CM2 A',6,NULL,NULL);
INSERT INTO `classes` VALUES (37,'CM2 C',6,NULL,NULL);
INSERT INTO `classes` VALUES (38,'6ème2',7,NULL,NULL);
INSERT INTO `classes` VALUES (39,'6ème3',7,NULL,NULL);
INSERT INTO `classes` VALUES (40,'5ème1',8,NULL,NULL);
INSERT INTO `classes` VALUES (41,'5ème3',8,NULL,NULL);
INSERT INTO `classes` VALUES (42,'4ème2',9,NULL,NULL);
INSERT INTO `classes` VALUES (43,'4ème3',9,NULL,NULL);
INSERT INTO `classes` VALUES (44,'2nd C2',10,NULL,NULL);
INSERT INTO `classes` VALUES (45,'2nd C3',10,NULL,NULL);
INSERT INTO `classes` VALUES (46,'2nd A1',10,NULL,NULL);
INSERT INTO `classes` VALUES (47,'2nd A2',10,NULL,NULL);
INSERT INTO `classes` VALUES (48,'2nd A3',10,NULL,NULL);
INSERT INTO `classes` VALUES (49,'1ere D1',11,NULL,NULL);
INSERT INTO `classes` VALUES (50,'1ere D3',11,NULL,NULL);
INSERT INTO `classes` VALUES (51,'1ere C1',11,NULL,NULL);
INSERT INTO `classes` VALUES (52,'1ere C2',11,NULL,NULL);
INSERT INTO `classes` VALUES (53,'1ere C3',11,NULL,NULL);
INSERT INTO `classes` VALUES (54,'TLE D1',12,NULL,NULL);
INSERT INTO `classes` VALUES (55,'TLE D3',12,NULL,NULL);
INSERT INTO `classes` VALUES (56,'TLE A1',12,NULL,NULL);
INSERT INTO `classes` VALUES (57,'TLE A2',12,NULL,NULL);
INSERT INTO `classes` VALUES (58,'TLE A3',12,NULL,NULL);
INSERT INTO `classes` VALUES (59,'TLE C1',12,NULL,NULL);
INSERT INTO `classes` VALUES (60,'TLE C2',12,NULL,NULL);
INSERT INTO `classes` VALUES (61,'TLE C3',12,NULL,NULL);
INSERT INTO `classes` VALUES (62,'3EME 1',13,NULL,NULL);
INSERT INTO `classes` VALUES (63,'3EME 2',13,NULL,NULL);
INSERT INTO `classes` VALUES (64,'3EME 3',13,NULL,NULL);
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cycles`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cycles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `libelle_cycle` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cycles`
--

LOCK TABLES `cycles` WRITE;
/*!40000 ALTER TABLE `cycles` DISABLE KEYS */;
INSERT INTO `cycles` VALUES (1,'primaire',NULL,NULL);
INSERT INTO `cycles` VALUES (2,'secondaire premier cycle',NULL,NULL);
INSERT INTO `cycles` VALUES (3,'secondaire second cycle',NULL,NULL);
/*!40000 ALTER TABLE `cycles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demander_docs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demander_docs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type_document` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_demande` date NOT NULL,
  `demande_state` tinyint(1) NOT NULL,
  `administration_id` bigint unsigned NOT NULL,
  `parent_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demander_docs_administration_id_foreign` (`administration_id`),
  KEY `demander_docs_parent_id_foreign` (`parent_id`),
  CONSTRAINT `demander_docs_administration_id_foreign` FOREIGN KEY (`administration_id`) REFERENCES `administrations` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `demander_docs_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demander_docs`
--

LOCK TABLES `demander_docs` WRITE;
/*!40000 ALTER TABLE `demander_docs` DISABLE KEYS */;
/*!40000 ALTER TABLE `demander_docs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eleves`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eleves` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationnalite` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut_eleve` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eleves_matricule_unique` (`matricule`),
  KEY `eleves_user_id_foreign` (`user_id`),
  CONSTRAINT `eleves_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eleves`
--

LOCK TABLES `eleves` WRITE;
/*!40000 ALTER TABLE `eleves` DISABLE KEYS */;
INSERT INTO `eleves` VALUES (1,'Y2C','2022-08-18','Ferkessedougou','Russe','NAF',4,NULL,NULL);
INSERT INTO `eleves` VALUES (2,'E3H','2022-08-18','Yamoussoukro','Allemande','NAF',8,NULL,NULL);
INSERT INTO `eleves` VALUES (3,'CNQ','2022-08-18','Man','Russe','NAF',11,NULL,NULL);
INSERT INTO `eleves` VALUES (4,'DJZ','2022-08-30','Bonoua','Allemande','NAF',20,NULL,NULL);
INSERT INTO `eleves` VALUES (5,'W6B','2022-08-30','Yamoussoukro','Perouvienne','AF',21,NULL,NULL);
INSERT INTO `eleves` VALUES (6,'ENL','2022-08-30','Yamoussoukro','Perouvienne','AF',22,NULL,NULL);
INSERT INTO `eleves` VALUES (7,'XVS','2022-08-30','Bouake','Francaise','AF',23,NULL,NULL);
INSERT INTO `eleves` VALUES (8,'NAX','2022-08-30','Abidjan','Italienne','NAF',19,NULL,NULL);
INSERT INTO `eleves` VALUES (9,'3TW','2022-09-28','Man','Perouvienne','AF',37,NULL,NULL);
INSERT INTO `eleves` VALUES (10,'IRB','2022-09-28','Yamoussoukro','Gabonnaise','AF',38,NULL,NULL);
INSERT INTO `eleves` VALUES (11,'KEA','2022-09-28','odienne','Russe','AF',39,NULL,NULL);
INSERT INTO `eleves` VALUES (12,'W1T','2022-09-28','Bouake','Italienne','AF',40,NULL,NULL);
INSERT INTO `eleves` VALUES (13,'KIK','2022-09-28','Gagnoa','Ivoirienne','AF',41,NULL,NULL);
INSERT INTO `eleves` VALUES (14,'NQU','2022-09-28','Bouake','Perouvienne','NAF',42,NULL,NULL);
INSERT INTO `eleves` VALUES (15,'NFP','2022-09-28','Abidjan','Americaine','NAF',43,NULL,NULL);
INSERT INTO `eleves` VALUES (16,'BD8','2022-09-28','odienne','Malienne','AF',44,NULL,NULL);
INSERT INTO `eleves` VALUES (17,'QV0','2022-09-28','Yamoussoukro','Malienne','AF',45,NULL,NULL);
INSERT INTO `eleves` VALUES (18,'AC4','2022-09-28','odienne','Ivoirienne','NAF',46,NULL,NULL);
/*!40000 ALTER TABLE `eleves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enseignants`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enseignants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `enseignants_matricule_unique` (`matricule`),
  KEY `enseignants_user_id_foreign` (`user_id`),
  CONSTRAINT `enseignants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enseignants`
--

LOCK TABLES `enseignants` WRITE;
/*!40000 ALTER TABLE `enseignants` DISABLE KEYS */;
INSERT INTO `enseignants` VALUES (1,'OCA',2,NULL,NULL);
INSERT INTO `enseignants` VALUES (2,'RGT',7,NULL,NULL);
INSERT INTO `enseignants` VALUES (7,'00P',26,NULL,NULL);
INSERT INTO `enseignants` VALUES (8,'O9I',27,NULL,NULL);
INSERT INTO `enseignants` VALUES (9,'CMR',17,NULL,NULL);
INSERT INTO `enseignants` VALUES (10,'IBE',29,NULL,NULL);
INSERT INTO `enseignants` VALUES (11,'KBZ',30,NULL,NULL);
INSERT INTO `enseignants` VALUES (12,'P7P',35,NULL,NULL);
INSERT INTO `enseignants` VALUES (13,'U9G',36,NULL,NULL);
/*!40000 ALTER TABLE `enseignants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enseigners`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enseigners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `annee_enseigner` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enseignant_id` bigint unsigned NOT NULL,
  `classe_secondaire_id` bigint unsigned NOT NULL,
  `matiere_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `enseigners_enseignant_id_foreign` (`enseignant_id`),
  KEY `enseigners_classe_secondaire_id_foreign` (`classe_secondaire_id`),
  KEY `enseigners_matiere_id_foreign` (`matiere_id`),
  CONSTRAINT `enseigners_classe_secondaire_id_foreign` FOREIGN KEY (`classe_secondaire_id`) REFERENCES `classe_secondaires` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `enseigners_enseignant_id_foreign` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignants` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `enseigners_matiere_id_foreign` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enseigners`
--

LOCK TABLES `enseigners` WRITE;
/*!40000 ALTER TABLE `enseigners` DISABLE KEYS */;
INSERT INTO `enseigners` VALUES (1,'2022',1,20,1,NULL,NULL);
INSERT INTO `enseigners` VALUES (2,'2022',2,20,2,NULL,NULL);
INSERT INTO `enseigners` VALUES (3,'2022',2,19,10,NULL,NULL);
INSERT INTO `enseigners` VALUES (4,'2022',2,18,10,NULL,NULL);
INSERT INTO `enseigners` VALUES (5,'2022',2,15,2,NULL,NULL);
INSERT INTO `enseigners` VALUES (6,'2022',2,17,2,NULL,NULL);
INSERT INTO `enseigners` VALUES (7,'2022',2,16,10,NULL,NULL);
INSERT INTO `enseigners` VALUES (8,'2022',9,44,12,NULL,NULL);
INSERT INTO `enseigners` VALUES (9,'2022',8,41,16,NULL,NULL);
INSERT INTO `enseigners` VALUES (10,'2022',10,41,12,NULL,NULL);
INSERT INTO `enseigners` VALUES (11,'2022',11,41,18,NULL,NULL);
INSERT INTO `enseigners` VALUES (12,'2022',12,41,3,NULL,NULL);
INSERT INTO `enseigners` VALUES (13,'2022',12,20,3,NULL,NULL);
INSERT INTO `enseigners` VALUES (14,'2022',12,44,3,NULL,NULL);
INSERT INTO `enseigners` VALUES (15,'2022',12,15,3,NULL,NULL);
INSERT INTO `enseigners` VALUES (16,'2022',13,41,11,NULL,NULL);
INSERT INTO `enseigners` VALUES (17,'2022',13,20,11,NULL,NULL);
INSERT INTO `enseigners` VALUES (18,'2022',13,44,11,NULL,NULL);
INSERT INTO `enseigners` VALUES (19,'2022',13,15,11,NULL,NULL);
INSERT INTO `enseigners` VALUES (20,'2022',13,18,11,NULL,NULL);
INSERT INTO `enseigners` VALUES (21,'2022',13,16,11,NULL,NULL);
INSERT INTO `enseigners` VALUES (22,'2022',13,17,11,NULL,NULL);
INSERT INTO `enseigners` VALUES (23,'2022',13,19,11,NULL,NULL);
INSERT INTO `enseigners` VALUES (24,'2022',9,42,12,NULL,NULL);
INSERT INTO `enseigners` VALUES (25,'2022',9,15,12,NULL,NULL);
INSERT INTO `enseigners` VALUES (26,'2022',9,18,12,NULL,NULL);
INSERT INTO `enseigners` VALUES (27,'2022',9,16,12,NULL,NULL);
INSERT INTO `enseigners` VALUES (28,'2022',9,17,12,NULL,NULL);
INSERT INTO `enseigners` VALUES (29,'2022',9,19,12,NULL,NULL);
/*!40000 ALTER TABLE `enseigners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `est_enseigners`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `est_enseigners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jour` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annee` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heure_debut` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coeficient` int DEFAULT NULL,
  `nbr_heure_total` int DEFAULT NULL,
  `estEnseigner_state` tinyint(1) DEFAULT NULL,
  `matiere_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `niveau_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `est_enseigners_matiere_id_foreign` (`matiere_id`),
  KEY `est_enseigners_niveau_id_foreign` (`niveau_id`),
  CONSTRAINT `est_enseigners_matiere_id_foreign` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `est_enseigners_niveau_id_foreign` FOREIGN KEY (`niveau_id`) REFERENCES `niveaux` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `est_enseigners`
--

LOCK TABLES `est_enseigners` WRITE;
/*!40000 ALTER TABLE `est_enseigners` DISABLE KEYS */;
INSERT INTO `est_enseigners` VALUES (1,NULL,NULL,NULL,NULL,1,30,1,1,NULL,NULL,1);
INSERT INTO `est_enseigners` VALUES (2,NULL,NULL,NULL,NULL,1,30,1,1,NULL,NULL,2);
INSERT INTO `est_enseigners` VALUES (3,NULL,NULL,NULL,NULL,1,30,1,1,NULL,NULL,3);
INSERT INTO `est_enseigners` VALUES (4,NULL,NULL,NULL,NULL,1,30,1,1,NULL,NULL,4);
INSERT INTO `est_enseigners` VALUES (5,NULL,NULL,NULL,NULL,1,30,1,1,NULL,NULL,5);
INSERT INTO `est_enseigners` VALUES (6,NULL,NULL,NULL,NULL,1,30,1,1,NULL,NULL,6);
INSERT INTO `est_enseigners` VALUES (7,NULL,NULL,NULL,NULL,2,30,1,1,NULL,NULL,7);
INSERT INTO `est_enseigners` VALUES (8,NULL,NULL,NULL,NULL,2,30,1,1,NULL,NULL,8);
INSERT INTO `est_enseigners` VALUES (9,NULL,NULL,NULL,NULL,2,30,1,1,NULL,NULL,9);
INSERT INTO `est_enseigners` VALUES (10,NULL,NULL,NULL,NULL,3,30,1,1,NULL,NULL,10);
INSERT INTO `est_enseigners` VALUES (11,NULL,NULL,NULL,NULL,3,30,1,1,NULL,NULL,11);
INSERT INTO `est_enseigners` VALUES (12,NULL,NULL,NULL,NULL,4,30,1,1,NULL,NULL,12);
INSERT INTO `est_enseigners` VALUES (13,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,1);
INSERT INTO `est_enseigners` VALUES (14,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,2);
INSERT INTO `est_enseigners` VALUES (15,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,3);
INSERT INTO `est_enseigners` VALUES (16,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,4);
INSERT INTO `est_enseigners` VALUES (17,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,5);
INSERT INTO `est_enseigners` VALUES (18,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,6);
INSERT INTO `est_enseigners` VALUES (19,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,7);
INSERT INTO `est_enseigners` VALUES (20,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,8);
INSERT INTO `est_enseigners` VALUES (21,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,9);
INSERT INTO `est_enseigners` VALUES (22,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,10);
INSERT INTO `est_enseigners` VALUES (23,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,11);
INSERT INTO `est_enseigners` VALUES (24,NULL,NULL,NULL,NULL,1,30,1,2,NULL,NULL,12);
INSERT INTO `est_enseigners` VALUES (25,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,1);
INSERT INTO `est_enseigners` VALUES (26,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,2);
INSERT INTO `est_enseigners` VALUES (27,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,3);
INSERT INTO `est_enseigners` VALUES (28,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,4);
INSERT INTO `est_enseigners` VALUES (29,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,5);
INSERT INTO `est_enseigners` VALUES (30,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,6);
INSERT INTO `est_enseigners` VALUES (31,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,7);
INSERT INTO `est_enseigners` VALUES (32,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,8);
INSERT INTO `est_enseigners` VALUES (33,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,9);
INSERT INTO `est_enseigners` VALUES (34,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,10);
INSERT INTO `est_enseigners` VALUES (35,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,11);
INSERT INTO `est_enseigners` VALUES (36,NULL,NULL,NULL,NULL,1,30,1,3,NULL,NULL,12);
INSERT INTO `est_enseigners` VALUES (37,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,1);
INSERT INTO `est_enseigners` VALUES (38,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,2);
INSERT INTO `est_enseigners` VALUES (39,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,3);
INSERT INTO `est_enseigners` VALUES (40,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,4);
INSERT INTO `est_enseigners` VALUES (41,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,5);
INSERT INTO `est_enseigners` VALUES (42,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,6);
INSERT INTO `est_enseigners` VALUES (43,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,7);
INSERT INTO `est_enseigners` VALUES (44,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,8);
INSERT INTO `est_enseigners` VALUES (45,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,9);
INSERT INTO `est_enseigners` VALUES (46,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,10);
INSERT INTO `est_enseigners` VALUES (47,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,11);
INSERT INTO `est_enseigners` VALUES (48,NULL,NULL,NULL,NULL,1,30,1,6,NULL,NULL,12);
INSERT INTO `est_enseigners` VALUES (49,NULL,NULL,NULL,NULL,1,30,1,10,NULL,NULL,7);
INSERT INTO `est_enseigners` VALUES (50,NULL,NULL,NULL,NULL,1,30,1,10,NULL,NULL,8);
INSERT INTO `est_enseigners` VALUES (51,NULL,NULL,NULL,NULL,1,30,1,10,NULL,NULL,9);
INSERT INTO `est_enseigners` VALUES (52,NULL,NULL,NULL,NULL,1,30,1,10,NULL,NULL,10);
INSERT INTO `est_enseigners` VALUES (53,NULL,NULL,NULL,NULL,1,30,1,10,NULL,NULL,11);
INSERT INTO `est_enseigners` VALUES (54,NULL,NULL,NULL,NULL,1,30,1,10,NULL,NULL,12);
INSERT INTO `est_enseigners` VALUES (55,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,1);
INSERT INTO `est_enseigners` VALUES (56,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,2);
INSERT INTO `est_enseigners` VALUES (57,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,3);
INSERT INTO `est_enseigners` VALUES (58,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,4);
INSERT INTO `est_enseigners` VALUES (59,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,5);
INSERT INTO `est_enseigners` VALUES (60,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,6);
INSERT INTO `est_enseigners` VALUES (61,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,7);
INSERT INTO `est_enseigners` VALUES (62,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,8);
INSERT INTO `est_enseigners` VALUES (63,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,9);
INSERT INTO `est_enseigners` VALUES (64,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,10);
INSERT INTO `est_enseigners` VALUES (65,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,11);
INSERT INTO `est_enseigners` VALUES (66,NULL,NULL,NULL,NULL,1,30,1,11,NULL,NULL,12);
INSERT INTO `est_enseigners` VALUES (73,NULL,NULL,NULL,NULL,1,30,1,12,NULL,NULL,7);
INSERT INTO `est_enseigners` VALUES (74,NULL,NULL,NULL,NULL,1,30,1,12,NULL,NULL,8);
INSERT INTO `est_enseigners` VALUES (75,NULL,NULL,NULL,NULL,1,30,1,12,NULL,NULL,9);
INSERT INTO `est_enseigners` VALUES (76,NULL,NULL,NULL,NULL,1,30,1,12,NULL,NULL,10);
INSERT INTO `est_enseigners` VALUES (77,NULL,NULL,NULL,NULL,1,30,1,12,NULL,NULL,11);
INSERT INTO `est_enseigners` VALUES (78,NULL,NULL,NULL,NULL,1,30,1,12,NULL,NULL,12);
INSERT INTO `est_enseigners` VALUES (79,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,1);
INSERT INTO `est_enseigners` VALUES (80,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,2);
INSERT INTO `est_enseigners` VALUES (81,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,3);
INSERT INTO `est_enseigners` VALUES (82,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,4);
INSERT INTO `est_enseigners` VALUES (83,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,5);
INSERT INTO `est_enseigners` VALUES (84,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,6);
INSERT INTO `est_enseigners` VALUES (85,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,7);
INSERT INTO `est_enseigners` VALUES (86,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,8);
INSERT INTO `est_enseigners` VALUES (87,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,9);
INSERT INTO `est_enseigners` VALUES (88,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,10);
INSERT INTO `est_enseigners` VALUES (89,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,11);
INSERT INTO `est_enseigners` VALUES (90,NULL,NULL,NULL,NULL,1,30,1,13,NULL,NULL,12);
INSERT INTO `est_enseigners` VALUES (91,NULL,NULL,NULL,NULL,1,30,1,16,NULL,NULL,1);
INSERT INTO `est_enseigners` VALUES (92,NULL,NULL,NULL,NULL,1,30,1,16,NULL,NULL,2);
INSERT INTO `est_enseigners` VALUES (93,NULL,NULL,NULL,NULL,1,30,1,16,NULL,NULL,3);
INSERT INTO `est_enseigners` VALUES (94,NULL,NULL,NULL,NULL,1,30,1,16,NULL,NULL,4);
INSERT INTO `est_enseigners` VALUES (95,NULL,NULL,NULL,NULL,1,30,1,16,NULL,NULL,5);
INSERT INTO `est_enseigners` VALUES (96,NULL,NULL,NULL,NULL,1,30,1,16,NULL,NULL,6);
INSERT INTO `est_enseigners` VALUES (97,NULL,NULL,NULL,NULL,1,30,1,16,NULL,NULL,7);
INSERT INTO `est_enseigners` VALUES (98,NULL,NULL,NULL,NULL,1,30,1,16,NULL,NULL,8);
INSERT INTO `est_enseigners` VALUES (99,NULL,NULL,NULL,NULL,1,30,1,16,NULL,NULL,9);
INSERT INTO `est_enseigners` VALUES (100,NULL,NULL,NULL,NULL,1,30,1,19,NULL,NULL,1);
INSERT INTO `est_enseigners` VALUES (101,NULL,NULL,NULL,NULL,1,30,1,19,NULL,NULL,2);
INSERT INTO `est_enseigners` VALUES (102,NULL,NULL,NULL,NULL,1,30,1,19,NULL,NULL,3);
INSERT INTO `est_enseigners` VALUES (103,NULL,NULL,NULL,NULL,1,30,1,19,NULL,NULL,4);
INSERT INTO `est_enseigners` VALUES (104,NULL,NULL,NULL,NULL,1,30,1,19,NULL,NULL,5);
INSERT INTO `est_enseigners` VALUES (105,NULL,NULL,NULL,NULL,1,30,1,19,NULL,NULL,6);
INSERT INTO `est_enseigners` VALUES (106,NULL,NULL,NULL,NULL,1,30,1,20,NULL,NULL,1);
INSERT INTO `est_enseigners` VALUES (107,NULL,NULL,NULL,NULL,1,30,1,20,NULL,NULL,2);
INSERT INTO `est_enseigners` VALUES (108,NULL,NULL,NULL,NULL,1,30,1,20,NULL,NULL,3);
INSERT INTO `est_enseigners` VALUES (109,NULL,NULL,NULL,NULL,1,30,1,20,NULL,NULL,4);
INSERT INTO `est_enseigners` VALUES (110,NULL,NULL,NULL,NULL,1,30,1,20,NULL,NULL,5);
INSERT INTO `est_enseigners` VALUES (111,NULL,NULL,NULL,NULL,1,30,1,20,NULL,NULL,6);
INSERT INTO `est_enseigners` VALUES (112,NULL,NULL,NULL,NULL,1,30,1,18,NULL,NULL,12);
INSERT INTO `est_enseigners` VALUES (114,NULL,NULL,NULL,NULL,1,30,1,16,NULL,NULL,12);
/*!40000 ALTER TABLE `est_enseigners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluations`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `description_eval` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coefficient_eval` int DEFAULT NULL,
  `date_evaluation` date NOT NULL,
  `matiere_id` bigint unsigned NOT NULL,
  `periode_id` bigint unsigned NOT NULL,
  `classe_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_evaluation_id` bigint unsigned NOT NULL,
  `notation` int DEFAULT NULL,
  `duree` int DEFAULT NULL,
  `heure_debut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evaluation_state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `evaluations_matiere_id_foreign` (`matiere_id`),
  KEY `evaluations_periode_id_foreign` (`periode_id`),
  KEY `evaluations_classe_id_foreign` (`classe_id`),
  KEY `evaluations_type_evaluation_id_foreign` (`type_evaluation_id`),
  CONSTRAINT `evaluations_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `evaluations_matiere_id_foreign` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `evaluations_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periodes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `evaluations_type_evaluation_id_foreign` FOREIGN KEY (`type_evaluation_id`) REFERENCES `type_evaluations` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluations`
--

LOCK TABLES `evaluations` WRITE;
/*!40000 ALTER TABLE `evaluations` DISABLE KEYS */;
INSERT INTO `evaluations` VALUES (1,'devoir de classe portant sur les 3 premiers chapitres',1,'2022-08-31',12,1,59,'2022-08-31 09:44:44','2022-08-31 09:44:44',3,20,2,'10:00',1);
INSERT INTO `evaluations` VALUES (2,'devoir de classe portant sur les 3 premiers chapitres',1,'2022-08-31',12,1,59,'2022-08-31 15:11:39','2022-08-31 15:11:39',1,10,1,'17:11:39',1);
INSERT INTO `evaluations` VALUES (3,'devoir de classe portant sur les 1 premiers chapitres',1,'2022-09-01',18,1,59,'2022-09-01 13:58:49','2022-09-01 13:58:49',3,20,2,'15:58:49',1);
/*!40000 ALTER TABLE `evaluations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fichiers`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fichiers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fichier` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seance_matiere_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fichiers_seance_matiere_id_foreign` (`seance_matiere_id`),
  CONSTRAINT `fichiers_seance_matiere_id_foreign` FOREIGN KEY (`seance_matiere_id`) REFERENCES `seance_matieres` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fichiers`
--

LOCK TABLES `fichiers` WRITE;
/*!40000 ALTER TABLE `fichiers` DISABLE KEYS */;
/*!40000 ALTER TABLE `fichiers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscrires`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscrires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date_inscription` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant_inscription` int NOT NULL,
  `eleve_id` bigint unsigned NOT NULL,
  `annee_scolaire_id` bigint unsigned NOT NULL,
  `classe_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inscrires_eleve_id_foreign` (`eleve_id`),
  KEY `inscrires_annee_scolaire_id_foreign` (`annee_scolaire_id`),
  KEY `inscrires_classe_id_foreign` (`classe_id`),
  CONSTRAINT `inscrires_annee_scolaire_id_foreign` FOREIGN KEY (`annee_scolaire_id`) REFERENCES `annee_scolaires` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `inscrires_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `inscrires_eleve_id_foreign` FOREIGN KEY (`eleve_id`) REFERENCES `eleves` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscrires`
--

LOCK TABLES `inscrires` WRITE;
/*!40000 ALTER TABLE `inscrires` DISABLE KEYS */;
INSERT INTO `inscrires` VALUES (1,'2022-08-18',95000,1,1,23,NULL,NULL);
INSERT INTO `inscrires` VALUES (2,'2022-08-18',95000,2,1,23,NULL,NULL);
INSERT INTO `inscrires` VALUES (3,'2022-08-18',250000,3,1,25,NULL,NULL);
INSERT INTO `inscrires` VALUES (4,'2022-08-30',95000,8,1,26,NULL,NULL);
INSERT INTO `inscrires` VALUES (5,'2022-08-30',70000,4,1,62,NULL,NULL);
INSERT INTO `inscrires` VALUES (6,'2022-08-30',46000,5,1,59,NULL,NULL);
INSERT INTO `inscrires` VALUES (7,'2022-08-30',120000,6,1,59,NULL,NULL);
INSERT INTO `inscrires` VALUES (8,'2022-08-30',120000,7,1,26,NULL,NULL);
/*!40000 ALTER TABLE `inscrires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instituteurs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instituteurs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `matricule_instituteur` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `instituteurs_matricule_instituteur_unique` (`matricule_instituteur`),
  KEY `instituteurs_user_id_foreign` (`user_id`),
  CONSTRAINT `instituteurs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instituteurs`
--

LOCK TABLES `instituteurs` WRITE;
/*!40000 ALTER TABLE `instituteurs` DISABLE KEYS */;
INSERT INTO `instituteurs` VALUES (1,'IA4',1,NULL,NULL);
INSERT INTO `instituteurs` VALUES (2,'KUI',6,NULL,NULL);
INSERT INTO `instituteurs` VALUES (3,'G20',15,NULL,NULL);
INSERT INTO `instituteurs` VALUES (4,'HBY',16,NULL,NULL);
INSERT INTO `instituteurs` VALUES (5,'SYB',28,NULL,NULL);
INSERT INTO `instituteurs` VALUES (6,'IGT',29,NULL,NULL);
/*!40000 ALTER TABLE `instituteurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jours`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jours` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jour_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jours`
--

LOCK TABLES `jours` WRITE;
/*!40000 ALTER TABLE `jours` DISABLE KEYS */;
INSERT INTO `jours` VALUES (1,'Lundi',NULL,NULL);
INSERT INTO `jours` VALUES (2,'Mardi',NULL,NULL);
INSERT INTO `jours` VALUES (3,'Mercredi',NULL,NULL);
INSERT INTO `jours` VALUES (4,'Jeudi',NULL,NULL);
INSERT INTO `jours` VALUES (5,'Vendredi',NULL,NULL);
/*!40000 ALTER TABLE `jours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matiere_classetts`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matiere_classetts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jour_id` bigint unsigned NOT NULL,
  `hm_debut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_H` int DEFAULT NULL,
  `duree_M` int DEFAULT NULL,
  `classe_id` bigint unsigned NOT NULL,
  `matiere_id` bigint unsigned NOT NULL,
  `annee_scolaire_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `matiere_classetts_jour_id_foreign` (`jour_id`),
  KEY `matiere_classetts_classe_id_foreign` (`classe_id`),
  KEY `matiere_classetts_matiere_id_foreign` (`matiere_id`),
  KEY `matiere_classetts_annee_scolaire_id_foreign` (`annee_scolaire_id`),
  CONSTRAINT `matiere_classetts_annee_scolaire_id_foreign` FOREIGN KEY (`annee_scolaire_id`) REFERENCES `annee_scolaires` (`id`),
  CONSTRAINT `matiere_classetts_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`),
  CONSTRAINT `matiere_classetts_jour_id_foreign` FOREIGN KEY (`jour_id`) REFERENCES `jours` (`id`),
  CONSTRAINT `matiere_classetts_matiere_id_foreign` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matiere_classetts`
--

LOCK TABLES `matiere_classetts` WRITE;
/*!40000 ALTER TABLE `matiere_classetts` DISABLE KEYS */;
INSERT INTO `matiere_classetts` VALUES (1,1,'08:05:00',2,NULL,59,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (2,1,'10:05:00',2,NULL,59,12,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (3,1,'13:15:00',4,NULL,59,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (4,1,'13:15:00',2,NULL,25,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (5,1,'08:05:00',4,NULL,25,10,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (6,1,'15:15:00',4,NULL,25,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (7,2,'08:05:00',4,NULL,59,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (8,2,'15:05:00',2,NULL,59,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (9,2,'13:05:00',2,NULL,20,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (10,2,'08:05:00',2,NULL,20,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (11,2,'10:05:00',2,NULL,21,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (12,3,'08:05:00',2,NULL,21,12,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (13,3,'10:05:00',2,NULL,62,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (14,3,'13:15:00',2,NULL,20,12,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (15,3,'15:15:00',2,NULL,20,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (16,4,'08:05:00',2,NULL,22,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (17,4,'10:15:00',2,NULL,24,12,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (18,5,'08:15:00',4,NULL,42,12,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (19,5,'13:15:00',2,NULL,42,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (20,5,'13:15:00',2,NULL,23,12,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (21,5,'08:05:00',2,NULL,23,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (22,5,'10:05:00',2,NULL,25,10,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (23,1,'08:00:00',1,30,26,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (24,1,'09:30:00',1,30,26,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (25,1,'11:00:00',1,NULL,26,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (26,1,'13:15:00',2,NULL,26,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (27,1,'15:15:00',1,NULL,26,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (28,1,'16:15:00',1,NULL,26,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (29,2,'08:05:00',4,NULL,26,20,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (30,2,'13:05:00',2,NULL,26,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (31,2,'15:05:00',1,NULL,26,16,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (32,2,'16:05:00',1,NULL,26,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (33,3,'08:05:00',2,NULL,26,20,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (34,3,'10:05:00',2,NULL,26,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (35,3,'13:05:00',4,NULL,26,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (36,4,'08:05:00',4,NULL,26,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (37,4,'13:05:00',4,NULL,26,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (38,5,'08:05:00',2,NULL,26,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (39,5,'10:15:00',2,NULL,26,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (40,5,'12:05:00',2,NULL,26,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (41,5,'13:15:00',2,NULL,26,13,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (42,1,'08:00:00',1,30,14,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (43,1,'09:30:00',1,30,14,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (44,1,'11:00:00',1,NULL,14,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (45,1,'13:15:00',2,NULL,14,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (46,1,'15:15:00',1,NULL,14,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (47,1,'16:15:00',1,NULL,14,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (48,2,'08:05:00',4,NULL,14,20,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (49,2,'13:05:00',2,NULL,14,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (50,2,'15:05:00',1,NULL,14,16,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (51,2,'16:05:00',1,NULL,14,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (52,3,'08:05:00',2,NULL,14,20,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (53,3,'10:05:00',2,NULL,14,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (54,3,'13:05:00',4,NULL,14,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (55,4,'08:05:00',4,NULL,14,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (56,4,'13:05:00',4,NULL,14,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (57,5,'08:05:00',2,NULL,14,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (58,5,'10:15:00',2,NULL,14,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (59,5,'12:05:00',2,NULL,14,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (60,5,'13:15:00',2,NULL,14,13,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (61,1,'08:00:00',1,30,37,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (62,1,'09:30:00',1,30,37,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (63,1,'11:00:00',1,NULL,37,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (64,1,'13:15:00',2,NULL,37,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (65,1,'15:15:00',1,NULL,37,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (66,1,'16:15:00',1,NULL,37,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (67,2,'08:05:00',4,NULL,37,20,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (68,2,'13:05:00',2,NULL,37,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (69,2,'15:05:00',1,NULL,37,16,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (70,2,'16:05:00',1,NULL,37,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (71,3,'08:05:00',2,NULL,37,20,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (72,3,'10:05:00',2,NULL,37,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (73,3,'13:05:00',4,NULL,37,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (74,4,'08:05:00',4,NULL,37,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (75,4,'13:05:00',4,NULL,37,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (76,5,'08:05:00',2,NULL,37,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (77,5,'10:15:00',2,NULL,37,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (78,5,'12:05:00',2,NULL,37,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (79,5,'13:15:00',2,NULL,37,13,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (80,1,'08:00:00',1,30,19,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (81,1,'09:30:00',1,30,19,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (82,1,'11:00:00',1,NULL,19,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (83,1,'13:15:00',2,NULL,19,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (84,1,'15:15:00',1,NULL,19,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (85,1,'16:15:00',1,NULL,19,11,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (86,2,'08:05:00',4,NULL,19,20,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (87,2,'13:05:00',2,NULL,19,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (88,2,'15:05:00',1,NULL,19,16,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (89,2,'16:05:00',1,NULL,19,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (90,3,'08:05:00',2,NULL,19,20,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (91,3,'10:05:00',2,NULL,19,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (92,3,'13:05:00',4,NULL,19,19,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (93,4,'08:05:00',4,NULL,19,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (94,4,'13:05:00',4,NULL,19,3,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (95,5,'08:05:00',2,NULL,19,1,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (96,5,'10:15:00',2,NULL,19,2,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (97,5,'12:05:00',2,NULL,19,6,1,NULL,NULL);
INSERT INTO `matiere_classetts` VALUES (98,5,'13:15:00',2,NULL,19,13,1,NULL,NULL);
/*!40000 ALTER TABLE `matiere_classetts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matieres`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matieres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_matiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abreviation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matieres_abreviation_unique` (`abreviation`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matieres`
--

LOCK TABLES `matieres` WRITE;
/*!40000 ALTER TABLE `matieres` DISABLE KEYS */;
INSERT INTO `matieres` VALUES (1,'FRANCAIS','FR',NULL,NULL);
INSERT INTO `matieres` VALUES (2,'ANGLAIS','ANG',NULL,NULL);
INSERT INTO `matieres` VALUES (3,'MATHEMATIQUE','MATH',NULL,NULL);
INSERT INTO `matieres` VALUES (4,'HISTOIRE',NULL,NULL,NULL);
INSERT INTO `matieres` VALUES (5,'GEOGRAPHIE','GEO',NULL,NULL);
INSERT INTO `matieres` VALUES (6,'HITOIRE-GEOGRAPHIE','HG',NULL,NULL);
INSERT INTO `matieres` VALUES (7,'POESIE',NULL,NULL,NULL);
INSERT INTO `matieres` VALUES (8,'VOCABULAIRE',NULL,NULL,NULL);
INSERT INTO `matieres` VALUES (9,'ETUDE LA LANGUE',NULL,NULL,NULL);
INSERT INTO `matieres` VALUES (10,'SVT','SVT',NULL,NULL);
INSERT INTO `matieres` VALUES (11,'EDUCATION PHYSIQUE ET SPORTIVE','EPS',NULL,NULL);
INSERT INTO `matieres` VALUES (12,'PHYSIQUE CHIMIE','PC',NULL,NULL);
INSERT INTO `matieres` VALUES (13,'ESPAGNOL','ESP',NULL,NULL);
INSERT INTO `matieres` VALUES (14,'ALLEMAND','ALL',NULL,NULL);
INSERT INTO `matieres` VALUES (15,'ARTS PLASTIQUES',NULL,NULL,NULL);
INSERT INTO `matieres` VALUES (16,'EDUCATION AU DROIT DE L\'HOMME ET À LA CITOYENNETE','EDHC',NULL,NULL);
INSERT INTO `matieres` VALUES (17,'EDUCATION MUSICALE',NULL,NULL,NULL);
INSERT INTO `matieres` VALUES (18,'PHILOSOPHIE',NULL,NULL,NULL);
INSERT INTO `matieres` VALUES (19,'SCIENCE ET TECHNOLOGIE',NULL,NULL,NULL);
INSERT INTO `matieres` VALUES (20,'ACTIVITES D\'EXPRESSION ET DE CREATION','AEC',NULL,NULL);
/*!40000 ALTER TABLE `matieres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sousmenu` int DEFAULT NULL,
  `lien` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordre` int DEFAULT NULL,
  `niveau` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (2,'Academics',NULL,'#',NULL,2,1,NULL,NULL);
INSERT INTO `menus` VALUES (3,'Scolarité',NULL,'#',NULL,3,1,NULL,NULL);
INSERT INTO `menus` VALUES (4,'Elèves',NULL,'#',NULL,4,1,NULL,NULL);
INSERT INTO `menus` VALUES (5,'Utilisateurs',NULL,'#',NULL,8,1,NULL,NULL);
INSERT INTO `menus` VALUES (6,'Classes',NULL,'#',NULL,9,1,NULL,NULL);
INSERT INTO `menus` VALUES (7,'Matières',NULL,'#',NULL,10,1,NULL,NULL);
INSERT INTO `menus` VALUES (8,'Messages',NULL,'#',NULL,11,1,NULL,NULL);
INSERT INTO `menus` VALUES (9,'Exam',NULL,'#',NULL,12,1,NULL,NULL);
INSERT INTO `menus` VALUES (10,'Paramètre',NULL,'#',NULL,15,1,NULL,NULL);
INSERT INTO `menus` VALUES (11,'Administration',NULL,'#',NULL,13,1,NULL,NULL);
INSERT INTO `menus` VALUES (12,'Parents',NULL,'#',NULL,5,1,NULL,NULL);
INSERT INTO `menus` VALUES (13,'Instituteurs',NULL,'#',NULL,6,1,NULL,NULL);
INSERT INTO `menus` VALUES (14,'Enseignant',NULL,'#',NULL,7,1,NULL,NULL);
INSERT INTO `menus` VALUES (15,'Créer une classe',6,'#',NULL,1,2,NULL,NULL);
INSERT INTO `menus` VALUES (16,'Gérer les classes',6,'#',NULL,2,2,NULL,NULL);
INSERT INTO `menus` VALUES (17,'Créer un enseignant',14,'#',NULL,1,2,NULL,NULL);
INSERT INTO `menus` VALUES (18,'Créer un instituteur',13,'#',NULL,1,2,NULL,NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1);
INSERT INTO `migrations` VALUES (2,'2014_10_12_100000_create_password_resets_table',1);
INSERT INTO `migrations` VALUES (3,'2019_08_19_000000_create_failed_jobs_table',1);
INSERT INTO `migrations` VALUES (4,'2019_12_14_000001_create_personal_access_tokens_table',1);
INSERT INTO `migrations` VALUES (5,'2022_08_16_103532_create_profils_table',1);
INSERT INTO `migrations` VALUES (6,'2022_08_16_112448_create_menus_table',1);
INSERT INTO `migrations` VALUES (7,'2022_08_16_115207_create_administrations_table',1);
INSERT INTO `migrations` VALUES (8,'2022_08_16_120319_create_parents_table',1);
INSERT INTO `migrations` VALUES (9,'2022_08_16_120527_create_enseignants_table',1);
INSERT INTO `migrations` VALUES (10,'2022_08_16_120723_create_eleves_table',1);
INSERT INTO `migrations` VALUES (11,'2022_08_16_121646_create_annee_scolaires_table',1);
INSERT INTO `migrations` VALUES (12,'2022_08_16_121816_create_cycles_table',1);
INSERT INTO `migrations` VALUES (13,'2022_08_16_121936_create_versements_table',1);
INSERT INTO `migrations` VALUES (14,'2022_08_16_124406_create_niveaux_table',1);
INSERT INTO `migrations` VALUES (15,'2022_08_16_124725_create_matieres_table',1);
INSERT INTO `migrations` VALUES (16,'2022_08_16_151303_create_seance_matieres_table',1);
INSERT INTO `migrations` VALUES (17,'2022_08_16_152253_create_periodes_table',1);
INSERT INTO `migrations` VALUES (18,'2022_08_16_152859_create_instituteurs_table',1);
INSERT INTO `migrations` VALUES (19,'2022_08_16_153353_create_fichiers_table',1);
INSERT INTO `migrations` VALUES (20,'2022_08_16_153752_create_roles_table',1);
INSERT INTO `migrations` VALUES (21,'2022_08_16_154715_create_classes_table',1);
INSERT INTO `migrations` VALUES (22,'2022_08_16_155014_create_absences_table',1);
INSERT INTO `migrations` VALUES (23,'2022_08_16_155529_create_evaluations_table',1);
INSERT INTO `migrations` VALUES (24,'2022_08_16_160231_create_notes_table',1);
INSERT INTO `migrations` VALUES (25,'2022_08_16_160651_create_classe_primaires_table',1);
INSERT INTO `migrations` VALUES (26,'2022_08_16_161125_create_classe_secondaires_table',1);
INSERT INTO `migrations` VALUES (27,'2022_08_16_161633_create_avoir_profils_table',1);
INSERT INTO `migrations` VALUES (28,'2022_08_16_162027_create_parenters_table',1);
INSERT INTO `migrations` VALUES (29,'2022_08_16_162256_create_inscrires_table',1);
INSERT INTO `migrations` VALUES (30,'2022_08_16_162902_create_enseigners_table',1);
INSERT INTO `migrations` VALUES (31,'2022_08_16_163344_create_est_enseigners_table',1);
INSERT INTO `migrations` VALUES (32,'2022_08_16_164423_create_demander_docs_table',1);
INSERT INTO `migrations` VALUES (33,'2022_08_18_114833_change_classe_primaires_annee_column',2);
INSERT INTO `migrations` VALUES (34,'2022_08_18_122419_change_enseigners_annee_column',3);
INSERT INTO `migrations` VALUES (36,'2022_08_18_155934_create_versements_table',4);
INSERT INTO `migrations` VALUES (37,'2022_08_18_181610_update_est_enseigners_columns',5);
INSERT INTO `migrations` VALUES (38,'2022_08_25_123954_update_est_enseigners_columns',6);
INSERT INTO `migrations` VALUES (39,'2022_08_25_155850_add_colomns_to_users_table',7);
INSERT INTO `migrations` VALUES (40,'2022_08_25_164905_add_matricule_colomn_to_users_table',8);
INSERT INTO `migrations` VALUES (41,'2022_08_25_235745_add_confirmation_token_colomn_to_users_table',9);
INSERT INTO `migrations` VALUES (42,'2022_08_28_204316_add_columns_nbre_heure_absence_and_nbre_heure_absence',10);
INSERT INTO `migrations` VALUES (43,'2022_08_29_104212_add_foreign_i_d_periode_id',11);
INSERT INTO `migrations` VALUES (45,'2022_08_29_112152_add_columns_to_seance_matieres_table',12);
INSERT INTO `migrations` VALUES (46,'2022_08_29_114821_remove_nbr_heure_seance_to_absences_table',12);
INSERT INTO `migrations` VALUES (47,'2022_08_29_122956_add_foreign_id_classe_id_to_seance_matieres_table',13);
INSERT INTO `migrations` VALUES (49,'2022_08_29_173417_delete_foreign_id_to_est_enseigners_table',14);
INSERT INTO `migrations` VALUES (54,'2022_08_29_180900_create_series_table',15);
INSERT INTO `migrations` VALUES (55,'2022_08_29_181150_create_nationalities_table',15);
INSERT INTO `migrations` VALUES (56,'2022_08_30_115155_rename_table_parent_to__parent_of_student',16);
INSERT INTO `migrations` VALUES (57,'2022_08_31_100422_create_type_evaluations_table',16);
INSERT INTO `migrations` VALUES (58,'2022_08_31_101448_add_foreign_id_type_evaluation_id_to_evaluations_table',16);
INSERT INTO `migrations` VALUES (59,'2022_08_31_104144_add_nullable_to_columns_descrip_coefic_in_evaluations_table',17);
INSERT INTO `migrations` VALUES (60,'2022_08_31_105744_add_columns_notation_to_evaluations_table',18);
INSERT INTO `migrations` VALUES (65,'2022_08_31_110628_add_columns_duree_heure_debut_to_evaluations_table',19);
INSERT INTO `migrations` VALUES (66,'2022_08_31_162516_rename_columns_appreciation',20);
INSERT INTO `migrations` VALUES (67,'2016_06_01_000001_create_oauth_auth_codes_table',21);
INSERT INTO `migrations` VALUES (68,'2016_06_01_000002_create_oauth_access_tokens_table',21);
INSERT INTO `migrations` VALUES (69,'2016_06_01_000003_create_oauth_refresh_tokens_table',21);
INSERT INTO `migrations` VALUES (70,'2016_06_01_000004_create_oauth_clients_table',21);
INSERT INTO `migrations` VALUES (71,'2016_06_01_000005_create_oauth_personal_access_clients_table',21);
INSERT INTO `migrations` VALUES (82,'2022_09_08_134024_create_jours_table',22);
INSERT INTO `migrations` VALUES (83,'2022_09_08_134122_create_table_matiere_classetts',22);
INSERT INTO `migrations` VALUES (84,'2022_09_09_224052_update_column_date_seance_to_seance_matieres_table',23);
INSERT INTO `migrations` VALUES (86,'2022_09_09_233154_update_column_date_absence_to_absences_table',24);
INSERT INTO `migrations` VALUES (87,'2022_09_14_152124_drop_versements_table',25);
INSERT INTO `migrations` VALUES (88,'2022_09_14_154020_create_versements_table',25);
INSERT INTO `migrations` VALUES (89,'2022_09_14_154327_create_versement_scolarites_table',25);
INSERT INTO `migrations` VALUES (90,'2022_09_14_154904_create_modality_payements_table',25);
INSERT INTO `migrations` VALUES (91,'2022_09_14_171827_add_colums_to_versements_table',26);
INSERT INTO `migrations` VALUES (92,'2022_09_14_172104_update_colums_to_inscrires_table',26);
INSERT INTO `migrations` VALUES (94,'2022_09_14_172722_add_colums_to_versement_scolarites_table',27);
INSERT INTO `migrations` VALUES (95,'2022_09_14_203137_create_settings_table',28);
INSERT INTO `migrations` VALUES (97,'2022_09_15_084335_add_colums_to_versement_scolarites_table',29);
INSERT INTO `migrations` VALUES (98,'2022_09_19_113732_add_column_code_to_users_table',30);
INSERT INTO `migrations` VALUES (99,'2022_09_21_175924_add_level_to_profil_table',30);
INSERT INTO `migrations` VALUES (100,'2022_09_23_100206_add_colum_dnaiss_to_users_table',31);
INSERT INTO `migrations` VALUES (101,'2022_09_28_001532_add_column_level_to_niveaux_table',32);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modality_payements`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modality_payements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `naf_af` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `niveau_id` bigint unsigned NOT NULL,
  `frais_inscription` int DEFAULT NULL,
  `versement_id` bigint unsigned NOT NULL,
  `date_echeance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` int DEFAULT NULL,
  `montant_total_scolarite` int DEFAULT NULL,
  `annee_scolaire_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `modality_payements_niveau_id_foreign` (`niveau_id`),
  KEY `modality_payements_versement_id_foreign` (`versement_id`),
  KEY `modality_payements_annee_scolaire_id_foreign` (`annee_scolaire_id`),
  CONSTRAINT `modality_payements_annee_scolaire_id_foreign` FOREIGN KEY (`annee_scolaire_id`) REFERENCES `annee_scolaires` (`id`),
  CONSTRAINT `modality_payements_niveau_id_foreign` FOREIGN KEY (`niveau_id`) REFERENCES `niveaux` (`id`),
  CONSTRAINT `modality_payements_versement_id_foreign` FOREIGN KEY (`versement_id`) REFERENCES `versements` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modality_payements`
--

LOCK TABLES `modality_payements` WRITE;
/*!40000 ALTER TABLE `modality_payements` DISABLE KEYS */;
INSERT INTO `modality_payements` VALUES (1,'AF',7,20000,1,'2022-10-05',20000,60000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (2,'AF',7,20000,2,'2022-11-05',20000,60000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (3,'AF',8,20000,1,'2022-10-05',20000,60000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (4,'AF',8,20000,2,'2022-11-05',20000,60000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (5,'AF',9,20000,1,'2022-10-05',20000,60000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (6,'AF',9,20000,2,'2022-11-05',20000,60000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (7,'AF',13,20000,1,'2022-10-05',20000,60000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (8,'AF',13,20000,2,'2022-11-05',20000,60000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (9,'AF',10,30000,1,'2022-10-05',25000,80000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (10,'AF',10,30000,2,'2022-11-05',25000,80000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (11,'AF',11,30000,1,'2022-10-05',25000,80000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (12,'AF',11,30000,2,'2022-11-05',25000,80000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (13,'AF',12,46000,1,'2022-10-05',25000,96000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (14,'AF',12,46000,2,'2022-11-05',25000,96000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (15,'NAF',7,50000,1,'2022-10-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (16,'NAF',7,50000,2,'2022-11-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (17,'NAF',7,50000,3,'2022-12-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (18,'NAF',7,50000,4,'2023-01-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (19,'NAF',7,50000,5,'2023-02-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (20,'NAF',8,50000,1,'2022-10-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (21,'NAF',8,50000,2,'2022-11-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (22,'NAF',8,50000,3,'2022-12-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (23,'NAF',8,50000,4,'2023-01-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (24,'NAF',8,50000,5,'2023-02-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (25,'NAF',9,50000,1,'2022-10-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (26,'NAF',9,50000,2,'2022-11-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (27,'NAF',9,50000,3,'2022-12-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (28,'NAF',9,50000,4,'2023-01-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (29,'NAF',9,50000,5,'2023-02-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (30,'NAF',13,50000,1,'2022-10-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (31,'NAF',13,50000,2,'2022-11-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (32,'NAF',13,50000,3,'2022-12-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (33,'NAF',13,50000,4,'2023-01-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (34,'NAF',13,50000,5,'2023-02-05',30000,200000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (35,'NAF',10,75000,1,'2022-10-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (36,'NAF',10,75000,2,'2022-11-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (37,'NAF',10,75000,3,'2022-12-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (38,'NAF',10,75000,4,'2023-01-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (39,'NAF',10,75000,5,'2023-02-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (40,'NAF',11,75000,1,'2022-10-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (41,'NAF',11,75000,2,'2022-11-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (42,'NAF',11,75000,3,'2022-12-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (43,'NAF',11,75000,4,'2023-01-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (44,'NAF',11,75000,5,'2023-02-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (45,'NAF',12,75000,1,'2022-10-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (46,'NAF',12,75000,2,'2022-11-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (47,'NAF',12,75000,3,'2022-12-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (48,'NAF',12,75000,4,'2023-01-05',25000,250000,1,NULL,NULL);
INSERT INTO `modality_payements` VALUES (49,'NAF',12,75000,5,'2023-02-05',25000,250000,1,NULL,NULL);
/*!40000 ALTER TABLE `modality_payements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `niveaux`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `niveaux` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `libelle_niveau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cycle_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level_grade` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `niveaux_cycle_id_foreign` (`cycle_id`),
  CONSTRAINT `niveaux_cycle_id_foreign` FOREIGN KEY (`cycle_id`) REFERENCES `cycles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `niveaux`
--

LOCK TABLES `niveaux` WRITE;
/*!40000 ALTER TABLE `niveaux` DISABLE KEYS */;
INSERT INTO `niveaux` VALUES (1,'CP1',1,NULL,NULL,1);
INSERT INTO `niveaux` VALUES (2,'CP2',1,NULL,NULL,2);
INSERT INTO `niveaux` VALUES (3,'CE1',1,NULL,NULL,3);
INSERT INTO `niveaux` VALUES (4,'CE2',1,NULL,NULL,4);
INSERT INTO `niveaux` VALUES (5,'CM1',1,NULL,NULL,5);
INSERT INTO `niveaux` VALUES (6,'CM2',1,NULL,NULL,6);
INSERT INTO `niveaux` VALUES (7,'6EME',2,NULL,NULL,1);
INSERT INTO `niveaux` VALUES (8,'5EME',2,NULL,NULL,2);
INSERT INTO `niveaux` VALUES (9,'4EME',2,NULL,NULL,3);
INSERT INTO `niveaux` VALUES (10,'2ND',3,NULL,NULL,5);
INSERT INTO `niveaux` VALUES (11,'1ERE',3,NULL,NULL,6);
INSERT INTO `niveaux` VALUES (12,'TLE',3,NULL,NULL,7);
INSERT INTO `niveaux` VALUES (13,'3EME',2,NULL,NULL,4);
/*!40000 ALTER TABLE `niveaux` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `notation` double DEFAULT NULL,
  `appreciation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evaluation_id` bigint unsigned NOT NULL,
  `eleve_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notes_evaluation_id_foreign` (`evaluation_id`),
  KEY `notes_eleve_id_foreign` (`eleve_id`),
  CONSTRAINT `notes_eleve_id_foreign` FOREIGN KEY (`eleve_id`) REFERENCES `eleves` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `notes_evaluation_id_foreign` FOREIGN KEY (`evaluation_id`) REFERENCES `evaluations` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES (1,14.5,NULL,1,5,'2022-08-31 15:03:15','2022-08-31 15:03:00');
INSERT INTO `notes` VALUES (2,18,NULL,1,6,'2022-08-31 15:03:15','2022-08-31 15:03:00');
INSERT INTO `notes` VALUES (3,9,NULL,2,5,'2022-08-31 15:13:34','2022-08-31 15:13:00');
INSERT INTO `notes` VALUES (4,7.5,NULL,2,6,'2022-08-31 15:13:34','2022-08-31 15:13:00');
INSERT INTO `notes` VALUES (6,11.5,NULL,3,5,'2022-09-01 14:06:09','2022-09-01 14:06:00');
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` VALUES ('147d3992544e5a5d25334f57665d2c2f487c6d12afc28b8fdaaabd35858a3a1ee589c47d6409620e',17,5,'Personal Access Token','[]',0,'2022-09-25 20:53:05','2022-09-25 20:53:05','2023-09-25 22:53:05');
INSERT INTO `oauth_access_tokens` VALUES ('196dec4031ca81bad000195958b53ab3b5b1e1f76b4b2c18faccb04cb2da13931b7f520d7ad628fe',17,5,'Personal Access Token','[]',0,'2022-09-18 19:32:07','2022-09-18 19:32:08','2023-09-18 21:32:07');
INSERT INTO `oauth_access_tokens` VALUES ('3f546eab82929354467be864d1c7accbd0b95235ba3bb65322d701525024f38ba8ceffd570e0ecc4',17,5,'Personal Access Token','[]',0,'2022-09-19 14:07:32','2022-09-19 14:07:32','2023-09-19 16:07:32');
INSERT INTO `oauth_access_tokens` VALUES ('3fcf4eff9fef6152b65dac2ab2fb3724384421c6c2873c2ed20388ab1e736539b1c1f46cdb697485',17,5,'Personal Access Token','[]',0,'2022-09-23 13:43:33','2022-09-23 13:43:33','2023-09-23 15:43:33');
INSERT INTO `oauth_access_tokens` VALUES ('3fdf139c8aff6388d70a550a831b903c06186bee9049bb6ea54fb0504811c317782995bf85a87342',17,5,'Personal Access Token','[]',0,'2022-09-19 14:29:00','2022-09-19 14:29:01','2023-09-19 16:29:00');
INSERT INTO `oauth_access_tokens` VALUES ('437fae8662e8bbb083a3f911bb33947438b4e6a642e9eea1f2afc6c6d8791c40e1397abefde1761d',17,5,'Personal Access Token','[]',0,'2022-09-16 14:11:43','2022-09-16 14:11:43','2023-09-16 16:11:43');
INSERT INTO `oauth_access_tokens` VALUES ('472cb99b4b8be4c9af94f02c96771735e48770d85fad17f917a7d1535e6e1e278584bda3fb9dfa19',17,5,'Personal Access Token','[]',0,'2022-09-16 13:37:58','2022-09-16 13:37:58','2023-09-16 15:37:58');
INSERT INTO `oauth_access_tokens` VALUES ('4c9676a1313a44e81414199a668adc7b12806401ac99e6937ceb15c92f56afec7e0916956c2334dc',17,5,'Personal Access Token','[]',0,'2022-09-26 18:16:36','2022-09-26 18:16:36','2023-09-26 20:16:36');
INSERT INTO `oauth_access_tokens` VALUES ('520a4d0165fbe5d0ee01eea5db37d81be21ece850943c0d4915af3a58f03749e9b6325595799e635',17,5,'Personal Access Token','[]',0,'2022-09-19 14:06:57','2022-09-19 14:06:59','2023-09-19 16:06:57');
INSERT INTO `oauth_access_tokens` VALUES ('68bdc95d6bca2528c8f4e26871d626f9916a610d3e549f9fe36e61c7b4982aae0478f8d0248b00e0',17,5,'Personal Access Token','[]',0,'2022-09-16 13:39:07','2022-09-16 13:39:07','2023-09-16 15:39:07');
INSERT INTO `oauth_access_tokens` VALUES ('6b5f58673973ac4d9a0d69c9f08699cfcf83d4e2caeb8b03e3c891556679e6e61a3ea45b0ca60e60',17,5,'Personal Access Token','[]',0,'2022-09-19 14:16:09','2022-09-19 14:16:09','2023-09-19 16:16:09');
INSERT INTO `oauth_access_tokens` VALUES ('6e00eb8b57ae1fa02f4b6606accccdeadefe3d703d53ccc579e71ff0b5647593b12c43a9d2a75cd2',17,5,'Personal Access Token','[]',0,'2022-09-16 13:30:04','2022-09-16 13:30:05','2023-09-16 15:30:04');
INSERT INTO `oauth_access_tokens` VALUES ('781416a06165ebe7a8b30c32a1a1140aca17b7508f24756b8e03ba13f4f0e7948190ea08483bd5cd',17,5,'Personal Access Token','[]',0,'2022-09-26 15:02:02','2022-09-26 15:02:03','2023-09-26 17:02:02');
INSERT INTO `oauth_access_tokens` VALUES ('83607c0cca9e76c4ce4e5c2ee3c83f64a866dd53d0663edb682fd5d9cac7934c1465f4c04c714eba',17,5,'Personal Access Token','[]',0,'2022-09-25 20:33:20','2022-09-25 20:33:23','2023-09-25 22:33:20');
INSERT INTO `oauth_access_tokens` VALUES ('8cab363ad9d0e7ee0e098e403ab27b61f966097f4e7072bda7bba225c72c363e066d0c9c32ab0ee6',1,5,'Personal Access Token','[]',1,'2022-09-26 17:28:45','2022-09-26 18:15:38','2023-09-26 19:28:45');
INSERT INTO `oauth_access_tokens` VALUES ('93b0303141d7029b7e5d435230edd2939eb40209876eaa3c5e36a32a2e7257b62ad4a2dfb0d10f47',17,5,'Personal Access Token','[]',0,'2022-09-16 13:40:02','2022-09-16 13:40:02','2023-09-16 15:40:02');
INSERT INTO `oauth_access_tokens` VALUES ('9edbb671bc1b78bacb6e82702fd61ff2af96619987fae17b8867f2e3c118ef6752c451a2d3690d6b',17,5,'Personal Access Token','[]',0,'2022-09-23 13:41:17','2022-09-23 13:41:18','2023-09-23 15:41:17');
INSERT INTO `oauth_access_tokens` VALUES ('9fe589e55a04607a4f64393d6ad8c1ea65e89725029283dccbf61c5a8168e873ac845f805e17dd13',17,5,'Personal Access Token','[]',0,'2022-09-16 13:32:32','2022-09-16 13:32:32','2023-09-16 15:32:32');
INSERT INTO `oauth_access_tokens` VALUES ('b890582c062f258d7e18db628a6239662e14a1cb99080efa3ad09f62a72a83d3f9b4607f042396c8',17,5,'Personal Access Token','[]',0,'2022-09-16 13:37:37','2022-09-16 13:37:37','2023-09-16 15:37:37');
INSERT INTO `oauth_access_tokens` VALUES ('bcc5478d408f6269c051f689435a7c3f9a7eaaa6245e718db36ae785211c01a1f0f89d608e3d09cf',17,5,'Personal Access Token','[]',1,'2022-09-23 14:07:43','2022-09-23 14:14:49','2023-09-23 16:07:43');
INSERT INTO `oauth_access_tokens` VALUES ('c4cb0b9a0e7208cf593c8e10c46e943b74a23447369d3e4d9639fc80501a8d141c3d61664ee18157',17,5,'Personal Access Token','[]',1,'2022-09-25 20:50:16','2022-09-25 20:51:17','2023-09-25 22:50:16');
INSERT INTO `oauth_access_tokens` VALUES ('d7ad8af648e5e1feb57d5a414ada2e1acff495c352cd6e6673cd86e43b6b7634087ba6dd1369f75d',17,5,'Personal Access Token','[]',0,'2022-09-19 14:19:22','2022-09-19 14:19:22','2023-09-19 16:19:22');
INSERT INTO `oauth_access_tokens` VALUES ('e09db006432ace243b6613cb28ed40f5a9537ab306dd47461263a2fc30b90d256a454149192ec173',17,5,'Personal Access Token','[]',0,'2022-09-25 20:57:26','2022-09-25 20:57:26','2023-09-25 22:57:26');
INSERT INTO `oauth_access_tokens` VALUES ('e2ab2ce84f9d11b0ce536db19c895fbcdbab1f2b46efe4a3b409edf2c7040aa1d3105b53733238c1',17,5,'Personal Access Token','[]',0,'2022-09-19 14:18:37','2022-09-19 14:18:37','2023-09-19 16:18:37');
INSERT INTO `oauth_access_tokens` VALUES ('e7ae9fd22b441b80b27bcfff6fd6cbe2eed273e1d2e149a08325a2c830fb5b1ea7d6e90c4582f249',34,1,'MyApp','[]',0,'2022-09-02 08:37:39','2022-09-02 08:37:41','2023-09-02 10:37:39');
INSERT INTO `oauth_access_tokens` VALUES ('eefb522073751a288aea534d21a98b52e0ddcfab621e92e77193de52151bd38ba3329c84e79c5d96',17,5,'Personal Access Token','[]',0,'2022-09-22 09:04:10','2022-09-22 09:04:11','2023-09-22 11:04:10');
INSERT INTO `oauth_access_tokens` VALUES ('f696bb2f2abe221e4fdae6f4ca851d770b2a938eb2e665cd66e77fe9a0804ff69e35f7426b736b65',17,5,'Personal Access Token','[]',0,'2022-09-22 08:30:55','2022-09-22 08:30:58','2023-09-22 10:30:55');
INSERT INTO `oauth_access_tokens` VALUES ('fa78b4676a3f13a165051d293ba09867113cd1ac3f294c78067de792d3e3cef0597ec6b430685b05',17,5,'Personal Access Token','[]',0,'2022-09-19 14:45:34','2022-09-19 14:45:34','2023-09-19 16:45:34');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'Laravel Personal Access Client','TlM09uiRgV3yUDGu2ptWuNR2mNHM4ZVrzZkPFnEf',NULL,'http://localhost',1,0,0,'2022-09-01 16:14:45','2022-09-01 16:14:45');
INSERT INTO `oauth_clients` VALUES (2,NULL,'Laravel Password Grant Client','OzNBW9cvpyWudyPzdLVY6wMi12vppOzx4MCtqeE6','users','http://localhost',0,1,0,'2022-09-01 16:14:45','2022-09-01 16:14:45');
INSERT INTO `oauth_clients` VALUES (3,NULL,'Laravel Personal Access Client','oV0iralI4mrTasKTFj4Aih6OqZ2q0EFymh6QSsTT',NULL,'http://localhost',1,0,0,'2022-09-12 21:38:22','2022-09-12 21:38:22');
INSERT INTO `oauth_clients` VALUES (4,NULL,'Laravel Password Grant Client','S7S0dO4awpc6FpPxVUDD1QDXoKdt3FLm21jesGy8','users','http://localhost',0,1,0,'2022-09-12 21:38:24','2022-09-12 21:38:24');
INSERT INTO `oauth_clients` VALUES (5,NULL,'Laravel Personal Access Client','5HVqqLm4UY2C6X1BH6PvhZ1CPFtAJzdvMQsWwOTk',NULL,'http://localhost',1,0,0,'2022-09-13 16:48:17','2022-09-13 16:48:17');
INSERT INTO `oauth_clients` VALUES (6,NULL,'Laravel Password Grant Client','kJCB7KrLRK4q5TrvQzMqPpuhY6jWxYoSjyJiGq9G','users','http://localhost',0,1,0,'2022-09-13 16:48:22','2022-09-13 16:48:22');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2022-09-01 16:14:45','2022-09-01 16:14:45');
INSERT INTO `oauth_personal_access_clients` VALUES (2,3,'2022-09-12 21:38:23','2022-09-12 21:38:23');
INSERT INTO `oauth_personal_access_clients` VALUES (3,5,'2022-09-13 16:48:22','2022-09-13 16:48:22');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parenters`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parenters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint unsigned NOT NULL,
  `eleve_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parenters_parent_id_foreign` (`parent_id`),
  KEY `parenters_eleve_id_foreign` (`eleve_id`),
  CONSTRAINT `parenters_eleve_id_foreign` FOREIGN KEY (`eleve_id`) REFERENCES `eleves` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `parenters_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parenters`
--

LOCK TABLES `parenters` WRITE;
/*!40000 ALTER TABLE `parenters` DISABLE KEYS */;
INSERT INTO `parenters` VALUES (1,1,1,NULL,NULL);
INSERT INTO `parenters` VALUES (2,1,2,NULL,NULL);
INSERT INTO `parenters` VALUES (3,2,3,NULL,NULL);
INSERT INTO `parenters` VALUES (4,4,6,NULL,NULL);
INSERT INTO `parenters` VALUES (5,5,7,NULL,NULL);
INSERT INTO `parenters` VALUES (6,6,8,NULL,NULL);
INSERT INTO `parenters` VALUES (7,6,4,NULL,NULL);
INSERT INTO `parenters` VALUES (8,6,5,NULL,NULL);
/*!40000 ALTER TABLE `parenters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parents`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parents_user_id_foreign` (`user_id`),
  CONSTRAINT `parents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parents`
--

LOCK TABLES `parents` WRITE;
/*!40000 ALTER TABLE `parents` DISABLE KEYS */;
INSERT INTO `parents` VALUES (1,3,NULL,NULL);
INSERT INTO `parents` VALUES (2,10,NULL,NULL);
INSERT INTO `parents` VALUES (3,12,NULL,NULL);
INSERT INTO `parents` VALUES (4,24,NULL,NULL);
INSERT INTO `parents` VALUES (5,25,NULL,NULL);
INSERT INTO `parents` VALUES (6,17,NULL,NULL);
/*!40000 ALTER TABLE `parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('porix1230385@gmail.com','$2y$10$S/R/bjoUQQT.ogZjsG5uaOBCI1DkiXkAB3eKKbs1E2qX4NF7l07uy','2022-09-20 14:09:06');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodes`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `libelle_periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debut_periode` date NOT NULL,
  `fin_periode` date NOT NULL,
  `annee_scolaire_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `periodes_annee_scolaire_id_foreign` (`annee_scolaire_id`),
  CONSTRAINT `periodes_annee_scolaire_id_foreign` FOREIGN KEY (`annee_scolaire_id`) REFERENCES `annee_scolaires` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodes`
--

LOCK TABLES `periodes` WRITE;
/*!40000 ALTER TABLE `periodes` DISABLE KEYS */;
INSERT INTO `periodes` VALUES (1,'PREMIER TRIMESTRE','2022-09-19','2022-12-23',1,NULL,NULL);
INSERT INTO `periodes` VALUES (2,'DEUXIEME TRIMESTRE','2023-01-04','2023-04-12',1,NULL,NULL);
INSERT INTO `periodes` VALUES (3,'TROISIEME TRIMESTRE','2023-04-16','2023-06-12',1,NULL,NULL);
/*!40000 ALTER TABLE `periodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profils`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profils` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib_profil` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profils_lib_profil_unique` (`lib_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profils`
--

LOCK TABLES `profils` WRITE;
/*!40000 ALTER TABLE `profils` DISABLE KEYS */;
INSERT INTO `profils` VALUES (1,'instituteur',NULL,NULL,3);
INSERT INTO `profils` VALUES (2,'enseignant',NULL,NULL,3);
INSERT INTO `profils` VALUES (3,'parent',NULL,NULL,4);
INSERT INTO `profils` VALUES (4,'eleve',NULL,NULL,6);
INSERT INTO `profils` VALUES (5,'personnel admin',NULL,NULL,5);
INSERT INTO `profils` VALUES (6,'personnel_school',NULL,NULL,5);
INSERT INTO `profils` VALUES (7,'admin',NULL,NULL,2);
INSERT INTO `profils` VALUES (8,'super_admin',NULL,NULL,1);
INSERT INTO `profils` VALUES (9,'accountant',NULL,NULL,5);
/*!40000 ALTER TABLE `profils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_sate` tinyint(1) NOT NULL,
  `menu_id` bigint unsigned NOT NULL,
  `profil_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `roles_menu_id_foreign` (`menu_id`),
  KEY `roles_profil_id_foreign` (`profil_id`),
  CONSTRAINT `roles_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `roles_profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (47,1,2,8,NULL,NULL);
INSERT INTO `roles` VALUES (48,1,3,8,NULL,NULL);
INSERT INTO `roles` VALUES (49,1,4,8,NULL,NULL);
INSERT INTO `roles` VALUES (50,1,5,8,NULL,NULL);
INSERT INTO `roles` VALUES (51,1,6,8,NULL,NULL);
INSERT INTO `roles` VALUES (52,1,7,8,NULL,NULL);
INSERT INTO `roles` VALUES (53,1,8,8,NULL,NULL);
INSERT INTO `roles` VALUES (54,1,9,8,NULL,NULL);
INSERT INTO `roles` VALUES (55,1,10,8,NULL,NULL);
INSERT INTO `roles` VALUES (56,1,11,8,NULL,NULL);
INSERT INTO `roles` VALUES (57,1,12,8,NULL,NULL);
INSERT INTO `roles` VALUES (58,1,13,8,NULL,NULL);
INSERT INTO `roles` VALUES (59,1,14,8,NULL,NULL);
INSERT INTO `roles` VALUES (60,1,15,8,NULL,NULL);
INSERT INTO `roles` VALUES (61,1,16,8,NULL,NULL);
INSERT INTO `roles` VALUES (62,1,17,8,NULL,NULL);
INSERT INTO `roles` VALUES (63,1,18,8,NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seance_matieres`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seance_matieres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre_seance` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_seance` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matiere_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_seance` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbr_heure_seance` int DEFAULT NULL,
  `classe_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `seance_matieres_matiere_id_foreign` (`matiere_id`),
  KEY `seance_matieres_classe_id_foreign` (`classe_id`),
  CONSTRAINT `seance_matieres_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`),
  CONSTRAINT `seance_matieres_matiere_id_foreign` FOREIGN KEY (`matiere_id`) REFERENCES `matieres` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seance_matieres`
--

LOCK TABLES `seance_matieres` WRITE;
/*!40000 ALTER TABLE `seance_matieres` DISABLE KEYS */;
INSERT INTO `seance_matieres` VALUES (1,'LIMITES ET CONTINUITES',NULL,3,NULL,NULL,'2022-09-10',4,59);
INSERT INTO `seance_matieres` VALUES (2,'LES CIRCUITS ELECTRIQUES',NULL,12,NULL,NULL,'2022-09-10',4,59);
INSERT INTO `seance_matieres` VALUES (3,'Le vote et la participation du citoyen à la vie de la nation',NULL,16,NULL,NULL,'2022-09-10',2,62);
INSERT INTO `seance_matieres` VALUES (4,'Comportements, mouvement et système nerveux',NULL,10,NULL,NULL,'2022-09-10',4,25);
INSERT INTO `seance_matieres` VALUES (5,'ETUDE D OEUVRE LITTERAIRE',NULL,1,NULL,NULL,'2022-09-10',4,25);
INSERT INTO `seance_matieres` VALUES (6,'TYPE DE SAUTS',NULL,11,NULL,NULL,'2022-09-10',2,25);
INSERT INTO `seance_matieres` VALUES (7,'TYPE DE SAUTS',NULL,11,NULL,NULL,'2022-09-10',2,20);
INSERT INTO `seance_matieres` VALUES (8,'TYPE DE SAUTS',NULL,11,NULL,NULL,'2022-09-10',2,22);
INSERT INTO `seance_matieres` VALUES (9,'TYPE DE SAUTS',NULL,11,NULL,NULL,'2022-09-10',2,23);
INSERT INTO `seance_matieres` VALUES (10,'TYPE DE SAUTS',NULL,11,NULL,NULL,'2022-09-12',1,26);
INSERT INTO `seance_matieres` VALUES (11,'TYPE DE SAUTS',NULL,11,NULL,NULL,'2022-09-12',1,14);
INSERT INTO `seance_matieres` VALUES (12,'Les temps',NULL,2,NULL,NULL,'2022-09-12',2,20);
INSERT INTO `seance_matieres` VALUES (13,'Les temps',NULL,10,NULL,NULL,'2022-09-12',2,25);
INSERT INTO `seance_matieres` VALUES (14,'Mouvements et interactions',NULL,12,NULL,NULL,'2022-09-12',4,62);
INSERT INTO `seance_matieres` VALUES (15,'Mouvements et interactions',NULL,12,NULL,NULL,'2022-09-12',4,23);
INSERT INTO `seance_matieres` VALUES (16,'Organisation et gestion de données – Fonctions',NULL,3,NULL,NULL,'2022-09-15',4,25);
INSERT INTO `seance_matieres` VALUES (17,'Organisation et gestion de données – Fonctions',NULL,3,NULL,NULL,'2022-09-26',4,25);
INSERT INTO `seance_matieres` VALUES (18,'Les signaux',NULL,19,NULL,NULL,'2022-09-22',4,26);
INSERT INTO `seance_matieres` VALUES (19,'conscience, inconscience',NULL,18,NULL,NULL,'2022-09-27',2,59);
INSERT INTO `seance_matieres` VALUES (20,NULL,NULL,3,NULL,NULL,'2022-09-27',2,59);
INSERT INTO `seance_matieres` VALUES (21,NULL,NULL,10,NULL,NULL,'2022-10-03',4,25);
INSERT INTO `seance_matieres` VALUES (22,NULL,NULL,20,NULL,NULL,'2022-10-06',4,26);
INSERT INTO `seance_matieres` VALUES (23,NULL,NULL,20,NULL,NULL,'2022-10-10',4,14);
INSERT INTO `seance_matieres` VALUES (24,NULL,NULL,3,NULL,NULL,'2022-11-10',4,37);
INSERT INTO `seance_matieres` VALUES (25,NULL,NULL,3,NULL,NULL,'2023-01-10',4,59);
INSERT INTO `seance_matieres` VALUES (26,NULL,NULL,12,NULL,NULL,'2023-01-10',4,59);
INSERT INTO `seance_matieres` VALUES (27,NULL,NULL,16,NULL,NULL,'2023-09-10',2,62);
INSERT INTO `seance_matieres` VALUES (28,NULL,NULL,10,NULL,NULL,'2023-01-11',4,25);
INSERT INTO `seance_matieres` VALUES (29,NULL,NULL,1,NULL,NULL,'2023-01-11',4,25);
INSERT INTO `seance_matieres` VALUES (30,NULL,NULL,11,NULL,NULL,'2023-01-16',2,25);
INSERT INTO `seance_matieres` VALUES (31,NULL,NULL,11,NULL,NULL,'2023-01-17',2,20);
INSERT INTO `seance_matieres` VALUES (32,NULL,NULL,11,NULL,NULL,'2023-01-17',2,22);
INSERT INTO `seance_matieres` VALUES (33,NULL,NULL,11,NULL,NULL,'2023-01-18',2,23);
INSERT INTO `seance_matieres` VALUES (34,NULL,NULL,11,NULL,NULL,'2023-01-19',1,26);
INSERT INTO `seance_matieres` VALUES (35,NULL,NULL,11,NULL,NULL,'2023-02-19',1,14);
INSERT INTO `seance_matieres` VALUES (36,NULL,NULL,2,NULL,NULL,'2023-02-12',2,20);
INSERT INTO `seance_matieres` VALUES (37,NULL,NULL,10,NULL,NULL,'2023-02-12',2,25);
INSERT INTO `seance_matieres` VALUES (38,NULL,NULL,12,NULL,NULL,'2023-02-12',4,62);
INSERT INTO `seance_matieres` VALUES (39,NULL,NULL,12,NULL,NULL,'2023-02-12',4,23);
INSERT INTO `seance_matieres` VALUES (40,NULL,NULL,3,NULL,NULL,'2023-02-15',4,25);
INSERT INTO `seance_matieres` VALUES (41,NULL,NULL,3,NULL,NULL,'2023-03-26',4,25);
INSERT INTO `seance_matieres` VALUES (42,NULL,NULL,19,NULL,NULL,'2023-03-22',4,26);
INSERT INTO `seance_matieres` VALUES (43,NULL,NULL,18,NULL,NULL,'2023-03-27',2,59);
INSERT INTO `seance_matieres` VALUES (44,NULL,NULL,3,NULL,NULL,'2023-03-27',2,59);
INSERT INTO `seance_matieres` VALUES (45,NULL,NULL,10,NULL,NULL,'2023-03-03',4,25);
INSERT INTO `seance_matieres` VALUES (46,NULL,NULL,20,NULL,NULL,'2023-03-06',4,26);
INSERT INTO `seance_matieres` VALUES (47,NULL,NULL,20,NULL,NULL,'2023-03-10',4,14);
INSERT INTO `seance_matieres` VALUES (48,NULL,NULL,3,NULL,NULL,'2023-03-10',4,37);
INSERT INTO `seance_matieres` VALUES (49,NULL,NULL,3,NULL,NULL,'2023-04-10',4,59);
INSERT INTO `seance_matieres` VALUES (50,NULL,NULL,12,NULL,NULL,'2023-04-10',4,59);
INSERT INTO `seance_matieres` VALUES (51,NULL,NULL,16,NULL,NULL,'2023-04-10',2,62);
INSERT INTO `seance_matieres` VALUES (52,NULL,NULL,10,NULL,NULL,'2023-04-11',4,25);
INSERT INTO `seance_matieres` VALUES (53,NULL,NULL,1,NULL,NULL,'2023-04-11',4,25);
INSERT INTO `seance_matieres` VALUES (54,NULL,NULL,11,NULL,NULL,'2023-04-16',2,25);
INSERT INTO `seance_matieres` VALUES (55,NULL,NULL,11,NULL,NULL,'2023-04-17',2,20);
INSERT INTO `seance_matieres` VALUES (56,NULL,NULL,11,NULL,NULL,'2023-04-17',2,22);
INSERT INTO `seance_matieres` VALUES (57,NULL,NULL,11,NULL,NULL,'2023-04-18',2,23);
INSERT INTO `seance_matieres` VALUES (58,NULL,NULL,11,NULL,NULL,'2023-04-19',1,26);
INSERT INTO `seance_matieres` VALUES (59,NULL,NULL,11,NULL,NULL,'2023-05-19',1,14);
INSERT INTO `seance_matieres` VALUES (60,NULL,NULL,2,NULL,NULL,'2023-05-12',2,20);
INSERT INTO `seance_matieres` VALUES (61,NULL,NULL,10,NULL,NULL,'2023-05-12',2,25);
INSERT INTO `seance_matieres` VALUES (62,NULL,NULL,12,NULL,NULL,'2023-05-12',4,62);
INSERT INTO `seance_matieres` VALUES (63,NULL,NULL,12,NULL,NULL,'2023-05-12',4,23);
INSERT INTO `seance_matieres` VALUES (64,NULL,NULL,3,NULL,NULL,'2023-05-15',4,25);
INSERT INTO `seance_matieres` VALUES (65,NULL,NULL,3,NULL,NULL,'2023-06-26',4,25);
INSERT INTO `seance_matieres` VALUES (66,NULL,NULL,19,NULL,NULL,'2024-10-11',4,26);
INSERT INTO `seance_matieres` VALUES (67,NULL,NULL,18,NULL,NULL,'2023-06-27',2,59);
INSERT INTO `seance_matieres` VALUES (68,NULL,NULL,3,NULL,NULL,'2023-06-27',2,59);
INSERT INTO `seance_matieres` VALUES (69,NULL,NULL,10,NULL,NULL,'2023-06-06',4,25);
INSERT INTO `seance_matieres` VALUES (70,NULL,NULL,20,NULL,NULL,'2023-06-06',4,26);
INSERT INTO `seance_matieres` VALUES (71,NULL,NULL,20,NULL,NULL,'2023-06-10',4,14);
INSERT INTO `seance_matieres` VALUES (72,NULL,NULL,3,NULL,NULL,'2023-06-10',4,37);
/*!40000 ALTER TABLE `seance_matieres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `series`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `series` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `serie_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cycle_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `series_cycle_id_foreign` (`cycle_id`),
  CONSTRAINT `series_cycle_id_foreign` FOREIGN KEY (`cycle_id`) REFERENCES `cycles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `series`
--

LOCK TABLES `series` WRITE;
/*!40000 ALTER TABLE `series` DISABLE KEYS */;
INSERT INTO `series` VALUES (1,'A',3,NULL,NULL);
INSERT INTO `series` VALUES (2,'B',3,NULL,NULL);
INSERT INTO `series` VALUES (3,'C',3,NULL,NULL);
INSERT INTO `series` VALUES (4,'D',3,NULL,NULL);
INSERT INTO `series` VALUES (5,'E',3,NULL,NULL);
/*!40000 ALTER TABLE `series` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'current_session','2022-2023',NULL,NULL);
INSERT INTO `settings` VALUES (2,'school_code_ref','ECI1569',NULL,NULL);
INSERT INTO `settings` VALUES (3,'school_name','COLLEGE ANADOR YOPOUGON',NULL,NULL);
INSERT INTO `settings` VALUES (4,'term_ends','7/10/2018',NULL,NULL);
INSERT INTO `settings` VALUES (5,'term_begins','7/10/2018',NULL,NULL);
INSERT INTO `settings` VALUES (6,'school_phone','+225 27 23 46 47 95',NULL,NULL);
INSERT INTO `settings` VALUES (7,'school_address','18B North Central Park, Behind Central Square Tourist Center',NULL,NULL);
INSERT INTO `settings` VALUES (8,'school_email','cjacademy@cj.com',NULL,NULL);
INSERT INTO `settings` VALUES (9,'schoo_type','collège',NULL,NULL);
INSERT INTO `settings` VALUES (10,'Statut_juridique','Etablissement',NULL,NULL);
INSERT INTO `settings` VALUES (11,'email_pass','',NULL,NULL);
INSERT INTO `settings` VALUES (12,'lock_exam','0',NULL,NULL);
INSERT INTO `settings` VALUES (13,'school_logo','',NULL,NULL);
INSERT INTO `settings` VALUES (14,'bp','13 BP 2203',NULL,NULL);
INSERT INTO `settings` VALUES (15,'site_internet','anadoryopougon@aviso.ci',NULL,NULL);
INSERT INTO `settings` VALUES (16,'DRENET_DDENET','ABIDJAN 3',NULL,NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_evaluations`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_evaluations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_te` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_evaluations`
--

LOCK TABLES `type_evaluations` WRITE;
/*!40000 ALTER TABLE `type_evaluations` DISABLE KEYS */;
INSERT INTO `type_evaluations` VALUES (1,'INTERROGATION ECRITE',NULL,NULL);
INSERT INTO `type_evaluations` VALUES (2,'INTERROGATION ORALE',NULL,NULL);
INSERT INTO `type_evaluations` VALUES (3,'DEVOIR DE CLASSE',NULL,NULL);
INSERT INTO `type_evaluations` VALUES (4,'DEVOIR DE NIVEAU',NULL,NULL);
INSERT INTO `type_evaluations` VALUES (5,'EXPOSER',NULL,NULL);
INSERT INTO `type_evaluations` VALUES (6,'TRAVAIL DE RECHERCHE',NULL,NULL);
/*!40000 ALTER TABLE `type_evaluations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat_user` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_connected` tinyint(1) NOT NULL DEFAULT '0',
  `last_login_at` datetime DEFAULT NULL,
  `last_logout_at` datetime DEFAULT NULL,
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int unsigned DEFAULT NULL,
  `updated_by` int unsigned DEFAULT NULL,
  `created_by` int unsigned DEFAULT NULL,
  `matricule` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`),
  UNIQUE KEY `users_matricule_unique` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Neal Moore','Rodriguez','bartoletti.addie@example.net','Féminin','users/FBXAUXIEQ5.png','71319 Macie Prairie Apt. 688\nNew Esmeraldatown, MI 91230-7636','1-346-949-0233','07895562306',1,'2022-08-17 15:48:24','$2y$10$VuSm4M3IoBEZjiCS9W9poO3GL0qXODKAWlZqkEFSlf4H5L4z7y4Hy','GNiBH0mFDG','2022-08-17 15:48:26','2022-09-26 18:15:38',0,'2022-09-26 19:28:45','2022-09-26 20:15:38','127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (2,'Mose Quitzon','Pouros','dayton.dickinson@example.org','Masculin','default_user_image/images/user.png','66331 Krajcik Turnpike Suite 949\nLake Lillie, NY 64649','620-628-4091','1-541-461-7735',0,'2022-08-17 15:48:26','$2y$10$tMICZNa1ZT7DL.IdPC3uJ.sVrVbMSa6lpYYnokD/XGZYeKu52WUMa','83PZ29SZzS','2022-08-17 15:48:28','2022-08-17 15:48:28',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (3,'Mr. Lowell Harvey DDS','Carter','gregoria42@example.com','Féminin','default_user_image/images/user.png','10232 Johanna Islands Suite 805\nNorth Gisselleville, NM 06487','925-782-0769','+1.620.502.1402',0,'2022-08-17 15:48:26','$2y$10$8W4fEQyzqiuJlhArPnd36O6fEDHYaof909hBRu8iq9j7if1Ygd0Wq','fI5fx5gd8V','2022-08-17 15:48:32','2022-08-17 15:48:32',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (4,'Mr. Clifton Shanahan','Thiel','agreen@example.org','Masculin','default_user_image/images/user.png','4503 D\'angelo Glens\nNorth Mabelleport, MO 70205','(341) 906-9223','(850) 789-3322',1,'2022-08-17 15:48:26','$2y$10$ksbhRWUuQa4QmdK2NfJcx.6kDMoXOGEiLySy6ZQRtibmf2Wtmouw.','KFFhHFDWD8','2022-08-17 15:48:33','2022-08-17 15:48:33',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (5,'Devan Trantow','Gibson','vtoy@example.net','Féminin','default_user_image/images/user.png','1635 Irwin Vista Suite 313\nGraciebury, WA 12542-2103','+1-458-586-5848','346.317.0193',1,'2022-08-17 15:48:26','$2y$10$Hq6cOiNHxoY2.ZzAVdSaeucbeFf8wMtpnYZu4SRyKRgsRRoWhLwO2','fHDjE74Nc0','2022-08-17 15:48:33','2022-08-17 15:48:33',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (6,'Prof. Friedrich Bradtke','Borer','medhurst.gretchen@example.net','Féminin','default_user_image/images/user.png','8145 Weissnat Divide\nNorth Dylanside, WI 55086','878-405-0375','+1.469.442.7554',1,'2022-08-18 06:08:24','$2y$10$xSSiG3sNxOwwjsuLrsthVu0Jjbnbm7glids5XwtNCoaWgI379BRnK','O7FN7jA990','2022-08-18 06:08:24','2022-08-18 06:08:24',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (7,'Dr. Coby Hammes IV','Crist','ttromp@example.org','Masculin','default_user_image/images/user.png','192 Satterfield Springs\nNorth Maynard, MD 03280','1-678-716-1938','+1-463-424-7067',0,'2022-08-18 06:08:24','$2y$10$hjj.upCE9qPpS7NR5WOyFeiVwRQocPOWAigW9PoWCBR.19iT6CY4.','5jUoASVKT3','2022-08-18 06:08:25','2022-08-18 06:08:25',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (8,'Emory Greenfelder','Von','herminio.prohaska@example.com','Féminin','default_user_image/images/user.png','62739 Moore Square\nRusselstad, NM 45752','+1 (754) 835-0299','248.932.0216',0,'2022-08-18 06:08:24','$2y$10$oJBsgoPGFmXEzi5uNtr1/uphWpnae2GrM.WWBCrv.MV0OkZx0H5pW','RCtaMnpDbo','2022-08-18 06:08:25','2022-08-18 06:08:25',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (9,'Trace Hodkiewicz','Lueilwitz','huel.nona@example.com','Féminin','default_user_image/images/user.png','7220 Schulist Garden\nWildermanburgh, SD 03773','(361) 753-1660','1-463-966-7508',0,'2022-08-18 06:08:24','$2y$10$BO3m6E6CubzTmDTQtjqvSeZNSkl.jldiWz9coo8R7DDdzdIHF2Oq2','fDGUxkjgKC','2022-08-18 06:08:25','2022-08-18 06:08:25',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (10,'Toney Goyette','Renner','keven.altenwerth@example.net','Masculin','default_user_image/images/user.png','6572 Block Mountains Apt. 655\nJosefatown, NE 17934','(283) 545-6755','+14142717430',0,'2022-08-18 06:08:24','$2y$10$4aHrKtBMq1YFeyZ4O5FiJ.0S5v/6D/cqw4nVyTu4qcB/02bPoWrtS','ScLTObH3HF','2022-08-18 06:08:25','2022-08-18 06:08:25',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (11,'Mrs. Natalia Hettinger I','Dickens','runolfsdottir.kody@example.com','Masculin','default_user_image/images/user.png','1924 Jalon Freeway\nNew Bricemouth, TN 49196','+1.765.275.0811','978-606-1548',1,'2022-08-18 06:24:31','$2y$10$SRX2JqC.PPQUw6ywovIz2eAU3iBt21cljhKT3HMCf/P6bFyQgp19u','0DWhqK4nSj','2022-08-18 06:24:31','2022-08-18 06:24:31',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (12,'Fern Krajcik','McLaughlin','zion08@example.net','Féminin','default_user_image/images/user.png','907 Rowe Roads\nNew Jody, AZ 03923','+12405937225','516-888-3176',0,'2022-08-18 06:24:31','$2y$10$qHckiuHCtWr7p4FCqVld3OkoteNWj3zc4sy4oOPQZefk8bW5y7vLa','5BlkzAsu5G','2022-08-18 06:24:32','2022-08-18 06:24:32',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (13,'Amelie Murray','Walker','eloisa.gutmann@example.org','Féminin','default_user_image/images/user.png','697 Brakus Road Apt. 166\nSouth Darien, NV 81043','727.293.1190','+1-828-510-6687',1,'2022-08-25 07:00:37','$2y$10$0N2/qBxfqz79jrjXFLXJBOETpPxtbUfdGAx4B6XU7DtxuT3llcHXK','VSxoXhpXCW','2022-08-25 07:00:37','2022-08-25 07:00:37',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (14,'Eileen Quigley','Dickens','lolita42@example.com','Masculin','default_user_image/images/user.png','28336 Winona Valley Apt. 870\nLake Quentinfurt, NY 72886-1740','+1-740-522-5365','(380) 847-0442',1,'2022-08-25 07:00:37','$2y$10$bBYel2VIjMFaEL0c3dcU9eiDj4T2G0m8S18NGXWOZRDLq0gE3LPk2','DAkI6ChvNu','2022-08-25 07:00:37','2022-08-25 07:00:37',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (15,'Joelle Pfeffer','Donnelly','tom.jast@example.net','Masculin','default_user_image/images/user.png','1922 Fahey Manors\nKieranton, TN 09300','(828) 361-0289','518.223.5301',0,'2022-08-25 11:30:55','$2y$10$9WLRcI.zhqa9l8lGvWEhUuh89R3jwO8ZMn24quHufBAHf0pehl9Te','ByJpL1iMKv','2022-08-25 11:30:55','2022-08-25 11:30:55',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (16,'Barrett Hirthe','Effertz','kmacejkovic@example.org','Féminin','default_user_image/images/user.png','16045 Huels Station Suite 439\nWest Lourdesstad, NY 21248','+1 (352) 716-1133','+1-646-677-3241',0,'2022-08-25 11:30:55','$2y$10$1kr1iTpiNtXSXkBiknEF5.DWFC/XIKPru/hcB3LkNPdZvIEQ/ogZK','MSS9xP1Ikf','2022-08-25 11:30:55','2022-08-25 11:30:55',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (17,'coulibaly','porix james','porix1230385@gmail.com','Masculin','default_user_image/images/user.png',NULL,'0102120084','07895562306',NULL,NULL,'$2y$10$vo26TJyxEDvqYCnCVaj1o.488qRdm5umXOChTANH3LGmOpFZ5MT1K',NULL,'2022-08-26 07:06:35','2022-09-28 10:54:23',1,'2022-09-28 12:54:23','2022-09-25 22:51:17','127.0.0.1',NULL,NULL,NULL,NULL,'11030475L',NULL,'6RSO6M52LJ',NULL);
INSERT INTO `users` VALUES (19,'jens','stoltenberg','jens008@gmail.com','Masculin','default_user_image/images/user.png',NULL,'(+255) 0102120084',NULL,NULL,NULL,'$2y$10$q.l3TLEbCltZhsHeXfnPl.gKOLiIhFT3AFkPuxug/ww4vbPprg7qG',NULL,'2022-08-26 15:04:57','2022-08-26 15:04:57',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1230385L',NULL,'',NULL);
INSERT INTO `users` VALUES (20,'Miss Marilou Spinka IV','White','fnitzsche@example.org','Masculin','default_user_image/images/user.png','49494 Ratke Drives\nWest Kaelynville, OH 61410','1-269-619-2062','+1-347-413-5497',0,'2022-08-30 07:43:12','$2y$10$1i4Ab1IRieJHUbmI3/qV2eQUu1eG.q.p185ZLHkM8YC5Fr6gpCONi','EEluiYawnx','2022-08-30 07:43:13','2022-08-30 07:43:13',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (21,'Jamie Little','Erdman','hayes.zita@example.com','Masculin','default_user_image/images/user.png','88762 Ward Inlet\nEast Glen, KS 21878','386-577-1148','(786) 833-3065',0,'2022-08-30 07:43:12','$2y$10$9dFUPMo9XVFNTP387sz9muQtfjnZx5OO8gZZnEPwI8Wt2Tf38kTaO','J6RXnDhAyh','2022-08-30 07:43:13','2022-08-30 07:43:13',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (22,'Elfrieda Vandervort','Koch','rogelio64@example.com','Féminin','default_user_image/images/user.png','50090 King Estate\nRunolfsdottirburgh, NE 98174','(281) 496-6130','+1-440-601-3822',0,'2022-08-30 07:43:12','$2y$10$sMZ7lkY6lFO6IFDZlQxgVuqcDSqHDNrmIdljy3LPwYukTkmLyqxrG','48ZUemdhK7','2022-08-30 07:43:13','2022-08-30 07:43:13',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (23,'Kyla Ward','Nikolaus','khane@example.com','Masculin','default_user_image/images/user.png','845 Nikko Skyway\nNew Glen, IL 87051','+1 (631) 660-6709','817.262.1609',0,'2022-08-30 07:43:12','$2y$10$Wbu2jTRZH6Xc/5qHgnYTfOSXSce2A1cizejF4V4p49cT47jTUoQVy','HdQJn5aQp4','2022-08-30 07:43:14','2022-08-30 07:43:14',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (24,'Hector Simonis','Considine','heath.sawayn@example.org','Féminin','default_user_image/images/user.png','487 Marc Ways\nLeschshire, WV 84905','(480) 334-3574','1-443-617-9451',1,'2022-08-30 07:43:12','$2y$10$9QKLGB6EqSAFMgOYQgC4QepGrNqxg9b.Ri960jzzq.0Xa2CSk65/e','xqq5bXK7aP','2022-08-30 07:43:14','2022-08-30 07:43:14',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (25,'Dr. Milton Hagenes IV','Sipes','joanie12@example.com','Féminin','default_user_image/images/user.png','2095 Noemie Manor\nCharlesview, ND 38645','+1-763-754-1186','(984) 817-1918',1,'2022-08-30 07:43:12','$2y$10$ZCyAP.F2.psbb9c4k4UohOor.OBdlMQ4qJ28eWObE3mfVMKLerg7e','vRexeODvXW','2022-08-30 07:43:14','2022-08-30 07:43:14',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (26,'Ali Kub Jr.','Bartell','vladimir04@example.net','Féminin','default_user_image/images/user.png','20054 Daugherty Field Apt. 761\nHilperthaven, OK 97034','+1 (816) 963-6132','+1 (404) 603-9769',0,'2022-08-30 07:43:12','$2y$10$S18yXvrg9Bv4bZ/sPL9MzeEvAqKuE9vQviDlqs4UcnUS63yaFqFwm','CUMRvLIzcj','2022-08-30 07:43:14','2022-08-30 07:43:14',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (27,'Sanford Runolfsdottir','Haag','abdullah52@example.com','Masculin','default_user_image/images/user.png','2542 Angus Villages Apt. 770\nLake Ahmadbury, MN 61464','(681) 328-9697','+1 (959) 875-7113',0,'2022-08-30 07:43:12','$2y$10$eySX4gmujf6UcWXA/9IHaO5rAXyqHY02q8Uf/KFGRO.JXEWfqvuiO','7vlm32wbDC','2022-08-30 07:43:14','2022-08-30 07:43:14',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (28,'Waldo Mante','Cole','edgar.mcglynn@example.com','Féminin','default_user_image/images/user.png','1555 Loren Ports Suite 177\nPort Troy, MS 93196-3084','(505) 263-6496','+1-563-519-2762',0,'2022-08-30 07:43:12','$2y$10$o0/ybdh3JN6Hlzi2zLjM1OGGFMk9KBKLEfqPCINblrrEsKcv3pY4a','ECUi42GiCe','2022-08-30 07:43:14','2022-08-30 07:43:14',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (29,'Alford Schoen','Schowalter','ewald73@example.com','Masculin','default_user_image/images/user.png','577 Gladys Radial\nSouth Odessa, KY 37747','1-660-532-9543','346.727.8696',1,'2022-08-30 07:43:12','$2y$10$zPFFBrgIDQLieUa16ryGBuR33T4U3QGLEf0D6BSFDjLuSW7GmeMPC','6hPogSgUgp','2022-08-30 07:43:14','2022-08-30 07:43:14',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (30,'Mr. Travis Prosacco MD','Daniel','lorine.kuhn@example.com','Féminin','default_user_image/images/user.png','4644 Hartmann Estates\nSouth Casey, WA 83522','231.838.0043','1-662-516-1257',0,'2022-08-30 07:43:13','$2y$10$kdnfMkebtBLnu8sfhX7O2umflLYQzz3986l3AJM9xm83mLx4xmoFG','8UK4rtP97O','2022-08-30 07:43:14','2022-08-30 07:43:14',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (31,'Dr. Orie Barrows','Kozey','brant48@example.net','Masculin','default_user_image/images/user.png','1241 Reilly Drives\nWest Ally, ID 33589','+1-952-402-4291','480-316-4414',0,'2022-08-30 07:43:13','$2y$10$BZwXDQtmH1qynPEucSOf/.YX3ZFIlAO17MkrP0xr96yyV.LiGRC.S','PURYsJEJkCxFhp7pGQOMYbzyXMaFvOwiHABIsy0hlx31dgC64ptigC76LpHY','2022-08-30 07:43:14','2022-09-23 11:36:48',1,'2022-09-23 13:36:48',NULL,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (32,'Dr. Danika Balistreri II','Kerluke','hildegard.roberts@example.net','Masculin','default_user_image/images/user.png','285 Dare Flats Suite 325\nSouth Ruben, TX 64548-6204','925-687-8409','+1-862-649-0500',1,'2022-08-30 07:43:13','$2y$10$o0Jxd9D1/ZZbjRxgIErbeO/WMQn5TQ2RuyvejNzIyubDTjzWvv2CK','63Is3naGzV','2022-08-30 07:43:14','2022-08-30 07:43:14',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (33,'Prof. Janie Gerhold','Bergstrom','miller.ludie@example.org','Féminin','default_user_image/images/user.png','344 Kraig Trafficway\nAimeeton, GA 87524-6909','959.605.6513','1-814-583-1742',0,'2022-08-30 07:43:13','$2y$10$QfQ2Vun1W0jlIYHzEX2RK.SYWvRi.ZB62QnQH9QEjDm2rzxpNi4ue','noQQRLPEZc','2022-08-30 07:43:14','2022-08-30 07:43:14',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (34,'test','register','ck1230385@gmail','Masculin',NULL,NULL,'(+255) 0584421638',NULL,NULL,NULL,'$2y$10$Sp9Gz8fAB55c4Kh.z.fGSOZaDWp4br1vAiV4P0wWE1izcXZf8muqC',NULL,'2022-09-02 08:37:30','2022-09-02 08:37:30',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'CK1230385',NULL,'',NULL);
INSERT INTO `users` VALUES (35,'Angelica Bogan','Boyle','lehner.blaise@example.com','Féminin','default_user_image/images/user.png','172 Anderson Skyway\nBrownton, OK 48030','+1.239.588.1962','929.535.2104',1,'2022-09-07 08:21:36','$2y$10$p0UP6wlMVlWPfLQw2XtJw.X1si0wxzDQYUWHlVqrmM9QkjgSXzQq2','rEXZL40p5v','2022-09-07 08:21:36','2022-09-07 08:21:36',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (36,'Nola Eichmann','Lehner','brakus.delilah@example.net','Masculin','default_user_image/images/user.png','7519 Kris Well\nEast Lilianafort, HI 28871-1705','412.342.3119','1-540-281-9683',0,'2022-09-07 08:21:36','$2y$10$IRB3H5ZiVNygHsb/ujpgX.yQkioRTPV8dfyBv03XzFL33Ups7k7mi','FuxILTV07f','2022-09-07 08:21:36','2022-09-07 08:21:36',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
INSERT INTO `users` VALUES (37,'Clementine Crona','Mante','halvorson.ines@example.com','Féminin','default_user_image/images/user.png','597 Weber Port Apt. 671\nKaileeview, OK 34079','303-887-4749','+1.321.812.6556',0,'2022-09-28 08:01:43','$2y$10$XHa./f/fBEJrvczQaBUTp.R2plAZCneYWFTMLFeeXG5PlraVWwmLS','qzkrMQPwVl','2022-09-28 08:01:44','2022-09-28 08:01:44',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'7NECQVCUEE',NULL);
INSERT INTO `users` VALUES (38,'Eve Mueller','Prosacco','runte.jordi@example.com','Féminin','default_user_image/images/user.png','72219 Wilford Plains Suite 422\nWest Amie, WI 50901-2948','262.723.1113','1-534-684-4312',0,'2022-09-28 08:01:43','$2y$10$A0W2QKZAJTaLynp3OdQu3.4EhPotVZguKex62gi3kAlDyZfS/k4gS','64qwhj5b4K','2022-09-28 08:01:49','2022-09-28 08:01:49',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'NDMWFBJYBL',NULL);
INSERT INTO `users` VALUES (39,'Earline Donnelly','Bruen','axel84@example.org','Féminin','default_user_image/images/user.png','9729 Hill Hollow Suite 735\nRatkebury, GA 35916','341-766-9432','+1-779-486-0226',0,'2022-09-28 08:01:43','$2y$10$yWI7AgmTM0pXrMlhFX01NuZ6kRgxTEJGF8tyZ1V9INBxlpnvLwxey','Q5ITtlcWqM','2022-09-28 08:01:49','2022-09-28 08:01:49',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'9ZPVY85FFS',NULL);
INSERT INTO `users` VALUES (40,'Miss Leora Hagenes DDS','Flatley','wilburn49@example.net','Masculin','default_user_image/images/user.png','879 Kshlerin View\nEmelieberg, IL 80426','(802) 993-3363','1-330-563-9152',1,'2022-09-28 08:01:43','$2y$10$R.EeheXzSln2eunnwVFuMO/1qbL7hKzboesvCw/U9xU59AzuJtyue','6BchWSxffW','2022-09-28 08:01:49','2022-09-28 08:01:49',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'HWAL7KXJOE',NULL);
INSERT INTO `users` VALUES (41,'Maurine Reichert','Kihn','lowe.kristin@example.com','Féminin','default_user_image/images/user.png','373 Smith Brook\nVincenzoshire, ID 99119','+1.240.444.9043','310.823.2838',0,'2022-09-28 08:01:43','$2y$10$Guh3dje6cC00PZD3IIN0g.WULLG6sLCgONqGjN0wy0pHyVJxpMjOq','LJd9LXgQhE','2022-09-28 08:01:50','2022-09-28 08:01:50',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4GMIWWWESS',NULL);
INSERT INTO `users` VALUES (42,'Miss Evalyn Kautzer','Wintheiser','francesca77@example.com','Féminin','default_user_image/images/user.png','80209 Breana Turnpike Apt. 577\nStromanfurt, KY 70897-6371','+1-517-390-1305','+1.253.626.1723',0,'2022-09-28 08:01:43','$2y$10$k1lKOJH.kDpImAqch0iaF.77lT18jvJRBUptLwGai4Z.nx2bhGXqa','DIsdZGcUmx','2022-09-28 08:01:51','2022-09-28 08:01:51',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'NCOBDVNKUI',NULL);
INSERT INTO `users` VALUES (43,'Herta Hoeger','Funk','queenie66@example.org','Féminin','default_user_image/images/user.png','22108 Santos Cliffs\nNorth Zellafurt, OK 80894','+14017467943','443.558.5710',0,'2022-09-28 08:01:44','$2y$10$1ptVylOQdqT5ynf4vxzzHOxe/cdap8Vvwe8iy.FX407wRYcnD5aeC','E5IkSx0xe7','2022-09-28 08:01:51','2022-09-28 08:01:51',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'JMIA0W0VAC',NULL);
INSERT INTO `users` VALUES (44,'Erik Bednar','Keeling','ishields@example.com','Masculin','default_user_image/images/user.png','3662 Nienow Branch Suite 823\nLake Josiahstad, HI 66688','346-263-9761','+1-640-338-2592',0,'2022-09-28 08:01:44','$2y$10$cjJbDVwqxvDdZu4M3iWoOucfI3Klg5pB3sGOvDGICteRgXXA6MDey','KDQQMxmHkg','2022-09-28 08:01:51','2022-09-28 08:01:51',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'LXSA5FZCEY',NULL);
INSERT INTO `users` VALUES (45,'Jeramy Johnson','Hoeger','kendrick05@example.net','Masculin','default_user_image/images/user.png','655 Elisabeth Forges Suite 075\nHomenickbury, VA 74596-2444','+1 (737) 866-9147','+1.862.504.4004',0,'2022-09-28 08:01:44','$2y$10$8A2OkNy/VrjnoYFY8KH2puFvvcwPPntjDXyVOVNiEEizRN9gaf4Hq','5YJVy6TpQ8','2022-09-28 08:01:52','2022-09-28 08:01:52',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TQYSWNATLD',NULL);
INSERT INTO `users` VALUES (46,'Hilario Kuhlman','Wiza','taya88@example.com','Masculin','default_user_image/images/user.png','869 Merle Roads\nEast Paula, CT 83364','+1-540-304-9233','260.798.2224',1,'2022-09-28 08:01:44','$2y$10$BGHTmfSkRT00LNvC2Vm2NOMd20ly3X//p2XJD0RZVXtfX5KipA6qS','IwXnTOqXua','2022-09-28 08:01:53','2022-09-28 08:01:53',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Y0BSB3FEYY',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `versement_scolarites`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `versement_scolarites` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `versement_id` bigint unsigned NOT NULL,
  `montant` int DEFAULT NULL,
  `avance` int DEFAULT NULL,
  `date_versement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eleve_id` bigint unsigned NOT NULL,
  `annee_scolaire_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `versement_scolarites_versement_id_foreign` (`versement_id`),
  KEY `versement_scolarites_eleve_id_foreign` (`eleve_id`),
  KEY `versement_scolarites_annee_scolaire_id_foreign` (`annee_scolaire_id`),
  CONSTRAINT `versement_scolarites_annee_scolaire_id_foreign` FOREIGN KEY (`annee_scolaire_id`) REFERENCES `annee_scolaires` (`id`),
  CONSTRAINT `versement_scolarites_eleve_id_foreign` FOREIGN KEY (`eleve_id`) REFERENCES `eleves` (`id`),
  CONSTRAINT `versement_scolarites_versement_id_foreign` FOREIGN KEY (`versement_id`) REFERENCES `versements` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `versement_scolarites`
--

LOCK TABLES `versement_scolarites` WRITE;
/*!40000 ALTER TABLE `versement_scolarites` DISABLE KEYS */;
INSERT INTO `versement_scolarites` VALUES (1,1,25000,NULL,'2022-10-05',5,1,NULL,NULL);
INSERT INTO `versement_scolarites` VALUES (2,1,50000,NULL,'2022-10-05',4,1,NULL,NULL);
INSERT INTO `versement_scolarites` VALUES (3,2,50000,NULL,'2022-11-05',4,1,NULL,NULL);
INSERT INTO `versement_scolarites` VALUES (4,3,30000,NULL,'2022-12-05',4,1,NULL,NULL);
/*!40000 ALTER TABLE `versement_scolarites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `versements`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `versements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib_vers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_versement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `versements`
--

LOCK TABLES `versements` WRITE;
/*!40000 ALTER TABLE `versements` DISABLE KEYS */;
INSERT INTO `versements` VALUES (1,'1er VERSEMENT',NULL,NULL,NULL);
INSERT INTO `versements` VALUES (2,'2eme VERSEMENT',NULL,NULL,NULL);
INSERT INTO `versements` VALUES (3,'3eme VERSEMENT',NULL,NULL,NULL);
INSERT INTO `versements` VALUES (4,'4eme VERSEMENT',NULL,NULL,NULL);
INSERT INTO `versements` VALUES (5,'5eme VERSEMENT',NULL,NULL,NULL);
/*!40000 ALTER TABLE `versements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'schoolmanagement'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-28 16:25:03
