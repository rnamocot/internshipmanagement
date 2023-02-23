-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 02:28 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rn_interships_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `rn_main_users`
--

CREATE TABLE `rn_main_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_type` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rn_main_users`
--

INSERT INTO `rn_main_users` (`id`, `name`, `username`, `email`, `password`, `access_type`, `created_date`) VALUES
(1, 'renie2', 'renie2', 'renie2', '$2y$10$yEGXfIAeVOpknes9Se3q0.JtppVKXMFayVg3i6OMCSLitIRuxjy.K', '', '2023-02-22 12:51:22'),
(2, 'Renie Namocot', 'renie', 'test@yopmail.com', '$2y$10$Pwa5i0GOgNwex7X9kEIpJe61iKDka1AvwUy2Ps5OyF.RBgzBu6.bG', '', '2023-02-22 12:52:41'),
(3, 'Renie Namocot', 'renie', 'test@yopmail.com', '$2y$10$7Oc3gjfqhORralqzysvwB.vGP4BxifUj4Tk5QWa2PpRtFntldV4na', '', '2023-02-22 13:17:12'),
(4, 'BWB Website', 'rnamocot', 'renie', '$2y$10$f/k4PR43iGCfnZHJiv.fmObHGiEYcZ4egmqDDKjjV7n42c7tQDB2K', '', '2023-02-22 13:29:54'),
(5, 'Renie Namocot', 'renren', 'pogi@gmail.com', '$2y$10$gX7EFBqmhBOjyobiLVhD5ufvD469x7FcSFdN9NjOpx0OeSPk3giri', '', '2023-02-22 13:47:56'),
(6, 'Renie Namocot', 'renie', 'renie', '$2y$10$m.jWjxP35XivRFY8JeZzM.k08KQA29XdNLrHRvBMQHQ5tJpbLrI/S', '', '2023-02-22 14:27:58'),
(7, 'Renie Namocot', 'ako', 'ako@gmail.com', '$2y$10$ujuFJNpsGN9a8cYufRF92.Fr2sbYdTA7AyO0fD37Tf6SbzJ/2O3uK', '', '2023-02-23 00:58:21'),
(8, 'Renie Namocot', 'ako3', 'ako@gmail.com', '$2y$10$565vlj3HT1n2xcTF4umKoe7AudpwLA.6Jyy6MltgDfsVQXF8CK0oy', '', '2023-02-23 01:03:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rn_main_users`
--
ALTER TABLE `rn_main_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rn_main_users`
--
ALTER TABLE `rn_main_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
