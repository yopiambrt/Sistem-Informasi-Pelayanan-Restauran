-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 17.49
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cirestaurant`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenismenu`
--

CREATE TABLE `jenismenu` (
  `idmenu` varchar(3) NOT NULL,
  `namamenu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenismenu`
--

INSERT INTO `jenismenu` (`idmenu`, `namamenu`) VALUES
('ng', 'nasigoreng'),
('nk', 'nasikuning'),
('np', 'nasipadang'),
('nt', 'nasitelor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(5) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `nama` text,
  `tgl_pesan` date DEFAULT NULL,
  `menu` varchar(25) DEFAULT NULL,
  `metode` varchar(25) DEFAULT NULL,
  `keterangan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `email`, `nama`, `tgl_pesan`, `menu`, `metode`, `keterangan`) VALUES
(14, 'denisearuan19@uns.student', 'Denise Gratia Aruan', '2021-05-19', 'nk', 'bungkus', 'tambah sambal'),
(15, 'denisearuan19@uns.student', 'Denise Gratia Aruan', '2021-05-19', 'ng', 'bungkus', 'tambah sambal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenismenu`
--
ALTER TABLE `jenismenu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu` (`menu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`menu`) REFERENCES `jenismenu` (`idmenu`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
