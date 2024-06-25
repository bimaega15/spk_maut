-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Jun 2024 pada 15.27
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nip` varchar(17) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `ki` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `nip`, `mapel`, `kelas`, `ki`) VALUES
(3, '                                NADILA PUTRI', ' 05462', ' AA', '  X5', ' KI 5'),
(4, 'A7', '4222', 'KJAFN', 'AMA', 'AMF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kr1` varchar(10) NOT NULL,
  `kr2` varchar(10) NOT NULL,
  `kr3` varchar(10) NOT NULL,
  `kr4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `kr1`, `kr2`, `kr3`, `kr4`) VALUES
(4, '0.4', '0.25', '0.2', '0.15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `k1` int(11) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL,
  `k4` int(11) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL,
  `s4` int(11) NOT NULL,
  `s5` int(11) NOT NULL,
  `pr1` int(11) NOT NULL,
  `pr2` int(11) NOT NULL,
  `pr3` int(11) NOT NULL,
  `pr4` int(11) NOT NULL,
  `pr5` int(11) NOT NULL,
  `nilai_preferensi` varchar(100) DEFAULT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_subkriteria`
--

CREATE TABLE `penilaian_subkriteria` (
  `id` int(11) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `p6` varchar(50) NOT NULL,
  `p7` varchar(50) NOT NULL,
  `p8` varchar(50) NOT NULL,
  `p9` varchar(50) NOT NULL,
  `p10` varchar(50) NOT NULL,
  `k1` varchar(50) NOT NULL,
  `k2` varchar(50) NOT NULL,
  `k3` varchar(50) NOT NULL,
  `k4` varchar(50) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `pr1` varchar(50) NOT NULL,
  `pr2` varchar(50) NOT NULL,
  `pr3` varchar(50) NOT NULL,
  `subkriteria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian_subkriteria`
--

INSERT INTO `penilaian_subkriteria` (`id`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `k1`, `k2`, `k3`, `k4`, `s1`, `s2`, `pr1`, `pr2`, `pr3`, `subkriteria_id`) VALUES
(17, '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3', '0,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '1,2,3,4', '1,2,3,4', '0,1,2,4', '1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3', '0,1,2,4', '0,1,2,3,4', 60),
(20, '0,1,2,3,4', '0,1,2,3', '0,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '1,2,3,4', '0,1,2,3,4', '0,1,3,4', '0,1,2,3,4', '1,2,3,4', '0,1,2,3', '1,2,3,4', '0,1,2,3,4', '1,2,3,4', '0,1,2,3,4', '0,1,3,4', 61),
(36, '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '', 57),
(40, '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2,3,4', '0,1,2', '0', '0,1,2,3,4', 58),
(49, '0,1,3', '0,1,2,3,4', '0,1,2', '1,2', '0,1,2,4', '0,2,3,4', '0,1,3,4', '0', '0,1,2,4', '1,2', '0,1,3,4', '0,2', '0,2,4', '0,1,3', '0,2,3', '1,4', '0,2,3,4', '1,3', '4', 73),
(50, '0,1,2,3,4', '1,2,3', '0,1,2,4', '1,2,3', '0,1,2', '0,1,2', '0,1,2,3', '0,1,2', '0,1,2', '0,1,2,3,4', '0,1,2', '0,1', '0,1,3,4', '1,3', '0,1,3', '0,1', '0,1', '2,3', '0,1,2,3,4', 74),
(51, '5', '2', '3', '2', '1', '3', '5', '3', '2', '3', '2', '3', '5', '3', '4', '5', '4', '5', '5', 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `posisi` varchar(250) NOT NULL,
  `nomor` varchar(250) NOT NULL,
  `p1` int(50) NOT NULL,
  `p2` int(50) NOT NULL,
  `p3` int(50) NOT NULL,
  `p4` int(50) NOT NULL,
  `p5` int(50) NOT NULL,
  `p6` int(50) NOT NULL,
  `p7` int(50) NOT NULL,
  `p8` int(50) NOT NULL,
  `p9` int(50) NOT NULL,
  `p10` int(50) NOT NULL,
  `k1` int(50) NOT NULL,
  `k2` int(50) NOT NULL,
  `k3` int(50) NOT NULL,
  `k4` int(50) NOT NULL,
  `s1` int(50) NOT NULL,
  `s2` int(50) NOT NULL,
  `pr1` int(50) NOT NULL,
  `pr2` int(50) NOT NULL,
  `pr3` int(50) NOT NULL,
  `nilai_preferensi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `nama`, `nip`, `posisi`, `nomor`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `k1`, `k2`, `k3`, `k4`, `s1`, `s2`, `pr1`, `pr2`, `pr3`, `nilai_preferensi`) VALUES
(57, 'Abdul Jamal, S.Pd', '  -', 'Tauhid', 'X/1', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, '0.91428571428571'),
(58, 'Romi Afriani, S.Pd', '      -', 'Kimia', 'X/1', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 3, 1, 5, '0.89285714285714'),
(60, 'Isra Amalia, S.Pd', '-', 'Kimia', 'X/1', 5, 5, 5, 5, 4, 4, 5, 5, 5, 5, 4, 4, 4, 4, 5, 5, 4, 4, 5, '0.82936507936508'),
(61, 'M. Anshori, S.Pd', ' -', 'Bahasa Arab', 'X/1', 5, 4, 4, 5, 5, 5, 5, 5, 4, 5, 4, 5, 4, 4, 4, 5, 4, 5, 4, '0.79809523809524'),
(73, 'Guru Testing', '839732987', 'Mentoring', '032983279', 3, 5, 3, 2, 4, 4, 4, 1, 4, 2, 4, 2, 3, 3, 3, 2, 4, 2, 1, '0.084920634920635'),
(74, 'Guru Testing 2', '239873298', 'Job2', '0329872389', 5, 3, 4, 3, 3, 3, 4, 3, 3, 5, 3, 2, 4, 2, 3, 2, 2, 2, 5, '0.17619047619048'),
(75, 'Data Testing', '239287', 'Posisi lamaran ', '89279847', 5, 2, 3, 2, 1, 3, 5, 3, 2, 3, 2, 3, 5, 3, 4, 5, 4, 5, 5, '0.36555555555556');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role_id`, `is_active`) VALUES
(8, 'administrator', 'admin', '$2y$10$87isTQfOt1c1ThrEDPbBIecCuTZq2dDQURzkGstFVV0hjRVk5eWna', 1, 1);

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
(6, 1, 2),
(7, 1, 3),
(15, 1, 5),
(17, 2, 1),
(18, 2, 3),
(19, 2, 5),
(20, 3, 1),
(21, 3, 4),
(22, 3, 5),
(23, 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Akun'),
(2, 'Admin'),
(3, 'Calon Pegawai'),
(4, 'Calon Pegawai'),
(5, 'Perhitungan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'kepsek'),
(3, 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(2, 1, 'Ganti Password', 'Home/gantiPassword', 'fas fa-fw fa-key', 1),
(3, 2, 'Tambah Akun', 'User', 'fas fa-fw fa-folder', 1),
(4, 2, 'Alternatif', 'Guru', 'fas fa-fw fa-folder', 1),
(5, 2, 'Kriteria', 'Kriteria', 'fas fa-fw fa-folder', 1),
(6, 4, 'Penilaian', 'penilaian/guru', 'fas fa-fw fa-folder', 1),
(7, 3, 'Penilaian Calon Pegawai', 'Penilaian', 'fas fa-fw fa-folder', 1),
(8, 5, 'Perhitungan Maut', 'Maut', 'fas fa-fw fa-folder', 1),
(9, 5, 'Data Preferensi', 'preferensi/index', 'fas fa-fw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indeks untuk tabel `penilaian_subkriteria`
--
ALTER TABLE `penilaian_subkriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subkriteria_id` (`subkriteria_id`);

--
-- Indeks untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
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
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penilaian_subkriteria`
--
ALTER TABLE `penilaian_subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `id_guru` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`);

--
-- Ketidakleluasaan untuk tabel `penilaian_subkriteria`
--
ALTER TABLE `penilaian_subkriteria`
  ADD CONSTRAINT `penilaian_subkriteria_ibfk_1` FOREIGN KEY (`subkriteria_id`) REFERENCES `subkriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
