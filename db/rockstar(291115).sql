-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 29. Nopember 2015 jam 16:32
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
  `ID_USER` int(11) NOT NULL,
  `ID_GROUP` char(50) NOT NULL,
  PRIMARY KEY (`ID_USER`,`ID_GROUP`)
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
  `SUBDOMAIN` char(20) NOT NULL,
  PRIMARY KEY (`ID_FANBASE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_pribadi`
--

CREATE TABLE IF NOT EXISTS `gallery_pribadi` (
  `ID_GALLERY` int(11) NOT NULL AUTO_INCREMENT,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `GAMBAR_GALLERY` text NOT NULL,
  PRIMARY KEY (`ID_GALLERY`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `gallery_pribadi`
--

INSERT INTO `gallery_pribadi` (`ID_GALLERY`, `ID_FANBASE`, `ID_USER`, `GAMBAR_GALLERY`) VALUES
(1, 1, 1, '9359-Untitled.png'),
(2, 2, 2, '7302-Screenshot (1).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `ID_GROUP` char(50) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `NAMA_GROUP` char(50) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  PRIMARY KEY (`ID_GROUP`)
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `ID_KOMENTAR` char(50) NOT NULL,
  `ID_STATUS` char(50) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `KOMENTAR` text NOT NULL,
  `DATETIME_KOMENTAR` datetime NOT NULL,
  PRIMARY KEY (`ID_KOMENTAR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `ID_STATUS` char(50) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `DATETIME_LIKE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `ID_NEW` char(50) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `BERITA` text NOT NULL,
  `GAMBAR` text,
  `TANGGAL_NEWS` date NOT NULL,
  PRIMARY KEY (`ID_NEW`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `ID_STATUS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `DATETIME_STATUS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `KONTEN` text NOT NULL,
  PRIMARY KEY (`ID_STATUS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`ID_STATUS`, `ID_FANBASE`, `ID_USER`, `DATETIME_STATUS`, `KONTEN`) VALUES
(1, 1, 1, '2015-11-28 09:15:39', 'test status'),
(2, 1, 1, '2015-11-28 09:19:34', 'ssss'),
(3, 1, 1, '2015-11-28 09:23:19', 'ddd'),
(4, 1, 1, '2015-11-28 09:39:19', 'test\r\n'),
(5, 1, 1, '2015-11-28 09:41:36', 'aasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd'),
(6, 1, 1, '2015-11-28 09:43:59', 'te\r\n'),
(9, 1, 3, '2015-11-28 10:03:30', 'asdasdadasdasd'),
(10, 1, 3, '2015-11-28 10:03:32', 'ddddd'),
(11, 1, 3, '2015-11-28 10:50:26', 'emmm'),
(12, 1, 3, '2015-11-28 14:10:22', 'aduh sedih\r\n');

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
  PRIMARY KEY (`ID_REGISTRASI`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `transaksi_registrasi`
--

INSERT INTO `transaksi_registrasi` (`ID_REGISTRASI`, `ID_FANBASE`, `NAMA_LENGKAP`, `TEMPAT`, `TANGGAL`, `NEGARA`, `PROVINSI`, `KOTA`, `ALAMAT`, `KODE_POS`, `NO_TELP`, `EMAIL`, `TWITTER`, `NAMA_IBU`, `NAMA_AYAH`, `NO_SAKTI`, `CORP`, `VAD`, `STATUS_REKONSILIASI`, `STATUS_RELEASE`) VALUES
(1, 1, 'Arif', 'Bandung', '1994-01-15', 'Indonesia', 'Jawa Barat', 'Bandung', 'asd', '40292', '0227536025', 'arf.rhman@gmail.com', 'riefrhman', 'Ada Deh', 'mmm...', '1966311072100302', 'Bandung', '-', 'N', 'N'),
(2, 1, 'b', 'b', '2009-11-30', 'b', 'b', 'b', '', 'b', 'b', 'b', 'b', 'b', 'b', '8209932169237072', 'b', '-', 'N', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `ID_REGISTRASI` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_JENIS` int(11) DEFAULT NULL,
  `USERNAME` char(30) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `NOMER_SAKTI` char(16) NOT NULL,
  `VAS` char(16) NOT NULL,
  `STATUS` char(1) NOT NULL,
  `POINT` bigint(20) NOT NULL,
  `POINT_BONUS` bigint(20) NOT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `ID_REGISTRASI`, `ID_FANBASE`, `ID_JENIS`, `USERNAME`, `PASSWORD`, `NOMER_SAKTI`, `VAS`, `STATUS`, `POINT`, `POINT_BONUS`) VALUES
(1, 1, 1, 3, 'arf.rhman', '7815696ecbf1c96e6894b779456d330e', '-', '-', 'N', 0, 0),
(3, 2, 1, 3, 'b', '92eb5ffee6ae2fec3ad71c777531578f', '-', '-', 'N', 0, 0);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota_group`
--
ALTER TABLE `anggota_group`
  ADD CONSTRAINT `FK_ANGGOTA_GROUP` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
