/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : mm

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-03-26 10:21:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for m_class
-- ----------------------------
DROP TABLE IF EXISTS `m_class`;
CREATE TABLE `m_class` (
  `area_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '地区id',
  `colloge_id` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '地区父id',
  `class_name` varchar(120) NOT NULL DEFAULT '' COMMENT '地区名称',
  `area_type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '地区类型 0:country,1:province,2:city,3:district',
  PRIMARY KEY (`area_id`),
  KEY `parent_id` (`colloge_id`),
  KEY `area_type` (`area_type`)
) ENGINE=MyISAM AUTO_INCREMENT=3429 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for m_colloge
-- ----------------------------
DROP TABLE IF EXISTS `m_colloge`;
CREATE TABLE `m_colloge` (
  `area_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '地区id',
  `school_id` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '地区父id',
  `colloge_name` varchar(120) NOT NULL DEFAULT '' COMMENT '地区名称',
  `area_type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '地区类型 0:country,1:province,2:city,3:district',
  PRIMARY KEY (`area_id`),
  KEY `parent_id` (`school_id`),
  KEY `area_type` (`area_type`)
) ENGINE=MyISAM AUTO_INCREMENT=3430 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for m_member
-- ----------------------------
DROP TABLE IF EXISTS `m_member`;
CREATE TABLE `m_member` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mname` varchar(30) NOT NULL,
  `mgender` int(11) DEFAULT NULL,
  `mage` int(11) DEFAULT NULL,
  `mcollogeid` int(11) DEFAULT NULL,
  `mclassid` int(11) DEFAULT NULL,
  `mnumber` varchar(20) DEFAULT NULL,
  `mdetail` text,
  `mtel` varchar(32) DEFAULT NULL,
  `mcreate_date` datetime DEFAULT NULL,
  `mprojectid` int(11) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for m_project
-- ----------------------------
DROP TABLE IF EXISTS `m_project`;
CREATE TABLE `m_project` (
  `pid` int(32) NOT NULL AUTO_INCREMENT,
  `pname` text NOT NULL,
  `pimg1` varchar(255) DEFAULT NULL,
  `ptitle1` varchar(255) DEFAULT NULL,
  `pdescribe1` text,
  `pimg2` varchar(255) DEFAULT NULL,
  `ptitle2` varchar(255) DEFAULT NULL,
  `pdescribe2` text,
  `pimg3` varchar(255) DEFAULT NULL,
  `ptitle3` varchar(255) DEFAULT NULL,
  `pdescribe3` text,
  `pdes` text,
  `pcreatetime` datetime DEFAULT NULL,
  `isage` int(16) NOT NULL DEFAULT '0',
  `isgender` int(16) NOT NULL DEFAULT '0',
  `iscollege` int(16) NOT NULL DEFAULT '0',
  `isnumber` int(16) NOT NULL DEFAULT '0',
  `isdetail` int(16) NOT NULL DEFAULT '0',
  `istel` int(16) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for m_user
-- ----------------------------
DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user` (
  `uid` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- View structure for m_vmember
-- ----------------------------
DROP VIEW IF EXISTS `m_vmember`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `m_vmember` AS select `m_member`.`mid` AS `mid`,`m_member`.`mname` AS `mname`,(case `m_member`.`mgender` when 1 then '男' else '女' end) AS `msex`,`m_member`.`mage` AS `mage`,`m_colloge`.`colloge_name` AS `colloge_name`,`m_class`.`class_name` AS `class_name`,`m_member`.`mnumber` AS `mnumber`,`m_member`.`mcreate_date` AS `mcreate_date`,`m_member`.`mdetail` AS `mdetail`,`m_member`.`mtel` AS `mtel`,`m_member`.`mprojectid` AS `mprojectid` from ((`m_member` join `m_colloge` on((`m_member`.`mcollogeid` = `m_colloge`.`area_id`))) join `m_class` on((`m_member`.`mclassid` = `m_class`.`area_id`))) ; ;
