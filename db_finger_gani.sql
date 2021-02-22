-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2021 pada 07.44
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_finger_gani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_masuk`
--

CREATE TABLE `log_masuk` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_masuk`
--

INSERT INTO `log_masuk` (`id`, `user_id`, `tanggal`, `jam`) VALUES
(5, '30137', '2021-02-19', '12:13:43'),
(6, '30137', '2021-01-29', '17:03:04'),
(7, '1', '2021-02-02', '10:11:03'),
(8, '30137', '2021-02-10', '07:30:01'),
(9, '30137', '2021-02-11', '15:45:43'),
(10, '30137', '2021-02-15', '08:48:34'),
(11, '30137', '2021-02-18', '09:44:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_pulang`
--

CREATE TABLE `log_pulang` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_pulang`
--

INSERT INTO `log_pulang` (`id`, `user_id`, `tanggal`, `jam`) VALUES
(4, '30137', '2021-02-19', '14:36:43'),
(5, '30137', '2021-01-29', '17:00:24'),
(6, '30137', '2021-02-10', '07:30:27'),
(7, '30137', '2021-02-11', '15:46:32'),
(8, '30137', '2021-02-15', '08:49:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `log_masuk`
--
ALTER TABLE `log_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log_pulang`
--
ALTER TABLE `log_pulang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30140;

--
-- AUTO_INCREMENT untuk tabel `log_masuk`
--
ALTER TABLE `log_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `log_pulang`
--
ALTER TABLE `log_pulang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
