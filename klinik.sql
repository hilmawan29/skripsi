-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2023 pada 18.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `deskripsi`, `sumber`, `gambar`) VALUES
(1, 'Tren Tes Covid Mandiri', '          <p class=\"p-about\">Indonesia kembali mengalami kasus lonjakan angka penularan COVID-19 varian Omicron. Bisa dikatakan, ini adalah fase gelombang ketiga virus corona di Tanah Air. Pesatnya penularan membuat kebutuhan akan tes swab antigen maupun PCR di laboratorium pun meningkat. Tentunya, hal ini demi memudahkan tracing dan diagnosis dini serta penanganan segera.</p>\r\n    \r\n          <p class=\"p-about\">Namun, beberapa waktu terakhir marak pembelian alat tes COVID-19 secara mandiri. Jadi, masyarakat menjadi lebih mudah dan praktis untuk melakukan pemeriksaan sendiri tanpa harus menuju ke laboratorium. Belum lagi, katanya harga alat tes mandiri ini lebih murah dibandingkan dengan harga satu kali tes di laboratorium.</p>\r\n\r\n          <p class=\"p-about\">Lantas, bagaimana dengan keamanannya? Apakah penggunaan alat tes swab mandiri ini aman, higienis, dan akurat seperti tes yang umumnya dilakukan oleh petugas kesehatan?</p>\r\n\r\n          <h3 class=\"h3-artikel\">Pro dan Kontra Penggunaan Alat Tes Covid-19 Mandiri</h3>\r\n           <p class=\"p-about\">Memang benar lebih praktis dan mudah karena kamu tidak perlu pergi ke laboratorium, tetapi sebenarnya memakai alat tes COVID-19 sendiri tidak dianjurkan. Sebab, penggunaan alat tes swab punya standar pakai yang harus kamu perhatikan. Artinya, pemakaiannya alat swab ini tidak boleh sembarangan, apalagi tanpa pendampingan ahli kesehatan.</p>\r\n\r\n           <p class=\"p-about\">Pastinya, setiap pihak yang telah melakukan pemeriksaan secara mandiri di rumah harus kembali melakukan pengecekan di laboratorium. Ini karena alat atau metode swab yang dilakukan sendiri memberikan hasil skrining dan tidak bisa menentukan apakah seseorang terindikasi positif COVID-19 atau tidak./p&gt;\r\n\r\n           </p><p class=\"p-about\">Mudahnya, seperti wanita yang menjalani tes kehamilan dengan menggunakan test pack. Hasilnya bisa menunjukkan positif hamil. Namun, setelahnya pemeriksaan tetap dilakukan ke rumah sakit. Ini untuk mengetahui apakah kehamilan ini benar-benar terjadi atau justru ada indikasi medis dengan ciri mirip dengan kehamilan.</p>\r\n\r\n           <h3 class=\"h3-artikel\">Pro dan Kontra Penggunaan Alat Tes Covid-19 Mandiri</h3>\r\n           <p class=\"p-about\">Selain hasilnya yang bisa jadi kurang akurat, melakukan pemeriksaan swab secara mandiri bisa meningkatkan risiko terjadinya beberapa kondisi berikut ini</p>\r\n           <ul>\r\n             <li class=\"p-about\">Cedera dan Pendarahan Hidung</li>\r\n             <li class=\"p-about\">Tangkai Alat Swab Patah</li>\r\n             <li class=\"p-about\">Hasil Pemeriksaan Tidak Akurat</li>\r\n           </ul>\r\n', 'www', 'home/workingspace 1.jpg'),
(2, 'Tren Tes Covid Mandiri 2', '          <p class=\"p-about\">Indonesia kembali mengalami kasus lonjakan angka penularan COVID-19 varian Omicron. Bisa dikatakan, ini adalah fase gelombang ketiga virus corona di Tanah Air. Pesatnya penularan membuat kebutuhan akan tes swab antigen maupun PCR di laboratorium pun meningkat. Tentunya, hal ini demi memudahkan tracing dan diagnosis dini serta penanganan segera.</p>\r\n    \r\n          <p class=\"p-about\">Namun, beberapa waktu terakhir marak pembelian alat tes COVID-19 secara mandiri. Jadi, masyarakat menjadi lebih mudah dan praktis untuk melakukan pemeriksaan sendiri tanpa harus menuju ke laboratorium. Belum lagi, katanya harga alat tes mandiri ini lebih murah dibandingkan dengan harga satu kali tes di laboratorium.</p>\r\n\r\n          <p class=\"p-about\">Lantas, bagaimana dengan keamanannya? Apakah penggunaan alat tes swab mandiri ini aman, higienis, dan akurat seperti tes yang umumnya dilakukan oleh petugas kesehatan?</p>\r\n\r\n          <h3 class=\"h3-artikel\">Pro dan Kontra Penggunaan Alat Tes Covid-19 Mandiri</h3>\r\n           <p class=\"p-about\">Memang benar lebih praktis dan mudah karena kamu tidak perlu pergi ke laboratorium, tetapi sebenarnya memakai alat tes COVID-19 sendiri tidak dianjurkan. Sebab, penggunaan alat tes swab punya standar pakai yang harus kamu perhatikan. Artinya, pemakaiannya alat swab ini tidak boleh sembarangan, apalagi tanpa pendampingan ahli kesehatan.</p>\r\n\r\n           <p class=\"p-about\">Pastinya, setiap pihak yang telah melakukan pemeriksaan secara mandiri di rumah harus kembali melakukan pengecekan di laboratorium. Ini karena alat atau metode swab yang dilakukan sendiri memberikan hasil skrining dan tidak bisa menentukan apakah seseorang terindikasi positif COVID-19 atau tidak./p&gt;\r\n\r\n           </p><p class=\"p-about\">Mudahnya, seperti wanita yang menjalani tes kehamilan dengan menggunakan test pack. Hasilnya bisa menunjukkan positif hamil. Namun, setelahnya pemeriksaan tetap dilakukan ke rumah sakit. Ini untuk mengetahui apakah kehamilan ini benar-benar terjadi atau justru ada indikasi medis dengan ciri mirip dengan kehamilan.</p>\r\n\r\n           <h3 class=\"h3-artikel\">Pro dan Kontra Penggunaan Alat Tes Covid-19 Mandiri</h3>\r\n           <p class=\"p-about\">Selain hasilnya yang bisa jadi kurang akurat, melakukan pemeriksaan swab secara mandiri bisa meningkatkan risiko terjadinya beberapa kondisi berikut ini</p>\r\n           <ul>\r\n             <li class=\"p-about\">Cedera dan Pendarahan Hidung</li>\r\n             <li class=\"p-about\">Tangkai Alat Swab Patah</li>\r\n             <li class=\"p-about\">Hasil Pemeriksaan Tidak Akurat</li>\r\n           </ul>\r\n', 'www', 'home/workingspace 2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `department` varchar(128) NOT NULL,
  `age` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `name`, `department`, `age`, `nik`, `foto`) VALUES
