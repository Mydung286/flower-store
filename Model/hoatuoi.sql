-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 19, 2024 lúc 06:55 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hoatuoi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcomment`, `idkh`, `idhanghoa`, `content`, `luotthich`) VALUES
(1, 2, 2, 'đẹp ', 1),
(2, 2, 2, 'đẹp', 0),
(3, 2, 2, 'đẹp', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idmau` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int(11) NOT NULL,
  `hinh` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idmau`, `idsize`, `dongia`, `soluongton`, `hinh`, `giamgia`) VALUES
(1, 1, 1, 3600000, 12, '1.jpg', 2800000),
(2, 1, 2, 4500000, 24, '2.jpg', 0),
(2, 3, 2, 1400000, 25, '19.jpg', 0),
(3, 3, 3, 1600000, 28, '3.jpg', 1200000),
(4, 2, 1, 2800000, 23, '4.jpg', 0),
(5, 1, 2, 7200000, 12, '5.jpg', 6800000),
(6, 3, 2, 5400000, 21, '6.jpg', 0),
(7, 2, 2, 1600000, 23, '7.jpg', 1200000),
(8, 3, 2, 1500000, 23, '8.jpg', 0),
(9, 1, 2, 3300000, 12, '9.jpg', 0),
(10, 5, 2, 1900000, 15, '10.jpg', 0),
(11, 2, 3, 4500000, 26, '11.jpg', 3200000),
(12, 6, 2, 5500000, 26, '12.jpg\r\n', 0),
(13, 7, 2, 2000000, 23, '13.jpg', 0),
(14, 7, 3, 2500000, 25, '14.jpg', 1800000),
(15, 1, 3, 3100000, 23, '15.jpg', 0),
(16, 2, 2, 1500000, 18, '16.jpg', 0),
(17, 2, 3, 2600000, 13, '17.jpg\r\n', 0),
(18, 2, 3, 2600000, 22, '18.jpg', 1800000),
(19, 2, 2, 1400000, 2, '19.jpg', 0),
(20, 3, 2, 8000000, 23, '20.jpg', 0),
(21, 2, 3, 4350000, 0, '21.jpg', 0),
(22, 3, 2, 3200000, 0, '22.jpg', 0),
(23, 2, 3, 4800000, 23, '23.jpg', 0),
(24, 2, 2, 2500000, 23, '24.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `thanhtien`, `tinhtrang`) VALUES
(1, 2, 2, 2800000, 0),
(1, 5, 2, 2800000, 0),
(2, 3, 2, 1200000, 0),
(2, 6, 3, 1750000, 0),
(4, 22, 3, 9600000, 0),
(5, 22, 3, 9600000, 0),
(6, 22, 3, 9600000, 0),
(7, 22, 4, 12800000, 0),
(8, 22, 4, 12800000, 0),
(9, 22, 4, 12800000, 0),
(10, 22, 4, 12800000, 0),
(11, 22, 4, 12800000, 0),
(12, 22, 4, 12800000, 0),
(13, 22, 6, 19200000, 0),
(15, 22, 6, 19200000, 0),
(16, 22, 6, 19200000, 0),
(17, 21, 1, 4350000, 0),
(18, 21, 1, 4350000, 0),
(20, 21, 1, 4350000, 0),
(21, 21, 1, 4350000, 0),
(22, 21, 1, 4350000, 0),
(23, 21, 1, 4350000, 0),
(24, 21, 1, 4350000, 0),
(25, 21, 1, 4350000, 0),
(26, 21, 1, 4350000, 0),
(27, 21, 1, 4350000, 0),
(27, 22, 1, 3200000, 0),
(28, 21, 1, 4350000, 0),
(28, 22, 1, 3200000, 0),
(29, 21, 1, 4350000, 0),
(29, 22, 1, 3200000, 0),
(30, 14, 1, 2500000, 0),
(30, 21, 1, 4350000, 0),
(30, 22, 1, 3200000, 0),
(31, 14, 1, 2500000, 0),
(31, 18, 1, 2600000, 0),
(31, 21, 1, 4350000, 0),
(31, 22, 1, 3200000, 0),
(32, 14, 1, 2500000, 0),
(32, 18, 1, 2600000, 0),
(32, 21, 1, 4350000, 0),
(32, 22, 1, 3200000, 0),
(33, 14, 1, 2500000, 0),
(33, 18, 1, 2600000, 0),
(33, 21, 1, 4350000, 0),
(33, 22, 1, 3200000, 0),
(34, 14, 1, 2500000, 0),
(34, 18, 1, 2600000, 0),
(34, 21, 1, 4350000, 0),
(34, 22, 1, 3200000, 0),
(35, 14, 1, 2500000, 0),
(35, 18, 1, 2600000, 0),
(35, 21, 1, 4350000, 0),
(35, 22, 1, 3200000, 0),
(36, 18, 1, 2600000, 0),
(37, 18, 1, 2600000, 0),
(38, 22, 1, 3200000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `soluotxem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `dacbiet`, `ngaylap`, `mota`, `soluotxem`) VALUES
(1, 'SUNSHINE', 8, b'0', '2023-12-01', 'Màu sắc ấm áp như những tia nắng ban mai. Chế tác tỉ mỉ, tinh xảo đến từng đường vân hoa mang vẻ đẹp chân thực vượt thời gian!', 0),
(2, 'CLOUDY', 8, b'0', '2023-12-12', 'Màu sắc ngọt ngào mang lại cảm giác bồng bềnh như những áng mây, làm bừng sáng căn nhà của quý khách với nguồn sức sống mới.', 0),
(3, 'SOURIRE', 6, b'0', '2023-11-07', 'Sourire - tác phẩm hoa với màu sắc ấm áp rạng rỡ, tựa như nụ cười của người phụ nữ thân yêu khi nhận được đoá hoa này.', 0),
(4, 'JOIE FLOWER', 6, b'0', '2023-12-03', 'JOIE sẽ là đóa hoa mang lại niềm vui cho bất cứ ai nhận được bởi màu sắc ấm áp và tươi sáng. Sự nở rộ của hoa hồng ecuador cùng những nét hoa mềm mại cân bằng bởi calla lily mang đến cho tổng thể thiết kế một sự cân bằng nhưng không kém phần bùng nổ.', 0),
(5, 'AMITY FLOWER', 4, b'0', '2023-12-01', 'Lẵng hoa mang sắc hồng dịu dàng cùng thiết kế hoa bay bổng mang thông điệp của niềm vui.', 0),
(6, 'ALMA', 4, b'0', '2023-12-19', 'Hộp hoa với sự chuyển màu uyển chuyển của màu hồng và tím với tuyệt phẩm hoa hồng Ecuador và cúc mẫu đơn khiến tác phẩm hoa mang vẻ đẹp như tranh vẽ.', 0),
(7, 'PINK VALENTINE', 9, b'0', '2023-12-01', 'Hộp hoa lụa trái thiết kế dáng trái tim ấn tượng bắt mắt cho Valentine thêm ngọt ngào.', 0),
(8, 'MACARONE', 9, b'0', '2023-11-07', 'Hộp hoa mang thông điệp tình yêu cùng món quà ngọt ngào lãng mạn.', 0),
(9, 'MEMORY', 2, b'0', '2023-12-03', 'Bó hoa cưới gồm hoa: Hồng môn, Ánh trăng, Virbenum, Lá trầu bà xẻ, Lá lưỡi hổ, Coral, Hạt tiêu, Cẩm chướng hồng.', 0),
(10, 'WHITE MERLIN', 2, b'0', '2023-12-12', 'Đoá hoa mang sắc trắng tinh khôi tựa như tình yêu thuần khiết và lời cầu chúc một hạnh phúc hoàn hảo.', 0),
(11, 'WARM HEART', 3, b'0', '2023-12-26', 'Hộp hoa với sắc đỏ quyến rũ và ấm áp của hồng Ecuador mang thông điệp của tình yêu.', 0),
(12, 'POP BLUE', 3, b'0', '2023-12-26', 'Màu xanh Blue từ những đoá hồng sẽ khiến những người phụ nữ độc lập, mạnh mẽ cũng phải xiêu lòng', 0),
(13, 'COLORFUL CAKE', 5, b'0', '2023-12-12', 'Hoa khô nhập khẩu cao cấp từ Liti giữ nguyên nét mềm mại và đa dạng về loại hoa, màu sắc, rất thích hợp làm quà tặng với ý nghĩa “bền lâu”:\r\n- Hoa khô rất bền, có thể trưng được tới 12 tháng\r\n- Hoa giữ được màu sắc và hương thơm dễ chịu, thư giãn\r\n- Hoa khô thân thiện với môi trường', 0),
(14, 'PURPLE FOREST', 5, b'0', '2023-12-11', 'Hoa khô nhập khẩu cao cấp từ Liti giữ nguyên nét mềm mại và đa dạng về loại hoa, màu sắc, rất thích hợp làm quà tặng với ý nghĩa “bền lâu”:\r\n- Hoa khô rất bền, có thể trưng được tới 12 tháng\r\n- Hoa giữ được màu sắc và hương thơm dễ chịu, thư giãn\r\n- Hoa khô thân thiện với môi trường', 0),
(15, 'CARWYN', 1, b'0', '2023-11-20', 'Carwyn là lẵng hoa thiết kế được yêu thích nhiều tại Liti Florist, một chút phá cách, một chút mộng mơ. Tất cả là một sự hoàn hảo', 0),
(16, 'RED WHISHES', 1, b'0', '2023-11-07', 'Hộp hoa Gracybag với sắc đỏ và hồng ấm áp, rực rỡ chắc chắn sẽ khiến bất cứ ai nhận được vui vẻ và hạnh phúc.', 0),
(17, 'LOVE GARDEN BOX', 4, b'0', '2023-12-03', 'Hộp hoa Glamour box với màu sắc dịu dàng lãng mạn.\r\nHoa chính: Hoa hồng Ecuador\r\nHoa phụ: Hoa lá phụ nhập khẩu', 0),
(18, 'ARTISTIC BOX', 4, b'0', '2023-12-19', 'Hộp hoa Glamour Box mang màu sắc bay bổng qua\r\nđôi tay nghệ thuật của nhà thiết kế hoa Liti trở nên lãng mạn và tinh tế \r\nHoa chính: Hoa hồng Ecuador\r\nHoa phụ: Hoa lá phụ nhập khẩu', 0),
(19, 'FLORAL BOX', 1, b'0', '2023-12-19', 'Hộp hoa Glamour box nhỏ gọn và tinh tế thích hợp đặt trên bàn làm việc.\r\nHoa chính: Tulip\r\nHoa phụ: Hoa lá phụ nhập khẩu\r\n', 2),
(20, 'AMOUR', 3, b'0', '2024-02-29', 'Bó hoa với tone màu đỏ chocolate giống như hương vị của tình yêu. \r\nLà lựa chọn tuyệt vời cho mùa Valentine này.\r\nHoa chính: Hồng Christa,Calla Lily, Lan Tường, Địa Lan\r\nHoa phụ: Hoa lá phụ nhập khẩu', 0),
(21, 'PASSIONATE FLOWER', 3, b'0', '2023-12-03', 'Với thiết kế kệ nhỏ gọn, kệ hoa \"Delightful Moment\" mang vẻ đẹp tinh tế sang trọng, cùng màu sắc tươi sáng gửi gắm thông điệp của niềm vui. Sản phẩm thích hợp tặng các dịp chúc mừng, khai trương.\r\n', 0),
(22, 'CHARLES', 3, b'0', '2024-02-28', 'Giỏ hoa được thiết kế tựa như một khu vườn mùa xuân cùng dáng hoa bay bổng sẽ mang lại nguồn cảm hứng bất tận mỗi khi nhìn ngắm.\r\n', 0),
(23, 'LOVELY BLUE', 5, b'0', '2024-02-19', 'Giỏ hoa mang sắc xanh tím dịu mát thu hút mọi ánh nhìn sẽ là món quà thật ý nghĩa đến với người đặc biệt.\r\n', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 3, '2023-12-28', 1800000),
(2, 3, '2023-12-20', 1800000),
(3, 4, '2024-03-07', 0),
(4, 4, '2024-03-07', 9600000),
(5, 4, '2024-03-07', 9600000),
(6, 4, '2024-03-07', 9600000),
(7, 4, '2024-03-07', 12800000),
(8, 4, '2024-03-07', 12800000),
(9, 4, '2024-03-07', 12800000),
(10, 4, '2024-03-07', 12800000),
(11, 4, '2024-03-07', 12800000),
(12, 4, '2024-03-07', 12800000),
(13, 4, '2024-03-07', 19200000),
(14, 3, '2023-12-28', 1800000),
(15, 4, '2024-03-07', 19200000),
(16, 4, '2024-03-07', 19200000),
(17, 4, '2024-03-07', 4350000),
(18, 4, '2024-03-07', 4350000),
(19, 3, '2023-12-28', 1800000),
(20, 4, '2024-03-07', 4350000),
(21, 4, '2024-03-07', 4350000),
(22, 4, '2024-03-07', 4350000),
(23, 4, '2024-03-07', 4350000),
(24, 4, '2024-03-07', 4350000),
(25, 4, '2024-03-07', 4350000),
(26, 4, '2024-03-07', 4350000),
(27, 4, '2024-03-07', 7550000),
(28, 4, '2024-03-07', 7550000),
(29, 4, '2024-03-07', 7550000),
(30, 4, '2024-03-07', 10050000),
(31, 4, '2024-03-07', 12650000),
(32, 4, '2024-03-07', 12650000),
(33, 4, '2024-03-07', 12650000),
(34, 4, '2024-03-07', 12650000),
(35, 4, '2024-03-07', 12650000),
(36, 4, '2024-03-07', 2600000),
(37, 4, '2024-03-07', 2600000),
(38, 4, '2024-03-08', 3200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matkhau` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sodienthoai` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `diachi`, `email`, `sodienthoai`) VALUES
(1, 'My Dung', 'dundun', 'dungmy@123\r\n', '20 Tân Thắng, Sơn Kỳ, Tân Phú', 'dungdung1232@gmail.com', '9090789678'),
(2, 'Hoàng Ly', 'lyly', 'ly@286\r\n', '39/8 Nhất Chi Mai, P.14, Q.Tân Bình', 'lyhoang308@gmail.com', '90907896789'),
(3, 'Minh Anh', 'anhanh', 'anh1122', '23 Bàu Cát, P.15, Q.Tân Bình', 'anhminh508@gmail.com', '9090789698'),
(4, 'mỹ dung12', 'dungmy12', 'f5100501b826bb4429d26271506d56b7', 'hcm', 'phamthimydung28612@gmail.com', '0936904438'),
(5, 'huyenle', 'huyenngoc12', 'e46abaf93387e273b8dbb3d7f2a57fff', 'quãng nam', 'huyenlengoc3042@gmail.com', '0965261591');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'Hoa Sinh Nhật', 1),
(2, 'Hoa Cưới', 1),
(3, 'Hoa Khai Trương', 1),
(4, 'Hoa Tình Yêu', 2),
(5, 'Hoa Khô Nhập Khẩu', 2),
(6, 'Hoa Nghệ Thuật ', 2),
(7, 'Hoa Tết', 1),
(8, 'Hoa Lụa', 1),
(9, 'Hoa và Quà ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `idmau` int(11) NOT NULL,
  `mausac` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`idmau`, `mausac`) VALUES
(1, 'Hồng Tím'),
(2, 'Đỏ'),
(3, 'Cam'),
(4, 'Vàng'),
(5, 'Trắng'),
(6, 'Xanh '),
(7, 'Tím');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matkhau` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `diachi`, `username`, `matkhau`) VALUES
(1, 'Nguyễn Khánh Nhi', 'Hồ Chí Minh', 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizehoa`
--

CREATE TABLE `sizehoa` (
  `Idsize` int(11) NOT NULL,
  `size` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sizehoa`
--

INSERT INTO `sizehoa` (`Idsize`, `size`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`,`idmau`,`idsize`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`idmau`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `sizehoa`
--
ALTER TABLE `sizehoa`
  ADD PRIMARY KEY (`Idsize`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
