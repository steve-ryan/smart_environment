-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 01:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_environment`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `phone_no`, `email`, `password`) VALUES
(1, 'musomba', '715210578', 'musombangumah@gmail', 'f284651f8574e27bf7d7af369c1c18f0');

-- --------------------------------------------------------

--
-- Table structure for table `seedlings`
--

CREATE TABLE `seedlings` (
  `seedling_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `path` varchar(80) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seedlings`
--

INSERT INTO `seedlings` (`seedling_id`, `category`, `s_name`, `price`, `path`, `description`) VALUES
(5, 'Medicinal', 'Aloe Vera', 50, 'http://www.pastepic.xyz/images/2019/07/18/Aloevera16cdfbe5a67f046b.jpg', 'Aloe Vera\r\nScientific name: Aloe vera\r\nFamily: Asphodelaceae\r\nKingdom: Plantae\r\nOrder: Asparagales\r\nRank: Species\r\nAloe Vera is a succulent plant species of the genus Aloe. An evergreen perennial, it originates from the Arabian Peninsula but grows wild in tropical climates around the world and is cultivated for agricultural and medicinal uses\r\nThere are over 400 species in the family Aloe, with Aloe Vera one of the most popular forms.\r\nAloe Vera has been used in traditional medicine for thousands of years, and studies have linked it to various health benefits as well. \r\n\r\nFor example, the plant is used to treat sunburns, fight dental plaque and lower blood sugar levels\r\n'),
(6, 'Exotic', 'CYPRESS ', 25, 'http://www.pastepic.xyz/images/2019/07/18/cypress-exotic36974c6fc5bbc472.jpg', '\r\nCypress is a common name for various coniferous trees or shrubs of northern temperate regions that belong to the family Cupressaceae\r\nIn classical antiquity, the cypress was a symbol of mourning and in the modern era it remains the principal cemetery tree in both the Muslim world and Europe. In the classical tradition, the cypress was associated with death and the underworld because it failed to regenerate when cut back too severely.\r\n\r\nThe two types of cypress trees found in the U.S. are bald cypress (Taxodium distichum) and pond cypress\r\nLeyland cypresses (x Cuprocyparis leylandii) need plenty of room to grow. These evergreen trees can reach 100 feet tall and 20 feet wide in their preferred growing conditions. Consequently, a specimen Leyland cypress should be planted at least 15 feet from neighboring trees, shrubs, walls or fences\r\n'),
(7, 'Fruit', 'AVOCADO', 50, 'http://www.pastepic.xyz/images/2019/07/18/ovacadoa066f7652ae6c2cb.jpg', 'AVOCADO\r\nThe avocado, a tree with probable origin in South Central Mexico, is classified as a member of the flowering plant family Lauraceae. The fruit of the plant, also called an avocado, is botanically a large berry containing a single large seed\r\nIf you grew your tree from an avocado pit, it won\'t bear fruit until it\'s at least 10 years old, and you may have to wait up to 15 years. On the other hand, if you planted a tree from a nursery or garden center, the tree should begin to produce a crop after three or four years\r\n\r\nWest Indian avocados grow best in warm climates, while Mexican avocados--native to the tropical highlands--are the most cold hardy and can survive temperatures down to 26 degrees Fahrenheit\r\n\r\nAvocado Tree Water Needs. Avocados, like other types of fruit bearing trees, need ample water to thrive and produce fruit. Mature avocado trees need approximately 40 to 50 inches of rain per year. Young trees need more frequent watering than mature trees to establish a strong root system\r\n'),
(8, 'Indiginous', 'CACTUS PLANT', 40, 'http://www.pastepic.xyz/images/2019/07/18/cactus8e0dfdf0be2f6e41.jpg', '\r\nCacti does not have any leaves. Cacti will grow arms, spines, and flowers. ... The major difference is cacti does not a woody stem like trees. So no, cacti is not a type of tree, but a new community of plants hailing from the New World\r\nUniqely adapted to their environment. Cacti are unusual and distinctive plants superbly adapted to the arid conditions in which they thrive. ... Cacti have developed spines which allow less water to evaporate through transpiration by shading the plant, and defend the cactus against water-seeking animals.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `seedlings`
--
ALTER TABLE `seedlings`
  ADD PRIMARY KEY (`seedling_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seedlings`
--
ALTER TABLE `seedlings`
  MODIFY `seedling_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
