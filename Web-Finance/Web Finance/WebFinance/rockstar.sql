-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2015 at 01:51 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rockstar`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_group`
--

CREATE TABLE `anggota_group` (
  `ID_USER` int(11) NOT NULL,
  `ID_GROUP` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fanbase`
--

CREATE TABLE `fanbase` (
  `ID_FANBASE` bigint(20) NOT NULL,
  `NAMA` char(50) NOT NULL,
  `WARNA` char(20) NOT NULL,
  `LOGO` text NOT NULL,
  `SUBDOMAIN` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fanbase`
--

INSERT INTO `fanbase` (`ID_FANBASE`, `NAMA`, `WARNA`, `LOGO`, `SUBDOMAIN`) VALUES
(1, 'ACUD FANS CLUB', 'Merah', 'edan.jpg', 'whatever'),
(2, 'RIZAL FANS CLUB', 'PINK', 'RFC.jpg', 'Rizal'),
(3, 'UCOK FANS CLUB', 'PINK', 'UFC.jpg', 'Uizal'),
(4, 'JAJANG FANS CLUB', 'kuning', 'edan.jpg', 'edan'),
(5, 'Testing fans club', 'kuning', 'walah.jpg', 'Walah');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_pribadi`
--

CREATE TABLE `gallery_pribadi` (
  `ID_GALLERY` char(50) NOT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `GAMBAR_GALLERY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_table`
--

CREATE TABLE `group_table` (
  `ID_GROUP` char(50) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `NAMA_GROUP` char(50) NOT NULL,
  `DESKRIPSI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_user`
--

CREATE TABLE `jenis_user` (
  `ID_JENIS` int(11) NOT NULL,
  `NAMA_JENIS` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_user`
--

INSERT INTO `jenis_user` (`ID_JENIS`, `NAMA_JENIS`) VALUES
(1, 'Super Admin'),
(2, 'Admin Finance'),
(3, 'Admin Web'),
(4, 'Corp'),
(5, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `ID_KOMENTAR` char(50) NOT NULL,
  `ID_STATUS` char(50) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `KOMENTAR` text NOT NULL,
  `DATETIME_KOMENTAR` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `like_table`
--

CREATE TABLE `like_table` (
  `ID_STATUS` char(50) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `DATETIME_LIKE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `ID_NEW` char(50) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `BERITA` text NOT NULL,
  `GAMBAR` text,
  `TANGGAL_NEWS` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_table`
--

CREATE TABLE `status_table` (
  `ID_STATUS` char(50) NOT NULL,
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `DATETIME_STATUS` datetime NOT NULL,
  `KONTEN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teman`
--

CREATE TABLE `teman` (
  `ID_FANBASE` bigint(20) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `USE_ID_USER` int(11) DEFAULT NULL,
  `TANGGAL_TEMAN` date NOT NULL,
  `STATUS_TEMAN` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_registrasi`
--

CREATE TABLE `transaksi_registrasi` (
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

--
-- Dumping data for table `transaksi_registrasi`
--

INSERT INTO `transaksi_registrasi` (`ID_REGISTRASI`, `ID_FANBASE`, `NAMA_LENGKAP`, `TEMPAT`, `TANGGAL`, `NEGARA`, `PROVINSI`, `KOTA`, `ALAMAT`, `KODE_POS`, `NO_TELP`, `EMAIL`, `TWITTER`, `NAMA_IBU`, `NAMA_AYAH`, `NO_SAKTI`, `CORP`, `VAD`, `STATUS_REKONSILIASI`, `STATUS_RELEASE`, `VAD_REKON`) VALUES
(1, 1, 'Ayu Laras Wati', 'Bandung', '1994-11-02', 'Indonesia', 'Jawa Barat', 'Bandung', 'Jl.testing', '40238', '08237274231', 'ayu_laras@yahoo.com', 'jajang_rc', 'Sutarti', 'Sutejo', '6100000000000000', 'BANDUNG', '8118162021001130', '0', '0', ''),
(2, 1, 'Winaya Novrizka', 'Bandung', '1995-11-10', 'Indonesia', 'Jawa Barat', 'Bandung', 'Jl.Raya Batujajar', '40216', '08732773223', 'Winaya@yahoo.com', '', '', '', '6110000000000000', 'Bandung', '8118162061000000', '0', '0', ''),
(3, 1, 'Saidah Erva', 'Jakarta', '1994-10-10', 'Indonesia', 'Jakarta', 'Jakarta', 'Jl.Jakarta', '40216', '0872732774221', 'unknown@yahoo.com', '', '', '', '6120000000000000', 'Jakarta', '8118162021000020', '0', '0', ''),
(4, 1, 'Etdah', 'Bandung', '2015-11-01', 'Indonesia', 'Jawa Barat', 'Bandung', 'jl kampang', '40216', '089323928', '', '', '', '', '6130000000000000', 'BANDUNG', '8118162021001110', '0', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `ID_REGISTRASI`, `ID_FANBASE`, `ID_JENIS`, `USERNAME`, `PASSWORD`, `NOMER_SAKTI`, `VAS`, `STATUS`, `POINT`, `POINT_BONUS`) VALUES
(1, NULL, NULL, 2, 'adminfinance', '123', '', '', '0', 0, 0),
(2, 1, 1, 5, '123', '123', '6100000000000000', '', '0', 0, 0),
(3, 2, 1, 5, '1', '123', '6110000000000000', '', '0', 0, 0),
(4, 3, 1, 5, '2', '123', '6120000000000000', '', '0', 0, 0),
(5, 4, 1, 5, 'ganteng', '123', '6130000000000000', '', '0', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_group`
--
ALTER TABLE `anggota_group`
  ADD PRIMARY KEY (`ID_USER`,`ID_GROUP`),
  ADD KEY `FK_ANGGOTA_GROUP2` (`ID_GROUP`);

--
-- Indexes for table `fanbase`
--
ALTER TABLE `fanbase`
  ADD PRIMARY KEY (`ID_FANBASE`);

--
-- Indexes for table `gallery_pribadi`
--
ALTER TABLE `gallery_pribadi`
  ADD PRIMARY KEY (`ID_GALLERY`),
  ADD KEY `FK_FANBASE_TO_GALLERY_PRIBADI` (`ID_FANBASE`),
  ADD KEY `FK_USER_GALLERY_PRIBADI` (`ID_USER`);

--
-- Indexes for table `group_table`
--
ALTER TABLE `group_table`
  ADD PRIMARY KEY (`ID_GROUP`),
  ADD KEY `FK_FANBASE_TO_GROUP` (`ID_FANBASE`),
  ADD KEY `FK_USER_TO_CORP` (`ID_USER`);

--
-- Indexes for table `jenis_user`
--
ALTER TABLE `jenis_user`
  ADD PRIMARY KEY (`ID_JENIS`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`ID_KOMENTAR`),
  ADD KEY `FK_STATUS_TO_KOMENTAR` (`ID_STATUS`),
  ADD KEY `FK_USER_TO_KOMENTAR` (`ID_USER`);

--
-- Indexes for table `like_table`
--
ALTER TABLE `like_table`
  ADD KEY `FK_STATUS_TO_LIKE` (`ID_STATUS`),
  ADD KEY `FK_USER_TO_LIKE` (`ID_USER`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`ID_NEW`),
  ADD KEY `FK_FANBASE_TO_NEWS` (`ID_FANBASE`),
  ADD KEY `FK_USER_TO_NEWS` (`ID_USER`);

--
-- Indexes for table `status_table`
--
ALTER TABLE `status_table`
  ADD PRIMARY KEY (`ID_STATUS`),
  ADD KEY `FK_F_STATUS` (`ID_FANBASE`),
  ADD KEY `FK_USER_TO_STATUS` (`ID_USER`);

--
-- Indexes for table `teman`
--
ALTER TABLE `teman`
  ADD KEY `FK_DARI` (`ID_USER`),
  ADD KEY `FK_FANBASE_TO_TEMAN` (`ID_FANBASE`),
  ADD KEY `FK_KE` (`USE_ID_USER`);

--
-- Indexes for table `transaksi_registrasi`
--
ALTER TABLE `transaksi_registrasi`
  ADD PRIMARY KEY (`ID_REGISTRASI`),
  ADD KEY `FK_F_TRANSAKSI` (`ID_FANBASE`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_F_USER` (`ID_FANBASE`),
  ADD KEY `FK_JENIS_TO_USER` (`ID_JENIS`),
  ADD KEY `FK_TRANSAKSI_REGISTRASI_TO_USER` (`ID_REGISTRASI`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_group`
--
ALTER TABLE `anggota_group`
  ADD CONSTRAINT `FK_ANGGOTA_GROUP` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_ANGGOTA_GROUP2` FOREIGN KEY (`ID_GROUP`) REFERENCES `group_table` (`ID_GROUP`);

--
-- Constraints for table `gallery_pribadi`
--
ALTER TABLE `gallery_pribadi`
  ADD CONSTRAINT `FK_FANBASE_TO_GALLERY_PRIBADI` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
  ADD CONSTRAINT `FK_USER_GALLERY_PRIBADI` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `group_table`
--
ALTER TABLE `group_table`
  ADD CONSTRAINT `FK_FANBASE_TO_GROUP` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
  ADD CONSTRAINT `FK_USER_TO_CORP` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `FK_STATUS_TO_KOMENTAR` FOREIGN KEY (`ID_STATUS`) REFERENCES `status_table` (`ID_STATUS`),
  ADD CONSTRAINT `FK_USER_TO_KOMENTAR` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `like_table`
--
ALTER TABLE `like_table`
  ADD CONSTRAINT `FK_STATUS_TO_LIKE` FOREIGN KEY (`ID_STATUS`) REFERENCES `status_table` (`ID_STATUS`),
  ADD CONSTRAINT `FK_USER_TO_LIKE` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `new`
--
ALTER TABLE `new`
  ADD CONSTRAINT `FK_FANBASE_TO_NEWS` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
  ADD CONSTRAINT `FK_USER_TO_NEWS` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `status_table`
--
ALTER TABLE `status_table`
  ADD CONSTRAINT `FK_F_STATUS` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
  ADD CONSTRAINT `FK_USER_TO_STATUS` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `teman`
--
ALTER TABLE `teman`
  ADD CONSTRAINT `FK_DARI` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_FANBASE_TO_TEMAN` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
  ADD CONSTRAINT `FK_KE` FOREIGN KEY (`USE_ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `transaksi_registrasi`
--
ALTER TABLE `transaksi_registrasi`
  ADD CONSTRAINT `FK_F_TRANSAKSI` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_F_USER` FOREIGN KEY (`ID_FANBASE`) REFERENCES `fanbase` (`ID_FANBASE`),
  ADD CONSTRAINT `FK_JENIS_TO_USER` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis_user` (`ID_JENIS`),
  ADD CONSTRAINT `FK_TRANSAKSI_REGISTRASI_TO_USER` FOREIGN KEY (`ID_REGISTRASI`) REFERENCES `transaksi_registrasi` (`ID_REGISTRASI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
