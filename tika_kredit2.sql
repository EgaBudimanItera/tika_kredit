/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.6.25 : Database - tika_kredit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`tika_kredit` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tika_kredit`;

/*Table structure for table `nasabah` */

DROP TABLE IF EXISTS `nasabah`;

CREATE TABLE `nasabah` (
  `idnasabah` varchar(20) NOT NULL DEFAULT '',
  `nik` varchar(16) DEFAULT '',
  `nama` varchar(30) DEFAULT '',
  `tmplahir` varchar(20) DEFAULT '',
  `tgllahir` date DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT '',
  `alamatrumah` text,
  `alamatkantor` text,
  `telp` varchar(12) DEFAULT '',
  `nama2` varchar(30) DEFAULT '',
  `tmplahir2` varchar(20) DEFAULT '',
  `tgllahir2` date DEFAULT NULL,
  `pekerjaan2` varchar(30) DEFAULT '',
  `telp2` varchar(12) DEFAULT '',
  `alamatrumah2` text,
  `tanggungan` varchar(2) DEFAULT '',
  `hakmilikrumah` enum('sendiri','orang tua','sewa') DEFAULT 'sendiri',
  `nama3` varchar(30) DEFAULT '',
  `alamat3` text,
  `telp3` varchar(12) DEFAULT '',
  `hubungan13` varchar(20) DEFAULT '',
  `namausaha` varchar(30) DEFAULT '',
  `bidangusaha` varchar(30) DEFAULT '',
  `berdiri` date DEFAULT NULL,
  `legalitas` enum('PT','Yayasan','Koperasi','CV','Lainnya') DEFAULT 'Lainnya',
  `izin` varchar(30) DEFAULT '',
  `jmlkaryawan` varchar(6) DEFAULT '',
  `alamatusaha` text,
  `telpusaha` varchar(12) DEFAULT '',
  `tempatusaha` enum('milik sendiri','sewa','lainnya') DEFAULT 'milik sendiri',
  `jeniskaryawan` enum('PNS','Swasta','BUMN','Lainnya') DEFAULT 'Lainnya',
  `namainstansi` varchar(30) DEFAULT '',
  `telpinstansi` varchar(12) DEFAULT '',
  `namapimpinan` varchar(30) DEFAULT '',
  `jabatan` varchar(30) DEFAULT '',
  `golongan` varchar(4) DEFAULT '',
  `namauser` varchar(30) DEFAULT '',
  `password` varchar(40) DEFAULT '',
  `foto1` varchar(40) DEFAULT 'standar.jpg',
  `foto2` varchar(40) DEFAULT 'standar.jpg',
  `status` enum('sah','tidak') DEFAULT 'tidak',
  PRIMARY KEY (`idnasabah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nasabah` */

insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800001','102022201870001','Nasabah1','Bengkulu','1987-01-22','editan','editan','editan','000000','editan','editan','1986-01-01','editan','','editan','0','orang tua','editan','editan','0','editan','','','2018-08-07','','','','','',NULL,'Lainnya','PTN','','','','','12','c20ad4d76fe97759aa27a0c99bff6710','NS_1020222018700011.jpg','NS_1020222018700011.jpg','sah'),('N201800002','11','ary','bengkulu','2018-07-04','Staff IT','aa','aaa','888','Ary','jogya','2018-07-05','','','aa','','sendiri','','','','','','','0000-00-00','','','','','',NULL,'','','','','','','11','6512bd43d9caa6e02c990b0a82652dca','standar.jpg','standar.jpg','sah'),('N201800003','44','r','bengkulu','1987-01-22','Staff IT','j','k','999','ddd','jogya','2018-07-03','','','jj','','sendiri','','','','','','','0000-00-00','','','','','',NULL,'','','','','','','44','101cdd38c20f4bf9066cc9f63c229a13','NS_441.jpg','NS_4411.jpg','sah'),('N201800004','1111111111','tikka','lampung','1990-01-03','staff','bandar jaya','bandar lampung','08977777777','irwan','bandar jaya','1980-02-07','nganggur','','bandar jaya','4','sendiri','','','','','','','0000-00-00','','','','','',NULL,'Swasta','btn','0976777777','handoko','staff','a','1111111111','2779176f5882e88c21079c3ae2900a9a','NS_11111111111.jpg','NS_111111111111.jpg','sah');

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `idbayar` varchar(20) NOT NULL,
  `tglbayar` date DEFAULT NULL,
  `idpembiayaan` varchar(20) DEFAULT NULL,
  `bayarke` varchar(2) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  PRIMARY KEY (`idbayar`),
  KEY `FK_pembayaran` (`idpembiayaan`),
  CONSTRAINT `FK_pembayaran` FOREIGN KEY (`idpembiayaan`) REFERENCES `pembiayaan` (`idpembiayaan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800001','2018-07-10','P201800001','1',1983333),('B201800002','2018-07-10','P201800001','2',1983333),('B201800003','2018-07-10','P201800001','3',1983333),('B201800004','2018-07-10','P201800001','4',1983333),('B201800005','2018-07-10','P201800001','5',1983333),('B201800006','2018-07-10','P201800001','6',1983333),('B201800007','2018-07-10','P201800001','7',1983333),('B201800008','2018-07-10','P201800001','8',1983333),('B201800009','2018-07-10','P201800001','9',1983333),('B201800010','2018-07-10','P201800001','10',1983333),('B201800011','2018-07-10','P201800001','11',1983333),('B201800012','2018-07-10','P201800001','12',1983333),('B201800013','2018-07-10','P201800001','13',1983333),('B201800014','2018-07-10','P201800001','14',1983333),('B201800015','2018-07-10','P201800001','15',1983333),('B201800016','2018-07-10','P201800001','16',1983333),('B201800017','2018-07-10','P201800001','17',1983333),('B201800018','2018-07-10','P201800001','18',1983333),('B201800019','2018-07-10','P201800001','19',1983333),('B201800020','2018-07-10','P201800001','20',1983333),('B201800021','2018-07-10','P201800001','21',1983333),('B201800022','2018-07-10','P201800001','22',1983333),('B201800023','2018-07-10','P201800001','23',1983333),('B201800024','2018-07-10','P201800001','24',1983333),('B201800025','2018-07-17','P201800002','1',1966666);

