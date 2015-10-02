-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2015 at 09:54 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutoring_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `userid`, `password`) VALUES
('da39a3ee5e6b4b0d3255bfef95601890afd80709', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('b23d0c7bb708db91c8b9415ae7caad6fe333f717', 'san', 'edba468a745e4cbbc9577206e94304b0858dfb40'),
('42625bfecef1fbf9ae6ffb9427f666c98e27559f', 'sand', 'b23d0c7bb708db91c8b9415ae7caad6fe333f717');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` varchar(100) NOT NULL,
  `picture` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `whyhere` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `picture`, `name`, `language`, `whyhere`, `skills`) VALUES
('42625bfecef1fbf9ae6ffb9427f666c98e27559f', 0, '', '', '', ''),
('b23d0c7bb708db91c8b9415ae7caad6fe333f717', 0, '', '', '', ''),
('da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE IF NOT EXISTS `workshops` (
  `workshopname` text NOT NULL,
  `datetime` datetime NOT NULL,
  `location` text NOT NULL,
  `category` text NOT NULL,
  `tutorname` text NOT NULL,
  `description` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`workshopname`, `datetime`, `location`, `category`, `tutorname`, `description`, `id`) VALUES
('PHP Intro', '2015-10-13 13:00:00', 'Room 25', 'PHP', 'Mike', 'A introduction into PHP.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
