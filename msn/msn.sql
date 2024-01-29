-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: msn
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administradores`
--

DROP DATABASE IF EXISTS `msn` ;

CREATE DATABASE `msn`;

USE `msn`;


DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk24_idx` (`usuario`),
  CONSTRAINT `fk24` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` VALUES (1,'juan','a94652aa97c7211ba8954dd15a3cf838');
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mensajes` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk1_idx` (`usuario`),
  KEY `fk23_idx` (`usuario`),
  CONSTRAINT `fk23` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes`
--

LOCK TABLES `mensajes` WRITE;
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
INSERT INTO `mensajes` VALUES (97,'hola','2022-02-10 11:54:10','juan'),(98,'hola','2022-02-11 12:10:04','juan'),(99,'hola','2022-02-11 12:37:21','juan'),(100,'hola','2022-02-11 12:41:19','manolo'),(101,'hola','2022-02-11 12:45:24','juan'),(102,'hola','2022-02-11 12:45:57','manolo'),(103,'hola','2022-02-11 14:04:55','manolo'),(104,'hola','2022-02-14 10:09:31','juan'),(105,'hola','2022-02-14 10:11:02','manolo'),(106,'hola','2022-02-14 10:22:29','juan'),(107,'prueba','2022-02-14 10:23:01','juan'),(108,'prueba2','2022-02-14 10:25:29','juan'),(109,'prueba3','2022-02-14 10:25:50','manolo'),(110,'papa','2022-02-14 10:26:15','manolo'),(111,'jeje','2022-02-14 10:26:38','manolo'),(112,'jeje','2022-02-14 10:26:47','juan'),(113,'jeje','2022-02-14 10:26:52','manolo'),(114,'hola alvaro','2022-02-14 10:29:19','juan'),(115,'el puto amo soy','2022-02-14 10:29:20','manolo'),(116,'xddd','2022-02-14 10:29:26','juan'),(117,'es la polla esto juan','2022-02-14 10:29:34','manolo'),(118,'esto esta cheto','2022-02-14 10:29:40','juan'),(119,'a','2022-02-14 10:29:55','manolo'),(120,'a','2022-02-14 10:32:00','manolo'),(121,'dç','2022-02-14 10:32:24','manolo'),(122,'','2022-02-14 10:32:56','juan'),(123,'a','2022-02-14 10:33:02','juan'),(124,'ñ','2022-02-14 10:33:02','manolo'),(125,'j','2022-02-14 10:33:38','manolo'),(126,'','2022-02-14 10:33:38','manolo'),(127,'','2022-02-14 10:33:38','manolo'),(128,'j','2022-02-14 10:33:38','manolo'),(129,'','2022-02-14 10:33:39','manolo'),(130,'','2022-02-14 10:33:39','manolo'),(131,'j','2022-02-14 10:33:39','manolo'),(132,'jj','2022-02-14 10:33:39','manolo'),(133,'j','2022-02-14 10:33:39','manolo'),(134,'j','2022-02-14 10:33:40','manolo'),(135,'j','2022-02-14 10:33:40','manolo'),(136,'j','2022-02-14 10:33:40','manolo'),(137,'j','2022-02-14 10:33:40','manolo'),(138,'j','2022-02-14 10:33:40','manolo'),(139,'','2022-02-14 10:33:41','manolo'),(140,'j','2022-02-14 10:33:41','manolo'),(141,'HOLA','2022-02-14 10:39:03','juan'),(142,'hola','2022-02-14 10:41:11','manolo'),(143,'hola alvaro','2022-02-14 10:41:28','juan'),(144,'soy energuia','2022-02-14 11:20:50','tuchulo13'),(145,'tengo 14 ','2022-02-14 11:21:06','juan'),(146,'me gustan las de 6','2022-02-14 11:21:18','tuchulo13'),(147,'yo tengo 5, te vale?','2022-02-14 11:21:35','manolo'),(148,'el pablo me come los huevos por debajo del culo sin limpiar','2022-02-14 11:21:50','tuchulo13'),(149,'si  claro','2022-02-14 11:21:55','juan'),(150,'sin duda','2022-02-14 11:22:08','manolo'),(151,'al pablo le gusta el albaro','2022-02-14 11:22:12','tuchulo13'),(152,'al dadidio le gusta el shuan','2022-02-14 11:22:37','manolo'),(153,'tu morenito 19 ha entrado al grupo','2022-02-14 11:22:39','tuchulo13'),(154,'tu morenito 19 le ha gustado el mensaje que le has enviado','2022-02-14 11:23:25','manolo'),(155,'foyar','2022-02-14 11:23:57','paco'),(156,'que te den pablo ','2022-02-14 11:24:10','manolo'),(157,'tuchulo13 me va a comer la poya y los gyuevos y la poila+','2022-02-14 11:24:36','paco'),(158,'tuchulo13 es un matao','2022-02-14 11:24:56','manolo'),(159,'xddd','2022-02-14 11:26:15','juan'),(160,'paco tienes una solicitud de amistad de manolo','2022-02-14 11:29:37','manolo'),(161,'paquito pacoi','2022-02-14 11:31:23','paco'),(162,'a','2022-02-14 11:37:56','cutie'),(163,'Hola chicos','2022-02-14 11:38:01','cutie'),(164,'alexfeo','2022-02-14 11:38:04','cutie'),(165,'hola','2022-02-14 11:41:11','cutie'),(167,'P','2022-02-14 12:03:27','juan'),(168,'hola','2022-02-16 11:46:41','juan');
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk23_idx` (`usuario`),
  KEY `fk25_idx` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'juan','juan',NULL),(41,'papa','0ac6cd34e2fac333bf0ee3cd06bdcf96',NULL),(42,'manolo','12cdb9b24211557ef1802bf5a875fd2c',NULL),(43,'dario','dario',NULL),(44,'juan','a94652aa97c7211ba8954dd15a3cf838',NULL),(45,'padre','41409f34ee49036ad153fa10b374747e',NULL),(46,'tuchulo13','f981af9f354ac9a573910adb5fe2fe15',NULL),(47,'paco','311020666a5776c57d265ace682dc46d',NULL),(48,'cutie','05f3672ba34409136aa71b8d00070d1b','cutie.png');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-16 11:56:06
