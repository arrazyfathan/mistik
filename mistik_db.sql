-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2019 pada 05.19
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mistik_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(6) UNSIGNED NOT NULL,
  `id_donatur` int(6) NOT NULL,
  `jumlah` int(20) DEFAULT NULL,
  `jenis_bantuan` enum('uang','barang') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_donatur` varchar(30) DEFAULT NULL,
  `program_donasi` varchar(30) DEFAULT NULL,
  `bentuk_donasi` varchar(30) DEFAULT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `jumlah_barang` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_donatur`, `program_donasi`, `bentuk_donasi`, `nama_barang`, `jumlah_barang`, `status`) VALUES
(1, 'hexated', 'Peduli setan2', 'Sandang', 'Nasi', '4 kotak', 'Belum Diterima'),
(34, 'hexated', 'Peduli setan2', 'Sandang', 'nasi ramas22', '2222222', 'Telah Terkirim'),
(35, 'coba', 'Banjir Jakarta Selatan', 'Pangan', 'Susu', '12 liter', 'Telah Terkirim'),
(36, 'dimas', 'Banjir Sumatra', 'Sandang', 'Baju', '12', 'Telah Terkirim'),
(37, 'hexated', 'Peduli setan2', 'Sandang', 'Baju', '200', 'Belum Diterima'),
(38, 'sauqi', 'Peduli setan2', 'Pangan', 'Baju', '9', 'Telah Terkirim'),
(39, 'hendrik', 'Bomb Bunuh Diri Bali', 'Sandang', 'nasi kotak', '3 kotak', 'Belum Diterima'),
(40, 'hendrik', 'Banjir Jakarta Selatan', 'Sandang', 'mobil', '100 unit', 'Belum Diterima'),
(41, 'aliefalwan', 'Banjir Sumatra', 'Pangan', 'Indomie kare ayam', '1 container', 'Belum Diterima'),
(42, 'abc', 'Peduli Rakyat Palu', 'Pangan', 'gwer', 'sddfrt', 'Telah Terkirim'),
(43, 'hexated', 'Banjir Sumatra', 'Sandang', 'baju', '100 pcs', 'Telah Terkirim'),
(44, 'hexated', 'Banjir Sumatra', 'Pangan', 'mie instan', '200 dus', 'Telah Terkirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bdpb`
--

CREATE TABLE `bdpb` (
  `id` int(2) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bdpb`
--

INSERT INTO `bdpb` (`id`, `nama`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bencana`
--

CREATE TABLE `bencana` (
  `id_bencana` int(6) UNSIGNED NOT NULL,
  `jumlah_posko` int(5) DEFAULT NULL,
  `nama_program` varchar(30) DEFAULT NULL,
  `jenis_bencana` enum('Gempa bumi','Letusan gunung api','Tsunami','Tanah longsor','Banjir','Banjir bandang','Kekeringan','Kebakaran','Kebakaran hutan dan lahan','Angin puting beliung','Gelombang pasang atau badai','Abrasi','Kecelakaan transportasi','Kecelakaan industri','Kejadian Luar Biasa (KLB)','Konflik Sosial','Aksi Teror','Sabotase') DEFAULT NULL,
  `img_bencana` varchar(255) DEFAULT 'default.jpg',
  `jumlah_pengungsi` int(6) DEFAULT NULL,
  `deskripsi` text,
  `lokasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bencana`
--

INSERT INTO `bencana` (`id_bencana`, `jumlah_posko`, `nama_program`, `jenis_bencana`, `img_bencana`, `jumlah_pengungsi`, `deskripsi`, `lokasi`) VALUES
(1, 10, 'Peduli setan', 'Tsunami', '', 140, 'Tsunami berbahaya bung', 'Lombok'),
(2, 5, 'Banjir Sumatra', 'Banjir', '', 300, 'Lorem Ipsum', 'Sumatra'),
(3, 1, 'Peduli Rakyat Palu', 'Tsunami', '', 500, 'Lorem Ipsum', 'Palu'),
(4, 15, 'Bantu Rakyat Sinabung', 'Letusan gunung api', '', 400, 'Lorem Ipsum', 'Sinabung'),
(5, 30, 'Banjir Jakarta Selatan', 'Banjir', '', 300, 'Lorem Ipsum ', 'Jakarta Selatan'),
(6, 20, 'Bomb Bunuh Diri Bali', 'Aksi Teror', '', 200, 'Bomb Bunuh Diri Bali', 'Bali'),
(7, 16, 'Peduli setan2', 'Tsunami', '', 140, 'Hai', NULL),
(8, NULL, '12213', '', NULL, 1232, '1223', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` int(6) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_telepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `nama_lengkap`, `username`, `email`, `password`, `alamat`, `no_telepon`) VALUES
(18, 'Sarangheo', 'hexated', 'hexated@gmail.com', '795605e59c64e5b1cb0616ba3748eee4', 'Lubuak sikapiang', '082499111111'),
(20, 'bujang', 'Faulina', 'nadia@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Lubuak sikapiang arepinang', '082285133154'),
(21, 'Fitri Evalina', 'Alfarisy', 'fachri@gmail.com', '795605e59c64e5b1cb0616ba3748eee4', 'Garudamas', '082213841234'),
(22, 'Fitri Evalina', 'yudish', 'yudis@gmail.com', '795605e59c64e5b1cb0616ba3748eee4', 'Garudamas', '082213841234'),
(23, 'Fitri Evalina', 'nasya', 'nasya@gmail.com', '795605e59c64e5b1cb0616ba3748eee4', 'Garudamas', '082213841234'),
(24, 'Fitri Evalina', 'wendy', 'wendy@gmail.com', '795605e59c64e5b1cb0616ba3748eee4', 'Garudamas', '082213841234'),
(26, 'muhammad iqbal syah', 'ampon', 'ampon@gmail.com', 'bloke14', 'Garudamas', '082213841234'),
(27, 'Agung Fernandesh', 'hexated', 'arrazy@gmail.com', '795605e59c64e5b1cb0616ba3748eee4', 'Garudamas', '082285133213'),
(28, 'Agung Fernandesh', 'hexated', 'arrazy@gmail.com', '795605e59c64e5b1cb0616ba3748eee4', 'Garudamas', '082285133213'),
(29, 'Dimas Ariyoga', 'dimas', 'dimas@mail.com', '51947e3cf64ee746b6f2c73d174d525a', 'Jogja', '09812712'),
(30, 'Sauqi Gantengz', 'sauqi', 'sauqikhatami083@gmail.com', '5290b1958a698721d2862c2bbb6fdf96', 'Serah', '085123910239'),
(31, 'hendrik', 'hendrik', 'hendrik@gmail.com', '795605e59c64e5b1cb0616ba3748eee4', 'garudamas', '082285133214'),
(32, 'Alief Alwan', 'aliefalwan', 'aliefalwan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'jakal', '0274664433'),
(33, 'asdf', 'abc', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'asdf', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelogistik`
--

CREATE TABLE `kelogistik` (
  `id_logistik` int(6) UNSIGNED NOT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `jenis_barang` enum('sandang','pangan','papan','') DEFAULT NULL,
  `stok_kebutuhan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelogistik`
--

INSERT INTO `kelogistik` (`id_logistik`, `nama_barang`, `jenis_barang`, `stok_kebutuhan`) VALUES
(1, 'Tenda', 'pangan', '5 Lusin'),
(2, 'Nasi', 'pangan', '5 Karung Beras'),
(3, 'Nasi Kotak', 'pangan', '5 kotak'),
(5, 'Nasi', 'pangan', '5 kotak'),
(6, 'Nasi Kotak', 'pangan', '5 Lusin'),
(7, 'Mie Instan', '', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengungsi`
--

CREATE TABLE `pengungsi` (
  `id_pengungsi` int(6) UNSIGNED NOT NULL,
  `id_bencana` int(4) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jenis` enum('ringan','sedang','berat') DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `jumlah` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(6) UNSIGNED NOT NULL,
  `id_posko` int(4) NOT NULL,
  `nama_depan` varchar(30) DEFAULT NULL,
  `nama_belakang` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `jenis_identitas` enum('KTP','SIM','Lainnya') DEFAULT NULL,
  `no_identitas` varchar(30) DEFAULT NULL,
  `alamat` text,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') DEFAULT NULL,
  `ttl` varchar(30) DEFAULT NULL,
  `agama` enum('Islam','Kristen','Budha','Hindu') DEFAULT NULL,
  `pos` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `id_posko`, `nama_depan`, `nama_belakang`, `username`, `email`, `no_telepon`, `password`, `level`, `jenis_identitas`, `no_identitas`, `alamat`, `jenis_kelamin`, `ttl`, `agama`, `pos`) VALUES
(9, 1, 'razaq', 'supriadi', 'hexated', 'hexated@gmail.com', '082213841234', '795605e59c64e5b1cb0616ba3748eee4', '2', 'KTP', '1231118573449209', 'Garudamas', 'Laki-laki', 'batusangkar 31-10-1998', 'Islam', '2134'),
(10, 1, 'Arrazy', 'Fathan', 'arrazy123', 'arrazy@gmail.com', '082285133111', '795605e59c64e5b1cb0616ba3748eee4', '2', 'KTP', '1929304029382271', 'Jl. Kediri Agung Pulor', 'Laki-laki', 'Solo 12 desember 1998', 'Kristen', '2112'),
(11, 2, 'adit', 'syah', 'adit12', 'adit@gmail.com', '081334422612', '795605e59c64e5b1cb0616ba3748eee4', '2', 'KTP', '1000928384757684', 'Pekanbaru Jl. pekan', 'Laki-laki', '11 January 1999', 'Islam', '2112'),
(12, 3, 'Kelvin', 'Yudisputra', 'kelvin13', 'kelvin@gmail.com', '082285133222', '795605e59c64e5b1cb0616ba3748eee4', '2', 'KTP', '1222336903940123', 'Lintau aguang duo', 'Laki-laki', '1 February 1999', 'Budha', '2112'),
(14, 4, 'Arrazy', 'Fathan', 'arrazy123', 'arrazy@gmail.com', '082285133111', '795605e59c64e5b1cb0616ba3748eee4', '2', 'KTP', '1929304029382271', 'Jl. Kediri Agung Pulor', 'Laki-laki', 'Solo 12 desember 1998', 'Kristen', '2112'),
(15, 3, 'adit', 'syah', 'adit12', 'adit@gmail.com', '081334422612', '795605e59c64e5b1cb0616ba3748eee4', '2', 'KTP', '1000928384757684', 'Pekanbaru Jl. pekan', 'Laki-laki', '11 January 1999', 'Islam', '2112'),
(16, 1, 'Arrazy', 'Fathan', 'arrazy123', 'arrazy@gmail.com', '082285133213', '795605e59c64e5b1cb0616ba3748eee4', '2', 'KTP', '1231118573449209', 'Garudamas', 'Laki-laki', 'batusangkar 31-10-1998', 'Islam', '2112'),
(17, 2, '', 'Fathan', 'arrazy123', 'arrazy@gmail.com', '082285133213', '795605e59c64e5b1cb0616ba3748eee4', '2', 'KTP', '1231118573449209', 'Garudamas', 'Laki-laki', 'batusangkar 31-10-1998', 'Islam', '2112'),
(18, 0, 'Dimas', 'Ariyoga', 'dhim', 'ds@mail.com', '12312121', 'dd238a36e4488659de0ad79fdf293f1f', '2', 'KTP', '1233121331231', 'Aceh', 'Laki-laki', 'Aceh 12 April 1980', 'Islam', '213121'),
(19, 0, 'Sauqi', 'Khatami', 'sauqi', 'sauqikhatami213@gmail.com', '05111231241', '5290b1958a698721d2862c2bbb6fdf96', '2', 'SIM', '66666666666666666666666666666', 'hyy', 'Laki-laki', 'Banjarbaru, 20 Mei 1999', 'Islam', '909212');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posko`
--

CREATE TABLE `posko` (
  `id_posko` int(4) UNSIGNED NOT NULL,
  `nama_posko` varchar(30) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posko`
--

INSERT INTO `posko` (`id_posko`, `nama_posko`, `lokasi`) VALUES
(1, 'Agung Posko', NULL),
(2, 'Podomoro Posko', NULL),
(3, 'Siluman Posko', NULL),
(4, 'Takmir Posko', NULL),
(5, 'Mualim Posko', NULL),
(6, 'Agung Posko', NULL),
(7, 'Podomoro Posko', NULL),
(8, 'Siluman Posko', NULL),
(9, 'Zarak P', NULL),
(11, 'zarak d', NULL),
(12, 'Zarak Pea', NULL),
(14, 'Zarak Peasa', NULL),
(15, 'Zarak Peaere', NULL),
(16, 'zarak cada', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `uang`
--

CREATE TABLE `uang` (
  `id_uang` int(11) NOT NULL,
  `nama_donatur` varchar(30) DEFAULT NULL,
  `program_donasi` varchar(30) DEFAULT NULL,
  `jumlah` int(12) DEFAULT NULL,
  `metode_pembayaran` varchar(30) DEFAULT NULL,
  `nama_bank` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uang`
--

INSERT INTO `uang` (`id_uang`, `nama_donatur`, `program_donasi`, `jumlah`, `metode_pembayaran`, `nama_bank`) VALUES
(2, 'hexated', 'Banjir Jakarta Selatan', 500000, 'Transfer Bank', 'Bank BCA'),
(3, 'hexated', 'Peduli setan2', 13141, 'Transfer Bank', 'Bank BCA'),
(4, 'hexated', 'Peduli setan2', 13141, 'Transfer Bank', 'Bank BCA'),
(5, 'hexated', 'Banjir Jakarta Selatan', 1000, 'Transfer Bank', 'Bank CIMB Niaga'),
(6, 'hexated', 'Peduli setan2', 10000, 'Transfer Bank', 'Bank BCA'),
(8, 'hexated', 'Bomb Bunuh Diri Bali', 500, 'Transfer Bank', 'Bank BRI'),
(9, 'hexated', 'Bantu Rakyat Sinabung', 500, 'Transfer Bank', 'Bank CIMB Niaga'),
(10, 'hexated', 'Banjir Sumatra', 100000, 'Transfer Bank', 'Bank BCA'),
(11, 'nasya', 'Bomb Bunuh Diri Bali', 4, 'Transfer Bank', 'Bank BRI'),
(12, 'hexated', 'Banjir Jakarta Selatan', 2, 'Transfer Bank', 'Bank BCA'),
(13, 'hexated', 'Peduli Rakyat Palu', 30000, 'Transfer Bank', 'Bank BRI'),
(14, 'hexated', 'Peduli Rakyat Palu', 30000, 'Transfer Bank', 'Bank BRI'),
(15, 'hexated', 'Peduli setan', 40000, 'Transfer Bank', 'Bank CIMB Niaga'),
(16, 'hexated', 'Banjir Sumatra', 40000, 'Transfer Bank', 'Bank BCA'),
(17, 'hexated', 'Peduli setan', 4000, 'Transfer Bank', 'Bank BNI'),
(18, 'hexated', 'Peduli setan', 1000, 'Transfer Bank', 'Bank BNI'),
(19, 'dimas', 'Banjir Jakarta Selatan', 12000, 'Transfer Bank', 'Bank Mandiri'),
(20, 'dimas', 'Peduli setan', 2000000, 'Transfer Bank', 'Bank BCA'),
(21, 'hexated', '12213', 1200000, 'Transfer Bank', 'Bank Mandiri'),
(22, 'sauqi', 'Peduli setan2', 90000, 'Transfer Bank', 'Bank BCA'),
(23, 'hendrik', 'Banjir Jakarta Selatan', 1000, 'Transfer Bank', 'Bank BNI'),
(24, 'hendrik', 'Bomb Bunuh Diri Bali', 1000000, 'Transfer Bank', 'Bank BCA'),
(25, 'aliefalwan', 'Bomb Bunuh Diri Bali', 1000000000, 'Transfer Bank', 'Bank Mandiri'),
(26, 'aliefalwan', 'Bomb Bunuh Diri Bali', 1000000000, 'Transfer Bank', 'Bank Mandiri'),
(27, 'aliefalwan', 'Bomb Bunuh Diri Bali', 1000000000, 'Transfer Bank', 'Bank Mandiri'),
(28, 'hexated', 'Banjir Sumatra', 1000000, 'Transfer Bank', 'Bank Mandiri'),
(29, 'hexated', 'Banjir Sumatra', 1000000, 'Transfer Bank', 'Bank Mandiri'),
(30, 'hexated', 'Bomb Bunuh Diri Bali', 10000, 'Transfer Bank', 'Bank BCA'),
(31, 'hexated', 'Banjir Sumatra', 1000000, 'Transfer Bank', 'Bank Mandiri');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`),
  ADD UNIQUE KEY `id_donatur` (`id_donatur`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `bdpb`
--
ALTER TABLE `bdpb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id_bencana`);

--
-- Indeks untuk tabel `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indeks untuk tabel `kelogistik`
--
ALTER TABLE `kelogistik`
  ADD PRIMARY KEY (`id_logistik`);

--
-- Indeks untuk tabel `pengungsi`
--
ALTER TABLE `pengungsi`
  ADD PRIMARY KEY (`id_pengungsi`),
  ADD UNIQUE KEY `id_bencana` (`id_bencana`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `posko`
--
ALTER TABLE `posko`
  ADD PRIMARY KEY (`id_posko`);

--
-- Indeks untuk tabel `uang`
--
ALTER TABLE `uang`
  ADD PRIMARY KEY (`id_uang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `bdpb`
--
ALTER TABLE `bdpb`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bencana`
--
ALTER TABLE `bencana`
  MODIFY `id_bencana` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id_donatur` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `kelogistik`
--
ALTER TABLE `kelogistik`
  MODIFY `id_logistik` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengungsi`
--
ALTER TABLE `pengungsi`
  MODIFY `id_pengungsi` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `posko`
--
ALTER TABLE `posko`
  MODIFY `id_posko` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `uang`
--
ALTER TABLE `uang`
  MODIFY `id_uang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