/*Table structure for table `pembiayaan` */

DROP TABLE IF EXISTS `pembiayaan`;

CREATE TABLE `pembiayaan` (
  `idpembiayaan` varchar(20) NOT NULL,
  `tglpengajuan` date DEFAULT NULL,
  `tglreaksi` date DEFAULT NULL,
  `idnasabah` varchar(20) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `waktu` int(11) DEFAULT NULL,
  `jenis` enum('Umum','Usaha') DEFAULT NULL,
  `kegunaan` text,
  `angsuran` double DEFAULT NULL,
  `totalpembayaran` double DEFAULT NULL,
  `sisapembayaran` double DEFAULT NULL,
  `tglsurvey` date DEFAULT NULL,
  `surveyby` varchar(30) DEFAULT NULL,
  `keputusan` enum('Tolak','Terima','Proses') DEFAULT 'Proses',
  `bayarpertama` date DEFAULT NULL,
  `bayarnext` date DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `alasantolak` text,
  `statuslunas` enum('Lunas','Belum Lunas') DEFAULT 'Belum Lunas',
  PRIMARY KEY (`idpembiayaan`),
  KEY `FK_pembiayaan` (`idnasabah`),
  CONSTRAINT `FK_pembiayaan` FOREIGN KEY (`idnasabah`) REFERENCES `nasabah` (`idnasabah`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembiayaan` */

insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800001','2018-07-10','2018-07-10','N201800001',35000000,24,'Umum','unntuk ini',1983333,47600000,8,'2018-07-11','roni','Terima','2018-07-13','2020-10-13','S_N201800001072018.zip','','Lunas'),('P201800002','2018-07-17','2018-07-17','N201800004',20000000,12,'Umum','beli motor',1966666,23600000,21633334,'2018-07-19','edi','Terima','2018-07-25','2018-09-25','S_N201800004072018.zip','','Belum Lunas');

/*Table structure for table `userlogin` */

DROP TABLE IF EXISTS `userlogin`;

CREATE TABLE `userlogin` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userNama` varchar(30) DEFAULT NULL,
  `userPassword` varchar(150) DEFAULT NULL,
  `userHakakses` enum('Admin','Pimpinan','Teller') DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `userlogin` */

insert  into `userlogin`(`userId`,`userNama`,`userPassword`,`userHakakses`) values (1,'Pimpinan','c4ca4238a0b923820dcc509a6f75849b','Pimpinan'),(2,'Teller','c4ca4238a0b923820dcc509a6f75849b','Teller'),(3,'Admin','c4ca4238a0b923820dcc509a6f75849b','Admin'),(4,'nn','e10adc3949ba59abbe56e057f20f883e','Admin');

/* Trigger structure for table `pembayaran` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `bayarnext` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `bayarnext` AFTER INSERT ON `pembayaran` FOR EACH ROW BEGIN
	declare tglawal date;
	declare tglnext date;
	declare sisabayar double;
	declare sisabayar2 double;
	set tglawal=(select bayarnext from pembiayaan where idpembiayaan=new.idpembiayaan);
        set tglnext=(select date(bayarnext+interval 1 Month) from pembiayaan where idpembiayaan=new.idpembiayaan);
	set sisabayar=(select sisapembayaran from pembiayaan where idpembiayaan=new.idpembiayaan);
	set sisabayar2=sisabayar-new.jumlah;
	
	update pembiayaan set bayarnext=tglnext,sisapembayaran=sisabayar2 where idpembiayaan=new.idpembiayaan;
    END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
