CREATE DATABASE paspor;
USE paspor;

CREATE TABLE daftar (
id INT AUTO_INCREMENT PRIMARY KEY,
no_daftar VARCHAR(10),
nama VARCHAR(100),
tanggal DATE,
hari VARCHAR(20),
jam TIME
);

CREATE TABLE daftar_ulang (
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(100),
ktp VARCHAR(10),
kk VARCHAR(10),
ijazah VARCHAR(10),
keterangan VARCHAR(20),
no_antrian INT
);

CREATE TABLE pengurusan (
id INT AUTO_INCREMENT PRIMARY KEY,
no_antrian INT,
nama VARCHAR(100),
berkas VARCHAR(20),
status VARCHAR(20),
pembayaran INT
);