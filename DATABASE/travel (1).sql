-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 02:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `nik` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `ktp` varchar(100) DEFAULT NULL,
  `idakun` enum('user','pegawai','admin') NOT NULL,
  `tanggal_diinput` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `nik`, `username`, `password`, `ktp`, `idakun`, `tanggal_diinput`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '20201213130434ABSEN.PNG', 'admin', '2020-12-13 17:20:36'),
(2, 'sofiya', '12345', 'sofi', 'sofi123', '20210105140747rawa gede.jpg', 'user', '2021-01-04 07:37:07'),
(3, 'raden', '123', 'raden', 'raden', '20210105125240wonderland.jpg', 'pegawai', '2021-01-05 18:52:40'),
(4, 'ika', '3458964689302', 'ikany', 'ika12345', '20210107104459Capture.PNG', 'user', '2021-01-07 16:44:59'),
(5, 'gumilar', '123', 'gumilar', '123', '20210107105035ABSEN 2.PNG', 'user', '2021-01-07 16:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nama_hotel` varchar(80) NOT NULL,
  `gambar_hotel` varchar(800) NOT NULL,
  `tanggal_diinput` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nama_hotel`, `gambar_hotel`, `tanggal_diinput`) VALUES
(1, 'Resinda Hotel', '20201224125557resinda hotel.jpg', '2020-12-24 18:55:57'),
(2, 'Brits Hotel', '20201224125708download (1).jpg', '2020-12-24 18:57:08'),
(3, 'Batiqa Hotel', '20201224125738batiqa hotel.jpg', '2020-12-24 18:57:38'),
(4, 'Novotel', '20201224125754Novotel.jpg', '2020-12-24 18:57:54'),
(5, 'Mercure Hotel', '20201224125811mercure hotel.jpg', '2020-12-24 18:58:11'),
(6, 'Swissbell Hotel', '20201224125908download.jpg', '2020-12-24 18:59:08'),
(7, 'akshaya hotel', '20201224130005download (2).jpg', '2020-12-24 19:00:05'),
(8, 'Amarilis Hotel', '20201224130041download (3).jpg', '2020-12-24 19:00:41'),
(9, 'Hotel Grand Karawang Indah', '2020122413030342350408.jpg', '2020-12-24 19:03:03'),
(10, 'Hotel Grand Pangestu', '20201224130631download (4).jpg', '2020-12-24 19:06:31'),
(11, 'Resort Kampung Turis', '20201224130740IMG_20191224_213535-825x510.jpg', '2020-12-24 19:07:40'),
(12, 'favehotel Karawang', '20201224131008Fave-Hotel-Karawang.jpg', '2020-12-24 19:10:08'),
(13, 'Prime Plaza Hotel', '2020122413121564061253.jpg', '2020-12-24 19:12:15'),
(14, 'OYO Sentraland', '20201224131317download (5).jpg', '2020-12-24 19:13:17'),
(15, 'Delonix Hotel', '20201224131510Y964823036.jpg', '2020-12-24 19:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `nama_kendaraan` varchar(80) NOT NULL,
  `gambar_kendaraan` varchar(800) NOT NULL,
  `tanggal_diinput` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama_kendaraan`, `gambar_kendaraan`, `tanggal_diinput`) VALUES
