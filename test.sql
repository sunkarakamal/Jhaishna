CREATE DATABASE  IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `test`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `form` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form`
--

LOCK TABLES `form` WRITE;
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
INSERT INTO `form` VALUES ('Gopi raju','gopi@gmail.com','07804880141','hloo'),('Gopi raju','gopi@gmail.com','07804880141','hloo'),('test','narmadar710@gmail.com','06302564857','test'),('test','narmadar710@gmail.com','06302564857','hii'),('test','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('112','11@abc.omc','8888888888','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','test\r\n'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gopi raju','gopi@gmail.com','07804880141','hii'),('Gopi raju','gopi@gmail.com','07804880141','hii'),('Gopi raju','gopi@gmail.com','07804880141','nameste'),('Gopi raju','gopi@gmail.com','07804880141','hii'),('Gopi raju','gopi@gmail.com','07804880141','hii'),('Gopi raju','gopi@gmail.com','07804880141','hii'),('Gajjala Narmada','narmadar710@gmail.com','06302564857','hii'),('Gajjala Narmada','kk@abc.com','999','jj'),('Gajjala Narmada','kk@abc.com','999455678','hii');
/*!40000 ALTER TABLE `form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL,
  `requirement` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES ('vijay','vijay@gmail.com','07804880141','Client Portals, UI & UX','test'),('ravi','ravi@gmail.com','07804880141','Oracle Communication Consulting, Tailered Billing Solution','test');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'test'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-20 12:29:38
