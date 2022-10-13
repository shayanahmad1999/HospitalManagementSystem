-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 11:36 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Name` varchar(45) DEFAULT NULL,
  `Admin_Email` varchar(45) DEFAULT NULL,
  `Admin_Password` varchar(45) DEFAULT NULL,
  `Admin_Picture` varchar(200) NOT NULL,
  `Admin_Status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `Admin_Email`, `Admin_Password`, `Admin_Picture`, `Admin_Status`) VALUES
(4, 'Shayan Ahmad', 'shayan235@gmail.com', 'shayan321', 'doctors-3.jpg', 1),
(5, 'Tayyab Jan', 'tayyab@gmail.com', 'tayyab123', 'doctors-1.jpg', 1),
(6, 'Umair khaliq', 'umair@gmail.com', 'umair123', 'doctors-2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_ID` int(11) NOT NULL,
  `Doctor_Charge` int(11) DEFAULT NULL,
  `Room_Charge` int(11) DEFAULT NULL,
  `Laboratory_Charge` int(11) NOT NULL,
  `No_of_Days` int(11) DEFAULT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Bill_Status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_ID`, `Doctor_Charge`, `Room_Charge`, `Laboratory_Charge`, `No_of_Days`, `Patient_ID`, `Bill_Status`) VALUES
(4, 342, 432, 345, 4, 15, 1),
(5, 2965, 3900, 523, 5, 16, 1),
(6, 744, 2334, 634, 6, 17, 1),
(7, 2600, 390, 100, 5, 18, 1),
(8, 789, 2467, 739, 5, 24, 1),
(9, 6442, 6337, 1000, 12, 23, 1),
(11, 4554, 5653, 775, 4, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `ID` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `bloodgroup` varchar(45) NOT NULL,
  `lastdonation` date DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`ID`, `username`, `email`, `address`, `phone`, `sex`, `bloodgroup`, `lastdonation`, `status`) VALUES
(5, 'Shayan Ahmad', 'shayanahmad235@gmail.com', 'Babi Qadeem P/O Taru Jabba tehsil pabbi dist ', '0315500514', 'male', 'AB+', '2022-03-17', 1),
(6, 'Tayyab Jan', 'tayyab@gmail.com', 'Duran Poor chamkani road', '0315500514', 'male', 'O-', '2022-03-15', 1),
(7, 'Umair khaliq', 'umair@gmail.com', 'Babi Jadeed P/O Taru Jabba tehsil pabbi distr', '0315500514', 'male', 'O-', '2022-03-17', 1),
(8, 'nasir ali', 'nasir@gmail.com', 'Babi Qadeem P/O Taru Jabba tehsil pabbi distr', '0311-9105519', 'male', 'o+', '2022-03-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_ID` int(11) NOT NULL,
  `Department_Name` varchar(45) NOT NULL,
  `Department_Photo` varchar(200) NOT NULL,
  `Department_Status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_ID`, `Department_Name`, `Department_Photo`, `Department_Status`) VALUES
(13, 'Cardiology', 'departments-1.jpg', 1),
(14, 'Surgical', 'departments-1.jpg', 1),
(15, 'Anesthesia', 'departments-1.jpg', 1),
(16, 'Psychologist', 'departments-1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_ID` int(11) NOT NULL,
  `Doctor_Name` varchar(45) NOT NULL,
  `Doctor_Email` varchar(45) NOT NULL,
  `Doctor_Phone` varchar(45) NOT NULL,
  `Doctor_Address` varchar(45) NOT NULL,
  `Doctor_Photo` varchar(200) NOT NULL,
  `Doctor_Status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `Doctor_Name`, `Doctor_Email`, `Doctor_Phone`, `Doctor_Address`, `Doctor_Photo`, `Doctor_Status`) VALUES
(8, 'Shayan Ahmad', 'shayanahmad235@gmail.com', '0316-8871033', 'Babi Qadeem P/O Taru Jabba tehsil pabbi dist ', 'doctors-1.jpg', 1),
(9, 'umai khaliq', 'umair@gmail.com', '0315500514', 'Babi Jadeed P/O Taru Jabba tehsil pabbi distr', 'doctors-3.jpg', 1),
(10, 'Munim', 'main@gmail.com', '0311-9105519', 'Duran Poor chamkani road', 'doctors-2.jpg', 1),
(11, 'Mansoor', 'mansoor@gmail.com', '0915676543', 'Peshawar', 'doctors-4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_ID` int(11) NOT NULL,
  `Patient_Name` varchar(45) DEFAULT NULL,
  `Patient_Email` varchar(45) DEFAULT NULL,
  `Patient_Phone` varchar(45) DEFAULT NULL,
  `Patient_Appointment` date DEFAULT NULL,
  `Patient_Photo` varchar(200) DEFAULT NULL,
  `Patient_Message` varchar(45) DEFAULT NULL,
  `Patient_Status` int(2) NOT NULL DEFAULT 1,
  `Doctor_ID` int(10) NOT NULL,
  `Department_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_ID`, `Patient_Name`, `Patient_Email`, `Patient_Phone`, `Patient_Appointment`, `Patient_Photo`, `Patient_Message`, `Patient_Status`, `Doctor_ID`, `Department_ID`) VALUES
(15, 'Tayyab Jan', 'shayan@gmail.com', '0315500514', '2022-03-17', 'doctors-2.jpg', 'asdfghj', 1, 10, 13),
(16, 'malik wajahat', 'wajahat@gmail.com', '0315500514', '2022-03-27', 'doctor_1.jpg', 'sdfghjkl.', 1, 9, 15),
(17, 'Khanzaib', 'khan@gmail.com', '0311-9105519', '2022-03-29', 'person_1.jpg', 'ze sam dam ym kho mata khalk wy te lewania e ', 1, 8, 16),
(18, 'Mansoor', 'mansoor@gmail.com', '564433345', '2022-03-31', 'person_1.jpg', 'hdgjfajoffwe', 1, 9, 14),
(23, 'Tayyab Jan', 'dawood@gmail.com', '0316-8871033', '2022-04-20', 'doctor_2.jpg', 'ghjkl;                    ', 1, 8, 13),
(24, 'Mian Dawood', 'dawood@gmail.com', '0311-9105519', '2022-04-21', NULL, 'esdfghjkl;', 1, 8, 14);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(45) NOT NULL,
  `room_status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `room_status`) VALUES
(4, 'AC', 1),
(5, 'Air Condition', 1),
(6, 'Room Coller', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_ID`),
  ADD KEY `FK_bill_1` (`Patient_ID`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_ID`),
  ADD KEY `FK_patient_1` (`Doctor_ID`),
  ADD KEY `FK_patient_2` (`Department_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Bill_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Department_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `FK_bill_1` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `FK_patient_1` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctor` (`Doctor_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_patient_2` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`Department_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
