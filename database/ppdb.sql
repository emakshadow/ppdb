-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2020 pada 04.19
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
-- Struktur dari tabel `aktifasi`
--

CREATE TABLE `aktifasi` (
  `id_aktifasi` int(15) NOT NULL,
  `id_jadwal` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aktifasi`
--

INSERT INTO `aktifasi` (`id_aktifasi`, `id_jadwal`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` text NOT NULL,
  `kota` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kode_pos` varchar(15) NOT NULL,
  `jarak_rumah` varchar(20) NOT NULL,
  `transportasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kode_pos`, `jarak_rumah`, `transportasi`) VALUES
('05 ', 'Griya Rancaindah', 'Jawa Barat', 'Bandung Timur', 'Rancaekek', 'Jelegong', '14035', '3-5 Km', 'Antar Jemput'),
('07 ', 'Griya Rancaindah', 'Jawa Barat', 'Bandung Timur', 'Rancaekek', 'Jelegong', '14035', '5-10 Km', 'Mobil Pribadi'),
('08 ', 'Griya Rancaindah', 'Jawa Barat', 'Bandung Timur', 'Rancaekek', 'Jelegong', '14035', '< 1 Km', 'Jalan Kaki'),
('11 ', 'Griya Rancaindah', 'Jawa Barat', 'Bandung Timur', 'Rancaekek', 'Jelegong', '14035', '< 1 Km', 'Jalan Kaki'),
('12 ', 'Griya Rancaindah', 'Jawa Barat', 'Bandung Timur', 'Rancaekek', 'Jelegong', '14035', '5-10 Km', 'Jalan Kaki'),
('14 ', 'Griya Rancaindah', 'Jawa Barat', 'Bandung Timur', 'Rancaekek', 'Jelegong', '14035', '< 1 Km', 'Jalan Kaki'),
('15 ', 'Griya Rancaindah', 'Jawa Barat', 'Bandung Timur', 'Rancaekek', 'Jelegong', '14035', '< 1 Km', 'Antar Jemput'),
('4', 'Griya Rancaindah', 'Jawa Barat', 'Bandung Timur', 'Rancaekek', 'Jelegong', '14035', '> 10 Km', 'Motor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal_sekolah`
--

CREATE TABLE `asal_sekolah` (
  `id_asal_sekolah` varchar(25) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `jenis_sekolah` varchar(20) NOT NULL,
  `status_sekolah` varchar(20) NOT NULL,
  `kota_sekolah` varchar(20) NOT NULL,
  `skhun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `asal_sekolah`
--

INSERT INTO `asal_sekolah` (`id_asal_sekolah`, `asal_sekolah`, `jenis_sekolah`, `status_sekolah`, `kota_sekolah`, `skhun`) VALUES
('05 ', 'Taruna Karya', 'SMP', 'Negeri', 'Cibiru', '111'),
('07 ', 'SMP 1 Rancaekek', 'SMP', 'Negeri', 'Batu Nunggal', '000765'),
('08 ', 'SMK 1 Bandung', 'SMP', 'Negeri', 'Ujung Berung', '111'),
('11 ', 'SMP 1 Rancaekek', 'SMP', 'Negeri', 'Cimahi', '54353'),
('12 ', 'SMP 5 Rancaekek', 'SMP', 'Negeri', 'Kencana', '111'),
('14 ', 'SMK 1 Bandung', 'SMP', 'Negeri', 'Bandung', '54353'),
('15 ', 'SMP 4 Rancaekek', 'SMP', 'Negeri', 'Bandung', '54353'),
('4', 'SMP 4 Rancaekek', 'SMP', 'Negeri', 'Rancaekek', '04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(15) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tanggal`, `file`) VALUES
(4, 'PPDB MAN 2 Kota Bandung', '<span style=\"font-weight: 700; color: rgb(85, 85, 85); font-family: rubik, Arial, sans-serif; font-size: 24px; text-align: center;\">PPDB di MAN 2 Kota Bandung, dilaksanakan tanggal&nbsp;<span style=\"background-color: rgb(255, 255, 0);\">11 Mei -&nbsp; Juni 2020</span>.</span>                     \r\n                    ', '2020-05-10', 'image2.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `informasi_tes` text NOT NULL,
  `info_terkini` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `informasi_tes`, `info_terkini`) VALUES
(0, '', ''),
(1, 'Pendaftar lulus tes BTQ yang memilih jalur akademik / PPT harus mengikuti tes tulis berupa tes pilihan berganda untuk materi IPA SMP/MTs, IPS SMP/MTs, PAI, Matematika,  Bahasa Indonesia dan Bahasa Inggris menggunakan media online.\r\n                       Silahkan hubungi panitia untuk informasi lebih lanjut<br>\r\n\r\n                       Panitia : +6282240996684', 'Hallo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(15) NOT NULL,
  `nama_jadwal` text NOT NULL,
  `tgl_jadwal_mulai` date NOT NULL,
  `tgl_jadwal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_jadwal`, `tgl_jadwal_mulai`, `tgl_jadwal_selesai`) VALUES
('0', '', '0000-00-00', '0000-00-00'),
('1', 'Pendaftaran BTQ Dan Registrasi Ulang', '0000-00-00', '0000-00-00'),
('2', 'Pengumuman Jalur Non Tes', '0000-00-00', '0000-00-00'),
('3', 'Tes Tulis', '0000-00-00', '0000-00-00'),
('4', 'Pengumuman Tes Tulis', '0000-00-00', '0000-00-00');

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
(1, 'AKADEMIK', ' Persyaratan Umum <br>\r\n                            1. Surat Keterangan Lulus dari SMP/MTs <br>\r\n                            2. Surat Keterangan NISN/Screenshote dari DAPODIK/EMIS <br>\r\n                            3. Melampirkan portofolio prestasi akademik/nonakademik (Bila Ada) <br>\r\n                            4. Melampirkan portofolio ekstrakurikuler (Bila Ada) <br>\r\n                            5. Fotocopy raport kelas 9 <br>\r\n', ''),
(2, 'PRESTASI', '  Persyaratan Umum: <br>\r\n                                1. Surat Keterangan NISN Aktif /screenshoot NISN dari Dapodik/Emis dari sekolah <br>\r\n                                2. Fotocopy Nilai Rapot kelas 9 <br>\r\n                                3. Portofolio kegiatan ekstrakurikuler <br>\r\n                                4. Surat Keterangan Lulus dari SMP/MTs <br>\r\n                                5. Portofolio prestasi akademik/non akademik <br>\r\n', 'Persyaratan Khusus: <br>\r\n                                1. Melampirkan sertifikat atau foto yang terkait dengan kompetensi/prestasi <br>'),
(3, 'KETM', 'Persyaratan Umum: <br>\r\n                                1. Portofolio kegiatan ekstrakurikuler <br>\r\n                                2. Portofolio prestasi akademik/non akademik <br>\r\n                                3. Surat Keterangan Lulus dari SMP/MTs <br>\r\n                                4. Fotocopy Nilai Rapot kelas 9 <br>\r\n                                5. Surat Keterangan NISN Aktif /screenshoot NISN dari Dapodik/Emis dari sekolah <br>\r\n', 'Persyaratan Khusus: <br>\r\n\r\n                                1. Memiliki Kartu Indonesia Pintar atau SKTEM <br>'),
(4, 'PPT', 'Persyaratan Umum: <br>\r\n                                1. Portofolio kegiatan ekstrakurikuler <br>\r\n                                2. Surat Keterangan NISN aktif/screenshoote dari DAPODIK/EMIS <br>\r\n                                3. Lulus Tes BTQ online <br>\r\n                                4. Portofolio prestasi akademik/non akademik <br>\r\n                                5. Surat Keterangan Lulus dari SMP/MTs <br>\r\n                                6. Potofocpy rapot kelas 9 <br>', 'Persyaratan Khusus: <br>\r\n                                1. Surat Keputusan Pindah Tugas Orangtua/SK Mengajar / Sertifikat Profesi Guru ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_user` int(15) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(3, 'Luthfi Rahman', 'luthfirrahman696@gmail.com', 'mandaba999', 'admin'),
(4, 'Yayan', 'yayan@gmail.com', 'mandaba999', 'admin'),
(5, 'Denis', 'mohamaddenisjs@gmail.com', 'mandaba999', 'admin'),
(6, 'Momon', 'momon@gmail.com', 'mandaba999', 'admin'),
(7, 'Kokom', 'kokom@gmail.com', 'mandaba999', 'admin'),
(8, 'IKEU', 'ikeu@gmail.com', 'mandaba999', 'admin'),
(9, 'Santoso', 'santoso@gmail.com', 'mandaba999', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_ortu` varchar(25) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `no_ktp_ayah` varchar(30) NOT NULL,
  `nama_ayah` text NOT NULL,
  `tempat_lahir_ayah` text NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pendidikan_ayah` text NOT NULL,
  `pekerjaan_ayah` text NOT NULL,
  `no_hp_ayah` varchar(20) NOT NULL,
  `no_ktp_ibu` varchar(30) NOT NULL,
  `nama_ibu` text NOT NULL,
  `tempat_lahir_ibu` text NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pendidikan_ibu` text NOT NULL,
  `pekerjaan_ibu` text NOT NULL,
  `no_hp_ibu` varchar(20) NOT NULL,
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
  `cita` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `jumlah_saudara` varchar(10) NOT NULL,
  `anak_ke` varchar(5) NOT NULL,
  `berkas` text NOT NULL,
  `id_asal_sekolah` varchar(25) NOT NULL,
  `id_alamat` varchar(25) NOT NULL,
  `id_ortu` varchar(25) NOT NULL,
  `id_jalur` int(15) NOT NULL,
  `id_status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(15) NOT NULL,
  `status` text NOT NULL,
  `pengumuman` text NOT NULL,
  `informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status`, `pengumuman`, `informasi`) VALUES
(0, 'Belum Dinilai', 'Pengumuman hasil BTQ belum tersedia, Pengumuman akan diumumkan paling cepat 2 hari setelah anda mengikuti tes BTQ.', 'Anda akan dihubungi oleh panitia melalui media whatsapp untuk melakukan tes BTQ'),
(1, 'Lulus BTQ', 'Selamat anda Dinyatakan <b>LULUS TES BTQ</b>.', 'Silahkan isi form yang telah disediakan untuk melengkapi data diri. (Halaman form ada di menu)'),
(2, 'Lulus Jalur Non Akademik', 'Selamat anda Dinyatakan <b>LULUS Jalur Non AKADEMIK (PRESTASI/KETM)</b>.', 'Anda telah lulus menjadi siswa MAN 2 Bandung melalui jalur non AKADEMIK (PRESTASI/KETM)'),
(8, 'Lulus Jalur PPT (Tes Tulis)', 'Selamat anda Dinyatakan <b>LULUS Jalur PPT (Tes Tulis)</b>.', 'Anda telah lulus menjadi siswa MAN 2 Bandung melalui jalur PPT'),
(9, 'Lulus Jalur AKADEMIK (Tes Tulis)', 'Selamat anda Dinyatakan <b>LULUS Jalur AKADEMIK (Tes Tulis)</b>.', 'Anda telah lulus menjadi siswa MAN 2 Bandung melalui jalur akademik (Tes Tulis)'),
(10, 'Tidak Lulus BTQ', 'Maaf Anda dinyatakan <b>TIDAK LULUS TES BTQ</b>.', 'Tidak ada informasi yang di tampilkan\r\n'),
(20, 'Tidak Lulus Jalur Non Akademik', 'Maaf anda dinyatakan <b>TIDAK LOLOS MELALUI JALUR NON AKADEMIK (Prestasi Dan KETM) </b>. Jalur diubah secara otomatis menjadi jalur akademik sehingga anda dapat mengikuti ujian tulis yang akan dilaksanakan sesuai jadwal yang telah ditetapkan', ''),
(80, 'Tidak Lulus Jalur PPT (Tes Tulis)', 'Maaf Anda dinyatakan <b>TIDAK LULUS JALUR PPT</b>.', ''),
(90, 'Tidak Lulus Jalur Akademik (Tes Tulis)', 'Maaf Anda dinyatakan <b>TIDAK LULUS JALUR AKADEMIK (TES TULIS)</b>.', '');

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
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

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
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD KEY `id_asal_sekolah` (`id_asal_sekolah`),
  ADD KEY `id_alamat` (`id_alamat`),
  ADD KEY `id_jalur` (`id_jalur`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_ortu` (`id_ortu`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jalur`
--
ALTER TABLE `jalur`
  MODIFY `id_jalur` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
