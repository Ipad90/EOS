-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 04:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empire_of_shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `Shoe_ID` int(4) NOT NULL,
  `Shoe_Name` varchar(255) NOT NULL,
  `Shoe_Brand` varchar(255) NOT NULL,
  `Shoe_Price` int(4) NOT NULL,
  `Shoe_Color` varchar(255) NOT NULL,
  `Shoe_Size` int(4) NOT NULL,
  `Shoe_Status` char(1) NOT NULL,
  `Shoe_Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`Shoe_ID`, `Shoe_Name`, `Shoe_Brand`, `Shoe_Price`, `Shoe_Color`, `Shoe_Size`, `Shoe_Status`, `Shoe_Image`) VALUES
(1, 'ALTENBURG LACE UPS', 'Aldo', 540, 'Brown', 8, 'Y', 'ALTENBURG_LACE_UPS_1.jpg'),
(2, 'ALTENBURG LACE UPS', 'Aldo', 540, 'Brown', 9, 'Y', 'ALTENBURG_LACE_UPS_2.jpg'),
(3, 'ALTENBURG LACE UPS', 'Aldo', 540, 'Brown', 10, 'Y', 'ALTENBURG_LACE_UPS_1.jpg'),
(4, 'ALTENBURG LACE UPS', 'Aldo', 540, 'Brown', 11, 'Y', 'ALTENBURG_LACE_UPS_2.jpg'),
(5, 'GREGORY BUSINESS & DRESS SHOES', 'Aldo', 600, 'Black', 8, 'Y', 'GREGORY_BUSINESS_&_DRESS_SHOES_1.jpg'),
(6, 'GREGORY BUSINESS & DRESS SHOES', 'Aldo', 600, 'Black', 9, 'Y', 'GREGORY_BUSINESS_&_DRESS_SHOES_2.jpg'),
(7, 'GREGORY BUSINESS & DRESS SHOES', 'Aldo', 600, 'Black', 10, 'Y', 'GREGORY_BUSINESS_&_DRESS_SHOES_1.jpg'),
(8, 'GREGORY BUSINESS & DRESS SHOES', 'Aldo', 600, 'Black', 11, 'Y', 'GREGORY_BUSINESS_&_DRESS_SHOES_2.jpg'),
(9, 'SERNAGLIA BUSINESS & DRESS SHOES', 'Aldo', 560, 'Black', 8, 'Y', 'SERNAGLIA_BUSINESS_&_DRESS_SHOES_1.jpg'),
(10, 'SERNAGLIA BUSINESS & DRESS SHOES', 'Aldo', 560, 'Black', 9, 'Y', 'SERNAGLIA_BUSINESS_&_DRESS_SHOES_2.jpg'),
(11, 'SERNAGLIA BUSINESS & DRESS SHOES', 'Aldo', 560, 'Black', 10, 'Y', 'SERNAGLIA_BUSINESS_&_DRESS_SHOES_1.jpg'),
(12, 'SERNAGLIA BUSINESS & DRESS SHOES', 'Aldo', 560, 'Black', 11, 'Y', 'SERNAGLIA_BUSINESS_&_DRESS_SHOES_2.jpg'),
(13, 'YEAWIA BUSINESS & DRESS SHOES', 'Aldo', 560, 'Brown', 8, 'Y', 'YEAWIA_BUSINESS_&_DRESS_SHOES_1.jpg'),
(14, 'YEAWIA BUSINESS & DRESS SHOES', 'Aldo', 560, 'Brown', 9, 'Y', 'YEAWIA_BUSINESS_&_DRESS_SHOES_2.jpg'),
(15, 'YEAWIA BUSINESS & DRESS SHOES', 'Aldo', 560, 'Brown', 10, 'Y', 'YEAWIA_BUSINESS_&_DRESS_SHOES_1.jpg'),
(16, 'YEAWIA BUSINESS & DRESS SHOES', 'Aldo', 560, 'Brown', 11, 'Y', 'YEAWIA_BUSINESS_&_DRESS_SHOES_2.jpg'),
(17, 'ALESSANDRO DEMESURE VENEZIA CALF LEATHER OXFORD', 'Berluti', 8800, 'Black', 8, 'Y', 'ALESSANDRO_DEMESURE_VENEZIA_CALF_LEATHER_OXFORD_1.jpg'),
(18, 'ALESSANDRO DEMESURE VENEZIA CALF LEATHER OXFORD', 'Berluti', 8800, 'Black', 9, 'Y', 'ALESSANDRO_DEMESURE_VENEZIA_CALF_LEATHER_OXFORD_2.jpg'),
(19, 'ALESSANDRO DEMESURE VENEZIA CALF LEATHER OXFORD', 'Berluti', 8800, 'Black', 10, 'Y', 'ALESSANDRO_DEMESURE_VENEZIA_CALF_LEATHER_OXFORD_1.jpg'),
(20, 'ALESSANDRO DEMESURE VENEZIA CALF LEATHER OXFORD', 'Berluti', 8800, 'Black', 11, 'Y', 'ALESSANDRO_DEMESURE_VENEZIA_CALF_LEATHER_OXFORD_2.jpg'),
(21, 'LORENZO LECCO KANGAROO LEATHER OXFORD', 'Berluti', 5300, 'Brown', 8, 'Y', 'LORENZO_LECCO_KANGAROO_LEATHER_OXFORD_1.jpg'),
(22, 'LORENZO LECCO KANGAROO LEATHER OXFORD', 'Berluti', 5300, 'Brown', 9, 'Y', 'LORENZO_LECCO_KANGAROO_LEATHER_OXFORD_2.jpg'),
(23, 'LORENZO LECCO KANGAROO LEATHER OXFORD', 'Berluti', 5300, 'Brown', 10, 'Y', 'LORENZO_LECCO_KANGAROO_LEATHER_OXFORD_1.jpg'),
(24, 'LORENZO LECCO KANGAROO LEATHER OXFORD', 'Berluti', 5300, 'Brown', 11, 'Y', 'LORENZO_LECCO_KANGAROO_LEATHER_OXFORD_2.jpg'),
(25, 'ALESSANDRO DEMESURE ALLIGATOR LEATHER OXFORD', 'Berluti', 47200, 'Black', 8, 'Y', 'ALESSANDRO_DEMESURE_ALLIGATOR_LEATHER_OXFORD_1.jpg'),
(26, 'ALESSANDRO DEMESURE ALLIGATOR LEATHER OXFORD', 'Berluti', 47200, 'Black', 9, 'Y', 'ALESSANDRO_DEMESURE_ALLIGATOR_LEATHER_OXFORD_2.jpg'),
(27, 'ALESSANDRO DEMESURE ALLIGATOR LEATHER OXFORD', 'Berluti', 47200, 'Black', 10, 'Y', 'ALESSANDRO_DEMESURE_ALLIGATOR_LEATHER_OXFORD_1.jpg'),
(28, 'ALESSANDRO DEMESURE ALLIGATOR LEATHER OXFORD', 'Berluti', 47200, 'Black', 11, 'Y', 'ALESSANDRO_DEMESURE_ALLIGATOR_LEATHER_OXFORD_2.jpg'),
(29, 'SCARS DEMESURE CALF AND ALLIGATOR OXFORD', 'Berluti', 11800, 'Blue', 8, 'Y', 'SCARS_DEMESURE_CALF_AND_ALLIGATOR_OXFORD_1.jpg'),
(30, 'SCARS DEMESURE CALF AND ALLIGATOR OXFORD', 'Berluti', 11800, 'Blue', 9, 'Y', 'SCARS_DEMESURE_CALF_AND_ALLIGATOR_OXFORD_2.jpg'),
(31, 'SCARS DEMESURE CALF AND ALLIGATOR OXFORD', 'Berluti', 11800, 'Blue', 10, 'Y', 'SCARS_DEMESURE_CALF_AND_ALLIGATOR_OXFORD_1.jpg'),
(32, 'SCARS DEMESURE CALF AND ALLIGATOR OXFORD', 'Berluti', 11800, 'Blue', 11, 'Y', 'SCARS_DEMESURE_CALF_AND_ALLIGATOR_OXFORD_2.jpg'),
(33, 'CONTRAST OXFORD SHOES', 'Pedro', 375, 'Black', 8, 'Y', 'PEDRO_CONTRAST_OXFORD_SHOES_1.jpg'),
(34, 'CONTRAST OXFORD SHOES', 'Pedro', 375, 'Black', 9, 'Y', 'PEDRO_CONTRAST_OXFORD_SHOES_2.jpg'),
(35, 'CONTRAST OXFORD SHOES', 'Pedro', 375, 'Black', 10, 'Y', 'PEDRO_CONTRAST_OXFORD_SHOES_1.jpg'),
(36, 'CONTRAST OXFORD SHOES', 'Pedro', 375, 'Black', 11, 'Y', 'PEDRO_CONTRAST_OXFORD_SHOES_2.jpg'),
(37, 'EMBOSSED LEATHER DERBY SHOES', 'Pedro', 370, 'Black', 8, 'Y', 'EMBOSSED_LEATHER_DERBY_SHOES_1.jpg'),
(38, 'EMBOSSED LEATHER DERBY SHOES', 'Pedro', 370, 'Black', 9, 'Y', 'EMBOSSED_LEATHER_DERBY_SHOES_2.jpg'),
(39, 'EMBOSSED LEATHER DERBY SHOES', 'Pedro', 370, 'Black', 10, 'Y', 'EMBOSSED_LEATHER_DERBY_SHOES_1.jpg'),
(40, 'EMBOSSED LEATHER DERBY SHOES', 'Pedro', 370, 'Black', 11, 'Y', 'EMBOSSED_LEATHER_DERBY_SHOES_2.jpg'),
(41, 'BURNISHED LEATHER DERBY SHOES', 'Pedro', 400, 'Black', 8, 'Y', 'BURNISHED_LEATHER_DERBY_SHOES_1.jpg'),
(42, 'BURNISHED LEATHER DERBY SHOES', 'Pedro', 400, 'Black', 9, 'Y', 'BURNISHED_LEATHER_DERBY_SHOES_2.jpg'),
(43, 'BURNISHED LEATHER DERBY SHOES', 'Pedro', 400, 'Black', 10, 'Y', 'BURNISHED_LEATHER_DERBY_SHOES_1.jpg'),
(44, 'BURNISHED LEATHER DERBY SHOES', 'Pedro', 400, 'Black', 11, 'Y', 'BURNISHED_LEATHER_DERBY_SHOES_2.jpg'),
(45, 'LEATHER WINGTIP DERBY SHOES', 'Pedro', 385, 'Brown', 8, 'Y', 'LEATHER_WINGTIP_DERBY_SHOES_1.jpg'),
(46, 'LEATHER WINGTIP DERBY SHOES', 'Pedro', 385, 'Brown', 9, 'Y', 'LEATHER_WINGTIP_DERBY_SHOES_2.jpg'),
(47, 'LEATHER WINGTIP DERBY SHOES', 'Pedro', 385, 'Brown', 10, 'Y', 'LEATHER_WINGTIP_DERBY_SHOES_1.jpg'),
(48, 'LEATHER WINGTIP DERBY SHOES', 'Pedro', 385, 'Brown', 11, 'Y', 'LEATHER_WINGTIP_DERBY_SHOES_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `Cart_ID` int(4) NOT NULL,
  `Date_Added` date NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Shoe_ID` int(11) DEFAULT NULL,
  `Quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`Cart_ID`, `Date_Added`, `User_ID`, `Shoe_ID`, `Quantity`) VALUES
(6, '2018-06-26', 1, 17, 0),
(7, '2018-06-26', 1, 18, 0),
(8, '2018-06-26', 1, 19, 0),
(9, '2018-06-26', 1, 20, 0),
(10, '2018-06-26', 1, 21, 0),
(11, '2018-06-26', 1, 22, 0),
(12, '2018-06-26', 1, 23, 0),
(13, '2018-06-26', 1, 24, 0),
(14, '2018-06-26', 1, 25, 0),
(15, '2018-06-26', 1, 26, 0),
(16, '2018-06-26', 1, 27, 0),
(17, '2018-06-26', 1, 28, 0),
(18, '2018-06-26', 1, 29, 0),
(19, '2018-06-26', 1, 30, 0),
(20, '2018-06-26', 1, 31, 0),
(21, '2018-06-26', 1, 32, 0),
(22, '2018-06-28', 2, 36, 0),
(23, '2018-06-28', 2, 28, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_history`
--

