-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2022 at 09:46 AM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c3263312-dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bakers`
--

CREATE TABLE `Bakers` (
  `BakerID` int NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Phone` int NOT NULL,
  `Description` varchar(800) NOT NULL,
  `Baker_Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Bakers`
--

INSERT INTO `Bakers` (`BakerID`, `Name`, `Address`, `Email`, `Phone`, `Description`, `Baker_Image`) VALUES
(1, 'Val Brown', '1 Baker Lane', 'val.brown@gmail.com', 1135648129, 'Val is a retired baker who use to run her own bakery but now just bakes for fun', 'valb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `OrderID` int NOT NULL,
  `UserID` int NOT NULL,
  `Products` varchar(255) NOT NULL,
  `Total` int NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Type` varchar(26) NOT NULL,
  `Slot` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`OrderID`, `UserID`, `Products`, `Total`, `Date`, `Time`, `Type`, `Slot`) VALUES
(1, 1, 'Sponge Cake', 6, '2021-06-01', '00:00:00', 'Collection', 'N/A'),
(2, 1, 'Sponge Cake', 3, '2021-05-31', '00:00:00', 'Collection', 'N/A'),
(3, 1, 'Sponge Cake', 3, '2021-05-26', '00:00:00', 'Collection', 'N/A'),
(4, 102, 'Granary Loaf Shortbread Biscuits Seven Seed Sourdough', 44, '2021-05-26', '00:00:00', 'Delivery', 'ASAP'),
(5, 102, 'Granary Loaf Shortbread Biscuits Seven Seed Sourdough', 44, '2021-05-19', '00:00:00', 'Delivery', 'ASAP'),
(6, 102, 'Granary Loaf Shortbread Biscuits Seven Seed Sourdough', 44, '2021-05-12', '00:00:00', 'Delivery', 'ASAP'),
(7, 102, 'Granary Loaf Shortbread Biscuits Seven Seed Sourdough', 44, '2021-05-05', '00:00:00', 'Delivery', 'ASAP'),
(8, 101, 'Double Chocolate Cookie Pie, Double Chocolate Cookie Pie', 8, '2021-05-21', '00:00:00', 'Collection', 'N/A'),
(9, 101, 'Double Chocolate Cookie Pie, Double Chocolate Cookie Pie', 8, '2021-05-22', '00:00:00', 'Collection', 'N/A'),
(10, 101, 'Double Chocolate Cookie Pie, Double Chocolate Cookie Pie', 8, '2021-05-20', '00:00:00', 'Collection', 'N/A'),
(11, 101, 'Bengali 5-Spice Rolls,Granary Loaf,Jam Doughnut,Jam Doughnut', 17, '2021-04-22', '00:00:00', 'Delivery', 'ASAP'),
(12, 101, 'Bengali 5-Spice Rolls,Granary Loaf,Jam Doughnut,Jam Doughnut', 17, '2021-04-17', '00:00:00', 'Delivery', 'ASAP'),
(13, 103, 'Shortbread Biscuits, Sponge Cake, Granary Loaf', 47, '2021-04-21', '00:00:00', 'Collection', 'N/A'),
(14, 103, 'Shortbread Biscuits, Sponge Cake, Granary Loaf', 47, '2021-05-21', '00:00:00', 'Collection', 'N/A'),
(15, 103, 'Shortbread Biscuits, Sponge Cake, Granary Loaf', 47, '2021-03-21', '00:00:00', 'Collection', 'N/A'),
(16, 1, 'Sponge Cake,Shortbread Biscuits,Jam Doughnut', 37, '2021-06-09', '01:26:27pm', 'collection', '9-12'),
(17, 1, 'Sponge Cake,Shortbread Biscuits,Jam Doughnut', 37, '2021-06-09', '01:29:33pm', 'collection', '9-12'),
(18, 1, 'Sponge Cake,Shortbread Biscuits,Jam Doughnut', 37, '2021-06-09', '01:29:47pm', 'delivery', '9-12'),
(19, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:30:40pm', '', 'asap'),
(20, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:32:45pm', '', 'asap'),
(21, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:32:45pm', '', 'asap'),
(22, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:33:37pm', '', 'asap'),
(23, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:33:37pm', '', 'asap'),
(24, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:35:14pm', '', 'asap'),
(25, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:35:14pm', '', 'asap'),
(26, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:35:46pm', '', 'asap'),
(27, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:35:46pm', '', 'asap'),
(28, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:37:47pm', '', 'asap'),
(29, 1, 'Sponge Cake4,Shortbread Biscuits1,Jam Doughnut3', 37, '2021-06-09', '01:37:47pm', '', 'asap'),
(30, 1, 'Sponge Cake2,Chocolate Brownie2,Shortbread Biscuits1', 22, '2021-06-09', '01:42:39pm', '', ''),
(31, 1, 'Sponge Cake2,Chocolate Brownie2,Shortbread Biscuits1', 22, '2021-06-09', '01:42:39pm', '', ''),
(32, 1, '', 0, '2021-06-09', '01:42:39pm', 'collection', '9-12'),
(33, 1, '', 0, '2021-06-09', '01:42:39pm', 'collection', '9-12'),
(34, 1, 'Sponge Cake1', 6, '2021-06-09', '01:42:50pm', 'delivery', '5-8'),
(35, 1, 'Sponge Cake1', 6, '2021-06-09', '01:42:50pm', 'delivery', '5-8'),
(36, 1, 'Sponge Cake1,Shortbread Biscuits1,Granary Loaf1,Double Chocolate Cookie Pie 1,Jam Doughnut3', 30, '2021-06-09', '03:10:19pm', 'collection', '1-4'),
(37, 1, 'Sponge Cake1,Shortbread Biscuits1,Granary Loaf1,Double Chocolate Cookie Pie 1,Jam Doughnut3', 30, '2021-06-09', '03:10:19pm', 'collection', '1-4'),
(38, 1, 'Sponge Cake1,Chocolate Brownie1', 9, '2021-06-09', '06:51:37pm', 'collection', 'asap'),
(39, 1, 'Sponge Cake1,Chocolate Brownie1', 9, '2021-06-09', '06:51:37pm', 'collection', 'asap'),
(40, 1, 'Sponge Cake1,Chocolate Brownie1,Shortbread Biscuits2', 17, '2021-06-10', '12:11:50am', 'collection', '9-12'),
(41, 1, 'Sponge Cake1,Chocolate Brownie1,Shortbread Biscuits2', 17, '2021-06-10', '12:11:50am', 'collection', '9-12'),
(42, 105, 'Sponge Cake1,Chocolate Brownie1,Shortbread Biscuits2', 17, '2021-06-10', '10:25:04am', 'collection', 'asap'),
(43, 105, 'Sponge Cake1,Chocolate Brownie1,Shortbread Biscuits2', 17, '2021-06-10', '10:25:04am', 'collection', 'asap'),
(44, 105, 'Sponge Cake1,Chocolate Brownie1', 9, '2021-06-10', '10:46:37am', 'delivery', '1-4'),
(45, 105, 'Sponge Cake1,Chocolate Brownie1', 9, '2021-06-10', '10:46:37am', 'delivery', '1-4'),
(46, 105, 'Sponge Cake2,Chocolate Brownie3,Shortbread Biscuits1', 25, '2021-06-10', '11:20:31am', 'collection', '9-12'),
(47, 105, 'Sponge Cake2,Chocolate Brownie3,Shortbread Biscuits1', 25, '2021-06-10', '11:20:31am', 'collection', '9-12'),
(48, 110, 'Sponge Cake1,Chocolate Brownie2', 12, '2021-06-12', '08:35:12pm', '', 'asap'),
(49, 110, 'Sponge Cake1,Chocolate Brownie2', 12, '2021-06-12', '08:35:12pm', '', 'asap'),
(50, 112, 'Chocolate Brownie1,Granary Loaf1,Double Chocolate Cookie Pie 1', 14, '2021-06-17', '03:31:47pm', '', '9-12'),
(51, 112, 'Chocolate Brownie1,Granary Loaf1,Double Chocolate Cookie Pie 1', 14, '2021-06-17', '03:31:47pm', '', '9-12');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `ProductID` int NOT NULL,
  `BakerID` int NOT NULL,
  `Prod_Name` varchar(50) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Quantity` int NOT NULL,
  `Prod_Desc` varchar(800) NOT NULL,
  `Ingredients` varchar(400) NOT NULL,
  `Allergens` varchar(200) NOT NULL,
  `Prod_Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`ProductID`, `BakerID`, `Prod_Name`, `Price`, `Quantity`, `Prod_Desc`, `Ingredients`, `Allergens`, `Prod_Image`) VALUES
(1, 2, 'Sponge Cake', '6.00', 10, 'Vanilla Sponge Cake with Strawberry Jam                           ', 'Flour, Sugar, Eggs, Milk, Butter, Jam              ', 'Dairy, Gluten, Eggs', 'spongecake.jpg'),
(2, 1, 'Chocolate Brownie', '3.00', 48, 'Ritch chocolate brownie', 'Chocolate, eggs, milk, flour', 'dairy, gluten', 'brownie1.jpg'),
(4, 3, 'Shortbread Biscuits', '4.00', 6, 'Traditional Shortbread biscuits', ' Flour, sugar, butter', 'dairy, gluten', 'shortbread.jpg'),
(5, 2, 'Granary Loaf', '7.00', 12, 'This is a staple; it comes in two sizes and is always popular with customers, restaurants and delis', 'Malted flour', 'Gluten', 'granaryloaf.jpg'),
(6, 1, 'Seven Seed Sourdough', '3.00', 12, 'A tongue-twister of a loaf, this is our most popular sourdough. It’s packed full of sesame, sunflower, linseed, pumpkin, chia, alfalfa and poppy seeds and toasts up a treat.', 'Flour, Yeast', 'Gluten', 'sourdough.jpg'),
(7, 1, 'Bengali 5-Spice Rolls', '4.00', 30, 'The lure of the five-spice roll is the stuff of legend at our bakery. They disappeared for a while and there was an uproar. With a heady mix of potato, carrot, pea, red onion, garlic, ginger and a hint of chilli powder (and our five secret spices) these fly off the shelves. ', '5 spice rolls', 'wheat', 'fivespiceroll.jpg'),
(8, 1, 'Double Chocolate Cookie Pie ', '4.00', 15, 'Chocolate chip cookie with a double chocolate chip brownie filling. Contains egg and soya lecithin. Dairy free.', 'Flour blend caster sugar, margarineWater, Salt, Emulsifier: Polyglycerol Esters of Fatty Acids; Colours: Curcumin, Annatto; Flavouring, Egg, (cocoa mass, sugar, cocoa butter, emulsifier. vanilla extract (whole vanilla pods, glycerine, water), baking powder (mono calcium phosphate, corn starch, sodium bicarbonate)', '', 'cookiepie.jpg'),
(10, 1, 'Jam Doughnut', '3.00', 15, 'Bring the warming scent and taste of seaside doughnuts into your kitchen with our fluffy doughnut filled with delicious homemade raspberry jam.\r\n\r\nWarm it, sugar it, eat it! For that fresh off the fryer taste, pop your doughnut in the oven or microwave to warm it up, then sprinkle liberally with the provided cinnamon sugar. Every doughnut comes with a pot of sugar, so it can be as sweet as you like. Forget Salt \'n\' Shake, this is sugar and shake!', 'Flour blend (white rice, brown rice, tapioca, potato starch, cornflour, granulated sugar, golden linseed, psyllium husk, salt, xanthan gum) water, Margarine, sunflower oil, eggs, egg white powder, sourdough starter, yeast, caster sugar\r\n\r\nRaspberry jam (Glucose Syrup, Liquid Sugar, Raspberry Puree Concentrate, Water, Gelling Agent), Acidity Regulators, Preservative, Natural Flavouring)', 'Egg', 'jdoughnut.jpg'),
(11, 4, 'Tiffin', '3.00', 20, 'Enjoy a delectable chocolatey treat with our Gluten Free Tiffin slices!', 'Margarine , biscuit crumb flour blend, caster sugar, margarine (Palm Oil, Rapeseed Oil, Water, Salt, Emulsifier: Polyglycerol Esters of Fatty Acids; Colours: Curcumin, Annatto; Flavouring), vanilla extract (whole vanilla pods, glycerine, water), baking powder (mono calcium phosphate, corn starch, sodium bicarbonate))', 'Coconut, Sulphur Dioxide, Soya lecithin', 'tiffin.jpg'),
(13, 12, 'test product', '1.00', 22, ' Test product Test product', ' chocolate strawberry', 'nuts', 'imageexample');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserID` int NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UserID`, `Name`, `Address`, `Email`, `Phone`, `Password`) VALUES
(1, 'Adam Jeffreson', '123 the street', 'email@email.com', '113345345', '$2y$10$zp82NqXed/y/wsX3QsRdX.E.IRs28whlc5v8vgxkMGKEsqCXQFNFK'),
(100, 'John Doe', '34 Black Mill Drive', 'JDoe@yahoo.com', '44', '$2y$10$mTLE5SnNs3hsHJ0eqBmwV.yKppPwSYp0tnggDREUDRkDV4icIBRIy'),
(102, 'Robert', 'Clegg', 'Rob.clegg@test.com', '469814534', '$2y$10$x0zuyt2FeqXsv6JrAjWf7.fgmOh8RoInVzctrzpadXe7ZfMP2sKwG'),
(103, 'James', 'Smith', 'J.Smith@test.com', '1335786754', '$2y$10$o9AWYbC23n2rz4sneycBj.aMcpLZ0xxIv7w8/RgfI5lhVHT5pxN.G'),
(104, 'Steve', 'Test', 'S.Test@test.com', '676734745', '$2y$10$RMFjKdj11z78z7Vb4c12d.8shMjyYbO1Ssn.urUoHUzOVOdTHsGmC'),
(105, 'test', 'test', 'test@test.com', '567', '$2y$10$ACOK6tTCqKfaLewU23FiSugz8NFKGrI4w267Th4F.pS8mD9kf18du'),
(106, 'paulwright', 'thetestaddress', 'paul@paul.com', '45', '$2y$10$te1b8xs40/hlRVHrVzXTG.CWSUlF/om0T6VRu/N/jwqBy93NDNNv6'),
(107, 'paul user', '12 the street', 'paul@paul.com', '66', '$2y$10$CLUWTz.P4enhGiMcv5oe.eIdatapS.wToEKzdoWJTZhrgtFt3qxZG'),
(108, 'paul user', 'the street', 'paul@paul.com', '07739099602', '$2y$10$X1DCWo0kH5X9P95Jr8Tw8O0fWNejLhWUY92lS/q0c2rx7739tzXy.'),
(109, 'Robert Clegg', 'The address the street', 'Email@email.com', '077395669171', '$2y$10$MWgDy8xiSu6VvlB4Qf6KJukNxCbfCVZaWVb/9D5NLwdWvMtcnLZK2'),
(110, 'Magadoo', '22 drive', 'Magadoo@gmail.com', '07401547663', '$2y$10$xNEX986a6nLlWCjviAiqEemmJHGJsNqvQ1NZKBsYTBiBlVClEeniS'),
(111, 'paul', '21 Leeds Beckett', 'paul@paul.com', '07654321678', '$2y$10$O8UnSpjqRClsdL1jmE65ve16oXUtaI.OpEgaoHl7hYConHmw6p65a'),
(112, 'paul', '23 Leedsbeckett', 'paul@gmail.com', '09876543212', '$2y$10$W1ykjzqTpYljUbAAxLiqm.CqPrdLCV1J5kPNlKT9T0issvEP0iEua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bakers`
--
ALTER TABLE `Bakers`
  ADD PRIMARY KEY (`BakerID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bakers`
--
ALTER TABLE `Bakers`
  MODIFY `BakerID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `OrderID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `ProductID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
