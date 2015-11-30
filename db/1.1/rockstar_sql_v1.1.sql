-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Nov 2015 pada 15.01
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rockstar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_group`
--

CREATE TABLE IF NOT EXISTS `anggota_group` (
  `ID_USER` int(11) NOT NULL,
  `ID_GROUP` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fanbase`
--

CREATE TABLE IF NOT EXISTS `fanbase` (
  `ID_FANBASE` bigint(20) NOT NULL,
  `NAMA` char(50) NOT NULL,
  `WARNA` char(20) NOT NULL,
  `LOGO` text NOT NULL,
  `SUBDOMAIN` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_pribadi`
--

CREATE TABLE IF NOT EXISTS `gallery_pribadi` (
  `ID_GALLERY` char(50) NOT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `GAMBAR_GALLERY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_table`
--

CREATE TABLE IF NOT EXISTS `group_table` (
  `ID_GROUP` char(50) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `NAMA_GROUP` char(50) NOT NULL,
  `DESKRIPSI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_user`
--

CREATE TABLE IF NOT EXISTS `jenis_user` (
  `ID_JENIS` int(11) NOT NULL,
  `NAMA_JENIS` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `ID_KOMENTAR` char(50) NOT NULL,
  `ID_STATUS` char(50) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `KOMENTAR` text NOT NULL,
  `DATETIME_KOMENTAR` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `like_table`
--

CREATE TABLE IF NOT EXISTS `like_table` (
  `ID_STATUS` char(50) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `DATETIME_LIKE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `new`
--

CREATE TABLE IF NOT EXISTS `new` (
  `ID_NEW` char(50) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `BERITA` text NOT NULL,
  `GAMBAR` text,
  `TANGGAL_NEWS` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_table`
--

CREATE TABLE IF NOT EXISTS `status_table` (
  `ID_STATUS` char(50) NOT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `DATETIME_STATUS` datetime NOT NULL,
  `KONTEN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teman`
--

CREATE TABLE IF NOT EXISTS `teman` (
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `USE_ID_USER` int(11) DEFAULT NULL,
  `TANGGAL_TEMAN` date NOT NULL,
  `STATUS_TEMAN` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_registrasi`
--

CREATE TABLE IF NOT EXISTS `transaksi_registrasi` (
  `ID_REGISTRASI` int(11) NOT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `NAMA_LENGKAP` char(50) NOT NULL,
  `TEMPAT` char(30) NOT NULL,
  `TANGGAL` date NOT NULL,
  `NEGARA` char(40) NOT NULL,
  `PROVINSI` char(40) NOT NULL,
  `KOTA` char(40) NOT NULL,
  `ALAMAT` text NOT NULL,
  `KODE_POS` char(5) NOT NULL,
  `NO_TELP` char(15) NOT NULL,
  `EMAIL` char(30) NOT NULL,
  `TWITTER` char(30) NOT NULL,
  `NAMA_IBU` char(30) NOT NULL,
  `NAMA_AYAH` char(30) NOT NULL,
  `NO_SAKTI` char(16) NOT NULL,
  `CORP` char(30) NOT NULL,
  `VAD` char(16) NOT NULL,
  `STATUS_REKONSILIASI` char(1) NOT NULL,
  `STATUS_RELEASE` char(1) NOT NULL,
  `VAD_REKON` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_REGISTRASI` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_JENIS` int(11) DEFAULT NULL,
  `USERNAME` char(30) NOT NULL,
  `PASSWORD` char(50) NOT NULL,
  `NOMER_SAKTI` char(16) NOT NULL,
  `VAS` char(16) NOT NULL,
  `STATUS` char(1) NOT NULL,
  `POINT` bigint(20) NOT NULL,
  `POINT_BONUS` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_group`
--
ALTER TABLE `anggota_group`
 ADD PRIMARY KEY (`ID_USER`,`ID_GROUP`), ADD KEY `FK_ANGGOTA_GROUP2` (`ID_GROUP`);

--
-- Indexes for table `fanbase`
--
ALTER TABLE `fanbase`
 ADD PRIMARY KEY (`ID_FANBASE`);

--
-- Indexes for table `gallery_pribadi`
--
ALTER TABLE `gallery_pribadi`
 ADD PRIMARY KEY (`ID_GALLERY`), ADD KEY `FK_FANBASE_TO_GALLERY_PRIBADI` (`ID_FANBASE`), ADD KEY `FK_USER_GALLERY_PRIBADI` (`ID_USER`);

--
-- Indexes for table `group_table`
--
ALTER TABLE `group_table`
 ADD PRIMARY KEY (`ID_GROUP`), ADD KEY `FK_FANBASE_TO_GROUP` (`ID_FANBASE`), ADD KEY `FK_USER_TO_CORP` (`ID_USER`);

--
-- Indexes for table `jenis_user`
--
ALTER TABLE `jenis_user`
 ADD PRIMARY KEY (`ID_JENIS`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`ID_KOMENTAR`), ADD KEY `FK_STATUS_TO_KOMENTAR` (`ID_STATUS`), ADD KEY `FK_USER_TO_KOMENTAR` (`ID_USER`);

--
-- Indexes for table `like_table`
--
ALTER TABLE `like_table`
 ADD KEY `FK_STATUS_TO_LIKE` (`ID_STATUS`), ADD KEY `FK_USER_TO_LIKE` (`ID_USER`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
 ADD PRIMARY KEY (`ID_NEW`), ADD KEY `FK_FANBASE_TO_NEWS` (`ID_FANBASE`), ADD KEY `FK_USER_TO_NEWS` (`ID_USER`);

--
-- Indexes for table `status_table`
--
ALTER TABLE `status_table`
 ADD PRIMARY KEY (`ID_STATUS`), ADD KEY `FK_F_STATUS` (`ID_FANBASE`), ADD KEY `FK_USER_TO_STATUS` (`ID_USER`);

--
-- Indexes for table `teman`
--
ALTER TABLE `teman`
 ADD KEY `FK_DARI` (`ID_USER`), ADD KEY `FK_FANBASE_TO_TEMAN` (`ID_FANBASE`), ADD KEY `FK_KE` (`USE_ID_USER`);

--
-- Indexes for table `transaksi_registrasi`
--
ALTER TABLE `transaksi_registrasi`
 ADD PRIMARY KEY (`ID_REGISTRASI`), ADD KEY `FK_F_TRANSAKSI` (`ID_FANBASE`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`ID_USER`), ADD KEY `FK_F_USER` (`ID_FANBASE`), ADD KEY `FK_JENIS_TO_USER` (`ID_JENIS`), ADD KEY `FK_TRANSAKSI_REGISTRASI_TO_USER` (`ID_REGISTRASI`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota_group`
--
ALTER TABLE `anggota_group`
ADD CONSTRAINT `FK_ANGGOTA_GROUP` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
ADD CONSTRAINT `FK_ANGGOTA_GROUP2` FOREIGN KEY (`ID_GROUP`) REFERENCES `group_table` (`ID_GROUP`);

--
-- Ketidakleluasaan untuk tabel `gallery_pribadi`
--
ALTER TABLE `gallery_pribadi`
ADD CONSTRAINT `FK_FANBASE_TO_GALLERY_PRIBADI` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
ADD CONSTRAINT `FK_USER_GALLERY_PRIBADI` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `group_table`
--
ALTER TABLE `group_table`
ADD CONSTRAINT `FK_FANBASE_TO_GROUP` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
ADD CONSTRAINT `FK_USER_TO_CORP` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
ADD CONSTRAINT `FK_STATUS_TO_KOMENTAR` FOREIGN KEY (`ID_STATUS`) REFERENCES `status_table` (`ID_STATUS`),
ADD CONSTRAINT `FK_USER_TO_KOMENTAR` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `like_table`
--
ALTER TABLE `like_table`
ADD CONSTRAINT `FK_STATUS_TO_LIKE` FOREIGN KEY (`ID_STATUS`) REFERENCES `status_table` (`ID_STATUS`),
ADD CONSTRAINT `FK_USER_TO_LIKE` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `new`
--
ALTER TABLE `new`
ADD CONSTRAINT `FK_FANBASE_TO_NEWS` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
ADD CONSTRAINT `FK_USER_TO_NEWS` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `status_table`
--
ALTER TABLE `status_table`
ADD CONSTRAINT `FK_F_STATUS` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
ADD CONSTRAINT `FK_USER_TO_STATUS` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `teman`
--
ALTER TABLE `teman`
ADD CONSTRAINT `FK_DARI` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
ADD CONSTRAINT `FK_FANBASE_TO_TEMAN` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
ADD CONSTRAINT `FK_KE` FOREIGN KEY (`USE_ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `transaksi_registrasi`
--
ALTER TABLE `transaksi_registrasi`
ADD CONSTRAINT `FK_F_TRANSAKSI` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `FK_F_USER` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
ADD CONSTRAINT `FK_JENIS_TO_USER` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis_user` (`ID_JENIS`),
ADD CONSTRAINT `FK_TRANSAKSI_REGISTRASI_TO_USER` FOREIGN KEY (`ID_REGISTRASI`) REFERENCES `transaksi_registrasi` (`ID_REGISTRASI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
