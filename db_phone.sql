-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2020 lúc 02:59 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_phone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admi0n` (
  `id` int(12) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `ten`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `0` (
  `id` int(12) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `idemployee` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `custo0mer` (`id`, `name`, `birth`, `place`, `mobile`, `email`, `idemployee`) VALUES
(7, 'Phạm Ngọc A0', '2001-04-30', 'Thai Thuy -Thai Binh', '0123456785', 'PhamVanA@gmail.com', 6),
(8, 'Pham Van A1', '2002-05-01', 'Hà Nội', '0142563987', 'PhamVanA1@gmail.com', 7),
(9, 'Pham Van A3', '1997-04-21', 'Thái Bình', '0512369874', 'PhamVanA3@gmail.com', 9),
(10, 'Pham Van A5', '2001-04-24', 'Hà Nội', '021453987', 'PhamVanA5@gmail.com', 10),
(11, 'Phạm Quang Thịnh', '1999-04-14', NULL, '0123456789', 'pqthinh0@gmail.com', 7),
(12, 'admin', '0000-00-00', '2002-05-12', '0123456789', 'admin@gmail.com', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donggop`
--

CREATE TABLE `donggop` (
  `id` int(11) NOT NULL,
  `idthanhvien` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `anh` varchar(200) DEFAULT NULL,
  `thoigian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donggop`
--

INSERT INTO `donggop0` (`id`, `idthanhvien`, `noidung`, `anh`, `thoigian`) VALUES
(2, 1, 'Ảnh không khớp với sản phẩm', '86s-Hong-1.jpg', '2020-05-29 01:13:54'),
(3, 1, 'Không báo lỗi được', 'ảnh.png', '2020-05-29 01:24:53'),
(9, 1, 'test paste ảnh lần 3', 'ảnh.png', '2020-05-29 01:39:51'),
(11, 1, 'test paste ảnh lần 5', 'ảnh1.png', '2020-05-29 01:41:25'),
(12, 1, 'test paste ảnh lần 6', 'ảnh1.png', '2020-05-29 01:47:44'),
(13, 1, 'test paste ảnh lần 7', 'ảnh1.png', '2020-05-29 01:48:32'),
(14, 1, 'test paste ảnh lần 8', 'ảnh12.png', '2020-05-29 01:49:21'),
(15, 1, 'tesT paste anhr lần 9', 'ảnh123.png', '2020-05-29 01:50:21'),
(16, 1, 'test paste ảnh lần 10', 'ảnh2.png', '2020-05-29 01:52:03'),
(18, 1, 'Phần gợi ý sản phẩm truy vấn sai ', 'ảnh3.png', '2020-05-31 11:41:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `idemployee` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `place` text DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`idemployee`, `name`, `birthday`, `mobile`, `email`, `place`, `password`, `image`) VALUES
(6, 'Pham Van A0', '2001-04-08', '0513369451', 'PhamVanA0@gmail.com', 'Thai Thuy -Thai Binh', '', 'icons8-admin-settings-male-50.png'),
(7, 'Phạm Văn T1', '1999-04-07', '0222222228', 'PhamVanT1@gmail.com', 'Thai Thuy -Thai Binh', '', 'guest-512.png'),
(8, 'Nguyễn Văn A1', '1998-04-01', '0854256369', 'nva0@gmail.com', 'Thái Bình', '', 'icons8-admin-settings-male-50.png'),
(9, 'Nguyễn Thị A0', '1999-04-29', '0222222225', 'nta0@gmail.com', 'Hà Nội', '', 'icons8-admin-settings-male-50.png'),
(10, 'Phạm Quang Thịnh', '2020-04-30', '0222222224', 'pqt@gmail.com', 'Thái Bình', '', 'icons8-admin-settings-male-50.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idgiohang` int(12) NOT NULL,
  `idproduct` varchar(50) NOT NULL,
  `id` int(12) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`idgiohang`, `idproduct`, `id`, `soluong`) VALUES
(20, 'I-Iphone11-64G', 5, 1),
(27, 'iPad-Mini-5-7.9-Wi-Fi/64GB', 5, 10),
(28, 'iPhone-11-128GB', 5, 1),
(40, ' A-Bphone-B86s', 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon0` (
  `mahoadon` int(12) NOT NULL,
  `idcustomer` int(12) NOT NULL,
  `idproduct` varchar(50) NOT NULL,
  `ngayban` datetime NOT NULL,
  `soluong` int(11) NOT NULL,
  `trangthai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoad0on` (`mahoadon`, `idcustomer`, `idproduct`, `ngayban`, `soluong`, `trangthai`) VALUES
(13, 8, 'A-Vsmart-Joy-33/32', '2020-04-27 00:00:00', 2, NULL),
(14, 7, 'iPhone-11-Pro-512GB', '2020-04-27 15:28:20', 2, NULL),
(15, 10, 'Vsmart-Joy-2-plus2/32', '2020-04-27 15:29:02', 3, 1),
(16, 7, 'A-Vsmart-Joy-34/64', '2020-04-27 15:30:34', 3, 1),
(17, 7, 'A-Vsmart-Joy-33/32', '2020-04-27 15:30:49', 1, 1),
(18, 9, 'A-Vsmart-Joy-32/32', '2020-04-27 15:32:12', 1, 1),
(19, 8, 'iPhone-6s-2/32GB', '2020-04-27 15:32:12', 2, 1),
(20, 9, 'iPhone-Xs-Max-64GB', '2020-04-27 15:34:33', 1, 1),
(21, 9, 'Samsung-Galaxy-M31', '2020-04-27 15:34:57', 1, 1),
(22, 11, 'iPhone-Xs-Max-64GB', '2020-05-12 16:14:26', 1, NULL),
(23, 11, 'A-Vsmart-Joy-34/64', '2020-05-12 16:14:26', 1, NULL),
(24, 11, 'iPad-Mini-5-7.9-Wi-Fi/64GB', '2020-05-12 16:14:27', 1, NULL),
(25, 11, 'A-Vsmart-Joy-32/32', '2020-06-01 12:45:34', 1, NULL),
(26, 11, ' A-Bphone-B86s', '2020-06-01 15:06:28', 2, NULL),
(27, 11, 'A-Bphone-B86', '2020-06-01 15:11:05', 2, NULL),
(27, 11, 'A-Bphone3-pro', '2020-06-01 15:11:05', 1, NULL),
(28, 11, 'Vsmart-Joy-2-plus2/32', '2020-06-01 15:19:30', 2, NULL),
(28, 11, ' A-Bphone-B86s', '2020-06-01 15:19:30', 2, NULL),
(29, 12, 'I-Iphone11-64G', '2020-06-01 15:25:35', 1, NULL),
(29, 12, 'Vsmart-Active-34/64', '2020-06-01 15:25:36', 1, NULL),
(29, 12, ' A-Bphone-B86s', '2020-06-01 15:25:36', 9, 1),
(29, 12, 'Vsmart-Star-3', '2020-06-01 15:25:36', 1, 1),
(30, 12, 'iPad-Mini-5-7.9-Wi-Fi/64GB', '2020-06-01 15:36:22', 1, 1),
(31, 12, 'iPad-Mini-5-7.9-Wi-Fi/64GB', '2020-06-01 15:45:59', 1, 1),
(32, 12, 'iPad-Mini-5-7.9-Wi-Fi/64GB', '2020-06-01 15:47:51', 1, 1);

--
-- Bẫy `hoadon`
--
DELIMITER $$
CREATE TRIGGER `insert time to hoadon` BEFORE INSERT ON `hoadon` FOR EACH ROW BEGIN
	set New.ngayban = CURRENT_TIMESTAMP;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `im0age` (
  `id_image` int(12) NOT NULL,
  `ten_anh` varchar(255) DEFAULT NULL,
  `id_product` varchar(50) DEFAULT NULL,
  `chucnang` varchar(255) DEFAULT NULL,
  `upload` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id_image`, `ten_anh`, `id_product`, `chucnang`, `upload`, `title`) VALUES
(1, 'Slide10.png', NULL, 'quangcao', '2020-04-29 00:01:30', 'shop Didong.vn  +'),
(3, 'quangcao_search-ipad.jpg', NULL, 'quảng cáo ipad', '2020-04-28 23:55:01', 'Quảng cáo cho dòng iPad'),
(4, 'quangcao_search-nokia.jpg', '0', 'quảng cáo nokia 1', '2020-04-28 23:55:21', 'Điện thoại nokia +'),
(5, 'quangcao_search-nokia2.jpg', '0', 'quảng cáo nokia 2', '2020-04-28 23:56:46', 'Quảng cáo cho dòng sp Nokia'),
(6, 'quangcao_search-samsung.jpg', '0', 'quảng cáo samsung 1', '2020-04-28 23:57:01', 'Điện thoại SamSung'),
(7, 'quangcao_search-samsung02.jpg', '0', 'quảng cáo samsung 2', '2020-04-28 23:57:15', 'QC dòng sp SAmsung'),
(8, 'Slide-Ipad-uy-tin_optimized.png', '0', 'quảng cáo ipad 2', '2020-04-28 23:57:27', 'IPad uy tín'),
(9, 'slide-iphone-11-1604.png', '0', 'quảng cáo iPhone 11 1', '2020-04-28 23:57:43', 'Điện thoại iPhone'),
(10, 'Slide-mua-Corona-sua-mien-phi-tan-nha.png', '0', 'quảng cáo chung', '2020-04-28 23:57:57', 'QC chung'),
(11, 'Slide-Realme5-1.png', '0', 'quảng cáo realme 1', '2020-04-28 23:58:18', 'Điện thoại Realme'),
(12, 'Slide10.png', '0', 'quảng cáo samsung 3', '2020-04-28 23:58:29', 'QC chung'),
(13, 'vsmart-star-3-1.jpg', '0', 'quảng cáo vsmart 1', '2020-04-28 23:53:10', 'Quảng cáo cho điện thoại vsmart star 3'),
(14, 'vsmart-star-3-7.jpg', '0', 'quảng cáo vsmart 2', '2020-04-28 23:53:50', 'Điện thoại Vsmart star 3 +'),
(15, 'bphone-3-pro.jpg', 'bphone', 'seo', '2020-05-15 09:07:16', NULL),
(16, 'images_feeback.png', 'null', 'icon feeback', '2020-05-19 18:52:48', NULL),
(17, 'images_feeback.png', 'null', 'icon feeback', '2020-05-19 18:53:33', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productline`
--

CREATE TABLE `productl0ine` (
  `idproductline` varchar(50) NOT NULL,
  `nameproductline` varchar(100) NOT NULL,
  `intro` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `productline`
--

INSERT INTO `productline` (`idproductline`, `nameproductline`, `intro`, `image`) VALUES
('ipad-apple', '', NULL, NULL),
('ipad-samsung', '', NULL, NULL),
('normal-nokia', '', NULL, NULL),
('sm-android', '', NULL, NULL),
('sm-iPhone', 'Smart phone + iPhone', ' https://www.apple.com/iphone/', 'signup.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `prod0ucts` (
  `idproduct` varchar(50) NOT NULL,
  `nameproduct` varchar(100) DEFAULT NULL,
  `idproductline` varchar(100) DEFAULT NULL,
  `idinfo` varchar(50) DEFAULT NULL,
  `operator` varchar(200) NOT NULL,
  `ram` varchar(200) NOT NULL,
  `chip` varchar(200) NOT NULL,
  `camera` varchar(200) NOT NULL,
  `battery` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `buyprice` int(11) NOT NULL,
  `sellprice` int(11) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `screen` varchar(100) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `upload` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `prod0cts` (`idproduct`, `nameproduct`, `idproductline`, `idinfo`, `operator`, `ram`, `chip`, `camera`, `battery`, `quantity`, `buyprice`, `sellprice`, `brand`, `screen`, `image`, `upload`) VALUES
(' A-Bphone-B86s', ' Bphone B86s', 'sm-android', ' A-Bphone-B86', 'BOS 8.6 (Android 9)', '4/128GB', 'Chipset: Qualcomm Snapdragon 675, 8 nhân: 2 nhân 2.0GHz Kryo Gold, 6 nhân 1.7GHz Kryo Silver<br>Chip đồ họa (GPU): Qualcomm® Adreno™ 612 GPU', 'Camera AI - Tiên phong nhiếp ảnh điện toán. Camera chính PDAF Dual pixel 2 cảm biến trong 1 ống kính (12Mp cho ảnh + 12Mp cho lấy nét), khẩu độ F/1.8 lấy nét cực nhanh và camera phụ hỗ trợ xóa phông', '3000mAh', 37, 8000000, 9990000, 'Bkav', '6.1 inches, công nghệ COF<br>Tràn đáy, Full HD+, rất nhạy & sáng', '86s-Hong-1.jpg', '2020-05-12 17:16:45'),
('A-Bphone-B86', ' Bphone B86', 'sm-android', ' A-Bphone-B86', 'BOS 8.6 (Android 9)', '4/64GB', 'Chipset: Qualcomm Snapdragon 675, 8 nhân: 2 nhân 2.0GHz Kryo Gold, 6 nhân 1.7GHz Kryo Silver<br>Chip đồ họa (GPU): Qualcomm® Adreno™ 612 GPU', 'Camera AI - Tiên phong nhiếp ảnh điện toán. Camera chính PDAF Dual pixel 2 cảm biến trong 1 ống kính (12Mp cho ảnh + 12Mp cho lấy nét), khẩu độ F/1.8 lấy nét cực nhanh và camera phụ hỗ trợ xóa phông', '3000mAh', 48, 7000000, 8990000, 'Bkav', '6.1 inches, công nghệ COF<br>Tràn đáy, Full HD+, rất nhạy & sáng', 'bphone-b86s-thumb-tam-600x600.jpg', '2020-05-12 17:24:56'),
('A-Bphone3-pro', 'Bphone 3 Pro', 'sm-android', 'A-Bphone-B86', 'Android 9.0', '4/64G', 'Snapdragon 720G 8nm', 'Camera sau :16Mp Camera trươc : 5Mp', '5000mAp.h', 9, 5900000, 6900000, 'Bkav', '5.9 inchs', 'bphone-3-pro.jpg', '2020-05-18 11:46:25'),
('A-Vsmart-Joy-32/32', 'Vsmart Joy3 2/32 GB', 'sm-android', 'A-Vsmart-Joy-3', 'Android 9.0', '2/32G', 'Snapdragon 720G 8nm', 'Camera sau :16Mp Camera trươc : 5Mp', '5000mAp.h', 9, 1690000, 2190000, 'Vsmart', '5.9 inchs', 'vsmart-joy-3-2gb-tim-600x600-600x600.jpg', '2020-04-27 07:47:41'),
('A-Vsmart-Joy-33/32', 'Vsmart Joy3', 'sm-android', 'A-Vsmart-Joy-3', 'Android 9.0', '3/32G', 'Snapdragon 720G 8nm', 'Camera sau :16Mp Camera trươc : 5Mp', '5000mAp.h', 1000, 2900000, 3500000, 'Vsmart', '5.9 inchs', 'vsmart-joy-3-2gb-tim-600x600-600x600.jpg', '2020-04-27 07:47:41'),
('A-Vsmart-Joy-34/64', 'Vsmart Joy3', 'sm-android', 'A-Vsmart-Joy-3', 'Android 9.0', '4/64G', 'Snapdragon 720G 8nm', 'Camera sau :16Mp Camera trươc : 5Mp', '5000mAp.h', 999, 2900000, 3900000, 'Vsmart', '5.9 inchs', 'vsmart-joy-3-4gb-den-600x600-600x600.jpg', '2020-04-27 07:47:41'),
('I-Iphone11-64G', 'Iphone11 64GB', 'sm-iPhone', 'mt-I-iPhone11-64G', 'iOS 13', '4/64G', 'Apple A13 Bionic 6 nhân', 'Camera sau: Chính 12 MP & Phụ 12 MP  Camera trước:12 MP;', '3500mAp.h có sạc nhanh', 99, 19000000, 21990000, 'iPhone', 'IPS LCD, 6.1', 'iPhone11-pro.jpg', '2020-04-27 07:47:41'),
('iPad-Mini-5-7.9-Wi-Fi/64GB', 'iPad Mini 5 7.9 Wifi 64GB', 'ipad-apple', 'iPad-Mini-5', ' iOS 12', '3/64GB', ' Hexa-core', 'Camera sau :8Mp Camera trươc : 7Mp', ' ', 11, 10000000, 10990000, 'Apple', ' 7.9 inchs, 2048 x 1536 Pixels', 'ipad-mini-5-gold-1.png', '2020-04-27 10:56:30'),
('iPhone-11-128GB', 'iPhone 11 128GB', 'sm-iPhone', 'iPhone-11', 'iOS 13', '4/128G', 'CPU : Apple A13 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân', ' Camera sau : Dual 12MP Ultra Wide and Wide cameras <br> Camera trước : 12.0 MP ', 'Lâu hơn iPhone XR 1h', 10, 23000000, 23990000, 'Apple', ' 6.1 inchs, Liquid Retina HD, 828 x 1792 Pixels', 'iPhone_11-xanh.png', '2020-04-27 09:35:38'),
('iPhone-11-256GB', 'iPhone 11 256GB', 'sm-iPhone', 'iPhone-11', 'iOS 13', '4/256G', 'CPU : Apple A13 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân', ' Camera sau : Dual 12MP Ultra Wide and Wide cameras <br> Camera trước : 12.0 MP ', 'Lâu hơn iPhone XR 1h', 3, 25000000, 25990000, 'Apple', ' 6.1 inchs, Liquid Retina HD, 828 x 1792 Pixels', 'iPhone_11-tim.png', '2020-04-27 09:35:38'),
('iPhone-11-64GB', 'iPhone 11 64GB', 'sm-iPhone', 'iPhone-11', 'iOS 13', '4/64G', 'CPU : Apple A13 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân', ' Camera sau : Dual 12MP Ultra Wide and Wide cameras <br> Camera trước : 12.0 MP ', 'Lâu hơn iPhone XR 1h', 5, 21000000, 21990000, 'Apple', ' 6.1 inchs, Liquid Retina HD, 828 x 1792 Pixels', 'iPhone_11-vang.png', '2020-04-27 10:00:00'),
('iPhone-11-Pro-512GB', 'iPhone 11 Pro 512GB', 'sm-iPhone', 'iPhone11-pro', 'iOS 13', '4/512G', ' CPU : Apple A13 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân ', ' Camera sau : Triple 12MP Ultra Wide, Wide and Telephoto cameras <br>  Camera trước : 12.0 MP ', 'Lâu hơn iPhone Xs Max 4h', 5, 40000000, 40990000, 'Apple', ' 6.5 inchs, Super Retina XDR, 1242 x 2688 Pixels', 'iPhone_11-pro-max-den.png', '2020-04-27 08:59:13'),
('iPhone-11-Pro-Max-256GB', 'iPhone 11 Pro Max 256GB', 'sm-iPhone', 'iPhone11-pro-max', 'iOS 13', '4/256G', ' CPU : Apple A13 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân ', ' Camera sau : Triple 12MP Ultra Wide, Wide and Telephoto cameras <br>  Camera trước : 12.0 MP ', 'Lâu hơn iPhone Xs Max 5h', 5, 37000000, 37990000, 'Apple', ' 6.5 inchs, Super Retina XDR, 1242 x 2688 Pixels', 'iPhone_11-pro-max-den.png', '2020-04-27 08:59:13'),
('iPhone-11-Pro-Max-512GB', 'iPhone 11 Pro Max 512GB', 'sm-iPhone', 'iPhone11-pro-max', 'iOS 13', '4/512G', 'CPU : Apple A13 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân', 'Camera sau : Triple 12MP Ultra Wide, Wide and Telephoto cameras <br>  Camera trước : 12.0 MP', 'Lâu hơn iPhone Xs Max 5h', 1000, 2900000, 3500000, 'Apple', ' 6.5 inchs, Super Retina XDR, 1242 x 2688 Pixels', 'iPhone_11-pro-max-xanh.png', '2020-04-27 09:01:32'),
('iPhone-6s-2/32GB', 'iPhone 6s 2/32GB', 'sm-iPhone', 'iPhone-6s', 'iOS 10', '2/32G', ' Apple A9, 2 Nhân, 1.8 GHz', 'Camera sau :12Mp<br> Camera trươc : 5Mp', '2750mAh', 10, 8000000, 8990000, 'Apple', ' Full HD, 1080 x 1920 pixels', 'iPhone_6s-plus-xam-1.png', '2020-04-27 10:17:53'),
('iPhone-XR-64GB', 'iPhone XR 64GB', 'sm-iPhone', 'iPhone-XR', 'iOS 12', '4/64G', 'CPU : Apple A12 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân', 'Camera sau :12Mp Camera trươc : 7Mp', 'Lâu hơn iPhone 8 1,5h', 1000, 1800000, 18990000, 'Apple', '6.1 inchs, Liquid Retina HD, 828 x 1792 Pixels', 'iphone-Xr-Blue.png', '2020-04-27 10:10:45'),
('iPhone-Xs-Max-256GB', 'iPhone Xs Max 256GB', 'sm-iPhone', 'iPhone-Xs-Max', ' iOS 12', '4/256G', 'CPU : Apple A12 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân', 'Camera sau : Dual Camera 12.0 MP<br> Camera trước : 7Mp', 'Lâu hơn iPhone X 1,5h', 8, 30000000, 32990000, 'Apple', ' 6.5 inchs, Super Retina HD, 1242 x 2688 Pixels', 'iphone-xs-grey-4.png', '2020-04-27 10:05:00'),
('iPhone-Xs-Max-64GB', 'iPhone Xs Max 64GB', 'sm-iPhone', 'iPhone-Xs-Max', ' iOS 12', '4/64G', 'CPU : Apple A12 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân', 'Camera sau : Dual Camera 12.0 MP<br> Camera trước : 7Mp', 'Lâu hơn iPhone X 1,5h', 6, 25000000, 26990000, 'Apple', ' 6.5 inchs, Super Retina HD, 1242 x 2688 Pixels', 'iPhone-Xs-Max-gold.png', '2020-04-27 10:00:54'),
('Iphone11-pro-256GB', 'iPhone 11 Pro 256GB', 'sm-iPhone', 'iPhone11-pro', 'iOS 13', '4/256G', 'CPU : Apple A13 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân', 'Camera sau : Triple 12MP Ultra Wide, Wide and Telephoto cameras<br> Camera trước : 12.0 MP', 'Lâu hơn iPhone Xs Max 4h', 7, 3000000, 34990000, 'Apple', '5.8 inchs, Super Retina XDR, 1125 x 2436 Pixels', 'iphone_11-pro-trang.png', '2020-04-27 09:14:28'),
('iPhone11-pro-64GB', 'iPhone 11 Pro 64GB', 'sm-iPhone', 'iPhone11-pro', 'iOS 13', '4/64G', 'CPU : Apple A13 Bionic, 6, Đang cập nhật <br> GPU : Apple GPU 4 nhân', 'Camera sau : Triple 12MP Ultra Wide, Wide and Telephoto cameras <br>  Camera trước : 12.0 MP', 'Lâu hơn iPhone Xs Max 4h', 10, 30000000, 30990000, 'Apple', ' 5.8 inchs, Super Retina XDR, 1125 x 2436 Pixels', 'iPhone11-pro.jpg', '2020-04-27 09:09:50'),
('iPhone11-pro-max64GB', 'iPhone 11 Pro Max 64GB', 'sm-iPhone', 'iPhone11-pro-max', 'iOS 13', '4/64GB', ' CPU: Apple A13 Bionic, 6, Đang cập nhật<br> GPU : Apple GPU 4 nhân ', ' Camera sau : Triple 12MP Ultra Wide, Wide and Telephoto cameras<br> Camera trước : 12.0 MP ', 'Lâu hơn iPhone Xs Max 5h', 10, 33000000, 33390000, 'Apple', ' 6.5 inchs, Super Retina XDR, 1242 x 2688 Pixels', 'iPhone11-pro.jpg', '2020-04-27 08:50:29'),
('Nokia-230', 'Nokia 230', 'normal-nokia', 'Nokia-230', '', '', '', 'Camera sau :2Mp Camera trươc : 2Mp', '1200 mAh', 20, 990000, 1250000, 'Nokia', '2.8 inches, QVGA, 240 x 320 Pixels', 'nokia230.jpg', '2020-04-27 13:55:06'),
('Nokia-5310', 'Nokia 5310', 'normal-nokia', 'Nokia', ' Nokia S30+', '8/4MB', '', 'Camera sau : 0.4Mp', '1200 mAh', 10, 500000, 649000, 'Nokia', ' 2.4 inches, QVGA, 320 x 240 Pixel', 'nokia-5310-2020-den-1.png', '2020-04-27 14:05:24'),
('Nokia-800-Tough', 'Nokia 800 Tough', 'normal-nokia', 'Nokia-800', ' KaiOS', '512MB/4GB', 'Qualcomm MSM8905 Snapdragon 205, 2, 1.1Ghz', 'Camera sau :2.0 MP ', '2100mAh', 15, 2000000, 2450000, 'Nokia', '2.4 inches, LCD, 320 x 240 Pixel', 'nokia-800-tough-den-1.png', '2020-04-27 11:06:04'),
('Nokia-n150', 'Nokia N150', 'normal-nokia', 'Nokia', '', '', '', 'Camera sau : VGA (480 x 640 pixels)', '1020 mAh', 10, 400000, 649000, 'Nokia', 'TFT, 2.4\", 65.536 màu, QVGA, 320 x 240 Pixels', 'nokia-n150.jpg', '2020-04-27 14:01:13'),
('Samsung-Galaxy-A11', 'Samsung Galaxy A11', 'sm-android', 'Samsung-Galaxy', 'Android 10.0', '3/32GB', ' Snapdragon 450 8 nhân, 8, 1.8 GHz', 'Camera sau :Chính 13 MP & Phụ 5 MP, 2 MP<br>Camera trươc : 8 MP, F/2.0', '4000 mAh', 13, 3000000, 3490000, 'Samsung', '6.4 inches, HD +, 720 x 1560 Pixels', 'ss-a11-xanh-1.png', '2020-04-27 10:50:27'),
('Samsung-Galaxy-A50s', 'Samsung Galaxy A50s', 'sm-android', 'Samsung-Galaxy', 'Android 9.0 (Pie)', '4/64GB', ' Exynos 9610 8 nhân 64-bit, 8, 4 nhân 2.3 GHz và 4 nhân 1.7 GHz', 'Camera sau :Chính 48 MP & Phụ 8 MP, 5 MP<br> Camera trước : 32Mp', '4000 mAh', 12, 5990000, 6489995, 'Samsung', ' 6.4 inches, Full HD+, 1080 x 2340 Pixels', 'ss-a50s-xanh-1.png', '2020-04-27 10:46:27'),
('Samsung-Galaxy-M31', 'Samsung Galaxy-M31', 'sm-android', 'Samsung-Galaxy-M31', 'Android 10.0', '6/128GB', 'Exynos 9611, 8, 4x2.3 GHz Cortex-A73 & 4x1.7 GHz Cortex-A53', 'Camera sau :Chính 64 MP & Phụ 8 MP, 5 MP, 5 MP<br> Camera trước : 32.0Mp ', '6000 mAh', 8, 7900000, 8190000, 'Samsung', ' 6.4 inches, Full HD+, 1080 x 2340 Pixels', 'ss-m31-xanh-1.png', '2020-04-27 10:22:59'),
('Samsung-Galaxy-s20', 'Samsung Galaxy s20', 'sm-android', 'Samsung-Galaxy', 'Android 10.0', '8/128GB', ' Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz', 'Camera sau : Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D<br> Camera trươc : 10Mp', '4000 mAh', 10, 21000000, 21990000, 'Samsung', '  6.2 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', 'samsung-galaxy-s20.jpg', '2020-04-27 10:27:54'),
('Samsung-Galaxy-s20-ultra', 'Samsung Galaxy s20 Ultra', 'sm-android', 'Samsung-Galaxy', 'Android 10.0', '8/128GB', ' Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz', 'Camera sau : Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D<br> Camera trươc : 10Mp', '4500 mAh', 10, 29000000, 29990000, 'Samsung', ' 6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', 'ss-s20-plus-xanh-1.png', '2020-04-27 10:27:54'),
('Samsung-Galaxy-s20plus', 'Samsung Galaxy s20+', 'sm-android', 'Samsung-Galaxy', 'Android 10.0', '8/128GB', ' Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz', 'Camera sau : Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D<br> Camera trươc : 10Mp', '4500 mAh', 10, 23000000, 23900000, 'Samsung', ' 6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', 'samsung-galaxy-s20.jpg', '2020-04-27 10:27:54'),
('Samsung-tab-A10.1', 'Samsung Tab A 10.1', 'ipad-samsung', 'Samsung-tab', 'Android 9.0 (Pie)', '3/32GB', ' Exynos 7904', 'Camera sau :8Mp Camera trươc : 5Mp', ' ', 10, 6900000, 7590000, 'Samsung', ' 10.1 inches, 1920 x 1280 pixels', 'ss-galaxy-tab-a-101-den-1.png', '2020-04-27 11:00:48'),
('Vsmart-Active-34/64', 'Vsmart Active 3 4/64 GB', 'sm-android', 'Vsmart-Active-3', 'VOS 2.5 (Android 9.0)', '4/64G', 'Chipset 8 nhân 2.0 GHz ', 'Camera trước: 16MP f/2.2 Popup Hiệu ứng làm đẹp AR Sticker AI Beauty Camera sau: 48MP f/1.7 - Camera chụp đêm 8MP f/2.2 - Camera góc rộng 2MP f/2.4 - Camera xóa phông', '4020 mAh', 19, 2590000, 3490000, 'Vsmart', '6.39 inchs ', 'vsmart-active-3-600x600-600x600.jpg', '2020-04-27 07:47:41'),
('Vsmart-Active-36/64', 'Vsmart Acive3 6/64Gb', 'sm-android', 'Vsmart-Active-3', 'VOS 2.5 (Android 9.0)', '6/64G', 'Chipset 8 nhân 2.0 GHz', 'Camera trước: 16MP f/2.2 Popup Hiệu ứng làm đẹp AR Sticker AI Beauty Camera sau: 48MP f/1.7 - Camera chụp đêm 8MP f/2.2 - Camera góc rộng 2MP f/2.4 - Camera xóa phông', '4020 mAh', 10, 30000000, 3790000, 'Vsmart', '6.39 inchs', 'vsmart-active-3-6gb-emerald-green-600x600-600x600.jpg', '2020-04-27 07:47:41'),
('Vsmart-BEE', 'Vsmart JBEE', 'sm-android', 'Vsmart-BEE', 'Android 8.1 Go Edition', '1/16G', ' CPU : MTK6739, 4, 1.3Ghz <br> GPU : PowerVR GE8100 ', ' Camera trước : 5.0 MP <br> Camera sau : 8.0 MP ', '2500 mAh', 9, 500000, 990000, 'Vsmart', '5.45 inchs, HD +, 720 x 1440 Pixels', 'vsmart-bee-blue-600x600.jpg', '2020-04-27 08:17:42'),
('Vsmart-BEE-3', 'Vsmart BEE3', 'sm-android', 'Vsmart-BEE-3', 'Android 9.0 (Pie)', '2/16G', ' CPU : MediaTek MT6739WW, 4, 1.5Ghz <br> GPU : PowerVR GE8100 ', ' Camera trước : 5.0 MP <br> Camera sau : 8.0 MP, f2.0 ', '3000mAh', 10, 900000, 1390000, 'Vsmart', ' 6.0 inches, HD+, 1440 x 720 Pixel', 'vsmart-bee-3-white-600x600-600x600.jpg', '2020-04-27 08:21:21'),
('Vsmart-Joy-2-plus2/32', 'Vsmart Joy2 plus', 'sm-android', 'Vsmart-Joy-2-plus', 'Android 9.0', '2/32G', 'CPU Qualcomm® Snapdragon™ 450 8 tối đa 1.8 GHz,14nm Chip đồ họa Qualcomm® Adreno™ 506 lên đến 650 MHz ', 'Camera kép 13 MP ƒ/2.0 + 5 MP ƒ/2.4 Đèn Flash Lấy nét tự động Độ phân giải video 1080p@60fps', '4500 mAh', 8, 1100000, 1990000, 'Vsmart', 'Kích thước 6.2” Độ phân giải HD+ 720 x 1520 – 271 ppi', 'vsmart-joy-2-plus-xanh-1.png', '2020-04-27 07:47:41'),
('Vsmart-Joy-2-plus3/32', 'Vsmart Joy2 plus', 'sm-android', 'Vsmart-Joy-2-plus', 'Android 9.0', '3/32G', 'CPU Qualcomm® Snapdragon™ 450 8 tối đa 1.8 GHz,14nm Chip đồ họa Qualcomm® Adreno™ 506 lên đến 650 MHz ', 'Camera kép 13 MP ƒ/2.0 + 5 MP ƒ/2.4 Đèn Flash Lấy nét tự động Độ phân giải video 1080p@60fps', '4500 mAh', 10, 1300000, 2290000, 'Vsmart', 'Kích thước 6.2” Độ phân giải HD+ 720 x 1520 – 271 ppi', 'vsmart-joy-2-plus-xanh-1.png', '2020-04-27 07:47:41'),
('Vsmart-Live', 'Vsmart Live', 'sm-android', 'Vsmart-Live', 'Android 9.0', '4/64G', 'Qualcomm® Snapdragon™ 675 8 nhân lên đến 2.0 GHz, 11nm', 'Triple Camera 48 MP ƒ/1.7 + 5 MP ƒ/1.9 + 8 MP ƒ/2.2', '4000 mAh', 10, 2888000, 3490000, 'Vsmart', '6.2 inchs', 'vsmart-live-blue-600x600.jpg', '2020-04-27 07:47:41'),
('Vsmart-Star-2/16', 'Vsmart Star', 'sm-android', 'Vsmart-Star', 'Android 9.0', '2/16 GB', ' CPU: Qualcomm® Snapdragon™ 215, 4, 1.3Ghz<br> GPU : Qualcomm® Adreno™ 308 ', ' Cmaera sau: 8 MP f/2.0 + 2 MP f/2.4 <br>Camera trước : 5Mp', '3000mAh', 10, 990000, 1290000, 'Vsmart', ' 5.7 inchs, HD +, 720 x 1520 Pixels', 'vsmart-star-coral-600x600.jpg', '2020-04-27 08:07:03'),
('Vsmart-Star-3', 'Vsmart Star3', 'sm-android', 'Vsmart-Star3', 'VOS (Based on Android 9.0)', '2/16G', 'CPU: Snapdragon 215, 4, 1.3GHz<br> GPU : Adreno™ 308 ', ' Camera trước : 8 MP, F/2.0 <br> Camera sau : 8MP AF f/1.9 + 5MP f/2.2 ', '3520 mAh', 12, 1100000, 1790000, 'Vsmart', ' 6.1 inches, HD +, 720 x 1560 Pixels', 'vsmart-star-3-xanh-600x600-600x600.jpg', '2020-04-27 08:10:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamkhuyenmai`
--

CREATE TABLE `sanphamkhuyenmai` (
  `id` int(11) NOT NULL,
  `idproduct` varchar(50) NOT NULL,
  `giamgia` int(11) DEFAULT NULL,
  `thanhly` int(11) DEFAULT NULL,
  `songay_hethan` int(11) DEFAULT NULL,
  `ngay_batdau` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanphamkhuyenmai`
--

INSERT INTO `sanphamkhuyenmai` (`id`, `idproduct`, `giamgia`, `thanhly`, `songay_hethan`, `ngay_batdau`) VALUES
(1, 'Samsung-Galaxy-A50s', 500000, NULL, 7, '2020-04-28 22:22:04'),
(2, 'Samsung-Galaxy-s20-ultra', 590000, NULL, 7, '2020-04-28 22:22:06'),
(3, 'iPhone-Xs-Max-256GB', 1099000, NULL, 7, '2020-04-29 11:04:27'),
(4, 'A-Vsmart-Joy-34/64', 499000, NULL, 3, '2020-04-29 11:04:19'),
(6, ' A-Bphone-B86s', 499000, NULL, 30, '2020-05-18 11:50:00'),
(13, 'Iphone11-pro-256GB', 1990000, NULL, 24, '2020-05-18 09:05:07'),
(14, 'iPhone11-pro-max64GB', 990000, NULL, 50, '2020-05-18 09:05:45'),
(15, 'iPhone-11-256GB', 500000, NULL, 60, '2020-05-21 02:05:57'),
(16, 'A-Vsmart-Joy-32/32', 499000, NULL, 30, '2020-05-21 06:05:53'),
(17, 'A-Bphone-B86', 500000, NULL, 21, '2020-05-22 01:05:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spuathich`
--

CREATE TABLE `spuathich` (
  `id` int(12) NOT NULL,
  `idproduct` varchar(50) NOT NULL,
  `idthanhvien` int(12) NOT NULL,
  `timeupdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `spuathich`
--

INSERT INTO `spuathich` (`id`, `idproduct`, `idthanhvien`, `timeupdate`) VALUES
(8, 'A-Vsmart-Joy-32/32', 1, '2020-05-12 00:00:00'),
(9, 'I-Iphone11-64G', 1, '2020-05-14 16:23:48'),
(11, 'Vsmart-Joy-2-plus2/32', 1, '2020-05-20 21:15:39'),
(12, ' A-Bphone-B86s', 4, '2020-05-23 09:01:02'),
(13, 'A-Bphone3-pro', 4, '2020-05-23 09:01:18'),
(14, 'A-Bphone-B86', 4, '2020-05-23 09:01:30'),
(15, 'iPad-Mini-5-7.9-Wi-Fi/64GB', 5, '2020-05-29 19:32:49'),
(16, 'iPhone-11-256GB', 5, '2020-05-29 19:40:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id` int(12) NOT NULL,
  `mahoadon` int(12) NOT NULL,
  `tennguoinhan` varchar(200) NOT NULL,
  `sdtnhan` varchar(11) NOT NULL,
  `diachinhan` varchar(200) NOT NULL,
  `thoigian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`id`, `mahoadon`, `tennguoinhan`, `sdtnhan`, `diachinhan`, `thoigian`) VALUES
(1, 25, 'Phạm Quang Thịnh', '0866564502', 'Ngõ 14, Mễ Trì Hạ, Nam Từ Liêm, Hà Nội', '2020-05-31 23:48:02'),
(4, 26, 'Phạm Quang Thịnh', '0866564502', 'Thái An - Thái Thụy - Thái Bình', '2020-06-01 15:14:26'),
(5, 27, 'Phạm Quang Thịnh', '0952146387', 'Thái An - Thái Thụy - Thái Bình', '2020-06-01 15:19:30'),
(6, 29, 'admin', '094513678', 'Xuân Thủy - Cầu Giấy - Hà Nội', '2020-06-01 15:25:36'),
(14, 32, 'admin', '08452136987', 'Thái An , Thái Thụy, Thái Bình', '2020-06-01 15:47:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(12) NOT NULL,
  `ten` varchar(100) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `ten`, `ngaysinh`, `email`, `mobile`, `password`, `time`, `image`) VALUES
(1, 'Phạm Quang Thịnh', '1999-04-14', 'pqthinh0@gmail.com', '0866564502', '123', '2020-05-21 11:42:28', 'user2.png'),
(3, 'pq thinh1', '1998-05-14', 'thinh_test@gmail.com', '0866564502', '120', '2020-05-18 07:49:38', NULL),
(4, 'admin', '2002-05-12', 'admin@gmail.com', '0123456789', 'admin', '2020-05-21 12:13:53', 'admin.png'),
(5, 'Trần Mạnh Đức', '2000-05-19', 'tmanhduc@gmail.com', '0213151426', '123', '2020-05-29 19:32:26', 'user2.png');

--
-- Bẫy `thanhvien`
--
DELIMITER $$
CREATE TRIGGER `insert time upload 'thanhvien'` BEFORE INSERT ON `thanhvien` FOR EACH ROW BEGIN
	set New.time= CURRENT_TIMESTAMP;
END
$$
DELIMITER ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idemployee` (`idemployee`),
  ADD KEY `idemployee_2` (`idemployee`);

--
-- Chỉ mục cho bảng `donggop`
--
ALTER TABLE `donggop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idthanhvien` (`idthanhvien`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idemployee`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgiohang`),
  ADD KEY `idproduct` (`idproduct`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD KEY `idcustomer` (`idcustomer`),
  ADD KEY `idproduct` (`idproduct`),
  ADD KEY `mahoadon` (`mahoadon`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Chỉ mục cho bảng `productline`
--
ALTER TABLE `productline`
  ADD PRIMARY KEY (`idproductline`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproduct`) USING BTREE,
  ADD KEY `idproductline` (`idproductline`),
  ADD KEY `idinfo` (`idinfo`);

--
-- Chỉ mục cho bảng `sanphamkhuyenmai`
--
ALTER TABLE `sanphamkhuyenmai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproduct` (`idproduct`);

--
-- Chỉ mục cho bảng `spuathich`
--
ALTER TABLE `spuathich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproduct` (`idproduct`,`idthanhvien`),
  ADD KEY `idthanhvien` (`idthanhvien`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thanhtoan_ibfk_3` (`mahoadon`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `donggop`
--
ALTER TABLE `donggop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `idemployee` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgiohang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `sanphamkhuyenmai`
--
ALTER TABLE `sanphamkhuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `spuathich`
--
ALTER TABLE `spuathich`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`idemployee`) REFERENCES `employee` (`idemployee`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donggop`
--
ALTER TABLE `donggop`
  ADD CONSTRAINT `donggop_ibfk_1` FOREIGN KEY (`idthanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`idproduct`) REFERENCES `products` (`idproduct`),
  ADD CONSTRAINT `giohang_ibfk_3` FOREIGN KEY (`id`) REFERENCES `thanhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idproduct`) REFERENCES `products` (`idproduct`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`idcustomer`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`idproductline`) REFERENCES `productline` (`idproductline`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanphamkhuyenmai`
--
ALTER TABLE `sanphamkhuyenmai`
  ADD CONSTRAINT `sanphamkhuyenmai_ibfk_1` FOREIGN KEY (`idproduct`) REFERENCES `products` (`idproduct`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `spuathich`
--
ALTER TABLE `spuathich`
  ADD CONSTRAINT `spuathich_ibfk_2` FOREIGN KEY (`idproduct`) REFERENCES `products` (`idproduct`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `spuathich_ibfk_3` FOREIGN KEY (`idthanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_3` FOREIGN KEY (`mahoadon`) REFERENCES `hoadon` (`mahoadon`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
