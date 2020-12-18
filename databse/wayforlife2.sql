-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 04:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wayforlife`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `role`, `password`, `email`, `status`) VALUES
(1, 'Admin', 0, 'admin', 'admin@gmail.com', 1),
(5, 'nikhil kumar', 0, '$2y$10$y3URpLBqdAGtY3a6S9iWg.WEu6efg1/N7U3ppUOP9Y97OT0iHkUBC', 'l.gouri1234@gmail.com', 1),
(9, 'Jivesh', 1, '$2y$10$c7Ak/jcDh/b8HAokoMoO0OT8FKk2m6Kpu1a4w8OBb49NgBGyz0Kze', 'jivesh@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_image` varchar(55) NOT NULL,
  `blog_body` text NOT NULL,
  `blog_author` varchar(55) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_image`, `blog_body`, `blog_author`, `added_on`) VALUES
(5, 'Paper Pen (EnTree)', '394841958_0001-1-768x1086.jpg', 'The seemingly innocuous ballpoint pens–we lose them more than we use them! We trash them instead of bothering to buy new refills.  Do we even realize that these millions of small writing instruments sold daily are made of plastic and contribute to the degradation of the environment? Paper Pens That only reduce plastic waste but also have seeds that grow into trees! These paper pens, a great alternative to plastic ballpoint pens, don’t just <br>address the plastic menace but also contain seeds that can grow into trees. Once a pen has been used up, it can be just be planted into the soil.  The seed will sprout from the bottom of the pen. In one shot, these pens achieve upcycling of plastic waste reduction and tree plantation.<br>\r\n', 'Uday', '2020-09-21'),
(6, 'Virtual Volunteering is the New Reality', '460228771_virtual_volunteering.jpg', 'Sharing your expertise in a particular space for a group of people or a project, that would benefit from your contribution. Devoting your ‘free time’ to an activity that you find pleasure in. These are definitions that are commonly used for the word ‘volunteering’. In most cases, the elements of ‘free time’ and ‘for free’ are the essence of ‘volunteering’. However, a clear-cut non-subjective definition for the term doesn’t seem to exist. Volunteering can mean and symbolise so much! What is obvious\r\nto all is that the medium through which we volunteer varies immensely for different sectors. This word has not undergone such a drastic change in its meaning prior to the COVID-19 pandemic.<br>\r\nOur immobility during this lockdown has affected many facets of our daily engagements – chores, education, work, recreation etc. In the limited physical spaces which we have been compelled to exist in, many have resorted to newer modes of entertainment. New series, books, movies,\r\nchallenges on social media or developing new interests in art, cooking, fitness have been the common ‘lockdown lifestyle’ for most of us. We yearn for an entertaining escape. For some people<br>\r\nwho, in previous times, would resort to volunteering for their peace of mind, their usual engagement has been drastically affected. There are other countless reasons that spark volunteerism, and not all are tangible too. This ‘entertaining escape’ isn’t the only thing which influences us to volunteer. There is a sense of accomplishment which one receives when you<br>\r\n‘voluntarily’ do something. In the lockdown which we are adjusting to, the activities listed above may not always serve their purpose. For this reason, there has been a surge in organisations and people providing and seeking virtual volunteering opportunities. The current situation is constantly raising newer complications despite the monotony in our lifestyles. The reasons for the growing interest in volunteering may have sparked from<br>\r\npeople’s desire to hone their skills or to be productive, or to receive validation (online) and achieve a sense of accomplishment, or to simply keep themselves busy. For the ones who have always wanted to volunteer but never did so, this time maybe that ‘free time’ which they had referred to every time they’ve postponed it. Since a digital space is the only medium that would facilitate actionable change, many aspects of volunteering too have shifted their modes of operation to digital mediums.<br>\r\nAs stated above, the ways in which one can virtually volunteer vary for different sectors. The volunteering opportunities would be practiced differently by different organizations and their inputs would yield different results too. I, the writer of this blog, have only been volunteering remotely by generating content for Way for Life’s upcoming website. Other possibilities of volunteering exist in the form of online sessions, webinars, content writing, fundraising, documentation, networking etc.<br>\r\nAs long as you actively search for work, there will always exist a multitude of activities that you can contribute to, even if you can only virtually volunteer for it. It’s obvious that the glee of working together in our actions cannot be replaced nor are the time adjustments or bandwidth\r\nreconnections a thing that is favored, however virtual volunteering has constantly reassured my doubts that humanity can exist despite the absence of physical, human togetherness. What’s been even more pleasant is that the shift to virtual working has forced us to upskill ourselves with\r\ntechnology – digitalizing our communications, projects, and interventions – which has made the scalability and expansion of our voluntary contributions to a wider audience (who are in need) easier.<br>\r\nThe digital shift has made volunteering more accessible too. How long will this last for? Will this be the new norm even when things resume back to normalcy? We are as unsure of this as you may be.<br>\r\nYou can join in on our virtual volunteering to either solve the problems you frequently see or share and enhance the benefits which you’ve been fortunate enough to be a recipient of!<br>', 'Uday', '2020-09-26'),
(7, 'Seed Balls', '704935777_61AvfhIDCsL._SL1355_.jpg', 'Bangalore is already experiencing warming weather, unusual and unexpected spells of hotness has occurred, with built-up urban areas rapidly becoming “heat-islands”. It’s high time to adopt changes to overcome this disaster. We need to towards a mega drive to create awareness and retain the title as Green City (Bengaluru)<br>\r\n and plant one lakh odd seeds all over the city.is a campaign includes making of seed balls by the volunteers. It’s the right time for the conversion of those seeds to plants and trees at a higher rate. These seed balls will be planted across different locations and enhance the natural balance.', 'Uday', '2020-09-26'),
(8, 'Vertical Gardening- An innovative way to fight pollution', '639295388_hqdefault.jpg', 'Surrounded by skyscrapers, moving vehicles and heavy pollution, the urban population is barely breathing. And even if they breath they take in the deadly smog, to which the world is getting use to unknowingly and at a fast pace, making the need for fresh air all the more necessary. It is very important that we address to this issue as soon as possible. We have reached a point where one major contribution will not help fight the problem of pollution, all need to come together.\\r\\n<br>\\r\\nWith passing time people have come up with various innovative ways to fight pollution, one of which is vertical gardening. In today’s time as the sizes of houses are shrinking it is difficult for people to maintain gardens and hence the concept of green walls were introduced. This concept helps curb pollution as well as make the otherwise boring walls eye catching and soothing.\\r\\n<br>\\r\\nVertical gardening or green walls is a clever way of utilising the indoor and outdoor walls of houses and offices and other public spaces. It has various advantages on the environment. All plants act as natural air filters that oxygenate the air, and plants in vertical gardens are no exception. They reduce smog, pollutants, and other toxins such as benzene, carbon monoxide and formaldehyde as well as dust. It creates a cleaner surrounding and environment for the occupants. It also acts as a sound barrier helping curb sound pollution. Plants naturally block high frequency sound and are hence used to reduce noise level along roads and highways. They act as an insulator reducing the noise level in buildings by creating a layer of air between the walls and the plants. It also helps reduce the amount of energy used as it insulates the walls making the air cooler and reducing the requirement of air conditioners.\\r\\n<br>\\r\\nHence we can conclude that vertical gardening or green walls are very clever and practical of utilizing otherwise waste spaces and maintain gardens, providing an innovative and attractive look to the boring walls and fighting pollution at the same time.\\r\\n<br>\\r\\n<img src=\\\"<?php echo FRONT_SITE_PATH?>img/blog/image.png\\\"  alt=\\\"blog-img\\\"/>', 'Uday', '2020-09-26'),
(9, 'EDUCATION INFRASTRUCTURE MATTERS!', '647749291_image-1.png', 'For those who love to read and study, any place can be good to read and learn. They might argue that the space you are in does not matter, that knowledge is immaterial, that the physical context is secondary, and that what is important is to concentrate in what you are reading. But if we refer to the reality of educational systems, it is found that having good and healthy surrounding it an integral part in good academic results.  In other words, the conditions of the schools directly impact the performance of the students.  \r\n\r\nThere is strong evidence that high-quality infrastructure facilitates better instruction, improves student outcomes, and reduces dropout rates, among other benefits. The redesigning of educational infrastructure should focus on the comfort of the students and the teachers, creating spaces for development of rehearsals and practises and spaces for development of talent and culture. For example, a recent study has proved that environmental elements of school infrastructure together explained 16 percent of variation in primary students’ academic progress. This research shows that the design of education infrastructure affects learning through three interrelated factors: naturalness (e.g. light, air quality), stimulation (e.g. complexity) and individualization (e.g. flexibility of the learning space).\r\n\r\nEducational infrastructure has vital impact on the impact of learning. The various impacts of the infrastructure are on: – attendance and completion of academic cycles, teacher motivation and learning results. The consequences of a lack of decent services and buildings should be obvious– if a child is not safe in a classroom, they will not be able to learn as well. If there is no access to a system for sanitary waste and no way to stay warm, both teachers and students will not feel the classroom is a positive learning environment and will suffer. And if a building isn’t sturdy, it can be destroyed by a natural disaster and leave the community without a school. A lacking standardized curriculum poses a less obvious consequence, but a large one nonetheless. <a href=\"https://files.eric.ed.gov/fulltext/EJ996195.pdf\">Not having a curriculum to give teachers to teach by leaves the teachers completely unsupported. </a>They may not know the best way to teach and thus the students suffer.\r\n\r\nRivera explains “To optimize investments in education it is essential for authorities to observe the significant role of infrastructure interacting with other essential educational inputs to be able to undertake comprehensive proposals that together, improve the quality of education, thus promoting greater equality of opportunities and contribute to reduce inequalities and advance toward a real productive transformation in the region”. \r\n', 'Uday', '2020-09-26'),
(14, 'Name1', '787364754_969.png', 'abbbc sjbckjbs\r\nnnnnn', 'uday', '2020-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email_id` varchar(55) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email_id`, `phone`, `subject`, `message`, `added_on`) VALUES
(8, 'L GOURI SANKAR', 'rohitkmar35@gmail.com', '2147483647', 'ABCC', 'abc\\r\\nnn', '2020-09-28 08:49:30'),
(9, 'L GOURI SANKAR', 'rohitkmar35@gmail.com', '9439138809', 'ABCC', 'aa', '2020-09-28 08:50:59'),
(10, 'aa', 'l.gouri1234@gmail.com', '9439138809', 'ABCC', 'aaaaaa', '2020-09-29 10:59:08'),
(11, 'L GOURI SANKAR', 'l.gouri1234@gmail.com', '9439138809', 'aaa', 'aaaaaa\\r\\naSDASC', '2020-10-02 11:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(55) NOT NULL,
  `event_desc` text NOT NULL,
  `startdate_time` datetime NOT NULL,
  `enddate_time` datetime NOT NULL,
  `event_image` text NOT NULL,
  `location` varchar(55) NOT NULL,
  `status` varchar(20) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_desc`, `startdate_time`, `enddate_time`, `event_image`, `location`, `status`, `added_on`) VALUES
