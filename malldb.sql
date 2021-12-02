-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 04:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `customer_id` int(11) NOT NULL,
  `Street_Address` varchar(255) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `country` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`customer_id`, `Street_Address`, `city`, `state`, `zipcode`, `country`) VALUES
(1000016, 'Blk 24 Lot 16,Kingstown 1 Subd.,Brg. 171', 'District 1, Caloocan City', '', 1400, 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body_filename` varchar(255) NOT NULL,
  `photo_filename` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `body_filename`, `photo_filename`) VALUES
(1000012, 'Shopping Can Relieve Stress', 'Shopping Can Relieve Stress.txt', 'Flagship_100_Blog_2880x1800_Apparel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `article_home`
--

CREATE TABLE `article_home` (
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `business_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'Logo_Place.png',
  `password` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`business_id`, `username`, `photo`, `password`, `category`, `business_name`, `business_description`) VALUES
(1000000, 'Admin', 'ABCMall.png', '1484ea79ca1be5eb9b411215d6460f82e6c6425e', 'ADMIN', 'ABC Mall (Admin)', 'ABC Mall Account Administrator'),
(1000001, 'ABCMall', 'ABCMall.png', '1484ea79ca1be5eb9b411215d6460f82e6c6425e', 'GENERAL', 'ABC Mall (Business)', 'ABC Mall Department Store'),
(1000002, 'LIZZYPIZZAABC', 'PizzaShop.jpg', '78ae932ec5653912b1a372b5e6267eb4eeefde56', 'RESTAURANT', 'Lizzys Pizza', 'A family-owned restaurant that serves freshly baked pizzas and pasta.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_description` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `duration_hours` int(2) NOT NULL,
  `duration_mins` int(2) NOT NULL,
  `file_picture` varchar(255) DEFAULT NULL,
  `file_trailer` varchar(255) DEFAULT NULL,
  `cinema_no` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`movie_id`, `movie_name`, `movie_description`, `start_time`, `duration_hours`, `duration_mins`, `file_picture`, `file_trailer`, `cinema_no`) VALUES
(1000002, 'Spiderman: No Way Home', 'Spider-Man: No Way Home is an upcoming American superhero film based on the Marvel Comics character Spider-Man co-produced by Columbia Pictures and Marvel Studios and distributed by Sony Pictures Releasing.', '19:20:00', 2, 30, 'Spider-Man_No_Way_Home_poster.jpg.webp', 'https://www.youtube.com/embed/JfVOs4VSpmA', 1),
(1000003, 'Ang Darling Kong Aswang', 'Ang Darling Kong Aswang, a movie where a man found out that his wife is an ASWANG', '10:18:00', 3, 30, 'Ang_Darling_Kong_Aswang_VideoCover.png', 'https://www.youtube.com/embed/bcTv6JsVDgo&t=2s', 5),
(1000004, 'Arcane', 'Arcane (titled onscreen as Arcane: League of Legends) is a 2021 adult animated streaming television series. It is set in the League of Legends universe. The series was announced at the League of Legends tenth anniversary celebration.', '19:20:00', 2, 10, 'MV5BYmU5OWM5ZTAtNjUzOC00NmUyLTgyOWMtMjlkNjdlMDAzMzU1XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg', 'https://www.youtube.com/embed/4Ps6nV4wiCE', 2),
(1000005, 'Enteng Kabisote 10 and The Abangers', 'Enteng Kabisote 10 and the Abangers is a 2016 Filipino superhero fantasy comedy film and the tenth film installment of the Filipino television sitcom Okay Ka, Fairy Ko!. The film was announced on August 2016 with Marlon N. Rivera and Tony Y. Reyes attache', '22:00:00', 1, 30, 'Enteng_Kabisote_10_and_the_Abangers_poster.jpg', 'https://www.youtube.com/embed/umJfswXN2xE&t=1s', 6);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `username` varchar(15) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `first_name`, `last_name`, `username`, `user_password`, `email`, `sex`, `date`) VALUES
(1000016, 'Vincent', 'Emerenciana', 'BossVincent', '1f34db57b40645978f7f6af1224fed9ec2b2163b', 'BossVincent@gmail.com', 'male', '2000-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `order_id` int(11) NOT NULL,
  `date_of_delivery` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_description`, `start_date`, `end_date`) VALUES
(1000001, '12:12 Twii Dei SALE', 'ABC Mall 3-Day Sale offers up to 80% discounts on selected products.', '2021-12-02', '2021-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_description` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product_id`, `business_id`, `item_name`, `item_description`, `category`, `price`, `stock`) VALUES
(1000023, 1000001, 'Magnolia Scented Candle', 'Scented candles which comes with different scents(Bamboo, Cherry, Honey)', 'ECOMMERCE', 350.5, 40);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `business_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_photos`
--

CREATE TABLE `product_photos` (
  `product_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_photos`
--

INSERT INTO `product_photos` (`product_id`, `filename`) VALUES
(1000023, '1500ml-Huge-Soy-Wax-Made-Luxury-Scented-Candles-with-Magnolia-Natural-Essential-Oils-in-Glass-Jar-Wood-Cover-for-Home-Fragrance.jpg'),
(1000023, 'Magnolia-Signature-Candle-Bundle.jpg'),
(1000023, 'magnolia_signature_candle_bundle_2048x.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD UNIQUE KEY `customer_id_2` (`customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `article_home`
--
ALTER TABLE `article_home`
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`business_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD KEY `delivery_ibfk_1` (`order_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `business_id` (`business_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `business_id` (`business_id`);

--
-- Indexes for table `product_photos`
--
ALTER TABLE `product_photos`
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000013;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000003;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000006;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000017;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000021;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000002;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000024;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`Customer_ID`);

--
-- Constraints for table `article_home`
--
ALTER TABLE `article_home`
  ADD CONSTRAINT `article_home_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`Customer_ID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`product_id`);

--
-- Constraints for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD CONSTRAINT `customer_orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`Customer_ID`);

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `customer_orders` (`order_id`);

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `business` (`business_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `customer_orders` (`order_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`business_id`) REFERENCES `business` (`business_id`);

--
-- Constraints for table `product_photos`
--
ALTER TABLE `product_photos`
  ADD CONSTRAINT `product_photos_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
