-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2018 at 09:34 PM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `callforaaruush`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `committee1` varchar(255) NOT NULL,
      `committee2` varchar(255) NOT NULL,
  `committee3` varchar(255) NOT NULL,
    
  `que1` varchar(1000) NOT NULL,
  `que2` varchar(1000) NOT NULL,
  `que3` varchar(1000) NOT NULL,
  `que4` varchar(1000) NOT NULL,
  `que5` varchar(1000) NOT NULL,
  `que6` varchar(1000) NOT NULL,
  `que7` varchar(1000) NOT NULL,
  `que8` varchar(1000) NOT NULL,
  `que9` varchar(1000) NOT NULL,
  `que10` varchar(1000) NOT NULL,
  `que11` varchar(1000) NOT NULL,
  `que12` varchar(1000) NOT NULL,
  `que13` varchar(1000) NOT NULL,
  `que14` varchar(1200) NOT NULL,
  `que15` varchar(1000) NOT NULL,
  `que16` varchar(1000) NOT NULL,
  `que17` varchar(1000) NOT NULL,
  `que18` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `reg_no`, `phone`, `email`, `committee1`,`committee2`,`committee3`, `que1`, `que2`, `que3`, `que4`, `que5`, `que6`, `que7`, `que8`, `que9`, `que10`, `que11`, `que12`, `que13`, `que14`, `que15`, `que16`, `que17`, `que18`) VALUES
(2, '', 'Array', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'sdfsd', 'Array', 'sdfs', 'sdfsd@g', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dsa', 'dfsd', 'dfs', '111', 'asdfs'),
(4, 'sdfsd', 'Array', 'sdfs', 'sdfsd@g', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dsa', 'dfsd', 'dfs', '111', 'asdfs'),
(5, 'sdfsd', 'Array', 'sdfs', 'sdfsd@g', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dsa', 'dfsd', 'dfs', '111', 'asdfs'),
(6, 'sdfsd', 'Array', 'sdfs', 'sdfsd@g', '', 'sfdasfasho', 'asfdhifo', 'asdfasfh', 'oasfiao', 'dsfsdoihf', 'sdfoih', 'dfsohfoisd', 'dfosdhfo', 'asfoshfo', 'sdfoishd', 'sfhsdof', 'sfsdohf', 'dsfhsdof', 'dsa', 'dfsd', 'dfs', '22', 'asdfs'),
(7, 'sdfsd', 'Array', 'sdfs', 'sdfsd@g', 'safassd', 'sfdasfasho', 'asfdhifo', 'asdfasfh', 'oasfiao', 'dsfsdoihf', 'sdfoih', 'dfsohfoisd', 'dfosdhfo', 'asfoshfo', 'sdfoishd', 'sfhsdof', 'sfsdohf', 'dsfhsdof', 'dsa', 'dfsd', 'dfs', '22', 'asdfs'),
(8, 'sdfsd', 'Array', 'sdfs', 'sdfsd@g', 'safassd', 'sfdasfasho', 'asfdhifo', 'asdfasfh', 'oasfiao', 'dsfsdoihf', 'sdfoih', 'dfsohfoisd', 'dfosdhfo', 'asfoshfo', 'sdfoishd', 'sfhsdof', 'sfsdohf', 'dsfhsdof', 'dsa', 'dfsd', 'dfs', '22', 'asdfs'),
(9, 'sdfsd', 'Array', 'sdfs', 'sdfsd@g', 'safassd', 'sfdasfasho', 'asfdhifo', 'asdfasfh', 'oasfiao', 'dsfsdoihf', 'sdfoih', 'dfsohfoisd', 'dfosdhfo', 'asfoshfo', 'sdfoishd', 'sfhsdof', 'sfsdohf', 'dsfhsdof', 'dsa', 'dfsd', 'dfs', '22', 'asdfs'),
(10, 'sdfsd', 'Array', 'sdfs', 'sdfsd@g', 'safassd', 'sfdasfasho', 'asfdhifo', 'asdfasfh', 'oasfiao', 'dsfsdoihf', 'sdfoih', 'dfsohfoisd', 'dfosdhfo', 'asfoshfo', 'sdfoishd', 'sfhsdof', 'sfsdohf', 'dsfhsdof', 'dsa', 'dfsd', 'dfs', '22', 'asdfs'),
(11, 'sdgfdsf', 'Array', 'dfsdfsd', 'sdfsdf@g', 'dsfds', 'dsfsd', 'fsdf', 'dfsdf', 'dfsf', 'dsfsdf', 'sdfsdf', 'dsfsf', 'sdfsfs', 'sdfsdf', 'sdfsdf', 'dfsdf', 'fdsfsd', 'dfsfd', 'sfsf', 'fsffpoj', 'sfdpjo', '22', 'dfsfpoj'),
(12, 'dsfsd', 'Array', 'sadfas', 'safsd@g', 'dfsd', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sfsd', 'dfsd', 'sdfsd', '21', 'dfsdf'),
(13, 'dsfsd', 'Array', 'sadfas', 'safsd@g', 'dfsd', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sfsd', 'dfsd', 'sdfsd', '21', 'dfsdf'),
(14, 'sdfshi', 'sfsdhi', 'sdfsdfioh', 'dsfhsdoifh@gg', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(15, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(16, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(17, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(18, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(19, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(20, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(21, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(22, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(23, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(24, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(25, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(26, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(27, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(28, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(29, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(30, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(31, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(32, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(33, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(34, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(35, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(36, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', '', '', '', '', '', '', '', '', '', '', '', '', '', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(37, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', 'csdsdfjsdfio', 'fdsdifjsdiofjsdioj', 'dfsdifojsdiof', 'sdfisdjfiosdjfio', 'sdfsdfjoisj', 'adfjsdiofjoisd', 'dsfiojsdfiosdjfio', 'sdfjoisdjfiosdjioj', 'dfjisdfoisdjfoi', 'dsfiosdjfosdijoi', 'sdfsdiojfsdoijfo', 'sdfiosdjfiosdjfio', 'dfjoisdjfsdoifjosdi', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(38, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', 'csdsdfjsdfio', 'fdsdifjsdiofjsdioj', 'dfsdifojsdiof', 'sdfisdjfiosdjfio', 'sdfsdfjoisj', 'adfjsdiofjoisd', 'dsfiojsdfiosdjfio', 'sdfjoisdjfiosdjioj', 'dfjisdfoisdjfoi', 'dsfiosdjfosdijoi', 'sdfsdiojfsdoijfo', 'sdfiosdjfiosdjfio', 'dfjoisdjfsdoifjosdi', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd'),
(39, 'sdfshi', 'sfsdhi', 'sdfsdfioh', '', 'dfoisdh', 'csdsdfjsdfio', 'fdsdifjsdiofjsdioj', 'dfsdifojsdiof', 'sdfisdjfiosdjfio', 'sdfsdfjoisj', 'adfjsdiofjoisd', 'dsfiojsdfiosdjfio', 'sdfjoisdjfiosdjioj', 'dfjisdfoisdjfoi', 'dsfiosdjfosdijoi', 'sdfsdiojfsdoijfo', 'sdfiosdjfiosdjfio', 'dfjoisdjfsdoifjosdi', 'safdasd', 'sdfsd', 'dsfsdf', '12', 'sdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
