-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 07:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `timestamps` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `doctor_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `views`, `likes`, `created_by`, `status`, `timestamps`, `doctor_id`) VALUES
(1, 'How to Write and Publish Your First Blog Post', 'How to Write and Publish Your First Blog PostHow to Write and Publish Your First Blog PostHow to Write and Publish Your First Blog PostHow to Write and Publish Your First Blog PostHow to Write and Publish Your First Blog PostHow to Write and Publish Your First Blog Post', NULL, NULL, NULL, 'active', '2021-07-02 13:44:33', 3),
(2, 'A paragraph', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument', NULL, NULL, NULL, 'active', '2021-07-02 13:44:39', 4),
(3, 'Paragraph', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.', NULL, NULL, NULL, 'active', '2021-07-02 13:44:43', 4),
(4, 'How to Write and Publish Your First Blog Post', 'A paragraph is a series of sentences that are organized and coherent, and are all related to a single topic. Almost every piece of writing you do that is longer than a few sentences should be organized into paragraphs.', NULL, NULL, NULL, 'active', '2021-07-02 14:23:33', 4),
(5, 'The Purpose of the Blog Post Introduction', 'Now that someone has clicked through to your blog post, your job is not done. It\'s just beginning.\r\n\r\nThe traffic to your post now has either come from a click-through from social or search, or it has come from someone visiting through your blog listing page. In both of these cases, the prime point of engagement is now the introduction.', NULL, NULL, NULL, 'active', '2021-07-02 16:57:45', 5),
(6, 'An Example of a Compelling Introduction', 'Do you like panning for gold? This last winter, a team of eight rugged mountain men trekked through howling winds and blinding snow into the most remote area of Alaska. The goal: to hopefully find some gold. After two months of crushing disappointment, this group of prospectors stumbled upon the biggest find of their lives! Three weeks later, the team emerged to tell their story. In this article, I\'ll tell you all about it.', NULL, NULL, NULL, 'active', '2021-07-02 17:04:09', 5),
(7, 'An Example of a Compelling Introduction', 'Do you like panning for gold? This last winter, a team of eight rugged mountain men trekked through howling winds and blinding snow into the most remote area of Alaska. The goal: to hopefully find some gold. After two months of crushing disappointment, this group of prospectors stumbled upon the biggest find of their lives! Three weeks later, the team emerged to tell their story. In this article, I\'ll tell you all about it.', NULL, NULL, NULL, 'active', '2021-07-02 17:04:42', 5),
(8, 'An Example of a Compelling Introduction', 'Do you like panning for gold? This last winter, a team of eight rugged mountain men trekked through howling winds and blinding snow into the most remote area of Alaska. The goal: to hopefully find some gold. After two months of crushing disappointment, this group of prospectors stumbled upon the biggest find of their lives! Three weeks later, the team emerged to tell their story. In this article, I\'ll tell you all about it.', NULL, NULL, NULL, 'active', '2021-07-02 17:05:22', 5),
(9, 'Which story do you want to read?', 'The first one is boring, and you know the secret - they found a 4-pound gold nugget. In the second example, there is drama and mystery. It makes you read the rest at least to find out what they found.', NULL, NULL, NULL, 'active', '2021-07-02 17:08:47', 5),
(10, 'Do disarm your audience. Don\'t be salesy.', 'Audiences want real, honest information. Your introduction needs to disarm your reader, especially if you\'re going to be talking about yourself. If your product or service is going to be a focal point of the piece, you need to disarm your audience. There\'s nothing worse than reading an intro from a braggadocios brand.', NULL, NULL, NULL, 'active', '2021-07-02 17:14:22', 3),
(11, 'Medical Blogger?', 'I\'ve been doing this for nearly three years.  I obviously enjoy having a blog and have found it a chance to use some of my previously-hidden talents to some good.  I suspect there are some readers who are wondering quietly to themselves if they should start a blog and others who are doing so but aren\'t sure they will continue.  So here is some advice I have from my own experien', NULL, NULL, NULL, 'active', '2021-07-03 03:41:50', 10),
(12, 'Fields of medicine', 'A clinician is a health worker who works directly with patients in a hospital or other healthcare setting. Nurses, doctors, psychotherapists, and other specialists are all clinicians.', NULL, NULL, NULL, 'active', '2021-07-26 09:54:00', 11),
(13, 'Fields of medicine', 'A clinician is a health worker who works directly with patients in a hospital or other healthcare setting. Nurses, doctors, psychotherapists, and other specialists are all clinicians.', NULL, NULL, NULL, 'active', '2021-07-26 09:54:19', 11);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(100) NOT NULL,
  `question_id` int(100) DEFAULT NULL,
  `comment` varchar(500) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `question_id`, `comment`, `created_by`, `status`) VALUES
(1, NULL, 'yes tell', NULL, 'active'),
(2, NULL, 'yes', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `chamber` varchar(100) NOT NULL,
  `availability` int(100) DEFAULT NULL,
  `department` varchar(100) NOT NULL,
  `rating` int(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `fee` int(100) DEFAULT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `username`, `email`, `password`, `title`, `chamber`, `availability`, `department`, `rating`, `address`, `city`, `country`, `status`, `fee`, `image`) VALUES
(3, 'bishwagit', 'bishwagitdas@gmail.com', 'aaaaa', 'consultant', 'the sun hospital', NULL, 'medicen', NULL, 'Dhaka,Bangladesh', 'Dhaka', 'Bangladesh', 'doctor', NULL, NULL),
(4, 'abc', '18-36730-1@student.aiub.edu', 'bbb', 'consultant', 'the sun hospital', NULL, 'medicen', NULL, 'Dhaka,Bangladesh', 'Dhaka', 'Bangladesh', 'doctor', NULL, NULL),
(5, 'joy', 'blueconway11@gmail.com', 'joydas', 'Dermatology', 'naogaon hospital', NULL, 'medicen', NULL, 'Dhaka,Bangladesh', 'Dhaka', 'Bangladesh', 'doctor', NULL, NULL),
(6, 'dev das', 'bishwagitkumar00@gmail.com', 'dev', 'consultant', 'the sun hospital', NULL, 'medicen', NULL, 'Dhaka,Bangladesh', 'Dhaka', 'Bangladesh', 'doctor', NULL, NULL),
(7, 'abc', 'abc@gmail.com', 'abcd', 'consultant', 'the sun hospital', NULL, 'medicen', NULL, 'Dhaka,Bangladesh', 'Dhaka', 'Bangladesh', 'doctor', NULL, NULL),
(8, 'bishwagit100', 'bishwagitdas0@gmail.com', 'bbbbbb', 'bbbb', 'naogaon hospital', NULL, 'medicen', NULL, 'Dhaka,Bangladesh', 'Dhaka', 'Bangladesh', 'doctor', NULL, NULL),
(9, 'alom', 'alom@gmail.com', 'alom', 'consultant', 'naogaon hospital', NULL, 'medicen', NULL, 'Dhaka,Bangladesh', 'Dhaka', 'Bangladesh', 'doctor', NULL, NULL),
(10, 'ccc', 'adhirdas590@gmail.com', 'ccc', 'bbbb', 'the sun hospitals', NULL, 'medicen', NULL, 'Dhaka,Bangladesh', 'Dhaka', 'Bangladesh', 'doctor', NULL, NULL),
(11, 'acbs', 'ac@gmail.com', 'aaaa', 'consultant', 'the sun hospitals', NULL, 'medicen', NULL, 'Dhaka,Bangladesh', 'Dhaka', 'Bangladesh', 'doctor', NULL, NULL),
(12, 'bishwagit', 'bishwagitdas0@gmail.com', '2222', 'consultant', 'the sun hospital', NULL, 'medicen', NULL, 'Dhaka,Bangladesh', 'Dhaka', 'Bangladesh', 'doctor', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report_comment`
--

