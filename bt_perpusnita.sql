-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jul 2020 pada 09.08
-- Versi Server: 10.1.32-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bt_perpusnita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_inventaris`
--

CREATE TABLE `buku_inventaris` (
  `kd_inventaris` char(10) NOT NULL,
  `kd_buku` char(6) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` enum('Tersedia','Keluar') NOT NULL,
  `id` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_inventaris`
--

INSERT INTO `buku_inventaris` (`kd_inventaris`, `kd_buku`, `tanggal_masuk`, `status`, `id`) VALUES
('B00037.001', 'B00037', '2018-11-07', 'Tersedia', 0),
('B00037.002', 'B00037', '2018-11-07', 'Tersedia', 0),
('B00037.003', 'B00037', '2018-11-07', 'Tersedia', 0),
('B00037.004', 'B00037', '2018-11-07', 'Tersedia', 0),
('B00037.005', 'B00037', '2018-11-07', 'Tersedia', 0),
('B00037.006', 'B00037', '2018-11-07', 'Tersedia', 0),
('B00037.007', 'B00037', '2018-11-07', 'Tersedia', 0),
('B00037.008', 'B00037', '2018-11-07', 'Tersedia', 0),
('B00037.009', 'B00037', '2018-11-07', 'Tersedia', 0),
('B00037.010', 'B00037', '2018-11-07', 'Tersedia', 0),
('B00001.001', 'B00001', '2015-05-23', 'Tersedia', 1),
('B00001.002', 'B00001', '2015-05-23', 'Tersedia', 2),
('B00001.003', 'B00001', '2015-05-23', 'Tersedia', 3),
('B00001.004', 'B00001', '2015-05-23', 'Tersedia', 4),
('B00001.005', 'B00001', '2015-05-23', 'Tersedia', 5),
('B00001.006', 'B00001', '2015-05-23', 'Tersedia', 6),
('B00001.007', 'B00001', '2015-05-23', 'Tersedia', 7),
('B00001.008', 'B00001', '2015-05-23', 'Tersedia', 8),
('B00001.009', 'B00001', '2015-05-23', 'Tersedia', 9),
('B00001.010', 'B00001', '2015-05-23', 'Tersedia', 10),
('B00002.001', 'B00002', '2015-05-23', 'Tersedia', 11),
('B00002.002', 'B00002', '2015-05-23', 'Keluar', 12),
('B00002.003', 'B00002', '2015-05-23', 'Tersedia', 13),
('B00002.004', 'B00002', '2015-05-23', 'Tersedia', 14),
('B00002.005', 'B00002', '2015-05-23', 'Tersedia', 15),
('B00002.006', 'B00002', '2015-05-23', 'Tersedia', 16),
('B00002.007', 'B00002', '2015-05-23', 'Tersedia', 17),
('B00002.008', 'B00002', '2015-05-23', 'Tersedia', 18),
('B00002.009', 'B00002', '2015-05-23', 'Tersedia', 19),
('B00002.010', 'B00002', '2015-05-23', 'Tersedia', 20),
('B00003.001', 'B00003', '2015-05-23', 'Tersedia', 21),
('B00003.002', 'B00003', '2015-05-23', 'Keluar', 22),
('B00003.003', 'B00003', '2015-05-23', 'Tersedia', 23),
('B00003.004', 'B00003', '2015-05-23', 'Tersedia', 24),
('B00003.005', 'B00003', '2015-05-23', 'Tersedia', 25),
('B00003.006', 'B00003', '2015-05-23', 'Tersedia', 26),
('B00003.007', 'B00003', '2015-05-23', 'Tersedia', 27),
('B00003.008', 'B00003', '2015-05-23', 'Tersedia', 28),
('B00003.009', 'B00003', '2015-05-23', 'Tersedia', 29),
('B00003.010', 'B00003', '2015-05-23', 'Tersedia', 30),
('B00004.001', 'B00004', '2015-05-23', 'Tersedia', 31),
('B00004.002', 'B00004', '2015-05-23', 'Tersedia', 32),
('B00004.003', 'B00004', '2015-05-23', 'Tersedia', 33),
('B00004.004', 'B00004', '2015-05-23', 'Tersedia', 34),
('B00004.005', 'B00004', '2015-05-23', 'Tersedia', 35),
('B00004.006', 'B00004', '2015-05-23', 'Tersedia', 36),
('B00004.007', 'B00004', '2015-05-23', 'Tersedia', 37),
('B00004.008', 'B00004', '2015-05-23', 'Tersedia', 38),
('B00004.009', 'B00004', '2015-05-23', 'Tersedia', 39),
('B00004.010', 'B00004', '2015-05-23', 'Tersedia', 40),
('B00005.001', 'B00005', '2015-05-23', 'Tersedia', 41),
('B00005.002', 'B00005', '2015-05-23', 'Tersedia', 42),
('B00005.003', 'B00005', '2015-05-23', 'Tersedia', 43),
('B00005.004', 'B00005', '2015-05-23', 'Tersedia', 44),
('B00005.005', 'B00005', '2015-05-23', 'Tersedia', 45),
('B00005.006', 'B00005', '2015-05-23', 'Tersedia', 46),
('B00005.007', 'B00005', '2015-05-23', 'Tersedia', 47),
('B00005.008', 'B00005', '2015-05-23', 'Tersedia', 48),
('B00005.009', 'B00005', '2015-05-23', 'Tersedia', 49),
('B00005.010', 'B00005', '2015-05-23', 'Tersedia', 50),
('B00006.001', 'B00006', '2015-05-23', 'Tersedia', 51),
('B00006.002', 'B00006', '2015-05-23', 'Tersedia', 52),
('B00006.003', 'B00006', '2015-05-23', 'Tersedia', 53),
('B00006.004', 'B00006', '2015-05-23', 'Tersedia', 54),
('B00006.005', 'B00006', '2015-05-23', 'Tersedia', 55),
('B00006.006', 'B00006', '2015-05-23', 'Tersedia', 56),
('B00006.007', 'B00006', '2015-05-23', 'Tersedia', 57),
('B00006.008', 'B00006', '2015-05-23', 'Tersedia', 58),
('B00006.009', 'B00006', '2015-05-23', 'Tersedia', 59),
('B00006.010', 'B00006', '2015-05-23', 'Tersedia', 60),
('B00007.001', 'B00007', '2015-05-23', 'Tersedia', 61),
('B00007.002', 'B00007', '2015-05-23', 'Tersedia', 62),
('B00007.003', 'B00007', '2015-05-23', 'Tersedia', 63),
('B00007.004', 'B00007', '2015-05-23', 'Tersedia', 64),
('B00007.005', 'B00007', '2015-05-23', 'Tersedia', 65),
('B00007.006', 'B00007', '2015-05-23', 'Tersedia', 66),
('B00007.007', 'B00007', '2015-05-23', 'Tersedia', 67),
('B00007.008', 'B00007', '2015-05-23', 'Tersedia', 68),
('B00007.009', 'B00007', '2015-05-23', 'Tersedia', 69),
('B00007.010', 'B00007', '2015-05-23', 'Tersedia', 70),
('B00008.001', 'B00008', '2015-05-23', 'Tersedia', 71),
('B00008.002', 'B00008', '2015-05-23', 'Tersedia', 72),
('B00008.003', 'B00008', '2015-05-23', 'Tersedia', 73),
('B00008.004', 'B00008', '2015-05-23', 'Tersedia', 74),
('B00008.005', 'B00008', '2015-05-23', 'Tersedia', 75),
('B00008.006', 'B00008', '2015-05-23', 'Tersedia', 76),
('B00008.007', 'B00008', '2015-05-23', 'Tersedia', 77),
('B00008.008', 'B00008', '2015-05-23', 'Tersedia', 78),
('B00008.009', 'B00008', '2015-05-23', 'Tersedia', 79),
('B00008.010', 'B00008', '2015-05-23', 'Tersedia', 80),
('B00009.001', 'B00009', '2015-05-23', 'Tersedia', 81),
('B00009.002', 'B00009', '2015-05-23', 'Tersedia', 82),
('B00009.003', 'B00009', '2015-05-23', 'Tersedia', 83),
('B00009.004', 'B00009', '2015-05-23', 'Tersedia', 84),
('B00009.005', 'B00009', '2015-05-23', 'Tersedia', 85),
('B00009.006', 'B00009', '2015-05-23', 'Tersedia', 86),
('B00009.007', 'B00009', '2015-05-23', 'Tersedia', 87),
('B00009.008', 'B00009', '2015-05-23', 'Tersedia', 88),
('B00009.009', 'B00009', '2015-05-23', 'Tersedia', 89),
('B00009.010', 'B00009', '2015-05-23', 'Tersedia', 90),
('B00010.001', 'B00010', '2015-05-23', 'Tersedia', 91),
('B00010.002', 'B00010', '2015-05-23', 'Tersedia', 92),
('B00010.003', 'B00010', '2015-05-23', 'Tersedia', 93),
('B00010.004', 'B00010', '2015-05-23', 'Tersedia', 94),
('B00010.005', 'B00010', '2015-05-23', 'Tersedia', 95),
('B00010.006', 'B00010', '2015-05-23', 'Tersedia', 96),
('B00010.007', 'B00010', '2015-05-23', 'Tersedia', 97),
('B00010.008', 'B00010', '2015-05-23', 'Tersedia', 98),
('B00010.009', 'B00010', '2015-05-23', 'Tersedia', 99),
('B00010.010', 'B00010', '2015-05-23', 'Tersedia', 100),
('B00011.001', 'B00011', '2015-05-23', 'Tersedia', 101),
('B00011.002', 'B00011', '2015-05-23', 'Tersedia', 102),
('B00011.003', 'B00011', '2015-05-23', 'Tersedia', 103),
('B00011.004', 'B00011', '2015-05-23', 'Tersedia', 104),
('B00011.005', 'B00011', '2015-05-23', 'Tersedia', 105),
('B00011.006', 'B00011', '2015-05-23', 'Tersedia', 106),
('B00011.007', 'B00011', '2015-05-23', 'Tersedia', 107),
('B00011.008', 'B00011', '2015-05-23', 'Tersedia', 108),
('B00011.009', 'B00011', '2015-05-23', 'Tersedia', 109),
('B00011.010', 'B00011', '2015-05-23', 'Tersedia', 110),
('B00012.001', 'B00012', '2015-05-23', 'Tersedia', 111),
('B00012.002', 'B00012', '2015-05-23', 'Tersedia', 112),
('B00012.003', 'B00012', '2015-05-23', 'Tersedia', 113),
('B00012.004', 'B00012', '2015-05-23', 'Tersedia', 114),
('B00012.005', 'B00012', '2015-05-23', 'Tersedia', 115),
('B00012.006', 'B00012', '2015-05-23', 'Tersedia', 116),
('B00012.007', 'B00012', '2015-05-23', 'Tersedia', 117),
('B00012.008', 'B00012', '2015-05-23', 'Tersedia', 118),
('B00012.009', 'B00012', '2015-05-23', 'Tersedia', 119),
('B00012.010', 'B00012', '2015-05-23', 'Tersedia', 120),
('B00013.001', 'B00013', '2015-05-23', 'Tersedia', 121),
('B00013.002', 'B00013', '2015-05-23', 'Tersedia', 122),
('B00013.003', 'B00013', '2015-05-23', 'Tersedia', 123),
('B00013.004', 'B00013', '2015-05-23', 'Tersedia', 124),
('B00013.005', 'B00013', '2015-05-23', 'Tersedia', 125),
('B00013.006', 'B00013', '2015-05-23', 'Tersedia', 126),
('B00013.007', 'B00013', '2015-05-23', 'Tersedia', 127),
('B00013.008', 'B00013', '2015-05-23', 'Tersedia', 128),
('B00013.009', 'B00013', '2015-05-23', 'Tersedia', 129),
('B00013.010', 'B00013', '2015-05-23', 'Tersedia', 130),
('B00014.001', 'B00014', '2015-05-23', 'Tersedia', 131),
('B00014.002', 'B00014', '2015-05-23', 'Tersedia', 132),
('B00014.003', 'B00014', '2015-05-23', 'Tersedia', 133),
('B00014.004', 'B00014', '2015-05-23', 'Tersedia', 134),
('B00014.005', 'B00014', '2015-05-23', 'Tersedia', 135),
('B00014.006', 'B00014', '2015-05-23', 'Tersedia', 136),
('B00014.007', 'B00014', '2015-05-23', 'Tersedia', 137),
('B00014.008', 'B00014', '2015-05-23', 'Tersedia', 138),
('B00014.009', 'B00014', '2015-05-23', 'Tersedia', 139),
('B00014.010', 'B00014', '2015-05-23', 'Tersedia', 140),
('B00015.001', 'B00015', '2015-05-23', 'Tersedia', 141),
('B00015.002', 'B00015', '2015-05-23', 'Tersedia', 142),
('B00015.003', 'B00015', '2015-05-23', 'Tersedia', 143),
('B00015.004', 'B00015', '2015-05-23', 'Tersedia', 144),
('B00015.005', 'B00015', '2015-05-23', 'Tersedia', 145),
('B00015.006', 'B00015', '2015-05-23', 'Tersedia', 146),
('B00015.007', 'B00015', '2015-05-23', 'Tersedia', 147),
('B00015.008', 'B00015', '2015-05-23', 'Tersedia', 148),
('B00015.009', 'B00015', '2015-05-23', 'Tersedia', 149),
('B00015.010', 'B00015', '2015-05-23', 'Tersedia', 150),
('B00016.001', 'B00016', '2015-05-23', 'Tersedia', 151),
('B00016.002', 'B00016', '2015-05-23', 'Tersedia', 152),
('B00016.003', 'B00016', '2015-05-23', 'Tersedia', 153),
('B00016.004', 'B00016', '2015-05-23', 'Tersedia', 154),
('B00016.005', 'B00016', '2015-05-23', 'Tersedia', 155),
('B00016.006', 'B00016', '2015-05-23', 'Tersedia', 156),
('B00016.007', 'B00016', '2015-05-23', 'Tersedia', 157),
('B00016.008', 'B00016', '2015-05-23', 'Tersedia', 158),
('B00016.009', 'B00016', '2015-05-23', 'Tersedia', 159),
('B00016.010', 'B00016', '2015-05-23', 'Tersedia', 160),
('B00017.001', 'B00017', '2015-05-23', 'Tersedia', 161),
('B00017.002', 'B00017', '2015-05-23', 'Tersedia', 162),
('B00017.003', 'B00017', '2015-05-23', 'Tersedia', 163),
('B00017.004', 'B00017', '2015-05-23', 'Tersedia', 164),
('B00017.005', 'B00017', '2015-05-23', 'Tersedia', 165),
('B00017.006', 'B00017', '2015-05-23', 'Tersedia', 166),
('B00017.007', 'B00017', '2015-05-23', 'Tersedia', 167),
('B00017.008', 'B00017', '2015-05-23', 'Tersedia', 168),
('B00017.009', 'B00017', '2015-05-23', 'Tersedia', 169),
('B00017.010', 'B00017', '2015-05-23', 'Tersedia', 170),
('B00018.001', 'B00018', '2015-05-23', 'Tersedia', 171),
('B00018.002', 'B00018', '2015-05-23', 'Tersedia', 172),
('B00018.003', 'B00018', '2015-05-23', 'Tersedia', 173),
('B00018.004', 'B00018', '2015-05-23', 'Tersedia', 174),
('B00018.005', 'B00018', '2015-05-23', 'Tersedia', 175),
('B00018.006', 'B00018', '2015-05-23', 'Tersedia', 176),
('B00018.007', 'B00018', '2015-05-23', 'Tersedia', 177),
('B00018.008', 'B00018', '2015-05-23', 'Tersedia', 178),
('B00018.009', 'B00018', '2015-05-23', 'Tersedia', 179),
('B00018.010', 'B00018', '2015-05-23', 'Tersedia', 180),
('B00019.001', 'B00019', '2015-05-23', 'Tersedia', 181),
('B00019.002', 'B00019', '2015-05-23', 'Tersedia', 182),
('B00019.003', 'B00019', '2015-05-23', 'Tersedia', 183),
('B00019.004', 'B00019', '2015-05-23', 'Tersedia', 184),
('B00019.005', 'B00019', '2015-05-23', 'Tersedia', 185),
('B00019.006', 'B00019', '2015-05-23', 'Tersedia', 186),
('B00019.007', 'B00019', '2015-05-23', 'Tersedia', 187),
('B00019.008', 'B00019', '2015-05-23', 'Tersedia', 188),
('B00019.009', 'B00019', '2015-05-23', 'Tersedia', 189),
('B00019.010', 'B00019', '2015-05-23', 'Tersedia', 190),
('B00020.001', 'B00020', '2015-05-23', 'Tersedia', 191),
('B00020.002', 'B00020', '2015-05-23', 'Tersedia', 192),
('B00020.003', 'B00020', '2015-05-23', 'Tersedia', 193),
('B00020.004', 'B00020', '2015-05-23', 'Tersedia', 194),
('B00020.005', 'B00020', '2015-05-23', 'Tersedia', 195),
('B00020.006', 'B00020', '2015-05-23', 'Tersedia', 196),
('B00020.007', 'B00020', '2015-05-23', 'Tersedia', 197),
('B00020.008', 'B00020', '2015-05-23', 'Tersedia', 198),
('B00020.009', 'B00020', '2015-05-23', 'Tersedia', 199),
('B00020.010', 'B00020', '2015-05-23', 'Tersedia', 200),
('B00021.001', 'B00021', '2015-05-23', 'Tersedia', 201),
('B00021.002', 'B00021', '2015-05-23', 'Tersedia', 202),
('B00021.003', 'B00021', '2015-05-23', 'Tersedia', 203),
('B00021.004', 'B00021', '2015-05-23', 'Tersedia', 204),
('B00021.005', 'B00021', '2015-05-23', 'Tersedia', 205),
('B00021.006', 'B00021', '2015-05-23', 'Tersedia', 206),
('B00021.007', 'B00021', '2015-05-23', 'Tersedia', 207),
('B00021.008', 'B00021', '2015-05-23', 'Tersedia', 208),
('B00021.009', 'B00021', '2015-05-23', 'Tersedia', 209),
('B00021.010', 'B00021', '2015-05-23', 'Tersedia', 210),
('B00022.001', 'B00022', '2015-05-23', 'Tersedia', 211),
('B00022.002', 'B00022', '2015-05-23', 'Tersedia', 212),
('B00022.003', 'B00022', '2015-05-23', 'Tersedia', 213),
('B00022.004', 'B00022', '2015-05-23', 'Tersedia', 214),
('B00022.005', 'B00022', '2015-05-23', 'Tersedia', 215),
('B00022.006', 'B00022', '2015-05-23', 'Tersedia', 216),
('B00022.007', 'B00022', '2015-05-23', 'Tersedia', 217),
('B00022.008', 'B00022', '2015-05-23', 'Tersedia', 218),
('B00022.009', 'B00022', '2015-05-23', 'Tersedia', 219),
('B00022.010', 'B00022', '2015-05-23', 'Tersedia', 220),
('B00023.001', 'B00023', '2015-05-23', 'Tersedia', 221),
('B00023.002', 'B00023', '2015-05-23', 'Tersedia', 222),
('B00023.003', 'B00023', '2015-05-23', 'Tersedia', 223),
('B00023.004', 'B00023', '2015-05-23', 'Tersedia', 224),
('B00023.005', 'B00023', '2015-05-23', 'Tersedia', 225),
('B00023.006', 'B00023', '2015-05-23', 'Tersedia', 226),
('B00023.007', 'B00023', '2015-05-23', 'Tersedia', 227),
('B00023.008', 'B00023', '2015-05-23', 'Tersedia', 228),
('B00023.009', 'B00023', '2015-05-23', 'Tersedia', 229),
('B00023.010', 'B00023', '2015-05-23', 'Tersedia', 230),
('B00024.001', 'B00024', '2015-05-23', 'Tersedia', 231),
('B00024.002', 'B00024', '2015-05-23', 'Tersedia', 232),
('B00024.003', 'B00024', '2015-05-23', 'Tersedia', 233),
('B00024.004', 'B00024', '2015-05-23', 'Tersedia', 234),
('B00024.005', 'B00024', '2015-05-23', 'Tersedia', 235),
('B00024.006', 'B00024', '2015-05-23', 'Tersedia', 236),
('B00024.007', 'B00024', '2015-05-23', 'Tersedia', 237),
('B00024.008', 'B00024', '2015-05-23', 'Tersedia', 238),
('B00024.009', 'B00024', '2015-05-23', 'Tersedia', 239),
('B00024.010', 'B00024', '2015-05-23', 'Tersedia', 240),
('B00025.001', 'B00025', '2015-05-23', 'Tersedia', 241),
('B00025.002', 'B00025', '2015-05-23', 'Tersedia', 242),
('B00025.003', 'B00025', '2015-05-23', 'Tersedia', 243),
('B00025.004', 'B00025', '2015-05-23', 'Tersedia', 244),
('B00025.005', 'B00025', '2015-05-23', 'Tersedia', 245),
('B00025.006', 'B00025', '2015-05-23', 'Tersedia', 246),
('B00025.007', 'B00025', '2015-05-23', 'Tersedia', 247),
('B00025.008', 'B00025', '2015-05-23', 'Tersedia', 248),
('B00025.009', 'B00025', '2015-05-23', 'Tersedia', 249),
('B00025.010', 'B00025', '2015-05-23', 'Tersedia', 250),
('B00026.001', 'B00026', '2015-05-23', 'Tersedia', 251),
('B00026.002', 'B00026', '2015-05-23', 'Tersedia', 252),
('B00026.003', 'B00026', '2015-05-23', 'Tersedia', 253),
('B00026.004', 'B00026', '2015-05-23', 'Tersedia', 254),
('B00026.005', 'B00026', '2015-05-23', 'Tersedia', 255),
('B00026.006', 'B00026', '2015-05-23', 'Tersedia', 256),
('B00026.007', 'B00026', '2015-05-23', 'Tersedia', 257),
('B00026.008', 'B00026', '2015-05-23', 'Tersedia', 258),
('B00026.009', 'B00026', '2015-05-23', 'Tersedia', 259),
('B00026.010', 'B00026', '2015-05-23', 'Tersedia', 260),
('B00027.001', 'B00027', '2015-05-23', 'Tersedia', 261),
('B00027.002', 'B00027', '2015-05-23', 'Tersedia', 262),
('B00027.003', 'B00027', '2015-05-23', 'Tersedia', 263),
('B00027.004', 'B00027', '2015-05-23', 'Tersedia', 264),
('B00027.005', 'B00027', '2015-05-23', 'Tersedia', 265),
('B00027.006', 'B00027', '2015-05-23', 'Tersedia', 266),
('B00027.007', 'B00027', '2015-05-23', 'Tersedia', 267),
('B00027.008', 'B00027', '2015-05-23', 'Tersedia', 268),
('B00027.009', 'B00027', '2015-05-23', 'Tersedia', 269),
('B00027.010', 'B00027', '2015-05-23', 'Tersedia', 270),
('B00028.001', 'B00028', '2015-05-23', 'Tersedia', 271),
('B00028.002', 'B00028', '2015-05-23', 'Tersedia', 272),
('B00028.003', 'B00028', '2015-05-23', 'Tersedia', 273),
('B00028.004', 'B00028', '2015-05-23', 'Tersedia', 274),
('B00028.005', 'B00028', '2015-05-23', 'Tersedia', 275),
('B00028.006', 'B00028', '2015-05-23', 'Tersedia', 276),
('B00028.007', 'B00028', '2015-05-23', 'Tersedia', 277),
('B00028.008', 'B00028', '2015-05-23', 'Tersedia', 278),
('B00028.009', 'B00028', '2015-05-23', 'Tersedia', 279),
('B00028.010', 'B00028', '2015-05-23', 'Tersedia', 280),
('B00029.001', 'B00029', '2015-05-23', 'Tersedia', 281),
('B00029.002', 'B00029', '2015-05-23', 'Tersedia', 282),
('B00029.003', 'B00029', '2015-05-23', 'Tersedia', 283),
('B00029.004', 'B00029', '2015-05-23', 'Tersedia', 284),
('B00029.005', 'B00029', '2015-05-23', 'Tersedia', 285),
('B00029.006', 'B00029', '2015-05-23', 'Tersedia', 286),
('B00029.007', 'B00029', '2015-05-23', 'Tersedia', 287),
('B00029.008', 'B00029', '2015-05-23', 'Tersedia', 288),
('B00029.009', 'B00029', '2015-05-23', 'Tersedia', 289),
('B00029.010', 'B00029', '2015-05-23', 'Tersedia', 290),
('B00030.001', 'B00030', '2015-05-23', 'Tersedia', 291),
('B00030.002', 'B00030', '2015-05-23', 'Tersedia', 292),
('B00030.003', 'B00030', '2015-05-23', 'Tersedia', 293),
('B00030.004', 'B00030', '2015-05-23', 'Tersedia', 294),
('B00030.005', 'B00030', '2015-05-23', 'Tersedia', 295),
('B00030.006', 'B00030', '2015-05-23', 'Tersedia', 296),
('B00030.007', 'B00030', '2015-05-23', 'Tersedia', 297),
('B00030.008', 'B00030', '2015-05-23', 'Tersedia', 298),
('B00030.009', 'B00030', '2015-05-23', 'Tersedia', 299),
('B00030.010', 'B00030', '2015-05-23', 'Tersedia', 300),
('B00031.001', 'B00031', '2015-05-23', 'Tersedia', 301),
('B00031.002', 'B00031', '2015-05-23', 'Tersedia', 302),
('B00031.003', 'B00031', '2015-05-23', 'Tersedia', 303),
('B00031.004', 'B00031', '2015-05-23', 'Tersedia', 304),
('B00031.005', 'B00031', '2015-05-23', 'Tersedia', 305),
('B00031.006', 'B00031', '2015-05-23', 'Tersedia', 306),
('B00031.007', 'B00031', '2015-05-23', 'Tersedia', 307),
('B00031.008', 'B00031', '2015-05-23', 'Tersedia', 308),
('B00031.009', 'B00031', '2015-05-23', 'Tersedia', 309),
('B00031.010', 'B00031', '2015-05-23', 'Tersedia', 310),
('B00032.001', 'B00032', '2015-05-23', 'Tersedia', 311),
('B00032.002', 'B00032', '2015-05-23', 'Tersedia', 312),
('B00032.003', 'B00032', '2015-05-23', 'Tersedia', 313),
('B00032.004', 'B00032', '2015-05-23', 'Tersedia', 314),
('B00032.005', 'B00032', '2015-05-23', 'Tersedia', 315),
('B00032.006', 'B00032', '2015-05-23', 'Tersedia', 316),
('B00032.007', 'B00032', '2015-05-23', 'Tersedia', 317),
('B00032.008', 'B00032', '2015-05-23', 'Tersedia', 318),
('B00032.009', 'B00032', '2015-05-23', 'Tersedia', 319),
('B00032.010', 'B00032', '2015-05-23', 'Tersedia', 320),
('B00033.001', 'B00033', '2015-05-23', 'Tersedia', 321),
('B00033.002', 'B00033', '2015-05-23', 'Tersedia', 322),
('B00033.003', 'B00033', '2015-05-23', 'Tersedia', 323),
('B00033.004', 'B00033', '2015-05-23', 'Tersedia', 324),
('B00033.005', 'B00033', '2015-05-23', 'Tersedia', 325),
('B00033.006', 'B00033', '2015-05-23', 'Tersedia', 326),
('B00033.007', 'B00033', '2015-05-23', 'Tersedia', 327),
('B00033.008', 'B00033', '2015-05-23', 'Tersedia', 328),
('B00033.009', 'B00033', '2015-05-23', 'Tersedia', 329),
('B00033.010', 'B00033', '2015-05-23', 'Tersedia', 330),
('B00034.001', 'B00034', '2015-05-23', 'Tersedia', 331),
('B00034.002', 'B00034', '2015-05-23', 'Tersedia', 332),
('B00034.003', 'B00034', '2015-05-23', 'Tersedia', 333),
('B00034.004', 'B00034', '2015-05-23', 'Tersedia', 334),
('B00034.005', 'B00034', '2015-05-23', 'Tersedia', 335),
('B00034.006', 'B00034', '2015-05-23', 'Tersedia', 336),
('B00034.007', 'B00034', '2015-05-23', 'Tersedia', 337),
('B00034.008', 'B00034', '2015-05-23', 'Tersedia', 338),
('B00034.009', 'B00034', '2015-05-23', 'Tersedia', 339),
('B00034.010', 'B00034', '2015-05-23', 'Tersedia', 340),
('B00035.001', 'B00035', '2015-05-23', 'Tersedia', 341),
('B00035.002', 'B00035', '2015-05-23', 'Tersedia', 342),
('B00035.003', 'B00035', '2015-05-23', 'Tersedia', 343),
('B00035.004', 'B00035', '2015-05-23', 'Tersedia', 344),
('B00035.005', 'B00035', '2015-05-23', 'Tersedia', 345),
('B00035.006', 'B00035', '2015-05-23', 'Tersedia', 346),
('B00035.007', 'B00035', '2015-05-23', 'Tersedia', 347),
('B00035.008', 'B00035', '2015-05-23', 'Tersedia', 348),
('B00035.009', 'B00035', '2015-05-23', 'Tersedia', 349),
('B00035.010', 'B00035', '2015-05-23', 'Tersedia', 350),
('B00036.001', 'B00036', '2015-05-23', 'Tersedia', 351),
('B00036.002', 'B00036', '2015-05-23', 'Tersedia', 352),
('B00036.003', 'B00036', '2015-05-23', 'Tersedia', 353),
('B00036.004', 'B00036', '2015-05-23', 'Tersedia', 354),
('B00036.005', 'B00036', '2015-05-23', 'Tersedia', 355),
('B00036.006', 'B00036', '2015-05-23', 'Tersedia', 356),
('B00036.007', 'B00036', '2015-05-23', 'Tersedia', 357),
('B00036.008', 'B00036', '2015-05-23', 'Tersedia', 358),
('B00036.009', 'B00036', '2015-05-23', 'Tersedia', 359),
('B00036.010', 'B00036', '2015-05-23', 'Tersedia', 360);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_peminjaman` char(7) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_harus_kembali` date NOT NULL,
  `kd_mahasiswa` char(5) NOT NULL,
  `kd_inventaris` char(10) NOT NULL,
  `status_pinjam` enum('Pinjam','Kembali') NOT NULL,
  `kd_user` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_peminjaman`, `tgl_peminjaman`, `tgl_harus_kembali`, `kd_mahasiswa`, `kd_inventaris`, `status_pinjam`, `kd_user`) VALUES
