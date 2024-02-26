-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: adzikro
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku` (
  `BukuId` int(11) NOT NULL,
  `Judul` varchar(255) DEFAULT NULL,
  `Penulis` varchar(255) DEFAULT NULL,
  `Penerbit` varchar(255) DEFAULT NULL,
  `TahunTerbit` int(11) DEFAULT NULL,
  `KategoriId` int(11) NOT NULL,
  PRIMARY KEY (`BukuId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES (1,'komunikasi suami istri','','',2000,0),(2,'konflik dan perceraian','','',2000,0),(3,'masa  masa pengantin baru','','',2000,0),(4,'poligami','','',2000,0),(5,'saat tepat untuk berhias','','',2000,0),(6,'sentuhan mesra saat berdua','','',2000,0),(7,'tinggal dimana setelah menikah','','',2000,0),(8,'komunikasi kita dan pendidikan anak','','',2000,0),(9,'keindahan tak sekedar itu','','',2000,0),(10,'keasyikan yang menghancurkan keluarga','','',2000,0),(11,'biarlah engkau yang tercantik dihatiku','Saha anu nyieuna','CV Bintang',2035,0),(12,'tuhan dimana fatimatuzzahra sekarang','Emen','Suremen',2023,0),(13,'sengketa irian merunjing','','',2000,1),(14,'presiden dapat mempengaruhi politik negara','','',2000,1),(15,'hati hati bawa hati','','',2000,1),(16,'pidato dalam resepsi konferesi guru taman pendidikan isla,,medan,tanggal 20 september 1951','','',2000,1),(17,'100 hadis dho\'if dan palsu yang masyhur di kalangan masyarakat','','',2000,1),(18,'bulugul marom','','',2000,1),(19,'arba\'in','','',2000,1),(20,'Fathul Baari','','',2000,1),(21,'fathul bari','','',2000,1),(22,'hadist 40 imam nawawi','','',2000,1),(23,'translation of sahih bukhori , book 1','','',2000,1),(24,'riyadhus shalihin','','',2000,1),(25,'silsilah hadist dhoif dan maudu jilid 1','','',2000,1),(26,'silsilah hadist dhoif dan maudu jilid 2','','',2000,1),(27,'bulugul marom jilid 1','','',2000,1),(28,'fathul bari jilid 2','','',2000,1),(29,'fathul bari jilid 3','','',2000,1),(30,'Syarah Hadist 40 imam nawawi','','',2000,1),(31,'kedudukan As sunnah dalam islam penjelasan sesatnya ingkarus sunnah','','',2000,1),(32,'syarhul arba\'iina haditsan an-nawawiyah','','',2000,1),(33,'mufrodat hadist','','',2000,1),(34,'securetraveler user\'s manual','','',2000,1),(35,'kamus 1','','',2000,1),(36,'kamus 2','','',2000,1),(37,'kamus 3','','',2000,1),(38,'kamus 4','','',2000,1),(39,'kamus 5','','',2000,1),(40,'kamus 6','','',2000,1),(41,'kamus 7','','',2000,1),(42,'kamus 8','','',2000,1),(43,'kamus tarjim','','',2000,1),(44,'kamus 9','','',2000,1),(45,'100 CARA UNTUK MENJADI BOSS SENDIRI','','',2000,1),(46,'Formula Rp200.000 setiap hari  tanfa harus keluar rumah','','',2000,1),(47,'bagaimana menjadi seorang yang kreatif','','',2000,1),(48,'Peluang industri berbahan baku kenaf','','',2000,1),(49,'Rahasia menjadi orang cemerlang dalam hidup','','',2000,1),(50,'bagaimana 100.000 orang supaya memberi 10.000 kepada anda','','',2000,1),(51,'bagaimana menjadi kaya dengan cara mudah','','',2000,1),(52,'Formula Rp200.000 setiap hari  tanfa harus keluar rumah','','',2000,1),(53,'can voice over ip word without dynamic nat','','',2000,1),(54,'high performence h,323 firewalling for volp olutios','','',2000,1),(55,'internetworking with tcp ip','','',2000,1),(56,'intructor guide','','',2000,1),(57,'Mysql 5 Dari Pemula Hingga mahir','','',2000,1),(58,'PC Rounter Dengan atauLinux','','',2000,1),(59,'securing volp network with pecific tehnigue comprehenive policies and volp- capable firewall','','',2000,1),(60,'USB in a Nutshell','','',2000,1),(61,'voice conferencing over ip network','','',2000,1),(62,'voice over ip overview','','',2000,1),(63,'A.B.I asyiknya belajar ipa','','',2000,1),(64,'ilmu pengetahuan alam 1','','',2000,1),(65,'ilmu pengetahuan sosial','','',2000,1),(66,'ilmu pengetahuan sosial (2)','','',2000,1),(67,'mari,belajar ilmu pengetahuan alam ipa','','',2000,1),(68,'matematika','','',2000,1),(69,'matematika 1','','',2000,1),(70,'pendidikan kewarganegaraan','','',2000,1),(71,'pkn 1','','',2000,1),(72,'pendidikan kewarganegaraan (2)','','',2000,1),(73,'aku bangga bahasa indonesia','','',2000,1),(74,'cinta berbahasa indonesia','','',2000,1),(75,'bahasa indonesia','','',2000,1),(76,'ilmu pengetahuan alam 2','','',2000,1),(77,'ilmu pengetahuan alam (2)','','',2000,1),(78,'ilmu pengetahuan sosial (3)','','',2000,1),(79,'ilmu pengetahuan sosial','','',2000,1),(80,'seneng matematika','','',2000,1),(81,'matematika 2','','',2000,1),(82,'mengenal lingkungan sekitar','','',2000,1),(83,'pendidikan kewarganegaraan','','',2000,1),(84,'bahasa indonesia','','',2000,1),(85,'asuransi pendidikan tidak memadai','','',2000,1),(86,'Usaha di rumahuntung  ','','',2000,1),(87,'untung  rugi arisan','','',2000,1),(88,'tanya invetitas saham','','',2000,1),(89,'bagaimana menjadi kaya dengan cara mudah','','',2000,1),(90,'apa untung nya punya kartu kredit','','',2000,1),(91,'tuhan dimana fatimatuzzahra sekarang','','',2000,1),(92,'Proposal Usaha Penggemukan Domba Anan farm','','',2000,1),(93,'untung  rugi arisan','','',2000,1),(94,'Usaha di rumah','','',2000,1),(95,'Jurnal kegiatan siswa','','',2000,1),(96,'Kata pengantar','','',2000,1),(97,'Peraturan mentri pendidikan,kebudayaan,Riset, dan teknologi republik indonesia','','',2000,1),(98,'Proposal BLM Pengembangan Usaha Mina Pedesaan Perikanan Budidaya','','',2000,1),(99,'Proposal Usaha Penggemukan Domba Anan Farm','','',2000,1),(100,'Fisika 1','','',2000,1),(101,'Sistem penjaminan mutu pendidik dan tenaga kependidikan terpadu','','',2000,1),(102,'Membangun critical thinking siswa sebagai basis inovasi untuk kemajuan bangsa','','',2000,1),(103,'50 Latihan +jawaban pemrograman java','','',2000,1),(104,'Appendix VI','','',2000,1),(105,'Java 1','','',2000,1),(106,'Java 2','','',2000,1),(107,'Kumpulan Program pascal','','',2000,1),(108,'Dongeng','','',2000,1),(109,'Menyelam & menemukan samudra PHP','','',2000,1),(110,'Fisika 2','','',2000,1),(111,'Matematika (3)','','',2000,1),(112,'24 Jam! Pintar pemrograman android','','',2000,1),(113,'Program','','',2000,1),(114,'BAB 2 bahasa dan algoritma pemrograman','','',2000,1),(115,'android dan anak tukang sayur','','',2000,1),(116,'tutorial lazarus','','',2000,1),(117,'belajar java dasar','','',2000,1),(118,'bahasa pemrograman','','',2000,1),(119,'logika dan algoritma','','',2000,1),(120,'silabus','','',2000,1),(121,'peran teknik nuklir di bidang hidrogeologi','','',2000,1),(122,'penafsiran anomali geomagnet','','',2000,1),(123,'kumpulan konsultasi seks','','',2000,1),(124,'rahasia sukses bos bos jepang','','',2000,1),(125,'the netwriting masters course','','',2000,1),(126,'Rumus sukses dalam memasarkan produk melalui internet','','',2000,1),(127,'Wasiat sufi imam komeini kepada putranya ahmad khomeini','','',2000,1),(128,'The choice islam and christianity-Dialog islam keristen-Ahmaed Deedat','','',2000,1),(129,'Membangun intrusion Detection system pada windows 2003 server','','',2000,1),(130,'Mengenal komunikasi data melalui layer OSI & TCP IP','','',2000,1),(131,'Men-diagnosis Permasalahan perangkat yang tersambung jaringan berbasis luas (WAN)','','',2000,1),(132,'SISTEM PENGKABELAN JARINGAN KOMPUTER','','',2000,1),(133,'Wireless LAN dan Hospot','','',2000,1),(134,'Administrasi jaringan Linux','','',2000,1),(135,'Mengapa menggunakan web proxy yang terintegrasi dengan antivirus','','',2000,1),(136,'jaringan','','',2000,1),(137,'DYNAMIC ROUTING','','',2000,1),(138,'Download Article','','',2000,1),(139,'Kritik matan Hadist menurut al-thahawi dalam bukunya syarh musykil al-atsar','','',2000,1),(140,'teori belajar dan pembelajran serta pkn sebagai pendidikan nilai ,moral ,dan norma','','',2000,1),(141,'Wasisat sufi bagian pertama','','',2000,1),(142,'Wasiat sufi bagian kedua','','',2000,1),(143,'E-learning Amazing Brain','','',2000,1),(144,'hipnonos bukan sulap bukan sihir','','',2000,1),(145,'dongeng seekor siput','','',2000,1),(146,'1001 Burung kertas','','',2000,1),(147,'bahasa indonesia','','',2000,1),(148,'alternatif dana pendidikan anak','','',2000,1),(149,'renungan fisika','','',2000,1),(150,'renungan renungan hariana dakwah','','',2000,1),(151,'cerita memngingat kebaikan orang yang dicintai','','',2000,1),(152,'i\'rob quran sorof dan penjelasannya bab 1','','',2000,1),(153,'i\'rob quran sorof dan penjelasannya bab 2','','',2000,1),(154,'i\'rob quran sorof dan penjelasannya bab 3','','',2000,1),(155,'i\'rob quran sorof dan penjelasannya bab 4 5 6','','',2000,1),(156,'i\'rob quran sorof dan penjelasannya bab 7 8','','',2000,1),(157,'i\'rob quran sorof dan penjelasannya bab 9 10','','',2000,1),(158,'i\'rob quran sorof dan penjelasannya bab 11 12','','',2000,1),(159,'i\'rob qura nsorof dan penjelasannya bab 12 13','','',2000,1),(160,'IDL for Hadware Programming','','',2000,1),(161,'Al-qur\'an','','',2000,1),(162,'Mukjizat al-quran','','',2000,1),(163,'nama-nama al-quran','','',2000,1),(164,'Riyadhus Shalihin','','',2000,1),(165,'Ulumul al-quran','','',2000,1),(166,'al-syafi\'i sebagai Bapak Ushul Fiqh','','',2000,1),(167,'Bagian satu Qaidah Ushuliyyah','','',2000,1),(168,'Kaidah Bahasa hukum , Kaidah Qiyas dan Kaidah Isthlah','','',2000,1),(169,'Prinsip Ilmu Ushul Fiqih','','',2000,1),(170,'Bulughul Marom','','',2000,1),(171,'Buku-1 Bimbingan Teknis Peningkatan Mutu Manajamen LKP','','',2000,1),(172,'Buku-2 Bimbingan Teknis Peningkatan Mutu Manajamen LKP','','',2000,1),(173,'Buku-3 Bimbingan Teknis Peningkatan Mutu Manajemen LKP','','',2000,1),(174,'Buku-4 Bimbingan Teknis Peningkatan Mutu Manajemen LKP','','',2000,1),(175,'Buku-5 Bimbingan Teknis Peningkatan Mutu Manajemen LKP','','',2000,1),(176,'Pendidikan Pancasila dan Kewargaanegara','','',2000,1),(177,'Mysql 5 Dari Pemula Hingga mahir','','',2000,1),(178,'Fathul Baari','','',2000,1);
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_relasi`
--

DROP TABLE IF EXISTS `kategori_relasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_relasi` (
  `KategoriBukuId` int(11) NOT NULL,
  `BukuId` int(11) DEFAULT NULL,
  `KategoriId` int(11) DEFAULT NULL,
  PRIMARY KEY (`KategoriBukuId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_relasi`
--

LOCK TABLES `kategori_relasi` WRITE;
/*!40000 ALTER TABLE `kategori_relasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `kategori_relasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategoribuku`
--

