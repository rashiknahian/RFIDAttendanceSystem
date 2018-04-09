

--
-- Table structure for table `Attendance`
--

CREATE TABLE `attendance` (
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `starttime` time(6) NOT NULL,
  `endtime` time(6) NOT NULL,
  `duration` time(6) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
