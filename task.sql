-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 06:21 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `task_type` set('Mathematic','Physics','Chemistry') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_date`, `task_type`) VALUES
(1, 'Test Category ', '2019-01-22 09:16:42', 'Mathematic'),
(2, 'Category 2', '2019-01-24 14:06:55', 'Mathematic'),
(3, 'Category 2', '2019-01-24 14:07:01', NULL),
(4, 'Test 12', '2019-02-15 12:15:16', 'Mathematic'),
(7, 'Тэнцэтгэл биш', '2019-02-15 13:53:05', 'Mathematic'),
(8, 'Test chemistry', '2019-02-20 17:13:29', 'Chemistry'),
(9, 'Test Physics ', '2019-02-20 17:14:51', 'Physics'),
(10, 'Test Physics ', '2019-02-20 17:16:48', 'Physics'),
(11, 'Test chemistry 5 ', '2019-02-20 17:21:21', 'Physics'),
(12, 'Test', '2019-03-23 21:29:17', 'Mathematic'),
(13, 'Test Night', '2019-03-23 21:30:20', 'Mathematic'),
(14, 'Test Night', '2019-03-23 21:30:52', 'Mathematic'),
(15, 'Test ttt', '2019-03-23 21:33:58', 'Mathematic'),
(16, 'Test 25', '2019-03-25 21:00:45', 'Mathematic'),
(17, 'Test Physics 25', '2019-03-25 21:42:13', 'Physics'),
(18, 'Hhhh', '2019-03-25 21:43:06', 'Physics'),
(19, 'The Physics', '2019-03-25 21:43:35', 'Physics'),
(20, 'The Chemistry ', '2019-03-25 21:44:47', 'Chemistry'),
(21, 'Test Physics', '2019-03-28 11:01:16', 'Physics'),
(22, 'CHEMISTRY ', '2019-03-28 11:02:08', 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `password`, `last_login`) VALUES
(1, 'admin', '', 'erdenebulgandeveloper@gmail.com', '', '$2a$08$VdaWtso.2DOVHEytemfQr..JPjK2xj5k8keg4.9Sd4RDqtA9WuGkm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` bigint(20) NOT NULL,
  `level_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level_name`, `created_date`, `category_id`) VALUES
(1, 'Энгийн ', '2019-01-26 17:31:32', NULL),
(2, 'Дунд', '2019-01-26 17:31:32', NULL),
(3, 'Ахисан', '2019-01-26 17:31:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` bigint(20) NOT NULL,
  `response` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci DEFAULT NULL,
  `task_id` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `response`, `status`, `task_id`, `created_date`) VALUES
