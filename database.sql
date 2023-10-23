CREATE DATABASE perpustakaan_19201234;
USE perpustakaan_19201234;

CREATE TABLE tb_anggota(
  id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  email VARCHAR(255) NOT NULL,
  katasandi VARCHAR(64),
  nama_lengkap VARCHAR(80) NOT NULL,
  jeniskelamin ENUM('L','P') DEFAULT 'L',
  alamat VARCHAR(255),
  UNIQUE(email)
)ENGINE=INNODB;

CREATE TABLE tb_pengguna(
  id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  email VARCHAR(255) NOT NULL,
  nama_lengkap VARCHAR(255) NOT NULL,
  tingkat ENUM('ADM', 'PUS') DEFAULT 'PUS',
  katasandi VARCHAR(64),
  UNIQUE(email)
)ENGINE=INNODB;

CREATE TABLE tb_kategori(
  id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  kategori VARCHAR(255) NOT NULL,
  kode_ddc VARCHAR(10),
  UNIQUE(kode_ddc)
)ENGINE=INNODB;

CREATE TABLE tb_penerbit(
  id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  penerbit VARCHAR(50) NOT NULL,
  kota VARCHAR(50)
)ENGINE=INNODB;

CREATE TABLE tb_buku(
  id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  judul varchar(512) not null,
  edisi varchar(10),
  cetakan varchar(10),
  sinopsis text,
  tb_kategori_id int unsigned,
  tb_penerbit_id int unsigned,
  isbn varchar(20),
  penulis varchar(100),
  foreign key(tb_kategori_id) references tb_kategori(id) on update cascade,
  foreign key(tb_penerbit_id) references tb_penerbit(id) on update cascade
)engine=innodb;

create table tb_koleksibuku(
  id int unsigned primary key not null auto_increment,
  tb_buku_id int unsigned,
  nomor_koleksi int,
  status_koleksi enum('A','P','H','R') default 'A',
  foreign key(tb_buku_id) references tb_buku(id) 
	on delete cascade on update cascade
)engine=innodb;

create table tb_peminjaman(
  id int unsigned primary key not null auto_increment,
  tgl_peminjaman datetime not null,
  tgl_harus_kembali datetime not null,
  tgl_kembali datetime,
  tb_pengguna_id_peminjaman int unsigned,
  tb_pengguna_id_pengembalian int unsigned,
  tb_anggota_id int unsigned,
  tb_koleksibuku_id int unsigned,
  denda double,
  
  foreign key(tb_anggota_id) references tb_anggota(id) on update cascade,
  FOREIGN KEY(tb_pengguna_id_peminjaman) REFERENCES  tb_pengguna(id) ON UPDATE CASCADE,
  FOREIGN KEY(tb_pengguna_id_pengembalian) REFERENCES  tb_pengguna(id) ON UPDATE CASCADE,
  foreign key(tb_koleksibuku_id) REFERENCES  tb_koleksibuku(id) on update cascade
)engine=innodb;