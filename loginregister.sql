-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 05:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `tag` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `content`, `tag`, `path`) VALUES
(1, 'aaa', 'eee', 1, 'public/uploads/ads/1668092708_2b3834f660aa0a4bde22.jpg'),
(2, 'bbb', 'bbbbb', 1, 'public/uploads/ads/1668093251_29f6ecd678336572cb7f.jpg'),
(3, 'ccc', 'ccccc', 1, 'public/uploads/ads/1668093263_79ca0af2b45e53db91e5.jpg'),
(4, 'ddd', 'ddddd', 1, 'public/uploads/ads/1668093275_a7c75c7de0acbd0c5c01.jpg'),
(5, 'eee', 'eeeee', 1, 'public/uploads/ads/1668093288_9009f56e4a98304014b0.jpg'),
(6, 'fff', 'ffffff', 1, 'public/uploads/ads/1668093297_12525cdc75dc776ea0f2.jpg'),
(7, 'a', 'aaa', 2, 'public/uploads/ads/1668170177_2d8a22973afc9308ac20.jpg'),
(8, 'b', 'bbb', 2, 'public/uploads/ads/1668170190_85c91f85c53632334553.jpg'),
(9, 'c', 'ccc', 2, 'public/uploads/ads/1668170201_f0cff5c2ae24b5537ae4.jpg'),
(10, 'd', 'ddd', 2, 'public/uploads/ads/1668170223_13192af5f3ef235041ce.jpg'),
(11, 'e', 'eee', 2, 'public/uploads/ads/1668170233_a5858a5d5e89d0d75268.jpg'),
(12, 'f', 'fff', 2, 'public/uploads/ads/1668170249_00ca27b3d5f1ab834a66.jpg'),
(13, '1', '111', 3, 'public/uploads/ads/1668176257_cf2d99a2b195c91f5232.jpg'),
(14, '2', '2', 3, 'public/uploads/ads/1668176265_3860572afb843b5f541b.jpg'),
(15, '3', '333', 3, 'public/uploads/ads/1668176275_fbe80a6a7aebbfc81c80.jpg'),
(16, '4', '4', 3, 'public/uploads/ads/1668176283_b4198a5dc88a3630483d.jpg'),
(17, '5', '5', 3, 'public/uploads/ads/1668176292_dede409198e2d768220f.jpg'),
(18, '6', '6', 3, 'public/uploads/ads/1668176302_e4f4cb0e71f0158510c1.jpg'),
(19, 'a', 'aaa', 4, 'public/uploads/ads/1668177952_3501bf3a894a2dc5030b.jpg'),
(20, 'b', 'bbb', 4, 'public/uploads/ads/1668177960_d100708e5dcb0813d715.jpg'),
(21, 'c', 'ccc', 4, 'public/uploads/ads/1668177969_ea62ba2758152ca79544.jpg'),
(22, 'd', 'ddd', 4, 'public/uploads/ads/1668177978_cec32c57c9800553b464.jpg'),
(23, 'e', 'ee', 4, 'public/uploads/ads/1668177989_01aa9faf7d6252d61d5e.jpg'),
(24, 'f', 'fff', 4, 'public/uploads/ads/1668178001_eb314b6fbeffd2b94daa.jpg'),
(25, 'g', 'ggg', 4, 'public/uploads/ads/1668178010_449aebd3ba006e778a78.jpg'),
(26, '1', 'aaa', 5, 'public/uploads/ads/1668180577_b7c3b8fcb501463d2a36.jpg'),
(27, '3', '2223', 5, 'public/uploads/ads/1668180590_2471e5df0fca03f46f25.jpg'),
(28, '4', '44', 5, 'public/uploads/ads/1668180599_50ed8073c94331d14a60.jpg'),
(29, '5', '', 5, 'public/uploads/ads/1668180607_fc9ebc3b587b967b4ccc.jpg'),
(30, 'How The Cloud Can Improve Business', 'x', 5, 'public/uploads/ads/1668181181_7a493af800bcaf92b6d9.jpg'),
(31, 'g', 'ggg', 5, 'public/uploads/ads/1668203038_ecb5f1b53187d1177f0b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `tag` int(11) NOT NULL,
  `poster` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `vote` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `tag`, `poster`, `date`, `img_name`, `img_path`, `vote`, `created_at`, `updated_at`) VALUES
