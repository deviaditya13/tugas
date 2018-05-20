-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mei 2018 pada 07.38
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user_id` int(1) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_karyawan`
--

CREATE TABLE `dt_karyawan` (
  `nik` int(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `bagian` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_karyawan`
--

INSERT INTO `dt_karyawan` (`nik`, `nama`, `tgl_lahir`, `jenis_kelamin`, `bagian`, `alamat`, `status`, `agama`, `no_tlp`, `email`, `foto`) VALUES
(12151001, 'Rizki Akbar Maulana', '1998-05-02', 'laki-laki', 'HRD', 'Bojongsoang, Bandung', 'Menikah', 'Islam', '085346123769', 'rizkiakbar02@gmail.com', ''),
(12151002, 'Herlinadia Mariah', '1997-03-10', 'perempuan', 'Produksi', 'Majalaya, Kab. Bandung', 'Belum Menikah', 'Islam', '081453756845', 'herlinadiam@gmail.com', ''),
(12151003, 'Moch. Fajar Ismail', '1997-04-18', 'laki-laki', 'Dana dan Jasa', 'Majalaya, Kab. Bandung', 'Belum Menikah', 'Islam', '085468535755', 'mfismail@gmail.com', ''),
(12151004, 'Tri Aji Nurfajri', '1997-02-01', 'laki-laki', 'SDM', 'Solokanjeruk, Kab. Bandung', 'Belum Menikah', 'Islam', '089678365245', 'triajinf@gmail.com', ''),
(12151005, 'Fitria Rachmawati', '1997-02-14', 'perempuan', 'Keuangan', 'Majalaya, Kab. Bandung', 'Belum Menikah', 'Islam', '085475635789', 'fitriar13@gmail.com', ''),
(12151006, 'Destia Achadiyanti ', '1996-12-19', 'perempuan', 'Pemasaran', 'Majalaya, Kab. Bandung', 'Belum Menikah', 'Islam', '089476857879', 'destia19@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `dt_karyawan`
--
ALTER TABLE `dt_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
