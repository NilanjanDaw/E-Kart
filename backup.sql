-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.36-community-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema project
--

CREATE DATABASE IF NOT EXISTS project;
USE project;

--
-- Definition of table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `name` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`name`,`pwd`) VALUES 
 ('dravid','KLM');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


--
-- Definition of table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE `adminlogin` (
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

/*!40000 ALTER TABLE `adminlogin` DISABLE KEYS */;
INSERT INTO `adminlogin` (`name`,`password`) VALUES 
 ('dravid','KLM'),
 ('nilanjan','KLM');
/*!40000 ALTER TABLE `adminlogin` ENABLE KEYS */;


--
-- Definition of table `electronics`
--

DROP TABLE IF EXISTS `electronics`;
CREATE TABLE `electronics` (
  `type` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pid` varchar(50) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL,
  `stock` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

/*!40000 ALTER TABLE `electronics` DISABLE KEYS */;
INSERT INTO `electronics` (`type`,`company`,`name`,`pid`,`price`,`details`,`image`,`video`,`stock`) VALUES 
 ('mobile','Samsung','Galaxy S','MOBSGS',5000,'5mp camera','samsunggalaxys.jpg','www.youtube.com/embed/WXmO68LNlqc',500),
 ('mobile','Samsung','Galaxy Y','MOBSGY',6000,'2.5mp camera','samsunggalaxyy.jpg','www.youtube.com/embed/zGCJnfsoHYY',700),
 ('mobile','Samsung','Galaxy S3','MOBSGS3',12000,'5mp camera','samsunggalaxys3.jpg','www.youtube.com/embed/8UjnBU2BueQ',700),
 ('mobile','Nokia','Lumia 520','MOBNL520',12000,'5mp camera','nokialumia520.jpg','www.youtube.com/embed/IQhdUwLXxXY',700),
 ('mobile','Sony','Xperia M','MOBSXM',12999,'8mp camera and android jelly bean','xperiam.jpg','www.youtube.com/embed/NEiz0NCwpLo',450),
 ('laptop','Dell','Vostro 2520','LAPDV2520',35000,'i5 3rd Generation 4gb ram 500gb harddisk','vostro2520.jpg','www.youtube.com/embed/c5EKqJrfyuk',450),
 ('laptop','Dell','Inspiron 15','LAPDI15',49000,'i5 3rd Generation 6gb ram 1tb harddisk','inspiron15.jpg','www.youtube.com/embed/EnzW5h0jRP0',450),
 ('laptop','Lenovo','IdeaPad Y510P','LAPLIY510P',59000,'i5 4th Generation 1TB Win8 2GB graphics','ideapady510p.jpg','www.youtube.com/embed/MieslCjlgE',725),
 ('laptop','Lenovo','Essential B490','LAPLEB490',28000,'i3 3rd Generation 500gb Win8','essentialB490.jpg','www.youtube.com/embed/hwHtczJy0Gc',800),
 ('laptop','HP','Pavilion 15-n013TX','LAPHPP15',47500,'i5 4th Generation 1TB 4GB RAM 2GB grapHICS','hppavilion15.jpg','www.youtube.com/embed/ZjBci_k7z1o',478),
 ('laptop','Apple','Macbook Air MD761HN/B','LAPAMAMD761',79000,'Ci5 4GB 256GB MAC OS X MAVERICKS','md761.jpg','www.youtube.com/embed/xrc1ulleppk',200),
 ('computer','HP','23-H011IN PAVILION ALL IN ONE','COMHP23',69000,'i5 4th Generation 1TB Win8.1','hpallinone.jpg','www.youtube.com/embed/Va4sqcjj6tE',299),
 ('computer','Lenovo','C260 ALL IN ONE DESKTOP','COMLC260',79000,'i5 4th Generation 500GB Win8.1','lenovoallinone.jpg','www.youtube.com/embed/9XDOnKu4MM0',275),
 ('mobile','Sony','Xperia E','MOBSXE',6200,'Android v4.1 OS,3.2MP Camera,1GHz Processor','xperiae.jpg','www.youtube.com/embed/SZLOpJcDpY0',780),
 ('mobile','Nokia','Lumia 1320','MOBNL1320',18400,'5MP Camera,Windows Phone 8 OS,6inch LED Touchscreen','lumia1320.jpg','www.youtube.com/embed/G-DepAJoZHQ',136),
 ('mobile','Nokia','Lumia 625','MOBNL625',13500,'5MP Camera,Windows Phone 8 OS,4.7inch LED Touchscreen','lumia625.jpg','www.youtube.com/embed/KqT5l5AqQCE',230),
 ('computer','Asus','Transformer P-1801','COMATP1801',107300,'3rd Generation Ci5,1TB Harddisk,Windows 8,2GB Graphics,Touch','asus1.jpg','www.youtube.com/embed/i4qefX7Xj7Q',300),
 ('computer','HP','Slate 21-K100 ALL IN ONE','COMHPS',31000,'2GB RAM,500GB Harddisk,Windows 8.1','slate.jpg','www.youtube.com/embed/NbsQgHtePd0',275),
 ('laptop','Apple','Macbook Pro','LAPAMP',101500,'Retina Display,Core i5 4th Gen,8GB DDR3 RAM,Mac OS X Mavericks','macpro.jpg','www.youtube.com/embed/Ng7734dN420',75),
 ('mobile','Motorola','Moto X','MOBMMX',21000,'8mp camera,Kitkat,16GB','motox.jpg','www.youtube.com/embed/CJTlB_S7ct0',100),
 ('mobile','Motorola','Moto G','MOBMMG',14000,'13mp camera,Kitkat,32GB','motog.jpg','www.youtube.com/embed/KFD0Nm2dOHw',999),
 ('mobile','Motorola','Moto E','MOBMME',16000,'8mp camera\r\n','motoe.jpg','www.youtube.com/embed/v8_OiGdZRTM',920),
 ('computer','Dell','Inspiron 660s','COMDI660',36000,'4gb ram,500gb hdd,ubuntu 12.04','inspiron660.jpg','www.youtube.com/embed/sfdgKgG3NTc',99),
 ('computer','Dell','Inspiron 3647','COMDI3647',35000,'6gb ram,1tb hdd,4th Gen i3 processor,ubuntu 12.04','3647.jpg','www.youtube.com/embed/ThPgN-vz30k',450),
 ('laptop','Lenovo','Thinkpad Yoga','LAPLTY',60000,'6gb ram,1TB hdd,windows 8.1 i7 4th Gen','yoga.jpg','www.youtube.com/embed/4x4MXzIX-kk',200);
/*!40000 ALTER TABLE `electronics` ENABLE KEYS */;


--
-- Definition of table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`name`,`email`,`password`,`address`,`contact_no`) VALUES 
 ('','','','',0),
 ('','','','',0),
 ('nana','anan@nana.com','KLM','abanaal aina aan,',12345678),
 ('asnkasn','asjnaksn@jdajdjdb','JKLM','skdnskd s dsmd adja dmz',1223456),
 ('xxx','xxx@xxx.com','’’’','abcdefghijklmnopqrstuvw',0),
 ('prakash','pokai@goleft.com','ƒƒ','silpara',45),
 ('j','jj','ƒƒƒ','jjjj',45),
 ('asasas','dadadad@sfdfs','JKLMN','sdjabdjadja adjad adjad adjad xajd',12345678),
 ('k','k','„','k',5),
 ('s','s','Œ','s',0),
 ('s','s','Œ','s',0),
 ('treth','yuiuioio@rtg','’‚„T…@T','silpara',0),
 ('venkat','kk','„„','kk',544),
 ('lo','lo','…','ll',5555),
 ('a','a','z','a',0),
 ('nilu','nilanjandaw@gmail.com','‹~zŒ','residence',91912356);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
