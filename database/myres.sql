-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2021 at 02:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myres`
--
CREATE DATABASE IF NOT EXISTS `myres` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `myres`;

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `Res_ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Res_Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Campus` varchar(50) DEFAULT NULL,
  `Price_Accreditation` int(11) DEFAULT NULL,
  `Sharing` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telephone` int(11) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `maplink` varchar(255) NOT NULL,
  `picture_id` varchar(5000) null
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation`(`Res_Name`, `Address`, `Campus`, `Price_Accreditation`, `Sharing`, `Email`, `Telephone`, `Description`, `maplink`) VALUES
('Citiq Students', '139 Carolin Street, Brixton, Johannesburg, 2109', 'APK', 3500, 'Yes', 'umhlangaJ@citiq.co.za', 724183154, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620748596578!6m8!1m7!1sv6xX-mgoPE-tZA0bJxZ4DA!2m2!1d-26.19377919793177!2d28.00178570915975!3f16.671666666711964!4f-0.2615565424848114!5f0.4000000000000002'),
('City Waldorf Student Accommodation', '35 Sauer Street (1634 Albertina Sisulu), Johannesburg, 2000', 'APK', 3500, 'Yes', 'hellen@citywaldorf.com', 722246181, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620748894585!6m8!1m7!1s2rRKWL5COthIY_RElCmtZA!2m2!1d-26.20121218350006!2d28.04553611959688!3f24.41478711547213!4f17.46959512951193!5f0.7820865974627469'),
('Hlala Kamnandi Properties', '35 Hampton Avenue, Rossmore, Johannesburg, 2092', 'APK', 3500, 'No', 'minky@hlalakamnandi.co.za', 732560297, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620749402891!6m8!1m7!1syxR8oJHbgD5zWbIl0w8iaw!2m2!1d-26.18906700946239!2d27.99365819079542!3f200.54822982583133!4f-5.581243540452121!5f1.9587109090973311'),
('Mafadi Property Management', '145 High Street, Brixton, Johannesburg, 2092', 'APB', 3500, 'No', 'brixton@mafadi.co.za', 825883199, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620749769528!6m8!1m7!1sZwaY1RzC8rlxd4_xF_kiGA!2m2!1d-26.19493711755475!2d28.00084313734623!3f65.67053333773654!4f-4.883551810165898!5f0.7820865974627469'),
('Malibu Estates', '153 Collins Street, Brixton, Johannesburg, 2019', 'APB', 3500, 'Yes', 'malibu@absamail.co.za', 837881204, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620750443520!6m8!1m7!1sOa7JZPdf-qS0a_21gbH2BA!2m2!1d-26.18921330341976!2d27.99034475723335!3f356.158976468553!4f-9.576835586557536!5f0.7820865974627469'),
('Lapeng Student Accommodation', '79 Collins Street, Brixton, Johanneburg, 2092', 'APB', 3500, 'No', 'sizwe.noruwana@gmail.com', 826670295, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620750769913!6m8!1m7!1s-Ptb4JYWP5qiVAiOLaW6gg!2m2!1d-26.19248650461783!2d27.99629688285948!3f35.24179695502467!4f-12.981528129643422!5f0.7820865974627469'),
('Colec Properties', '3 Gordon Terrace, Yeoville, Johannesburg, 2198', 'DFC', 3500, 'Yes', 'dustin@colecproperties.co.za', 843333124, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620753159212!6m8!1m7!1sH11IecC9punYeO5oRi43fA!2m2!1d-26.19087962338077!2d28.05948721737322!3f250.52011428688664!4f0.519645087923152!5f0.4000000000000002'),
('Highlands Urban Living', '3 Highlands Street, Highlands, Johannesburg, 2092', 'DFC', 3500, 'Yes', 'smskhosana@gmail.com', 835480182, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620754050577!6m8!1m7!1swx99lwq4NIalEh946SPfjQ!2m2!1d-26.19069167755865!2d28.06261674745194!3f22.122883344001533!4f-2.920853395735719!5f0.4000000000000002'),
('Respublica Student Living', '17 Hadfield Road, Berea, Johannesburg, 2000', 'DFC', 3500, 'No', 'xiki@respublica.co.za', 100200300, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620755097755!6m8!1m7!1sYIU1SRWXMWQv2Hn0x7DXkw!2m2!1d-26.18456927337957!2d28.02620701177625!3f55.156832309466175!4f-12.052237615466609!5f0.7820865974627469'),
('Harambe Accommodation', '955 Python Crescent, Johannesburg, 1862', 'SWC', 3500, 'Yes', 'mfaba.thabisile@gmail.com', 824502400, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620756315065!6m8!1m7!1sPSsqqaIKWcKRq9zhyLOgRQ!2m2!1d-26.27621883491945!2d28.06410515327514!3f93.42054!4f0!5f0.7820865974627469'),
('The Richmond', '42 Richmond Ave, Auckland Park, Johannesburg, 2092', 'APK', 5000, 'No', 'info@richmondlife.co.za', 873653166, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620751448283!6m8!1m7!1srpe4yGuvYOjGkPyxSRTekw!2m2!1d-26.18373306298887!2d28.00323733104778!3f182.76469903951812!4f-6.61170366011973!5f0.4000000000000002'),
('Richmond Corner', '56 Richmond Ave, Auckland Park, Johannesburg, 2092', 'APK', 4800, 'Yes', 'info@richmondcorner.co.za', 873522767, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620751255406!6m8!1m7!1sOdRo4ypspitERKzEUguV_g!2m2!1d-26.18422324716495!2d28.00542925977857!3f178.8121529725028!4f1.3928814606305338!5f0.4000000000000002'),
('Kingsway Place Student Accomodation', '66 Kingsway Ave, Auckland Park, Johannesburg, 2092', 'APK', 4800, 'No', 'info@kingswayplace.co.za', 873579081, 'For your home away from home. Single rooms in a communal house.', 'https://www.google.com/maps/embed?pb=!4v1620748783330!6m8!1m7!1s7GKrPFye23GBd86RJ7f-BQ!2m2!1d-26.18443913745277!2d28.00658323770915!3f343.43!4f0!5f0.7820865974627469');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `Res_ID` int(11) DEFAULT NULL,
  `pictures` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Res_ID` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `User_Password` varchar(255) DEFAULT NULL,
  `Verified` varchar(255) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--


--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD KEY `ResID` (`Res_ID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Res_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `ResID` FOREIGN KEY (`Res_ID`) REFERENCES `accomodation` (`Res_ID`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `fk_to_resid` FOREIGN KEY (`res_id`) REFERENCES `accomodation` (`Res_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Res_ID`) REFERENCES `accomodation` (`Res_ID`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`Res_ID`) REFERENCES `accomodation` (`Res_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
