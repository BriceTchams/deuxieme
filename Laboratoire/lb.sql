-- MySQL dump 10.13  Distrib 5.7.36, for Win64 (x86_64)
--
-- Host: localhost    Database: laboratoire
-- ------------------------------------------------------
-- Server version	8.2.0

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
-- Table structure for table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrateur` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `deleted` int DEFAULT '0',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrateur`
--

LOCK TABLES `administrateur` WRITE;
/*!40000 ALTER TABLE `administrateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `effectuer`
--

DROP TABLE IF EXISTS `effectuer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `effectuer` (
  `date_examen` varchar(255) DEFAULT NULL,
  `id_patient` int NOT NULL,
  `id_laborantin` int NOT NULL,
  `id_examen` int NOT NULL,
  `deleted` int DEFAULT '0',
  PRIMARY KEY (`id_patient`,`id_laborantin`,`id_examen`),
  KEY `tb_effectuer_fkey1` (`id_examen`),
  KEY `tb_effectuer_fkey3` (`id_laborantin`),
  CONSTRAINT `tb_effectuer_fkey1` FOREIGN KEY (`id_examen`) REFERENCES `examen` (`id_examen`),
  CONSTRAINT `tb_effectuer_fkey2` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`),
  CONSTRAINT `tb_effectuer_fkey3` FOREIGN KEY (`id_laborantin`) REFERENCES `laborentain` (`id_laborantin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `effectuer`
--

LOCK TABLES `effectuer` WRITE;
/*!40000 ALTER TABLE `effectuer` DISABLE KEYS */;
/*!40000 ALTER TABLE `effectuer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examen`
--

DROP TABLE IF EXISTS `examen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examen` (
  `id_examen` int NOT NULL AUTO_INCREMENT,
  `id_famille` int DEFAULT NULL,
  `nom_examen` varchar(255) DEFAULT NULL,
  `resultat` varchar(255) DEFAULT NULL,
  `norme` varchar(255) DEFAULT NULL,
  `unite` varchar(255) DEFAULT NULL,
  `conclusion` varchar(255) DEFAULT NULL,
  `deleted` int DEFAULT '0',
  `montant` int DEFAULT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `tb_examen_fkey` (`id_famille`),
  CONSTRAINT `tb_examen_fkey` FOREIGN KEY (`id_famille`) REFERENCES `famille_examen` (`id_famille`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examen`
--

LOCK TABLES `examen` WRITE;
/*!40000 ALTER TABLE `examen` DISABLE KEYS */;
INSERT INTO `examen` VALUES (1,1,'dfd','','sdfs','sdfs','sdfsd',0,NULL),(3,NULL,NULL,'fggggrt',NULL,NULL,NULL,0,NULL),(4,NULL,NULL,NULL,NULL,'fggggrt',NULL,0,NULL),(5,1,'fgb','','bfg','','',0,NULL),(6,2,NULL,NULL,NULL,'fggggrt',NULL,0,NULL),(7,64,'sdfsd','','sdfsd','dfd','sdf',0,NULL),(8,64,'das','','sadsa','sdfsd','csc',0,NULL),(9,64,'das','','sadsa','sdfsd','csc',0,NULL),(10,1,'','','','','',0,NULL),(11,1,'xzxzc','','','','',0,NULL),(12,1,'xzxzcxz','','','','',0,NULL),(13,1,'xzxzcxz','','','','',0,NULL),(14,1,'xzxzcxz','','','','',0,NULL),(15,1,'','','','','',0,NULL),(16,1,'','','','','',0,NULL),(17,1,'xcv','','','xc','',0,NULL),(18,1,'dfvdf','','dfvdf','','',0,NULL),(19,1,'dfvdfm,','','dfvdf','','',0,NULL),(20,1,'','/kljklj','','','',0,NULL),(21,1,'xsa','saxas','','','',0,NULL),(22,1,'xsa','saxas','rtytr','','hrth',0,NULL),(23,1,'xsa','saxas456456456','rtytr','','hrth',0,NULL),(24,1,'nm,bbh','gfkgjhf','hgkhg','ijhgkkgk','yttjfgf',0,NULL),(25,1,'nm,bbh','gfkgjhf','hgkhg','ijhgkkgk','yttjfgf',0,NULL),(26,1,'nm,bbh','gfkgjhf','hgkhg','ijhgkkgk','yttjfgf',0,NULL),(27,1,'nm,bbh','gfkgjhf','hgkhg','ijhgkkgk','yttjfgf',0,NULL),(28,1,'nm,bbh','gfkgjhf','hgkhg','ijhgkkgk','yttjfgf',0,NULL),(29,23,'m,n,mnmn',',,mn,mnm,','.,momk',',,.m,.',',.m.,io',0,NULL),(30,64,'examen de sel ','positif','t23w','mlg','amelioration',0,NULL),(31,64,'jdfhgdf','dsf','dfv','12','vdsfv',0,NULL),(32,1,'ttt','scbvs','sbs','sgfbs','sbsg',0,1324);
/*!40000 ALTER TABLE `examen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `famille_examen`
--

DROP TABLE IF EXISTS `famille_examen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `famille_examen` (
  `id_famille` int NOT NULL AUTO_INCREMENT,
  `nom_famille` varchar(255) DEFAULT NULL,
  `deleted` int DEFAULT '0',
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_famille`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `famille_examen`
--

LOCK TABLES `famille_examen` WRITE;
/*!40000 ALTER TABLE `famille_examen` DISABLE KEYS */;
INSERT INTO `famille_examen` VALUES (1,'sadas',0,'sadsad'),(2,'sadas',0,'sadsad'),(3,'sadas',0,'sadsad'),(4,'sadas',0,'sadsad'),(5,'sadasmnb',0,'<b>sadsad,n,mn</b>'),(6,'sadasmnb',0,'<p style=\"text-align: center;\"><b style=\"text-align: center;\">sadsad,n,mn</b></p>'),(7,'genie informatique7',0,'<i>wsadsad</i>'),(8,'genie informatique7',0,'jbmnvbdfjhlv'),(9,'dfsdf',0,'fdsf'),(10,'dfsdf',0,'fdsf'),(11,'dfsdf',0,'fdsf'),(12,'dfsdf',0,'fdsf'),(13,'sdfdssd',0,'sdf'),(14,'sdfdssd',0,'sdf'),(15,'sdfdssd',0,'sdf'),(16,'jhgjf',0,'jhfjdhgjk'),(17,'jhgjf',0,'jhfjdhgjk'),(18,',mk',0,'kmlk'),(19,',mk',0,'kmkl'),(20,'rtytr',0,'ytr'),(21,'',0,''),(22,'genie informatique7',0,'xcvcx'),(23,'genie informatique7',0,'xcvcxdsfdsf'),(24,'genie informatique7',0,'ewr'),(25,'genie informatique7',0,'mnmb'),(26,'genie informatique7',0,'<b>qwewqe</b>'),(27,'genie informatique',0,'<b>qwewqe</b>'),(28,'genie informatique7',0,'cx'),(29,'genie informatique',0,'cx'),(30,'dsfdsf',0,'brice&nbsp;'),(31,'dsfdssdds',0,''),(32,'gfdg',0,'fdbfd'),(33,'gfdg',0,'fdbfd'),(34,'brice tchamou',0,'<b>mfdbvmbfadljvkbafdmnvbfladb</b>'),(35,'mn,n',0,'sdfsd'),(36,'mn,ndfkfjd',0,'sdfsddfhgkjfd'),(37,'mn,ndfkfjd',0,'sdfsddfhgkjfd'),(38,'',0,'<p style=\"text-align: right;\"><b style=\"text-align: right;\">bonjour</b></p>'),(39,'nmbmnbn',0,'nbn'),(40,'nmbmnbn',0,'<p style=\"text-align: center;\"><b style=\"text-align: center;\">nbnhjzgdffgdggdfgf</b></p>'),(41,'fdssddsv',0,'<p style=\"text-align: center;\"><b style=\"text-align: center;\">dfvdfvfdvfd</b></p>'),(42,'vfvf',0,'42'),(43,'ghfghfhg',0,'fghffghfh'),(44,'bm',0,'mnk'),(45,'bm',0,'mnk'),(46,'jhk',0,'jhgjg'),(47,'jhk',0,'jhgjg'),(48,'jhk',0,'jhgjg'),(49,'jhk',0,'jhgjg'),(50,'jhgj',0,'jhgjh'),(51,'c,mbnklgfsnbgsfbnkk',0,'jhgjhksgfb'),(52,'c,mbnklgfsnbgsfbnkkvcmnb',0,'fbmnvcmbnvc'),(53,'c,mbnklgfsnbgsfbnkkvcmnb',0,'fbmnvcmbnvc'),(54,'c,mbnklgfsnbgsfbnkkvcmnbsdn,mm,vcxv',0,'fbmnvcmbnvccxm'),(55,'fgdf',0,'fgd'),(56,'genie telecom',0,'jhjk'),(57,'hjjhbhj',0,'jhjkbnm'),(58,'jhk',0,'kjhkj'),(59,'jhk',0,'kjhkj'),(60,'jhk',0,'kjhkj'),(61,'jhk',0,'kjhkj'),(62,'jhk',0,'kjhkj'),(63,'kklkj',0,'kjhkj'),(64,'biochimie',0,'djhkdsvkjds'),(65,'dcdscsd',0,'<b>djhkdsvkjdscds</b>'),(66,'genie informatique',0,'nmbmnbjkb'),(67,'mn,mnuihuihknjknkjnk',0,'nmbmnbjkbmmbm'),(68,'vvnmxcbmvbxcn',0,'<b><i>bbvcvnbcfhvfdkjmcbvnmbcjbhkjvchbvcnjkbck</i></b>'),(69,'genie telecom',0,'jhjhgjhgjhgj'),(70,'echographie',0,'<p style=\"text-align: center;\"><b style=\"text-align: center;\">jhdafgjadmnvbjahd</b></p>'),(71,'radiographie',0,'<p style=\"text-align: center;\"><span style=\"text-align: center;\">bvnmcbvbajlbvabvbaljfbvanvbvbjchv</span></p>'),(72,'xxycyxc',0,'<p style=\"text-align: center;\"><span style=\"text-align: center;\">xcxycxycy</span></p>'),(73,'cardiologie ',0,'examen du coeur&nbsp;'),(74,'',0,''),(75,'brice',0,''),(76,'brice',0,'mica'),(77,'brice',0,'mica'),(78,'dsf',0,'sdf'),(79,'dsf',0,'sdf'),(80,'',0,''),(81,'sadsad',0,'sadasd'),(82,'fbfg',0,'bfdgb'),(83,'fbfg',0,'bfdgb'),(84,'fbfg',0,'bfdgb'),(85,'',0,''),(86,'',0,''),(87,'ertre',0,'rty'),(88,'',0,'fsdf'),(89,'',0,'fsdf'),(90,'',0,'fsdf'),(91,'',0,''),(92,'',0,''),(93,'',0,''),(94,'Echographie',0,'verification des etats&nbsp;'),(95,'cxvbfx',0,'dfbdfb'),(96,'dfdag',0,'adfgadfg'),(97,'Echographie',0,'Pour les femmes'),(98,'btbt',0,'<b>xgdfgdfgd</b>');
/*!40000 ALTER TABLE `famille_examen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laborentain`
--

DROP TABLE IF EXISTS `laborentain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laborentain` (
  `id_laborantin` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `id_admin` int DEFAULT NULL,
  `deleted` int DEFAULT '0',
  PRIMARY KEY (`id_laborantin`),
  KEY `TB_LABO_FKEY` (`id_admin`),
  CONSTRAINT `TB_LABO_FKEY` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laborentain`
--

LOCK TABLES `laborentain` WRITE;
/*!40000 ALTER TABLE `laborentain` DISABLE KEYS */;
/*!40000 ALTER TABLE `laborentain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `id_patient` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(225) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `date_reception` date DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `prescripteur` varchar(255) DEFAULT NULL,
  `date_prelevement` date DEFAULT NULL,
  `deleted` int DEFAULT '0',
  PRIMARY KEY (`id_patient`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES (18,'Tchamou','Brice','developpeur','2024-07-04','biologie','14','masculin','bafoussam','Dr jago','2024-07-26',0),(19,'Lopez','Youmbo','Developpeur','2018-01-13','Laboratoire','20','masculin','Mbouda','Dr Fok0','2024-07-20',0),(20,'Fokou','Kevin','reseauticien','2024-07-11','laboratoire','23','masculin','sdcsd','Dr sscsd','2024-07-10',0),(21,'Fokou','Kevin','reseauticien','2024-07-11','laboratoire','23','masculin','sdcsd','Dr sscsd','2024-07-10',0),(22,'Kengne','joel','expert comptable','2024-07-11','laboratoire','22','masculin','Douala','Dr Joshua','2024-07-12',0),(23,'dsa','sdd','asd','2024-07-02','sdc','12','masculin','asd','wqdqw','2024-07-24',0),(24,'Mbopda','Andre','Eleveur','2024-07-17','Laboratoire','23','masculin','699324312','Dr fsdfs','2024-07-18',0);
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-20  8:02:11
