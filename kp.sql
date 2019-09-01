-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Agu 2018 pada 04.08
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `eproposal`
--

CREATE TABLE `eproposal` (
  `No.` int(50) NOT NULL,
  `ODP_NAME` varchar(50) NOT NULL,
  `Judul_Juskeb` varchar(50) NOT NULL,
  `Nama_LOP` varchar(50) NOT NULL,
  `Nama_STO` varchar(50) NOT NULL,
  `Nama_Pembuat` varchar(50) NOT NULL,
  `Tanggal_Pembuatan` varchar(50) NOT NULL,
  `Aksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lop`
--

CREATE TABLE `lop` (
  `id` int(11) NOT NULL,
  `NewCo` varchar(3) NOT NULL,
  `DoCC` varchar(4) NOT NULL,
  `Witel` varchar(25) NOT NULL,
  `Paket` varchar(40) NOT NULL,
  `WBS` varchar(20) NOT NULL,
  `RefDocument` varchar(15) NOT NULL,
  `Item` varchar(5) NOT NULL,
  `CostElement` varchar(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `vendor` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Document_Date` date NOT NULL,
  `Value_Trancurr` varchar(30) NOT NULL,
  `Debit_Date` date NOT NULL,
  `Ket` varchar(200) NOT NULL,
  `Ven_Name` varchar(60) NOT NULL,
  `Ven_Name2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `odp_treg3`
--

CREATE TABLE `odp_treg3` (
  `id` int(50) NOT NULL,
  `NOSS_ID` varchar(50) NOT NULL,
  `ODP_INDEX` varchar(50) NOT NULL,
  `ODP_NAME` varchar(50) NOT NULL,
  `LATITUDE` double NOT NULL,
  `LONGITUDE` double NOT NULL,
  `CLUSNAME` varchar(50) NOT NULL,
  `CLUSTERSTATUS` varchar(50) NOT NULL,
  `AVAI` varchar(50) NOT NULL,
  `USED` varchar(50) NOT NULL,
  `RSV` varchar(50) NOT NULL,
  `RSK` varchar(50) NOT NULL,
  `IS_TOTAL` varchar(50) NOT NULL,
  `REGIONAL` varchar(50) NOT NULL,
  `WITEL` varchar(50) NOT NULL,
  `DATEL` varchar(50) NOT NULL,
  `STO` varchar(50) NOT NULL,
  `STO_DESC` varchar(50) NOT NULL,
  `ODP_INFO` varchar(50) NOT NULL,
  `UPDATE_DATE` varchar(500) NOT NULL,
  `KETERANGAN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'ahmad', 'toniebe@outlook.com', 'ebed', 'dce6345ea5b90d6ea53f0ef5c4b4c72c'),
(2, 'shabran meta', 'meta@gmail.com', 'newmeta', 'd87c3207d4ba9cc913f88b83ee139d59'),
(3, 'admin', 'admin@gmail.com', 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eproposal`
--
ALTER TABLE `eproposal`
  ADD PRIMARY KEY (`No.`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `odp_treg3`
--
ALTER TABLE `odp_treg3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eproposal`
--
ALTER TABLE `eproposal`
  MODIFY `No.` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `odp_treg3`
--
ALTER TABLE `odp_treg3`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
