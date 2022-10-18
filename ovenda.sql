-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2022 at 05:44 AM
-- Server version: 10.3.36-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omsao_ovenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartProducts`
--

CREATE TABLE `cartProducts` (
  `cartProductsId` varchar(55) NOT NULL,
  `cartId` varchar(55) NOT NULL,
  `productId` varchar(55) NOT NULL,
  `quantityAdded` varchar(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL,
  `dateCreated` date NOT NULL,
  `payStatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartProducts`
--

INSERT INTO `cartProducts` (`cartProductsId`, `cartId`, `productId`, `quantityAdded`, `productPrice`, `dateCreated`, `payStatus`) VALUES
('pc-63039a3641ebf', 'cart-488865', 'Prod-62fa38fcdece6', '1', '22,000', '2022-08-22', 0),
('pc-63039a3d3c189', 'cart-488865', 'Prod-62fa3a2a84951', '1', '2,523,000', '2022-08-22', 0),
('pc-63039c67a7f07', 'cart-278754', 'Prod-62fa3f384d559', '1', '2,200,000', '2022-08-22', 0),
('pc-6303a22165cc5', 'cart-228980', 'Prod-62fa3f384d559', '1', '2,200,000', '2022-08-22', 0),
('pc-633bdf599ec2c', 'cart-480688', 'Prod-62fa50e9d98bb', '1', '869,000', '2022-10-04', 0),
('pc-633be986f1ab4', 'cart-292591', 'Prod-62fa3a2a84951', '1', '2,523,000', '2022-10-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clientsFeedbacks`
--

