-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2015 at 08:15 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_biodata`
--

CREATE TABLE IF NOT EXISTS `table_biodata` (
`id` int(5) unsigned NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `hobby` varchar(15) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `table_biodata`
--

INSERT INTO `table_biodata` (`id`, `firstname`, `lastname`, `hobby`, `phone`, `address`) VALUES
(1, 'Similiar', 'Production', 'Coding Style', '0911', 'Jakarta pusat'),
(2, 'putra', 'wonosobo', 'main script', '02678', 'jawa tengah ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_biodata`
--
ALTER TABLE `table_biodata`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_biodata`
--
ALTER TABLE `table_biodata`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
