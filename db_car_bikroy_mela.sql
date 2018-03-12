-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 07:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_car_bikroy_mela`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus_choose_us`
--

CREATE TABLE `tbl_aboutus_choose_us` (
  `choose_us_id` int(3) NOT NULL,
  `choose_details` text NOT NULL,
  `reason_one` varchar(256) NOT NULL,
  `reason_two` varchar(256) NOT NULL,
  `reason_three` varchar(256) NOT NULL,
  `reason_four` varchar(256) NOT NULL,
  `reason_five` varchar(256) NOT NULL,
  `reason_six` varchar(256) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aboutus_choose_us`
--

INSERT INTO `tbl_aboutus_choose_us` (`choose_us_id`, `choose_details`, `reason_one`, `reason_two`, `reason_three`, `reason_four`, `reason_five`, `reason_six`, `publication_status`) VALUES
(1, 'urabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus etyd nunc. Nunc consequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet sed consectetur adipisicing elit sed do eiusmod.Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus etyd nunc. Nunc consequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet sed consectetur adipisicing elit sed do eiusmod.', 'DDonec facilisis velit eu est phasellus consequat quis nostrud ', 'Donec facilisis velit eu est phasellus consequat quis nostrud ', 'Donec facilisis velit eu est phasellus consequat quis nostrud ', 'Donec facilisis velit eu est phasellus consequat quis nostrud ', 'Donec facilisis velit eu est phasellus consequat quis nostrud ', 'Donec facilisis velit eu est phasellus consequat quis nostrud ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus_rules`
--

CREATE TABLE `tbl_aboutus_rules` (
  `rules_id` int(3) NOT NULL,
  `rules_details` text NOT NULL,
  `rules_one` varchar(100) NOT NULL,
  `rules_two` varchar(100) NOT NULL,
  `rules_three` varchar(100) NOT NULL,
  `rules_four` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aboutus_rules`
--

INSERT INTO `tbl_aboutus_rules` (`rules_id`, `rules_details`, `rules_one`, `rules_two`, `rules_three`, `rules_four`, `video`, `publication_status`) VALUES
(1, 'LLorem ipsum dolor sit amet, consectetur corporis lab. Architecto, maiores, similique, eos, ea doloribus nihil accusantium fuga numquam corporis nostrum eligendi nemo sapiente quibusdam consequuntur tempore. Suscipit.', 'BBolutpat luctus lacus hendrerit taciti lobortis in. ', 'Volutpat luctus lacus hendrerit taciti lobortis in. ', 'Volutpat luctus lacus hendrerit taciti lobortis in. ', 'Volutpat luctus lacus hendrerit taciti lobortis in. ', 'https://www.youtube.com/embed/0DS9PY6iaxE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus_service`
--

CREATE TABLE `tbl_aboutus_service` (
  `service_id` int(3) NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_desc` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aboutus_service`
--

INSERT INTO `tbl_aboutus_service` (`service_id`, `service_icon`, `service_title`, `service_desc`, `publication_status`) VALUES
(1, 'glyphicon glyphicon-hdd', 'Car Space', 'We have enough Space for keep your car. We Have nearly 300 hundred car space in our car bikroy mela.', 1),
(2, 'glyphicon glyphicon-fast-backward', 'Papers Security', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 1),
(3, 'glyphicon glyphicon-align-justify', 'Money Secury', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 1),
(4, 'glyphicon glyphicon-print', 'Car Security', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 1),
(5, 'glyphicon glyphicon-home', 'On Time Delivery', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 1),
(6, 'glyphicon glyphicon-user', 'Name Transfer', 'If you want, Car bikroy mela take your name transfer responsibility. But you pay the cost for this.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus_team`
--

CREATE TABLE `tbl_aboutus_team` (
  `team_member_id` int(3) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_designation` varchar(100) NOT NULL,
  `member_sort_desc` text NOT NULL,
  `facebook_link` varchar(200) NOT NULL,
  `twitter_link` varchar(200) NOT NULL,
  `linkedin_link` varchar(200) NOT NULL,
  `googleplus_link` varchar(200) NOT NULL,
  `member_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aboutus_team`
--

INSERT INTO `tbl_aboutus_team` (`team_member_id`, `member_name`, `member_designation`, `member_sort_desc`, `facebook_link`, `twitter_link`, `linkedin_link`, `googleplus_link`, `member_image`, `publication_status`) VALUES
(1, 'Joy Mahmud', 'Sell Executive.', 'He is one of the Best Sell Executive in our Car Bikroy Mela. He always keep himself in work. He is very helpfull with customer serveice.', 'https://www.facebook.com/joymahmud271', 'https://twitter.com/joymahmud2711', 'https://www.linkedin.com/in/joy-mahmud-145525b4/', 'https://plus.google.com/109477829840930652915?hl=tr', '../../../mainSite/assets/team_member_image/joy.jpg', 1),
(2, 'Akash Islam', 'Sr. Sell Executive', 'He is one of the Best Sell Executive in our Car Bikroy Mela. He always keep himself in work. He is very helpfull with customer serveice.', 'https://www.facebook.com/joymahmud271', 'https://twitter.com/joymahmud2711', 'https://www.linkedin.com/in/joy-mahmud-145525b4/', 'https://plus.google.com/109477829840930652915?hl=tr', '../../../mainSite/assets/team_member_image/akash.jpg', 1),
(3, 'Pranto Roy', 'Field Visitor', 'He is one of the Best Field Visitor in our Car Bikroy Mela. He always keep himself in work. He is very helpfull with customer serveice.', 'https://www.facebook.com/joymahmud271', 'https://twitter.com/joymahmud2711', 'https://www.linkedin.com/in/joy-mahmud-145525b4/', 'https://plus.google.com/109477829840930652915?hl=tr', '../../../mainSite/assets/team_member_image/Pranto.jpg', 1),
(4, 'Mahbub Mourshed ', 'Director', 'He is one of the Director of our Car Bikroy Mela. He always keep himself in work. He is very helpfull with customer serveice.', 'https://www.facebook.com/joymahmud271', 'https://twitter.com/joymahmud2711', 'https://www.linkedin.com/in/joy-mahmud-145525b4/', 'https://plus.google.com/109477829840930652915?hl=tr', '../../../mainSite/assets/team_member_image/Rubel Mahmud.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE `tbl_admin_login` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`admin_id`, `admin_name`, `email_address`, `password`) VALUES
(1, 'Joy Mahmud', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_post`
--

CREATE TABLE `tbl_blog_post` (
  `blog_post_id` int(3) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_details` text NOT NULL,
  `related_topic` varchar(100) NOT NULL,
  `post_Date` varchar(100) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_blog_post`
--

INSERT INTO `tbl_blog_post` (`blog_post_id`, `post_title`, `post_details`, `related_topic`, `post_Date`, `post_image`, `publication_status`) VALUES
(2, 'Will the Patent Wars Kill the Self-Driving Car?', 'Please type the complete vehicle number in the given format to get the vehicle owner, RTO, address location information.You can Find, trace and track any vehicle number in India by just entering RTO Registration and vehicle number. Findandtrace finds the Indian State, District, City and area details of the Vehicle, registered with RTO office. If you are not getting the desired trace vehicle location, please feel free to write us. ! Findandtrace.com is the right place to locate any vehicle number with complete and latest information as per public records. So Tracking the vehicle location is very easy and simple now, Have great vehicle tracking ! You may find the answers in our site for following questions about vehicle tracking with RTO information or registration details. How Do i trace / find the Vehicle Owner / RTO information for any state ? How to locate the Vehicle Owner ? , How to launch complaint about the vehicle owner for rash driving ?, where i can get the name , address, area , city of the vehicle owner or company. By getting the RTO information, You can collect the Year of manufacturing, engine, chassis number, vehicle type, Condition , Insurance online , etc. Findandtrace is the best place to get the vehicle information for free.', 'Travel,Technology', '13 Aug 2017', '../../../mainSite/assets/blog_post_image/9.jpg', 1),
(3, '2019 Mazda 3 coming with world-first HCCI tech', 'Much like diesels, CHIC engines rely on sparkles ignition via compression, but they run strictly on gasoline. Their efficiency comes from burning a homogeneous mix of and air and fuel at lower temperatures, which ends up reducing much of the heat energy lost in a normal gasoline engine and can see fuel consumption reduced by as much as 30 percent. The process also produces much fewer emissions.\r\n\r\nThe main problem is the specific temperature needed for smooth operation. Too cold and it affects the performance of the ignition system. Too hot and you end up with engine knock. CHIC engines also tend to wear out faster. To get around the temperature problem, Mazda CHIC engine is expected to be capable of conventional spark plug ignition when necessary, such as during cold starts.', 'Journey,Raceing,Invention', '13 Aug 2017', '../../../mainSite/assets/blog_post_image/7.jpg', 1),
(4, '6 most dependable suvs', 'No one wants to drive a car that has trouble, which is why dependability is one of the most important characteristics for car shoppers. Thatâ€™s why J.D. Powerâ€™s 2016 annual U.S. Vehicle Dependability Study is of such interest to so many consumers.\r\nIn its 27th year, the auto research firm surveyed 33,560 original owners of 2013 model-year cars after 3 years of ownership about the problems they had experienced. Six SUV were awarded with top honors in dependability in this yearâ€™s study. See which autos won in each category, as well as how J.D. Power rated them for overall quality, performance and design.\r\nNo one wants to drive a car that has trouble, which is why dependability is one of the most important characteristics for car shoppers. Thatâ€™s why J.D. Powerâ€™s 2016 annual U.S. Vehicle Dependability Study is of such interest to so many consumers.\r\n\r\nIn its 27th year, the auto research firm surveyed 33,560 original owners of 2013 model-year cars after 3 years of ownership about the problems they had experienced. Six SUV were awarded with top honors in dependability in this yearâ€™s study. See which autos won in each category, as well as how J.D. Power rated them for overall quality, performance and design.', 'Journey,Raceing,Invention', '14 Aug 2017', '../../../mainSite/assets/blog_post_image/8.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_feedback`
--

CREATE TABLE `tbl_client_feedback` (
  `client_feedback_id` int(3) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_type` varchar(100) NOT NULL,
  `feeadback_message` text NOT NULL,
  `client_image` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_client_feedback`
--

INSERT INTO `tbl_client_feedback` (`client_feedback_id`, `client_name`, `client_type`, `feeadback_message`, `client_image`, `publication_status`) VALUES
(1, 'Joy Mahmud', 'Sell Executive', 'Car Bikroy Mela is one of the Best Place for buy and sell in Bangladesh. The Management Authority is very helpful in their responsibility. Here have a strong security for buy and sell a car. Most of the people have satisfaction with Car Bikroy Mela. I always pray to Allah as if they can develop day by day and keep their Popularity. ', 'assets/client_feedback_image/joy.jpg', 1),
(2, 'Akash Islam', 'Car Seller', 'Car Bikroy Mela is one of the Best Place for buy and sell in Bangladesh. The Management Authority is very helpful in their responsibility. Here have a strong security for buy and sell a car. Most of the people have satisfaction with Car Bikroy Mela. I always pray to Allah as if they can develop day by day and keep their Popularity. ', 'assets/client_feedback_image/akash.jpg', 1),
(3, 'Pranto Roy', 'Car Dealer', 'Car Bikroy Mela is one of the Best Place for buy and sell in Bangladesh. The Management Authority is very helpful in their responsibility. Here have a strong security for buy and sell a car. Most of the people have satisfaction with Car Bikroy Mela. I always pray to Allah as if they can develop day by day and keep their Popularity. ', 'assets/client_feedback_image/Pranto.jpg', 1),
(4, 'Mahbub Hossain', 'Car Seller', 'Car Bikroy Mela is one of the Best Place for buy and sell in Bangladesh. The Management Authority is very helpful in their responsibility. Here have a strong security for buy and sell a car. Most of the people have satisfaction with Car Bikroy Mela. I always pray to Allah as if they can develop day by day and keep their Popularity. ', 'assets/client_feedback_image/1.jpg', 1),
(5, 'Minhaz Islam', 'Car Buyer', 'Car Bikroy Mela is one of the Best Place for buy and sell in Bangladesh. The Management Authority is very helpful in their responsibility. Here have a strong security for buy and sell a car. Most of the people have satisfaction with Car Bikroy Mela. I always pray to Allah as if they can develop day by day and keep their Popularity.', 'assets/client_feedback_image/01 (1).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us_address`
--

CREATE TABLE `tbl_contact_us_address` (
  `contact_address_id` int(3) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact_us_address`
--

INSERT INTO `tbl_contact_us_address` (`contact_address_id`, `address`, `mobile`, `email`) VALUES
(1, '17/KA, (1st Floor), P.C Culture Housing Society Ring Road, Shamoly, Dhaka.', '+880 1787528157', 'credencltd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us_form`
--

CREATE TABLE `tbl_contact_us_form` (
  `contact_form_id` int(3) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `your_website` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact_us_form`
--

INSERT INTO `tbl_contact_us_form` (`contact_form_id`, `full_name`, `email`, `phone_number`, `your_website`, `message`) VALUES
(1, 'Joy Mahmud', 'joymahmud@gmail.com', '01737113815', 'www.facebook.com', 'I want to meet with your team for a big opportunity . Basically i want to donate a lot of money for your Car bikroy Mela as if the company increase another one step.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us_social_address`
--

CREATE TABLE `tbl_contact_us_social_address` (
  `social_address_id` int(3) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `googleplus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact_us_social_address`
--

INSERT INTO `tbl_contact_us_social_address` (`social_address_id`, `facebook`, `twitter`, `linkedin`, `googleplus`) VALUES
(1, 'https://www.facebook.com/joymahmud271', 'https://twitter.com/joymahmud2711', 'https://www.linkedin.com/in/joy-mahmud-145525b4/', 'https://plus.google.com/109477829840930652915?hl=tr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_post`
--

CREATE TABLE `tbl_user_post` (
  `user_post_id` int(4) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `car_price` varchar(100) NOT NULL,
  `car_details` text NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `car_registration` varchar(100) NOT NULL,
  `cng_status` varchar(100) NOT NULL,
  `cng_com` varchar(100) NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `car_cc` varchar(100) NOT NULL,
  `gear` varchar(100) NOT NULL,
  `all_option` varchar(100) NOT NULL,
  `music` varchar(100) NOT NULL,
  `serial_number` varchar(100) NOT NULL,
  `engine` varchar(100) NOT NULL,
  `mileage` varchar(100) NOT NULL,
  `doors` varchar(100) NOT NULL,
  `condtion` varchar(100) NOT NULL,
  `passenger` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `others` varchar(256) NOT NULL,
  `car_image` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_post`
--

INSERT INTO `tbl_user_post` (`user_post_id`, `car_name`, `car_price`, `car_details`, `car_model`, `car_registration`, `cng_status`, `cng_com`, `fuel_type`, `car_cc`, `gear`, `all_option`, `music`, `serial_number`, `engine`, `mileage`, `doors`, `condtion`, `passenger`, `color`, `others`, `car_image`, `publication_status`) VALUES
(17, 'Allion', '120000', 'Please type the complete vehicle number in the given format to get the vehicle owner, RTO, address location information.You can Find, trace and track any vehicle number in India by just entering RTO Registration and vehicle number. Findandtrace finds the Indian State, District, City and area details of the Vehicle, registered with RTO office. If you are not getting the desired trace vehicle location, please feel free to write us. ! Findandtrace.com is the right place to locate any vehicle number with complete and latest information as per public records. So Tracking the vehicle location is very easy and simple now, Have great vehicle tracking ! You may find the answers in our site for following questions about vehicle tracking with RTO information or registration details. How Do i trace / find the Vehicle Owner / RTO information for any state ? How to locate the Vehicle Owner ? , How to launch complaint about the vehicle owner for rash driving ?, where i can get the name , address, area , city of the vehicle owner or company. By getting the RTO information, You can collect the Year of manufacturing, engine, chassis number, vehicle type, Condition , Insurance online , etc. Findandtrace is the best place to get the vehicle information for free.', '2004', '2010', 'Yes', 'Southern', 'Gas,Diesel', '1500', 'Auto', 'Manual', 'DVD', '1012-15', 'VVTI', '120000', '4', 'Second Hand', '8', 'Black', 'Air Conditioning,Alarm System,Audio Interface,Bluetooth,Reversing Camera', '1.jpg', 1),
(18, 'Probox', '680000', 'Please type the complete vehicle number in the given format to get the vehicle owner, RTO, address location information.You can Find, trace and track any vehicle number in India by just entering RTO Registration and vehicle number. Findandtrace finds the Indian State, District, City and area details of the Vehicle, registered with RTO office. If you are not getting the desired trace vehicle location, please feel free to write us. ! Findandtrace.com is the right place to locate any vehicle number with complete and latest information as per public records. So Tracking the vehicle location is very easy and simple now, Have great vehicle tracking ! You may find the answers in our site for following questions about vehicle tracking with RTO information or registration details. How Do i trace / find the Vehicle Owner / RTO information for any state ? How to locate the Vehicle Owner ? , How to launch complaint about the vehicle owner for rash driving ?, where i can get the name , address, area , city of the vehicle owner or company. By getting the RTO information, You can collect the Year of manufacturing, engine, chassis number, vehicle type, Condition , Insurance online , etc. Findandtrace is the best place to get the vehicle information for free.', '2006', '2008', 'No', 'Navana', 'Gas', '2000', 'Auto', 'Manual', 'CD', '2050-80', 'EFI', '120000', '6', 'Brand New', '6', 'White', 'Air Conditioning,Alarm System,Bluetooth,CD/DVD Autochanger', '2.jpg', 1),
(19, 'Axio', '1500000', 'Please type the complete vehicle number in the given format to get the vehicle owner, RTO, address location information.You can Find, trace and track any vehicle number in India by just entering RTO Registration and vehicle number. Findandtrace finds the Indian State, District, City and area details of the Vehicle, registered with RTO office. If you are not getting the desired trace vehicle location, please feel free to write us. ! Findandtrace.com is the right place to locate any vehicle number with complete and latest information as per public records. So Tracking the vehicle location is very easy and simple now, Have great vehicle tracking ! You may find the answers in our site for following questions about vehicle tracking with RTO information or registration details. How Do i trace / find the Vehicle Owner / RTO information for any state ? How to locate the Vehicle Owner ? , How to launch complaint about the vehicle owner for rash driving ?, where i can get the name , address, area , city of the vehicle owner or company. By getting the RTO information, You can collect the Year of manufacturing, engine, chassis number, vehicle type, Condition , Insurance online , etc. Findandtrace is the best place to get the vehicle information for free.', '2010', '2016', 'Yes', 'Southern', 'Gas', '1000', 'Auto', 'Auto', 'DVD', '2050-80', 'EFI', '123000', '4', 'Second Hand', '6', 'Black', 'Air Conditioning,Alarm System,Bluetooth,Voice Control System', '3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_signup`
--

CREATE TABLE `tbl_user_signup` (
  `user_id` int(3) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Confirm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_signup`
--

INSERT INTO `tbl_user_signup` (`user_id`, `first_name`, `last_name`, `email`, `password`, `Confirm`) VALUES
(5, 'Joy', 'Mahmud', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Tamjid', 'Rokon', 'admin2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aboutus_choose_us`
--
ALTER TABLE `tbl_aboutus_choose_us`
  ADD PRIMARY KEY (`choose_us_id`);

--
-- Indexes for table `tbl_aboutus_rules`
--
ALTER TABLE `tbl_aboutus_rules`
  ADD PRIMARY KEY (`rules_id`);

--
-- Indexes for table `tbl_aboutus_service`
--
ALTER TABLE `tbl_aboutus_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_aboutus_team`
--
ALTER TABLE `tbl_aboutus_team`
  ADD PRIMARY KEY (`team_member_id`);

--
-- Indexes for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_blog_post`
--
ALTER TABLE `tbl_blog_post`
  ADD PRIMARY KEY (`blog_post_id`);

--
-- Indexes for table `tbl_client_feedback`
--
ALTER TABLE `tbl_client_feedback`
  ADD PRIMARY KEY (`client_feedback_id`);

--
-- Indexes for table `tbl_contact_us_address`
--
ALTER TABLE `tbl_contact_us_address`
  ADD PRIMARY KEY (`contact_address_id`);

--
-- Indexes for table `tbl_contact_us_form`
--
ALTER TABLE `tbl_contact_us_form`
  ADD PRIMARY KEY (`contact_form_id`);

--
-- Indexes for table `tbl_contact_us_social_address`
--
ALTER TABLE `tbl_contact_us_social_address`
  ADD PRIMARY KEY (`social_address_id`);

--
-- Indexes for table `tbl_user_post`
--
ALTER TABLE `tbl_user_post`
  ADD PRIMARY KEY (`user_post_id`);

--
-- Indexes for table `tbl_user_signup`
--
ALTER TABLE `tbl_user_signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aboutus_choose_us`
--
ALTER TABLE `tbl_aboutus_choose_us`
  MODIFY `choose_us_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_aboutus_rules`
--
ALTER TABLE `tbl_aboutus_rules`
  MODIFY `rules_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_aboutus_service`
--
ALTER TABLE `tbl_aboutus_service`
  MODIFY `service_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_aboutus_team`
--
ALTER TABLE `tbl_aboutus_team`
  MODIFY `team_member_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_blog_post`
--
ALTER TABLE `tbl_blog_post`
  MODIFY `blog_post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_client_feedback`
--
ALTER TABLE `tbl_client_feedback`
  MODIFY `client_feedback_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_contact_us_address`
--
ALTER TABLE `tbl_contact_us_address`
  MODIFY `contact_address_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_contact_us_form`
--
ALTER TABLE `tbl_contact_us_form`
  MODIFY `contact_form_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_contact_us_social_address`
--
ALTER TABLE `tbl_contact_us_social_address`
  MODIFY `social_address_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user_post`
--
ALTER TABLE `tbl_user_post`
  MODIFY `user_post_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_user_signup`
--
ALTER TABLE `tbl_user_signup`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
