SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `event-management`
--
-- --------------------------------------------------------

--
-- Table structure for table `Events`
--
 CREATE TABLE `events` (
  `regID` varchar(45) NOT NULL PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `phone` VARCHAR(10) NOT NULL UNIQUE,
  `email` VARCHAR(45) NOT NULL UNIQUE,
  `event` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `attendees` int(3) NOT NULL,
   `eventDate` date NOT NULL);