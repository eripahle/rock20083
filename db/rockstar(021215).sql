-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 02. Desember 2015 jam 15:27
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `ID_GROUPS` char(50) NOT NULL,
  PRIMARY KEY (`ID_USERS`,`ID_GROUPS`),
  KEY `FK_ANGGOTA_GROUP2` (`ID_GROUPS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fanbase`
--

CREATE TABLE IF NOT EXISTS `fanbase` (
  `ID_FANBASE` bigint(20) NOT NULL,
  `WARNA` char(20) NOT NULL,
  `LOGO` text NOT NULL,
  `SUBDOMAIN` char(20) NOT NULL,
  PRIMARY KEY (`ID_FANBASE`)
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
  `ID_GALLERY_BARANG` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USERS` int(11) DEFAULT NULL,
  `NAMA_GALLERY` varchar(50) NOT NULL,
  `KODE_GALLERY` char(32) NOT NULL,
  `JENIS_GALLERY` char(50) NOT NULL,
  `SAMPEL_GALLERY` text,
  `GAMBAR_GALLERY` text,
  `HARGA_POINT` bigint(20) NOT NULL,
  `HARGA_POINT_BONUS` bigint(20) NOT NULL,
  `HARGA_CASH` bigint(20) NOT NULL,
  PRIMARY KEY (`ID_GALLERY_BARANG`),
  KEY `FK_USERS_TO_GALLERY_BARANG` (`ID_USERS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `gallery_barang`
--

INSERT INTO `gallery_barang` (`ID_GALLERY_BARANG`, `ID_USERS`, `NAMA_GALLERY`, `KODE_GALLERY`, `JENIS_GALLERY`, `SAMPEL_GALLERY`, `GAMBAR_GALLERY`, `HARGA_POINT`, `HARGA_POINT_BONUS`, `HARGA_CASH`) VALUES
(3, 9, 'a', 'a', 'a', '1283-No_image_available.jpg', '115-screenshot.jpg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_pribadi`
--

CREATE TABLE IF NOT EXISTS `gallery_pribadi` (
  `ID_GALLERY_PRIBADI` int(11) NOT NULL AUTO_INCREMENT,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `GAMBAR_GALLERY_PRIBADI` text NOT NULL,
  PRIMARY KEY (`ID_GALLERY_PRIBADI`),
  KEY `FK_USER_GALLERY_PRIBADI` (`ID_USERS`),
  KEY `ID_FANBASE` (`ID_FANBASE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `gallery_pribadi`
--

INSERT INTO `gallery_pribadi` (`ID_GALLERY_PRIBADI`, `ID_FANBASE`, `ID_USERS`, `GAMBAR_GALLERY_PRIBADI`) VALUES
(3, 1, 8, '6448-kursi-tamu-kantor-chitose-cavis-fabric-19576_521.jpeg'),
(4, 1, 8, '7155-kursi-kantor-chairman-mc-1301-a-oscarfabric-15783_521.jpeg'),
(5, 1, 9, '2934-screenshot.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `ID_GROUPS` char(50) NOT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `NAMA_GROUP` char(50) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  PRIMARY KEY (`ID_GROUPS`),
  KEY `FK_USER_TO_CORP` (`ID_USERS`),
  KEY `FK_FANBASE_TO_GROUP` (`ID_FANBASE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_user`
--

CREATE TABLE IF NOT EXISTS `jenis_user` (
  `ID_JENIS` int(11) NOT NULL,
  `NAMA_JENIS` char(30) NOT NULL,
  PRIMARY KEY (`ID_JENIS`)
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
  `DATETIME_KOMENTAR` datetime NOT NULL,
  PRIMARY KEY (`ID_KOMENTAR`),
  KEY `FK_USER_TO_KOMENTAR` (`ID_USERS`),
  KEY `FK_STATUS_TO_KOMENTAR` (`ID_STATUS_USERS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `ID_STATUS_USERS` char(50) DEFAULT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `DATETIME_LIKE` datetime NOT NULL,
  KEY `FK_USER_TO_LIKE` (`ID_USERS`),
  KEY `FK_STATUS_TO_LIKE` (`ID_STATUS_USERS`)
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
  `GAMBAR_NEWS` text NOT NULL,
  PRIMARY KEY (`ID_NEWS`),
  KEY `FK_USER_TO_NEWS` (`ID_USERS`),
  KEY `FK_FANBASE_TO_NEWS` (`ID_FANBASE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_users`
--

CREATE TABLE IF NOT EXISTS `status_users` (
  `ID_STATUS_USERS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `DATETIME_STATUS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `KONTEN` text NOT NULL,
  PRIMARY KEY (`ID_STATUS_USERS`),
  KEY `FK_USER_TO_STATUS` (`ID_USERS`),
  KEY `FK_F_STATUS` (`ID_FANBASE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `status_users`
--

INSERT INTO `status_users` (`ID_STATUS_USERS`, `ID_FANBASE`, `ID_USERS`, `DATETIME_STATUS`, `KONTEN`) VALUES
(1, 1, 6, '2015-12-07 17:00:00', 'tes'),
(5, 1, 8, '2015-12-02 13:51:09', ''),
(6, 1, 8, '2015-12-02 13:51:15', 'test'),
(7, 1, 8, '2015-12-02 13:51:22', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teman`
--

CREATE TABLE IF NOT EXISTS `teman` (
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `USE_ID_USERS` int(11) DEFAULT NULL,
  `TANGGAL_TEMAN` date NOT NULL,
  `STATUS_TEMAN` char(1) NOT NULL,
  KEY `FK_KE` (`USE_ID_USERS`),
  KEY `FK_DARI` (`ID_USERS`),
  KEY `FK_FANBASE_TO_TEMAN` (`ID_FANBASE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_registrasi`
--

CREATE TABLE IF NOT EXISTS `transaksi_registrasi` (
  `ID_REGISTRASI` int(11) NOT NULL AUTO_INCREMENT,
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
  `TANGGAL_TRANSAKSI` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_REGISTRASI`),
  KEY `FK_F_TRANSAKSI` (`ID_FANBASE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `transaksi_registrasi`
--

INSERT INTO `transaksi_registrasi` (`ID_REGISTRASI`, `ID_FANBASE`, `NAMA_LENGKAP`, `TEMPAT`, `TANGGAL`, `NEGARA`, `PROVINSI`, `KOTA`, `ALAMAT`, `KODE_POS`, `NO_TELP`, `EMAIL`, `TWITTER`, `NAMA_IBU`, `NAMA_AYAH`, `NO_SAKTI`, `CORP`, `VAD`, `STATUS_REKONSILIASI`, `STATUS_RELEASE`, `TANGGAL_TRANSAKSI`) VALUES
(16, 1, 'a', 'a', '2015-12-23', '', '', '', '', '', '', 'arf.rhman@gmail.com', '', '', '', '6887263755255861', '', '-', 'N', 'N', '2015-12-02 12:42:32'),
(17, 1, 'b', 'b', '2015-12-28', '', '', '', '', '', '', 'arf.rhman@gmail.com', '', '', '', '3243923120883742', '', '-', 'N', 'N', '2015-12-02 12:49:25'),
(18, 1, 'admin', 'admin', '2015-12-15', '', '', '', '', '', '', 'arf.rhman@gmail.com', '', '', '', '8651116658366861', '', '-', 'N', 'N', '2015-12-02 13:52:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID_USERS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_REGISTRASI` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_JENIS` int(11) DEFAULT NULL,
  `PASSWORD` char(50) NOT NULL,
  `NOMER_SAKTI` char(16) NOT NULL,
  `VAS` char(16) NOT NULL,
  `STATUS` char(1) NOT NULL,
  PRIMARY KEY (`ID_USERS`),
  KEY `FK_F_USER` (`ID_FANBASE`),
  KEY `FK_JENIS_TO_USER` (`ID_JENIS`),
  KEY `ID_REGISTRASI` (`ID_REGISTRASI`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ID_USERS`, `ID_REGISTRASI`, `ID_FANBASE`, `ID_JENIS`, `PASSWORD`, `NOMER_SAKTI`, `VAS`, `STATUS`) VALUES
(6, 16, 1, 4, 'bf03de318bcfac74fdab10a3856a63d4', '-', '-', 'N'),
(8, 17, 1, 4, '92eb5ffee6ae2fec3ad71c777531578f', 'b', '-', 'N'),
(9, 18, 1, 2, '21232f297a57a5a743894a0e4a801fc3', 'admin', '-', 'N');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota_group`
--
ALTER TABLE `anggota_group`
  ADD CONSTRAINT `FK_ANGGOTA_GROUP2` FOREIGN KEY (`ID_GROUPS`) REFERENCES `groups` (`ID_GROUPS`),
  ADD CONSTRAINT `FK_ANGGOTA_GROUP` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `gallery_barang`
--
ALTER TABLE `gallery_barang`
  ADD CONSTRAINT `FK_USERS_TO_GALLERY_BARANG` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `gallery_pribadi`
--
ALTER TABLE `gallery_pribadi`
  ADD CONSTRAINT `gallery_pribadi_ibfk_1` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
  ADD CONSTRAINT `FK_USER_GALLERY_PRIBADI` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `FK_USER_TO_CORP` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`),
  ADD CONSTRAINT `FK_FANBASE_TO_GROUP` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`);

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
  ADD CONSTRAINT `FK_USER_TO_NEWS` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`),
  ADD CONSTRAINT `FK_FANBASE_TO_NEWS` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`);

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
  ADD CONSTRAINT `FK_KE` FOREIGN KEY (`USE_ID_USERS`) REFERENCES `users` (`ID_USERS`),
  ADD CONSTRAINT `FK_DARI` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`),
  ADD CONSTRAINT `FK_FANBASE_TO_TEMAN` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID_REGISTRASI`) REFERENCES `transaksi_registrasi` (`ID_REGISTRASI`),
  ADD CONSTRAINT `FK_JENIS_TO_USER` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis_user` (`ID_JENIS`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
