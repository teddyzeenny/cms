-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2012 at 04:45 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `page_id`, `created`, `modified`) VALUES
(1, 'tewsts', 1, 1, '2012-06-25 14:53:36', '2012-06-25 19:17:39'),
(2, 'hi again', 1, 1, '2012-06-25 14:56:00', '2012-06-25 14:56:00'),
(3, 'coooooooool!', 1, 1, '2012-06-25 15:07:27', '2012-06-25 15:07:27'),
(4, '', 1, 1, '2012-06-25 15:11:00', '2012-06-25 15:11:00'),
(5, '', 1, 1, '2012-06-25 15:11:02', '2012-06-25 15:11:02'),
(6, '', 1, 1, '2012-06-25 15:11:04', '2012-06-25 15:11:04'),
(7, '', 1, 1, '2012-06-25 15:11:05', '2012-06-25 15:11:05'),
(8, '', 1, 1, '2012-06-25 15:11:06', '2012-06-25 15:11:06'),
(9, '<script>alert(1);</script>', 1, 1, '2012-06-25 19:02:31', '2012-06-25 19:02:31'),
(10, '<h1>sdflkjsd</h1>', 1, 1, '2012-06-25 19:03:48', '2012-06-25 19:03:48'),
(12, '', 1, 1, '2012-06-01 00:00:00', '2012-06-25 19:09:52'),
(13, 'lol', 1, 1, '2012-06-25 19:30:26', '2012-06-25 19:30:26'),
(14, 'test', 1, 1, '2012-06-25 19:33:01', '2012-06-25 19:33:01'),
(15, '', 1, 1, '2012-06-25 20:12:23', '2012-06-25 20:12:23'),
(16, '', 1, 1, '2012-06-25 20:12:55', '2012-06-25 20:12:55'),
(17, 'hi\r\n', 1, 1, '2012-06-25 20:16:27', '2012-06-25 20:16:27'),
(18, 'hi', 1, 1, '2012-06-25 20:17:39', '2012-06-25 20:17:39'),
(19, 'hi', 1, 1, '2012-06-25 20:17:44', '2012-06-25 20:17:44'),
(20, 'lol', 1, 1, '2012-06-25 20:17:47', '2012-06-25 20:17:47'),
(21, '123\r\n', 1, 1, '2012-06-27 11:39:16', '2012-06-27 11:39:16'),
(22, '789\r\n', 1, 1, '2012-06-27 11:40:49', '2012-06-27 11:40:49'),
(23, 'aaa', 1, 1, '2012-06-27 11:41:00', '2012-06-27 11:41:00'),
(24, 'bob', 1, 1, '2012-06-27 11:42:01', '2012-06-27 11:42:01'),
(25, 'hi', 1, 2, '2012-06-27 11:57:15', '2012-06-27 11:57:15'),
(26, '222', 1, 2, '2012-06-27 11:57:43', '2012-06-27 11:57:43'),
(27, '22', 1, 2, '2012-06-27 11:58:07', '2012-06-27 11:58:07'),
(28, 'test', 1, 2, '2012-06-27 12:26:37', '2012-06-27 12:26:37'),
(29, 'aaa', 1, 2, '2012-06-27 13:46:48', '2012-06-27 13:46:48'),
(30, 'please', 1, 2, '2012-06-27 13:46:52', '2012-06-27 13:46:52'),
(31, 'hi', 1, 2, '2012-06-27 13:59:13', '2012-06-27 13:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `content`, `user_id`, `created`, `modified`) VALUES
(1, 'home', 'home', 'pleas', 1, '2012-06-22 00:00:00', '2012-06-27 14:06:34'),
(2, 'about', 'About', 'This is the about content', 2, '2012-06-22 00:00:00', '2012-06-22 15:31:23'),
(5, 'title-2', 'title 2', 'content 2', 1, '2012-06-22 13:00:41', '2012-06-27 12:25:03'),
(6, 'title-2-1', 'title 2', 'content 4', 1, '2012-06-22 13:00:51', '2012-06-22 15:31:27'),
(7, 'new-title', 'New title', 'new content', 1, '2012-06-25 14:24:56', '2012-06-25 14:24:56'),
(8, 'sdlfkj', 'sdlfkj', 'lksjdflkasdjf', 1, '2012-06-25 19:20:09', '2012-06-25 19:20:09'),
(9, 'win', 'win', 'You won!', 1, '2012-06-27 13:44:17', '2012-06-27 13:44:29'),
(10, 'title', 'Title', 'content', 1, '2012-06-27 13:59:32', '2012-06-27 13:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created`, `modified`) VALUES
(1, 'Rami', 'rami1', '17813fd15e28419c102fad2fca46bdb1280cf03f', '2012-06-22 00:00:00', '2012-06-22 20:03:17'),
(2, 'teddy', 'teddy', '962b2d2b8e72dc6771bca613d49b46fb', '2012-06-22 00:00:00', '2012-06-22 00:00:00'),
(3, 'raz', 'admin', 'admin', '2012-06-22 17:21:43', '2012-06-22 19:04:34'),
(7, 'ror', 'ror', '993a7ae7a863813cf95028b50708e222', '2012-06-22 18:48:46', '2012-06-22 18:48:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
