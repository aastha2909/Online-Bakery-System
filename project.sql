-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 07:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `breads`
--

CREATE TABLE `breads` (
  `Prod_Id` double NOT NULL,
  `Prod_Name` varchar(40) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  `Price` double NOT NULL,
  `Specification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breads`
--

INSERT INTO `breads` (`Prod_Id`, `Prod_Name`, `Photo`, `Price`, `Specification`) VALUES
(321421, 'Pizza Bread', 'Image/pb.jpg', 60, ''),
(321422, 'French Bread', 'Image/frb.jpg', 90, ''),
(321423, 'Plain Bread', 'Image/bd.jpg', 25, '');

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `Prod_Id` double NOT NULL,
  `Prod_Name` varchar(40) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  `Price` double NOT NULL,
  `Specification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`Prod_Id`, `Prod_Name`, `Photo`, `Price`, `Specification`) VALUES
(852121, 'Black Forest', 'Image/blackforest.jpg', 900, '1Kg'),
(852122, 'Blue Berry', 'Image/blueberry.jpg', 950, '1Kg'),
(852123, 'Butter Scotch', 'Image/butterscotch.jpg', 800, '1Kg'),
(852124, 'Chocolate Chip', 'Image/chocochip.jpg', 1000, '1Kg'),
(852125, 'Mango Crunch', 'Image/mangocrunch.jpg', 900, '1Kg\r\n*Seasonal'),
(852127, 'Chocolate Truffle', 'Image/chocotruffle.jpg', 1100, '1Kg'),
(852128, 'Ferrero Rocher', 'Image/Ferrerorocher.jpg', 1350, '1Kg'),
(852129, 'Mixed Fuit', 'Image/mixfruit.jpg', 950, '1Kg\r\n*Fruits may vary according to season'),
(852130, 'Oreo', 'Image/oreocake.jpg', 1050, '1Kg'),
(852131, 'Pineapple', 'Image/pineapple.jpg', 750, '1Kg'),
(852132, 'Red Velvet', 'Image/redvelvet.jpg', 1400, '1Kg'),
(852133, 'Strawberry', 'Image/strawberry.jpg', 800, '1Kg'),
(852134, 'White Chocolate', 'Image/whitechoc.jpg', 1000, '1Kg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Prod_Name` varchar(40) NOT NULL,
  `Quantity` int(10) NOT NULL DEFAULT '1',
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE `cookies` (
  `Prod_Id` double NOT NULL,
  `Prod_Name` varchar(40) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  `Price` double NOT NULL,
  `Specification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`Prod_Id`, `Prod_Name`, `Photo`, `Price`, `Specification`) VALUES
(84321, 'Cake Rusk', 'Image/cakerusk.jpg', 350, 'Price per Half Kg'),
(84322, 'Chocolate Chip', 'Image/chocochipc.jpg', 450, 'Price per Half Kg'),
(84323, 'Chocolate Nut', 'Image/choconutc.jpg', 500, 'Price per Half Kg'),
(84324, 'Dry Fruit', 'Image/dryfruitc.jpg', 420, 'Price per Half Kg'),
(84325, 'Honey Almond', 'Image/honeyalmond.jpg', 400, 'Price per Half Kg'),
(84326, 'Kaju Vanilla', 'Image/kajuvanillac.png', 410, 'Price per Half Kg'),
(84327, 'Marble', 'Image/marblec.jpg', 330, 'Price per Half Kg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `UserId` varchar(30) NOT NULL,
  `Prod_Name` varchar(30) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Dated` date NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`UserId`, `Prod_Name`, `Quantity`, `Dated`, `Price`) VALUES
('a@babc', 'Butter Scotch Pastry', 3, '2018-04-02', 105),
('a@babc', 'Black Forest', 8, '2018-04-02', 7200),
('shreyaseth97@gmail.comshreya', 'Kaju Vanilla', 5, '2018-04-07', 2050),
('shreyaseth97@gmail.comshreya', 'Veg Burger', 3, '2018-04-07', 120);

-- --------------------------------------------------------

--
-- Table structure for table `pastry`
--

CREATE TABLE `pastry` (
  `Prod_Id` double NOT NULL,
  `Prod_Name` varchar(40) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  `Price` double NOT NULL,
  `Specification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pastry`
--

INSERT INTO `pastry` (`Prod_Id`, `Prod_Name`, `Photo`, `Price`, `Specification`) VALUES
(642151, 'Black Forest Pastry', 'Image/blackforestp.jpg', 45, 'Price shown per piece'),
(642153, 'Butter Scotch Pastry', 'Image/butterscotchp.jpg', 35, 'Price shown per piece'),
(642156, 'Chocolate Pastry', 'Image/chocop.jpg', 45, 'Price shown per piece'),
(642157, 'Watermelon Pastry', 'Image/watermelonp.jpg', 55, 'Price shown per piece'),
(642158, 'Vanilla Pastry', 'Image/vanillap.jpg', 35, 'Price shown per piece'),
(642159, 'Vanilla Cupcake', 'Image/vanillacup.jpg', 240, 'Price shown per 6 pieces'),
(642161, 'Chocolate Cupcake', 'Image/chococup.jpg', 300, 'Price shown per 6 pieces'),
(642162, 'Chocolate Truffle Pastry', 'Image/chocotrufp.jpg', 50, 'Price shown per piece'),
(642163, 'Strawberry Pastry', 'Image/strawberryp.jpg', 40, 'Price shown per piece');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Prof_Photo` varchar(500) NOT NULL,
  `Mobile_No` bigint(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `UserId` varchar(40) NOT NULL,
  `Current` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`First_Name`, `Last_Name`, `Dob`, `Gender`, `Prof_Photo`, `Mobile_No`, `Email`, `Address`, `UserId`, `Current`) VALUES
('aaa', 'aaa', '1995-11-12', '', '', 123, 'a@b', '', 'a@babc', 'cakes'),
('qwe', 'wer', '1999-05-12', '', '', 1234, 'q@w', '', 'q@wqwe', 'cakes'),
('qwe', 'qwe', '2018-12-31', '', '', 132, 'qwe@qwe', '', 'qwe@qweqwe', 'cakes'),
('Shreya', 'Seth', '1997-02-12', '', '', 1234, 'shreyaseth97@gmail.com', '', 'shreyaseth97@gmail.comshreya', 'cakes');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Email`, `Password`) VALUES
('a@b', 'abc'),
('shreyaseth97@gmail.com', 'shreya');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `Prod_Id` double NOT NULL,
  `Prod_Name` varchar(40) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  `Price` double NOT NULL,
  `Specification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`Prod_Id`, `Prod_Name`, `Photo`, `Price`, `Specification`) VALUES
(362411, 'Veg Burger', 'Image/vegbur.jpg', 40, ''),
(362412, 'Veg Sandwich', 'Image/vegsw.jpg', 35, ''),
(362413, 'Paneer Puff', 'Image/panpuff.jpg', 30, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breads`
--
ALTER TABLE `breads`
  ADD PRIMARY KEY (`Prod_Id`);

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD UNIQUE KEY `Key` (`Prod_Id`);

--
-- Indexes for table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`Prod_Id`);

--
-- Indexes for table `pastry`
--
ALTER TABLE `pastry`
  ADD PRIMARY KEY (`Prod_Id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD UNIQUE KEY `UserId` (`UserId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`Prod_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breads`
--
ALTER TABLE `breads`
  MODIFY `Prod_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321424;
--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `Prod_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=852135;
--
-- AUTO_INCREMENT for table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `Prod_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84328;
--
-- AUTO_INCREMENT for table `pastry`
--
ALTER TABLE `pastry`
  MODIFY `Prod_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642164;
--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `Prod_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362414;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
