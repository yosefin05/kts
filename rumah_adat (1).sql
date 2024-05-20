-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 04:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_adat`
--

-- --------------------------------------------------------

--
-- Table structure for table `pulau`
--

CREATE TABLE `pulau` (
  `id_pulau` int(11) NOT NULL,
  `pulau` varchar(225) DEFAULT NULL,
  `informasi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pulau`
--

INSERT INTO `pulau` (`id_pulau`, `pulau`, `informasi`) VALUES
(1, 'Sumatera', 'Sumatera adalah pulau keenam terbesar di dunia yang terletak di Indonesia, dengan luas 473.481 km². Penduduk yang tinggal di pulau ini sekitar 57.940.351 jiwa. Pulau ini dikenal pula dengan nama lain yaitu Pulau Percha, Andalas, atau Suwarnadwipa.'),
(2, 'Jawa', 'Jawa adalah sebuah pulau di Indonesia yang terletak di kepulauan Sunda Besar dan merupakan pulau terluas ke-13 di dunia. Jumlah penduduk di Pulau Jawa sekitar 150 juta. Pulau Jawa dihuni oleh 60% total populasi Indonesia.'),
(3, 'Kalimantan', 'Kalimantan, atau juga disebut Borneo oleh dunia internasional, adalah pulau terbesar ketiga di dunia yang terletak di sebelah utara Pulau Jawa dan di sebelah barat Pulau Sulawesi. Pulau Kalimantan dibagi menjadi wilayah Indonesia, Malaysia, dan Brunei.'),
(4, 'Sulawesi', 'Sulawesi, dahulu pernah dikenal sebagai Celebes adalah sebuah pulau di Indonesia. Sulawesi merupakan salah satu dari empat Kepulauan Sunda Besar dan merupakan pulau terbesar kesebelas di dunia.'),
(5, 'Papua', 'Papua, adalah provinsi yang terletak di pesisir utara Papua, Indonesia. Provinsi Papua sebelumnya bernama Irian Barat dan Irian Jaya yang mencakup seluruh Tanah Papua bekas Keresidenan Nugini Barat. Ibu kota Papua berada di Kota Jayapura, yang berbatasan langsung dengan negara Papua Nugini.');

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `id_rumah` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `informasi` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `id_pulau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`id_rumah`, `nama`, `informasi`, `gambar`, `id_pulau`) VALUES
(1, 'Rumah Adat Aceh', 'Krong Bade disebut juga sebagi Rumoh Aceh. Bangunan ini dibangun dengan bentuk panggung dan memiliki atap yang tinggi. Bentuk tersebut ditujukan untuk menghindari binatang buas dan sewaktu ada banjir air tidak masuk ke dalam rumah.', 'sum aceh krong bade.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `telepon` varchar(225) NOT NULL,
  `provinsi` varchar(225) NOT NULL,
  `jumlah` varchar(225) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `username`, `telepon`, `provinsi`, `jumlah`, `tanggal`) VALUES
(1, 'yosi', '087856249352', 'Jawa Timur', '1', '2024-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `role`) VALUES
(16, 'yosi@gmail.com', 'viska', '123', ''),
(17, 'yosefinerc@gmail.com', 'yosi', '202cb962ac59075b964b07152d234b70', 'user'),
(19, 'yosefinkurniawati05@gmail.com', 'yosi5', '202cb962ac59075b964b07152d234b70', 'admin'),
(25, 'yosefinerc@gmail.com', 'yosi', '123', 'admin'),
(26, 'yosefinkurniawati05@gmail.com', 'user', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pulau`
--
ALTER TABLE `pulau`
  ADD PRIMARY KEY (`id_pulau`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id_rumah`),
  ADD UNIQUE KEY `pulau` (`id_pulau`),
  ADD UNIQUE KEY `id_pulau_2` (`id_pulau`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pulau`
--
ALTER TABLE `pulau`
  MODIFY `id_pulau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rumah`
--
ALTER TABLE `rumah`
  ADD CONSTRAINT `fk_pulau` FOREIGN KEY (`id_pulau`) REFERENCES `pulau` (`id_pulau`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
