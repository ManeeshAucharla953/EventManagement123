SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event-management`
--
-- --------------------------------------------------------

--
-- Table structure for table `customers`
--
CREATE TABLE `customers` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--
INSERT INTO `customers` VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '999999999'),
(2, 'Rajesh', 'Gaddam', 'rajesh.gaddam@example.com', '999999999'),
(3, 'Maneesh', 'Aucharla', 'maneesh.aucharla@example.com', '999999999'),
(4, 'Vamshi', '', 'vamshi@example.com', '999999999'),
(5, 'Mike', 'Hip', 'Mike.hip@example.com', '999999999'),
(6, 'Tom', 'Merry', 'tom.merry@example.com', '999999999'),
(7, 'Jill', 'Steven', 'jill.steven@example.com', '999999999'),
(8, 'Dan', 'Ankney', 'dan.ankney@example.com', '999999999'),

--
-- Indexes for dumped tables
--
--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`)
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
