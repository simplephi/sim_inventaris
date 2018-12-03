-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 01:02 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `table_groups`
--

CREATE TABLE `table_groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `group_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_groups`
--

INSERT INTO `table_groups` (`group_id`, `group_name`, `group_desc`) VALUES
(1, 'admin', 'only admin'),
(2, 'user', 'only user');

-- --------------------------------------------------------

--
-- Table structure for table `table_keluar`
--

CREATE TABLE `table_keluar` (
  `keluar_id` int(11) NOT NULL,
  `keluar_penerima` varchar(200) NOT NULL,
  `keluar_tanggal` date NOT NULL,
  `keluar_agenda` date NOT NULL,
  `keluar_nomor` varchar(200) NOT NULL,
  `keluar_perihal` varchar(200) NOT NULL,
  `keluar_berkas` text NOT NULL,
  `keluar_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_kibb`
--

CREATE TABLE `table_kibb` (
  `kibb_id` int(11) NOT NULL,
  `kibb_kode` text NOT NULL,
  `kibb_name` text NOT NULL,
  `kibb_noreg` int(11) NOT NULL,
  `kibb_type` text NOT NULL,
  `kibb_cc` int(11) NOT NULL,
  `kibb_bahan` text NOT NULL,
  `kibb_tahun` varchar(4) NOT NULL,
  `kibb_pabrik` text NOT NULL,
  `kibb_rangka` text NOT NULL,
  `kibb_mesin` text NOT NULL,
  `kibb_polisi` text NOT NULL,
  `kibb_bpkb` text NOT NULL,
  `kibb_asal` text NOT NULL,
  `kibb_harga` double NOT NULL,
  `kibb_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_kibc`
--

CREATE TABLE `table_kibc` (
  `kibc_id` int(11) NOT NULL,
  `kibc_name` text NOT NULL,
  `kibc_kodeb` text NOT NULL,
  `kibc_noreg` int(11) NOT NULL,
  `kibc_bangunan` text NOT NULL,
  `kibc_bertingkat` text NOT NULL,
  `kibc_beton` text NOT NULL,
  `kibc_lantai` int(11) NOT NULL,
  `kibc_letak` text NOT NULL,
  `kibc_tgldok` date NOT NULL,
  `kibc_nodok` int(11) NOT NULL,
  `kibc_luas` int(11) NOT NULL,
  `kibc_status` text NOT NULL,
  `kibc_kodet` text NOT NULL,
  `kibc_asal` text NOT NULL,
  `kibc_harga` double NOT NULL,
  `kibc_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_kibd`
--

CREATE TABLE `table_kibd` (
  `kibd_id` int(11) NOT NULL,
  `kibd_name` text NOT NULL,
  `kibd_kodeb` text NOT NULL,
  `kibd_noreg` int(11) NOT NULL,
  `kibd_konstruksi` text NOT NULL,
  `kibd_panjang` int(11) NOT NULL,
  `kibd_lebar` int(11) NOT NULL,
  `kibd_luas` int(11) NOT NULL,
  `kibd_letak` text NOT NULL,
  `kibd_tgldok` date NOT NULL,
  `kibd_nodok` int(11) NOT NULL,
  `kibd_status` text NOT NULL,
  `kibd_kodet` text NOT NULL,
  `kibd_asal` text NOT NULL,
  `kibd_harga` double NOT NULL,
  `kibd_bangunan` text NOT NULL,
  `kibd_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_kibf`
--

CREATE TABLE `table_kibf` (
  `kibf_id` int(11) NOT NULL,
  `kibf_name` varchar(200) NOT NULL,
  `kibf_bangunan` text NOT NULL,
  `kibf_bertingkat` text NOT NULL,
  `kibf_beton` text NOT NULL,
  `kibf_luas` text NOT NULL,
  `kibf_letak` text NOT NULL,
  `kibf_tgldok` date NOT NULL,
  `kibf_nodok` text NOT NULL,
  `kibf_tglmulai` date NOT NULL,
  `kibf_status` text NOT NULL,
  `kibf_kode` text NOT NULL,
  `kibf_asal` text NOT NULL,
  `kibf_nilai` text NOT NULL,
  `kibf_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_masuk`
--

CREATE TABLE `table_masuk` (
  `masuk_id` int(11) NOT NULL,
  `masuk_pengirim` varchar(200) NOT NULL,
  `masuk_tanggal` date NOT NULL,
  `masuk_agenda` date NOT NULL,
  `masuk_nomor` varchar(200) NOT NULL,
  `masuk_perihal` text NOT NULL,
  `masuk_berkas` text NOT NULL,
  `masuk_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_pegawai`
--

CREATE TABLE `table_pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_name` varchar(200) NOT NULL,
  `pegawai_nip` varchar(200) NOT NULL,
  `pegawai_gol` varchar(200) NOT NULL,
  `pegawai_jabatan` text NOT NULL,
  `pegawai_pen` text NOT NULL,
  `pegawai_kompetensi` text NOT NULL,
  `pegawai_formal` text NOT NULL,
  `pegawai_fungsional` text NOT NULL,
  `pegawai_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_tdarat`
--

CREATE TABLE `table_tdarat` (
  `tdarat_id` int(11) NOT NULL,
  `tdarat_name` varchar(200) NOT NULL,
  `tdarat_input` varchar(200) NOT NULL,
  `tdarat_verifikasi` varchar(200) NOT NULL,
  `tdarat_satuan` varchar(200) NOT NULL,
  `tdarat_sumber` varchar(200) NOT NULL,
  `tdarat_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_tlaut`
--

CREATE TABLE `table_tlaut` (
  `tlaut_id` int(11) NOT NULL,
  `tlaut_name` varchar(200) NOT NULL,
  `tlaut_input` varchar(200) NOT NULL,
  `tlaut_verifikasi` varchar(200) NOT NULL,
  `tlaut_satuan` varchar(200) NOT NULL,
  `tlaut_sumber` varchar(200) NOT NULL,
  `tlaut_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`user_id`, `user_name`, `user_password`, `user_fullname`, `group_id`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin sipadu', 1);

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
-- Indexes for table `table_kibb`
--
ALTER TABLE `table_kibb`
  ADD PRIMARY KEY (`kibb_id`);

