CREATE DATABASE  IF NOT EXISTS `tcc_mpx` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `tcc_mpx`;
-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: tcc_mpx
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT,
  `nomep` varchar(220) NOT NULL,
  `
  ` varchar(220) NOT NULL,
  `fotop` varchar(10000) NOT NULL,
  `instagramp` varchar(220) NOT NULL,
  `twitterp` varchar(220) NOT NULL,
  `telefonep` varchar(100) NOT NULL,
  PRIMARY KEY (`idperfil`),
  UNIQUE KEY `NomeUser` (`nomep`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (56,'admin','I&#39;m Admin ','Admin.jpg','nenhum','nenhum','32168654656'),(53,'isabella','Isaaaaa','Isabella.jpg','bell220904','bellinhart524','5548966666666'),(54,'alex','OlÃ¡ aqui Ã© o meu perfil onde postarei as minha pinturas','Alex.jpeg','Alex_insta','Alex_twitter','554876985468'),(55,'luana','Vejam aqui minhas pinturas :)','Luana.jpeg','luanamart_insta','luanamart_twitter','5548955554444');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pinturas`
--

DROP TABLE IF EXISTS `pinturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pinturas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Autor` varchar(220) CHARACTER SET utf8mb4 NOT NULL,
  `Nome_Foto` varchar(220) CHARACTER SET utf8mb4 NOT NULL,
  `Desc_Foto` varchar(220) CHARACTER SET utf8mb4 NOT NULL,
  `Arquivo_Imagem` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `Criado` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=213 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pinturas`
--

LOCK TABLES `pinturas` WRITE;
/*!40000 ALTER TABLE `pinturas` DISABLE KEYS */;
INSERT INTO `pinturas` VALUES (201,'alex','Mal & Normal','Ass: Alex','Pintura_do_Alex.jpeg','2021-10-26 18:05:50'),(202,'alex','Humanimal','Humanimalzin ASS: Alex','Pintura_do_Alex_id_202.jpeg','2021-10-26 18:07:26'),(203,'alex','The best couple of 2021','Ass: Alexx','Pintura_do_Alex_id_203.jpeg','2021-10-26 18:09:02'),(204,'alex','IndianaJoNES','Desenhin do Indio eu acho','Pintura_do_Alex_id_204.jpeg','2021-10-26 18:11:14'),(192,'luana','Menina do OlhÃ£o','Luana Mart','Pintura_do_Luana.jpeg','2021-10-26 17:42:13'),(193,'luana','Pessoa de 4 Olhos','Desenho pontilhado','Pintura_do_Luana_id_193.jpeg','2021-10-26 17:46:23'),(194,'luana','Vidas dos Olhos','Pintura da Luana Mart','Pintura_do_Luana_id_194.jpeg','2021-10-26 17:49:30'),(195,'luana','VisÃ£o do Futuro','Outra Pintura :)','Pintura_do_Luana_id_195.jpeg','2021-10-26 17:50:37'),(154,'isabella','Kuraminha','Meu desenho da kurama','Kuraminha.jpg','2021-10-25 18:23:17'),(155,'isabella','Constantine','Constantine - Attack On Titan','Constantine.jpg','2021-10-25 18:26:47'),(196,'luana','Ãfrica Espacial','ExpiraÃ§Ã£o das estrelas','Pintura_do_Luana_id_196.jpeg','2021-10-26 17:52:25');
/*!40000 ALTER TABLE `pinturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `nome_completo` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (149,'alex','seilex','alex@gmail.com','Alex123','554876985468','2021-10-25 18:33:15',NULL),(150,'luana','Luana Mart','luana@gmail.com','Luana123','5548955554444','2021-10-25 18:51:51',NULL),(148,'isabella','Isa','isabella@gmail.com','220904','5548966666666','2021-10-25 17:37:26',NULL),(151,'admin','Adis','Admin@gmail.com','Admin123','32168654656','2021-10-25 20:04:29',NULL);
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

-- Dump completed on 2021-11-11  9:38:22
