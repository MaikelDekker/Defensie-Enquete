DROP TABLE `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
`user_id` int(11) NOT NULL,
`user_name` varchar(50) NOT NULL,
`user_email` varchar(50) NOT NULL,
`user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Mutunus', 'Mutinus@priapus.com', '123');