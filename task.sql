-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 04:34 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasklib`
--

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
  `category_id` bigint(20) DEFAULT NULL,
  `level_id` bigint(20) NOT NULL,
  `variant_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task`, `description`, `created_date`, `type`, `category_id`, `level_id`, `variant_id`) VALUES
(26, 'Movie Night', NULL, '2019-01-27 19:28:20', 'Mathematic', NULL, 1, 1),
(27, 'Movie Night', NULL, '2019-01-27 19:41:47', 'Mathematic', NULL, 1, 1),
(28, 'Movie Night', NULL, '2019-01-27 19:42:32', 'Mathematic', NULL, 1, 1),
(29, 'Бодлого', NULL, '2019-01-27 19:45:00', 'Mathematic', NULL, 2, 1),
(30, 'Бодлого 2', NULL, '2019-01-27 19:46:25', 'Mathematic', NULL, 1, 7),
(31, 'Bodlogo ', NULL, '2019-01-27 19:47:15', 'Mathematic', NULL, 1, 1),
(32, '<p><img src="https://e-surgalt.com/upload/img/problems/math/prob4/prob01_25_01.gif" />&nbsp;илэрхийллийн утгыг олно уу.</p>\n', NULL, '2019-01-28 11:02:29', 'Mathematic', NULL, 1, 1),
(33, '<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,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" style="height:49px; width:169px" />&nbsp;илэрхийллийн утгыг олно уу?</span></span></span></span></p>\n', NULL, '2019-01-28 11:10:24', 'Mathematic', NULL, 1, 4),
(34, '<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,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" style="height:49px; width:169px" />&nbsp;бодлогыг бодно уу.&nbsp;</span></span></span></span></p>\n', NULL, '2019-01-28 11:19:24', 'Mathematic', NULL, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_task_category1_idx` (`category_id`),
  ADD KEY `fk_task_level1_idx` (`level_id`),
  ADD KEY `fk_task_variant1_idx` (`variant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `fk_task_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_task_level1` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_task_variant1` FOREIGN KEY (`variant_id`) REFERENCES `variant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
