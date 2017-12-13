DROP TABLE IF EXISTS `hdd`;
CREATE TABLE IF NOT EXISTS `hdd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `designer` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `construction` varchar(50) DEFAULT NULL,
  `component` varchar(50) DEFAULT NULL,
  `capacity` varchar(50) DEFAULT NULL,
  `interface` varchar(50) DEFAULT NULL,
  `read` varchar(50) DEFAULT NULL,
  `rpm` varchar(50) DEFAULT NULL,
  `cache` varchar(50) DEFAULT NULL,
  `volumeuse` varchar(50) DEFAULT NULL,
  `volumestandby` varchar(50) DEFAULT NULL,
  `powerread` varchar(50) DEFAULT NULL,
  `powerstandby` varchar(50) DEFAULT NULL,
  `powersleep` varchar(50) DEFAULT NULL,
  `poweridle` varchar(50) DEFAULT NULL,
  `dimensions` varchar(50) DEFAULT NULL,
  `information` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `hdd` (`id`, `name`, `slug`, `designer`, `description`, `price`, `construction`, `component`, `capacity`, `interface`, `read`, `rpm`, `cache`, `volumeuse`, `volumestandby`, `powerread`, `powersleep`, `powerstandby`, `poweridle`, `dimensions`, `information`, `weight`, `warranty`) VALUES
(1, 'WD Blue', '', 'Western Digital', 'Most ugly HDD I have ever seen', '€48,99', '3,5 Inch', 'HDD', '1 TB', '1x SATA/600', '150 MB/s', '7.200 RPM', '64 MB', '30 dB', '29 dB', '6.8 W', '1.2 W', '6.1 W', '1.2 W', '101,6 mm x 25,4 mm x 147mm', 'Stabiel door gebruikte No-Touch Head technologie', '440 Gram', '24 Months');