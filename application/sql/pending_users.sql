DROP TABLE IF EXISTS `enquete`;
CREATE TABLE IF NOT EXISTS `enquete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `text` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `enquete` (`id`, `title`, `slug`, `text`) VALUES
(1, 'title', '', 'test');