(1, '<p>x = 2</p>\r\n', '0', 1, '2019-02-16 14:41:41'),
(2, '<p>x = 4</p>\r\n', '', 1, '2019-02-16 14:41:41'),
(3, '<p>x = -4</p>\r\n', '', 1, '2019-02-16 14:41:41'),
(4, '<p>x = -1&nbsp;</p>\r\n', '', 1, '2019-02-16 14:41:41'),
(5, '<p>x</p>\r\n', '', 1, '2019-02-16 14:41:41'),
(6, '<p>x = -4</p>\r\n', '0', 2, '2019-02-16 14:51:48'),
(7, '<p>x = -3</p>\r\n', '', 2, '2019-02-16 14:51:48'),
(8, '<p>x = 0.5</p>\r\n', '', 2, '2019-02-16 14:51:48'),
(9, '<p>x = 1.5</p>\r\n', '', 2, '2019-02-16 14:51:48'),
(10, '<p>x = -1</p>\r\n', '', 2, '2019-02-16 14:51:48'),
(11, '<p>1</p>\r\n', '0', 3, '2019-02-16 14:54:18'),
(12, '<p>2</p>\r\n', '', 3, '2019-02-16 14:54:18'),
(13, '<p>3</p>\r\n', '', 3, '2019-02-16 14:54:18'),
(14, '<p>1</p>\r\n', '', 4, '2019-02-16 15:35:08'),
(15, '<p>2</p>\r\n', '', 4, '2019-02-16 15:35:08'),
(16, '<p>3</p>\r\n', '', 4, '2019-02-16 15:35:08'),
(17, '<p>1</p>\r\n', '1', 5, '2019-02-16 15:43:59'),
(18, '<p>2</p>\r\n', '0', 5, '2019-02-16 15:44:00'),
(19, '<p>1</p>\r\n', '1', 6, '2019-02-16 15:44:40'),
(20, '<p>2</p>\r\n', '0', 6, '2019-02-16 15:44:40'),
(21, '<p>3</p>\r\n', '0', 6, '2019-02-16 15:44:40'),
(22, '<p>4</p>\r\n', '0', 6, '2019-02-16 15:44:41'),
(23, '<p>1</p>\r\n', '1', 7, '2019-02-20 17:37:56'),
(24, '<p>2</p>\r\n', '0', 7, '2019-02-20 17:37:56'),
(25, '<p>3</p>\r\n', '0', 7, '2019-02-20 17:37:56'),
(26, '<p>1</p>\r\n', '1', 7, '2019-02-20 17:42:40'),
(27, '<p>2</p>\r\n', '0', 7, '2019-02-20 17:42:40'),
(28, '<p>3</p>\r\n', '0', 7, '2019-02-20 17:42:40'),
(29, '<p>1</p>\r\n', '1', 9, '2019-03-06 19:24:45'),
(30, '<p>2</p>\r\n', '0', 9, '2019-03-06 19:24:45'),
(31, '<p>3</p>\r\n', '0', 9, '2019-03-06 19:24:45'),
(32, '<p>1</p>\r\n', '1', 10, '2019-03-06 19:26:37'),
(33, '<p>2</p>\r\n', '0', 10, '2019-03-06 19:26:37'),
(34, '<p>3</p>\r\n', '0', 10, '2019-03-06 19:26:37'),
(35, '<p>4</p>\r\n', '0', 10, '2019-03-06 19:26:37'),
(36, '<p>1</p>\r\n', NULL, 12, '2019-03-21 08:47:36'),
(37, '<p>3</p>\r\n', NULL, 12, '2019-03-21 08:47:36'),
(38, '<p>5</p>\r\n', NULL, 12, '2019-03-21 08:47:36'),
(39, '<p>1</p>\r\n', NULL, 14, '2019-03-25 21:52:28'),
(40, '<p>2</p>\r\n', NULL, 14, '2019-03-25 21:52:28'),
(41, '<p>3</p>\r\n', NULL, 14, '2019-03-25 21:52:28'),
(42, '<p>1</p>\r\n', NULL, 15, '2019-03-25 21:53:36'),
(43, '<p>2</p>\r\n', NULL, 15, '2019-03-25 21:53:36'),
(44, '<p>3</p>\r\n', NULL, 15, '2019-03-25 21:53:37'),
(45, '<p>4</p>\r\n', NULL, 15, '2019-03-25 21:53:37'),
(46, '<p>1</p>\r\n', NULL, 19, '2019-03-26 21:51:19'),
(47, '<p>123</p>\r\n', NULL, 20, '2019-03-26 21:54:00'),
(48, '<p>123</p>\r\n', NULL, 21, '2019-03-26 21:54:36'),
(49, '<p>12345</p>\r\n', NULL, 23, '2019-03-26 21:59:08'),
(50, '<p>1</p>\r\n', NULL, 24, '2019-03-26 22:03:44'),
(51, '<p>2</p>\r\n', NULL, 24, '2019-03-26 22:03:44'),
(52, '<p>12434365</p>\r\n', NULL, 25, '2019-03-26 22:17:00'),
(53, '<p>12423454</p>\r\n', NULL, 25, '2019-03-26 22:17:00'),
(54, '<p>123trg;</p>\r\n', NULL, 26, '2019-03-26 22:18:00'),
(55, '<p>abafd</p>\r\n', NULL, 26, '2019-03-26 22:18:00'),
(56, '<p>adsfag</p>\r\n', NULL, 26, '2019-03-26 22:18:00'),
(57, '<p>1</p>\r\n', NULL, 39, '2019-03-28 09:59:01'),
(58, '<p>1</p>\r\n', '', 40, '2019-03-28 10:02:15'),
(59, '<p>2</p>\r\n', '0', 40, '2019-03-28 10:02:15'),
(60, '<p>3</p>\r\n', '1', 40, '2019-03-28 10:02:15'),
(61, '<p>1</p>\r\n', '0', 41, '2019-03-28 10:06:08'),
(62, '<p>2</p>\r\n', '', 41, '2019-03-28 10:06:08'),
(63, '<p>3</p>\r\n', '', 41, '2019-03-28 10:06:08'),
(64, '<p>1</p>\r\n', '0', 42, '2019-03-28 10:07:34'),
(65, '<p>2</p>\r\n', '', 42, '2019-03-28 10:07:34'),
(66, '<p>1</p>\r\n', '0', 43, '2019-03-28 10:55:46'),
(67, '<p>2</p>\r\n', '', 43, '2019-03-28 10:55:46'),
(68, '<p>3</p>\r\n', '', 43, '2019-03-28 10:55:46'),
(69, '<p>Хариултыг энд оруулна уу...</p>\r\n', '0', 45, '2019-03-28 10:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` bigint(20) NOT NULL,
  `task` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` enum('Mathematic','Physics','Chemistry') COLLATE utf8_unicode_ci NOT NULL,
  `number` bigint(20) NOT NULL,
  `sub_number` bigint(20) NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `level_id` bigint(20) NOT NULL,
  `variant_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task`, `description`, `created_date`, `type`, `number`, `sub_number`, `category_id`, `level_id`, `variant_id`) VALUES
(1, '<p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAATCAIAAABgE2pWAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAA9ZJREFUaEPtWTFy6jAQFTkLpGA4gTkBk4Yq7e/sMmnoUqajsUrofpvKTawTxCdgKGLdheyuJFs2KwdjGiZWRWRp3+rt6u1qMjmdTmIcf5iBhz989vHoyMCYAX89D8YMGDOgkwEtl5PJUmohVAK/EjWQL5VMYJDBcVgGgJOlIRbZ7sGN1komOJbLHrvOeIdOMDzyPD+VaRTFcZzmZZ6mZefySz7msYhuYOYSqHtZU6ZxZOISxRdTk8MeCgxEJh8SFvE7TYB1u5hBPok4/x10XNHJANB4KxZdH6AlqjwqdCKlFSUlpYL5TCyKj0+QHHUD7S6PRbyeUUlhqgEVnfZAhUP33Cfw0Dhythq1tJqEP9xvtGDqDxQyOJ45KFmppv2tvgdLENmmRwaF8YfzyTgfQgx+Yo9W67f+/FhULGLI6shUgcRQehFrW6zrBqYaXky4maQloNJWpnHWyBLO8dpNO/nB6gbWABAuhCLzLdHDikNTVa2wM3XtKMkZewE8GzhvZ71C40sObqQVDWTPXAidQQn4Q/cWNBPP4KOEELudcfR4R7PCABAo/xQwnxATSDuPv32CnW60iAcN0PLfaxHnu9XUhjJ6fsKf05ev09fuBX6udoD0hb/aA9cEBrdefx+EmG8Iavq4EMWxbFgEc61tdgY8sB+mqw0c7fDd1qMpLNmteraXpHCYUTSC6LVVh9LhD5xx8chQZYw0ERvuBj9xRyv2Ym0CYgjZZ6hMnx9FlG7s/Mv/NELxdiDlUcxn5wQ9uG2WPIxRxwF6Mtxajh7GbzaTECniXApgVDI2ey3OUucqv1SyFZvd+qq9Xrlp+RMgmlA6EAc4g3fp9xHKTNMHVDFXW5CD9eVXiS3cpmwyDxRqAlyqYb4asblsVHJDKtYjdXjzx22SrUnhrhwBf1QWkoAOxL7OzOa+DJKyutGWVTevttA6cIE1GUCiCq9LmUHpmM+0Si58+feqAirbC0HyDQBYeZwcsDFoHAUaNtvWaNU3dXjrByxG4eCHiLQ7GH9AxCW0y9nhecPaLcKIHZ94D6dPz1HxuqVGT0NsUfsBFKfF/t30hVrCbXZ3TMt3xi+6v/gaxKelfYuazu52jz+/R4Bnb5rbpy90mOFHLDVnOGo/cq/jhHeQef9WbWir3+m81HFqTVUtJy2v31ZtdBaF8cdSV3ej1RGcBQYx9IkFbTRc0AC6JrwixPSF9bTXEp5zAt4QygR2XSmD47b7YABu+uz4VtadPrgNGvY+L6m5Hv8vcB9hHOYldF/Nhme1rl5AowYM4/b+d48acP8xHHaCMQOG8Xf/u38AEecEZt/bp8kAAAAASUVORK5CYII=" style="height:19px; width:171px" /></p>\r\n', NULL, '2019-02-16 14:41:40', 'Mathematic', 1, 1, 7, 1, NULL),
(2, '<p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALsAAAATCAIAAABHveu+AAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAABCpJREFUaEPtWDuS4jAQFXsWQ0BxAnMCZhKiOYIdQkK24WQkdgjZpkQkY50An4AiGPsubLc+lmRLRvZQtVWsFNn69dNT63VLk/v9TkIJDHgz8Mu7Z+gYGEAGgscEPxjGwBiPoWleD7MSer8OA8Jj6jxdTlhZWryhzkUj7/J2Fetn9WwAxeEpfRIvNUxnw0FYAyB4mqUnAf4309B0suRM4EZYCbMDq2uap1iWdpr7lwOZ771ICImzCr6qLCYkKbBSK1jL241SFAUOiJMkyYqqyLo92iM8/qssAQgOEICi6MDwmPRFu0iuYPcSb/IL4JftGWzaGDKJcJjGS5T3KJodHsM6AACLM43cIqAggVUghpbbWqpG2vi/h8FWdgRhGCMQlej5SOL5VEjRdB6T8lY91lma5xSC2ZksytMX6Bx9Qm4TbQ6HVdS1XeefxzjbrRwiawZNFV0x1sp4upTJVyvE8hDXVMKP/EaZB+FnRe/D5d/WwvuKsgTRNyrEJBZIMrAYw8GKjsS06Gyyrk7RVn+dFuspyyEwA9ETUpWYYKxTm9meETSmdXwtp7nCOlmEADLdYVrIGl06w8KcvbilqQ1B2AI14zO1jglGRibKMK4JrvjR/N/5CsTp0iQT60Wt6sxiszyJOhZDa7UZXQAshhyQpFzjMnQrLosigWgoNMHI3dBWJ3QEIgKGIxbZdU54NiLq8VvfHKlLHIzXXSlaHaRyVcXiuJ3CkYs2l/vlsAFBYI0X/LIU7OYoriHdWapbSch8trvgXLDQ8vim575gozWXqAFkoiFa7WC51++2DuLKDg7p6pNZJq7NMXICUFNIQz2Q6u/rYmZnkSW3ukUDm7PJtrrySNZ8rzgnxzNK7NepBA0X9Zs/WYxxQxqpbqQJQc17jOIScPdR5aL+cRT7YY/FTISrYQgaTZ1uS79o64GTpnuyO6w9etq6uCCZG2OO7LH4AzDRbOGxhpYng8aYmQue52Q94tjZbXfiqhboB73qdPXBY7FwkKTGMUnVjorXaFun2z49r5m4jiwOSPTskpgei0PB4F471MGVvNI9pD6aP4DHRO8fIE6fbP8wxRQOw/aaiT9+yVyopvttGX+8+xI2OirpHrJaJ6Q87Xk61o/AWDdkpwJ3TVF3/WG7naG8znd9cezBrcECCYJKDjeH8/XDntr3WHwEprMM3Otyy5kEIlksAm/QXQC2W9ticIg2Lp5k4CWdFXWxV08zkDnInHPQzX/Yra25q6tUGZ4N5DMDYhDrd7w9NNm5StoKLe2GbJm/5DS5eCu561UMzIPlwCbLZiPUXbUNwGrIAon3k9m8nAWt9Fh0NVmNGhthMKkeZCwE228tE5htpLqGYS/OAMSW6e13Zbx30NTrrvTizITlORmAjNbMP1broDHBX4YxEDRmGF+hd/CY4APDGPgL686Mc5t2bGAAAAAASUVORK5CYII=" style="height:19px; width:187px" />.</p>\r\n', NULL, '2019-02-16 14:51:48', 'Mathematic', 1, 2, 7, 2, NULL),
(3, '<p>Test</p>\r\n', NULL, '2019-02-16 14:54:18', 'Mathematic', 1, 3, 2, 1, NULL),
(4, '<p>Test 2</p>\r\n', NULL, '2019-02-16 15:35:08', 'Mathematic', 1, 4, 1, 1, NULL),
(5, '<p>Test 3&nbsp;</p>\r\n', NULL, '2019-02-16 15:43:59', 'Mathematic', 1, 5, 2, 1, NULL),
(6, '<p>Test 3</p>\r\n', NULL, '2019-02-16 15:44:40', 'Mathematic', 1, 5, 7, 1, NULL),
(7, '<p>Test 1&nbsp;</p>\r\n', NULL, '2019-02-20 17:37:56', 'Physics', 1, 1, 11, 1, NULL),
(8, '<p>Test&nbsp;</p>\r\n', NULL, '2019-02-20 17:42:39', 'Chemistry', 1, 1, 8, 1, NULL),
(9, '<p>5^{2x+1}=0.2 {\\char&quot;000442}{\\char&quot;00044D}{\\char&quot;000433}{\\char&quot;000448}{\\char&quot;000438}{\\char&quot;000442}{\\char&quot;000433}{\\char&quot;00044D}{\\char&quot;00043B}{\\char&quot;000438}{\\char&quot;000439}{\\char&quot;000433}{\\char&quot;000431}{\\char&quot;00043E}{\\char&quot;000434}</p>\r\n', NULL, '2019-03-06 19:24:45', 'Mathematic', 1, 6, 1, 1, NULL),
(10, '<p><em>&nbsp;</em><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAATCAIAAABa7xdgAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAgNJREFUWEftVztywjAQFTmLSeHhBPIJnCpVWjq5JE1ukI7GLk1HS0UT6QRwAoYC+y5kd+WPLH9QJmAmE7YCayXv03u7Dybn85n9g3j6BxgR4hDOXEXBBCOIkvzSfeRJELSy6IRIXdo7wnoHTqVR5cn801+DrDM5W70vf1wsYIwy5o+AweUViBOoINqKeDnQRm+x2y08/DD1uXgN8RllEm1E9SBTXpim4dSlBtecPCn0pUuwI0f1FEjaCkTCYs54nMGnrshiIaRekFJiMhdCxDKTMe7BzVYYZ+FqubvnfNfHUrCiSnqlfaoJghKaiNgwTgAZFyDLeqTgXZeC+Nt3dT2cCLPCVmPu48a+icE5lETL53QBioVWU0wliQLpbNlsv/kCkaiLs8lVkA55arti3C/bADqJ7Y/Z4L46m9Jo0MBdlcFFwUpTkEKSMGiR0m3y2nw2TrWp7pB7VUFXCzXo1CX090PHKuI0QkO+Uke5dp5LnjtOGiDSnjaWbr3wA2g7nMaUpINqdUpdVn7SntCeuSqab97WaYhGYca9fg9ZXmb6WqdpNDsyO+5ZYXUmGAAJlq/d0A7tDCXRpNt+j3FR2I1yDK8wfMW0GDACo+Hgm9nn0J+AjVceWI2hG5X7m2OhTs1SXWSN05x6OqsxZSaP/yvO8+EvJN5rDo19Nw+cY9/4bd/3DWM51nC8v+EtAAAAAElFTkSuQmCC" style="height:14.25pt; width:57.75pt" /> тэгшитгэлийг бод.</p>\r\n', NULL, '2019-03-06 19:26:37', 'Mathematic', 1, 10, 1, 2, NULL),
(11, NULL, NULL, '2019-03-21 08:43:54', 'Mathematic', 5, 1, 2, 3, NULL),
(12, '<p>This is my textarea to be replaced with CKEditor.</p>\r\n', NULL, '2019-03-21 08:47:36', 'Mathematic', 9, 1, 7, 2, NULL),
(13, '<p>Test&nbsp;</p>\r\n', NULL, '2019-03-25 21:52:02', 'Mathematic', 10, 1, 2, 1, NULL),
(14, '<p>Test&nbsp;</p>\r\n', NULL, '2019-03-25 21:52:28', 'Mathematic', 10, 1, 2, 1, NULL),
(15, '<p>134564567979413</p>\r\n', NULL, '2019-03-25 21:53:36', 'Mathematic', 18, 1, 1, 1, NULL),
(19, '<p>1</p>\r\n', NULL, '2019-03-26 21:51:19', 'Mathematic', 14, 12, 2, 2, NULL),
(20, '<p>123</p>\r\n', NULL, '2019-03-26 21:54:00', 'Mathematic', 14, 1, 2, 2, NULL),
(21, '<p>12345</p>\r\n', NULL, '2019-03-26 21:54:36', 'Mathematic', 13, 11, 2, 1, NULL),
(22, '<p>12345</p>\r\n', NULL, '2019-03-26 21:57:15', 'Mathematic', 17, 15, 1, 3, NULL),
(23, '<p>12345</p>\r\n', NULL, '2019-03-26 21:59:08', 'Mathematic', 17, 15, 1, 3, NULL),
(24, '<p>1</p>\r\n', NULL, '2019-03-26 22:03:44', 'Mathematic', 16, 13, 1, 2, NULL),
(25, '<p>123456</p>\r\n', NULL, '2019-03-26 22:16:59', 'Mathematic', 5, 5, 4, 2, NULL),
(26, '<p>21rersfgsdsewre1e2331</p>\r\n', NULL, '2019-03-26 22:18:00', 'Mathematic', 17, 14, 4, 3, NULL),
(39, '<p>Test&nbsp;</p>\r\n', NULL, '2019-03-28 09:59:01', 'Mathematic', 9, 15, 2, 2, NULL),
(40, '<p>Test 3</p>\r\n', NULL, '2019-03-28 10:02:14', 'Mathematic', 1, 1, 2, 1, NULL),
(41, '<p>Test tttttttttttttttttttttttttttt</p>\r\n', NULL, '2019-03-28 10:06:08', 'Mathematic', 9, 1, 2, 2, NULL),
(42, '<p>tert</p>\r\n', NULL, '2019-03-28 10:07:34', 'Mathematic', 1, 3, 2, 3, NULL),
(43, '<p>Test Day&nbsp;</p>\r\n', NULL, '2019-03-28 10:55:46', 'Chemistry', 14, 1, 8, 2, NULL),
(45, '<p>Бодлогын асуулт энд оруулна уу...</p>\r\n', NULL, '2019-03-28 10:58:46', 'Physics', 2, 1, 11, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_images`
--

CREATE TABLE `task_images` (
  `id` int(11) NOT NULL,
  `image_name` longtext COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `task_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task_images`
--

INSERT INTO `task_images` (`id`, `image_name`, `created_date`, `task_id`) VALUES
(1, '87341.jpg', '2019-02-16 14:41:41', 1),
(2, 'background2.png', '2019-02-20 17:37:56', 7),
(3, 'space.png', '2019-02-20 17:42:39', 7),
(4, '54521915_427146741387013_8298271454647025664_n.jpg', '2019-03-21 08:43:54', 11),
(5, 'mountain_solitude_man_130462_1280x720.jpg', '2019-03-21 08:47:36', 12),
(6, '54521915_427146741387013_8298271454647025664_n1.jpg', '2019-03-25 21:53:36', 15),
(7, '54521915_427146741387013_8298271454647025664_n2.jpg', '2019-03-26 22:17:00', 25),
(8, '54521915_427146741387013_8298271454647025664_n3.jpg', '2019-03-26 22:18:00', 26),
(9, '55539171_2262233140710749_1618488941516685312_n.jpg', '2019-03-26 22:18:00', 26),
(10, '55539171_2262233140710749_1618488941516685312_n1.jpg', '2019-03-28 09:59:01', 39);

-- --------------------------------------------------------

--
-- Table structure for table `variant`
--

CREATE TABLE `variant` (
  `id` bigint(20) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `variant`
--

INSERT INTO `variant` (`id`, `name`, `created_date`) VALUES
(1, 'A', '2019-01-23 13:35:46'),
(2, 'Б', '2019-01-23 13:35:46'),
(4, 'В', '2019-01-23 20:29:26'),
(7, 'Г', '2019-01-23 20:41:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_level_category_id` (`category_id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_response_task` (`task_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_task_category1_idx` (`category_id`),
  ADD KEY `fk_task_level1_idx` (`level_id`),
  ADD KEY `fk_task_variant1_idx` (`variant_id`);

--
-- Indexes for table `task_images`
--
ALTER TABLE `task_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_task_images_task` (`task_id`);

--
-- Indexes for table `variant`
--
ALTER TABLE `variant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `task_images`
--
ALTER TABLE `task_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `variant`
--
ALTER TABLE `variant`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `level`
--
ALTER TABLE `level`
  ADD CONSTRAINT `fk_level_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `fk_response_task` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `fk_task_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_task_level1` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_task_variant1` FOREIGN KEY (`variant_id`) REFERENCES `variant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `task_images`
--
ALTER TABLE `task_images`
  ADD CONSTRAINT `fk_task_images_task` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
