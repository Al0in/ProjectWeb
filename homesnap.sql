-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2023 at 10:57 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homesnap`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicationstatus`
--

CREATE TABLE `applicationstatus` (
  `id` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicationstatus`
--

INSERT INTO `applicationstatus` (`id`, `status`) VALUES
('1', 'Accepted'),
('2', 'Under consideration'),
('3', 'Declined');

-- --------------------------------------------------------

--
-- Table structure for table `homeowner`
--

CREATE TABLE `homeowner` (
  `id` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homeowner`
--

INSERT INTO `homeowner` (`id`, `name`, `phone_number`, `email_address`, `password`) VALUES
('1', 'Omar', 512349765, 'Omar@hotmail.com', 'Omar123'),
('2', 'Nora', 535300517, 'Nora@hotmail.com', 'Nora123'),
('3', 'Nouf', 559259596, 'Nouf@hotmail.com', 'Nouf123');

-- --------------------------------------------------------

--
-- Table structure for table `homeseeker`
--

CREATE TABLE `homeseeker` (
  `id` varchar(15) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `family_members` int(3) NOT NULL,
  `income` float NOT NULL,
  `job` varchar(20) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email_adress` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homeseeker`
--

INSERT INTO `homeseeker` (`id`, `first_name`, `last_name`, `age`, `family_members`, `income`, `job`, `phone_number`, `email_adress`, `password`) VALUES
('1', 'Sarah', 'Ahmad', 35, 3, 30000, 'Doctor', 554356708, 'Sarah@hotmail.com', 'Sarah123'),
('2', 'Ali', 'Mohammd', 40, 4, 40000, 'Engineer', 567894321, 'Ali@hotmail.com', 'Ali123'),
('3', 'Mohammed', 'Saud', 38, 5, 25000, 'Teacher', 555331231, 'Mohammed@hotmail.com', 'Mohammed123');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` varchar(15) NOT NULL,
  `homeowner_id` varchar(15) NOT NULL,
  `property_category_id` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `rooms` int(3) NOT NULL,
  `rent_cost` float NOT NULL,
  `location` varchar(50) NOT NULL,
  `max_tenants` int(3) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `homeowner_id`, `property_category_id`, `name`, `rooms`, `rent_cost`, `location`, `max_tenants`, `description`) VALUES
('1', '1', '1', 'Olaya Plaza', 2, 1000, 'Riyadh, Olaya Dist', 2, 'Size 150 m2\r\nhas living room,kitchen,2 bathrooms'),
('2', '2', '2', 'ALNakheel Home', 4, 7000, 'Riyadh, Alnakheel Dist', 5, 'Size 500 m2\r\nhas 2 living rooms,kitchen,4 bathrooms ,swimming pool'),
('3', '3', '3', 'Rawabi square', 3, 2000, 'Riyadh, Rawabi Dist', 3, 'Size 200 m2\r\nhas living room,kitchen,3 bathrooms');

-- --------------------------------------------------------

--
-- Table structure for table `propertycategory`
--

CREATE TABLE `propertycategory` (
  `id` varchar(15) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `propertycategory`
--

INSERT INTO `propertycategory` (`id`, `category`) VALUES
('1', 'Apartment'),
('2', 'Villa'),
('3', 'Floor');

-- --------------------------------------------------------

--
-- Table structure for table `propertyimage`
--

CREATE TABLE `propertyimage` (
  `id` varchar(15) NOT NULL,
  `property_id` varchar(15) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `propertyimage`
--

INSERT INTO `propertyimage` (`id`, `property_id`, `path`) VALUES
('1', '1', 'view1.jpg'),
('2', '1', 'view2.jpg'),
('3', '1', 'view3.jpg'),
('4', '2', 'Villa1.jpeg'),
('5', '2', 'Villa2.jpg'),
('6', '2', 'Villa3.jpg\r\n'),
('7', '3', 'Floor1.jpg'),
('8', '3', 'Floor2.jpg'),
('9', '3', 'Floor3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rentalapplication`
--

CREATE TABLE `rentalapplication` (
  `id` varchar(15) NOT NULL,
  `property_id` varchar(15) NOT NULL,
  `home_seeker_id` varchar(15) NOT NULL,
  `application_status_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rentalapplication`
--

INSERT INTO `rentalapplication` (`id`, `property_id`, `home_seeker_id`, `application_status_id`) VALUES
('1', '1', '1', '2'),
('2', '2', '2', '3'),
('3', '3', '3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicationstatus`
--
ALTER TABLE `applicationstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeowner`
--
ALTER TABLE `homeowner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeseeker`
--
ALTER TABLE `homeseeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `homeowner_id` (`homeowner_id`),
  ADD KEY `property_category_id` (`property_category_id`),
  ADD KEY `property_category_id_2` (`property_category_id`);

--
-- Indexes for table `propertycategory`
--
ALTER TABLE `propertycategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertyimage`
--
ALTER TABLE `propertyimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `rentalapplication`
--
ALTER TABLE `rentalapplication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`),
  ADD KEY `home_seeker_id` (`home_seeker_id`),
  ADD KEY `application_status_id` (`application_status_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`homeowner_id`) REFERENCES `homeowner` (`id`),
  ADD CONSTRAINT `property_ibfk_2` FOREIGN KEY (`property_category_id`) REFERENCES `propertycategory` (`id`);

--
-- Constraints for table `propertyimage`
--
ALTER TABLE `propertyimage`
  ADD CONSTRAINT `propertyimage_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`);

--
-- Constraints for table `rentalapplication`
--
ALTER TABLE `rentalapplication`
  ADD CONSTRAINT `rentalapplication_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`),
  ADD CONSTRAINT `rentalapplication_ibfk_2` FOREIGN KEY (`home_seeker_id`) REFERENCES `homeseeker` (`id`),
  ADD CONSTRAINT `rentalapplication_ibfk_3` FOREIGN KEY (`application_status_id`) REFERENCES `applicationstatus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
