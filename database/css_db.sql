








SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";










CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `user_type` tinyint(1) NOT NULL COMMENT '1= admin, 2= staff,3= customer',
  `ticket_id` int(30) NOT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





INSERT INTO `comments` (`id`, `user_id`, `user_type`, `ticket_id`, `comment`, `date_created`) VALUES
(4, 1, 1, 3, 'your request is under process.', '2023-03-22 13:07:52');







CREATE TABLE `customers` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `discount` int(5) NOT NULL DEFAULT 0,
  `cost` int(11) DEFAULT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `orders` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





INSERT INTO `customers` (`id`, `firstname`, `lastname`, `middlename`, `contact`, `discount`, `cost`, `address`, `email`, `password`, `date_created`, `orders`) VALUES
(4, 'Om', 'Yadav', 'Prakash', '8692967853', 2, 50000, 'kalyan', 'omprakash@gmail.com', 'fb9abce118c6f8c034ec673f9f447870', '2023-03-16 12:04:39', 4),
(5, 'amit', 'wakade', 'anil', '9867960045', 5, 150000, 'airoli', 'amit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-03-17 10:51:40', 1),
(6, 'Mahesh ', 'Shah', 'R', '9967852321', 5, 100001, '106, Ornate Enclave, Vasai West, 401207', 'maheshrshah@gmail.com', '49bb197bec17b7d20b2df6b1f3c3434a', '2023-04-05 22:31:48', 1),
(7, 'Manisha', 'Goshal', 'E', '9987745203', 5, 100004, '706, Ocean Towers , Dahisar west', 'manisha@gmail.com', '247e0a31048554f35902283df30263ab', '2023-04-05 22:33:20', 1),
(8, 'Sana', 'william', 'K', '9965545203', 5, 100002, '405, Mist Tower, Kandivali west, 400045', 'sanawilliam@gmail.com', 'b8873a156dc35dc99b69d0f93ebe22fc', '2023-04-05 22:35:23', 1),
(9, 'Tzuyu', 'Chan', 'M', '8867745203', 0, 0, '202, Sairaj apartment, Andheri West 400058', 'tzuyuchan@gmail.com', '4718e63ec3601a9ebf83da264de25cfc', '2023-04-05 22:37:11', 0),
(10, 'Krist', 'William', 'A', '4738338292', 5, 0, '1199, Heaven Plaza, Mulund, 4000032', 'krist@gmail.com', 'a4ca151663cbc53524c14fccd2be22e1', '2023-04-05 23:29:43', 0),
(28, 'mayank', 'yadav', 'r', '9987745203', 5, 0, 'mira road', 'ompraks@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-04-12 19:55:03', 0),
(50, 'Faaruq', 'Shah', 'Ali', '93278746474', 5, 100001, 'abc wing , a building , nallasopara', 'dbc@gmail.com', 'e99a18c428cb38d5f260853678922e03', '2023-04-13 12:59:43', 0),
(54, 'Evelyn', 'Douma', 'w', '2748289073', 5, 200000, 'worli', 'ev@gmail.com', 'e5e5455ba6ef96534a9671ddaaaef4ae', '2023-04-27 00:00:45', 1),
(58, 'Momo', 'T', 'k', '89097032', 0, NULL, 'sk 4th avenue', 'momo@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-04-30 09:12:14', 0),
(59, 'sana', 'T', 'W', '8924338974', 0, NULL, 'sk 5th avenue', 'sana@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-04-30 09:13:06', 0);







CREATE TABLE `departments` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





INSERT INTO `departments` (`id`, `name`, `description`, `date_created`) VALUES
(1, 'Printing Department', 'This department handles the printing work of the company\r\n', '2020-11-09 11:43:18'),
(3, 'managing  Department', 'Management Department', '2020-11-09 11:44:41'),
(4, 'Packing and Delivery', 'This department handles the packing of goods and delivering them as per the order.\r\n', '2023-04-04 14:49:44');







