--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'canteen.info@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `user_uname` varchar(12) NOT NULL,
  `user_first` varchar(15) NOT NULL,
  `user_last` varchar(15) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` int(40) NOT NULL,
  `user_position` varchar(30) NOT NULL,
  `user_balance` int(4) DEFAULT NULL,
  `user_pwd` varchar(10) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_uname`, `user_first`, `user_last`, `user_email`, `user_phone`, `user_position`, `user_balance`, `user_pwd`, `image`) VALUES
(2, 'rajin', 'Rajin', 'Ahmed', 'j@h.com', 2213, 'student', 3203, '123', 'pic.jpg'),
(12, 'CSE00805444', 'Asif', 'Istiaque', 'asif@gmail.com', 198274635, 'student', 5860, '123', 'abdin.jpg'),
(13, 'CSE12635432', 'jahed', 'rajib', 'j@gmail.com', 2123441, 'student', 220, '123', 'IMG_20180331_203613.jpg'),
(14, 'ETE2367443', 'ishan', 'jahan', 'ishan@gmail.com', 1521438193, 'staff', 0, '123', '1_vo8bfvr4k9iNktDWxd1F2g.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
