-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2019 at 11:08 AM
-- Server version: 5.7.25
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
-- Database: `judithco_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `pub_year` year(4) DEFAULT NULL,
  `author` varchar(55) DEFAULT NULL,
  `publisher` varchar(55) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `book_count` int(11) DEFAULT NULL,
  `available` enum('y','n') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `pub_year`, `author`, `publisher`, `img`, `book_count`, `available`) VALUES
(1, 'Harry Potter- Philosoper\'s Stone', 1997, 'JK Rowling', 'Bloomsbury', 'https://prodimage.images-bn.com/pimages/9780545790352_p0_v25_s550x406.jpg', 4, 'y'),
(2, 'Harry Potter & Chamber of Secrets', 1999, 'JK Rowling', 'Bloomsbury', 'https://images-na.ssl-images-amazon.com/images/I/51v1aAlA9xL._SX318_BO1,204,203,200_.jpg', 4, 'y'),
(3, 'Harry Potter & Prisoner of Azkaban', 2000, 'JK Rowling', 'Bloomsbury', 'https://hpmedia.bloomsbury.com/rep/s/9781408855911_309576.jpeg', 2, 'y'),
(4, 'The Social Contract', 2006, 'Jean-Jacques Rousseau', 'Penguin', 'https://images-na.ssl-images-amazon.com/images/I/41nsp-WOYyL._SX331_BO1,204,203,200_.jpg', 3, 'y'),
(5, 'Discourse on the Origin of Inequality', 2004, 'Jean-Jacques Rousseau', 'Dover Publication', 'https://images.gr-assets.com/books/1388197284l/12651.jpg', 4, 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
