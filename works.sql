--
-- Table structure for table `works`
--
CREATE TABLE `works` (
  `work_id` int(11) NOT NULL AUTO_INCREMENT,
  `work_name` varchar(255) NOT NULL,
  `starting_date` datetime DEFAULT NULL,
  `ending_date` datetime DEFAULT NULL,
  `status` set('planing','doing','completing') DEFAULT 'planing',
   PRIMARY KEY (work_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`work_id`, `work_name`, `starting_date`, `ending_date`, `status`) VALUES
(1, 'Coding', '2019-11-28 08:00:00', '2019-11-28 11:00:00', 'completing'),
(2, 'view calendar', '2019-11-29 07:00:00', '2019-11-29 08:00:00', 'completing'),
(3, 'PHP unitest', '2019-11-30 12:00:00', '2019-11-30 14:00:00', 'planing');