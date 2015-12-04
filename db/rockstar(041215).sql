-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Des 2015 pada 05.16
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
  `ID_USERS` int(11) NOT NULL,
  `ID_GROUPS` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fanbase`
--

CREATE TABLE IF NOT EXISTS `fanbase` (
  `ID_FANBASE` bigint(20) NOT NULL,
  `WARNA` char(20) NOT NULL,
  `LOGO` text NOT NULL,
  `SUBDOMAIN` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fanbase`
--

INSERT INTO `fanbase` (`ID_FANBASE`, `WARNA`, `LOGO`, `SUBDOMAIN`) VALUES
(1, 'Merah', '1', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_barang`
--

CREATE TABLE IF NOT EXISTS `gallery_barang` (
`ID_GALLERY_BARANG` int(11) NOT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `NAMA_GALLERY` varchar(50) NOT NULL,
  `KODE_GALLERY` char(32) NOT NULL,
  `JENIS_GALLERY` char(50) NOT NULL,
  `SAMPEL_GALLERY` text,
  `GAMBAR_GALLERY` text,
  `HARGA_POINT` bigint(20) NOT NULL,
  `HARGA_POINT_BONUS` bigint(20) NOT NULL,
  `HARGA_CASH` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_pribadi`
--

CREATE TABLE IF NOT EXISTS `gallery_pribadi` (
`ID_GALLERY_PRIBADI` int(11) NOT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `GAMBAR_GALLERY_PRIBADI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `ID_GROUPS` char(50) NOT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
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

--
-- Dumping data untuk tabel `jenis_user`
--

INSERT INTO `jenis_user` (`ID_JENIS`, `NAMA_JENIS`) VALUES
(1, 'Super Admin'),
(2, 'Admin Web Finance'),
(3, 'Corps'),
(4, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `ID_KOMENTAR` char(50) NOT NULL,
  `ID_STATUS_USERS` char(50) DEFAULT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `KOMENTAR` text NOT NULL,
  `DATETIME_KOMENTAR` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `ID_STATUS_USERS` char(50) DEFAULT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `DATETIME_LIKE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `ID_NEWS` char(50) NOT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `BERITA` text NOT NULL,
  `TANGGAL_NEWS` date NOT NULL,
  `GAMBAR_NEWS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_users`
--

CREATE TABLE IF NOT EXISTS `status_users` (
`ID_STATUS_USERS` int(11) NOT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `DATETIME_STATUS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `KONTEN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teman`
--

CREATE TABLE IF NOT EXISTS `teman` (
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `USE_ID_USERS` int(11) DEFAULT NULL,
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
  `VAD_REKON` int(16) NOT NULL,
  `STATUS_REKONSILIASI` char(1) NOT NULL,
  `STATUS_RELEASE` char(1) NOT NULL,
  `TANGGAL_TRANSAKSI` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `VALIDASI_UPLOAD` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`ID_USERS` int(11) NOT NULL,
  `ID_REGISTRASI` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_JENIS` int(11) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `PASSWORD` char(50) NOT NULL,
  `NOMER_SAKTI` char(16) NOT NULL,
  `VAS` char(16) NOT NULL,
  `STATUS` char(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_group`
--
ALTER TABLE `anggota_group`
 ADD PRIMARY KEY (`ID_USERS`,`ID_GROUPS`), ADD KEY `FK_ANGGOTA_GROUP2` (`ID_GROUPS`);

--
-- Indexes for table `fanbase`
--
ALTER TABLE `fanbase`
 ADD PRIMARY KEY (`ID_FANBASE`);

--
-- Indexes for table `gallery_barang`
--
ALTER TABLE `gallery_barang`
 ADD PRIMARY KEY (`ID_GALLERY_BARANG`), ADD KEY `FK_USERS_TO_GALLERY_BARANG` (`ID_USERS`);

--
-- Indexes for table `gallery_pribadi`
--
ALTER TABLE `gallery_pribadi`
 ADD PRIMARY KEY (`ID_GALLERY_PRIBADI`), ADD KEY `FK_USER_GALLERY_PRIBADI` (`ID_USERS`), ADD KEY `ID_FANBASE` (`ID_FANBASE`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`ID_GROUPS`), ADD KEY `FK_USER_TO_CORP` (`ID_USERS`), ADD KEY `FK_FANBASE_TO_GROUP` (`ID_FANBASE`);

--
-- Indexes for table `jenis_user`
--
ALTER TABLE `jenis_user`
 ADD PRIMARY KEY (`ID_JENIS`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`ID_KOMENTAR`), ADD KEY `FK_USER_TO_KOMENTAR` (`ID_USERS`), ADD KEY `FK_STATUS_TO_KOMENTAR` (`ID_STATUS_USERS`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
 ADD KEY `FK_USER_TO_LIKE` (`ID_USERS`), ADD KEY `FK_STATUS_TO_LIKE` (`ID_STATUS_USERS`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`ID_NEWS`), ADD KEY `FK_USER_TO_NEWS` (`ID_USERS`), ADD KEY `FK_FANBASE_TO_NEWS` (`ID_FANBASE`);

--
-- Indexes for table `status_users`
--
ALTER TABLE `status_users`
 ADD PRIMARY KEY (`ID_STATUS_USERS`), ADD KEY `FK_USER_TO_STATUS` (`ID_USERS`), ADD KEY `FK_F_STATUS` (`ID_FANBASE`);

--
-- Indexes for table `teman`
--
ALTER TABLE `teman`
 ADD KEY `FK_KE` (`USE_ID_USERS`), ADD KEY `FK_DARI` (`ID_USERS`), ADD KEY `FK_FANBASE_TO_TEMAN` (`ID_FANBASE`);

--
-- Indexes for table `transaksi_registrasi`
--
ALTER TABLE `transaksi_registrasi`
 ADD PRIMARY KEY (`ID_REGISTRASI`), ADD KEY `FK_F_TRANSAKSI` (`ID_FANBASE`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID_USERS`), ADD KEY `FK_F_USER` (`ID_FANBASE`), ADD KEY `FK_JENIS_TO_USER` (`ID_JENIS`), ADD KEY `ID_REGISTRASI` (`ID_REGISTRASI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery_barang`
--
ALTER TABLE `gallery_barang`
MODIFY `ID_GALLERY_BARANG` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_pribadi`
--
ALTER TABLE `gallery_pribadi`
MODIFY `ID_GALLERY_PRIBADI` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_users`
--
ALTER TABLE `status_users`
MODIFY `ID_STATUS_USERS` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi_registrasi`
--
ALTER TABLE `transaksi_registrasi`
MODIFY `ID_REGISTRASI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `ID_USERS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota_group`
--
ALTER TABLE `anggota_group`
ADD CONSTRAINT `FK_ANGGOTA_GROUP` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`),
ADD CONSTRAINT `FK_ANGGOTA_GROUP2` FOREIGN KEY (`ID_GROUPS`) REFERENCES `groups` (`ID_GROUPS`);

--
-- Ketidakleluasaan untuk tabel `gallery_barang`
--
ALTER TABLE `gallery_barang`
ADD CONSTRAINT `FK_USERS_TO_GALLERY_BARANG` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `gallery_pribadi`
--
ALTER TABLE `gallery_pribadi`
ADD CONSTRAINT `FK_USER_GALLERY_PRIBADI` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`),
ADD CONSTRAINT `gallery_pribadi_ibfk_1` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`);

--
-- Ketidakleluasaan untuk tabel `groups`
--
ALTER TABLE `groups`
ADD CONSTRAINT `FK_FANBASE_TO_GROUP` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
ADD CONSTRAINT `FK_USER_TO_CORP` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
ADD CONSTRAINT `FK_USER_TO_KOMENTAR` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `likes`
--
ALTER TABLE `likes`
ADD CONSTRAINT `FK_USER_TO_LIKE` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `news`
--
ALTER TABLE `news`
ADD CONSTRAINT `FK_FANBASE_TO_NEWS` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
ADD CONSTRAINT `FK_USER_TO_NEWS` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `status_users`
--
ALTER TABLE `status_users`
ADD CONSTRAINT `FK_F_STATUS` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
ADD CONSTRAINT `FK_USER_TO_STATUS` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `teman`
--
ALTER TABLE `teman`
ADD CONSTRAINT `FK_DARI` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`),
ADD CONSTRAINT `FK_FANBASE_TO_TEMAN` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
ADD CONSTRAINT `FK_KE` FOREIGN KEY (`USE_ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `FK_JENIS_TO_USER` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis_user` (`ID_JENIS`),
ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID_REGISTRASI`) REFERENCES `transaksi_registrasi` (`ID_REGISTRASI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
