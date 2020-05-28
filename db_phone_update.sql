-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2020 lúc 09:01 PM
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

CREATE TABLE `admin` (
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

CREATE TABLE `customer` (
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

INSERT INTO `customer` (`id`, `name`, `birth`, `place`, `mobile`, `email`, `idemployee`) VALUES
(7, 'Phạm Ngọc A0', '2001-04-30', 'Thai Thuy -Thai Binh', '0123456785', 'PhamVanA@gmail.com', 6),
(8, 'Pham Van A1', '2002-05-01', 'Hà Nội', '0142563987', 'PhamVanA1@gmail.com', 7),
(9, 'Pham Van A3', '1997-04-21', 'Thái Bình', '0512369874', 'PhamVanA3@gmail.com', 9),
(10, 'Pham Van A5', '2001-04-24', 'Hà Nội', '021453987', 'PhamVanA5@gmail.com', 10),
(11, 'Phạm Quang Thịnh', '1999-04-14', NULL, '0123456789', 'pqthinh0@gmail.com', 7);

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

INSERT INTO `donggop` (`id`, `idthanhvien`, `noidung`, `anh`, `thoigian`) VALUES
(1, 4, 'abc.png', 'test thu thoi', '2020-05-29 01:04:11'),
(2, 1, 'Ảnh không khớp với sản phẩm', '86s-Hong-1.jpg', '2020-05-29 01:13:54'),
(3, 1, 'Không báo lỗi được', 'ảnh.png', '2020-05-29 01:24:53'),
(4, 1, 'TRuy vẫn phần giỏ hàng bị sai', 'ảnh.png', '2020-05-29 01:26:16'),
(6, 1, 'lỗi paste ảnh mới thì mất hết ảnh cũ khác nội dung', 'n', '2020-05-29 01:31:15'),
(7, 1, 'test paste ảnh', 'ảnh.png1', '2020-05-29 01:35:14'),
(8, 1, 'test paste ảnh lần 2', 'ảnh.', '2020-05-29 01:37:51'),
(9, 1, 'test paste ảnh lần 3', 'ảnh.png', '2020-05-29 01:39:51'),
(10, 1, 'test paste ảnh lần 4', 'ảnh1.png', '2020-05-29 01:40:50'),
(11, 1, 'test paste ảnh lần 5', 'ảnh1.png', '2020-05-29 01:41:25'),
(12, 1, 'test paste ảnh lần 6', 'ảnh1.png', '2020-05-29 01:47:44'),
(13, 1, 'test paste ảnh lần 7', 'ảnh1.png', '2020-05-29 01:48:32'),
(14, 1, 'test paste ảnh lần 8', 'ảnh12.png', '2020-05-29 01:49:21'),
(15, 1, 'tesT paste anhr lần 9', 'ảnh123.png', '2020-05-29 01:50:21'),
(16, 1, 'test paste ảnh lần 10', 'ảnh2.png', '2020-05-29 01:52:03');

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
(10, 'A-Vsmart-Joy-34/64', 2, 1),
(11, 'I-Iphone11-64G', 2, 2),
(20, 'I-Iphone11-64G', 5, 1),
(21, 'I-Iphone11-64G', 4, 1),
(22, 'Vsmart-Active-34/64', 4, 1),
(23, ' A-Bphone-B86s', 4, 8),
(24, 'A-Vsmart-Joy-32/32', 1, 1),
(25, 'I-Iphone11-64G', 1, 1),
(26, 'Vsmart-Star-3', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
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

INSERT INTO `hoadon` (`mahoadon`, `idcustomer`, `idproduct`, `ngayban`, `soluong`, `trangthai`) VALUES
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
(24, 11, 'iPad-Mini-5-7.9-Wi-Fi/64GB', '2020-05-12 16:14:27', 1, NULL);

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

CREATE TABLE `image` (
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
-- Cấu trúc bảng cho bảng `infodetail`
--

CREATE TABLE `infodetail` (
  `idinfo` varchar(50) NOT NULL,
  `memory` varchar(200) DEFAULT NULL,
  `hedieuhanh` varchar(100) DEFAULT NULL,
  `chip` text DEFAULT NULL,
  `cameratruoc` text DEFAULT NULL,
  `camerasau` text DEFAULT NULL,
  `thuonghieu` varchar(100) DEFAULT NULL,
  `ketnoi` text DEFAULT NULL,
  `manhinh` text DEFAULT NULL,
  `thietke` text DEFAULT NULL,
  `thongtinpin` text DEFAULT NULL,
  `tienich` text DEFAULT NULL,
  `thongtinkhac` text DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `upload` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `infodetail`
--

INSERT INTO `infodetail` (`idinfo`, `memory`, `hedieuhanh`, `chip`, `cameratruoc`, `camerasau`, `thuonghieu`, `ketnoi`, `manhinh`, `thietke`, `thongtinpin`, `tienich`, `thongtinkhac`, `image1`, `image2`, `upload`) VALUES
('A-Bphone-B86', ' Ram: Bộ nhớ trong Thẻ nhớ ngoài 4GB LPDDR4X\r\nBộ nhớ trong :64 G\r\nThẻ nhớ ngoài: MicroSD, hỗ trợ tới 256 GB', 'Hệ điều hành: BOS 8.6 (Android 9)', 'Chipset: Qualcomm Snapdragon 675, 8 nhân: 2 nhân 2.0GHz Kryo Gold, 6 nhân 1.7GHz Kryo Silver\r\nChip đồ họa (GPU): Qualcomm® Adreno™ 612 GPU', 'Độ phân giải : 13mp\nVideo call : hình ảnh sắc nét.\nThông tin khác', 'Camera AI - Tiên phong nhiếp ảnh điện toán. Camera chính PDAF Dual pixel 2 cảm biến trong 1 ống kính (12Mp cho ảnh + 12Mp cho lấy nét), khẩu độ F/1.8 lấy nét cực nhanh và camera phụ hỗ trợ xóa phông chuyên nghiệp. Trí tuệ nhân tạo AI đem đến bức ảnh chân thực, sắc nét. Camera selfie góc rộng, chế độ làm đẹp tự nhiên', 'Bkav', 'Mạng di động: 3G; 4G\r\nSIM: 2 sim 2 sóng, eSIM\r\nWifi: Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi hotspot, Wi-Fi direct\r\nGPS: GPS A-GPS, GLONASS\r\nBlutooth : Bluetooth 5.0, BLE, A2DP, ANT+\r\nCổng kết nối :USB 3.1 Type-C Hỗ trợ xuất tín hiệu DP - Display Port chất lượng cao (vd: xuất hình ảnh, âm thanh sắc nét lên tivi)', '6.1\", công nghệ COF Tràn đáy, Full HD+, rất nhạy & sáng\r\nKính cường lực Gorilla Glass 5', 'Màu sắc: Xanh Sapphire, Xanh Lục Bảo, Tím Ngọc, Đen Thạch Anh Kích thước 166.25 x 75.62 x 8.83 (mm) Trọng lượng 183 g ', 'Dung lượng pin:5000Ap\nThông tin pin:\nCông nghệ pin: Quick Charge 3.0', 'Bảo mật nâng cao:\nTính năng đặc biệt:\nGhi âm:\nRadio:\nXem phim:\nNghe nhạc:', 'Thời điểm ra mắt : 5/2020', 'image/bphone86.jpg', 'image/bphone86.jpg', '2020-05-12 18:34:51'),
('A-Vsmart-Joy-3', 'Ram :2/3/4/6 GB                                                              Bộ nhớ trong :32/64 GB                                                                Bộ nhớ còn lại :khoảng 20GB/50GB     ', 'Hệ điều hành:android 9.0', 'Chipset: Snapdaragon 720G 8nm                                                                    Tốc đọ cpu :                                                                    Chip đồ họa	:', 'Độ phân giải : 13mp                                                                    Video call : hình ảnh sắc nét.                                                                    Thông tin khác	                                                                    ', 'Độ phân giải :Chính 48mp phụ 5mp                                                        Quay phim: Quay phim FullHD 1080p@30fps, Quay phim: FullHD 1080p@60fps, Quay phim FullHD: 1080p@120fps                                                        Đèn Flash :có                                                         Chụp ảnh nâng cao : Chụp ảnh xóa phông...                                                        ', 'Vsmart', 'Mạng di động :SIM Wifi:GPS:Blutooth :Cổng kết nối :Jack tai nghe :Kết nối khác:', 'Công nghệ màn hình :ips lcd                                                                Độ phân giải : full hd +(10802340 px)                                                                Màn hình rộng : 6.3\'                                                                Mặt kính cảm ừng :Kính cường lực …', 'Trọng lượng:                                                         Màn hình : Tràn viền / Tai thỏ', 'Dung lượng pin:4000Ap                                                        Thông tin pin:                                                        Công nghệ pin:                                                        ', 'Bảo  mật nâng cao:                                                            Tính năng đặc biệt:                                                            Ghi âm:                                                            Radio:                                                            Xem phim:                                                            Nghe nhạc:                                                            ', 'Thời điểm ra mắt : 1/1/2020', 'http://localhost/csdl-phpsql-v1/create_infordetails.php', 'http://localhost/csdl-phpsql-v1/create_infordetails.php', '2020-04-01 05:24:22'),
('Vsmart-Active-3', 'RAM 4 GB/ 6 GB ROM 64 GB', 'Hệ điều hành VOS 2.5 (Android 9.0)', 'Chipset 8 nhân 2.0 GHz', '16MP f/2.2 Popup Hiệu ứng làm đẹp AR Sticker AI Beauty', '48MP f/1.7 - Camera chụp đêm 8MP f/2.2 - Camera góc rộng 2MP f/2.4 - Camera xóa phông Bộ lọc màu Google Photos Chế độ chụp thiếu sáng ', 'Vsmart', 'Cổng USB: USB Type-C Khe cắm: 2 Nano SIM / 1 SIM + 1 MicroSD Wi-Fi: 802.11 a/b/g/n/ac, Dual band Bluetooth 4.2 Mạng di động: TDD: Band 38/40/41 FDD: Band 1/2/3/5/7/8/20 WCDMA: Band 1/2/5/8 GSM: Band 2/3/5/8', 'Màn hình AMOLED tràn viền Kích thước 6.39 inchs Độ phân giải FHD+ (1080 x 2340 ) Tỷ lệ màn hình 19.5:9 ', 'Màu sắc: Xanh Sapphire, Xanh Lục Bảo, Tím Ngọc, Đen Thạch Anh Kích thước 166.25 x 75.62 x 8.83 (mm) Trọng lượng 183 g ', 'Dung lượng pin 4020 mAh ', 'Bảo  mật nâng cao: Tính năng đặc biệt:Ghi âm:  Radio:Xem phim:Nghe nhạc:', 'Thời điểm ra mắt : 1/1/2020', 'https://vsmart.net/eu-vi/media/products/hot/active-3.png', ' https://vsmart.net/eu-vi/media/products/hot/active-3.png', '2020-04-27 00:00:00'),
('Vsmart-Joy-2-plus', 'Bộ nhớ trong: 32 GB RAM: 2/ 3 GB Bộ nhớ khả dụng: 24 GB Dung lượng trống cho người dùng có thể thay đổi tùy theo phiên bản Firmware được cài đặt. Bộ nhớ còn lại được phân bổ cho hệ điều hành, bộ nhớ đ', 'Hệ điều hành Android™ 9.0 Pie™', 'CPU Qualcomm® Snapdragon™ 450 8 tối đa 1.8 GHz,14nm Chip đồ họa Qualcomm® Adreno™ 506 lên đến 650 MHz ', '8 MP, ƒ/2.2 Chế độ xoá phông (camera đơn) Độ phân giải video 1080p@30fps Tự động làm đẹp AR stickers ', 'Camera kép 13 MP ƒ/2.0 + 5 MP ƒ/2.4 Đèn Flash Lấy nét tự động Độ phân giải video 1080p@60fps Chế độ xoá phông Face Beauty HDR tự động Low Light Shot / Low Light HDR Chế độ thủ công (tốc độ màn trập, tiêu cự, ISO) AR stickers', 'Vsmart', 'USB Type-C OTG SIM nano kép Giắc cắm tai nghe TRRS 3,5 mm (CTIA) Khe cắm MicroSD™, tối đa 128 GB. ', 'Kích thước 6.2” Độ phân giải HD+ 720 x 1520 – 271 ppi Tỉ lệ màn hình 19:9 Công nghệ LCD IPS màn hình giọt nước 2.5D, Cảm ứng đa điểm (10 điểm điện dung) ', 'Kích thước: 157 x 76 x 8.7 (mm) Trọng lượng 176g ', '4500 mAh, Quick Charge 3.0', 'Cảm biến tiệm cận Gia tốc kế La bàn điện tử Con quay hồi chuyển Cảm biến độ sáng <br>Tai nghe - Âm thanh HD Loa 2 micro Đài FM Khả năng kết nối TDD: Band 38/40/41 FDD: Band 1/2/3/5/7/8/20 WCDMA: Band 1/2/5/8 GSM: Band 2/3 Wi-Fi 802.11 b/g/n 2,4 GHz VoLTE Bluetooth® 4.2 GPS / Glonass ', 'Thời điểm ra mắt : 20/12/2020', 'https://cdn.fptshop.com.vn/Uploads/Originals/2019/9/3/637030993554536947_vsmart-joy-2pl-do-1.png', '', '2020-04-27 00:00:00'),
('Vsmart-Live', 'Bộ nhớ trong: 64 GB RAM: 4/ 6 GB Bộ nhớ khả dụng: 52.9 GB Dung lượng trống cho người dùng có thể thay đổi tùy theo phiên bản Firmware được cài đặt. Bộ nhớ còn lại được phân bổ cho hệ điều hành, bộ nhớ', 'Hệ điều hành Android™ 9.0 Pie™', 'CPU Qualcomm® Snapdragon™ 675 8 nhân lên đến 2.0 GHz, 11nm Chip đồ họa Qualcomm® Adreno™ 612', '20 MP Chế độ xoá phông (camera đơn) Khẩu độ ƒ/2.2 Flash Độ phân giải video 1080p@30fps Face Beauty Chỉ dẫn selfie AR stickers ', 'Triple Camera 48 MP ƒ/1.7 + 5 MP ƒ/1.9 + 8 MP ƒ/2.2 Đèn Flash Tự động lấy nét theo pha kép PDAF<br> Độ phân giải video 4K@30fps Chuyển động chậm (720p@120fps) Chụp góc rộng Chuyển động nhanh Chế độ xoá phông (camera kép) Face Beauty HDR tự động Chế độ thủ công (tốc độ màn trập, tiêu cự, ISO, EV,White Balance) AR stickers', 'Vsmart', 'USB Type-C OTG SIM nano kép Giắc cắm tai nghe TRRS 3,5 mm (CTIA) ', 'Kích thước 6.2” Độ phân giải FHD+ 1080 x 2232 – 403ppi Tỉ lệ màn hình 18:6:9 Công nghệ AMOLED LTPS Full display 2.5D, Cảm ứng điện dung (10 điểm), In-cell AF coating ', 'Kích thước: 152 x 74.4 x 8.3 (mm) Trọng lượng 170g ', '4000 mAh, Quick Charge™ 3.0 ', 'VinID Account, Chế độ đơn giản, Cử chỉ điều hướng toàn màn hình, Điều khiển nhạc nâng cao, Chạm mở máy nhanh, Quay phim màn hình, Dịch thuật, Tin nhắn khẩn cấp, Ghi âm cuộc gọi, Ứng dụng kép <br>Cảm biến tiệm cận Gia tốc kế La bàn điện tử Con quay hồi chuyển Cảm biến độ sáng Cảm biến vân tay dưới màn hình ', 'Thời điểm ra mắt : 14/2/2020', 'https://vsmart.net/eu-vi/media/products/hot/live.png', 'https://vsmart.net/eu-vi/media/products/hot/live.png', '2020-04-07 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productline`
--

CREATE TABLE `productline` (
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

CREATE TABLE `products` (
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

INSERT INTO `products` (`idproduct`, `nameproduct`, `idproductline`, `idinfo`, `operator`, `ram`, `chip`, `camera`, `battery`, `quantity`, `buyprice`, `sellprice`, `brand`, `screen`, `image`, `upload`) VALUES
(' A-Bphone-B86s', ' Bphone B86s', 'sm-android', ' A-Bphone-B86', 'BOS 8.6 (Android 9)', '4/128GB', 'Chipset: Qualcomm Snapdragon 675, 8 nhân: 2 nhân 2.0GHz Kryo Gold, 6 nhân 1.7GHz Kryo Silver<br>Chip đồ họa (GPU): Qualcomm® Adreno™ 612 GPU', 'Camera AI - Tiên phong nhiếp ảnh điện toán. Camera chính PDAF Dual pixel 2 cảm biến trong 1 ống kính (12Mp cho ảnh + 12Mp cho lấy nét), khẩu độ F/1.8 lấy nét cực nhanh và camera phụ hỗ trợ xóa phông', '3000mAh', 50, 8000000, 9990000, 'Bkav', '6.1 inches, công nghệ COF<br>Tràn đáy, Full HD+, rất nhạy & sáng', '86s-Hong-1.jpg', '2020-05-12 17:16:45'),
('A-Bphone-B86', ' Bphone B86', 'sm-android', ' A-Bphone-B86', 'BOS 8.6 (Android 9)', '4/64GB', 'Chipset: Qualcomm Snapdragon 675, 8 nhân: 2 nhân 2.0GHz Kryo Gold, 6 nhân 1.7GHz Kryo Silver<br>Chip đồ họa (GPU): Qualcomm® Adreno™ 612 GPU', 'Camera AI - Tiên phong nhiếp ảnh điện toán. Camera chính PDAF Dual pixel 2 cảm biến trong 1 ống kính (12Mp cho ảnh + 12Mp cho lấy nét), khẩu độ F/1.8 lấy nét cực nhanh và camera phụ hỗ trợ xóa phông', '3000mAh', 50, 7000000, 8990000, 'Bkav', '6.1 inches, công nghệ COF<br>Tràn đáy, Full HD+, rất nhạy & sáng', 'bphone-b86s-thumb-tam-600x600.jpg', '2020-05-12 17:24:56'),
('A-Bphone3-pro', 'Bphone 3 Pro', 'sm-android', 'A-Bphone-B86', 'Android 9.0', '4/64G', 'Snapdragon 720G 8nm', 'Camera sau :16Mp Camera trươc : 5Mp', '5000mAp.h', 10, 5900000, 6900000, 'Bkav', '5.9 inchs', 'bphone-3-pro.jpg', '2020-05-18 11:46:25'),
('A-Vsmart-Joy-32/32', 'Vsmart Joy3 2/32 GB', 'sm-android', 'A-Vsmart-Joy-3', 'Android 9.0', '2/32G', 'Snapdragon 720G 8nm', 'Camera sau :16Mp Camera trươc : 5Mp', '5000mAp.h', 12, 1690000, 2190000, 'Vsmart', '5.9 inchs', 'vsmart-joy-3-2gb-tim-600x600-600x600.jpg', '2020-04-27 07:47:41'),
('A-Vsmart-Joy-33/32', 'Vsmart Joy3', 'sm-android', 'A-Vsmart-Joy-3', 'Android 9.0', '3/32G', 'Snapdragon 720G 8nm', 'Camera sau :16Mp Camera trươc : 5Mp', '5000mAp.h', 1000, 2900000, 3500000, 'Vsmart', '5.9 inchs', 'vsmart-joy-3-2gb-tim-600x600-600x600.jpg', '2020-04-27 07:47:41'),
('A-Vsmart-Joy-34/64', 'Vsmart Joy3', 'sm-android', 'A-Vsmart-Joy-3', 'Android 9.0', '4/64G', 'Snapdragon 720G 8nm', 'Camera sau :16Mp Camera trươc : 5Mp', '5000mAp.h', 999, 2900000, 3900000, 'Vsmart', '5.9 inchs', 'vsmart-joy-3-4gb-den-600x600-600x600.jpg', '2020-04-27 07:47:41'),
('I-Iphone11-64G', 'Iphone11 64GB', 'sm-iPhone', 'mt-I-iPhone11-64G', 'iOS 13', '4/64G', 'Apple A13 Bionic 6 nhân', 'Camera sau: Chính 12 MP & Phụ 12 MP  Camera trước:12 MP;', '3500mAp.h có sạc nhanh', 100, 19000000, 21990000, 'iPhone', 'IPS LCD, 6.1', 'iPhone11-pro.jpg', '2020-04-27 07:47:41'),
('iPad-Mini-5-7.9-Wi-Fi/64GB', 'iPad Mini 5 7.9 Wifi 64GB', 'ipad-apple', 'iPad-Mini-5', ' iOS 12', '3/64GB', ' Hexa-core', 'Camera sau :8Mp Camera trươc : 7Mp', ' ', 14, 10000000, 10990000, 'Apple', ' 7.9 inchs, 2048 x 1536 Pixels', 'ipad-mini-5-gold-1.png', '2020-04-27 10:56:30'),
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
('Vsmart-Active-34/64', 'Vsmart Active 3 4/64 GB', 'sm-android', 'Vsmart-Active-3', 'VOS 2.5 (Android 9.0)', '4/64G', 'Chipset 8 nhân 2.0 GHz ', 'Camera trước: 16MP f/2.2 Popup Hiệu ứng làm đẹp AR Sticker AI Beauty Camera sau: 48MP f/1.7 - Camera chụp đêm 8MP f/2.2 - Camera góc rộng 2MP f/2.4 - Camera xóa phông', '4020 mAh', 20, 2590000, 3490000, 'Vsmart', '6.39 inchs ', 'vsmart-active-3-600x600-600x600.jpg', '2020-04-27 07:47:41'),
('Vsmart-Active-36/64', 'Vsmart Acive3 6/64Gb', 'sm-android', 'Vsmart-Active-3', 'VOS 2.5 (Android 9.0)', '6/64G', 'Chipset 8 nhân 2.0 GHz', 'Camera trước: 16MP f/2.2 Popup Hiệu ứng làm đẹp AR Sticker AI Beauty Camera sau: 48MP f/1.7 - Camera chụp đêm 8MP f/2.2 - Camera góc rộng 2MP f/2.4 - Camera xóa phông', '4020 mAh', 10, 30000000, 3790000, 'Vsmart', '6.39 inchs', 'vsmart-active-3-6gb-emerald-green-600x600-600x600.jpg', '2020-04-27 07:47:41'),
('Vsmart-BEE', 'Vsmart JBEE', 'sm-android', 'Vsmart-BEE', 'Android 8.1 Go Edition', '1/16G', ' CPU : MTK6739, 4, 1.3Ghz <br> GPU : PowerVR GE8100 ', ' Camera trước : 5.0 MP <br> Camera sau : 8.0 MP ', '2500 mAh', 9, 500000, 990000, 'Vsmart', '5.45 inchs, HD +, 720 x 1440 Pixels', 'vsmart-bee-blue-600x600.jpg', '2020-04-27 08:17:42'),
('Vsmart-BEE-3', 'Vsmart BEE3', 'sm-android', 'Vsmart-BEE-3', 'Android 9.0 (Pie)', '2/16G', ' CPU : MediaTek MT6739WW, 4, 1.5Ghz <br> GPU : PowerVR GE8100 ', ' Camera trước : 5.0 MP <br> Camera sau : 8.0 MP, f2.0 ', '3000mAh', 10, 900000, 1390000, 'Vsmart', ' 6.0 inches, HD+, 1440 x 720 Pixel', 'vsmart-bee-3-white-600x600-600x600.jpg', '2020-04-27 08:21:21'),
('Vsmart-Joy-2-plus2/32', 'Vsmart Joy2 plus', 'sm-android', 'Vsmart-Joy-2-plus', 'Android 9.0', '2/32G', 'CPU Qualcomm® Snapdragon™ 450 8 tối đa 1.8 GHz,14nm Chip đồ họa Qualcomm® Adreno™ 506 lên đến 650 MHz ', 'Camera kép 13 MP ƒ/2.0 + 5 MP ƒ/2.4 Đèn Flash Lấy nét tự động Độ phân giải video 1080p@60fps', '4500 mAh', 10, 1100000, 1990000, 'Vsmart', 'Kích thước 6.2” Độ phân giải HD+ 720 x 1520 – 271 ppi', 'vsmart-joy-2-plus-xanh-1.png', '2020-04-27 07:47:41'),
('Vsmart-Joy-2-plus3/32', 'Vsmart Joy2 plus', 'sm-android', 'Vsmart-Joy-2-plus', 'Android 9.0', '3/32G', 'CPU Qualcomm® Snapdragon™ 450 8 tối đa 1.8 GHz,14nm Chip đồ họa Qualcomm® Adreno™ 506 lên đến 650 MHz ', 'Camera kép 13 MP ƒ/2.0 + 5 MP ƒ/2.4 Đèn Flash Lấy nét tự động Độ phân giải video 1080p@60fps', '4500 mAh', 10, 1300000, 2290000, 'Vsmart', 'Kích thước 6.2” Độ phân giải HD+ 720 x 1520 – 271 ppi', 'vsmart-joy-2-plus-xanh-1.png', '2020-04-27 07:47:41'),
('Vsmart-Live', 'Vsmart Live', 'sm-android', 'Vsmart-Live', 'Android 9.0', '4/64G', 'Qualcomm® Snapdragon™ 675 8 nhân lên đến 2.0 GHz, 11nm', 'Triple Camera 48 MP ƒ/1.7 + 5 MP ƒ/1.9 + 8 MP ƒ/2.2', '4000 mAh', 10, 2888000, 3490000, 'Vsmart', '6.2 inchs', 'vsmart-live-blue-600x600.jpg', '2020-04-27 07:47:41'),
('Vsmart-Star-2/16', 'Vsmart Star', 'sm-android', 'Vsmart-Star', 'Android 9.0', '2/16 GB', ' CPU: Qualcomm® Snapdragon™ 215, 4, 1.3Ghz<br> GPU : Qualcomm® Adreno™ 308 ', ' Cmaera sau: 8 MP f/2.0 + 2 MP f/2.4 <br>Camera trước : 5Mp', '3000mAh', 10, 990000, 1290000, 'Vsmart', ' 5.7 inchs, HD +, 720 x 1520 Pixels', 'vsmart-star-coral-600x600.jpg', '2020-04-27 08:07:03'),
('Vsmart-Star-3', 'Vsmart Star3', 'sm-android', 'Vsmart-Star3', 'VOS (Based on Android 9.0)', '2/16G', 'CPU: Snapdragon 215, 4, 1.3GHz<br> GPU : Adreno™ 308 ', ' Camera trước : 8 MP, F/2.0 <br> Camera sau : 8MP AF f/1.9 + 5MP f/2.2 ', '3520 mAh', 13, 1100000, 1790000, 'Vsmart', ' 6.1 inches, HD +, 720 x 1560 Pixels', 'vsmart-star-3-xanh-600x600-600x600.jpg', '2020-04-27 08:10:19');

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
(14, 'A-Bphone-B86', 4, '2020-05-23 09:01:30');

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
(2, 'pham quang thu', '2000-05-11', 'thu@gmail.com', '213434rew', '120', '2020-05-18 07:49:38', NULL),
(3, 'pq thinh1', '1998-05-14', 'thinh_test@gmail.com', '0866564502', '120', '2020-05-18 07:49:38', NULL),
(4, 'admin', '2002-05-12', 'admin@gmail.com', '0123456789', 'admin', '2020-05-21 12:13:53', 'admin.png'),
(5, 'Trần Mạnh Đức', '2000-05-19', 'tmanhduc@gmail.com', '0213151426', '123', '2020-05-19 23:02:39', 'user.png');

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
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `idcustomer` (`idcustomer`),
  ADD KEY `idproduct` (`idproduct`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Chỉ mục cho bảng `infodetail`
--
ALTER TABLE `infodetail`
  ADD PRIMARY KEY (`idinfo`);

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `donggop`
--
ALTER TABLE `donggop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `idemployee` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgiohang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
-- Các ràng buộc cho bảng `infodetail`
--
ALTER TABLE `infodetail`
  ADD CONSTRAINT `infodetail_ibfk_1` FOREIGN KEY (`idinfo`) REFERENCES `products` (`idinfo`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
