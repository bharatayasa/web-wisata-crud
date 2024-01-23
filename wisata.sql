-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 23 Jan 2024 pada 03.51
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(18, 'Rafting', 'Rafting on the Ayung river which is the largest river in BALI. Observe the beauty of the river, waterfalls, and nature, as well as see the history of rock paintings with an 12 km rafting trip with a duration of 2.5 to 3 hours. Guided by an experienced river guide to making your holiday in BALI even more complete.', 'rafting.JPG'),
(19, 'ATV', 'An exciting ATV track through the Jungle, panoramic rice field and Balinese villages, we are located in most convenience and Surrounded by popular tourist area in Singapadu - Ubud. A Family friendly Recreation place owned.', 'atv.JPG'),
(20, 'Tracking', 'it will not be complete if your vacation in Bali without trying trekking to Mount Batur Kintamani. enjoy the fresh natural air of Kintamani and watch the sunrise sure to be an unforgettable vacation', 'tracking.JPG'),
(21, 'Tirta Empul', 'tirta empul the holly spring with a few small showers is good for cleansing our body and mind. good for stabilizing positive and negative aura..confidence to ask for the best', 'tirta empu;.jpg'),
(22, 'Jeep', 'Morning trip to enjoy the sunrise at Mount Batur by riding a Jeep, so there\'s no need bother climbing again, just by taking a Jeep And feel the beauty of the sunrise and the country in above the clouds. This trip will be combined for visiting black lava which is commonly called Black Lava and Black sand, the trip starts at 05.00 in the morning.', 'jeep.jpg'),
(23, 'Tanah Lot', 'Tanah Lot is a unique beach because the temple is located on a rock in the middle of the sea near the beach. The rock is separated from other rocks. And when the tide is high, Tanah Lot Temple looks floating because it is surrounded by the sea with waves', 'tanahlot.jpg'),
(24, 'Snorkling', 'Bali has water tourism whose beauty is unbeatable. One of them is snorkeling at Nusa Penida clearer water beautiful coral reefs have the best story for your holiday', 'nyilem.jpg'),
(25, 'Penglipuran', 'acationing to Bali can not only spoil your eyes on the beach. Penglipuran Village is also a must-know tourist destination. This village has existed since 700 years ago so it is one of the oldest villages in Bali. The name Penglipuran Village comes from the Balinese word Pengling Pura which means a place to commemorate the ancestors.', 'penglipuran.JPG'),
(26, 'Istana Ubud', 'Ubud Palace, officially Puri Saren Agung is a historical building complex in Ubud Gianyar', 'ubud.JPG'),
(32, 'tes tambah ubah ', 'askdjhasjdhsjdsadna ubah ', 'Screenshot 2023-11-05 at 23.08.50.png'),
(33, 'ahdjadh', 'sd msand', 'bharata.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_submit` timestamp NOT NULL DEFAULT current_timestamp(),
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$44pgTpc2pYq/plpHyvphku8Vv5aZimviBKaOpOYoGpgq8lmzPbbai'),
(4, 'agung', '$2y$10$9HLNPmLYAtAsfPPBluEXDuJSXQygwGY8b.TeV.BJwcmnZ3wdp4yPi'),
(5, 'adminnnn', '$2y$10$bWfijT6eyfq0djH//7YEYuRVCY.liWGtPuTVGgeBo6TaP8WFiS/Aq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
