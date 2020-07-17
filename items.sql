-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2020 at 06:45 PM
-- Server version: 8.0.20
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soen_287_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `cost` double NOT NULL,
  `quantity` int NOT NULL,
  `onsale` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category`, `image`, `cost`, `quantity`, `onsale`) VALUES
(1, 'green apples', 'apple, fruit, healthy', 'apple.jpg', 1.99, 20, 1),
(3, 'strawberry', 'strawberry, berry, fruit, healthy', 'strawberry.jpg', 4.99, 10, 1),
(4, 'carrots', 'carrots, vegetables, healthy, roots, orange', 'https://p0.pikrepo.com/preview/775/703/pile-of-carrots.jpg', 1.49, 30, 0),
(41, 'tomato', 'tomato, tomatoes, red, fruits, fruits & vegetables. fruit', 'tomato.jpg', 1.25, 50, 0),
(40, 'banana', 'banana, fruit, yellow, fruits, fruits & vegetables', 'banana.jpg', 0.99, 15, 0),
(39, 'mccain fries', 'frozen, mccain fries, mccain, frozen fries, fries, food', 'frozenfries.jpg', 3.99, 20, 1),
(38, 'mccLain pizza pocket', 'pizza pocket, mccLain pizza pocket, frozen, pizza, mccain', 'pizzapocket.jpg', 3.45, 20, 1),
(37, 'delisso pizza', 'delisso pizza, pizza, frozen, food, delisso', 'frozenpizza.jpg', 3.99, 20, 0),
(36, 'ben & jerry\'s cookie dough ice cream', 'ben & jerry\'s cookie dough ice cream , ben & jerry\'s, ben & jerrys, ice cream, icecream, frozen, sweet, snacks, cold, cookie dough', 'bjcookiedough.jpg', 3.25, 15, 0),
(35, 'ben & jerry\'s half baked ice cream ', 'ben & jerry\'s half baked ice cream , ben & jerry\'s, ben & jerrys, ice cream, icecream, frozen, sweet, snacks, cold, half baked', 'bjhalfbaked.jpg', 3.25, 15, 0),
(34, 'dove soap', 'soap, dove soap, dove, beauty products, shower, clean', 'dove.jpg', 2.99, 30, 0),
(33, 'elvive shampoo', 'elvive shampoo, shampoo, elvive, beauty products, shower', 'elvive.jpg', 5.5, 30, 1),
(32, 'head and shoulders shampoo', 'shampoo, head and shoulders shampoo, head and shoulders, beauty products, shower', 'headshoulder.png', 5.99, 30, 1),
(31, 'pom toast', 'pom toast, white, white toast, white bread, white pom toast, toast, wheat, bakery', 'whitetoast.jpg', 1.6, 30, 0),
(30, 'slice of life toast', 'multigrain toast, toast, multigrain, slice of life toast, bakery, grains, break', 'multigraintoast.jpg', 40, 2, 1),
(29, 'pom bagels', 'pom bagels, pom, bagels, bagel, bread, bakery, grains', 'bagels.jpg', 1.1, 40, 0),
(28, 'pita bread', 'white, pita, white pita bread, pita bread, bread, bakery, grains', 'pita.jpg', 1.5, 50, 0),
(27, 'tropicana orange juice', 'tropicana orange juice, orange, orange juice, juice, tropicana , beverages, beverage, drink, drinks', 'tropicana.jpg', 1.6, 30, 1),
(26, 'nestea', 'juice, nestea, ice tea , icetea, beverages, beverage, lemon, drink, drinks', 'nestea.jpg', 1.99, 30, 1),
(25, 'sprite', 'soda, sprite, acid, beverages, beverage, sweet, sodas, drink, drinks', 'sprite.jpg', 1.15, 35, 0),
(24, 'crush', 'soda, crush, acid, beverages, beverage, sweet, orange, sodas, drink, drinks', 'crush.jpg', 1.1, 25, 0),
(16, 'eggs', 'eggs, diary products, protein ', 'eggs.jpg', 4.99, 20, 1),
(17, 'kirkland organic eggs', 'kirkland organic eggs, egg, eggs, organic, healthy, protein, diary products', 'organiceggs.jpg', 5.99, 25, 1),
(18, 'evian water', 'evian water, water, healthy, beverages, evian', 'evian.jpg', 1.99, 30, 0),
(19, 'nestle purelife water', 'nestle purelife water, water, healthy, beverages, nestle', 'nestlewater.jpg', 1.05, 40, 0),
(20, 'naya water', 'naya water, water, healthy, beverages, naya', 'naya.jpg', 0.99, 50, 0),
(21, 'eska water', 'eska water, water, healthy, beverages, eska', 'eska.jpg', 1.99, 50, 1),
(22, 'pepsi', 'pepsi, beverages, soda, sodas, beverage, sweet, acid, drinks, drink', 'pepsi.jpg', 1.35, 30, 0),
(23, 'coca-cola', 'coca-cola, cocacola, cola, dirnks, drink, soda, acid, sweet, beverages, beverage', 'cocacola.jpg', 1.25, 40, 1),
(10, 'toblerone', 'chocolate, snacks, toblerone, sweet, switzerland', 'toblerone.jpg', 3.45, 20, 0),
(11, 'lindt', 'chocolate, snacks, lindt, switzerland, sweet', 'lindt.jpg', 2.99, 20, 0),
(12, 'smarties', 'smarties, snacks, chocolate, candy, sweet', 'smarties.png', 0.99, 30, 0),
(13, 'm&m', 'chocolate, candy, sweet, snacks, m&m', 'm&m.jpg', 0.99, 30, 0),
(14, 'quebon milk', 'milk, quebon milk, quebec milk, diary products, diary, white, calcium, quebon', 'milk.jpg', 3.99, 40, 0),
(15, 'beatrice milk', 'milk, diary products, white, beatrice milk, beatrice, calcium ', 'milk2.jpg', 2.99, 30, 1),
(9, 'mars', 'mars, chocolate, sweet, snacks', 'mars.jpg', 0.99, 30, 0),
(42, 'cucumber', 'cucumber, green , cucumbers, fruits & vegetables, fruit', 'cucumber.jpg', 1.25, 50, 0),
(43, 'raspberry', 'red, raspberry, raspberries, fruit, fruits, fruits & vegetables', 'raspberry.jpg', 3.99, 20, 1),
(44, 'blueberry', 'blueberry, blue, fruits, fruits & vegetables. fruit, blueberries', 'blueberry.jpg', 2.99, 20, 1),
(45, 'onion', 'onions, vegetable, vegetables , fruits & vegetables, onion', 'onion.jpg', 0.99, 20, 0),
(46, 'lettuce', 'lettuce, green, vegetable, vegetables, fruits & vegetables', 'lettuce.jpg', 0.99, 20, 1),
(2, 'popcorn', 'snacks', 'banana.jpg', 2.99, 20, 1),
(5, 'snickers', 'chocolate, snacks, sweet, snickers', 'snickers.jpg', 1.99, 20, 0),
(6, 'cheetos', 'chips, snacks, cheetos', 'cheetos.jpg', 2.99, 25, 0),
(7, 'lays salt and vinegar', 'chips, salt and vinegar, snacks, lays , salt and vinegar', 'chipss&v.jpg', 2.5, 25, 1),
(8, 'pringles', 'chips, snacks, pringles,', 'pringles.jpg', 1.99, 30, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
