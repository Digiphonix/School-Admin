-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 12:36 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Surname`, `FirstName`, `Password`) VALUES
(1, 'kareem', 'tayo', 'tayo');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Id` int(15) NOT NULL,
  `Level` int(40) NOT NULL,
  `Coursename` varchar(50) NOT NULL,
  `Unit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Id`, `Level`, `Coursename`, `Unit`) VALUES
(2, 200, 'Mathematics', 60),
(4, 400, 'English', 40),
(5, 200, 'sco 205', 4),
(6, 200, 'sociology of religion', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(15) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `State` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Level` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Surname`, `Firstname`, `State`, `Gender`, `Password`, `Level`) VALUES
(4, 'shola t', 'kola', 'Lagos', 'male', 'toal', '200'),
(11, 'Oluwabanjo', 'Oluwabanjo', 'Kwara', 'male', 'wiod', '300'),
(13, 'ftyui', 'ftyui', 'Kwara', 'male', 'rtyui', '100'),
(15, 'Owoso', 'Oluwabanjo', 'Kwara', 'Male', 'owoso123', '400'),
(18, 'olatayo', 'lola', 'Kwara', 'male', 'huyt', '200'),
(19, 'Bola', 'Kunle', 'Kwara', 'male', 'bola', '200'),
(20, 'seun', 'Bola', 'Kogi', 'female', 'foil', '400'),
(21, 'kola', 'Kunle', 'Kwara', 'male', 'toal', '200'),
(22, 'tinubu', 'Kunle', 'Kwara', 'male', 'toal', '100');

-- --------------------------------------------------------

--
-- Table structure for table `studentcourse`
--

CREATE TABLE `studentcourse` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `CourseId` int(11) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentcourse`
--

INSERT INTO `studentcourse` (`Id`, `StudentId`, `CourseId`, `Date`) VALUES
(2, 19, 2, '0000-00-00'),
(3, 19, 2, '0000-00-00'),
(4, 19, 2, '0000-00-00'),
(5, 19, 2, '0000-00-00'),
(6, 19, 5, '0000-00-00'),
(7, 19, 6, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `studentresult`
--

CREATE TABLE `studentresult` (
  `Id` int(15) NOT NULL,
  `StudentId` int(40) NOT NULL,
  `CourseId` int(20) NOT NULL,
  `FirstCA` int(30) NOT NULL,
  `SecondCA` int(40) NOT NULL,
  `Exam` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers_list`
--

CREATE TABLE `teachers_list` (
  `Id` int(11) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_list`
--

INSERT INTO `teachers_list` (`Id`, `Surname`, `Firstname`, `State`, `Gender`, `Password`) VALUES
(1, 'Owoso', 'Oluwabanjo', 'Lagos', 'male', 'owoso123'),
(2, 'Lanre', 'Sam', 'Kwara', 'male', 'owoso123'),
(7, 'Owoso', 'Oluwabanjo', 'Kwara', 'male', 'wowoso'),
(8, 'Oluwabanjo', 'bola', 'Kwara', 'male', 'samuel'),
(11, 'Owoso', 'Oluwabanjo', 'Kwara', 'female', 'Woshbvnvm'),
(13, 'Biola', 'Tobi', 'Kwara', 'male', 'bhok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studentresult`
--
ALTER TABLE `studentresult`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teachers_list`
--
ALTER TABLE `teachers_list`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `studentcourse`
--
ALTER TABLE `studentcourse`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `studentresult`
--
ALTER TABLE `studentresult`
  MODIFY `Id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teachers_list`
--
ALTER TABLE `teachers_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
