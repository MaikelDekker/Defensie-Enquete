DROP TABLE IF EXISTS `additionalcooling`;
CREATE TABLE IF NOT EXISTS `additionalcooling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `component` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `designer` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `color2` varchar(50) DEFAULT NULL,
  `ledColor` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `dimensions` varchar(50) DEFAULT NULL,
  `fanSize` varchar(50) DEFAULT NULL,
  `fanType` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `specialInfo` varchar(50) DEFAULT NULL,
  `material` varchar(50) DEFAULT NULL,
  `compatibility` varchar(50) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL,
  `decibel` varchar(50) DEFAULT NULL,
  `speed` varchar(50) DEFAULT NULL,
  `airMovement` varchar(50) DEFAULT NULL,
  `connection` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  `cableLength` varchar(50) DEFAULT NULL,
  `voltage` varchar(50) DEFAULT NULL,
  `mtbf` varchar(50) DEFAULT NULL,
  `coolant` varchar(50) DEFAULT NULL,
  `radiatorSize` varchar(50) DEFAULT NULL,
  `releasedate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `additionalcooling` (`id`, `name`, `component`, `slug`, `designer`, `color`, `color2`, `ledColor`, `price`, `type`, `dimensions`, `fanSize`, `fanType`, `description`, `specialInfo`, 
  `material`, `compatibility`, `attachment`, `decibel`, `speed`, `airMovement`, `connection`, `warranty`, `cableLength`, `voltage`, `mtbf`, `coolant`, `radiatorSize`, `releasedate`) VALUES
(1, 'Corsair AF120', 'Case Fan', '', 'Corsair', 'White', 'Black', 'Green', '€80', 'Additional Cooling', '140 mm x 140 mm x 25 mm', '120mm', 'Air Flow', 'This fan will make all computers great again', 
  'Very powerfull, with rubber screws', 'Plastic', 'Check case', 'Rubber screws & screws', '10db - 22db', '1.150 rpm', '67.8 cfm', '3-pins', '24 months', '7 cm', '5V', '100.000 hours', '1000ml', '2x 120mm', '01/01/2017');