DROP TABLE IF EXISTS `kategoribuku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategoribuku` (
  `KategoriId` int(11) NOT NULL,
  `NamaKategori` varchar(266) DEFAULT NULL,
  PRIMARY KEY (`KategoriId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategoribuku`
--

LOCK TABLES `kategoribuku` WRITE;
/*!40000 ALTER TABLE `kategoribuku` DISABLE KEYS */;
INSERT INTO `kategoribuku` VALUES (1,'akhlaq'),(2,'berita'),(3,'bioteknologi'),(4,'bisnis'),(5,'budidaya'),(6,'editor'),(7,'fikih'),(8,'fisika'),(9,'geologi'),(10,'Hadist'),(11,'komputer'),(12,'Filsafat'),(13,'pendidikan'),(14,'program'),(15,'sejarah'),(16,'tafsir'),(17,'tasawuf'),(18,'tauhid'),(19,'Usul Fikh');
/*!40000 ALTER TABLE `kategoribuku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `koleksipribadi`
--

DROP TABLE IF EXISTS `koleksipribadi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `koleksipribadi` (
  `KoleksoId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `BukuId` int(11) DEFAULT NULL,
  PRIMARY KEY (`KoleksoId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `koleksipribadi`
--

LOCK TABLES `koleksipribadi` WRITE;
/*!40000 ALTER TABLE `koleksipribadi` DISABLE KEYS */;
/*!40000 ALTER TABLE `koleksipribadi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peminjam`
--

DROP TABLE IF EXISTS `peminjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peminjam` (
  `PeminjamId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `BukuId` int(11) DEFAULT NULL,
  `TanggalPeminjaman` date DEFAULT NULL,
  `TanggalPengembalian` date DEFAULT NULL,
  `status` text DEFAULT NULL,
  PRIMARY KEY (`PeminjamId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peminjam`
--

LOCK TABLES `peminjam` WRITE;
/*!40000 ALTER TABLE `peminjam` DISABLE KEYS */;
INSERT INTO `peminjam` VALUES (2,1,11,'2024-02-21','2024-02-21','dikembalikan'),(3,3,8,'2024-02-21','2024-02-22','dikembalikan'),(4,3,3,'2024-02-21','2024-02-22','dikembalikan'),(5,2,4,'2024-02-21','2024-02-22','dikembalikan'),(6,2,5,'2024-02-21','2024-02-28','dipinjam'),(7,7,6,'2024-02-22','2024-02-29','dipinjam'),(8,6,9,'2024-02-22','2024-02-29','dipinjam'),(9,1,3,'2024-02-22','2024-02-22','dikembalikan'),(10,2,12,'2024-02-22','2024-02-22','dikembalikan'),(11,21,106,'2024-02-22','2024-02-29','dipinjam'),(12,9,173,'2024-02-22','2024-02-29','dipinjam'),(13,14,170,'2024-02-22','2024-02-29','dipinjam'),(14,11,115,'2024-02-22','2024-02-29','dipinjam');
/*!40000 ALTER TABLE `peminjam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ulasanbuku`
--

DROP TABLE IF EXISTS `ulasanbuku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ulasanbuku` (
  `UlasanId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `BukuId` int(11) DEFAULT NULL,
  `Ulasan` text DEFAULT NULL,
  `rating` double DEFAULT NULL,
  PRIMARY KEY (`UlasanId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ulasanbuku`
--

LOCK TABLES `ulasanbuku` WRITE;
/*!40000 ALTER TABLE `ulasanbuku` DISABLE KEYS */;
INSERT INTO `ulasanbuku` VALUES (1,1,11,'ini test ulasan sebuanh buku yang berjudul biarlah engkau yang tercantik dihatiku, buku terbit tahun 2035 oleh seorang penulis ttidak dikenali dan diterbitkan oleh CV Bintang',3.5),(2,3,3,'Test Ulasan berikutnya buku yang berjudul masa-masa pengantin baru, buku yang saya pinjam belum sempat dibaca karena malas dan jarang baca sehingga kalau sedang baca buku  pusiiing',4);
/*!40000 ALTER TABLE `ulasanbuku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `NamaLengkap` varchar(255) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Memei','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','memei@dot.com','linda melani','Tugu 02/13 ager',3),(2,'Nenenng','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','neneng@dot.com','Siti nuraini','Tugu 02/13 ager',3),(3,'Intan','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','intan@dot.com','Tsya Intan tartir','Tugu 02/13 ager',3),(4,'admin','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','admin@gmail.com','Admin Perpustakaan','Pst Adzikro ',1),(5,'pekerja','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','admin@gmail.com','Bandung','Ini admin',2),(7,'ujang','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','ronaldo@ololeho.com','Ujang Ronaldo Nontot Leho','Pastina di bandung',2),(8,'dhika','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','dhika123@gmail.com','dhika hermawan','bandung',3),(9,'dika','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','dikajaya45@gmail.com','dikajaya','bandung',3),(10,'kia','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','adzkia21@gmail.com','adzkia','kp.dukuh',3),(11,'keyla','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','keyla@dot.com','nur','bandung',3),(12,'novi','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','novitana@dot.com','novita','garut',3),(13,'sopia','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','atulll2323@dot.com','sopiatul adawiyah','garut',3),(14,'handi','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','handiyanaa16@dot.com','handiyana','garut',3),(15,'fazli','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','fazli@dot.com','mifazli','bandung',3),(16,'arul','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','salahudin243@dot.com','Arul Ahmad Salahudin','linggabaru',3),(17,'rama','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','rama@dot.com','ramawijaya','bandung',3),(18,'muslih','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','muslih54@dot.com','muslihhabdull','garut',3),(19,'ilham','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','ilham@dot.com','ilhamnas','cililin',3),(20,'iqbal','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','mhmdiqball132@dot.com','ardiansyahh','garutt',3),(21,'sofi','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','sofipebriany45@dot.com','febrianysoff','tugulaksana',3),(22,'virgi','*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7','virgi@dot.com','virgi m','bandung',3);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-23  7:31:32
