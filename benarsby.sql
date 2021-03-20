-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 05:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `jam` time NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `nomorantrian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `iduser`, `nama`, `ttl`, `jk`, `pekerjaan`, `jabatan`, `alamat`, `keperluan`, `jam`, `created_at`, `nomorantrian`) VALUES
(1, 0, 'Ibnu Nasir', 'Surabaya, 7 Mei 1991', 'Laki-Laki', 'SWASTA', '', 'Bagong Ginayan 4C/28, Ngagel 005/003, Wonokromo', 'Persyaratan Pindah Nikah', '09:22:00', '2021-03-15', 0),
(2, 0, 'Annisa Hanan', 'Surabaya, 7 Juni 1998', 'Perempuan', 'TIDAK BEKERJA', '', 'Keputih 3C Smega Indah No 21, Keputih 003/002, Sukolilo, Surabaya', 'Melamar Pekerjaan', '10:17:00', '2021-03-15', 0),
(3, 0, 'Andy Setyawan', 'Surabaya, 9 Oktober 1995', 'Laki-Laki', 'TIDAK BEKERJA', '', 'Karang Klumprik Timur I, Balas Klumprik 006/007, Wiyung', 'Melamar Pekerjaan di Kementrian Kesehatan', '09:30:00', '2021-03-15', 0),
(4, 0, 'Auranissa Anggun Sabilla', 'Surabaya, 11 Februari 1998', 'Perempuan', 'PELAJAR', '', 'Jl Wisma Kedung Asem Indah CC-20, Surabaya', 'Pendaftaran Perwira Karir Polri', '10:43:00', '2021-03-15', 0),
(5, 0, 'Yilmash Yurimza Yasin', 'Surabaya, 7 November 1994', 'Laki-Laki', 'TIDAK BEKERJA', '', 'Bulak Kenjeran I/15, Kenjeran 003/003, Bulak, Surabaya', 'Melamar Pekerjaan', '11:40:00', '2021-03-15', 0),
(6, 0, 'Evi Dwi Nurmayanti', 'Malang, 9 Januari 1975', 'Perempuan', 'SWASTA', '', 'Hayam Wuruk Dodik C-15, Sawunggaling 009/007, Wonokromo, Surabaya', 'Syarat Pengangkatan Pegawai Non-PNS', '09:32:00', '2021-03-15', 0),
(7, 0, 'Muchtadi', 'Sidoarjo, 17 November 1978', 'Laki-Laki', 'SWASTA', '', 'Jl Wonosari Lor III/10, Wonokusumo 002/014, Semampir, Surabaya', 'Perpanjangan Kontrak Kerja', '09:12:00', '2021-03-15', 0),
(8, 0, 'Karlin', 'Lamongan, 11 Maret 1960', 'Laki-Laki', 'SWASTA', '', 'Jl Platuk Donomulyo IF/3 005/013, Kenjeran, Surabaya', 'Perpanjangan Kontrak Kerja', '09:35:00', '2021-03-15', 0),
(49, 10, 'Nisauz', 'Tulungagung, 08 November 1999', 'Perempuan', 'PELAJAR', '', 'Tulungagung', 'Sekolah', '00:00:00', '2021-03-15', 1),
(50, 11, 'Ayu Qothrun Nada', 'Tulungagung, 10 Juli 2002', 'Perempuan', 'PELAJAR', '', 'Rejotangan, Tulungagung', 'Untuk persyaratan sekolah', '00:00:00', '2021-03-15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` text NOT NULL,
  `ulasan` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_ulasan`, `id_user`, `nama`, `ulasan`, `created_at`) VALUES
(10, 10, 'Nisauz', 'sangat membantu', '2021-03-15'),
(11, 11, 'Ayu Qothrun Nada', 'Datang langsung dilayani', '2021-03-15');

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
  `nohp` varchar(50) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skhbn`
--

INSERT INTO `skhbn` (`id`, `id_pasien`, `nama`, `ttl`, `jk`, `nohp`, `pekerjaan`, `alamat`, `keperluan`, `hari`, `tanggal`, `jam`) VALUES
(1, 0, 'Muchtadi', 'Sidoarjo, 17 November 1978', 'Laki-Laki', '08', 'SWASTA', 'Jl Wonosari Lor III/10, Wonokusumo 002/014, Semampir, Surabaya', 'Perpanjangan Kontrak Kerja', '', '2021-02-01', '09:12:00'),
(2, 0, 'Karlin', 'Lamongan, 11 Maret 1960', 'Laki-Laki', '09', 'SWASTA', 'Jl Platuk Donomulyo IF/3 005/013, Kenjeran, Surabaya', 'Perpanjangan Kontrak Kerja', '', '2021-02-02', '09:35:00');

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
(2, 'user', 'user', 'user', '', '', ''),
(3, 'tes', 'tes', 'user', 'tes', '', ''),
(4, 'aa', 'aa', 'user', 'aa', 'aa', 'aa'),
(5, 'aa', 'aa', 'user', 'aa', 'aa', 'aa'),
(6, 'b', 'b', 'user', 'b', 'b', 'b'),
(7, 'c', 'c', 'user', 'c', 'c', 'c'),
(10, 'Nisauz', 'Nisauz08', 'user', 'Nisauz', 'Tulungagung, 08 November 1999', 'Tulungagung'),
(11, 'Ayu', 'Ayu10', 'user', 'Ayu Qothrun Nada', 'Tulungagung, 10 Juli 2002', 'Rejotangan, Tulungagung'),
(12, 'Vivia', 'Vivia', 'user', 'Rodhatul Vivia', 'Tulungagung, 07 November 1999', 'Ngunut, Tulungagung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

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
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skhbn`
--
ALTER TABLE `skhbn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
