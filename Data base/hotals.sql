-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 22 مارس 2023 الساعة 01:30
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20481866_hotals`
--
CREATE DATABASE IF NOT EXISTS `id20481866_hotals` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `id20481866_hotals`;

-- --------------------------------------------------------

--
-- بنية الجدول `cairo`
--

DROP TABLE IF EXISTS `cairo`;
CREATE TABLE `cairo` (
  `adres` varchar(50) NOT NULL,
  `types` varchar(30) NOT NULL,
  `names` varchar(100) NOT NULL,
  `idcards` int(60) NOT NULL,
  `tel` int(40) NOT NULL,
  `emails` varchar(90) NOT NULL,
  `stdata` date NOT NULL,
  `endata` date NOT NULL,
  `DAYS` int(20) NOT NULL,
  `MANTH` int(20) NOT NULL,
  `allsuls` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `cairosul`
--

DROP TABLE IF EXISTS `cairosul`;
CREATE TABLE `cairosul` (
  `adres` varchar(100) NOT NULL,
  `types` varchar(20) NOT NULL,
  `names` varchar(200) NOT NULL,
  `idcards` int(200) NOT NULL,
  `tel` int(30) NOT NULL,
  `emails` varchar(200) NOT NULL,
  `stdata` date NOT NULL,
  `endata` date NOT NULL,
  `DAYS` int(20) NOT NULL,
  `MANTH` int(20) NOT NULL,
  `allsuls` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `cairosul`
--

INSERT INTO `cairosul` (`adres`, `types`, `names`, `idcards`, `tel`, `emails`, `stdata`, `endata`, `DAYS`, `MANTH`, `allsuls`) VALUES
('فرع القاهرة ', 'غرفة خاصة ', 'جمال سيد احمد محمد', 20, 1002023938, ' af@yahoo.com', '2023-03-18', '2023-03-28', 10, 0, 4000);

-- --------------------------------------------------------

--
-- بنية الجدول `sharm`
--

DROP TABLE IF EXISTS `sharm`;
CREATE TABLE `sharm` (
  `adres` varchar(50) NOT NULL,
  `types` varchar(30) NOT NULL,
  `names` varchar(60) NOT NULL,
  `idcards` int(200) NOT NULL,
  `tel` int(40) NOT NULL,
  `emails` varchar(200) NOT NULL,
  `stdata` date NOT NULL,
  `endata` date NOT NULL,
  `DAYS` int(20) NOT NULL,
  `MANTH` int(20) NOT NULL,
  `allsuls` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `sharmsul`
--

DROP TABLE IF EXISTS `sharmsul`;
CREATE TABLE `sharmsul` (
  `adres` varchar(20) NOT NULL,
  `types` varchar(20) NOT NULL,
  `names` varchar(60) NOT NULL,
  `idcards` int(30) NOT NULL,
  `tel` int(30) NOT NULL,
  `emails` varchar(50) NOT NULL,
  `stdata` date NOT NULL,
  `endata` date NOT NULL,
  `DAYS` int(20) NOT NULL,
  `MANTH` int(20) NOT NULL,
  `allsuls` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sharmsul`
--

INSERT INTO `sharmsul` (`adres`, `types`, `names`, `idcards`, `tel`, `emails`, `stdata`, `endata`, `DAYS`, `MANTH`, `allsuls`) VALUES
('فرع شرم الشيخ', 'غرفة شخصية لفرد واحد', 'جمال سيد احمد ', 1002010, 1002023938, ' af50020@yahoo.com', '2023-03-12', '2023-03-24', 12, 0, 1800);

-- --------------------------------------------------------

--
-- بنية الجدول `sul`
--

