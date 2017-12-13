DROP TABLE IF EXISTS `ram`;
CREATE TABLE IF NOT EXISTS `ram` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `designer` varchar(50) DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  `price` varchar(50) DEFAULT NULL,
  `capacity` varchar(50) NOT NULL,
  `timings` varchar(50) NOT NULL,
  `releaseDate` varchar(50) DEFAULT NULL,
  `frequency` varchar(50) DEFAULT NULL,
  `dims` varchar(50) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `ram` (`id`, `name`, `designer`, `slug`, `price`, `releaseDate`, `frequency`, `dims`, `warranty`, `type`, `timings`, `capacity`) VALUES
(1, 'Vengeance', 'Corsair', '', '€150', '10/10/2016', '3200', '2', '36', 'DDR4', 'CL9 9-9-24', '16GB');