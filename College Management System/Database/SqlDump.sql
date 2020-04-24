-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: codex
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendence` (
  `dept` varchar(10) NOT NULL,
  `course` varchar(15) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `Roll_no` varchar(3) NOT NULL,
  `attendence` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendence`
--

LOCK TABLES `attendence` WRITE;
/*!40000 ALTER TABLE `attendence` DISABLE KEYS */;
INSERT INTO `attendence` VALUES ('Mech','Second Year','Physics','1','90'),('CS','First Year','M-1','1','80'),('Mech','Second Year','Manfacturing Processes','74','85'),('CS','First Year','Chemistry','45','98');
/*!40000 ALTER TABLE `attendence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chem`
--

DROP TABLE IF EXISTS `chem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chem` (
  `roll_no` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `fees` varchar(12) DEFAULT NULL,
  `course` varchar(15) DEFAULT NULL,
  `club` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chem`
--

LOCK TABLES `chem` WRITE;
/*!40000 ALTER TABLE `chem` DISABLE KEYS */;
/*!40000 ALTER TABLE `chem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `civil`
--

DROP TABLE IF EXISTS `civil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civil` (
  `roll_no` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `fees` varchar(12) DEFAULT NULL,
  `course` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `civil`
--

LOCK TABLES `civil` WRITE;
/*!40000 ALTER TABLE `civil` DISABLE KEYS */;
/*!40000 ALTER TABLE `civil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `club`
--

DROP TABLE IF EXISTS `club`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `club` (
  `dept` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `rollno` varchar(4) NOT NULL,
  `clubs_joined` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `club`
--

LOCK TABLES `club` WRITE;
/*!40000 ALTER TABLE `club` DISABLE KEYS */;
INSERT INTO `club` VALUES ('IT','Third Year','78','Shutterbugs Photography	Robocon	'),('null','null','','');
/*!40000 ALTER TABLE `club` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cs`
--

DROP TABLE IF EXISTS `cs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cs` (
  `roll_no` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `fees` varchar(7) NOT NULL,
  `course` varchar(15) NOT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cs`
--

LOCK TABLES `cs` WRITE;
/*!40000 ALTER TABLE `cs` DISABLE KEYS */;
INSERT INTO `cs` VALUES (1,'a','b','c','2422542','zdvdxgf','2017-10-05','fxgfc','gfc','gdfg','5455','First Year'),(2,'Chetan','Kisan','Pawar','9767340536','chetanpawar968@gmail.com','1997-10-04','pune','Pune','Maharashtra','136737','Third Year');
/*!40000 ALTER TABLE `cs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entc`
--

DROP TABLE IF EXISTS `entc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entc` (
  `roll_no` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `fees` varchar(12) DEFAULT NULL,
  `course` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entc`
--

LOCK TABLES `entc` WRITE;
/*!40000 ALTER TABLE `entc` DISABLE KEYS */;
/*!40000 ALTER TABLE `entc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etx`
--

DROP TABLE IF EXISTS `etx`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etx` (
  `roll_no` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `fees` varchar(12) DEFAULT NULL,
  `course` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etx`
--

LOCK TABLES `etx` WRITE;
/*!40000 ALTER TABLE `etx` DISABLE KEYS */;
/*!40000 ALTER TABLE `etx` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `it`
--

DROP TABLE IF EXISTS `it`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `it` (
  `roll_no` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `fees` varchar(12) DEFAULT NULL,
  `course` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it`
--

LOCK TABLES `it` WRITE;
/*!40000 ALTER TABLE `it` DISABLE KEYS */;
INSERT INTO `it` VALUES (1,'chetan','','pawar','1525252525','eyrrughjgi','2017-10-07','jfyjj','ufuygkh','huotuyfiyg','4545','First Year');
/*!40000 ALTER TABLE `it` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `library`
--

DROP TABLE IF EXISTS `library`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `library` (
  `bname` varchar(50) NOT NULL,
  `qty` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`bname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `library`
--

LOCK TABLES `library` WRITE;
/*!40000 ALTER TABLE `library` DISABLE KEYS */;
INSERT INTO `library` VALUES ('Android','0'),('Basic Electrical Enginnering','34'),('C','10'),('C++','23'),('chemistry','15'),('Civil','8'),('Compiler Design','0'),('Data structures','45'),('Digital Electronics','50'),('Java','30'),('Microprocessor','20'),('Python','3'),('thermodynamics','12');
/*!40000 ALTER TABLE `library` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('1','1'),('a','a'),('chetanpawar968@gmail.com','asdf');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mech`
--

DROP TABLE IF EXISTS `mech`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mech` (
  `roll_no` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `fees` varchar(12) DEFAULT NULL,
  `course` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mech`
--

LOCK TABLES `mech` WRITE;
/*!40000 ALTER TABLE `mech` DISABLE KEYS */;
/*!40000 ALTER TABLE `mech` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result` (
  `dept` varchar(10) NOT NULL,
  `course` varchar(15) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `Roll_no` varchar(3) NOT NULL,
  `marks` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
INSERT INTO `result` VALUES ('CS','Second Year','Microprocessor','5','74'),('IT','Second Year','M-1','3','78'),('IT','Second Year','COA','45','20'),('Civil','Second Year','Geological Enginnering','98','23');
/*!40000 ALTER TABLE `result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_login`
--

DROP TABLE IF EXISTS `t_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_login`
--

LOCK TABLES `t_login` WRITE;
/*!40000 ALTER TABLE `t_login` DISABLE KEYS */;
INSERT INTO `t_login` VALUES ('1','1'),('a','a'),('chetanpawar968@gmail.com','asdf'),('parthvijay96@gmail.com','asdf');
/*!40000 ALTER TABLE `t_login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-10 14:17:30
