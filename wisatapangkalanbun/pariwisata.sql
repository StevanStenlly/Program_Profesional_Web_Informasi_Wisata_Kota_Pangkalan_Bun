-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2022 pada 06.06
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `foto_about` text NOT NULL,
  `nama_about` varchar(50) NOT NULL,
  `profil_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `foto_about`, `nama_about`, `profil_about`) VALUES
(7, 'Stevan Stenlly Sinaga1.jpg', 'Stevan Stenlly Sinaga', '<p>Perkenalkan nama saya Stevan Stenlly Sinaga dengan NIM:203020503050. Saya adalah Mahasiswa Jurusan Teknik Informatika di Universitas Palangka Raya.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_admin` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `foto_admin`) VALUES
(1, 'Stenlly', 'Stenlly2020', 'Stevan Stenlly Sinaga1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `email`, `no_hp`, `alamat`) VALUES
(1, 'ti.stevanstenllysinaga@gmail.com', '085350373327', 'Jalan Temanggung Tilung VII No.4 Palangka Raya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_foto` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_foto`, `foto`) VALUES
(1, 'Istana Kuning', 'istana_kuning2.jpg'),
(3, 'Pantai Kubu', 'pantai_kubu.jpg'),
(4, 'Tanjung Keluang', 'tanjung_keluang.jpg'),
(5, 'Kampung Sega', 'kampung_sega3.jpg'),
(6, 'Jurung Tiga', 'jurung_tiga.jpg'),
(7, 'Monumen Palagan Sambi', 'monumen.jpg'),
(9, 'Istana Kuning', 'istana_kuning2.jpg'),
(10, 'Istana Kuning', 'istana_kuning3.jpg'),
(11, 'Istana Kuning', 'istana_kuning4.jpeg'),
(12, 'Istana Kuning', 'istana_kuning5.jpg'),
(13, 'Pantai Kubu', 'pantai_kubu1.jpg'),
(14, 'Pantai Kubu', 'pantai_kubu2.jpg'),
(15, 'Pantai Kubu', 'pantai_kubu3.jpg'),
(16, 'Pantai Kubu', 'pantai_kubu4.png'),
(17, 'Jurung Tiga', 'jurung_tiga2.jpg'),
(18, 'Jurung Tiga', 'jurung_tiga3.jpg'),
(19, 'Jurung Tiga', 'jurung_tiga4.jpg'),
(22, 'Jurung Tiga', 'jurung_tiga1.jpg'),
(23, 'Jurung Tiga', 'jurung_tiga5.jpg'),
(24, 'Kampung Sega', 'kampung_sega1.jpeg'),
(25, 'Kampung Sega', 'kampung_sega2.jpg'),
(26, 'Monumen Palagan Sambi', 'monumen1.jpg'),
(27, 'Monumen Palagan Sambi', 'monumen2.jpg'),
(28, 'Monumen Palagan Sambi', 'monumen3.jpg'),
(29, 'Tanjung Keluang', 'tanjung_keluang1.jpg'),
(30, 'Tanjung Keluang', 'tanjung_keluang3.jpg'),
(31, 'Tanjung Keluang', 'tanjung_keluang4.jpg'),
(32, 'Tanjung Keluang', 'tanjung_keluang5.jpg'),
(33, 'Tanjung Keluang', 'tanjung_keluang2.jpg'),
(36, 'Istana Kuning', 'istana_kuning1.jpg'),
(38, 'Monumen Palagan Sambi', 'monumen4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `informasi` text NOT NULL,
  `hari` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `gambar`, `judul`, `informasi`, `hari`, `waktu`) VALUES
(9, 'pantai_kubu.jpg', 'Pantai Kubu', '<p>Pantai Kubu Merupakan pantai wisata yang letaknya di muara sungai Kumai. Pantai yang menghadap ke Laut Jawa ini menjadi pantai favorit di Kotawaringin Barat. Pantai berpasir putih ini dihiasi oleh pepohonan kelapa, merupakan tempat yang sangat Nyaman untuk bersantai baik pagi hari maupun siang hari. Di pantai kubu kita bisa menikmati olahan berbagai macam hasil laut seperti ikan, kerang, kepiting, udang dan belangkas sambil menikmati minum air kelapa. Untuk memasuki kawasan Pantai Kubu, Anda akan dikenai biaya masuk sebesar Rp. 2000 per orang, ditambah Rp. 1000 jika Anda menggunakan motor atau Rp. 3000 untuk mobil.</p>\r\n', 'Senin - Minggu', ' 09:00 - 17:00 WIB'),
(14, 'istana_kuning.jpg', 'Istana Kuning', '<p>Saat mendengar nama&nbsp;<strong>Istana Kuning</strong>, kemungkinan besar akan terbayangkan sebuah bangunan megah berwarna kuning. Berbeda dengan Istana Maimun di Kota Medan yang juga dikenal sebagai&nbsp;<strong>Istana Kuning</strong>&nbsp;karena arsitekturnya dominan berwarna kuning,&nbsp;<strong>Istana Kuning</strong>&nbsp;yang satu ini tidaklah berwarna kuning kecuali pada gerbangnya saja.&nbsp;<strong>Istana Kuning&nbsp;</strong>yang dimaksud adalah sebuah bangunan indah warisan Kerajaan Kutaringin. Istana ini berada tepat di jantung&nbsp;<strong>Pangkalan Bun, Kotawaringin Barat, Kalimantan Tengah</strong>.</p>\r\n\r\n<p>Penamaan&nbsp;<strong>Istana Kuning&nbsp;</strong>sendiri bukan tanpa alasan. Ternyata, warna kuning adalah warna keramat bagi masyarakat&nbsp;<strong>Kotawaringin</strong>. Keberadaan<strong>&nbsp;Istana Kuning&nbsp;</strong>telah menjadi salah satu suguhan wisata daerah yang istimewa untuk disambangi. Istana ini didirikan pangeran ke-9 dari Kerajaan Kutaringin, yaitu Imanudin yang menjabat pada 1811-1841. Konon,&nbsp;<strong>Istana Kuning</strong>&nbsp;sebenarnya adalah istana kedua yang dibangun di&nbsp;<strong>Kalimantan Tengah</strong>&nbsp;setelah Istana Al Mursari di Kotawaringin Lama. Istana ini merupakan kebanggaan sejarah dan budaya kerajaan Islam di&nbsp;<strong>Kalimantan Tengah</strong>. Berjarak&nbsp;<u>+</u>&nbsp;10 menit menggunakan transportasi darat dari Bandara Iskandar Pangkalan Bun.&nbsp; Apabila anda ingin berkunjung, Istana Kuning setiap hari buka dari pukul 09.30 &ndash; 16.00 WIB dengan tarif masuk hanya Rp. 3.000,- (pelajar) Rp. 5.000,- (wisnus) dan Rp. 10.000,- (wisman).</p>\r\n', 'Senin - Minggu', ' 09:30 - 16:00 WIB'),
(15, 'kampung_sega.jpg', 'Kampung Sega', '<p>Ada banyak tempat yang bisa kamu kunjungi bersama keluarga di Pangkalan Bun tanpa harus keluar kota, salah satunya di Kampung Sega. Kampung Sega terletak di Kelurahan Mendawai, Pangkalan Bun. Berada di tepian Sungai Arut, kamu bisa bersantai sambil menikmati pemandangan sunset yang indah atau jalan &ndash; jalan santai di sepanjang tepian Sungai Arut. di sore hari tempat ini ramai dikunjungi.&nbsp; Bahkan, kalau kamu kelaparan bisa langsung membeli berbagai cemilan yang ada di sekitar.&nbsp;Berkunjung ke Kampung Sega hanya dikenakan biaya parkir saja dan tentunya menjaga kebersihan area tersebut.</p>\r\n', ' Senin - Minggu', '08:00 - 21:00 WIB'),
(16, 'jurung_tiga.jpg', 'Jurung Tiga', '<p>Tempat wisata hutan dengan fasilitas flying fox, spot foto cantik, kolam ikan, dengan edukasi tanaman hutan khas kalimantan. Berjarak&nbsp;<u>+</u>&nbsp;20 menit menggunakan transportasi darat dari kota Pangkalan Bun. Buka setiap hari dari pukul 08.00 sampai dengan pukul 16.30 WIB.&nbsp;Tarif masuknya untuk Wisatawan nusantara Rp. 15.000,- (dewasa) Rp. 10.000,- (anak-anak) Hari Libur/hari Raya Rp.20.000,- sedangkan untuk Wisatawan mancanegara Rp.50.000,-</p>\r\n', 'Senin - Minggu', ' 08:00 - 16.30 WIB'),
(17, 'tanjung_keluang.jpg', 'Tanjung Keluang', '<p>Jika kita berada di Pantai Kubu dan memandang kearah laut, maka akan terlihat semenanjung yang menjorok ke laut, itulah taman wisata Tanjung keluang. Dari pantai kubu, kita bisa menuju ke pantai Tanjung keluang dengan menggunakan perahu kelotok dengan menempuh waktu selama 15-20 menit. Pantai yang dihiasi dengan banyaknya pohon cemara dan pasirnya yang lebih bersih dan putih. Tempat ini juga sangat pas untuk dijadikan tempat camping sambil menggelar tikar dan makan dibawah rerimbunan pohon cemara. Jangan lewatkan untuk menjenguk anak-anak penyu yang pangat lucu dan menggemaskan itu, kita juga bisa melakukan pelapasan penyu ke laut lepas.&nbsp;Untuk ke Tanjung Keluang Anda dapat memesan&nbsp;kapal kayu dengan tarif sebesar Rp10 ribuan per orang dengan tiket masuk hanya Rp5 ribuan.</p>\r\n', ' Senin - Minggu', ' 08:00 - 21:00 WIB'),
(19, 'monumen4.jpg', 'Monumen Palagan Sambi', '<p>Ditempat ini terdapat sebuah bukti sejarah yang menjadi sejarah penting bagi Kota Pangkalan Bun. Bahkan, sangat penting bagi Kalimantan dan Negara Kesatuan Republik Indonesia. Monumen ini meupakan tugu peringatan penerjunan pertama pasukan Angkatan Udara Republik Indonesia (AURI) pada masa pergerakan melawan penjajahan Belanda. Pada monumen ini terdapat prasasti perjuangan para pahlawan dalam membela dan menegakkan negara Republik Indonesia. Selain prasasti, juga terdapat diorama atau kisah yang menggambarkan sebuah cerita relief yang menceritakan kisah perjuangan pasukan Angkatan Udara dalam melawan penjajah Belanda.</p>\r\n', ' Senin - Minggu', ' 08:00 - 21:00 WIB');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
