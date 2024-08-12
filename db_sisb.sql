-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2023 at 11:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sisb`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `jam` time DEFAULT NULL,
  `id_pegawai` int(20) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `tgl`, `tipe`, `jam`, `id_pegawai`, `ket`) VALUES
(12, '2023-03-02', '1', '08:09:00', 7, 'HADIR'),
(13, '2023-03-02', '2', '08:30:00', 9, 'HADIR'),
(14, '2023-03-02', '1', '08:40:00', 10, 'ALPHA'),
(15, '2023-03-01', '1', '08:20:00', 9, 'HADIR'),
(16, '2023-03-01', '1', '08:10:00', 7, 'HADIR'),
(17, '2023-03-01', '1', '08:32:00', 10, 'HADIR'),
(18, '2023-03-01', '1', '09:10:00', 10, 'HADIR'),
(19, '2023-03-01', '1', '00:00:00', 9, 'HADIR'),
(20, '2023-03-01', '1', '00:00:00', 7, 'HADIR'),
(21, '2023-03-01', '1', '00:00:00', 10, 'HADIR'),
(22, '2023-03-01', '1', '00:00:00', 11, 'HADIR'),
(23, '2023-03-03', '1', '00:00:00', 9, 'HADIR'),
(24, '2023-03-04', '1', '00:00:00', 9, 'TELAT'),
(25, '2023-03-06', '1', '00:00:00', 9, 'HADIR'),
(26, '2023-03-07', '1', '00:00:00', 9, 'HADIR'),
(27, '2023-03-08', '1', '00:00:00', 9, 'IZIN'),
(28, '2023-03-09', '1', '00:00:00', 9, 'HADIR'),
(29, '2023-03-10', '1', '00:00:00', 9, 'HADIR'),
(30, '2023-03-11', '1', '00:00:00', 9, 'HADIR'),
(31, '2023-03-13', '1', '00:00:00', 9, 'HADIR'),
(32, '2023-07-22', '1', '00:00:00', 7, 'HADIR'),
(33, '2023-07-21', '1', '00:00:00', 10, 'HADIR'),
(37, '2023-08-05', '1', '09:58:50', 7, 'HADIR'),
(38, '2023-08-05', '1', '10:01:04', 11, 'HADIR'),
(39, '2023-08-06', '2', '03:25:07', 11, 'HADIR'),
(40, '2023-08-10', '1', '09:37:50', 11, 'HADIR'),
(41, '2023-08-01', '1', '08:10:00', 14, 'HADIR'),
(42, '2023-08-02', '1', '08:10:00', 14, 'HADIR'),
(43, '2023-08-03', '1', '08:10:00', 14, 'HADIR'),
(44, '2023-08-04', '1', '08:10:00', 14, 'HADIR'),
(45, '2023-08-05', '1', '08:10:00', 14, 'HADIR'),
(46, '2023-08-06', '1', '08:10:00', 14, 'HADIR'),
(47, '2023-08-07', '1', '08:10:00', 14, 'HADIR'),
(48, '2023-08-07', '1', '08:10:00', 15, 'HADIR'),
(49, '2023-08-01', '1', '08:10:00', 15, 'HADIR'),
(50, '2023-08-02', '1', '08:10:00', 15, 'HADIR'),
(51, '2023-08-03', '1', '08:10:00', 15, 'HADIR'),
(52, '2023-08-04', '1', '08:10:00', 15, 'HADIR'),
(53, '2023-08-05', '1', '08:10:00', 15, 'HADIR'),
(54, '2023-08-06', '1', '08:10:00', 15, 'HADIR');

-- --------------------------------------------------------

--
-- Table structure for table `akta_kelahiran`
--

CREATE TABLE `akta_kelahiran` (
  `id` int(20) NOT NULL,
  `no_akta` varchar(250) DEFAULT NULL,
  `ayah` int(20) NOT NULL,
  `ibu` int(20) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `surat_akta` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akta_kelahiran`
--

