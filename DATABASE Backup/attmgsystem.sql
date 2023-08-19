-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2023 at 02:08 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attmgsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE IF NOT EXISTS `admininfo` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`username`, `password`, `email`, `fname`, `phone`, `type`) VALUES
('admin', 'admin', 'admin@gmail.com', 'admin', '2147483647', 'admin'),
('anjali', '12345', 'anjali@gmail.com', 'anjali', '9898987501', 'student'),
('bhumi', '12345', 'bhumi@gmail.com', 'Bhumika shah', '9895878987', 'teacher'),
('dhara', '12345', 'dhara@gmail.com', 'dhara', '46879646', 'student'),
('john', 'password', 'john@gmail.com', 'John Walker', '8541112450', 'student'),
('kevin', 'password', 'kevinm@gmail.com', 'Kevin Moore', '1247778540', 'teacher'),
('tej', '12345', 'tej@gmail.com', 'tej', '99999999', 'student'),
('tejd', '12345678', 'tej@gmail.com', 'Tej Doshi', '9897584910', 'student'),
('tejj', '12345', 'tej@gmail.com', 'tej doshi', '7878778787', 'student'),
('tej_d', '12345', 'tejdoshi55@gmail.com', 'tej d', '8998989', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `stat_id` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `st_status` varchar(10) NOT NULL,
  `stat_date` date NOT NULL,
  KEY `stat_id` (`stat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`stat_id`, `course`, `st_status`, `stat_date`) VALUES
('11', 'DBMS_PRAC', 'Present', '2023-01-03'),
('12', 'DBMS_PRAC', 'Present', '2023-01-03'),
('11', 'SF', 'Present', '2023-01-03'),
('12', 'SF', 'Present', '2023-01-03'),
('12', 'DBMS', 'Present', '2023-01-04'),
('1', 'OOCP', 'Absent', '2023-01-04'),
('10', 'OOCP', 'Absent', '2023-01-04'),
('12', 'OOCP', 'Present', '2023-01-04'),
('2', 'OOCP', 'Present', '2023-01-04'),
('3', 'OOCP', 'Absent', '2023-01-04'),
('4', 'OOCP', 'Present', '2023-01-04'),
('5', 'OOCP', 'Absent', '2023-01-04'),
('6', 'OOCP', 'Present', '2023-01-04'),
('7', 'OOCP', 'Present', '2023-01-04'),
('8', 'OOCP', 'Present', '2023-01-04'),
('9', 'OOCP', 'Present', '2023-01-04'),
('1', 'OOCP', 'Present', '2023-01-04'),
('10', 'OOCP', 'Present', '2023-01-04'),
('11', 'OOCP', 'Present', '2023-01-04'),
('12', 'OOCP', 'Present', '2023-01-04'),
('2', 'OOCP', 'Absent', '2023-01-04'),
('3', 'OOCP', 'Present', '2023-01-04'),
('4', 'OOCP', 'Present', '2023-01-04'),
('5', 'OOCP', 'Present', '2023-01-04'),
('6', 'OOCP', 'Present', '2023-01-04'),
('7', 'OOCP', 'Present', '2023-01-04'),
('8', 'OOCP', 'Present', '2023-01-04'),
('9', 'OOCP', 'Present', '2023-01-04'),
('1', 'OOCP', 'Absent', '2023-01-04'),
('10', 'OOCP', 'Present', '2023-01-04'),
('11', 'OOCP', 'Present', '2023-01-04'),
('12', 'OOCP', 'Present', '2023-01-04'),
('2', 'OOCP', 'Present', '2023-01-04'),
('3', 'OOCP', 'Present', '2023-01-04'),
('4', 'OOCP', 'Present', '2023-01-04'),
('5', 'OOCP', 'Present', '2023-01-04'),
('6', 'OOCP', 'Present', '2023-01-04'),
('7', 'OOCP', 'Present', '2023-01-04'),
('8', 'OOCP', 'Present', '2023-01-04'),
('9', 'OOCP', 'Present', '2023-01-04'),
('1', 'OOCP', 'Present', '2023-01-08'),
('10', 'OOCP', 'Present', '2023-01-08'),
('11', 'OOCP', 'Present', '2023-01-08'),
('12', 'OOCP', 'Present', '2023-01-08'),
('2', 'OOCP', 'Present', '2023-01-08'),
('3', 'OOCP', 'Present', '2023-01-08'),
('4', 'OOCP', 'Present', '2023-01-08'),
('5', 'OOCP', 'Present', '2023-01-08'),
('6', 'OOCP', 'Present', '2023-01-08'),
('7', 'OOCP', 'Present', '2023-01-08'),
('8', 'OOCP', 'Present', '2023-01-08'),
('9', 'OOCP', 'Present', '2023-01-08'),
('1', 'OOCP', 'Present', '2023-01-08'),
('10', 'OOCP', 'Present', '2023-01-08'),
('11', 'OOCP', 'Present', '2023-01-08'),
('12', 'OOCP', 'Present', '2023-01-08'),
('2', 'OOCP', 'Present', '2023-01-08'),
('3', 'OOCP', 'Present', '2023-01-08'),
('4', 'OOCP', 'Present', '2023-01-08'),
('5', 'OOCP', 'Present', '2023-01-08'),
('6', 'OOCP', 'Present', '2023-01-08'),
('7', 'OOCP', 'Present', '2023-01-08'),
('8', 'OOCP', 'Present', '2023-01-08'),
('9', 'OOCP', 'Present', '2023-01-08'),
('1', 'OOCP', 'Present', '2023-01-08'),
('10', 'OOCP', 'Present', '2023-01-08'),
('11', 'OOCP', 'Present', '2023-01-08'),
('12', 'OOCP', 'Present', '2023-01-08'),
('2', 'OOCP', 'Present', '2023-01-08'),
('3', 'OOCP', 'Present', '2023-01-08'),
('4', 'OOCP', 'Present', '2023-01-08'),
('5', 'OOCP', 'Absent', '2023-01-08'),
('6', 'OOCP', 'Present', '2023-01-08'),
('7', 'OOCP', 'Absent', '2023-01-08'),
('8', 'OOCP', 'Present', '2023-01-08'),
('9', 'OOCP', 'Present', '2023-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE IF NOT EXISTS `form_data` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`id`, `name`, `email`, `message`) VALUES
(1, 'dhara', 'tej@gmail.com', 'sd'),
(2, 'dhara', 'tej@gmail.com', 'hii'),
(3, 'dhara', 'dhara30@gmail.com', 'heloooo\r\n'),
(4, 'rohan', 'rohan1@gmail.com', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `st_id` varchar(20) NOT NULL,
  `st_name` varchar(20) NOT NULL,
  `st_batch` int(4) NOT NULL,
  `st_sem` int(11) NOT NULL,
  `st_email` varchar(30) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_id`, `st_name`, `st_batch`, `st_sem`, `st_email`) VALUES
('1', 'Ekta Ajga', 2021, 3, 'ekta01@gmail.com'),
('10', 'Tirth Mehta', 2021, 3, 'tirt@gmail.com'),
('11', 'Devansh Makwana', 2021, 3, 'devansh@gmail.com'),
('12', 'Janvi Chauhan', 2021, 3, 'janvi@gmail.com'),
('2', 'Arya Ganotra', 2021, 3, 'arya02@gmail.com'),
('3', 'Tisha Suthar', 2021, 3, 'tisha03@gmail.com'),
('4', 'Sahil Tank', 2021, 3, 'sahil04@gmail.com'),
('5', 'Tej Doshi', 2021, 3, 'TEjDoshi@gmail.com'),
('6', 'Hem Shah', 2021, 3, 'hem6@gmail.com'),
('7', 'Rohan Pandya', 2021, 3, 'rp@gmail.com'),
('8', 'Yash Rajput', 2021, 3, 'yash@gmail.com'),
('9', 'Pranjal Bhatt', 2021, 3, 'pranjal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `tc_id` varchar(20) NOT NULL,
  `tc_name` varchar(20) NOT NULL,
  `tc_email` varchar(30) NOT NULL,
  `tc_course` varchar(30) NOT NULL,
  PRIMARY KEY (`tc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tc_id`, `tc_name`, `tc_email`, `tc_course`) VALUES
('1', 'Bhumika shah', 'bhumi@gmail.com', 'DBMS'),
('2', 'Jay Patel', 'jaypatel@gmil.com', 'OOCP'),
('3', 'Aparna Sonware', 'AS@gmail.com', 'SF'),
('4', 'Shreyasi Iyer', 'sh@gmail.com', 'ENG'),
('5', 'Hardik Joshi', 'hardik2@gmail.com', 'OS');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`stat_id`) REFERENCES `students` (`st_id`);
