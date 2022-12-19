-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2022 pada 14.33
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `iddetail` int(11) NOT NULL,
  `idjenispakaian` int(11) NOT NULL,
  `kd_transaksi` int(11) NOT NULL,
  `berat` double DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `bayar` double DEFAULT NULL,
  `biayaambil` double DEFAULT NULL,
  `biayaantar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpemesanan`
--

CREATE TABLE `detailpemesanan` (
  `iddetailpemesanan` int(11) NOT NULL,
  `pemesanan_id` int(11) NOT NULL,
  `idjenispakaian` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenispakaian`
--

CREATE TABLE `jenispakaian` (
  `idjenispakaian` int(11) NOT NULL,
  `jenis` varchar(45) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `statusbiaya` enum('perkilo','perpasang') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenispakaian`
--

INSERT INTO `jenispakaian` (`idjenispakaian`, `jenis`, `harga`, `statusbiaya`) VALUES
(1, 'Pakaian Biasa', 5000, 'perkilo'),
(2, 'Selimut', 5000, 'perkilo'),
(3, 'Bad Cover', 25000, 'perkilo'),
(4, 'Jas', 10000, 'perkilo'),
(5, 'Sepatu', 25000, 'perpasang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `kd_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(45) DEFAULT NULL,
  `bagian` varchar(45) DEFAULT NULL,
  `iduser` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`kd_pegawai`, `nama_pegawai`, `bagian`, `iduser`) VALUES
(1, ' ADMIN SD IT Wash', 'Administrasi', 2),
(2, 'Carolus Rico Aldeantoro', 'Administrasi', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kd_pelanggan` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `jk` varchar(45) DEFAULT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`kd_pelanggan`, `nama`, `alamat`, `no_hp`, `jk`, `iduser`) VALUES
(22, 'CAROLUS RICO ALDEANTORO', 'Perum Citra Ringin Mas B-43 Babadan,RT/RW 008/003,Purwomartani,Kalasan,Sleman,yogyakarta', '085155222106', 'Pria', 19),
(23, 'Samuel Richard P', 'Krodan,Maguwoharjo,kec.Depok,kabupaten Sleman', '082191607863', 'Pria', 20),
(31, 'Titus Guritno', 'Sebuduh Kec.Kembayan Kabupaten Sanggau,Kalimantan Barat', '085822627248', 'Pria', 28),
(32, 'Trasisius Risto Ardianto', 'Purworejo Kec. Purworejo,Kabupaten Purworejo,Jawa Tengah', '082242064790', 'Pria', 29),
(33, 'Yohana Evadolla', 'Nanga Tebidah Kec. Kayan Hulu,Kabupaten Sintang,Kalimantan Barat', '081347552928', 'Perempuan', 30),
(34, 'Elisabeth Tiara Dewanti', 'Klaten Kabupaten Klaten,Jawa Tengah', '081326218471', 'Perempuan', 31),
(35, 'Khristiandi Segala', 'Sukabumi Kabupaten Sukabumi,Jawa Barat', '082122514920', 'Pria', 32);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `kd_pemesanan` varchar(20) NOT NULL,
  `tgl_pemesanan` date DEFAULT NULL,
  `kd_pelanggan` int(11) NOT NULL,
  `status` enum('Boking','Proses','Selesai','Batal') DEFAULT 'Boking'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `kd_profile` int(11) NOT NULL,
  `nama_laundry` varchar(45) DEFAULT NULL,
  `alamat_laundry` varchar(105) DEFAULT NULL,
  `no_tlp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`kd_profile`, `nama_laundry`, `alamat_laundry`, `no_tlp`) VALUES
(1, 'SD IT Wash', 'Jl.Sempu I, Pucanganom, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584', '082197568934');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pemesanan` int(11) NOT NULL,
  `kd_transaksi` int(11) NOT NULL,
  `kd_pegawai` int(11) NOT NULL,
  `tgl_ambil` date DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `jenis` enum('Admin','Member') NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `jenis`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(19, 'Alde', 'b586edd6d2ce2c0981e95980eaf66a1b', 'Admin'),
(20, 'Samuel', '332532dcfaa1cbf61e2a266bd723612c', 'Member'),
(28, 'Titus', '6bead9669b57c4bc84c4bb1c7d711a0a', 'Member'),
(29, 'Risto', 'b4e4cfbdf73746dfa4ac9f89147bd83a', 'Member'),
(30, 'Dolla', '59101a86226b9c7abd2d171f0ac38229', 'Member'),
(31, 'Tiara', '0a57258559de00695ffb0f1d46bba388', 'Member'),
(32, 'Andi', '182ae9795e595835317407b253159e8e', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`iddetail`),
  ADD KEY `fk_detail_jenispakaian1_idx` (`idjenispakaian`),
  ADD KEY `fk_detail_transaksi1_idx` (`kd_transaksi`);

--
-- Indeks untuk tabel `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  ADD PRIMARY KEY (`iddetailpemesanan`),
  ADD KEY `fk_detailpemesanan_pemesanan1_idx` (`pemesanan_id`),
  ADD KEY `fk_detailpemesanan_jenispakaian1_idx` (`idjenispakaian`);

--
-- Indeks untuk tabel `jenispakaian`
--
ALTER TABLE `jenispakaian`
  ADD PRIMARY KEY (`idjenispakaian`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`kd_pegawai`),
  ADD KEY `fk_pegawai_user1_idx` (`iduser`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`),
  ADD UNIQUE KEY `kd_pelanggan_3` (`kd_pelanggan`),
  ADD KEY `fk_pelanggan_user1_idx` (`iduser`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `kd_pelanggan` (`kd_pelanggan`),
  ADD KEY `kd_pelanggan_2` (`kd_pelanggan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pemesanan_pelanggan_idx` (`kd_pelanggan`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`kd_profile`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_transaksi`),
  ADD KEY `fk_transaksi_pegawai1_idx` (`kd_pegawai`),
  ADD KEY `fk_transaksi_pemesanan1_idx` (`id_pemesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail`
--
ALTER TABLE `detail`
  MODIFY `iddetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  MODIFY `iddetailpemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `jenispakaian`
--
ALTER TABLE `jenispakaian`
  MODIFY `idjenispakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `kd_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `kd_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `kd_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kd_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