(3, 'Mobil Elf Travel', '20201224124716elf.jpg', '2020-12-24 18:47:16'),
(4, 'Mobil Minibus Avansa', '202012241253262552236539.jpg', '2020-12-24 18:53:26'),
(5, 'Mobil Minus Bus APV', '20201224125347images.jpg', '2020-12-24 18:53:47'),
(6, 'Mobil Mini Bus Alfard', '20201224125432download.jpg', '2020-12-24 18:54:32'),
(7, 'Mobil Mini Bus Hiace Elf', '20201224125521rental_mobil_minibus_hiace_elf_dan_medium_bus_di_nemob_1486974573_5bdba9aa.jpg', '2020-12-24 18:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(80) NOT NULL,
  `nama_wisata1` varchar(80) NOT NULL,
  `gambar_wisata1` varchar(800) NOT NULL,
  `nama_wisata2` varchar(80) NOT NULL,
  `gambar_wisata2` varchar(800) NOT NULL,
  `nama_hotel` varchar(80) NOT NULL,
  `gambar_hotel` varchar(800) NOT NULL,
  `nama_restoran` varchar(80) NOT NULL,
  `gambar_restoran` varchar(800) NOT NULL,
  `nama_kendaraan` varchar(80) NOT NULL,
  `gambar_kendaraan` varchar(800) NOT NULL,
  `keterangan` varchar(800) NOT NULL,
  `harga` varchar(80) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama_paket`, `nama_wisata1`, `gambar_wisata1`, `nama_wisata2`, `gambar_wisata2`, `nama_hotel`, `gambar_hotel`, `nama_restoran`, `gambar_restoran`, `nama_kendaraan`, `gambar_kendaraan`, `keterangan`, `harga`, `tanggal_dibuat`) VALUES
(1, 'Paket 1', 'Curug Bandung', '20201224111722curug bandung.jpg', 'Pantai Tanjung Baru', '20201224111800pantai tanjung baru.jpg', 'Brits Hotel', '20201224125708download (1).jpg', 'Aneka Baru Resto', '20201224121417aneka baru.jpg', 'Mobil Elf Travel', '20201224124716elf.jpg', '3 Hari 2 Malam', '2500000', '2021-01-05 18:18:09'),
(2, 'Paket 2', 'Danau Cipule', '20201224111836danau cipule.jpg', 'Vihara Shia Jin Ku Poh', '20201224111918vihara sian djin kupoh.jpg', 'Hotel Grand Karawang Indah', '2020122413030342350408.jpg', 'Hai wang chinese restaurant', '20201224122205Hai-Wang-Chinese-Restaurant.jpg', 'Mobil Elf Travel', '20201224124716elf.jpg', '3 Hari 2 Malam', '1000000', '2021-01-05 18:19:52'),
(3, 'Paket 3', 'Candi Jiwa', '20201224112013candi jiwa.jpg', 'Green Canyon', '20201224112311green cnn.png', 'Resort Kampung Turis', '20201224130740IMG_20191224_213535-825x510.jpg', 'Resto Kampung Turis', '20201224122837resto kampung turis.jpg', 'Mobil Minibus Avansa', '202012241253262552236539.jpg', '3 Hari 2 Malam', '3000000', '2021-01-05 18:21:57'),
(4, 'Paket 4', 'Waterboom Kampung Wisata Curug Cigentis', '20201224112347waterbom curug cigentis.jpg', 'Monumen Kebulatan Tekad Rengasdengklok', '20201224112418monumen kebulatan rengas dengklok.jpg', 'Novotel', '20201224125754Novotel.jpg', 'Lebak Sari Indah', '20201224122311Lebak-Sari-Indah.jpg', 'Mobil Minus Bus APV', '20201224125347images.jpg', '3 Hari 2 Malam', '2800000', '2021-01-05 18:26:19'),
(5, 'Paket 5', 'Taruma Leisure Water Park', '20201224112444waterboom green taruma.jpg', 'Pantai Tanjung Pakis', '20201224112518tanjung pakis.png', 'Mercure Hotel', '20201224125811mercure hotel.jpg', 'Resto Sindang Reret', '20201224123144Sindang-Reret-Restaurant.jpg', 'Mobil Mini Bus Alfard', '20201224125432download.jpg', '3 Hari 2 Malam', '5000000', '2021-01-05 18:28:23'),
(6, 'Paket 6', 'Pantai Samudera Baru', '20201224112554samudra baru.jpg', 'Curug Cigentis', '20201224112632curug cigentis.jpg', 'OYO Sentraland', '20201224131317download (5).jpg', 'Lesehan Mang Ajo', '20201224122336Lesehan-mang-Ajo.jpg', 'Mobil Mini Bus Hiace Elf', '20201224125521rental_mobil_minibus_hiace_elf_dan_medium_bus_di_nemob_1486974573_5bdba9aa.jpg', '3 Hari 2 Malam', '1800000', '2021-01-05 18:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `nama_paket` varchar(80) NOT NULL,
  `nama_wisata1` varchar(80) NOT NULL,
  `gambar_wisata1` varchar(800) NOT NULL,
  `nama_wisata2` varchar(80) NOT NULL,
  `gambar_wisata2` varchar(800) NOT NULL,
  `nama_hotel` varchar(80) NOT NULL,
  `gambar_hotel` varchar(800) NOT NULL,
  `nama_restoran` varchar(80) NOT NULL,
  `gambar_restoran` varchar(800) NOT NULL,
  `nama_kendaraan` varchar(80) NOT NULL,
  `gambar_kendaraan` varchar(800) NOT NULL,
  `keterangan` varchar(800) NOT NULL,
  `harga` float NOT NULL,
  `tiket` float NOT NULL,
  `total` float NOT NULL,
  `dp` varchar(800) NOT NULL,
  `lunas` varchar(800) NOT NULL,
  `tanggal_in` varchar(80) NOT NULL,
  `tanggal_out` varchar(80) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `username`, `nama_paket`, `nama_wisata1`, `gambar_wisata1`, `nama_wisata2`, `gambar_wisata2`, `nama_hotel`, `gambar_hotel`, `nama_restoran`, `gambar_restoran`, `nama_kendaraan`, `gambar_kendaraan`, `keterangan`, `harga`, `tiket`, `total`, `dp`, `lunas`, `tanggal_in`, `tanggal_out`, `status`, `tanggal_dibuat`) VALUES
(1, 'admin', 'Paket 1', 'Curug Bandung', '20201224111722curug bandung.jpg', 'Pantai Tanjung Baru', '20201224111800pantai tanjung baru.jpg', 'Brits Hotel', '20201224125708download (1).jpg', 'Aneka Baru Resto', '20201224121417aneka baru.jpg', 'Mobil Elf Travel', '20201224124716elf.jpg', '3 Hari 2 Malam', 2500000, 2, 5000000, '', '', '2021-01-10', '2021-01-12', 'Transaksi Berhasil', '2020-01-05 18:42:20'),
(2, 'sofi', 'Paket 1', 'Curug Bandung', '20201224111722curug bandung.jpg', 'Pantai Tanjung Baru', '20201224111800pantai tanjung baru.jpg', 'Brits Hotel', '20201224125708download (1).jpg', 'Aneka Baru Resto', '20201224121417aneka baru.jpg', 'Mobil Elf Travel', '20201224124716elf.jpg', '3 Hari 2 Malam', 2500000, 2, 5000000, '', '', '2021-01-06', '2021-01-08', 'Transaksi Berhasil', '2021-02-05 19:24:36'),
(3, 'sofi', 'Paket 4', 'Waterboom Kampung Wisata Curug Cigentis', '20201224112347waterbom curug cigentis.jpg', 'Monumen Kebulatan Tekad Rengasdengklok', '20201224112418monumen kebulatan rengas dengklok.jpg', 'Novotel', '20201224125754Novotel.jpg', 'Lebak Sari Indah', '20201224122311Lebak-Sari-Indah.jpg', 'Mobil Minus Bus APV', '20201224125347images.jpg', '3 Hari 2 Malam', 2800000, 2, 5600000, '', '', '2021-01-12', '2021-01-14', 'Transaksi Berhasil', '2021-01-07 16:17:49'),
(4, 'gumilar', 'Paket 2', 'Danau Cipule', '20201224111836danau cipule.jpg', 'Vihara Shia Jin Ku Poh', '20201224111918vihara sian djin kupoh.jpg', 'Hotel Grand Karawang Indah', '2020122413030342350408.jpg', 'Hai wang chinese restaurant', '20201224122205Hai-Wang-Chinese-Restaurant.jpg', 'Mobil Elf Travel', '20201224124716elf.jpg', '3 Hari 2 Malam', 1000000, 2, 2000000, '20210107110354flwochart.png', '20210107110444ABSEN 2.PNG', '2021-01-08', '2021-01-10', 'Transaksi Berhasil', '2021-01-07 16:51:16'),
(5, 'gumilar', 'Paket 2', 'Danau Cipule', '20201224111836danau cipule.jpg', 'Vihara Shia Jin Ku Poh', '20201224111918vihara sian djin kupoh.jpg', 'Hotel Grand Karawang Indah', '2020122413030342350408.jpg', 'Hai wang chinese restaurant', '20201224122205Hai-Wang-Chinese-Restaurant.jpg', 'Mobil Elf Travel', '20201224124716elf.jpg', '3 Hari 2 Malam', 1000000, 3, 3000000, '', '', '2021-01-26', '2021-01-26', 'Mengajukan Pemesanan', '2021-01-26 12:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `gambar` varchar(800) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `tanggal_diinput` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `gambar`, `judul`, `keterangan`, `tanggal_diinput`) VALUES
(1, '20201221061551img.png', 'TRAVEL USIK RENT CAR', 'Travel Usik Rent Car adalah perusahaan yang bergerak dalam bidang bisnis perjalanan wisata atau liburan. Perusahaan kami menyediakan paket wisata di kabupaten karawang beserta hotel, restoran dan sewa kendaraan.', '2020-12-21 12:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id` int(11) NOT NULL,
  `nama_restoran` varchar(80) NOT NULL,
  `gambar_restoran` varchar(800) NOT NULL,
  `tanggal_diinput` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id`, `nama_restoran`, `gambar_restoran`, `tanggal_diinput`) VALUES
(1, 'Aneka Baru Resto', '20201224121417aneka baru.jpg', '2020-12-24 18:14:17'),
(2, 'Hai wang chinese restaurant', '20201224122205Hai-Wang-Chinese-Restaurant.jpg', '2020-12-24 18:22:05'),
(3, 'Lebak Sari Indah', '20201224122311Lebak-Sari-Indah.jpg', '2020-12-24 18:23:11'),
(4, 'Lesehan Mang Ajo', '20201224122336Lesehan-mang-Ajo.jpg', '2020-12-24 18:23:36'),
(5, 'Resto Sunda Cibiuk', '20201224122408Makanan-Khas-Sunda-Cibiuk.jpg', '2020-12-24 18:24:08'),
(6, 'Resto Haji Dirja Walahar', '20201224122446Pepes-Jambal-Walahar-Haji-Dirja.jpg', '2020-12-24 18:24:46'),
(7, 'Resto Ratu Penyet', '20201224122514Ratu-Penyet.jpg', '2020-12-24 18:25:14'),
(8, 'Resto Alam Sari Cikampek', '20201224122818resto alam sari cikampek.jpg', '2020-12-24 18:28:18'),
(9, 'Resto Kampung Turis', '20201224122837resto kampung turis.jpg', '2020-12-24 18:28:37'),
(10, 'Resto Telaga Desa', '20201224122920resto telaga desa.jpg', '2020-12-24 18:29:20'),
(11, 'Resto Alam Ceria', '20201224123029Restoran-Alam-Ceria.jpg', '2020-12-24 18:30:29'),
(12, 'Resto Alam Sari', '20201224123104restoran-alam-sari.jpg', '2020-12-24 18:31:04'),
(13, 'Resto Sea Food Teh Empop', '20201224123122Seafood-Kiloan-Teh-Empop.jpg', '2020-12-24 18:31:22'),
(14, 'Resto Sindang Reret', '20201224123144Sindang-Reret-Restaurant.jpg', '2020-12-24 18:31:44'),
(15, 'Tenkai japanese restaurant ', '20201224123237Tenkai-Japanese-Restaurant-Karawang.jpg', '2020-12-24 18:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama_wisata` varchar(80) NOT NULL,
  `gambar_wisata` varchar(800) NOT NULL,
  `tanggal_diinput` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `gambar_wisata`, `tanggal_diinput`) VALUES
