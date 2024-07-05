-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: hospital
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `admitpatients`
--

DROP TABLE IF EXISTS `admitpatients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admitpatients` (
  `apid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `refDocID` int DEFAULT NULL,
  `ward` varchar(45) DEFAULT NULL,
  `room` varchar(45) DEFAULT NULL,
  `bedNumber` int DEFAULT NULL,
  `refNurseID` int DEFAULT NULL,
  `dateTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `admitDiscription` varchar(45) DEFAULT NULL,
  `bloodpressure` int DEFAULT NULL,
  `heartrate` int DEFAULT NULL,
  `temprature` int DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `priority` varchar(45) DEFAULT 'HIGH',
  `progress` int DEFAULT NULL,
  PRIMARY KEY (`apid`),
  UNIQUE KEY `apid_UNIQUE` (`apid`),
  KEY `admitpatient_idx` (`pid`),
  KEY `refDoc_idx` (`refDocID`),
  KEY `refNurse_idx` (`refNurseID`),
  CONSTRAINT `admitpatient` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`),
  CONSTRAINT `refDoc` FOREIGN KEY (`refDocID`) REFERENCES `hospitalstaff` (`hsid`),
  CONSTRAINT `refNurse` FOREIGN KEY (`refNurseID`) REFERENCES `hospitalstaff` (`hsid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admitpatients`
--

LOCK TABLES `admitpatients` WRITE;
/*!40000 ALTER TABLE `admitpatients` DISABLE KEYS */;
INSERT INTO `admitpatients` VALUES (8,1,1,NULL,NULL,NULL,NULL,'2022-03-18 19:04:36',NULL,NULL,NULL,NULL,NULL,'HIGH',NULL),(9,1,4,NULL,NULL,NULL,NULL,'2022-03-21 04:17:45',NULL,NULL,NULL,NULL,NULL,'HIGH',NULL);
/*!40000 ALTER TABLE `admitpatients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `allergy`
--

DROP TABLE IF EXISTS `allergy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `allergy` (
  `aid` int NOT NULL AUTO_INCREMENT,
  `pid` int NOT NULL,
  `allergyType` varchar(45) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `medication` varchar(100) DEFAULT NULL,
  `dcotorName` varchar(45) DEFAULT 'NA',
  `dContact` int DEFAULT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `aid_UNIQUE` (`aid`),
  KEY `patientallergy_idx` (`pid`),
  CONSTRAINT `patientallergy` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allergy`
--

LOCK TABLES `allergy` WRITE;
/*!40000 ALTER TABLE `allergy` DISABLE KEYS */;
INSERT INTO `allergy` VALUES (1,1,'Skin','Spot on Skin','asscc','acsc',1234567895);
/*!40000 ALTER TABLE `allergy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointment` (
  `apid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `requestedDocId` int DEFAULT NULL,
  `requestedServiceId` int DEFAULT NULL,
  `symptomsId` int DEFAULT NULL,
  `disease` varchar(45) DEFAULT NULL,
  `approxScheduledTime` varchar(30) DEFAULT NULL,
  `attendTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `discription` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`apid`),
  UNIQUE KEY `apid_UNIQUE` (`apid`),
  KEY `appatient_idx` (`pid`),
  KEY `requestdoc_idx` (`requestedDocId`),
  KEY `requestservice_idx` (`requestedServiceId`),
  KEY `symptoms_idx` (`symptomsId`),
  CONSTRAINT `appatient` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`),
  CONSTRAINT `requestdoc` FOREIGN KEY (`requestedDocId`) REFERENCES `hospitalstaff` (`hsid`),
  CONSTRAINT `requestservice` FOREIGN KEY (`requestedServiceId`) REFERENCES `servicetest` (`stid`),
  CONSTRAINT `symptoms` FOREIGN KEY (`symptomsId`) REFERENCES `symptoms` (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment`
--

LOCK TABLES `appointment` WRITE;
/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
INSERT INTO `appointment` VALUES (16,1,1,1,1,'abc',NULL,'2022-03-18 17:10:52',NULL,'Waiting ','ac'),(17,2,1,7,2,'__',' 12:57','2022-03-21 04:27:43','2022-03-24','Waiting','');
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billsum`
--

DROP TABLE IF EXISTS `billsum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `billsum` (
  `biid` int NOT NULL AUTO_INCREMENT,
  `generalincome` int DEFAULT NULL,
  `operationincome` int DEFAULT NULL,
  `pharmacyincome` int DEFAULT NULL,
  `hospitalexpenses` int DEFAULT NULL,
  `totalincome` int DEFAULT NULL,
  `totalexpenses` int DEFAULT NULL,
  `grandtotal` int DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`biid`),
  UNIQUE KEY `biid_UNIQUE` (`biid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billsum`
--

LOCK TABLES `billsum` WRITE;
/*!40000 ALTER TABLE `billsum` DISABLE KEYS */;
INSERT INTO `billsum` VALUES (1,100,200,300,50,600,50,550,NULL);
/*!40000 ALTER TABLE `billsum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billsumall`
--

DROP TABLE IF EXISTS `billsumall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `billsumall` (
  `biid` int NOT NULL AUTO_INCREMENT,
  `generalincome` int DEFAULT NULL,
  `operationincome` int DEFAULT NULL,
  `pharmacyincome` int DEFAULT NULL,
  `hospitalexpenses` int DEFAULT NULL,
  `pharmacyexpenses` int DEFAULT NULL,
  `totalincome` int GENERATED ALWAYS AS (((_utf8mb4'generalincome' + _utf8mb4'operationincome') + _utf8mb4'pharmacyincome')) VIRTUAL,
  `totalexpenses` int GENERATED ALWAYS AS ((_utf8mb4'hospitalexpenses' + _utf8mb4'pharmacyexpenses')) VIRTUAL,
  `grandtotal` int GENERATED ALWAYS AS ((_utf8mb4'totalincome' - _utf8mb4'totalexpenses')) VIRTUAL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`biid`),
  UNIQUE KEY `biid_UNIQUE` (`biid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billsumall`
--

LOCK TABLES `billsumall` WRITE;
/*!40000 ALTER TABLE `billsumall` DISABLE KEYS */;
/*!40000 ALTER TABLE `billsumall` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bloodavail`
--

DROP TABLE IF EXISTS `bloodavail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bloodavail` (
  `baid` int NOT NULL AUTO_INCREMENT,
  `bloodtype` varchar(45) DEFAULT NULL,
  `availBloodBag` int DEFAULT NULL,
  `sizeBloodBag` int DEFAULT NULL,
  PRIMARY KEY (`baid`),
  UNIQUE KEY `baid_UNIQUE` (`baid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bloodavail`
--

LOCK TABLES `bloodavail` WRITE;
/*!40000 ALTER TABLE `bloodavail` DISABLE KEYS */;
INSERT INTO `bloodavail` VALUES (1,'A+',10,400),(2,'A-',12,400),(3,'B+',14,400),(4,'B-',8,400),(5,'AB+',9,400),(6,'AB-',13,400),(7,'O+',11,400),(8,'O-',15,400);
/*!40000 ALTER TABLE `bloodavail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blooddonner`
--

DROP TABLE IF EXISTS `blooddonner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blooddonner` (
  `doid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contact` int DEFAULT NULL,
  `bloodtype` varchar(20) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `heigh` int DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `lastDonatedDate` date DEFAULT NULL,
  `donationDate` date DEFAULT NULL,
  `donationQuantity` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`doid`),
  UNIQUE KEY `bid_UNIQUE` (`doid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blooddonner`
--

LOCK TABLES `blooddonner` WRITE;
/*!40000 ALTER TABLE `blooddonner` DISABLE KEYS */;
/*!40000 ALTER TABLE `blooddonner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casebook`
--

DROP TABLE IF EXISTS `casebook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `casebook` (
  `cbid` int NOT NULL AUTO_INCREMENT,
  `pid` int NOT NULL,
  `tid` int NOT NULL,
  `allergy` varchar(500) NOT NULL,
  `refDoc` varchar(500) DEFAULT NULL,
  `almedication` varchar(500) DEFAULT NULL,
  `immunisation` varchar(500) DEFAULT NULL,
  `cTreatingDisease` varchar(100) DEFAULT 'NA',
  `ctdHealthEffect` varchar(100) DEFAULT 'NA',
  `surgicalHisrory` varchar(100) DEFAULT 'NA',
  `geneticDisease` varchar(100) DEFAULT 'NA',
  `social` varchar(100) DEFAULT 'NA',
  `mentalDisease` varchar(100) DEFAULT 'NA',
  `newbornComplications` varchar(100) DEFAULT 'NA',
  `pregnancyPeriodDetails` varchar(100) DEFAULT 'NA',
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cbid`),
  KEY `pid_idx` (`pid`),
  CONSTRAINT `patient` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casebook`
--

LOCK TABLES `casebook` WRITE;
/*!40000 ALTER TABLE `casebook` DISABLE KEYS */;
INSERT INTO `casebook` VALUES (1,1,1,'1','1','1','1','svdv','svds','vdsvsdv','svsdvsd','svsdv','acsd','svdsdv','sdvsdsd','2022-03-18 10:28:11'),(2,1,1,'abcd','Shubham','okacet','Complet','headache','no','No','No','No','No','No','No','2022-03-18 10:31:47'),(3,1,1,'abcd','Shubham','okacet','Complet','headache','no','No','No','No','No','No','No','2022-03-18 10:50:44'),(4,1,3,'NA','Sakshi','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','2022-03-18 10:56:47');
/*!40000 ALTER TABLE `casebook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ctscan`
--

DROP TABLE IF EXISTS `ctscan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ctscan` (
  `ctid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `refDocid` int DEFAULT NULL,
  `reportflag` varchar(45) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `report` varchar(100) DEFAULT NULL,
  `anesthesia` varchar(45) DEFAULT NULL,
  `physicaltst` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ctid`),
  UNIQUE KEY `ctid_UNIQUE` (`ctid`),
  KEY `ctpid_idx` (`pid`),
  KEY `ctdoc_idx` (`refDocid`),
  CONSTRAINT `ctdoc` FOREIGN KEY (`refDocid`) REFERENCES `hospitalstaff` (`hsid`),
  CONSTRAINT `ctpid` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ctscan`
--

LOCK TABLES `ctscan` WRITE;
/*!40000 ALTER TABLE `ctscan` DISABLE KEYS */;
INSERT INTO `ctscan` VALUES (1,1,2,'0','Positive ','abc','20ml','Complete '),(2,2,1,'0','Positive ','abc','10ml','Complete '),(3,3,3,'0','Positive ','abc','5ml','Complete '),(4,8,NULL,NULL,'abc ','dscs','10ml','Positive');
/*!40000 ALTER TABLE `ctscan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dexa`
--

DROP TABLE IF EXISTS `dexa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dexa` (
  `deid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `refDocid` int DEFAULT NULL,
  `reportflag` varchar(45) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `report` varchar(100) DEFAULT NULL,
  `physicaltst` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`deid`),
  UNIQUE KEY `deid_UNIQUE` (`deid`),
  KEY `depid_idx` (`pid`),
  KEY `derefdoc_idx` (`refDocid`),
  CONSTRAINT `depid` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`),
  CONSTRAINT `derefdoc` FOREIGN KEY (`refDocid`) REFERENCES `hospitalstaff` (`hsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4   COMMENT='			';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dexa`
--

LOCK TABLES `dexa` WRITE;
/*!40000 ALTER TABLE `dexa` DISABLE KEYS */;
/*!40000 ALTER TABLE `dexa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dialysis`
--

DROP TABLE IF EXISTS `dialysis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dialysis` (
  `diid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `refDocid` int DEFAULT NULL,
  `ktv` decimal(10,0) DEFAULT NULL,
  `urr` decimal(10,0) DEFAULT NULL,
  `temperature` varchar(45) DEFAULT NULL,
  `report` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `reportflag` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`diid`),
  UNIQUE KEY `diid_UNIQUE` (`diid`),
  KEY `piddialysis_idx` (`pid`),
  KEY `diddialysis_idx` (`refDocid`),
  CONSTRAINT `diddialysis` FOREIGN KEY (`refDocid`) REFERENCES `hospitalstaff` (`hsid`),
  CONSTRAINT `piddialysis` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dialysis`
--

LOCK TABLES `dialysis` WRITE;
/*!40000 ALTER TABLE `dialysis` DISABLE KEYS */;
INSERT INTO `dialysis` VALUES (1,10,NULL,1,65,'35','abcd',NULL,NULL);
/*!40000 ALTER TABLE `dialysis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctoravailability`
--

DROP TABLE IF EXISTS `doctoravailability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctoravailability` (
  `daid` int NOT NULL AUTO_INCREMENT,
  `docid` int DEFAULT NULL,
  `isAbsent` varchar(10) DEFAULT 'No',
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL,
  PRIMARY KEY (`daid`),
  UNIQUE KEY `daid_UNIQUE` (`daid`),
  KEY `docid_idx` (`docid`),
  CONSTRAINT `docid` FOREIGN KEY (`docid`) REFERENCES `hospitalstaff` (`hsid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctoravailability`
--

LOCK TABLES `doctoravailability` WRITE;
/*!40000 ALTER TABLE `doctoravailability` DISABLE KEYS */;
INSERT INTO `doctoravailability` VALUES (1,1,'No','09:00:00','21:00:00'),(2,2,'No','09:00:00','21:00:00'),(3,3,'No','09:00:00','21:00:00'),(4,4,'No','09:00:00','21:00:00');
/*!40000 ALTER TABLE `doctoravailability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctorcunsaltancefees`
--

DROP TABLE IF EXISTS `doctorcunsaltancefees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctorcunsaltancefees` (
  `dcfId` int NOT NULL AUTO_INCREMENT,
  `doctorId` int DEFAULT NULL,
  `fees` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`dcfId`),
  UNIQUE KEY `dcfId_UNIQUE` (`dcfId`),
  KEY `doctorid_idx` (`doctorId`),
  CONSTRAINT `doctorid` FOREIGN KEY (`doctorId`) REFERENCES `hospitalstaff` (`hsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctorcunsaltancefees`
--

LOCK TABLES `doctorcunsaltancefees` WRITE;
/*!40000 ALTER TABLE `doctorcunsaltancefees` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctorcunsaltancefees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ecg`
--

DROP TABLE IF EXISTS `ecg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ecg` (
  `ecid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `refDocid` int DEFAULT NULL,
  `report` varchar(100) DEFAULT NULL,
  `reportflag` varchar(45) DEFAULT NULL,
  `physicaltst` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ecid`),
  UNIQUE KEY `ecid_UNIQUE` (`ecid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ecg`
--

LOCK TABLES `ecg` WRITE;
/*!40000 ALTER TABLE `ecg` DISABLE KEYS */;
/*!40000 ALTER TABLE `ecg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emergrncy`
--

DROP TABLE IF EXISTS `emergrncy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emergrncy` (
  `emid` int NOT NULL AUTO_INCREMENT,
  `reportingStaffId` int DEFAULT NULL,
  `esFlag` int NOT NULL DEFAULT '1',
  `otFlag` int DEFAULT '0',
  `icuFlag` int DEFAULT '0',
  `remark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`emid`),
  UNIQUE KEY `emid_UNIQUE` (`emid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emergrncy`
--

LOCK TABLES `emergrncy` WRITE;
/*!40000 ALTER TABLE `emergrncy` DISABLE KEYS */;
INSERT INTO `emergrncy` VALUES (1,4,1,0,0,'leg fracture'),(2,3,1,0,0,'abc'),(3,3,1,0,0,'abc'),(4,3,1,0,0,'abc'),(5,3,1,0,0,'abc'),(6,3,1,0,0,'abc'),(7,3,1,0,0,'bdc'),(8,1,1,1,1,'bot'),(9,3,1,0,0,'bot'),(10,3,1,0,0,'bot'),(11,3,1,0,0,'bot'),(12,20,1,0,0,'bot'),(13,4,1,0,0,'abc');
/*!40000 ALTER TABLE `emergrncy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `expenses` (
  `expid` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  `total` int DEFAULT NULL,
  PRIMARY KEY (`expid`),
  UNIQUE KEY `expid_UNIQUE` (`expid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expenses`
--

LOCK TABLES `expenses` WRITE;
/*!40000 ALTER TABLE `expenses` DISABLE KEYS */;
INSERT INTO `expenses` VALUES (1,'2022-03-25','Electrical  Bill',6000),(2,'2022-03-12','Pharmacy med',2000),(3,'2022-03-14','Staff Salary ',7000),(4,'2022-03-31','Medical Equipment',9000),(5,'2022-03-04','Pharmacy med',6606),(6,'2022-03-08','Maintained ',5757),(7,'2022-03-09','Staff Salary ',280),(8,'2022-03-22','Pharmacy med',80507),(9,'2022-03-16','vsv',45345),(10,'2022-03-16','fgnfg',86383),(11,'2022-03-16','rgedbdf',2744),(12,'2022-03-16','rgedbdf',2744),(13,'2022-03-16','rgedbdf',2744);
/*!40000 ALTER TABLE `expenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `fid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `feedbacks` varchar(200) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  `rate` int DEFAULT '50',
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `fid_UNIQUE` (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (2,'abc2','greatt','patient',70,'2022-03-17 06:24:28'),(3,'abc3','average','patient',50,'2022-03-17 06:24:28'),(4,'abc4','not bad','patient',30,'2022-03-17 06:24:28'),(5,'abc5','need of improve','patient',20,'2022-03-17 06:24:28'),(6,'abc6','good work','patient',80,'2022-03-17 06:24:28'),(7,'abc7','great','patient',80,'2022-03-17 06:24:28'),(8,'abc8','good','patient',90,'2022-03-17 06:24:28'),(9,'Shubham','good','Account',100,'2022-03-17 06:48:29'),(10,'Shubham','scac','Account',60,'2022-03-17 06:58:01'),(11,'Shubham','scac','Account',60,'2022-03-17 06:59:55'),(12,'Shubham','scsc','Patient',20,'2022-03-18 12:57:38'),(13,'Shubham','ascasc45464dvvas6263sac 5 84fa4 54sd46a 4w5 ','Doctor',60,'2022-03-18 13:35:32'),(14,'Shubham','ascasc45464dvvas6263sac 5 84fa4 54sd46a 4w5 ','Doctor',60,'2022-03-18 13:36:20'),(15,'sc','cscs','Nurse',30,'2022-03-18 17:58:04'),(16,'Shubham','sxasx','Laboratory',100,'2022-03-18 21:02:28');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospitalstaff`
--

DROP TABLE IF EXISTS `hospitalstaff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospitalstaff` (
  `hsid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cNumber` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `education` varchar(45) DEFAULT NULL,
  `specialisation` varchar(45) DEFAULT NULL,
  `experience` varchar(45) DEFAULT NULL,
  `surgeonFlag` tinyint DEFAULT NULL,
  `doctorFlag` tinyint DEFAULT NULL,
  `nurseFlag` tinyint DEFAULT NULL,
  `accountantFlag` tinyint DEFAULT NULL,
  `laboratoristFlag` tinyint DEFAULT NULL,
  `pharmacyFlag` tinyint DEFAULT NULL,
  `emergencyFlag` tinyint DEFAULT NULL,
  `anaesthetistFlag` tinyint DEFAULT NULL,
  `adminFlag` tinyint DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `height` decimal(10,0) DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `instagram` varchar(45) DEFAULT NULL,
  `glink` varchar(45) DEFAULT NULL,
  `profilename` varchar(45) DEFAULT 'avatar.png',
  PRIMARY KEY (`hsid`),
  UNIQUE KEY `hsid_UNIQUE` (`hsid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospitalstaff`
--

LOCK TABLES `hospitalstaff` WRITE;
/*!40000 ALTER TABLE `hospitalstaff` DISABLE KEYS */;
INSERT INTO `hospitalstaff` VALUES (1,'Shubham Sahane','shubham@gmail.com','+918552804871','123456789','MBBS','Dentist','15',1,1,0,0,0,0,1,0,1,'2022-03-15',6,70,'Male',25,'AtPo. Chas Tal. Sinnar Dist.Nashik','silent.virus.99','Shubham20843335','mr.silent_99','https://goo.gl/maps/NnYLTi8ssY5a4ShKA','avatar1.jpg'),(2,'Sakshi','sakshi@gmail.com','+919309887573','123456789','MBBS','Audiology','10',1,1,1,1,1,1,1,1,1,'2001-05-02',5,42,'Female ',21,'At.rahuri Tal.Sinnar Dist.Nashik 422606','sakshi.05','sakshi.05','sakshikorde','https://goo.gl/maps/NnYLTi8ssY5a4ShKA','avatar2.jpg'),(3,'Namrata','namrata@gmail.com','+919309887573','123456789','MBBS','Nursing','10',1,1,1,1,1,1,1,1,1,'2002-06-23',5,45,'Female',21,'At.tumsar Tal.Sinnar Dist.Nashik 422606','namrata.01','namrata.13','namrata12','https://goo.gl/maps/NnYLTi8ssY5a4ShKA','avatar6.jpg'),(4,'Roshan  M','roshan@gmail.com','+919309887573','123456789','MBBS','Radiology','25',1,1,1,1,1,1,1,1,1,'1997-08-09',6,65,'Male',45,'Yavatmal','Roshan Rm','RoshanMuneshwa2','roshan_vr.46','https://goo.gl/maps/NnYLTi8ssY5a4ShKA','avatar1.jpg');
/*!40000 ALTER TABLE `hospitalstaff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `income` (
  `incid` int NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `incomesource` varchar(45) DEFAULT NULL,
  `total` int DEFAULT NULL,
  PRIMARY KEY (`incid`),
  UNIQUE KEY `incid_UNIQUE` (`incid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `income`
--

LOCK TABLES `income` WRITE;
/*!40000 ALTER TABLE `income` DISABLE KEYS */;
INSERT INTO `income` VALUES (1,'2022-03-17 02:11:41','Operation',5000),(2,'2022-03-17 02:11:41','General Patients',4000),(3,'2022-03-17 02:20:27','dbdbd',2422);
/*!40000 ALTER TABLE `income` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicinepharmacy`
--

DROP TABLE IF EXISTS `medicinepharmacy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medicinepharmacy` (
  `mid` int NOT NULL AUTO_INCREMENT,
  `brandName` varchar(40) DEFAULT NULL,
  `containtQuality` varchar(100) DEFAULT NULL,
  `uses` varchar(100) DEFAULT NULL,
  `pkg` varchar(20) DEFAULT NULL,
  `mfgDate` date DEFAULT NULL,
  `expiry` date DEFAULT NULL,
  `ratepartab` decimal(10,0) DEFAULT NULL,
  `priceparpacket` varchar(45) DEFAULT NULL,
  `stockAvai` varchar(100) DEFAULT NULL,
  `healthEffect` varchar(45) DEFAULT NULL,
  `batch` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mid`),
  UNIQUE KEY `mid_UNIQUE` (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicinepharmacy`
--

LOCK TABLES `medicinepharmacy` WRITE;
/*!40000 ALTER TABLE `medicinepharmacy` DISABLE KEYS */;
INSERT INTO `medicinepharmacy` VALUES (1,'okaset','abc 9 mg','to cure allergical common cold','10','2022-03-05','2025-03-05',5,'50','100','no',NULL),(4,'abc','accs 10mg aa 20mg','acscs','10tab','2022-03-17','2024-07-10',10,'100','198','scsscas','abs123');
/*!40000 ALTER TABLE `medicinepharmacy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `msg_id` int NOT NULL,
  `incoming_msg_id` int NOT NULL,
  `outgoing_msg_id` int NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mri`
--

DROP TABLE IF EXISTS `mri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mri` (
  `mrid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `refDocid` int DEFAULT NULL,
  `reportflag` varchar(45) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `report` varchar(100) DEFAULT NULL,
  `anesthesia` varchar(45) DEFAULT NULL,
  `physicaltst` varchar(45) NOT NULL,
  PRIMARY KEY (`mrid`,`physicaltst`),
  UNIQUE KEY `mrid_UNIQUE` (`mrid`),
  KEY `pidmri_idx` (`pid`),
  KEY `didmri_idx` (`refDocid`),
  CONSTRAINT `didmri` FOREIGN KEY (`refDocid`) REFERENCES `hospitalstaff` (`hsid`),
  CONSTRAINT `pidmri` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mri`
--

LOCK TABLES `mri` WRITE;
/*!40000 ALTER TABLE `mri` DISABLE KEYS */;
INSERT INTO `mri` VALUES (1,1,2,'0','Positive ','abc','20ml','Complete '),(2,2,1,'0','Positive ','abc','10ml','Complete '),(3,1,3,'0','Positive ','abc','0','Complete ');
/*!40000 ALTER TABLE `mri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organdonner`
--

DROP TABLE IF EXISTS `organdonner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organdonner` (
  `odid` int NOT NULL AUTO_INCREMENT,
  `govIssuedId` varchar(45) DEFAULT NULL,
  `govIssuedIdNumber` varchar(45) DEFAULT NULL,
  `donatingOrgan` varchar(45) DEFAULT NULL,
  `registrationDate` varchar(45) DEFAULT NULL,
  `evaluationFlag` varchar(20) DEFAULT NULL,
  `evaluationReportNumber` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`odid`),
  UNIQUE KEY `odid_UNIQUE` (`odid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organdonner`
--

LOCK TABLES `organdonner` WRITE;
/*!40000 ALTER TABLE `organdonner` DISABLE KEYS */;
/*!40000 ALTER TABLE `organdonner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ot`
--

DROP TABLE IF EXISTS `ot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ot` (
  `otid` int NOT NULL AUTO_INCREMENT,
  `appoinid` int DEFAULT NULL,
  `pid` int DEFAULT NULL,
  `refDoc` int DEFAULT NULL,
  `anaesthetistid` int DEFAULT NULL,
  `surgeonid` int DEFAULT NULL,
  `assistnurseid` int DEFAULT NULL,
  `patientarrivaltime` time DEFAULT NULL,
  `anaesthesiastart` time DEFAULT NULL,
  `anesthesiaready` time DEFAULT NULL,
  `procedurestart` time DEFAULT NULL,
  `procedureend` time DEFAULT NULL,
  `report` varchar(100) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `reportflag` varchar(45) DEFAULT NULL,
  `anesthesia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`otid`),
  UNIQUE KEY `otid_UNIQUE` (`otid`),
  KEY `apoinmentidot_idx` (`appoinid`),
  KEY `pidot_idx` (`pid`),
  KEY `refdocot_idx` (`refDoc`),
  KEY `anaesthetistidot_idx` (`anaesthetistid`),
  KEY `nurseidot_idx` (`assistnurseid`),
  KEY `surgeonidot_idx` (`surgeonid`),
  CONSTRAINT `anaesthetistidot` FOREIGN KEY (`anaesthetistid`) REFERENCES `hospitalstaff` (`hsid`),
  CONSTRAINT `apoinmentidot` FOREIGN KEY (`appoinid`) REFERENCES `appointment` (`apid`),
  CONSTRAINT `nurseidot` FOREIGN KEY (`assistnurseid`) REFERENCES `hospitalstaff` (`hsid`),
  CONSTRAINT `pidot` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`),
  CONSTRAINT `refdocot` FOREIGN KEY (`refDoc`) REFERENCES `hospitalstaff` (`hsid`),
  CONSTRAINT `surgeonidot` FOREIGN KEY (`surgeonid`) REFERENCES `hospitalstaff` (`hsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ot`
--

LOCK TABLES `ot` WRITE;
/*!40000 ALTER TABLE `ot` DISABLE KEYS */;
/*!40000 ALTER TABLE `ot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient` (
  `pid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT 'NA',
  `email` varchar(45) NOT NULL,
  `contactNo` varchar(45) DEFAULT '0',
  `password` varchar(100) NOT NULL,
  `bdate` date DEFAULT NULL,
  `age` int(3) unsigned zerofill DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `height` int DEFAULT NULL,
  `paddress` varchar(60) DEFAULT NULL,
  `caddress` varchar(60) DEFAULT 'SameAsPermanent',
  `bloodType` varchar(45) DEFAULT NULL,
  `profilename` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid_UNIQUE` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES (1,'Shubham Sahane','test@gmail.com','8552804872','123456789','1999-10-27',023,'Male',73,6,'At.Po. Chas Tal.Sinnar Dist.Nashik 422606','At.Po. Chas Tal.Sinnar Dist.Nashik 422606','B+','user.png','2022-03-17 00:23:42'),(2,'sakshi','test1@gmail.com','2356890643','123456789','2022-03-10',011,'Female',10,4,'nagar','nagar','B+','user.png','2022-03-17 00:23:42'),(3,'abc2','test2@gmail.com','8552804872','123456789','2022-02-21',023,'Male',65,5,'At.Chas Tal.Sinnar Dist.Nashik 422606','SameAsPermanent','AB+','user.png','2022-03-17 00:23:42'),(4,'abc3','test3@gmail.com','8552804872','123456789','2022-02-21',023,'Male',67,6,'At.Chas Tal.Sinnar Dist.Nashik 422606','SameAsPermanent','O+','user.png','2022-03-17 00:23:42'),(5,'abc4','test4@gmail.com','8552804872','123456789','2022-02-21',023,'Male',63,4,'At.Chas Tal.Sinnar Dist.Nashik 422606','SameAsPermanent','AB-','user.png','2022-03-17 00:23:42'),(6,'abc5','test5@gmail.com','8552804872','123456789','2022-02-21',023,'Male',62,5,'At.Chas Tal.Sinnar Dist.Nashik 422606','SameAsPermanent','B-','user.png','2022-03-17 00:23:42'),(7,'abc6','test7@gmail.com','8552804872','123456789','2022-02-21',025,'Male',61,4,'At.Chas Tal.Sinnar Dist.Nashik 422606','SameAsPermanent','O-','user.png','2022-03-17 00:23:42'),(8,'abc7','test6@gmail.com','8552804872','123456789','2022-02-21',033,'Male',69,6,'At.Chas Tal.Sinnar Dist.Nashik 422606','SameAsPermanent','A-','user.png','2022-03-17 00:23:42'),(9,'Sakshi','test8@gmail.com','8552804872','123456789','2022-02-21',022,'Female',42,5,'At.Rahuri Tal.Sangamner Dist.Anagar 422605','SameAsPermanent','AB-','user.png','2022-03-17 00:23:42'),(10,'NA','test9@gmail.com','0','123456789',NULL,NULL,NULL,NULL,NULL,NULL,'SameAsPermanent',NULL,'user.png','2022-03-17 00:23:42'),(11,'NA','test10@gmail.com','0','123456789',NULL,NULL,NULL,NULL,NULL,NULL,'SameAsPermanent',NULL,'user.png','2022-03-17 00:23:42'),(12,'NA','test11@gmail.com','0','123456789',NULL,NULL,NULL,NULL,NULL,NULL,'SameAsPermanent',NULL,'user.png','2022-03-17 00:23:42'),(13,'NA','test12@gmail.com','0','123456789',NULL,NULL,NULL,NULL,NULL,NULL,'SameAsPermanent',NULL,'user.png','2022-03-17 00:23:42'),(14,'NA','test13@gmail.com','0','123456789',NULL,NULL,NULL,NULL,NULL,NULL,'SameAsPermanent',NULL,'user.png','2022-03-17 00:23:42'),(15,'patel','patel@gmail.com','7778886669','123456789','2022-03-01',080,'Male',56,6,'Rahuri','Rahuri','O-',NULL,'2022-03-21 12:27:03'),(16,'NA','nikhil@gmail.com','0','123456789',NULL,NULL,NULL,NULL,NULL,NULL,'SameAsPermanent',NULL,NULL,'2022-03-21 12:30:12');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientambulance`
--

DROP TABLE IF EXISTS `patientambulance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patientambulance` (
  `ptid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `charges` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`ptid`),
  UNIQUE KEY `ptid_UNIQUE` (`ptid`),
  KEY `patientambu_idx` (`pid`),
  CONSTRAINT `patientambu` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patientambulance`
--

LOCK TABLES `patientambulance` WRITE;
/*!40000 ALTER TABLE `patientambulance` DISABLE KEYS */;
/*!40000 ALTER TABLE `patientambulance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientbill`
--

DROP TABLE IF EXISTS `patientbill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patientbill` (
  `invoiceid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `pname` varchar(45) DEFAULT NULL,
  `pemail` varchar(45) DEFAULT NULL,
  `pcontact` decimal(10,0) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `DoctorFee` int DEFAULT '0',
  `AmbulanceCharge` int DEFAULT '0',
  `PharmacyTotal` int DEFAULT '0',
  `BedCharge` int DEFAULT '0',
  `MRI` int DEFAULT '0',
  `GST` int DEFAULT '0',
  `GrandTotal` int DEFAULT '0',
  `CtScan` int DEFAULT '0',
  `Ot` int DEFAULT '0',
  `btransfusion` int DEFAULT '0',
  `Dialysis` int DEFAULT '0',
  `dexa` int DEFAULT '0',
  `Ultrasound` int DEFAULT '0',
  `X_ray` int DEFAULT '0',
  `ecg` int DEFAULT '0',
  `Other` int DEFAULT '0',
  `status` varchar(45) DEFAULT 'Unpaid',
  `refDocname` varchar(45) DEFAULT NULL,
  `refDocNum` decimal(10,0) DEFAULT NULL,
  `refDocemail` varchar(45) DEFAULT NULL,
  `discount` int DEFAULT '0',
  PRIMARY KEY (`invoiceid`),
  UNIQUE KEY `bid_UNIQUE` (`invoiceid`),
  KEY `patientid_idx` (`pid`),
  CONSTRAINT `patientid` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patientbill`
--

LOCK TABLES `patientbill` WRITE;
/*!40000 ALTER TABLE `patientbill` DISABLE KEYS */;
INSERT INTO `patientbill` VALUES (1,1,'Shubham','test@gmail.com',1234569872,'2022-03-17 02:43:11',200,100,300,500,4000,20,500,4000,3000,500,500,0,0,0,0,0,'Paid','Shubham',8552804872,'shubham@gmail.com',0),(2,2,'abc','test2@gmail.com',4567892136,'2022-03-17 02:43:11',200,100,500,500,4000,21,700,4000,3000,500,500,0,0,0,0,0,'Unpaid','Sakshi',9309887572,'sakshi@gmail.com',0);
/*!40000 ALTER TABLE `patientbill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientdischarge`
--

DROP TABLE IF EXISTS `patientdischarge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patientdischarge` (
  `pdid` int NOT NULL AUTO_INCREMENT,
  `patientid` int DEFAULT NULL,
  `referalDoctorid` int DEFAULT NULL,
  `dischargeDate` date DEFAULT NULL,
  `dischargeTime` time DEFAULT NULL,
  `conditionAtDischarge` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pdid`),
  UNIQUE KEY `pdid_UNIQUE` (`pdid`),
  KEY `patientdisc_idx` (`patientid`),
  KEY `refdoctor_idx` (`referalDoctorid`),
  CONSTRAINT `patientdisc` FOREIGN KEY (`patientid`) REFERENCES `patient` (`pid`),
  CONSTRAINT `refrdoctor` FOREIGN KEY (`referalDoctorid`) REFERENCES `hospitalstaff` (`hsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patientdischarge`
--

LOCK TABLES `patientdischarge` WRITE;
/*!40000 ALTER TABLE `patientdischarge` DISABLE KEYS */;
/*!40000 ALTER TABLE `patientdischarge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientgrandtotal`
--

DROP TABLE IF EXISTS `patientgrandtotal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patientgrandtotal` (
  `gtid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `GrandTotal` varchar(45) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`gtid`),
  UNIQUE KEY `gtid_UNIQUE` (`gtid`),
  KEY `patientgt_idx` (`pid`),
  CONSTRAINT `patientgt` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patientgrandtotal`
--

LOCK TABLES `patientgrandtotal` WRITE;
/*!40000 ALTER TABLE `patientgrandtotal` DISABLE KEYS */;
/*!40000 ALTER TABLE `patientgrandtotal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientvaccine`
--

DROP TABLE IF EXISTS `patientvaccine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patientvaccine` (
  `avid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `vid` int DEFAULT NULL,
  `status` varchar(45) DEFAULT 'pending' COMMENT 'pending_OverDue_Given',
  `scheduledDate` datetime DEFAULT NULL,
  `givenDate` datetime DEFAULT NULL,
  `givenAge` int DEFAULT NULL,
  `manufacturer` varchar(45) DEFAULT NULL,
  `batchNumber` varchar(45) DEFAULT NULL,
  `manufactureDate` date DEFAULT NULL,
  PRIMARY KEY (`avid`),
  UNIQUE KEY `avid_UNIQUE` (`avid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patientvaccine`
--

LOCK TABLES `patientvaccine` WRITE;
/*!40000 ALTER TABLE `patientvaccine` DISABLE KEYS */;
/*!40000 ALTER TABLE `patientvaccine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permenantmedication`
--

DROP TABLE IF EXISTS `permenantmedication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permenantmedication` (
  `mid` int NOT NULL AUTO_INCREMENT,
  `pid` int NOT NULL,
  `Medname` varchar(100) DEFAULT NULL,
  `Content` varchar(100) DEFAULT NULL,
  `referalDoctor` varchar(45) DEFAULT 'NA',
  `dcontact` int DEFAULT NULL,
  `Quantity` varchar(45) DEFAULT NULL,
  `dosetime` varchar(45) DEFAULT NULL,
  `dosesize` varchar(45) DEFAULT NULL,
  `instruction` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mid`),
  UNIQUE KEY `mid_UNIQUE` (`mid`),
  KEY `patientmedication_idx` (`pid`),
  CONSTRAINT `patientmedication` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permenantmedication`
--

LOCK TABLES `permenantmedication` WRITE;
/*!40000 ALTER TABLE `permenantmedication` DISABLE KEYS */;
INSERT INTO `permenantmedication` VALUES (1,1,'acsc','abc 5mg psfs 10mg','acbs',1232123213,'20','morning','1tab',NULL);
/*!40000 ALTER TABLE `permenantmedication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pharmacymedtotal`
--

DROP TABLE IF EXISTS `pharmacymedtotal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pharmacymedtotal` (
  `pbid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `MedName` varchar(45) DEFAULT NULL,
  `Quantity` varchar(45) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `paymentFlag` char(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`pbid`),
  UNIQUE KEY `pbid_UNIQUE` (`pbid`),
  KEY `pidbill_idx` (`pid`),
  CONSTRAINT `pidbill` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pharmacymedtotal`
--

LOCK TABLES `pharmacymedtotal` WRITE;
/*!40000 ALTER TABLE `pharmacymedtotal` DISABLE KEYS */;
/*!40000 ALTER TABLE `pharmacymedtotal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prescribedmedication`
--

DROP TABLE IF EXISTS `prescribedmedication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prescribedmedication` (
  `pmid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `referralDocID` int DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `medName` varchar(45) DEFAULT NULL,
  `containt` varchar(100) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `dosetime` varchar(45) DEFAULT NULL,
  `dosesize` varchar(45) DEFAULT NULL,
  `instruction` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pmid`),
  UNIQUE KEY `pmid_UNIQUE` (`pmid`),
  KEY `patientpriscribtion_idx` (`pid`),
  KEY `prescribedoc_idx` (`referralDocID`),
  CONSTRAINT `patientpriscribtion` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`),
  CONSTRAINT `prescribedoc` FOREIGN KEY (`referralDocID`) REFERENCES `hospitalstaff` (`hsid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prescribedmedication`
--

LOCK TABLES `prescribedmedication` WRITE;
/*!40000 ALTER TABLE `prescribedmedication` DISABLE KEYS */;
/*!40000 ALTER TABLE `prescribedmedication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicetest`
--

DROP TABLE IF EXISTS `servicetest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicetest` (
  `stid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `availableStartTime` time DEFAULT NULL,
  `availableEndTime` time DEFAULT NULL,
  `serviceCharges` decimal(10,0) DEFAULT NULL,
  `discription` varchar(500) DEFAULT NULL,
  `imagename` varchar(45) DEFAULT 'user.png',
  PRIMARY KEY (`stid`),
  UNIQUE KEY `stid_UNIQUE` (`stid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicetest`
--

LOCK TABLES `servicetest` WRITE;
/*!40000 ALTER TABLE `servicetest` DISABLE KEYS */;
INSERT INTO `servicetest` VALUES (1,'Consultant','09:00:00','18:00:00',200,'A senior doctor who takes full responsibility for the clinical care of patients.A medical consult by definition is “a procedure whereby, upon request by one healthcare provider, another healthcare provider reviews a patient\'s medical history, examines the patient, and makes recommendations as to care and treatment.','consultant.jpg'),(2,'Pharmacy','09:00:00','18:00:00',10,'A pharmacy is a retail shop which provides pharmaceutical drugs, among other products. At the pharmacy, a pharmacist oversees the fulfillment of medical prescriptions and is available to counsel patients about prescription and over-the-counter drugs or about healthcare and wellness issues.','pharmacy.jpg '),(3,'ECG','09:00:00','18:00:00',500,'Electrocardiography is the process of producing an electrocardiogram, a recording of the heart\'s electrical activity. It is an electrogram of the heart which is a graph of voltage versus time of the electrical activity of the heart using electrodes placed on the skin.','ecg.jpg'),(4,'ICU','09:00:00','18:00:00',1000,'An intensive care unit, also known as an intensive therapy unit or intensive treatment unit or critical care unit, is a special department of a hospital or health care facility that provides intensive care medicine.','icu.jpg'),(5,'Ambulance','09:00:00','18:00:00',800,'An ambulance is a medically equipped vehicle which transports patients to treatment facilities. Typically, out-of-hospital medical care is provided to the patient. Ambulances are used to respond to medical emergencies by emergency medical services.','ambulance.jpg '),(6,'Laboratory','09:00:00','18:00:00',10,'A medical laboratory or clinical laboratory is a laboratory where tests are carried out on clinical specimens to obtain information about the health of a patient to aid in diagnosis, treatment, and prevention of disease.','laboratory.jpg '),(7,'X-ray','09:00:00','18:00:00',500,'An X-ray, or, much less commonly, X-radiation, is a penetrating form of high-energy electromagnetic radiation. Most X-rays have a wavelength ranging from 10 picometers to 10 nanometers, corresponding to frequencies in the range 30 petahertz to 30 exahertz and energies in the range 145eV to 124 keV.','X-ray1.jpg '),(8,'Ultrasound','09:00:00','18:00:00',1000,'Ultrasound scanning is a diagnostic tool used to examine many different parts of the body including the liver, pelvic organs, kidneys and gallbladder.It’s also very useful in identifying musculoskeletal injuries in joints such as the shoulder, knee and ankle and Also examine blood flow and blocked blood vessels.','Ultrasound.jpg '),(9,'Bone Densitometry(DEXA)','09:00:00','18:00:00',900,'Bone densitometry, also called dual-energy x-ray absorptiometry, DEXA or DXA, uses a very small dose of ionizing radiation to produce pictures of the inside of the body (usually the lower (or lumbar) spine and hips) to measure bone loss.','Bone Densitometry(DEXA).jpg '),(10,'MRI','09:00:00','18:00:00',5000,'Magnetic resonance imaging is a medical imaging technique used in radiology to form pictures of the anatomy and the physiological processes of the body. MRI scanners use strong magnetic fields, magnetic field gradients, and radio waves to generate images of the organs in the body.','MRI.jpg'),(11,'CT Scan','09:00:00','18:00:00',4000,'A CT scan or computed tomography scan is a medical imaging technique used in radiology to obtain detailed internal images of the body noninvasively for diagnostic purposes. The personnel that perform CT scans are called radiographers or radiology technologists.','CT.jpg'),(12,'Surgical Services','09:00:00','18:00:00',10000,'An operating theater is a facility within a hospital where surgical operations are carried out in an aseptic environment. Historically, the term \"operating theater\" referred to a non-sterile, tiered theater or amphitheater in which students and other spectators could watch surgeons perform surgery.','surgery.jpg'),(13,'Blood Transfusion','09:00:00','18:00:00',500,'Blood transfusion is the process of transferring blood products into one\'s circulation intravenously. Transfusions are used for various medical conditions to replace lost components of the blood.','transfusion.jpg '),(14,'Dialysis','09:00:00','18:00:00',500,'dialysis is the process of removing excess water, solutes, and toxins from the blood in people whose kidneys can no longer perform these functions naturally. This is referred to as renal replacement therapy. The first successful dialysis was performed in 1943.','dialysis.jpg '),(15,'General','09:00:00','18:00:00',600,'General appoinment ','dialysis.jpg'),(16,'abc','08:13:00','07:12:00',800,' savhas ashbh  shc ash  hsa c a s s n anms cms  s,n asn c','user.png');
/*!40000 ALTER TABLE `servicetest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `symptoms`
--

DROP TABLE IF EXISTS `symptoms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `symptoms` (
  `sid` int NOT NULL AUTO_INCREMENT,
  `commonSymptoms` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `sid_UNIQUE` (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `symptoms`
--

LOCK TABLES `symptoms` WRITE;
/*!40000 ALTER TABLE `symptoms` DISABLE KEYS */;
INSERT INTO `symptoms` VALUES (1,'Cold'),(2,'Headache'),(3,'Feaver'),(4,'Muscle aches'),(5,'Coughing'),(6,'Diarrhea'),(7,'Cough'),(8,'Weakness'),(9,'Vomiting'),(10,'Sore Throat');
/*!40000 ALTER TABLE `symptoms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tests` (
  `tid` int NOT NULL AUTO_INCREMENT,
  `pid` int NOT NULL,
  `requestedTestsId` int DEFAULT NULL,
  `status` varchar(45) DEFAULT 'Under Processing',
  `details` varchar(45) DEFAULT 'NA',
  `result` varchar(100) DEFAULT 'NA',
  `expectedrest` varchar(100) DEFAULT 'NA',
  `remark` varchar(45) DEFAULT 'NA',
  `sampledate` date DEFAULT NULL,
  `fees` int DEFAULT NULL,
  `requestedTestsname` varchar(45) DEFAULT 'NA',
  UNIQUE KEY `tid_UNIQUE` (`tid`),
  KEY `pid_idx` (`pid`),
  KEY `testreq_idx` (`requestedTestsId`),
  CONSTRAINT `pid` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`),
  CONSTRAINT `testreq` FOREIGN KEY (`requestedTestsId`) REFERENCES `servicetest` (`stid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tests`
--

LOCK TABLES `tests` WRITE;
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
INSERT INTO `tests` VALUES (1,1,1,'Comleted','Positive','Positive','Nagative','Positive','2022-03-01',200,'NA'),(2,1,2,'Comleted','Positive','Positive','Nagative','Positive','2022-03-01',300,'NA'),(3,1,3,'Completed','scsds','424','5424','Positive','2022-03-01',500,'NA'),(4,1,4,'Under Processing','NA','NA','NA','NA',NULL,NULL,'NA'),(5,1,2,'Under Processing','NA','NA','NA','NA',NULL,NULL,'NA'),(6,2,13,'Under Processing','NA','NA','NA','NA',NULL,NULL,'NA'),(7,2,13,'Under Processing','NA','NA','NA','NA',NULL,NULL,'NA');
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transfusion`
--

DROP TABLE IF EXISTS `transfusion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transfusion` (
  `tid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `refDocid` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `bp` varchar(45) DEFAULT NULL,
  `hrate` varchar(45) DEFAULT NULL,
  `temperature` varchar(45) DEFAULT NULL,
  `Report` varchar(100) DEFAULT NULL,
  `reportflag` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  UNIQUE KEY `tid_UNIQUE` (`tid`),
  KEY `pidtrans_idx` (`pid`),
  KEY `doctrans_idx` (`refDocid`),
  CONSTRAINT `doctrans` FOREIGN KEY (`refDocid`) REFERENCES `hospitalstaff` (`hsid`),
  CONSTRAINT `pidtrans` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transfusion`
--

LOCK TABLES `transfusion` WRITE;
/*!40000 ALTER TABLE `transfusion` DISABLE KEYS */;
INSERT INTO `transfusion` VALUES (1,11,NULL,NULL,'40','72','35','abcd',NULL);
/*!40000 ALTER TABLE `transfusion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ultrasound`
--

DROP TABLE IF EXISTS `ultrasound`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ultrasound` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `refDocid` int DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `report` varchar(100) DEFAULT NULL,
  `reportflag` varchar(45) DEFAULT NULL,
  `physicaltst` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid_UNIQUE` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ultrasound`
--

LOCK TABLES `ultrasound` WRITE;
/*!40000 ALTER TABLE `ultrasound` DISABLE KEYS */;
INSERT INTO `ultrasound` VALUES (1,1,2,'Positive','abc','0','Complete '),(2,2,3,'Positive','abc','0','Complete '),(3,3,1,'Positive','abc','0','Complete '),(4,12,NULL,'s','c',NULL,'Positive ');
/*!40000 ALTER TABLE `ultrasound` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccines`
--

DROP TABLE IF EXISTS `vaccines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaccines` (
  `vid` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `doseNumber` int DEFAULT NULL,
  `doseSize` varchar(20) DEFAULT NULL COMMENT 'dose number and dose size ',
  `minAge` varchar(45) DEFAULT NULL,
  `maxAge` varchar(45) DEFAULT NULL,
  `annual` varchar(20) DEFAULT NULL,
  `site` varchar(80) DEFAULT NULL,
  `route` varchar(80) DEFAULT NULL,
  `optional` char(10) DEFAULT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaccines`
--

LOCK TABLES `vaccines` WRITE;
/*!40000 ALTER TABLE `vaccines` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ward`
--

DROP TABLE IF EXISTS `ward`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ward` (
  `wid` int NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL COMMENT 'icu_specialRoom_semiPositive_general',
  `rNumber` varchar(20) DEFAULT NULL,
  `bedQuality` int DEFAULT NULL,
  `chargesperbed` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`wid`),
  UNIQUE KEY `wid_UNIQUE` (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ward`
--

LOCK TABLES `ward` WRITE;
/*!40000 ALTER TABLE `ward` DISABLE KEYS */;
/*!40000 ALTER TABLE `ward` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `x_ray`
--

DROP TABLE IF EXISTS `x_ray`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `x_ray` (
  `xid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `refDocid` int DEFAULT NULL,
  `reportflag` varchar(45) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `report` varchar(100) DEFAULT NULL,
  `anesthesia` varchar(45) DEFAULT NULL,
  `physicaltst` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`xid`),
  UNIQUE KEY `xid_UNIQUE` (`xid`),
  KEY `xpid_idx` (`pid`),
  KEY `xdid_idx` (`refDocid`),
  CONSTRAINT `xdid` FOREIGN KEY (`refDocid`) REFERENCES `hospitalstaff` (`hsid`),
  CONSTRAINT `xpid` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `x_ray`
--

LOCK TABLES `x_ray` WRITE;
/*!40000 ALTER TABLE `x_ray` DISABLE KEYS */;
INSERT INTO `x_ray` VALUES (1,1,1,'0','Positive','Positive','20ml','Complete '),(2,2,2,'0','Positive','Positive','20ml','Complete'),(3,3,3,'0','Positive','Positive','0','Complete'),(4,4,4,'0','Positive','Positive','0','Complete'),(5,2,1,'0','Positive','Positive','0','Complete'),(6,1,2,'0','Positive','Positive','20ml','Complete'),(7,3,3,'0','Positive','Positive','0','Complete'),(8,5,NULL,NULL,'Positive','sdvdevdsv','10ml','Positive'),(9,5,NULL,NULL,'Positive','sdvdevdsv','10ml','Positive'),(10,9,NULL,NULL,'Positive','vsvsdv','10ml','Positive'),(11,9,NULL,NULL,'Positive','vsvsdv','10ml','Positive');
/*!40000 ALTER TABLE `x_ray` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yoga`
--

DROP TABLE IF EXISTS `yoga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yoga` (
  `yid` int NOT NULL AUTO_INCREMENT,
  `yogaTypes` varchar(45) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`yid`),
  UNIQUE KEY `yid_UNIQUE` (`yid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yoga`
--

LOCK TABLES `yoga` WRITE;
/*!40000 ALTER TABLE `yoga` DISABLE KEYS */;
/*!40000 ALTER TABLE `yoga` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-05 18:41:01
