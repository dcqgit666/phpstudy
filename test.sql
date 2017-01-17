/*
Navicat MySQL Data Transfer

Source Server         : localhost5.6
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-01-17 18:06:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `num` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES ('1', '苹果', '10');
INSERT INTO `test` VALUES ('7', '香蕉', '5');
INSERT INTO `test` VALUES ('8', '草莓', '8');
INSERT INTO `test` VALUES ('9', '梨', '7');
INSERT INTO `test` VALUES ('11', '猕猴桃', '3');
SET FOREIGN_KEY_CHECKS=1;
