-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 08:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `nama_jurusan` varchar(40) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `jurusan` varchar(8) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `jurusan`) VALUES
(1, 'Pengembangan Perangkat Lunak Dan Gim', 'PPLG'),
(2, 'Teknik Komputer Jaringan', 'TKJ'),
(4, 'Otomatisasi Tata Kelola Perkantoran', 'OTKP'),
(5, 'Akuntansi dan Keuangan Lembaga', 'AKL'),
(6, 'Perbankan Syariah', 'PS'),
(7, 'Bisnis Daring dan Pemasaran', 'BDP'),
(13, 'Farmasi Kesehatan ', 'FK'),
(11, 'Desain Komunikasi Visual', 'DKV');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `kode_kelas` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `tahun_angkatan` varchar(4) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kode_kelas`, `id_jurusan`, `tahun_angkatan`) VALUES
(4, 'MM1', '2019-MM1', 3, '2019'),
(27, 'MM1', '2020-MM1', 3, '2020'),
(6, 'MM2', '2019-MM2', 3, '2019'),
(7, 'RPL', '2019-RPL', 1, '2019'),
(8, 'AKL1', '2019-AKL1', 5, '2019'),
(9, 'AKL2', '2019-AKL2', 5, '2019'),
(10, 'PS', '2019-PS', 6, '2019'),
(11, 'OTKP1', '2019-OTKP1', 4, '2019'),
(12, 'OTKP2', '2019-OTKP2', 4, '2019'),
(13, 'OTKP3', '2019-OTKP3', 4, '2019'),
(14, 'TKJ1', '2019-TKJ1', 2, '2019'),
(15, 'TKJ2', '2019-TKJ2', 2, '2019'),
(16, 'TKJ3', '2019-TKJ3', 2, '2019'),
(17, 'BDP', '2019-BDP', 7, '2019'),
(23, 'RPL', '2020-RPL', 1, '2020'),
(24, 'TKJ1', '2020-TKJ1', 2, '2020'),
(26, 'TKJ2', '2020-TKJ2', 2, '2020'),
(28, 'MM2', '2020-MM2', 3, '2020'),
(36, 'DKV2', '2021-DKV', 11, '2021'),
(30, 'BDP', '2020-BDP', 7, '2020'),
(31, 'AK1', '2020-AK1', 5, '2020'),
(32, 'OTKP1', '2020-OTKP1', 4, '2020'),
(33, 'OTKP2', '2020-OTKP2', 4, '2020'),
(34, 'PS', '2020-PS', 6, '2020'),
(35, 'PPLG', '2021-PPLG', 1, '2021');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `id_petugas` int(2) NOT NULL,
  `nisn` char(12) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tgl_bayar` date NOT NULL,
  `bulan_bayar` int(2) NOT NULL,
  `tahun_bayar` int(4) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_spp` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `jumlah_bayar` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` tinyint(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`, `is_active`) VALUES
(3, 'Ahsan', '$2y$10$qiFUo3O.1HQgHhg05IqGdOJmQwb7Nt1Dc89nttQWZJu5OhAP1HbBu', 'Ahsan Ramadan', 'admin', 1),
(5, 'NjikJiro', '$2y$10$XUBVxoXbxRZXK50nGnYKBOrHuyTT.JRf3cWwAQpVXUjoqqjwIcbPm', 'Adyadma Renjiro', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama_siswa`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('0061097004', '2123', 'Ahsan Ramadan', 35, 'Jalan Barau barau', '089621500376', '2021-PPLG');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` varchar(20) NOT NULL,
  `tahun_masuk` int(4) NOT NULL,
  `id_jurusan` tinyint(3) NOT NULL,
  `nominal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun_masuk`, `id_jurusan`, `nominal`) VALUES
('2021-DKV', 2021, 11, 400000),
('2021-PPLG', 2021, 1, 400000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
