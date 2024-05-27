-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 06:48 AM
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
(5, 'Papua', 'Papua, adalah provinsi yang terletak di pesisir utara Papua, Indonesia. Provinsi Papua sebelumnya bernama Irian Barat dan Irian Jaya yang mencakup seluruh Tanah Papua bekas Keresidenan Nugini Barat. Ibu kota Papua berada di Kota Jayapura, yang berbatasan langsung dengan negara Papua Nugini.'),
(16, 'ppp', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `id_rumah` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `informasi` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `id_pulau` int(11) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`id_rumah`, `nama`, `informasi`, `gambar`, `id_pulau`, `harga`) VALUES
(1, 'Rumah Adat Aceh', 'Krong Bade disebut juga sebagi Rumoh Aceh. Bangunan ini dibangun dengan bentuk panggung dan memiliki atap yang tinggi. Bentuk tersebut ditujukan untuk menghindari binatang buas dan sewaktu ada banjir air tidak masuk ke dalam rumah.', 'sum aceh krong bade.jpg', 1, 'Rp2.000.000'),
(9, 'Rumah Adat Sumatera Utara', 'Rumah Bolon memiliki makna rumah besar, karena memang ukurannya cukup besar. Bentuk rumah adat ini pada umumnya melambangkan \'Kerbau Berdiri Tegak\'. Bagian ujung atap rumahnya dihiasi dengan tanduk kerbau', 'sumut bolon.jpg', 1, 'Rp2.000.000'),
(10, 'Rumah Adat Sumatera Barat', 'Rumah Gadang memiliki desain atap yang khas berbentuk melengkuk seperti tanduk yang runcing dan lancip. Fungsinya yaitu supaya Rumah Gadang tahan terhadap curahan hujan dan tidak membebani bangunan di bawahnya.', 'sumbar gadang.jpg', 1, 'Rp2.000.000'),
(11, 'Rumah Adat Riau', 'Selaso jatuh kembar sendiri bermakna rumah yang memiliki dua selasar (selaso, salaso) yang lantainya lebih rendah dari ruang tengah.Bangunan rumah ini memiliki keliling yang selaras antara penyangganya dengan lantai yang lebih rendah.', 'sum riau jatuh kembar.jpg', 1, 'Rp2.000.000'),
(12, 'Rumah Adat Kepulauan Riau', 'Dinamakan Rumah Belah Bubung karena bentuk atapnya terbelah dua oleh hubungannya. Rumah ini memiliki tinggi 2 meter dan ditopang oleh beberapa tiang penyangga, dengan bentuk atap seperti pelana kuda.', 'sum kepri belah bubung.jpg', 1, 'Rp2.000.000'),
(13, 'Rumah Adat Bengkulu', 'Rumah Bubungan Lima dibangun tanpa menggunakan paku, melainkan pasak kayu. Rumah adat Bengkulu memiliki ciri khas yang unik yaitu atapnya yang berbentuk limas.', 'sum bengkulu bubungan 5.jpg', 1, 'Rp2.000.000'),
(14, 'Rumah Adat Jambi', 'Rumah adat Kajang Lako ini memiliki ciri khas berbentuk rumah panggung dengan ukuran yang telah ditentukan. Rumah ini dibuat dari bahan kayu dengan atap segitiga dengan ujung atas melengkung.', 'sum jambi kajang leko.jpg', 1, 'Rp2.000.000'),
(15, 'Rumah Adat Lampung', 'Salah satu ciri khas Nuwo Sesat ialah adanya lambang burung Garuda sebagai simbol marga masyarakat Lampung. Nuwo Sesat merupakan balai pertemuan adat tempat para rurwatin (penyimbang) pada saat mengadakan pepung adat (musyawarah).', 'sum lampung nuwao sesat.jpg', 1, 'Rp2.000.000'),
(16, 'Rumah Adat Sumatera Selatan', 'Keunikan rumah adat Sumatera Selatan ini ialah bangunannya yang dihiasi dengan ukiran khas Palembang di bagian kusen, dinding antara ruang kamar, hingga jendela. Kerangka rumah limas juga terbuat dari kayu seru yang langka', 'sumsel rumah limas.jpg', 1, 'Rp2.000.000'),
(17, 'Rumah Adat Banten', 'Dijelaskan bahwa Rumah Sulah Nyanda masih menyatu dengan alam. Rumah adat Banten ini terbuat dari bahan-bahan yang berasal di sekitarnya. Fondasi bangunannya terbuat dari batu dan pada bagian lantainya dibangun dari bambu yang dibelah.', 'sulah nyanda banten.jpg', 2, 'Rp2.100.000'),
(18, 'Rumah Adat Jakarta', 'Rumah Kebaya adalah nama rumah adat Betawi. Nama Rumah Kebaya berasal dari bentuk atap rumahnya yang dari samping terlihat seperti lipatan kebaya.', 'ja jakarta kebaya.jpg', 2, 'Rpp2.100.000'),
(19, 'Rumah Adat Jawa Barat', 'Rumah Adat Sunda Jolopong memiliki ciri khas bagian atap yang berbentuk seperti pelana panjang. Nama Rumah adat Jolopong ini diberikan karena bagian dalam teras rumah ini sengaja dibiarkan kosong tanpa adanya perabotan di dalamnya.', 'jabar jolopong.jpg', 2, 'Rp2.100.000'),
(20, 'Rumah Adat Jawa Tengah', 'Rumah adat Joglo memiliki jendela besar dengan jumlah yang banyak. Pintu utama rumah adat Joglo terletak pada bagian tengah rumah yang kemudian dibangun sejajar dengan ruangan di bagian belakang rumah.', 'jateng joglo.jpg', 2, 'Rp2.100.000'),
(21, 'Rumah Adat D.I.Y', 'Rumah Joglo Jompongan memiliki karakter atap dengan dua susunan berbentuk bubungan yang dibuat memanjang ke kiri dan kanan. Selain itu, Rumah Joglo Jompongan juga memiliki keunikan tersendiri berupa denal lantai berbentuk bujur sangkar, dan penggunaan pintu.', 'jawa diy joglo.jpg', 2, 'Rp2.100.000'),
(22, 'Rumah Adat Jawa Timur', 'Rumah Joglo dilengkapi dengan 36 saka atau tiang, di mana empat di antaranya merupakan saka guru atau tiang besar utama. Sementara pada bagian atapnya, Rumah Joglo Sinom sendiri memiliki sisi yang kemudian dibagi ke dalam beberapa bagian dengan tiga tingkatan dengan satu bubungan.', 'jatim joglo.jpg', 2, 'Rp2.100.000'),
(23, 'Rumah Adat Kalimantan Barat', 'Rumah Panjang mempunyai ciri-ciri berbentuk panggung, memanjang. Memiliki berbagi persayaratan seperti, bagian hulunya harusnya searah dengan matahari terbit dan sebelah hilirnya ke arah matahari terbenam.', 'kalimantan barat rumah panjang .jpg', 3, 'Rp1.900.000'),
(24, 'Rumah Adat Kalimantan Timur', 'Rumah Lamin memiliki ukuran panjang 300 meter dan lebar 15 meter. Memiliki banyak ruangan, yang bisa ditinggali sekitar 25-30 kelapa keluarga atau 100 orang.', 'kalimantan timur lamin.jpg', 3, 'Rp1.900.000'),
(25, 'Rumah Adat Kalimantan Selatan', 'Bubungan Tinggi adalah bumbungan atap rumah Banjar yang merupakan atap pelana dengan sudut 45° yang relatif curam dengan posisi melintang.', 'kalimantan selatan bubungan tinggi .jpg', 3, 'Rp1.900.000'),
(26, 'Rumah Adat Kalimantan Tengah', 'Rumah Betang yang biasa dihuni oleh 100-200 orang atau lebih kurang 50 kepala keluarga hanya memiliki satu dapur yang digunakan secara bersama-sama oleh penghuni Betang.', 'kalimantan tengah  betang.jpg', 3, 'Rp1.900.000'),
(27, 'Rumah Adat Kalimantan Utara ', 'Rumah baloy dilengkapi dengan beragam ukiran terutama di bagian risplang dan atap. Ukiran biasanya terkait dengan kehidupan laut yang menggambarkan bahwa masyarakat Tidung adalah masyarakat nelayan dan pelaut.', 'kalimantan utara baloy.jpg', 3, 'Rp1.900.000'),
(28, 'Rumah Adat Gorontalo', 'Pada bagian dalam rumah adat Dulohupa bergaya terbuka tanpa sekat. Selain itu, ada anjungan yang digunakan sebagai tempat untuk peristirahatan raja dan keluarga.', 'sul gorontalo dulohupa.jpg', 4, 'Rp2.200.000'),
(29, 'Rumah Adat Sulawesi Utara', 'Rumah Pewaris atau Walewangko adalah rumah adat daerah Minahasa, Provinsi Sulawesi Utara. Kesimetrisan yang dimiliki rumah adat Walewangko diperkuat dengan adanya dua buah tangga di bagian depan pintu masuk.', 'sulut walwangko.jpg', 4, 'Rp2.200.000'),
(30, 'Rumah Adat Sulawesi Barat', 'Rumah Boyang memiliki peletakan tiang yang tidak ditancapkan ke tanah, melainkan diletakkan di atas batu datar guna mencegah pelapukan. Rumah ini memiliki dua tangga, satu di bagian depan dan satu lagi di belakang.', 'sulbar boyang.jpg', 4, 'Rp2.200.000'),
(31, 'Rumah Adat Sulawesi Tengah', 'Rumah Souraja memiliki atap yang berbentuk seperti piramida segitiga. Pada bagian depan dan belakang dari atap tersebut akan ditutup dengan papan yang dihiasi dengan ukiran yang disebut sebagai panapiri.', 'sulteng souraja.jpg', 4, 'Rp2.200.000'),
(32, 'Rumah Adat Sulawesi Tenggara', 'Rumah Buton ialah istana yang dijadikan oleh para raja dan ratu dari Kesultanan Buton sebagai tempat tinggal. Dikenal pula dengan istilah Malige, atau mahligai, bermakna istana atau Kamali yang berarti kediaman para raja.', 'sultra buton.jpg', 4, 'Rp2.200.000'),
(33, 'Rumah Adat Sulawesi Selatan', 'Rumah Tongkonan memiliki keunikan adanya patung kepala kerbau yang terdapat di bagian atas rumah. Tongkonan berasal dari kata tongkon yang artinya \'duduk\' dan penambahan akhiran {-an} bisa diartikan sebagai tempat.', 'sulsel tongkonan.jpg', 4, 'Rp2.200.000'),
(34, 'Rumah Adat Papua', 'Kariwari adalah salah satu rumah adat khas Papua dengan bentuk limas segi delapan, yakni rumah adat masyarakat Tobati-Enggros yang bermukim di sekitar Teluk Youtefa dan Danau Sentani, Jayapura.', 'papua kariwari.jpg', 5, 'Rp2.300.000'),
(35, 'Rumah Adat Papua Barat', 'Rumah kaki seribu adalah rumah adat penduduk suku Arfak yang menetap di Kabupaten Manokwari, Papua Barat. Dijuluki demikian karena menggunakan banyak tiang penyangga di bawahnya, jika dilihat seperti hewan kaki seribu.', 'pabar mod aki aksa.jpg', 5, 'Rp2.300.000'),
(36, 'Rumah Adat Papua Pegunungan Tengah', 'Rumah Honai dibangun oleh Suku Dani yang sangat bergantung pada alam. Namun dikarenakan kondisi alam yang tidak menentu, mereka lalu memutuskan untuk membuat rumah.', 'pateng honai.jpg', 5, 'Rp2.300.000'),
(37, 'Rumah Adat Selatan', 'Jew dibuat dari kayu local dan rotan serta daun nipah sebagai atap. Dan kulit kayu dimanfaatkan sebagai lantai rumah. Jew itu memiliki tujuh hingga 10 pintu dengan satu “Wair” (tungku utama).', 'pasel jew.jpg', 5, 'Rp2.300.000'),
(38, 'Rumah Adat Papua Tengah', 'Papua Tengah memiliki rumah adat bernama Karapao. Rumah yang dihuni Suku Kamoro asal Mimika ini dibangun untuk melangsungkan ritual adat kepercayaan masyarakat setempat.', 'pateng2 karapao.jpg', 5, 'Rp2.300.000'),
(39, 'Rumah Adat Papua Barat Daya', 'Kambik adalah rumah adat yang dijadikan sebagai tempat penyelenggaraan pendidikan adat Suku Moi. Pendidikan adat tersebut merupakan pendidikan yang diselenggarakan sebelum masuknya agama Kristen ke tanah Malamoi.', 'pabarday kambik.jpg', 5, 'Rp2.300.000');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_rumah` int(225) NOT NULL,
  `id_user` int(225) NOT NULL,
  `jumlah` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(16, 'yosi@gmail.com', 'viska', '123', 'admin'),
(17, 'yosefinerc@gmail.com', 'yosi', '202cb962ac59075b964b07152d234b70', 'user'),
(19, 'yosefinkurniawati05@gmail.com', 'yosi5', '202cb962ac59075b964b07152d234b70', 'admin'),
(25, 'yosefinerc@gmail.com', 'yosi', '123', 'admin'),
(26, 'yosefinkurniawati05@gmail.com', 'user', '123', 'user'),
(32, 'yosefinerc@gmail.com', 'papa', '123', 'user');

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
  ADD KEY `pulau` (`id_pulau`) USING BTREE,
  ADD KEY `id_pulau_2` (`id_pulau`) USING BTREE;

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `fk_tiket_rumah` (`id_rumah`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id_pulau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rumah`
--
ALTER TABLE `rumah`
  ADD CONSTRAINT `fk_pulau` FOREIGN KEY (`id_pulau`) REFERENCES `pulau` (`id_pulau`) ON DELETE CASCADE;

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `fk_tiket_rumah` FOREIGN KEY (`id_rumah`) REFERENCES `rumah` (`id_rumah`),
  ADD CONSTRAINT `fk_tiket_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
