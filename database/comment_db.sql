-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2016 at 09:38 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `id_comment` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`id_comment`, `name`, `email`, `date`, `comment`) VALUES
(1, 'Gani Gemilar', 'gani@mail.com', 'Sun, 17 January 2016 - 10:10 AM', 'Hello....'),
(5, 'Dhanar', 'asu', 'Sun, 17 January 2016 - 12:30 PM', 'asd'),
(6, 'asu', 'asu', 'Sun, 17 January 2016 - 2:24 PM', 'asu'),
(7, 'Dhanar Bitch', 'bitch', 'Sun, 17 January 2016 - 2:33 PM', 'You Bitch'),
(8, 'sdhalk', 'daksjdk', 'Sun, 17 January 2016 - 2:33 PM', 'sadk'),
(9, 'vggv', 'ff', 'Sun, 17 January 2016 - 3:46 PM', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `user_reply`
--

CREATE TABLE `user_reply` (
  `id_reply` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reply`
--

INSERT INTO `user_reply` (`id_reply`, `id_comment`, `name`, `email`, `date`, `comment`) VALUES
(1, 8, 'Gani Gemilar', 'sda', 'Sun, 17 January 2016 - 2:48 PM', 'ad'),
(2, 8, 'dhanar jancuk', 'jancuk', 'Sun, 17 January 2016 - 3:34 PM', 'jancuk'),
(3, 8, 'Dhanar Asu', 'Asu', 'Sun, 17 January 2016 - 3:38 PM', 'dhanar asu....'),
(4, 9, 'sadsa', 'asda', 'Sun, 17 January 2016 - 3:46 PM', 'asd'),
(5, 9, 'asda', 'sadddddd', 'Sun, 17 January 2016 - 3:47 PM', 'ddd'),
(7, 5, 'bacot', 'bacot', 'Sun, 17 January 2016 - 8:21 PM', 'bacot lu njing!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `user_reply`
--
ALTER TABLE `user_reply`
  ADD PRIMARY KEY (`id_reply`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_comment`
--
ALTER TABLE `user_comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_reply`
--
ALTER TABLE `user_reply`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