('PJ00001', '2018-11-10', '2018-11-09', 'M0001', 'B00001.002', 'Kembali', 'U01'),
('PJ00002', '2018-11-10', '2018-11-13', 'M0005', 'B00002.007', 'Kembali', 'U01'),
('PJ00003', '2018-11-10', '2018-11-13', 'M0002', 'B00001.001', 'Kembali', 'U01'),
('PJ00004', '2018-11-12', '2018-11-15', 'M0010', 'B00002.001', 'Kembali', 'U01'),
('PJ00005', '2018-11-12', '2018-11-16', 'M0018', 'B00006.002', 'Kembali', 'U01'),
('PJ00006', '2018-11-12', '2018-11-16', 'M0015', 'B00005.003', 'Kembali', 'U01'),
('PJ00007', '2018-11-28', '2018-11-30', 'M0007', 'B00003.002', 'Pinjam', 'U01'),
('PJ00008', '2018-11-28', '2018-11-30', 'M0013', 'B00002.002', 'Pinjam', 'U01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `no_pengembalian` char(7) NOT NULL,
  `no_peminjaman` char(7) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` int(12) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kd_user` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`no_pengembalian`, `no_peminjaman`, `tgl_kembali`, `denda`, `keterangan`, `kd_user`) VALUES
('PK00001', 'PJ00001', '2018-11-10', 5000, 'sampul buku ada coretan', 'U01'),
('PK00002', 'PJ00003', '2018-11-10', 0, 'pengembalian sebelum batas ', 'U01'),
('PK00003', 'PJ00002', '2018-11-28', 5000, 'terlambat', 'U01'),
('PK00004', 'PJ00004', '2018-11-28', 10000, 'terlmabat kembali', 'U01'),
('PK00005', 'PJ00005', '2018-11-28', 10000, 'terlambat kembali', 'U01'),
('PK00006', 'PJ00006', '2018-11-28', 10000, 'terlambat kembali', 'U01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `kd_anggota` varchar(20) NOT NULL,
  `nm_anggota` varchar(100) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status_pinjam` enum('Bebas','Pinjam') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`kd_anggota`, `nm_anggota`, `kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `foto`, `status_pinjam`, `username`, `password`, `date_created`) VALUES
