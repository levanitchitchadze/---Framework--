-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 02:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midterm22`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FN` varchar(100) DEFAULT NULL,
  `LN` varchar(100) DEFAULT NULL,
  `BD` varchar(50) DEFAULT NULL,
  `PIN` varchar(11) DEFAULT NULL,
  `POS` varchar(100) DEFAULT NULL,
  `RD` varchar(50) DEFAULT NULL,
  `Number` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FN`, `LN`, `BD`, `PIN`, `POS`, `RD`, `Number`) VALUES
(15, 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 0),
(57, 'levan', 'Tchitchadze', '10/10/2000', '01001111001', 'Developer', '12/3/2019', 551342133),
(58, 'levan', 'Tchitchadze', '10/10/2000', '01001111001', 'Developer', '12/3/2019', 551342133),
(59, 'levan', 'Tchitchadze', '10/10/2000', '01001111001', 'Developer', '12/3/2019', 551342133),
(60, 'levan', 'Tchitchadze', '10/10/2000', '01001111001', 'Developer', '12/3/2019', 551342133),
(61, 'levan', 'Tchitchadze', '10/10/2000', '01001111001', 'Developer', '12/3/2019', 551342133),
(62, 'levan', 'Tchitchadze', '10/10/2000', '01001111001', 'Developer', '12/3/2019', 551342133),
(63, 'levan', 'Tchitchadze', '10/10/2000', '01001111001', 'Developer', '12/3/2019', 551342133),
(64, 'levan', 'Tchitchadze', '10/10/2000', '01001111001', 'Developer', '12/3/2019', 551342133),
(65, 'levan', 'Tchitchadze', '10/10/2000', '01001111001', 'Developer', '12/3/2019', 551342133),
(66, 'levan', 'Tchitchadze', '10/10/2000', '01001111001', 'Developer', '12/3/2019', 551342133),
(67, 'dfhshy', 'sdhsh', 'sdtgsdg', 'sgdsdg', 'sdgsdg', 'sdgsdg', 0),
(68, 'hello', 'sdhsh', '2022-11-09', 'sgdsdg', 'hello', 'sdgsdg', 0),
(69, 'dfhshy', 'hello', '2022-11-30', 'sgdsdg', 'hello', '2022-11-26', 839653920);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
