-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 02:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benarsby`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `created_at` date NOT NULL,
  `nomorantrian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `iduser`, `nama`, `ttl`, `jk`, `pekerjaan`, `jabatan`, `alamat`, `keperluan`, `hari`, `tanggal`, `jam`, `created_at`, `nomorantrian`) VALUES
(1, 2, 'Annisa Hanan', 'Surabaya, 7 Juni 1998', 'Perempuan', 'TIDAK BEKERJA', 'Belum bekerja', 'Jl Wisma Kedung Asem Indah CC-20, Surabaya', 'Melamar pekerjaan', '', '0000-00-00', '00:00:00', '0000-00-00', 1),
(2, 2, 'anisa putri', 'Surabaya, 5 Juli 1995', 'Perempuan', 'SWASTA', 'Pegawai', 'Jl Candi Borobudor 27, Surabaya', 'Perpanjang Kontrak Kerja', 'Selasa', '2021-03-16', '15:00:00', '0000-00-00', 1),
(4, 0, 'Andy Setyawan', 'Surabaya, 7 November 1994', 'Laki-Laki', 'SWASTA', '', 'Karang Klumprik Timur I, Balas Klumprik 006/007, Wiyung', 'Perpanjangan Kontrak Kerja', 'Selasa', '2021-03-16', '14:15:00', '0000-00-00', 0),
(5, 3, 'Auranissa Anggun Sabilla', 'Surabaya, 7 Juni 1998', 'Perempuan', 'PNS', 'Pegawai', 'Keputih 3C Smega Indah No 21, Keputih 003/002, Sukolilo, Surabaya', 'Perpanjang Kontrak Kerja', 'Rabu', '2021-03-17', '13:00:00', '0000-00-00', 1),
(6, 2, 'anisa putri', 'Surabaya, 5 Juli 1995', 'Perempuan', 'SWASTA', 'CS', 'Jl Candi Borobudor 27, Surabaya', 'Melamar pekerjaan', '', '0000-00-00', '00:00:00', '0000-00-00', 1),
(7, 2, 'anisa putri', 'Surabaya, 5 Juli 1995', 'Perempuan', 'SWASTA', 'Pegawai', 'Jl Candi Borobudor 27, Surabaya', 'm', '', '0000-00-00', '00:00:00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` text NOT NULL,
  `ulasan` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skhbn`
--

CREATE TABLE `skhbn` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `ttl` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `nama`, `ttl`, `alamat`) VALUES
(1, 'admin', 'admin', 'admin', '', '', ''),
(6, 'andys', '123', 'user', 'Andy Setyawan', 'Surabaya, 7 Mei 1991', 'Jl Wisma Kedung Asem Indah CC-20, Surabaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indexes for table `skhbn`
--
ALTER TABLE `skhbn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skhbn`
--
ALTER TABLE `skhbn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
