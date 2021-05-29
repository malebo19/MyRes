-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 07:48 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `Res_ID` int(11) NOT NULL,
  `Res_Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Campus` varchar(50) DEFAULT NULL,
  `Price_Accreditation` int(11) DEFAULT 3500,
  `Sharing` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telephone` int(11) DEFAULT NULL,
  `Description` varchar(10000) DEFAULT NULL,
  `maplink` varchar(255) NOT NULL,
  `picture_id` varchar(5000) DEFAULT NULL,
  `avgrate` int(5) DEFAULT NULL,
  `verified` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`Res_ID`, `Res_Name`, `Address`, `Campus`, `Price_Accreditation`, `Sharing`, `Email`, `Telephone`, `Description`, `maplink`, `picture_id`, `avgrate`, `verified`) VALUES
(1, 'Citiq Students', '139 Carolin Street, Brixton, Johannesburg, 2109', 'APK', 3500, 'Yes', 'kyghjl', 724183154, 'Citiq is a leading owner-operator of affordable student accommodation, with residences ranging from small single locations to multi building sites. Citiq aspires to be the leading affordable student accommodation provider in South Africa, enriching the lives of young South Africans and building a better future for all. Students never spend more than what they, or their parents budgeted for and in cases where accommodation packages include electricity and water, management can be sure consumption is managed. Finally, although choosing Citiq Prepaid as the prepaid utility vendor for a new development should be the obvious choice, existing shared accommodation has not been forgotten.                 ', 'https://www.google.com/maps/embed?pb=!4v1620748596578!6m8!1m7!1sv6xX-mgoPE-tZA0bJxZ4DA!2m2!1d-26.19377919793177!2d28.00178570915975!3f16.671666666711964!4f-0.2615565424848114!5f0.4000000000000002', '../images/8d25a4bb4b5c55accec66da568b8ef7d60afcb57b6a23.jpg', 5, 'Y'),
(2, 'City Waldorf Student Accommodation', '35 Sauer Street (1634 Albertina Sisulu), Johannesburg, 2000', 'APK', 3500, 'Yes', '219116512@student.uj.ac.za', 6789, 'The City Waldorf Student Accommodation is a preferred student accommodation with a growing number of residences\r\nin various locations .We specialize in servicing the University of Johannesburg, Wits and Central Johannesburg College.\r\nOur aim is to provide students with effective and efficient lifestyle that encourages a quality academic experience. Our locations, amenities,\r\nsystems, quality finishes, management style , security, facilities, activities and various in-house societies, promote a culture of talent and\r\ngrowth and always endeavors to support any student in pursuit of higher learning and talent growth.\r\nWe aim to support students by providing them with a unique living experience that promotes spontaneity, confidence, achievement and\r\nproblem solving. This support structure is made up by House Rules, partnering and our unique hands on management style.\r\nThink Groups, study groups, conferences, training are just some of the ongoing activities initiated by Waldorfians and supported through our\r\nfacilities and personal. ', 'https://www.google.com/maps/embed?pb=!4v1620748894585!6m8!1m7!1s2rRKWL5COthIY_RElCmtZA!2m2!1d-26.20121218350006!2d28.04553611959688!3f24.41478711547213!4f17.46959512951193!5f0.7820865974627469', '../images/2b135140c7d30c37ca7e47074a4b16a560afcb9f056ca.jpg', 2, 'Y'),
(3, 'Hlala Kamnandi Properties', '35 Hampton Avenue, Rossmore, Johannesburg, 2092', 'APK', 3500, 'No', '32432423423', 732560297, 'These standalone properties opposite University of Johannesburg (UJ) Kingsway Campus, Entrance 4, provide student accommodation for NSFAS and Private students mainly studying at the University of Johannesburg. Some students prefer to share a house with friends or make new friends this way, others prefer to stay in their own cottage with its own kitchen and bathroom. We have both options available. \r\nOur properties have a team doing the maintenance, cleaning of communal areas as well as the management of the rentals.\r\nWashing machines and free Wi-Fi are available at most of the residences.', 'https://www.google.com/maps/embed?pb=!4v1620749402891!6m8!1m7!1syxR8oJHbgD5zWbIl0w8iaw!2m2!1d-26.18906700946239!2d27.99365819079542!3f200.54822982583133!4f-5.581243540452121!5f1.9587109090973311', '../images/8ae17414bd873deb6c381a37e20e4efa60afcc92d12ba.jpg', NULL, 'Y'),
(4, 'Mafadi Property Management', '145 High Street, Brixton, Johannesburg, 2092', 'APB', 3500, 'No', 'brixton@mafadi.co.za', 825883199, 'Driven by strong demand for property management solutions, a hands-on approach, and good old-fashioned personal service, Mafadi has established itself as a new breed in the property stable. By understanding tenants’ needs and partnering closely with property owners and developers, Mafadi not only maximises income for property investors but adds value to our cities by managing sustainable living and working spaces.\r\n\r\nMafadi has created a home for itself in the Maboneng precinct of the Johannesburg CBD, while servicing the management needs of many other clients nationwide.\r\nLive close to UJ Varsity and all it surrounds.                  ', 'https://www.google.com/maps/embed?pb=!4v1620749769528!6m8!1m7!1sZwaY1RzC8rlxd4_xF_kiGA!2m2!1d-26.19493711755475!2d28.00084313734623!3f65.67053333773654!4f-4.883551810165898!5f0.7820865974627469', '../images/464da594df212d5abb78ce6590ed1b3d60afccb66b968.jpeg', NULL, 'Y'),
(5, 'Malibu Estates', '153 Collins Street, Brixton, Johannesburg, 2019', 'APB', 3500, 'Yes', 'malibu@absamail.co.za', 837881204, 'A thriving student community, situated in the heart of Braamfontein very close to the Wits and University of Johannesburg main campuses. Affordable and comfy living is what we’re about, with fully furnished rooms, great security and a real family vibe amongst the students. Malibu is not just a res, or a room, it’s a spot to rest after long hours of studying or chill after a night out. And, most importantly, a place to make your university experience fun, friendly & the best years of your student life.\r\nSo, if you’re looking for a place of learning and fun to grow and express yourself, then Malibu is your home.\r\n    ', 'https://www.google.com/maps/embed?pb=!4v1620750443520!6m8!1m7!1sOa7JZPdf-qS0a_21gbH2BA!2m2!1d-26.18921330341976!2d27.99034475723335!3f356.158976468553!4f-9.576835586557536!5f0.7820865974627469', '../images/1d562669cbe17f09db46175ab9405a2860afccfe563c7.jpg', NULL, 'Y'),
(6, 'Lapeng Student Accommodation', '79 Collins Street, Brixton, Johanneburg, 2092', 'APB', 3500, 'No', 'sizwe.noruwana@gmail.com', 826670295, 'Heita! If you’re looking for student accommodation in Joburg, then you can expect a lifestyle that is fast and furious, with over 15 Buildings to choose from. Welcome to the phashasha side of life. If a shot of adrenaline and a massive dose of the good life is what you’re after, then you have landed in the right city. At Lapeng we get that you like to study hard and play hard, which is why our student accommodation is based in highly liveable, well-positioned buildings within walking distances of most universities and public transport zones.          ', 'https://www.google.com/maps/embed?pb=!4v1620750769913!6m8!1m7!1s-Ptb4JYWP5qiVAiOLaW6gg!2m2!1d-26.19248650461783!2d27.99629688285948!3f35.24179695502467!4f-12.981528129643422!5f0.7820865974627469', '../images/f664a34951b623c7e6c360100c7d940e60afcd481e17e.jpeg', NULL, 'Y'),
(7, 'Colec Properties', '3 Gordon Terrace, Yeoville, Johannesburg, 2198', 'DFC', 3500, 'Yes', 'dustin@colecproperties.co.za', 843333124, 'Our community features are unrivaled and the apartment layout options are extensive. Our on-site management and 24-hour concierge services provides top-of-the-line customer service not just for your tour, lease signing, move-in, and move-out, but for every day in-between. We’ve thought of every little convenience in fully-furnished apartments, from individual leases to roommate-matching. Enjoy peace of mind with our 24 hour security access and service. Get your work done in the study spot or sit back and relax in the chill spots. Our 24 hour concierge services are always ready to assist.          ', 'https://www.google.com/maps/embed?pb=!4v1620753159212!6m8!1m7!1sH11IecC9punYeO5oRi43fA!2m2!1d-26.19087962338077!2d28.05948721737322!3f250.52011428688664!4f0.519645087923152!5f0.4000000000000002', '../images/e68196d154972bf96c55c55f6266284e60afcda94d841.jpg', NULL, 'Y'),
(8, 'Highlands Urban Living', '3 Highlands Street, Highlands, Johannesburg, 2092', 'DFC', 3500, 'Yes', 'smskhosana@gmail.com', 835480182, 'For your home away from home. Single rooms in a communal house. Looking for an accommodation in the city, where all your needs are taken care of with absolutely no hustle. Rest assured we have you covered, with the best location in the city, this is where as student you will excel academically and also will make the best friendships with fellow students. We have the most amazing facilities, pool tables and a view to die for.          ', 'https://www.google.com/maps/embed?pb=!4v1620754050577!6m8!1m7!1swx99lwq4NIalEh946SPfjQ!2m2!1d-26.19069167755865!2d28.06261674745194!3f22.122883344001533!4f-2.920853395735719!5f0.4000000000000002', '../images/b56a505493be238dc4192b119fcd41d560afcde3d53f7.jpg', NULL, 'Y'),
(9, 'Respublica Student Living', '17 Hadfield Road, Berea, Johannesburg, 2000', 'DFC', 3500, 'No', 'xiki@respublica.co.za', 100200300, 'Student Accommodation near Universities in South Africa\r\nForget what you thought you knew about student accommodation! We’re reinventing #reslife one city at a time. Our state-of-the-art student accommodation is setting a new trend in South Africa. Become a Respublican today. Check out our clean, modern residences in Pretoria, Jo’burg,  Bloemfontein and Cape Town and get in touch! We can’t wait to meet you! 10 Residences across South Africa All-inclusive living in modern studios, apartments & various other bedroom types Free Wi-Fi, free laundry facilities, free parking & free bedroom cleaning.   ', 'https://www.google.com/maps/embed?pb=!4v1620755097755!6m8!1m7!1sYIU1SRWXMWQv2Hn0x7DXkw!2m2!1d-26.18456927337957!2d28.02620701177625!3f55.156832309466175!4f-12.052237615466609!5f0.7820865974627469', '../images/8cd08572d4a00a98a83a0ace06d1219560afce06b8bde.jpg', NULL, 'Y'),
(10, 'Harambe Accommodation', '955 Python Crescent, Johannesburg, 1862', 'SWC', 3500, 'Yes', 'mfaba.thabisile@gmail.com', 824502400, 'Looking for a home away from home, look no further because Harambe accommodation is here for. Harambe offer sharing accommodation for students, we are a 5 min walk away from the University of Johannesburg Soweto campus. We are close to all the fun activities to do around Soweto such as the Orlando towers and the Orlando stadium where most sporting events take place.     ', 'https://www.google.com/maps/embed?pb=!4v1620756315065!6m8!1m7!1sPSsqqaIKWcKRq9zhyLOgRQ!2m2!1d-26.27621883491945!2d28.06410515327514!3f93.42054!4f0!5f0.7820865974627469', '../images/2847e4e23ebf96a363cd1a6b0955328460afce2c095ce.jpg', NULL, 'Y'),
(11, 'The Richmond', '42 Richmond Ave, Auckland Park, Johannesburg, 2092', 'APK', 5000, 'No', 'info@richmondlife.co.za', 873653166, 'Great quality, fully furnished single and two sharing rooms give you the privacy you need to study and relax, while comfortable communal areas give you a cool social space to share ideas and experiences with other students. Add to that laundry, Wi-Fi, DSTV, and direct access to the landlord, and you have a great place to live, study, grow, connect, and belong.\r\nExperience all our signature standard features and a whole lot more in 2021 with unmatched upgrades and new features. Free bus to WITS, outdoor gym areas and upgraded recreational areas are just some of the new and improved features that we have added.\r\n    ', 'https://www.google.com/maps/embed?pb=!4v1620751448283!6m8!1m7!1srpe4yGuvYOjGkPyxSRTekw!2m2!1d-26.18373306298887!2d28.00323733104778!3f182.76469903951812!4f-6.61170366011973!5f0.4000000000000002', '../images/730eb1146b1f36381e83bb001332425460afce68a5c1f.jpg', NULL, 'Y'),
(12, 'Richmond Corner', '56 Richmond Ave, Auckland Park, Johannesburg, 2092', 'APK', 4800, 'Yes', 'info@richmondcorner.co.za', 873522767, 'Richmond Corner – launched in 2020 making this student residence the newest in a series of premium apartments that make up the lively Richmond Avenue Precinct. Richmond Corner is within casual walking distance (500m) from the UJ campus to maximise the use of available time and saving on transportation expenses. Richmond Corner is also located close to Campus Square making retail shopping a convenience. Richmond Corner also forms part of a really cool urban landscape upgrade of the tree lined Richmond Avenue. This exciting urban upgrade is aimed at creating a pedestrian friendly environment where students can meet and socialise in a safe and secure public outdoor environment. ', 'https://www.google.com/maps/embed?pb=!4v1620751255406!6m8!1m7!1sOdRo4ypspitERKzEUguV_g!2m2!1d-26.18422324716495!2d28.00542925977857!3f178.8121529725028!4f1.3928814606305338!5f0.4000000000000002', '../images/f7760e45981bae5f3fccfc82343caba460af944f835d7.png', NULL, 'Y'),
(13, 'Kingsway Place Student Accomodation', '66 Kingsway Ave, Auckland Park, Johannesburg, 2092', 'APK', 4800, 'No', 'info@kingswayplace.co.za', 873579081, 'Kingsway Place offers premium student accommodation and is a student safe haven with a unique hospitality approach to service, for total peace of mind. Conveniently located to UJ, WITS, shops, and with cool student hangout spots right on the doorstep.\r\n\r\nGreat quality & fully furnished single rooms offer a private space for studying and recharging, comfortable communal areas offer a social space to share ideas and experiences with other students, laundry facilities, Wi-Fi, and direct access to the landlord ensure that you don’t stress about the necessities but rather focus on your studies.                         ', 'https://www.google.com/maps/embed?pb=!4v1620748783330!6m8!1m7!1s7GKrPFye23GBd86RJ7f-BQ!2m2!1d-26.18443913745277!2d28.00658323770915!3f343.43!4f0!5f0.7820865974627469', '../images/2c152b0ddc2a13951944803df759229c60afcea5a3235.jpg', NULL, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `Res_ID` int(11) DEFAULT NULL,
  `pictures` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`Res_ID`, `pictures`) VALUES
(2, '../images/6b3d011eecc4f20e873d4d53cfcc6ec360af7ce28f890.jpg,../images/ee309073c8d65426b817edd4e647fc6760af7cee51e6c.jpg,../images/837e0db153cde2836c100c765fa2690060af986399e50.jpg,../images/c37fce78845ff2bf8bd42a0cacaee53160afcbb4a620c.jpg'),
(1, '../images/920e79911de573a69c01ff22eb36e85760af7d216fe6c.jpg,../images/d42666a941789dad025150535b06cffa60af7d358935e.jpg,../images/007a80348d0476d3c2cb15d92981b82160af7d5905d6d.jpg,../images/df40cb7ea2b9e6f94ce89db5ec5044c760afcb62b1689.jpg'),
(3, '../images/4cb466a3081e002333734582132aebb960af7d8426bcf.jpg,../images/f966558a09f67dba4a5c72294ea8676a60af7d8abeea3.jpg,../images/dccf3b0b88f27fcf0701afc24c5cb9e060af984099089.jpg,../images/5789ec66cf60d46d700bcb6a6c50e07f60afcc8427faa.jpg'),
(4, '../images/87a26f1f8f723e6b509d32a5b5755c4f60af7e4616203.jpeg,../images/73b747d70745850b6dcc493dffacfe0960af7e5d40e58.jpg,../images/055a47dffcff9e5c58d84398469513d760af7e6531c72.jpeg,../images/98cf47f9e3ca7507c8b7d501234a4a7d60afccc1c7d8f.jpeg'),
(5, '../images/bf6650ceec175828f8380acda7bdf56060af7ed6d0f8a.jpg,../images/d13ad2717eac52ab2e23fa235d43c02d60af7edecfd17.jpg,../images/d61c590875179fbce7738db740afa3eb60af7ee5e8a7a.jpg,../images/ac0d29a433c94127b0f527011cf8c3bd60afccf54efb5.jpg'),
(6, '../images/3c9c8c785a5388221215624731f4e8e460af7f4655d6b.jpeg,../images/4cdeb6b976d6c62204edd4c97c4e9e1560af7f4e6170f.jpeg,../images/dcb5f33c10b0e4a79a05190331eafbe260af7f54923df.jpeg,../images/98c667f9e914e7784a4c2204b3e9595a60afcd3ee33cd.jpeg'),
(7, '../images/c8b360e327642a6339ff152c160dc8ad60af7f935f06e.jpg,../images/e1afbd3022e3a2f5ddce6e7f5ae7a6c260af7f9d28bbd.jpg,../images/86ee4ada306626f0f9646dad05184ca360af7fa8f3af9.jpg,../images/e16942a1f68c514e72ced2b1463a575a60afcdb462b22.jpg'),
(8, '../images/68191f73f3af728d616bd2f317f7d27d60af915c4daf2.jpg,../images/ac657eeb00f9ce317b7edece0de0936f60af916864d9b.jpg,../images/80b2fc6e2bb29d3c28cef6670a12732560af97ccc6fa5.png,../images/2edac7453a61addc0e2908fa8dec649560afcdd6a27a4.jpg'),
(9, '../images/2e8bc2a872f2d44251308d1d4c708ca860af91a68f97f.jpg,../images/5e2e7cfdb2535ee461bc373456f161d260af91b44d26a.jpg,../images/0056914fc1af01c8cef3f0f3e4ee324f60af91ca64a71.jpg,../images/b1d4a7ee9f939669fb191124d1c16d5060afcdff1d26a.jpg'),
(10, '../images/5bb221e85f250b6f4da4f5c9af85873560af91fabaec0.jpg,../images/792c0e769a7da1dea2a039b6600c718960af920391486.jpg,../images/eaf56ab989b38a4531475807cb48448860af9213b36be.jpg,../images/69a8f57ec5cfb9f00749e011c91d520360afce2558cff.jpg'),
(13, '../images/11a91dbe0ca3fccfb720f8ce8db3908660af92a022317.jpg,../images/39467a225b14fabfee603713cdce6a2f60af92b4dbd9b.jpg,../images/7db2a3f6e4c084f06487787ed6442b5f60afce9e99802.jpg,../images/e27198680425b825c0df54c34a995e6060afceb693e4d.jpg,../images/a6850bcca1368ef6555811eeee02d21260afcec1ca241.jpg'),
(12, '../images/0e50324a742659cf65e954163d6205c460af9456b4a65.png,../images/1b315ae4f6dd143c2a2c671f519889aa60af945e8d724.png,../images/e7f0caf93686de5fd6e58461c4c4a7f660af946c37d22.png,../images/a0f5d98d142c4c9124f7bcbe65f26d7060af956183c75.png'),
(11, '../images/09ea0c6584472ca93a031462ed76030960af9785df0fc.jpg,../images/019b2d0ccde11a9eb9d6eb2a43fb2d3b60af978c160a6.jpg,../images/161f53d6aa48a82d66028481b6deb2f560af97989c2a5.jpg,../images/9a351ed56adb57f13bab6c065ab0b3fd60afce60e9d40.jpg'),
(40, '../images/17e4d6b2fd130a9cfb2f2346d4f5ebdf60b2538744c3c.jpg,../images/b8445999467ff3e76b0db3d3bdd816cc60b2538fdc478.jpg,../images/292048b50633fbef96cab5bd4f2450cd60b2539ae9e3e.jpg');

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

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `res_id`, `rating`, `email`, `remark`, `date_time`) VALUES
(2, 1, '5', 'lebo@mail.com', 'I enjoyed my stay here.', '2021-05-29 12:26:31'),
(3, 1, '3', 'thabo@mail.com', 'The stay was fair but the staff was rude.', '2021-05-29 12:28:21'),
(4, 1, '3', 'suprise@mail.com', 'I met wonderful people here but the stay was ok.', '2021-05-29 12:29:39'),
(17, 2, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:15:12'),
(18, 3, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(19, 4, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(20, 5, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(21, 6, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(22, 7, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(23, 8, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(24, 9, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(25, 10, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(26, 11, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(27, 12, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(28, 13, '2', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:16:50'),
(29, 3, '1', 'malebo@gmail.com', 'I dindt like staying here', '2021-05-29 17:17:57'),
(30, 4, '1', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:17:57'),
(31, 5, '1', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:17:57'),
(32, 6, '1', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:17:57'),
(33, 7, '1', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:17:57'),
(34, 8, '1', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:17:57'),
(35, 9, '1', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:17:57'),
(36, 10, '1', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:17:57'),
(37, 11, '1', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:17:57'),
(38, 12, '1', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:17:57'),
(39, 13, '1', 'john@gmail.com', 'Very good resident to stay', '2021-05-29 17:17:57'),
(40, 3, '5', 'Khathu@gmail.com', 'I dindt like staying here', '2021-05-29 17:19:44'),
(41, 4, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:19:44'),
(42, 5, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:19:44'),
(43, 6, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:19:44'),
(44, 7, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:19:44'),
(45, 8, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:19:44'),
(46, 9, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:19:44'),
(47, 10, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:19:44'),
(48, 3, '5', 'Khathu@gmail.com', 'I dindt like staying here', '2021-05-29 17:20:44'),
(49, 4, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:20:44'),
(50, 5, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:20:44'),
(51, 6, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:20:44'),
(52, 7, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:20:44'),
(53, 8, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:20:44'),
(54, 9, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:20:44'),
(55, 10, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:20:44'),
(56, 11, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:20:44'),
(57, 12, '5', 'Khathu@gmail.com', 'Very good resident to stay', '2021-05-29 17:20:44'),
(58, 13, '5', 'Khathu@gmail.com', 'Great, great enviroment for studyin5', '2021-05-29 17:20:44'),
(59, 3, '3', 'Lethabo@gmail.com', 'I dindt like staying here', '2021-05-29 17:21:53'),
(60, 4, '3', 'Lethabo@gmail.com', 'Very good resident to stay', '2021-05-29 17:21:53'),
(61, 5, '3', 'Lethabo@gmail.com', 'Very good resident to stay', '2021-05-29 17:21:53'),
(62, 6, '3', 'Lethabo@gmail.com', 'Very good resident to stay', '2021-05-29 17:21:53'),
(63, 7, '3', 'Lethabo@gmail.com', 'Very good resident to stay', '2021-05-29 17:21:53'),
(64, 8, '3', 'Lethabo@gmail.com', 'Very good resident to stay', '2021-05-29 17:21:53'),
(65, 9, '3', 'Lethabo@gmail.com', 'Very good resident to stay', '2021-05-29 17:21:53'),
(66, 10, '3', 'Lethabo@gmail.com', 'Very good resident to stay', '2021-05-29 17:21:53'),
(67, 11, '3', 'Lethabo@gmail.com', 'Very good resident to stay', '2021-05-29 17:21:53'),
(68, 12, '3', 'Lethabo@gmail.com', 'Very good resident to stay', '2021-05-29 17:21:53'),
(69, 13, '3', 'Lethabo@gmail.com', 'Great, great enviroment for studyin5', '2021-05-29 17:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Res_ID` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `User_Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Res_ID`, `Email`, `User_Password`) VALUES
(13, 'myres@gmail.com', '123456'),
(44, 'ns.ngoveni079@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`Res_ID`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD KEY `ResID` (`Res_ID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `fk_to_resid` (`res_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Res_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation`
--
ALTER TABLE `accomodation`
  MODIFY `Res_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

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
