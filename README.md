--
-- Table structure for table `product`
--
CREATE TABLE `product` (
  `p_code` varchar(255) NOT NULL,
  `p_category` varchar(255) DEFAULT NULL,
  `p_party` varchar(255) DEFAULT NULL,
  `p_rate` varchar(255) DEFAULT NULL,
  `p_type` int(11) NOT NULL,
  `in_purchase` float NOT NULL,
  `in_sold` float NOT NULL,
  `in_stock` float NOT NULL,
  `inserted_date` datetime DEFAULT NULL,
  `last_modified_date` datetime DEFAULT NULL,
  `addedByUser` varchar(50) DEFAULT NULL,
  `updatedbyuser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_code`, `p_category`, `p_party`, `p_rate`, `p_type`, `in_purchase`, `in_sold`, `in_stock`, `inserted_date`, `last_modified_date`, `addedByUser`, `updatedbyuser`) VALUES
('0002', 'CLASSIC', 'SM', '16222', 10, 0, 0, 0, '2020-02-23 16:07:40', '2020-02-25 17:19:36', 'Richa', 'sadsa'),
('1904', 'IKGK', 'LGHT', '13400', 20, 0, 0, 2204.8, '2020-02-02 19:28:00', '2020-02-23 15:30:57', NULL, NULL),
('3821', 'CLASSIC', 'IK', '13400', 10, 0, 0, 29, '2020-02-06 23:39:00', '2020-02-23 16:06:23', NULL, 'Richa'),
('4501', 'IJJH', 'IK', '16004', 20, 0, 0, 0, '2020-02-25 17:14:34', NULL, 'sadsa', NULL),
('8451', 'IKGK', 'MILD', '13245', 10, 0, 0, 0, '2020-02-25 17:20:02', NULL, 'sadsa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
(1, 'Govind', 'Prajapati', 'admin@gmail.com', 'cf9aea1dff4bbee155bf468b69e11544', 'Male', '8286301908', '2020-02-20 18:50:35', '2020-02-20 18:50:35', 0),
(2, 'Arvind', 'Prajapati', 'arvind@gmail.com', 'cf9aea1dff4bbee155bf468b69e11544', 'Male', '7845124578', '2020-02-20 18:56:24', '2020-02-20 18:56:24', 1),
(3, 'Mehul', 'Shah', 'mehul@gmail.com', 'cf9aea1dff4bbee155bf468b69e11544', 'Female', '7845568912', '2020-02-21 19:51:36', '2020-02-21 19:51:36', 1),
(4, 'Navneet', 'System', 'meh@gmail.com', 'cf9aea1dff4bbee155bf468b69e11544', 'Female', '215645645123156', '2020-02-21 19:55:17', '2020-02-21 19:55:17', 1),
(5, 'Richa', 'Mahajan', 'richa@gmail.com', '2b2af08c09f1de8e69377c03dfb7e794', 'Female', '08169374698', '2020-02-23 16:06:00', '2020-02-23 16:06:00', 1),
(6, 'sadsa', 'dsfsajh', 'abc@gmail.com', 'cf9aea1dff4bbee155bf468b69e11544', 'Female', '8289784512', '2020-02-23 16:49:19', '2020-02-23 16:49:19', 1);

-- --------



ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
