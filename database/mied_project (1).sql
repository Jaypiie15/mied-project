-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 08:48 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mied_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tbl`
--

CREATE TABLE `accounts_tbl` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts_tbl`
--

INSERT INTO `accounts_tbl` (`id`, `lastname`, `firstname`, `middlename`, `username`, `password`, `role`) VALUES
(14, 'Bobila', 'John Paul', 'Bobila', 'Jaypiiie15', '$2y$10$0b5NJjvQb3JA6bRdNbbpg.d91H5UyvsQkHFUVvr0JOJqNSH.0WmBa', '0'),
(15, 'sample', 'sample', 'sample', 'administrator', '$2y$10$YZJyxVoLW8CdYon0JBsKfOgHtgGl3e6nB75mH9frF8IHxY33UQbBS', '0'),
(16, 'villareal', 'marianne', 'villareal', 'mjvillareal', '$2y$10$J19kdoIRaiLEE88rD67byu8C/Z0mbYrzfqaivpyhtyihLeP37SKse', '0');

-- --------------------------------------------------------

--
-- Table structure for table `commodity`
--

CREATE TABLE `commodity` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commodity`
--

INSERT INTO `commodity` (`id`, `type`) VALUES
(1, 'Chicken Joy'),
(2, 'Chicken Sad'),
(6, 'Pork'),
(7, 'Beef');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`) VALUES
(1, 'sample'),
(2, 'Canada'),
(3, 'USA'),
(4, 'Ireland');

-- --------------------------------------------------------

--
-- Table structure for table `cut_type`
--

