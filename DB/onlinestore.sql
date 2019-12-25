-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 11:05 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `id` int(11) NOT NULL,
  `kode_jual` varchar(20) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan_detail`
--

INSERT INTO `penjualan_detail` (`id`, `kode_jual`, `id_product`, `qty`, `price`) VALUES
(20, '1.PENJ.23122019', 12, 1, 105000),
(21, '2.PENJ.23122019', 12, 1, 105000),
(22, '3.PENJ.23122019', 12, 1, 105000),
(23, '4.PENJ.23122019', 12, 1, 105000),
(24, '5.PENJ.23122019', 15, 1, 105000);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_header`
--

CREATE TABLE `penjualan_header` (
  `id` int(11) NOT NULL,
  `kode_jual` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `zip` int(30) NOT NULL,
  `alamat` text NOT NULL,
  `grand_total` decimal(15,0) NOT NULL,
  `mode_pembayaran` varchar(10) NOT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `transaction_date` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan_header`
--

INSERT INTO `penjualan_header` (`id`, `kode_jual`, `first_name`, `last_name`, `email`, `kota`, `provinsi`, `zip`, `alamat`, `grand_total`, `mode_pembayaran`, `no_telp`, `transaction_date`, `created_at`) VALUES
(14, '1.PENJ.23122019', 'Noviyan', 'Jati', 'rizky@patigeni.com', 'semarang', 'jawa tengah', 213123, 'tersafadf', '105000', 'COD', '121233', '2019-12-23', '2019-12-23 14:52:32'),
(15, '2.PENJ.23122019', 'test', 'test', 'yulita@patigeni.com', 'setdfad', 'asdfasd', 0, 'sadfsaf', '105000', 'COD', '546456', '2019-12-23', '2019-12-23 15:01:50'),
(16, '3.PENJ.23122019', 'test', 'test', 'yulita@patigeni.com', 'setdfad', 'asdfasd', 0, 'sadfsaf', '105000', 'COD', '546456', '2019-12-23', '2019-12-23 15:02:27'),
(17, '4.PENJ.23122019', 'Noviyan', 'Jati', 'jatiNov29@gmail.com', 'Surabaya', 'Jawa Timur', 2891776, 'Jl Pahlawan', '105000', 'COD', '0982712978213', '2019-12-23', '2019-12-23 15:05:09'),
(18, '5.PENJ.23122019', 'Noviyan', 'Jati', 'noviyan@gmail.com', 'Semarang', 'Jawa Tengah', 876238, 'Jl Pudak Payung no 331', '105000', 'COD', '08176288009', '2019-12-23', '2019-12-23 15:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text,
  `color` text NOT NULL,
  `size` text NOT NULL,
  `img` text NOT NULL,
  `price` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `color`, `size`, `img`, `price`) VALUES
(1, 'T-shirt Polos merah maroon', 'Bahan 100% cottons|Jahitan rapi', 'Merah Maroon', 'L', 't-shirt1.jpg', '75000'),
(2, 'T-shirt Oswego Panther', 'Brand Oswego Panther|Bahan 100% cottons', 'Orange', 'L', 't-shirt2.jpg', '75000'),
(3, 'T-shirt LittleShark Blue', 'Brand LittleShark|Bahan Fleece', 'Biru Donker', 'XL', 't-shirt3.jpg', '85000'),
(4, 'T-shirt Ice Play Black', 'Brand ICE PLAY|Bahan Cotton combed 20s', 'Hitam', 'L', 't-shirt4.jpg', '75000'),
(5, 'T-shirt Polos Cokelat Muda', 'Bahan 100% Cottons|Jahitan rapi', 'Cokelat Muda', 'L', 't-shirt5.jpg', '75000'),
(6, 'T-shirt Polos Biru Navy', 'Bahan 100% Cottons|Jahitan Rapi', 'Biru Navy', 'L', 't-shirt6.jpg', '75000'),
(7, 'T-shirt Polos Hijau Muda', 'Bahan 100% Cottons|Jahitan Rapi', 'Hijau', 'L', 't-shirt7.jpg', '75000'),
(8, 'T-shirt  Polos Yellow Black', 'Brand Vans|Bahan Fleece', 'Kuning', 'M', 't-shirt8.jpg', '65000'),
(9, 'T-shirt Long Sleeve motive', 'Bahan cotton combed 20s|Jahitan rapi', 'Hitam', 'L', 't-shirt9.jpg', '95000'),
(10, 'T-shirt Ice Berg Abstract Motive', 'Brand Ice Berg|Bahan cotton combed 20s', 'Putih', 'L', 't-shirt10.jpg', '85000'),
(11, 'T-shirt Long Sleeve Cream', 'Bahan Cotton Combed20s|Lengan Panjang', 'Putih', 'XL', 't-shirt11.jpg', '105000'),
(12, 'T-shirt Long Sleeve Sky Blue', 'Bahan Cotton Combed20s|Lengan Panjang', 'Biru Muda', 'L', 't-shirt12.jpg', '105000'),
(13, 'T-shirt Long Sleeve Merah Tua', 'Bahan Cotton combed20s|Lengan Panjang', 'Merah', 'L', 't-shirt13.jpg', '105000'),
(14, 'T-shirt Long Sleeve Orange', 'Bahan Cotton Combed20s|Lengan Panjang', 'Orange', 'L', 't-shirt14.jpg', '105000'),
(15, 'T-shirt Long Sleeve Navy Blue', 'Bahan Cotton Combed20s|Lengan Panjang', 'Biru Navy', 'XL', 't-shirt15.jpg', '105000'),
(16, 'T-shirt Long Sleeve Black', 'Bahan Cotton Combed20s|Lengan Panjang', 'Hitam', 'M', 't-shirt16.jpg', '105000'),
(17, 'T-shirt Ice Berg since 1974', 'Brand Ice Berg|Bahan Cotton', 'Biru Navy', 'M', 't-shirt17.jpg', '75000'),
(18, 'T-shirt Polos Pure white', 'Bahan 100% cotton|Jahitan rapi', 'Putih', 'M', 't-shirt18.jpg', '75000'),
(19, 'T-shirt Long Sleeve Yellow', 'Bahan Cotton Combed20s|Lengan Panjang', 'Kuning', 'L', 't-shirt19.jpg', '105000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan_header`
--
ALTER TABLE `penjualan_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `penjualan_header`
--
ALTER TABLE `penjualan_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
