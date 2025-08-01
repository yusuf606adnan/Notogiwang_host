-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2024 pada 16.38
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_nabila`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `jenis_mobil` varchar(255) NOT NULL,
  `jam_sewa` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `status` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `jenis_mobil`, `jam_sewa`, `harga`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Avanza', '12 jam', '2.00', 'second', '2024-07-11 01:23:25', '2024-07-12 14:13:16'),
(2, 'Avanza Xenia All New', '24 jam', '300.00', 'Second', '2024-07-11 08:35:26', '2024-07-11 08:35:49'),
(4, 'civic', '48', '4.00', 'Second', '2024-07-12 13:26:36', '2024-07-12 13:26:36'),
(5, 'Brio', '12 jam', '250.00', 'Second', '2024-07-12 13:27:04', '2024-07-12 13:27:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `email`, `no_telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Hartono', 'hartono@gmail.com', '08766254343', 'Kebumen', '2024-07-11 08:55:20', '2024-07-11 08:55:20'),
(3, 'diva', 'diva@gmail.com', '09890989', 'Buaran', '2024-07-12 13:20:17', '2024-07-12 13:20:17'),
(4, 'sabela', 'sabela@gmail.com', '0877756453', 'Kedungwuni', '2024-07-12 13:20:59', '2024-07-12 13:20:59'),
(5, 'rima', 'rima@gmail.com', '022289192', 'Buaran', '2024-07-12 13:21:24', '2024-07-12 13:21:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `pemesanan_id` int(11) NOT NULL,
  `jumlah` decimal(10,2) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `pemesanan_id`, `jumlah`, `metode_pembayaran`, `tanggal_pembayaran`, `created_at`, `updated_at`) VALUES
(2, 1001, '500.00', 'Transfer', '2024-07-13', '2024-07-11 13:43:40', '2024-07-12 12:46:57'),
(3, 1002, '300.00', 'Transfer', '2024-07-14', '2024-07-11 13:44:11', '2024-07-12 12:46:40'),
(4, 1003, '250.00', 'Tunai', '2024-07-10', '2024-07-11 13:44:36', '2024-07-11 13:45:06'),
(5, 1004, '250.00', 'Transfer', '2024-07-11', '2024-07-12 12:44:05', '2024-07-12 12:46:24'),
(6, 1005, '400.00', 'Transfer', '2024-07-06', '2024-07-12 12:44:42', '2024-07-12 12:46:05'),
(7, 1007, '750.00', 'Tunai', '2024-07-10', '2024-07-12 12:45:50', '2024-07-12 12:45:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email_pelanggan` varchar(255) NOT NULL,
  `no_telepon_pelanggan` varchar(15) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_sewa` date NOT NULL,
  `jam_sewa` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama_pelanggan`, `email_pelanggan`, `no_telepon_pelanggan`, `alamat_pelanggan`, `nama_mobil`, `tgl_pesan`, `tgl_sewa`, `jam_sewa`, `created_at`, `updated_at`) VALUES
(1, 'hartono', 'hartono@gmail.com', '0877627255', 'Banyurip', 'civic', '2024-07-01', '2024-07-11', '12 jam', '2024-07-11 13:16:42', '2024-07-12 12:43:29'),
(2, 'diva', 'diva@gmail.com', '0987622', 'Buaran', 'Brio', '2024-07-03', '2024-07-10', '24 jam', '2024-07-11 13:18:01', '2024-07-11 13:18:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'nabila', '$2y$10$jj9yxVrwSksYtL7rzraCfe6ad.CSyZdT1zfVlgu2r5wU83YeA4dWa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
