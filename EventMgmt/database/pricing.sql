SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `event-management`
--
-- --------------------------------------------------------

--
-- Table structure for table `Events`
--
CREATE TABLE `prices` (
  `eventName` varchar(255) NOT NULL,
  `price` int(5) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `prices` VALUES
('Wedding', 1500),
('Cocktail',1000),
('Birthday', 500),
('Celebratory', 500),
('Dining',200);