CREATE TABLE `shopping_history` (
  `History_ID` int(4) NOT NULL,
  `Date_Updated` date NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Shoe_ID` int(11) DEFAULT NULL,
  `Quantity` int(4) NOT NULL,
  `Delivery_Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_history`
--

INSERT INTO `shopping_history` (`History_ID`, `Date_Updated`, `User_ID`, `Shoe_ID`, `Quantity`, `Delivery_Status`) VALUES
(1, '2018-06-28', 2, 19, 0, 'Order Received');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(4) NOT NULL,
  `User_Username` varchar(255) NOT NULL,
  `User_First_Name` varchar(255) NOT NULL,
  `User_Last_Name` varchar(255) NOT NULL,
  `User_Email` varchar(255) NOT NULL,
  `User_Password` varchar(255) NOT NULL,
  `User_Shipping_Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `User_Username`, `User_First_Name`, `User_Last_Name`, `User_Email`, `User_Password`, `User_Shipping_Address`) VALUES
(1, 'test', 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'PLEASE UPDAETE'),
(2, 'try', 'try', 'try', 'try', '080f651e3fcca17df3a47c2cecfcb880', 'try');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Wishlist_ID` int(4) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Shoe_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`Wishlist_ID`, `User_ID`, `Shoe_ID`) VALUES
(4, 1, 17),
(5, 1, 18),
(6, 1, 19),
(7, 1, 20),
(8, 1, 21),
(9, 1, 22),
(10, 1, 23),
(11, 1, 24),
(12, 1, 25),
(13, 1, 26),
(14, 1, 27),
(15, 1, 28),
(16, 1, 29),
(17, 1, 30),
(18, 1, 31),
(19, 1, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`Shoe_ID`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`Cart_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Shoe_ID` (`Shoe_ID`);

--
-- Indexes for table `shopping_history`
--
ALTER TABLE `shopping_history`
  ADD PRIMARY KEY (`History_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Shoe_ID` (`Shoe_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Wishlist_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Shoe_ID` (`Shoe_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `Shoe_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `Cart_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shopping_history`
--
ALTER TABLE `shopping_history`
  MODIFY `History_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Wishlist_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `shopping_cart_ibfk_2` FOREIGN KEY (`Shoe_ID`) REFERENCES `shoes` (`Shoe_ID`);

--
-- Constraints for table `shopping_history`
--
ALTER TABLE `shopping_history`
  ADD CONSTRAINT `shopping_history_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `shopping_history_ibfk_2` FOREIGN KEY (`Shoe_ID`) REFERENCES `shoes` (`Shoe_ID`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`Shoe_ID`) REFERENCES `shoes` (`Shoe_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
