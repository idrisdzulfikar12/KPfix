-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2024 pada 06.44
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
  `file_book` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_book`
--

INSERT INTO `tbl_book` (`id_book`, `judul_book`, `file_book`) VALUES
(3, 'Pembangunan Manusia Berbasis Gender', 'Pembangunan_Manusia_Berbasis_Gender_2016.pdf'),
(5, 'Buku Saku Mendidik Anak di Era Digital', 'Buku-Saku-Mendidik-Anak-D-Era-Digital.pdf'),
(6, 'Mengakhiri Kekerasan Terhadap Perempuan dan Anak', 'Mengakhiri_Kekerasan_Terhadap_Perempuan_dan_Anak1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dok_rencana`
--

CREATE TABLE `tbl_dok_rencana` (
  `id_dok` int(11) NOT NULL,
  `judul_dok` varchar(255) DEFAULT NULL,
  `file_dok` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dok_rencana`
--

INSERT INTO `tbl_dok_rencana` (`id_dok`, `judul_dok`, `file_dok`) VALUES
(3, '2020 - LKJIP', 'LKJIP_2020.pdf'),
(4, '2020 - LKPJ', 'LKPJ_2020.pdf'),
(5, '2020 - Renja DP3A', 'Renja_2020.pdf');

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
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id_foto` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `id_galeri`, `ket_foto`, `foto`) VALUES
(8, 4, 'Kegiatan 1', '5c1b400a768db435979039.jpg'),
(9, 4, 'Kegiatan 2', '5c1b403d7a9c7475232978.jpg'),
(10, 4, 'Kegiatan 3', '5c1b4013acf62083040230.jpg'),
(11, 4, 'Kegiatan 4', '5c1b4033f01c5311957494.jpg'),
(12, 4, 'Kegiatan 5', '5c1b40311dd59282163671.jpg'),
(13, 4, 'Kegiatan 6', '5c1b40456d196751989228.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` text NOT NULL,
  `sampul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `nama_galeri`, `sampul`) VALUES
(1, 'Kampanye dan Diskusi Terbuka \"Kilau Generasi Bebas HIV dan AIDS\"', 'kampanye.jpg'),
(2, 'Bimtek Peningkatan Kapasitas PPT Kecamatan', 'bimtek1.jpg'),
(3, 'Bimtek Relawan Duta Revolusi Mental', 'bimtek2.jpg'),
(4, 'Pengumuman Penghargaan APE Kota Semarang 2018', 'ape.jpg');

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
(6, 'Kesadaran Gender', 'Kesadaran Gender adalah suatu pengertian bahwa ada faktor-faktor sosial yang menentukan antara laki-laki dan perempuan atas dasar tingkah laku, yang mempengaruhi kemampuan mereka untuk mengakses dan mengontrol sumber daya. Kesadaran ini membutuhkan penerapan melalui analisa gender menjadi proyek, program dan kegiatan.'),
(7, 'Analisa Gender', 'Analisa Gender adalah metodologi untuk pengumpulan dan pengolahan informasi tentang gender. Analisa gender membutuhkan data terpilah berdasarkan jenis kelamin dan suatu pengertian dari konstruksi sosial dari peran gender, bagaimana pembagian kerja dan dinilai. Analisa gender adalah proses dari analisa informasi agar supaya menjamin manfaat dan sumberdaya pembangunan secara efektif dan adil ditujukan baik bagi laki-laki maupun perempuan. Analisa Gender digunakan juga untuk mengantisipasi dan menolak akibat negatif dari pembangunan yang mungkin terjadi pada perempuan atau karena relasi gender. Analisa gender dilakukan menggunakan bermacam alat dan kerangka kerja.'),
(8, 'Perencanaan Gender', 'Perencanaan Gender (atau Perencanaan yang sensititif Gender) adalah proses dari perencanaan program-program dan proyek-proyek pembangunan yang sensitif gender dan dimana mempertimbangkan impact dari peran gender dan kebutuhan gender dari laki-laki dan perempuan di dalam sasaran masyarakat atau sektor.'),
(9, 'Peran Gender', 'Peran Gender adalah perilaku yang dipelajari di dalam suatu masyarakat/komunitas yang dikondisikan bahwa kegiatan, tugas-tugas atau tanggung jawab patut diterima baik oleh laki-laki maupun perempuan. Peran gender dapat berubah, dan dipengaruhi oleh umur, kelas, ras, etnik, agama dan lingkungan geografi, ekonomi dan politik. Baik perempuan maupun laki-laki memiliki peran ganda di dalam masyarakat. Perempuan kerap mempunyai peran dalam mengatur reproduksi, produksi dan kemasyarakatan. Laki-laki lebih terfokus pada produksi dan politik kemasyarakatan.'),
(10, 'Peran Produksi', 'Peran produksi adalah kegiatan yang dilakukan baik oleh laki-laki dan perempuan agar supaya menghasilkan barang dan layanan untuk diperdagangkan, dipertukarkan atau memenuhi nafkah bagi keluarga. Sebagai contoh di pertanian, kegiatan produksi termasuk penanaman, penyiangan, peternakan.'),
(11, 'Peran Reproduksi', 'Peran Reproduksi adalah aktivitas untuk menjamin reproduksi angkatan kerja. Hal ini termasuk pembatasan anak, penjarangan anak, perawatan terhadap anggota keluarga seperti orang tua, anak-anak dan pekerja. Tugas-tugas tersebut umumnya tidak mendapatkan upah dan kebanyakan dilakukan oleh perempuan.'),
(12, 'Peran Masyarakat', 'Peran masyarakat adalah kegiatan-kegiatan yang dilakukan di tingkat masyarakat untuk menjamin ketersediaan dan pengelolaan sumberdaya yang terbatas seperti air, perawatan kesehatan dan pendidikan. Pekerjaan ini biasanya tidak dibayar dan kebanyakan dilakukan oleh perempuan.'),
(13, 'Peran Politik Perempuan', 'Peran politik perempuan adalah kegiatan-kegiatan di tingkat masyarakat, mengorganisir di tingkatan formal politik, sering kali dalam kerangka kerja politik nasional. Pekerjaan ini biasanya dilakukan oleh pria, dan biasanya dibayar secara langsung (uang) atau tidak langsung (meningkatnya kekuasaan dan status).'),
(14, 'Beban Ganda', 'Beban ganda merujuk kepada kenyataan bahwa perempuan cenderung bekerja lebih lama dan lebih sedikit harinya dibandingkan laki-laki sebagaimana biasanya mereka terlibat dalam tiga peran gender yang berbeda-reproduksi, produksi dan dan peran di masyarakat.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sop`
--

CREATE TABLE `tbl_sop` (
  `id_sop` int(11) NOT NULL,
  `judul_sop` varchar(255) DEFAULT NULL,
  `file_sop` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sop`
--

INSERT INTO `tbl_sop` (`id_sop`, `judul_sop`, `file_sop`) VALUES
(1, 'SOP Penanganan Keberatan Permohonan Informasi', 'PKPI.pdf'),
(2, 'SOP Permohonan Informasi', 'PI.pdf'),
(3, 'Tugas', 'KISI-KISI_DAN_LATIHAN_SOAL_ULANGAN_PP,MTK,SENI_BUDAYA.pdf');

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
-- Indeks untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

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
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_dok_rencana`
--
ALTER TABLE `tbl_dok_rencana`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_ebook`
--
ALTER TABLE `tbl_ebook`
  MODIFY `id_ebook` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_glosary`
--
ALTER TABLE `tbl_glosary`
  MODIFY `id_glosary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_sop`
--
ALTER TABLE `tbl_sop`
  MODIFY `id_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
