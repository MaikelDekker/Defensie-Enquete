DROP TABLE IF EXISTS `case`;
CREATE TABLE IF NOT EXISTS `case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `designer` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `construction` varchar(50) DEFAULT NULL,
  `motherboardsize` varchar(50) DEFAULT NULL,
  `lengthgpu` varchar(50) DEFAULT NULL,
  `heightcooler` varchar(50) DEFAULT NULL,
  `lengthcooler` varchar(50) DEFAULT NULL,
  `powersupply` varchar(50) DEFAULT NULL,
  `extern525` varchar(50) DEFAULT NULL,
  `toolles525` varchar(50) DEFAULT NULL,
  `intern35` varchar(50) DEFAULT NULL,
  `toolles35` varchar(50) DEFAULT NULL,
  `intern25` varchar(50) DEFAULT NULL,
  `fullsizeslots` varchar(50) DEFAULT NULL,
  `watercooling` varchar(50) DEFAULT NULL,
  `windowkit` varchar(50) DEFAULT NULL,
  `dimensions` varchar(50) DEFAULT NULL,
  `releasedate` varchar(50) DEFAULT NULL,
  `information` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `case` (`id`, `name`, `slug`, `designer`, `description`, `color`, `price`, `type`, `construction`, `motherboardsize`, `lengthgpu`, `heightcooler`, `lengthcooler`, `powersupply`, `extern525`, `toolles525`, `intern35`, `toolles35`, `intern25`, `fullsizeslots`, `watercooling`, `windowkit`, `dimensions`, `releasedate`, `information`, `weight`,  `warranty`) VALUES
(1, 'AI7000 Glass', '', 'Sharkoon', 'The AI7000 Glass is shit case.', 'Green', '€80', 'Tower-behuizing', 'Midi-tower', 'ATX', '380 mm', '175 mm', '230 mm', 'ATX', '2', 'Yes', '3', 'No', '2', '7', '2', 'Yes', '213mm x 470mm x 446mm', '01/01/2017', 'Nothing to fill in', '8 Kg', '6 Maanden');