(1, 'Curug Bandung', '20201224111722curug bandung.jpg', '2020-12-24 17:17:22'),
(2, 'Pantai Tanjung Baru', '20201224111800pantai tanjung baru.jpg', '2020-12-24 17:18:00'),
(3, 'Danau Cipule', '20201224111836danau cipule.jpg', '2020-12-24 17:18:36'),
(4, 'Vihara Shia Jin Ku Poh', '20201224111918vihara sian djin kupoh.jpg', '2020-12-24 17:19:18'),
(5, 'Candi Jiwa', '20201224112013candi jiwa.jpg', '2020-12-24 17:20:13'),
(6, 'Green Canyon', '20201224112311green cnn.png', '2020-12-24 17:23:11'),
(7, 'Waterboom Kampung Wisata Curug Cigentis', '20201224112347waterbom curug cigentis.jpg', '2020-12-24 17:23:47'),
(8, 'Monumen Kebulatan Tekad Rengasdengklok', '20201224112418monumen kebulatan rengas dengklok.jpg', '2020-12-24 17:24:18'),
(9, 'Taruma Leisure Water Park', '20201224112444waterboom green taruma.jpg', '2020-12-24 17:24:44'),
(10, 'Pantai Tanjung Pakis', '20201224112518tanjung pakis.png', '2020-12-24 17:25:18'),
(11, 'Pantai Samudera Baru', '20201224112554samudra baru.jpg', '2020-12-24 17:25:54'),
(12, 'Curug Cigentis', '20201224112632curug cigentis.jpg', '2020-12-24 17:26:32'),
(13, 'Curug Cikarapyak', '20201224112711curug cikarapyak.jpg', '2020-12-24 17:27:11'),
(14, 'Curug Cipanundaan', '20201224112742curug cipanundaan.jpg', '2020-12-24 17:27:42'),
(15, 'Curug Cikoleangkak', '20201224112812curug cikoleangkak.jpg', '2020-12-24 17:28:12'),
(16, 'Danau Kalimati', '20210105120629danau kalimati.jpg', '2021-01-05 18:04:40'),
(17, 'Situ Kamojing', '20201224112941situ kamojing.jpg', '2020-12-24 17:29:41'),
(18, 'Monumen Rawa Gede', '20201224113034rawa gede.jpg', '2020-12-24 17:30:34'),
(19, 'Area Galuh Mas Karawang Central Plaza', '20201224113123galuh mas.jpg', '2020-12-24 17:31:23'),
(20, 'Wonderland Adventure Water Park', '20201224113201wonderland.jpg', '2020-12-24 17:32:01'),
(21, 'Sentra Kerajinan Boneka Cikampek', '20201224113228sentra kerajinan boneka.jpg', '2020-12-24 17:32:28'),
(22, 'Bendungan Walahar', '20201224113426walahar.jpg', '2020-12-24 17:34:26'),
(23, 'Puncak Sempur', '20201224113505puncak sempur.jpg', '2020-12-24 17:35:05'),
(24, 'Gunung Sanggabuana', '20201224113540gunung sangga buana.png', '2020-12-24 17:35:40'),
(25, 'Situ Cibayat', '20201224113613situ cibayat.jpg', '2020-12-24 17:36:13'),
(26, 'Candi Blandongan', '20201224113641candi blandogan.jpg', '2020-12-24 17:36:41'),
(27, 'Masjid Agung Karawang', '20201224114001masjid-agung-karawang-01_wm.jpg', '2020-12-24 17:40:01'),
(28, 'Bukit Kembar Puncak Pinus', '20201224114106KAKIAN-3.jpg', '2020-12-24 17:41:06'),
(29, 'Pantai Sedari', '20201224114231pantai sedari.jpg', '2020-12-24 17:42:31'),
(30, 'Marigold Garden Taman Kincir Angin di Tamelang', '20201224114837images.jpg', '2020-12-24 17:48:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
