-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2019 at 09:48 PM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iadpindi_iadp`
--

-- --------------------------------------------------------

--
-- Table structure for table `crusherdetails`
--

CREATE TABLE `crusherdetails` (
  `srno` int(50) NOT NULL,
  `inorout` varchar(10) NOT NULL,
  `vehicleno` varchar(50) NOT NULL,
  `material` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `quantityunit` varchar(10) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) NOT NULL,
  `date1` date NOT NULL,
  `intime` varchar(50) NOT NULL,
  `outime` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crusherdetails`
--

INSERT INTO `crusherdetails` (`srno`, `inorout`, `vehicleno`, `material`, `quantity`, `quantityunit`, `agency`, `fname`, `mname`, `lname`, `date1`, `intime`, `outime`, `author`) VALUES
(1, 'IN', 'MH-12 AB-1234', 'Dubber', '20', 'Brass', 'Shiv', 'CHETAN', '', 'PAWAR', '2018-09-26', '01:00', '02:00', 'admin'),
(2, 'IN', 'MH-12 AB-1111', 'Crush', '1', 'Ton', 'Esgdg', 'A', '', 'B', '2018-09-26', '14:00', '15:00', 'admin'),
(3, 'IN', 'MH-12 AB-1112', 'BM', '7', 'Ton', 'A', 'CHETAN', '', 'PAWAR', '2018-09-26', '01:00', '02:00', 'admin'),
(4, 'OUT', 'MH 12 AB 1234', 'Cement', '20', 'Brass', 'Esgdg', 'CHETAN', '', 'PAWAR', '2018-09-26', '01:00', '01:03', 'admin'),
(5, 'OUT', 'MH12BH1254', 'Crush', '12', 'Brass', 'Fargade', 'Dnyaneshwar ', 'Ashok', 'Sanap', '2018-09-26', '21:08', '22:08', 'admin '),
(6, 'IN', 'MH12BH1254', 'Cement', '50', 'Brass', 'Fargade', 'Dnyaneshwar ', '', 'Sanap', '2018-09-26', '23:46', '23:51', 'admin '),
(7, 'OUT', 'MH12GH1425', '40 mm', '6', 'Brass', 'Fargade', 'Avinash', 'Saste', 'Saste', '2018-09-27', '09:09', '08:15', 'admin'),
(8, 'OUT', 'MH 12 AB 1234', '40 mm', '20', 'Brass', 'Shiv', 'CHETAN', 'Q', 'PAWAR', '2018-11-04', '15:20', '18:30', 'admin'),
(9, 'IN', 'MH12JZ4659', '10 mm', '12', 'Ton', 'Mepa', 'Chetan Pawar', '', 'PAWAR', '2019-03-27', '23:06', '23:10', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `crusherlogin`
--

CREATE TABLE `crusherlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crusherlogin`
--

INSERT INTO `crusherlogin` (`username`, `password`, `fname`, `mname`, `lname`, `email`, `phoneno`, `type`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'a', 'b', 'c', 'd', 1234567890, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `sr_no` int(100) NOT NULL,
  `aadhar_no` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `village` varchar(20) NOT NULL,
  `taluka` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `state` varchar(20) NOT NULL,
  `age` varchar(2) NOT NULL,
  `contact1` varchar(20) NOT NULL,
  `contact2` varchar(20) NOT NULL,
  `family_mem` varchar(2) NOT NULL,
  `land` varchar(20) NOT NULL,
  `land_type` varchar(20) NOT NULL,
  `gross_income` varchar(20) NOT NULL,
  `soil_tested` varchar(20) NOT NULL,
  `soiltestcom` varchar(20) NOT NULL DEFAULT 'No',
  `already_owned` varchar(100) NOT NULL,
  `horti_help` varchar(20) NOT NULL,
  `horti_amt` varchar(20) NOT NULL,
  `hortihelpcom` varchar(20) NOT NULL DEFAULT 'No',
  `dairy_help` varchar(20) NOT NULL,
  `dairy_amt` varchar(20) NOT NULL,
  `dairyhelpcom` varchar(20) NOT NULL DEFAULT 'No',
  `poultry_help` varchar(20) NOT NULL,
  `poultry_amt` varchar(20) NOT NULL,
  `poultryhelpcom` varchar(20) NOT NULL DEFAULT 'No',
  `fishery_help` varchar(20) NOT NULL,
  `fishery_amt` varchar(20) NOT NULL,
  `fisheryhelpcom` varchar(20) NOT NULL DEFAULT 'No',
  `ah_help` varchar(20) NOT NULL,
  `ah_amt` varchar(20) NOT NULL,
  `ahhelpcom` varchar(20) NOT NULL DEFAULT 'No',
  `mm` varchar(60) NOT NULL,
  `mm_amt` varchar(20) NOT NULL,
  `mmhelpcom` varchar(20) NOT NULL DEFAULT 'No',
  `month_expenses` varchar(20) NOT NULL,
  `total_income` varchar(20) NOT NULL,
  `sources` varchar(80) NOT NULL,
  `loan_taken` varchar(20) NOT NULL,
  `loan_amt` varchar(20) NOT NULL,
  `loan_installment` varchar(10) NOT NULL,
  `loan_need` varchar(20) NOT NULL,
  `amt_need` varchar(20) NOT NULL,
  `loan_purpose` varchar(50) NOT NULL,
  `taking_edu1` varchar(10) NOT NULL,
  `taking_edu2` varchar(20) NOT NULL,
  `taking_edu3` varchar(20) NOT NULL,
  `edu_type1` varchar(20) NOT NULL,
  `edu_type2` varchar(20) NOT NULL,
  `edu_type3` varchar(20) NOT NULL,
  `get_schship` varchar(20) NOT NULL,
  `get_schship_amt` varchar(6) NOT NULL,
  `need_schship` varchar(20) NOT NULL,
  `need_schship_amt` varchar(6) NOT NULL,
  `needschamthelpcom` varchar(20) NOT NULL DEFAULT 'No',
  `employed1` varchar(20) NOT NULL,
  `employed2` varchar(20) NOT NULL,
  `need_job1` varchar(20) NOT NULL,
  `need_job2` varchar(20) NOT NULL,
  `job_needy_edu1` varchar(20) NOT NULL,
  `job_needy_edu2` varchar(20) NOT NULL,
  `jobneedyhelpcom` varchar(20) NOT NULL DEFAULT 'No',
  `self_employed` varchar(20) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `who_selfemp1` varchar(20) NOT NULL,
  `who_selfemp2` varchar(20) NOT NULL,
  `need_selfb` varchar(20) NOT NULL,
  `which_selfb` varchar(20) NOT NULL,
  `selfb_help_type` varchar(20) NOT NULL,
  `selfb_invest` varchar(20) NOT NULL,
  `selfbhelpcom` varchar(20) NOT NULL DEFAULT 'No',
  `return_policy` varchar(20) NOT NULL,
  `health_help1` varchar(20) NOT NULL,
  `health_help2` varchar(20) NOT NULL,
  `health_help_type` varchar(30) NOT NULL,
  `health_help_cost` varchar(20) NOT NULL,
  `healthelpcom` varchar(20) NOT NULL DEFAULT 'No',
  `other_help` varchar(20) NOT NULL,
  `liveli_status` varchar(300) NOT NULL,
  `improvements` varchar(300) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `complete` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`sr_no`, `aadhar_no`, `fname`, `mname`, `lname`, `address`, `village`, `taluka`, `district`, `pincode`, `state`, `age`, `contact1`, `contact2`, `family_mem`, `land`, `land_type`, `gross_income`, `soil_tested`, `soiltestcom`, `already_owned`, `horti_help`, `horti_amt`, `hortihelpcom`, `dairy_help`, `dairy_amt`, `dairyhelpcom`, `poultry_help`, `poultry_amt`, `poultryhelpcom`, `fishery_help`, `fishery_amt`, `fisheryhelpcom`, `ah_help`, `ah_amt`, `ahhelpcom`, `mm`, `mm_amt`, `mmhelpcom`, `month_expenses`, `total_income`, `sources`, `loan_taken`, `loan_amt`, `loan_installment`, `loan_need`, `amt_need`, `loan_purpose`, `taking_edu1`, `taking_edu2`, `taking_edu3`, `edu_type1`, `edu_type2`, `edu_type3`, `get_schship`, `get_schship_amt`, `need_schship`, `need_schship_amt`, `needschamthelpcom`, `employed1`, `employed2`, `need_job1`, `need_job2`, `job_needy_edu1`, `job_needy_edu2`, `jobneedyhelpcom`, `self_employed`, `profession`, `who_selfemp1`, `who_selfemp2`, `need_selfb`, `which_selfb`, `selfb_help_type`, `selfb_invest`, `selfbhelpcom`, `return_policy`, `health_help1`, `health_help2`, `health_help_type`, `health_help_cost`, `healthelpcom`, `other_help`, `liveli_status`, `improvements`, `author`, `date`, `complete`) VALUES
(2, '121545789856', 'Ganesh', 'Ashok', 'Pawar', 'Pune', 'Jejuri', 'Nashik', 'Pune', '412305', 'Maharashtra', '30', '9856452135', '', '5', '', '', '', '', 'Yes', '', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', '', '', '', '', '', '', 'Yes', '', '', '', '', '', '', '', '', 'Yes', '', '', '', '', '', 'Yes', '', '', '', ' ', '2018-10-01', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`) VALUES
('1234567890', 'e807f1fcf82d132f9bb018ca6738a19f', 'admin'),
('8855865771', '3f5c99b9bf2ed32278fa027ecf7c4a5c', NULL),
('9958061099', 'baceb84c75f35ec86ac8271753ff09f5', NULL),
('8726245102', 'ef25d857d7989cc9f7d3a703938b5497', NULL),
('9876543210', '4e7d489b49ec93dbf53ce37aee778593', NULL),
('1234567890', '1234@abcd', NULL),
('1234567890', '1234567890', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perlogin`
--

CREATE TABLE `perlogin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perlogin`
--

INSERT INTO `perlogin` (`email`, `password`) VALUES
('arasal885@gmail.com', 'aadesh'),
('wankhadeajay6@gmail.com', 'ihateweb'),
('genganerupa@gmail.com', 'Rupa@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crusherdetails`
--
ALTER TABLE `crusherdetails`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `contact1` (`contact1`);

--
-- Indexes for table `perlogin`
--
ALTER TABLE `perlogin`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crusherdetails`
--
ALTER TABLE `crusherdetails`
  MODIFY `srno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `sr_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
