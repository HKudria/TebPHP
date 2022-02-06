-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 06, 2022 at 01:06 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zaliczenia`
--

-- --------------------------------------------------------

--
-- Table structure for table `uprawniena`
--

CREATE TABLE `uprawniena` (
  `id_role` tinyint(3) UNSIGNED NOT NULL,
  `role` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uprawniena`
--

INSERT INTO `uprawniena` (`id_role`, `role`) VALUES
(3, 'admin'),
(4, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `imie` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `haslo` varchar(100) NOT NULL,
  `miasto` varchar(45) NOT NULL,
  `uprawnienia` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `imie`, `nazwisko`, `mail`, `haslo`, `miasto`, `uprawnienia`) VALUES
(13, 'Herman', 'fdf', 'h.kudrya@hotmail.comf', '$2y$10$W3Y5VFV/qxrRKwTYNbiRyOjEDOZbmMJ07j/DJSy4eizzO9jjNLt7y', 'Poznań', 3),
(17, 'Herman', 'Kudria', 'hermanwebmasterpl2@gmail.comff', '$2y$10$VVNBTxdbWjP9P7kQhoG4Sel4d.55zXUBO2yyhNgRxAmiwQCY.fvby', 'Poznań', 3),
(19, 'Herman', 'Kudria', 'Herman', 'Kudria', 'Poznań', 3),
(20, 'Anna', 'Kowalska', 'anna@wp.pl', 'tajne', 'Gniezno', 4),
(21, 'Janusz', 'Nowak', 'janusz@o2.pl', '123', 'Poznań', 3),
(22, 'Herman', '123', 'test@mail.com', '$2y$10$L7gHnvBFdOCUf.FEmR.lG.6XFEJxdD6h.dRKJu4Ih.Xvhqge2/R4e', 'Poznan', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uprawniena`
--
ALTER TABLE `uprawniena`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD KEY `uprawnienia` (`uprawnienia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uprawniena`
--
ALTER TABLE `uprawniena`
  MODIFY `id_role` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`uprawnienia`) REFERENCES `uprawniena` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
