SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `event-management`
--

-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--
INSERT INTO `users` VALUES
('test', '1234', 'user'),
('test2', 'abcd', 'superUser'),
('test3', 'test', 'user'),
('test4', 'admin', 'admin'),
('test5', '1234', 'user');
