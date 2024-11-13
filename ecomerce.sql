-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 09:45 AM
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
-- Database: `ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libelle` varchar(256) NOT NULL,
  `prix` float NOT NULL,
  `qte` int(11) NOT NULL,
  `des` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `promo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `prix`, `qte`, `des`, `image`, `promo`) VALUES
(1, 'Asus i7 1to', 1500, 100, 'azzazazaazaz', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2Fpcparadize%2F&psig=AOvVaw0O2jM9h8UgRSLbWe5MmKDM&ust=1731573182170000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMi1z-3y2IkDFQAAAAAdAAAAABAE', 0),
(2, 'Asus i7 1to', 1500, 100, 'azzazazaazaz', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2Fpcparadize%2F&psig=AOvVaw0O2jM9h8UgRSLbWe5MmKDM&ust=1731573182170000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMi1z-3y2IkDFQAAAAAdAAAAABAE', 0),
(3, 'dell i5 8ram 1to', 2000, 100, 'azzazazaazaz', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2Fpcparadize%2F&psig=AOvVaw0O2jM9h8UgRSLbWe5MmKDM&ust=1731573182170000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMi1z-3y2IkDFQAAAAAdAAAAABAE', 0),
(4, 'Asus i7 32ram 1to', 3500, 100, 'azzazazaazaz', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2Fpcparadize%2F&psig=AOvVaw0O2jM9h8UgRSLbWe5MmKDM&ust=1731573182170000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMi1z-3y2IkDFQAAAAAdAAAAABAE', 0),
(5, 'hp 16 ram i3 1to', 2500, 100, 'azzazazaazaz', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2Fpcparadize%2F&psig=AOvVaw0O2jM9h8UgRSLbWe5MmKDM&ust=1731573182170000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMi1z-3y2IkDFQAAAAAdAAAAABAE', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
