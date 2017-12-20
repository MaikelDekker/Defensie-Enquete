-- ----------------------------
-- Table structure for `survey_questions`
-- ----------------------------
DROP TABLE IF EXISTS `survey_questions`;
CREATE TABLE `survey_questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `questions` text NOT NULL,
  `type` enum('2','1','0') NOT NULL DEFAULT '0' COMMENT '0=Slider,1=Radiobtn,2=Open',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of survey_questions
-- ----------------------------
INSERT INTO `survey_questions` VALUES ('1', 'Welk cijfer zou je jouw gezondheid op dit moment geven?', '0');
INSERT INTO `survey_questions` VALUES ('2', 'Ik voel me op dit moment <u>fysiek</u> fit.', '0');
INSERT INTO `survey_questions` VALUES ('3', 'Ik voel me op dit moment <u>mentaal</u> fit.', '0');
INSERT INTO `survey_questions` VALUES ('4', 'Mijn kwaliteit van slapen was afgelopen nacht(en)', '0');
INSERT INTO `survey_questions` VALUES ('5', 'Ik heb/had er zin in om deze week te beginnen.', '0');
INSERT INTO `survey_questions` VALUES ('6', 'Ik heb geen spierpijn en spierstijfheid.', '0');
INSERT INTO `survey_questions` VALUES ('7', 'Ik ben positief over mijn komende prestaties.', '0');
INSERT INTO `survey_questions` VALUES ('8', 'Ik verwacht dat ik het einde van de opleiding kan halen.', '0');
INSERT INTO `survey_questions` VALUES ('9', 'De sfeer in mijn klas is:', '0');
INSERT INTO `survey_questions` VALUES ('10', 'Mijn klasgenoten zullen mij in moeilijke situaties helpen.', '0');
INSERT INTO `survey_questions` VALUES ('11', 'Ik krijg thuis ondersteuning als ik het moeilijk heb.', '0');
INSERT INTO `survey_questions` VALUES ('12', 'Ik sta nog steeds achter mijn keuze om marinier te willen worden.', '0');
INSERT INTO `survey_questions` VALUES ('13', 'Ik heb de leer- en lesstof van de afgelopen week kunnen begrijpen en onthouden.', '0');
INSERT INTO `survey_questions` VALUES ('14', 'Mijn instructeur helpt of ondersteunt mij als ik het moeilijk heb.', '0');
INSERT INTO `survey_questions` VALUES ('15', 'Mijn instructeur is voor mij het voorbeeld als marinier.', '0');
INSERT INTO `survey_questions` VALUES ('16', 'Heb je behoefte aan een advies van de fysiotherapeut omtrent het voorkomen van een dreigende\r\nblessure?', '1');
INSERT INTO `survey_questions` VALUES ('17', 'Ik heb behoefte aan een vertrouwelijk gesprek met:', '1');
INSERT INTO `survey_questions` VALUES ('18', 'Eventuele toelichting op vragen:', '2');