DROP TABLE IF EXISTS `sul`;
CREATE TABLE `sul` (
  `type` text NOT NULL,
  `EL\1d` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sul`
--

INSERT INTO `sul` (`type`, `EL\1d`) VALUES
('غرفة شخصية لفرد واحد', 150),
('غرفة لشخصين', 300),
('غرفة عائلية ', 500),
('غرفة خاصة ', 400),
('جناح خاص', 1000);

-- --------------------------------------------------------

--
-- بنية الجدول `TotalBills`
--

DROP TABLE IF EXISTS `TotalBills`;
CREATE TABLE `TotalBills` (
  `adres` varchar(50) NOT NULL,
  `types` varchar(50) NOT NULL,
  `names` varchar(250) NOT NULL,
  `idcards` int(60) NOT NULL,
  `DAYS` int(250) NOT NULL,
  `PaymentIsRequired` int(250) NOT NULL,
  `paidUp` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `TotalBills`
--

INSERT INTO `TotalBills` (`adres`, `types`, `names`, `idcards`, `DAYS`, `PaymentIsRequired`, `paidUp`) VALUES
('فرع شرم الشيخ', 'جناح خاص', 'جمال سيد احمد محمد', 123456789, 12, 12000, 12000),
('فرع شرم الشيخ', 'غرفة لشخصين', ' احمد مجمد احمد محمد', 12, 5, 1500, 1500),
('فرع القاهرة ', 'غرفة لشخصين', 'جمال سيد احمد محمد', 1, 17, 5100, 5100),
('فرع شرم الشيخ', 'غرفة لشخصين', 'ahmed wagdy', 1, 16, 4800, 4800),
('فرع القاهرة ', 'غرفة شخصية لفرد واحد', 'جمال سيد احمد ', 2, 23, 3450, 3450),
('فرع شرم الشيخ', 'غرفة شخصية لفرد واحد', 'جمال سيد احمد محمد', 1, 12, 1800, 1800),
('فرع شرم الشيخ', 'جناح خاص', 'احمد علي السيد علي ', 12, 3, 3000, 3000),
('فرع شرم الشيخ', 'غرفة عائلية ', 'علاء محمد احمد ', 2, 6, 3000, 3000),
('فرع شرم الشيخ', 'غرفة عائلية ', 'ahmed wagdy 54', 42, 11, 5500, 5500),
('فرع شرم الشيخ', 'غرفة شخصية لفرد واحد', 'امل محمد احمد', 40, 14, 2100, 2100),
('فرع شرم الشيخ', 'غرفة لشخصين', 'صابر علي', 41, 15, 4500, 4500),
('فرع شرم الشيخ', 'جناح خاص', 'احمد خالد السيد احمد', 50, 9, 9000, 9000),
('فرع شرم الشيخ', 'غرفة عائلية ', 'امل محمد سعيد ', 51, 14, 7000, 7000),
('فرع شرم الشيخ', 'غرفة خاصة ', 'مصطفي جمال', 32, 22, 8800, 8800),
('فرع شرم الشيخ', 'غرفة شخصية لفرد واحد', 'ahmed wagdy gamals', 112, 8, 1200, 1200);

-- --------------------------------------------------------

--
-- بنية الجدول `usmanger`
--

DROP TABLE IF EXISTS `usmanger`;
CREATE TABLE `usmanger` (
  `ID` int(10) NOT NULL,
  `NAMES` varchar(50) NOT NULL,
  `EMAILS` varchar(100) NOT NULL,
  `PASSORD` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `usmanger`
--

INSERT INTO `usmanger` (`ID`, `NAMES`, `EMAILS`, `PASSORD`) VALUES
(1, 'ahmed waggdy', 'ahmed', '762012'),
(2, 'root', 'root', 'root');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cairo`
--
ALTER TABLE `cairo`
  ADD PRIMARY KEY (`idcards`);

--
-- Indexes for table `cairosul`
--
ALTER TABLE `cairosul`
  ADD PRIMARY KEY (`idcards`);

--
-- Indexes for table `sharm`
--
ALTER TABLE `sharm`
  ADD PRIMARY KEY (`idcards`);

--
-- Indexes for table `sharmsul`
--
ALTER TABLE `sharmsul`
  ADD PRIMARY KEY (`idcards`);

--
-- Indexes for table `usmanger`
--
ALTER TABLE `usmanger`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usmanger`
--
ALTER TABLE `usmanger`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table cairo
--

--
-- Metadata for table cairosul
--

--
-- Metadata for table sharm
--

--
-- Metadata for table sharmsul
--

--
-- Metadata for table sul
--

--
-- Metadata for table TotalBills
--

--
-- إرجاع أو استيراد بيانات الجدول `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'id20481866_hotals', 'TotalBills', '{\"sorted_col\":\"`TotalBills`.`adres` ASC\"}', '2023-03-14 01:06:27');

--
-- Metadata for table usmanger
--

--
-- Metadata for database id20481866_hotals
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
