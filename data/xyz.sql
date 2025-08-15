-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 03:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `role`) VALUES
('admin', 'admin@xyz.com', '$2y$10$Wgpbkz/XM496SMJy6eD8qeTuL1oBqpMvll7C6QKrUL1xS8S0m0/Km', 'Data Analyst'),
('ahmad', 'ahmad.abdullah@xyz.com', '$2y$10$cLza3I4CE4eFc/I5OrulYeZbXIwYOmvO39sQp/VMEAB7jN/1JH.nW', 'Manager'),
('andi', 'andi.suryanto@xyz.com', '$2y$10$yveMzxoMlQL4HMJjrE1vIOr14g7pQIdhuUbwIfr/tOAQGWDcxEhBu', 'Manager'),
('aulia', 'aulia.afifatunnisa@xyz.com', '$2y$10$reo2TnlIlrk2ZvKeJP16tOjXLq2JLGebNo6/DTX2o6Tv1mTGEkjcu', 'Manager'),
('aura', 'aura.mutiara@xyz.com', '$2y$10$4BMvrFpKnks.SQzFQvK4oe64olU/4tQcn3YYEm1e12hJrpkxTMMym', 'Manager'),
('ikhsan', 'ikhsan.firdaus@xyz.com', '$2y$10$mk5wqmP.OuFexLoedfOweOBLjc5fIch3iQ2ElovA2SeEFIYT8eWd6', 'Manager'),
('Ilda', 'ilda.ikhwana@xyz.com', '$2y$10$QSdNaLiRHeakV/BkJ3jyNOuVsKEeqfVCTIWweLuBwnJGC5js8nny6', 'Manager'),
('joko', 'joko.wibowo@xyz.com', '$2y$10$MsJLYEfEksGgc20GjV3xCe.DsrfAxj.oAngzVRRk8dSu7RKX9qlZG', 'Manager'),
('lisa', 'lisa.ameli@xyz.com', '$2y$10$zvpDC.tQ1YsQ7TuDjwSzqu/orjJ5wq6QwzbIQq4hlabEu2cUS1c/y', 'Manager'),
('rini', 'rini.pertama@xyz.com', '$2y$10$X/o7ZjkoR5v4SR9tjTyYvOFDkBqnyuXPSxJB28C3kUavUHwUpDB/a', 'Manager'),
('rudi', 'rudi.santoso@xyz.com', '$2y$10$hJJ3z.JVvq9w8b9efRAdjOUCO5vexLLiHDGJV71x6j915UH3o403S', 'Data Analyst '),
('sumarno', 'sumarno@xyz.com', '$2y$10$CAQ5gkfv87ebrIjUiQGaz.n4yHXMr1HvAyHCUVf57EXo5A7abdt.G', 'Manager'),
('sunarti', 'sunarti@xyz.com', '$2y$10$tx7hGqAgxRFnT3NoM8E6bODwmcGtYJK4sKK2/qKG200LcQ6IQis52', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
