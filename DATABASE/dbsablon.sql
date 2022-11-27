-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 05:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsablon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_nama`, `admin_password`) VALUES
(1, 'admin', '$2y$10$eFetSLaC466ZAbckRw4yL.3Jtd1GSrgxnBnTlMyoFC2nCvb1Ay5Ii');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `inv_id` int(11) NOT NULL,
  `inv_nama` varchar(255) NOT NULL,
  `inv_alamat` varchar(255) NOT NULL,
  `inv_itemId` varchar(255) NOT NULL,
  `inv_produk` varchar(255) NOT NULL,
  `inv_quantity` varchar(255) NOT NULL,
  `inv_price` varchar(255) NOT NULL,
  `inv_total` varchar(255) NOT NULL,
  `inv_subTotal` varchar(255) NOT NULL,
  `inv_taxAmount` varchar(255) NOT NULL,
  `inv_totalRate` varchar(255) NOT NULL,
  `inv_taxRate` varchar(255) NOT NULL,
  `inv_totalAftertax` varchar(255) NOT NULL,
  `inv_amountPaid` varchar(255) NOT NULL,
  `inv_amountDue` varchar(255) NOT NULL,
  `inv_note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`inv_id`, `inv_nama`, `inv_alamat`, `inv_itemId`, `inv_produk`, `inv_quantity`, `inv_price`, `inv_total`, `inv_subTotal`, `inv_taxAmount`, `inv_totalRate`, `inv_taxRate`, `inv_totalAftertax`, `inv_amountPaid`, `inv_amountDue`, `inv_note`) VALUES
(2, 'Mamat', 'Jogjakarta , Bantul', '', '', '', '', '', '864000', '0', '', '', '864000', '', '864000', 'Silahkan melakukan transaksi melalui bank mandiri dengan nomor rekening \r\n32127912834'),
(3, 'Dodit', 'Jogjakarta, Sleman', '004', 'Combed 20s Kaos Polos + Merah + Desain', '12', '68000', '816000', '816000', '0', '', '', '816000', '', '816000', ''),
(4, 'Toni', 'Sidoarjo', '', 'Kemeja Combed + 30 + kuning', '72', '68000', '4896000', '4896000', '0', '', '', '4896000', '', '4896000', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(100) NOT NULL,
  `usersEmail` varchar(100) NOT NULL,
  `usersUid` varchar(100) NOT NULL,
  `usersWa` varchar(14) NOT NULL,
  `usersAlamat` varchar(255) NOT NULL,
  `usersPwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersWa`, `usersAlamat`, `usersPwd`) VALUES
