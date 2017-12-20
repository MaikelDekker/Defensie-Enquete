-- ----------------------------
-- Table structure for `educationblocks`
-- ----------------------------
DROP TABLE IF EXISTS `educationblocks`;
CREATE TABLE `educationblocks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `educationBlocks` varchar(125) NOT NULL DEFAULT '',
  `type` enum('POTOM','EMV Blok') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of educationblocks
-- ----------------------------
INSERT INTO `educationblocks` VALUES ('1', 'EMV Blok 17-1', 'EMV Blok');
INSERT INTO `educationblocks` VALUES ('2', 'EMV Blok 17-2', 'EMV Blok');
INSERT INTO `educationblocks` VALUES ('3', 'EMV Blok 17-3', 'EMV Blok');
INSERT INTO `educationblocks` VALUES ('4', 'EMV Blok 18-1', 'EMV Blok');
INSERT INTO `educationblocks` VALUES ('5', 'EMV Blok 18-2', 'EMV Blok');
INSERT INTO `educationblocks` VALUES ('6', 'EMV Blok 18-3', 'EMV Blok');
INSERT INTO `educationblocks` VALUES ('7', 'EMV Blok 18-4', 'EMV Blok');
INSERT INTO `educationblocks` VALUES ('8', 'POTOM 2017', 'POTOM');
INSERT INTO `educationblocks` VALUES ('9', 'POTOM 2018', 'POTOM');