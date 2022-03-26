-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2022 pada 06.58
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
('M3', 'Ultra Susu Uht Steril Slim Plain 200Ml', 'Ultra Jaya', '5000', 'Ultra milk susu UHT full cream plain tetrapack 200mL \r\n\r\n\r\nCARA PENGGUNAAN :\r\nKocok dahulu sebelum dibuka. Segera habiskan setelah dibuka.\r\n\r\nKOMPOSISI :\r\nSusu sapi segar, penstabil nabati.\r\n\r\nTAKARAN PER KEMASAN :\r\nSajian per kemasan : 1\r\n\r\nTAKARAN PER SERVING :\r\nEnergi total 120kkal, energi dari lemak 50kkal. % AKG: Lemak total 6g, lemak jenuh 3g, kolesterol 15mg, protein 6g, karbohidrat total 10g, natrium 40mg, kalium 390mg. Vitamin A 20%, vitamin C 8%, vitamin D3 20%, vitamin E 8%, vitamin K 6%, vitamin B1 20%, vitamin B2 20%, vitamin B3 10%, vitamin B5 8%, vitamin B6 15%, vitamin B12 20%, kalsium 25%, zat besi 2%, Iodium 6%, zink 10%, magnesium 8%, fosfor 30%, selenium 10%\r\n\r\nTAKARAN SAJI :\r\nTakaran saji : 200mL', 'MINUMAN', 'susuultra.png'),
('M4', 'ABC Special Grade Cocopandan 485 ml', 'ABC', '21900', 'ABC Special Grade Cocopandan 485 ml', 'MINUMAN', 'abc.png'),
('M5', 'You C1000 Health Drink Vitamin Orange 140Ml', 'Djojonegoro C-100', '6000', 'You C1000 Health Drink Vitamin Orange 140Ml', 'MINUMAN', 'c1000.png'),
('MR1', 'BISKUIT BENG BENG CHOCOLATE', 'BENG BENG', '2000', 'BISKUIT BENG BENG CHOCOLATE COKELAT CRISP WAFER 1 BOX ISI 17 PCS SNACK MAKANAN RINGAN COKLAT', 'MAKANAN RINGAN', 'bengbeng.png'),
('MR2', 'Nabati Richeese Richoco Rolls', 'Richeese', '500', 'Nabati Richeese Richoco Rolls Snack Jajan Hemat 8gr', 'MAKANAN RINGAN', 'nabati.png'),
('MR3', 'Gery Snack & Sereal', 'GARUDA FOOD', '600', 'Gery Snack & Sereal 8gr dan gery bischoc 7gr', 'MAKANAN RINGAN', 'gery.png'),
('MR4', 'Oishi Snack Sponge Crunch Chocolate 28G', 'Liwayway', '2500', 'Oishi Snack Sponge Crunch Chocolate', 'MAKANAN RINGAN', 'sponge.png'),
('MR5', 'Better sandwich biscuit Fun Bites isi 4', 'Mayora', '2500', 'Better sandwich biscuit Fun Bites isi 4', 'MAKANAN', 'better.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Bagian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Username`, `Password`, `Bagian`) VALUES
('admin', 'admin', 'Administrator'),
('supandi', 'supandi', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
