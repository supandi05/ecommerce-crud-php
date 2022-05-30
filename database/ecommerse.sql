-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2022 pada 08.00
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerse`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `Kode` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Merk` varchar(255) NOT NULL,
  `Harga` decimal(10,0) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Kategori` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`Kode`, `Nama`, `Merk`, `Harga`, `Deskripsi`, `Kategori`, `Foto`) VALUES
('M1', 'Minuman Mineral Aqua 600ml', 'Aqua', '5000', 'Aqua Botol 600 Ml', 'MINUMAN', 'aqua.png'),
('M2', 'Pocari Sweat 500 ml', 'Pocari Sweat', '7000', 'Isi paket terdiri dari 5 Pcs Pocari Sweat 500 ml\r\n', 'MINUMAN', 'pocari.png'),
('M3', 'Ultra Susu Uht Steril Slim Plain 200Ml', 'Ultra Jaya', '5000', 'Susu UHT 200Ml', 'MINUMAN', 'susuultra.png'),
('M4', 'ABC Special Grade Cocopandan 485 ml', 'ABC', '21900', 'ABC Special Grade Cocopandan 485 ml', 'MINUMAN', 'abc.png'),
('M5', 'You C1000 Health Drink Vitamin Orange 140Ml', 'Djojonegoro C-100', '6000', 'You C1000 Health Drink Vitamin Orange 140Ml', 'MINUMAN', 'c1000.png'),
('MR1', 'Biskuit Beng Beng Chocolate', 'Mayora', '2000', 'Biskuit Beng Beng Chocolate', 'MAKANAN RINGAN', 'bengbeng.png'),
('MR2', 'Nabati Richeese Richoco Rolls', 'Richeese', '500', 'Nabati Richeese Richoco Rolls Snack Jajan Hemat 8gr', 'MAKANAN RINGAN', 'nabati.png'),
('MR3', 'Gery Snack & Sereal', 'Garuda Food', '600', 'Gery Snack & Sereal 8gr dan gery bischoc 7gr', 'MAKANAN RINGAN', 'gery.png'),
('MR4', 'Oishi Snack Sponge Crunch Chocolate 28G', 'Liwayway', '2500', 'Oishi Snack Sponge Crunch Chocolate', 'MAKANAN RINGAN', 'sponge.png'),
('MR5', 'Better sandwich biscuit Fun Bites isi 4', 'Mayora', '2500', 'Better sandwich biscuit Fun Bites isi 4', 'MAKANAN', 'better.png'),
('S1', 'Telur Ayam 1Kg', 'Ayam', '26000', 'Telur ayam\r\n1/4Kg Isi 4 Telur\r\n1/2Kg Isi 8 Telur\r\n1/2Kg Isi 9 Telur\r\n1 Kg Isi 16 Telur\r\n1 Kg Isi 17 Telur', 'SEMBAKO', 'telur.png'),
('S2', 'Minyak Goreng Fortune 2L', 'Fortune', '52000', 'Fortune isi 2 Liter', 'SEMBAKO', 'fortune.png'),
('S3', 'Beras Sania 1Kg', 'Sania', '13000', 'Beras Sania Premium, beras pulen teknologi jepang', 'SEMBAKO', 'beras.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `kode` int(10) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Bagian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kode`, `Username`, `Password`, `email`, `Bagian`) VALUES
(1, 'admin', 'e3afed0047b08059d0fada10f400c1e5', 'admin@admin.com', 'Administrator'),
(2, 'supandi', '4da08dba094eed021ce24b6957212438', 'supandi@kaiapay.co.id', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Kode`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
