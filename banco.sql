CREATE DATABASE  IF NOT EXISTS `tcc_mpx` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `tcc_mpx`;
-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: tcc_mpx
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT,
  `nomep` varchar(220) NOT NULL,
  `descp` varchar(220) NOT NULL,
  `fotop` varchar(10000) NOT NULL,
  `instagramp` varchar(220) NOT NULL,
  `facebookp` varchar(220) NOT NULL,
  `twitterp` varchar(220) NOT NULL,
  `telefonep` int(100) NOT NULL,
  PRIMARY KEY (`idperfil`),
  UNIQUE KEY `NomeUser` (`nomep`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (2,'','','.','instagram','facebook','twitter',99227431);
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pinturas`
--

DROP TABLE IF EXISTS `pinturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pinturas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Autor` varchar(220) CHARACTER SET utf8mb4 NOT NULL,
  `Nome_Foto` varchar(220) CHARACTER SET utf8mb4 NOT NULL,
  `Desc_Foto` varchar(220) CHARACTER SET utf8mb4 NOT NULL,
  `Arquivo_Imagem` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `Criado` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pinturas`
--

LOCK TABLES `pinturas` WRITE;
/*!40000 ALTER TABLE `pinturas` DISABLE KEYS */;
INSERT INTO `pinturas` VALUES (52,'feloz','Carro','Carrinho vrum vrum','Carro.jpg','2021-09-27 19:32:48'),(49,'Gustavo','Kachinho pequenino','Sei lÃ¡','Kachinho pequenino.jpg','2021-09-26 21:16:20'),(50,'Robson_Xpro','Perna Longa','Pegati meno meu dente de ouro\r\n','Perna Longa.jpg','2021-09-27 18:47:26'),(53,'feloz','Pika blindada','As pink blinders','Pika blindada.jpg','2021-09-27 19:48:45'),(51,'feloz','Carro','carrinho vrum vrum','Carro.jpg','2021-09-27 19:27:35'),(48,'Gustavo','Pika blindada','NÃ³s somos os Pink blinders','Pika blindada.jpg','2021-09-26 21:14:33'),(47,'JoaoZin','Coringa','hahaha','Coringa.jpg','2021-09-26 21:04:13'),(43,'JoaoZin','Carinha','Cara\r\n','Carinha.jpg','2021-09-26 19:32:05'),(44,'','','','.jpg','2021-09-26 20:56:34'),(45,'JoaoZin','Carro','Vrum vrum da sorte','Carro.jpg','2021-09-26 20:59:57'),(46,'JoaoZin','Outro Carro','vrum vrum legal','Outro Carro.jpg','2021-09-26 21:02:33'),(42,'JoaoZin','Outro Carro','asdasd','Outro Carro.jpg','2021-09-26 17:28:55'),(41,'JoaoZin','Carro','Vrum Vrum','Carro.jpg','2021-09-26 17:26:14'),(54,'feloz','Pika Blin Solo','huehue','Pika Blin Solo.jpg','2021-09-27 19:50:40'),(55,'feloz','Outro Carro','asdasd','Outro Carro.','2021-09-27 19:53:21'),(56,'feloz','Carro','vrum vrum','Carro.jpg','2021-09-27 20:08:17'),(57,'feloz','Minato','Minato do drip','Minato.jpg','2021-09-27 22:09:58');
/*!40000 ALTER TABLE `pinturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `sobrenome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `telefone` int(100) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (109,'Gustavo','Hola','gustavo@gmail.com','12345',321654987,'2021-09-25 15:32:58',NULL),(110,'Robson_Xpro','blindada','robson@gmail.com','1234',154554,'2021-09-25 16:01:38',NULL),(111,'JoaoZin','Victor','JoaoZin@gmail.com','123',99227431,'2021-09-26 12:29:13',NULL),(112,'Feloz','brabo','Feloz@gmail.com','feloz123',98666999,'2021-09-27 19:08:50',NULL);
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

-- Dump completed on 2021-09-27 22:21:51