CREATE TABLE `clientsFeedbacks` (
  `feedId` varchar(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dateCreated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsBlogs`
--

CREATE TABLE `newsBlogs` (
  `blogId` varchar(55) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `details` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `blogpic` varchar(255) DEFAULT NULL,
  `otherpic` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderPayments`
--

CREATE TABLE `orderPayments` (
  `paymentId` varchar(55) NOT NULL,
  `orderId` varchar(55) NOT NULL,
  `usrId` varchar(55) NOT NULL,
  `billId` varchar(55) NOT NULL,
  `paymentOption` varchar(255) NOT NULL,
  `totalAmount` varchar(255) NOT NULL,
  `paymentStatus` varchar(255) NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` varchar(55) NOT NULL,
  `brandId` varchar(55) NOT NULL,
  `subcategoryId` varchar(55) NOT NULL,
  `pName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `main_pic` varchar(255) NOT NULL,
  `hover_pic` varchar(255) NOT NULL,
  `topSales` tinyint(1) DEFAULT NULL,
  `newArrival` tinyint(1) DEFAULT NULL,
  `topRated` tinyint(1) DEFAULT NULL,
  `weekDeals` tinyint(1) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `brandId`, `subcategoryId`, `pName`, `price`, `description`, `availability`, `quantity`, `main_pic`, `hover_pic`, `topSales`, `newArrival`, `topRated`, `weekDeals`, `date_created`) VALUES
('Prod-62fa33f034c65', 'B-62f56b1bdc126', 'SC-62f3cb70cbe70', 'Silicone Baby Bibs', '5,000', '<div style=\"line-height: 18px;\"><div style=\"\"><div style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Rubik, sans-serif; font-size: 13px;\"><font face=\"MesloLGs NF, Menlo, Monaco, Courier New, monospace\" color=\"#104a5a\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s; font-size: 12px; white-space: pre;\"><span style=\"margin: 0px; padding: 0px; font-weight: bolder;\">Silicone Baby Bibs</span></span></font><font color=\"#424242\" style=\"margin: 0px; padding: 0px; font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, ab autem dolores odit</font></div><div style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Rubik, sans-serif; font-size: 13px;\"><font color=\"#424242\" style=\"margin: 0px; padding: 0px; font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre;\">veritatis vero </font><span style=\"color: rgb(66, 66, 66); font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre;\">commodi eaque perspiciatis nemo. Nesciunt totam repudiandae cumque alias, corrupti </span></div><div style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Rubik, sans-serif; font-size: 13px;\"><span style=\"color: rgb(66, 66, 66); font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre;\">voluptates rerum quia </span><span style=\"color: rgb(66, 66, 66); font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre;\">magni earum?</span></div><div style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-size: 12px; white-space: pre; font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace;\"><font color=\"#424242\" style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\"></font></div><div style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Rubik, sans-serif; font-size: 12px; white-space: pre;\"><div style=\"margin: 0px; padding: 0px;\"><font color=\"#424242\" face=\"Comic Sans MS\" style=\"margin: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, ab autem dolores odit veritatis vero </font><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s; color: rgb(66, 66, 66); font-family: &quot;Comic Sans MS&quot;;\">commodi eaque perspiciatis nemo. </span></div><div style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s; color: rgb(66, 66, 66); font-family: &quot;Comic Sans MS&quot;;\">Nesciunt totam repudiandae cumque alias, corrupti voluptates rerum quia </span><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s; color: rgb(66, 66, 66); font-family: &quot;Comic Sans MS&quot;;\">magni earum? </span></div><div style=\"margin: 0px; padding: 0px;\"><font color=\"#424242\" face=\"Comic Sans MS\" style=\"margin: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, ab autem dolores odit veritatis vero </font><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s; color: rgb(66, 66, 66); font-family: &quot;Comic Sans MS&quot;;\">commodi eaque perspiciatis nemo. </span></div><div style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s; color: rgb(66, 66, 66); font-family: &quot;Comic Sans MS&quot;;\">Nesciunt totam repudiandae cumque alias, corrupti voluptates rerum quia </span><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-out 0s; color: rgb(66, 66, 66); font-family: &quot;Comic Sans MS&quot;;\">magni earum?</span></div></div></div></div>', 1, '25 pcs', '1660564464.jpg', '1660564464.jpg', 1, 1, 0, 0, '2022-08-15'),
('Prod-62fa3524c9235', 'B-62f56b1bdc126', 'SC-62f3cbc01c681', 'Cute baby dress & pant', '18,000', '<p>Silicone Baby Bibs<br></p>', 1, '50pcs', '1660564773.jpg', '1660564773.jpg', 1, 1, 1, 0, '2022-08-15'),
('Prod-62fa35aa23029', 'B-62f56b1bdc126', 'SC-62f3cbc01c681', 'Baby Armless Dress', '18,000', '<div style=\"font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace; font-size: 12px; line-height: 18px; white-space: pre;\"><div style=\"\"><font color=\"#424242\" style=\"\"><b>Lorem ipsum dolor sit amet consectetur</b>, </font></div><div style=\"\"><font color=\"#424242\" style=\"\">adipisicing elit. Quo, aspernatur suscipit deserunt, </font></div><div style=\"\"><font color=\"#424242\">eos doloremque sequi minima repellat ipsa ea cumque, non </font></div><div style=\"\"><font color=\"#424242\" style=\"\">architecto aliquam amet quidem necessitatibus qui deleniti perspiciatis dicta!</font></div></div>', 1, '50pcs', '1660564906.jpg', '1660564906.jpg', 1, 1, 1, 1, '2022-08-15'),
('Prod-62fa38fcdece6', 'B-62f56b1bdc126', 'SC-62f3cbc01c681', 'Baby Jumpsuit', '22,000', '<div style=\"line-height: 18px;\"><font face=\"MesloLGs NF, Menlo, Monaco, Courier New, monospace\" color=\"#4a7b8c\"><span style=\"font-size: 12px; white-space: pre;\"><b>Baby Jumpsuit</b></span></font></div><div style=\"line-height: 18px;\"><font color=\"#104a5a\" face=\"MesloLGs NF, Menlo, Monaco, Courier New, monospace\"><span style=\"font-size: 12px; white-space: pre;\"><br></span></font><font color=\"#104a5a\" style=\"font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum consequuntur facere ipsa veritatis aliquid </font></div><div style=\"font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace; font-size: 12px; line-height: 18px; white-space: pre;\"><font color=\"#104a5a\">laboren enim, eius quae cupiditate delectus nisi atque corporis ad expedita officiis. Temporibus quasi sunt </font></div><div style=\"font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace; font-size: 12px; line-height: 18px; white-space: pre;\"><font color=\"#104a5a\">commodi!</font></div><div style=\"font-family: &quot;MesloLGs NF&quot;, Menlo, Monaco, &quot;Courier New&quot;, monospace; font-size: 12px; line-height: 18px; white-space: pre;\"><font color=\"#104a5a\"><br></font></div><div style=\"font-size: 12px; line-height: 18px; white-space: pre;\"><div style=\"line-height: 18px;\"><font color=\"#104a5a\" style=\"\" face=\"Comic Sans MS\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum consequuntur facere ipsa veritatis aliquid </font><span style=\"color: rgb(16, 74, 90); font-family: &quot;Comic Sans MS&quot;;\">laboren enim, eius quae cupiditate </span></div><div style=\"line-height: 18px;\"><span style=\"color: rgb(16, 74, 90); font-family: &quot;Comic Sans MS&quot;;\">delectus nisi atque corporis ad expedita officiis. Temporibus quasi sunt </span><span style=\"color: rgb(16, 74, 90); font-family: &quot;Comic Sans MS&quot;;\">commodi! </span><span style=\"color: rgb(16, 74, 90); font-family: &quot;Comic Sans MS&quot;;\">delectus nisi atque corporis ad expedita officiis. Temporibus</span></div><div style=\"line-height: 18px;\"><span style=\"color: rgb(16, 74, 90); font-family: &quot;Comic Sans MS&quot;;\"> quasi sunt </span><span style=\"color: rgb(16, 74, 90); font-family: &quot;Comic Sans MS&quot;;\">commodi!</span></div></div>', 1, '25 pcs', '1660565757.jpg', '1660565757.jpg', 1, 1, 0, 0, '2022-08-15'),
('Prod-62fa3a2a84951', 'B-62f3dceceb2d8', 'SC-62f3a9c12b4d6', 'JBL Boombox 2', '2,523,000', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: Poppins, Tahoma, Geneva, sans-serif;\"><font color=\"#4a7b8c\"><span style=\"font-weight: 700;\">JBL Boombox 2 is IPX7 waterproof and portable</span>, </font><font color=\"#424242\">this powerful speaker pumps out a massive sound all day and all night. Plus, you can connect other JBL PartyBoost-compatible speakers to turn the party up. JBL Boombox 2 keeps your friends dancing and its built-in power bank keeps your devices charged.</font></p><ul style=\"margin: 16px 0px; padding: 0px 0px 0px 25px; font-family: Poppins, Tahoma, Geneva, sans-serif;\"><li style=\"\"><font color=\"#424242\">Maximum music playing time (hrs) 24</font></li><li style=\"\"><font color=\"#424242\">Output power (W)2 x 40 W RMS-woofer + 2 x 40 W RMS-tweeter</font></li><li style=\"\"><font color=\"#424242\">Waterproof IPX7</font></li></ul>', 1, '5pcs', '1660566059.jpg', '1660566059.jpg', 1, 1, 1, 1, '2022-08-15'),
('Prod-62fa3b36338a6', 'B-62fa1f9e7af93', 'SC-62fa24796ec8d', 'Hisense | 295 | Double Door', '3,780,000', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; font-family: Lato, Arial, Helvetica, sans-serif; color: rgb(85, 85, 85);\">ADH BCD-558 Liters Side by Side Refrigerator With A Water Dispenser – Silver</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; font-family: Lato, Arial, Helvetica, sans-serif; color: rgb(85, 85, 85);\"><span style=\"box-sizing: inherit; font-weight: 600;\">ADH 558L Side By Side Fridge Freezer with water dispenser – Stainless Steel</span></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; font-family: Lato, Arial, Helvetica, sans-serif; color: rgb(85, 85, 85);\">The ADH 558 litre American style fridge freezer has 5 safety glass shelves and a salad crisper drawer for keeping your favourite foods fresh for longer. Complete with 5+5 door storage balconies, you can store all those jars, packets and bottles with ease.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; font-family: Lato, Arial, Helvetica, sans-serif; color: rgb(85, 85, 85);\">With 5 freezer drawers and a fast freeze function, the ADH 558L is perfect for large families and can easily hold your entire weekly shop. It also provides the ideal conditions for freezing down fresh and pre-frozen foods..</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; font-family: Lato, Arial, Helvetica, sans-serif; color: rgb(85, 85, 85);\">This model is also frost free with an automatic defrost system meaning you never have to manually defrost your freezer again. Simple and easy to use, additional features include: a water dispenser, perfect for a cold glass of water at any time of the day, a metal back and a LED interior light.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; font-family: Lato, Arial, Helvetica, sans-serif; color: rgb(85, 85, 85);\">Add this fridge freezer in a shining silver finish off to your kitchen and give it that modern look.</p>', 1, '10 items', '1660566326.jpg', '1660566326.jpg', 1, 1, 1, 1, '2022-08-15'),
('Prod-62fa3f384d559', 'B-62f3dee9e4202', 'SC-62f3a9c12b4d6', 'AirPods Max', '2,200,000', '<p><span style=\"font-family: Poppins, Tahoma, Geneva, sans-serif;\"><b style=\"\"><font color=\"#295218\">Air Pods Max</font><font color=\"#6e6e6e\">&nbsp;</font></b></span><span style=\"color: rgb(110, 110, 110); font-family: Poppins, Tahoma, Geneva, sans-serif;\">combines high-fidelity audio with industry-leading Active Noise Cancellation</span><span style=\"color: rgb(110, 110, 110); font-family: Poppins, Tahoma, Geneva, sans-serif;\">&nbsp;to deliver an unparalleled listening experience. Each part of their custom-built driver works to produce sound with ultra-low distortion across the audible range.</span><br></p>', 1, '15pcs', '1660567352.jpg', '1660567352.jpg', 1, 1, 0, 1, '2022-08-15'),
('Prod-62fa4a197e905', 'B-62f3dceceb2d8', 'SC-62f3a9c12b4d6', 'JBL Reflect Mini NC', '750,000 ', '<p><span style=\"font-family: Poppins, Tahoma, Geneva, sans-serif;\">Whether you’re into yoga or running, <b style=\"\">JBL Reflect Mini NC</b> true wireless sport earbuds are the perfect accessory for your leisure lifestyle. Active Noise Cancelling lets you focus on your fitness goal with zero distractions, while Smart Ambient technology keeps you aware of your surroundings or lets you chat with a friend.</span><br></p>', 1, '50pcs', '1660570138.jpg', '1660570138.jpg', 0, 1, 0, 0, '2022-08-15'),
('Prod-62fa50e9d98bb', 'B-62f3dceceb2d8', 'SC-62f3a9c12b4d6', 'JBL Reflect Flow Pro', '869,000', '<h5><h6><ul><li style=\"margin: 0px; padding: 8px 0px; list-style: none; border: none; outline: none;\"><b>Active Noise Cancelling with Smart Ambient allows you to safely run on the street or catch up with friends</b></li><li style=\"margin: 0px; padding: 8px 0px; list-style: none; border: none; outline: none;\"><b><br></b>Water and sweat-proof rating of IP68, no need to worry while working out or if you get caught in the rain</li></ul></h6></h5><ul><li style=\"margin: 0px; padding: 8px 0px; list-style: none; border: none; outline: none;\">JBL Signature Sound with 6.8mm drivers and Multi AI Built-In (Both Google and Alexa capable)</li><li style=\"margin: 0px; padding: 8px 0px; list-style: none; border: none; outline: none;\">6 mics provide perfect calls and zero noise, hear and be heard on a windy day or in a large crowd</li><li style=\"margin: 0px; padding: 8px 0px; list-style: none; border: none; outline: none;\">Up to 30 hours of playtime with carrying case and Qi-wireless charging capable</li></ul>', 1, '5pcs', '1660571882.jpg', '1660571882.jpg', 1, 1, 1, 1, '2022-08-15'),
('Prod-62fa571432fb4', 'B-62fa1f9e7af93', 'SC-62fa24796ec8d', 'American fridge freezer', '3,780,000', '<ul itemprop=\"description\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; border: none; outline: none; color: rgb(21, 21, 21); font-family: &quot;Open Sans&quot;, sans-serif;\"><li style=\"margin: 0px; padding: 8px 0px; list-style: none; border: none; outline: none;\">635-litre capacity holds 33 bags of food shopping â€“ perfect for storing all your favourite groceries<br></li><li style=\"margin: 0px; padding: 8px 0px; list-style: none; border: none; outline: none;\">E energy rating means its not as efficient as some newer models, but itll still be kind to the environment</li><li style=\"margin: 0px; padding: 8px 0px; list-style: none; border: none; outline: none;\">Frost-free tech circulates cool air inside to stop ice building up, meaning youll never have to manually defrost again</li><li style=\"margin: 0px; padding: 8px 0px; list-style: none; border: none; outline: none;\">The salad crisper drawer makes it easy to keep all your fruits and vegetables organised and in good condition</li></ul>', 1, '5pcs', '1660573460.jpg', '1660573460.jpg', 0, 1, 0, 0, '2022-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `productBrand`
--

CREATE TABLE `productBrand` (
  `brandId` varchar(55) NOT NULL,
  `brandName` varchar(255) DEFAULT NULL,
  `brandPic` varchar(255) DEFAULT NULL,
  `date_created` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productBrand`
--

INSERT INTO `productBrand` (`brandId`, `brandName`, `brandPic`, `date_created`) VALUES
('B-62f10ba38f283', 'CAT', '1659964324.jpeg', '2022-08-08 16:12:03'),
('B-62f3dc1f41bd1', 'Gucci', '1660148767.png', '2022-08-10 19:26:07'),
('B-62f3dc6a66802', 'varsace', '1660148842.png', '2022-08-10 19:27:22'),
('B-62f3dc939399a', 'LG', '1660148884.png', '2022-08-10 19:28:03'),
('B-62f3dccab7478', 'phillips ', '1660148939.jpeg', '2022-08-10 19:28:58'),
('B-62f3dceceb2d8', 'JBL', '1660148973.png', '2022-08-10 19:29:32'),
('B-62f3dd3448e2f', 'Beats by dre', '1660149044.jpeg', '2022-08-10 19:30:44'),
('B-62f3dee9e4202', 'Apple', '1660149482.jpeg', '2022-08-10 19:38:01'),
('B-62f56b1bdc126', 'Other', '1660250908.jpg', '2022-08-11 23:48:27'),
('B-62fa1f9e7af93', 'Hisense', '1660559263.png', '2022-08-15 13:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `productCategory`
--

CREATE TABLE `productCategory` (
  `categoryId` varchar(55) NOT NULL,
  `mcId` varchar(55) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `date_created` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productCategory`
--

INSERT INTO `productCategory` (`categoryId`, `mcId`, `categoryName`, `date_created`) VALUES
('C-62f0da830f4e9', 'M-62f0d3a00784f', 'Agricultural Machinery & Equipment', '2022-08-08 12:42:27'),
('C-62f39cc596408', 'M-62f39a617b0c4', 'Chargers, Batteries & Power Supplies', '2022-08-10 14:55:49'),
('C-62f39d396ef51', 'M-62f39a617b0c4', 'Camera, Photo & Accessories', '2022-08-10 14:57:45'),
('C-62f3a6f173505', 'M-62f39a617b0c4', 'Commonly Used Accessories & Parts', '2022-08-10 15:39:13'),
('C-62f3a756cbfb9', 'M-62f39a617b0c4', 'Computer Hardware & Software', '2022-08-10 15:40:54'),
('C-62f3a7c95f16a', 'M-62f39a617b0c4', 'Earphone & Headphone & Accessories', '2022-08-10 15:42:49'),
('C-62f3a81d09d30', 'M-62f39a617b0c4', 'Electronic Publications', '2022-08-10 15:44:13'),
('C-62f3c1860f5f5', 'M-62f0d3a00784f', 'Apparel & Textile Machinery', '2022-08-10 17:32:38'),
('C-62f3c1cf73169', 'M-62f0d3a00784f', 'Building Material Machinery', '2022-08-10 17:33:51'),
('C-62f3c22e0bda2', 'M-62f0d3a00784f', 'Cleaning Equipment', '2022-08-10 17:35:26'),
('C-62f3c23aa9ec8', 'M-62f0d3a00784f', 'Chemical & Pharmaceutical Machinery', '2022-08-10 17:35:38'),
('C-62f3c24aa775c', 'M-62f0d3a00784f', 'Electrical Equipment Manufacturing Machinery', '2022-08-10 17:35:54'),
('C-62f3ca9e29888', 'M-62f3a5a452a5d', 'Baby Clothing', '2022-08-10 18:11:26'),
('C-62f3caad25ae2', 'M-62f3a5a452a5d', 'Ethnic Clothing', '2022-08-10 18:11:41'),
('C-62f3cae6d6b88', 'M-62f3a5a452a5d', 'Novelty & Special Use', '2022-08-10 18:12:38'),
('C-62fa23ac7d724', 'M-62fa211032741', 'Refrigerators & Freezers', '2022-08-15 13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `productImages`
--

CREATE TABLE `productImages` (
  `pImagesId` int(11) NOT NULL,
  `productId` varchar(55) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `date_created` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productImages`
--

INSERT INTO `productImages` (`pImagesId`, `productId`, `file_name`, `date_created`, `status`) VALUES
(48, 'Prod-62fa33f034c65', 'H3cc0689f4b974258a12d31d43510571bS.jpg', '2022-08-15 14:54:24', 1),
(50, 'Prod-62fa33f034c65', 'H76c0e84c6556473da944ca6e6f232cbfd.jpg', '2022-08-15 14:54:24', 1),
(51, 'Prod-62fa33f034c65', 'Hd58d545ee104463db2b071c3a19fc2fbL.jpg', '2022-08-15 14:54:24', 1),
(52, 'Prod-62fa33f034c65', 'Hdefc5d27b4194e9892c0c0c44eae7ddc8.jpg', '2022-08-15 14:54:24', 1),
(53, 'Prod-62fa3524c9235', 'H42d1277983754a53a2a3cfe15a80a500q.jpg', '2022-08-15 14:59:32', 1),
(54, 'Prod-62fa3524c9235', 'H56b23c32bd4a4815b3e2dc6cbc9fba24j.jpg', '2022-08-15 14:59:32', 1),
(55, 'Prod-62fa3524c9235', 'H87800fa610dc4843820bccab823259eeb.jpg_720x720q50.jpg', '2022-08-15 14:59:32', 1),
(56, 'Prod-62fa3524c9235', 'Hd4ed746a78134778a4b16dc67c0c3ad9b.jpg', '2022-08-15 14:59:32', 1),
(57, 'Prod-62fa35aa23029', 'H9c7fd4c6ba5b4ba782ce8fbf5dc76a86c.jpg', '2022-08-15 15:01:46', 1),
(58, 'Prod-62fa35aa23029', 'H688e55ca3927401486082ad8202c23ec5.jpg', '2022-08-15 15:01:46', 1),
(59, 'Prod-62fa35aa23029', 'Hb6ab36dbc7c845edb37d960305aca53e9.jpg', '2022-08-15 15:01:46', 1),
(60, 'Prod-62fa35aa23029', 'He9c9c442dfbf4e46a35b51e7b7b45dc2o.jpg', '2022-08-15 15:01:46', 1),
(61, 'Prod-62fa38fcdece6', 'H2a8a90d9e27847f1a136773cfcbcc20dP.jpg', '2022-08-15 15:15:56', 1),
(62, 'Prod-62fa38fcdece6', 'H443df68bcbee40268d98ebed777a26a94.jpg', '2022-08-15 15:15:56', 1),
(63, 'Prod-62fa38fcdece6', 'Hebeb2c1c7b894217aca6ba91e19f130cI.jpg', '2022-08-15 15:15:56', 1),
(64, 'Prod-62fa38fcdece6', 'Hebeb2c1c7b894217aca6ba91e19f130cI.jpg_720x720q50.jpg', '2022-08-15 15:15:56', 1),
(65, 'Prod-62fa3a2a84951', 'jbl1.jpg', '2022-08-15 15:20:58', 1),
(66, 'Prod-62fa3a2a84951', 'jbl3.jpg', '2022-08-15 15:20:58', 1),
(67, 'Prod-62fa3a2a84951', 'jbl4.jpg', '2022-08-15 15:20:58', 1),
(68, 'Prod-62fa3a2a84951', 'jbl5.jpg', '2022-08-15 15:20:58', 1),
(69, 'Prod-62fa3b36338a6', 'f1.jpg', '2022-08-15 15:25:26', 1),
(70, 'Prod-62fa3b36338a6', 'f2.jpg', '2022-08-15 15:25:26', 1),
(71, 'Prod-62fa3b36338a6', 'f3.jpg', '2022-08-15 15:25:26', 1),
(72, 'Prod-62fa3b36338a6', 'f4.jpg', '2022-08-15 15:25:26', 1),
(73, 'Prod-62fa3f384d559', 'max2.jpg', '2022-08-15 15:42:32', 1),
(74, 'Prod-62fa3f384d559', 'max3.jpg', '2022-08-15 15:42:32', 1),
(75, 'Prod-62fa3f384d559', 'max4.jpg', '2022-08-15 15:42:32', 1),
(76, 'Prod-62fa3f384d559', 'max5.jpg', '2022-08-15 15:42:32', 1),
(77, 'Prod-62fa4a197e905', 'airbud1.jpg', '2022-08-15 16:28:57', 1),
(78, 'Prod-62fa4a197e905', 'airbud4.jpg', '2022-08-15 16:28:57', 1),
(79, 'Prod-62fa4a197e905', 'airbud5.jpg', '2022-08-15 16:28:57', 1),
(80, 'Prod-62fa4a197e905', 'airbud12jpg.jpg', '2022-08-15 16:28:57', 1),
(81, 'Prod-62fa50e9d98bb', 'j1.jpg', '2022-08-15 16:58:01', 1),
(82, 'Prod-62fa50e9d98bb', 'j2.jpg', '2022-08-15 16:58:01', 1),
(83, 'Prod-62fa50e9d98bb', 'j3.jpg', '2022-08-15 16:58:01', 1),
(84, 'Prod-62fa50e9d98bb', 'j4.jpg', '2022-08-15 16:58:01', 1),
(85, 'Prod-62fa571432fb4', 'fridge3.jpg', '2022-08-15 17:24:20', 1),
(86, 'Prod-62fa571432fb4', 'fridge4.jpg', '2022-08-15 17:24:20', 1),
(87, 'Prod-62fa571432fb4', 'fridge5.jpg', '2022-08-15 17:24:20', 1),
(88, 'Prod-62fa571432fb4', 'fridge6.jpg', '2022-08-15 17:24:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productMainCategory`
--

CREATE TABLE `productMainCategory` (
  `mcId` varchar(55) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_created` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productMainCategory`
--

INSERT INTO `productMainCategory` (`mcId`, `name`, `date_created`) VALUES
('M-62f0d3a00784f', 'Machinery', '2022-08-08 12:13:04'),
('M-62f39a617b0c4', 'Consumer Electronics', '2022-08-10 14:45:37'),
('M-62f3a5a452a5d', 'Apparel', '2022-08-10 15:33:40'),
('M-62f3a5c0370e8', 'Vehicle Parts Accessories', '2022-08-10 15:34:08'),
('M-62f3a5e93bd32', 'Sports & Entertainment', '2022-08-10 15:34:49'),
('M-62f3a609aaf22', 'Home & Garden', '2022-08-10 15:35:21'),
('M-62f3a622b9c90', 'Beauty & Personal Care', '2022-08-10 15:35:46'),
('M-62fa211032741', ' Home Appliances', '2022-08-15 13:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `productSubcategory`
--

CREATE TABLE `productSubcategory` (
  `subcategoryId` varchar(55) NOT NULL,
  `categoryId` varchar(55) NOT NULL,
  `subName` varchar(255) DEFAULT NULL,
  `subPic` varchar(255) DEFAULT NULL,
  `date_created` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productSubcategory`
--

INSERT INTO `productSubcategory` (`subcategoryId`, `categoryId`, `subName`, `subPic`, `date_created`) VALUES
('C-62f0decd1a3c1', 'C-62f0da830f4e9', 'Agricultural Sprayers', '1659952845.jpeg', '2022-08-08 13:00:45'),
('SC-62f3a9988b0c5', 'C-62f3a7c95f16a', 'Gaming Earphones & Headsets', '1660135833.jpeg', '2022-08-10 15:50:32'),
('SC-62f3a9c12b4d6', 'C-62f3a7c95f16a', 'Earphones and Headphones', '1660135873.jpeg', '2022-08-10 15:51:13'),
('SC-62f3aa2b254bc', 'C-62f3a7c95f16a', 'Earphone Accessories', '1660135979.png', '2022-08-10 15:52:59'),
('SC-62f3cb70cbe70', 'C-62f3ca9e29888', 'Baby Bibs', '1660144497.jpeg', '2022-08-10 18:14:56'),
('SC-62f3cbc01c681', 'C-62f3ca9e29888', 'Baby Clothing Sets', '1660144576.jpeg', '2022-08-10 18:16:16'),
('SC-62f3cc2628b70', 'C-62f3ca9e29888', 'Baby Dresses', '1660144678.jpeg', '2022-08-10 18:17:58'),
('SC-62fa24796ec8d', 'C-62fa23ac7d724', 'Refrigerators', '1660560505.jpeg', '2022-08-15 13:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `productVariants`
--

CREATE TABLE `productVariants` (
  `variantsId` varchar(55) NOT NULL,
  `productId` varchar(55) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `date_created` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userBillingAddress`
--

CREATE TABLE `userBillingAddress` (
  `billId` varchar(55) NOT NULL,
  `usrId` varchar(55) NOT NULL,
  `location` varchar(255) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `district` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `deliveryPreference` varchar(255) NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userBillingAddress`
--

INSERT INTO `userBillingAddress` (`billId`, `usrId`, `location`, `street`, `district`, `phone`, `deliveryPreference`, `dateCreated`) VALUES
('Ad-149241', 'usr-493819', '914 MAIN STREET', '', 'Kampala', '8573439871', 'Delivery', '2022-08-22'),
('Ad-167685', 'usr-393928', 'Kiwatule', 'Oryx Kira Road', 'Kampala', '+256770700426', 'Delivery', '2022-08-22'),
('Ad-63704', 'usr-107463', 'maganjo', '', 'Kampala', '0704109875', 'Delivery', '2022-08-22'),
('Ad-7804', 'usr-166063', 'maganjo', '', 'Kampala', '783322026', 'Delivery', '2022-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `userCart`
--

CREATE TABLE `userCart` (
  `cartId` varchar(55) NOT NULL,
  `usrId` varchar(55) NOT NULL,
  `dateCreated` date NOT NULL,
  `totalCartAmount` varchar(255) NOT NULL DEFAULT '0',
  `payStatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userCart`
--

INSERT INTO `userCart` (`cartId`, `usrId`, `dateCreated`, `totalCartAmount`, `payStatus`) VALUES
('cart-228980', 'usr-493819', '2022-08-22', '2205000', 0),
('cart-278754', 'usr-107463', '2022-08-22', '2205000', 0),
('cart-292591', 'usr-216391', '2022-10-04', '0', 0),
('cart-480688', 'usr-166063', '2022-10-04', '874000', 0),
('cart-488865', 'usr-393928', '2022-08-22', '2550000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userLogin`
--

CREATE TABLE `userLogin` (
  `usrId` varchar(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `accStatus` tinyint(1) NOT NULL DEFAULT 1,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userLogin`
--

INSERT INTO `userLogin` (`usrId`, `username`, `email`, `password`, `accStatus`, `dateCreated`) VALUES
('usr-107463', 'kkijo', 'molutos@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2022-08-22'),
('usr-166063', 'pxlotus', 'ignatiusb@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-04'),
('usr-216391', 'muna', 'harisbenzz@yahoo.com', '52072ba2654f8f4502dd339f382798f5', 1, '2022-10-04'),
('usr-393928', 'Nathan Jays', 'samclerkson@gmail.com', '0658df5d7b6af3aaace791f391943698', 1, '2022-08-22'),
('usr-493819', 'CBNICK', 'bnicholascharles@yahoo.com', '98462f23bada4f2c2c57b86f5f454cdd', 1, '2022-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `userMobileMoneyDetails`
--

CREATE TABLE `userMobileMoneyDetails` (
  `id` varchar(55) NOT NULL,
  `usrId` varchar(55) NOT NULL,
  `serviceProvider` varchar(25) NOT NULL,
  `registeredName` varchar(255) NOT NULL,
  `mobileMoneyContact` varchar(255) NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userOrder`
--

CREATE TABLE `userOrder` (
  `orderId` varchar(55) NOT NULL,
  `orderRef` varchar(255) NOT NULL,
  `cartId` varchar(55) NOT NULL,
  `usrId` varchar(55) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `orderProgress` varchar(255) NOT NULL,
  `dateCreated` date NOT NULL,
  `paymentOption` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userOrder`
--

INSERT INTO `userOrder` (`orderId`, `orderRef`, `cartId`, `usrId`, `total`, `status`, `orderProgress`, `dateCreated`, `paymentOption`) VALUES
('Ord_10551', 'ref-106171', 'cart-480688', 'usr-166063', '874000', 0, 'Pending', '2022-10-04', ''),
('Ord_365834', 'ref-418744', 'cart-488865', 'usr-393928', '2550000', 0, 'Pending', '2022-08-22', 'Mobile Money'),
('Ord_385823', 'ref-224813', 'cart-278754', 'usr-107463', '2205000', 0, 'Pending', '2022-08-22', 'Mobile Money'),
('Ord_483086', 'ref-172268', 'cart-228980', 'usr-493819', '2205000', 0, 'Pending', '2022-08-22', 'Visa Card');

-- --------------------------------------------------------

--
-- Table structure for table `userProfile`
--

CREATE TABLE `userProfile` (
  `usrProId` varchar(55) NOT NULL,
  `usrId` varchar(55) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `dateCreated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userProfile`
--

INSERT INTO `userProfile` (`usrProId`, `usrId`, `name`, `age`, `email`, `phone`, `address`, `photo`, `dateCreated`) VALUES
('pf-101873', 'usr-166063', 'pxlotus', NULL, 'ignatiusb@gmail.com', '783322026', 'maganjo', '1664868167.', '2022-10-04'),
('pf-20364', 'usr-216391', 'muna', NULL, 'harisbenzz@yahoo.com', '0753975848', 'KISOBOKA HOUSE', '1664870783.', '2022-10-04'),
('pf-341256', 'usr-493819', 'CBNICK', NULL, 'bnicholascharles@yahoo.com', '8573439871', '914 MAIN STREET', '1661182484.', '2022-08-22'),
('pf-35944', 'usr-393928', 'Nathan Jays', NULL, 'samclerkson@gmail.com', '+256770700426', 'Kiwatule', '1661180463.', '2022-08-22'),
('pf-404405', 'usr-107463', 'kkijo', NULL, 'molutos@gmail.com', '0704109875', 'maganjo', '1661180961.', '2022-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `usrAdmin`
--

CREATE TABLE `usrAdmin` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usrAdmin`
--

INSERT INTO `usrAdmin` (`Id`, `username`, `password`) VALUES
(1, 'Admin', 'Jays');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartProducts`
--
ALTER TABLE `cartProducts`
  ADD PRIMARY KEY (`cartProductsId`),
  ADD KEY `cartId` (`cartId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `orderPayments`
--
ALTER TABLE `orderPayments`
  ADD PRIMARY KEY (`paymentId`),
  ADD KEY `orderId` (`orderId`),
  ADD KEY `usrId` (`usrId`),
  ADD KEY `billId` (`billId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `subcategoryId` (`subcategoryId`),
  ADD KEY `brandId` (`brandId`);

--
-- Indexes for table `productBrand`
--
ALTER TABLE `productBrand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `productCategory`
--
ALTER TABLE `productCategory`
  ADD PRIMARY KEY (`categoryId`),
  ADD KEY `mcId` (`mcId`);

--
-- Indexes for table `productImages`
--
ALTER TABLE `productImages`
  ADD PRIMARY KEY (`pImagesId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `productMainCategory`
--
ALTER TABLE `productMainCategory`
  ADD PRIMARY KEY (`mcId`);

--
-- Indexes for table `productSubcategory`
--
ALTER TABLE `productSubcategory`
  ADD PRIMARY KEY (`subcategoryId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `productVariants`
--
ALTER TABLE `productVariants`
  ADD PRIMARY KEY (`variantsId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `userBillingAddress`
--
ALTER TABLE `userBillingAddress`
  ADD PRIMARY KEY (`billId`),
  ADD KEY `usrId` (`usrId`);

--
-- Indexes for table `userCart`
--
ALTER TABLE `userCart`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `usrId` (`usrId`);

--
-- Indexes for table `userLogin`
--
ALTER TABLE `userLogin`
  ADD PRIMARY KEY (`usrId`);

--
-- Indexes for table `userMobileMoneyDetails`
--
ALTER TABLE `userMobileMoneyDetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usrId` (`usrId`);

--
-- Indexes for table `userOrder`
--
ALTER TABLE `userOrder`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `cartId` (`cartId`),
  ADD KEY `usrId` (`usrId`);

--
-- Indexes for table `userProfile`
--
ALTER TABLE `userProfile`
  ADD PRIMARY KEY (`usrProId`),
  ADD KEY `usrId` (`usrId`);

--
-- Indexes for table `usrAdmin`
--
ALTER TABLE `usrAdmin`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productImages`
--
ALTER TABLE `productImages`
  MODIFY `pImagesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `usrAdmin`
--
ALTER TABLE `usrAdmin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartProducts`
--
ALTER TABLE `cartProducts`
  ADD CONSTRAINT `cartproducts_ibfk_1` FOREIGN KEY (`cartId`) REFERENCES `userCart` (`cartId`),
  ADD CONSTRAINT `cartproducts_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`);

--
-- Constraints for table `orderPayments`
--
ALTER TABLE `orderPayments`
  ADD CONSTRAINT `orderpayments_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `userOrder` (`orderId`),
  ADD CONSTRAINT `orderpayments_ibfk_2` FOREIGN KEY (`usrId`) REFERENCES `userLogin` (`usrId`),
  ADD CONSTRAINT `orderpayments_ibfk_3` FOREIGN KEY (`billId`) REFERENCES `userBillingAddress` (`billId`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcategoryId`) REFERENCES `productSubcategory` (`subcategoryId`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`brandId`) REFERENCES `productBrand` (`brandId`);

--
-- Constraints for table `productCategory`
--
ALTER TABLE `productCategory`
  ADD CONSTRAINT `productcategory_ibfk_1` FOREIGN KEY (`mcId`) REFERENCES `productMainCategory` (`mcId`);

--
-- Constraints for table `productImages`
--
ALTER TABLE `productImages`
  ADD CONSTRAINT `productimages_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`);

--
-- Constraints for table `productSubcategory`
--
ALTER TABLE `productSubcategory`
  ADD CONSTRAINT `productsubcategory_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `productCategory` (`categoryId`);

--
-- Constraints for table `productVariants`
--
ALTER TABLE `productVariants`
  ADD CONSTRAINT `productvariants_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`);

--
-- Constraints for table `userBillingAddress`
--
ALTER TABLE `userBillingAddress`
  ADD CONSTRAINT `userbillingaddress_ibfk_1` FOREIGN KEY (`usrId`) REFERENCES `userLogin` (`usrId`);

--
-- Constraints for table `userCart`
--
ALTER TABLE `userCart`
  ADD CONSTRAINT `usercart_ibfk_1` FOREIGN KEY (`usrId`) REFERENCES `userLogin` (`usrId`);

--
-- Constraints for table `userMobileMoneyDetails`
--
ALTER TABLE `userMobileMoneyDetails`
  ADD CONSTRAINT `usermobilemoneydetails_ibfk_1` FOREIGN KEY (`usrId`) REFERENCES `userLogin` (`usrId`);

--
-- Constraints for table `userOrder`
--
ALTER TABLE `userOrder`
  ADD CONSTRAINT `userorder_ibfk_1` FOREIGN KEY (`cartId`) REFERENCES `userCart` (`cartId`),
  ADD CONSTRAINT `userorder_ibfk_2` FOREIGN KEY (`usrId`) REFERENCES `userLogin` (`usrId`);

--
-- Constraints for table `userProfile`
--
ALTER TABLE `userProfile`
  ADD CONSTRAINT `userprofile_ibfk_1` FOREIGN KEY (`usrId`) REFERENCES `userLogin` (`usrId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
