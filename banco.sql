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
  `telefonep` varchar(100) NOT NULL,
  PRIMARY KEY (`idperfil`),
  UNIQUE KEY `NomeUser` (`nomep`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (17,'Usuario-1','Perfil do usuario-1','Usuario-1.jpg','instagram do usuario-1','facebook do usuario-1','twitter do usuario-1','whatsapp do usuario-1'),(18,'Usuario-2','Perfil do Usuario-2','Usuario-2.jpg','Instagram do Usuario-2','Facebook do Usuario-2','Twitter do Usuario-2','Whatsapp do Usuario-2'),(20,'Usuario-3','Perfil do usuario-3','Usuario-3.jpg','instagram do usuario-3','facebook do usuario-3','twitter do usuario-3','whatsapp do usuario-3'),(21,'Usuario-4','Perfil do usuario-4','Usuario-4.jpg','https://www.instagram.com/sr.alone_edits/','https://www.facebook.com/','https://twitter.com','wa.me/+5548999227431'),(22,'Usuario-5','Perfil do usuario-5 huehuheuheuhe','Usuario-5.jpg','instagram do usuario-5','facebook do usuario-5','twitter do usuario-5','whatsapp do usuario-5'),(24,'Usuario-6','Perfil do usuario-6','Usuario-6.jpg','instagram do usuario-6','facebook do usuario-6','twitter do usuario-6','whatsapp do usuario-6'),(44,'Usuario-7','User 7','Usuario-7.jpg','instagram do Usuario-7','facebook do Usuario-7','twitter do Usuario-7','465879123'),(40,'Lacoste','Moda Casual De Luxo','Lacoste.jpg','instagram do Lacoste','facebook do Lacoste','twitter do Lacoste','whatsapp do Lacoste'),(43,'DogzÃ£o','DogzÃ£o dos criar','DogzÃ£o.jpg','instagram do DogzÃ£o','facebook do DogzÃ£o','twitter do DogzÃ£o','whatsapp do DogzÃ£o');
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
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pinturas`
--

LOCK TABLES `pinturas` WRITE;
/*!40000 ALTER TABLE `pinturas` DISABLE KEYS */;
INSERT INTO `pinturas` VALUES (123,'Lacoste','Raspadin','Desenho do meu Amiguin BK','Raspadin.jpg','2021-10-11 21:52:55'),(117,'Usuario-4','Madara','Madara edit trash gang','Madara.jpg','2021-10-11 19:55:13'),(118,'Usuario-1','Detetives','Anime Death note','Detetives.jpg','2021-10-11 19:57:52'),(102,'Usuario-4','Sasuke','Sasuke da trash gang','Sasuke.jpg','2021-10-10 21:42:39'),(101,'Usuario-4','AnimeEdit','Edit Estilo Trash Gang','AnimeEdit.jpg','2021-10-10 20:21:43'),(100,'Usuario-4','Tobi','Tobi animado','Tobi.jpg','2021-10-10 20:19:44'),(99,'Usuario-4','Carrinho','Vrum Vrum Vrum Vrum ','Carrinho.jpg','2021-10-10 18:47:50'),(97,'Usuario-3','Hinata','Desc da Hinata','Hinata.jpg','2021-10-10 18:19:43'),(98,'Usuario-4','Pika blindada','Trio da alegira','Pika blindada.jpg','2021-10-10 18:47:03'),(93,'Usuario-1','Patolino','Patolino e seus Moneys','Patolino.jpg','2021-10-10 17:55:31'),(94,'Usuario-1','Obito','EditAnime do Obito','Obito.jpg','2021-10-10 17:58:44'),(95,'Usuario-2','Sasuke','SakukeEdits','Sasuke.jpg','2021-10-10 18:13:10'),(96,'Usuario-3','Orochimaru','Desc do Orochimaru','Orochimaru.jpg','2021-10-10 18:17:48'),(91,'Usuario-2','Kiba e Akamaro','AnimeEdit','Kiba e Akamaro.jpg','2021-10-10 17:48:02'),(92,'Usuario-2','Itachi Uchiha','Edit do VRTENSHI','Itachi Uchiha.jpg','2021-10-10 17:51:21'),(90,'Usuario-1','Perna Longa','Dente de ouro','Perna Longa.jpg','2021-10-10 17:44:19'),(122,'Lacoste','@THELEGIONX','Edit da Aktsuki','@THELEGIONX.jpg','2021-10-11 20:14:28'),(121,'Lacoste','TRASH','Edit Trash Demon','TRASH.jpg','2021-10-11 20:12:02'),(125,'Lacoste','Lobin','Guardian Lobo','Lobin.jpg','2021-10-11 23:45:27'),(126,'Lacoste','Nuvem Red Aktsuki','Wallpaper para celular','Nuvem Red Aktsuki.jpg','2021-10-12 00:33:30'),(127,'Lacoste','RpXWall','Wallpaper PC 9000K','RpXWall.jpg','2021-10-12 00:42:41');
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
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (133,'Usuario-6','hola','usuario6@gmail.com','123',213546879,'2021-10-10 23:08:55',NULL),(132,'Usuario-5','seila','usuario5@gmail.com','123',456781932,'2021-10-10 21:46:27',NULL),(129,'Usuario-2','nadaha','usuario2@gmail.com','123',321654987,'2021-10-10 17:45:47',NULL),(130,'Usuario-3','nadis','usuario3@gmail.com','123',654987321,'2021-10-10 18:14:26',NULL),(131,'Usuario-4','Sobre','usuario4@gmail.com','123',789654123,'2021-10-10 18:42:38',NULL),(128,'Usuario-1','nada','usuario1@gmail.com','123',321654987,'2021-10-10 17:42:31',NULL),(134,'Usuario-7','asd','usuario7@gmail.com','123',465879123,'2021-10-11 16:29:08',NULL),(138,'Lacoste','Reizin','lacoste@gmail.com','lacoste123',99227431,'2021-10-11 20:08:34',NULL);
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

-- Dump completed on 2021-10-12 20:34:57
