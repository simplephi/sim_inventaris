-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Nov 2018 pada 07.36
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_groups`
--

CREATE TABLE IF NOT EXISTS `table_groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `group_desc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_groups`
--

INSERT INTO `table_groups` (`group_id`, `group_name`, `group_desc`) VALUES
(1, 'admin', 'only admin'),
(2, 'user', 'only user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_keluar`
--

CREATE TABLE IF NOT EXISTS `table_keluar` (
  `keluar_id` int(11) NOT NULL,
  `keluar_penerima` varchar(200) NOT NULL,
  `keluar_tanggal` date NOT NULL,
  `keluar_agenda` date NOT NULL,
  `keluar_nomor` varchar(200) NOT NULL,
  `keluar_perihal` varchar(200) NOT NULL,
  `keluar_berkas` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_masuk`
--

CREATE TABLE IF NOT EXISTS `table_masuk` (
  `masuk_id` int(11) NOT NULL,
  `masuk_pengirim` varchar(200) NOT NULL,
  `masuk_tanggal` date NOT NULL,
  `masuk_agenda` date NOT NULL,
  `masuk_nomor` varchar(200) NOT NULL,
  `masuk_perihal` text NOT NULL,
  `masuk_berkas` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`user_id`, `user_name`, `user_password`, `user_fullname`, `group_id`) VALUES
(1, 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 'Indra Fransisco', 1),
(2, 'iksan', '8ee93a29a3f16e768bd7d2c4e8403b22', 'Iksan Sinatra', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_groups`
--
ALTER TABLE `table_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `table_keluar`
--
ALTER TABLE `table_keluar`
  ADD PRIMARY KEY (`keluar_id`);

--
-- Indexes for table `table_masuk`
--
ALTER TABLE `table_masuk`
  ADD PRIMARY KEY (`masuk_id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_groups`
--
ALTER TABLE `table_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_keluar`
--
ALTER TABLE `table_keluar`
  MODIFY `keluar_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `table_masuk`
--
ALTER TABLE `table_masuk`
  MODIFY `masuk_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
