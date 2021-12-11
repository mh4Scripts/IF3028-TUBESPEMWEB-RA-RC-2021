-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2021 pada 11.53
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`id`, `isi`, `aspek`, `file`, `tanggal`) VALUES
(14, 'Dalam bab ini dan Bab 32 hingga 37, kami akan menyajikan konsep-konsep utama yang \r\nmengarah pada manajemen proyek perangkat lunak yang efektif. Bab ini membahas konsep dan \r\nprinsip manajemen proyek perangkat lunak dasar. Bab 32 menyajikan metrik proses dan proyek, \r\ndasar untuk pengambilan keputusan manajemen yang efektif. Teknik-teknik yang digunakan untuk \r\nmemperkirakan biaya dibahas di Bab 33. Bab 34 akan membantu Anda menentukan jadwal proyek \r\nyang realistis. Aktivitas manajemen yang mengarah pada pemantauan risiko yang efektif, mitigasi, \r\ndan manajemen disajikan dalam Bab 35. Bab 36 membahas pemeliharaan dan rekayasa ulang \r\nserta membahas masalah manajemen yang akan Anda hadapi ketika Anda harus berurusan \r\ndengan sistem lama. Terakhir, Bab 37 membahas teknik untuk mempelajari dan meningkatkan \r\nproses rekayasa perangkat lunak tim Anda', '- Pilih Aspek Pelaporan/Komentar -', 'plps.pdf', '2021-12-03 14:37:04'),
(15, 'Proses perangkat lunak (Bab 3–5) menyediakan kerangka kerja yang darinya rencana \r\nkomprehensif untuk pengembangan perangkat lunak dapat dibuat. Sejumlah kecil aktivitas \r\nkerangka berlaku untuk semua proyek perangkat lunak, terlepas dari ukuran atau kerumitannya. \r\nSejumlah set tugas yang berbeda — tugas, pencapaian, produk kerja, dan poin jaminan kualitas — \r\nmemungkinkan aktivitas kerangka kerja untuk disesuaikan dengan karakteristik proyek perangkat \r\nlunak dan persyaratan tim proyek. Terakhir, aktivitas payung — seperti jaminan kualitas perangkat \r\nlunak, manajemen konfigurasi perangkat lunak, dan pengukuran — menutupi model proses. \r\nAktivitas payung tidak bergantung pada aktivitas kerangka apa pun dan terjadi selama proses', 'Mahasiswa', 'KESEHATAN_DI_SUMATERA_SELATAN2.pptx', '2021-12-03 17:09:14'),
(16, 'Halaman utama berisi daftar judul pertanyaan, siapa yang bertanya, dan isi pertanyaan. Isi pertanyaan yang terlalu panjang harus dipotong. Silakan definisikan sendiri seberapa panjang agar tetap baik terlihat di layout yang Anda buat.\r\n\r\nPada masing-masing elemen list, terdapat menu untuk mengubah dan menghapus pertanyaan.\r\n\r\nView Laporan ditampilkan secara terurut dimulai dari laporan terakhir yang diberikan highlight', 'Infrastruktur', 'Doc1.docx', '2021-12-03 17:15:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
