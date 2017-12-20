-- ----------------------------
-- Table structure for `survey_answers`
-- ----------------------------
DROP TABLE IF EXISTS `survey_answers`;
CREATE TABLE `survey_answers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fullName` varchar(125) NOT NULL DEFAULT '',
  `education` int(1) NOT NULL DEFAULT '0',
  `class` varchar(125) NOT NULL DEFAULT '',
  `psoftNr` varchar(125) NOT NULL DEFAULT '',
  `answerQ1` int(1) NOT NULL DEFAULT '0',
  `answerQ2` int(1) NOT NULL DEFAULT '0',
  `answerQ3` int(1) NOT NULL DEFAULT '0',
  `answerQ4` int(1) NOT NULL DEFAULT '0',
  `answerQ5` int(1) NOT NULL DEFAULT '0',
  `answerQ6` int(1) NOT NULL DEFAULT '0',
  `answerQ7` int(1) NOT NULL DEFAULT '0',
  `answerQ8` int(1) NOT NULL DEFAULT '0',
  `answerQ9` int(1) NOT NULL DEFAULT '0',
  `answerQ10` int(1) NOT NULL DEFAULT '0',
  `answerQ11` int(1) NOT NULL DEFAULT '0',
  `answerQ12` int(1) NOT NULL DEFAULT '0',
  `answerQ13` int(1) NOT NULL DEFAULT '0',
  `answerQ14` int(1) NOT NULL DEFAULT '0',
  `answerQ15` int(1) NOT NULL DEFAULT '0',
  `answerQ16` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 = Nee geen behoefte aan Fysio. 1 = Wel.',
  `answerQ17` enum('4','3','2','1','0') NOT NULL DEFAULT '0' COMMENT '0=NVT, 1=Verzorger, 2=Arts, 3=Eerenstein, 4=Fieldlab',
  `answerQopen` text,
  `weekNr` int(11) NOT NULL DEFAULT '0',
  `answerTimestamp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;