('M0001', 'Indah Indriyanna', 'P', 'Islam', 'Way Jepara', '1982-10-25', 'Jl. Suhada, Way Jepara, Lampung Timur', '081911112345', 'M0001.indah.png', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0002', 'Septi Suhesti', 'P', 'Islam', 'Labuhan Ratu Satu', '1989-09-12', 'Jl. Syuhada, Labuhan Ratu Satu, Way Jepara', '085629002922', 'M0002.septi 2.png', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0003', 'Bunafit Nugroho', 'L', 'Islam', 'Labuhan Ratu Satu', '1982-09-14', 'Jl. Suhada, Way Jepara, Lampung Timur', '081325165478', 'M0003.bunafit 2.png', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0004', 'Ummu Anitya Ningrum', 'P', 'Islam', 'Lampung Timur', '1998-12-22', 'Jl. Lebak Rejo No 115 Way Jepara', '081325123564', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0007', 'Arif Wahyu Raharjo ', 'L', 'Islam', 'Palembang', '1996-01-19', 'Jl. Babatan No 4 Way Jepara, Lampung Timur', '082311593454', '', 'Pinjam', '0', '0', '2020-01-14 23:45:27'),
('M0008', 'Arista Oktaviani ', 'P', 'Kristen', 'Bandar Lampung', '1996-10-27', 'Jl. Babatan No 125 Way Jepara, Lampung Timur', '082315559789', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0009', 'Charenina Palupi', 'P', 'Kristen', 'Bandar Lampung', '1996-06-17', 'Jl. Babatan No 15 Way Jepara, Lampung Timur', '082175268855', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0010', 'Dita Halima Aprilia', 'P', 'Islam', 'Bandar Lampung', '1996-04-15', 'Jl. Bendul Merisi Gg Besar Selatan No. 38E', '082377757707', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0011', 'Ferthi Uspita Caturina', 'P', 'Katolik', 'Way Urang', '1996-09-15', 'Jl. Kedung Pengkol Gg 1 Seno No 78B Sukadana, Lampung Timur', '082175786545', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0012', 'Ikhlas Rafsanjani', 'L', 'Islam', 'Bandar Lampung', '1996-08-26', 'Jl. Kedung Pengkol Gg 2 Seno No 56A Sukadana, Lampung Timur', '085729002965', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0013', 'Ahmad Azzam Al Asyraf ', 'L', 'Islam', 'Bandar Lampung', '1996-08-02', 'Jl. Bogen II/19A Way Jepara, Lampung Timur', '085643660660', '', 'Pinjam', '0', '0', '2020-01-14 23:45:27'),
('M0014', 'Bagus Robbiyanto', 'L', 'Islam', 'Bandar Lampung', '1996-03-06', 'Jl. Bulak Rukem Timur IIab/8 Plangkawati, Way Jepara', '085729876767', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0015', 'Mira Ismayanti ', 'P', 'Islam', 'Bandar Lampung', '1996-05-26', 'Jl. Driyorejo Blok Intan 212 Braja Asri, Way Jepara', '085643555666', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0016', 'Muhammad Aprianto ', 'L', 'Islam', 'Bandar Lampung', '1995-04-05', 'Jl. Dukuh Kupang Gg Lebar No 39C Simpang Sribawono', '085729002922', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0017', 'Nadya Pratiwi', 'P', 'Islam', 'Bandar Lampung', '1996-09-19', 'Jl. Dukuh Kupang Timur 19/60 Simpang Sribawono', '081541373489', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0018', 'Novia Sari Suwito Putri', 'P', 'Islam', 'Bandar Lampung', '1995-11-05', 'Jl. Gubeng Jaya II / 24 Braja Sakti, Way Jepara', '081541888789', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0019', 'Novita Dwi Lestari ', 'P', 'Kristen', 'Bandar Lampung', '1996-11-17', 'Jl. Jojoran 1 No 65G Way Jepara, Lampung Timur', '085357110575', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0021', 'Rizki Nurahman ', 'L', 'Islam', 'Kotabumi', '1996-10-21', 'Jl. Jojoran 1 No 97G Way Jepara, Lampung Timur', '081272284905', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0022', 'Satrio Bayu Saputra', 'L', 'Islam', 'Bandar Lampung', '1996-02-11', 'Jl. Jojoran I Blok AC No 20 Way Jepara, Lampung Timur', '085357402929', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0023', 'Selvi Herdiani ', 'P', 'Islam', 'Jakarta', '1996-09-05', 'Jl. Jojoran I Blok AC No 598 Way Jepara, Lampung Timur', '085727998979', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0024', 'Shahelia Hakim ', 'P', 'Islam', 'Pekanbaru', '1997-02-02', 'Jl. Jojoran I Blok AC No 56 Way Jepara, Lampung Timur', '081278929096', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0025', 'Sintia Ultari Agripinna Putri ', 'P', 'Islam', 'Kalianda', '1996-08-17', 'Jl. Jojoran I Blok AC No 120 Way Jepara, Lampung Timur', '081278879999', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0026', 'Vania Liandra Utami ', 'P', 'Islam', 'Tanjung Karang', '1996-04-29', 'Jl. Kalilom Lor Indah Melati No 42 Sukada, Lampung Timur', '081325987808', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0027', 'Wika Oktavia Mawarni', 'P', 'Islam', 'Bandar Lampung', '1996-10-03', 'Jl. Kalilom Lor Indah Melati No 85 Sukada, Lampung Timur', '085727889969', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0028', 'A. Yapri Indrawan', 'L', 'Islam', 'Bandar Lampung', '1996-10-09', 'Jl. Kalilom Lor Indah Melati No 96 Sukada, Lampung Timur', '085729555666', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0029', 'Agra Nugraha Eka Putra', 'L', 'Islam', 'Pringsewu', '1996-01-15', 'Jl. Kalilom Lor Indah Melati No 05 Sukada, Lampung Timur', '085643998789', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0030', 'Ahmad Ichsan ', 'L', 'Islam', 'Bandar Lampung', '1996-03-17', 'Jl. Kampung Malang Utara 7/2A Metro', '082379193085', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0031', 'Akbar Ramadha', 'L', 'Islam', 'Tanjung Karang', '1996-02-04', 'Jl. Kapasan Kidul 5 No. 08 Sukadana, Lampung Timur', '085840863724', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0032', 'Mas Achmad Hadiansyah', 'L', 'Islam', 'Bandar Lampung', '1996-09-29', 'Jl. Kapasan Kidul 5 No. 56 Sukadana, Lampung Timur', '085383523808', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0033', 'Deni Pranata Wiguna ', 'L', 'Islam', 'Bandar Lampung', '1996-03-04', 'Jl. Kapasan Kidul 5 No. 69 Sukadana, Lampung Timur', '081279151506', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0034', 'Yudi Purwanto', 'L', 'Kristen', 'Bandar Lampung', '1996-08-06', 'Jl. Kedinding Lo Kemuning Gg II/64 Way Jepara, Lampung Timur', '082371752228', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0035', 'Ria Andriana', 'P', 'Islam', 'Bandar Lampung', '1996-09-08', 'Jl. Kedung Pengkol Gg 1 Seno No 53B Sukadana, Lampung Timur', '082226569326', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0036', 'Azizah Huwaida', 'P', 'Islam', 'Bandar Lampung', '1996-09-09', 'Jl. Kedung Pengkol Gg 1 Seno No 87C Sukadana, Lampung Timur', '083863524605', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0037', 'Siti Rahmani', 'P', 'Islam', 'Bandar Lampung', '1996-11-16', 'Jl. Lasem No 50A Braja Indah, Way Jepara', '081379466004', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0038', 'Aggy Rachman Putra', 'L', 'Islam', 'Bandar Lampung', '1996-10-31', 'Jl. Komp Sidotopo Dipo 2 No 8 Braja Asri, Way Jepara', '081272754949', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0039', 'Nurul Aini Hilman', 'P', 'Islam', 'Lampung Timur', '1998-05-13', 'Jl. Oro-Oro 1 26 D Braja Indah, Way Jepara', '08127976954', '', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('M0040', 'Hernanto Nanung', 'L', 'Islam', 'Wates Kulon Progo', '2001-11-07', 'Jl. Braja Indah Baru, Braja Sakti 2, Way Jepara', '0819222233344', 'M0040.linux.jpg', 'Bebas', '0', '0', '2020-01-14 23:45:27'),
('AG163218924907350', 'Aswar kasim', 'L', 'Islam', 'asdsd', '2020-01-15', 'Karossa', '213213', 'ARNI_NOISE.jpeg', 'Bebas', '0', '0', '2020-01-14 23:51:08'),
('AG203137685579602', 'Arnanda', 'P', 'Islam', 'Karossa', '2020-03-02', 'jl. xxxx', '43423', 'ARNANDA1.jpeg', 'Bebas', '0', '0', '2020-03-31 13:39:21'),
('sdfsdfs', 'Aswar Kasim Asdsd', 'L', 'Islam', 'Pangale', '2020-04-14', 'Jl. Dg. Hayo', '223432', 'Assa_sendiri.jpg', 'Bebas', 'aswarkasim', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2020-04-11 06:11:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `kd_buku` char(6) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `jumlah_halaman` int(4) NOT NULL,
  `bonus` varchar(20) NOT NULL,
  `bahasa` varchar(20) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `lokasi_rak` varchar(20) NOT NULL,
  `kd_penerbit` char(4) NOT NULL,
  `kd_kategori` char(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`kd_buku`, `judul_buku`, `isbn`, `penulis`, `tahun_terbit`, `jumlah_halaman`, `bonus`, `bahasa`, `jumlah`, `cover`, `sinopsis`, `lokasi_rak`, `kd_penerbit`, `kd_kategori`, `date_created`) VALUES
('B00001', 'Membangun Web Interaktif dengan Adobe Dreamweaver CS5.5, PHP & MySQL  ', '9789792932546', 'Wahana Komputer', 2012, 206, '-', 'Indonesia', 10, 'bukuDefault.jpg', '<p>Adobe Dreamweaver CS5.5 merupakan aplikasi web editor paling lengkap untuk membangun sebuah aplikasi website. Dengan berbagai kemudahan serta fitur yang dimiliki membuat aplikasi ini menjadi pilihan utama bagi kebanyakan pengembang website. Dalam membangun aplikasi website, pengguna sangat dimanjakan karena tidak perlu mengetikkan kode HTML satu persatu. Sedangkan untuk menghasilkan sebuah aplikasi web interaktif dan dinamis diperlukan suatu bahasa pemrograman server side yang andal. PHP merupakan salah satu bahasa pemrograman server side andal yang digunakan oleh kebanyakan pengembang web. Jika digabungkan dengan database MySQL, keduanya mampu menghasilkan suatu aplikasi web database yang sempurna. Buku ini mengajarkan kepada Anda tentang penggunaan Adobe Dreamweaver CS5, PHP, serta MySQL untuk membangun sebuah website interaktif. Dengan pembahasan yang dilakukan secara step by step, diharapkan Anda dapat dengan mudah mencerna setiap materi yang disajikan.</p>\r\n\r\n<p>Lebih lengkap, buku ini membahas:</p>\r\n\r\n<p>&bull; Bab 1 Mengoperasikan Adobe Dreamweaver CS5.5</p>\r\n\r\n<p>&bull; Bab 2 Mengelola Website dengan Adobe Dreamweaver</p>\r\n\r\n<p>&bull; Bab 3 Menggunakan Bahasa Pemrograman PHP</p>\r\n\r\n<p>&bull; Bab 4 Membuat Website Secara Teori</p>\r\n\r\n<p>&bull; Bab 5 Membuat Website dengan PHP dan MySQL</p>\r\n', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00003', 'Semua Bisa Menjadi Programmer Java - Basic Programming', '9789792781090', 'Yuniar Supardi', 2010, 512, '-', 'Indonesia', 10, 'bukuDefault1.jpg', '<p>Buku Basic Programming Java ini merupakan buku yang dapat memandu pembaca mendalami pemrograman Java. Materi pembahasan disajikan dalam beberapa sesi. Setiap sesi dapat Anda ikuti tanpa harus berurutan. Dalam sesi awal membahas dasar dan pengantar Java. Dan sesi selanjutnya membahas beberapa editor bahasa pemrograman Java yang populer, seperti NetBeans, Jcreator, Gel hingga Notepad, serta instruksi algoritma (pencabangan, pengulangan, array dan lain-lain). Selain itu, Anda juga akan mengetahui desain database dengan ERD dan Normalisasi, serta perbedaannya. Topik yang dibahas dalam buku mencakup: - Mengenal Java - Komponen Program Java - Program Pencabangan dan Pengulangan - Variabel Array, Angka (Number) dan Karakter - String dan Konversi Data - PBO, Sistem I/O dan Stream - JFrame dan Layout Manager - Event, GUI di Java - Desain Database</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00004', 'Pemrograman Dasar Visual Basic 2013', '9786020249711', 'Rully Yulian', 2014, 264, '-', 'Indonesia', 10, 'bukuDefault2.jpg', '<p>Merupakan salah satu sumber pembelajaran pemrograman Visual Basic 2013 yang disusun dengan menitikberatkan pada praktik secara langsung dengan penjelasan teori yang singkat, jelas, dan disertai gambar. Para pembaca diharapkan dapat lebih memahami konsep</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00005', 'Visual Basic 2013 untuk Pemula ', '9786020230788', 'Jubilee Enterprise ', 2014, 160, '-', 'Indonesia', 10, 'bukuDefault3.jpg', '<p>Jika Anda ingin belajar pemrograman yang gampang, maka mulailah dengan Visual Basic. Yang Anda butuhkan hanyalah MS Windows 7 atau 8, dan MS Visual Studio 2013 yang dapat di-download dengan mudah dari situs Microsoft. Setelah itu, beli dan baca buku ini. Dengan pembahasan yang sangat mudah dimengerti oleh orang awam sekalipun, Anda akan diajarkan bagaimana cara membuat aplikasi berbasis desktop secara cepat dan mudah menggunakan Visual Basic. Anda akan mengenal berbagai kontrol, properti, function, procedure, dan unsur-unsur lainnya dalam Visual Basic untuk pembuatan aplikasi, seperti penghitung luas dan keliling persegi empat, picture viewer, menggerakkan gambar menggunakan anak-anak panah, penghitung deposito, simulator kredit pemilikan mobil, dan sebagainya. Membahas dengan gaya bahasa yang sangat sederhana namun praktis sehingga para pelajar yang baru ingin mengenal dunia pemrograman pun bisa mengikuti dengan baik. Di akhir bab, Anda akan mempelajari cara memublikasikan aplikasi sehingga bisa diklik dari tombol Start dan mengenal berbagai tip dan trik Visual Basic, seperti menciptakan jendela aplikasi yang transparan hingga mengetahui situs online gratis untuk pembuatan ikon.</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00006', 'Professional Graphic Design With Coreldraw Edisi Revisi + Cd', '9786020248950', 'Suparno Sastra M', 2014, 144, 'CD', 'Indonesia', 10, 'bukuDefault4.jpg', '<p>Merupakan buku yang berisi tutorial dan latihan praktis aplikasi CorelDraw untuk membuat berbagai desain proyek kreatif bagi keperluan personal dan bisnis, maupun company. Pembaca dapat menemukan berbagai cara untuk membuat bentuk-bentuk desain proyek kreatif di bidang desain grafis, publishing, advertising, properti, akademik, entertain maupun bidang lain, di mana pembahasannya disajikan langkah demi langkah (step by step) yang dilengkapi ilustrasi dan gambar visual untuk mempermudah pembaca dalam mengaplikasikan buku ini. Sebagai program pengolah desain grafis yang familier dan paling diminati di kalangan desainer grafis, CorelDRAW dapat dieksplorasi melalui tool-tool maupun efek yang bisa menghasilkan berbagai bentuk desain yang inovatif dan ekspresif dengan komposisi warna yang sangat menarik. Selain itu juga dilengkapi dengan fasilitas pendukung yang sangat memudahkan bagi para desainer grafis dalam membuat objek-objek unik dan kreatif. Setelah menggunakan buku ini, pembaca dapat membuat sendiri bentuk-bentuk kreasi desain grafis, lengkap dengan efek-efek spesial secara profesional untuk keperluan segala bidang. Materi yang dibahas dalam buku mencakup: - Clothing Part 1: Desain T-Shirt - Desain Kalender Meja - Clothing Part 2: Desain Jaket - Baliho Real Estate - Seni Corat-coret: Graffiti - Desain Kartu Ultah - Desain Baliho Ruko - Desain Poster Konser - Logo Production House - Desain Company Profile - Desain Brosur Perumahan</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00007', 'Membuat Website Mudah dan Praktis dengan Weebly ', '9786020246987', 'Fathurrahman , S.Pd', 2014, 132, '-', 'Indonesia', 10, 'bukuDefault9.jpg', '<p>Saat ini mungkin sudah banyak buku yang mengulas secara detail tentang pembuatan website, baik menggunakan photoshop, dreamweaver, hingga software yang menyediakan fasilitas untuk membangun sebuah website. Tetapi pada kenyataannya, buku-buku tersebut hanya bisa dimengerti oleh orang yang memang sudah mengerti tentang dasar pembuatan web atau orang yang sekolah di bidang pembuatan website. Dalam buku ini, Anda akan dituntun secara step by step dalam membangun website tanpa perlu mengerti bahasa pemrograman seperti HTML, PHP, Javascript, dan lainnya. Anda hanya perlu menggunakan tools yang disediakan dengan cara yang mudah dan praktis tanpa harus melakukan edit programming dalam tiap tahap membangun website milik Anda, dan tentunya dengan hasil tampilan layaknya website profesional. Lebih jauh, pembahasan dalam buku mencakup: - Pengenalan awal weebly - Tutorial registrasi weebly - Menentukan tema, judul, dan deskripsi website - Penyusunan pages dan menu bar website - Tutorial desain halaman website - Publishing dan penggunaan hyperlink website - Pembelian domain dari weebly - Mendaftarkan website ke search engine</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00008', 'Menyelesaikan Website 12 Juta secara Profesional ', '9786020226071', 'Agus Saputra, Feni Agustin, CV ASFA Solution ', 2013, 200, '-', 'Indonesia', 10, 'bukuDefault5.jpg', '<p>Rasanya tidak ada perusahaan yang tidak menginginkan website company profile. Hampir semua perusahaan memiliki web tersebut, karena dengan sebuah website company profile, dapat mewakili perusahaan untuk mempromosikan, mempresentasikan, mem-branding-kan, bahkan meningkatkan citra perusahaan kepada masyarakat. Dengan website itu juga, perusahaan mendapatkan daya saing dengan perusahaan lain. Website yang baik mencirikan seberapa besar perusahaan tersebut. Buku ini merupakan salah satu kompilasi project bernilai 12 Juta Rupiah atau setara $1,200 yang berhasil diselesaikan penulis selama menjabat sebagai pemimpin di ASFA Solution (Perusahaan Software Development berbasis di Cirebon). Pada buku ini dibahas mengenai perancangan dasar, dari mulai Alur Perancangan dan Database, DFD, DFD Level, Flowchart, ERD, Relasi Antartabel, hingga pada implementasi Website. Sehingga dari segi perancangan tersebut menghasilkan suatu Exclusive Project berbasis Website. Penasaran?.. Beli saja bukunya ..</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00009', 'Bikin Website Dengan Aplikasi-aplikasi Gratis + CD  ', '9789798773655', 'Mulyana Sandi', 2014, 112, 'CD', 'Indonesia', 10, 'bukuDefault6.jpg', '<p>Banyak cara dalam membuat sebuah web mulai dari mengenal bahasa pemograman, mengenal server hingga bagaimana meng-upload-nya. Berbeda dengan buku-buku yang lain, buku ini akan membahas secara singkat dan jelas bikin website sehingga Anda akan mudah memahami serta menguasai pembuatan web dari nol hingga jadi. Dengan disertainya CD pada buku ini, Anda akan semakin mudah untuk langsung bikin website dan mengimplementasikan serta mempublikasikannya secara online. Pembahasan dalam buku ini: - Penggunaan Aplikasi Gratis - Web Server dengan XAMPP - Pemrograman PHP - Content Management System (CMS) - Domain dan Hosting</p>\r\n', 'Rak Buku', 'P003', 'K002', '2020-01-15 02:41:08'),
('B00010', 'Cara Mudah dan Praktis Bekerja dengan AutoCAD + CD', '9786020240008', 'Suparno Sastra M', 2014, 300, 'CD', 'Indonesia', 10, 'bukuDefault7.jpg', '<p>Alternatif mendasar untuk memenuhi tuntutan kebutuhan penggunaan CAD (Computer Aided Design) dalam proses pembuatan desain yang berkualitas adalah tersedianya perangkat keras yang canggih dan resource yang andal. Target yang selalu digunakan oleh perusahaan adalah menjadi yang pertama dan terbaik pada sebuah ajang kompetisi desain, serta unggul dalam persaingan (competitive advantage). Untuk itu dalam sebuah perusahaan rekayasa engineering serta studio desain visual maupun yang lain, pastinya tidak pernah bisa lepas dari adanya tuntutan seperti hal tersebut di atas. Buku ini dapat digunakan oleh semua pemakai komputer grafis, animator, desainer web, Grafik - CAD maupun desainer manufaktur dalam semua bidang teknik serta praktisi profesional yang bergerak dalam bidang teknik, industri, rancang bangun, dan pemodelan desain visual. Juga bisa digunakan oleh semua mahasiswa jurusan teknik maupun pelajar. Setelah membaca buku ini, Anda akan memiliki skill dan pengetahuan praktis serta aplikatif tentang cara membuat model desain teknik dalam segala bidang maupun bekerja lintas software menggunakan software AutoCAD berbagai release (All release relevention). Materi yang dibahas dalam buku mencakup: - Aplikasi Fitur-Fitur Workshop - Aplikasi Perangkat Gambar dan Edit - Jenis Eksekusi Perintah AutoCAD - Notasi Text, Dimension, dan Inquiry - Perangkat Kendali Tampilan dan Utility - Bekerja dengan Gambar Block - Teknik Pencetakan Gambar - Setting UCS dan Pra-Desain 3D - Menggambar Objek Solid 3D dan Surface - 3D Modeling untuk Berbagai Industri Manufakturing dan Rancang Bangun - Bekerja Lintas Software - Finishing, Teknik Presentasi Desain, dan Membuat Animasi Desain</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00011', 'Jago Corel Draw X6 Untuk Pemula dan Orang Awam Edisi Terbaru', '9786029146479', 'Ibrahim Hanif ', 2014, 0, 'CD Tutorial ', 'Indonesia', 10, 'bukuDefault8.jpg', '<p>CorelDraw adalah aplikasi pengolah gambar atau pembuatan objek (making Image) yang sangat populer dan banyak digunakan oleh berbagai kalangan dalam berbagai bidang. Hal ini dikarenakan CorelDraw memiliki banyak sekali keunggulan dalam kualitas gambar. Buku Jago CorelDraw X6 merupakan one-stop tutorial/reference yang berisi langkah-langkah cepat dan mudah dalam menguasai CorelDraw X6. Dalam buku ini, Anda akan mendapatkan beragam langkah praktis tentang bagaimana menciptakan gambar-gambar menawan untuk berbagai keperluan. Buku ini sangat ideal baik bagi pemula (yang baru belajar CorelDraw) maupun bagi ahli/pakar yang ingin mengetahui fitur canggih apa saja yang terdapat dalam versi terbaru CorelDraw. Buku Jago Coreldraw X6 berisi: - Fasilitas Dasar CorelDraw X6 - Dasar Kreasi CorelDraw X6 - Fungsi Curve Tool dan Membuat Desain Text Sederhana - Latihan Membuat ICON Sederhana - Latihan Membuat Objek bintang dengan PolygoneTool - Latihan Membuat Objek dengan Kotak/RectangleTool (lemari Es) - Latihan Membuat Objek dengan Lingkaran. - Latihan Membuat Objek dengan Polygone - Latihan Membuat Kepingan CD/DVD - Latihan Membuat Kotak 3D - Tips Optimasi Font pada CorelDraw X6 - Tips Membuat Kalender - Tips Membuat Corel Barcode di CorelDraw X6 Semua materi disampaikan dengan bahasa sehari-hari dengan semudah, sedetail, dan sesederhana mungkin agar dapat dimengerti dan dipelajari oleh siapa saja dengan mudah. Buku ini juga berisikan CD TUTORIAL yang akan membimbing setiap orang dalam menguasai CorelDraw X6 secara step by step dan otodidak sehingga siapapun dapat dengan cepat untuk jago CorelDraw X6 yang merupakan versi teranyar. Buku ini sangat penting untuk dimiliki dan menjadi referensi terbaik dalam menguasai CorelDraw X6 dari nol hingga mahir.</p>\r\n', 'Rak Buku', '', 'K002', '2020-01-15 02:41:08'),
('B00012', '30 Menit Mahir Membuat Jaringan Komputer ', '9786029146387 ', 'Alan Nur Aditya', 2013, 0, '-', 'Indonesia', 10, 'bukuDefault10.jpg', '<p>Buku 30 MENIT MAHIR MEMBUAT JARINGAN KOMPUTER akan memandu dan membimbing semua orang untuk membuat jaringan komputer dari nol hingga jadi dalam waktu sekejap secara otodidak. Karena buku ini bersifat praktis dan tutorial yang langsung pada saasaran yang disampaikan dengan bahasa yang mudah dipahami oleh siapapun sehingga semua orang dapat mengikuti langkah-langkah pembangunan jaringan komputer yang dibutuhkan. Isi buku ini mencakup seluk beluk jaringan komputer, klasifikasi, membuat jaringan komputer LAN, membuat jaringan nirkabel/wireless, hardware, setting printer, setting jaringan, setting internet sharing hingga keamanan jaringan yang telah dibuat. Dengan adanya buku ini siapapun bisa membangun atau membuat jaringan komputer sendiri dengan murah meriah baik untuk keperluan pribadi maupun untuk usaha hingga keperluan perkantoran/organiasai/lembaga/perusahaan dalam skala besar.</p>\r\n', 'Rak Buku', '', 'K002', '2020-01-15 02:41:08'),
('B00013', 'Seri 30 Menit: Menguasai Adobe Fireworks CS6  ', '9789792940206 ', 'Elcom ', 2014, 224, '-', 'Indonesia', 10, 'Beriga.jpg', '<p>Perkembangan teknologi internet sangatlah pesat yang ditunjukkan dengan perkembangan web sebagai sebuah kebutuhan. Tampilan-tampilan web saat ini menunjukkan peningkatan yang cukup signifikan dengan desain yang sungguh variatif, menarik, dan terkesan asyik untuk dilihat. Salah satu penentu dalam menghasilkan sebuah desain web yang baik adalah software desainnya. Adobe Fireworks merupakan salah satu aplikasi paling populer yang digunakan untuk mendesain website. Fireworks memberikan fasilitas desain secara visual serta memberikan berbagai teknologi desain yang mumpuni untuk menghasilkan sebuah desain web yang menarik. Software Fireworks ini telah digunakan oleh jutaan desainer web untuk menghasilkan karya-karya desain web bernilai tinggi. Dalam perkembangannya, Adobe Fireworks telah mencapai versinya yang terbaru atau lebih dikenal dengan Adobe Fireworks CS5. Fitur-fitur yang dimiliki semakin lengkap dan andal sehingga membuat pengguna Fireworks CS6 makin dapat berkreasi dan berinovasi dengan bebas dalam mendesain web. Fitur baru pada Adobe Dreamweaver CS6 ini di antaranya adalah Extract CSS Object Properties, Export Slices as CSS Sprite, Creating jQuery Mobile Themes, Performance Improvements, Set Opacity Separately for Fill and Stroke, Color Selection Improvement, Set Angle for Gradient or Pattern Fills, New fw.png Filename Extension, Miscellaneous Enhancements, dan API Enhancements. Semua fitur andal di atas akan dibahas ringkas dalam buku 30 Menit Menguasai Adobe Fireworks CS6 ini. Buku ini ditulis dengan bahasa yang ringan, to the point, dan disusun berdasarkan kebutuhan pemakai sehingga mudah dipahami dan dipraktikkan.</p>\r\n', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00014', 'Mobile Web Development With Adobe Dreamweaver CS6  ', '0601011400332', 'Wahana Komputer', 2013, 200, '-', 'Indonesia', 10, 'B00014.MobileWebDevelopment.jpg', 'Perkembangan dunia gadget pada zaman sekarang ini cukup pesat. Hal tersebut juga didukung oleh teknologi internet yang semakin dimanfaatkan oleh banyak orang. Untuk mendukung mobilitas dan gaya hidup gadget pengguna, maka dibuatlah sebuah aplikasi web berbasis mobile. Dengan menggunakan aplikasi mobile web, pengguna akan secara leluasa dan mudah untuk mengakses situs-situs tertentu tanpa keterbatasan. Perangkat yang digunakan adalah perangkat mobile yang memiliki ukuran yang kecil. Tool yang cukup powerful dalam membuat sebuah aplikasi berbasis mobile web adalah Adobe Dreamweaver CS6. Pada buku ini akan dibahas mengenai bagaimana membuat mobile web dengan menggunakan Dreamweaver CS6.\r\n\r\nLebih lengkap, buku ini akan membahas:\r\n\r\n• Bab 1 : Pengenalan Dreamweaver CS6\r\n• Bab 2 : Membuat Mobile Website\r\n• Bab 3 : Kustomisasi Mobile Web dengan Dreamweaver CS6\r\n• Bab 4 : Merancang Tema dengan ThemeRoller\r\n• Bab 5 : Menggunakan JQuery Mobile\r\n• Bab 6 : Gradient dengan CSS3\r\n• Bab 7 : Transisi dengan CSS3', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00015', 'Mudah Membuat Aplikasi Sms Gateway dengan Codeigniter ', '9786020242729', 'Wahana Komputer', 2014, 172, '-', 'Indonesia', 10, 'Kaos_tangan.jpg', '<p>Di era persaingan yang semakin ketat sekarang ini, pelayanan dan support merupakan modal utama untuk menarik dan menjaga loyalitas konsumen. Kehadiran software SMS gateway merupakan solusi praktis yang bisa digunakan sebagai media promosi sekaligus customer support. Fitur SMS Gateway yang akan dibahas di sini meliputi pengiriman massal yang memungkinkan Anda mengirim sms ke banyak penerima hanya dengan sekali klik, backup dan restore database, SMS gateway reminder yang secara otomatis mengirimkan pesan ke penerima pada momen-momen istimewa, hingga auto-respon yang mampu membalas pesan secara otomatis. Selengkapnya, buku ini akan membahas: - Sekilas SMS Gateway dan Codeigniter - PHP Object Oriented Programming - Pemrograman Codeigniter - Instalasi Gammu - Coding Cek Pulsa - Coding Phonebook - Coding Kotak Masuk - Coding Kirim SMS - Coding SMS Terkirim</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00016', 'Shortcourse Series: Microsoft Excel 2013  ', '9789792940510', 'Wahana Komputer', 2013, 246, '-', 'Indonesia', 10, 'B00016.MicrosoftExcel2013.jpg', 'Microsoft Excel 2013 adalah Versi terbaru dari apliksai Spreadsheet yang teritegrasi dalam satu paket Microsoft Office 2013. Aplikasi ini hadir dengan berbagai perbaikan dan peningkatan kemampuan dibandingkan versi sebelumnya, yaitu Excel 2010. Salah satu fiturbaru yang disematkan di dalam Excel 2013 adalah diintegrasikannya Microsoft SkyDrive yang memungkinkan anda menyimpan dokumen anda secara cloud atau online, sehingga anda bisa mengakses dokumen anda dimana saja, kapan saja, dan membagikannya dengan siapa saja.\r\n\r\nBuku shortCourse Microsoft Excel 2013 ini sangat tepat bagi anda yang ingin belajar menggunkan aplikasi Excel 2013 mulai dari Nol. Pada buku ini dikombinasikan teori dan praktik yang cukup seimbang dengan harapan agar Anda menjadi benar-benar bisa menguasai Excel 2013. Semua materi akan dijabarkan secara bertahap dan praktis, serta tidak ketinggalan pula gambar dan petunjuk langkah demi langkah yang siap menuntun anda mempelajari isi buku ini dari awal hingga akhir.\r\n\r\n• Sesi I Pengenalan Microsoft Excel 2013\r\n• Sesi II Mengolah Data Excel\r\n• Sesi III Mengolah Grafik dan menambah Gambar\r\n• Sesi IV Mengolah Excel lanjut\r\n• Sesi V menggunakan Fungsi Logika\r\n• Sesi VI Mencetaj Data', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00017', 'Step By Step Menjadi Programmer Android  ', '9789792935110 ', 'Wahana Komputer', 2013, 232, '-', 'Indonesia', 10, 'B00017.Programmer Android.jpg', 'Popularitas Android yang kian meroket bukan hanya menguntungkan penggunanya, tetapi juga para developer aplikasi, mengingat sifat Android yang open source membuat semua orang dapat dengan bebas mengembangkan maupun menciptakan berbagai aplikasi dalam platform Android.\r\n\r\nNamun, bagi programmer pemula, pengembangan aplikasi dalam platform Android juga memberikan tantangan sendiri mengingat platform Android terbilang baru. Tetapi, bukan berarti Anda akan mengalami kesulitan dalam mengembangkannya.\r\n\r\nBuku Step by Step Menjadi Programmer Androidini akan membahas secara detail langkah demi langkah untuk menjadi programmer Android, mulai dari dasar-dasar pemrograman Android hingga contoh pembuatan aplikasi sederhana. Lebih lengkapnya, buku ini membahas:\r\n\r\n&#61550; Bab 1 : Memulai Pemrograman Android\r\n&#61550; Bab 2 : Mengenal Activity dan Intents\r\n&#61550; Bab 3 : User Interface\r\n&#61550; Bab 4 : Desain User Interface Menggunakan View\r\n&#61550; Bab 5 : Data Persistent ', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00018', 'Mempercantik Tampilan Web dengan 10 Efek Memukau ', '9786020210438', 'Dadan & Kerendi Developers', 2013, 224, 'CD', 'Indonesia', 10, 'B00018.MempercantikTampilanWeb.jpg', 'Dahulu kala, efek flash merupakan barang mewah untuk sebuah website. Karena untuk memunculkan efek tersebut, sebuah website harus mempunyai sebuah bandwidth yang besar. Tentu itu membutuhkan tambahan biaya. Kendala lainnya, efek flash pada sebuah website dapat memperlambat waktu loading dan sering kali tidak dapat tampil secara sempurna sehingga pengunjung website merasa terganggu.\r\n\r\nTAPI SEKARANG! Seiring dengan kemajuan teknologi, efek Flash menjadi kian mudah didapat. Tidak perlu lagi menambahkan bandwidth pada hosting karena pada umumnya hosting zaman sekarang sudah menyediakan bandwidth yang mumpuni untuk menampilkan efek flash.\r\n\r\nEfek flash ini dapat diterapkan di berbagai jenis website, seperti website berbasis Joomla, WordPress, bahkan Blogger. Jadi, lebih fleksibel dalam penerapannya. Tidak perlu takut lagi waktu loading menjadi lama. Karena dengan cara yang tepat, efek flash tetap dapat tampil dengan prima.\r\n\r\nMenampilkan efek flash pada website juga ada caranya loh, tidak asal menempatkan begitu saja. Tidak jago pemrograman Flash? Tenang saja, sekarang ini telah banyak beredar puluhan bahkan ratusan efek flash siap pakai. Yang perlu Anda lakukan hanyalah menaruh efek flash itu ke dalam halaman website. Semua solusi untuk masalah di atas terkemas dalam buku yang sedang Anda pegang ini. Yah, inilah pedoman Anda untuk menciptakan halaman website yang berbeda dari yang lain.\r\n\r\nTersedia 10 Efek Flash Memukau, yang juga bisa diterapkan pada Blogger. Jadi, tampilkan sesuatu yang berbeda dalam artikel blog Anda. Dikemas dalam bahasa yang menarik dan sedikit ilustrasi ala komik, membuat proses belajar Anda menjadi mudah dan menyenangkan.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00019', 'Jago Membuat Website Gratis & Cepat Secara Otodidak - Edisi Terbaru  ', '9786029146509', 'Senja Nilasari ', 2014, 0, 'CD Tutorial', 'Indonesia', 10, 'B00019.Website.jpg', 'Saat ini website menjadi media yang sangat penting dengan semakin banyaknya pengakses internet. Website dapat memberikan banyak informasi yang tidak hanya berupa teks, tetapi juga bisa berupa gambar, foto, video, dan Iain-Iain. Sehingga membuat hampir semua perusahaan kecil hingga yang berskala nasional dan berkelas dunia, sekolah-sekolah dan perguruan tinggi, instansi pemerintahan bahkan perorangan menjadikan website sebagai media promosi yang paling efektif, efisien, murah, dan tepat sasaran.\r\n\r\nNamun, yang perlu diketahui bahwa hanya website yang menarik yang biasanya diminati dan menarik perhatian untuk dikunjungi oleh para pengguna internet. Oleh karena itu, sudah seharusnya website dibuat dengan sebagus dan semenarik mungkin. Dan untuk menghasilkan website yang menarik pun dapat dilakukan oleh siapa saja, termasuk orang awam atau para pemula. Bagaimana caranya?\r\n\r\nBuku "JAGO MEMBUAT WEBSITE GRATIS & CEPAT" akan membeberkan semua teknik-teknik rahasia praktisnya secara tutorial, sistematis, detail, lengkap, dan step by step dengan bahasa sederhana yang mudah dicerna dan dipahami oleh siapapun. Dan untuk mempermudah dalam pembangunan website, buku ini juga dilengkapi dengan CD TUTORIAL yang akan memandu semua orang dari awal hingga akhir, sehingga membuat website adalah hal yang benar-benar mudah.\r\n ', 'Rak Buku', 'P004', 'K002', '2020-01-15 02:41:08'),
('B00020', 'Web Designer Must Have Book ', '979794400X', 'Su Rahman', 2013, 190, '-', 'Indonesia', 10, 'B00020.WebDesignerMustHaveBook.jpg', 'Kurang puas dengan pilihan template untuk website Anda?\r\n\r\nIngin membuatnya sendiri, tetapi tidak mengerti coding?\r\nTenang, apapun website Anda; WordPress, Joomla, Drupal, atau Blogger, Anda bisa membuat template sendiri tanpa coding sekalipun.\r\n\r\nDengan Artisteer, sebuah tool powerful yang dapat diandalkan oleh para web designer pemula atau profesional untuk membuat template website. Siapa pun bisa karena mudah digunakan, tidak diperlukan keahlian coding sama sekali, dan bisa dilakukan dengan durasi yang singkat.\r\n\r\nNah, buku ini memberikan tuntunan bagi siapa saja untuk dapat membuat template WordPress, Joomla, Drupal, dan Blogger sendiri, tak ketinggalan juga ada pembahasan membuat website statis menggunakan Artisteer.', 'Rak Buku', 'P005', 'K002', '2020-01-15 02:41:08'),
('B00021', 'Step By Step Mendapat Uang Via Website Periklanan ', '9786020227788', 'Su Rahman', 2013, 144, 'CD', 'Indonesia', 10, 'B00021.MendapatUangViaWebsitePeriklanan.jpg', 'Bukan rahasia lagi jika website jaringan periklanan dapat menghasilkan pundi-pundi rupiah yang tidak terbatas, bahkan penghasil terbesar raksasa bisnis online, Google. Berasal dari jaringan periklanan AdWord dan AdSense, teknik membuat website jaringan periklanan pun diburu dan menjadi laris karena memang itu adalah pengetahuan yang langka. Dengan kemajuan teknologi, siapa saja dapat mulai mengelola bisnis jaringan periklanan dengan membuat website PPC (Pay To Click), website Traffic Exhange, dan website Penyingkat URL Premium.\r\n\r\nBuku ini memberikan tuntunan langkah demi langkah untuk membangun website penghasil uang tersebut. Tidak diperlukan pengetahuan pemrograman sedikit pun, script tersedia di dalam Bonus CD yang siap digunakan untuk mendulang pundi-pundi rupiah dari internet. Plus bonus script PHP yang bisa Anda manfaatkan untuk mendapatkan penghasilan tambahan dari Internet.\r\n\r\nDengan bahasa sedehana dan aplikatif, buku ini memberikan pembahasan tentang cara membuat:\r\n\r\n* Website PPC (Pay Per Click) dengan Sistem Bank Transfer\r\n* Website Traffic Exchange dengan Sistem Bank Transfer\r\n* Website Penyingkat URL Premium dengan Sistem Bank Transfer\r\n\r\nKetiga website tersebut adalah tool sukses untuk Anda dalam menjaring rupiah dari bisnis jaringan periklanan, dilengkapi dengan tips pengelolaan bisnis, dan juga securitas website. Ditambah dengan cara backup-restore data dan file website, menambah padat ilmu yang diberikan. Buku ini menjadi terlalu murah karena mengandung manfaat dan script-script yang diburu.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00022', 'Cara Gampang Bikin CMS PHP Tanpa Ngoding  ', '9797944220 ', 'Su Rahman', 2013, 174, 'CD', 'Indonesia', 10, 'B00022.BikinCMSPHPTanpaNgoding.jpg', 'Untuk membuat CMS PHP diperlukan keahlian programming website dinamis seperti ASP atau PHP. Namun, bagi yang tidak mengerti coding PHP, bisa memanfaatkan software pembuatan website, yaitu Adobe Dreamweaver CS3.\r\n\r\nBuku ini membahas teknik membuat CMS PHP untuk kebutuhan website Company Profile menggunakan Dreamweaver CS3, nantinya CMS tersebut dapat Anda gunakan untuk keperluan klien Anda.\r\n\r\nAnda akan mampu membuat website berbasis CMS dengan teknik costumize dalam waktu yang cepat. Asyiknya, semua itu dapat Anda lakukan tanpa pengetahuan pemrograman sedikit pun.', 'Rak Buku', 'P005', 'K002', '2020-01-15 02:41:08'),
('B00023', 'Killer Web Design ', '9786020204208', 'Su Rahman', 2013, 168, '-', 'Indonesia', 10, 'B00023.KillerWebDesign.jpg', 'Sejak menulis buku yang bertemakan web design & internet marketing, banyak yang menghubungi saya untuk menanyakan cara membuat website untuk keperluan yang beragam. Tentu saya tidak bisa memberikan tutorialnya satu per satu, untuk itu saya merangkumnya dan menyajikannya ke dalam buku ini.\r\n\r\nBuku ini berisikan aneka teknik desain website untuk berbagai kebutuhan yang paling sering dicari oleh masyarakat. Dengan memanfaatkan buku ini Anda yang tidak mengerti bahasa pemrograman dapat mempraktikkannya.\r\n\r\nKelebihan lainnya, buku ini disusun secara sistematis dan ditujukan bagi kebutuhan orang awam dengan memanfaatkan software CMS WordPress, Joomla, dan BlogSpot. Dapatkan teknik untuk mendesain jenis website berikut ini:\r\n\r\nâ€¢Tour & travel agent dengan Calendar Reservation Form\r\n\r\nâ€¢Restoran dengan Calendar Reservation Form\r\n\r\nâ€¢Toko online & iklan baris\r\n\r\nâ€¢Company profile, website sekolah dan e-learning\r\n\r\nBuku ini adalah solusi instan bagi Anda yang ingin menguasai aneka teknik desain website profesional dalam waktu sekejab. Dengan berbekal buku ini, Anda akan menguasai dasar pembuatan website yang dapat dieksplorasi untuk kebutuhan yang lebih luas.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00024', 'Rahasia Mudah Menguasai Photoshop ', '9789792932010 ', 'MADCOMS ', 2012, 210, 'CD', 'Indonesia', 10, 'B00024.RahasiaMudahMenguasaiPhotoshop.jpg', 'Sebagai software editing foto, kemampuan Photoshop memang sudah tidak diragukan lagi. Di setiap versi barunya, raja software editing foto ini selalu menambahkan sejumlah fitur baru dan menarik yang patut untuk dicoba.\r\n\r\nBuku ini membahas berbagai fitur canggih yang dimiliki Photoshop untuk mengedit koleksi foto digital Anda. Setiap pembahasan dalam buku diulas dengan metode bahas yang simpel yang akan membantu memudahkan Anda dalam memahami cara kerja yang praktis dan efisien saat bekerja dengan Photoshop\r\n\r\nDi akhir pembahasan, penulis menyertakan beberapa contoh pengaplikasian fitur untuk memanipulasi foto digital, mulai dari mengubah foto sederhana menjadi foto bergaya glow, grunge, poster, sketsa, lukisan, hingga foto bergaya lomo.\r\n\r\nInti pembahasan yang disajikan dalam buku ini meliputi:\r\n• Menggunakan Tool Editing\r\n• Foto Hitam Putih\r\n• Mengubah Warna Foto\r\n• Dasar Editing Foto\r\n• Menyeleksi Objek Dalam Foto\r\n• Layer dan Blending Image\r\n• Filter Artistik\r\n• Memanipulasi Foto', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00025', 'Pasti Bisa !! Belajar Sendiri Microsoft Access 2013  ', '9789792942040', 'MADCOMS', 2014, 218, '-', 'Indonesia', 10, 'B00025.MicrosoftAccess2013.jpg', 'Belajar Mudah untuk Menjadi Pintar !\r\n\r\nBuku Pasti Bisa!! Belajar Sendiri Microsoft Access 2013 ini merupakan buku pendamping belajar yang mudah untuk dipelajari. Buku ini ditujukan untuk pemula yang ingin menggunakan Microsoft Access 2013 secara praktis dan dapat menguasainya dengan cepat.\r\n\r\nDengan menggunakan metode BACA COBA BISA akan menjadikan Anda terampil dalam menggunakan dan menguasai Microsoft Access 2013.\r\n\r\nBuku ini mempelajari berbagai fasilitas yang disediakan Microsoft Access 2013. Dilengkapi dengan gambar dan uraian secara rinci pada tiap pokok bahasan diharapkan dapat digunakan sebagai bahan panduan dan latihan bagi pembaca untuk lebih memahami dan menguasai program Microsoft Access 2013 dengan baik.\r\n\r\nPokok bahasan yang dimuat dalam buku ini meliputi:\r\n\r\n• Mengenal Microsoft Access 2013\r\n• Membuat dan Mengolah Tabel\r\n• Mengelola Tabel\r\n• Mengolah Data Tabel\r\n• Membuat dan Mengelola Query\r\n• Membuat dan Mengelola Form\r\n• Memodifikasi Form\r\n• Membuat Laporan\r\n• Mengolah Laporan\r\n ', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00026', 'Adobe Photoshop CS5 untuk Desain Web Profesional ', '9786020032191', 'Wahana Komputer', 2012, 192, '-', 'Indonesia', 10, 'B00026.AdobePhotoshopCS5.jpg', 'Web desain adalah istilah yang sering digunakan untuk menggambarkan bagaimana tampilan isi suatu website atau situs.\r\n\r\nDesain yang baik akan berpengaruh terhadap kenyamanan dan ketertarikan pengunjung web.\r\n\r\nHal ini karena website merupakan sarana untuk membangun bisnis online yang berisi berbagai hal seperti informasi dan interaksi dengan orang lain.\r\n\r\nSalah satu program yang digunakan untuk membuat desain web adalah Adobe Photoshop.\r\n\r\nProgram berbasis bitmap ini dapat membantu dan memberikan kemudahan bagi Anda dalam membuat aneka desain web.\r\n\r\nDengan kemampuan yang dapat dikatakan mendekati sempurna, maka sangat membantu bagi para desainer web dalam menuangkan ide dan imajinasinya dalam menciptakan sebuah karya grafis secara lebih optimal.\r\n\r\nAnda dapat mengolah foto, membuat kreasi button, dan membuat teks yang menarik.\r\n\r\nBuku Adobe Photoshop CS5 untuk Desain Web Profesional ini akan membahas berbagai teknik membuat desain web dengan beberapa tema.\r\n\r\nBerbagai contoh desain web yang lebih lengkap akan diketengahkan dalam bentuk contoh-contoh latihan.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00027', 'Tips & Trik Adobe Dreamweaver CS5.5  ', '9789792932270', 'Wahana Komputer', 2012, 244, '-', 'Indonesia', 10, 'B00027.TrikAdobeDreamweaverCS5.5.jpg', 'Perkembangan internet yang begitu cepat menyebabkan teknologi web juga berkembang sejalan dengan pemanfaatan internet web itu sendiri. Web saat ini tidak hanya terdiri dari halaman online yang hanya menampilkan teks atau gambar dan cenderung bersifat statis, namun telah berkembang menjadi web yang dinamis dan interaktif. Faktor fungsionalitas sangat diperlukan untuk menunjang perancangan web yang baik. Untuk itu diperlukan sebuah tool pengembang web yang andal, baik dari sisi desain maupun pemrogramannya.\r\n\r\nAdobe Dreamweaver CS5.5 merupakan salah satu tool populer yang digunakan untuk mendesain sekaligus pemrograman web. Dreamweaver memberikan fasilitas untuk mengedit HTML secara visual. Aplikasi ini menyertakan banyak perangkat yang berkaitan dengan pengkodean dan fitur seperti HTML, CSS, serta JavaScript. Selain itu, aplikasi ini juga memungkinkan pengeditan JavaScript, XML, dan dokumen teks lainnya secara langsung.\r\n\r\nBuku Tip & Trik Adobe Dreamweaver CS5.5ini membahas berbagai tip dan trik untuk membangun website. Selain itu,dalam buku ini disertakan berbagai contoh yang lebih memudahkan pembaca untuk menguasai materi sehingga nantinya dapat membuat website yang interaktif.\r\n\r\nLebih lengkap, buku ini membahas:\r\n\r\n• Pendahuluan\r\n• Mengelola Layout dan Content Teks Web\r\n• Mengelola Navigasi dan Aset Web\r\n• Mempercantik Halaman Web\r\n• Mengelola Web Interaktif', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00028', 'Pintar Membuat Web dengan Joomla : Cara Mudah Buat Web dari Nol hingga Online ', '9789792913026', 'Wahana Komputer', 2012, 212, 'CD', 'Indonesia', 10, 'B00028.MembuatWebdenganJoomla.jpg', 'Menganalisa kebutuhan hardware dan software,\r\nmemilih ISP yang cocok, instalasi jaringan,\r\nperhitungan usaha, konfigurasi Billing\r\n\r\nTingginya kebutuhan masyarakat akan layanan internet mengakibatkan di berbagai tempat bermunculan warnet dan game center. Bahkan untuk beberapa tahun terakhir, bisnis warnet dan game center menjadi sebuah bisnis yang sangat menarik untuk dikembangkan.\r\n\r\nBuku membangun Warnet dan Game Center Sendiri ini membahas bagaimana membangun warnet dan game center yang dapat Anda lakukan sendiri. Buku ini merupakan panduan bagi calon pengusaha di bidang warnet dan game center untuk membuka usaha. Selain itu, buku ini memberikan informasi yang tepat guna dalam mengelola bisnis.\r\n\r\nBuku ini akan membahas:\r\n- kebutuhan hardware\r\n- kebutuhan software\r\n- internet service provide\r\n- Instalasi jaringan komputer\r\n- perhitungan usaha\r\n- studi kasus konfigurasi billing\r\n- tip-tip efektif', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00029', 'Buku Pintar Pemrograman Visual Basic 2010 + Cd ', '9786020246994', 'Christopher Lee', 2014, 176, '-', 'Indonesia', 10, 'B00029.PemrogramanVisualBasic2010.jpg', 'Visual Basic 2010 adalah inkarnasi dari bahasa Visual Basic yang sangat populer dan telah dilengkapi dengan fitur serta fungsi yang setara dengan bahasa tingkat tinggi lainnya seperti C++, VB.NET, dan J#.\r\n\r\nNamun sebagai konsekuensinya, berakibat semakin bertambahnya kerumitan dalam menggunakan program Visual Basic. Dan Anda tidak dapat lagi mengandalkan online help atau belajar secara otodidak tentang bagaimana membuat sebuah program menggunakan Visual Basic 2010.\r\n\r\nBelajar Visual Basic 2010 itu seperti belajar satu bahasa baru - banyak kosakata dan tata bahasa. Visual Basic 2010 tidak sulit untuk dipelajari, tetapi Anda perlu memahami banyak sintaks, aturan, dan atributnya.\r\n\r\nBuku ini ditulis dengan tujuan untuk menjelaskan semua hal penting yang perlu diketahui untuk mengembangkan aplikasi Windows Forms dengan Visual Basic 2010. Anda tidak akan menemukan teori di sini, sebaliknya Anda akan menemukan solusi terbaik untuk masalah pemrograman yang paling menantang.\r\n\r\nDengan disertai Bonus CD yang dilengkapi latihan files, Anda akan dapat mempelajari Microsoft Visual Basic 2010 dengan lebih mudah dan efektif.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00030', 'Membuat Aplikasi Stok Inventori dengan Visual Basic 6.0  ', '9786020024981', 'Hengky Alexander Mangkulo', 2012, 208, '-', 'Indonesia', 10, 'B00030.AplikasiStokInventoridenganVB.jpg', 'Buku ini berisi pembahasan mengenai pembuatan aplikasi sistem informasi stok inventori. Aplikasi yang dikembangkan merupakan aplikasi yang mudah untuk dipahami tetapi juga dilengkapi dengan beberapa fasilitas standar dalam pengembangan aplikasi sistem informasi.\r\n \r\nPembahasan materi meliputi pengenalan akan kontrol-kontrol, pembuatan database dengan Microsoft Access, koneksi database, pembuatan form-form master, pembuatan form-form transaksi, pembuatan laporan dengan menggunakan Crystal Report termasuk cara memfilter atau menyaring data dari form Visual Basic untuk ditampilkan pada Crystal Report dan pembuatan fasilitas-fasilitas dari aplikasi inventori yang dibuat seperti login password, pengaturan tingkatan hak akses dari user pengguna program, fasilitas untuk mengubah password dan saldo awal untuk penggunaan aplikasi pada suatu sistem yang telah berjalan sebelumnya.\r\n \r\nSemua materi dijelaskan dengan cara yang sederhana dan mudah untuk dipahami tetapi memiliki nilai manfaat yang sangat besar dalam pengembangan aplikasi sistem informasi database.\r\n\r\nDengan buku ini, diharapkan pembaca dapat mengerti pengembangan aplikasi sistem informasi dengan menggunakan Visual Basic 6.0 dengan menggunakan metode ADO. ', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00031', 'Buku Pintar Database dengan Ms Access  ', '9786020248424 ', 'Jubilee Enterprise', 2014, 176, '-', 'Indonesia', 10, 'B00031.BukuPintarDatabasedenganMsAccess.jpg', 'Kalau Anda ingin membuat aplikasi database yang mudah, murah, cepat, dan tanpa pemrograman, maka MS Access adalah jawabannya. Di dalam buku ini, Anda akan belajar rahasia pembuatan database sebagai berikut:\r\n\r\n- Pengenalan database menggunakan MS Access\r\n- Pembuatan database baru\r\n- Kustomisasi Fields\r\n- Kustomisasi Tabel\r\n- Pembuatan Form\r\n- Penyusunan Laporan\r\n- Pembuatan Query\r\n\r\nTarget buku ini adalah membantu Anda membuat database untuk pencatatan data administratif. Cocok dibaca oleh orang kantoran, mahasiswa, petugas administrasi, atau siapa pun. Baca buku ini, pelajari, kemudian praktikkan, dijamin Anda pasti bisa!', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00032', 'Kupas Tuntas Power Point 2010  ', '9789792784671', 'Jubilee Enterprise', 2010, 0, '-', 'Indonesia', 10, 'B00032.KupasTuntasPowerPoint2010.jpg', 'MS Powerpoint 2010 merupakan generasi terbaru dari software pembuat dan pengolah slide presentasi mutakhir dan terkenal di dunia. Banyak fitur baru yang ditawarkan yang sebagian besar dikupas di dalam buku ini, seperti fungsi editing grafis hingga saat presentasi itu sendiri.\r\n\r\nPengenalan dasar-dasar dan opsi penting dalam MS Powerpoint 2010 juga dikupas tuntas. Pembahasan diawali dengan pengenalan MS Powerpoint 2010, pengaturan opsi dan preferensi, pembuatan slide presentasi, penyajian presentasi, pembuatan slide presentasi yang lebih spektakuler, publikasi dan distribusi, serta powerpoint online. Jika Anda membutuhkan referensi Powerpoint 2010 yang paling lengkap dan tuntas, buku ini dapat Anda pilih.\r\n\r\nKupas Tuntas PowerPoint 2010 cocok digunakan oleh mereka yang erat kaitannya dengan dunia presentasi, seperti sales dan marketing, pembicara seminar, trainer, businessman, hingga guru dan pengajar kursus.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00033', 'Tip dan Trik PowerPoint 2013', '9786020223377 ', 'Jubilee Enterprise', 2013, 208, '-', 'Indonesia', 10, 'B00033.TipdanTrikPowerPoint2013.jpg', 'Apakah Anda sudah menggunakan PowerPoint 2013 untuk membuat presentasi presentasi cantik? Tahukah Anda fitur-fitur terbaru apa saja yang ada di dalam software ini? Atau, pernahkah Anda berpikir kalau software ini memiliki potensi-potensi tersembunyi? Kalau demikian, miliki buku ini untuk mengetahui tip dan trik berikut:\r\n\r\n•  Rahasia melakukan presentasi sambil membaca "contekan" seperti pembawa berita di stasiun televisi.\r\n•  Metode praktis mengubah video berwarna menjadi hitam putih dan mengubah temperatur cahaya pada foto digital.\r\n•  Mengubah bentuk video dari kotak menjadi buah hati atau bentuk lainnya sesuai selera Anda.\r\n•  Cara membuat slide praktis seperti sertifikat dan wedding photo album secara cepat dan hasilnya keren.\r\n•  Membuat slide presentasi dalam format widescreen sehingga tampak lebih futuristik dan menakjubkan.\r\n•  Tombol-tombol shortcut yang melimpah untuk membantu Anda mengerjakan tugas- tugas rutin dengan mudah.\r\n•  Memanfaatkan Eyedropper untuk memburu warna-warna gambar sehingga kreativitas Anda meningkat pesat.\r\n•  Memasang peta dari Google Maps ke dalam slide presentasi agar Anda bisa menunjukkan kepada para audience, lokasi kantor atau perusahaan Anda.\r\n\r\n\r\nDan masih banyak lagi. Yang jelas, jika Anda berpikir PowerPoint 2013 sama dengan PowerPoint versi dulu-dulu, maka Anda salah besar! Bacalah buku ini dan temukan berbagai keajaiban baru yang ditawarkan oleh PowerPoint 2013.\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00034', 'Membuat Fungsi Excel untuk Bisnis dan Perkantoran + Cd  ', '9786020248448 ', 'Yudhy Wicaksono', 2014, 204, 'CD', 'Indonesia', 10, 'B00034.MembuatFungsiExcel.jpg', 'Fungsi dalam Excel merupakan rumus siap pakai yang digunakan sebagai alat bantu dalam proses perhitungan. Excel menyediakan ratusan fungsi yang dikelompokkan ke dalam kategori tertentu. Namun karena luasnya bidang pengolahan data, tidak semua fungsi yang disediakan Excel dapat memenuhi kebutuhan penggunanya. Hal tersebut dapat dimaklumi karena kasus yang dihadapi pengguna yang satu sering kali berbeda dengan kasus yang dihadapi pengguna yang lain. Untuk mengatasi masalah tersebut, Excel menyediakan fitur Visual Basic for Application (VBA), atau biasa dikenal dengan Macro, untuk membuat fungsi Excel sendiri.\r\n\r\nBuku ini mengungkap bagaimana memanfaatkan fitur Macro untuk membuat fungsi Excel. Setelah mempelajari buku ini, Anda akan menemukan banyak pengetahuan baru penggunaan Macro untuk membuat fungsi Excel. Penulis menyajikan 20 contoh pembuatan fungsi untuk menyelesaikan permasalahan di bidang bisnis dan perkantoran, di antaranya fungsi untuk menyeleksi penerimaan karyawan, menghitung uang pesangon, menghitung gaji, menghitung upah lembur, menghitung sewa VCD, dan berbagai fungsi untuk menyelesaikan kasus bisnis dan perkantoran lainnya.\r\n\r\nPembahasan selanjutnya mengenai penggunaan Macro untuk membuat fungsi Excel siap pakai untuk Excel semua versi dalam bentuk Add-In, yang memuat 25 fungsi Excel siap pakai. Pembahasan buku yang lebih mengedepankan praktik dibandingkan teori menjadikan buku ini cocok digunakan oleh siapa saja, baik Anda yang sudah terbiasa menggunakan Excel ataupun Anda yang belum pernah menggunakan Excel sama sekali. Dengan metode membaca dan mencoba, buku ini merupakan solusi bagi Anda yang ingin belajar membuat fungsi Excel secara otodidak, tanpa perlu mengikuti bimbingan atau kursus.\r\n\r\nUntuk memudahkan pemahaman pembaca, penulis menyertakan Bonus CD berisi file latihan dan file kunci jawaban permasalahan yang dibahas.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00035', 'Tip dan Trik Fungsi dan Formula Excel  ', '9786020248622', 'Jubilee Enterprise', 2014, 180, '-', 'Indonesia', 10, 'B00035.TipdanTrikFungsidanFormulaExcel.jpg', 'Apakah Anda terbiasa bekerja dengan fungsi dan formula Microsoft Excel? Kalau begitu, Anda pasti tertarik untuk mengembangkan ilmu Anda lebih tinggi lagi dengan mempelajari tip dan trik di dalam buku ini. Materi yang disajikan di antaranya mengupas:\r\n\r\n- Fungsi dan formula MS Excel secara umum, serta shortcut (jalan pintas) untuk efisiensi kerja, conditional formatting, dan relasi formula.\r\n\r\n- Penggunaan forecast untuk menghitung nilai investasi serta kerugian tahunan jika tak berhasil mencapai penjualan.\r\n\r\n- Menghitung statistik seperti jumlah kursi kosong, karyawan paling produktif, penyusunan peringkat, dan seterusnya.\r\n\r\n- Mencocokkan soal-soal ujian, pemberian nilai, dan penentuan kelulusan.\r\n\r\n- Memakai formula untuk penghitungan matematis bangun datar, penjumlahan matriks, dan teka-teki matematika (seperti pada tanggal berapa dua orang bertemu di perpustakaan).\r\n\r\n- Menggunakan growth, frequency, dan penghitungan harga barang kulakan jika lama tidak laku-laku.\r\n\r\n- Menggunakan watch window, camera, evaluasi formula, dan seterusnya.\r\n\r\n- Membuat billing usaha rental (warnet, karaoke, persewaan, dan sebagainya).\r\n\r\nSemua ide dan gagasan baru yang disajikan ini sebagian besar melibatkan fungsi serta formula. Apabila Anda ingin bekerja lebih cepat, efisien, dan praktis menggunakan MS Excel, buku ini bisa menjadi pilihan yang tepat.\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00036', 'Buku Pintar VLookup dan HLookup MS Excel + CD ', '9786020235752', 'Jubilee Enterprise', 2014, 172, 'CD', 'Indonesia', 10, 'B00036.VLookupdanHLookupMS Excel.jpg', 'VLookup dan HLookup adalh fungsi yang akan selalu digunakan apabila bekerja dengan tabel yang rumit serta mengandung banyak data. Oleh karena itu, banyak orang mengira jika VLookup dan HLookup termasuk fungsi yang sulit digunakan. Padahal, VLookup dan HLookup sangatlah simpel untuk dimanfaatkan.\r\n\r\nDi dalam buku ini, Anda akan mempelajari dari cara paling dasar memanfaatkan VLookup dan HLookup sampai pada pembuatan aplikasi praktis yang disajikan via video tutorial, seperti pembuatan kuitansi misalnya. Ada juga contoh praktis yang disajikan lewat tulisan langkah demi langkah tentang pemanfaatan VLookup dan HLookup untuk penyusunan administrasi sekolah dan kepegawaian.\r\n\r\nDibandingkan buku MS Excel lainnya, buku ini merupakan referensi paling mudah dipelajari dan dipahami apabila ingin mempelajari VLookup dan Hlookup, serta fungsi-fungsi lain yang menyertainya, seperti IF, ISNA, LEFT, dan sebagainya.\r\n\r\nDiharapkan, setelah membaca buku ini, wawasan Anda tentang Microsoft Excel akan bertambah banyak dan Anda pun bisa menciptakan atau mengolah tabel yang sangat kompleks.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00037', 'Aplikasi Excel untuk Guru Edisi Revisi', '9786020247366', 'Adi Kusrianto', 2014, 250, 'CD Latihan', 'Indonesia', 10, '', 'Excel adalah program paling banyak kedua digunakan orang seluruh jagat setelah Word. Digunakan sebagai standar peralatan kerja dalam kegiatan perkantoran di semua bidang, termasuk dunia pendidikan dan ilmiah.\r\n\r\nUntuk kalangan Guru dan Pendidik, Excel adalah program yang sangat bermanfaat untuk mengelola data yang berkaitan dengan tugas-tugas di seputar kegiatan mengajar serta materi pembelajaran. Termasuk materi ajar yang akan disampaikan kepada siswa-siswanya.\r\n\r\nBuku ini ditulis dengan pendekatan bidang pendidikan maupun ilmiah. Mengingat kedua bidang tersebut senantiasa bergelimangan dengan kegiatan hitung-menghitung, menganalisis, membandingkan dan menampilkan hasil yang dikehendaki, maka Excel merupakan alat bantu hitung yang super canggih yang dengan mudah dapat dikuasai orang "awam" yang bukan ahli komputer dan teknik informatika.\r\n\r\nKalau banyak orang sudah familier menggunakan handphone, dengan bantuan buku ini akan semudah itulah mengoperasikan Excel.\r\n\r\nPembahasan dalam buku mencakup:\r\n\r\n- Bekerja pada Workbook dan Worksheet\r\n- Melakukan Kalkulasi dengan Excel\r\n- Memasukkan dan Menghitung Data Tanggal dan Waktu\r\n- Permasalahan Matematika dan Trigonometri\r\n- Mengelola Database Siswa\r\n- Mengenal dan Mengelola Tabel\r\n- Menampilkan Data dalam Grafik\r\n- Mengolah Data Teks\r\n- Mencari dan Menampilkan Data\r\n- Fungsi-Fungsi untuk melakukan Konversi\r\n- Menyisipkan Gambar ke Worksheet\r\n- Alat Bantu dalam Statistika\r\n ', 'Rak A1', 'P002', 'K002', '2020-01-15 02:41:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kd_kategori` char(4) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kd_kategori`, `nm_kategori`) VALUES
('K001', 'Sastra dan Filsafat'),
('K002', 'Komputer dan Internet'),
('K003', 'Sejarah dan Budaya'),
('K004', 'Psikologi dan Pengembangan Diri'),
('K005', 'Ekonomi dan Manajemen'),
('K006', 'Kalkulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(1) NOT NULL,
  `nama_aplikasi` varchar(100) NOT NULL,
  `nama_pimpinan` varchar(100) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `kontak_person` varchar(20) NOT NULL,
  `sejarah` text NOT NULL,
  `visimisi` text NOT NULL,
  `panduan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `nama_aplikasi`, `nama_pimpinan`, `provinsi`, `kabupaten`, `kecamatan`, `alamat`, `kontak_person`, `sejarah`, `visimisi`, `panduan`) VALUES
(1, 'Inventory Barang', 'Waddah', 'Sulawesi Selatan', 'Makassar', 'Manggala', 'jl. Dg. Hayo', '085298730727', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus vitae impedit, dignissimos sed ullam quis quasi illum eveniet iusto maiores iste, minus quos animi repellat nemo minima cum aut corporis. asdasd asfascz d</p>\r\n', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus vitae impedit, dignissimos sed ullam quis quasi illum eveniet iusto maiores iste, minus quos animi repellat nemo minima cum aut corporis. asdsad</p>\r\n', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus vitae impedit, dignissimos sed ullam quis quasi illum eveniet iusto maiores iste, minus quos animi repellat nemo minima cum aut corporis. asdfsaf</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `kd_peminjaman` varchar(15) NOT NULL,
  `kd_buku` varchar(15) NOT NULL,
  `kd_anggota` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_harus_kembali` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `keterangan` text NOT NULL,
  `status_kembali` enum('Belum','Kembali','Hilang','') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`kd_peminjaman`, `kd_buku`, `kd_anggota`, `id_user`, `tanggal_pinjam`, `tanggal_harus_kembali`, `tanggal_kembali`, `keterangan`, `status_kembali`, `tanggal`) VALUES
('', 'B00006', 'sdfsdfs', '9', '2020-07-11', '0000-00-00', '2020-07-14', 'admin', 'Belum', '2020-07-11 01:54:08'),
('2143', 'B00003', 'M0001', '1', '2020-03-31', '0000-00-00', '2020-04-23', 'loremm ipsum', 'Belum', '2020-03-31 13:53:40'),
('424', 'B00004', 'sdfsdfs', '9', '2020-07-09', '0000-00-00', '2020-07-11', 'adakah', 'Hilang', '2020-07-11 01:53:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penerbit`
--

CREATE TABLE `tbl_penerbit` (
  `kd_penerbit` char(4) NOT NULL,
  `nm_penerbit` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penerbit`
--

INSERT INTO `tbl_penerbit` (`kd_penerbit`, `nm_penerbit`) VALUES
('P001', 'ELEX MEDIA KOMPUTINDO'),
('P002', 'ANDI OFSET YOGYAKARTA'),
('P003', 'GAVA MEDIA YOGYAKARTA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('Admin','User') NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `image`, `password`, `role`, `is_active`, `date_created`) VALUES
(1, 'Aswar Kasim', 'aswarkasim@gmail.com', 'default.jpg', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'User', 1, 1560694881),
(9, 'Admin', 'admin@gmail.com', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin', 0, 0),
(10, 'assa', 'assa@gmail.com', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_inventaris`
--
ALTER TABLE `buku_inventaris`
  ADD PRIMARY KEY (`kd_inventaris`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`no_peminjaman`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`no_pengembalian`);

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`kd_anggota`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`kd_peminjaman`);

--
-- Indexes for table `tbl_penerbit`
--
ALTER TABLE `tbl_penerbit`
  ADD PRIMARY KEY (`kd_penerbit`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
