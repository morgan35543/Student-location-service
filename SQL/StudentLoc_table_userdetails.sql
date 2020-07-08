
-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `Forename` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `entryID` int(50) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`Forename`, `Surname`, `Location`, `Date`, `entryID`, `userID`) VALUES
('Morgan', 'Wright', 'Allam', '08/07/2020 11:20:28 am', 6, 1),
('Jake', 'Nelson', 'Allam', '08/07/2020 11:20:30 am', 7, 2),
('Kyle', 'Stevens', 'Applied Science', '08/07/2020 11:20:33 am', 8, 3),
('Liam', 'Peters', 'Allam', '08/07/2020 11:20:35 am', 9, 4),
('Steve', 'Jobs', 'Applied Science', '08/07/2020 11:20:38 am', 10, 5),
('Morgan', 'Wright', 'Cohen', '08/07/2020 11:20:47 am', 11, 1),
('Morgan', 'Wright', 'Allam', '08/07/2020 11:20:50 am', 12, 1),
('Morgan', 'Wright', 'Ferens', '08/07/2020 11:32:16 am', 13, 1),
('James', 'Griffiths', 'Cohen', '08/07/2020 11:32:39 am', 14, 6),
('James', 'Griffiths', 'Cohen', '08/07/2020 11:39:26 am', 15, 6),
('Ross', 'Peterson', 'Brynmor Jones Library', '08/07/2020 11:39:29 am', 16, 9),
('Jake', 'Griffiths', 'Calder', '08/07/2020 11:39:32 am', 17, 7),
('Jake', 'Griffiths', 'Applied Science', '08/07/2020 11:39:35 am', 18, 7),
('Ross', 'Peterson', 'Fenner', '08/07/2020 11:39:37 am', 19, 9),
('Michael', 'Turner', 'Calder', '08/07/2020 11:39:40 am', 20, 11),
('Ross', 'Peterson', 'Ferens', '08/07/2020 11:39:43 am', 21, 9),
('Ross', 'Peterson', 'Applied Science', '08/07/2020 11:39:45 am', 22, 9),
('Alex', 'Sheridon', 'Calder', '08/07/2020 11:39:48 am', 23, 10),
('Daniel', 'Jones', 'Larkin', '08/07/2020 11:39:51 am', 24, 12),
('Liam', 'Peters', '', '08/07/2020 11:39:53 am', 25, 4),
('Jake', 'Nelson', 'Calder', '08/07/2020 11:40:22 am', 26, 2),
('Josh', 'Brownlie', 'Larkin', '08/07/2020 11:40:25 am', 27, 8),
('Michael', 'Turner', 'Brynmor Jones Library', '08/07/2020 11:40:28 am', 28, 11),
('James', 'Griffiths', 'Derwent', '08/07/2020 11:40:31 am', 29, 6),
('Liam', 'Peters', 'Applied Science', '08/07/2020 11:40:36 am', 30, 4),
('Jason', 'Phillips', 'Ferens', '08/07/2020 11:42:34 am', 31, 13),
('Jackson', 'Phillips', 'Calder', '08/07/2020 11:42:37 am', 32, 14),
('Harry', 'Jones', 'Applied Science', '08/07/2020 11:42:40 am', 33, 15),
('Hannah', 'Brown', 'Fenner', '08/07/2020 11:42:43 am', 34, 17),
('Tom', 'Peters', 'Larkin', '08/07/2020 11:42:47 am', 35, 16),
('Lucy', 'Taylor', 'Wilberforce', '08/07/2020 11:42:50 am', 36, 18),
('Jess', 'Smallwood', 'Sports Centre', '08/07/2020 11:42:54 am', 37, 19),
('Steven', 'Shaw', 'Sports Centre', '08/07/2020 11:42:58 am', 38, 22),
('Phil', 'Shaw', 'Robert Blackburn', '08/07/2020 11:43:02 am', 39, 20),
('Dave', 'Hudson', 'Fenner', '08/07/2020 11:43:06 am', 40, 21),
('Jackson', 'Phillips', 'Ferens', '08/07/2020 11:43:10 am', 41, 14),
('Hannah', 'Brown', 'Sports Centre', '08/07/2020 11:43:13 am', 42, 17),
('Jake', 'Nelson', 'Canhem Turner', '08/07/2020 11:43:18 am', 43, 2),
('Alexandar', 'Graves', 'Calder', '08/07/2020 11:44:50 am', 44, 25),
('Gary', 'Neville', 'Sports Centre', '08/07/2020 11:44:53 am', 45, 27),
('Alexandar', 'Graves', 'Wilberforce', '08/07/2020 11:44:57 am', 46, 25),
('Tyler', 'Samson', 'Larkin', '08/07/2020 11:45:02 am', 47, 26),
('Will', 'Wright', 'Derwent', '08/07/2020 11:45:06 am', 48, 23),
('Dan', 'Calderson', 'Derwent', '08/07/2020 11:45:10 am', 49, 24),
('Steven', 'Shaw', 'Canhem Turner', '08/07/2020 11:45:15 am', 50, 22),
('Dave', 'Hudson', 'Brynmor Jones Library', '08/07/2020 11:45:18 am', 51, 21),
('Phil', 'Shaw', 'Calder', '08/07/2020 11:45:23 am', 52, 20),
('Jason', 'Tyler', 'Calder', '08/07/2020 11:46:37 am', 53, 28),
('Liam', 'Nelson', 'Robert Blackburn', '08/07/2020 11:46:43 am', 54, 29),
('Ethan', 'Knowles', 'Allam', '08/07/2020 11:46:49 am', 55, 30),
('Steve', 'Jobs', 'Fenner', '08/07/2020 11:49:03 am', 56, 5);
