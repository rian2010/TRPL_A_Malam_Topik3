-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2023 pada 21.21
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pela_mini_pbl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `tanggal_peminjaman` varchar(255) NOT NULL,
  `tanggal_pengembalian` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `jumlah` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_barang`, `nama_peminjam`, `nama_barang`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status`, `jumlah`) VALUES
(55, '99', 'Damarjati Abdullah', 'Kamera', '2023-01-04', '2023-01-07', 'DiTolak', 11),
(60, '77', 'Damarjati Abdullah', 'Modem', '2023-01-02', '2023-01-06', 'DiTerima', 3),
(62, '21', 'Damarjati Abdullah', 'Sound System', '2022-12-27', '2023-01-07', 'DiTerima', 2),
(69, '1', 'Damarjati Abdullah', 'Komputer', '2023-01-03', '2023-01-14', 'menunggu', 5),
(70, '2', 'Fauzan Alwan', 'Kamera', '2023-01-12', '2023-01-15', 'Diterima', 12),
(71, '3', 'Fauzan Alwan', 'Cisco', '2023-01-17', '2023-01-20', 'Ditolak', 10),
(72, '4', 'Fauzan Alwan', 'Kabel LAN', '2023-01-23', '2023-01-26', 'menunggu', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock`
--

CREATE TABLE `stock` (
  `Category` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `peminjam` varchar(255) NOT NULL,
  `ID` int(30) NOT NULL,
  `Condition` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal_pinjam` varchar(255) NOT NULL,
  `jumlah` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`, `nama`, `jurusan`) VALUES
(2, 'damarjati', '321', 'damarjati321@gmail.com', 'user', 'Damarjati Abdullah', 'RPL'),
(3, 'fauzanalwan', '1818', 'fauzan18@gmail.com', 'user', 'Fauzan Alwan', 'TRPL'),
(19, 'adminhanna', '1717', 'hannaki@gmail.com', 'admin', 'Admin Hanna', 'TRPL');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stock`
--
ALTER TABLE `stock`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `stock`
--
ALTER TABLE `stock`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=899;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=434221102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
