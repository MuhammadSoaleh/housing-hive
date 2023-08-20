-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 05:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housinghive`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_phone` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_ques` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`c_id`, `c_name`, `c_phone`, `c_email`, `c_ques`) VALUES
(1, 'Khizer Ali', '03473116493', 'khizer.ali404@gmail.com', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `l_id` int(11) NOT NULL,
  `l_email` varchar(50) NOT NULL,
  `l_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` varchar(50) NOT NULL,
  `p_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_img`) VALUES
(2, 'house', '258000', '910880.jpg'),
(3, 'ffffffffffffffffffffffffffffffffffffffffffffffffff', '25800', '240_F_525034344_pqoW91HoXdvZhJdF8BUVRWwGkgWGR5OQ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(11) NOT NULL,
  `r_fname` varchar(50) NOT NULL,
  `r_lname` varchar(50) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_fname`, `r_lname`, `r_email`, `r_password`) VALUES
(1, 'Khizer', 'Ali', 'khizer.ali404@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `submit-property`
--

CREATE TABLE `submit-property` (
  `sp_id` int(11) NOT NULL,
  `sp_property-type` varchar(50) NOT NULL,
  `sp_transaction` varchar(50) NOT NULL,
  `sp_price` int(11) NOT NULL,
  `sp_area` varchar(50) NOT NULL,
  `sp_bedroom` int(11) NOT NULL,
  `sp_bathrooms` int(11) NOT NULL,
  `sp_description` varchar(255) NOT NULL,
  `sp_features` varchar(255) NOT NULL,
  `sp_gallery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit-property`
--

INSERT INTO `submit-property` (`sp_id`, `sp_property-type`, `sp_transaction`, `sp_price`, `sp_area`, `sp_bedroom`, `sp_bathrooms`, `sp_description`, `sp_features`, `sp_gallery`) VALUES
(16, 'Apartment', 'For Rent', 500000, '500Ghz', 2, 2, 'LUXURY APPARTMENT', 'Air Conditioning,Internet,Cable TV,Balcony', '240_F_525034344_pqoW91HoXdvZhJdF8BUVRWwGkgWGR5OQ.jpg,'),
(17, '', '', 0, '', 0, 0, '', 'Roof Terrace,Terrace', 'Dua-Lipa-Wallpaper-HD-44945.jpg,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `submit-property`
--
ALTER TABLE `submit-property`
  ADD PRIMARY KEY (`sp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `submit-property`
--
ALTER TABLE `submit-property`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
