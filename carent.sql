-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 07:40 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carent`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `name`) VALUES
(111, 'sports'),
(112, 'culture'),
(113, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  `category` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `photo` blob,
  `address` varchar(80) NOT NULL,
  `organiser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

"INSERT INTO `events` (`event_id`, `name`, `description`, `category`, `time`, `date`, `photo`, `address`, `organiser_id`) VALUES
(1, 'National Swimming Champions', 'Aston university swimming society enters the semi-finals', sports, '15:00:00', '2018-05-05', NULL, 'Aston University Sports Centre, Woodcock st, Birmingham, B4 7ET', 1),
(3, 'Holi festival', 'annual festival of colour, everyone is welcome', culture, '12:00:00', '2018-03-21', NULL, 'Aston University Campus', 2),
(4, 'AUCU Ball', 'Aston University Christian Union Ball, all are welcome', culture, '19:30:00', '2018-06-07', NULL, 'Town Hall, Victoria Square, Birmingham, B3 3DQ', 2),
(5, 'Chritsmas Carol 2018', 'Fundraiser christmas carol to celebrate the end of 1st term', other, '18:30:00', '2018-12-10', NULL, 'Main Building, The Great Hall', 2),
(6, 'Sikh Society Fashion Show', 'End of year ball', culture, '19:00:00', '2018-06-12', NULL, 'Aston Students Union', 'o.kimpiab@hotmail.co.uk'),
(7, 'Female Rugby Try-outs', 'Try-outs for the aston university female rugby team', sports, '15:00:00', '2018-04-29', NULL, 'Woodcock st, B4 7ET', 3),
(8, 'ACS Ball', 'Celebrating the end of year with an amazing soiree', other, '18:00:00', '2018-06-09', NULL, 'Location to be confirmed', 1),
(9, 'Netflix & Pizza', 'Social event, all invited, network and meet new people', other, '17:00:00', '2018-05-25', NULL, 'Martin Luther King Building, B4 7EN', 3),
(10, 'Gosta Pub Quiz', 'Fun and games and a cash prize', other, '20:30:00', '2018-05-05', NULL, 'Gostas, Birmingham, B4 4PE', 3),
(11, 'Jitsu Free Taster Session', 'Pop in for a free taster session', sports, '16:30:00', '2018-05-10', NULL, 'Woodcock st, Birmingham, B4 3DQ', 1);");
-- --------------------------------------------------------

--
-- Table structure for table `organiser`
--

CREATE TABLE `organiser` (
  `organiser_id` int(11) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `username` int(20) NOT NULL,
  `epassword` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organiser`
--

INSERT INTO `organiser` (`organiser_id`, `event_id`, `username`, `password`, `name`, `email`, `phone`) VALUES
(1, 1, 'pineapple1', 'Google1', 'Kimbo Slice', 'k.slice@yahoo.co.uk', 2147483647),
(2, 2, 'Bogis Lucifer', 'lucib@hotmail.co.uk', 1218938476);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `organiser_id` (`organiser_id`);

--
-- Indexes for table `organiser`
--
ALTER TABLE `organiser`
  ADD PRIMARY KEY (`organiser_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `organiser`
--
ALTER TABLE `organiser`
  MODIFY `organiser_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
