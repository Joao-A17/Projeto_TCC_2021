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
  `telefonep` varchar(100) NOT NULL,
  PRIMARY KEY (`idperfil`),
  UNIQUE KEY `NomeUser` (`nomep`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (51,'tumaho','Ola este perfil Ã© do tumaho mas conhecido como Toninho ou AntÃ´nio aqui vc vera artes muito feias porque eu nao sei desenha','tumaho.jpg','instagram do Usuario-8','facebook do Usuario-8','twitter do Usuario-8','99227431'),(24,'Tobi','&#34;VocÃª provavelmente vai sofrer de novo daqui em diante... Mas nÃ£o mude, continue seguindo o seu caminho&#34;','Usuario-6.jpg','instagram do usuario-6','facebook do usuario-6','twitter do usuario-6','whatsapp do usuario-6'),(50,'Dogzao','Au Au Au Au Au Au Au ','Dogzao.jpg','Dogzao','facebook do Dogzao ','twitter do Dogzao','554899227431'),(40,'Lacoste','Moda Casual De Luxo','Lacoste.jpg','instagram do Lacoste','facebook do Lacoste','twitter do Lacoste','whatsapp do Lacoste'),(43,'DogzÃ£o','DogzÃ£o dos criar','DogzÃ£o.jpg','instagram do DogzÃ£o','facebook do DogzÃ£o','twitter do DogzÃ£o','whatsapp do DogzÃ£o'),(45,'Vector','AH Ã©Ã©Ã©Ã©Ã©Ã©Ã©Ã©Ã©Ã©Ã©Ã© VECTOOOOOR','Vector.jpg','instagram do vector','facebook do vector','twitter do vector','32550201'),(46,'Cria','piquezin dos cria','Cria.jpg','https://www.instagram.com/cria_do_cpx_phlopex024/','https://www.facebook.com/doscrias','https://twitter.com/doscrias','5548999227431'),(47,'Admin','I am Admin ','Admin.jpg','Admin','AdminÃ£o','TwAdmin','5548999227431');
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
) ENGINE=MyISAM AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pinturas`
--

LOCK TABLES `pinturas` WRITE;
/*!40000 ALTER TABLE `pinturas` DISABLE KEYS */;
INSERT INTO `pinturas` VALUES (123,'Lacoste','Raspadin','Desenho do meu Amiguin BK','Raspadin.jpg','2021-10-11 21:52:55'),(153,'Dogzao','Dogzin','Meu Filho Dogzin AU AU ','Dogzin.jpg','2021-10-24 19:43:12'),(122,'Lacoste','@THELEGIONX','Edit da Aktsuki','@THELEGIONX.jpg','2021-10-11 20:14:28'),(121,'Lacoste','TRASH','Edit Trash Demon','TRASH.jpg','2021-10-11 20:12:02'),(125,'Lacoste','Lobin','Guardian Lobo','Lobin.jpg','2021-10-11 23:45:27'),(128,'Vector','Traje do Vectooooooooooooor','Meu Traje de voar  AH ÃˆÃ‰Ã‰Ã‰Ã‰EEEEEEE','Traje do Vectooooooooooooor.jpg','2021-10-16 10:31:32'),(129,'Vector','Arma Nova','Para pegar a lua que brilha lÃ¡ no cÃ©u.','Arma Nova.jpg','2021-10-16 10:33:48'),(130,'Vector','AH EEEEEEEEE','AAH ÃˆÃ‰Ã‰Ã‰Ã‰EEEEEEE','AH EEEEEEEEE.jpg','2021-10-16 22:18:35'),(131,'Vector','AH EEEEEE','AH ÃˆÃ‰Ã‰Ã‰Ã‰EEEEEEE','AH EEEEEE.jpg','2021-10-16 22:19:11'),(133,'Tobi','Tobi_Animado','UUIIIIIIIIII','Tobi_Animado.jpg','2021-10-17 22:38:33'),(151,'Cria','Morte','Morte de glokada','Morte.jpg','2021-10-23 13:23:00');
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
  `telefone` varchar(100) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (133,'Tobi','Akatsuki','usuario6@gmail.com','123','whatsapp do usuario-6','2021-10-10 23:08:55',NULL),(147,'tumaho','dos crias','toninhocxzoficial@gmail.com','0098','99227431','2021-10-24 22:06:20',NULL),(146,'Dogzao','cachorro','dogzao@gmail.com','dog','554899227431','2021-10-24 19:38:21',NULL),(138,'Lacoste','ReizinD','lacoste@gmail.com','lacoste123','whatsapp do Lacoste','2021-10-11 20:08:34',NULL),(141,'Vector','MalvadÃ£o','vector@gmail.com','vector123','32550201','2021-10-16 10:22:23',NULL),(142,'Cria','dos crias','criadoscrias@gmail.com','doscrias2','5548999227431','2021-10-20 16:00:41',NULL),(143,'Admin','sobrenome do Admin','Admin@gmail.com','Admin123','5548999227431','2021-10-23 14:41:33',NULL);
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

-- Dump completed on 2021-10-24 22:24:05
