-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 08:19 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whenwing`
--

-- --------------------------------------------------------

--
-- Table structure for table `forgot_pwd_token`
--

CREATE TABLE `forgot_pwd_token` (
  `fp_token_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `reset_token` varchar(32) NOT NULL,
  `date_created` datetime NOT NULL,
  `is_used` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgot_pwd_token`
--

INSERT INTO `forgot_pwd_token` (`fp_token_id`, `customer_id`, `reset_token`, `date_created`, `is_used`) VALUES
(1, 15, '420b3a55a59df036cd0b526b4a9ed6e7', '2018-09-28 23:27:56', 0),
(2, 15, '167c20636b9ee62dc54aac912f4bdf27', '2018-09-29 00:36:38', 0),
(3, 15, 'e0f70c32216be5c3dd06059f1e65227a', '2018-10-01 17:57:40', 0),
(4, 15, 'f7b60d6252197d64fba5a68f630b4b66', '2018-10-01 23:33:38', 0),
(5, 15, '3095369016d2636dd17fb29316fe901b', '2018-10-01 23:46:06', 0),
(6, 15, 'f0a39100c27e4fcba5aa24b2194d2922', '2018-10-01 23:50:07', 0),
(7, 15, '90cefab2248ffdb0b267b771f9d1a7ec', '2018-10-04 22:46:25', 0),
(8, 19, '4d2783c819f369a3308e97df4f077a88', '2018-10-13 23:36:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prov_forgot_pwd_token`
--

