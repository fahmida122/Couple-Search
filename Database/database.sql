-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 06:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `name` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `donate` text NOT NULL,
  `others` text NOT NULL,
  `account` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`name`, `email`, `phone`, `address`, `amount`, `donate`, `others`, `account`) VALUES
('liza', 'test@gmail.com', '0176889676', 'sylhet', '200', 'Feeding poor people', 'nothing', 'Bkash (017681012)');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `marital_status` varchar(34) NOT NULL,
  `present_address` varchar(100) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `blood_group` varchar(11) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `occupation` varchar(90) NOT NULL,
  `your_monthly_income` varchar(90) NOT NULL,
  `ssc` varchar(30) NOT NULL,
  `institution_name_ssc` varchar(30) NOT NULL,
  `passing_year_ssc` varchar(30) NOT NULL,
  `obtained_gpa_ssc` varchar(30) NOT NULL,
  `hsc` varchar(30) NOT NULL,
  `institution_name_hsc` varchar(100) NOT NULL,
  `passing_year_hsc` varchar(40) NOT NULL,
  `obtained_gpa_hsc` varchar(40) NOT NULL,
  `bsc` varchar(30) NOT NULL,
  `institution_name_bsc` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `passing_year_bsc` varchar(10) NOT NULL,
  `obtained_cgpa_bsc` varchar(20) NOT NULL,
  `others` text NOT NULL,
  `cloth` varchar(100) NOT NULL,
  `salah` varchar(90) NOT NULL,
  `mahram_nonmahram` varchar(90) NOT NULL,
  `quran` varchar(20) NOT NULL,
  `madhab` varchar(30) NOT NULL,
  `song_video` varchar(30) NOT NULL,
  `disease` varchar(20) DEFAULT NULL,
  `yourself` varchar(100) DEFAULT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `father_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `father_occupation` varchar(20) NOT NULL,
  `mother_occupation` varchar(20) NOT NULL,
  `brother` varchar(20) NOT NULL,
  `sister` varchar(20) NOT NULL,
  `monthly_income_of_your_family` varchar(40) NOT NULL,
  `economical_condition` varchar(40) NOT NULL,
  `age_partner` varchar(30) NOT NULL,
  `color_partner` varchar(30) NOT NULL,
  `height_partner` varchar(30) NOT NULL,
  `edu_partner` varchar(60) NOT NULL,
  `gift_dowry` varchar(40) NOT NULL,
  `district_partner` varchar(50) NOT NULL,
  `marital_status_partner` text NOT NULL,
  `occupation_partner` varchar(80) NOT NULL,
  `economical_condition_partner` varchar(90) NOT NULL,
  `description_partner` text NOT NULL,
  `guardian_number` int(11) NOT NULL,
  `guardian` varchar(30) NOT NULL,
  `your_number` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`father_name`, `mother_name`, `father_occupation`, `mother_occupation`, `brother`, `sister`, `monthly_income_of_your_family`, `economical_condition`, `age_partner`, `color_partner`, `height_partner`, `edu_partner`, `gift_dowry`, `district_partner`, `marital_status_partner`, `occupation_partner`, `economical_condition_partner`, `description_partner`, `guardian_number`, `guardian`, `your_number`, `email`, `id`) VALUES
('sf', 'sfsg', 'sgsg', 'sgg', 'sg', 'sg', '60000', 'sgsg', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form_1`
--

