-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2022 lúc 06:34 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuchanhbuoi3`
--

DELIMITER $$
--
-- Thủ tục
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `USP_Login` (IN `email_in` VARCHAR(50), IN `password_in` VARCHAR(100))  BEGIN
  select * from user where user.email = email_in and user.password = password_in;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(5) NOT NULL,
  `brand_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Vinamilk'),
(2, 'Nutifood'),
(3, 'Abbott'),
(4, 'Daisy'),
(5, 'Dutch Lady'),
(6, 'Dumex');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Sữa đặc'),
(2, 'Sữa tươi'),
(3, 'Sữa chua'),
(4, 'Sữa bột');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(5) NOT NULL,
  `customer_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(1) NOT NULL DEFAULT 0,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `gender`, `address`, `phone`, `email`) VALUES
(1, 'Mai Hà Trang', 1, '192 Kim Giang, Hoàng Mai, Hà Nội', '0356254458', 'mhtrang@gmail.com'),
(2, 'Nguyễn Hoàng Nam', 0, '104 Nguyễn An Ninh, Hoàng Mai, Hà Nội', '0987654321', 'nhnam@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(5) NOT NULL,
  `brand_id` int(5) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `element` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefit` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `image`, `category_id`, `brand_id`, `weight`, `price`, `element`, `benefit`) VALUES
(1, 'Daisy Vani', 'sua-bot-abbott-grow-g-power-3-900g_2.jpg', 4, 4, 450, 41000, '- Sữa nguyên kem hương vị vani với hàm lượng canxi và ion cao\r<br>- Khoáng chất, taurine, vitamin D1, sắt, đạm...', '- Chống loãng xương giúp xương chắc khỏe.\r<br>- Phòng ngừa sự thiếu máu của trẻ, gia tăng hoạt động hệ tuần hoàn máu và não, giúp trẻ phát triển hoàn thiện.\r<br>- Giúp hệ xương phát triển mạnh nhất.'),
(2, 'Daisy Không Đường', 'medium_ose1348625534.jpg', 4, 4, 900, 79000, 'Khoáng chất, taurine, vitamin D1, sắt, đạm...', '- Chống loãng xương, giúp xương chắc khỏe.\r<br><br>- Phòng ngừa sự thiếu máu của trẻ, gia tăng hoạt động hệ tuần hoàn máu và não, giúp trẻ phát triển hoàn thiện.'),
(3, 'Sữa đặc có đường Ông Thọ', 'sua-dac-co-duong-ong-tho-do-lon-380g-201911071548119343.jpg', 1, 1, 380, 30500, 'Sữa đặc Ông Thọ với vị thơm ngon, sánh đặc, là bí quyết giúp mẹ có những món ăn ngon, chăm sóc cho cả gia đình. Sữa đặc có đường Ông Thọ trắng nhãn vàng lon 380g có độ đạm cao, pha sữa có độ thơm và đậm vị sữa, rất hợp làm sữa chua', 'Ông Thọ là thương hiệu sữa đặc nổi tiếng rất được yêu thích tại Việt Nam và thuộc công ty Cổ phần sữa Vinamilk. Sữa đặc Ông Thọ được sản xuất trên dây chuyền hiện đại, tiêu chuẩn và đảm bảo vệ sinh an toàn thực phẩm. Đây là một thương hiệu vô cùng quen thuộc với người Việt Nam ta.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('admin@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
