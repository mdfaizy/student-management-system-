-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 03:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` varchar(255) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `select_company` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `employee_name`, `institution`, `company_name`, `select_company`, `area`, `package`, `stream`) VALUES
('', '12', 'sw', 'ww', 'option1', 'dd', 'dd', 'dd'),
('', 'dcvb n', 'cc', 'cc', 'option1', 'cc', 'cc', 'cc'),
('', 'dcvb n', 'ss', 'ss', 'option1', 'ss', 'ss', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `regisration_No` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `session` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `student_name`, `institution`, `regisration_No`, `department`, `stream`, `session`) VALUES
(0, 'drf', 'ff', 'ff', 'ff', 'ff', 0),
(0, 'drf', 'ff', 'ff', 'ff', 'ff', 0);

-- --------------------------------------------------------

--
-- Table structure for table `new_admission`
--

CREATE TABLE `new_admission` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `wbjee_rank` int(11) NOT NULL,
  `jelet_rank` int(11) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `application_no` varchar(255) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `domicile` varchar(255) DEFAULT NULL,
  `state` varchar(255) NOT NULL,
  `pincode_no` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `h_schoole_name` varchar(255) NOT NULL,
  `h_roll_no` varchar(20) NOT NULL,
  `h_registration_no` varchar(20) NOT NULL,
  `h_board_name` varchar(255) NOT NULL,
  `h_year_of_passing` year(4) NOT NULL,
  `h_percentage` decimal(5,2) NOT NULL,
  `s_schoole_name` varchar(255) NOT NULL,
  `s_roll_no` varchar(20) NOT NULL,
  `s_registration_no` varchar(20) NOT NULL,
  `s_board_name` varchar(255) NOT NULL,
  `s_year_of_passing` year(4) NOT NULL,
  `s_percentage` decimal(5,2) NOT NULL,
  `upload1` varchar(255) NOT NULL,
  `upload2` varchar(255) NOT NULL,
  `upload3` varchar(255) NOT NULL,
  `upload4` varchar(255) NOT NULL,
  `upload5` varchar(255) NOT NULL,
  `upload6` varchar(255) NOT NULL,
  `upload7` varchar(255) NOT NULL,
  `upload8` varchar(255) NOT NULL,
  `upload9` varchar(255) NOT NULL,
  `upload10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_admission`
--

INSERT INTO `new_admission` (`id`, `student_name`, `father_name`, `mother_name`, `date_of_birth`, `email`, `wbjee_rank`, `jelet_rank`, `stream`, `application_no`, `phone_no`, `domicile`, `state`, `pincode_no`, `address`, `h_schoole_name`, `h_roll_no`, `h_registration_no`, `h_board_name`, `h_year_of_passing`, `h_percentage`, `s_schoole_name`, `s_roll_no`, `s_registration_no`, `s_board_name`, `s_year_of_passing`, `s_percentage`, `upload1`, `upload2`, `upload3`, `upload4`, `upload5`, `upload6`, `upload7`, `upload8`, `upload9`, `upload10`) VALUES
(1, '', '', '', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0000, '0.00', '', '', '', '', 0000, '0.00', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0000, '0.00', '', '', '', '', 0000, '0.00', '', '', '', '', '', '', '', '', '', ''),
(3, 'terst', 'ddd', 'dd', '0000-00-00', 'dd@ff.com', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0000, '0.00', '', '', '', '', 0000, '0.00', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0000, '0.00', '', '', '', '', 0000, '0.00', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0000, '0.00', '', '', '', '', 0000, '0.00', '', '', '', '', '', '', '', '', '', ''),
(6, 'saif', 'ssa', 'ssvg', '2023-09-08', 'test@gmail.com', 1, 1, 'it', '132', '22666599999', '5599', '5959', '5999', '599', '999', '999', '9989', '99', 2022, '255.00', 'fff', '132', '1352', 'bseb', 2023, '89.00', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg', 'image6.jpg', 'image7.jpg', 'image8.jpg', 'image9.jpg', 'image10.jpg', 'image11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `application_no` varchar(255) NOT NULL,
  `session` int(25) NOT NULL,
  `phone` int(15) NOT NULL,
  `state` varchar(255) NOT NULL,
  `gate_score` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `data_uploaded` varchar(255) NOT NULL,
  `state2` varchar(255) NOT NULL,
  `cgpa1` varchar(255) NOT NULL,
  `cgpa2` varchar(255) NOT NULL,
  `cgpa3` varchar(255) NOT NULL,
  `cgpa4` varchar(255) NOT NULL,
  `total_cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`id`, `student_name`, `father_name`, `mother_name`, `date`, `email`, `stream`, `application_no`, `session`, `phone`, `state`, `gate_score`, `document`, `data_uploaded`, `state2`, `cgpa1`, `cgpa2`, `cgpa3`, `cgpa4`, `total_cgpa`) VALUES