(1, 'Aldiansyah', 'aldi55@gmail.com', 'aldi', '', '', '$2y$10$7o6UUHXkJGZOO2nEEfIszeQSVU9Zd7DoVgEJqOVoi/ps7g3kAk26e'),
(2, 'Amirulmuwahiddin Noor', 'mirulhg@gmail.com', 'mirul', '', '', '$2y$10$T3vJ320U2p0pIjYoQlMJXuT7ura95Z23aMslzNV201GwlvXD5hj.O'),
(3, 'Alexander', 'alex55@gmail.com', 'alex', '', '', '$2y$10$B3wLXgOpkfWpYsWGFTL1zuqGnyVAV/3IatIwPHkL2K0Goq5sARO.W'),
(4, 'Eliana', 'elia20@gmail.com', 'Eliana', 'Sidoarjo', '085451425716', '$2y$10$zhIcPoezmeH.91n8xNOl9uqIaPKSoon7PKQ9YNXhbVxsL3EFCKuOO'),
(5, 'Tobirama', 'tobirama@gmail.com', 'tobi', 'Sleman, Yogyak', '085451425716', '$2y$10$/APqIrunORGQMILdSGtakui36/w.MvD1NZ.bvKDzH8IXTAmIyVGgW');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `psn_id` int(11) NOT NULL,
  `psn_nama` varchar(100) NOT NULL,
  `psn_baju` varchar(100) NOT NULL,
  `psn_warna` varchar(100) NOT NULL,
  `psn_jenis` varchar(100) NOT NULL,
  `psn_ukuran` varchar(100) NOT NULL,
  `psn_desain` varchar(255) NOT NULL,
  `psn_posisi` varchar(100) NOT NULL,
  `psn_jumlah` varchar(100) NOT NULL,
  `psn_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`psn_id`, `psn_nama`, `psn_baju`, `psn_warna`, `psn_jenis`, `psn_ukuran`, `psn_desain`, `psn_posisi`, `psn_jumlah`, `psn_tanggal`) VALUES
(15, 'Toni', 'Kemeja', 'Kuning', '30s', 'L', '61f29b8a297e4-user-desain.png', '', '6', '2022-01-23'),
(16, 'Putra', 'Kemeja', 'Kuning', '32s', 'L', '61f298f2f16bb-user-desain.png', '', '4', '2022-01-23'),
(17, 'Tania', 'Kaos Polos', 'Kuning', '24s', 'S', '61f28261d5272-user-desain.png', '', '2', '2022-01-23'),
(18, 'Erika', 'Kemeja', 'Biru', '30s', 'S', '61f2ee43b231e-user-desain.png', '', '7', '2022-01-28'),
(19, 'Topan', 'Kemeja', 'Kuning', '30s', 'S', '61f2ee855ec08-user-desain.png', '', '5', '2022-01-28'),
(20, 'Wendi', 'Kemeja', 'Hitam', '32s', 'M', '61f2eeb252a66-user-desain.png', '', '4', '2022-01-28'),
(21, 'Galih', 'Kemeja', 'Biru', '20s', 'L', '61f7be568859e-user-desain.png', '', '3', '2022-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `prd_id` int(11) NOT NULL,
  `prd_polos_s20` varchar(100) NOT NULL,
  `prd_polos_s24` varchar(100) NOT NULL,
  `prd_polos_s30` varchar(100) NOT NULL,
  `prd_polos_s32` varchar(100) NOT NULL,
  `prd_polos_s40` varchar(100) NOT NULL,
  `prd_kemeja_s20` varchar(100) NOT NULL,
  `prd_kemeja_s24` varchar(100) NOT NULL,
  `prd_kemeja_s30` varchar(100) NOT NULL,
  `prd_kemeja_s32` varchar(100) NOT NULL,
  `prd_kemeja_s40` varchar(100) NOT NULL,
  `prd_sweater_s20` varchar(100) NOT NULL,
  `prd_sweater_s24` varchar(100) NOT NULL,
  `prd_sweater_s30` varchar(100) NOT NULL,
  `prd_sweater_s32` varchar(100) NOT NULL,
  `prd_sweater_s40` varchar(100) NOT NULL,
  `prd_hitam` varchar(100) NOT NULL,
  `prd_putih` varchar(100) NOT NULL,
  `prd_merah` varchar(100) NOT NULL,
  `prd_biru` varchar(100) NOT NULL,
  `prd_hijau` varchar(100) NOT NULL,
  `prd_kuning` varchar(100) NOT NULL,
  `prd_coklat` varchar(100) NOT NULL,
  `prd_abu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`prd_id`, `prd_polos_s20`, `prd_polos_s24`, `prd_polos_s30`, `prd_polos_s32`, `prd_polos_s40`, `prd_kemeja_s20`, `prd_kemeja_s24`, `prd_kemeja_s30`, `prd_kemeja_s32`, `prd_kemeja_s40`, `prd_sweater_s20`, `prd_sweater_s24`, `prd_sweater_s30`, `prd_sweater_s32`, `prd_sweater_s40`, `prd_hitam`, `prd_putih`, `prd_merah`, `prd_biru`, `prd_hijau`, `prd_kuning`, `prd_coklat`, `prd_abu`) VALUES
(14, 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tersedia', 'Tidak Tersedia', 'Tidak Tersedia', 'Tersedia', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `sts_id` int(11) NOT NULL,
  `sts_nama` varchar(255) NOT NULL,
  `sts_date1` date NOT NULL,
  `sts_bahan` varchar(100) NOT NULL,
  `sts_desain` varchar(100) NOT NULL,
  `sts_ukuran` varchar(100) NOT NULL,
  `sts_potong` varchar(100) NOT NULL,
  `sts_sablon` varchar(100) NOT NULL,
  `sts_jahit` varchar(100) NOT NULL,
  `sts_finish` varchar(100) NOT NULL,
  `sts_pack` varchar(100) NOT NULL,
  `sts_date2` date NOT NULL,
  `sts_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`sts_id`, `sts_nama`, `sts_date1`, `sts_bahan`, `sts_desain`, `sts_ukuran`, `sts_potong`, `sts_sablon`, `sts_jahit`, `sts_finish`, `sts_pack`, `sts_date2`, `sts_status`) VALUES
(9, 'Rosli', '2022-01-19', 'Done', 'Done', 'Done', 'Done', 'Dalam Proses Pengerjaan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', '2022-01-31', 'Belum Bisa Di Ambil'),
(10, 'Moris', '2022-01-23', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', '0000-00-00', 'Belum Bisa Di Ambil'),
(11, 'Toni', '2022-02-04', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', 'Belum Dikerjakan', '2022-02-24', 'Belum Bisa Di Ambil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`psn_id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`sts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `psn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `sts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