CREATE TABLE `cut_type` (
  `id` int(11) NOT NULL,
  `cut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cut_type`
--

INSERT INTO `cut_type` (`id`, `cut`) VALUES
(1, 'sample'),
(2, 'Chicken Leg Quarter'),
(3, 'MDM Chicken'),
(4, 'Beef Body Fats Fz'),
(5, 'sample');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hs_code`
--

CREATE TABLE `hs_code` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hs_code`
--

INSERT INTO `hs_code` (`id`, `code`) VALUES
(1, '0001'),
(2, '0002'),
(3, '0003'),
(4, '0004'),
(5, '#03 - 030817');

-- --------------------------------------------------------

--
-- Table structure for table `meat_cuts`
--

CREATE TABLE `meat_cuts` (
  `id` int(11) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `cut_type` varchar(255) NOT NULL,
  `hscode` varchar(255) NOT NULL,
  `name_number` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `show` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meat_cuts`
--

INSERT INTO `meat_cuts` (`id`, `kind`, `cut_type`, `hscode`, `name_number`, `remarks`, `country`, `image`, `show`) VALUES
(5, 'Chicken', 'Chicken Leg Quarter', '0001', '10', 'Chicken Joy', 'Canada', '../../images/0Primary Packaging.JPG', ''),
(6, 'sample', 'Chicken Leg Quarter', '0001', '12', 'asdasdas', 'Canada', '../../images/011.png', ''),
(7, 'sample', 'Chicken Leg Quarter', '0001', 'sadas', 'asdasdas', 'Canada', '../../images/112.png', ''),
(8, 'sample', 'Chicken Leg Quarter', '0002', 'esfdsf', 'sdfsdfsdf', 'Canada', '../../images/0IMG_1723.JPG', ''),
(9, 'sample', 'Chicken Leg Quarter', '0002', 'esfdsf', 'sdfsdfsdf', 'Canada', '../../images/1IMG_1724.JPG', ''),
(10, 'sample', 'Chicken Leg Quarter', '0002', 'esfdsf', 'sdfsdfsdf', 'Canada', '../../images/2IMG_1725.JPG', ''),
(11, 'sample', 'Chicken Leg Quarter', '0002', 'esfdsf', 'sdfsdfsdf', 'Canada', '../../images/3IMG_1726.JPG', ''),
(12, 'Chicken', 'MDM Chicken', '0003', 'Tyson P-248', 'frozen MDM', 'USA', '../../images/0IMG_0220.JPG', ''),
(13, 'Chicken', 'MDM Chicken', '0003', 'Tyson P-248', 'frozen MDM', 'USA', '../../images/1IMG_0221.JPG', ''),
(14, 'Chicken', 'MDM Chicken', '0003', 'Tyson P-248', 'frozen MDM', 'USA', '../../images/2IMG_0225.JPG', ''),
(15, 'Beef', 'Beef Body Fats Fz', '0004', 'IE 368', 'no hs code', 'Ireland', '../../images/0IMG_0230.JPG', ''),
(16, 'Beef', 'Beef Body Fats Fz', '0004', 'IE 368', 'no hs code', 'Ireland', '../../images/1IMG_0231.JPG', ''),
(17, 'Beef', 'Beef Body Fats Fz', '0004', 'IE 368', 'no hs code', 'Ireland', '../../images/2IMG_0232.JPG', ''),
(18, 'Beef', 'Beef Body Fats Fz', '0004', 'IE 368', 'no hs code', 'Ireland', '../../images/3IMG_0234.JPG', ''),
(19, 'Beef', 'Beef Body Fats Fz', '0004', 'IE 368', 'no hs code', 'Ireland', '../../images/0Untitled-2.png', ''),
(20, 'Chicken', 'Chicken Leg Quarter', '#03 - 030817', 'Pilgrims P-17340', 'no hs code', 'USA', '../../images/0IMG_0236.JPG', ''),
(21, 'Chicken', 'Chicken Leg Quarter', '#03 - 030817', 'Pilgrims P-17340', 'no hs code', 'USA', '../../images/1IMG_0238.JPG', ''),
(22, 'Chicken', 'Chicken Leg Quarter', '#03 - 030817', 'Pilgrims P-17340', 'no hs code', 'USA', '../../images/2IMG_0239.JPG', ''),
(23, 'Chicken', 'Chicken Leg Quarter', '#03 - 030817', 'Pilgrims P-17340', 'no hs code', 'USA', '../../images/3IMG_0243.JPG', ''),
(24, 'Beef', 'Beef Body Fats Fz', '0001', '', '', 'sample', '../../images/0Banner Website_FIN.png', ''),
(25, 'Chicken', 'Chicken Leg Quarter', '0001', '1234', '', 'USA', '../../images/0IMG_0321.JPG', ''),
(26, 'Chicken', 'Chicken Leg Quarter', '0001', 'S116', 'Chicken Drumstick', 'Canada', '../../images/0IMG_0321.JPG', ''),
(27, 'Chicken', 'Chicken Leg Quarter', '0001', 'S116', 'Chicken Drumstick', 'Canada', '../../images/1IMG_0322.JPG', ''),
(28, 'Chicken', 'Chicken Leg Quarter', '0001', 'S116', 'Chicken Drumstick', 'Canada', '../../images/2IMG_0323.JPG', ''),
(29, 'Chicken', 'Chicken Leg Quarter', '0001', 'S116', 'Chicken Drumstick', 'Canada', '../../images/3IMG_0325.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `title_footer`
--

CREATE TABLE `title_footer` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mini_name` varchar(255) NOT NULL,
  `footer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title_footer`
--

INSERT INTO `title_footer` (`id`, `title`, `name`, `mini_name`, `footer`) VALUES
(2, 'Meat Cuts Catalogue', 'Meat Cuts Catalogue', 'MCC', 'National Meat Inspection Services   Meat Cuts Catalogue  (c) 2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts_tbl`
--
ALTER TABLE `accounts_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commodity`
--
ALTER TABLE `commodity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cut_type`
--
ALTER TABLE `cut_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hs_code`
--
ALTER TABLE `hs_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meat_cuts`
--
ALTER TABLE `meat_cuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_footer`
--
ALTER TABLE `title_footer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts_tbl`
--
ALTER TABLE `accounts_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `commodity`
--
ALTER TABLE `commodity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cut_type`
--
ALTER TABLE `cut_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hs_code`
--
ALTER TABLE `hs_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `meat_cuts`
--
ALTER TABLE `meat_cuts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `title_footer`
--
ALTER TABLE `title_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
