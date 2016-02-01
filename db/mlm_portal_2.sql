-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2016 at 07:07 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mlm_portal`
--
CREATE DATABASE IF NOT EXISTS `mlm_portal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mlm_portal`;

-- --------------------------------------------------------

--
-- Table structure for table `mst_category`
--

CREATE TABLE IF NOT EXISTS `mst_category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_category`
--

INSERT INTO `mst_category` (`id`, `category`) VALUES
(1, 'faq'),
(2, 'event'),
(3, 'info'),
(4, 'promo');

-- --------------------------------------------------------

--
-- Table structure for table `mst_news`
--

CREATE TABLE IF NOT EXISTS `mst_news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_products`
--

CREATE TABLE IF NOT EXISTS `mst_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE IF NOT EXISTS `tbl_anggota` (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` varchar(20) DEFAULT NULL,
  `id_sponsor` varchar(20) DEFAULT NULL,
  `id_upline` varchar(20) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `plan` varchar(2) DEFAULT NULL,
  `level` int(2) DEFAULT '1',
  `nilai` decimal(22,2) DEFAULT '0.00',
  `nama_ibu` varchar(50) DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `bank_an` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `posisi` varchar(10) DEFAULT NULL,
  `jml_downline` int(2) DEFAULT '0',
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`no_urut`, `id_anggota`, `id_sponsor`, `id_upline`, `no_hp`, `nama`, `plan`, `level`, `nilai`, `nama_ibu`, `bank`, `no_rek`, `bank_an`, `kota`, `password`, `status`, `posisi`, `jml_downline`, `tanggal`, `jam`, `photo`) VALUES
(1, 'MMS20141', 'MMS20140', 'MMS20140', '+6281319386456', 'KENNEDI MANALU-1', 'A', 1, '100000.00', 'Tiolina BR Tanggang', 'MANDIRI', '900-00-1499823-2', 'Kennedi Manalu-1', 'Jakarta Selatan', '21232f297a57a5a743894a0e4a801fc3', 'AKTIF', 'TENGAH', 0, '2014-10-11', '15:48:28', 'noimage_m.png'),
(4, 'MMS20142', 'MMS20141', 'MMS20141', '+6281319386456', 'KENNEDI MANALU-2', 'A', 1, '100000.00', 'Tiolina BR Tanggang', 'MANDIRI', '900-00-1499823-2', 'Kennedi Manalu-2', 'Jakarta Selatan', 'b5974ed574488db1eac39c140591303e', 'AKTIF', 'TENGAH', 2, '2014-10-16', '03:35:24', 'noimage_m.png'),
(5, 'MMS20143', 'MMS20141', 'MMS20141', '+6281319386456', 'KENNEDI MANALU-3', 'A', 1, '100000.00', 'Tiolina BR Tanggang', 'MANDIRI', '900-00-1499823-2', 'Kennedi Manalu-3', 'Jakarta Selatan', 'b5974ed574488db1eac39c140591303e', 'AKTIF', 'TENGAH', 1, '2014-10-16', '03:38:57', 'noimage_m.png'),
(6, 'MMS20144', 'MMS20141', 'MMS20141', '+6281319386456', 'KENNEDI MANALU-4', 'A', 1, '100000.00', 'Tiolina BR Tanggang', 'MANDIRI', '900-00-1499823-2', 'Kennedi Manalu-4', 'Jakarta Selatan', 'b5974ed574488db1eac39c140591303e', 'AKTIF', 'TENGAH', 1, '2014-10-16', '03:41:15', 'noimage_m.png'),
(8, 'MMS20140', '0', '0', '0', 'SERVER MMS', 'A', 1, '0.00', NULL, NULL, NULL, NULL, 'Bekasi', NULL, 'AKTIF', NULL, 0, '2014-10-11', '15:48:28', NULL),
(9, 'MMS20149', 'MMS20142', 'MMS20142', '+6281398823085', 'ISLAHUDIN SYAM', 'A', 1, '100000.00', 'SITI SAUDAH', 'MANDIRI', '1660001180538', '', 'JAKARTA', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'KIRI', 0, '2014-10-17', '13:15:34', NULL),
(17, 'MMS201417', 'MMS201414', 'MMS201414', '+6285211609694', 'JUMANTORO', 'A', 1, '100000.00', 'TUNIS', 'MANDIRI', '1030006144196', 'JUMANTORO', 'BOGOR', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'KIRI', 0, '2014-10-21', '15:19:05', NULL),
(10, 'MMS201410', 'MMS20143', 'MMS20143', '+6285213112021', 'GREEN PAKPAHAN', 'A', 1, '100000.00', 'SORTA SIREGAR', 'MANDIRI', '1670001164614', 'GREEN^PAKPAHAN', 'BEKASI', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'KIRI', 1, '2014-10-17', '19:49:05', NULL),
(15, 'MMS201415', 'MMS20143', 'MMS20143', '+6281342578853', 'TOGAR PAKPAHAN', 'A', 1, '100000.00', 'JOMINA PAKDEDE', 'BRI', '708301004369538', 'TOGAR PAKPAHAN', 'BEKASI', NULL, 'AKTIF', NULL, 2, '2014-10-19', '15:48:30', NULL),
(11, 'MMS201411', 'MMS20144', 'MMS20144', '+6281317934855', 'SARDI SIANTURI', 'A', 1, '100000.00', 'TIORLAN RAJA GUKGUK', 'MANDIRI', '1560000248007', 'SARDI^SIANTURI', 'BEKASI', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'KIRI', 1, '2014-10-17', '20:56:55', NULL),
(12, 'MMS201412', 'MMS20142', 'MMS20142', '+6281388074298', 'RAJA WERMAN  MANALU', 'A', 1, '100000.00', 'ERMIAN SITORUS', 'MANDIRI', '1670001166791', 'RAJA^WERMAN^^MANALU', 'BEKASI', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'TENGAH', 1, '2014-10-19', '19:40:14', NULL),
(13, 'MMS201413', 'MMS20143', 'MMS20143', '+6281319793946', 'DRS BANTU MANIK', 'A', 1, '100000.00', 'MARHHUALA BR. MANALU', 'MANDIRI', '006-0007743549', 'BANTU MANIK', 'JAKARTA TIMUR', NULL, 'AKTIF', NULL, 0, '2014-10-19', '20:05:00', NULL),
(14, 'MMS201414', 'MMS20142', 'MMS20142', '+6287883455697', 'KENNEDI MANALU-5', 'A', 1, '100000.00', 'Tiolina BR Tanggang', 'MANDIRI', '900-00-1499823-2', 'KENNEDI MANALU', 'BEKASI', 'b5974ed574488db1eac39c140591303e', 'AKTIF', NULL, 3, '2014-10-19', '20:05:10', NULL),
(16, 'MMS201416', 'MMS201412', 'MMS201412', '+628561174700', 'HARI SAPUTRA', 'A', 1, '100000.00', 'JEJEH', 'MANDIRI', '1190006326985', 'HARI^SAPUTRA', 'JAKARTA', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'KIRI', 0, '2014-10-19', '20:44:32', NULL),
(18, 'MMS201418', 'MMS201414', 'MMS201414', '+6281253716599', 'SUMIASIH', 'A', 1, '100000.00', 'RUKIEM', 'MANDIRI', '1480007757779', 'SUMIASIH', 'SAMARINDA', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'TENGAH', 0, '2014-10-21', '19:18:56', NULL),
(19, 'MMS201419', 'MMS201414', 'MMS201414', '+6281319063407', 'DITTAR MANALU', 'A', 1, '100000.00', 'TIOLINA BR SITANGGANG', 'BRI', '0993053444535', 'DITTAR^MANALU', 'BOGOR', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'KANAN', 0, '2014-10-21', '21:27:36', NULL),
(20, 'MMS201420', 'MMS201411', 'MMS201411', '+6281295455805', 'MARTIN SIANTURI', 'A', 1, '100000.00', 'TIORLAN ARITONANG', 'BCA', '5790253312', 'MARTIN^SIANTURI', 'BEKASI', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'KIRI', 0, '2014-10-22', '14:19:28', NULL),
(21, 'MMS201421', 'MMS201415', 'MMS201415', '+628567739271', 'TOMY. S', 'A', 1, '100000.00', 'R. SITUMEANG', 'BRI', '479401013042531', 'TOMY.^S', 'BEKASI', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'KIRI', 0, '2014-10-23', '09:41:27', NULL),
(22, 'MMS201422', 'MMS201415', 'MMS201415', '+6287887031267', 'SEKAR KURNIASIH', 'A', 1, '100000.00', 'SITI KOYIMAH', 'BTN', '0023401500031273', 'SEKAR^KURNIASIH', 'BEKASI', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'TENGAH', 0, '2014-10-23', '17:44:55', NULL),
(23, 'MMS201423', '201410', 'MMS201410', '+6281219980475', 'PASKA PAKPAHAN', 'A', 1, '100000.00', 'S SIREGAR', 'MANDIRI', '1190005778517', 'PASKA^PAKPAHAN', '', '827ccb0eea8a706c4c34a16891f84e7b', 'AKTIF', 'KIRI', 0, '2014-10-23', '21:45:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `active`, `level`) VALUES
('', 'israj', 'MQ==', 'israj.haliri@gmail.com', 1, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
