-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 01.58
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(15) NOT NULL,
  `alamat` text NOT NULL,
  `provisi` text NOT NULL,
  `kota` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kode_pos` int(15) NOT NULL,
  `jarak_rumah` varchar(20) NOT NULL,
  `trasnportasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal_sekolah`
--

CREATE TABLE `asal_sekolah` (
  `id_asal_sekolah` int(15) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `jenis_sekolah` varchar(20) NOT NULL,
  `status_sekolah` varchar(20) NOT NULL,
  `kota_sekolah` varchar(20) NOT NULL,
  `skhun` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(30) NOT NULL,
  `berkas_umum` varchar(50) NOT NULL,
  `berkas_khusus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(15) NOT NULL,
  `id_jalur` int(15) NOT NULL,
  `nama_jadwal` text NOT NULL,
  `tgl_jadwal_mulai` date NOT NULL,
  `tgl_jadwal_selesai` date NOT NULL,
  `status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_jalur`, `nama_jadwal`, `tgl_jadwal_mulai`, `tgl_jadwal_selesai`, `status`) VALUES
(1, 0, 'pendataran', '0000-00-00', '0000-00-00', 0),
(2, 0, 'BTQ', '0000-00-00', '0000-00-00', 1),
(3, 3, 'Reguler', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jalur`
--

CREATE TABLE `jalur` (
  `id_jalur` int(15) NOT NULL,
  `jalur` text NOT NULL,
  `persyaratan_umum` text NOT NULL,
  `persyaratan_khusus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jalur`
--

INSERT INTO `jalur` (`id_jalur`, `jalur`, `persyaratan_umum`, `persyaratan_khusus`) VALUES
(1, 'Reguler', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_user` int(15) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin'),
(2, 'Luthfi', 'luthfi', '12345', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_ortu` int(15) NOT NULL,
  `id_peserta` int(15) NOT NULL,
  `no_kk` int(30) NOT NULL,
  `no_ktp_ayah` int(30) NOT NULL,
  `nama_ayah` text NOT NULL,
  `tempat_lahir_ayah` text NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pendidikan_ayah` text NOT NULL,
  `pekerjaan_ayah` text NOT NULL,
  `no_hp_ayah` int(20) NOT NULL,
  `no_ktp_ibu` int(30) NOT NULL,
  `nama_ibu` text NOT NULL,
  `tempat_lahir_ibu` text NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pendidikan_ibu` text NOT NULL,
  `pekerjaan_ibu` text NOT NULL,
  `no_hp_ibu` int(20) NOT NULL,
  `penghasilan_ortu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(15) NOT NULL,
  `nisn` varchar(25) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama_siswa` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `hobi` text NOT NULL,
  `cita-cita` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `jumlah_saudara` int(10) NOT NULL,
  `anak ke` int(5) NOT NULL,
  `id_asal_sekolah` int(15) NOT NULL,
  `id_alamat` int(15) NOT NULL,
  `id_jalur` int(15) NOT NULL,
  `id_berkas` int(15) NOT NULL,
  `id_prestasi` int(15) NOT NULL,
  `id_status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nisn`, `nik`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `hobi`, `cita-cita`, `email`, `no_hp`, `asal_sekolah`, `jumlah_saudara`, `anak ke`, `id_asal_sekolah`, `id_alamat`, `id_jalur`, `id_berkas`, `id_prestasi`, `id_status`) VALUES
(16, '1216017', '', 'Muhammad Luthfirrahman', '', '2020-05-15', '', '', '', '', '081312566813', 'SMP 4 Rancaekek', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(15) NOT NULL,
  `id_peserta` int(15) NOT NULL,
  `bidang_prestasi` text NOT NULL,
  `tingkat_prestasi` text NOT NULL,
  `peringkat` varchar(15) NOT NULL,
  `tahun_prestasi` varchar(15) NOT NULL,
  `keterangan` text NOT NULL,
  `berkas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(15) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `asal_sekolah`
--
ALTER TABLE `asal_sekolah`
  ADD PRIMARY KEY (`id_asal_sekolah`);

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_jalur` (`id_jalur`);

--
-- Indeks untuk tabel `jalur`
--
ALTER TABLE `jalur`
  ADD PRIMARY KEY (`id_jalur`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id_ortu`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD KEY `id_asal_sekolah` (`id_asal_sekolah`),
  ADD KEY `id_alamat` (`id_alamat`),
  ADD KEY `id_jalur` (`id_jalur`),
  ADD KEY `id_berkas` (`id_berkas`),
  ADD KEY `id_prestasi` (`id_prestasi`),
  ADD KEY `id_status` (`id_status`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `asal_sekolah`
--
ALTER TABLE `asal_sekolah`
  MODIFY `id_asal_sekolah` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jalur`
--
ALTER TABLE `jalur`
  MODIFY `id_jalur` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_ortu` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