CREATE TABLE `queries` (
  `email_address` varchar(255) NOT NULL,
  `query` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





INSERT INTO `queries` (`email_address`, `query`) VALUES
('ennikdouma@gmail.com', 'How to reach the office?'),
('ev@gmail.com', 'Hello');







CREATE TABLE `staff` (
  `id` int(30) NOT NULL,
  `department_id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





INSERT INTO `staff` (`id`, `department_id`, `firstname`, `lastname`, `middlename`, `contact`, `address`, `email`, `salary`, `password`, `date_created`) VALUES
(2, 1, 'Suraj', 'Yadav', 'Mohit', '9967745203', 'Thane', 'Admin@123.com', 400000000, '5d41402abc4b2a76b9719d911017c592', '2023-03-15 23:53:43'),
(3, 1, 'unnie', 'tyson', 'r', '9988776655', 'airoli', 'amitw@gmail.com', 430000, 'e5e5455ba6ef96534a9671ddaaaef4ae', '2023-03-27 21:47:09'),
(4, 4, 'Aman', 'singh', 'Rishi', '9988776655', 'Borivali', 'aman320@gmail.com', 455566, 'ccda1683d8c97f8f2dff2ea7d649b42c', '2023-04-04 14:51:56'),
(5, 1, 'Gaurav', 'Pandey', 'Shah', '8832391230', 'Mira road', 'gaurav@gmail.com', 505555, '29be54a52396750258d886abc5417fda', '2023-04-04 14:53:20'),
(6, 1, 'Faaruqan', 'Shah', 'Ali', '12233817', 'abc wing , a building , nallasopara', 'dbc@gmail.com', 432779, '81dc9bdb52d04dc20036dbd8313ed055', '2023-04-14 12:11:00'),
(7, 4, 'madan', 'pandey', 'mohan', '9867960045', 'Netherland', 'Ennikdouma@gmail.com', 231000, 'f057f5ccb87a310534b9dda3a69a72c4', '2023-04-15 19:16:14'),
(8, 1, 'Evelyn', 'Douma', 'R', '238229112', 'NK & SK', 'evelyn@gmail.com', 450000, 'e5e5455ba6ef96534a9671ddaaaef4ae', '2023-04-27 00:00:00'),
(9, 4, 'John', 'mitchell', 'M', '672617838', 'west kong', 'john@gmail.com', 304033, 'e5e5455ba6ef96534a9671ddaaaef4ae', '2023-04-27 07:34:04');







CREATE TABLE `tickets` (
  `id` int(30) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0=Pending,1=on process,2= Closed',
  `department_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `staff_id` int(30) NOT NULL,
  `admin_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





INSERT INTO `tickets` (`id`, `subject`, `description`, `status`, `department_id`, `customer_id`, `staff_id`, `admin_id`, `date_created`) VALUES
(5, '5000 glossy shiny papers', '&lt;p&gt;Order of 10000 shiny printing albums under 15 days.&lt;/p&gt;', 0, 1, 4, 0, 1, '2023-04-04 14:59:26'),
(6, '500 albums of 900 psges', 'within a week', 2, 4, 5, 0, 0, '2023-04-04 15:31:09'),
(7, '2000 Alpha designed albums', '&lt;p&gt;1. 50000 glossy papers&amp;nbsp;&lt;/p&gt;&lt;p&gt;2.&amp;nbsp; 2000 Albums with shiny cover&lt;/p&gt;&lt;p&gt;3. Should be completed within a month.&lt;/p&gt;', 2, 1, 6, 0, 1, '2023-04-05 22:39:22'),
(8, '20000 normal photo printing papers', '&lt;p&gt;hello&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 1, 4, 4, 0, 0, '2023-04-13 16:01:57'),
(9, '10000 Glossy papers', '&lt;p&gt;Haruyaii&lt;/p&gt;', 3, 4, 4, 0, 0, '2023-04-27 23:56:09'),
(10, 'Beta designed 500 albums with 7000 shiny papers', '', 2, 4, 54, 0, 1, '2023-04-30 12:22:56'),
(11, '5000 Pearl and Lustre papers', '&lt;h6&gt;Pearl and Lustre with some shine&lt;br&gt;&lt;/h6&gt;', 0, 1, 50, 0, 1, '2023-04-30 13:06:07'),
(12, '6000 Lustre papers', '&lt;p&gt;hello&lt;br&gt;&lt;/p&gt;', 0, 1, 8, 0, 1, '2023-04-30 13:11:16');







CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '1 = Admin,2=support',
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `role`, `username`, `password`, `date_created`) VALUES
(1, 'Suraj', 'Mohit', 'Yadav', 1, 'surajyadav', 'e5e5455ba6ef96534a9671ddaaaef4ae', 0);








ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `queries`
  ADD PRIMARY KEY (`email_address`);




ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);








ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;




ALTER TABLE `customers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;




ALTER TABLE `departments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;




ALTER TABLE `staff`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;




ALTER TABLE `tickets`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;




ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


CREATE TABLE `css_db`.`material` (`m_id` INT NOT NULL PRIMARY KEY , `name` VARCHAR(20) NOT NULL , `cost` INT NOT NULL ) ENGINE = InnoDB;


INSERT INTO material VALUES
(1,'Glossy',45),
(2,'NT_thick_Glossy',48),
(3,'Matte',44),
(4,'NT_thick_Matte',46),
(5,'Lustre',50),
(6,'Pearl',50);

ALTER TABLE `tickets` ADD `no_of_p` INT NOT NULL AFTER `id`;

UPDATE `tickets` SET `no_of_p` = 50;

ALTER TABLE `tickets` ADD `m_name` VARCHAR(20) NOT NULL AFTER `id`;




COMMIT;

