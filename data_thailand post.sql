-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 10:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_paisanethai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_1`
--

CREATE TABLE `data_1` (
  `ID` int(100) NOT NULL,
  `ชื่อผู้ส่ง` varchar(100) NOT NULL,
  `นามสกุลผู้ส่ง` varchar(100) NOT NULL,
  `เบอร์โทรผู้ส่ง` int(10) NOT NULL,
  `รายระเอียดสินค้า` varchar(255) NOT NULL,
  `วันที่ส่ง` date NOT NULL,
  `ชื่อผู้รับ` varchar(100) NOT NULL,
  `นามสกุลผู้รับ` varchar(100) NOT NULL,
  `เบอร์โทรผู้รับ` int(10) NOT NULL,
  `จังหวัด` varchar(50) NOT NULL,
  `อำเภอ` varchar(50) NOT NULL,
  `ตำบล` varchar(50) NOT NULL,
  `บ้านเลขที่` text NOT NULL,
  `รหัสไปรษณีย์` int(5) NOT NULL,
  `รายระเอียดที่อยู่` varchar(255) NOT NULL,
  `วันที่สั่ง` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `data_1`
--

INSERT INTO `data_1` (`ID`, `ชื่อผู้ส่ง`, `นามสกุลผู้ส่ง`, `เบอร์โทรผู้ส่ง`, `รายระเอียดสินค้า`, `วันที่ส่ง`, `ชื่อผู้รับ`, `นามสกุลผู้รับ`, `เบอร์โทรผู้รับ`, `จังหวัด`, `อำเภอ`, `ตำบล`, `บ้านเลขที่`, `รหัสไปรษณีย์`, `รายระเอียดที่อยู่`, `วันที่สั่ง`) VALUES
(7, 'michel sirirattanakunpiwat', '13', 2147483647, 'midle sirirattanakunpiwat', '2024-10-31', 'Beem', '14', 0, 'bangkok', 'เขตพระนคร', 'แขวงบางรัก', '226', 17004, 'mairuyunai', '2024-11-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_1`
--
ALTER TABLE `data_1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_1`
--
ALTER TABLE `data_1`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION *