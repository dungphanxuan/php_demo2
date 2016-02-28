-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2016 at 07:14 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nienluan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bacdaotao`
--

CREATE TABLE IF NOT EXISTS `bacdaotao` (
  `IDBacDaoTao` int(11) NOT NULL AUTO_INCREMENT,
  `TenBacDaoTao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDBacDaoTao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE IF NOT EXISTS `chude` (
  `IDChuDe` int(11) NOT NULL AUTO_INCREMENT,
  `TenChuDe` varchar(255) NOT NULL,
  `GhiChu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDChuDe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`IDChuDe`, `TenChuDe`, `GhiChu`) VALUES
(1, 'Test', 'test'),
(2, 'Test2', '');

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE IF NOT EXISTS `dangky` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `detai_id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `giaovien_hd` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`id`, `student_id`, `detai_id`, `teacher_id`, `created_at`, `status`, `description`, `giaovien_hd`) VALUES
(1, 3, 1, NULL, 10, 0, '', NULL),
(3, 3, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detai`
--

CREATE TABLE IF NOT EXISTS `detai` (
  `IDDeTai` int(11) NOT NULL AUTO_INCREMENT,
  `TenDeTai` varchar(255) NOT NULL,
  `ChuDeID` int(11) DEFAULT NULL,
  `SoSVThamGia` int(11) NOT NULL,
  `BanMemDoAn` varchar(255) DEFAULT NULL,
  `SourceCode` varchar(255) DEFAULT NULL,
  `Nam` int(11) DEFAULT NULL,
  `NhanXetChung` varchar(255) DEFAULT NULL,
  `HoiDongID` int(11) DEFAULT NULL,
  `GiaoVien` int(11) DEFAULT NULL,
  `ThamKhao` varchar(255) DEFAULT NULL,
  `MoiTruong` varchar(255) DEFAULT NULL,
  `MoTa` text,
  `ShortDescription` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDDeTai`),
  KEY `ChuDeID` (`ChuDeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `detai`
--

INSERT INTO `detai` (`IDDeTai`, `TenDeTai`, `ChuDeID`, `SoSVThamGia`, `BanMemDoAn`, `SourceCode`, `Nam`, `NhanXetChung`, `HoiDongID`, `GiaoVien`, `ThamKhao`, `MoiTruong`, `MoTa`, `ShortDescription`) VALUES
(1, 'Demo', 1, 5, '', '', NULL, '', NULL, NULL, '', '', NULL, NULL),
(2, 'Test1', 1, 5, '', '', NULL, '', NULL, NULL, '', '', NULL, NULL),
(3, 'test 3', 1, 6, '', '', NULL, '', NULL, NULL, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diadiemhoc`
--

CREATE TABLE IF NOT EXISTS `diadiemhoc` (
  `IDDiaDiemHoc` int(11) NOT NULL AUTO_INCREMENT,
  `TenDiaDiemHoc` varchar(64) DEFAULT NULL,
  `DiaChi` varchar(128) DEFAULT NULL,
  `SoDT` varchar(16) DEFAULT NULL,
  `NguoiQuanLy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDDiaDiemHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `donvi`
--

CREATE TABLE IF NOT EXISTS `donvi` (
  `IDDonVi` int(11) NOT NULL AUTO_INCREMENT,
  `TenDonVi` varchar(255) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `SoDT` varchar(16) DEFAULT NULL,
  `TruongDonVi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDDonVi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE IF NOT EXISTS `giangvien` (
  `IDGiangVien` int(11) NOT NULL AUTO_INCREMENT,
  `TenGiangVien` varchar(255) NOT NULL,
  `GioiTinh` int(1) DEFAULT NULL,
  `NamSinh` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `SoDT` varchar(16) DEFAULT NULL,
  `DiaChi` varchar(128) DEFAULT NULL,
  `DonViID` int(11) DEFAULT NULL,
  `KhoaID` int(11) DEFAULT NULL,
  `HocVi` varchar(128) DEFAULT NULL,
  `ChucVu` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`IDGiangVien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`IDGiangVien`, `TenGiangVien`, `GioiTinh`, `NamSinh`, `Email`, `SoDT`, `DiaChi`, `DonViID`, `KhoaID`, `HocVi`, `ChucVu`) VALUES
(4, 'Giảng Viên A', NULL, NULL, '', '', '', NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hedaotao`
--

CREATE TABLE IF NOT EXISTS `hedaotao` (
  `IDHeDaoTao` int(11) NOT NULL AUTO_INCREMENT,
  `TenHeDaoTao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDHeDaoTao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `huongdan`
--

CREATE TABLE IF NOT EXISTS `huongdan` (
  `DeTaiID` int(11) NOT NULL AUTO_INCREMENT,
  `GiangVienID` int(11) NOT NULL,
  `NhanXet` varchar(255) DEFAULT NULL,
  `DiemHuongDan` float DEFAULT NULL,
  PRIMARY KEY (`DeTaiID`),
  KEY `GiangVienID` (`GiangVienID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `huongnghiencuu`
--

CREATE TABLE IF NOT EXISTS `huongnghiencuu` (
  `IDHuongNghienCuu` int(11) NOT NULL AUTO_INCREMENT,
  `TenHuongNghienCuu` varchar(255) DEFAULT NULL,
  `GhiChu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDHuongNghienCuu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ketqua`
--

CREATE TABLE IF NOT EXISTS `ketqua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dangky_id` int(11) NOT NULL,
  `giaovien_id` int(11) DEFAULT NULL,
  `diem` float DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `giaovien_cham` int(11) DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ketqua`
--

INSERT INTO `ketqua` (`id`, `dangky_id`, `giaovien_id`, `diem`, `time`, `giaovien_cham`, `file`) VALUES
(7, 1, NULL, NULL, 1456388963, NULL, 'D:\\xampp\\htdocs\\app\\php_demo2/frontend/web/uploads/file1.css');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE IF NOT EXISTS `khoa` (
  `IDKhoa` int(11) NOT NULL AUTO_INCREMENT,
  `TenKhoa` varchar(128) NOT NULL,
  `TruongKhoa` varchar(128) NOT NULL,
  PRIMARY KEY (`IDKhoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `khoadaotao`
--

CREATE TABLE IF NOT EXISTS `khoadaotao` (
  `IDKhoaDaoTao` int(11) NOT NULL AUTO_INCREMENT,
  `GhiChu` varchar(255) DEFAULT NULL,
  `NienKhoa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDKhoaDaoTao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE IF NOT EXISTS `lop` (
  `IDLop` int(11) NOT NULL AUTO_INCREMENT,
  `TenLop` varchar(16) NOT NULL,
  `SoSinhVien` int(5) NOT NULL DEFAULT '0',
  `KhoaID` int(11) DEFAULT NULL,
  `HeDaoTaoID` int(11) DEFAULT NULL,
  `BacDaoTaoID` int(11) DEFAULT NULL,
  `DiaDiemHocID` int(11) DEFAULT NULL,
  `KhoaDaoTaoID` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDLop`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`IDLop`, `TenLop`, `SoSinhVien`, `KhoaID`, `HeDaoTaoID`, `BacDaoTaoID`, `DiaDiemHocID`, `KhoaDaoTaoID`) VALUES
(1, 'Class 1', 50, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1456307441),
('m130524_201442_init', 1456307443);

-- --------------------------------------------------------

--
-- Table structure for table `phanbien`
--

CREATE TABLE IF NOT EXISTS `phanbien` (
  `PhanBienID` int(11) NOT NULL AUTO_INCREMENT,
  `GiangVienID` int(11) DEFAULT NULL,
  `NhanXet` varchar(255) DEFAULT NULL,
  `DiemPhanBien` float DEFAULT NULL,
  PRIMARY KEY (`PhanBienID`),
  KEY `GiangVienID` (`GiangVienID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE IF NOT EXISTS `sinhvien` (
  `IDSinhVien` int(11) NOT NULL AUTO_INCREMENT,
  `TenSinhVien` varchar(255) NOT NULL,
  `GioiTinh` int(1) DEFAULT NULL,
  `NamSinh` int(11) DEFAULT NULL,
  `QueQuan` varchar(255) DEFAULT NULL,
  `HoKhauThuongTru` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `SoDT` varchar(16) DEFAULT NULL,
  `LopID` int(11) DEFAULT NULL,
  `DeTaiID` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDSinhVien`),
  KEY `LopID` (`LopID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`IDSinhVien`, `TenSinhVien`, `GioiTinh`, `NamSinh`, `QueQuan`, `HoKhauThuongTru`, `Email`, `SoDT`, `LopID`, `DeTaiID`) VALUES
(3, 'dung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thuchiennghiencuu`
--

CREATE TABLE IF NOT EXISTS `thuchiennghiencuu` (
  `IDThucHienNghienCuu` int(11) NOT NULL AUTO_INCREMENT,
  `HuongNghienCuuID` int(11) NOT NULL,
  `SoLuongCongTrinhCongBo` int(5) DEFAULT NULL,
  PRIMARY KEY (`IDThucHienNghienCuu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'dung', 'auPxwm--SL0H-yXA3yVe6imHmWur8Jw1', '$2y$13$YsX3XU08zBRB7CZBM1qOFeQk8BztNEXqqL/1F/jrQ8FIpHKt983Ui', NULL, 'test@gmail.com', 10, 1456371430, 1456371430),
(4, 'khanh', 'UF2g3RxNQS00SkH-vud563NYdZts2JJE', '$2y$13$BazqvKqKcIhbvAiL2erXSuA9FWoULxpaUxps4uFYDmkkOjn/SL6Uu', NULL, 'khanh@gmail.com', 10, 1456393933, 1456393933);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detai`
--
ALTER TABLE `detai`
  ADD CONSTRAINT `detai_ibfk_1` FOREIGN KEY (`ChuDeID`) REFERENCES `chude` (`IDChuDe`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`IDGiangVien`) REFERENCES `user` (`id`);

--
-- Constraints for table `huongdan`
--
ALTER TABLE `huongdan`
  ADD CONSTRAINT `huongdan_ibfk_1` FOREIGN KEY (`GiangVienID`) REFERENCES `giangvien` (`IDGiangVien`);

--
-- Constraints for table `phanbien`
--
ALTER TABLE `phanbien`
  ADD CONSTRAINT `phanbien_ibfk_1` FOREIGN KEY (`GiangVienID`) REFERENCES `giangvien` (`IDGiangVien`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`LopID`) REFERENCES `lop` (`IDLop`),
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`IDSinhVien`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
