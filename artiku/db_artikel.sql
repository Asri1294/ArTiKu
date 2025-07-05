-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2025 pada 11.29
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_artikel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `draft` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `konten`, `gambar`, `draft`, `created_at`, `updated_at`) VALUES
(1, 'Kenapa SEO Itu Penting untuk Semua Website?', 'Search Engine Optimization (SEO) adalah kunci agar website mudah ditemukan di Google. Dengan SEO yang baik, pengunjung datang tanpa harus terus-menerus bayar iklan. Artikel ini membahas manfaat SEO jangka panjang, cara riset kata kunci, menulis artikel berkualitas, dan pentingnya kecepatan website. Semua pemilik web, baik toko online maupun blog pribadi, wajib memahami SEO dasar.', 'seo.jpg', 0, '2025-07-01 03:43:12', '2025-07-05 08:50:08'),
(2, 'Tips Produktif Bekerja dari Rumah', 'Bekerja dari rumah terdengar nyaman, tapi sering membuat kita terlena. Supaya tetap produktif, pastikan punya jadwal kerja yang jelas, buat ruang kerja yang nyaman, hindari gangguan seperti media sosial saat jam kerja, dan sisihkan waktu istirahat untuk menjaga kesehatan mental. Artikel ini membahas langkah-langkah praktis agar kerja remote tetap efektif.', 'wfh.jpg', 0, '2025-07-01 03:45:19', '2025-07-05 08:50:40'),
(3, '5 Kebiasaan Kecil yang Bisa Mengubah Hidupmu', 'Kebiasaan kecil sering dianggap sepele, padahal dampaknya besar. Artikel ini membahas lima kebiasaan sederhana yang jika dilakukan konsisten akan membawa perubahan positif: bangun lebih pagi, membaca buku 15 menit setiap hari, menulis jurnal harian, merapikan tempat tidur setiap bangun, dan membiasakan bersyukur sebelum tidur. Dengan lima kebiasaan ini, kamu bisa mulai menata hidup lebih produktif dan bahagia.', 'journaling.jpg', 0, '2025-07-02 03:49:32', '2025-07-05 08:52:43'),
(4, 'Panduan Belajar Programming untuk Pemula', 'Banyak orang ingin belajar coding tapi bingung mulai dari mana. Panduan ini memberikan langkah praktis: pilih satu bahasa pemrograman dulu (misalnya Python atau JavaScript), susun target belajar mingguan, gunakan sumber belajar gratis seperti tutorial online, dan jangan lupa praktek sambil membuat project kecil. Terakhir, bergabunglah di komunitas agar semangatmu terjaga.', 'prog.jpg', 0, '2025-07-02 04:57:02', '2025-07-05 08:53:29'),
(5, 'Cara Membiasakan Diri Membaca Buku di Era Gadget', 'Di era serba digital, kebiasaan membaca buku perlahan memudar tergantikan oleh layar gadget. Padahal, membaca buku tetap penting untuk menambah wawasan mendalam. Artikel ini memberikan tips agar kamu bisa mulai lagi: tetapkan target bacaan mingguan, pilih buku sesuai minat, tentukan waktu baca rutin, dan jauhi distraksi saat membaca. Dengan konsistensi, membaca akan menjadi bagian hidupmu lagi.', 'read.jpg', 0, '2025-07-03 03:55:23', '2025-07-05 08:52:04'),
(6, '5 Teknik Manajemen Waktu Berbasis Sains untuk Meningkatkan Produktivitas', 'Mengapa Manajemen Waktu Sering Gagal?\r\nPenelitian neuroscience menunjukkan otak manusia tidak dirancang untuk multitasking. Studi University of California menemukan bahwa beralih tugas membutuhkan rata-rata 23 menit 15 detik untuk kembali fokus penuh. Inilah mengapa teknik konvensional sering tidak efektif. Teknik Berbasis Riset: Time Blocking + Ultradian Rhythm. Sesuaikan jadwal dengan siklus alami tubuh (90-120 menit). Gunakan pola: 90 menit fokus tinggi - 20 menit istirahat - 90 menit fokus - istirahat panjang. Pomodoro Quantum Modifikasi teknik Pomodoro: 52 menit kerja - 17 menit istirahat (berdasarkan studi DeskTime pada 5.6 juta pengguna). MIT (Most Important Task) + Eisenhower Matrix. Identifikasi 1 tugas penting/hari yang akan memberi dampak terbesar. Klasifikasi menggunakan matriks Eisenhower untuk menentukan prioritas. Teknik \'Parkir Otak\'. Sediakan notepad untuk mencatat gangguan pikiran selama sesi fokus. Penelitian menunjukkan ini mengurangi cognitive load hingga 40%. Energy Mapping. Lacak tingkat energi harian selama 1 minggu. Jadwalkan tugas berat saat energi puncak (pagi/siang/malam).Implementasi Praktis: Mulai dengan satu teknik selama 21 hari. Gunakan aplikasi seperti Forest untuk  melatih fokus. Ukur kemajuan dengan time audit mingguan: bandingkan rencana vs realisasi waktu.', 'early.jpg', 1, '2025-07-03 04:50:02', '2025-07-05 08:53:50'),
(7, 'Tes Judul', 'Tes Konten', NULL, 1, '2025-07-05 05:31:38', '2025-07-05 06:23:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `nama`, `email`, `pesan`, `created_at`) VALUES
(1, 'Pretty Sinta', 'tysinta@example.com', 'Artikel tentang kebiasaan kecilnya keren banget, akan saya coba terapkan.', '2025-07-02 12:45:10'),
(2, 'Gema Angkasa', 'angkasa@example.com', 'Panduan belajar programmingnya membantu sekali untuk saya yang masih awam tentang pemrograman.', '2025-07-02 14:15:18'),
(3, 'Reno', 'reno@example.com', 'SEO memang penting banget! tulisannya mudah dipahami, Makasih!', '2025-07-03 01:05:21'),
(4, 'Alya luvv Apache', 'alya@example.com', 'Tips kerja dari rumahnya relate banget, jadi semangat!', '2025-07-03 04:25:11'),
(5, 'Luna', 'lunaa@example.com', 'Saya jadi termotivasi baca buku lagi. Terima kasih untuk tulisannya.', '2025-07-03 23:33:49'),
(6, 'asri', 'asri@example.com', 'kontennya menarik tapi tampilan web-nya masih perlu di tingkatkan lagi. ', '2025-07-04 11:58:12'),
(7, 'cylia', 'ily@example.com', 'artikel yang baik tapi kurang lengkap ', '2025-07-05 06:01:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(55) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$U8LUkZC5Rjav87fuDIn1Bu2MNeM2.s1MNrS56zGrzf4B/gg.uQ7NG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