--
-- Indexes for table `table_kibc`
--
ALTER TABLE `table_kibc`
  ADD PRIMARY KEY (`kibc_id`);

--
-- Indexes for table `table_kibd`
--
ALTER TABLE `table_kibd`
  ADD PRIMARY KEY (`kibd_id`);

--
-- Indexes for table `table_kibf`
--
ALTER TABLE `table_kibf`
  ADD PRIMARY KEY (`kibf_id`);

--
-- Indexes for table `table_masuk`
--
ALTER TABLE `table_masuk`
  ADD PRIMARY KEY (`masuk_id`);

--
-- Indexes for table `table_pegawai`
--
ALTER TABLE `table_pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `table_tdarat`
--
ALTER TABLE `table_tdarat`
  ADD PRIMARY KEY (`tdarat_id`);

--
-- Indexes for table `table_tlaut`
--
ALTER TABLE `table_tlaut`
  ADD PRIMARY KEY (`tlaut_id`);

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
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_keluar`
--
ALTER TABLE `table_keluar`
  MODIFY `keluar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_kibb`
--
ALTER TABLE `table_kibb`
  MODIFY `kibb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_kibc`
--
ALTER TABLE `table_kibc`
  MODIFY `kibc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_kibd`
--
ALTER TABLE `table_kibd`
  MODIFY `kibd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_kibf`
--
ALTER TABLE `table_kibf`
  MODIFY `kibf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_masuk`
--
ALTER TABLE `table_masuk`
  MODIFY `masuk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_pegawai`
--
ALTER TABLE `table_pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_tdarat`
--
ALTER TABLE `table_tdarat`
  MODIFY `tdarat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_tlaut`
--
ALTER TABLE `table_tlaut`
  MODIFY `tlaut_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
