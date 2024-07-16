-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 09:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_inv_trans`
--

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `colourID` int(11) NOT NULL,
  `colourName` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`colourID`, `colourName`) VALUES
(1, 'beige'),
(2, 'black'),
(3, 'grey'),
(4, 'white');

-- --------------------------------------------------------

--
-- Table structure for table `kind`
--

CREATE TABLE `kind` (
  `kindID` int(11) NOT NULL,
  `kindName` varchar(1000) NOT NULL,
  `stock` int(11) NOT NULL,
  `ordered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kind`
--

INSERT INTO `kind` (`kindID`, `kindName`, `stock`, `ordered`) VALUES
(1, 'floor', 100, 0),
(2, 'wall', 100, 0),
(3, 'ceiling', 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `materialID` int(11) NOT NULL,
  `materialName` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`materialID`, `materialName`) VALUES
(1, 'tile'),
(2, 'wood'),
(3, 'concrete'),
(4, 'marble'),
(5, 'granite'),
(6, 'glass');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `productID` int(11) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `productName` varchar(1000) NOT NULL,
  `productKind` int(11) NOT NULL,
  `productMaterial` int(11) NOT NULL,
  `productColour` int(11) NOT NULL,
  `productUse` int(11) NOT NULL,
  `productSize` int(11) NOT NULL,
  `productStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`productID`, `productCode`, `productName`, `productKind`, `productMaterial`, `productColour`, `productUse`, `productSize`, `productStock`) VALUES
(1, 'FTBG1', 'Product 1', 1, 1, 1, 1, 1, 100),
(2, 'FWBB2', 'Product 2', 1, 2, 1, 2, 1, 100),
(3, 'WCWG3', 'Product 3', 2, 3, 4, 1, 2, 100),
(4, 'WCMO4', 'Product 4', 2, 4, 2, 5, 1, 100),
(5, 'FGWI5', 'Product 5', 1, 6, 4, 6, 2, 100),
(6, 'WGGK6', 'Product 6', 2, 5, 3, 3, 1, 100),
(7, 'FGWB7', 'Product 7', 1, 5, 2, 4, 2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `sizeID` int(11) NOT NULL,
  `sizeName` varchar(100) NOT NULL,
  `sizeValue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`sizeID`, `sizeName`, `sizeValue`) VALUES
(1, 'medium', 20),
(2, 'large', 50);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `trxID` int(11) NOT NULL,
  `trxCode` varchar(10) NOT NULL,
  `productID` int(11) NOT NULL,
  `trxDate` date NOT NULL,
  `orderQty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`trxID`, `trxCode`, `productID`, `trxDate`, `orderQty`) VALUES
(1, 'TR11306', 1, '2024-06-13', 5),
(2, 'TR21306', 2, '2024-06-13', 5),
(3, 'TR31305', 1, '2024-05-13', 4),
(4, 'TR21306', 2, '2024-05-13', 51),
(5, 'TR31305', 3, '2024-03-13', 23),
(6, 'TR21302', 6, '2024-02-13', 2),
(7, 'TR70305', 5, '2024-03-05', 1),
(8, 'TR80201', 4, '2024-01-02', 7),
(9, 'TR90904', 5, '2024-04-09', 10),
(10, 'TR82102', 3, '2024-02-21', 15),
(11, 'tes1', 1, '2024-06-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `use`
--

CREATE TABLE `use` (
  `useID` int(11) NOT NULL,
  `useName` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `use`
--

INSERT INTO `use` (`useID`, `useName`) VALUES
(1, 'general'),
(2, 'bathroom'),
(3, 'kitchen'),
(4, 'bedroom'),
(5, 'outdoor'),
(6, 'industrial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`colourID`);

--
-- Indexes for table `kind`
--
ALTER TABLE `kind`
  ADD PRIMARY KEY (`kindID`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`materialID`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `colourID_prod_col` (`productColour`),
  ADD KEY `kindID_prod_kin` (`productKind`),
  ADD KEY `matID_prod_mat` (`productMaterial`),
  ADD KEY `sizeID_prod_siz` (`productSize`),
  ADD KEY `useID_prod_use` (`productUse`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`sizeID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trxID`),
  ADD KEY `productID_trans_prod` (`productID`);

--
-- Indexes for table `use`
--
ALTER TABLE `use`
  ADD PRIMARY KEY (`useID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kindID_prod_kin` FOREIGN KEY (`productKind`) REFERENCES `kind` (`kindID`),
  ADD CONSTRAINT `matID_prod_mat` FOREIGN KEY (`productMaterial`) REFERENCES `material` (`materialID`),
  ADD CONSTRAINT `sizeID_prod_siz` FOREIGN KEY (`productSize`) REFERENCES `sizes` (`sizeID`),
  ADD CONSTRAINT `useID_prod_use` FOREIGN KEY (`productUse`) REFERENCES `use` (`useID`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `productID_trans_prod` FOREIGN KEY (`productID`) REFERENCES `produk` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
