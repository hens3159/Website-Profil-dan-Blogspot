-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Bulan Mei 2018 pada 07.51
-- Versi server: 5.7.19
-- Versi PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `co`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(30) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gambar` varchar(200) NOT NULL,
  `penulis` varchar(300) NOT NULL,
  `id_kategori` int(30) NOT NULL,
  `hitung` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `waktu`, `gambar`, `penulis`, `id_kategori`, `hitung`) VALUES
(1, 'Lorem Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2018-04-30 06:21:37', '01_1525083201.jpg', 'Henhen Lukmana', 3, 14),
(2, 'Lorem Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2018-04-30 06:21:56', '02_1525082449.jpg', 'John Doe', 3, 4),
(3, 'Lorem Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2018-04-30 06:22:08', '39870b0bcd7bb79419a8bdc2bd3105e6a033f956428834c9c0c6bf97981a9124_1525082490.jpg', 'John Doe', 3, 1),
(4, 'Lorem Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2018-04-30 06:22:37', 'a2e1529e6d4b604a6f6f809ff27bf257d9ca8e33175699040c3ea5f6c5489616_1525083182.jpg', 'John Doe', 3, 0),
(5, 'Lorem Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2018-04-30 06:22:45', '39870b0bcd7bb79419a8bdc2bd3105e6a033f956428834c9c0c6bf97981a9124_1525083168.jpg', 'John Doe', 3, 0),
(6, 'Lorem Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2018-04-30 06:23:12', 'a2e1529e6d4b604a6f6f809ff27bf257d9ca8e33175699040c3ea5f6c5489616_1525082591.jpg', 'John Doe', 3, 0),
(7, 'Lorem Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2018-04-30 06:23:21', '1b643f0aa8efcfbc84e294f9beec150133f66d6241406878fe46d2d4c0c1ddc7_1525083147.jpg', 'John Doe', 3, 0),
(8, 'lorem ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '2018-04-30 10:14:23', '02_1525083263.jpg', 'John Doe', 3, 1),
(9, 'Lorem Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '2018-04-30 10:14:46', 'a2e1529e6d4b604a6f6f809ff27bf257d9ca8e33175699040c3ea5f6c5489616_1525083286.jpg', 'John Doe', 2, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(1500) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `isi`, `waktu`, `gambar`) VALUES
(40, '1212', '<p>1212</p>\r\n', '2018-02-28 14:57:13', '01_1519829833.jpg'),
(41, 'cek', '<p>cek</p>\r\n', '2018-02-28 14:57:23', '01_1519829843.jpg'),
(42, 'cek', '<p>cek</p>\r\n', '2018-02-28 14:58:23', '01_1519829903.jpg'),
(43, 'as', '<p>as</p>\r\n', '2018-02-28 14:58:30', '01_1519829910.jpg'),
(44, 'as', '<p>as</p>\r\n', '2018-02-28 14:59:28', '01_1519829968.jpg'),
(45, 'qwert', '<p>q</p>\r\n', '2018-02-28 14:59:41', '01_1519829981.jpg'),
(46, 'qwert', '<p>q</p>\r\n', '2018-02-28 15:00:48', '01_1519830048.jpg'),
(47, 'qwert', '<p>q</p>\r\n', '2018-02-28 15:02:08', '01_1519830128.jpg'),
(48, 'koko', '<p>koko</p>\r\n', '2018-02-28 15:02:30', '01_1519830150.jpg'),
(49, '2', '<p>2</p>\r\n', '2018-02-28 15:03:43', '01_1519830223.jpg'),
(50, '2', '          2                 ', '2018-02-28 15:04:01', 'Asset 1_1519830241png'),
(51, '1', '       1                    ', '2018-02-28 15:05:20', 'Asset 1_1519830320png'),
(52, '1', '<p>12</p>\r\n', '2018-02-28 15:06:37', '01_1519830397.jpg'),
(53, '14', '<p>1</p>\r\n', '2018-02-28 15:07:08', '01_1519830428.jpg'),
(54, '41', '<p>2</p>\r\n', '2018-02-28 15:07:44', '01_1519830464.jpg'),
(55, '2', '<p>2</p>\r\n', '2018-02-28 15:09:36', '01_1519830576.jpg'),
(56, 'q', '          q                 ', '2018-03-01 10:36:18', '01_1519900578.jpg'),
(57, '1', '<p>1</p>\r\n', '2018-03-01 10:42:44', '01_1519900964.jpg'),
(58, '1', '<p>1</p>\r\n', '2018-03-01 10:45:58', '01_1519901158.jpg'),
(59, 'qw', '<p>qw</p>\r\n', '2018-03-01 10:56:14', '01_1519901774.jpg'),
(60, '1', '<p>1</p>\r\n', '2018-03-01 10:56:42', '01_1519901802.jpg'),
(61, 'qq', '<p>q</p>\r\n', '2018-03-01 11:03:19', '01_1519902199.jpg'),
(62, '1', '<p>1</p>\r\n', '2018-03-01 11:03:28', '01_1519902208.jpg'),
(63, '1121212', '<p>1</p>\r\n', '2018-03-01 11:05:22', '01_1519902322.jpg'),
(64, '12kokokokokokokokoko', '<p>12</p>\r\n', '2018-03-01 11:05:40', '01_1519902340.jpg'),
(65, '1', '<p>1</p>\r\n', '2018-03-01 11:08:02', '01_1519902482.jpg'),
(66, 'q', '<p>q</p>\r\n', '2018-03-01 11:08:25', '01_1519902505.jpg'),
(67, 'qw', '<p>qw</p>\r\n', '2018-03-01 11:11:52', '01_1519902712.jpg'),
(68, 'qw', '<p>qw</p>\r\n', '2018-03-01 11:12:19', '01_1519902739.jpg'),
(69, 'qw', '<p>qw</p>\r\n', '2018-03-01 11:14:21', '01_1519902861.jpg'),
(70, 'qw', '<p>qw</p>\r\n', '2018-03-01 11:15:24', '01_1519902924.jpg'),
(71, 'qw', '<p>qw</p>\r\n', '2018-03-01 11:18:29', '01_1519903109.jpg'),
(72, 'qw', '<p>qw</p>\r\n', '2018-03-01 11:18:46', '01_1519903126.jpg'),
(73, 'qw', '<p>qw</p>\r\n', '2018-03-01 11:19:16', '01_1519903156.jpg'),
(74, 'qw', '<p>qw</p>\r\n', '2018-03-01 11:20:35', '01_1519903235.jpg'),
(75, 'qw', '<p>qw</p>\r\n', '2018-03-01 11:20:58', '01_1519903258.jpg'),
(76, 'a', '<p>a</p>\r\n', '2018-03-01 11:21:11', '8d76d739735ef83bc369f46fcc715cc8854b1bba17760f0553be1a2b4cb3329c_1519903271.jpg'),
(77, 'a', '<p>a</p>\r\n', '2018-03-01 11:22:41', '8d76d739735ef83bc369f46fcc715cc8854b1bba17760f0553be1a2b4cb3329c_1519903361.jpg'),
(78, '12', '<p>12</p>\r\n', '2018-03-01 11:23:02', '9fbee1ae8f9bf82f4d0cdb92c36288805e70fea96051a76aa30b4b684dd2e3d8_1519903382.jpg'),
(79, '12', '<p>12</p>\r\n', '2018-03-01 11:23:44', '9fbee1ae8f9bf82f4d0cdb92c36288805e70fea96051a76aa30b4b684dd2e3d8_1519903424.jpg'),
(80, '12', '<p>12</p>\r\n', '2018-03-01 11:24:41', '9fbee1ae8f9bf82f4d0cdb92c36288805e70fea96051a76aa30b4b684dd2e3d8_1519903481.jpg'),
(81, '12', '<p>12</p>\r\n', '2018-03-01 11:26:22', '9fbee1ae8f9bf82f4d0cdb92c36288805e70fea96051a76aa30b4b684dd2e3d8_1519903582.jpg'),
(82, '12', '<p>12</p>\r\n', '2018-03-01 11:27:44', '9fbee1ae8f9bf82f4d0cdb92c36288805e70fea96051a76aa30b4b684dd2e3d8_1519903664.jpg'),
(83, '12', '<p>12</p>\r\n', '2018-03-01 11:28:07', '9fbee1ae8f9bf82f4d0cdb92c36288805e70fea96051a76aa30b4b684dd2e3d8_1519903687.jpg'),
(84, '12', '<p>12</p>\r\n', '2018-03-01 11:28:15', '9fbee1ae8f9bf82f4d0cdb92c36288805e70fea96051a76aa30b4b684dd2e3d8_1519903695.jpg'),
(85, '12', '<p>12</p>\r\n', '2018-03-01 11:28:59', '9fbee1ae8f9bf82f4d0cdb92c36288805e70fea96051a76aa30b4b684dd2e3d8_1519903739.jpg'),
(86, '12', '<p>12</p>\r\n', '2018-03-01 11:33:05', '9fbee1ae8f9bf82f4d0cdb92c36288805e70fea96051a76aa30b4b684dd2e3d8_1519903985.jpg'),
(87, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:33:34', '01_1519904014.jpg'),
(88, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:36:23', '01_1519904183.jpg'),
(89, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:37:33', '01_1519904253.jpg'),
(90, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:45:31', '01_1519904731.jpg'),
(91, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:45:58', '01_1519904758.jpg'),
(92, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:46:47', '01_1519904807.jpg'),
(93, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:55:36', '01_1519905335.jpg'),
(94, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:56:51', '01_1519905411.jpg'),
(95, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:57:07', '01_1519905427.jpg'),
(96, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:57:22', '01_1519905442.jpg'),
(97, 'qwerty', '<p>12</p>\r\n', '2018-03-01 11:57:47', '01_1519905467.jpg'),
(98, 'koko', '<p>koko</p>\r\n', '2018-03-01 12:37:07', '01_1519907827.jpg'),
(99, 'henhen lukmana', '<p>koko</p>\r\n', '2018-03-01 13:30:52', '01_1519911052.jpg'),
(100, '1', '<p>1</p>\r\n', '2018-03-01 14:53:41', '01_1519916021.jpg'),
(101, 'sex', '<p>sex</p>\r\n', '2018-03-01 14:55:38', '01_1519916138.jpg'),
(102, 'w', '<p>w</p>\r\n', '2018-03-01 15:05:52', '01_1519916752.jpg'),
(103, 'as', '<p>as</p>\r\n', '2018-03-01 15:06:03', '01_1519916763.jpg'),
(104, 'zx', '<p>zx</p>\r\n', '2018-03-01 15:06:50', '01_1519916810.jpg'),
(105, 'zinah', '<p>zinah</p>\r\n', '2018-03-01 15:10:18', '01_1519917018.jpg'),
(106, '90', '<p>90</p>\r\n', '2018-03-01 15:12:13', '01_1519917133.jpg'),
(107, 'k', '<p>k</p>\r\n', '2018-03-01 15:14:24', '01_1519917264.jpg'),
(108, 'cek', '<p>cek</p>\r\n', '2018-03-01 15:25:41', '01_1519917941.jpg'),
(109, 've', '<p>ve</p>\r\n', '2018-03-01 15:30:18', '01_1519918218.jpg'),
(110, 'as', '<p>as</p>\r\n', '2018-03-01 15:31:43', '01_1519918303.jpg'),
(111, 'as', '<p>as</p>\r\n', '2018-03-01 15:32:30', '01_1519918350.jpg'),
(112, 'as', '<p>as</p>\r\n', '2018-03-01 15:39:54', '01_1519918794.jpg'),
(113, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:40:09', '01_1519918809.jpg'),
(114, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:40:42', '01_1519918842.jpg'),
(115, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:41:52', '01_1519918912.jpg'),
(116, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:44:20', '01_1519919060.jpg'),
(117, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:44:43', '01_1519919083.jpg'),
(118, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:45:18', '01_1519919118.jpg'),
(119, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:46:05', '01_1519919165.jpg'),
(120, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:46:28', '01_1519919188.jpg'),
(121, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:46:30', '01_1519919190.jpg'),
(122, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:46:54', '01_1519919214.jpg'),
(123, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:47:57', '01_1519919277.jpg'),
(124, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:47:59', '01_1519919279.jpg'),
(125, 'koko', '<p>koko</p>\r\n', '2018-03-01 15:48:18', '01_1519919298.jpg'),
(126, 'a', '<p>1212</p>\r\n', '2018-03-01 15:48:37', '01_1519919317.jpg'),
(127, '1', '<p>1</p>\r\n', '2018-03-01 15:48:58', '01_1519919338.jpg'),
(128, '1', '<p>1</p>\r\n', '2018-03-01 15:51:12', '01_1519919472.jpg'),
(129, '1212', '<p>1</p>\r\n', '2018-03-01 15:51:39', '01_1519919499.jpg'),
(130, '1212', '<p>1</p>\r\n', '2018-03-01 15:52:14', '01_1519919534.jpg'),
(131, '1212', '<p>1</p>\r\n', '2018-03-01 15:57:20', '01_1519919840.jpg'),
(132, '1212', '<p>1</p>\r\n', '2018-03-01 16:01:31', '01_1519920091.jpg'),
(133, '1212', '<p>1</p>\r\n', '2018-03-01 16:03:16', '01_1519920196.jpg'),
(134, 'as', '<p>as</p>\r\n', '2018-03-01 16:03:28', '01_1519920208.jpg'),
(135, 'sex', '<p>a</p>\r\n', '2018-03-01 16:04:22', '01_1519920262.jpg'),
(136, 'dkqwodqowm', '<p>a</p>\r\n', '2018-03-01 16:06:26', '8d76d739735ef83bc369f46fcc715cc8854b1bba17760f0553be1a2b4cb3329c_1519920386.jpg'),
(137, '1212', '<p>1</p>\r\n', '2018-03-01 16:07:41', '01_1519920461.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_portofolio`
--