CREATE TABLE `report_comment` (
  `id` int(11) NOT NULL,
  `question_id` varchar(500) DEFAULT NULL,
  `report_comment` varchar(1000) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_comment`
--

INSERT INTO `report_comment` (`id`, `question_id`, `report_comment`, `created_by`, `status`) VALUES
(1, NULL, 'good', NULL, 'active'),
(2, NULL, 'nearly three years.', NULL, 'active'),
(3, NULL, 'own experience', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `status`, `user_type`) VALUES
(4, 'bishwagit100', 'bishwagitdas@gmail.com', 'aaaaa', 'active', 'doctor'),
(5, 'abc', '18-36730-1@student.aiub.edu', 'bbb', 'active', 'doctor'),
(6, 'joy', 'blueconway11@gmail.com', 'joydas', 'active', 'doctor'),
(7, 'dev das', 'bishwagitkumar00@gmail.com', 'dev', 'active', 'doctor'),
(8, 'abc', 'abc@gmail.com', 'abcd', 'active', 'doctor'),
(9, 'bishwagit100', 'bishwagitdas0@gmail.com', 'bbbbbb', 'active', 'doctor'),
(10, 'alom', 'alom@gmail.com', 'alom', 'active', 'doctor'),
(11, 'cccc', 'adhirdas590@gmail.com', 'cccc', 'active', 'doctor'),
(12, 'acbs', 'ac@gmail.com', 'aaaa', 'active', 'doctor'),
(13, 'bishwagit', 'bishwagitdas0@gmail.com', '2222', 'active', 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_comment`
--
ALTER TABLE `report_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `report_comment`
--
ALTER TABLE `report_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