(6, 'Twas The Night Before The Christmas Party', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1, 'By dummy', '2022-11-02', '1668214650_5c6f23f2b15e9f2bb199.jpg', 'public/uploads/blogs/1668214650_5c6f23f2b15e9f2bb199.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(7, 'Twas The Night Before The Christmas Party', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 1, 'By dummy', '2022-11-08', '1668341946_cd3731a5083190fdf55d.jpg', 'public/uploads/blogs/1668341946_cd3731a5083190fdf55d.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(8, 'Twas The Night Before The Christmas Party', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 1, 'By dummy', '2022-11-01', '1668078982_e04ab2599c64b690236a.jpg', 'public/uploads/blogs/1668078982_e04ab2599c64b690236a.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(9, 'Twas The Night Before The Christmas Party', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1, 'By dummy', '2022-11-08', '1668341958_9296fa215fb2765a3c4d.jpg', 'public/uploads/blogs/1668341958_9296fa215fb2765a3c4d.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(10, 'Twas The Night Before The Christmas Party', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 1, 'By dummy', '2022-10-31', '1668079094_fce15372d1a1a880b43e.jpg', 'public/uploads/blogs/1668079094_fce15372d1a1a880b43e.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(11, 'Twas The Night Before The Christmas Party', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 1, 'By dummy', '2022-11-09', '1668079129_98a13fca0d788c8c836f.jpg', 'public/uploads/blogs/1668079129_98a13fca0d788c8c836f.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(12, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1, 'dummy', '2022-11-02', '1668084354_7a700bc5e63602f94ee4.jpg', 'public/uploads/blogs/1668084354_7a700bc5e63602f94ee4.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(13, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, 'Dummy', '2022-11-10', '1668084390_40b04910150439b1304e.jpg', 'public/uploads/blogs/1668084390_40b04910150439b1304e.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(14, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, 'Dummy', '2022-11-10', '1668084414_6da1319b0868ac9f2751.jpg', 'public/uploads/blogs/1668084414_6da1319b0868ac9f2751.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(15, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, 'Dummy', '2022-11-10', '1668084443_c681050181f363042212.jpg', 'public/uploads/blogs/1668084443_c681050181f363042212.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(16, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 2, 'Dummy', '2022-11-15', '1668169244_54341de64972d54f98b8.jpg', 'public/uploads/blogs/1668169244_54341de64972d54f98b8.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(17, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 2, 'Dummy', '2022-11-15', '1668169355_7b62d0f501efcbf65bae.jpg', 'public/uploads/blogs/1668169355_7b62d0f501efcbf65bae.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(18, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 3, 'Dummy', '2022-11-02', '1668169777_e983d09dd6d476c9c90a.jpg', 'public/uploads/blogs/1668169777_e983d09dd6d476c9c90a.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(19, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 3, 'Dummy', '2022-11-09', '1668169819_de005ff39b574a48799d.jpg', 'public/uploads/blogs/1668169819_de005ff39b574a48799d.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(20, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 3, 'Dummy', '2022-11-01', '1668169873_3895f236bfcbf9bd8a07.jpg', 'public/uploads/blogs/1668169873_3895f236bfcbf9bd8a07.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(21, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 3, 'Dummy', '2022-11-09', '1668169964_41095d633cfe03aa3a5b.jpg', 'public/uploads/blogs/1668169964_41095d633cfe03aa3a5b.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(22, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 3, 'Dummy', '2022-11-01', '1668170004_b69590c5f9cc3227e14a.jpg', 'public/uploads/blogs/1668170004_b69590c5f9cc3227e14a.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(25, 'How The Cloud Can Improve Photography', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 4, 'Dummy', '2022-11-08', '1668175320_ffcbd815f9bab6286968.jpg', 'public/uploads/blogs/1668175320_ffcbd815f9bab6286968.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(26, 'How The Cloud Can Improve Photography', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 4, 'Dummy', '2022-11-08', '1668175345_aaac8f711abc0068a36d.jpg', 'public/uploads/blogs/1668175345_aaac8f711abc0068a36d.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(27, 'How The Cloud Can Improve Photography', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 4, 'Dummy', '2022-11-02', '1668175369_a34d0e9e3527362c29fb.jpg', 'public/uploads/blogs/1668175369_a34d0e9e3527362c29fb.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(28, 'How The Cloud Can Improve Photography', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, 'Dummy', '2022-11-06', '1668175726_66f3ac315d09415b0915.jpg', 'public/uploads/blogs/1668175726_66f3ac315d09415b0915.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(29, 'How The Cloud Can Improve Photography', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, 'Dummy', '2022-11-16', '1668175747_ead4f87e96eab27b2b28.jpg', 'public/uploads/blogs/1668175747_ead4f87e96eab27b2b28.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(30, 'How The Cloud Can Improve Photography', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, 'Dummy', '2022-11-01', '1668175767_6c49dcbbf5114cb7ad7b.jpg', 'public/uploads/blogs/1668175767_6c49dcbbf5114cb7ad7b.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(31, 'How The Cloud Can Improve Photography', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, 'Dummy', '2022-11-03', '1668175785_f2cc8f2f7c942eec7fe3.jpg', 'public/uploads/blogs/1668175785_f2cc8f2f7c942eec7fe3.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(33, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 5, 'Dummy', '2022-11-02', '1668177748_4b1c4a530166ba88223c.jpg', 'public/uploads/blogs/1668177748_4b1c4a530166ba88223c.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(34, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 5, 'Dummy', '2022-11-09', '1668177763_e7a692f093af5afbd836.jpg', 'public/uploads/blogs/1668177763_e7a692f093af5afbd836.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(35, 'Interpretation of exemption notification under Customs Act', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 5, 'Dummy', '2022-11-15', '1668177801_0f383064ccce17f55601.jpg', 'public/uploads/blogs/1668177801_0f383064ccce17f55601.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(36, 'Interpretation of exemption notification under Customs Act', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 5, 'Dummy', '2022-11-09', '1668177821_70894f6beef818f9982a.jpg', 'public/uploads/blogs/1668177821_70894f6beef818f9982a.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(37, 'Interpretation of exemption notification under Customs Act', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 5, 'Dummy', '2022-11-16', '1668177843_7d199f68ea9c6998f87b.jpg', 'public/uploads/blogs/1668177843_7d199f68ea9c6998f87b.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(38, 'Interpretation of exemption notification under Customs Act', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 4, 'Dummy', '2022-11-08', '1668177883_24d002647f255b225465.jpg', 'public/uploads/blogs/1668177883_24d002647f255b225465.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(39, 'Interpretation of exemption notification under Customs Act', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 4, 'Dummy', '2022-11-17', '1668177902_d975f0508779c36632e9.jpg', 'public/uploads/blogs/1668177902_d975f0508779c36632e9.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(40, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 4, 'dummy', '2022-11-09', '1668177931_faf738146b4e0658037d.jpg', 'public/uploads/blogs/1668177931_faf738146b4e0658037d.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(41, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 4, 'Dummy', '2022-11-09', '1668179116_e8418a87ccc4a7db5e90.jpg', 'public/uploads/blogs/1668179116_e8418a87ccc4a7db5e90.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(42, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 5, 'Dummy', '2022-11-11', '1668180464_438e8cc290a3598b16b6.jpg', 'public/uploads/blogs/1668180464_438e8cc290a3598b16b6.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(43, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 5, 'Dummy', '2022-11-11', '1668180487_d0c3ea4b31534fa24129.jpg', 'public/uploads/blogs/1668180487_d0c3ea4b31534fa24129.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(44, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 5, 'Dummy', '2022-11-11', '1668180514_5f25675467b9ed69dc87.jpg', 'public/uploads/blogs/1668180514_5f25675467b9ed69dc87.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(45, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 2, 'Dummy', '2022-11-11', '1668180536_580a828169d6aab43b31.jpg', 'public/uploads/blogs/1668180536_580a828169d6aab43b31.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(46, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley ', 2, 'Dummy', '2022-11-11', '1668180555_432e30f4b1a25a410c1d.jpg', 'public/uploads/blogs/1668180555_432e30f4b1a25a410c1d.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(48, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 1, 'Dummy', '2022-11-02', '1668203525_dce625357728c7941fd7.jpg', 'public/uploads/blogs/1668203525_dce625357728c7941fd7.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57'),
(49, 'How The Cloud Can Improve Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .', 1, 'Dummy', '2022-11-09', '1668203547_b2e3e603f56d7084bacd.jpg', 'public/uploads/blogs/1668203547_b2e3e603f56d7084bacd.jpg', 0, '2022-11-13 07:57:28', '2022-11-13 07:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `_key` varchar(50) NOT NULL,
  `_value` varchar(255) NOT NULL,
  `_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `_key`, `_value`, `_info`) VALUES
(1, 'logo', 'public/uploads/company/logo.jpg', ''),
(2, 'name', 'Our Future', ''),
(3, 'description', 'We\'re running this company to serve people who need some help ...We\'re running this company to serve people who need some help ...We\'re running this company to serve people who need some help ...We\'re running this company to serve people who need some hel', '');

-- --------------------------------------------------------

--
-- Table structure for table `imgs`
--

CREATE TABLE `imgs` (
  `id` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tag` int(11) NOT NULL,
  `date` date NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `page` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `tag`, `date`, `img_name`, `img_path`, `page`) VALUES
(3, 'Healthy, Happy Life2', 1, '2022-11-13', '1668341466_73351326ec8d2cf16004.jpg', 'public/uploads/slides/1668341466_73351326ec8d2cf16004.jpg', ''),
(4, 'Healthy, Happy Life3', 1, '2022-11-24', '1668341475_b93f0725696f5c1d09f0.jpg', 'public/uploads/slides/1668341475_b93f0725696f5c1d09f0.jpg', ''),
(7, 'Orange River', 1, '2022-10-31', '1668341483_0b8cce66c8ac11941dde.jpg', 'public/uploads/slides/1668341483_0b8cce66c8ac11941dde.jpg', ''),
(9, 'Rainforest', 2, '2022-11-01', 'Photographer1.jpg', 'public/uploads/slides/Photographer1.jpg', ''),
(10, 'Children', 2, '2022-11-03', '1668168313_ceb9963a839a40c9c616.jpg', 'public/uploads/slides/1668168313_ceb9963a839a40c9c616.jpg', ''),
(12, 'Blue River', 2, '2022-10-30', '1668168325_84e8f6b2b4cab637f745.jpg', 'public/uploads/slides/1668168325_84e8f6b2b4cab637f745.jpg', ''),
(13, 'Healthy, Happy Life', 3, '2022-10-31', '1668214568_33604e69b63045f897b2.jpg', 'public/uploads/slides/1668214568_33604e69b63045f897b2.jpg', ''),
(14, 'Created Today', 3, '2022-11-15', '1668059846_2366192d58af53925fd3.jpg', 'public/uploads/slides/1668059846_2366192d58af53925fd3.jpg', ''),
(15, 'Created Today2', 3, '2022-11-08', '1668059862_95622174f1a883179b80.jpg', 'public/uploads/slides/1668059862_95622174f1a883179b80.jpg', ''),
(17, 'Yesterday Morning', 4, '2022-10-31', '1668061802_a855627889f9864e36da.jpg', 'public/uploads/slides/1668061802_a855627889f9864e36da.jpg', ''),
(18, 'Today Morning', 4, '2022-11-02', '1668061829_bb4f35d914ca8ce63d36.jpg', 'public/uploads/slides/1668061829_bb4f35d914ca8ce63d36.jpg', ''),
(21, 'Tomorrow Morning', 4, '2022-11-10', '1668180392_23f7e821c21c0f300db0.jpg', 'public/uploads/slides/1668180392_23f7e821c21c0f300db0.jpg', ''),
(22, 'Tomorrow Morning2', 5, '2022-11-10', '1668180407_2685abbb1eae9168d25d.jpg', 'public/uploads/slides/1668180407_2685abbb1eae9168d25d.jpg', ''),
(23, 'Tomorrow Morning3', 5, '2022-11-12', '1668180422_fbb88ec9772af8b9e20b.jpg', 'public/uploads/slides/1668180422_fbb88ec9772af8b9e20b.jpg', ''),
(24, 'Tomorrow Morning4', 4, '2022-11-10', '1668319153_70d61a002599399ff9a5.jpg', 'public/uploads/slides/1668319153_70d61a002599399ff9a5.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(50) NOT NULL,
  `tag_desc` longtext NOT NULL,
  `tag_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `tag_desc`, `tag_img`) VALUES
(1, 'Food', '', 'public/uploads/tags/1668338623_6068d07bd3c638b77c57.jpg'),
(2, 'Travelling', '', 'public/uploads/tags/1668338621_a7986026de97f810f167.jpg'),
(3, 'Photographer', '', 'public/uploads/tags/1668338619_b21f7014efb636af59a0.jpg'),
(4, 'Legal', '', 'public/uploads/tags/1668338616_c274850b5c9abd4c5715.jpg'),
(5, 'Personal', '', 'public/uploads/tags/1668338613_24a8be36ffa48aff76e4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `birthday`, `role`, `email`, `avatar`, `password`) VALUES
(20, 'John Smith', NULL, 1, 'john@doe.com', 'assets/images/avatar.png', 'c08ac56ae1145566f2ce54cbbea35fa3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imgs`
--
ALTER TABLE `imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
