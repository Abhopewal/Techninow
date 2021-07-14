-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 11:52 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techninow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `S_No` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`S_No`, `username`, `password`, `Role`) VALUES
(1, 'Admin', 'f4fb94323a5381ae97e6a6428d0bbb1f2357bb34', 1),
(2, 'Akash', 'Thisispassword', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_bio`
--

CREATE TABLE `admin_bio` (
  `Bio` varchar(150) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `Facebook` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Admin_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_bio`
--

INSERT INTO `admin_bio` (`Bio`, `Website`, `Facebook`, `Image`, `Admin_id`) VALUES
('This is admin bio', 'techninow.com', 'facebook.com/abhopewal', 'admin.png', 1),
('This is Akash bio', 'website', 'facebook', 'akash.png', 2),
('This is admin bio', 'techninow.com', 'facebook.com/abhopewal', 'admin.png', 1),
('This is Akash bio', 'website', 'facebook', 'akash.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'A markup language', 1),
(2, 'A programming language', 1),
(3, 'A binary number', 1),
(4, 'A database language', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0,
  `logo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`, `logo`) VALUES
(53, 'c', 0, 'C.png'),
(54, 'kotlin', 0, 'kotlin.png'),
(52, 'c++', 0, 'c++.png'),
(47, 'python', 8, 'python.png'),
(48, 'java', 3, 'java.png'),
(49, 'PHP', 0, 'PHPs.png'),
(50, 'Android', 0, 'Android.png'),
(51, 'Swift', 0, 'swift.png'),
(55, 'j-query', 0, 'j-quary.png'),
(56, 'Ruby', 0, 'ruby.png'),
(57, 'sql', 0, 'SQL.png'),
(58, 'Javascript', 0, 'javascript.png'),
(59, 'html', 0, 'Html.png'),
(60, 'css', 0, 'CSS.png'),
(61, 'c#', 0, 'cs.png'),
(62, 'scala', 0, 'scala.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `S_No` int(30) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`S_No`, `comment`, `name`, `time`) VALUES
(7, 'Wow this blog is very nice …', 'Admin', '31 May 2021'),
(11, 'Usually I never comment on blogs but your article is so convincing that I never stop myself to say something about it. You’re doing a great job Man,Ke', 'Akash', '31 May 2021'),
(12, 'Hello sir nice website', 'Abhishek', '03 Jun 2021');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `S_No` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `p_num` int(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`S_No`, `name`, `email`, `p_num`, `message`) VALUES
(1, 'Akash', 'akash@gmail.com', 2147483647, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(59, 'Python - functions', 'Python - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functionsPython - functions', '47', '01 Jun, 2021', 1, '1622517767-python.png'),
(62, 'python - conditional statements', 'sf', '47', '03 Jun, 2021', 1, '1622693867-python.png'),
(57, 'Java - Home', 'Java - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - HomeJava - Home', '48', '31 May, 2021', 39, '1622476839-java.png'),
(58, 'python - datatypes', 'python - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypespython - datatypes', '47', '01 Jun, 2021', 1, '1622513557-python.png'),
(60, 'java - datatypes', 'java datatypes java datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypesjava datatypes', '48', '01 Jun, 2021', 1, '1622517856-java.png'),
(61, 'Python - Loop', 'Python - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - LoopPython - Loop', '47', '01 Jun, 2021', 1, '1622545357-python.png');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` text NOT NULL,
  `ans_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `total_ques` int(11) NOT NULL,
  `right_mark` int(11) NOT NULL,
  `wrong_mark` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `title`, `total_ques`, `right_mark`, `wrong_mark`, `date`) VALUES
(19, 'Python', 3, 2, 1, '2021-06-04 08:23:42'),
(20, 'Java', 5, 2, 1, '2021-06-04 08:30:31'),
(21, 'linux', 5, 2, 1, '2021-06-04 08:57:12'),
(23, 'safd', 4, 3, 2, '2021-06-04 09:39:36'),
(26, 'java', 10, 2, 1, '2021-06-04 09:44:37'),
(32, 'Python', 2, 1, 1, '2021-06-05 04:38:30'),
(33, 'saf', 1, 2, 43, '2021-06-05 04:42:22'),
(34, 'ASD', 12, 2, 2, '2021-06-05 04:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_bio`
--

CREATE TABLE `user_bio` (
  `Bio` varchar(150) NOT NULL,
  `Website` varchar(20) NOT NULL,
  `Facebook` varchar(30) NOT NULL,
  `Image` varchar(30) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_bio`
--

INSERT INTO `user_bio` (`Bio`, `Website`, `Facebook`, `Image`, `user_id`) VALUES
('SLKDFJL', 'JSLDFJ', 'KLSDKFJ', '1622475349-python.png', 7),
('A software engineer.', 'Techninow.com', 'Facebook.com/techninow', 'IMG_20200907_093512.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_edu`
--

CREATE TABLE `user_edu` (
  `school` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `discription` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_edu`
--

INSERT INTO `user_edu` (`school`, `program`, `degree`, `discription`, `user_id`) VALUES
('Teerthanker mahaveer university', 'computer science', 'MCA', 'TEST', 7),
('Tmu', 'computer science', 'mca', 'sdjflasf\r\n', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `u_id` int(20) NOT NULL,
  `FullName` varchar(40) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`u_id`, `FullName`, `Username`, `Email`, `Password`) VALUES
(7, 'Akash kumar', 'Akash', 'akashbhopewal@gmail.com', 'e5744eecd05b75f79b889999a9a4010f984066ad'),
(8, 'Harsh Sharma', 'Harsh', 'harsh@gmail.com', 'fa3b966e71aefc0f71e8a4fa6b1d5958fd97d323');

-- --------------------------------------------------------

--
-- Table structure for table `user_work`
--

CREATE TABLE `user_work` (
  `company` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `discription` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_work`
--

INSERT INTO `user_work` (`company`, `role`, `discription`, `user_id`) VALUES
('HII i am akash my cmp is google', 'end', 'ldsjf', 7),
('microsoft', 'Engineer', 'test', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `admin_bio`
--
ALTER TABLE `admin_bio`
  ADD KEY `Admin_id` (`Admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_bio`
--
ALTER TABLE `user_bio`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_edu`
--
ALTER TABLE `user_edu`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `user_work`
--
ALTER TABLE `user_work`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `S_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `S_No` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_bio`
--
ALTER TABLE `admin_bio`
  ADD CONSTRAINT `admin_bio_ibfk_1` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`S_No`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`);

--
-- Constraints for table `user_bio`
--
ALTER TABLE `user_bio`
  ADD CONSTRAINT `user_bio_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`u_id`);

--
-- Constraints for table `user_edu`
--
ALTER TABLE `user_edu`
  ADD CONSTRAINT `user_edu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`u_id`),
  ADD CONSTRAINT `user_edu_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`u_id`),
  ADD CONSTRAINT `user_edu_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`u_id`);

--
-- Constraints for table `user_work`
--
ALTER TABLE `user_work`
  ADD CONSTRAINT `user_work_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`u_id`),
  ADD CONSTRAINT `user_work_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
