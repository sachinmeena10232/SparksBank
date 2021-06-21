
CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Naveen', 'Gaurav', 100),
('Virat', 'Shashank', 50),
('Puneet', 'Ashok', 200),
('Gaurav', 'Vikas', 100),
('Vikas', 'Divyansh', 110),
('Divyansh', 'Naveen', 110);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Naveen', 'Naveen@gmail.com', 3400),
('Vikas', 'Vikas@gmail.com', 8800),
('Gaurav', 'Gaurav@gmail.com', 1400),
('Virat', 'Virat@gmail.com', 1950),
('Vibhor', 'Vibhor@gmail.com', 1200),
('Ashish', 'Ashish@gmail.com', 1700),
('Divyansh', 'Divyansh@gmail.com', 1200),
('Shashank', 'Shashank@gmail.com', 1250),
('Puneet', 'Puneet@gmail.com', 800),
('Ashok', 'Ashok@gmail.com', 1800);
COMMIT;