CREATE TABLE `kategori_portofolio` (
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_portofolio`
--

INSERT INTO `kategori_portofolio` (`id_kategori`, `judul`) VALUES
(11, 'website'),
(12, '2D_animation'),
(13, 'design');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `komentar` varchar(250) NOT NULL,
  `id_artikel` varchar(250) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama_user`, `email_user`, `komentar`, `id_artikel`, `waktu`) VALUES
(17, 'koko', 'koko@gmail.com', 'kokokoko', '', '2018-04-30 05:39:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_admin`
--

CREATE TABLE `level_admin` (
  `id` int(200) NOT NULL,
  `jenis_admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_admin`
--

INSERT INTO `level_admin` (`id`, `jenis_admin`) VALUES
(1, 'super admin'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `pekerjaan` varchar(500) NOT NULL,
  `tahun_kerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `pekerjaan`, `tahun_kerja`) VALUES
(1, 'guru komputer', 2016),
(2, 'desain grafis ', 2017),
(3, 'mahasiswa', 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(10) NOT NULL,
  `header_judul` varchar(500) NOT NULL,
  `header_tagline` varchar(500) NOT NULL,
  `judul_web` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `header_judul`, `header_tagline`, `judul_web`) VALUES
(1, 'I am is header programer', 'Henhen ganteng first projects on the web.', '@2017 Henhen-Lukmana.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `judul_port` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `judul_port`, `gambar`, `deskripsi`, `kategori`) VALUES
(19, 'Profil', 'Rayhan Nuradithia.jpeg_1525079178.jpg', 'Website profile', '11'),
(20, 'Landing page Bisnis Guru', 'Landing page revisi_1525079356.jpg', 'Landing Page Bisnis Guru', '11'),
(21, 'Digital Innovation', 'Home   Digital Innovation.jpeg_1525079669.jpg', 'Web Digital Innovation', '11'),
(23, 'Portal Kerja', 'web job_1525079784.png', 'Portal Kerja', '11'),
(24, 'Web Jurusan', 'Web Geografi.jpeg_1525080192.jpg', 'Web Jurusan Geografi', '11'),
(26, 'Barkah Hidayat ', 'Barkah Hidayat.jpeg_1525081235.jpg', 'Barkah', '11'),
(27, 'Media Interaktif', 'Capture4_1525081296.jpg', 'Media', '12'),
(28, 'Media interaktif 2', 'Untitled_1525081354.png', 'Media', '12'),
(29, 'Media Interaktif 3', 'Capture1_1525081384.jpg', 'Media', '12'),
(30, 'UI Web', 'Portofolio_1525081691.jpg', 'Web UI', '13'),
(31, 'Web UI2', 'Company Design_1525081716.jpg', 'Web UI', '13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `keahlian` varchar(200) NOT NULL,
  `tentang_saya` varchar(1000) NOT NULL,
  `kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_user`, `nama`, `foto`, `keahlian`, `tentang_saya`, `kontak`) VALUES
(1, 'Henhen Lukmnana', 'profile.jpg', 'UI Designer, Front-End Developer, Teacher of IT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '089654609494');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `SMA` varchar(300) NOT NULL,
  `S1` varchar(300) NOT NULL,
  `jurusan_S1` varchar(300) NOT NULL,
  `S2` varchar(300) NOT NULL,
  `jurusan_S2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `SMA`, `S1`, `jurusan_S1`, `S2`, `jurusan_S2`) VALUES
(1, 'SMAN 3 Tasikmalaya', 'Universitas Pendidikan Indonesia', 'Teknologi Pendidikan', 'Institut Pertanian Bogor', 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `skill` varchar(300) NOT NULL,
  `persentase_skill` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id_skill`, `skill`, `persentase_skill`) VALUES
(1, 'Memanah', '80'),
(2, 'mengaji', '40'),
(3, 'membaca', '70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosial_media`
--

CREATE TABLE `sosial_media` (
  `id_sosmed` int(100) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `linkedin` varchar(300) NOT NULL,
  `instagram` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sosial_media`
--

INSERT INTO `sosial_media` (`id_sosmed`, `facebook`, `linkedin`, `instagram`) VALUES
(1, 'www.facebook.com/Henzs', 'www.linkedin.com/in/hen-hen-lukmana-310934a7', 'www.instagram.com/koko.dwikaputra/?hl=id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id_tag` int(11) NOT NULL,
  `judul_tag` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id_tag`, `judul_tag`) VALUES
(2, 'asmara'),
(1, 'hati'),
(3, 'karir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `status`) VALUES
(1, 'qw', 'koko@localhowst', '$2y$10$T32KDPPOK37x2oT8FUUHKuKdYBH9FWH17B2uhg1fFRXMNevxHcMhy', 'www@q', 1),
(2, 'q', 'q', '$2y$10$Hw.9mkxZXITMfuwR.8G0TOuVouNiy6U6PiZ.9LoXVleV7a7xtlN0y', 'q@localhost', 1),
(3, 'a', 'a', '$2y$10$1qUi24UOvDhrhZoKBVpptu9toKqcq41c.Jfp8l01egIcaijwKy74m', 'a@email.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `kategori_portofolio`
--
ALTER TABLE `kategori_portofolio`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `level_admin`
--
ALTER TABLE `level_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indeks untuk tabel `sosial_media`
--
ALTER TABLE `sosial_media`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tag`),
  ADD UNIQUE KEY `judul_tag` (`judul_tag`) USING BTREE,
  ADD UNIQUE KEY `id_tag` (`id_tag`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT untuk tabel `kategori_portofolio`
--
ALTER TABLE `kategori_portofolio`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `level_admin`
--
ALTER TABLE `level_admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sosial_media`
--
ALTER TABLE `sosial_media`
  MODIFY `id_sosmed` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
