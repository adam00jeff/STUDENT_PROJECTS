-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2022 at 09:45 AM
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
-- Database: `c3263312`
--

-- --------------------------------------------------------

--
-- Table structure for table `Activities`
--

CREATE TABLE `Activities` (
  `CustomerID` int NOT NULL,
  `ActivityName` varchar(50) NOT NULL,
  `ActivityCat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Activities`
--

INSERT INTO `Activities` (`CustomerID`, `ActivityName`, `ActivityCat`) VALUES
(1, 'Something', 'Lecture'),
(2, 'Building', 'Workshop'),
(3, 'Something', 'Lecture'),
(4, 'Building', 'Workshop'),
(5, 'Listening', 'Lecture'),
(6, 'Doing', 'Workshop'),
(7, 'Listening', 'Lecture'),
(8, 'Doing', 'Workshop'),
(9, 'Watching', 'Lecture'),
(10, 'Watching', 'Lecture'),
(11, '', ''),
(12, '', ''),
(13, '', ''),
(14, '', ''),
(15, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CustomerID` int NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Age` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CustomerID`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Age`) VALUES
(1, 'Jenny', 'Brown', 'j.brown@leedsbeckett.ac.uk', 'brown01', 'F', 23),
(2, 'Ray', 'Green', 'r.green@leedsbeckett.ac.uk', 'green01', 'M', 19),
(3, 'Arjun', 'Patel', 'a.patel@leedsbeckett.ac.uk', 'patel01', 'M', 20),
(4, 'Steve', 'Rich', 's.rich@leedsbeckett.ac.uk', 'rich01', 'M', 27),
(5, 'Amy', 'Park', 'a.park@leedsbeckett.ac.uk', 'park01', 'F', 20),
(6, 'Rehana', 'Hashmi', 'r.hashmi@leedsbeckett.ac.uk', 'hashmi01', 'F', 22),
(7, 'adam', 'jeff', 'adam@adam', '333', 'M', 56),
(8, 'adam', 'jeff', 'adam@adam', '333', 'M', 56),
(9, 'adam', 'jeff', 'adam@adam', '333', 'M', 56),
(10, 'adam', 'jeff', 'adam@adam', '333', 'M', 56),
(11, 'adam', 'jeff', 'adam@adam', '333', 'M', 56),
(12, 'adam', 'jeff', 'adam@adam', '333', 'M', 56),
(13, 'new person', 'jeffreson', 'new@person.com', 'passwrod', 'M', 67),
(14, 'test', 'tester', 'email@tester.com', 'testpass', 'M', 45),
(15, 'new', 'dfgffd', 'paul@paul.com', 'sdfs', 'M', 45);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int NOT NULL,
  `eventName` varchar(256) NOT NULL,
  `eventCategory` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventName`, `eventCategory`) VALUES
(1, 'Doing something', 'workshop'),
(2, 'Listening', 'lecture'),
(3, 'Building', 'workshop'),
(4, 'Talking', 'workshop'),
(5, 'watching', 'lecture'),
(6, 'taking notes', 'lecture'),
(11, 'new', 'cat');

-- --------------------------------------------------------

--
-- Table structure for table `Pizza`
--

CREATE TABLE `Pizza` (
  `PizzaID` int NOT NULL,
  `Name` varchar(80) NOT NULL,
  `Price` decimal(6,2) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pizza`
--

INSERT INTO `Pizza` (`PizzaID`, `Name`, `Price`, `Category`, `Image`) VALUES
(1, 'Vegetarian', '9.00', 'Vegetarian', 'vegetarian.jpg'),
(2, 'Chef Special', '13.00', 'Vegetarian', 'chefspecial.jpg'),
(3, 'Ham and Mushroom', '10.99', 'Meat', 'hamandmushroom.jpg'),
(4, 'Four Cheese', '16.00', 'Vegetarian', 'fourcheese.jpg'),
(5, 'Chicken and Sweetcorn', '10.00', 'Meat', 'chickensweetcorn.jpg'),
(6, 'Meat Feast', '12.00', 'Meat', 'meatfeast.jpg'),
(7, 'Cheese and Mushroom', '15.00', 'Vegetarian', 'cheeseandmushroom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductPrice` decimal(6,2) NOT NULL,
  `ProductImageName` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImageName`) VALUES
(2, 'WhiteSweater', '26.99', 'sweaterWhite.jpg'),
(4, 'BlueTshirt', '15.00', 'tshirtBlue.jpg'),
(5, 'RedTshirt', '15.00', 'tshirtRed.jpg'),
(6, 'WhiteTshirt', '17.00', 'tshirtWhite.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `simpleusers`
--

CREATE TABLE `simpleusers` (
  `userID` int NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpleusers`
--

INSERT INTO `simpleusers` (`userID`, `username`, `password`) VALUES
(1, 'FirstUser', 'Password01'),
(2, 'SecondUser', 'Password02');

-- --------------------------------------------------------

--
-- Table structure for table `testTable`
--

CREATE TABLE `testTable` (
  `Entry ID` int NOT NULL,
  `Text` varchar(100) NOT NULL,
  `Number` int NOT NULL,
  `Selection` varchar(1) NOT NULL,
  `Sum` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testTable`
--

INSERT INTO `testTable` (`Entry ID`, `Text`, `Number`, `Selection`, `Sum`) VALUES
(1, 'test two', 44, 'A', 1),
(2, 'test two', 55, 'C', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `email` varchar(80) NOT NULL,
  `age` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `age`, `password`) VALUES
(1, 'First User test', 'test@testuser.com', '18-25', '$2y$10$W/EApdQXDendGNBMhn6c0edb/PlucUKGyhsLzg6MyklrMyl1NZrzW'),
(2, 'SecondUserTest', 'test@testuser.com', 'under18', '$2y$10$G.nIqheJGcqtinTviL0y5OChV9JlZH2KGpShLOeufEoyyCmFlea7m'),
(3, 'adamjeff', 'adam@gmail.com', '26-40', '$2y$10$IiCvnBDaq/jukDHgi4KJXOvkkaJHo8gbNZC/SRSLW1D2atehd/l0m'),
(4, 'adamtest', 'arealemail@gmail.com', '18-25', '$2y$10$rj0Mzz.WyqNPXovCaiMvxuqNTj6M70Psfjs2DAkyrG87a/NyrSDXe'),
(5, 'Test User', 'test@testuser.com', '26-40', '$2y$10$lp38oX1qiIGn7WFuNtV.HeZzdLY32K1dzG/gFW3LgCVovPhfXVca.'),
(6, 'Final Test', 'tes@test.com', '18-25', '$2y$10$pajKXQCc.CbEg8AyhnTUz.bXVqBZUSt0aDFT4bbH2ELLrmeGDDh4K'),
(7, 'Final testuser', 'adam@adam.com', '18-25', '$2y$10$VusaKhpLPzQ3o9AVfZGwU.fnebmSEFsIbx1uLB9TaWF17wAaFMIH.'),
(8, 'testname', 'arealemail@gmail.com', '26-40', '$2y$10$ZvZQSxmbStIy31u7GTl0luWuJrCWaT2hMSEtWk4UsBPgI5E4C6JYe'),
(9, '', '', '', ''),
(10, 'newuser', 'newuser@new.com', '18-25', '$2y$10$sQByesimYD8XgTpsXpn4OO0vN8Aj8pGoBzrKAnNDjmsyXwDGuXXgu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Activities`
--
ALTER TABLE `Activities`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `Pizza`
--
ALTER TABLE `Pizza`
  ADD PRIMARY KEY (`PizzaID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `simpleusers`
--
ALTER TABLE `simpleusers`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `testTable`
--
ALTER TABLE `testTable`
  ADD PRIMARY KEY (`Entry ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Activities`
--
ALTER TABLE `Activities`
  MODIFY `CustomerID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CustomerID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Pizza`
--
ALTER TABLE `Pizza`
  MODIFY `PizzaID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `simpleusers`
--
ALTER TABLE `simpleusers`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testTable`
--
ALTER TABLE `testTable`
  MODIFY `Entry ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
