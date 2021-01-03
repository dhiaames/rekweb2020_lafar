-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 29, 2020 at 05:55 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lafar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`) VALUES
(3, 'user2', '$2y$10$GfprTfhyF9N0HN8LJpmjduYWYfnkmL8Y/iVu1Y8ppNp', 'user2@mail.com'),
(4, 'user3', '$2y$10$PjyzgPeDQvdVWQAvr7cBMubinoR1U5WhjpgyQLc2WGN', 'user2@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga_menu` int(50) NOT NULL,
  `foto_menu` varchar(255) NOT NULL,
  `kategori_menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `foto_menu`, `kategori_menu`) VALUES
(1, 'Chocolate Lafa Cake', 35000, 'lafa_cake.png', 'makanan'),
(2, 'Lafa Ice Chocolate', 25000, '2.png', 'minuman'),
(3, 'Bakso Lafa', 30000, 'bakso_lafa.png', 'makanan'),
(4, 'Mie Ayam Lafa', 30000, '8.png', 'makanan'),
(5, 'Bakso Aci Lafa', 25000, 'bakso_aci.png', 'makanan'),
(6, 'Milk Shake Lafa', 20000, 'milk_shake.png', 'minuman'),
(7, 'Signature Chocolate Lafa', 28000, 'signature.png', 'minuman'),
(8, 'Milk tea', 20000, 'caca.png', 'minuman'),
(9, 'Chicken Feet Hot Lafa', 25000, 'fire_ceker.png', 'makanan'),
(22, 'Ayam Penyet Lava', 35000, 'penyet_lafa.png', ''),
(24, 'Thai Tea ala Lafa', 15000, 'thai_tea.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
