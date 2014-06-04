/*
Navicat MySQL Data Transfer

Source Server         : mth3l3m3nt_local
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : mth_tuts

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2014-05-19 16:01:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for exploit_store
-- ----------------------------
DROP TABLE IF EXISTS `exploit_store`;
CREATE TABLE `exploit_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exp_cat` int(11) DEFAULT NULL,
  `exploit_name` varchar(255) DEFAULT NULL,
  `exploit_code` varchar(255) DEFAULT NULL,
  `exploit_payload` text,
  `attachment` blob,
  `attachment_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exploit_cat_FK` (`exp_cat`),
  CONSTRAINT `exploit_cat_FK` FOREIGN KEY (`exp_cat`) REFERENCES `tutorial_categories` (`cat_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for steps
-- ----------------------------
DROP TABLE IF EXISTS `steps`;
CREATE TABLE `steps` (
  `step_id` int(11) NOT NULL AUTO_INCREMENT,
  `tutorial_id` int(11) DEFAULT NULL,
  `step_title` varchar(255) DEFAULT NULL,
  `step_description` text,
  `step_screenshot` longblob,
  `thumb` mediumblob,
  PRIMARY KEY (`step_id`),
  KEY `fk_tut_steps` (`tutorial_id`),
  CONSTRAINT `fk_tut_steps` FOREIGN KEY (`tutorial_id`) REFERENCES `tutorial` (`tutorial_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tutorial
-- ----------------------------
DROP TABLE IF EXISTS `tutorial`;
CREATE TABLE `tutorial` (
  `tutorial_id` int(11) NOT NULL AUTO_INCREMENT,
  `tutorial_name` varchar(255) DEFAULT NULL,
  `tutorial_description` text,
  `tutorial_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`tutorial_id`),
  KEY `fk_cat_tut` (`tutorial_category`),
  CONSTRAINT `fk_cat_tut` FOREIGN KEY (`tutorial_category`) REFERENCES `tutorial_categories` (`cat_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tutorial_categories
-- ----------------------------
DROP TABLE IF EXISTS `tutorial_categories`;
CREATE TABLE `tutorial_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', 'mth3l3m3nt', 'FFF648214B610E60400A006E171FFDF85C');
-- ----------------------------
-- View structure for report_by_group
-- ----------------------------
DROP VIEW IF EXISTS `report_by_group`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `report_by_group` AS SELECT
steps.step_title AS steps_step_title,
steps.step_description AS steps_step_description,
steps.step_screenshot AS steps_step_screenshot,
tutorial.tutorial_name AS tutorial_tutorial_name
FROM
	`steps`
INNER JOIN `tutorial` ON `steps`.`tutorial_id` = `tutorial`.`tutorial_id`
ORDER BY
	`steps`.`tutorial_id` ASC,
	`steps`.`step_id` ASC ;
