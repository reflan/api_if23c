CREATE DATABASE db_if23c;
USE db_if23c;
DROP TABLE IF EXISTS tbl_mahasiswa;
CREATE TABLE tbl_mahasiswa (
  npm char(10) NOT NULL,
  nama varchar(100) DEFAULT NULL,
  prodi varchar(50) DEFAULT NULL,
  PRIMARY KEY (npm)
);

insert  into tbl_mahasiswa(npm,nama,prodi) values ('11312136','Reflan ','Informatika'),('11312137','Mugi','Teknik Komputer'),('11312138','Sahril','Sistem Informasi'),('11312139','Toni','Menejemen'),('11312140','Lutfi','Sastra Inggris');