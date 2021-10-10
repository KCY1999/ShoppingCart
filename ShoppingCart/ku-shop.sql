-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 09 月 24 日 07:30
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ku-shop`
--
CREATE DATABASE IF NOT EXISTS `ku-shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `ku-shop`;

-- --------------------------------------------------------

--
-- 資料表結構 `memberdata`
--

CREATE TABLE `memberdata` (
  `ID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sex` enum('男','女') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `memberdata`
--

INSERT INTO `memberdata` (`ID`, `Password`, `Name`, `Sex`, `Birthday`, `Email`, `Phone`, `Address`) VALUES
('10733216', 'abc12345', 'bbbbbb', '男', '2019-08-28', '111@11122', '0911111112', 'sbbbbb'),
('guguandy', 'abc12345', 'hfghfhgg', '女', '2019-08-28', '111@111', '0911111111', 'gfhfhfh'),
('10733215', 'abc123456', 'fuck', '男', '2019-08-28', '111@111', '0911111111', 'nnnnnnn'),
('?@', 'bbb', 'fghh', '男', '2019-08-28', 'hghgfgh@gfgrdgd', '0966565656', 'gfd');

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE `order` (
  `ID` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserve` int(50) NOT NULL,
  `total` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `order`
--

INSERT INTO `order` (`ID`, `type`, `code`, `name`, `price`, `gender`, `size`, `color`, `reserve`, `total`, `pay`, `img`, `status`) VALUES
('10733216', '休閒', 16, 'NIKE白色休閒鞋(男)', 3500, '男', '11', '白', 2, '7000', '7000', 'X白M.jpg', '已出貨'),
('10733216', '休閒', 20, 'NIKE黑色休閒鞋(男)', 4300, '男', '10', '黑', 3, '12900', '12900', 'X黑M.jpg', '已出貨'),
('10733216', '籃球', 25, 'NIKE紅色籃球鞋(女)', 4100, '女', '7', '紅', 2, '8200', '21100', 'B紅F.jpg', '已出貨'),
('10733216', '休閒', 21, 'NIKE黑色休閒鞋(男)', 4300, '男', '11', '黑', 3, '12900', '12900', 'X黑M.jpg', '未出貨'),
('10733216', '休閒', 16, 'NIKE白色休閒鞋(男)', 3500, '男', '11', '白', 2, '7000', '19900', 'X白M.jpg', '未出貨');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `type` enum('休閒','籃球','慢跑') COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `gender` enum('男','女') COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` enum('黑','白','灰','棕','紅','藍','綠','粉') COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserve` int(10) NOT NULL,
  `mode` enum('上架','下架','主畫面') COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`type`, `code`, `name`, `price`, `gender`, `size`, `color`, `reserve`, `mode`, `img`) VALUES
('休閒', 12, 'NIKE白色休閒鞋(男)', 3500, '男', '', '白', 0, '主畫面', 'X白M.jpg'),
('休閒', 14, 'NIKE白色休閒鞋(男)', 3500, '男', '9', '白', 10, '上架', 'X白M.jpg'),
('休閒', 15, 'NIKE白色休閒鞋(男)', 3500, '男', '10', '白', 9, '下架', 'X白M.jpg'),
('休閒', 16, 'NIKE白色休閒鞋(男)', 3500, '男', '11', '白', 12, '上架', 'X白M.jpg'),
('休閒', 17, 'NIKE白色休閒鞋(男)', 3500, '男', '12', '白', 11, '上架', 'X白M.jpg'),
('休閒', 18, 'NIKE黑色休閒鞋(男)', 4300, '男', '', '黑', 0, '主畫面', 'X黑M.jpg'),
('休閒', 19, 'NIKE黑色休閒鞋(男)', 4300, '男', '9', '黑', 15, '上架', 'X黑M.jpg'),
('休閒', 20, 'NIKE黑色休閒鞋(男)', 4300, '男', '10', '黑', 14, '上架', 'X黑M.jpg'),
('休閒', 21, 'NIKE黑色休閒鞋(男)', 4300, '男', '11', '黑', 20, '上架', 'X黑M.jpg'),
('休閒', 22, 'NIKE黑色休閒鞋(男)', 4300, '男', '12', '黑', 18, '上架', 'X黑M.jpg'),
('籃球', 23, 'NIKE紅色籃球鞋(女)', 4100, '女', '', '紅', 0, '主畫面', 'B紅F.jpg'),
('慢跑', 24, 'NIKE粉色慢跑鞋(女)', 4700, '男', '', '粉', 0, '主畫面', 'B粉M.jpg'),
('籃球', 25, 'NIKE紅色籃球鞋(女)', 4100, '女', '7', '紅', 10, '上架', 'B紅F.jpg'),
('籃球', 26, 'NIKE紅色籃球鞋(女)', 4100, '女', '8', '紅', 13, '上架', 'B紅F.jpg'),
('籃球', 27, 'NIKE紅色籃球鞋(女)', 4100, '女', '9', '紅', 13, '下架', 'B紅F.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `ID` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserve` int(50) NOT NULL,
  `mode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`code`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `code` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
