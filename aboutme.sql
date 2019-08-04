-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 04, 2019 lúc 08:28 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `aboutme`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `aboutme`
--

CREATE TABLE `aboutme` (
  `id_aboutme` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_text` text COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `aboutme`
--

INSERT INTO `aboutme` (`id_aboutme`, `name`, `detail_text`, `active`) VALUES
(1, 'Dương Hồng Hà', 'Trần Nguyễn Gia Huy sinh ngày 19/05/2000, được sinh ra trong một gia…', 0),
(7, 'Dương Hồng Hà', 'Tên là Dương Hồng Hà, Sinh ngày 13/6/1997, quê quán Quảng Nam. Hiện tại học trường Bách Khóa Đà Nẵng....', 1),
(8, 'Dương Hồng Hà', 'Họ tên: Dương HỒng Hà, Sinh năm 1997, quê quán Quảng Nam, học ĐH BKĐN', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `advs`
--

CREATE TABLE `advs` (
  `id_advs` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `advs`
--

INSERT INTO `advs` (`id_advs`, `name`, `banner`, `link`) VALUES
(1, 'JavaScript', 'Blnu_images.png', 'http://vinaenter.edu.vn'),
(9, 'SQL Free', 'aSmK_Sql-200.jpg', 'http://vinaenter.edu.vn'),
(10, 'Css Free', 'nZF8_csss_1.jpg', 'ahttp://vinaenter.edu.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cat`
--

CREATE TABLE `cat` (
  `id_cat` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cat`
--

INSERT INTO `cat` (`id_cat`, `name`) VALUES
(2, 'Đào tạo'),
(3, 'Tài liệu'),
(18, 'Công nghệ'),
(19, 'Lập trình'),
(20, 'Sự kiện'),
(21, 'ádasd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_news` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `name`, `content`, `id_news`, `parent_id`, `created_at`, `updated_at`) VALUES
(3, 'con2', 'ádadas', 17, 2, '2019-07-29 04:15:29', '2019-08-01 09:57:17'),
(4, 'cha1', 'ádasd', 17, 0, '2019-08-01 08:30:34', '2019-08-01 09:57:04'),
(5, 'con1', 'zxcxzxz', 17, 4, '2019-08-01 10:08:43', '2019-08-01 10:08:57'),
(120, 'Dương Hồng Hà', 'Hay', 33, 0, '2019-08-02 07:52:57', '2019-08-02 07:52:57'),
(121, 'Hà Dương', 'Không hay', 33, 120, '2019-08-02 07:53:05', '2019-08-02 07:53:05'),
(131, 'Bùi Đức Phú', 'zxc', 32, 0, '2019-08-02 08:14:32', '2019-08-02 08:14:32'),
(132, 'hongha', 'nbb', 32, 0, '2019-08-02 08:14:46', '2019-08-02 08:14:46'),
(133, 'zxc', 'zxc', 33, 0, '2019-08-02 08:20:18', '2019-08-02 08:20:18'),
(134, 'nnn', 'nn', 32, 132, '2019-08-02 08:25:31', '2019-08-02 08:25:31'),
(137, 'mm', 'mm', 33, 133, '2019-08-02 08:56:06', '2019-08-02 08:56:06'),
(138, 'vbv', 'vbv', 33, 120, '2019-08-02 08:56:16', '2019-08-02 08:56:16'),
(141, 'nn', 'nnn', 33, 0, '2019-08-02 08:58:44', '2019-08-02 08:58:44'),
(142, 'mm', 'mmmm', 33, 0, '2019-08-02 09:00:06', '2019-08-02 09:00:06'),
(145, 'Nguyễn Văn A', 'xzczxc', 31, 0, '2019-08-02 09:07:00', '2019-08-02 09:07:00'),
(146, 'zxc', 'zxc', 31, 145, '2019-08-02 09:07:10', '2019-08-02 09:07:10'),
(147, 'Nguyễn Văn b', 'xzczxcád', 31, 0, '2019-08-02 09:07:21', '2019-08-02 09:07:21'),
(148, 'zxcxzc', 'zxcxzc', 31, 147, '2019-08-02 09:07:57', '2019-08-02 09:07:57'),
(149, 'zxczxcyui', 'yuiyuii', 31, 0, '2019-08-02 09:08:56', '2019-08-02 09:08:56'),
(150, 'ôppopop', 'ôppop', 31, 0, '2019-08-02 09:09:47', '2019-08-02 09:09:47'),
(151, 'xcv', 'vxcv', 31, 0, '2019-08-02 09:11:11', '2019-08-02 09:11:11'),
(152, 's', 's', 31, 0, '2019-08-02 09:11:41', '2019-08-02 09:11:41'),
(153, 'sss', 'ss', 31, 152, '2019-08-02 09:12:05', '2019-08-02 09:12:05'),
(154, 'zxc', 'zxc', 31, 0, '2019-08-02 09:16:23', '2019-08-02 09:16:23'),
(155, 'ádsad', 'ad', 33, 142, '2019-08-02 15:48:11', '2019-08-02 15:48:11'),
(156, 'as', 'as', 33, 0, '2019-08-03 08:18:45', '2019-08-03 08:18:45'),
(157, 'a', 'a', 33, 142, '2019-08-03 08:18:58', '2019-08-03 08:18:58'),
(158, 'asd', 'asd', 33, 120, '2019-08-03 08:19:06', '2019-08-03 08:19:06'),
(159, 'Dương Hồng Hà', 'hay', 26, 0, '2019-08-03 08:19:48', '2019-08-03 08:19:48'),
(160, 'Dương Hồng Hà1', 'hay1', 26, 0, '2019-08-03 08:19:54', '2019-08-03 08:19:54'),
(161, 'as', 'as', 26, 160, '2019-08-03 08:19:59', '2019-08-03 08:19:59'),
(162, 'hhhh', 'hhh', 17, 4, '2019-08-04 12:33:05', '2019-08-04 12:33:05'),
(163, 'hhhhtt', 'hhht', 17, 4, '2019-08-04 12:33:11', '2019-08-04 12:33:11'),
(164, 'Dương Hồng Hà', 'dgf', 17, 0, '2019-08-04 12:33:19', '2019-08-04 12:33:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `fullname`, `email`, `address`, `phone`, `content`, `active`) VALUES
(1, 'Dương Hồng Hà', 'duonghongha130619971@gmail.com', 'Quảng Nam', 343032636, 'Report this page', 1),
(6, 'Dương Hồng Hà', 'duonghongha13061997@gmail.com', '385 Hải Phòng', 1643032636, 'Hay', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preview_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_text` text COLLATE utf8_unicode_ci NOT NULL,
  `id_cat` int(11) NOT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `count_number` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  `creared_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_news`, `name`, `preview_text`, `detail_text`, `id_cat`, `picture`, `count_number`, `active`, `creared_at`, `updated_at`) VALUES
(17, 'Lập trình Laravel Free', 'Học lập trình Laravel free với abc', '<p>Học lập tr&igrave;nh Laravel free với abc Học lập tr&igrave;nh Laravel free với abc Học lập tr&igrave;nh Laravel free với abc</p>\r\n\r\n<p>&nbsp;</p>', 19, 'nD4j_Screenshot (145).png', 3, 1, '2019-07-27 04:47:59', '2019-08-04 05:32:56'),
(24, '10 Lý do để học ngôn ngữ lập trình Java và tại sao Java là tốt nhất', 'Java là một ngôn ngữ lập trình phổ biến.', '<p><a href=\"https://techmaster.vn/khoa-hoc/25467/java-can-ban-thuc-hanh\" target=\"_blank\">Java</a>&nbsp;l&agrave; một ng&ocirc;n ngữ lập tr&igrave;nh phổ biến. Điều n&agrave;y được chứng minh thực tế trong suốt 20 năm qua.</p>\r\n\r\n<p>Hai thập kỷ kh&ocirc;ng phải l&agrave; một thời gian ngắn cho bất kỳ một ng&ocirc;n ngữ lập tr&igrave;nh n&agrave;o, v&agrave; Java đ&atilde; khẳng định được sức mạnh từng ng&agrave;y. D&ugrave; c&oacute; những l&uacute;c, Java ph&aacute;t triển chậm lại, nhưng n&oacute; đ&atilde; th&iacute;ch ứng tốt. Trước đ&oacute;, với thay đổi cơ bản về h&igrave;nh thức Enum, Generics, v&agrave; autoboxing trong Java 5, cải thiện hiệu suất với Java 6, v&agrave; việc Google lựa chọn ng&ocirc;n ngữ Java để ph&aacute;t triển ứng dụng Android, Java vẫn giữ vị tr&iacute; l&agrave; ng&ocirc;n ngữ lập tr&igrave;nh ti&ecirc;n phong.</p>\r\n\r\n<p>Nhiều sinh vi&ecirc;n&nbsp;thường hỏi t&ocirc;i rằng&nbsp;&ldquo;Ng&ocirc;n ngữ lập tr&igrave;nh n&agrave;o l&agrave;&nbsp;tốt nhất m&agrave; ch&uacute;ng ta n&ecirc;n t&igrave;m hiểu, t&ocirc;i c&oacute; n&ecirc;n học Java...?&rdquo;. V&acirc;ng, điều đ&oacute; phụ thuộc v&agrave;o định nghĩa ng&ocirc;n ngữ lập tr&igrave;nh tốt nhất của bạn, nếu x&eacute;t về độ&nbsp;phổ biến th&igrave; r&otilde; r&agrave;ng&nbsp;Java vượt trội so&nbsp;với bất cứ ng&ocirc;n ngữ n&agrave;o kh&aacute;c, thậm ch&iacute; cả C,&nbsp;<a href=\"https://vinacode.net/2014/11/26/nganh-phat-trien-phan-mem-the-gioi/\" target=\"_blank\">d&ugrave; C đ&atilde; tồn tại trong gần 41 năm (1972).</a>&nbsp;Nếu x&eacute;t về cơ hội việc l&agrave;m, một lần nữa Java lại ghi điểm với mọi ng&ocirc;n ngữ kh&aacute;c. Bạn c&oacute; thể t&igrave;m thấy v&ocirc; số cơ hội việc l&agrave;m bằng việc học ng&ocirc;n ngữ lập tr&igrave;nh Java, bạn c&oacute; thể ph&aacute;t triển Java cơ bản cho c&aacute;c ứng dụng ph&iacute;a m&aacute;y chủ, c&aacute;c ứng dụng Web v&agrave; c&aacute;c ứng dụng doanh nghiệp, v&agrave; thậm ch&iacute; c&oacute; thể &aacute;p dụng cho việc ph&aacute;t triển ứng dụng di động dựa tr&ecirc;n nền tảng Android. V&igrave; vậy, nếu bạn chưa học ng&ocirc;n ngữ lập tr&igrave;nh&nbsp;<a href=\"https://techmaster.vn/khoa-hoc/25469/c-co-ban-qua-vi-du\" target=\"_blank\">C v&agrave; C++</a>, v&agrave; muốn t&igrave;m hiểu ng&ocirc;n ngữ lập tr&igrave;nh đầu ti&ecirc;n, t&ocirc;i khuy&ecirc;n bạn n&ecirc;n chọn Java. Trong b&agrave;i viết n&agrave;y, t&ocirc;i sẽ chia sẻ những l&yacute;&nbsp;do tại sao bạn n&ecirc;n học lập tr&igrave;nh Java.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; 10 l&yacute; do m&agrave; t&ocirc;i lu&ocirc;n n&oacute;i với bất cứ ai hỏi &yacute; kiến t&ocirc;i về việc học Java, v&agrave; liệu Java l&agrave; ng&ocirc;n ngữ lập tr&igrave;nh tốt nhất ở c&aacute;c kh&iacute;a cạnh cơ hội việc l&agrave;m, ph&aacute;t triển c&aacute;c ứng dụng v&agrave; hỗ trợ cộng đồng.</p>\r\n\r\n<p>Tham khảo kh&oacute;a học&nbsp;<a href=\"https://techmaster.vn/khoa-hoc/25467/java-can-ban-thuc-hanh\" target=\"_blank\">&quot;Java căn bản thực h&agrave;nh&quot;</a>&nbsp;v&agrave;&nbsp;<a href=\"https://techmaster.vn/khoa-hoc/8227/lap-trinh-java-spring\" target=\"_blank\">&quot;Lập tr&igrave;nh Java Spring&quot;</a>&nbsp;tại TechMaster</p>\r\n\r\n<h2>1.&nbsp;Java rất dễ t&igrave;m hiểu</h2>\r\n\r\n<p>Nhiều người sẽ ngạc nhi&ecirc;n khi thấy điều n&agrave;y l&agrave; một trong những l&yacute; do h&agrave;ng đầu để học Java, hoặc coi n&oacute; như l&agrave; ng&ocirc;n ngữ lập tr&igrave;nh tốt nhất, nhưng đ&oacute; l&agrave; sự thật. Nếu bạn học cấp tốc, sẽ rất kh&oacute; để ho&agrave;n th&agrave;nh trong khoảng thời gian ngắn, đ&oacute; l&agrave; v&iacute; dụ xảy ra với hầu hết c&aacute;c dự &aacute;n chuy&ecirc;n nghiệp. Java c&oacute;&nbsp;c&uacute; ph&aacute;p r&otilde; r&agrave;ng&nbsp;với ch&uacute; th&iacute;ch nhỏ đi k&egrave;m, v&iacute; dụ Generics với dấu ngoặc nhọn chứa kiểu dữ liệu l&agrave;m cho việc đọc v&agrave; học chương tr&igrave;nh Java trở n&ecirc;n dễ d&agrave;ng v&agrave; nhanh ch&oacute;ng. Một khi lập tr&igrave;nh vi&ecirc;n đ&atilde; quen thuộc với những r&agrave;o cản ban đầu như c&agrave;i đặt JDK v&agrave; thiết lập PATH v&agrave; hiểu phương thức hoạt động của Classpath th&igrave; họ c&oacute; thể viết chương tr&igrave;nh trong Java rất dễ d&agrave;ng.</p>\r\n\r\n<h2>2.&nbsp;Java l&agrave; một ng&ocirc;n ngữ lập tr&igrave;nh hướng đối tượng</h2>\r\n\r\n<p>Một l&yacute; do kh&aacute;c khiến Java phổ biến bởi v&igrave; n&oacute;&nbsp;l&agrave; một ng&ocirc;n ngữ lập tr&igrave;nh hướng đối tượng. Ph&aacute;t triển OOPS (Object-Oriented Programming System &ndash; hệ thống lập tr&igrave;nh hướng đối tượng) dễ d&agrave;ng hơn nhiều, v&agrave; n&oacute; cũng duy tr&igrave; m&ocirc;-đun hệ thống, linh hoạt v&agrave; mở rộng. Một khi bạn c&oacute; kiến thức về định nghĩa OOPS&nbsp;như sự trừu tượng, đ&oacute;ng g&oacute;i,&nbsp;đa nhiệm v&agrave; thừa kế, bạn c&oacute; thể sử dụng ch&uacute;ng trong Java. Bản th&acirc;n Java l&agrave; hiện th&acirc;n của nhiều phương ph&aacute;p tư duy tốt nhất v&agrave; c&aacute;c mẫu thiết kế trong c&aacute;c thư viện của n&oacute;. Java l&agrave; một trong số &iacute;t ng&ocirc;n ngữ lập tr&igrave;nh đạt tới gần 100% OOPS. Java cũng th&uacute;c đẩy việc sử dụng c&aacute;c nguy&ecirc;n tắc SOLID (Single responsibility, Open-closed, Liskov substitution, Interface segregation and Dependency inversion &ndash; một dạng thiết kế hướng đối tượng) v&agrave; thiết kế hướng đối tượng theo h&igrave;nh thức dự &aacute;n m&atilde; nguồn mở như&nbsp;<a href=\"https://techmaster.vn/khoa-hoc/8227/lap-trinh-java-spring\" target=\"_blank\">Spring</a>, m&agrave; chắc chắn rằng đối tượng phụ thuộc của bạn được quản l&yacute; tốt bằng việc sử dụng nguy&ecirc;n l&yacute; Injection (một l&yacute; thuyết trong thiết kế phần mềm).</p>\r\n\r\n<h2>3.&nbsp;Số lượng h&agrave;m d&ugrave;ng sẵn (API function) của Java hết sức phong ph&uacute;</h2>\r\n\r\n<p>Một l&yacute; do kh&aacute;c mang lại th&agrave;nh c&ocirc;ng lớn cho ng&ocirc;n ngữ lập tr&igrave;nh Java l&agrave; n&oacute; nhiều API. Quan trọng nhất l&agrave; n&oacute; rất dễ nh&igrave;n, bởi v&igrave; n&oacute; xuất hiện c&ugrave;ng với việc c&agrave;i đặt Java. Khi t&ocirc;i bắt đầu lập tr&igrave;nh Java, t&ocirc;i viết m&atilde; cho c&aacute;c Applet v&agrave; thời đ&oacute; Applet l&agrave; một giải ph&aacute;p cho c&aacute;c hiệu ứng hoạt h&igrave;nh tuyệt vời, điều đ&oacute; mang lại sự ngạc nhi&ecirc;n cho những lập tr&igrave;nh vi&ecirc;n mới như ch&uacute;ng t&ocirc;i, những người đang sử dụng m&atilde; nguồn trong Turbo C++. Java cung cấp API cho I/O (giao tiếp dữ liệu), mạng, tiện &iacute;ch, XML, ph&acirc;n t&iacute;ch c&uacute; ph&aacute;p, kết nối cơ sở dữ liệu, v&agrave; gần như tất cả mọi thứ. Những điều c&ograve;n lại được chứa trong c&aacute;c thư viện m&atilde; nguồn mở như Apache, Google Guava v&agrave; một số chương tr&igrave;nh kh&aacute;c.</p>\r\n\r\n<h2>4.&nbsp;C&aacute;c c&ocirc;ng cụ ph&aacute;t triển mạnh mẽ như Eclipse, Netbeans</h2>\r\n\r\n<p>C&oacute; thể bạn kh&ocirc;ng tin, nhưng Eclipse v&agrave; Netbeans đ&atilde; đ&oacute;ng vai tr&ograve; rất lớn trong việc l&agrave;m cho Java trở th&agrave;nh một trong những ng&ocirc;n ngữ lập tr&igrave;nh tốt nhất. Viết m&atilde; trong IDE l&agrave; niềm vui, đặc biệt nếu bạn đ&atilde; từng viết m&atilde; trong hệ điều h&agrave;nh DOS Editor hoặc Notepad. Ch&uacute;ng kh&ocirc;ng chỉ gi&uacute;p ho&agrave;n th&agrave;nh m&atilde; m&agrave; c&ograve;n cung cấp khả năng sửa lỗi mạnh mẽ, điều đ&oacute; l&agrave; cần thiết trong m&ocirc;i trường lập tr&igrave;nh thực tế. M&ocirc;i trường ph&aacute;t triển t&iacute;ch hợp (IDE) gi&uacute;p cho việc ph&aacute;t triển Java dễ d&agrave;ng hơn, nhanh v&agrave; thuận tiện hơn. T&igrave;m kiếm, tổ chức lại m&atilde; v&agrave; đọc m&atilde; bằng IDE. Ngo&agrave;i IDE, nền tảng Java cũng c&oacute; một số c&ocirc;ng cụ kh&aacute;c như Maven v&agrave; ANT để dịch v&agrave; đ&oacute;ng g&oacute;i ứng dụng Java, dịch ngược m&atilde;, JConsole, Visual VM để gi&aacute;m s&aacute;t bộ nhớ Heap&hellip;</p>\r\n\r\n<h2>5.&nbsp;Bộ sưu tập thư viện m&atilde; nguồn mở phong ph&uacute;</h2>\r\n\r\n<p>Thư viện m&atilde; nguồn mở đảm bảo rằng Java c&oacute; thể được sử dụng ở khắp mọi nơi. Apache, Google, v&agrave; c&aacute;c tổ chức kh&aacute;c đ&atilde; đ&oacute;ng g&oacute;p rất nhiều thư viện lớn, gi&uacute;p Java ph&aacute;t triển dễ d&agrave;ng hơn, nhanh hơn v&agrave; tiết kiệm chi ph&iacute;. C&oacute; những cấu tr&uacute;c như Spring, Struts, Maven đảm bảo sự ph&aacute;t triển Java theo phương ph&aacute;p x&acirc;y dựng phần mềm tốt nhất, th&uacute;c đẩy sử dụng c&aacute;c mẫu thiết kế v&agrave; hỗ trợ lập tr&igrave;nh vi&ecirc;n Java ho&agrave;n th&agrave;nh c&ocirc;ng việc. T&ocirc;i lu&ocirc;n lu&ocirc;n khuy&ecirc;n bạn n&ecirc;n t&igrave;m kiếm một chức năng cần viết bằng Google trước khi viết m&atilde; ri&ecirc;ng của bạn. Đ&oacute; l&agrave; cơ hội tốt bởi v&igrave; n&oacute; phần nhiều đ&atilde; được viết, kiểm tra v&agrave; c&oacute; sẵn để sử dụng.</p>\r\n\r\n<h2>6.&nbsp;Hỗ trợ cộng đồng tuyệt vời</h2>\r\n\r\n<p>Cộng đồng l&agrave; sức mạnh lớn nhất của ng&ocirc;n ngữ lập tr&igrave;nh Java v&agrave; nền tảng n&agrave;y. Một ng&ocirc;n ngữ d&ugrave; tốt thế n&agrave;o đi nữa cũng sẽ kh&ocirc;ng thể tồn tại nếu kh&ocirc;ng c&oacute; cộng đồng hỗ trợ, gi&uacute;p đỡ v&agrave; chia sẻ&nbsp;kiến thức. Java đ&atilde; rất may mắn, n&oacute; c&oacute; rất nhiều diễn đ&agrave;n hoạt động,&nbsp;<a href=\"https://vinacode.net/2014/04/15/stackoverflow-va-stackexchange/\" target=\"_blank\">StackOverflow</a>, tổ chức m&atilde; nguồn mở v&agrave; một số nh&oacute;m người sử dụng Java gi&uacute;p đỡ lẫn nhau. Cộng đồng c&aacute;c lập tr&igrave;nh vi&ecirc;n Java c&oacute; th&acirc;m ni&ecirc;n&nbsp;v&agrave; thậm ch&iacute; cả c&aacute;c chuy&ecirc;n gia sẽ&nbsp;gi&uacute;p đỡ&nbsp;người mới bắt đầu. Java thực sự th&uacute;c đẩy việc thu nhận kiến thức v&agrave; đ&oacute;ng g&oacute;p hỗ trợ lại cộng đồng. Rất nhiều lập tr&igrave;nh vi&ecirc;n, những người sử dụng m&atilde; nguồn mở, tham gia v&agrave;o x&acirc;y dựng, n&acirc;ng cấp m&atilde; mở, kiểm thử,&hellip; C&aacute;c chuy&ecirc;n gia tư vấn miễn ph&iacute; tại nhiều diễn đ&agrave;n Java v&agrave; StackOverflow. Điều tuyệt vời n&agrave;y đ&atilde; mang lại tự tin cho những lập tr&igrave;nh vi&ecirc;n Java.</p>\r\n\r\n<h2>7.&nbsp;Java l&agrave; miễn ph&iacute;</h2>\r\n\r\n<p>Ai cũng&nbsp;th&iacute;ch những thứ miễn ph&iacute; phải kh&ocirc;ng n&agrave;o, c&ograve;n bạn? V&igrave; vậy, nếu một lập tr&igrave;nh vi&ecirc;n muốn học một ng&ocirc;n ngữ lập tr&igrave;nh, hoặc một tổ chức muốn sử dụng một c&ocirc;ng nghệ, chi ph&iacute; l&agrave; một yếu tố quan trọng. V&igrave; Java l&agrave; miễn ph&iacute; ngay từ đầu, tức l&agrave; bạn kh&ocirc;ng cần phải trả bất cứ khoản chi ph&iacute; n&agrave;o&nbsp;để tạo ra c&aacute;c ứng dụng Java. Ch&iacute;nh điều n&agrave;y cũng gi&uacute;p Java trở th&agrave;nh kỹ năng th&ocirc;ng dụng trong cộng đồng lập tr&igrave;nh vi&ecirc;n, v&agrave; c&aacute;c tổ chức lớn. Sự dồi d&agrave;o lập tr&igrave;nh vi&ecirc;n Java l&agrave; một lợi thế lớn, l&agrave;m cho c&aacute;c tổ chức dễ d&agrave;ng lựa chọn Java cho chiến lược ph&aacute;t triển.</p>\r\n\r\n<h2>8.&nbsp;Hỗ trợ t&agrave;i liệu xuất sắc &ndash; Javadocs</h2>\r\n\r\n<p>Lần đầu ti&ecirc;n thấy Javadoc, t&ocirc;i đ&atilde; rất ngạc nhi&ecirc;n. Đ&oacute; l&agrave; t&agrave;i liệu chứa nhiều th&ocirc;ng tin về Java API. T&ocirc;i nghĩ rằng nếu&nbsp;kh&ocirc;ng c&oacute; t&agrave;i liệu Javadoc th&igrave;&nbsp;Java sẽ kh&ocirc;ng được phổ biến, v&agrave; đ&oacute; l&agrave; một trong những l&yacute; do ch&iacute;nh để t&ocirc;i nghĩ rằng Java l&agrave; ng&ocirc;n ngữ lập tr&igrave;nh tốt nhất. Kh&ocirc;ng phải ai cũng c&oacute; thời gian v&agrave; &yacute; định xem x&eacute;t m&atilde; để t&igrave;m hiểu phương ph&aacute;p l&agrave;m hoặc l&agrave;m thế n&agrave;o để sử dụng một lớp. Javadoc l&agrave;m cho việc học dễ d&agrave;ng v&agrave; cung cấp một t&agrave;i liệu tham khảo tuyệt vời trong khi viết m&atilde; Java. Với sự xuất hiện của IDE, bạn thậm ch&iacute; kh&ocirc;ng cần phải nh&igrave;n Javadoc một c&aacute;ch r&otilde; r&agrave;ng trong tr&igrave;nh duyệt m&agrave; bạn đ&atilde; c&oacute; thể nhận được tất cả th&ocirc;ng tin trong cửa sổ IDE của bạn.</p>\r\n\r\n<h2>9.&nbsp;Java l&agrave; nền tảng độc lập</h2>\r\n\r\n<p>Trong năm 1990, đ&acirc;y l&agrave; l&yacute; do ch&iacute;nh khiến Java phổ biến. &Yacute; tưởng về nền tảng độc lập l&agrave; rất tuyệt, v&agrave; slogan của Java &ldquo;viết một lần chạy mọi nơi&rdquo; đ&atilde; đủ sức l&ocirc;i k&eacute;o để thu h&uacute;t rất nhiều sự ph&aacute;t triển mới trong Java. Điều n&agrave;y vẫn c&ograve;n l&agrave; một trong những l&yacute; do để Java l&agrave; ng&ocirc;n ngữ lập tr&igrave;nh tốt nhất, hầu hết c&aacute;c ứng dụng Java được ph&aacute;t triển trong m&ocirc;i trường Windows v&agrave; chạy tr&ecirc;n nền tảng&nbsp;<a href=\"https://vinacode.net/2015/01/23/lap-trinh-vien-cha-de-he-dieu-hanh-unix/\" target=\"_blank\">UNIX.</a></p>\r\n\r\n<h2>10.&nbsp;Java c&oacute; mặt&nbsp;ở khắp mọi nơi</h2>\r\n\r\n<p>V&acirc;ng, Java c&oacute; ở khắp mọi nơi, tr&ecirc;n m&aacute;y t&iacute;nh để b&agrave;n, tr&ecirc;n điện thoại di động, tr&ecirc;n thẻ, gần như ở khắp mọi nơi v&agrave; lập tr&igrave;nh vi&ecirc;n Java cũng vậy. T&ocirc;i nghĩ rằng số lượng lập tr&igrave;nh vi&ecirc;n Java vượt xa lập tr&igrave;nh vi&ecirc;n bất kỳ ng&ocirc;n ngữ lập tr&igrave;nh chuy&ecirc;n nghiệp kh&aacute;c. D&ugrave; kh&ocirc;ng c&oacute; bất kỳ dữ liệu để l&agrave;m s&aacute;ng tỏ nhận định ấy, kinh nghiệm đ&atilde; chỉ cho t&ocirc;i điều đ&oacute;. Số lượng lớn lập tr&igrave;nh vi&ecirc;n Java hiện nay cũng l&agrave; một l&yacute; do m&agrave; c&aacute;c tổ chức muốn chọn Java cho những ph&aacute;t triển mới hơn bất kỳ ng&ocirc;n ngữ lập tr&igrave;nh kh&aacute;c.</p>\r\n\r\n<p>C&oacute; thể n&oacute;i rằng, lập tr&igrave;nh l&agrave; lĩnh vực rất rộng v&agrave; nếu bạn nh&igrave;n v&agrave;o C v&agrave; UNIX, ch&uacute;ng&nbsp;vẫn c&ograve;n sống v&agrave; ng&agrave;y c&agrave;ng&nbsp;mạnh mẽ hơn, đủ để sống th&ecirc;m 20 năm nữa, Java cũng kh&ocirc;ng hề thua k&eacute;m. C&oacute; nhiều cuộc thảo luận về lập tr&igrave;nh chức năng (functional programming), Scala v&agrave; ng&ocirc;n ngữ JVM kh&aacute;c, nhưng ch&uacute;ng cần phải đi một chặng đường d&agrave;i để tương th&iacute;ch với cộng đồng, c&aacute;c nguồn lực v&agrave; phổ biến của Java. Rất tiếc lập tr&igrave;nh hướng đối tượng cũng l&agrave; một trong những m&ocirc; h&igrave;nh lập tr&igrave;nh tốt nhất, v&agrave; miễn l&agrave; n&oacute; tồn tại th&igrave;&nbsp;Java sẽ vẫn c&ograve;n&nbsp;vững chắc.</p>', 19, '6lzy_Screenshot (134).png', 1, 1, '2019-07-28 10:06:48', '2019-08-03 04:15:26'),
(25, '12 tech group dành cho Developer ít nhưng mà chất', '12 tech group dành cho Developer ít nhưng mà chất....', '<p>Bạn c&oacute; phải l&agrave; Software Developer chất? Nếu phải, ITviec c&oacute; tin tốt v&agrave; tin xấu cho bạn. Tin xấu l&agrave;: chưa bao giờ sự cạnh tranh trong ng&agrave;nh IT lại mạnh mẽ như thời đại n&agrave;y. Tin tốt l&agrave;: chưa c&oacute; thời kỳ n&agrave;o trong lịch sử m&agrave; bạn c&oacute; thể ph&aacute;t triển dev skills của m&igrave;nh dễ d&agrave;ng như hiện tại, nhờ v&agrave;o v&ocirc; số nguồn t&agrave;i nguy&ecirc;n online v&agrave; offline. ITviec t&igrave;m thấy nhiều tech group tại Việt Nam bạn c&oacute; thể tham gia để học hỏi v&agrave; ph&aacute;t triển dev skills của m&igrave;nh. Để gi&uacute;p bạn dễ d&agrave;ng hơn trong việc chọn lựa giữa h&agrave;ng chục tech group tại Việt Nam, ITviec tổng hợp 12 group cool nhất m&agrave; developer &Iacute;t Nhưng M&agrave; Chất như bạn n&ecirc;n tham gia ngay h&ocirc;m nay. 1. Ruby Việt Nam Đ&acirc;y l&agrave; nh&oacute;m cho c&aacute;c bạn quan t&acirc;m về ng&ocirc;n ngữ Ruby v&agrave; c&aacute;c c&ocirc;ng nghệ dựa tr&ecirc;n nền tảng n&agrave;y, v&iacute; dụ Ruby On Rails, tr&ecirc;n khắp Việt Nam. Ti&ecirc;u ch&iacute; của Ruby Việt Nam l&agrave; tạo ra một s&acirc;n chơi l&agrave;nh mạnh cho c&aacute;c hội vi&ecirc;n, nơi kh&ocirc;ng c&oacute; sự ph&acirc;n biệt v&agrave; đ&aacute;nh gi&aacute;, mọi người đều l&agrave; thầy v&agrave; l&agrave; tr&ograve;, với một mục đ&iacute;ch học hỏi v&agrave; giao lưu. Ruby Việt Nam đ&atilde; c&oacute; Meetup h&agrave;ng th&aacute;ng tại Tp.HCM v&agrave; H&agrave; Nội. 600_413222512 2. Saigon.rb Saigon.rb được th&agrave;nh lập bởi Sebastian K., người đ&atilde; c&oacute; hơn 5 năm kinh nghiệm về Ruby. Saigon.rb l&agrave; nơi d&agrave;nh cho những người y&ecirc;u th&iacute;ch Ruby on Rails tại Tp.HCM. Tất cả developer từ beginner cho đến advanced level đều được hoan ngh&ecirc;nh trao đổi th&ocirc;ng tin, chia sẻ kinh nghiệm tại đ&acirc;y. Saigon.rb bắt đầu c&oacute; Meetup 2-3 lần/ th&aacute;ng. 3. JavaScript Ho Chi Minh City Đ&acirc;y l&agrave; nh&oacute;m d&agrave;nh cho c&aacute;c bạn quan t&acirc;m về Javascript, Ember.js, Angular.js, Node.js, Vert.x v&agrave; y&ecirc;u th&iacute;ch c&ocirc;ng nghệ cutting-edge web tại Tp.HCM. Tại JavaScript Ho Chi Minh City, developer c&oacute; thể học hỏi, chia sẻ kinh nghiệm v&agrave; c&oacute; thể trở th&agrave;nh master về JavaScript cũng như front-end development. JavaScript Ho Chi Minh City bắt đầu c&oacute; Meetup 2 lần/ th&aacute;ng. IMG_1302 4. Xhackers Vietnam Xhackers Vietnam l&agrave; cộng đồng developer c&ugrave;ng nghi&ecirc;n cứu, sử dụng v&agrave; chia sẻ kiến thức, kinh nghiệm về Xamarin &ndash; c&ocirc;ng cụ hữu &iacute;ch gi&uacute;p bạn viết những ứng dụng tr&ecirc;n iOS, Android v&agrave; Windows Phone từ Visual Studio sử dụng C#. Xhackers Vietnam đ&atilde; tổ chức th&agrave;nh c&ocirc;ng 3 buổi Meetup với h&agrave;ng chục developer tham gia tại Tp.HCM v&agrave; H&agrave; Nội. Bạn c&oacute; thể theo d&otilde;i trang Meetup của Xhackers Vietnam để c&oacute; cơ hội tham gia c&aacute;c buổi Meetup tiếp theo. 5. HTML5Rocks@Ho Chi Minh Đ&acirc;y l&agrave; nơi tập hợp c&aacute;c developer, idea generators, project manager&hellip; c&oacute; niềm đam m&ecirc; với HTML5. HTML5Rocks@Ho Chi Minh được xem l&agrave; điểm đến để học hỏi, trao đổi kinh nghiệm, training d&agrave;nh cho kh&ocirc;ng chỉ beginner m&agrave; cả advanced level. HTML5Rocks@Ho Chi Minh đ&atilde; tổ chức th&agrave;nh c&ocirc;ng 8 buổi Meetup, v&agrave; sẽ tổ chức Meetup tiếp theo v&agrave;o ng&agrave;y 3/11 tại Tp.HCM. Đăng k&yacute; tham gia ngay nếu như bạn cũng c&oacute; niềm đam m&ecirc; với HTML5. 6. Docker-Saigon Docker-Saigon được th&agrave;nh lập bởi Sebastian K., v&agrave; hoạt động chủ yếu tại Tp.HCM. Docker-Saigon ra đời với mục ti&ecirc;u l&agrave; nơi gặp gỡ của c&aacute;c developer sử dụng Docker &ndash; một open platform cho c&aacute;c developer v&agrave; sysadmin để x&acirc;y dựng v&agrave; chạy c&aacute;c ứng dụng ph&acirc;n t&aacute;n. Bạn c&oacute; thể tham gia group Docker-Saigon tại Meetup v&agrave; đăng k&yacute; tham gia c&aacute;c buổi Meetup tiếp theo tại Tp.HCM. school-working@2x 7. Saigon PHP Developer Group Mọi thứ bạn quan t&acirc;m về PHP đều c&oacute; thể được thảo luận, chia sẻ v&agrave; nhận nhiều &yacute; kiến đ&oacute;ng g&oacute;p từ cộng đồng Saigon PHP Developer Group. Ngo&agrave;i ra, Saigon PHP Developer Group c&ograve;n c&oacute; nhiều buổi Meetup để bạn trao đổi trực tiếp với những thi&ecirc;n t&agrave;i PHP kh&aacute;c tại Tp.HCM. Bạn c&oacute; thể tham gia group Saigon PHP Developer Group tại Meetup. 8. Izwebz Group Izwebz Group được x&acirc;y dựng nhằm mục địch giao lưu, trao đổi, trau dồi kiến thức về lập tr&igrave;nh v&agrave; thiết kế web. Izwebz Group l&agrave; một cộng đồng online d&agrave;nh cho những bạn c&oacute; niềm đam m&ecirc; đối với web, v&igrave; vậy nơi đ&acirc;y lu&ocirc;n lu&ocirc;n ch&agrave;o đ&oacute;n c&aacute;c developer tr&ecirc;n khắp Việt Nam đến để giao lưu, học hỏi kinh nghiệm lập tr&igrave;nh, thiết kế web. 9. CIO Việt Nam CIO Việt Nam l&agrave; tổ chức gắn kết c&aacute;c developer t&agrave;i năng để c&ugrave;ng ph&aacute;t triển cộng đồng tech guy Việt Nam. CIO Việt Nam x&acirc;y dựng cộng đồng IT Việt Nam vững mạnh với ti&ecirc;u ch&iacute; chia sẻ, trao đổi kinh nghiệm v&agrave; th&uacute;c đẩy hiệu quả c&aacute;c giải ph&aacute;p C&ocirc;ng nghệ Th&ocirc;ng tin để ph&aacute;t triển kinh doanh. CIO Việt Nam thường xuy&ecirc;n tổ chức c&aacute;c buổi talk show offline tại cả Tp.HCM v&agrave; H&agrave; Nội. 600_350596062 10. Coder &ldquo;ch&acirc;n ch&iacute;nh&rdquo; Với 269 th&agrave;nh vi&ecirc;n, Coder &ldquo;ch&acirc;n ch&iacute;nh&rdquo; l&agrave; nh&oacute;m d&agrave;nh cho c&aacute;c bạn y&ecirc;u th&iacute;ch coding chia sẻ th&ocirc;ng tin c&ocirc;ng nghệ tại Việt Nam. Đ&uacute;ng như t&ecirc;n gọi, đ&acirc;y cũng l&agrave; group m&agrave; bạn c&oacute; thể học hỏi kinh nghiệm thực tế từ c&aacute;c coder ch&acirc;n ch&iacute;nh, giải đ&aacute;p c&aacute;c thắc mắc li&ecirc;n quan đến code, t&igrave;m kiếm việc l&agrave;m trong ng&agrave;nh IT ở Tp.HCM v&agrave; H&agrave; Nội.</p>', 20, 'JY3f_Screenshot (145).png', 5, 1, '2019-07-28 10:07:34', '2019-08-03 04:17:43'),
(26, 'Bên trong lò luyện lập trình viên tại Trung Quốc', 'Giới trẻ Trung Quốc đổ xô tham dự các khóa học lập trình iOS, Android với giấc mơ đổi đời. Tuy nhiên, mọi chuyện không đơn giản.', '<p>Trong một lớp học nhỏ thắp s&aacute;ng bằng đ&egrave;n huỳnh quang ph&iacute;a t&acirc;y bắc th&agrave;nh phố Bắc Kinh, người đ&agrave;n &ocirc;ng c&oacute; t&ecirc;n Shrek đang l&agrave;m c&ocirc;ng việc được xem l&agrave; g&oacute;p phần đưa nền kinh tế Trung Quốc tiến v&agrave;o thế kỷ 21. &Ocirc;ng l&agrave; người s&aacute;ng lập ra một hệ thống trung t&acirc;m dạy lập tr&igrave;nh cho h&agrave;ng ng&agrave;n bạn trẻ Trung Quốc. Tại đ&acirc;y, &ocirc;ng dạy lập tr&igrave;nh ứng dụng Apple Watch, Android v&agrave; bảo tr&igrave; dữ liệu Oracle - những kỹ năng l&atilde;nh đạo Trung Quốc tin sẽ gi&uacute;p đất nước h&oacute;a rồng. Đứng ngo&agrave;i bộ m&aacute;y gi&aacute;o dục ch&iacute;nh thức, c&aacute;c lớp học của Shrek kh&ocirc;ng chịu g&aacute;nh nặng của những gi&aacute;o tr&igrave;nh tẻ nhạt. Mục đ&iacute;ch của &ocirc;ng rất đơn giản: dạy cho sinh vi&ecirc;n những kỹ năng cần thiết để t&igrave;m kiếm c&ocirc;ng việc trong thời đại b&ugrave;ng nổ c&ocirc;ng nghệ cao tại Trung Quốc. Ben trong lo luyen lap trinh vien tai Trung Quoc hinh anh 1 Học vi&ecirc;n tham dự kh&oacute;a đ&agrave;o tạo lập tr&igrave;nh của Shrek tại trụ sở của Uplooking. Người tham gia lớp học chủ yếu l&agrave; sinh vi&ecirc;n, như Wang Ruyi, 22 tuổi đến từ tỉnh ngh&egrave;o nhất Trung Quốc l&agrave; Qu&yacute; Ch&acirc;u. Wang lớn l&ecirc;n trong một ng&ocirc;i l&agrave;ng v&ugrave;ng s&acirc;u - nơi con tr&acirc;u l&agrave; t&agrave;i sản lớn nhất của mỗi gia đ&igrave;nh. Cha của Wang bỏ học từ năm lớp 3 c&ograve;n mẹ anh chưa từng đi học. Sau khi sở hữu bằng cử nh&acirc;n khoa học m&aacute;y t&iacute;nh từ một trường đại học địa phương, Wang ghi danh học một kh&oacute;a lập tr&igrave;nh iOS của Shrek tại trung t&acirc;m Uplooking. &ldquo;Điều g&igrave; sẽ xảy ra nếu ch&uacute;ng t&ocirc;i viết những d&ograve;ng code thay đổi thế giới. N&oacute; kh&ocirc;ng dễ nhưng ho&agrave;n to&agrave;n c&oacute; thể. Điều đ&oacute; thu h&uacute;t t&ocirc;i v&agrave;o ng&agrave;nh c&ocirc;ng nghiệp n&agrave;y&rdquo;, Wang chia sẻ. Sự thu h&uacute;t của ng&agrave;nh đ&agrave;o tạo mới mẻ đ&egrave; bẹp danh tiếng của hệ thống gi&aacute;o dục c&ocirc;ng Trung Quốc. Ben trong lo luyen lap trinh vien tai Trung Quoc hinh anh 2 Shrek hay c&ograve;n gọi Qii Xiaoye - người s&aacute;ng lập trung t&acirc;m đ&agrave;o tạo Uplooking v&agrave; WYZC. Học sinh Trung Quốc d&agrave;nh to&agrave;n bộ thời gian trung học để chuẩn bị cho kỳ thi vất vả nhất - thi đại học. Việc chuẩn bị cho kỳ thi n&agrave;y cướp đi của họ cả cuộc sống x&atilde; hội v&agrave; niềm đam m&ecirc; học tập. &ldquo;Bạn bị xay trong 12 năm&rdquo;, Wang chia sẻ tr&ecirc;n WorldPost. &ldquo;Nhiều người v&agrave;o đại học v&agrave; nếu kh&ocirc;ng t&igrave;m ra mục ti&ecirc;u thực sự, họ bắt đầu bu&ocirc;ng thả. C&aacute;c ch&agrave;ng trai d&agrave;nh cả ng&agrave;y để chơi game c&ograve;n c&aacute;c c&ocirc; g&aacute;i th&igrave; trang điểm v&agrave; dạo phố&rdquo;. Wang trốn học phần lớn qu&atilde;ng thời gian n&agrave;y để đi chơi v&agrave; l&agrave;m th&ecirc;m. Anh nhận tấm bằng cử nh&acirc;n khoa học m&aacute;y t&iacute;nh v&agrave; rất &iacute;t kỹ năng thực tế. Anh cho biết, kh&ocirc;ng một ai tại tỉnh Qu&yacute; Ch&acirc;u c&oacute; thể dạy anh về iOS. Do đ&oacute;, anh đến Bắc Kinh v&agrave; đăng k&yacute; học tại Uplooking. Wang ngồi l&igrave; cả ng&agrave;y ở lớp học, đ&ocirc;i khi viết code từ nửa đ&ecirc;m đến s&aacute;ng. Đề t&agrave;i tốt nghiệp của anh l&agrave; viết một ứng dụng đọc tin tức qu&acirc;n sự. Ngồi cạnh Wang tại lớp l&agrave; Li Feifei - cựu điều dưỡng vi&ecirc;n, người muốn t&igrave;m kiếm cơ hội đổi đời. Li l&agrave; nữ sinh duy nhất của lớp học. &ldquo;Lập tr&igrave;nh vi&ecirc;n l&agrave; một nghề th&uacute; vị. Họ c&oacute; thể thu về v&agrave;i trăm hoặc v&agrave;i ngh&igrave;n USD/th&aacute;ng d&ugrave; trước đ&oacute; &iacute;t l&acirc;u, họ sống bằng từng đồng xu lẻ&rdquo;. Đ&oacute; cũng l&agrave; suy nghĩ trước đ&acirc;y của Shrek khi &ocirc;ng theo đuổi ng&agrave;nh n&agrave;y. Shrek đăng k&yacute; học một kh&oacute;a lập tr&igrave;nh Linux v&agrave; quản trị hệ thống Microsoft trong thời gian l&agrave;m việc tại một nh&agrave; m&aacute;y &ocirc; t&ocirc; ở Bắc Kinh. &ldquo;Thời gian n&agrave;y, t&ocirc;i học được nhiều hơn so với đ&agrave;o tạo chuy&ecirc;n nghiệp 4 năm đại học&rdquo;. Ben trong lo luyen lap trinh vien tai Trung Quoc hinh anh 3 Lần lượt mở cơ sở giảng dạy lập tr&igrave;nh tr&ecirc;n khắp cả nước, nhận được vốn đầu tư của một trong những người c&oacute; uy t&iacute;n bậc nhất Trung Quốc, Shrek vẫn tỏ ra lo ngại. &Ocirc;ng lo sợ ch&iacute;nh quyền can thiệp, c&ugrave;ng với đ&oacute; l&agrave; sự b&ugrave;ng ph&aacute;t của những cơ sở đ&agrave;o tạo gian lận. &ldquo;Ng&agrave;nh n&agrave;y mang nhiều tiếng xấu. C&oacute; qu&aacute; nhiều những kẻ lừa đảo&rdquo;, Shrek cho hay. Lừa đảo ng&agrave;y c&agrave;ng gia tăng do những lời ph&oacute;ng đại xung quanh cơn sốt c&ocirc;ng nghiệp c&ocirc;ng nghệ cao. Những người tốt nghiệp kh&oacute;a đ&agrave;o tạo lập tr&igrave;nh c&oacute; thể chắp c&aacute;nh ước mơ l&agrave;m startup. Tuy nhi&ecirc;n, c&oacute; một thực tế l&agrave; kh&oacute;a đ&agrave;o tạo k&eacute;o d&agrave;i 3 th&aacute;ng chỉ đủ cho họ c&oacute; những kiến thức cơ bản. 2 th&aacute;ng sau khi kết th&uacute;c kh&oacute;a học iOS, Wang lao v&agrave;o v&ograve;ng xo&aacute;y startup. Anh nhanh ch&oacute;ng t&igrave;m được c&ocirc;ng việc tại một c&ocirc;ng ty khởi nghiệp thậm ch&iacute; chưa c&oacute; t&ecirc;n. Tuy nhi&ecirc;n, sau một th&aacute;ng x&acirc;y dựng mạng x&atilde; hội cho c&aacute;c t&iacute;n đồ anime Nhật Bản, c&ocirc;ng ty của Wang ph&aacute; sản c&ograve;n anh kh&ocirc;ng nhận được đồng lương n&agrave;o. C&ugrave;ng l&uacute;c đ&oacute;, Wang buộc phải về qu&ecirc; để chữa một chứng bệnh c&oacute; li&ecirc;n quan đến &ocirc; nhiễm kh&ocirc;ng kh&iacute; tại Bắc Kinh. Tuy nhi&ecirc;n, thất bại n&agrave;y kh&ocirc;ng l&agrave;m hỏng &yacute; ch&iacute; của anh. Wang cho hay, sau Tết &acirc;m lịch anh sẽ quay trở lại Bắc Kinh hoặc Thượng Hải để t&igrave;m kiếm cơ hội kh&aacute;c.</p>', 20, 'kzs2_Screenshot (134).png', 1, 1, '2019-07-28 10:08:03', '2019-08-04 05:10:10'),
(27, 'Lễ khai giảng ấn tượng của Trường đào tạo CNNT quốc tế Aptech', 'Ngày 5/8, Hệ thống đào tạo lập trình viên quốc tế Aptech đã tổ chức lễ khai giảng khóa 19 và trao bằng tốt nghiệp.', '<p>Ng&agrave;y 5/8, Hệ thống đ&agrave;o tạo lập tr&igrave;nh vi&ecirc;n quốc tế Aptech đ&atilde; tổ chức lễ khai giảng kh&oacute;a 19 v&agrave; trao bằng tốt nghiệp. Kh&aacute;c với những diễn văn khai giảng truyền thống, Hiệu trưởng Chu Tuấn Anh c&oacute; b&agrave;i chia sẻ gi&aacute; trị với c&aacute;c bạn sinh vi&ecirc;n mang t&ecirc;n&ldquo;3 điều sinh vi&ecirc;n ng&agrave;nh CNTT cần chuẩn bị để th&agrave;nh c&ocirc;ng trong cuộc c&aacute;ch mạng c&ocirc;ng nghệ 4.0&rdquo;. Buổi lễ vinh danh những sinh vi&ecirc;n đ&atilde; nỗ lực vượt qua hơn 40 b&agrave;i kiểm tra khắt khe về c&ocirc;ng nghệ ti&ecirc;n tiến của Microsoft, Oracle. Ngo&agrave;i ra, c&aacute;c bạn c&ograve;n ho&agrave;n th&agrave;nh 4 dự &aacute;n c&ugrave;ng chuy&ecirc;n gia nước ngo&agrave;i để tốt nghiệp, được trao bằng lập tr&igrave;nh vi&ecirc;n quốc tế. Đ&acirc;y l&agrave; những nh&acirc;n lực chất lượng g&oacute;p phần gi&uacute;p CNTT của Việt Nam bắt kịp thế giới trong cuộc c&aacute;ch mạng c&ocirc;ng nghệ 4.0. Đỗ H&agrave; Long tốt nghiệp loại giỏi, đang l&agrave; lập tr&igrave;nh vi&ecirc;n tại một tập đo&agrave;n CNTT nước ngo&agrave;i. Em chia sẻ: &ldquo;Quyết định theo học ng&agrave;nh CNTT tại trường mang đến cho m&igrave;nh nhiều cơ hội để c&oacute; được c&ocirc;ng việc y&ecirc;u th&iacute;ch với mức lương tương xứng. Tốt nghiệp chương tr&igrave;nh học tại Aptech l&agrave; bước khởi đầu để m&igrave;nh vững v&agrave;ng tr&ecirc;n con đường x&acirc;y dựng sự nghiệp&rdquo;. Với chương tr&igrave;nh đ&agrave;o tạo CNTT chuẩn quốc tế, sinh vi&ecirc;n tốt nghiệp tại Aptech c&oacute; năng lực chuy&ecirc;n m&ocirc;n đ&aacute;p ứng được y&ecirc;u cầu của doanh nghiệp. C&aacute;c bạn c&oacute; thể đi l&agrave;m ngay khi c&ograve;n theo học tại trường. Nhiều sinh vi&ecirc;n tốt nghiệp hiện giữ những chức vụ quan trọng: gi&aacute;m đốc c&ocirc;ng nghệ, CEO, trưởng dự &aacute;n&hellip; với mức thu nhập cao.</p>', 2, 'SWEe_Screenshot (133).png', 1, 1, '2019-07-28 10:09:06', '2019-08-04 05:31:45'),
(28, 'Lễ khai giảng ấn tượng của Trường đào tạo CNNT quốc tế Aptech', 'Ngày 5/8, Hệ thống đào tạo lập trình viên quốc tế Aptech đã tổ chức lễ khai giảng khóa 19 và trao bằng tốt nghiệp.', '<p>Ng&agrave;y 5/8, Hệ thống đ&agrave;o tạo lập tr&igrave;nh vi&ecirc;n quốc tế Aptech đ&atilde; tổ chức lễ khai giảng kh&oacute;a 19 v&agrave; trao bằng tốt nghiệp. Le khai giang an tuong cua Truong dao tao CNNT quoc te Aptech hinh anh 1 Kh&aacute;c với những diễn văn khai giảng truyền thống, Hiệu trưởng Chu Tuấn Anh c&oacute; b&agrave;i chia sẻ gi&aacute; trị với c&aacute;c bạn sinh vi&ecirc;n mang t&ecirc;n&ldquo;3 điều sinh vi&ecirc;n ng&agrave;nh CNTT cần chuẩn bị để th&agrave;nh c&ocirc;ng trong cuộc c&aacute;ch mạng c&ocirc;ng nghệ 4.0&rdquo;. Le khai giang an tuong cua Truong dao tao CNNT quoc te Aptech hinh anh 2 Buổi lễ vinh danh những sinh vi&ecirc;n đ&atilde; nỗ lực vượt qua hơn 40 b&agrave;i kiểm tra khắt khe về c&ocirc;ng nghệ ti&ecirc;n tiến của Microsoft, Oracle. Ngo&agrave;i ra, c&aacute;c bạn c&ograve;n ho&agrave;n th&agrave;nh 4 dự &aacute;n c&ugrave;ng chuy&ecirc;n gia nước ngo&agrave;i để tốt nghiệp, được trao bằng lập tr&igrave;nh vi&ecirc;n quốc tế. Đ&acirc;y l&agrave; những nh&acirc;n lực chất lượng g&oacute;p phần gi&uacute;p CNTT của Việt Nam bắt kịp thế giới trong cuộc c&aacute;ch mạng c&ocirc;ng nghệ 4.0. Le khai giang an tuong cua Truong dao tao CNNT quoc te Aptech hinh anh 3 Đỗ H&agrave; Long tốt nghiệp loại giỏi, đang l&agrave; lập tr&igrave;nh vi&ecirc;n tại một tập đo&agrave;n CNTT nước ngo&agrave;i. Em chia sẻ: &ldquo;Quyết định theo học ng&agrave;nh CNTT tại trường mang đến cho m&igrave;nh nhiều cơ hội để c&oacute; được c&ocirc;ng việc y&ecirc;u th&iacute;ch với mức lương tương xứng. Tốt nghiệp chương tr&igrave;nh học tại Aptech l&agrave; bước khởi đầu để m&igrave;nh vững v&agrave;ng tr&ecirc;n con đường x&acirc;y dựng sự nghiệp&rdquo;. Le khai giang an tuong cua Truong dao tao CNNT quoc te Aptech hinh anh 4 Với chương tr&igrave;nh đ&agrave;o tạo CNTT chuẩn quốc tế, sinh vi&ecirc;n tốt nghiệp tại Aptech c&oacute; năng lực chuy&ecirc;n m&ocirc;n đ&aacute;p ứng được y&ecirc;u cầu của doanh nghiệp. C&aacute;c bạn c&oacute; thể đi l&agrave;m ngay khi c&ograve;n theo học tại trường. Nhiều sinh vi&ecirc;n tốt nghiệp hiện giữ những chức vụ quan trọng: gi&aacute;m đốc c&ocirc;ng nghệ, CEO, trưởng dự &aacute;n&hellip; với mức thu nhập cao. Le khai giang an tuong cua Truong dao tao CNNT quoc te Aptech hinh anh 5 T&acirc;n sinh vi&ecirc;n nhận qu&agrave; tặng l&agrave; những chiếc ba l&ocirc; Aptech cho năm học mới. Le khai giang an tuong cua Truong dao tao CNNT quoc te Aptech hinh anh 6 M&agrave;u &aacute;o đỏ truyền thống của sinh vi&ecirc;n Aptech c&ugrave;ng th&ocirc;ng điệp &ldquo;Bừng s&aacute;ng kh&aacute;t vọng th&agrave;nh c&ocirc;ng&rdquo; như tiếp th&ecirc;m lửa cho c&aacute;c t&acirc;n sinh vi&ecirc;n kh&oacute;a 19. Năm nay cũng l&agrave; năm đ&aacute;nh dấu 19 năm Aptech c&oacute; mặt tại Việt Nam. Le khai giang an tuong cua Truong dao tao CNNT quoc te Aptech hinh anh 7 Cuối chương tr&igrave;nh, cả hội trường s&ocirc;i động với sự xuất hiện của kh&aacute;ch mời đặc biệt Lộn Xộn band. Le khai giang an tuong cua Truong dao tao CNNT quoc te Aptech hinh anh 8 C&aacute;c bạn trẻ h&agrave;o hứng h&ograve;a m&igrave;nh v&agrave;o kh&ocirc;ng gian &acirc;m nhạc s&ocirc;i động c&ugrave;ng những bản hit l&agrave;m n&ecirc;n t&ecirc;n tuổi của nh&oacute;m nhạc n&agrave;y.</p>', 2, 'Px1G_VNE-Story-1536308770.jpg', 0, 1, '2019-07-28 10:09:39', '2019-07-30 09:42:57'),
(29, '17 tài liệu lập trình Android miễn phí chất nhất', '17 tài liệu lập trình Android miễn phí chất nhất...', '<p>1. Nguyễn Thanh T&ugrave;ng Blog được viết bởi Chief Software Architect của MISA JSC, Nguyễn Thanh T&ugrave;ng. Blog cập nhập những th&ocirc;ng tin mới nhất về ASP.NET. Với vai tr&ograve; chuy&ecirc;n gia c&ocirc;ng nghệ Microsoft, anh c&ograve;n đề cập đến nhiều vấn đề xoay quanh Windows Phone, Windows 8, nền tảng Microsoft Silverlight,&hellip; B&agrave;i viết nổi bật Authentication mobile app sử dụng ASP.NET Membership Provider Ph&aacute;t triển ứng dụng Windows Phone 8.1 c&oacute; g&igrave; mới? Xem th&ecirc;m việc l&agrave;m Software Architect tại ITviec. 2. Huỳnh C&ocirc;ng Th&agrave;nh Huỳnh C&ocirc;ng Th&agrave;nhĐ&uacute;ng với t&ecirc;n gọi, blog asktester.com xuất hiện như diễn đ&agrave;n thảo luận, chia sẻ về ng&agrave;nh Testing. Blogger Huỳnh C&ocirc;ng Th&agrave;nh với nhiều năm kinh nghiệm đưa ra th&ocirc;ng tin cụ thể, chi tiết v&agrave; định hướng c&aacute;c nh&acirc;n tố mới trong lĩnh vực Testing. B&agrave;i viết nổi bật Top 7 Software Testing Forums that You Don&rsquo;t Want to Miss Out How to Become a Software Tester: A Complete Guide Đọc b&agrave;i phỏng vấn của anh Huỳnh C&ocirc;ng Th&agrave;nh về nghề Tester. Xem th&ecirc;m việc l&agrave;m Tester tại ITviec. 3. Nguyễn Văn Hương Phạm Văn HướngBlogger Nguyễn Văn Hương (Java Dev tại AXON Active Việt Nam) chia sẻ thủ thuật linh hoạt xử l&yacute; c&aacute;c vấn đề với Java &ndash; Agile m&agrave; anh từng trải qua. Đồng thời, đ&acirc;y c&ograve;n l&agrave; nơi t&aacute;c giả nghi&ecirc;n cứu nhiều vấn đề trong cuộc sống. B&agrave;i viết nổi bật Strategy Design Pattern How did I start practising BDD? Xem th&ecirc;m việc l&agrave;m Java v&agrave; việc l&agrave;m Agile tại ITviec. 4. Phạm Huy Ho&agrave;ng Phạm Huy Ho&agrave;ng&ldquo;Lập tr&igrave;nh vi&ecirc;n giỏi kh&ocirc;ng phải chỉ biết code&rdquo; ch&iacute;nh l&agrave; phương ch&acirc;m của blogger Phạm Huy Ho&agrave;ng &ndash; Du học sinh ng&agrave;nh Computer Science tại Anh. Kỹ thuật lập tr&igrave;nh chiếm ph&acirc;n nửa nội dung m&agrave; t&aacute;c giả hướng tới, phần c&ograve;n lại l&agrave; kĩ năng mềm như: c&aacute;ch thương lượng lương, sắp xếp thời gian, con đường ph&aacute;t triển sự nghiệp&hellip; B&agrave;i viết nổi bật Series JavaScript sida &ndash; Bind, Call v&agrave; Apply trong JavaScript Chuyện học tiếng Anh &ndash; Phần 3: T&ocirc;i đ&atilde; đạt IELTS 7.5 như thế n&agrave;o Đọc phỏng vấn của ITviec với Phạm Huy Ho&agrave;ng để biết Full-stack Developer l&agrave; g&igrave; v&agrave; c&aacute;ch tạo một Blog IT &ldquo;chất&rdquo;. 5. Trần Duy Thanh T&aacute;c giả l&agrave; Thạc sĩ Trường đại học C&ocirc;ng Nghệ Th&ocirc;ng Tin. Anh lập ra blog với mục đ&iacute;ch hướng dẫn học vi&ecirc;n lập tr&igrave;nh Android, Windows Phone, Web Service, C++, C#, Java, Swift, v.v&hellip; từ cơ bản đến n&acirc;ng cao. B&ecirc;n cạnh hệ thống kiến thức b&agrave;i bản, blog c&ograve;n đưa ra những v&iacute; dụ thực tiễn kh&aacute; hữu &iacute;ch. B&agrave;i viết nổi bật Thực h&agrave;nh về Context Menu trong Android Một số v&iacute; dụ về Activator trong .Net remoting 6. Nguyễn Nhật Ho&agrave;ng L&agrave; một Full-stack Developer, blog của Nguyễn Nhật Ho&agrave;ng rất đa dạng về chủ đề, từ hướng dẫn học c&aacute;c skill cơ bản của AngularJS, ReactJS, JavaScript, Web Developement&hellip; đến một số b&agrave;i viết về kỹ năng mềm cho Coder trong phỏng vấn, t&igrave;m việc, Start-up. Hiện Blog của Ho&agrave;ng đ&atilde; c&oacute; hơn 70.000 lượt xem. B&agrave;i viết nổi bật Gi&aacute; trị của một Fullstack Developer. Học ReactJS trong 15 ph&uacute;t. 69 c&acirc;u hỏi phỏng vấn về Spring. Xem th&ecirc;m việc l&agrave;m Full Stack Developer tại ITviec. 7. Nguyễn Th&agrave;nh Lu&acirc;n LuanVới hơn 4 năm kinh nghiệm l&agrave;m việc với Ruby, t&aacute;c giả chia sẻ quan điểm lập tr&igrave;nh cũng như nhiều tutorial, tips v&agrave; s&aacute;ch về Ruby on Rails. Số lượng b&agrave;i viết c&ograve;n chưa nhiều, nhưng Lu&acirc;n vẫn cập nhật b&agrave;i viết thường xuy&ecirc;n. B&agrave;i viết nổi bật [Book review] Clean Code &ndash; Robert C. Martin Series 5 Tips to speed up your website Tham khảo quan điểm của anh Lu&acirc;n về việc Developer c&oacute; n&ecirc;n trau chuốt code kh&ocirc;ng tại đ&acirc;y. Xem th&ecirc;m việc l&agrave;m Ruby on Rails tại ITViec. 8. Khoa Nguyễn Đang l&agrave; sinh vi&ecirc;n Đại học CNTT nhưng Khoa Nguyễn đ&atilde; sở hữu một blog c&aacute; nh&acirc;n với t&agrave;i nguy&ecirc;n đồ sộ. Blogger n&agrave;y chủ yếu viết về kỹ năng, định hướng nghề nghiệp, c&aacute;c vấn đề học tập cho c&aacute;c Developer. Ngo&agrave;i ra, Khoa cũng viết b&agrave;i trả lời c&aacute;c thắc mắc của mọi người về con đường học tập v&agrave; chiến lược nghề nghiệp. Cậu bạn n&agrave;y cũng đứng lớp v&agrave;i kh&oacute;a học ngắn tr&ecirc;n c&aacute;c trang web học code online. C&aacute;c b&agrave;i viết nổi bật của Khoa: Tương lai n&agrave;o cho Swift IT c&oacute; cần bằng đại học kh&ocirc;ng? Xem th&ecirc;m việc l&agrave;m Swift tại ITViec. 9. Ehkoo Ehkoo l&agrave; blog chuy&ecirc;n về lập tr&igrave;nh web của &Acirc;n Cao, một Front-end Developer hiện đang sống v&agrave; l&agrave;m việc tại Phần Lan. Mặc d&ugrave; blog c&ograve;n mới, số lượng b&agrave;i viết chưa nhiều, song chất lượng b&agrave;i viết của Ehkoo tương đối tốt. Nội dung blog xoay quanh 2 chủ đề ch&iacute;nh: C&ocirc;ng nghệ web, đặc biệt l&agrave; về front-end. Chia sẻ những c&acirc;u chuyện/kinh nghiệm của đời lập tr&igrave;nh vi&ecirc;n. C&aacute;c b&agrave;i viết đ&aacute;ng ch&uacute; &yacute;: Tổng hợp những t&iacute;nh năng ES6 nổi bật T&aacute;i sử dụng code với Render Prop trong ReactJS L&agrave;m quen với MithrilJS &ndash; phần 1 L&agrave;m quen với MithrilJS &ndash; phần 2 Xem th&ecirc;m việc l&agrave;m Front-end developer tại IT viec 10. B&ugrave;i Viết Hướng Anh Hướng l&agrave; một Developer trẻ n&ecirc;n Blog của anh lại kh&ocirc;ng tập trung về kỹ thuật m&agrave; lại thi&ecirc;n về kỹ năng l&agrave;m nghề, review s&aacute;ch v&agrave; những c&acirc;u chuyện nhỏ trong c&ocirc;ng việc. Với ng&ocirc;n ngữ gần gũi, h&agrave;i hước, những b&agrave;i viết của anh Hướng chắc chắn sẽ mang lại cho bạn nhiều th&uacute; vị. C&aacute;c b&agrave;i viết nổi bật của blog: Học lập tr&igrave;nh c&oacute; cần qu&aacute; th&ocirc;ng minh? Mới ra trường n&ecirc;n l&agrave;m việc ở c&ocirc;ng ty lớn hay c&ocirc;ng ty nhỏ? Series chuyện đi l&agrave;m Xem th&ecirc;m việc l&agrave;m developer tại ITviec 11. V&otilde; Duy Tuấn Anh Tuấn đ&atilde; trải qua nhiều vị tr&iacute; từ Developer cho đến gi&aacute;m đốc kỹ thuật v&agrave; cũng từng l&agrave;m Start-up. Do đ&oacute;, chủ đề của blog rất đa dạng, từ những kỹ thuật lập tr&igrave;nh, tin tức Start-up cho đến review s&aacute;ch. Những b&agrave;i viết hay tại blog: Chiến lược x&acirc;y dựng sản phẩm c&ocirc;ng nghệ Review s&aacute;ch &ldquo;Think first&rdquo; của Joe Natoli Speed up Microservices 1: T&aacute;c dụng phụ v&agrave; một số chiến lược cơ bản 12. The Full Snack Developer T&aacute;c giả của blog l&agrave; anh Huy Trần, hiện đang l&agrave; một Software Engineer tại Mỹ. Anh Huy viết blog từ năm 2015 v&agrave; đ&atilde; c&oacute; một gia t&agrave;i c&aacute;c b&agrave;i viết hay về kỹ thuật, review s&aacute;ch v&agrave; chuyện l&agrave;m nghề. Phong c&aacute;ch viết của anh ngắn gọn v&agrave; thực tế n&ecirc;n sẽ l&agrave; một địa chỉ rất hay ho cho bạn gh&eacute; thăm. Những b&agrave;i viết hay tại blog: Rock band v&agrave; Dev team, từ chuyện Outsourcing đến chuyện l&agrave;m Product Rework v&agrave; tư duy build sản phẩm Xem th&ecirc;m việc l&agrave;m senior developer tại ITviec 13. Th&aacute;i Dương Th&aacute;i Dương l&agrave; một Developer đ&atilde; l&agrave;m việc tại Việt Nam nhiều năm. Sau đ&oacute;, anh chuyển đến Sillicon Valley v&agrave; hiện tại đang l&agrave; kỹ sư bảo mật tại Google. Th&aacute;i viết về khoa học m&aacute;y t&iacute;nh, ph&aacute;t triển nghề nghiệp, kỹ năng t&igrave;m việc cho c&aacute;c Developer. Anh được nhiều Developer y&ecirc;u th&iacute;ch v&igrave; phong c&aacute;ch viết rất ngắn gọn, s&uacute;c t&iacute;ch v&agrave; c&oacute; t&iacute;nh gợi mở. Những b&agrave;i viết hay đ&aacute;ng ch&uacute; &yacute;: Từ đại số đến Bitcoin: 26, Fermat v&agrave; t&ocirc;i Google End-To-End 14. Khang Nguyễn Khang Nguyễn l&agrave; một developer trẻ tuổi nhưng đ&atilde; từng l&agrave; trưởng đại diện của Cogini tại Việt Nam. Khang viết nhiều về c&ocirc;ng nghệ v&agrave; một số chủ đề y&ecirc;u th&iacute;ch của c&aacute; nh&acirc;n anh. Một số b&agrave;i viết đ&aacute;ng ch&uacute; &yacute;: Build your product &ndash; L&agrave;m product Deploy (aka Đi Đẻ) Đọc b&agrave;i phỏng vấn của ITviec với Khang Nguyễn: &ldquo;T&iacute;nh xấu nhất của Developer l&agrave; lười&rdquo; 15. V&otilde; Duy Khang V&otilde; Duy Khang l&agrave; gi&aacute;m đốc kỹ thuật của Zappasoft tại &Uacute;c, từng xuất bản cuốn s&aacute;ch &ldquo;Pro iOS Apps Performance Optimization and Tuning&rdquo;. Trang blog của anh thuần về c&ocirc;ng nghệ th&ocirc;ng tin v&agrave; khoa học. Tuy anh đ&atilde; ngưng viết blog một thời gian nhưng những b&agrave;i viết của anh lu&ocirc;n thu h&uacute;t bạn đọc. Những b&agrave;i viết hay cho bạn: Time Management for Software Project Sport Science: table tennis and tennis 16. The Soldier of Fortune Đ&acirc;y l&agrave; blog của Thuận Nguyễn, một chuy&ecirc;n gia SharePoint. Anh đ&atilde; t&iacute;ch cực đ&oacute;ng g&oacute;p cho cộng đồng SharePoint Việt Nam ngay từ thuở ban đầu. Hầu hết c&aacute;c b&agrave;i viết trong Blog của anh đều l&agrave; về SharePoint v&agrave; được cập nhật rất thường xuy&ecirc;n. Những b&agrave;i viết hay cho bạn: Be aware of backing up IIS MachineKeys Determine your Web Front-end server Đọc b&agrave;i phỏng vấn của ITviec với Thuận Nguyễn: &ldquo;Sharepoint cho người mới nhập m&ocirc;n&ldquo; 17. Vinacode Đ&acirc;y l&agrave; Blog của Hồ Sỹ H&ugrave;ng, một Developer thế hệ 8x. Anh chủ yếu dịch từ những b&agrave;i viết hay về lập tr&igrave;nh từ c&aacute;c trang nước ngo&agrave;i. V&igrave; vậy, blog th&iacute;ch hợp với những bạn muốn cập nhật kiến thức nhưng c&ograve;n yếu về ngoại ngữ. Ngo&agrave;i ra, anh cũng thực hiện c&aacute;c b&agrave;i phỏng vấn với những nh&acirc;n vật nổi bật trong ng&agrave;nh. C&aacute;c b&agrave;i viết đ&aacute;ng ch&uacute; &yacute;: 4 Kỹ năng quan trọng nhất đối với một lập tr&igrave;nh vi&ecirc;n H&atilde;y l&agrave;m cho code nhỏ hơn</p>', 3, 'D8tq_VNE-Story-1536308700.jpg', 2, 1, '2019-07-28 10:10:46', '2019-08-04 05:31:27'),
(30, '11 tài liệu lập trình C++ miễn phí chất nhất', '11 tài liệu lập trình C++ miễn phí chất nhất....', '<p>T&agrave;i liệu lập tr&igrave;nh C++ tiếng Việt 1. C&aacute;c b&agrave;i hướng dẫn học C++ cơ bản v&agrave; n&acirc;ng cao C&aacute;c b&agrave;i hướng dẫn học C++ tr&ecirc;n trang VietJack cung cấp c&aacute;c nội dung từ cơ bản đến n&acirc;ng cao, k&egrave;m theo những v&iacute; dụ thực h&agrave;nh trực tuyến đa dạng. T&agrave;i liệu lập tr&igrave;nh C++ tiếng Anh I. D&agrave;nh cho những bạn đang l&agrave; Developer 2. Beginning C++ Templates Kh&oacute;a học miễn ph&iacute; tr&ecirc;n trang Udemy sẽ gi&uacute;p bạn hiểu c&uacute; ph&aacute;p của c&aacute;c h&agrave;m mẫu v&agrave; class, hiểu v&agrave; thực h&agrave;nh c&aacute;c thuật to&aacute;n đơn giản v&agrave; class, cũng như hiểu bản chất hoạt động của c&aacute;c template. Để học kh&oacute;a &ldquo;Beginning C++ Templates&rdquo;, bạn phải c&oacute; kiến thức cơ bản về C++ v&agrave; hiểu basic C++ constructs (c&aacute;c th&agrave;nh phần cơ bản để tạo th&agrave;nh 1 đoạn code C++) như c&aacute;c h&agrave;m v&agrave; class. Kh&oacute;a học n&agrave;y chỉ d&agrave;i 1,5 giờ. Bạn sẽ được cấp Certificate of Completion sau khi ho&agrave;n th&agrave;nh kh&oacute;a học. 3. C++ For Programmers tai-lieu-lap-trinh-c++ Kh&oacute;a học d&agrave;i khoảng 3 tuần tr&ecirc;n trang Udacity được thiết kế cho những bạn đ&atilde; quen với một ng&ocirc;n ngữ lập tr&igrave;nh v&agrave; giờ muốn học C++. &ldquo;C++ For Programmers&rdquo; sẽ tập trung v&agrave;o &ldquo;how&rdquo; thay v&igrave; &ldquo;what&rdquo;. Chẳng hạn, trong b&agrave;i học về c&aacute;c h&agrave;m, giảng vi&ecirc;n kh&ocirc;ng dạy h&agrave;m l&agrave; g&igrave;, m&agrave; hướng dẫn bạn c&aacute;ch tạo một h&agrave;m trong C++. Những b&agrave;i học trong kh&oacute;a n&agrave;y được dạy bởi c&aacute;c giảng vi&ecirc;n kh&aacute;c nhau, v&igrave; vậy bạn sẽ được trải nghiệm những g&oacute;c nh&igrave;n kh&aacute;c nhau. Kh&oacute;a học cũng n&ecirc;u một số comment v&agrave; tip của Bjarne Stroustrup, &ldquo;cha đẻ&rdquo; của ng&ocirc;n ngữ C++. 4. C++ Programming Tutorials Playlist Playlist gồm 73 video (mỗi video d&agrave;i từ 4 đến 12 ph&uacute;t) của thenewboston hướng dẫn lập tr&igrave;nh C++ từ cơ bản đến n&acirc;ng cao. T&iacute;nh đến ng&agrave;y 25/5/2018, playlist n&agrave;y đ&atilde; thu h&uacute;t hơn 11,8 triệu lượt xem kể từ khi được giới thiệu v&agrave;o th&aacute;ng 7/2014. 5. C++ Advanced Tutorials B&ecirc;n cạnh những tutorials về C++ cơ bản, trang Tutorials Point c&oacute; nhiều C++ tutorials ở mức n&acirc;ng cao, chẳng hạn như &ldquo;C++ Files and Streams&rdquo;, &ldquo;C++ Exception Handling&rdquo;, hay &ldquo;C++ Multithreading&rdquo;. Việc l&agrave;m C++ tại TP.HCM Việc l&agrave;m C++ tại H&agrave; Nội II. D&agrave;nh cho những bạn mới bắt đầu 6. C++ Tutorial for Complete Beginners Kh&oacute;a học d&agrave;i 18 giờ tr&ecirc;n Udemy sẽ dạy bạn c&aacute;ch lập tr&igrave;nh bằng ng&ocirc;n ngữ C++ cũng như gi&uacute;p bạn hiểu những kh&aacute;i niệm cơ bản về lập tr&igrave;nh m&aacute;y t&iacute;nh (trong đ&oacute; c&oacute; lập tr&igrave;nh hướng đối tượng). Kết th&uacute;c kh&oacute;a học, bạn sẽ được cấp Certificate of Completion. 7. C++, Short and Sweet, Part 1 Kh&oacute;a học do Jeremy Siek, giảng vi&ecirc;n của Đại học Colorado (Mỹ), giảng dạy bao gồm 6 video, mỗi video d&agrave;i từ 50 đến 60 ph&uacute;t. Dựa tr&ecirc;n cuốn s&aacute;ch Accelerated C++ của hai t&aacute;c giả Andrew Koenig v&agrave; Barbara E. Moo, kh&oacute;a học hướng dẫn bạn sử dụng thư viện chuẩn C++, bao gồm c&aacute;c string, vector, v&agrave; list. Cũng như c&aacute;c kh&oacute;a học kh&aacute;c tr&ecirc;n Udemy, bạn sẽ được cấp Certificate of Completion sau khi ho&agrave;n th&agrave;nh &ldquo;C++, Short and Sweet, Part 1&rdquo;. 8. Introduction to C++ tai-lieu-c++ Kh&oacute;a học của Microsoft tr&ecirc;n edX dạy bạn c&uacute; ph&aacute;p C++, C++ language fundamentals (c&aacute;c đặc điểm, nguy&ecirc;n tắc, v&agrave; phương thức vận h&agrave;nh của ng&ocirc;n ngữ C++), v&agrave; c&aacute;ch tạo c&aacute;c h&agrave;m trong C++. Bạn cần d&agrave;nh từ 3 đến 5 giờ mỗi tuần trong 4 tuần để ho&agrave;n th&agrave;nh kh&oacute;a &ldquo;Introduction to C++&rdquo;. Kh&oacute;a học n&agrave;y miễn ph&iacute;. Bạn chỉ phải trả ph&iacute; (99 USD) nếu muốn c&oacute; giấy chứng nhận. Xem th&ecirc;m 8 s&aacute;ch lập tr&igrave;nh C# si&ecirc;u chất cho .NET Developer 9. Learncpp.com Bạn chưa c&oacute; kinh nghiệm g&igrave; về lập tr&igrave;nh? Kh&ocirc;ng sao cả, những tutorials tr&ecirc;n trang LearnCpp sẽ từng bước hướng dẫn bạn viết, compile, v&agrave; debug c&aacute;c chương tr&igrave;nh C++, với v&ocirc; số v&iacute; dụ. 10. C++ Tutorial Tutotial tr&ecirc;n trang Sololearn gồm hơn 80 b&agrave;i học về C++, dạy bạn c&aacute;c kh&aacute;i niệm cơ bản, c&aacute;c kiểu dữ liệu, arrays, con trỏ, c&acirc;u lệnh c&oacute; điều kiện, v&ograve;ng lặp, h&agrave;m, class, v&agrave; object. 11. C++ Language Tutorials C&aacute;c tutorials tr&ecirc;n trang cplusplus.com giải th&iacute;ch ng&ocirc;n ngữ C++ từ mức độ cơ bản đến những t&iacute;nh năng mới nhất. Tất cả c&aacute;c mục đều c&oacute; những v&iacute; dụ cụ thể, gi&uacute;p bạn c&oacute; thể thực h&agrave;nh ngay kiến thức vừa học được.</p>', 3, 'G84I_VNE-Story-1536308511.jpg', 2, 1, '2019-07-28 10:11:07', '2019-08-03 04:15:08');
INSERT INTO `news` (`id_news`, `name`, `preview_text`, `detail_text`, `id_cat`, `picture`, `count_number`, `active`, `creared_at`, `updated_at`) VALUES
(31, 'Huawei P20, P20 Pro, Nova 3 và Honor Play đã gian lận điểm benchmark 3DMark', 'Huawei P20, P20 Pro, Nova 3 và Honor Play đã gian lận điểm benchmark 3DMark...', '<p>AnandTech ph&aacute;t hiện ra rằng chiếc Huawei P20 đ&atilde; được lập tr&igrave;nh để tăng hiệu năng l&ecirc;n tối đa khi chạy c&ocirc;ng cụ benchmark 3DMark. C&ocirc;ng ty l&agrave;m ra 3DMark cũng đ&atilde; x&aacute;c nhận điều n&agrave;y v&agrave; họ sẽ bỏ P20 c&ugrave;ng với P20 Pro, Nova 3, Honor Play ra khỏi danh s&aacute;ch đầu bảng của m&igrave;nh v&igrave; h&agrave;nh vi tương tự. Huawei cũng đ&atilde; thừa nhận c&oacute; l&agrave;m việc n&agrave;y: &quot;khi phần mềm của Huawei nhận thấy một ứng dụng benchmark, n&oacute; sẽ chuyển sang chế độ Performance Mode để mang lại hiệu năng tối ưu nhất. Huawei l&agrave;m ra t&iacute;nh năng Performance Mode để người d&ugrave;ng tận dụng hết sức mạnh của m&aacute;y khi cần&quot;. Huawei cũng n&oacute;i th&ecirc;m rằng chip của họ sẽ tự động tăng giảm hiệu năng t&ugrave;y th&ecirc;m game v&agrave; app đang chạy. C&oacute; vẻ đ&acirc;y ch&iacute;nh l&agrave; c&ocirc;ng nghệ GPU Turbo m&agrave; m&igrave;nh vừa ph&acirc;n t&iacute;ch. Điều đ&aacute;ng n&oacute;i l&agrave; GPU Turbo sẽ cần được huấn luyện với app mới để điều chỉnh hiệu năng, vậy khả năng cao l&agrave; Huawei / Honor đ&atilde; l&agrave;m ra một m&ocirc; h&igrave;nh AI để tăng điểm với c&aacute;c app benchmark. Nếu kh&ocirc;ng phải GPU Turbo, c&oacute; lẽ Huawei đang n&oacute;i tới t&iacute;nh năng tự điều chỉnh xung v&agrave; điện của CPU, GPU m&agrave; gần như mọi SoC di động hiện nay đều c&oacute;. Như m&igrave;nh cũng đ&atilde; n&oacute;i nhiều lần, chỉ số benchmark kh&ocirc;ng thể phản &aacute;nh trải nghiệm thực tế của bạn. N&oacute; chỉ l&agrave; một số để khoe cho vui, để tham khảo tạm tạm chứ bạn kh&ocirc;ng bao giờ n&ecirc;n tin v&agrave;o c&aacute;c số benchmark, đặc biệt l&agrave; benchmark hiệu năng điện thoại. Huawei cũng n&oacute;i th&ecirc;m rằng họ &quot;lưu ưu ti&ecirc;n trải nghiệm của người d&ugrave;ng thay v&igrave; điểm benchmark - nhất l&agrave; khi kh&ocirc;ng c&oacute; mối li&ecirc;n hệ trực tiếp n&agrave;o giữa điểm benchmark v&agrave; trải nghiệm&quot; (!?) Wang Chenglu, chủ tịch mảng phần mềm của bộ phận thiết bị ti&ecirc;u d&ugrave;ng Huawei n&oacute;i th&ecirc;m: &quot;c&aacute;c nh&agrave; sản xuất cũng chạy c&aacute;c b&agrave;i test n&agrave;y, họ cũng đạt điểm cao v&agrave; Huawei kh&ocirc;ng thể im lặng.&quot; &Ocirc;ng n&oacute;i &quot;Huawei muốn l&agrave;m việc với c&aacute;c c&ocirc;ng ty kh&aacute;c ở Trung Quốc để t&igrave;m ra c&aacute;ch benchmark tốt nhất cho trải nghiệm người d&ugrave;ng.&quot; Huawei nhấn mạnh &quot;trong thế giới Android, c&aacute;c nh&agrave; sản xuất kh&aacute;c cũng l&agrave;m người d&ugrave;ng hiểu nhầm với c&aacute;c con số của m&igrave;nh&quot;, v&agrave; điều n&agrave;y &quot;đ&atilde; trở th&agrave;nh th&ocirc;ng lệ ở Trung Quốc&quot;. N&oacute;i t&oacute;m lại l&agrave; Huawei đ&atilde; thừa nhận việc tăng điểm, họ l&agrave;m vậy l&agrave; để cạnh tranh với c&aacute;c đối thủ Trung Quốc kh&aacute;c, nhưng kh&ocirc;ng c&oacute; nghĩa l&agrave; họ được ph&eacute;p đ&aacute;nh lừa người d&ugrave;ng hay đưa ra những con số kh&ocirc;ng phản &aacute;nh đ&uacute;ng sự thật.</p>', 18, 'HLY5_VNE-Story-1536308429.jpg', 1, 1, '2019-07-28 10:11:41', '2019-08-04 05:32:45'),
(32, 'So sánh thông số SUV chạy điện: Mercedes-Benz EQC, Jaguar I-Pace và Tesla Model X', 'Mercedes-Benz mới đây vừa giới thiệu mẫu xe điện EQC đến công chúng....', '<p>Mercedes-Benz mới đ&acirc;y vừa giới thiệu mẫu xe điện EQC đến c&ocirc;ng ch&uacute;ng. Như vậy, Mercedes-Benz EQC đ&atilde; gia nhập v&agrave;o ph&acirc;n kh&uacute;c SUV/crossover chạy điện c&ugrave;ng với Jaguar I-Pace v&agrave; Tesla Model X. Gi&aacute; xăng tại Việt Nam vừa tăng v&agrave; chắc sẽ c&ograve;n l&ecirc;n nữa, n&ecirc;n m&igrave;nh nghĩ anh em c&oacute; thể xem qua phần so s&aacute;nh th&ocirc;ng số của 3 chiếc xe tr&ecirc;n để chuẩn bị chuyển sang đi xe điện gầm cao. D&ugrave; sao đi nữa, xe đ&acirc;y chắc chắn sẽ l&agrave; xu hướng tất yếu của tương lai, vừa tiết kiệm tiền xăng cộ, vừa bảo vệ m&ocirc;i trường vừa kh&ocirc;ng lo đường ngập nước. Đang tải 4417092_Mercedes_Benz_EQC_400_4MATIC_2019_tinhte_12.jpg&hellip; Mercedes-Benz EQC 400 4MATIC​ Đại diện cho 3 h&atilde;ng xe gồm c&oacute; Mercedes-Benz EQC 400 4MATIC, Jaguar I-Pace S v&agrave; Tesla Model X 75 D. Trong đ&oacute;, EQC 400 4MATIC hiện chưa c&oacute; gi&aacute; b&aacute;n, c&ograve;n I-Pace S c&ugrave;ng Model X 75 D lần lượt c&oacute; gi&aacute; 70.495 v&agrave; 79.500 USD. Kiểu d&aacute;ng th&igrave; mỗi xe mỗi vẻ, nhưng ri&ecirc;ng c&aacute; nh&acirc;n m&igrave;nh chấm thiết kế của I-Pace cao điểm hơn 2 đối thủ. Đơn giản l&agrave; m&igrave;nh thấy xe Jaguar l&uacute;c n&agrave;o cũng đẹp, hầm hố v&agrave; mạnh mẽ. C&ograve;n EQC v&agrave; Model X được x&acirc;y dựng theo hơi hướng tương lai, hơi cố tạo điểm kh&aacute;c biệt với số đ&ocirc;ng. Đang tải 4254743_Jaguar_I-Pace_2019_Xe_Tinhte-008.jpg&hellip; Jaguar I-Pace S​ Cả 3 mẫu xe đều được trang bị 2 motor điện cho 2 cầu. EQC 400 4MATIC c&oacute; sức mạnh lớn nhất với tổng c&ocirc;ng suất 402 m&atilde; lực v&agrave; m&ocirc;-men xoắn 765 Nm. Tuy nhi&ecirc;n, I-Pace S mới l&agrave; chiếc xe bốc nhất trong nh&oacute;m với khả năng tăng tốc 0-100 km/h mất 4,2 gi&acirc;y nhờ tỉ số c&ocirc;ng suất/trọng lượng hơn 180 m&atilde; lực/tấn. C&ograve;n Model X 75 D sở hữu vận tốc tối đa lớn nhất, đạt 210 km/h. Đang tải Tesla-Model-X-75-D-Xe-Tinhte (1).jpg&hellip; Tesla Model X 75 D ​ Chiếc SUV chạy điện của Mercedes-Benz c&oacute; qu&atilde;ng đường di chuyển khi được sạc đầy xa hơn 2 đối thủ, l&ecirc;n đến 450 km. C&ograve;n với I-Pace S v&agrave; Model X 75 D, con số l&agrave; 386 v&agrave; 397 km. Tuy nhi&ecirc;n c&oacute; một điểm cần lưu &yacute; rằng, kết quả của EQC được đo đạc v&agrave; c&ocirc;ng bố dựa tr&ecirc;n chuẩn NEDC. C&ograve;n Jaguar v&agrave; Tesla sử dụng chuẩn đo đạc của Cơ quan bảo vệ m&ocirc;i trường Hoa Kỳ EPA. Bảng so s&aacute;nh th&ocirc;ng số Mercedes-Benz EQC 400 4MATIC, Jaguar I-Pace S v&agrave; Tesla Model X 75 D: Đang tải EQC_I-Pace_Model_X_Xe_Tinhte.png&hellip;</p>', 18, '2OHX_VNE-Story-1536307736.jpg', 2, 1, '2019-07-28 10:12:02', '2019-08-04 02:26:23'),
(33, 'Tổng hợp deal khuyến mãi 07/09', 'Bàn phím cơ Leopold FC750R PS giá 2,84 triệu...', '<p><strong>B&agrave;n ph&iacute;m cơ Leopold FC750R PS gi&aacute; 2,84 triệu; iPhone 6 32GB ch&iacute;nh h&atilde;ng m&agrave;u v&agrave;ng champagne gi&aacute; 6 triệu; Apple TV 4K gi&aacute; 4,4 triệu l&agrave; những deal nổi bật trong ng&agrave;y 07/09. Ngo&agrave;i ra anh em c&oacute; thể chia sẻ th&ecirc;m những ưu đ&atilde;i hấp dẫn cho mọi người c&ugrave;ng biết. Đ&egrave;n B&agrave;n LED Cảm Ứng Điện Quang ĐQ LDL05 3W Gi&aacute; b&aacute;n 605.000đ giảm c&ograve;n 359.000đ Đang tải dien-quang_LDL05.jpg&hellip; ​ Đ&egrave;n b&agrave;n LED ĐQ LDL05 thuộc d&ograve;ng sản phẩm cao cấp với c&ocirc;ng nghệ chống ch&oacute;i lo&aacute; lumiplas c&ugrave;ng với c&ocirc;ng tắc cảm</strong></p>\r\n\r\n<p><img alt=\"\" src=\"/public/templates/anh/images/haha.png\" style=\"height:309px; width:550px\" /></p>\r\n\r\n<p>ứng v&agrave; khả năng điều chỉnh độ s&aacute;ng 3 cấp độ. Th&acirc;n đ&egrave;n c&oacute; thể xoay dễ d&agrave;ng để thay đổi vị tr&iacute; chiếu s&aacute;ng, d&acirc;y điện với adapter th&aacute;o rời tiện dụng. Link sản phẩm tại đ&acirc;y Apple Watch Series 3 GPS MQKV2 Gi&aacute; b&aacute;n 9.490.000đ giảm c&ograve;n 7.990.000đ [​IMG]​ Apple Watch Series 3 38mm với thiết kế vỏ nh&ocirc;m m&agrave;u x&aacute;m kh&ocirc;ng gian, sử dụng d&acirc;y cao su. Thiết kế với khả năng chống nước gi&uacute;p người d&ugrave;ng dễ d&agrave;ng bơi lội v&agrave; theo d&otilde;i vận động h&agrave;ng ng&agrave;y. Hệ điều h&agrave;nh watchOS cho ph&eacute;p trả lời cuộc gọi, ra lệnh Siri, tương th&iacute;ch nhiều với c&aacute;c ứng dụng đồng bộ với iPhone. Link sản phẩm tại đ&acirc;y B&agrave;n ph&iacute;m cơ Leopold FC750R PS Black Brown Switch Gi&aacute; b&aacute;n 3.050.000đ giảm c&ograve;n 2.836.000đ Đang tải Leopold-FC750R-PS.jpg&hellip; ​ B&agrave;n ph&iacute;m cơ sử dụng switch Cherry MX Blue c&oacute; 16 c&aacute;ch phối m&agrave;u kết hợp từ 4 m&agrave;u th&acirc;n vỏ. Keycap l&agrave;m bằng PBT si&ecirc;u d&agrave;y, độ bền cực cao, chống m&agrave;i m&ograve;n; k&yacute; tự Double shot si&ecirc;u bền. B&agrave;n ph&iacute;m c&oacute; chiều cao hợp l&yacute;, gi&uacute;p việc nhập liệu dễ d&agrave;ng m&agrave; kh&ocirc;ng cần d&ugrave;ng tới k&ecirc; tay. Link sản phẩm tại đ&acirc;y M&aacute;y H&uacute;t Bụi Philips FC6168 Gi&aacute; b&aacute;n 5.490.000đ giảm c&ograve;n 3.999.000đ Đang tải philips-fc6168.jpg&hellip; ​ M&aacute;y H&uacute;t Bụi Philips FC6168 sử dụng pin 18V c&oacute; thiết kế 2 trong 1 c&oacute; khả năng h&uacute;t bụi v&agrave; lau s&agrave;n nhờ thiết kế th&aacute;o rời. Cụm m&aacute;y ch&iacute;nh với khoang chứa bụi dễ vệ sinh bằng nước, kết nối với đầu h&uacute;t s&agrave;n nh&agrave; c&ocirc;ng nghệ TriActive Turbo cho hiệu suất l&agrave;m sạch tốt tr&ecirc;n nhiều bề mặt s&agrave;n. Link sản phẩm tại đ&acirc;y Combo Chuột Razer Abyssus v&agrave; Razer Goliathus Control Fissure Gi&aacute; b&aacute;n 790.000đ chỉ c&ograve;n 666.000đ [​IMG]​ Combo Chuột Chơi Game C&oacute; D&acirc;y Razer Abyssus 2000DPI LED 3 Ph&iacute;m V&agrave; Razer Goliathus Control Fissure 21.5x27 cm với chuột c&oacute; thiết kế kh&aacute; đơn giản: gồm 2 n&uacute;t tr&aacute;i phải ch&iacute;nh v&agrave; 1 n&uacute;t cuộn (scroll wheel). Razer Abyssus 2000 DPI l&agrave; chất liệu nhựa nhẵn kết hợp hoa văn h&igrave;nh tổ ong, c&oacute; hiệu quả chống trơn trượt. Link sản phẩm tại đ&acirc;y Điện Thoại iPhone 6 32GB Gi&aacute; b&aacute;n 8.990.000đ giảm c&ograve;n 5.990.000đ [​IMG]​ iPhone 6 32GB ch&iacute;nh h&atilde;ng tiếp tục c&oacute; mức gi&aacute; ưu đ&atilde;i chỉ c&ograve;n 6 triệu đồng. Người d&ugrave;ng sẽ c&oacute; chế độ bảo h&agrave;nh ch&iacute;nh h&atilde;ng, khả năng cập nhật l&ecirc;n iOS 12 nhưng chỉ c&oacute; 1 lựa chọn m&agrave;u v&agrave;ng champagne. Link sản phẩm tại đ&acirc;y Apple TV 4K 32GB Gi&aacute; b&aacute;n 6.100.000đ giảm c&ograve;n 4.390.000đ [​IMG] Apple TV với thế mạnh về khả năng tr&igrave;nh chiếu nội dung từ iPhone, iPad, cũng như truy cập v&agrave;o kho nội dung đa dạng WATCH từ Apple. Ngo&agrave;i ra tvOS sở hữu nhiều ứng dụng v&agrave; game hấp dẫn, hỗ trợ chuẩn h&igrave;nh ảnh 4K HDR. Link sản phẩm tại đ&acirc;y B&agrave;n Ủi Hơi Nước Đứng Philips GC514 Gi&aacute; b&aacute;n 2.089.000đ giảm c&ograve;n 1.449.000đ Đang tải Philips-GC514.jpg&hellip; ​ B&agrave;n Ủi Hơi Nước Đứng Philips GC514 với gi&aacute; treo c&oacute; thể điều chỉnh chiều cao người d&ugrave;ng. C&ocirc;ng suất 1.600W đun hơi nước chỉ trong 1 ph&uacute;t, đồng thời c&oacute; thể điề chỉnh 3 chế độ phun hơi cho hiệu quả ủi đồ ph&ugrave; hợp với c&aacute;c loại vải. Link sản phẩm tại đ&acirc;y M&aacute;y Phun Xịt Rửa &Aacute;p Lực Cao Bosch Easyaquatak 110 Gi&aacute; b&aacute;n 3.440.000đ giảm c&ograve;n 1.959.000đ [​IMG]​ M&aacute;y xịt rửa của Bosch c&oacute; c&ocirc;ng suất 1.400W cho &aacute;p lực xịt 110 bar với ống tiếp nước c&oacute; khả năng h&uacute;t đường ống dẫn d&agrave;i 50 cm kh&ocirc;ng cần trợ lực. Phụ kiện đi k&egrave;m của m&aacute;y đ&aacute;p ứng nhu cầu rửa xe, vệ sinh nh&agrave; cửa gồm đầu xịt thẳng, vu&ocirc;ng g&oacute;c, b&igrave;nh bọt đựng x&agrave; b&ocirc;ng. Link sản phẩm tại đ&acirc;y Ổ cứng SSD Kingston A400 120GB Gi&aacute; b&aacute;n 1.400.000đ giảm c&ograve;n 620.000đ [​IMG]​ Ổ SSD Kingston dung lượng 120GB với chuẩn 2.5&quot; giao thức SATA III ph&ugrave; hợp để n&acirc;ng cấp cho m&aacute;y t&iacute;nh b&agrave;n v&agrave; một số mẫu laptop cũ. Tốc độ đọc/ghi dữ liệu lần lượt l&agrave; 550MB/s v&agrave; 350MB/s, bảo h&agrave;nh ch&iacute;nh h&atilde;ng 36 th&aacute;ng. Link sản phẩm tại đ&acirc;y M&aacute;y Lạnh Sharp Inverter AH-X12UEW Gi&aacute; b&aacute;n 9.000.000đ giảm c&ograve;n 7.690.000đ [​IMG]​ M&aacute;y lạnh Sharp AH-X12UEW c&oacute; c&ocirc;ng suất 1.5 HP sử dụng c&ocirc;ng nghệ J-Tech Inverter c&ugrave;ng m&ocirc;i chất l&agrave;m lạnh R32 th&acirc;n thiện với m&ocirc;i trường. Sản phẩm ph&ugrave; hợp với ph&ograve;ng diện t&iacute;ch 15-20 m2, nhiều chế độ hoạt động để l&agrave;m m&aacute;t mạnh mẽ hoặc &ecirc;m dịu khi sử dụng qua đ&ecirc;m. Link sản phẩm tại đ&acirc;y Nồi cơm điện tử Kangaroo KG565 Gi&aacute; b&aacute;n 1.510.000đ giảm c&ograve;n 729.000đ</p>', 18, 'x3Ew_VNE-Story-1536308291.jpg', 2, 1, '2019-07-28 10:12:31', '2019-08-04 03:18:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `id_project` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preview_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `projects`
--

INSERT INTO `projects` (`id_project`, `name`, `preview_text`, `picture`, `link`) VALUES
(1, 'Dự án AboutMe', 'Dự án website cá nhân nâng cao', 'hahaha.jpg', 'http://vinaenter.com'),
(6, 'Dự Án ShareIT', 'Chia sẽ tin tức hay', 'lPUe_Screenshot (131).png', 'http://vinaenter.com'),
(7, 'Bstory', 'chia sẽ đọc truyện hay', 'MHS3_Screenshot (75).png', 'http://vinaenter.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `saying`
--

CREATE TABLE `saying` (
  `id_saying` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `saying`
--

INSERT INTO `saying` (`id_saying`, `content`, `author`) VALUES
(1, 'Nếu bạn luôn buồn phiền, hãy dùng hy vọng để chữa trị; hạnh phúc lớn nhất của nhân loại chính là biết hi vọng', 'Dương Hồng Hà'),
(5, 'Khi bạn giàu bạn nói cái gì cũng đúng.', 'Hà Dương');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatri` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skill`
--

INSERT INTO `skill` (`id_skill`, `name`, `giatri`) VALUES
(1, 'HTML', 80),
(2, 'CSS', 60),
(3, 'JavaScript', 65),
(4, 'PHP', 85),
(5, 'Laravel', 80),
(6, 'MySQL', 76);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `level`) VALUES
(1, 'admin', '$2y$10$uQoxWAMcOiTI.bhe/3pdQ.V5EVKHPZ02Gt2wIOiACievM5vHuYc42', 'Dương Hồng Hà', 1),
(2, 'user', '$2y$10$tAz.g.Jo7br19BZMpMXCheyYbCA7hAM3uGyPXIvqEtSJM1gAkp2Ym', 'Hà Dương', 0),
(14, 'user2', '$2y$10$g04/ttF/uHitUxRdVm/EDOXcAWUCx40.ADf0R2wq04gSD9vPOdPM6', 'Dương Hà', 0),
(15, 'sdffsf', '$2y$10$jDIkewbnO.4A9HxiEnAh6.NOD9g2NdebjuXeiuSpDnJELi6pQdLoC', 'Dương Hồng Hà', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `aboutme`
--
ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`id_aboutme`);

--
-- Chỉ mục cho bảng `advs`
--
ALTER TABLE `advs`
  ADD PRIMARY KEY (`id_advs`);

--
-- Chỉ mục cho bảng `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`);

--
-- Chỉ mục cho bảng `saying`
--
ALTER TABLE `saying`
  ADD PRIMARY KEY (`id_saying`);

--
-- Chỉ mục cho bảng `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `aboutme`
--
ALTER TABLE `aboutme`
  MODIFY `id_aboutme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `advs`
--
ALTER TABLE `advs`
  MODIFY `id_advs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `cat`
--
ALTER TABLE `cat`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `saying`
--
ALTER TABLE `saying`
  MODIFY `id_saying` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
