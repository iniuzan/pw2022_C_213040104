-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 07:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw2022_c_213040104`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `judul_film` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `tahun_rilis` varchar(100) NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul_film`, `sinopsis`, `thumbnail`, `genre`, `tahun_rilis`, `sutradara`, `penerbit`) VALUES
(7, 'Doraemon Stand By Me!', 'Film ini berisikan tentang kisah Nobita dan doraemon', 'standbyme.jpg', 'Anime', '2014', 'Pak Sutradara', 'Penerbit'),
(9, 'Madagascar', 'Film', 'madagascar.jpg', 'kids', '2005', 'Mireille Soria', 'DreamWorks Animation'),
(14, 'Cek Toko Sebelah', '', '6275443f6f424.jpg', 'Comedy', '2016', 'Ernest Prakasa', 'Starvision Plus'),
(16, '5 CM', 'Film 5 cm dimulai dengan Genta yang membuat tantangan bagi sahabat-sahabatnya. Ia ingin menguji kesetiakawanan mereka dengan cara berpisah dan tidak bertemu sama sekali selama setahun penuh. Genta kemudian menentukan waktu dan tempat pertemuan mereka, yakni di sebuah stasiun. Sebelum pertemuan, Genta menyebutkan barang apa saja yang harus mereka bawa. Ternyata, ia ingin mengajak para sahabatnya untuk mendaki Gunung Semeru. Di sela penantian selama setahun, kelima sahabat ini saling merindukan satu sama lain. Jika sebelumnya mereka berlima selalu bersama-sama, kini mereka harus menghadapi hidup masing-masing. Ian paling kesulitan pada masa penantian ini. Tidak pernah terpikir olehnya untuk menjalani hidup tanpa sahabatnya. Kepribadiannya yang sulit berkenalan dengan orang baru mempersulitnya dalam menjalani hari demi hari. Hingga tibalah hari pertemuan yang ditunggu-tunggu. Kelima karib ini sangat antusias menuju ke stasiun yang telah ditentukan. Drama sempat hadir ketika Ian hampir saja ketinggalan kereta api. Beruntung, Ian sempat ditarik oleh kawan-kawannya naik ke atas kereta yang telah melaju. Keseruan petualangan 5 sahabat ini belum selesai sampai di situ. Mereka masih harus mendaki Gunung Semeru yang tidak mudah. Berbagai rintangan harus mereka hadapi untuk bisa mencapai puncak tertinggi di Pulau Jawa, Mahameru. ', '627544d6bb53c.jpg', 'Thriller', '2010', 'Rizal Mantovani', 'Soraya Intercine Films'),
(20, 'jaws', 'film ini berisikan tentang hiu', '62997712f0b70.jpg', 'Action', '2020', 'pak sutradara', 'penerbit');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'fauzan', '$2y$10$trZ/bWv04NzK43uXISF8ge7cXtFW8NtPD/Uz5st6wxIT9YFrKWiou'),
(6, 'ojan', '$2y$10$xuomeba3uWjmXifKes.wdu3.rMXMuxP2g37ZDxn/1jBDlnaVb7wE.'),
(10, 'tes', '$2y$10$NUilWLeTQHCUCwtdKHdsG.8Uf7TrlzxeEPXeLzCBEwrNDfeWSlkIq'),
(11, 'admin', '$2y$10$qb3h2V5Yp63WeOcsvWf8Re.dpTNnvi9s1pFON.daBK0r0WWbqMslm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
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
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