(3, 'Hilman Hilmawan', 'Marketing', 20, 18110210, 'YJI-18110210.jpeg'),
(12, 'Eri Rustiandi', 'IT', 35, 19030349, 'YJI-19030349.jpeg'),
(13, 'Fitri Juliagustiani', 'HRD', 38, 19040366, 'YJI-19040366.jpeg'),
(14, 'Dewi', 'EXIM', 35, 18110222, 'YJI-18110222.jpeg'),
(15, 'Nazmi', 'Cutting', 22, 1234567, 'Use_Case_KP.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` time NOT NULL,
  `keluhan` text DEFAULT NULL,
  `diagnosis` text NOT NULL,
  `drugs` text DEFAULT NULL,
  `conclusion` varchar(128) DEFAULT NULL,
  `conclusion_from_dokter` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `patient`
--

INSERT INTO `patient` (`id`, `employee_id`, `check_in`, `check_out`, `keluhan`, `diagnosis`, `drugs`, `conclusion`, `conclusion_from_dokter`) VALUES
(3, 1, '2022-01-01 10:30:00', '10:40:00', '', '123', '123', 'Beri Obat', NULL),
(4, 1, '0000-00-00 00:00:00', '00:00:00', '', 'ada', 'asda', 'Harus Pulang', NULL),
(5, 1, '2022-01-01 11:30:00', '11:40:00', '', 'flu', 'parasetamol', 'Beri Obat', NULL),
(6, 1, '2022-03-18 22:28:00', '00:00:00', '', 'batuk', 'bodreksin', 'Beri Obat', NULL),
(11, 2, '2022-03-16 21:34:00', '21:35:00', '', 'Batuk', 'Paracetamol', 'Beri Obat', NULL),
(13, 5, '2022-05-14 15:04:00', '15:27:00', '', 'Atit iyut', 'Polisilent', 'Harus Pulang', NULL),
(14, 5, '2022-05-14 15:04:00', '15:27:00', '', 'hfwuf', 'nfljfgfouer', 'Harus Pulang', NULL),
(15, 4, '2022-05-14 15:09:00', '15:15:00', '', 'sdss', 'asddsadas', 'Istirahat Dulu', NULL),
(22, 6, '2022-06-17 18:13:00', '18:18:00', '', 'dggdeialgdlaief', 'dhfawugfaef', 'Istirahat Dulu', NULL),
(23, 10, '2022-06-17 18:37:00', '18:42:00', '', 'fsfbsl/hfslehg', 'fnslzhgsl/dz', 'Beri Obat', NULL),
(24, 11, '2022-06-17 18:59:00', '18:04:00', '', 'karywan ini mengalami suhu tubuh yang tinggi 37', 'Antibiotik', 'Istirahat Dulu', NULL),
(30, 3, '2023-06-12 00:14:00', '00:20:00', 'keluhan', 'Tunduh Gakaruan', 'Sangobion', 'Beri Obat', NULL),
(31, 3, '2023-06-12 00:17:00', '00:23:00', 'Tunduh', 'Mata merah', NULL, 'Istirahat', NULL),
(32, 12, '2023-06-12 21:32:00', '21:39:00', 'Sesak nafas', 'Asma akut', 'Inheler', 'Rujuk', 'Rawat Jalan'),
(33, 13, '2023-06-12 21:39:00', '21:45:00', 'Sakit Kepala', 'Vertigo tak tertolong', 'Paramex Neuralgin', 'Rujuk', 'Rawat Inap'),
(34, 14, '2023-06-14 23:27:00', '23:33:00', 'Sakit perut', 'Magh ', 'Promagh', 'Beri Obat', NULL),
(35, 13, '2023-06-14 23:32:00', '23:38:00', 'Ada benjolan di sekitar payudara', 'Pasien sudah dioperasi dan tumor tersebut jinak', 'Antibiotik', 'Rujuk', 'Rawat Jalan'),
(36, 15, '2023-06-26 21:34:00', '21:40:00', 'Pilek karena belum gajian', 'hayang nikah', 'obat kuat', 'Beri Obat', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Hilman', 'hilman29@ummi.ac.id', 'logo.png', '$2y$10$gdXxH7hxwO5ga2Ag8sgCcuxV0m6tXcKiMYfd/2sshwKuPvgCZX5h6', 1, 1, 1645711893),
(7, 'Hilman', 'hilmanhilmawan52@gmail.com', 'hilman.JPG', '$2y$10$xFt80Yd7kOIZtRwmA4byn.9XWlouqv9ixCALyrfDSb1u9iBZVD.sm', 2, 1, 1645713396),
(9, 'Hilman', 'hilman29@gmail.com', 'default.jpg', '$2y$10$wfmezNxAN3Zsd79amTHiZOlYQkxZRlHcXoUbttJql8vsHDP2793Pq', 3, 1, 1686321324);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Kepala'),
(2, 'Petugas'),
(3, 'Dokter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Kepala Klinik'),
(2, 'Petugas Klinik'),
(3, 'Dokter Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(2, 1, 'Inbox', 'inbox', 'fas fa-fw fa-envelope', 1),
(3, 1, 'Diagnosa', 'diagnosa', 'fas fa-fw fa-chart-bar', 1),
(4, 1, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(5, 1, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(6, 1, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(21, 2, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(22, 2, 'Inbox', 'inbox', 'fas fa-fw fa-envelope', 1),
(23, 2, 'Keluhan', 'keluhan', 'fas fa-fw fa-chart-bar', 1),
(24, 2, 'Karyawan', 'employee', 'fas fa-fw fa-address-book', 1),
(25, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(26, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(27, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(31, 3, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(32, 3, 'Diagnosa', 'diagnosa', 'fas fa-fw fa-chart-bar', 1),
(33, 3, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(34, 3, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(35, 3, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3335;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
