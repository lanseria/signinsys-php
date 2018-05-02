/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50718
Source Host           : localhost:3306
Source Database       : mm

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-10-25 12:05:30
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
  `mgender` int(11) DEFAULT '-1',
  `mage` int(11) DEFAULT '-1',
  `mcollogeid` int(11) DEFAULT '0',
  `mclassid` int(11) DEFAULT '0',
  `mnumber` varchar(20) DEFAULT '' COMMENT '无',
  `mdetail` text COMMENT '无',
  `mtel` varchar(32) DEFAULT '0',
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
  `pcreatetime` datetime NOT NULL,
  `pendtime` datetime NOT NULL,
  `pread` int(11) NOT NULL DEFAULT '0',
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
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `m_vmember` AS select `m_member`.`mid` AS `mid`,`m_member`.`mname` AS `mname`,(case `m_member`.`mgender` when 1 then '男' else '女' end) AS `msex`,`m_member`.`mage` AS `mage`,`m_colloge`.`colloge_name` AS `colloge_name`,`m_class`.`class_name` AS `class_name`,`m_member`.`mnumber` AS `mnumber`,`m_member`.`mcreate_date` AS `mcreate_date`,`m_member`.`mdetail` AS `mdetail`,`m_member`.`mtel` AS `mtel`,`m_member`.`mprojectid` AS `mprojectid`,`m_project`.`pname` AS `pname` from (((`m_member` left join `m_colloge` on((`m_member`.`mcollogeid` = `m_colloge`.`area_id`))) left join `m_class` on((`m_member`.`mclassid` = `m_class`.`area_id`))) left join `m_project` on((`m_member`.`mprojectid` = `m_project`.`pid`))) ;

-- ----------------------------
-- View structure for m_vproject
-- ----------------------------
DROP VIEW IF EXISTS `m_vproject`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `m_vproject` AS select `a`.`pid` AS `pid`,`a`.`pname` AS `pname`,`a`.`pimg1` AS `pimg1`,`a`.`ptitle1` AS `ptitle1`,`a`.`pdescribe1` AS `pdescribe1`,`a`.`pimg2` AS `pimg2`,`a`.`ptitle2` AS `ptitle2`,`a`.`pdescribe2` AS `pdescribe2`,`a`.`pimg3` AS `pimg3`,`a`.`ptitle3` AS `ptitle3`,`a`.`pdescribe3` AS `pdescribe3`,`a`.`pdes` AS `pdes`,`a`.`pcreatetime` AS `pcreatetime`,`a`.`pendtime` AS `pendtime`,`a`.`pread` AS `pread`,`a`.`isage` AS `isage`,`a`.`isgender` AS `isgender`,`a`.`iscollege` AS `iscollege`,`a`.`isnumber` AS `isnumber`,`a`.`isdetail` AS `isdetail`,`a`.`istel` AS `istel`,(select count(0) from `m_member` where (`m_member`.`mprojectid` = `a`.`pid`)) AS `penroll`,(unix_timestamp(`a`.`pendtime`) - unix_timestamp(now())) AS `pstatus` from `m_project` `a` order by `a`.`pcreatetime` desc ;
