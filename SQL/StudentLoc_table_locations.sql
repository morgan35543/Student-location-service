
-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `Location` varchar(50) NOT NULL,
  `locationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`Location`, `locationID`) VALUES
('Canhem Turner', 2),
('Robert Blackburn', 4),
('Brynmor Jones Library', 6),
('Sports Centre', 8),
('Cohen', 10),
('Allam', 12),
('Derwent', 14),
('Ferens', 16),
('Fenner', 18),
('Larkin', 20),
('Calder', 22),
('Applied Science', 24),
('Wilberforce', 26);
