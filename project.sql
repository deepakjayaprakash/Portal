-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2015 at 08:26 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE IF NOT EXISTS `ngo` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  `technical` varchar(5) NOT NULL,
  `music` varchar(5) NOT NULL,
  `literature` varchar(5) NOT NULL,
  `art` varchar(5) NOT NULL,
  `sports` varchar(5) NOT NULL,
  `computer` varchar(5) NOT NULL,
  `oratory` varchar(5) NOT NULL,
  `period` varchar(5) NOT NULL,
  `choice` varchar(15) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `username`, `password`, `location`, `description`, `technical`, `music`, `literature`, `art`, `sports`, `computer`, `oratory`, `period`, `choice`, `contact`) VALUES
(3, 'Labor Net', 'net', 'Bangalore', 'LabourNet is a social enterprise driven by a professional team of experts interested in social work.', 'YES', 'NO', 'YES', 'YES', 'NO', 'YES', 'YES', 'an', '', '40909268'),
(4, 'Meta i tech', 'meta', 'Bangaluru', 'META-i Technologies Private Limited is an equal opportunity employer oriented to providing the right ambiance for the development and growth of its employees. It recruits volunteers best suited in its interests.', 'YES', 'YES', 'NO', 'YES', 'YES', 'NO', 'NO', 'mon1', '', '080905615'),
(5, 'BOSCO', 'bosco', 'Bangalore', 'Welcome to a world where every hand is precious. BOSCO is a Non Governmental Organisation working with the\r\n Young At Risk in the city of Bangalore since 1990. We focus on recruiting individuals interested to work with teaching orphanage students and helping out \r\nin old age homes.', 'NO', 'YES', 'YES', 'YES', 'NO', 'NO', 'YES', 'an', '', '080564589'),
(6, 'Akshaya Patra', 'patra', 'Rajajinagar, Banaglore', 'The Akshaya Patra Foundation commonly known as Akshaya Patra is a non-profit organisation in India that runs school lunch programme across India. The organisation was established in 2000. ', 'NO', 'NO', 'YES', 'YES', 'YES', 'NO', 'YES', 'mon1', '', '080956487'),
(7, 'Community Health Centre', 'com', 'Wilson Garden, Bangalore', 'The Community Health Centre (CHC), the third tier of the network of rural health care institutions,\r\n was required to act primarily as a referral centre. We need volunteers who have a little medical background.', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'YES', 'we', '', '7845080152'),
(8, 'Bhumi', 'bhumi', 'BTS Layout, Bangalore', 'Bhumi is one of India''s largest independent youth volunteer non-profit organisations. \r\nBhumi as a platform enables over 5,000 volunteers in more than 12 cities. We take up rallies, street plays to deliver social messages to\r\n the commoners.', 'NO', 'YES', 'YES', 'YES', 'NO', 'NO', 'YES', 'mon2', '', '010548653'),
(9, 'Smile Foundation', 'smile', 'Dickenson Rd, Bangalore', 'Smile Foundation is a non-profit organisation based in New Delhi, India. It was established in 2002 and has a presence in 25 states and six regional offices in the country. Our main aim is to provide education \r\nfor underprivileged children, girl child, and give support for poor children''s health.', 'NO', 'NO', 'NO', 'YES', 'NO', 'YES', 'YES', 'we', '', '080459565');

-- --------------------------------------------------------

--
-- Table structure for table `vol`
--

CREATE TABLE IF NOT EXISTS `vol` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  `technical` varchar(5) NOT NULL,
  `music` varchar(5) NOT NULL,
  `literature` varchar(5) NOT NULL,
  `art` varchar(5) NOT NULL,
  `sports` varchar(5) NOT NULL,
  `computer` varchar(5) NOT NULL,
  `oratory` varchar(5) NOT NULL,
  `period` varchar(5) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vol`
--

INSERT INTO `vol` (`id`, `username`, `password`, `location`, `description`, `technical`, `music`, `literature`, `art`, `sports`, `computer`, `oratory`, `period`, `contact`) VALUES
(2, 'Bineet Kumar', 'bineet', 'Patna', ' Interested in helping out others when they are in need. \r\nFriendly. Nice. Fun loving.\r\nI want to contribute to the society but in the field where my skills can be of use. ', 'YES', 'YES', 'NO', 'NO', 'NO', 'YES', 'NO', 'mon1', '8967452312'),
(3, 'Deepak Jayaprakash', '123', 'Bengaluru', 'always happy to involve myself in different activities provided it''s not boring. If my skills are recognized and made use properly then i m ready to render my work.', 'YES', 'NO', 'NO', 'NO', 'NO', 'YES', 'YES', 'we', '9535701911'),
(4, 'god', 'god', 'Heaven', 'The apha and The omega. \r\nYou want  me to contribute? Then it has to be divine NGO. By the way i am by default a social worker.', 'NO', 'YES', 'YES', 'YES', 'NO', 'NO', 'NO', 'an', 'yeah right'),
(5, 'Harshad Reddy', 'reddy', 'Bangaluru', 'Oh, yes I m interested in social work!!!!', 'NO', 'YES', 'NO', 'YES', 'YES', 'YES', 'YES', 'mon1', '9564846515'),
(6, 'Aman Mehta', 'aman', 'Bangalore', 'I am purely a technical guy.\r\n I am an expert in Android and UI Design.\r\n I am kinda genius with a computer.\r\n I will be pleased to involve myself in any kind of computer related issues.', 'YES', 'YES', 'NO', 'NO', 'YES', 'YES', 'NO', 'mon2', '321655498'),
(7, 'Swapnil Jain', 'jain', 'North India', 'I have great leadership skills. I take the initiative when others are just waiting. \r\nI am good in Web Development. \r\nI can create websites for organisations for free. ', 'YES', 'NO', 'YES', 'YES', 'NO', 'YES', 'NO', 'we', '1526485926'),
(8, 'Ayush Kumar', 'ayush', 'Patna', 'I am a competitive coder. I am also a music enthusiast. I love teaching. I used to teach my classmates when the \r\ninternals were near. so I am very helpful.  ', 'YES', 'YES', 'YES', 'YES', 'NO', 'NO', 'NO', 'mon2', '0315785608'),
(9, 'Robert Downey Jr.', 'rob', 'Bangalore', 'As you all know, I am Iron man. I am a social worker of course because .....\r\n.well because I am Iron Man.', 'YES', 'NO', 'NO', 'NO', 'NO', 'YES', 'NO', 'an', '2301006548'),
(12, 'Akshay P S', 'aps', 'Yeshwantpur, Bangalore', 'Always happy to volunteer and involve. I am a very active participant in all\r\ncollege activities. ', 'NO', 'NO', 'NO', 'NO', 'YES', 'YES', 'YES', 'mon1', '9088765434'),
(13, 'Proffessor', 'pro', 'Bangalore', 'This is just to check', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', 'NO', 'we', '45891256');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `vol`
--
ALTER TABLE `vol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