INSERT INTO `akta_kelahiran` (`id`, `no_akta`, `ayah`, `ibu`, `nama`, `jk`, `tgl_lahir`, `tgl_dibuat`, `tempat`, `updated_by`, `status`, `surat_akta`) VALUES
(1, '9216.O/M-207667748781', 2, 3, 'Melisa Chintiya', 'Perempuan', '2007-06-28', '2023-01-04', 'Banjarmasin', '3', '1', ''),
(4, '2839.M/C-411137548212', 2, 3, 'Darmha Kusuma', 'Laki-laki', '2023-01-01', '2023-01-27', 'Banjarmasin', '3', '1', ''),
(5, '0948.S/A-238350300216', 5, 6, 'Vania Lesvita', 'Perempuan', '2022-12-10', '2023-01-10', 'Banjarmasin', '6', '1', 'surat_akta.pdf'),
(6, '4635.W/T-229013300948', 7, 4, 'Galih ', 'Laki-laki', '2021-07-31', '2021-07-31', 'Banjarmasin', '7', '1', '2351-Article Text-4645-1-10-20211127.pdf'),
(7, '4402.N/A-411641933087', 5, 6, 'Suprapto', 'Laki-laki', '2019-01-20', '2019-02-20', 'Banjarmasin', '5', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `akta_keluarga`
--

CREATE TABLE `akta_keluarga` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `alamat` varchar(250) NOT NULL,
  `kepala_keluarga` int(20) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `surat_akta` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akta_keluarga`
--

INSERT INTO `akta_keluarga` (`id`, `no_kk`, `alamat`, `kepala_keluarga`, `tgl_dibuat`, `updated_by`, `status`, `surat_akta`) VALUES
(5, '1635877773730662', 'Jln Belitung', 2, '2017-09-08', '2', '1', ''),
(6, '2037938292370591', 'Jln Kelayan', 5, '2018-03-09', '5', '1', 'Kartu-Keluarga.pdf'),
(7, NULL, 'Jln Veteran', 7, '2017-01-08', '7', '0', ''),
(10, '', 'Jln Kayutangi', 10, '2023-08-03', '0', '0', NULL),
(11, '0830655539533724', 'Jln Yos Yudarso', 11, '2023-08-10', '0', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `akta_perkawinan`
--

CREATE TABLE `akta_perkawinan` (
  `id` int(20) NOT NULL,
  `no` varchar(250) DEFAULT NULL,
  `nama_pria` int(50) NOT NULL,
  `nama_wanita` int(50) NOT NULL,
  `tgl_nikah` date NOT NULL,
  `tempat_nikah` varchar(250) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `berkas_kk` varchar(250) NOT NULL,
  `berkas_skd` varchar(250) NOT NULL,
  `berkas_skp` varchar(250) NOT NULL,
  `berkas_ktp` varchar(250) NOT NULL,
  `berkas_photo` varchar(250) NOT NULL,
  `berkas_akkel` varchar(250) NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `surat_akta` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akta_perkawinan`
--

INSERT INTO `akta_perkawinan` (`id`, `no`, `nama_pria`, `nama_wanita`, `tgl_nikah`, `tempat_nikah`, `tgl_dibuat`, `berkas_kk`, `berkas_skd`, `berkas_skp`, `berkas_ktp`, `berkas_photo`, `berkas_akkel`, `updated_by`, `status`, `surat_akta`) VALUES
(1, '6008-RS-82592279-7207', 5, 6, '2019-09-02', 'KUA Banjarmasin Barat', '2019-10-02', '', '', '', '', '', '', '6', '1', ''),
(2, '9483-BU-18012013-0025', 2, 3, '2020-12-08', 'KUA Banjarmasin Timur', '2021-01-08', '', '', '', '', '', '', '3', '1', ''),
(3, '6836-AY-25194471-0102', 7, 4, '2021-08-09', 'KUA Banjarmasin Timur', '2021-07-09', '', '', '', '', '', '', '7', '1', ''),
(4, '0909021902901', 5, 3, '2023-07-15', 'KUA Banjarmasin Barat', '2023-07-23', '\r\n        2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '', '0', '', ''),
(6, '', 11, 12, '2023-07-31', 'KUA Banjarmasin Barat', '2023-08-13', '\r\n        2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '', '0', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `status` varchar(250) NOT NULL,
  `keperluan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `id_pegawai`, `tanggal_awal`, `tanggal_akhir`, `status`, `keperluan`) VALUES
(1, 9, '2023-07-27', '2023-07-28', '0', 'Acara Keluarga'),
(2, 7, '2023-07-29', '2023-07-30', '1', 'Liburan'),
(3, 10, '2023-07-06', '2023-07-06', '0', 'Pulang Kampung'),
(4, 11, '2023-08-28', '2023-08-28', '0', 'Acara Keluarga'),
(5, 14, '2023-09-01', '2023-09-01', '0', 'Acara Keluarga'),
(6, 15, '2023-09-01', '2023-09-01', '0', 'Jaga orang tua sakit');

-- --------------------------------------------------------

--
-- Table structure for table `detail_akta_keluarga`
--

CREATE TABLE `detail_akta_keluarga` (
  `id` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_surat_tugas`
--

CREATE TABLE `detail_surat_tugas` (
  `id` int(20) NOT NULL,
  `id_surat_tugas` int(20) NOT NULL,
  `id_pegawai` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_surat_tugas`
--

INSERT INTO `detail_surat_tugas` (`id`, `id_surat_tugas`, `id_pegawai`) VALUES
(1, 2, 9),
(2, 2, 10),
(3, 4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `domisili`
--

CREATE TABLE `domisili` (
  `id` int(20) NOT NULL,
  `id_penduduk` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `surat_rt` varchar(250) NOT NULL,
  `surat_capil` varchar(250) NOT NULL,
  `berkas_ktp` varchar(250) NOT NULL,
  `berkas_kk` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domisili`
--

INSERT INTO `domisili` (`id`, `id_penduduk`, `tanggal`, `surat_rt`, `surat_capil`, `berkas_ktp`, `berkas_kk`, `status`) VALUES
(1, 6, '2023-08-24', '2351-Article Text-4645-1-10-20211127.pdf', '', '', '', '1'),
(2, 4, '2023-08-28', '2351-Article Text-4645-1-10-20211127.pdf', '', '', '', '1'),
(3, 3, '2023-08-12', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '0'),
(4, 4, '2023-08-12', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '0'),
(5, 7, '2023-08-17', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '0'),
(6, 9, '2023-08-12', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gajih`
--

CREATE TABLE `gajih` (
  `id` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `tunjangan` varchar(250) NOT NULL,
  `gaji` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gajih`
--

INSERT INTO `gajih` (`id`, `id_pegawai`, `tunjangan`, `gaji`, `total`, `ket`) VALUES
(1, 9, '600000', '3200000', '3800000', '-'),
(2, 7, '1000000', '3200000', '4200000', '-'),
(3, 10, '800000', '4000000', '4800000', '-'),
(4, 11, '1000000', '3500000', '4500000', '-'),
(5, 14, '300000', '4500000', '4800000', '-'),
(6, 15, '0', '2800000', '2800000', '-');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id` int(20) NOT NULL,
  `golongan` varchar(250) NOT NULL,
  `tingkat` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `golongan`, `tingkat`, `ket`) VALUES
(1, 'Golongan I', 'IA', 'Juru Muda'),
(2, 'Golongan I', 'IB', 'Juru Muda Tingkat 1'),
(3, 'Golongan I', 'IC', 'Juru'),
(4, 'Golongan I', 'ID', 'Juru Tingkat 1');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(20) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`, `ket`) VALUES
(1, 'Atasan', '-'),
(2, 'Administrasi', '-'),
(3, 'Staff', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(250) NOT NULL,
  `panggilan` varchar(250) NOT NULL,
  `instansi` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kota` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `no` varchar(250) NOT NULL,
  `kritik` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`id`, `tgl`, `nama`, `panggilan`, `instansi`, `alamat`, `kota`, `email`, `no`, `kritik`) VALUES
(1, '2023-07-27', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', '08135263552', '');

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_awal` varchar(250) NOT NULL,
  `jam_akhir` varchar(250) NOT NULL,
  `jumlah_jam` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id`, `id_pegawai`, `tanggal`, `jam_awal`, `jam_akhir`, `jumlah_jam`, `total`, `ket`) VALUES
(1, 9, '2023-07-12', '18:00', '23:00', '5', '50000', 'Persiapan Sosialisai'),
(2, 7, '2023-07-15', '18:00', '21:00', '3', '30000', '-'),
(3, 9, '2023-07-09', '18:00', '20:00', '2', '25000', '-'),
(6, 11, '2023-08-08', '19:00', '23:00', '4', '40000', 'Penyelesaian Data Penduduk'),
(7, 14, '2023-08-11', '18:32', '23:33', '5', '50000', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(250) NOT NULL,
  `agama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `jabatan` int(20) NOT NULL,
  `golongan` int(20) NOT NULL,
  `no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nik`, `nama`, `tgl_lahir`, `jk`, `agama`, `alamat`, `email`, `jabatan`, `golongan`, `no`) VALUES
(7, '1987009', 'Asih Rabbiatul Jahriah', '2022-10-01', 'Islam', 'Perempuan', 'Jln Kayutangi', 'asih@gmail.com', 2, 1, '0863526733625'),
(9, '1233133', 'Sarah Syifa', '1999-09-08', 'Islam', 'Perempuan', 'Jln Belitung', 'sarah@gmail.com', 3, 2, '082263546637'),
(10, '1586304', 'Harun Jakarian', '1980-02-08', 'Kristen', 'Laki-laki', 'Jln Kelayan', 'harun@gmail.com', 1, 4, '08135263552'),
(11, '1390990', 'Muhammad Fachriyal', '1998-01-08', 'Laki-laki', 'Islam', 'Jln Veteran', 'fachri@gmail.com', 3, 3, '081162536635'),
(14, '923828398293', 'Elvina Silalahi', '2023-08-01', 'Kristen', 'Perempuan', 'Jln Belitung', 'vina@gmail.com', 2, 3, '0822516255362'),
(15, '032902839892', 'Didiek Saputra', '2023-07-31', 'Islam', 'Laki-laki', 'Jln Kelayan', 'didiek@gmail.com', 3, 2, '081382739483');

-- --------------------------------------------------------

--
-- Table structure for table `pencapaian`
--

CREATE TABLE `pencapaian` (
  `id` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `capaian` varchar(250) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pencapaian`
--

INSERT INTO `pencapaian` (`id`, `id_pegawai`, `tgl`, `capaian`, `tempat`, `ket`, `foto`) VALUES
(0, 7, '2023-08-10', 'Sosialisasi Masyrakat', 'Banjarmasin', 'Membuat masyarakat untuk mendaftarkan akta ', 'Sosialisasi_Dukcapil_1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `no_penduduk` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `no_penduduk`, `nama`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no`) VALUES
(2, '3202080504910003', 'Gilang Siduarjo', 'Laki-laki', 'Banjarmasin', '1987-02-02', 'Jln Kayutangi', '082263526372'),
(3, '3330293802930490', 'Fatimah', 'Perempuan', 'Banjarbaru', '1992-08-08', 'Jln Belitung', '081382739483'),
(4, '3824631041650093', 'Sholehah', 'Perempuan', 'Banjarmasin', '1970-04-04', 'Jln Pandjaitan', '087362736292'),
(5, '7550053436848399', 'Haikal Ilman', 'Laki-laki', 'Banjarmasin', '1990-08-07', 'Jln Veteran', '08225162273'),
(6, '3185188303819994', 'Nisa Laila', 'Perempuan', 'Banjarmasin', '1995-01-08', 'Jln Kelayan', '081392833742'),
(7, '8273649283726352', 'Bahrudin', 'Laki-laki', 'Banjarmasin', '1996-08-02', 'Jln Yos Yudarso', '0822516255362'),
(9, '3330293802930490', 'Fathul Jannah', 'Perempuan', 'Banjarmasin', '2023-05-12', 'Jln Kayutangi', '08225162273'),
(10, '3185188303819994', 'Agil Desalwa', 'Laki-laki', 'Banjarbaru', '2023-04-07', 'Jln Kelayan', '082263526372'),
(11, '8273649283726352', 'Jaja Miharja', 'Laki-laki', 'Banjarmasin', '2023-08-02', 'Jln Yos Yudarso', '081382739483'),
(12, '7550053438848397', 'Syifa Maharani', 'Perempuan', 'Banjarbaru', '2023-08-02', 'Jln Kayutangi', '0822516255362');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(250) NOT NULL,
  `panggilan` varchar(250) NOT NULL,
  `instansi` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kota` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `no` varchar(250) NOT NULL,
  `pengaduan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `tgl`, `nama`, `panggilan`, `instansi`, `alamat`, `kota`, `email`, `no`, `pengaduan`) VALUES
(1, '2023-07-27', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', '08135263552', '');

-- --------------------------------------------------------

--
-- Table structure for table `perubahan_akta_kelahiran`
--

CREATE TABLE `perubahan_akta_kelahiran` (
  `id` int(20) NOT NULL,
  `no_akta` int(20) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_pengubahan` date NOT NULL,
  `perubahan` varchar(250) NOT NULL,
  `alasan` varchar(250) NOT NULL,
  `akta_awal` varchar(250) NOT NULL,
  `akta_perubahan` varchar(250) NOT NULL,
  `dokumen` varchar(250) NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perubahan_akta_kelahiran`
--

INSERT INTO `perubahan_akta_kelahiran` (`id`, `no_akta`, `tgl_pengajuan`, `tgl_pengubahan`, `perubahan`, `alasan`, `akta_awal`, `akta_perubahan`, `dokumen`, `updated_by`, `status`) VALUES
(2, 1, '2022-12-09', '2022-12-29', 'Tanggal Lahir', 'Salah Ketik 1 Angka', '1771.LT-180920100016.pdf', '1771.LT-180920100016.pdf', 'dokumen1771.LT-180920100016.pdf', '3', '0'),
(3, 4, '2021-04-01', '2021-05-01', 'Nama', 'Salah Satu Huruf Tertukar dengan Huruf lain', '1325.DF-148340300016.pdf', '1325.DF-148340300016.pdf', 'dokumen_1325.DF-148340300016.pdf', '3', '0'),
(4, 5, '2021-05-05', '2021-06-05', 'Nama', 'Kurang 1 Huruf di Nama Belakang', '0948.SA-238350300216.pdf', '0948.SA-238350300216.pdf', 'dokumen_0948.SA-238350300216.pdf', '5', '0'),
(5, 6, '2022-08-08', '2022-09-08', 'Tanggal Lahir', 'Salah Tahun Lahir', '4635.WT-229013300948.pdf', '4635.WT-229013300948.pdf', 'dokumen_4635.WT-229013300948.pdf', '7', '0'),
(7, 7, '2023-02-10', '2023-02-10', 'Nama Akta Kelahiran', 'Salah Ketik 1 Huruf Saja', '8374.TL-587420100847.pdf', '8374.TL-587420100847.pdf', '8374.TL-587420100847.pdf', 'Array', '0'),
(8, 4, '2023-02-02', '2023-02-07', 'Nama Akta Kelahiran', 'Salah Ketik 1 Huruf', '1325.DF-148340300016.pdf', '1325.DF-148340300016.pdf', 'dokumen_1325.DF-148340300016.pdf', '3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `perubahan_akta_keluarga`
--

CREATE TABLE `perubahan_akta_keluarga` (
  `id` int(20) NOT NULL,
  `no_akta` int(20) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_pengubahan` date NOT NULL,
  `perubahan` varchar(250) NOT NULL,
  `alasan` varchar(250) NOT NULL,
  `akta_awal` varchar(250) NOT NULL,
  `akta_perubahan` varchar(250) NOT NULL,
  `dokumen` varchar(250) NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perubahan_akta_keluarga`
--

INSERT INTO `perubahan_akta_keluarga` (`id`, `no_akta`, `tgl_pengajuan`, `tgl_pengubahan`, `perubahan`, `alasan`, `akta_awal`, `akta_perubahan`, `dokumen`, `updated_by`, `status`) VALUES
(6, 6, '2022-08-08', '2022-09-08', 'Alamat', 'Salah Tulis Alamat', '2037938292370591.pdf', '2037938292370591.pdf', 'dokumen_2037938292370591.pdf', '5', '0'),
(7, 6, '2022-07-07', '2022-08-07', 'No KK', 'Salah Ketik 1 Angka', '2037938292370591.pdf', '2037938292370591.pdf', 'dokumen_2037938292370591.pdf', '5', '0'),
(8, 7, '2022-05-05', '2022-06-05', 'Alamat', 'Salah Nama Alamat Jalan dan No Rt', '6605642241262583.pdf', '6605642241262583.pdf', 'dokumen_6605642241262583.pdf', '7', '0'),
(9, 11, '2023-08-24', '2023-08-31', 'Alamat', 'Salah Ketik 1 Huruf ', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `perubahan_akta_perkawinan`
--

CREATE TABLE `perubahan_akta_perkawinan` (
  `id` int(20) NOT NULL,
  `no_akta` int(20) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_pengubahan` date NOT NULL,
  `perubahan` varchar(250) NOT NULL,
  `alasan` varchar(250) NOT NULL,
  `akta_awal` varchar(250) NOT NULL,
  `akta_perubahan` varchar(250) NOT NULL,
  `dokumen` varchar(250) NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perubahan_akta_perkawinan`
--

INSERT INTO `perubahan_akta_perkawinan` (`id`, `no_akta`, `tgl_pengajuan`, `tgl_pengubahan`, `perubahan`, `alasan`, `akta_awal`, `akta_perubahan`, `dokumen`, `updated_by`, `status`) VALUES
(6, 1, '2021-09-08', '2021-09-09', 'Tanggal Nikah', 'Salah Tanggal Pernikahan', '1928CSK2019.pdf', '1928CSK2019.pdf', 'dokumen_1928CSK2019.pdf', '6', '1'),
(7, 2, '2021-07-07', '2021-08-07', 'Nama Tempat', 'Perubahan Nama Tempat Nikah', '9483-BU-18012013-0025.pdf', '9483-BU-18012013-0025.pdf', 'dokumen_9483-BU-18012013-0025.pdf', '3', '0'),
(8, 3, '2021-09-08', '2021-09-09', 'Tanggal Nikah', 'Salah Tulis Tahun Pernikahan', '0392-YR-12032005-0004.pdf', '0392-YR-12032005-0004.pdf', 'dokumen_0392-YR-12032005-0004.pdf', '7', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pindah_domisili`
--

CREATE TABLE `pindah_domisili` (
  `id` int(20) NOT NULL,
  `id_penduduk` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat_tujuan` varchar(250) NOT NULL,
  `alasan` varchar(250) NOT NULL,
  `surat_rt` varchar(250) NOT NULL,
  `surat_capil` varchar(250) NOT NULL,
  `berkas_ktp` varchar(250) NOT NULL,
  `berkas_kk` varchar(250) NOT NULL,
  `surat_domisili` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pindah_domisili`
--

INSERT INTO `pindah_domisili` (`id`, `id_penduduk`, `tanggal`, `alamat_tujuan`, `alasan`, `surat_rt`, `surat_capil`, `berkas_ktp`, `berkas_kk`, `surat_domisili`, `status`) VALUES
(1, 6, '2023-08-24', '', '', '2351-Article Text-4645-1-10-20211127.pdf', '', '', '', '', '1'),
(2, 4, '2023-08-28', '', '', '2351-Article Text-4645-1-10-20211127.pdf', '', '', '', '', '1'),
(3, 3, '2023-08-12', '', '', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '0'),
(4, 4, '2023-08-12', 'Desa Sidoarjo Rt01 Rw 05 Siduarjo Jawa', 'Pekerjaan', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '0'),
(5, 7, '2023-08-17', 'Desa Sidoarjo Rt01 Rw 05 Siduarjo Jawa', 'Ikut Suami', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '1'),
(6, 9, '2023-08-12', 'Desa Klateng Rt 93 Rw 23 Siduarjo Jawa Tengah', 'Pendidikan', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '2351-Article Text-4645-1-10-20211127.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `spd`
--

CREATE TABLE `spd` (
  `id` int(20) NOT NULL,
  `perintah` int(20) NOT NULL,
  `id_pegawai` int(20) DEFAULT NULL,
  `tujuan` varchar(250) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `rangka` varchar(250) NOT NULL,
  `transportasi` varchar(250) NOT NULL,
  `pembiayaan` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spd`
--

INSERT INTO `spd` (`id`, `perintah`, `id_pegawai`, `tujuan`, `tanggal_awal`, `tanggal_akhir`, `rangka`, `transportasi`, `pembiayaan`, `status`) VALUES
(2, 10, 9, 'Kapuas', '2023-08-06', '2023-08-10', 'Sosialisasi Masyarakat', 'Kendraan Pribadi', 'Monitoring', '1'),
(7, 0, 9, 'Desa Abumbun Jaya, Sungai Tabuk, Banjar', '2023-07-27', '2023-07-29', 'Sosialisasi Dukcapil Menyapa Masyarakat', 'Kendaraan Dinas', 'Monitoring', '1'),
(8, 0, 7, 'Banjarbaru', '2023-08-06', '2023-08-12', 'Sosialisasi', 'Travel', 'Monitoring', '1'),
(9, 0, 10, 'Pelaihari', '2023-08-16', '2023-08-17', 'Kunjungan ke Desa', 'Kendaraan Dinas', 'Akomodasi', '1'),
(10, 0, 15, 'Jakarta', '2023-09-01', '2023-09-01', 'Rapat', 'Travel', 'Akomodasi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id` int(20) NOT NULL,
  `perintah` int(20) NOT NULL,
  `id_pegawai` int(20) DEFAULT NULL,
  `tujuan` varchar(250) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `rangka` varchar(250) NOT NULL,
  `transportasi` varchar(250) NOT NULL,
  `pembiayaan` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_tugas`
--

INSERT INTO `surat_tugas` (`id`, `perintah`, `id_pegawai`, `tujuan`, `tanggal_awal`, `tanggal_akhir`, `rangka`, `transportasi`, `pembiayaan`, `status`) VALUES
(1, 10, 9, 'Desa Abumbun Jaya, Sungai Tabuk, Banjar', '2023-08-27', '2023-07-29', 'Sosialisasi Dukcapil Menyapa Masyarakat', 'Kendaraan Dinas', 'Monitoring', '1'),
(2, 10, 11, 'Kapuas', '2023-08-06', '2023-08-10', 'Sosialisasi Masyarakat', 'Kendraan Pribadi', 'Monitoring', '1'),
(4, 10, 7, 'Banjarbaru', '2023-08-06', '2023-08-12', 'Sosialisasi', 'Travel', 'Monitoring', '1'),
(7, 10, 10, 'Pelaihari', '2023-08-16', '2023-08-17', 'Kunjungan ke Desa', 'Kendaraan Dinas', 'Akomodasi', '1'),
(8, 10, 14, 'Pelaihari', '2023-08-31', '2023-08-31', 'Sosialisasi Masyarakat', 'Kendaraan Umum', 'Akomodasi', '0'),
(9, 10, 15, 'Jakarta', '2023-09-01', '2023-09-01', 'Rapat', 'Travel', 'Akomodasi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `id_penduduk` varchar(20) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_penduduk`, `username`, `password`, `level`) VALUES
(1, '0', 'admin', 'admin', '1'),
(6, '3', 'fatimah', '1234', '2'),
(7, '5', 'haikal', '1234', '2'),
(8, '6', 'nisa', '1234', '2'),
(9, '7', 'udin', '1234', '2'),
(13, '11', 'jaja', '1234', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_pegawai`
--

CREATE TABLE `user_pegawai` (
  `id` int(20) NOT NULL,
  `id_penduduk` varchar(20) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_pegawai`
--

INSERT INTO `user_pegawai` (`id`, `id_penduduk`, `username`, `password`, `level`) VALUES
(1, '0', 'admin', 'admin', '1'),
(10, '9', 'sarah', '1234', '3'),
(11, '10', 'harun', '1234', '3'),
(12, '15', 'didiek', '1234', '3'),
(13, '14', 'elvina', '1234', '3'),
(14, '11', 'fachriyal', '1234', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `akta_kelahiran`
--
ALTER TABLE `akta_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ayah` (`ayah`),
  ADD KEY `ibu` (`ibu`);

--
-- Indexes for table `akta_keluarga`
--
ALTER TABLE `akta_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kepala_keluarga` (`kepala_keluarga`);

--
-- Indexes for table `akta_perkawinan`
--
ALTER TABLE `akta_perkawinan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_wanita` (`nama_wanita`),
  ADD KEY `nama_pria` (`nama_pria`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `detail_akta_keluarga`
--
ALTER TABLE `detail_akta_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_surat_tugas`
--
ALTER TABLE `detail_surat_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `gajih`
--
ALTER TABLE `gajih`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatan` (`jabatan`),
  ADD KEY `golongan` (`golongan`);

--
-- Indexes for table `pencapaian`
--
ALTER TABLE `pencapaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perubahan_akta_kelahiran`
--
ALTER TABLE `perubahan_akta_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_akta` (`no_akta`);

--
-- Indexes for table `perubahan_akta_keluarga`
--
ALTER TABLE `perubahan_akta_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_akta` (`no_akta`);

--
-- Indexes for table `perubahan_akta_perkawinan`
--
ALTER TABLE `perubahan_akta_perkawinan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_akta` (`no_akta`);

--
-- Indexes for table `pindah_domisili`
--
ALTER TABLE `pindah_domisili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `spd`
--
ALTER TABLE `spd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pegawai`
--
ALTER TABLE `user_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `akta_kelahiran`
--
ALTER TABLE `akta_kelahiran`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `akta_keluarga`
--
ALTER TABLE `akta_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `akta_perkawinan`
--
ALTER TABLE `akta_perkawinan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_akta_keluarga`
--
ALTER TABLE `detail_akta_keluarga`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_surat_tugas`
--
ALTER TABLE `detail_surat_tugas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `domisili`
--
ALTER TABLE `domisili`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gajih`
--
ALTER TABLE `gajih`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lembur`
--
ALTER TABLE `lembur`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perubahan_akta_kelahiran`
--
ALTER TABLE `perubahan_akta_kelahiran`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `perubahan_akta_keluarga`
--
ALTER TABLE `perubahan_akta_keluarga`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `perubahan_akta_perkawinan`
--
ALTER TABLE `perubahan_akta_perkawinan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pindah_domisili`
--
ALTER TABLE `pindah_domisili`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spd`
--
ALTER TABLE `spd`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_pegawai`
--
ALTER TABLE `user_pegawai`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `akta_kelahiran`
--
ALTER TABLE `akta_kelahiran`
  ADD CONSTRAINT `akta_kelahiran_ibfk_1` FOREIGN KEY (`ayah`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `akta_kelahiran_ibfk_2` FOREIGN KEY (`ibu`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `akta_keluarga`
--
ALTER TABLE `akta_keluarga`
  ADD CONSTRAINT `akta_keluarga_ibfk_1` FOREIGN KEY (`kepala_keluarga`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `akta_perkawinan`
--
ALTER TABLE `akta_perkawinan`
  ADD CONSTRAINT `akta_perkawinan_ibfk_1` FOREIGN KEY (`nama_pria`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `akta_perkawinan_ibfk_2` FOREIGN KEY (`nama_wanita`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `domisili`
--
ALTER TABLE `domisili`
  ADD CONSTRAINT `domisili_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gajih`
--
ALTER TABLE `gajih`
  ADD CONSTRAINT `gajih_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lembur`
--
ALTER TABLE `lembur`
  ADD CONSTRAINT `lembur_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`golongan`) REFERENCES `golongan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perubahan_akta_kelahiran`
--
ALTER TABLE `perubahan_akta_kelahiran`
  ADD CONSTRAINT `perubahan_akta_kelahiran_ibfk_1` FOREIGN KEY (`no_akta`) REFERENCES `akta_kelahiran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perubahan_akta_keluarga`
--
ALTER TABLE `perubahan_akta_keluarga`
  ADD CONSTRAINT `perubahan_akta_keluarga_ibfk_1` FOREIGN KEY (`no_akta`) REFERENCES `akta_keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perubahan_akta_perkawinan`
--
ALTER TABLE `perubahan_akta_perkawinan`
  ADD CONSTRAINT `perubahan_akta_perkawinan_ibfk_1` FOREIGN KEY (`no_akta`) REFERENCES `akta_perkawinan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
