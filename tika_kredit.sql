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

/*Table structure for table `detjaminan` */

DROP TABLE IF EXISTS `detjaminan`;

CREATE TABLE `detjaminan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpembiayaan` varchar(20) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `taksiran` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detjaminan` */

/*Table structure for table `detjaminan_temp` */

DROP TABLE IF EXISTS `detjaminan_temp`;

CREATE TABLE `detjaminan_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(30) DEFAULT NULL,
  `taksiran` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detjaminan_temp` */

/*Table structure for table `detkreditlain` */

DROP TABLE IF EXISTS `detkreditlain`;

CREATE TABLE `detkreditlain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpembiayaan` varchar(20) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `sumber` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detkreditlain` */

/*Table structure for table `detkreditlain_temp` */

DROP TABLE IF EXISTS `detkreditlain_temp`;

CREATE TABLE `detkreditlain_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(20) DEFAULT NULL,
  `sumber` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detkreditlain_temp` */

/*Table structure for table `detsyarat` */

DROP TABLE IF EXISTS `detsyarat`;

CREATE TABLE `detsyarat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpembiayaan` varchar(20) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `file` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detsyarat` */

/*Table structure for table `detsyarat_temp` */

DROP TABLE IF EXISTS `detsyarat_temp`;

CREATE TABLE `detsyarat_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(30) DEFAULT NULL,
  `file` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detsyarat_temp` */

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
  `tempatusaha` enum('milik sendiri','sewa') DEFAULT 'milik sendiri',
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

insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800001','102022201870001','Nasabah1','Bengkulu','1987-01-22','Staff IT','Jalan Malabar','Jln Ryacudu','085764662006','Ary','jogya','1988-02-10','Guru','','Jl Malabar','3','sendiri','','','','','','','0000-00-00','','','','','',NULL,'Lainnya','PTN','','','','','102022201870001','101cdd38c20f4bf9066cc9f63c229a13','standar.jpg','standar.jpg','sah');

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `idbayar` varchar(20) NOT NULL,
  `tglbayar` date DEFAULT NULL,
  `idpembiayaan` varchar(20) DEFAULT NULL,
  `bayarke` varchar(2) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  PRIMARY KEY (`idbayar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

/*Table structure for table `pembiayaan` */

DROP TABLE IF EXISTS `pembiayaan`;

CREATE TABLE `pembiayaan` (
  `idpembiayaan` varchar(20) NOT NULL,
  `tglpengajuan` date DEFAULT NULL,
  `tglpersetujuan` date DEFAULT NULL,
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
  PRIMARY KEY (`idpembiayaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembiayaan` */

/*Table structure for table `userlogin` */

DROP TABLE IF EXISTS `userlogin`;

CREATE TABLE `userlogin` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userNama` varchar(30) DEFAULT NULL,
  `userPassword` varchar(150) DEFAULT NULL,
  `userHakakses` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `userlogin` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