CREATE TABLE `prov_forgot_pwd_token` (
  `fp_token_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `reset_token` varchar(32) NOT NULL,
  `date_created` datetime NOT NULL,
  `is_used` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prov_forgot_pwd_token`
--

INSERT INTO `prov_forgot_pwd_token` (`fp_token_id`, `provider_id`, `reset_token`, `date_created`, `is_used`) VALUES
(1, 15, '420b3a55a59df036cd0b526b4a9ed6e7', '2018-09-28 23:27:56', 0),
(2, 15, '167c20636b9ee62dc54aac912f4bdf27', '2018-09-29 00:36:38', 0),
(3, 15, 'e0f70c32216be5c3dd06059f1e65227a', '2018-10-01 17:57:40', 0),
(4, 15, 'f7b60d6252197d64fba5a68f630b4b66', '2018-10-01 23:33:38', 0),
(5, 15, '3095369016d2636dd17fb29316fe901b', '2018-10-01 23:46:06', 0),
(6, 15, 'f0a39100c27e4fcba5aa24b2194d2922', '2018-10-01 23:50:07', 0),
(7, 15, '90cefab2248ffdb0b267b771f9d1a7ec', '2018-10-04 22:46:25', 0),
(8, 6, '203332ef4e1b0fca2746b88259e17bda', '2018-10-07 13:16:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ww_customers`
--

CREATE TABLE `ww_customers` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `cust_hash` varchar(32) NOT NULL,
  `cust_password` varchar(256) NOT NULL,
  `reg_date` datetime DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ww_customers`
--

INSERT INTO `ww_customers` (`id`, `fullname`, `email`, `mobile`, `cust_hash`, `cust_password`, `reg_date`, `active_status`) VALUES
(18, 'assdasd', 'asdasdas@sdasd.com', '444444444444', 'c7c9e82bf40ad85c35d8fe82ab176efa', '$2y$10$jzrwUGhvaG6MrRw1L9CIiutbMQrIz77/gRArzsgXXvkmZISTjk/i2', '2018-10-10 22:56:52', 0),
(17, 'dsfsdf', 'sdfsdf@dfsdf.com', '334', '027f0b485700b770b34fc3718a3f73f4', '$2y$10$e4KRz1EqZt0mz2IAgRMwouhg/5olMNwAl.02a74FDZzDMRxdqxPzO', '2018-10-05 16:55:14', 0),
(16, 'sandeep', 'dd@gmail.com', 'sddssd', '624368ba48ad4413e357d6531f119514', '$2y$10$fD/OG.mlsMyE/C2M2r9KqOFHh2KFYT5xqM4X82Vf3d4AUr0MNugJO', '2018-10-04 16:33:00', 1),
(15, 'sdsd', 's@ss.com', 'sdfdsf@s.com', '624368ba48ad4413e357d6531f119514', '$2y$10$ioYu85sXaKCxWrSMKuZ7fuC7TPJisfPDQ8xexJmW.UuQuuJR9uiZi', '2018-09-28 19:45:59', 1),
(19, 'amarjeet', 'whenwing3381@gmail.com', '9555553381', 'b9504ae2dcb086a04595b3c280a165f1', '$2y$10$03s9Q3PtRUOKmILDy3a6j.rqPGsC9E46Y5XBf4LFfH9mljJl20/0S', '2018-10-13 23:29:53', 1),
(20, 'SK', 'sk@gmail.com', '8888889907', '827b1e0390efd334b3b595a913233e5e', '$2y$10$x40KY5V24k6xC8vQH0OlxuLSqPYN4hPGBADVjwMCKf96PWUNvHnUy', '2018-10-14 02:47:13', 1),
(21, 'Ha', 'mk361542@gmail.com', '9876543210', 'ea87a7a5fd02bd5fddc27786f5fb4381', '$2y$10$2kvY.eKr1LPvTNEIDfAX0./4H0sTdVMNHUN1h65dXKHOrNpsCJUTi', '2018-10-21 21:58:26', 0),
(22, 'Amit Kumar', 'amitsharma3381@gmail.com', '9555553381', 'c0dd39d66f8e218f6c756df88aa7cde6', '$2y$10$R1GJyrsrhQgbtEw81UH9ZOr05YovwEynz6AILTJnq8uFa53Kd.67K', '2019-02-22 07:29:57', 0),
(23, 'Shivam Parihar', 'xavieranand23@gmail.com', '7697913113', '270dcc827dbc638998d2c2f05766eba6', '$2y$10$kJq2u43HZA3kpNqJ6XfBT.JPzP7e9gPzIgSpep2h1q5a9.nrC0fD2', '2019-02-27 17:50:46', 1),
(24, 'Abhinav Kumar', 'abhi2694@gmail.com', '9654100064', 'a2f3a87a53a9dc700adf9f0aeed2079f', '$2y$10$u.kqT0kI4zk5r0HYxKEtRuiXbu/WVifuOdOag6emn9IjgL/At7fcK', '2019-03-02 09:25:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ww_customers_social`
--

CREATE TABLE `ww_customers_social` (
  `id` bigint(20) NOT NULL,
  `id_social` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `reg_date` datetime DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ww_customer_order`
--

CREATE TABLE `ww_customer_order` (
  `order_id` bigint(20) NOT NULL,
  `order_hash` varchar(32) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `provider_id` bigint(20) NOT NULL,
  `ord_category1` varchar(150) NOT NULL,
  `ord_category2` varchar(150) NOT NULL,
  `order_type1` varchar(150) NOT NULL,
  `order_type2` varchar(150) NOT NULL,
  `order_type3` varchar(150) NOT NULL,
  `order_type4` varchar(150) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ww_customer_order`
--

INSERT INTO `ww_customer_order` (`order_id`, `order_hash`, `customer_id`, `provider_id`, `ord_category1`, `ord_category2`, `order_type1`, `order_type2`, `order_type3`, `order_type4`, `order_date`, `order_status`) VALUES
(1, '', 15, 533, 'Home Services', 'Carpenter', 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:23:34', 0),
(2, '', 15, 533, 'Home Services', 'Carpenter', 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:24:22', 1),
(3, '', 15, 533, 'Home Services', 'Carpenter', 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:24:23', 0),
(4, '', 15, 533, 'Home Services', 'Carpenter', 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:24:25', 1),
(5, '', 15, 533, 'Home Services', 'Carpenter', 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:24:27', 2),
(6, '', 15, 533, 'Home Services', 'Carpenter', 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:24:41', 2),
(7, '', 15, 533, 'Home Services', 'Carpenter', 'Home Services', 'Carpainter', 'Sofa', 'Visitor', '2018-08-29 18:57:41', 2),
(8, '7de827974f26e0293222860a5d9776b8', 15, 1, 'appliance-repair', 'ac-service-repair-and-installation', '-', '-', '-', '-', '2018-10-09 23:55:20', 1),
(9, '89d654d3fbce55185bdfa86f135ddb25', 15, 9, 'appliance-repair', 'ac-service-repair-and-installation', '-', '-', '-', '-', '2018-10-10 00:00:27', 1),
(10, '8c16fdaa531e2b65814435ef6233e4c3', 15, 9, 'appliance repair', 'ac service repair and installation', '-', '-', '-', '-', '2018-10-10 00:02:26', 2),
(11, '4c0573c3ff238c46cda69b73852e6e9e', 15, 1, 'appliance repair', 'ac service repair and installation', '-', '-', '-', '-', '2018-10-10 00:02:58', 1),
(12, '5b7fa995385c9ecf1e5cd82a5c06fb9b', 15, 9, 'appliance repair', 'ac service repair and installation', 'Repair', 'Window AC', '-', '-', '2018-10-10 00:29:21', 1),
(13, 'a0e8db38df1ca793532c4103018c64f0', 15, 1, 'appliance repair', 'ac service repair and installation', '-', '-', '-', '-', '2018-10-10 11:02:33', 0),
(14, 'a6b1df1e0cf03a5e9139496f0b8dcd8a', 15, 15, 'home services', 'carpenter', '-', '-', '-', '-', '2018-10-14 00:12:35', 1),
(15, '501935ca74ee3218f85cbbae3e1148e8', 20, 15, 'home services', 'carpenter', '-', '-', '-', '-', '2018-10-14 02:49:08', 1),
(16, '7e7982cfaabc41e6bc1566752f977aa6', 20, 15, 'home services', 'carpenter', '-', '-', '-', '-', '2018-10-14 02:51:03', 1),
(17, '778b71e1630148f2e341eff40073bf9f', 20, 17, 'education', 'default', '-', '-', '-', '-', '2018-10-14 03:43:29', 1),
(18, '', 15, 7, '', '', '', '', '', '', '0000-00-00 00:00:00', 0),
(19, '', 15, 19, '', '', '', '', '', '', '0000-00-00 00:00:00', 0),
(20, '', 15, 14, '', '', '', '', '', '', '0000-00-00 00:00:00', 0),
(21, '', 15, 26, '', '', '', '', '', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ww_cust_order_ext`
--

CREATE TABLE `ww_cust_order_ext` (
  `ext_id` int(11) NOT NULL,
  `order_hash` int(11) NOT NULL,
  `order_type5` varchar(150) NOT NULL,
  `order_type6` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ww_provider`
--

CREATE TABLE `ww_provider` (
  `prov_id` int(11) NOT NULL,
  `prov_name` varchar(50) NOT NULL,
  `prov_contact` varchar(15) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `pwd` varchar(256) NOT NULL,
  `prov_dob` datetime NOT NULL,
  `prov_gender` varchar(6) NOT NULL,
  `prov_addr` varchar(300) NOT NULL,
  `prov_pincode` varchar(6) NOT NULL,
  `prov_state` varchar(30) NOT NULL,
  `prov_field` varchar(100) NOT NULL,
  `prov_service` varchar(100) NOT NULL,
  `prov_spec_1` varchar(100) NOT NULL,
  `prov_spec_2` varchar(100) NOT NULL,
  `prov_spec_3` varchar(100) NOT NULL,
  `prov_spec_4` varchar(100) NOT NULL,
  `prov_workexp` varchar(20) NOT NULL,
  `prov_record` varchar(300) NOT NULL,
  `prov_about` text NOT NULL,
  `prov_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `rating` float(5,1) NOT NULL,
  `prov_photo` varchar(255) NOT NULL,
  `prov_id_front` varchar(40) NOT NULL,
  `prov_id_bk` varchar(40) NOT NULL,
  `prov_hash` varchar(32) NOT NULL,
  `reg_date` datetime NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ww_provider`
--

INSERT INTO `ww_provider` (`prov_id`, `prov_name`, `prov_contact`, `email_id`, `pwd`, `prov_dob`, `prov_gender`, `prov_addr`, `prov_pincode`, `prov_state`, `prov_field`, `prov_service`, `prov_spec_1`, `prov_spec_2`, `prov_spec_3`, `prov_spec_4`, `prov_workexp`, `prov_record`, `prov_about`, `prov_price`, `discount`, `rating`, `prov_photo`, `prov_id_front`, `prov_id_bk`, `prov_hash`, `reg_date`, `is_active`) VALUES
(1, 'uhujhdfc', '7878778787', 'skc@dfdfdm.ggfg', '@Mnbvcxz1#', '2018-10-15 00:00:00', 'Male', 'yahi pe', '66655', 'Delhi NCR', 'Appliance Repair', 'AC Service Repair And Installation', 'Repair,Installation,Un-Installation', 'Split AC', '', '', '7 Year', 'dffffffffffff', 'fjsdsdfnsc djsf', 500, 10, 3.9, '', '1eb7050b812c98d66a750512ed44475f.png', 'a04ad4213c8a05a0bfb521ae7f17bcdf.png', '33890157ea64ee0299dd8bde0f668873', '2018-10-06 01:14:48', 1),
(9, 'dasd', '31asd', 'sdasd@sasda.com', '$2y$10$EFI6NypvoXj3mwchnpHlHO5cxREK6I3ceCq6ledk68pOddBuQq.dW', '2015-07-08 00:00:00', 'Female', 'asdsad', '110096', 'Karnataka', 'Personal Service', 'Personal cook', 'kids,family', 'full time', '', '', '9 Year', 'sadsasad', 'sdadasdasd', 350, 0, 0.0, '', '38066fb7c64c6c5b54b9aa0a0c8c912f.png', '37ae79657ed3331f32e72d8290a76e81.png', 'd38365391f784863e17c0b4b8bff6fea', '2018-10-06 01:56:00', 1),
(8, 'v bvcbb', '5555', 'vghvghvh@ggg.com', '$2y$10$KmMsR7NZkyHI7of564HiEusxSShnfY1jkNQBe.7I6k4n62N29N.d2', '2018-10-19 00:00:00', 'Male', 'vghvg', '555', 'Jharkhand', 'Transport', 'Transport Services', 'v bc fgcg', '', '', '', '10 Year', 'cfhcchc', 'ccchc', 0, 0, 0.0, '', '34d03bb08c76086cb46236645a83c8f6.png', 'e402bff379437e446f17d3b50eda3aca.png', '73b8768d8fe7980463153c1d70342142', '2018-10-07 14:38:11', 1),
(7, 'gjgjh', '87877', 'gjgj@fgg.com', '$2y$10$vOw7dP2R4aLq9ya1i.wmoOe67UGAAt6DsPNXIxeupbG3jjkQTU00W', '2018-10-13 00:00:00', 'Male', 'ghcgccggh', '67676', 'Jammu and Kashmir', 'Appliance Repair', 'Geyser/Water Heater Repair', 'utfhghfhghf', '', '', '', '9 Year', 'fghjvhgvh', 'vgvghvhvhvh', 0, 0, 0.0, '', '574e504ee36d08fb3794fcdbcdc95f87.png', '5bce27f0620d0fdb3e901f572fb48dab.png', '6dc1a941b8bdbcdcc7aaaa00c8611052', '2018-10-07 14:35:19', 1),
(6, 'sssaas', '31', 'sdasd@sasda.com', '$2y$10$EFI6NypvoXj3mwchnpHlHO5cxREK6I3ceCq6ledk68pOddBuQq.dW', '2015-07-08 00:00:00', 'Female', 'asdsad', '110096', 'Karnataka', 'Personal Service', 'Personal cook', 'women,kids', 'full time,part time', '', '', '9 Year', 'sadsasad', 'sdadasdasd', 400, 0, 0.0, '', '38066fb7c64c6c5b54b9aa0a0c8c912f.png', '37ae79657ed3331f32e72d8290a76e81.png', 'd38365391f784863e17c0b4b8bff6fea', '2018-10-06 01:56:00', 1),
(10, 'tttttttt', 'dsd', 'sdasd@sasda.com', '$2y$10$EFI6NypvoXj3mwchnpHlHO5cxREK6I3ceCq6ledk68pOddBuQq.dW', '2008-07-08 00:00:00', 'Male', 'asdsad', '110096', 'Karnataka', 'Personal Service', 'Personal cook', 'men,kids,family', 'part time', '', '', '9 Year', 'sadsasad', 'sdadasdasd', 300, 0, 0.0, '', '38066fb7c64c6c5b54b9aa0a0c8c912f.png', '37ae79657ed3331f32e72d8290a76e81.png', 'd38365391f784863e17c0b4b8bff6fea', '2018-10-06 01:56:00', 1),
(11, 'asdasnkj', '9999', 'ndjsankjn@sdsad.com', '$2y$10$AXCL1cwB5akD5GJrI1C8zOn5s12eatuDii5/6rzzVXbSBoRS1mI0m', '2018-10-05 00:00:00', 'Female', 'sadjasnd', '23213', 'Maharashtra', 'Transport', 'Transport Services', 'asdasd', '', '', '', '6 Year', 'snadasnkjd', 'sajjdjkasndnsa', 0, 0, 0.0, '', '466bafe2f00b8d572880591c6de0c52f.png', '6f41094317dd23c0a06364780b41ceec.jpg', '8ea73712e9286992b10fad0223981c1e', '2018-10-10 13:34:11', 1),
(14, 'Yo', '9871232374', 'Yo@gmail.com', '$2y$10$GUUfm4eYYA.E9Q9w4B79fufgFaCX1GSGCx9zMOGvt1Flj71/2npr.', '2018-10-11 00:00:00', 'Male', 'Kuch bhi', '100000', 'Gujarat', 'Home Services', 'Glass and Mirror', 'Rapper', '', '', '', '10+ Year', 'Yo yo honey Singh', 'Ha ha', 0, 0, 0.0, '', '95b61480f58ef8c303d20158cf3ade5b.jpg', '07f90ed32d256c2bc54881433d3f774b.jpg', '320549f22dc69aedf14ddd4ed86fe8a1', '2018-10-11 01:12:33', 1),
(15, 'umesh sharma', '9999884484', 'amitsharma3381@gmail.com', '$2y$10$FkFokIk6faq2MA2VgF0exe2ioPNTTYEC6jNN04yqUiqsVkPmn5BJu', '1967-01-01 00:00:00', 'Male', 'a-269,gali no-6 part-1,mukandpur', '110042', 'Delhi NCR', 'Home Services', 'Carpenter', 'all furniture ', '', '', '', '10+ Year', 'azadpur, majlis park.', 'i am umesh sharma. \r\n51 years old\r\nknow all modal of furniture .', 0, 0, 0.0, '', '7159788c9fba21a2777215e2ff94a2a5.jpg', '494f85d6fa6d6b29f2a37cf48de18e09.jpg', '48d063826e14b2edb6b6a5d82b3cd2b1', '2018-10-12 04:59:28', 1),
(16, 'yoyo', '9555553381', 'amitsharma3381@gmail.com', '$2y$10$DCoD46c9PvEY/2AOS/bW4epEIpAXoS/2vmfrvlYQrRwOU3sr4e5gO', '2018-10-11 00:00:00', 'Male', 'a-584,gali no-6 tkncsk', '110042', 'Goa', 'Education', 'Gate', 'fresh', '', '', '', '10 Year', 'azadpur', '40 rs per hours', 0, 0, 0.0, '', '0f31f82185d0480c4f7b4767d0a8902a.jpg', 'd4e9fe60f663170700a281ba9fed42c4.jpg', '044cd947fc743950394151e1990c9d74', '2018-10-13 23:48:59', 1),
(17, 'qqqqqq', '2222222222', 'q@q.com', '$2y$10$lRt83EucFyFmWcWDnzqOmuCz8O.CMKWoWkuxkrR9DVDPkXacpKCxG', '2018-10-25 00:00:00', 'Male', 'wdasjdjk asdasd', '110933', 'Jammu and Kashmir', 'Education', 'qqqqqqqqq', 'qqqqqqqqqqq', '', '', '', '8 Year', 'qqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqq', 0, 0, 0.0, '', 'ddb7de75c7342f87b7eb8026401175b0.png', '99f1e32783fff682f2ae0964d70ae79a.png', '1e3b6ca607125d54a2878ece99baccad', '2018-10-14 02:57:41', 1),
(18, 'Amit', '8010552634', 'amitsharma3381@gmail.com', '$2y$10$qAoExHFJw7COWzPJ5si.Tue1zdT1c.eUB7a9ts1/hum3DmAB04rAu', '2018-10-18 00:00:00', 'Male', 'A-255,gali no 5 mukandpur ', '110042', 'Delhi NCR', 'Wedding/Party', 'Party Planner', 'Experience ', '', '', '', '10 Year', 'Modal town ', '500 rupe ', 0, 0, 0.0, '', '6c0cc526fb9716a8810bab8e82c45875.jpg', '019901bc2e88ce6e9de01d6bf32ac7a4.jpg', '04df9e178cc42e299d6f1fed0e51a736', '2018-10-17 03:06:00', 1),
(19, 'Manish', '9871232374', 'amitsharma3381@gmail.com', '$2y$10$cEK62x4610ed.Ko7ziPV8up79AUzWY6Dj.gxvBWB5Dluzmgvdt6IK', '1994-10-19 00:00:00', 'Male', 'H-512, gali no-6, begumpur', '110054', 'Delhi NCR', 'Education', 'Gate', 'Ittian', '', '', '', '3 Year', 'Dtu, nsit', 'Am dtu engineer. 5000 per course', 0, 0, 0.0, '', 'b248aaa7156230fa02e10127dbbc227e.png', '81a051727011a3962bee36955ea162ad.png', '8c0070696daeb8e28cb0cbeff77e7e94', '2018-10-18 07:13:15', 1),
(20, 'Suraj', '8826306423', 'amitsharma3381@gmail.com', '$2y$10$Bql1OKCBmYOCOxm8en4hTe/.9vwzlbRXrvs7ayCvqpn.Wxy4K6yIC', '1992-10-22 00:00:00', 'Male', 'Majlish park delhi ', '110033', 'Delhi NCR', 'Appliance Repair', 'TV Repair and Installation', 'All type tv ', '', '', '', '6 Year', 'Modal town, shalimaar bhagh, rohini. ', 'I am 25 years old men.  \r\nI have 6 years experience in appliances. ', 0, 0, 0.0, '', 'fb43e0671de0e724994d09d88a857a9e.jpg', 'b6fda7c6197b5283a0280495655cad06.jpg', '704a234467d391829080424d60f7688d', '2018-10-19 03:10:37', 1),
(21, 'Sujeet kuamr', '8826306423', 'amitsharma3381@gmail.com', '$2y$10$HO1WaNwS4ySe6t9vB2C9Fu4cUAqCPva0GWU4/xFRNW0tJy20Ole0C', '2018-10-16 00:00:00', 'Male', 'A- 56,gali no-6, MUKANDPUR delhi', '110042', 'Delhi NCR', 'Education', 'Cat', 'All type problem ', '', '', '', '8 Year', 'Majlis park', '548, per student ', 0, 0, 0.0, '', '37705919897871e39bfc22b817a8fb5a.jpg', '6e668cd607f258ed397e7aef1330d9e0.jpg', 'a82d81d5bb4741f3e2bd9cc1e3a95cbc', '2018-10-21 08:12:24', 1),
(22, 'Sanjay', '9999408409', 'Whenwing3381@gmail.con', '$2y$10$jsKg4.PHBpLT4IqwG7Y2HOs2FqINUocUJOg7H2c0Proigy8gbrA7a', '1994-10-19 00:00:00', 'Male', 'G block majlis park', '110042', 'Delhi NCR', 'Education', 'Cat', 'Mba', '', '', '', '6 Year', 'Azadpur, modal town ', '500 per student ', 0, 0, 0.0, '', 'e23a395d5f791574757291f60ebd6813.jpg', '52bcfd8a7ea598cf0d091722cd0f38dd.jpg', '33b79b334474982d2c4b2fcf4edf44d5', '2018-10-21 08:19:44', 1),
(23, 'Ho ho ho', '9876543210', 'mk361542@gmail.com', '$2y$10$9bYWXk1gCsTTG5NH/3VlxeMT5cPYc80FSdl.9B29MhjJ33mTKe5f.', '2018-10-22 00:00:00', 'Male', 'Kuch bhi', '100000', 'Goa', 'Home Services', 'Carpenter', 'Katna', '', '', '', '10+ Year', 'Heheh,ðŸ‡¦ðŸ‡±ðŸ‡®ðŸ‡¶ðŸ˜€ðŸ˜€ðŸ˜€ðŸ˜€ðŸ˜€ðŸ˜€ðŸ˜€ðŸ˜€ðŸ˜€ðŸ˜€ðŸ˜ŽðŸ˜ŽðŸ˜ŽðŸ˜ŽðŸ˜ŽðŸ˜ŽðŸ˜ŽðŸ™‚ðŸ˜ŽðŸ™‚ðŸ¤”ðŸ¤”ðŸ¤”ðŸ¤”ðŸ¤”ðŸ¤”', 'â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹â‚¹$', 0, 0, 0.0, '', '11e4b8bafa1b696c0fb1dbb64ff5981f.jpg', '36d2088e893f81c10e01f51f97c202cd.png', '34915e1eb0caa29c91cd58841664a595', '2018-10-21 21:37:36', 1),
(24, 'alok gupta', '9645789512', 'amitsharma3381@gmail.com', '$2y$10$TZhg8fOem0B/6lwePBvqPeHwGyYr6K6IUjRDv4BF56hJnUFUvAcZ.', '2018-10-04 00:00:00', 'Male', 'a-512.modal town', '110033', 'Delhi NCR', 'Transport', 'Travel', 'all type', '', '', '', '7 Year', 'mukandpur', '512 per km', 0, 0, 0.0, '', 'bbebc11afc51fa7add584c1bf2b8394d.jpg', 'c359258ef1fcea0b4d9a5415d0275925.jpg', '792622f1ef121d03d81e5d5748abc9b1', '2018-10-21 22:30:20', 1),
(25, 'ankit verma', '8010256398', 'amitsharma3381@gmail.com', '$2y$10$O6HycIxkxQOO5V5YP0blTuGF4BhEj4NMwBD8xcDLuvbD.UWcyjEC6', '1993-08-17 00:00:00', 'Male', 'swroop vihar nathu pura delhi ', '110065', 'Delhi NCR', 'Appliance Repair', 'AC Service Repair and Installation', 'repair,gas filling', 'window AC', '', '', '3 Year', 'narela,azadpur,shalimaar bhag.', 'i am gradugate from du in art.\r\ni am 25 year old men.\r\nworking in inalsa since 2015.', 400, 0, 0.0, '', 'dccbd82568fce5442289e24b8ec13461.jpg', '056d109eeea13bf496cb6df19aec9800.jpg', '641adc0e5978676de32d9fdf85849530', '2018-10-22 03:42:30', 1),
(26, 'saif ali khan', '9013624578', 'whenwing3381@gmail.com', '$2y$10$WTh4R7k4LMCjIAt4.vJFHOZzWJzUaW3EPla61CEABmTCdRjrV9tnW', '1990-10-10 00:00:00', 'Male', 'bawana road near dtu', '110042', 'Delhi NCR', 'Home Services', 'Painter', 'all type work', '', '', '', '3 Year', 'a.123,sangam vihar,near mata vaisno devi mandir', '512 rupees per hour', 0, 0, 0.0, '', '4ae3cf206d30f6873d03b83a217b4de7.jpg', '30ac900680ed440f6dd2d771aa88a33b.jpg', 'cd61e05b9c53816c1bbc420c210341c8', '2018-10-22 03:52:07', 1),
(27, 'nidish mani', '9848756526', 'amitsharma3381@gmail.com', '$2y$10$4z56alCPwZ522JrTX.g7BOxMrF653.ZfKwA5FrzSTPTu3CXCNEvsu', '1988-02-10 00:00:00', 'Male', '546 a block near shiv mandir', '110025', 'Delhi NCR', 'Home Services', 'Painter', 'all type painting', '', '', '', '8 Year', ' i am a painter.', '500 for 8 hours work', 0, 0, 0.0, '', '5482b9161416a150ee08e8bace116f3a.jpg', '9d4120bf6c0d944ad8f35068dc781069.jpg', '773e2cb79b29955a5a621bf65707b9ab', '2018-10-22 03:59:45', 1),
(28, 'uvais ahmed', '7840235689', 'amitsharma3381@gmail.com', '$2y$10$kYxhkqOHt19rheqpWoi5Q.ztEOpBuovzqWVPOlLmDng05NxuGL/9a', '1984-06-14 00:00:00', 'Male', 'siraspur rohini sec 18', '110054', 'Delhi NCR', 'Home Services', 'Painter', 'all type painting', '', '', '', '10+ Year', 'i am a painter who do painting with very profession.', '1000 per 8 hours', 0, 0, 0.0, '', 'd99681399f84933fd89febd799b47396.jpg', '7cb3246f1e26ad98af12a8f5b3a9417c.jpg', '1191ea0cc7ae86b0a92983a1ec9e28c0', '2018-10-22 04:03:15', 1),
(29, 'adil abdula', '9013564879', 'amitsharma3381@gmail.com', '$2y$10$bWtvV2jBeFEYRMfoUIk5oOWDNmVCX7yUVpNGJLyfWi3QH5K902djm', '1980-10-17 00:00:00', 'Male', 'majlish park', '110009', 'Delhi NCR', 'Home Services', 'Painter', 'home and office within time.', '', '', '', '9 Year', 'narelaa', '800per hours', 0, 0, 0.0, '', '196133e8a91a4fc652bcf1ad3e1b9764.jpg', 'e09c27014740960444fb9cee34dd7d24.jpg', 'd833c5c9f7c66a440b547ca61e405b97', '2018-10-22 04:06:37', 1),
(30, 'neeraj chuhan', '56897412355', 'g6694845@nwytg.net', '$2y$10$R8QjXZj764ubNYAAGdaNl.2miBzLUrqH2.Nlqe4xtfa8Cg3OTXnz.', '1968-10-17 00:00:00', 'Male', 'a/589.block g nsp,delhi', '110089', 'Delhi NCR', 'Home Services', 'Carpenter', 'bed,sofa,almirha,window,table,lcd and all furniture items.', '', '', '', '10+ Year', 'i worked with comapany.\r\ni have 30+year expriences in working furniture filed.\r\ni work with perfession.', 'i charges 150 per hours..', 0, 0, 0.0, '', '2c283ebe6599eb8e00546d9611e36412.jpg', '7e4438f3f76d28a0e4204020abf9c244.jpg', 'b5b18e9db0a9b9c55e50c82173a3df3b', '2018-10-24 01:46:16', 1),
(31, 'neeraj chuhan', '56897412355', 'g6694845@nwytg.net', '$2y$10$D.PWGoubaoiLZLQm1jWlfeOjZCiBWlWI/b3L3jbewC7enf6CTDziG', '1968-10-17 00:00:00', 'Male', 'a/589.block g nsp,delhi', '110089', 'Delhi NCR', 'Home Services', 'Carpenter', 'bed,sofa,almirha,window,table,lcd and all furniture items.', '', '', '', '10+ Year', 'i worked with comapany.\r\ni have 30+year expriences in working furniture filed.\r\ni work with perfession.', 'i charges 150 per hours..', 0, 0, 0.0, '', '102f15c04ddf5357e9aeb529c9c85b8f.jpg', '5c75b4154a5c85cef559d250d9cc8b62.jpg', '6b2c15e10d8669137b3e4e62f90b4726', '2018-10-24 01:46:27', 1),
(32, 'chaliter singh', '5689741356', 'whenwing3381@gmail.com', '$2y$10$RdGtALOCwo7ekwLfgbX2A.xJjhkn4ar0DOiQCq32YUr8q1MJ0XTLG', '1978-06-07 00:00:00', 'Male', '123 aml /md;,s', '110087', 'Delhi NCR', 'Home Services', 'Carpenter', 'kithen and almirha ', '', '', '', '9 Year', 'mukandpur', '12 yeras expriences', 0, 0, 0.0, '', '636c42b70e498c5e88d7ac190ad13e4d.jpg', '35935bdef16969c705631008857717ab.jpg', 'b8b73ffcc403ea271a02be33c8c75db9', '2018-10-25 00:06:48', 1),
(33, 'hare ram', '5689745265', 'fpk17548@awsoo.com', '$2y$10$AwIT1XSLrEG9i.GCOa2Gguu9wmRoEj8AzRy0I9Jrrzs4SFTQh9eMC', '1982-06-08 00:00:00', 'Male', '1234 block', '110042', 'Delhi NCR', 'Home Services', 'Carpenter', 'new making furniture', '', '', '', '7 Year', 'kewal park', ' 500 for 6 hours', 0, 0, 0.0, '', 'e45aa2d0058ea284f19eeb9d2da83714.jpg', '94c129b650ede24299fb00c1df347add.jpg', '6234d01b351693ee2a1dac6fb24af5b4', '2018-10-25 00:16:28', 1),
(34, 'ramkumar', '1234667890', 'jxh79291@awsoo.com', '$2y$10$2ZxFCUc.6mpmWntFdcQchOwIaMHqqrlI8jv/.OZex22EVODh5UwmC', '1968-06-18 00:00:00', 'Male', '13345 blops', '110033', 'Delhi NCR', 'Home Services', 'Carpenter', 'reparing furniture', '', '', '', '10+ Year', 'ashok nagar', '800 per 8 hours', 0, 0, 0.0, '', 'bd519275d110f5287cbb0188f2c2bc4d.jpg', '532686b23ceebae9478b73b566242aaf.jpg', 'da54f5f4e93343bccac4565b79d816e6', '2018-10-25 00:19:24', 1),
(35, 'naresh sharma', '12345678990', 'rsw47071@awsoo.com', '$2y$10$WNJXJtldAOtcRoAmLGfR6ulqZC/RHR3BrRRkvfsE5PtRUpJG80zkm', '1988-06-14 00:00:00', 'Male', 'a blocj', '110025', 'Delhi NCR', 'Home Services', 'Carpenter', 'window and door', '', '', '', '7 Year', 'azadpur', '600 per a day', 0, 0, 0.0, '', '83cbcbf7bd75f2229f1bc44e0414950f.jpg', 'f0f729c2f229c2bd782535f55fcb2a7d.jpg', 'b99b0fd29cf519226f5065e237781266', '2018-10-25 00:34:21', 1),
(36, 'mithun shani', '1334567891', 'gjj35429@nbzmr.com', '$2y$10$5h17f1GcplOGEIy1H56fjuexYmwq.q55ZTa8n.yc3ym0onDaqIWEm', '1990-06-13 00:00:00', 'Male', 'a1323', '110056', 'Delhi NCR', 'Home Services', 'Painter', 'fresh painting', '', '', '', '7 Year', 'majlish park', '1000 per day', 0, 0, 0.0, '', '5e2397a7080f83cdcaaa495cd71dbb33.jpg', 'd9887ddd5cfbd372d04bfd4656005d89.jpg', '2033ce9151bbbdfa6830d78678c20449', '2018-10-25 00:39:34', 1),
(37, 'boran batra', '23658995865', 'iyz73763@ebbob.com', '$2y$10$R893YPJZguEh4FYqIBIM9eJ/pHfoLJkiVjcuZglcvIof.Tw2OOo1u', '1989-11-15 00:00:00', 'Male', '254 g block', '110026', 'Delhi NCR', 'Home Services', 'Painter', 'repair', '', '', '', '8 Year', 'sirspur', '1000 per day', 0, 0, 0.0, '', '8eafc539238c3acd7ea781b43d84c061.jpg', '29237e0302212e0519bc1b00c97fd7cb.jpg', '7d7d1646684a3b90059df8815f347e7e', '2018-10-25 00:46:02', 1),
(38, 'raju khem', '5689412322', 'djq63232@awsoo.com', '$2y$10$8qT3Xrq3p4PirL2b.f7EpulzED.e9nswLzOSjcbtq8YnaXcZmxKDG', '1986-03-25 00:00:00', 'Male', '133 g block', '110033', 'Delhi NCR', 'Home Services', 'Painter', 'desiging painting', '', '', '', '8 Year', 'adharsh nagaer', '1100 for a day', 0, 0, 0.0, '', '8a42e4fe740784728f6bd3aac402d07d.jpg', '99adb8a2c92f910cf11bbeb0f8c90e35.jpg', '909af150811b267249bc782937530cb4', '2018-10-25 02:02:55', 1),
(39, 'gagan sharma', '9876584625', 'uoa52126@awsoo.com', '$2y$10$uEKlB2VUEX30lIfK4kl0bemsxdyqXiZMQVffRtkZcHAcEWgvWFKKC', '1986-06-17 00:00:00', 'Male', '568 g block majlish park', '110056', 'Delhi NCR', 'Home Services', 'Plumber', 'reaparing and insttations', '', '', '', '10+ Year', 'rohini sec 18', '1500 for a day', 0, 0, 0.0, '', 'e6eb4bbdf6e7a60a3f395ebe0e3fc52c.jpg', 'e6aec6a5cde04d901ee5c340ea32de0a.jpg', '85963a031eda7fd8bf467815ec31429a', '2018-10-25 02:05:59', 1),
(40, 'gagan sharma', '9876584625', 'qwj40926@awsoo.com', '$2y$10$3NqTqnCUsfmd4Lhd8x/u6eNAe70zrQ6gF74bUGlBryHDr92mD4GOy', '1986-06-17 00:00:00', 'Male', '568 g block majlish park', '110056', 'Delhi NCR', 'Home Services', 'Plumber', 'reaparing and insttations', '', '', '', '10+ Year', 'rohini sec 18', '1500 for a day', 0, 0, 0.0, '', '3c991b963e0095d72f5bf476705ea914.jpg', '06b724ed99463cde3dccaed4dbd9ab9b.jpg', 'ce00c7e39e3160379cdd664ed4a68719', '2018-10-25 03:56:02', 1),
(41, 'nikhil chopra', '5478963254', 'pjx00081@ebbob.com', '$2y$10$mWr5w5udjMDR/BA8Ps7Z7uq3rCgnMClFPIVCebzM9fzA6nHLR8Xhi', '1993-07-07 00:00:00', 'Male', '568 g block majlish park', '110056', 'Delhi NCR', 'Home Services', 'Plumber', 'all type plumber', '', '', '', '10+ Year', 'azadpur', '5000', 0, 0, 0.0, '', '3a7282ddedc28a99d8e0a8e3dc787f55.jpg', 'd60ec39b0189ce2595a5b361dbac4dee.jpg', 'f9b91e169105c3f525169275cdcb5c84', '2018-10-25 03:58:15', 1),
(42, 'rohit kumar', '1234567895', 'pjx00081@ebbob.com', '$2y$10$3XYfpmzjqZ7f.oB148xzW.jdZiB/ReRlOmv6SAsh7mdV67HJTcIkC', '1989-11-15 00:00:00', 'Male', '568 g block majlish park', '110056', 'Delhi NCR', 'Home Services', 'Plumber', 'plumbing services and insttation', '', '', '', '8 Year', 'aaaaa', 'aqwss', 0, 0, 0.0, '', '82ae350f8af5cbed9de5d0900080143f.jpg', '9a0ad0c4096e1cdf53f5649dc1c42d4e.jpg', '80aa4f5fa7cd37ce05c83dbbd94a9367', '2018-10-25 04:03:14', 1),
(43, 'santosh kumar', '2589678458', 'jxh79291@awsoo.com', '$2y$10$nq8gp0FP/oCtN0xCKt8wB.sRnBI1GRl4qsck6LVtUdgBr6Ze5AwKG', '1987-01-06 00:00:00', 'Male', '568 g block majlish park', '110056', 'Delhi NCR', 'Home Services', 'Plumber', 'all plumbers services', '', '', '', '8 Year', 'aaaaa', 'aaaa', 0, 0, 0.0, '', 'd4f5b3c8b0447461a02e37f2845b2da8.jpg', 'f857fa63feaa2a86e6752927b75b599a.jpg', '1f61dc07e9d2fd83729079e00fb6ba73', '2018-10-25 04:09:31', 1),
(44, 'akshay kumar', '5896321456', 'rsw47071@awsoo.com', '$2y$10$aarpIT3mfLRuqpAuXac3QOG6rFfpas71GJIz0VbTm4qFXEpweoHu6', '1969-07-09 00:00:00', 'Male', '568 g block majlish park', '110056', 'Delhi NCR', 'Home Services', 'Electrician', 'all type', '', '', '', '9 Year', 'saaaa', 'aaaa', 0, 0, 0.0, '', '7df67147ebc300b214dbd4243c274bc0.jpg', '2227dd5f4c510c951b430f0767c66732.jpg', '29201d396aeaa9f2a16e4e84525bc462', '2018-10-25 04:12:52', 1),
(45, 'raj mistri', '5647895623', 'rsw47071@awsoo.com', '$2y$10$cMpWHZ2uyJRx9Wu/pF4nNuiMktfvqiR.P96ZqbilZEjkWa4WEVou6', '1975-09-17 00:00:00', 'Male', '568 g block majlish park', '110056', 'Delhi NCR', 'Home Services', 'Electrician', 'fitting,insttation.', '', '', '', '10 Year', 'aaaa', 'aaaa', 0, 0, 0.0, '', '785b864a7becb3e1802ff834bea603cf.jpg', '97566e73b10e6fae8458ae23b30ddca0.jpg', 'b74d6275ae652a95f2db973185301105', '2018-10-25 04:21:04', 1),
(46, 'sambhu khumbi', '9875869586', 'uoa52126@awsoo.com', '$2y$10$suaiwsIiUU8ZO9LICKvJJ.z8L5V..Va0nqR3AHVCF7r.hivXh.t0i', '1960-03-08 00:00:00', 'Male', '568 g block majlish park', '110056', 'Delhi NCR', 'Home Services', 'Electrician', 'switches fitting,fan ,wire insttation etc', '', '', '', '9 Year', 'aaaa', 'aaaa', 0, 0, 0.0, '', 'cd08baecb8893e6bc79cfef49ac7b83a.jpg', '304b809e5aa0e478e16ea2c1aa1649ce.jpg', 'e6a54712779fa2a7ca02ca2223280d39', '2018-10-25 04:24:08', 1),
(47, 'bavesh joshi', '1234567890', 'pjx00081@ebbob.com', '$2y$10$j0qF6PXjkjq0/a2OKZpCP.rUdxFm2bmGn.HBszOT7LB8qnzaOnMYS', '1975-07-01 00:00:00', 'Male', '568 g block majlish park', '110056', 'Delhi NCR', 'Home Services', 'Electrician', 'all electrical services', '', '', '', '10 Year', 'vvv', 'gi', 0, 0, 0.0, '', 'b7d8f41be7540ef97057d64f758d8d19.jpg', '34cd15a7eed5370c546675dd7bba68e3.jpg', '72ee756b83e38703c209d8723edcdfcd', '2018-10-25 04:38:23', 1),
(48, 'nitish sholanki', '45678912356', 'iyz73763@ebbob.com', '$2y$10$xgfbzkRxQ2j7/HK2XqgSZeQU9L0XZJLePwJA/A6Byj/zy5eEdC4Ey', '1983-04-05 00:00:00', 'Male', '568 g block majlish park', '110056', 'Delhi NCR', 'Home Services', 'Electrician', 'all electrical services', '', '', '', '10 Year', 'ffg', 'zzz', 0, 0, 0.0, '', '8f9030c310d891518e44648abb9b6f30.jpg', '66efc70295fba6bdcd889e562e1883d7.jpg', '67d9d040908875773fc91478ac5ae7fd', '2018-10-25 04:48:15', 1),
(49, 'Jitu sha', '5622895522', 'amitsharma3381@gmail.com', '$2y$10$bM.FoSduPNP8xQkizHFH4OcHr0BglPRNDuXhgkGodag07OzwGJwvW', '1965-10-06 00:00:00', 'Male', 'A-812,block g', '110055', 'Delhi NCR', 'Home Services', 'Electrician', 'Fitting and fan switchs', '', '', '', '10+ Year', 'Aaaaa', 'Aaaa', 0, 0, 0.0, '', '04dfb9d9a19c045a6077fba36f4333cd.jpg', '885b37e3a587846d036071646ac666b8.jpg', 'f5af1bdd135f553338c29f5489a913c2', '2018-10-25 07:38:07', 1),
(50, 'Jitu sha', '5622895522', 'amitsharma3381@gmail.com', '$2y$10$O5bet59lXL4qMy5lzhxXTOsGf21nPVJEk1FHoP35HcPPkLpLZYxeG', '1965-10-06 00:00:00', 'Male', 'A-812,block g', '110055', 'Delhi NCR', 'Home Services', 'Electrician', 'Fitting and fan switchs', '', '', '', '10+ Year', 'Aaaaa', 'Aaaa', 0, 0, 0.0, '', '281aeda924ead653e91583f7fae4f61a.jpg', '137114e13e95673aba620a342cd67f83.jpg', 'd85a4475850d8fbdc1445dd97ac9ed0a', '2018-10-25 07:38:39', 1),
(51, 'ag', '2356897458', 'amitsharma3381@gmail.com', '$2y$10$/9NsT6Q35hOTdukU8o1dVOjznQ4BNaiyT05HMigns5d5AyhnHL5Ku', '1993-12-08 00:00:00', 'Male', 'asd-568,mukandpur', '110042', 'Delhi NCR', 'Wedding/Party', 'DJ', 'adf', '', '', '', '8 Year', 'ashk nagar', '150', 0, 0, 0.0, '', '8daead2ed13ece8a61c05c3df77284e7.jpg', '247515ae952f37010ebee0f51db1dca5.jpg', '1bb114bfc1f02c74ea603d88cc3e3430', '2019-01-30 00:23:16', 0),
(52, 'Prashant Gupta', '8091642060', 'prashant@gmail.com', '$2y$10$1AjGJDRXhHyNqmNkGVJ4.OWF8nigSV6Vt.PbtUdCz92AClRuQqkK2', '1997-02-09 00:00:00', 'Male', 'NITH', '177005', 'Himachal Pradesh', 'Home Services', 'Painter', 'House', 'Interiors', 'New/Fresh', 'Painter Only', '30-40 Year', 'whenwing', 'Good', 0, 0, 0.0, '', '1f65a1fab2db52747ca94371526f13d3.png', '2150e11ce5f9b71c0c6d8757100441c4.png', '58e61d05e6ae5eeb4d223be30cb62609', '2019-04-20 17:27:56', 0),
(53, 'Akanksha', '45632178963', 'hgasjf@gmail.com', '$2y$10$xOhsD50DlRjbHX/3nDiU4e6Gbw5rV7eIsptsx/HoezngLvH8yZiu.', '1999-02-02 00:00:00', 'Female', 'jkhgsdf', '346465', 'Himachal Pradesh', 'Home Services', 'Painter', 'House', 'Interiors', 'New/Fresh', 'Painter Only', '3-5 Year', 'whenwing', 'asdfawg', 3409, 0, 0.0, '', '258cdc5212deb409c63823a23fe21291.png', '301fb4d4dfc18d9b2031d322e679d940.png', 'ebe2a86354a8ff722d39720a2db5836e', '2019-04-20 17:42:29', 0),
(54, 'Akanksha', '45632178963', 'hgasjf@gmail.com', '$2y$10$V6QLDb.O9ArdH9bXTDTMM.C/s9sUaKna3RzI9t8TCvn8upBGtN7Dq', '1999-02-02 00:00:00', 'Female', 'jkhgsdf', '346465', 'Himachal Pradesh', 'Home Services', 'Carpenter', 'Bed', 'Repair', '', 'Helper', '3-5 Year', 'whenwing', 'asdfawg', 3409, 0, 0.0, '', 'c0add30498fda720331a32193123d2fa.png', '72af73c25eff7f143e4438f90a403a43.png', '791095f8c57228fece8a6d55244dbc67', '2019-04-20 17:44:20', 0),
(55, 'Akanksha', '45632178963', 'hgasjf@gmail.com', '$2y$10$sP9ei8K4QA/DZK7B0Al8iOiX9bZo4v.aQfXgmKaOn3UvehipgziUG', '1999-02-02 00:00:00', 'Female', 'jkhgsdf', '346465', 'Himachal Pradesh', 'Home Services', 'Electrician', 'Repair', 'House', '', '', '3-5 Year', 'whenwing', 'asdfawg', 3409, 0, 0.0, '', '31868d8a06535cc00b71af0881f94bd6.png', '7473d3cf6d9ef12c2b3e492d9dc1481b.png', '5efabde71615c8a95229f99d9ce38e7e', '2019-04-20 17:47:35', 0),
(56, 'Prashant Gupta', '7018401379', 'prashant2063@gmail.com', '$2y$10$deG4XTvyVpppHD3isCgMt.4W9m/Sr9spTlTW6cAuRnlXzBUVrQFyG', '1997-02-09 00:00:00', 'Male', 'NITH', '177005', 'Himachal Pradesh', 'Home Services', 'Painter', 'House', 'Interiors', 'New/Fresh', 'Painter Only', '1-3 Year', 'NITHNITHNITHNITHNITHNITH', 'sadgv', 3589, 0, 0.0, '', '4e49a1a80d8d2879f5ccb9459560f1d5.png', 'd728c9cbbfcb4a540a837638d0131b9f.png', '5afdce2205eede039bfe309bb2033ef4', '2019-04-20 23:43:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ww_prov_extra`
--

CREATE TABLE `ww_prov_extra` (
  `e_id` int(11) NOT NULL,
  `prov_hash` varchar(32) NOT NULL,
  `f1` varchar(300) NOT NULL,
  `f2` varchar(300) NOT NULL,
  `f3_pic` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ww_prov_extra`
--

INSERT INTO `ww_prov_extra` (`e_id`, `prov_hash`, `f1`, `f2`, `f3_pic`) VALUES
(1, 'd38365391f784863e17c0b4b8bff6fea', 'Bike', 'dsadasdad', 'dea0bd236ac668e2e87810ac329af4b9.png'),
(2, '73b8768d8fe7980463153c1d70342142', 'Car', 'cghcc', 'd374689131a2bceb76e3fbb2ff92fa04.png'),
(5, '8ea73712e9286992b10fad0223981c1e', 'Bike', 'asjdnaskjnd', '12339c594324c6236f599b11bbb2bfe8.png'),
(6, '044cd947fc743950394151e1990c9d74', 'b.tech', 'Webcam', 'bae056cf5f36c8744daba4adc59d46e7.jpg'),
(7, '1e3b6ca607125d54a2878ece99baccad', 'sadasdhaj', 'Webcam', 'f4927376417deb81177ac8f2efc95b68.png'),
(8, '8c0070696daeb8e28cb0cbeff77e7e94', 'B. Tech', 'All', '6c2712a89c67f28d1fb4ec9713ccbb4b.jpg'),
(9, 'a82d81d5bb4741f3e2bd9cc1e3a95cbc', 'B. Tech', 'All', 'dd68568759d98bbaccc66ae2d0fa05fb.png'),
(10, '33b79b334474982d2c4b2fcf4edf44d5', 'Mba', 'All', '3dc68cf8d46800ef2739a66375659f37.png'),
(11, '792622f1ef121d03d81e5d5748abc9b1', 'Car', '2019', '6d422d097f1c14b35cb0b3e799ff6fc9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ww_prov_verification`
--

CREATE TABLE `ww_prov_verification` (
  `prov_id` int(11) NOT NULL,
  `email` tinyint(1) NOT NULL DEFAULT '0',
  `previous_records` tinyint(1) NOT NULL DEFAULT '0',
  `id_proof` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ww_prov_worksamples`
--

CREATE TABLE `ww_prov_worksamples` (
  `prov_id` int(10) NOT NULL,
  `prov_worksample` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forgot_pwd_token`
--
ALTER TABLE `forgot_pwd_token`
  ADD PRIMARY KEY (`fp_token_id`);

--
-- Indexes for table `prov_forgot_pwd_token`
--
ALTER TABLE `prov_forgot_pwd_token`
  ADD PRIMARY KEY (`fp_token_id`);

--
-- Indexes for table `ww_customers`
--
ALTER TABLE `ww_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ww_customers_social`
--
ALTER TABLE `ww_customers_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ww_customer_order`
--
ALTER TABLE `ww_customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `ww_cust_order_ext`
--
ALTER TABLE `ww_cust_order_ext`
  ADD PRIMARY KEY (`ext_id`);

--
-- Indexes for table `ww_provider`
--
ALTER TABLE `ww_provider`
  ADD PRIMARY KEY (`prov_id`);

--
-- Indexes for table `ww_prov_extra`
--
ALTER TABLE `ww_prov_extra`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `ww_prov_verification`
--
ALTER TABLE `ww_prov_verification`
  ADD UNIQUE KEY `prov_id` (`prov_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forgot_pwd_token`
--
ALTER TABLE `forgot_pwd_token`
  MODIFY `fp_token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prov_forgot_pwd_token`
--
ALTER TABLE `prov_forgot_pwd_token`
  MODIFY `fp_token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ww_customers`
--
ALTER TABLE `ww_customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ww_customers_social`
--
ALTER TABLE `ww_customers_social`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ww_customer_order`
--
ALTER TABLE `ww_customer_order`
  MODIFY `order_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ww_cust_order_ext`
--
ALTER TABLE `ww_cust_order_ext`
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ww_provider`
--
ALTER TABLE `ww_provider`
  MODIFY `prov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `ww_prov_extra`
--
ALTER TABLE `ww_prov_extra`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
