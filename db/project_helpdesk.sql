-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 07:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pwd` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_status` int(1) NOT NULL COMMENT '0=BAN, 1=Online'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_email`, `admin_pwd`, `admin_name`, `admin_status`) VALUES
(1, 'a@a.com', 'c58a03e5842fa1ad52d6781faaf0921bf039c2f0', 'Mr.Admin', 1),
(2, 'b@b.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin B', 1),
(3, 'k@k.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Mr .A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case`
--

CREATE TABLE `tbl_case` (
  `id` int(11) NOT NULL,
  `case_type` int(11) NOT NULL,
  `case_detail` text NOT NULL,
  `case_loc` int(11) NOT NULL,
  `p_status` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_img` varchar(50) NOT NULL,
  `case_status` int(1) NOT NULL DEFAULT 1,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp(),
  `tech_id` int(11) NOT NULL DEFAULT 0 COMMENT 'ไอดีช่าง',
  `tech_name` varchar(50) NOT NULL COMMENT 'ชื่อช่าง',
  `case_update` datetime DEFAULT NULL COMMENT 'ว/ด/ป ที่มีการอัพเดท',
  `case_update_log` text DEFAULT NULL COMMENT 'รายละเอียดการอัพเดทงานซ่อม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_case`
--

INSERT INTO `tbl_case` (`id`, `case_type`, `case_detail`, `case_loc`, `p_status`, `p_name`, `p_email`, `p_img`, `case_status`, `date_save`, `tech_id`, `tech_name`, `case_update`, `case_update_log`) VALUES
(12, 2, 'กดไม่ติด', 5, 1, 'กรรชัย สอนเมือง', 'kanchai@gmail.com', 'ab69bed9a85a7acdde585973ff6c4989.jpg', 1, '2022-10-08 20:31:32', 0, '', NULL, NULL),
(15, 5, 'หมึกไม่ออก', 7, 1, 'กรรชัย สอนเมือง', 'kanchai@gmail.com', 'a3227105c940e918264501e76a1c102d.jpg', 4, '2022-10-08 20:33:25', 1, 'Mr.Admin', '2022-10-09 03:45:13', 'หมึกออกปกติ'),
(16, 6, 'หักวางของไม่ได้', 15, 2, 'พชรพล กักขุนทศ', 'pacharaphonk62@nu.ac.th', 'e1435c998f0730412f6e91e160d9480c.jpg', 2, '2022-10-08 20:34:22', 1, 'Mr.Admin', '2022-10-09 03:44:51', 'กำลังแก้ไข'),
(17, 7, 'ขาหัก', 16, 2, 'พชรพล กักขุนทศ', 'pacharaphonk62@nu.ac.th', 'cfdf1269bf6b9b2a96c5cadeeb1cb8c5.jpg', 2, '2022-10-08 20:34:51', 1, 'Mr.Admin', '2022-10-09 03:44:43', 'กำลังแก้ไข'),
(18, 8, 'ฉายภาพไม่ออก', 16, 1, 'กรรชัย สอนเมือง', 'kanchai@gmail.com', 'ac254683cc0c900221adfe8c7bc74457.jpg', 2, '2022-10-08 20:36:10', 1, 'Mr.Admin', '2022-10-09 03:44:31', 'กำลังแก้ไข'),
(19, 9, 'ไฟไม่ติด', 9, 1, 'กรรชัย สอนเมือง', 'kanchai@gmail.com', 'b77f063a3b14c27f6b7eb58d4d6732a9.jpg', 3, '2022-10-08 20:36:38', 1, 'Mr.Admin', '2022-10-09 03:44:20', 'แก้ไข่แล้วเสร็จ'),
(20, 10, 'แอร์ไม่มีความเย็น', 38, 2, 'พชรพล กักขุนทศ', 'pacharaphonk62@nu.ac.th', 'b733e9c90a4495366cc458dac70ec2ab.jpg', 2, '2022-10-08 20:37:21', 1, 'Mr.Admin', '2022-10-09 03:43:52', 'กำลังแก้ไข'),
(21, 4, 'เปิดไม่ติด', 19, 2, 'พชรพล กักขุนทศ', 'pacharaphonk62@nu.ac.th', 'a5c1282eac020d0c793107fa7571e2f7.jpg', 1, '2022-10-08 20:57:13', 0, '', NULL, NULL),
(22, 4, 'เปิดไม่ได้', 17, 2, 'พชรพล กักขุนทศ', 'pacharaphonk62@nu.ac.th', '25376f10078c392d69fddde7b024634c.jpg', 1, '2022-10-08 20:57:53', 0, '', NULL, NULL),
(23, 3, 'เสียใช้ไม่ได้', 6, 1, 'กรรชัย สอนเมือง', 'kanchai@gmail.com', '1badfad373e30ca208d9141edea40000.jpg', 2, '2022-10-08 20:58:21', 3, 'Mr .A', '2022-10-10 20:54:09', 'กำลังดำแก้ไข'),
(24, 1, 'จอแตก', 15, 1, 'กรรชัย สอนเมือง', 'kanchai@gmail.com', 'bef0561bea4c729aad2098cfad165655.jpg', 2, '2022-10-08 20:58:48', 3, 'Mr .A', '2022-10-10 01:31:58', 'กำลังแก้ไข'),
(25, 3, 'ไม่ขยับ ค้าง', 14, 1, 'กรรชัย สอนเมือง', 'pakornc@nu.ac.th', '28dd0e714da2ad33f97f821f117ee360.jpg', 1, '2022-10-09 18:34:49', 0, '', NULL, NULL),
(26, 8, 'ภาพเบลอ', 11, 1, 'กรรชัย สอนเมือง', 'kanchai@gmail.com', '843e8cf485e557be051dc6c3ba6c08cb.jpg', 1, '2022-10-09 18:37:03', 0, '', NULL, NULL),
(27, 7, 'ขาหังหนึ่งข้าง', 9, 1, 'กรรชัย สอนเมือง', 'kanchai@gmail.com', 'e18601322e6ab670b29f69370aeac2ab.jpg', 1, '2022-10-09 18:38:43', 0, '', NULL, NULL),
(28, 6, 'หักใช้งานไม่ได้', 15, 1, 'กรรชัย สอนเมือง', 'kanchai@gmail.com', '275f3fc77095d2dc9867155d5f22d451.jpg', 1, '2022-10-10 13:49:36', 0, '', NULL, NULL),
(29, 1, 'จอแตก', 38, 2, 'พชรพล กักขุนทศ', 'pacharaphonk62@nu.ac.th', 'bf6e2078416d94d0b15fe47899e69cc4.jpg', 4, '2022-10-10 13:52:48', 3, 'Mr .A', '2022-10-10 21:04:56', 'เป็นลอยที่จอ เช็ดแล้วหาย'),
(30, 9, 'หลอดไฟแตก', 40, 2, 'พชรพล กักขุนทศ', 'pacharaphonk62@nu.ac.th', '2ca8c137e874ad6946b7740cefea7299.jpg', 3, '2022-10-10 16:57:00', 3, 'Mr .A', '2022-10-10 23:57:42', 'แก้ไขแล้ว'),
(31, 10, 'แอร์ไม่เย็น', 3, 2, 'พชรพล กักขุนทศ', 'pacharaphonk62@nu.ac.th', '487d4eff5a64f1bc546b4390061db3fa.jpg', 3, '2022-10-25 09:47:17', 3, 'Mr .A', '2022-10-27 00:20:30', 'ดำเนินการเปลี่ยนน้ำยาแอร์เรียบร้อย');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case_loc`
--

CREATE TABLE `tbl_case_loc` (
  `loc_id` int(11) NOT NULL,
  `loc_name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_case_loc`
--

INSERT INTO `tbl_case_loc` (`loc_id`, `loc_name`) VALUES
(1, 'ห้องภาควิชาคณิตศาสตร์'),
(2, 'ห้องภาควิชาคอมพิวเตอร์ๆ'),
(3, 'SC2-106'),
(4, 'SC2-109'),
(5, 'ห้องติดต่อเจ้าหน้าที่/ศึกษาค้นคว้าด้วยตนเองภาควิชาคอมพิวเตอร์ๆ'),
(6, 'SC2-112'),
(7, 'ห้องติดต่อเจ้าหน้าที่/ศึกษาค้นคว้าด้วยตนเองภาควิชาคณิตศาสตร์'),
(8, 'SC2-201'),
(9, 'SC2-206'),
(10, 'SC2-207'),
(11, 'SC2-208'),
(12, 'SC2-209'),
(13, 'SC2-210'),
(14, 'SC2-211'),
(15, 'SC2-212'),
(16, 'SC2-213'),
(17, 'SC2-214'),
(18, 'SC2-215'),
(19, 'SC2-301'),
(20, 'SC2-306'),
(21, 'SC2-307'),
(22, 'SC2-308'),
(23, 'SC2-309'),
(24, 'SC2-310'),
(25, 'SC2-311'),
(26, 'SC2-312'),
(27, 'SC2-313'),
(28, 'SC2-313-1'),
(29, 'SC2-314'),
(30, 'SC2-317'),
(31, 'SC2-401'),
(32, 'SC2-406'),
(33, 'SC2-407'),
(34, 'SC2-408'),
(35, 'SC2-409'),
(36, 'SC2-410'),
(37, 'SC2-411'),
(38, 'SC2-412'),
(39, 'SC2-413'),
(40, 'SC2-414'),
(41, 'SC2-415'),
(42, 'SC2-417'),
(43, 'SC2-501'),
(44, 'SC2-506'),
(45, 'SC2-507'),
(46, 'SC2-509'),
(47, 'SC2-512'),
(48, 'SC2-514'),
(49, 'SC2-515'),
(50, 'SC2-517'),
(51, 'SC2-519'),
(52, 'SC2-521'),
(53, 'SC2-524'),
(54, 'SC2-526');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case_type`
--

CREATE TABLE `tbl_case_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_case_type`
--

INSERT INTO `tbl_case_type` (`type_id`, `type_name`) VALUES
(1, 'จอภาพ'),
(2, 'คีย์บอร์ด'),
(3, 'เมาส์'),
(4, 'เครื่องคอมพิวเตอร์'),
(5, 'เครื่องปริ้น'),
(6, 'โต๊ะ'),
(7, 'เก้าอี้'),
(8, 'โปรเจคเตอร์'),
(9, 'หลอดไฟ'),
(10, 'เครื่องปรับอากาศ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_name_status`
--

CREATE TABLE `tbl_name_status` (
  `name_id` int(11) NOT NULL,
  `name_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_name_status`
--

INSERT INTO `tbl_name_status` (`name_id`, `name_status`) VALUES
(1, 'อาจารย์'),
(2, 'นิสิต');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_type` (`case_type`),
  ADD KEY `p_status` (`p_status`),
  ADD KEY `case_loc` (`case_loc`);

--
-- Indexes for table `tbl_case_loc`
--
ALTER TABLE `tbl_case_loc`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `tbl_case_type`
--
ALTER TABLE `tbl_case_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_name_status`
--
ALTER TABLE `tbl_name_status`
  ADD PRIMARY KEY (`name_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_case`
--
ALTER TABLE `tbl_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_case_loc`
--
ALTER TABLE `tbl_case_loc`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_case_type`
--
ALTER TABLE `tbl_case_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_name_status`
--
ALTER TABLE `tbl_name_status`
  MODIFY `name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD CONSTRAINT `tbl_case_ibfk_1` FOREIGN KEY (`case_type`) REFERENCES `tbl_case_type` (`type_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `tbl_case_ibfk_2` FOREIGN KEY (`p_status`) REFERENCES `tbl_name_status` (`name_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `tbl_case_ibfk_3` FOREIGN KEY (`case_loc`) REFERENCES `tbl_case_loc` (`loc_id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
