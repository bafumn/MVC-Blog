-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 02, 2021 at 08:34 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint NOT NULL,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `count`) VALUES
(1, 'Programming', 2),
(2, 'Music', 1),
(3, 'Sport', 0),
(4, 'Inspiration', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int NOT NULL,
  `category_id` int NOT NULL,
  `created_at` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author_id`, `category_id`, `created_at`, `description`, `picture`, `content`) VALUES
(1, 'What is HTML?', 1, 1, 1616060682, '', '', 'HTML stands for Hypertext Markup Language. It allows the user to create and structure sections, paragraphs, headings, links, and blockquotes for web pages and applications.\r\n\r\nHTML is not a programming language, meaning it doesn’t have the ability to create dynamic functionality. Instead, it makes it possible to organize and format documents, similarly to Microsoft Word.\r\n\r\nHTML was invented by Tim Berners-Lee, a physicist at the CERN research institute in Switzerland. He came up with the idea of an Internet-based hypertext system.\r\n\r\nHypertext means a text that contains references (links) to other texts that viewers can access immediately. He published the first version of HTML in 1991, consisting of 18 HTML tags. Since then, each new version of the HTML language came with new tags and attributes (tag modifiers) to the markup.\r\n\r\nAccording to Mozilla Developer Network’s HTML Element Reference, currently, there are 140 HTML tags, although some of them are already obsolete (not supported by modern browsers).'),
(2, 'Web design for beginners', 1, 1, 1616319882, 'Web design is a crucial component of the web development process. If you\\\'re interested in web design, we\\\'re guessing you have a creative streak.', '', '<p>This seems like a no brainer, right? But sometimes we can get overly ambitious and end up discouraged. For your first project, it’s a good idea to choose something simple and fun. An ecommerce site is more complicated and would be better to tackle once you have more experience.&nbsp;<br></p>\r\n<p>A blog is a great place to start. It will be a good design exercise <em>and</em> you’ll learn how a Content Management System (CMS) works, which will be important to know for future site designs. Best of all — you don’t have to start from scratch. There are plenty of <a href=\"https://webflow.com/blog-websites\" target=\"_blank\">blog templates</a> that make it easy to put one together.<br></p>\r\n<p>Templates are a valuable learning tool. Watching how HTML, CSS, and Javascript elements are styled and come together will give you deeper insight into what makes a design work. You can use templates as a foundation to make changes and customizations.<br></p>'),
(3, 'Top 7 Amazing Reasons Why You Should Play Guitar', 1, 2, 1612513666, 'Interestingly enough, these two things are the main reasons why people want and don’t want to learn how to play guitar.', '', '<p>Let&#8217;s get right to it!<span id=\"more-2350\"></span></p>\r\n<h2>You Actually Get Smarter</h2>\r\n<p>Believe it or not, it was scientifically proven that your brain makes <strong>new neural networks</strong> when you start learning how to play guitar. This effect is much more apparent if the subject started learning guitar when they were a kid. In fact, kids who start learning to play guitar at a young age, are later much more capable of solving complex problems and<strong> finding solutions to complex situations.</strong></p>\r\n<p>On top of the hard connections in your brain, you also <strong>develop your muscle memory</strong> in general. Let&#8217;s not forget that playing guitar includes a lot of fine motor skills which are crucial to a good performance and technique. From all the reasons to play guitar, this one is the most important.</p>\r\n<h2>Trains Your Focus</h2>\r\n<p>Playing guitar does a great deal of<strong> benefit to your ability to focus.</strong> Have you ever found it difficult to really focus on something? Loss of attention, and all that stuff? Well, playing guitar significantly helps with that issue. Even the simplest things such as just playing a chord without false notes can require a whole lot of focus in the beginning.</p>\r\n<p>The best thing is, this feeling rarely ever goes away. Once you master one thing and feel like you can do it in your sleep, there will always be other techniques that will require that same amount of focus. Even though it might seem pretty simple, just focusing on something to that extent is a<strong> skill that takes an effort to develop.</strong></p>\r\n<h2>Music Not Only Sounds Awesome, It Feels Awesome</h2>\r\n<p>Here&#8217;s the deal. Sitting at home practicing those few chords may sound alright, and you will probably feel a sense of accomplishment. That is all fine. However, the moment you get into that studio for the first time, where you are not playing alone, everything changes.</p>\r\n<p>That first band practice session probably won&#8217;t be perfect as it will be your first time and that is perfectly normal. The thing is, in one moment all of you are going to sync in. <em>That feeling is going leave you hooked for life.</em> It&#8217;s a high that can&#8217;t be described, can&#8217;t be recreated and is better than any drug out there.</p>\r\n<p>It never gets old, no matter how many shows you have played or how many bands you have changed.</p>\r\n<h2>The Cool Factor</h2>\r\n<p>Let&#8217;s be real for a moment. <strong>Playing guitar is just cool.</strong> Many people go into playing guitar because of it just looks so cool, without even understanding what kind of effort it takes to even connect two simple chords. Once faced with that crossroad, a lot of them give up but a good percentage pushes through.</p>\r\n<p>A guitar player who is comfortable with the music they are playing simply<strong> radiates confidence.</strong> Naturally, that is going to look cool no matter the setting or if you are surrounded by other guitarists or just regular folk.</p>\r\n<p>Sure, learning guitar just to look cool is a bad way to go about this, but the fact remains that it&#8217;s a nice feeling to totally nail a solo in front of an audience.</p>\r\n<h2>You Can Make It Your Profession</h2>\r\n<p>Imagine being able to<strong> live comfortably from playing guitar.</strong> How awesome would that be? Well, this scenario is not that far-fetched. Guitarists who break through and reach the level of Slash are few and far between. However, there is a whole spectrum of other ways you can make a decent living from playing guitar that doesn&#8217;t require you to become a rock star.</p>\r\n<p>As a guitar player, you can<strong> become a session musician,</strong> jumping in for various bands when necessary. On the other hand, you can write songs for a living and sell those songs to various performers. There is just so many avenues of approach that you can take and still make good money at the end of the day.</p>\r\n<p>Naturally, you will have to be pretty good, but that goes for any profession out there.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
