-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Nov 2018 pada 14.51
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
-- Struktur dari tabel `table_angkutanbarang1`
--

CREATE TABLE IF NOT EXISTS `table_angkutanbarang1` (
  `angkutanbarang1_id` int(11) NOT NULL,
  `angkutanbarang1_name` varchar(200) NOT NULL,
  `angkutanbarang1_input` varchar(200) NOT NULL,
  `angkutanbarang1_verifikasi` varchar(200) NOT NULL,
  `angkutanbarang1_satuan` varchar(200) NOT NULL,
  `angkutanbarang1_sumber` varchar(200) NOT NULL,
  `angkutanbarang1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanbarang2`
--

CREATE TABLE IF NOT EXISTS `table_angkutanbarang2` (
  `angkutanbarang2_id` int(11) NOT NULL,
  `angkutanbarang2_name` varchar(200) NOT NULL,
  `angkutanbarang2_input` varchar(200) NOT NULL,
  `angkutanbarang2_verifikasi` varchar(200) NOT NULL,
  `angkutanbarang2_satuan` varchar(200) NOT NULL,
  `angkutanbarang2_sumber` varchar(200) NOT NULL,
  `angkutanbarang2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanbarang3`
--

CREATE TABLE IF NOT EXISTS `table_angkutanbarang3` (
  `angkutanbarang3_id` int(11) NOT NULL,
  `angkutanbarang3_name` varchar(200) NOT NULL,
  `angkutanbarang3_input` varchar(200) NOT NULL,
  `angkutanbarang3_verifikasi` varchar(200) NOT NULL,
  `angkutanbarang3_satuan` varchar(200) NOT NULL,
  `angkutanbarang3_sumber` varchar(200) NOT NULL,
  `angkutanbarang3_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanbarang4`
--

CREATE TABLE IF NOT EXISTS `table_angkutanbarang4` (
  `angkutanbarang4_id` int(11) NOT NULL,
  `angkutanbarang4_name` varchar(200) NOT NULL,
  `angkutanbarang4_input` varchar(200) NOT NULL,
  `angkutanbarang4_verifikasi` varchar(200) NOT NULL,
  `angkutanbarang4_satuan` varchar(200) NOT NULL,
  `angkutanbarang4_sumber` varchar(200) NOT NULL,
  `angkutanbarang4_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanumum1`
--

CREATE TABLE IF NOT EXISTS `table_angkutanumum1` (
  `angkutanumum1_id` int(11) NOT NULL,
  `angkutanumum1_name` varchar(200) NOT NULL,
  `angkutanumum1_input` varchar(200) NOT NULL,
  `angkutanumum1_verifikasi` varchar(200) NOT NULL,
  `angkutanumum1_satuan` varchar(200) NOT NULL,
  `angkutanumum1_sumber` varchar(200) NOT NULL,
  `angkutanumum1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanumum2`
--

CREATE TABLE IF NOT EXISTS `table_angkutanumum2` (
  `angkutanumum2_id` int(11) NOT NULL,
  `angkutanumum2_name` varchar(200) NOT NULL,
  `angkutanumum2_input` varchar(200) NOT NULL,
  `angkutanumum2_verifikasi` varchar(200) NOT NULL,
  `angkutanumum2_satuan` varchar(200) NOT NULL,
  `angkutanumum2_sumber` varchar(200) NOT NULL,
  `angkutanumum2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanumum3`
--

CREATE TABLE IF NOT EXISTS `table_angkutanumum3` (
  `angkutanumum3_id` int(11) NOT NULL,
  `angkutanumum3_name` varchar(200) NOT NULL,
  `angkutanumum3_input` varchar(200) NOT NULL,
  `angkutanumum3_verifikasi` varchar(200) NOT NULL,
  `angkutanumum3_satuan` varchar(200) NOT NULL,
  `angkutanumum3_sumber` varchar(200) NOT NULL,
  `angkutanumum3_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanumum4`
--

CREATE TABLE IF NOT EXISTS `table_angkutanumum4` (
  `angkutanumum4_id` int(11) NOT NULL,
  `angkutanumum4_name` varchar(200) NOT NULL,
  `angkutanumum4_input` varchar(200) NOT NULL,
  `angkutanumum4_verifikasi` varchar(200) NOT NULL,
  `angkutanumum4_satuan` varchar(200) NOT NULL,
  `angkutanumum4_sumber` varchar(200) NOT NULL,
  `angkutanumum4_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanumum5`
--

CREATE TABLE IF NOT EXISTS `table_angkutanumum5` (
  `angkutanumum5_id` int(11) NOT NULL,
  `angkutanumum5_name` varchar(200) NOT NULL,
  `angkutanumum5_input` varchar(200) NOT NULL,
  `angkutanumum5_verifikasi` varchar(200) NOT NULL,
  `angkutanumum5_satuan` varchar(200) NOT NULL,
  `angkutanumum5_sumber` varchar(200) NOT NULL,
  `angkutanumum5_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanumum6`
--

CREATE TABLE IF NOT EXISTS `table_angkutanumum6` (
  `angkutanumum6_id` int(11) NOT NULL,
  `angkutanumum6_name` varchar(200) NOT NULL,
  `angkutanumum6_input` varchar(200) NOT NULL,
  `angkutanumum6_verifikasi` varchar(200) NOT NULL,
  `angkutanumum6_satuan` varchar(200) NOT NULL,
  `angkutanumum6_sumber` varchar(200) NOT NULL,
  `angkutanumum6_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanumum7`
--

CREATE TABLE IF NOT EXISTS `table_angkutanumum7` (
  `angkutanumum7_id` int(11) NOT NULL,
  `angkutanumum7_name` varchar(200) NOT NULL,
  `angkutanumum7_input` varchar(200) NOT NULL,
  `angkutanumum7_verifikasi` varchar(200) NOT NULL,
  `angkutanumum7_satuan` varchar(200) NOT NULL,
  `angkutanumum7_sumber` varchar(200) NOT NULL,
  `angkutanumum7_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_angkutanumum8`
--

CREATE TABLE IF NOT EXISTS `table_angkutanumum8` (
  `angkutanumum8_id` int(11) NOT NULL,
  `angkutanumum8_name` varchar(200) NOT NULL,
  `angkutanumum8_input` varchar(200) NOT NULL,
  `angkutanumum8_verifikasi` varchar(200) NOT NULL,
  `angkutanumum8_satuan` varchar(200) NOT NULL,
  `angkutanumum8_sumber` varchar(200) NOT NULL,
  `angkutanumum8_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_badanusaha1`
--

CREATE TABLE IF NOT EXISTS `table_badanusaha1` (
  `badanusaha1_id` int(11) NOT NULL,
  `badanusaha1_name` varchar(200) NOT NULL,
  `badanusaha1_input` varchar(200) NOT NULL,
  `badanusaha1_verifikasi` varchar(200) NOT NULL,
  `badanusaha1_satuan` varchar(200) NOT NULL,
  `badanusaha1_sumber` varchar(200) NOT NULL,
  `badanusaha1_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_badanusaha2`
--

CREATE TABLE IF NOT EXISTS `table_badanusaha2` (
  `badanusaha2_id` int(11) NOT NULL,
  `badanusaha2_name` varchar(200) NOT NULL,
  `badanusaha2_input` varchar(200) NOT NULL,
  `badanusaha2_verifikasi` varchar(200) NOT NULL,
  `badanusaha2_satuan` varchar(200) NOT NULL,
  `badanusaha2_sumber` varchar(200) NOT NULL,
  `badanusaha2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_barang1`
--

CREATE TABLE IF NOT EXISTS `table_barang1` (
  `barang1_id` int(11) NOT NULL,
  `barang1_name` varchar(200) NOT NULL,
  `barang1_input` varchar(200) NOT NULL,
  `barang1_verifikasi` varchar(200) NOT NULL,
  `barang1_satuan` varchar(200) NOT NULL,
  `barang1_sumber` varchar(200) NOT NULL,
  `barang1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_barang2`
--

CREATE TABLE IF NOT EXISTS `table_barang2` (
  `barang2_id` int(11) NOT NULL,
  `barang2_name` varchar(200) NOT NULL,
  `barang2_input` varchar(200) NOT NULL,
  `barang2_verifikasi` varchar(200) NOT NULL,
  `barang2_satuan` varchar(200) NOT NULL,
  `barang2_sumber` varchar(200) NOT NULL,
  `barang2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_dermaga`
--

CREATE TABLE IF NOT EXISTS `table_dermaga` (
  `dermaga_id` int(11) NOT NULL,
  `dermaga_name` varchar(200) NOT NULL,
  `dermaga_input` varchar(200) NOT NULL,
  `dermaga_verifikasi` varchar(200) NOT NULL,
  `dermaga_satuan` varchar(200) NOT NULL,
  `dermaga_sumber` varchar(200) NOT NULL,
  `dermaga_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_dermaga1`
--

CREATE TABLE IF NOT EXISTS `table_dermaga1` (
  `dermaga1_id` int(11) NOT NULL,
  `dermaga1_name` varchar(200) NOT NULL,
  `dermaga1_input` varchar(200) NOT NULL,
  `dermaga1_verifikasi` varchar(200) NOT NULL,
  `dermaga1_satuan` varchar(200) NOT NULL,
  `dermaga1_sumber` varchar(200) NOT NULL,
  `dermaga1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_dermaga2`
--

CREATE TABLE IF NOT EXISTS `table_dermaga2` (
  `dermaga2_id` int(11) NOT NULL,
  `dermaga2_name` varchar(200) NOT NULL,
  `dermaga2_input` varchar(200) NOT NULL,
  `dermaga2_verifikasi` varchar(200) NOT NULL,
  `dermaga2_satuan` varchar(200) NOT NULL,
  `dermaga2_sumber` varchar(200) NOT NULL,
  `dermaga2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_dermaga3`
--

CREATE TABLE IF NOT EXISTS `table_dermaga3` (
  `dermaga3_id` int(11) NOT NULL,
  `dermaga3_name` varchar(200) NOT NULL,
  `dermaga3_input` varchar(200) NOT NULL,
  `dermaga3_verifikasi` varchar(200) NOT NULL,
  `dermaga3_satuan` varchar(200) NOT NULL,
  `dermaga3_sumber` varchar(200) NOT NULL,
  `dermaga3_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_dermaga4`
--

CREATE TABLE IF NOT EXISTS `table_dermaga4` (
  `dermaga4_id` int(11) NOT NULL,
  `dermaga4_name` varchar(200) NOT NULL,
  `dermaga4_input` varchar(200) NOT NULL,
  `dermaga4_verifikasi` varchar(200) NOT NULL,
  `dermaga4_satuan` varchar(200) NOT NULL,
  `dermaga4_sumber` varchar(200) NOT NULL,
  `dermaga4_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_diklat1`
--

CREATE TABLE IF NOT EXISTS `table_diklat1` (
  `diklat1_id` int(11) NOT NULL,
  `diklat1_name` varchar(200) NOT NULL,
  `diklat1_desc` text NOT NULL,
  `diklat1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_diklat2`
--

CREATE TABLE IF NOT EXISTS `table_diklat2` (
  `diklat2_id` int(11) NOT NULL,
  `diklat2_name` varchar(200) NOT NULL,
  `diklat2_desc` text NOT NULL,
  `diklat2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_diklat3`
--

CREATE TABLE IF NOT EXISTS `table_diklat3` (
  `diklat3_id` int(11) NOT NULL,
  `diklat3_name` varchar(200) NOT NULL,
  `diklat3_desc` text NOT NULL,
  `diklat3_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_diklat4`
--

CREATE TABLE IF NOT EXISTS `table_diklat4` (
  `diklat4_id` int(11) NOT NULL,
  `diklat4_name` varchar(200) NOT NULL,
  `diklat4_desc` text NOT NULL,
  `diklat4_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_fungsional1`
--

CREATE TABLE IF NOT EXISTS `table_fungsional1` (
  `fungsional1_id` int(11) NOT NULL,
  `fungsional1_name` varchar(200) NOT NULL,
  `fungsional1_desc` text NOT NULL,
  `fungsional1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_fungsional2`
--

CREATE TABLE IF NOT EXISTS `table_fungsional2` (
  `fungsional2_id` int(11) NOT NULL,
  `fungsional2_name` varchar(200) NOT NULL,
  `fungsional2_desc` text NOT NULL,
  `fungsional2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_fungsional3`
--

CREATE TABLE IF NOT EXISTS `table_fungsional3` (
  `fungsional3_id` int(11) NOT NULL,
  `fungsional3_name` varchar(200) NOT NULL,
  `fungsional3_desc` text NOT NULL,
  `fungsional3_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Struktur dari tabel `table_jembatan1`
--

CREATE TABLE IF NOT EXISTS `table_jembatan1` (
  `jembatan1_id` int(11) NOT NULL,
  `jembatan1_name` varchar(200) NOT NULL,
  `jembatan1_input` varchar(200) NOT NULL,
  `jembatan1_verifikasi` varchar(200) NOT NULL,
  `jembatan1_satuan` varchar(200) NOT NULL,
  `jembatan1_sumber` varchar(200) NOT NULL,
  `jembatan1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_jembatan2`
--

CREATE TABLE IF NOT EXISTS `table_jembatan2` (
  `jembatan2_id` int(11) NOT NULL,
  `jembatan2_name` varchar(200) NOT NULL,
  `jembatan2_input` varchar(200) NOT NULL,
  `jembatan2_verifikasi` varchar(200) NOT NULL,
  `jembatan2_satuan` varchar(200) NOT NULL,
  `jembatan2_sumber` varchar(200) NOT NULL,
  `jembatan2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_jenis1`
--

CREATE TABLE IF NOT EXISTS `table_jenis1` (
  `jenis1_id` int(11) NOT NULL,
  `jenis1_name` varchar(200) NOT NULL,
  `jenis1_input` varchar(200) NOT NULL,
  `jenis1_verifikasi` varchar(200) NOT NULL,
  `jenis1_satuan` varchar(200) NOT NULL,
  `jenis1_sumber` varchar(200) NOT NULL,
  `jenis1_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_jenis2`
--

CREATE TABLE IF NOT EXISTS `table_jenis2` (
  `jenis2_id` int(11) NOT NULL,
  `jenis2_name` varchar(200) NOT NULL,
  `jenis2_input` varchar(200) NOT NULL,
  `jenis2_verifikasi` varchar(200) NOT NULL,
  `jenis2_satuan` varchar(200) NOT NULL,
  `jenis2_sumber` varchar(200) NOT NULL,
  `jenis2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_jenis3`
--

CREATE TABLE IF NOT EXISTS `table_jenis3` (
  `jenis3_id` int(11) NOT NULL,
  `jenis3_name` varchar(200) NOT NULL,
  `jenis3_input` varchar(200) NOT NULL,
  `jenis3_verifikasi` varchar(200) NOT NULL,
  `jenis3_satuan` varchar(200) NOT NULL,
  `jenis3_sumber` varchar(200) NOT NULL,
  `jenis3_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_jenis4`
--

CREATE TABLE IF NOT EXISTS `table_jenis4` (
  `jenis4_id` int(11) NOT NULL,
  `jenis4_name` varchar(200) NOT NULL,
  `jenis4_input` varchar(200) NOT NULL,
  `jenis4_verifikasi` varchar(200) NOT NULL,
  `jenis4_satuan` varchar(200) NOT NULL,
  `jenis4_sumber` varchar(200) NOT NULL,
  `jenis4_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_jenis5`
--

CREATE TABLE IF NOT EXISTS `table_jenis5` (
  `jenis5_id` int(11) NOT NULL,
  `jenis5_name` varchar(200) NOT NULL,
  `jenis5_input` varchar(200) NOT NULL,
  `jenis5_verifikasi` varchar(200) NOT NULL,
  `jenis5_satuan` varchar(200) NOT NULL,
  `jenis5_sumber` varchar(200) NOT NULL,
  `jenis5_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_jenis6`
--

CREATE TABLE IF NOT EXISTS `table_jenis6` (
  `jenis6_id` int(11) NOT NULL,
  `jenis6_name` varchar(200) NOT NULL,
  `jenis6_input` varchar(200) NOT NULL,
  `jenis6_verifikasi` varchar(200) NOT NULL,
  `jenis6_satuan` varchar(200) NOT NULL,
  `jenis6_sumber` varchar(200) NOT NULL,
  `jenis6_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kapalbarang1`
--

CREATE TABLE IF NOT EXISTS `table_kapalbarang1` (
  `kapalbarang1_id` int(11) NOT NULL,
  `kapalbarang1_name` varchar(200) NOT NULL,
  `kapalbarang1_input` varchar(200) NOT NULL,
  `kapalbarang1_verifikasi` varchar(200) NOT NULL,
  `kapalbarang1_satuan` varchar(200) NOT NULL,
  `kapalbarang1_sumber` varchar(200) NOT NULL,
  `kapalbarang1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kapalbarang2`
--

CREATE TABLE IF NOT EXISTS `table_kapalbarang2` (
  `kapalbarang2_id` int(11) NOT NULL,
  `kapalbarang2_name` varchar(200) NOT NULL,
  `kapalbarang2_input` varchar(200) NOT NULL,
  `kapalbarang2_verifikasi` varchar(200) NOT NULL,
  `kapalbarang2_satuan` varchar(200) NOT NULL,
  `kapalbarang2_sumber` varchar(200) NOT NULL,
  `kapalbarang2_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kapalpenumpang1`
--

CREATE TABLE IF NOT EXISTS `table_kapalpenumpang1` (
  `kapalpenumpang1_id` int(11) NOT NULL,
  `kapalpenumpang1_name` varchar(200) NOT NULL,
  `kapalpenumpang1_input` varchar(200) NOT NULL,
  `kapalpenumpang1_verifikasi` varchar(200) NOT NULL,
  `kapalpenumpang1_satuan` varchar(200) NOT NULL,
  `kapalpenumpang1_sumber` varchar(200) NOT NULL,
  `kapalpenumpang1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kapalpenumpang2`
--

CREATE TABLE IF NOT EXISTS `table_kapalpenumpang2` (
  `kapalpenumpang2_id` int(11) NOT NULL,
  `kapalpenumpang2_name` varchar(200) NOT NULL,
  `kapalpenumpang2_input` varchar(200) NOT NULL,
  `kapalpenumpang2_verifikasi` varchar(200) NOT NULL,
  `kapalpenumpang2_satuan` varchar(200) NOT NULL,
  `kapalpenumpang2_sumber` varchar(200) NOT NULL,
  `kapalpenumpang2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kendaraanpribadi1`
--

CREATE TABLE IF NOT EXISTS `table_kendaraanpribadi1` (
  `kendaraanpribadi1_id` int(11) NOT NULL,
  `kendaraanpribadi1_name` varchar(200) NOT NULL,
  `kendaraanpribadi1_input` varchar(200) NOT NULL,
  `kendaraanpribadi1_verifikasi` varchar(200) NOT NULL,
  `kendaraanpribadi1_satuan` varchar(200) NOT NULL,
  `kendaraanpribadi1_sumber` varchar(200) NOT NULL,
  `kendaraanpribadi1_file` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_kendaraanpribadi1`
--

INSERT INTO `table_kendaraanpribadi1` (`kendaraanpribadi1_id`, `kendaraanpribadi1_name`, `kendaraanpribadi1_input`, `kendaraanpribadi1_verifikasi`, `kendaraanpribadi1_satuan`, `kendaraanpribadi1_sumber`, `kendaraanpribadi1_file`) VALUES
(3, 'iyuiy', 'iyui', 'Ya', 'Unit', 'yiujyiy', 'file_1542608635.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kendaraanpribadi2`
--

CREATE TABLE IF NOT EXISTS `table_kendaraanpribadi2` (
  `kendaraanpribadi2_id` int(11) NOT NULL,
  `kendaraanpribadi2_name` varchar(200) NOT NULL,
  `kendaraanpribadi2_input` varchar(200) NOT NULL,
  `kendaraanpribadi2_verifikasi` varchar(200) NOT NULL,
  `kendaraanpribadi2_satuan` varchar(200) NOT NULL,
  `kendaraanpribadi2_sumber` varchar(200) NOT NULL,
  `kendaraanpribadi2_fie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi1`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi1` (
  `kompetensi1_id` int(11) NOT NULL,
  `kompetensi1_name` varchar(200) NOT NULL,
  `kompetensi1_desc` text NOT NULL,
  `kompetensi1_file` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_kompetensi1`
--

INSERT INTO `table_kompetensi1` (`kompetensi1_id`, `kompetensi1_name`, `kompetensi1_desc`, `kompetensi1_file`) VALUES
(1, 'iksan', 'iksan', 'file_1542729973.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi2`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi2` (
  `kompetensi2_id` int(11) NOT NULL,
  `kompetensi2_name` varchar(200) NOT NULL,
  `kompetensi2_desc` text NOT NULL,
  `kompetensi2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi3`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi3` (
  `kompetensi3_id` int(11) NOT NULL,
  `kompetensi3_name` varchar(200) NOT NULL,
  `kompetensi3_desc` text NOT NULL,
  `kompetensi4_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi4`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi4` (
  `kompetensi4_id` int(11) NOT NULL,
  `kompetensi4_name` varchar(200) NOT NULL,
  `kompetensi4_desc` text NOT NULL,
  `kompetensi4_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi5`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi5` (
  `kompetensi5_id` int(11) NOT NULL,
  `kompetensi5_name` varchar(200) NOT NULL,
  `kompetensi5_desc` text NOT NULL,
  `kompetensi5_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi6`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi6` (
  `kompetensi6_id` int(11) NOT NULL,
  `kompetensi6_name` varchar(200) NOT NULL,
  `kompetensi6_desc` text NOT NULL,
  `kompetensi6_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi7`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi7` (
  `kompetensi7_id` int(11) NOT NULL,
  `kompetensi7_name` varchar(200) NOT NULL,
  `kompetensi7_desc` text NOT NULL,
  `kompetensi7_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi8`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi8` (
  `kompetensi8_id` int(11) NOT NULL,
  `kompetensi8_name` varchar(200) NOT NULL,
  `kompetensi8_desc` text NOT NULL,
  `kompetensi8_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi9`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi9` (
  `kompetensi9_id` int(11) NOT NULL,
  `kompetensi9_name` varchar(200) NOT NULL,
  `kompetensi9_desc` text NOT NULL,
  `kompetensi9_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi10`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi10` (
  `kompetensi10_id` int(11) NOT NULL,
  `kompetensi10_name` varchar(200) NOT NULL,
  `kompetensi10_desc` text NOT NULL,
  `kompetensi10_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi11`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi11` (
  `kompetensi11_id` int(11) NOT NULL,
  `kompetensi11_name` varchar(200) NOT NULL,
  `kompetensi11_desc` text NOT NULL,
  `kompetensi11_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi12`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi12` (
  `kompetensi12_id` int(11) NOT NULL,
  `kompetensi12_name` varchar(200) NOT NULL,
  `kompetensi12_desc` text NOT NULL,
  `kompetensi12_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi13`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi13` (
  `kompetensi13_id` int(11) NOT NULL,
  `kompetensi13_name` varchar(200) NOT NULL,
  `kompetensi13_desc` text NOT NULL,
  `kompetensi13_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kompetensi14`
--

CREATE TABLE IF NOT EXISTS `table_kompetensi14` (
  `kompetensi14_id` int(11) NOT NULL,
  `kompetensi14_name` varchar(200) NOT NULL,
  `kompetensi14_desc` text NOT NULL,
  `kompetensi14_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_modaasdp1`
--

CREATE TABLE IF NOT EXISTS `table_modaasdp1` (
  `modaasdp1_id` int(11) NOT NULL,
  `modaasdp1_name` varchar(200) NOT NULL,
  `modaasdp1_input` varchar(200) NOT NULL,
  `modaasdp1_verifikasi` varchar(200) NOT NULL,
  `modaasdp1_satuan` varchar(200) NOT NULL,
  `modaasdp1_sumber` varchar(200) NOT NULL,
  `modaasdp1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_modaasdp2`
--

CREATE TABLE IF NOT EXISTS `table_modaasdp2` (
  `modaasdp2_id` int(11) NOT NULL,
  `modaasdp2_name` varchar(200) NOT NULL,
  `modaasdp2_input` varchar(200) NOT NULL,
  `modaasdp2_verifikasi` varchar(200) NOT NULL,
  `modaasdp2_satuan` varchar(200) NOT NULL,
  `modaasdp2_sumber` varchar(200) NOT NULL,
  `modaasdp2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_modaasdp3`
--

CREATE TABLE IF NOT EXISTS `table_modaasdp3` (
  `modaasdp3_id` int(11) NOT NULL,
  `modaasdp3_name` varchar(200) NOT NULL,
  `modaasdp3_input` varchar(200) NOT NULL,
  `modaasdp3_verifikasi` varchar(200) NOT NULL,
  `modaasdp3_satuan` varchar(200) NOT NULL,
  `modaasdp3_sumber` varchar(200) NOT NULL,
  `modaasdp3_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_modaasdp4`
--

CREATE TABLE IF NOT EXISTS `table_modaasdp4` (
  `modaasdp4_id` int(11) NOT NULL,
  `modaasdp4_name` varchar(200) NOT NULL,
  `modaasdp4_input` varchar(200) NOT NULL,
  `modaasdp4_verifikasi` varchar(200) NOT NULL,
  `modaasdp4_satuan` varchar(200) NOT NULL,
  `modaasdp4_sumber` varchar(200) NOT NULL,
  `modaasdp4_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_modaasdp5`
--

CREATE TABLE IF NOT EXISTS `table_modaasdp5` (
  `modaasdp5_id` int(11) NOT NULL,
  `modaasdp5_name` varchar(200) NOT NULL,
  `modaasdp5_input` varchar(200) NOT NULL,
  `modaasdp5_verifikasi` varchar(200) NOT NULL,
  `modaasdp5_satuan` varchar(200) NOT NULL,
  `modaasdp5_sumber` varchar(200) NOT NULL,
  `modaasdp5_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pengujiankir`
--

CREATE TABLE IF NOT EXISTS `table_pengujiankir` (
  `pengujiankir_id` int(11) NOT NULL,
  `pengujiankir_name` varchar(200) NOT NULL,
  `pengujiankir_input` varchar(200) NOT NULL,
  `pengujiankir_verifikasi` varchar(200) NOT NULL,
  `pengujiankir_satuan` varchar(200) NOT NULL,
  `pengujiankir_sumber` varchar(200) NOT NULL,
  `pengujiankir_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pengumpan1`
--

CREATE TABLE IF NOT EXISTS `table_pengumpan1` (
  `pengumpan1_id` int(11) NOT NULL,
  `pengumpan1_name` varchar(200) NOT NULL,
  `pengumpan1_input` varchar(200) NOT NULL,
  `pengumpan1_verifikasi` varchar(200) NOT NULL,
  `pengumpan1_satuan` varchar(200) NOT NULL,
  `pengumpan1_sumber` varchar(200) NOT NULL,
  `pengumpan1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pengumpan2`
--

CREATE TABLE IF NOT EXISTS `table_pengumpan2` (
  `pengumpan2_id` int(11) NOT NULL,
  `pengumpan2_name` varchar(200) NOT NULL,
  `pengumpan2_input` varchar(200) NOT NULL,
  `pengumpan2_verifikasi` varchar(200) NOT NULL,
  `pengumpan2_satuan` varchar(200) NOT NULL,
  `pengumpan2_sumber` varchar(200) NOT NULL,
  `pengumpan2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pengumpan3`
--

CREATE TABLE IF NOT EXISTS `table_pengumpan3` (
  `pengumpan3_id` int(11) NOT NULL,
  `pengumpan3_name` varchar(200) NOT NULL,
  `pengumpan3_input` varchar(200) NOT NULL,
  `pengumpan3_verifikasi` varchar(200) NOT NULL,
  `pengumpan3_satuan` varchar(200) NOT NULL,
  `pengumpan3_sumber` varchar(200) NOT NULL,
  `pengumpan3_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pengumpan4`
--

CREATE TABLE IF NOT EXISTS `table_pengumpan4` (
  `pengumpan4_id` int(11) NOT NULL,
  `pengumpan4_name` varchar(200) NOT NULL,
  `pengumpan4_input` varchar(200) NOT NULL,
  `pengumpan4_verifikasi` varchar(200) NOT NULL,
  `pengumpan4_satuan` varchar(200) NOT NULL,
  `pengumpan4_sumber` varchar(200) NOT NULL,
  `pengumpan4_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_penumpang1`
--

CREATE TABLE IF NOT EXISTS `table_penumpang1` (
  `penumpang1_id` int(11) NOT NULL,
  `penumpang1_name` varchar(200) NOT NULL,
  `penumpang1_input` varchar(200) NOT NULL,
  `penumpang1_verifikasi` varchar(200) NOT NULL,
  `penumpang1_satuan` varchar(200) NOT NULL,
  `penumpang1_sumber` varchar(200) NOT NULL,
  `penumpang1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_penumpang2`
--

CREATE TABLE IF NOT EXISTS `table_penumpang2` (
  `penumpang2_id` int(11) NOT NULL,
  `penumpang2_name` int(11) NOT NULL,
  `penumpang2_input` int(11) NOT NULL,
  `penumpang2_verifikasi` int(11) NOT NULL,
  `penumpang2_satuan` int(11) NOT NULL,
  `penumpang2_sumber` int(11) NOT NULL,
  `penumpang2_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_perintis1`
--

CREATE TABLE IF NOT EXISTS `table_perintis1` (
  `perintis1_id` int(11) NOT NULL,
  `perintis1_name` varchar(200) NOT NULL,
  `perintis1_input` varchar(200) NOT NULL,
  `perintis1_verifikasi` varchar(200) NOT NULL,
  `perintis1_satuan` varchar(200) NOT NULL,
  `perintis1_sumber` varchar(200) NOT NULL,
  `perintis1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_perintis2`
--

CREATE TABLE IF NOT EXISTS `table_perintis2` (
  `perintis2_id` int(11) NOT NULL,
  `perintis2_name` varchar(200) NOT NULL,
  `perintis2_input` varchar(200) NOT NULL,
  `perintis2_verifikasi` varchar(200) NOT NULL,
  `perintis2_satuan` varchar(200) NOT NULL,
  `perintis2_sumber` varchar(200) NOT NULL,
  `perintis2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_perusahaanasdp1`
--

CREATE TABLE IF NOT EXISTS `table_perusahaanasdp1` (
  `perusahaanasdp1_id` int(11) NOT NULL,
  `perusahaanasdp1_name` varchar(200) NOT NULL,
  `perusahaanasdp1_input` varchar(200) NOT NULL,
  `perusahaanasdp1_verifikasi` varchar(200) NOT NULL,
  `perusahaanasdp1_satuan` varchar(200) NOT NULL,
  `perusahaanasdp1_sumber` varchar(200) NOT NULL,
  `perusahaanasdp1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_perusahaanasdp2`
--

CREATE TABLE IF NOT EXISTS `table_perusahaanasdp2` (
  `perusahaanasdp2_id` int(11) NOT NULL,
  `perusahaanasdp2_name` varchar(200) NOT NULL,
  `perusahaanasdp2_input` varchar(200) NOT NULL,
  `perusahaanasdp2_verifikasi` varchar(200) NOT NULL,
  `perusahaanasdp2_satuan` varchar(200) NOT NULL,
  `perusahaanasdp2_sumber` varchar(200) NOT NULL,
  `perusahaanasdp2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_perusahaanlaut1`
--

CREATE TABLE IF NOT EXISTS `table_perusahaanlaut1` (
  `perusahaanlaut1_id` int(11) NOT NULL,
  `perusahaanlaut1_name` varchar(200) NOT NULL,
  `perusahaanlaut1_input` varchar(200) NOT NULL,
  `perusahaanlaut1_verifikasi` varchar(200) NOT NULL,
  `perusahaanlaut1_satuan` varchar(200) NOT NULL,
  `perusahaanlaut1_sumber` varchar(200) NOT NULL,
  `perusahaanlaut1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_perusahaanlaut2`
--

CREATE TABLE IF NOT EXISTS `table_perusahaanlaut2` (
  `perusahaanlaut2_id` int(11) NOT NULL,
  `perusahaanlaut2_name` varchar(200) NOT NULL,
  `perusahaanlaut2_input` varchar(200) NOT NULL,
  `perusahaanlaut2_ verifikasi` varchar(200) NOT NULL,
  `perusahaanlaut2_satuan` varchar(200) NOT NULL,
  `perusahaanlaut2_sumber` varchar(200) NOT NULL,
  `perusahaanlaut2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_perusahaanumum1`
--

CREATE TABLE IF NOT EXISTS `table_perusahaanumum1` (
  `perusahaanumum1_id` int(11) NOT NULL,
  `perusahaanumum1_name` varchar(200) NOT NULL,
  `perusahaanumum1_input` varchar(200) NOT NULL,
  `perusahaanumum1_verifikasi` varchar(200) NOT NULL,
  `perusahaanumum1_satuan` varchar(200) NOT NULL,
  `perusahaanumum1_sumber` varchar(200) NOT NULL,
  `perusahaanumum1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_perusahaanumum2`
--

CREATE TABLE IF NOT EXISTS `table_perusahaanumum2` (
  `perusahaanumum2_id` int(11) NOT NULL,
  `perusahaanumum2_name` varchar(200) NOT NULL,
  `perusahaanumum2_input` varchar(200) NOT NULL,
  `perusahaanumum2_verifikasi` varchar(200) NOT NULL,
  `perusahaanumum2_satuan` varchar(200) NOT NULL,
  `perusahaanumum2_sumber` varchar(200) NOT NULL,
  `perusahaanumum2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_petikemas1`
--

CREATE TABLE IF NOT EXISTS `table_petikemas1` (
  `petikemas1_id` int(11) NOT NULL,
  `petikemas1_name` varchar(200) NOT NULL,
  `petikemas1_input` varchar(200) NOT NULL,
  `petikemas1_verifikasi` varchar(200) NOT NULL,
  `petikemas1_satuan` varchar(200) NOT NULL,
  `petikemas1_sumber` varchar(200) NOT NULL,
  `petikemas1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_petikemas2`
--

CREATE TABLE IF NOT EXISTS `table_petikemas2` (
  `petikemas2_id` int(11) NOT NULL,
  `petikemas2_name` varchar(200) NOT NULL,
  `petikemas2_input` varchar(200) NOT NULL,
  `petikemas2_verifikasi` varchar(200) NOT NULL,
  `petikemas2_satuan` varchar(200) NOT NULL,
  `petikemas2_sumber` varchar(200) NOT NULL,
  `petikemas2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_terminal1`
--

CREATE TABLE IF NOT EXISTS `table_terminal1` (
  `terminal1_id` int(11) NOT NULL,
  `terminal1_name` varchar(200) NOT NULL,
  `terminal1_input` varchar(200) NOT NULL,
  `terminal1_verifikasi` varchar(200) NOT NULL,
  `terminal1_satuan` varchar(200) NOT NULL,
  `terminal1_sumber` varchar(200) NOT NULL,
  `terminal1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_terminal2`
--

CREATE TABLE IF NOT EXISTS `table_terminal2` (
  `terminal2_id` int(11) NOT NULL,
  `terminal2_name` varchar(200) NOT NULL,
  `terminal2_input` varchar(200) NOT NULL,
  `terminal2_verifikasi` varchar(200) NOT NULL,
  `terminal2_satuan` varchar(200) NOT NULL,
  `terminal2_sumber` varchar(200) NOT NULL,
  `terminal2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_terminal3`
--

CREATE TABLE IF NOT EXISTS `table_terminal3` (
  `terminal3_id` int(11) NOT NULL,
  `terminal3_name` varchar(200) NOT NULL,
  `terminal3_input` varchar(200) NOT NULL,
  `terminal3_verifikasi` varchar(200) NOT NULL,
  `terminal3_satuan` varchar(200) NOT NULL,
  `terminal3_sumber` varchar(200) NOT NULL,
  `terminal3_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_terminalpetikemas`
--

CREATE TABLE IF NOT EXISTS `table_terminalpetikemas` (
  `terminalpetikemas_id` int(11) NOT NULL,
  `terminalpetikemas_name` varchar(200) NOT NULL,
  `terminalpetikemas_input` varchar(200) NOT NULL,
  `terminalpetikemas_verifikasi` varchar(200) NOT NULL,
  `terminalpetikemas_satuan` varchar(200) NOT NULL,
  `terminalpetikemas_sumber` varchar(200) NOT NULL,
  `terminalpetikemas_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_tipea1`
--

CREATE TABLE IF NOT EXISTS `table_tipea1` (
  `tipea1_id` int(11) NOT NULL,
  `tipea1_name` varchar(200) NOT NULL,
  `tipea1_input` varchar(200) NOT NULL,
  `tipea1_verifikasi` varchar(200) NOT NULL,
  `tipea1_satuan` varchar(200) NOT NULL,
  `tipea1_sumber` varchar(200) NOT NULL,
  `tipea1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_tipea2`
--

CREATE TABLE IF NOT EXISTS `table_tipea2` (
  `tipea2_id` int(11) NOT NULL,
  `tipea2_name` varchar(200) NOT NULL,
  `tipea2_input` varchar(200) NOT NULL,
  `tipea2_verifikasi` varchar(200) NOT NULL,
  `tipea2_satuan` varchar(200) NOT NULL,
  `tipea2_sumber` varchar(200) NOT NULL,
  `tipea2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_tipeb1`
--

CREATE TABLE IF NOT EXISTS `table_tipeb1` (
  `tipeb1_id` int(11) NOT NULL,
  `tipeb1_name` varchar(200) NOT NULL,
  `tipeb1_input` varchar(200) NOT NULL,
  `tipeb1_verifikasi` varchar(200) NOT NULL,
  `tipeb1_satuan` varchar(200) NOT NULL,
  `tipeb1_sumber` varchar(200) NOT NULL,
  `tipeb1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_tipeb2`
--

CREATE TABLE IF NOT EXISTS `table_tipeb2` (
  `tipeb2_id` int(11) NOT NULL,
  `tipeb2_name` varchar(200) NOT NULL,
  `tipeb2_input` varchar(200) NOT NULL,
  `tipeb2_verifikasi` varchar(200) NOT NULL,
  `tipeb2_satuan` varchar(200) NOT NULL,
  `tipeb2_sumber` varchar(200) NOT NULL,
  `tipeb2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_tipec1`
--

CREATE TABLE IF NOT EXISTS `table_tipec1` (
  `tipec1_id` int(11) NOT NULL,
  `tipec1_name` varchar(200) NOT NULL,
  `tipec1_input` varchar(200) NOT NULL,
  `tipec1_verifikasi` varchar(200) NOT NULL,
  `tipec1_satuan` varchar(200) NOT NULL,
  `tipec1_sumber` varchar(200) NOT NULL,
  `tipec1_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_tipec2`
--

CREATE TABLE IF NOT EXISTS `table_tipec2` (
  `tipec2_id` int(11) NOT NULL,
  `tipec2_name` varchar(200) NOT NULL,
  `tipec2_input` varchar(200) NOT NULL,
  `tipec2_verifikasi` varchar(200) NOT NULL,
  `tipec2_satuan` varchar(200) NOT NULL,
  `tipec2_sumber` varchar(200) NOT NULL,
  `tipec2_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `table_angkutanbarang1`
--
ALTER TABLE `table_angkutanbarang1`
  ADD PRIMARY KEY (`angkutanbarang1_id`);

--
-- Indexes for table `table_angkutanbarang2`
--
ALTER TABLE `table_angkutanbarang2`
  ADD PRIMARY KEY (`angkutanbarang2_id`);

--
-- Indexes for table `table_angkutanbarang3`
--
ALTER TABLE `table_angkutanbarang3`
  ADD PRIMARY KEY (`angkutanbarang3_id`);

--
-- Indexes for table `table_angkutanbarang4`
--
ALTER TABLE `table_angkutanbarang4`
  ADD PRIMARY KEY (`angkutanbarang4_id`);

--
-- Indexes for table `table_angkutanumum1`
--
ALTER TABLE `table_angkutanumum1`
  ADD PRIMARY KEY (`angkutanumum1_id`);

--
-- Indexes for table `table_angkutanumum2`
--
ALTER TABLE `table_angkutanumum2`
  ADD PRIMARY KEY (`angkutanumum2_id`);

--
-- Indexes for table `table_angkutanumum3`
--
ALTER TABLE `table_angkutanumum3`
  ADD PRIMARY KEY (`angkutanumum3_id`);

--
-- Indexes for table `table_angkutanumum4`
--
ALTER TABLE `table_angkutanumum4`
  ADD PRIMARY KEY (`angkutanumum4_id`);

--
-- Indexes for table `table_angkutanumum5`
--
ALTER TABLE `table_angkutanumum5`
  ADD PRIMARY KEY (`angkutanumum5_id`);

--
-- Indexes for table `table_angkutanumum6`
--
ALTER TABLE `table_angkutanumum6`
  ADD PRIMARY KEY (`angkutanumum6_id`);

--
-- Indexes for table `table_angkutanumum7`
--
ALTER TABLE `table_angkutanumum7`
  ADD PRIMARY KEY (`angkutanumum7_id`);

--
-- Indexes for table `table_angkutanumum8`
--
ALTER TABLE `table_angkutanumum8`
  ADD PRIMARY KEY (`angkutanumum8_id`);

--
-- Indexes for table `table_badanusaha1`
--
ALTER TABLE `table_badanusaha1`
  ADD PRIMARY KEY (`badanusaha1_id`);

--
-- Indexes for table `table_badanusaha2`
--
ALTER TABLE `table_badanusaha2`
  ADD PRIMARY KEY (`badanusaha2_id`);

--
-- Indexes for table `table_barang1`
--
ALTER TABLE `table_barang1`
  ADD PRIMARY KEY (`barang1_id`);

--
-- Indexes for table `table_barang2`
--
ALTER TABLE `table_barang2`
  ADD PRIMARY KEY (`barang2_id`);

--
-- Indexes for table `table_dermaga`
--
ALTER TABLE `table_dermaga`
  ADD PRIMARY KEY (`dermaga_id`);

--
-- Indexes for table `table_dermaga1`
--
ALTER TABLE `table_dermaga1`
  ADD PRIMARY KEY (`dermaga1_id`);

--
-- Indexes for table `table_dermaga2`
--
ALTER TABLE `table_dermaga2`
  ADD PRIMARY KEY (`dermaga2_id`);

--
-- Indexes for table `table_dermaga3`
--
ALTER TABLE `table_dermaga3`
  ADD PRIMARY KEY (`dermaga3_id`);

--
-- Indexes for table `table_dermaga4`
--
ALTER TABLE `table_dermaga4`
  ADD PRIMARY KEY (`dermaga4_id`);

--
-- Indexes for table `table_diklat1`
--
ALTER TABLE `table_diklat1`
  ADD PRIMARY KEY (`diklat1_id`);

--
-- Indexes for table `table_diklat2`
--
ALTER TABLE `table_diklat2`
  ADD PRIMARY KEY (`diklat2_id`);

--
-- Indexes for table `table_diklat3`
--
ALTER TABLE `table_diklat3`
  ADD PRIMARY KEY (`diklat3_id`);

--
-- Indexes for table `table_diklat4`
--
ALTER TABLE `table_diklat4`
  ADD PRIMARY KEY (`diklat4_id`);

--
-- Indexes for table `table_fungsional1`
--
ALTER TABLE `table_fungsional1`
  ADD PRIMARY KEY (`fungsional1_id`);

--
-- Indexes for table `table_fungsional2`
--
ALTER TABLE `table_fungsional2`
  ADD PRIMARY KEY (`fungsional2_id`);

--
-- Indexes for table `table_fungsional3`
--
ALTER TABLE `table_fungsional3`
  ADD PRIMARY KEY (`fungsional3_id`);

--
-- Indexes for table `table_groups`
--
ALTER TABLE `table_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `table_jembatan1`
--
ALTER TABLE `table_jembatan1`
  ADD PRIMARY KEY (`jembatan1_id`);

--
-- Indexes for table `table_jembatan2`
--
ALTER TABLE `table_jembatan2`
  ADD PRIMARY KEY (`jembatan2_id`);

--
-- Indexes for table `table_jenis1`
--
ALTER TABLE `table_jenis1`
  ADD PRIMARY KEY (`jenis1_id`);

--
-- Indexes for table `table_jenis2`
--
ALTER TABLE `table_jenis2`
  ADD PRIMARY KEY (`jenis2_id`);

--
-- Indexes for table `table_jenis3`
--
ALTER TABLE `table_jenis3`
  ADD PRIMARY KEY (`jenis3_id`);

--
-- Indexes for table `table_jenis4`
--
ALTER TABLE `table_jenis4`
  ADD PRIMARY KEY (`jenis4_id`);

--
-- Indexes for table `table_jenis5`
--
ALTER TABLE `table_jenis5`
  ADD PRIMARY KEY (`jenis5_id`);

--
-- Indexes for table `table_jenis6`
--
ALTER TABLE `table_jenis6`
  ADD PRIMARY KEY (`jenis6_id`);

--
-- Indexes for table `table_kapalbarang1`
--
ALTER TABLE `table_kapalbarang1`
  ADD PRIMARY KEY (`kapalbarang1_id`);

--
-- Indexes for table `table_kapalbarang2`
--
ALTER TABLE `table_kapalbarang2`
  ADD PRIMARY KEY (`kapalbarang2_id`);

--
-- Indexes for table `table_kapalpenumpang1`
--
ALTER TABLE `table_kapalpenumpang1`
  ADD PRIMARY KEY (`kapalpenumpang1_id`);

--
-- Indexes for table `table_kapalpenumpang2`
--
ALTER TABLE `table_kapalpenumpang2`
  ADD PRIMARY KEY (`kapalpenumpang2_id`);

--
-- Indexes for table `table_keluar`
--
ALTER TABLE `table_keluar`
  ADD PRIMARY KEY (`keluar_id`);

--
-- Indexes for table `table_kendaraanpribadi1`
--
ALTER TABLE `table_kendaraanpribadi1`
  ADD PRIMARY KEY (`kendaraanpribadi1_id`);

--
-- Indexes for table `table_kendaraanpribadi2`
--
ALTER TABLE `table_kendaraanpribadi2`
  ADD PRIMARY KEY (`kendaraanpribadi2_id`);

--
-- Indexes for table `table_kompetensi1`
--
ALTER TABLE `table_kompetensi1`
  ADD PRIMARY KEY (`kompetensi1_id`);

--
-- Indexes for table `table_kompetensi2`
--
ALTER TABLE `table_kompetensi2`
  ADD PRIMARY KEY (`kompetensi2_id`);

--
-- Indexes for table `table_kompetensi3`
--
ALTER TABLE `table_kompetensi3`
  ADD PRIMARY KEY (`kompetensi3_id`);

--
-- Indexes for table `table_kompetensi4`
--
ALTER TABLE `table_kompetensi4`
  ADD PRIMARY KEY (`kompetensi4_id`);

--
-- Indexes for table `table_kompetensi5`
--
ALTER TABLE `table_kompetensi5`
  ADD PRIMARY KEY (`kompetensi5_id`);

--
-- Indexes for table `table_kompetensi6`
--
ALTER TABLE `table_kompetensi6`
  ADD PRIMARY KEY (`kompetensi6_id`);

--
-- Indexes for table `table_kompetensi7`
--
ALTER TABLE `table_kompetensi7`
  ADD PRIMARY KEY (`kompetensi7_id`);

--
-- Indexes for table `table_kompetensi8`
--
ALTER TABLE `table_kompetensi8`
  ADD PRIMARY KEY (`kompetensi8_id`);

--
-- Indexes for table `table_kompetensi9`
--
ALTER TABLE `table_kompetensi9`
  ADD PRIMARY KEY (`kompetensi9_id`);

--
-- Indexes for table `table_kompetensi10`
--
ALTER TABLE `table_kompetensi10`
  ADD PRIMARY KEY (`kompetensi10_id`);

--
-- Indexes for table `table_kompetensi11`
--
ALTER TABLE `table_kompetensi11`
  ADD PRIMARY KEY (`kompetensi11_id`);

--
-- Indexes for table `table_kompetensi12`
--
ALTER TABLE `table_kompetensi12`
  ADD PRIMARY KEY (`kompetensi12_id`);

--
-- Indexes for table `table_kompetensi13`
--
ALTER TABLE `table_kompetensi13`
  ADD PRIMARY KEY (`kompetensi13_id`);

--
-- Indexes for table `table_kompetensi14`
--
ALTER TABLE `table_kompetensi14`
  ADD PRIMARY KEY (`kompetensi14_id`);

--
-- Indexes for table `table_masuk`
--
ALTER TABLE `table_masuk`
  ADD PRIMARY KEY (`masuk_id`);

--
-- Indexes for table `table_modaasdp1`
--
ALTER TABLE `table_modaasdp1`
  ADD PRIMARY KEY (`modaasdp1_id`);

--
-- Indexes for table `table_modaasdp2`
--
ALTER TABLE `table_modaasdp2`
  ADD PRIMARY KEY (`modaasdp2_id`);

--
-- Indexes for table `table_modaasdp3`
--
ALTER TABLE `table_modaasdp3`
  ADD PRIMARY KEY (`modaasdp3_id`);

--
-- Indexes for table `table_modaasdp4`
--
ALTER TABLE `table_modaasdp4`
  ADD PRIMARY KEY (`modaasdp4_id`);

--
-- Indexes for table `table_modaasdp5`
--
ALTER TABLE `table_modaasdp5`
  ADD PRIMARY KEY (`modaasdp5_id`);

--
-- Indexes for table `table_pengujiankir`
--
ALTER TABLE `table_pengujiankir`
  ADD PRIMARY KEY (`pengujiankir_id`);

--
-- Indexes for table `table_pengumpan1`
--
ALTER TABLE `table_pengumpan1`
  ADD PRIMARY KEY (`pengumpan1_id`);

--
-- Indexes for table `table_pengumpan2`
--
ALTER TABLE `table_pengumpan2`
  ADD PRIMARY KEY (`pengumpan2_id`);

--
-- Indexes for table `table_pengumpan3`
--
ALTER TABLE `table_pengumpan3`
  ADD PRIMARY KEY (`pengumpan3_id`);

--
-- Indexes for table `table_pengumpan4`
--
ALTER TABLE `table_pengumpan4`
  ADD PRIMARY KEY (`pengumpan4_id`);

--
-- Indexes for table `table_penumpang1`
--
ALTER TABLE `table_penumpang1`
  ADD PRIMARY KEY (`penumpang1_id`);

--
-- Indexes for table `table_perintis1`
--
ALTER TABLE `table_perintis1`
  ADD PRIMARY KEY (`perintis1_id`);

--
-- Indexes for table `table_perintis2`
--
ALTER TABLE `table_perintis2`
  ADD PRIMARY KEY (`perintis2_id`);

--
-- Indexes for table `table_perusahaanasdp1`
--
ALTER TABLE `table_perusahaanasdp1`
  ADD PRIMARY KEY (`perusahaanasdp1_id`);

--
-- Indexes for table `table_perusahaanasdp2`
--
ALTER TABLE `table_perusahaanasdp2`
  ADD PRIMARY KEY (`perusahaanasdp2_id`);

--
-- Indexes for table `table_perusahaanlaut1`
--
ALTER TABLE `table_perusahaanlaut1`
  ADD PRIMARY KEY (`perusahaanlaut1_id`);

--
-- Indexes for table `table_perusahaanlaut2`
--
ALTER TABLE `table_perusahaanlaut2`
  ADD PRIMARY KEY (`perusahaanlaut2_id`);

--
-- Indexes for table `table_perusahaanumum1`
--
ALTER TABLE `table_perusahaanumum1`
  ADD PRIMARY KEY (`perusahaanumum1_id`);

--
-- Indexes for table `table_perusahaanumum2`
--
ALTER TABLE `table_perusahaanumum2`
  ADD PRIMARY KEY (`perusahaanumum2_id`);

--
-- Indexes for table `table_petikemas1`
--
ALTER TABLE `table_petikemas1`
  ADD PRIMARY KEY (`petikemas1_id`);

--
-- Indexes for table `table_petikemas2`
--
ALTER TABLE `table_petikemas2`
  ADD PRIMARY KEY (`petikemas2_id`);

--
-- Indexes for table `table_terminal1`
--
ALTER TABLE `table_terminal1`
  ADD PRIMARY KEY (`terminal1_id`);

--
-- Indexes for table `table_terminal2`
--
ALTER TABLE `table_terminal2`
  ADD PRIMARY KEY (`terminal2_id`);

--
-- Indexes for table `table_terminal3`
--
ALTER TABLE `table_terminal3`
  ADD PRIMARY KEY (`terminal3_id`);

--
-- Indexes for table `table_terminalpetikemas`
--
ALTER TABLE `table_terminalpetikemas`
  ADD PRIMARY KEY (`terminalpetikemas_id`);

--
-- Indexes for table `table_tipea1`
--
ALTER TABLE `table_tipea1`
  ADD PRIMARY KEY (`tipea1_id`);

--
-- Indexes for table `table_tipea2`
--
ALTER TABLE `table_tipea2`
  ADD PRIMARY KEY (`tipea2_id`);

--
-- Indexes for table `table_tipeb1`
--
ALTER TABLE `table_tipeb1`
  ADD PRIMARY KEY (`tipeb1_id`);

--
-- Indexes for table `table_tipeb2`
--
ALTER TABLE `table_tipeb2`
  ADD PRIMARY KEY (`tipeb2_id`);

--
-- Indexes for table `table_tipec1`
--
ALTER TABLE `table_tipec1`
  ADD PRIMARY KEY (`tipec1_id`);

--
-- Indexes for table `table_tipec2`
--
ALTER TABLE `table_tipec2`
  ADD PRIMARY KEY (`tipec2_id`);

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
-- AUTO_INCREMENT for table `table_angkutanbarang1`
--
ALTER TABLE `table_angkutanbarang1`
  MODIFY `angkutanbarang1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanbarang2`
--
ALTER TABLE `table_angkutanbarang2`
  MODIFY `angkutanbarang2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanbarang3`
--
ALTER TABLE `table_angkutanbarang3`
  MODIFY `angkutanbarang3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanbarang4`
--
ALTER TABLE `table_angkutanbarang4`
  MODIFY `angkutanbarang4_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanumum1`
--
ALTER TABLE `table_angkutanumum1`
  MODIFY `angkutanumum1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanumum2`
--
ALTER TABLE `table_angkutanumum2`
  MODIFY `angkutanumum2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanumum3`
--
ALTER TABLE `table_angkutanumum3`
  MODIFY `angkutanumum3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanumum4`
--
ALTER TABLE `table_angkutanumum4`
  MODIFY `angkutanumum4_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanumum5`
--
ALTER TABLE `table_angkutanumum5`
  MODIFY `angkutanumum5_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanumum6`
--
ALTER TABLE `table_angkutanumum6`
  MODIFY `angkutanumum6_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanumum7`
--
ALTER TABLE `table_angkutanumum7`
  MODIFY `angkutanumum7_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_angkutanumum8`
--
ALTER TABLE `table_angkutanumum8`
  MODIFY `angkutanumum8_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_badanusaha1`
--
ALTER TABLE `table_badanusaha1`
  MODIFY `badanusaha1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_badanusaha2`
--
ALTER TABLE `table_badanusaha2`
  MODIFY `badanusaha2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_barang1`
--
ALTER TABLE `table_barang1`
  MODIFY `barang1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_barang2`
--
ALTER TABLE `table_barang2`
  MODIFY `barang2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_dermaga`
--
ALTER TABLE `table_dermaga`
  MODIFY `dermaga_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_dermaga1`
--
ALTER TABLE `table_dermaga1`
  MODIFY `dermaga1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_dermaga2`
--
ALTER TABLE `table_dermaga2`
  MODIFY `dermaga2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_dermaga3`
--
ALTER TABLE `table_dermaga3`
  MODIFY `dermaga3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_dermaga4`
--
ALTER TABLE `table_dermaga4`
  MODIFY `dermaga4_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_diklat1`
--
ALTER TABLE `table_diklat1`
  MODIFY `diklat1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_diklat2`
--
ALTER TABLE `table_diklat2`
  MODIFY `diklat2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_diklat3`
--
ALTER TABLE `table_diklat3`
  MODIFY `diklat3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_diklat4`
--
ALTER TABLE `table_diklat4`
  MODIFY `diklat4_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_fungsional1`
--
ALTER TABLE `table_fungsional1`
  MODIFY `fungsional1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_fungsional2`
--
ALTER TABLE `table_fungsional2`
  MODIFY `fungsional2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_fungsional3`
--
ALTER TABLE `table_fungsional3`
  MODIFY `fungsional3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_groups`
--
ALTER TABLE `table_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_jembatan1`
--
ALTER TABLE `table_jembatan1`
  MODIFY `jembatan1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_jembatan2`
--
ALTER TABLE `table_jembatan2`
  MODIFY `jembatan2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_jenis1`
--
ALTER TABLE `table_jenis1`
  MODIFY `jenis1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_jenis2`
--
ALTER TABLE `table_jenis2`
  MODIFY `jenis2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_jenis3`
--
ALTER TABLE `table_jenis3`
  MODIFY `jenis3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_jenis4`
--
ALTER TABLE `table_jenis4`
  MODIFY `jenis4_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_jenis5`
--
ALTER TABLE `table_jenis5`
  MODIFY `jenis5_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_jenis6`
--
ALTER TABLE `table_jenis6`
  MODIFY `jenis6_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kapalbarang1`
--
ALTER TABLE `table_kapalbarang1`
  MODIFY `kapalbarang1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kapalbarang2`
--
ALTER TABLE `table_kapalbarang2`
  MODIFY `kapalbarang2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kapalpenumpang1`
--
ALTER TABLE `table_kapalpenumpang1`
  MODIFY `kapalpenumpang1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kapalpenumpang2`
--
ALTER TABLE `table_kapalpenumpang2`
  MODIFY `kapalpenumpang2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_keluar`
--
ALTER TABLE `table_keluar`
  MODIFY `keluar_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kendaraanpribadi1`
--
ALTER TABLE `table_kendaraanpribadi1`
  MODIFY `kendaraanpribadi1_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `table_kendaraanpribadi2`
--
ALTER TABLE `table_kendaraanpribadi2`
  MODIFY `kendaraanpribadi2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi1`
--
ALTER TABLE `table_kompetensi1`
  MODIFY `kompetensi1_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_kompetensi2`
--
ALTER TABLE `table_kompetensi2`
  MODIFY `kompetensi2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi3`
--
ALTER TABLE `table_kompetensi3`
  MODIFY `kompetensi3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi4`
--
ALTER TABLE `table_kompetensi4`
  MODIFY `kompetensi4_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi5`
--
ALTER TABLE `table_kompetensi5`
  MODIFY `kompetensi5_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi6`
--
ALTER TABLE `table_kompetensi6`
  MODIFY `kompetensi6_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi7`
--
ALTER TABLE `table_kompetensi7`
  MODIFY `kompetensi7_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi8`
--
ALTER TABLE `table_kompetensi8`
  MODIFY `kompetensi8_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi9`
--
ALTER TABLE `table_kompetensi9`
  MODIFY `kompetensi9_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi10`
--
ALTER TABLE `table_kompetensi10`
  MODIFY `kompetensi10_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi11`
--
ALTER TABLE `table_kompetensi11`
  MODIFY `kompetensi11_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi12`
--
ALTER TABLE `table_kompetensi12`
  MODIFY `kompetensi12_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi13`
--
ALTER TABLE `table_kompetensi13`
  MODIFY `kompetensi13_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kompetensi14`
--
ALTER TABLE `table_kompetensi14`
  MODIFY `kompetensi14_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_masuk`
--
ALTER TABLE `table_masuk`
  MODIFY `masuk_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_modaasdp1`
--
ALTER TABLE `table_modaasdp1`
  MODIFY `modaasdp1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_modaasdp2`
--
ALTER TABLE `table_modaasdp2`
  MODIFY `modaasdp2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_modaasdp3`
--
ALTER TABLE `table_modaasdp3`
  MODIFY `modaasdp3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_modaasdp4`
--
ALTER TABLE `table_modaasdp4`
  MODIFY `modaasdp4_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_modaasdp5`
--
ALTER TABLE `table_modaasdp5`
  MODIFY `modaasdp5_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_pengujiankir`
--
ALTER TABLE `table_pengujiankir`
  MODIFY `pengujiankir_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_pengumpan1`
--
ALTER TABLE `table_pengumpan1`
  MODIFY `pengumpan1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_pengumpan2`
--
ALTER TABLE `table_pengumpan2`
  MODIFY `pengumpan2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_pengumpan3`
--
ALTER TABLE `table_pengumpan3`
  MODIFY `pengumpan3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_pengumpan4`
--
ALTER TABLE `table_pengumpan4`
  MODIFY `pengumpan4_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_penumpang1`
--
ALTER TABLE `table_penumpang1`
  MODIFY `penumpang1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_perintis1`
--
ALTER TABLE `table_perintis1`
  MODIFY `perintis1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_perintis2`
--
ALTER TABLE `table_perintis2`
  MODIFY `perintis2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_perusahaanasdp1`
--
ALTER TABLE `table_perusahaanasdp1`
  MODIFY `perusahaanasdp1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_perusahaanasdp2`
--
ALTER TABLE `table_perusahaanasdp2`
  MODIFY `perusahaanasdp2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_perusahaanlaut1`
--
ALTER TABLE `table_perusahaanlaut1`
  MODIFY `perusahaanlaut1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_perusahaanlaut2`
--
ALTER TABLE `table_perusahaanlaut2`
  MODIFY `perusahaanlaut2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_perusahaanumum1`
--
ALTER TABLE `table_perusahaanumum1`
  MODIFY `perusahaanumum1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_perusahaanumum2`
--
ALTER TABLE `table_perusahaanumum2`
  MODIFY `perusahaanumum2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_petikemas1`
--
ALTER TABLE `table_petikemas1`
  MODIFY `petikemas1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_petikemas2`
--
ALTER TABLE `table_petikemas2`
  MODIFY `petikemas2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_terminal1`
--
ALTER TABLE `table_terminal1`
  MODIFY `terminal1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_terminal2`
--
ALTER TABLE `table_terminal2`
  MODIFY `terminal2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_terminal3`
--
ALTER TABLE `table_terminal3`
  MODIFY `terminal3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_terminalpetikemas`
--
ALTER TABLE `table_terminalpetikemas`
  MODIFY `terminalpetikemas_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_tipea1`
--
ALTER TABLE `table_tipea1`
  MODIFY `tipea1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_tipea2`
--
ALTER TABLE `table_tipea2`
  MODIFY `tipea2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_tipeb1`
--
ALTER TABLE `table_tipeb1`
  MODIFY `tipeb1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_tipeb2`
--
ALTER TABLE `table_tipeb2`
  MODIFY `tipeb2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_tipec1`
--
ALTER TABLE `table_tipec1`
  MODIFY `tipec1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_tipec2`
--
ALTER TABLE `table_tipec2`
  MODIFY `tipec2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
