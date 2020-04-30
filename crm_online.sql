-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 02:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'moon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prequest`
--

CREATE TABLE `tbl_prequest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `wdd` varchar(255) NOT NULL,
  `cms` varchar(255) NOT NULL,
  `seo` varchar(255) NOT NULL,
  `smo` varchar(255) NOT NULL,
  `swd` varchar(255) NOT NULL,
  `dwd` varchar(255) NOT NULL,
  `fwd` varchar(255) NOT NULL,
  `dr` varchar(255) NOT NULL,
  `whs` varchar(255) NOT NULL,
  `wm` varchar(255) NOT NULL,
  `ed` varchar(255) NOT NULL,
  `wta` varchar(255) NOT NULL,
  `opi` varchar(255) NOT NULL,
  `ld` varchar(255) NOT NULL,
  `da` varchar(255) NOT NULL,
  `osc` varchar(255) NOT NULL,
  `nd` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `query` longtext NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prequest`
--

INSERT INTO `tbl_prequest` (`id`, `name`, `email`, `contact`, `company`, `wdd`, `cms`, `seo`, `smo`, `swd`, `dwd`, `fwd`, `dr`, `whs`, `wm`, `ed`, `wta`, `opi`, `ld`, `da`, `osc`, `nd`, `others`, `query`, `posting_date`, `remark`, `status`) VALUES
(1, 'Mahfujur Rahman', 'admin@admin.com', '01925555115', 'Student', 'Website Design & Development', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'adfaf', '2020-04-30 11:03:56', 'moon\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticket`
--

CREATE TABLE `tbl_ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `task_type` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `admin_remark` varchar(150) NOT NULL,
  `postig_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_remake_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ticket`
--

INSERT INTO `tbl_ticket` (`id`, `ticket_id`, `email`, `subject`, `task_type`, `priority`, `ticket`, `attachment`, `status`, `admin_remark`, `postig_date`, `admin_remake_date`) VALUES
(1, '13', 'overcastmoon@gmail.com', 'CSE', 'billing', 'important', 'adfadf', '', 'Open', 'à¦†à¦¦à¦«à¦¦à¦¾à¦«à¦¾', '2020-04-30 12:00:03', '2020-04-30 12:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `mobile`, `gender`, `address`, `status`) VALUES
(2, 'Mahfujur Rahman', 'overcastmoon@gmail.com', 'moon', '01758785406', 'm', 'Gourignagar,mujibnagar,Meherpur2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usercheek`
--

CREATE TABLE `tbl_usercheek` (
  `id` int(11) NOT NULL,
  `logindate` varchar(255) NOT NULL,
  `logintime` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varbinary(255) NOT NULL,
  `ip` varbinary(255) NOT NULL,
  `mac` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usercheek`
--

INSERT INTO `tbl_usercheek` (`id`, `logindate`, `logintime`, `user_id`, `username`, `email`, `ip`, `mac`, `city`, `country`) VALUES
(1, '2020/04/28', '04:50:22pm', 2, 'Mahfujur Rahman', 0x6f766572636173746d6f6f6e40676d61696c2e636f6d, 0x3a3a31, '5E-AA-1D-C7-38-8C', '', ''),
(2, '2020/04/28', '09:52:46pm', 2, 'Mahfujur Rahman', 0x6f766572636173746d6f6f6e40676d61696c2e636f6d, 0x3a3a31, '5E-AA-1D-C7-38-8C', '', ''),
(3, '2020/04/28', '11:18:43pm', 2, 'Mahfujur Rahman', 0x6f766572636173746d6f6f6e40676d61696c2e636f6d, 0x3a3a31, '5E-AA-1D-C7-38-8C', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prequest`
--
ALTER TABLE `tbl_prequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usercheek`
--
ALTER TABLE `tbl_usercheek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_prequest`
--
ALTER TABLE `tbl_prequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_usercheek`
--
ALTER TABLE `tbl_usercheek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
