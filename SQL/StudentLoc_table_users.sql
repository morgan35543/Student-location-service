
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `Forename` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `Forename`, `Surname`) VALUES
(1, 'Morgan', 'Wright'),
(2, 'Jake', 'Nelson'),
(3, 'Kyle', 'Stevens'),
(4, 'Liam', 'Peters'),
(5, 'Steve', 'Jobs'),
(6, 'James', 'Griffiths'),
(7, 'Jake', 'Griffiths'),
(8, 'Josh', 'Brownlie'),
(9, 'Ross', 'Peterson'),
(10, 'Alex', 'Sheridon'),
(11, 'Michael', 'Turner'),
(12, 'Daniel', 'Jones'),
(13, 'Jason', 'Phillips'),
(14, 'Jackson', 'Phillips'),
(15, 'Harry', 'Jones'),
(16, 'Tom', 'Peters'),
(17, 'Hannah', 'Brown'),
(18, 'Lucy', 'Taylor'),
(19, 'Jess', 'Smallwood'),
(20, 'Phil', 'Shaw'),
(21, 'Dave', 'Hudson'),
(22, 'Steven', 'Shaw'),
(23, 'Will', 'Wright'),
(24, 'Dan', 'Calderson'),
(25, 'Alexandar', 'Graves'),
(26, 'Tyler', 'Samson'),
(27, 'Gary', 'Neville'),
(28, 'Jason', 'Tyler'),
(29, 'Liam', 'Nelson'),
(30, 'Ethan', 'Knowles');