(2, 'abc', 'abcd', '2020-09-21 08:06:00', '2020-09-22 08:06:00', '818067061_1.jpg', 'abc', 'Yet to begin', '2020-09-18 05:46:12'),
(11, 'Beach Clean', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '2020-09-28 21:11:00', '2020-09-30 20:11:00', '800152406_loops-in-c-8-638.jpg', 'abc', 'Yet to begin', '2020-09-28 06:11:25'),
(12, 'abc', 'ertyuiophxfgshvxgjazjg ertyuiophxfgshvxggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', '2020-09-29 18:15:00', '2020-10-31 18:15:00', '755497973_logo (1).jpg', 'abcd', 'In progress', '2020-09-28 06:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

CREATE TABLE `event_participants` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `address` text NOT NULL,
  `email_id` varchar(55) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `event_name` varchar(55) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_participants`
--

INSERT INTO `event_participants` (`id`, `name`, `address`, `email_id`, `phone_no`, `event_name`, `added_on`) VALUES
(6, 'L GOURI SANKAR', 'SMALAI NAGAR', 'l.gouri1234@gmail.com', '939138809', 'abcd', '2020-09-21 12:40:27'),
(11, 'L GOURI SANKAR', 'SMALAI NAGAR', 'l.gouri1234@gmail.com', '9348812833', 'abc', '2020-09-27 04:26:48'),
(13, 'L GOURI SANKAR', 'SMALAI NAGAR', 'l.gouri1234@gmail.com', '9439138809', 'abc', '2020-09-27 04:30:28'),
(14, 'L GOURI SANKAR', 'SMALAI NAGAR', 'rohitkmar35@gmail.com', '9439138809', 'abc', '2020-09-28 08:32:42'),
(15, 'L GOURI SANKAR', 'SMALAI NAGAR', 'rohitkmar35@gmail.com', '9439138809', 'abc', '2020-09-28 08:56:54'),
(16, 'L GOURI SANKAR', 'SMALAI NAGAR', 'rohitkmar35@gmail.com', '9439138809', 'abc', '2020-09-28 08:56:56'),
(19, 'L GOURI SANKAR', 'SMALAI NAGAR', 'l.gouri1234@gmail.com', '9439138809', 'Beach Clean', '2020-09-28 07:04:42'),
(20, 'Gouri/', 'SMALAI NAGAR', 'l.gouri1234@gmail.com', '9439138809', 'Beach Clean', '2020-09-29 10:54:35'),
(21, 'L GOURI SANKAR', 'SMALAI NAGAR', 'l.gouri1234@gmail.com', '9439138809', 'abc', '2020-09-29 06:19:27'),
(22, 'L GOURI SANKAR', 'SMALAI NAGAR', 'l.gouri1234@gmail.com', '9439138809', 'abc', '2020-09-29 06:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_img`
--

CREATE TABLE `gallery_img` (
  `id` int(11) NOT NULL,
  `gallery_img` varchar(55) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_img`
--

INSERT INTO `gallery_img` (`id`, `gallery_img`, `added_on`) VALUES
(2, '75198353_work1.jpg', '2020-09-21 11:12:17'),
(9, '56978033_work3.jpg', '2020-09-21 11:22:52'),
(10, '29201310_work1.jpg', '2020-09-25 06:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email_id` varchar(55) NOT NULL,
  `col_org_name` text NOT NULL,
  `prog_sec_int` text NOT NULL,
  `phoneno` text NOT NULL,
  `indi_group` varchar(55) NOT NULL,
  `group_size` int(5) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `name`, `email_id`, `col_org_name`, `prog_sec_int`, `phoneno`, `indi_group`, `group_size`, `added_on`) VALUES
(3, 'L GOURI SANKAR', 'jivesh@gmail.com', 'CET', 'A', '939138809', 'Indivisual,Group', 2, '2020-09-17 01:23:20'),
(5, 'L GOURI SANKAR', 'rohitkmar35@gmail.com', 'CET', 'A', '939138809', 'Indivisual', 1, '2020-09-18 11:45:40'),
(6, 'L GOURI SANKAR', 'l.gouri1234@gmail.com', 'CET', 'A', '9439138809', 'Indivisual', 1, '2020-09-24 08:49:48'),
(10, 'L GOURI SANKAR', 'l.gouri1234@gmail.com', 'CET', 'A', '9439138809', 'Indivisual', 1, '2020-09-27 02:13:20'),
(13, 'L GOURI SANKAR', 'l.gouri1234@gmail.com', 'CET', 'A', '9439138809', 'Indivisual', 1, '2020-09-27 02:19:13'),
(14, 'L GOURI SANKAR', 'l.gouri1234@gmail.com', 'CET', 'A', '9439138809', 'Indivisual', 1, '2020-09-27 02:20:39'),
(15, 'L GOURI SANKAR', 'l.gouri1234@gmail.com', 'CET', 'A', '9348812833', 'Indivisual', 1, '2020-09-27 04:12:37'),
(19, 'L GOURI SANKAR', 'l.gouri1234@gmail.com', 'CET', 'A', '9439138809', 'Indivisual', 1, '2020-09-29 10:50:09'),
(20, 'L GOURI SANKAR', 'l.gouri1234@gmail.com', 'CET', 'A', '9439138809', 'Group', 5, '2020-09-29 11:16:21'),
(21, 'L GOURI SANKAR', 'l.gouri1234@gmail.com', 'CET', 'A', '9439138809', 'Indivisual', 1, '2020-09-29 11:18:31'),
(22, 'L GOURI SANKAR', 'l.gouri1234@gmail.com', 'CET', 'A', '9439138809', 'Group', 3, '2020-09-29 11:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `interns_det`
--

CREATE TABLE `interns_det` (
  `id` int(11) NOT NULL,
  `intern_id` int(11) NOT NULL,
  `intern_name` varchar(55) NOT NULL,
  `Role` varchar(55) NOT NULL,
  `duration` varchar(55) NOT NULL,
  `start_date` varchar(55) NOT NULL,
  `end_date` varchar(55) NOT NULL,
  `status` varchar(20) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interns_det`
--

INSERT INTO `interns_det` (`id`, `intern_id`, `intern_name`, `Role`, `duration`, `start_date`, `end_date`, `status`, `added_on`) VALUES
(6, 1401, 'Nikhil Kumar', 'Web Developer', '1 month', '20/05/2020', '20/06/2020', 'Yet to begin', '2020-09-25 11:15:07'),
(7, 1501, 'Nikhil Kumar', 'Web Developer', '1 month', '20/05/2020', '20/06/2020', 'Completed', '2020-09-25 06:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `joinus`
--

CREATE TABLE `joinus` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `dob` date NOT NULL,
  `phone_no` text NOT NULL,
  `email_id` text NOT NULL,
  `join_pre` text NOT NULL,
  `hrsinmonth` int(11) NOT NULL,
  `profession` varchar(55) NOT NULL,
  `address` text NOT NULL,
  `bloodgrp` varchar(10) NOT NULL,
  `intreststat` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joinus`
--

INSERT INTO `joinus` (`id`, `name`, `dob`, `phone_no`, `email_id`, `join_pre`, `hrsinmonth`, `profession`, `address`, `bloodgrp`, `intreststat`, `added_on`) VALUES
(9, 'L GOURI SANKAR', '2020-09-18', '9439138809', 'admin@gmail.com', ' Add me to Whatsapp group', 5, 'student', 'SMALAI NAGAR', 'O-', 'abc', '2020-09-21 05:18:38'),
(11, 'Nikhil', '2020-09-16', '9439138809', 'l.gouri1234@gmail.com', ' Add me to Whatsapp group', 5, 'student', 'SMALAI NAGAR', 'O+', 'abc', '2020-09-24 08:40:16'),
(12, 'Nikhil', '2020-09-23', '9439138809', 'l.gouri1234@gmail.com', ' Add me to Whatsapp group', 5, 'student', 'SMALAI NAGAR', 'A+', 'abc', '2020-09-24 08:42:23'),
(14, 'L GOURI SANKAR', '2020-09-24', '9348812833', 'l.gouri1234@gmail.com', ' Add me to Whatsapp group', 9, 'student', 'SMALAI NAGAR', 'A+', 'abc', '2020-09-25 06:16:17'),
(19, 'NIkhil', '2020-09-26', '9439138809', 'l.gouri1234@gmail.com', ' Add me to Whatsapp group', 55, 'student', 'SMALAI NAGAR', 'O+', 'abc', '2020-09-27 01:57:53'),
(21, 'L GOURI SANKAR', '2020-09-25', '9439138809', 'l.gouri1234@gmail.com', ' Add me to Whatsapp group', 3, 'student', 'SMALAI NAGAR', 'A+', 'abc', '2020-09-27 04:03:55'),
(28, 'L GOURI SANKAR', '2020-09-22', '9439138809', 'rohitkmar35@gmail.com', ' Add me to Whatsapp group', 44, 'student', 'SMALAI NAGAR', 'O+', 'abc', '2020-09-28 08:20:39'),
(29, 'L GOURI SANKAR', '2020-09-28', '9439138809', 'l.gouri1234@gmail.com', ' Add me to Whatsapp group', 5, 'student', 'SMALAI NAGAR', 'O+', 'abc', '2020-09-28 09:14:06'),
(31, 'L GOURI SANKAR', '2020-09-30', '9439138809', 'l.gouri1234@gmail.com', ' Add me to Whatsapp group', 3, 'student', 'SMALAI NAGAR', 'O+', 'abc', '2020-09-29 11:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email_id` varchar(55) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email_id`, `added_on`) VALUES
(1, 'rohitkmar35@gmail.com', '2020-09-23 05:21:40'),
(2, 'l.gouri1234@gmail.com', '2020-09-23 05:36:11'),
(3, 'l.gouri1234@gmail.com', '2020-09-24 08:52:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_participants`
--
ALTER TABLE `event_participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_img`
--
ALTER TABLE `gallery_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interns_det`
--
ALTER TABLE `interns_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joinus`
--
ALTER TABLE `joinus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event_participants`
--
ALTER TABLE `event_participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gallery_img`
--
ALTER TABLE `gallery_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `interns_det`
--
ALTER TABLE `interns_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `joinus`
--
ALTER TABLE `joinus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
