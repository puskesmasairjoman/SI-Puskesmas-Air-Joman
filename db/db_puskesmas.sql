-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 02:52 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `hari_kerja` text NOT NULL,
  `jam_kerja` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=444 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`, `hari_kerja`, `jam_kerja`) VALUES
(442, 'dr. dewi sartika', 'umum', 'kisaran', '085624433657', 'kamis s/d sabtu', '08:00  s/d 14:00'),
(443, 'dr. saputra', 'umum', 'air joman', '085243546674', 'senin s/d kamis', '10:00 s/d 16:00');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jns_obat` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jns_obat`) VALUES
(110, 'paracetamol', 'kaplet'),
(111, 'lactacyd', 'Suspensi');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int(6) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jk` varchar(13) NOT NULL,
  `umur` int(3) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `jk`, `umur`, `tgl_kunjungan`, `alamat`, `pekerjaan`) VALUES
(1, 'Triono', 'Laki Laki', 32, '2020-01-01', 'air joman', 'petani'),
(2, 'erlina', 'Perempuan', 40, '2020-01-03', 'Binjai Serbangan', 'Ibu Rumah Tangga');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
  `id_rm` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nama_dokter` varchar(40) NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `nama_obat` varchar(40) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rm`, `nama_pasien`, `nama_dokter`, `keluhan`, `diagnosa`, `nama_obat`, `tgl_periksa`) VALUES
(4, 'Triono', 'dr. dewi sartika', 'Mual, nyeri perut dan muntah', 'sakit lambung (maag)', 'lactacyd', '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'sariyantti@gmail.com', 'Sari yanti', 1, 'Admin ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=444;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_rm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
