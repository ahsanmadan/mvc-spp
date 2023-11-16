-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 04:52 AM
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
(1, 'Rekayasa Perangkat Lunak', 'RPL'),
(2, 'Teknik Komputer Jaringan', 'TKJ'),
(3, 'Multimedia', 'MM'),
(4, 'Otomatisasi Tata Kelola Perkantoran', 'OTKP'),
(5, 'Akuntansi dan Keuangan Lembaga', 'AKL'),
(6, 'Perbankan Syariah', 'PS'),
(7, 'Bisnis Daring dan Pemasaran', 'BDP'),
(8, 'Teknik Desain Grafis', 'TDG'),
(10, 'Teknologi Desain', 'TD'),
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
(1, 'MM1', '2017-MM1', 3, '2017'),
(2, 'MM2', '2017-MM2', 3, '2017'),
(3, 'MM1', '2018-MM1', 3, '2018'),
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
(18, 'AK1', '2017-AK1', 5, '2017'),
(19, 'AK2', '2017-AK2', 5, '2017'),
(20, 'AK3', '2017-AK3', 5, '2017'),
(21, 'TN', '2017-TN', 7, '2017'),
(22, 'RPL', '2017-RPL', 1, '2017'),
(23, 'RPL', '2020-RPL', 1, '2020'),
(24, 'TKJ1', '2020-TKJ1', 2, '2020'),
(26, 'TKJ2', '2020-TKJ2', 2, '2020'),
(28, 'MM2', '2020-MM2', 3, '2020'),
(29, 'RPL', '2018-RPL', 1, '2018'),
(30, 'BDP', '2020-BDP', 7, '2020'),
(31, 'AK1', '2020-AK1', 5, '2020'),
(32, 'OTKP1', '2020-OTKP1', 4, '2020'),
(33, 'OTKP2', '2020-OTKP2', 4, '2020'),
(34, 'PS', '2020-PS', 6, '2020');

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

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `id_kelas`, `id_spp`, `jumlah_bayar`) VALUES
('200226231123', 3, '0024035996', '2020-02-26', 1, 2020, 22, '2017RPL', 400000),
('200226231211', 3, '0023870498', '2020-02-26', 1, 2020, 22, '2017RPL', 400000),
('200226231411', 3, '0021294899', '2020-02-26', 12, 2019, 21, '2017BDP', 300000),
('200821201457', 3, '0042847138', '2020-08-21', 8, 2020, 24, '2020TKJ', 400000),
('200826220359', 3, '0055167253', '2020-08-26', 8, 2020, 30, '2020BDP', 300000),
('200827001903', 3, '0045176224', '2020-08-27', 8, 2020, 24, '2020TKJ', 400000),
('200827001944', 3, '3051528870', '2020-08-27', 8, 2020, 24, '2020TKJ', 400000),
('200906130253', 3, '0043155380', '2020-09-06', 9, 2020, 4, '2019MM', 400000),
('200906133319', 3, '0043155380', '2020-09-06', 10, 2020, 4, '2019MM', 400000),
('200906133300', 3, '0042899366', '2020-09-06', 9, 2020, 4, '2019MM', 400000),
('200906132903', 3, '0032647688', '2020-09-06', 9, 2020, 4, '2019MM', 400000),
('200906132849', 3, '0037276839', '2020-09-06', 9, 2020, 4, '2019MM', 400000),
('200908214625', 3, '0068085879', '2020-09-08', 9, 2020, 4, '2019MM', 400000),
('200908215347', 3, '0043107953', '2020-09-08', 7, 2020, 4, '2019MM', 400000),
('200908215356', 3, '0043107953', '2020-09-08', 8, 2020, 4, '2019MM', 400000),
('200908215403', 3, '0043107953', '2020-09-08', 9, 2020, 4, '2019MM', 400000),
('200908215411', 3, '0043107953', '2020-09-08', 10, 2020, 4, '2019MM', 400000),
('210215114953', 3, '0048857701', '2021-02-15', 1, 2021, 23, '2020RPL', 400000),
('210313135258', 3, '0048857701', '2021-03-13', 2, 2021, 23, '2020RPL', 400000),
('210326160207', 3, '0048857701', '2021-03-26', 3, 2021, 23, '2020RPL', 400000),
('210326165945', 3, '0046181791', '2021-03-26', 3, 2021, 31, '2020AKL', 300000),
('210327170854', 5, '3051528870', '2021-03-27', 3, 2021, 24, '2020TKJ', 400000);

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
(9, 'NjikJiro', '$2y$10$XUBVxoXbxRZXK50nGnYKBOrHuyTT.JRf3cWwAQpVXUjoqqjwIcbPm', 'Adyadma Renjiro', 'admin', 1),
(10, 'Ahsan', '$2y$10$qiFUo3O.1HQgHhg05IqGdOJmQwb7Nt1Dc89nttQWZJu5OhAP1HbBu', 'Ahsan Ramadan', 'admin', 1);

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
('0061097004', '1311', 'Ahsan Ramadan', 7, 'Jalan barau barau', '089621500376', '2019-RPL');

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
('2019-RPL', 2019, 1, 400000);

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
  MODIFY `id_jurusan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
