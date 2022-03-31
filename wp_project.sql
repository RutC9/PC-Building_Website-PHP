-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 08:50 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabinet`
--

CREATE TABLE `cabinet` (
  `model_name` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabinet`
--

INSERT INTO `cabinet` (`model_name`, `full_name`, `price`) VALUES
('Corsair01', 'Corsair Spec01 - 3,000Rs', 3000),
('Corsair02', 'Corsair Spec02 - 5,000Rs', 5000),
('Corsair03', 'Corsair ICUE RGB - 7,000Rs', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `cpu_cooler`
--

CREATE TABLE `cpu_cooler` (
  `cooler_id` int(11) NOT NULL,
  `cooler_full_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu_cooler`
--

INSERT INTO `cpu_cooler` (`cooler_id`, `cooler_full_name`, `price`) VALUES
(1, 'Stock CPU cooler -- 0Rs', 0),
(2, 'AIR COOLER -- 6,000Rs', 6000),
(3, 'LIQUID COOLER -- 16,000Rs', 16000),
(4, 'Custom Acrylic Water Cooling Kit -- 40,000Rs', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `gpu_id` varchar(10) NOT NULL,
  `gpu_full_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`gpu_id`, `gpu_full_name`, `price`) VALUES
('2060', 'Nvidea RTX2060 2nd Gen 6GB Vram -- 25,000Rs', 25000),
('2070', 'Nvidea RTX2070 2nd Gen 8GB Vram -- 45,000Rs', 45000),
('2080', 'Nvidea RTX2080 2nd Gen 12GB Vram -- 70,000Rs', 70000),
('3070', 'Nvidea RTX3070 3rd Gen 10GB Vram -- 60,000Rs', 60000),
('3080', 'Nvidea RTX3080 3rd Gen 12GB Vram -- 90,000Rs', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `hdd`
--

CREATE TABLE `hdd` (
  `hdd_id` int(11) NOT NULL,
  `hdd_full_name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hdd`
--

INSERT INTO `hdd` (`hdd_id`, `hdd_full_name`, `price`) VALUES
(1, '512GB 5400RPM HDD -- 2,100Rs', 2100),
(2, '1GB 5400RPM HDD -- 4,000Rs', 4000),
(3, '1GB 7200RPM HDD -- 5,000Rs', 5000),
(4, '2GB 7200RPM HDD -- 7,000Rs', 7000),
(5, '6GB 7200RPM HDD -- 14,000Rs', 14000);

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `mb_id` int(11) NOT NULL,
  `mb_full_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`mb_id`, `mb_full_name`, `price`) VALUES
(1, 'Intel H510 Motherboard -- 7,000Rs', 7000),
(2, 'Intel B450 Motherboard -- 1,200Rs', 12000),
(3, 'Intel Z590 Gaming Motherboard -- 24,000Rs', 24000),
(4, 'AMD B350 Motherboard -- 6,000Rs', 6000),
(5, 'AMD X570 Gaming Motherboard -- 18,000Rs', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `order-status` text NOT NULL,
  `payment_method` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `power_supply`
--

CREATE TABLE `power_supply` (
  `ps_id` int(11) NOT NULL,
  `ps_full_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `power_supply`
--

INSERT INTO `power_supply` (`ps_id`, `ps_full_name`, `price`) VALUES
(1, '450W Non-Modular 80+Brozne Certified -- 3,500Rs', 3500),
(2, '550W Semi-Modular 80+Silver Certified -- 6,000Rs', 6000),
(3, '750W Full-Modular 80+Gold Certified -- 8,000Rs', 8000),
(4, '900W Full-Modular 80+Platinum Certified -- 10,000Rs', 10000),
(5, '1000W Full-Modular 90+Platinum Certified -- 16,000Rs', 16000);

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

CREATE TABLE `processor` (
  `cpu_id` varchar(20) NOT NULL,
  `cpu_full_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`cpu_id`, `cpu_full_name`, `price`) VALUES
('i3', 'Intel i3 11th Gen -- 7000Rs', 7000),
('i5', 'Intel i5 11th Gen --15000Rs', 15000),
('i7', 'Intel i7 11th Gen -- 25000Rs', 25000),
('r3', 'AMD Ryzen3 -- 6000Rs', 6000),
('r5', 'AMD Ryzen5 -- 13500Rs', 13500),
('r7', 'AMD Ryzen7 -- 19000Rs', 19000);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `cpu_id` varchar(20) NOT NULL,
  `gpu_id` varchar(10) NOT NULL,
  `ram_id` varchar(200) NOT NULL,
  `mb_id` varchar(200) NOT NULL,
  `ssd_id` varchar(200) NOT NULL,
  `hdd_id` varchar(200) NOT NULL,
  `ps_id` varchar(200) NOT NULL,
  `cooler_id` varchar(200) NOT NULL,
  `total_price` int(11) NOT NULL,
  `mode_of_payment` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `userid`, `model_name`, `cpu_id`, `gpu_id`, `ram_id`, `mb_id`, `ssd_id`, `hdd_id`, `ps_id`, `cooler_id`, `total_price`, `mode_of_payment`, `timestamp`) VALUES
(24, 'rut.cholera7@gmail.com', 'Corsair Spec02 - 5,000Rs', 'Intel i5 11th Gen --', 'Nvidea RTX', '16Gb 3600MHZ 16X1 -- 15000Rs', 'Intel B450 Motherboard -- 1,200Rs', '512GB SATA SSD -- 6000Rs', '1GB 7200RPM HDD -- 5,000Rs', '550W Semi-Modular 80+Silver Certified -- 6,000Rs', 'cpu_cooler', 125000, 'Cash On Delivery', '2021-10-27 10:18:29'),
(26, 'rut.cholera7@gmail.com', 'Corsair Spec01 - 3,000Rs', 'Intel i5 11th Gen --', 'Nvidea RTX', '8GB 3200MHZ 8X1 -- 8000Rs', 'Intel B450 Motherboard -- 1,200Rs', '512GB SATA SSD -- 6000Rs', '1GB 5400RPM HDD -- 4,000Rs', '550W Semi-Modular 80+Silver Certified -- 6,000Rs', 'cpu_cooler', 115000, 'Online Payment', '2021-10-27 11:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `ram_id` int(11) NOT NULL,
  `ram_full_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`ram_id`, `ram_full_name`, `price`) VALUES
(1, '8GB 3200MHZ 8X1 -- 8000Rs', 8000),
(2, '16Gb 3600MHZ 16X1 -- 15000Rs', 15000),
(3, '16GB 3200MHZ 8X2 -- 12000Rs', 12000),
(4, '32GB 3600MHZ 16X2 -- 21000Rs', 21000),
(5, '32Gb 3000MHZ 8X4 -- 20000Rs', 20000),
(6, '64GB 3200MHZ 16X4 -- 32000Rs', 32000);

-- --------------------------------------------------------

--
-- Table structure for table `ssd`
--

CREATE TABLE `ssd` (
  `ssd_id` int(11) NOT NULL,
  `ssd_full_name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssd`
--

INSERT INTO `ssd` (`ssd_id`, `ssd_full_name`, `price`) VALUES
(1, '256Gb SATA SSD -- 4000Rs', 4000),
(2, '512GB SATA SSD -- 6000Rs', 6000),
(3, '512GB NVME SSD -- 8000Rs', 8000),
(4, '512GB PCle SSD -- 13000Rs', 13000),
(5, '1GB SATA SSD -- 9000Rs', 9000),
(6, '1GB NVME SSD-- 14000Rs', 14000),
(7, '1GB PCle SSD -- 21000Rs', 21000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `timestamp`) VALUES
(18, 'rut.cholera7@gmail.com', '$2y$10$JwuCpMixJCNQO9ngdFyry.2xjVjCStvoawPSTh.D4dxEPFYhy0jXy', '2021-10-27 10:09:46'),
(20, 'rut.cholera09@gmail.com', '$2y$10$tWp33tjWugp//DW.b6DT3ucGB8itPkfZO50t9IP/vnWV9w2JstRRi', '2021-10-27 11:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(10) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `zip_code` varchar(200) NOT NULL,
  `mobile-number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `firstname`, `lastname`, `address`, `city`, `state`, `country`, `zip_code`, `mobile-number`) VALUES
(20, 'rut.cholera7@gmail.com', 'Rut', 'Cholera', 'andheri', 'mumbai', 'maharashtra', 'india', '400001', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinet`
--
ALTER TABLE `cabinet`
  ADD PRIMARY KEY (`model_name`);

--
-- Indexes for table `cpu_cooler`
--
ALTER TABLE `cpu_cooler`
  ADD PRIMARY KEY (`cooler_id`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`gpu_id`);

--
-- Indexes for table `hdd`
--
ALTER TABLE `hdd`
  ADD PRIMARY KEY (`hdd_id`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`mb_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `power_supply`
--
ALTER TABLE `power_supply`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `processor`
--
ALTER TABLE `processor`
  ADD PRIMARY KEY (`cpu_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ram_id`);

--
-- Indexes for table `ssd`
--
ALTER TABLE `ssd`
  ADD PRIMARY KEY (`ssd_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
