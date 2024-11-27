-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2024 pada 07.01
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-dinas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) DEFAULT NULL,
  `isi_artikel` text DEFAULT NULL,
  `gambar_artikel` varchar(30) DEFAULT NULL,
  `tgl_artikel` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi_berita` int(11) DEFAULT NULL,
  `gambar_berita` varchar(30) DEFAULT NULL,
  `tgl_berita` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id_book` int(11) NOT NULL,
  `judul_book` varchar(255) DEFAULT NULL,
  `file_book` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dok_rencana`
--

CREATE TABLE `tbl_dok_rencana` (
  `id_dok` int(11) NOT NULL,
  `judul_dok` varchar(255) DEFAULT NULL,
  `file_dok` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ebook`
--

CREATE TABLE `tbl_ebook` (
  `id_ebook` int(2) NOT NULL,
  `judul_ebook` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ebook`
--

INSERT INTO `tbl_ebook` (`id_ebook`, `judul_ebook`) VALUES
(1, 'Pembangunan Manusia Berbasis Gender'),
(2, 'Mengakhiri Kekerasan Terhadap Perempuan dan Anak'),
(3, 'Buku Saku Mendidik Anak di Era Digital'),
(4, 'Buku Perlindungan Anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_glosary`
--

CREATE TABLE `tbl_glosary` (
  `id_glosary` int(11) NOT NULL,
  `judul_glosary` varchar(25) DEFAULT NULL,
  `materi_glosary` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_glosary`
--

INSERT INTO `tbl_glosary` (`id_glosary`, `judul_glosary`, `materi_glosary`) VALUES
(1, 'Sex', 'Sex adalah perbedaan-perbedaan biologis antara laki-laki dan perempuan . Contoh: perempuan dapat melahirkan, laki-laki memproduksi sperma.'),
(2, 'Gender ', 'Gender adalah hubungan sosial antara laki-laki dan perempuan. Gender merujuk pada hubungan antara laki-laki dan perempuan, anak laki-laki dan anak perempuan, dan bagaimana hubungan sosial ini dikonstruksikan. Peran gender bersifat dinamis dan berubah antar waktu.'),
(3, 'Kesetaraan Gender', 'Kesetaraan Gender adalah hasil dari ketiadaan diskriminasi berdasarkan jenis kelamin atas dasar kesempatan, alokasi sumber daya atau manfaat dan akses terhadap pelayanan.'),
(5, 'Pengarusutamaan Gender', 'Pengarusutamaan Gender adalah proses untuk menjamin perempuan dan laki-laki mempunyai akses dan kontrol terhadap sumber daya, memperoleh manfaat pembangunan dan pengambilan keputusan yang sama di semua tahapan proses pembangunan dan seluruh proyek, program dan kebijakan pemerintah.'),
(6, 'Kesadaran Gender', 'Kesadaran Gender adalah suatu pengertian bahwa ada faktor-faktor sosial yang menentukan antara laki-laki dan perempuan atas dasar tingkah laku, yang mempengaruhi kemampuan mereka untuk mengakses dan mengontrol sumber daya. Kesadaran ini membutuhkan penerapan melalui analisa gender menjadi proyek, program dan kegiatan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sop`
--

CREATE TABLE `tbl_sop` (
  `id_sop` int(11) NOT NULL,
  `judul_sop` varchar(255) DEFAULT NULL,
  `file_sop` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sop`
--

INSERT INTO `tbl_sop` (`id_sop`, `judul_sop`, `file_sop`) VALUES
(1, 'SOP Penanganan Keberatan Permohonan Informasi', 'PKPI.pdf'),
(2, 'SOP Permohonan Informasi', 'PI.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Galuh', 'admin1', 'admin123', 1),
(2, 'Ilham', 'user1', 'user123', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id_book`);

--
-- Indeks untuk tabel `tbl_dok_rencana`
--
ALTER TABLE `tbl_dok_rencana`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indeks untuk tabel `tbl_ebook`
--
ALTER TABLE `tbl_ebook`
  ADD PRIMARY KEY (`id_ebook`);

--
-- Indeks untuk tabel `tbl_glosary`
--
ALTER TABLE `tbl_glosary`
  ADD PRIMARY KEY (`id_glosary`);

--
-- Indeks untuk tabel `tbl_sop`
--
ALTER TABLE `tbl_sop`
  ADD PRIMARY KEY (`id_sop`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_dok_rencana`
--
ALTER TABLE `tbl_dok_rencana`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ebook`
--
ALTER TABLE `tbl_ebook`
  MODIFY `id_ebook` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_glosary`
--
ALTER TABLE `tbl_glosary`
  MODIFY `id_glosary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_sop`
--
ALTER TABLE `tbl_sop`
  MODIFY `id_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