(0, 'terst', 'ccf', 'dd', '2023-09-01', ' dd@dd.com', 'fgf', 'ff', 0, 0, 'ff', 'ff', 'PHOTO_BINITA.jpg', 'PHOTO_BINITA.jpg', 'ggf', ' vv', ' vv', ' vv', ' ', 'vv'),
(0, 'terst', 'ccf', 'dd', '2023-09-01', ' dd@dd.com', 'fgf', 'ff', 0, 0, 'ff', 'ff', 'PHOTO_BINITA.jpg', 'PHOTO_BINITA.jpg', 'ggf', ' vv', ' vv', ' vv', ' ', 'vv'),
(0, 'terst', 'ccf', 'dd', '2023-09-01', ' dd@dd.com', 'fgf', 'ff', 0, 0, 'ff', 'ff', 'PHOTO_BINITA.jpg', 'PHOTO_BINITA.jpg', 'ggf', ' vv', ' vv', ' vv', ' ', 'vv'),
(0, 'terst', 'qq', 'qq', '2023-09-07', ' qq@aa.com', 'dd', 'dd', 0, 0, 'dd', 'dd', 'PHOTO_BINITA.jpg', 'PHOTO_BINITA.jpg', 'dd', ' dd', ' dd', ' dd', ' dd', 'dd'),
(0, 'terst', 'qq', 'qq', '2023-09-07', ' qq@aa.com', 'dd', 'dd', 0, 0, 'dd', 'dd', 'PHOTO_BINITA.jpg', 'PHOTO_BINITA.jpg', 'dd', ' dd', ' dd', ' dd', ' dd', 'dd'),
(0, 'terst', 'qq', 'qq', '2023-09-07', ' qq@aa.com', 'dd', 'dd', 0, 0, 'dd', 'dd', 'PHOTO_BINITA.jpg', 'PHOTO_BINITA.jpg', 'dd', ' dd', ' dd', ' dd', ' dd', 'dd'),
(0, 'tesy', 'gdtdf', 'hdvgdvg', '1121-02-02', ' aa@aa.com', 'dgvdg', 'hgvdgvdg', 0, 0, 'vgcvg', 'vgvg', 'PHOTO_BINITA.jpg', 'PHOTO_BINITA.jpg', 'vv', ' vv', ' vv', ' vv', ' vv', 'vv'),
(0, 'tesy', 'gdtdf', 'hdvgdvg', '1121-02-02', ' aa@aa.com', 'dgvdg', 'hgvdgvdg', 0, 0, 'vgcvg', 'vgvg', 'PHOTO_BINITA.jpg', 'PHOTO_BINITA.jpg', 'vv', ' vv', ' vv', ' vv', ' vv', 'vv'),
(0, 'tesy', 'gdtdf', 'hdvgdvg', '1121-02-02', ' aa@aa.com', 'dgvdg', 'hgvdgvdg', 0, 0, 'vgcvg', 'vgvg', 'PHOTO_BINITA.jpg', 'PHOTO_BINITA.jpg', 'vv', ' vv', ' vv', ' vv', ' vv', 'vv');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'tet', 'tet@gmail.com', '$2y$10$4PTDpTTWrL/g0umLpVNnzuWvcSQxSRBrVaoQYSz7PMKu/JIM6zrp6'),
(2, 'Test', 'tets@test.com', '$2y$10$ieDwC7FOF0F/MRUmUKPqdetgImEQA9WhPeWAl5RREUSLMoDZCTKAe'),
(3, 'Ziyaul', 'ziyaul@abc.com', '$2y$10$T.PP92WZrOG1lzK5flh73./7dhAI7RDGcLUxN5L.TjwPAgOC0IM22'),
(4, 'saif', 'saif@saif.com', '$2y$10$gyXzyJgMdriPrB/4HJWvIuVDR0fPO3OtkP30JtGNWtdPiX.nMpJQS'),
(5, 'Faizy', 'faizy@faizy.com', '$2y$10$T.qtcleR7cm8jgVhBRkZ..LbEGwdMuqRTbfCgkVGADXR7.hBUnWdK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_admission`
--
ALTER TABLE `new_admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_admission`
--
ALTER TABLE `new_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
