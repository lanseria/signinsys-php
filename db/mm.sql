/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : mm

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-04-26 21:11:42
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
-- Records of m_class
-- ----------------------------
INSERT INTO `m_class` VALUES ('1', '2', '电子信息工程', '2');
INSERT INTO `m_class` VALUES ('2', '2', '计算机科学与技术专业（3G软件）', '2');
INSERT INTO `m_class` VALUES ('3', '2', '计算机科学与技术专业（嵌入式软件）', '2');
INSERT INTO `m_class` VALUES ('4', '2', '网络工程专业', '2');
INSERT INTO `m_class` VALUES ('5', '2', '软件工程专业', '2');
INSERT INTO `m_class` VALUES ('6', '2', '网络工程专业（运维与安全）', '2');
INSERT INTO `m_class` VALUES ('7', '2', '物联网工程专业', '2');
INSERT INTO `m_class` VALUES ('8', '2', '信息工程专业', '2');
INSERT INTO `m_class` VALUES ('9', '2', '网络工程专业（物联网技术）', '2');
INSERT INTO `m_class` VALUES ('10', '2', '通信工程专业', '2');
INSERT INTO `m_class` VALUES ('11', '2', '电子信息科学与技术专业', '2');
INSERT INTO `m_class` VALUES ('12', '2', '计算机科学与技术专业', '2');
INSERT INTO `m_class` VALUES ('13', '3', '烟草专业', '2');
INSERT INTO `m_class` VALUES ('14', '3', '生物工程专业', '2');
INSERT INTO `m_class` VALUES ('15', '3', '生物技术专业', '2');
INSERT INTO `m_class` VALUES ('16', '3', '食品质量与安全专业', '2');
INSERT INTO `m_class` VALUES ('17', '3', '食品科学与工程专业', '2');
INSERT INTO `m_class` VALUES ('18', '4', '材料物理专业', '2');
INSERT INTO `m_class` VALUES ('19', '4', '电子科学与技术专业', '2');
INSERT INTO `m_class` VALUES ('20', '5', '新能源材料与器件专业', '2');
INSERT INTO `m_class` VALUES ('21', '5', '化学专业', '2');
INSERT INTO `m_class` VALUES ('22', '5', '环境工程专业', '2');
INSERT INTO `m_class` VALUES ('23', '5', '应用化学专业', '2');
INSERT INTO `m_class` VALUES ('24', '5', '高分子材料与工程专业', '2');
INSERT INTO `m_class` VALUES ('25', '5', '化学工程与工艺专业（精细化工）', '2');
INSERT INTO `m_class` VALUES ('26', '6', '物流管理专业', '2');
INSERT INTO `m_class` VALUES ('27', '6', '国际经济与贸易专业', '2');
INSERT INTO `m_class` VALUES ('28', '6', '经济学专业', '2');
INSERT INTO `m_class` VALUES ('29', '6', '信息管理与信息系统专业', '2');
INSERT INTO `m_class` VALUES ('30', '6', '财务管理专业', '2');
INSERT INTO `m_class` VALUES ('31', '6', '会计学专业', '2');
INSERT INTO `m_class` VALUES ('32', '6', '市场营销专业', '2');
INSERT INTO `m_class` VALUES ('33', '6', '工商管理专业', '2');
INSERT INTO `m_class` VALUES ('34', '7', '软件工程专业（软件开发）', '2');
INSERT INTO `m_class` VALUES ('35', '7', '软件工程专业（移动互联网方向）', '2');
INSERT INTO `m_class` VALUES ('36', '7', '软件工程专业（会计）', '2');
INSERT INTO `m_class` VALUES ('37', '7', '软件工程专业（测试技术）', '2');
INSERT INTO `m_class` VALUES ('38', '7', '软件工程专业（Java技术）', '2');
INSERT INTO `m_class` VALUES ('39', '7', '软件技术专业（网络软件开发）', '2');
INSERT INTO `m_class` VALUES ('40', '7', '计算机应用技术专业（.Net技术）', '2');
INSERT INTO `m_class` VALUES ('41', '7', '软件技术专业（Java方向）', '2');
INSERT INTO `m_class` VALUES ('42', '7', '计算机网络技术专业（网页设计）', '2');
INSERT INTO `m_class` VALUES ('43', '8', '劳动与社会保障专业', '2');
INSERT INTO `m_class` VALUES ('44', '8', '公共事业管理专业', '2');
INSERT INTO `m_class` VALUES ('45', '8', '法学专业', '2');
INSERT INTO `m_class` VALUES ('46', '8', '社会工作专业', '2');
INSERT INTO `m_class` VALUES ('47', '9', '车辆工程专业', '2');
INSERT INTO `m_class` VALUES ('48', '9', '测控技术与仪器专业', '2');
INSERT INTO `m_class` VALUES ('49', '9', '机械设计制造及其自动化专业', '2');
INSERT INTO `m_class` VALUES ('50', '10', '智能电网信息工程专业', '2');
INSERT INTO `m_class` VALUES ('51', '10', '自动化专业', '2');
INSERT INTO `m_class` VALUES ('52', '10', '电气工程及其自动化专业', '2');
INSERT INTO `m_class` VALUES ('53', '11', '建筑环境与能源应用工程专业', '2');
INSERT INTO `m_class` VALUES ('54', '11', '建筑电气与智能化专业', '2');
INSERT INTO `m_class` VALUES ('55', '12', '过程装备与控制工程专业', '2');
INSERT INTO `m_class` VALUES ('56', '12', '能源与动力工程专业', '2');
INSERT INTO `m_class` VALUES ('57', '13', '服装设计与工程专业（理工类）', '2');
INSERT INTO `m_class` VALUES ('58', '13', '数字媒体艺术专业', '2');
INSERT INTO `m_class` VALUES ('59', '13', '绘画专业', '2');
INSERT INTO `m_class` VALUES ('60', '13', '环境设计专业', '2');
INSERT INTO `m_class` VALUES ('61', '13', '动画专业', '2');
INSERT INTO `m_class` VALUES ('62', '13', '服装与服饰设计专业', '2');
INSERT INTO `m_class` VALUES ('63', '13', '视觉传达设计专业', '2');
INSERT INTO `m_class` VALUES ('64', '13', '产品设计专业', '2');
INSERT INTO `m_class` VALUES ('65', '14', '信息工程专业（中外合作办学）', '2');
INSERT INTO `m_class` VALUES ('66', '14', '电气工程及其自动化专业（中外合作办学）', '2');
INSERT INTO `m_class` VALUES ('67', '14', '计算机科学与技术专业（中外合作办学）', '2');
INSERT INTO `m_class` VALUES ('68', '14', '电子商务专业（中外合作办学）', '2');
INSERT INTO `m_class` VALUES ('69', '14', '国际经济与贸易专业（中外合作办学）', '2');
INSERT INTO `m_class` VALUES ('70', '14', '数字媒体艺术专业（中外合作办学）', '2');
INSERT INTO `m_class` VALUES ('71', '14', '环境设计专业（中外合作办学）', '2');
INSERT INTO `m_class` VALUES ('72', '14', '产品设计专业（中外合作办学）', '2');
INSERT INTO `m_class` VALUES ('73', '15', '汉语国际教育专业', '2');
INSERT INTO `m_class` VALUES ('74', '15', '朝鲜语专业', '2');
INSERT INTO `m_class` VALUES ('75', '15', '英语专业\r\n', '2');
INSERT INTO `m_class` VALUES ('76', '16', '数学与应用数学专业', '2');
INSERT INTO `m_class` VALUES ('77', '16', '信息与计算科学专业', '2');

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
-- Records of m_colloge
-- ----------------------------
INSERT INTO `m_colloge` VALUES ('1', '0', '郑州轻工业学院', '0');
INSERT INTO `m_colloge` VALUES ('2', '1', '计算机与通信工程学院', '1');
INSERT INTO `m_colloge` VALUES ('3', '1', '食品与生物工程学院', '1');
INSERT INTO `m_colloge` VALUES ('4', '1', '物理与电子工程学院', '1');
INSERT INTO `m_colloge` VALUES ('5', '1', '材料与化学工程学院', '1');
INSERT INTO `m_colloge` VALUES ('6', '1', '经济与管理学院', '1');
INSERT INTO `m_colloge` VALUES ('7', '1', '软件学院', '1');
INSERT INTO `m_colloge` VALUES ('8', '1', '政法学院', '1');
INSERT INTO `m_colloge` VALUES ('9', '1', '机电工程学院', '1');
INSERT INTO `m_colloge` VALUES ('10', '1', '电气信息工程学院', '1');
INSERT INTO `m_colloge` VALUES ('11', '1', '建筑环境工程学院', '1');
INSERT INTO `m_colloge` VALUES ('12', '1', '能源与动力工程学院', '1');
INSERT INTO `m_colloge` VALUES ('13', '1', '艺术设计学院', '1');
INSERT INTO `m_colloge` VALUES ('14', '1', '国际教育学院', '1');
INSERT INTO `m_colloge` VALUES ('15', '1', '外国语学院', '1');
INSERT INTO `m_colloge` VALUES ('16', '1', '数学与信息科学学院', '1');

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
-- Records of m_member
-- ----------------------------
INSERT INTO `m_member` VALUES ('9', '赵端阳', '0', '17', '2', '3', '541513430254', '', '13283830343', '2016-03-24 23:28:21', '1');
INSERT INTO `m_member` VALUES ('10', '关钦立', '1', '19', '2', '3', '541513430208', 'JAVA', '13523064817', '2016-03-24 23:30:46', '1');
INSERT INTO `m_member` VALUES ('14', '刘杨', '0', '20', '2', '2', '541513140124', '', '15839480611', '2016-03-24 23:35:34', '1');
INSERT INTO `m_member` VALUES ('17', '曾慧慧', '0', '19', '2', '12', '541407010102', '', '15837130212', '2016-03-24 23:40:45', '1');
INSERT INTO `m_member` VALUES ('18', '刘天成', '1', '19', '2', '1', '541523030126', 'JAVA', '18203615055', '2016-03-24 23:49:02', '1');
INSERT INTO `m_member` VALUES ('19', '赖美玲', '0', '21', '8', '46', '541509020111', 'PHP', '15824856050', '2016-03-24 23:54:20', '1');
INSERT INTO `m_member` VALUES ('20', '吕银鹏', '1', '20', '2', '11', '541407020123', '', '18237161524', '2016-03-24 23:59:30', '1');
INSERT INTO `m_member` VALUES ('21', '吕银鹏', '1', '20', '2', '11', '541407020123', 'PHP', '18237161524', '2016-03-25 00:00:34', '1');
INSERT INTO `m_member` VALUES ('24', '范宝', '1', '21', '2', '6', '541507110107', '', '15993167001', '2016-03-25 00:11:03', '1');
INSERT INTO `m_member` VALUES ('25', '吕硕', '1', '19', '2', '7', '541507090122', '对技术的热爱是炽热的，喜欢技术性的问题和技术层面的知识。计算机，网络，网站都非常感兴趣 ！', '18538508603', '2016-03-25 07:05:23', '1');
INSERT INTO `m_member` VALUES ('26', '丁麒轩', '1', '19', '2', '8', '541507070105', 'C#', '17607360276', '2016-03-25 07:25:09', '1');
INSERT INTO `m_member` VALUES ('27', '吕鹏', '1', '20', '2', '8', '541507070127', 'JAVA', '18838209893', '2016-03-25 07:49:56', '1');
INSERT INTO `m_member` VALUES ('28', '谢为', '1', '18', '2', '5', '541507120146', 'java', '13575231170', '2016-03-25 08:50:55', '1');
INSERT INTO `m_member` VALUES ('29', '甘小彬', '1', '20', '2', '5', '541507120109', 'java', '18716805329', '2016-03-25 08:53:12', '1');
INSERT INTO `m_member` VALUES ('30', '孙晨宇', '1', '18', '2', '12', '37', '学习技术，勇闯未来', '18510358558', '2016-03-25 09:20:11', '1');
INSERT INTO `m_member` VALUES ('32', '石金浩', '1', '19', '7', '35', '541513250227', '我是一个活泼胆大，勇于创新的男生。我的专业方向是java', '13213599526', '2016-03-25 09:24:57', '1');
INSERT INTO `m_member` VALUES ('33', '张木森', '1', '21', '2', '1', '541523030150', '喜欢编程', '13276903349', '2016-03-25 10:30:27', '1');
INSERT INTO `m_member` VALUES ('34', '杨金朋', '1', '20', '2', '5', '541510020142', '我想报  C#', '15713862215', '2016-03-25 10:37:59', '1');
INSERT INTO `m_member` VALUES ('36', '黄祥', '1', '19', '2', '1', '541523030216', '', '18736010173', '2016-03-25 10:54:15', '1');
INSERT INTO `m_member` VALUES ('43', '郑凯', '1', '21', '2', '5', '541407120158', 'java', '18838964407', '2016-03-25 11:16:51', '1');
INSERT INTO `m_member` VALUES ('44', '张云飞', '1', '21', '2', '5', '541507120158', '', '15824855868', '2016-03-25 11:21:10', '1');

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
-- Records of m_project
-- ----------------------------
INSERT INTO `m_project` VALUES ('1', '技术部方向确认', '2016-03-25/56f4b95b7f8d2.jpg', 'PHP', 'PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）是一种通用开源脚本语言。语法吸收了C语言、Java和Perl的特点，利于学习，使用广泛，主要适用于Web开...', '2016-03-25/56f4b95b7fce1.jpg', '.NET', '.NET是 Microsoft XML Web services 平台。XML Web services 允许应用程序通过 Internet 进行通讯和共享数据，而不管所采用的是哪种操作系统、设备或编程语言。Microsoft .NET 平台提供创建 XML Web services 并将这些服务集成在一起之所需...', '2016-03-25/56f4b95b7fef8.png', 'JAVA', 'Java是一种可以撰写跨平台应用程序的面向对象的程序设计语言。Java 技术具有卓越的通用性、高效性、平台移植性和安全性，广泛应用于PC、数据中心、游戏控制台、科学超级计算机...', '技术部方向确认,请在个人信息里填入方向：PHP，.Net，Java', '2016-04-04 21:59:27', '2016-04-29 00:00:00', '6', '1', '1', '1', '1', '1', '1');

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
-- Records of m_user
-- ----------------------------
INSERT INTO `m_user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- View structure for m_vmember
-- ----------------------------
DROP VIEW IF EXISTS `m_vmember`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `m_vmember` AS SELECT
	`m_member`.`mid` AS `mid`,
	`m_member`.`mname` AS `mname`,
	(
		CASE `m_member`.`mgender`
		WHEN 1 THEN
			'男'
		ELSE
			'女'
		END
	) AS `msex`,
	`m_member`.`mage` AS `mage`,
	`m_colloge`.`colloge_name` AS `colloge_name`,
	`m_class`.`class_name` AS `class_name`,
	`m_member`.`mnumber` AS `mnumber`,
	`m_member`.`mcreate_date` AS `mcreate_date`,
	`m_member`.`mdetail` AS `mdetail`,
	`m_member`.`mtel` AS `mtel`,
	`m_member`.`mprojectid` AS `mprojectid`,
	`m_project`.`pname` AS `pname`
FROM
	(
		`m_member`
		LEFT JOIN `m_colloge` ON (
			(
				`m_member`.`mcollogeid` = `m_colloge`.`area_id`
			)
		)
		LEFT JOIN `m_class` ON (
			(
				`m_member`.`mclassid` = `m_class`.`area_id`
			)
		)
		LEFT JOIN `m_project` ON (
			(
				`m_member`.`mprojectid` = `m_project`.`pid`
			)
		)
	) ;

-- ----------------------------
-- View structure for m_vproject
-- ----------------------------
DROP VIEW IF EXISTS `m_vproject`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `m_vproject` AS SELECT
	a.*, (
		SELECT
			COUNT(*)
		FROM
			m_member
		WHERE
			mprojectid = a.pid
	) AS penroll,
	(
		UNIX_TIMESTAMP(a.pendtime) - UNIX_TIMESTAMP(NOW())
	) AS pstatus
FROM
	m_project AS a
ORDER BY
	a.pcreatetime DESC ;
