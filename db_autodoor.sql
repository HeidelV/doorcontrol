-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2024 at 01:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_autodoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `col_log_id` int(11) NOT NULL,
  `col_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `col_action` varchar(100) NOT NULL,
  `col_method` varchar(100) NOT NULL,
  `col_door_state` varchar(100) NOT NULL,
  `col_profile_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`col_log_id`, `col_timestamp`, `col_action`, `col_method`, `col_door_state`, `col_profile_id`) VALUES
(1, '2024-11-25 07:00:50', 'Open Door', 'Fingerprint', 'Open', 1),
(2, '2024-11-25 07:00:57', 'Open Door', 'Fingerprint', 'Open', 1),
(3, '2024-11-25 07:01:16', 'Open Door', 'Fingerprint', 'Open', 1),
(4, '2024-11-25 07:01:24', 'Open Door', 'Keypad', 'Open', NULL),
(5, '2024-11-25 07:05:56', 'Open Door', 'Fingerprint', 'Open', 1),
(6, '2024-11-25 07:06:24', 'Open Door', 'Keypad', 'Open', NULL),
(7, '2024-11-25 07:06:37', 'Close Door', 'Keypad', 'Open', NULL),
(8, '2024-11-25 07:06:48', 'Open Door', 'Keypad', 'Open', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_password`
--

CREATE TABLE `tbl_password` (
  `col_password_id` int(11) NOT NULL,
  `col_timestamp` datetime NOT NULL,
  `col_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_password`
--

INSERT INTO `tbl_password` (`col_password_id`, `col_timestamp`, `col_password`) VALUES
(1, '2024-11-24 18:01:32', '12342');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

CREATE TABLE `tbl_profiles` (
  `col_profile_id` int(11) NOT NULL,
  `col_fname` int(11) NOT NULL,
  `col_lname` int(11) NOT NULL,
  `col_fingerprint_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`col_log_id`);

--
-- Indexes for table `tbl_password`
--
ALTER TABLE `tbl_password`
  ADD PRIMARY KEY (`col_password_id`);

--
-- Indexes for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
  ADD PRIMARY KEY (`col_profile_id`),
  ADD UNIQUE KEY `col_fingerprint_id` (`col_fingerprint_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `col_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_password`
--
ALTER TABLE `tbl_password`
  MODIFY `col_password_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
  MODIFY `col_profile_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
