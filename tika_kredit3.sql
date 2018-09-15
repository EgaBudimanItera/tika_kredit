/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.6.16 : Database - tika_kredit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`tika_kredit` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tika_kredit`;

/*Table structure for table `nasabah` */

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

insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800001','102022201870001','Nasabah1','Bengkulu','1987-01-22','editan','editan','editan','000000','editan','editan','1986-01-01','editan','','editan','0','orang tua','editan','editan','0','editan','','','2018-08-07','','','','','',NULL,'Lainnya','PTN','','','','','12','c20ad4d76fe97759aa27a0c99bff6710','NS_1020222018700011.jpg','NS_1020222018700011.jpg','sah');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800002','11','ary','bengkulu','2018-07-04','Staff IT','aa','aaa','888','Ary','jogya','2018-07-05','','','aa','','sendiri','','','','','','','0000-00-00','','','','','',NULL,'','','','','','','11','6512bd43d9caa6e02c990b0a82652dca','standar.jpg','standar.jpg','sah');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800003','44','r','bengkulu','1987-01-22','Staff IT','j','k','999','ddd','jogya','2018-07-03','','','jj','','sendiri','','','','','','','0000-00-00','','','','','',NULL,'','','','','','','44','101cdd38c20f4bf9066cc9f63c229a13','NS_441.jpg','NS_4411.jpg','sah');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800004','1111111111','tikka','lampung','1990-01-03','staff','bandar jaya','bandar lampung','08977777777','irwan','bandar jaya','1980-02-07','nganggur','','bandar jaya','4','sendiri','','','','','','','0000-00-00','','','','','',NULL,'Swasta','btn','0976777777','handoko','staff','a','1111111111','2779176f5882e88c21079c3ae2900a9a','NS_11111111111.jpg','NS_111111111111.jpg','sah');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800005','12','Tikka','LAMPUNG SELATAN','1997-01-20','kARYAWAN','Jalan Majapahit','Jalan Melati','089648664628','Irwan','lampung tengah','1993-10-19','PNS','','Jalan Majapahit','4','sendiri','','','','','','','0000-00-00','','','','','',NULL,'BUMN','PT KAI','0897','Paryono','','','12','356b34e7e4546c34cfc37469b4adede5','NS_121.jpg','NS_1211.jpg','sah');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800006','13','Tikka','KAB. LAMPUNG TENGAH','1998-01-20','kARYAWAN','jalan pu','kedaton','089648664629','Sarpen','lampung tengah','1995-10-19','PNS','','jalan pu','2','sendiri','','','','','','','0000-00-00','','','','','',NULL,'BUMN','PT KAI','0987','Paryono','','','13','f5c84519bbb8fa06cc6229e1d4262e74','NS_131.jpg','NS_131.jpg','sah');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800007','20','Erlita','KAB. LAMPUNG TENGAH','1995-01-20','KARYAWAN','Jl antasari','Tanjung Karang','089648664629','Ucok','lampung tengah','1993-09-01','Karyawan','','jl antasari','5','sendiri','','','','','','','0000-00-00','','','','','',NULL,'BUMN','PT KAI','008','Paryono','manager','','20','e1576f3bfa2d8e5185efc158476c61fb','NS_201.jpg','NS_2011.jpg','sah');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800008','1111111111111111','DEWI','LAMPUNG SELATAN','1996-01-20','KARYAWAN','Jalan semangka','jalan pagar alam','08999','Deni','lampung tengah','1970-01-01','PNS','','jalan darussalam','3','sendiri','Rani','jalan beringin','0897','Kakak Kandung','','','0000-00-00','','','','','',NULL,'BUMN','PT KAI','009','Paryono','manager','A','111111111111111111','853a767c2140287dee5aee06f2c1dcae','NS_11111111111111111.jpg','NS_111111111111111111.jpg','sah');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800009','2222222222222222','NINGRUM','BANDAR LAMPUNG','1997-01-21','Guru','jalan antasari','Natar','0897','Iwan','lampung selatan','1990-09-20','Guru','','jalan antasi','4','sendiri','Putri','jalan beringin','008','Kakak Kandung','','','0000-00-00','','','','','',NULL,'PNS','SMP Swadiri','0978','Jupri','','','222222222222222222','664545927fea1aaa94fba97a543951a9','NS_2222222222222222221.jpg','NS_22222222222222222211.jpg','tidak');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800010','1','a','KAB. LAMPUNG TENGAH','1997-01-20','Guru','jl','jl','089648664628','Irwan','lampung tengah','1993-10-19','','','jj','','sendiri','','','','','','','0000-00-00','','','','','',NULL,'','','','','','','1','356b34e7e4546c34cfc37469b4adede5','gift.mp4','gift.mp4','tidak');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800011','2','Rita','KAB. LAMPUNG TENGAH','1997-01-28','Guru','jl beringin','kedaton','089648664628','Sarpen','lampung tengah','1993-10-19','','','jl beringin','','orang tua','','','','','','','0000-00-00','','','','','',NULL,'','','','','','','2','e0a44c263bc5b85f6f20929c14b7e323','NS_21.jpg','NS_211.jpg','sah');
insert  into `nasabah`(`idnasabah`,`nik`,`nama`,`tmplahir`,`tgllahir`,`pekerjaan`,`alamatrumah`,`alamatkantor`,`telp`,`nama2`,`tmplahir2`,`tgllahir2`,`pekerjaan2`,`telp2`,`alamatrumah2`,`tanggungan`,`hakmilikrumah`,`nama3`,`alamat3`,`telp3`,`hubungan13`,`namausaha`,`bidangusaha`,`berdiri`,`legalitas`,`izin`,`jmlkaryawan`,`alamatusaha`,`telpusaha`,`tempatusaha`,`jeniskaryawan`,`namainstansi`,`telpinstansi`,`namapimpinan`,`jabatan`,`golongan`,`namauser`,`password`,`foto1`,`foto2`,`status`) values ('N201800012','3333333333333333','Intan Agustina','BANDAR LAMPUNG','1995-01-21','Guru','Jl Kamboja No 56','Kedaton','08970000','Budi','Bandar Lampung','1997-01-09','','','jl kamboja','','sendiri','','','','','PT Maju Jaya','Jasa','2004-05-09','','','10','Jl Beringin','008',NULL,'','','','','','','333333333333333333','709c947c76499e58562bc33fd8744e7c','NS_33333333333333331.jpg','NS_33333333333333331.jpg','sah');

/*Table structure for table `pembayaran` */

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

insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800001','2018-07-10','P201800001','1',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800002','2018-07-10','P201800001','2',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800003','2018-07-10','P201800001','3',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800004','2018-07-10','P201800001','4',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800005','2018-07-10','P201800001','5',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800006','2018-07-10','P201800001','6',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800007','2018-07-10','P201800001','7',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800008','2018-07-10','P201800001','8',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800009','2018-07-10','P201800001','9',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800010','2018-07-10','P201800001','10',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800011','2018-07-10','P201800001','11',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800012','2018-07-10','P201800001','12',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800013','2018-07-10','P201800001','13',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800014','2018-07-10','P201800001','14',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800015','2018-07-10','P201800001','15',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800016','2018-07-10','P201800001','16',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800017','2018-07-10','P201800001','17',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800018','2018-07-10','P201800001','18',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800019','2018-07-10','P201800001','19',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800020','2018-07-10','P201800001','20',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800021','2018-07-10','P201800001','21',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800022','2018-07-10','P201800001','22',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800023','2018-07-10','P201800001','23',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800024','2018-07-10','P201800001','24',1983333);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800025','2018-07-17','P201800002','1',1966666);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800026','2018-08-18','P201800003','1',1966666);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800027','2018-08-18','P201800004','1',2950000);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800028','2018-08-27','P201800006','1',855555);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800029','2018-08-28','P201800008','1',2950000);
insert  into `pembayaran`(`idbayar`,`tglbayar`,`idpembiayaan`,`bayarke`,`jumlah`) values ('B201800030','2018-09-14','P201800011','1',2381944);

/*Table structure for table `pembiayaan` */

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

insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800001','2018-07-10','2018-07-10','N201800001',35000000,24,'Umum','unntuk ini',1983333,47600000,8,'2018-07-11','roni','Terima','2018-07-13','2020-10-13','S_N201800001072018.zip','','Lunas');
insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800002','2018-07-17','2018-07-17','N201800004',20000000,12,'Umum','beli motor',1966666,23600000,21633334,'2018-07-19','edi','Terima','2018-07-25','2018-08-09','S_N201800004072018.zip','','Belum Lunas');
insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800003','2018-08-18','2018-08-18','N201800005',20000000,12,'Umum','Membeli Motor',1966666,23600000,21633334,NULL,NULL,'Terima','2018-08-21','2018-10-21','S_N201800005082018.zip','','Belum Lunas');
insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800004','2018-08-18','2018-08-18','N201800006',30000000,12,'Umum','Membeli Motor',2950000,35400000,32450000,'2018-08-21','Edi Darmadi','Terima','2018-08-25','2018-10-25','S_N201800006082018.zip','','Belum Lunas');
insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800005','2018-08-24',NULL,'N201800007',20000000,18,'Umum','Membeli Motor',1411111,NULL,NULL,'2018-09-14','Edi Darmadi','Proses',NULL,NULL,'S_N201800007082018.zip',NULL,'Belum Lunas');
insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800006','2018-08-27','2018-08-27','N201800008',20000000,36,'Umum','Membeli mobil',855555,30800000,29944445,'2018-08-30','Edi Darmadi','Terima','2018-08-31','2018-09-30','S_N201800008082018.zip','','Belum Lunas');
insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800007','2018-08-28','2018-08-28','N201800008',20000000,12,'Umum','Membeli Motor',1966666,23600000,23600000,'2018-08-30','Edi Darmadi','Tolak','2018-08-28','2018-08-28','S_N2018000080820181.zip','Plapon pembiayaan yang diajukan tidak sesuai dengan jaminan yang telah diajukan','Belum Lunas');
insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800008','2018-08-28','2018-08-28','N201800011',30000000,12,'Umum','Membeli Motor',2950000,35400000,32450000,'2018-08-30','Edi Darmadi','Terima','2018-09-28','2018-10-28','S_N201800011082018.zip','','Belum Lunas');
insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800009','2018-09-13',NULL,'N201800008',200000000,36,'Usaha','BELI MOBIL',8055555,NULL,NULL,'2018-09-15','Edi Darmadi','Proses',NULL,NULL,'S_N201800008092018.zip',NULL,'Belum Lunas');
insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800010','2018-09-14','2018-09-14','N201800008',15000000,12,'Umum','Membeli Motor',1475000,17700000,17700000,'2018-09-17','Edi Darmadi','Terima','2018-09-22','2018-09-22','S_N2018000080920181.zip','','Belum Lunas');
insert  into `pembiayaan`(`idpembiayaan`,`tglpengajuan`,`tglreaksi`,`idnasabah`,`jumlah`,`waktu`,`jenis`,`kegunaan`,`angsuran`,`totalpembayaran`,`sisapembayaran`,`tglsurvey`,`surveyby`,`keputusan`,`bayarpertama`,`bayarnext`,`file`,`alasantolak`,`statuslunas`) values ('P201800011','2018-09-14','2018-09-14','N201800012',35000000,18,'Usaha','Modal Usaha',2381944,42875000,40493056,'2018-09-18','Edi Darmadi','Terima','2018-09-25','2018-10-25','S_N201800012092018.zip','','Belum Lunas');

/*Table structure for table `userlogin` */

CREATE TABLE `userlogin` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userNama` varchar(30) DEFAULT NULL,
  `userPassword` varchar(150) DEFAULT NULL,
  `userHakakses` enum('Admin','Pimpinan','Teller') DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `userlogin` */

insert  into `userlogin`(`userId`,`userNama`,`userPassword`,`userHakakses`) values (1,'Pimpinan','c4ca4238a0b923820dcc509a6f75849b','Pimpinan');
insert  into `userlogin`(`userId`,`userNama`,`userPassword`,`userHakakses`) values (2,'Teller','c4ca4238a0b923820dcc509a6f75849b','Teller');
insert  into `userlogin`(`userId`,`userNama`,`userPassword`,`userHakakses`) values (3,'Admin','c4ca4238a0b923820dcc509a6f75849b','Admin');
insert  into `userlogin`(`userId`,`userNama`,`userPassword`,`userHakakses`) values (4,'nn','e10adc3949ba59abbe56e057f20f883e','Admin');

/* Trigger structure for table `pembayaran` */

DELIMITER $$

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