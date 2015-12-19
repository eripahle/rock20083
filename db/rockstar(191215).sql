-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 19. Desember 2015 jam 04:51
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
  `nama_fanbase` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_FANBASE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fanbase`
--

INSERT INTO `fanbase` (`ID_FANBASE`, `WARNA`, `LOGO`, `SUBDOMAIN`, `nama_fanbase`) VALUES
(1, 'Merah', '1', 'test', 'Soniq');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `gallery_barang`
--

INSERT INTO `gallery_barang` (`ID_GALLERY_BARANG`, `ID_USERS`, `NAMA_GALLERY`, `KODE_GALLERY`, `JENIS_GALLERY`, `SAMPEL_GALLERY`, `GAMBAR_GALLERY`, `HARGA_POINT`, `HARGA_POINT_BONUS`, `HARGA_CASH`) VALUES
(1, 6, 'Picture Bagus CocBoy Junior', 'P0001', 'CD', '1283-No_image_available.jpg', '1283-No_image_available.jpg', 100, 120, 25000),
(2, 10, 'test barang', '1122', 'Event', '2772-CHRMP.gif', '7691-Iklan-CHRMP.gif', 0, 0, 0),
(3, 6, 'Video Langka CJR', '0012', 'Movie', '7599-psd.mp4', '4801-Facebook.MP4', 10000, 10000, 9000000),
(4, 6, 'event', '1212', 'Event', '8858-pattern.png', '4861-screenshot.jpg', 100, 0, 100);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `gallery_pribadi`
--

INSERT INTO `gallery_pribadi` (`ID_GALLERY_PRIBADI`, `ID_FANBASE`, `ID_USERS`, `GAMBAR_GALLERY_PRIBADI`) VALUES
(1, 1, 6, '3010-angkot2.jpg'),
(3, 1, 10, '7312-12108819_793047207507758_6153258791477611238_n.jpg'),
(4, 1, 6, '9548-images.png');

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
  `ID_KOMENTAR` mediumint(11) NOT NULL AUTO_INCREMENT,
  `ID_STATUS_USERS` char(50) DEFAULT NULL,
  `ID_USERS` int(11) DEFAULT NULL,
  `KOMENTAR` text NOT NULL,
  `DATETIME_KOMENTAR` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_KOMENTAR`),
  KEY `FK_USER_TO_KOMENTAR` (`ID_USERS`),
  KEY `FK_STATUS_TO_KOMENTAR` (`ID_STATUS_USERS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`ID_KOMENTAR`, `ID_STATUS_USERS`, `ID_USERS`, `KOMENTAR`, `DATETIME_KOMENTAR`) VALUES
(4, '5', 10, 'aaaaaa', '2015-12-11 04:11:05'),
(5, '3', 10, 'bbbbb', '2015-12-11 04:26:02'),
(6, '3', 10, 'qqqq', '2015-12-11 04:13:05'),
(7, '5', 10, 'hmmm', '2015-12-11 05:34:06'),
(8, '5', 10, 'hhhhh', '2015-12-11 05:34:19'),
(9, '5', 10, 'rrr', '2015-12-11 05:35:12'),
(10, '5', 10, 'wkwk', '2015-12-11 05:35:58'),
(11, '4', 10, 'kitu hungkul ', '2015-12-11 05:36:23'),
(12, '5', 10, 'aaaa', '2015-12-11 05:37:06'),
(13, '4', 10, 'sss', '2015-12-14 05:42:18'),
(14, '5', 10, 'eee', '2015-12-14 05:42:34'),
(15, '5', 10, 'sss', '2015-12-15 11:22:42'),
(16, '5', 10, 'sss', '2015-12-15 11:22:48'),
(17, '5', 10, 'asdasd', '2015-12-15 11:23:17'),
(18, '5', 10, 'qweqwe', '2015-12-15 11:23:25'),
(19, '6', 6, 'aaaa', '2015-12-16 13:21:33'),
(20, '7', 10, 'ddd', '2015-12-16 15:44:31'),
(21, '8', 10, 'dd', '2015-12-16 16:16:57'),
(22, '6', 10, 'ss', '2015-12-17 04:54:38'),
(23, '10', 10, 'ddd', '2015-12-19 01:10:13'),
(24, '10', 10, 'sdaa', '2015-12-19 01:10:16'),
(25, '8', 10, 'ds', '2015-12-19 01:10:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `legend`
--

CREATE TABLE IF NOT EXISTS `legend` (
  `id_legend` int(11) NOT NULL,
  `nama_legend` varchar(30) NOT NULL,
  PRIMARY KEY (`id_legend`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `legend`
--

INSERT INTO `legend` (`id_legend`, `nama_legend`) VALUES
(16202100, 'JAKARTA'),
(16202101, 'SONIQ CENTRE'),
(16202102, 'DEPOK'),
(16202103, 'TANGERANG'),
(16202104, 'BEKASI'),
(16202105, 'BALARAJA'),
(16202109, 'JAKARTA SCORE'),
(16202200, 'BANDUNG'),
(16202400, 'SEMARANG'),
(16203100, 'SURABAYA'),
(16203101, 'GRESIK'),
(16203102, 'SIDOARJO'),
(16204500, 'LHOKSEUMAWE'),
(16206100, 'MEDAN'),
(16223100, 'CIREBON'),
(16223200, 'KUNINGAN'),
(16223300, 'MAJALENGKA'),
(16225100, 'BOGOR'),
(16225200, 'BANTEN'),
(16226100, 'SUMEDANG'),
(16226200, 'GARUT'),
(16226300, 'CIANJUR'),
(16226400, 'PURWAKARTA'),
(16226500, 'TASIKMALAYA'),
(16226600, 'SUKABUMI'),
(16226700, 'KARAWANG'),
(16227100, 'SOLO'),
(16227200, 'KLATEN'),
(16227400, 'YOGYAKARTA'),
(16227600, 'BOYOLALI'),
(16228101, 'BANYUMAS'),
(16228200, 'CILACAP'),
(16228300, 'TEGAL'),
(16228500, 'PEKALONGAN'),
(16228700, 'KEBUMEN'),
(16229100, 'DEMAK'),
(16229300, 'MAGELANG'),
(16229600, 'BLORA'),
(16232100, 'JOMBANG'),
(16232101, 'MOJOKERTO'),
(16232800, 'MADURA'),
(16233100, 'JEMBER'),
(16233300, 'BANYUWANGI'),
(16233500, 'PROBOLINGGO'),
(16233501, 'LUMAJANG'),
(16233800, 'SITUBONDO'),
(16234100, 'MALANG'),
(16234200, 'BLITAR'),
(16234300, 'PASURUAN'),
(16235100, 'MADIUN'),
(16235101, 'NGAWI'),
(16235500, 'TULUNGAGUNG'),
(16235501, 'TRENGGALEK'),
(16235800, 'NGANJUK'),
(16236100, 'BALI'),
(16237000, 'MATARAM'),
(16240100, 'KENDARI'),
(16241100, 'MAKASSAR'),
(16243100, 'MANADO'),
(16243500, 'GORONTALO'),
(16245200, 'PALU'),
(16245300, 'TOLI-TOLI'),
(16246100, 'LUWUK'),
(16247300, 'MASAMBA'),
(16251100, 'BANJARMASIN'),
(16253100, 'SAMPIT'),
(16253600, 'PALANGKARAYA'),
(16254100, 'SAMARINDA'),
(16254200, 'BALIKPAPAN'),
(16254800, 'BONTANG'),
(16255100, 'TARAKAN'),
(16256100, 'PONTIANAK'),
(16264100, 'LANGSA'),
(16271100, 'PALEMBANG'),
(16272200, 'LAMPUNG'),
(16273600, 'BENGKULU'),
(16274100, 'JAMBI'),
(16275100, 'PADANG'),
(16276100, 'PEKANBARU'),
(16277800, 'BATAM'),
(16291100, 'AMBON'),
(16296700, 'JAYAPURA'),
(20141600, 'USA (CANADA)'),
(26000300, 'MALAYSIA'),
(26008200, 'KUCHING'),
(26100800, 'AUSTRALIA'),
(26500100, 'SINGAPORE'),
(26730100, 'BRUNEI DARUSSALAM'),
(29700002, 'ABU DHABI');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `status_users`
--

INSERT INTO `status_users` (`ID_STATUS_USERS`, `ID_FANBASE`, `ID_USERS`, `DATETIME_STATUS`, `KONTEN`) VALUES
(1, 1, 6, '2015-12-04 17:32:00', 'testing user data status'),
(2, 1, 7, '2015-12-05 00:58:48', 'testing ini pahlevi 5'),
(3, 1, 6, '2015-12-05 01:35:15', 'testing'),
(4, 1, 10, '2015-12-05 04:27:29', 'levi keren'),
(5, 1, 10, '2015-12-09 14:44:37', 'sss'),
(6, 1, 6, '2015-12-16 13:21:30', 'sss'),
(7, 1, 10, '2015-12-16 15:44:28', 'ss'),
(8, 1, 10, '2015-12-16 16:16:54', 'ddd'),
(9, 1, 10, '2015-12-19 00:46:33', 'sss'),
(10, 1, 10, '2015-12-19 00:50:20', 'sssd');

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
-- Struktur dari tabel `transaksi_give_point`
--

CREATE TABLE IF NOT EXISTS `transaksi_give_point` (
  `ID_TRANSAKSI_GIVE_POINT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USERS_PENGIRIM` int(11) NOT NULL,
  `ID_USER_PENERIMA` int(11) NOT NULL,
  `STATUS` tinyint(4) NOT NULL,
  `POINT` int(11) NOT NULL,
  PRIMARY KEY (`ID_TRANSAKSI_GIVE_POINT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `VAD_REKON` text NOT NULL,
  `STATUS_REKONSILIASI` char(1) NOT NULL,
  `STATUS_RELEASE` char(1) NOT NULL,
  `TANGGAL_TRANSAKSI` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `VALIDASI_UPLOAD` varchar(1) NOT NULL,
  PRIMARY KEY (`ID_REGISTRASI`),
  KEY `FK_F_TRANSAKSI` (`ID_FANBASE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `transaksi_registrasi`
--

INSERT INTO `transaksi_registrasi` (`ID_REGISTRASI`, `ID_FANBASE`, `NAMA_LENGKAP`, `TEMPAT`, `TANGGAL`, `NEGARA`, `PROVINSI`, `KOTA`, `ALAMAT`, `KODE_POS`, `NO_TELP`, `EMAIL`, `TWITTER`, `NAMA_IBU`, `NAMA_AYAH`, `NO_SAKTI`, `CORP`, `VAD`, `VAD_REKON`, `STATUS_REKONSILIASI`, `STATUS_RELEASE`, `TANGGAL_TRANSAKSI`, `VALIDASI_UPLOAD`) VALUES
(1, 1, 'Pahlevi Ridwan Putra', 'Bandung', '2015-12-01', 'Indonesia', 'Jawa Barat', 'Bandung', 'Cibogo', '40164', '085624257705', 'eriaphle@gmail.com', '@eripahle', 'elly marliany', 'Ridwan', '6100000000000001', 'Bandung', '8276679941254580', '2147483647', '1', '0', '2015-12-04 16:59:17', '2'),
(2, 1, 'Pahlevi Ridwan Putra 2', 'Bandung 2', '2015-12-15', 'Indonesia', 'Jawa Barat', 'Bandung', 'Cibogo', '40164', '085624257705', 'eriaphle@gmail.com', '@eripahle', 'elly marliany', 'Ridwan', '6110000000000002', 'Bandung', '3981935966814327', '2147483647', '1', '0', '2015-12-04 16:59:17', '2'),
(4, 1, 'Pahlevi Ridwan Putra 4', 'Bandung 4', '2015-12-23', 'Indonesia', 'Jawa Barat', 'Bandung', 'Cibogo', '40164', '085624257705', 'eriaphle@gmail.com', '@eripahle', 'elly marliany', 'Ridwan', '6213540000012401', 'Bandung', '4017134547798153', '4017134547798153', '1', '1', '2015-12-04 17:30:56', '3'),
(5, 1, 'Pahlevi Ridwan Putra 5', 'Bandung 5', '2015-12-10', 'Indonesia', 'Jawa Barat', 'Bandung', 'Cibogo Atas No.74 Kel.Sukawarna, Kec.Sukajadi', '40164', '085624257705', 'eriaphle@gmail.com', '@eripahle', 'elly marliany', 'Ridwan', '6214540000012402', 'Bandung', '3996960922075780', '3996960922075780', '1', '1', '2015-12-05 00:58:08', '3'),
(6, 1, 'Rini Dwi', 'Bandung', '2015-12-01', 'Indonesia', 'Jawa Barat', 'Bandung', 'Cibogo Atas No.74', '40164', '085624257705', 'eriaphle@gmail.com', '@eripahle', 'elly marliany', 'Ridwan', '6214540000012402', 'Bandung', '6334231316677063', '6334231316677063', '1', '1', '2015-12-05 01:31:30', '3'),
(7, 1, 'Rini Dwi 1', 'Bandung', '2015-12-23', 'Indonesia', 'Jawa Barat', 'Bandung', 'Testing', '40164', '085624257705', 'eriaphle@gmail.com', '@eripahle', 'elly marliany', 'Ridwan', '', 'Bandung', '6676273450852508', '', '0', '0', '2015-12-05 01:45:04', '0'),
(8, 1, 'Pahlevi Ridwan Putra 6s', 'Bandung 6', '2015-12-01', 'Indonesia', 'Jawa Barat', 'Bandung', 'TEting', '40164', '085624257705', 'arf.rhman@gmail.com', '@eripahle', 'elly marliany', 'Ridwan', '1234567891234567', 'Bandung', '5321091220372960', '5321091220372960', '1', '1', '2015-12-11 01:28:43', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_request_pembelian`
--

CREATE TABLE IF NOT EXISTS `transaksi_request_pembelian` (
  `ID_TRANSAKSI_REQUEST_PEMBELIAN` int(16) NOT NULL AUTO_INCREMENT,
  `ID_USERS` int(11) NOT NULL,
  `ID_GALLERY_BARANG` int(11) NOT NULL,
  `VAD` varchar(16) NOT NULL,
  `TANGGAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` tinyint(4) NOT NULL,
  `TYPE_PEMBELIAN` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_TRANSAKSI_REQUEST_PEMBELIAN`),
  KEY `FK_ID_USERS` (`ID_USERS`),
  KEY `FK_ID_GALLERY_BARANG` (`ID_GALLERY_BARANG`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `transaksi_request_pembelian`
--

INSERT INTO `transaksi_request_pembelian` (`ID_TRANSAKSI_REQUEST_PEMBELIAN`, `ID_USERS`, `ID_GALLERY_BARANG`, `VAD`, `TANGGAL`, `STATUS`, `TYPE_PEMBELIAN`) VALUES
(9, 10, 2, '-', '2015-12-19 01:12:32', 2, 'POINT'),
(10, 10, 2, '4622099956371155', '2015-12-11 02:29:30', 0, 'CASH'),
(11, 10, 2, '-', '2015-12-15 11:25:13', 1, 'POINT'),
(12, 10, 2, '-', '2015-12-15 11:25:26', 1, 'POINT'),
(13, 10, 2, '8167876978998064', '2015-12-16 12:27:41', 0, 'CASH'),
(14, 10, 2, '-', '2015-12-16 13:18:36', 1, 'POINT'),
(15, 10, 2, '-', '2015-12-16 13:18:45', 1, 'POINT'),
(16, 6, 2, '-', '2015-12-16 14:43:11', 1, 'FREE'),
(17, 6, 2, '-', '2015-12-16 14:43:17', 1, 'FREE'),
(18, 10, 2, '-', '2015-12-16 14:56:26', 1, 'FREE'),
(19, 10, 2, '-', '2015-12-16 15:56:48', 1, 'FREE'),
(20, 10, 2, '-', '2015-12-16 16:17:10', 1, 'FREE'),
(21, 10, 2, '-', '2015-12-16 16:59:24', 1, 'FREE'),
(22, 10, 2, '-', '2015-12-17 05:16:26', 1, 'FREE'),
(23, 10, 3, '1901662210845983', '2015-12-17 05:21:23', 0, 'CASH'),
(24, 10, 1, '2951742670510126', '2015-12-17 05:21:34', 0, 'CASH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_request_topup_point`
--

CREATE TABLE IF NOT EXISTS `transaksi_request_topup_point` (
  `ID_TRANSAKSI_REQUEST_TOPUP_POINT` int(16) NOT NULL AUTO_INCREMENT,
  `ID_USERS` int(11) NOT NULL,
  `TANGGAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `POINT` int(11) NOT NULL,
  `STATUS` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID_TRANSAKSI_REQUEST_TOPUP_POINT`),
  KEY `ID_USERS` (`ID_USERS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `transaksi_request_topup_point`
--

INSERT INTO `transaksi_request_topup_point` (`ID_TRANSAKSI_REQUEST_TOPUP_POINT`, `ID_USERS`, `TANGGAL`, `POINT`, `STATUS`) VALUES
(4, 10, '2015-12-19 01:23:31', 0, 1),
(5, 10, '2015-12-19 01:23:28', 0, 1),
(6, 10, '2015-12-18 17:00:00', 0, 0),
(7, 10, '2015-12-18 17:00:00', 0, 0),
(8, 10, '2015-12-18 17:00:00', 0, 0),
(9, 10, '2015-12-18 17:00:00', 0, 0),
(16, 10, '2015-12-18 17:00:00', 0, 0),
(17, 10, '2015-12-19 02:51:07', 0, 1),
(18, 10, '2015-12-18 17:00:00', 0, 0),
(19, 10, '2015-12-18 17:00:00', 0, 0),
(20, 10, '2015-12-19 03:04:17', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID_USERS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_REGISTRASI` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_JENIS` int(11) DEFAULT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` char(50) NOT NULL,
  `NOMER_SAKTI` char(16) NOT NULL,
  `VAS` char(16) NOT NULL,
  `STATUS` char(1) NOT NULL,
  `POINT` int(11) NOT NULL,
  `STATUS_FIRST_LOGIN` int(11) NOT NULL,
  `POINT_BONUS` int(11) NOT NULL,
  `FOTO` text NOT NULL,
  PRIMARY KEY (`ID_USERS`),
  KEY `FK_F_USER` (`ID_FANBASE`),
  KEY `FK_JENIS_TO_USER` (`ID_JENIS`),
  KEY `ID_REGISTRASI` (`ID_REGISTRASI`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ID_USERS`, `ID_REGISTRASI`, `ID_FANBASE`, `ID_JENIS`, `USERNAME`, `PASSWORD`, `NOMER_SAKTI`, `VAS`, `STATUS`, `POINT`, `STATUS_FIRST_LOGIN`, `POINT_BONUS`, `FOTO`) VALUES
(1, NULL, 1, 2, 'adminfinance', 'admin', '', '', '1', 0, 0, 0, ''),
(2, 1, 1, 4, '', 'bcc2b38cadd5b3dfc5c3f9a527925f5f', '6100000000000001', '-', '0', 0, 0, 0, ''),
(3, NULL, 1, 2, 'adminfinance', '123', '', '', '1', 0, 0, 0, ''),
(4, 2, 1, 4, '', 'a3416a22eac52e67d3a77455588cab2d', '6110000000000002', '-', '0', 0, 0, 0, ''),
(6, 4, 1, 2, 'ad', '523af537946b79c4f8369ed39ba78605', 'ad', '8118621354000001', '1', 10, 1, 0, '2629-text-brith.png'),
(7, 5, 1, 4, '', 'dc5f321b6ca537adb213afbf11366ff4', '6214540000012402', '8118621454000001', '1', 0, 0, 0, ''),
(8, 6, 1, 4, '', 'de2343955732036b8a1336ab5247d62e', '6214540000012402', '8118621454000001', '1', 0, 0, 0, ''),
(9, 7, 1, 4, '', '55cc92a43f6ff3a849b1ae361c0205e5', '', '-', '0', 0, 0, 0, ''),
(10, 8, 1, 4, '', '4124bc0a9335c27f086f24ba207a4912', '1', '8118123456789123', '1', 0, 1, 0, '8417-photo.jpg');

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
-- Ketidakleluasaan untuk tabel `transaksi_request_pembelian`
--
ALTER TABLE `transaksi_request_pembelian`
  ADD CONSTRAINT `transaksi_request_pembelian_ibfk_1` FOREIGN KEY (`ID_GALLERY_BARANG`) REFERENCES `gallery_barang` (`ID_GALLERY_BARANG`),
  ADD CONSTRAINT `transaksi_request_pembelian_ibfk_2` FOREIGN KEY (`ID_USERS`) REFERENCES `users` (`ID_USERS`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_JENIS_TO_USER` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis_user` (`ID_JENIS`),
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID_REGISTRASI`) REFERENCES `transaksi_registrasi` (`ID_REGISTRASI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