CREATE TABLE `form_1` (
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `marital_status` varchar(45) NOT NULL,
  `present_address` varchar(45) NOT NULL,
  `Permanent_address` varchar(45) NOT NULL,
  `blood_group` varchar(45) NOT NULL,
  `birth_date` varchar(45) NOT NULL,
  `height` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `your_monthly_income` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_1`
--

INSERT INTO `form_1` (`name`, `email`, `gender`, `marital_status`, `present_address`, `Permanent_address`, `blood_group`, `birth_date`, `height`, `weight`, `occupation`, `your_monthly_income`) VALUES
('', '', '', '', '', '', '', '', '', '', '', ''),
('faiza', 'faiza@gmail.com', 'female', 'divorced', 'Gazipur', 'Feni', 'A Positive', '4/9/1997', '5', '56', 'housewife', '1000'),
('jhorna', 'jhorna@gmail.com', 'female', 'divorced', 'bagerhat', 'bagerhat', 'A Positive', '5/5/1990', '5', '56', 'teacher', '50000'),
('jhuma', 'jhuma@gmail.com', 'female', 'widower', 'bagerhat', 'bagerhat', 'A Positive', '5/5/1990', '5', '56', 'teacher', '50000'),
('mina', 'mia@gmail.com', 'female', 'divorced', 'bagerhat', 'bagerhat', 'A Positive', '12/2/1998', '5', '56', 'student', '5000'),
('minara', 'minara@gmail.com', 'female', 'widower', 'bagerhat', 'bagerhat', 'A Positive', '5/5/1990', '5', '56', 'teacher', '50000'),
('Fahmida', 'mn@gmail.com', 'female', 'divorced', 'bagerhat', 'bagerhat', 'A Positive', '5/5/1990', '5', '56', 'student', '5000'),
('', 'raisa@gmail.com', '', '', '', '', '', '', '', '', '', ''),
('sania', 'sania@gmail.com', 'female', 'unmarried', 'bagerhat', 'bagerhat', 'A Positive', '5/5/1990', '5', '56', 'teacher', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `form_2`
--

CREATE TABLE `form_2` (
  `ssc` varchar(45) NOT NULL,
  `institution_name_ssc` varchar(45) NOT NULL,
  `passing_year_ssc` varchar(45) NOT NULL,
  `obtained_gpa_ssc` varchar(45) NOT NULL,
  `hsc` varchar(45) NOT NULL,
  `institution_name_hsc` varchar(45) NOT NULL,
  `passing_year_hsc` varchar(45) NOT NULL,
  `obtained_gpa_hsc` varchar(45) NOT NULL,
  `bsc` varchar(45) NOT NULL,
  `institution_name_bsc` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `passing_year_bsc` varchar(45) NOT NULL,
  `obtained_cgpa_bsc` varchar(45) NOT NULL,
  `others` text NOT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `marital_status` varchar(40) DEFAULT NULL,
  `permanent_address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_2`
--

INSERT INTO `form_2` (`ssc`, `institution_name_ssc`, `passing_year_ssc`, `obtained_gpa_ssc`, `hsc`, `institution_name_hsc`, `passing_year_hsc`, `obtained_gpa_hsc`, `bsc`, `institution_name_bsc`, `department`, `passing_year_bsc`, `obtained_cgpa_bsc`, `others`, `gender`, `marital_status`, `permanent_address`) VALUES
('Yes', 'kgc', '2016', '5', 'Yes', 'kgc', '2018', '5', 'Running', 'sust', 'cse', '2023', '3', 'nothing', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('Yes', 'mc', '2016', '5', 'Yes', 'mc', '2016', '5', 'Yes', 'sust', 'cse', '2016', '3', 'seggdh', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('No', 'kgs', '2016', '5', 'No', 'mc', '2016', '5', 'Yes', 'du', 'cse', '2016', '3', 'nothing', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 'divorced', NULL),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 'divorced', NULL),
('Yes', 'mc', '2016', '5', 'Yes', 'mc', '2016', '5', 'Yes', 'sust', 'cse', '2016', '3', 'jkgk', 'female', 'divorced', 'bagerhat'),
('yes', 'blue bird', '2016', '5', 'yes', 'mc', '2018', '5', 'running', 'sust', 'cse', '2023', '', 'nothing', 'female', 'divorced', 'Feni'),
('yes', 'blue bird', '2016', '5', 'yes', 'mc', '2018', '5', 'running', 'sust', 'cse', '2023', '', 'nothing', 'female', 'divorced', 'Feni');

-- --------------------------------------------------------

--
-- Table structure for table `form_3`
--

CREATE TABLE `form_3` (
  `cloth` varchar(45) NOT NULL,
  `salah` varchar(45) NOT NULL,
  `mahram_nonmahram` varchar(45) NOT NULL,
  `quran` varchar(45) NOT NULL,
  `madhab` varchar(45) NOT NULL,
  `song_video` varchar(45) NOT NULL,
  `disease` varchar(45) NOT NULL,
  `yourself` text NOT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `marital_status` varchar(40) DEFAULT NULL,
  `permanent_address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_3`
--

INSERT INTO `form_3` (`cloth`, `salah`, `mahram_nonmahram`, `quran`, `madhab`, `song_video`, `disease`, `yourself`, `gender`, `marital_status`, `permanent_address`) VALUES
('sari', 'yes', 'no', 'yes', 'sunni', 'no', 'no', 'soft minded', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('kamiz', 'yes', 'no', 'yes', 'sihah', 'no', 'no', 'soft minded', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('sari', 'yes', 'yes', 'yes', 'sunni', 'no', 'no', 'islamic minded', 'female', 'divorced', 'Feni'),
('sari', 'yes', 'yes', 'yes', 'sunni', 'no', 'no', 'islamic minded', 'female', 'divorced', 'Feni');

-- --------------------------------------------------------

--
-- Table structure for table `form_4`
--

CREATE TABLE `form_4` (
  `father_name` varchar(45) NOT NULL,
  `mother_name` varchar(45) NOT NULL,
  `father_occupation` varchar(45) NOT NULL,
  `mother_occupation` varchar(45) NOT NULL,
  `brother` varchar(45) NOT NULL,
  `sister` varchar(45) NOT NULL,
  `monthly_income_of_your_family` varchar(45) NOT NULL,
  `economical_condition` varchar(45) NOT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `marital_status` varchar(40) DEFAULT NULL,
  `permanent_address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_4`
--

INSERT INTO `form_4` (`father_name`, `mother_name`, `father_occupation`, `mother_occupation`, `brother`, `sister`, `monthly_income_of_your_family`, `economical_condition`, `gender`, `marital_status`, `permanent_address`) VALUES
('Adbur Rahim', 'Sayma Begum', 'teacher', 'teacher', '2', '3', '30000', 'middle', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('Shafic', 'mim', 'teacher', 'teacher', '2', '3', '60000', 'middle', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', NULL, NULL, NULL),
('ggch', 'hj', 'Teacher', 'Teacher', '4', '4', '45000', 'lower', 'female', 'divorced', 'Feni'),
('ggch', 'hj', 'Teacher', 'Teacher', '4', '4', '45000', 'lower', 'female', 'divorced', 'Feni');

-- --------------------------------------------------------

--
-- Table structure for table `form_5`
--

CREATE TABLE `form_5` (
  `age_partner` varchar(50) NOT NULL,
  `color_partner` varchar(45) NOT NULL,
  `height_partner` varchar(45) NOT NULL,
  `edu_partner` varchar(45) NOT NULL,
  `gift_dowry` varchar(45) NOT NULL,
  `district_partner` varchar(45) NOT NULL,
  `marital_status_partner` varchar(45) NOT NULL,
  `occupation_partner` varchar(45) NOT NULL,
  `economical_condition_partner` varchar(45) NOT NULL,
  `description_partner` text NOT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `marital_status` varchar(40) DEFAULT NULL,
  `permanent_address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_5`
--

INSERT INTO `form_5` (`age_partner`, `color_partner`, `height_partner`, `edu_partner`, `gift_dowry`, `district_partner`, `marital_status_partner`, `occupation_partner`, `economical_condition_partner`, `description_partner`, `gender`, `marital_status`, `permanent_address`) VALUES
('16', 'white', '4', 'bsc', 'no', 'Sylhet', 'unmarried', 'teacher', 'middle', 'islamic', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('27', 'black', '4', 'bsc', 'no', 'Sylhet', 'unmarried', 'teacher', 'middle', 'islamic', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
('27', 'white', '5', 'bsc', 'no', 'feni', 'unmarried', 'doctor', 'middle', 'islamic inded', 'female', 'divorced', 'Feni'),
('27', 'white', '5', 'bsc', 'no', 'feni', 'unmarried', 'doctor', 'middle', 'islamic inded', 'female', 'divorced', 'Feni');

-- --------------------------------------------------------

--
-- Table structure for table `form_6`
--

CREATE TABLE `form_6` (
  `guardian_number` varchar(45) NOT NULL,
  `guardian` varchar(45) NOT NULL,
  `your_number` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `marital_status` varchar(40) DEFAULT NULL,
  `permanent_address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_6`
--

INSERT INTO `form_6` (`guardian_number`, `guardian`, `your_number`, `email`, `gender`, `marital_status`, `permanent_address`) VALUES
('01868108402', 'no', '', 'Jhuma@gmail.com', NULL, NULL, NULL),
('01756198612', 'no', '10966231867', 'mim@gmail.com', NULL, NULL, NULL),
('', '', '', 'sania@gmail.com', NULL, NULL, NULL),
('', '', '', '', NULL, NULL, NULL),
('', '', '', '', NULL, NULL, NULL),
('', '', '', '', NULL, NULL, NULL),
('', '', '', '', NULL, NULL, NULL),
('0197878787', 'yes', '01917152657', 'raisa@gmail.com', NULL, NULL, NULL),
('', '', '', 'jhorna@gmail.com', NULL, NULL, NULL),
('', '', '', '', NULL, NULL, NULL),
('', '', '', 'jhuma@gmail.com', NULL, NULL, NULL),
('', '', '', 'minara@gmail.com', NULL, NULL, NULL),
('', '', '', 'mn@gmail.com', NULL, NULL, NULL),
('', '', '', 'mn@gmail.com', NULL, NULL, NULL),
('01728394060', 'no', '019676766', 'pichci@gmail.com', 'female', 'unmarried', 'Feni'),
('01728394060', 'no', '019676766', 'pichci@gmail.com', 'female', 'unmarried', 'Feni'),
('01728394060', 'no', '0789685', 'nijum@gmail.com', 'female', 'divorced', 'Feni'),
('01728394060', 'no', '0789685', 'nijum@gmail.com', 'female', 'divorced', 'Feni');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `reason` text NOT NULL,
  `number` varchar(45) NOT NULL,
  `account` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`name`, `email`, `phone`, `reason`, `number`, `account`) VALUES
('hiya', 'hiya_990@gmail.com', '0176889876', 'needy', '01768108403', 'Rocket'),
('liza', 'test@gmail.com', '0176889676', 'needy', '01768108403', 'Bkash');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post`) VALUES
('hello this is me'),
('please post something'),
('This is an  islamic website'),
('how can i help you');

-- --------------------------------------------------------

--
-- Table structure for table `signuptable`
--

CREATE TABLE `signuptable` (
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signuptable`
--

INSERT INTO `signuptable` (`name`, `email`, `password`) VALUES
('Fahmida', 'example@gmail.com', 'sdjksga8'),
('Kajol', 'kajol@gmail.com', '456'),
('Shreya', 'shreya@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `form_1`
--
ALTER TABLE `form_1`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `signuptable`
--
ALTER TABLE `signuptable`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
